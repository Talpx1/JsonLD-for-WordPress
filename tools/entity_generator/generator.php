<?php declare(strict_types=1);

echo "Generation started...\n";
echo "Setup\n";

require __DIR__.'/../../vendor/autoload.php';

const HOME_URL='https://schema.org/docs/full.html';
const GENERATION_BASE_PATH = __DIR__."/TEST/Classes/Entities";

//creating inflector(can switch words from singular to plural an vice-versa)
$inflector = Doctrine\Inflector\InflectorFactory::create()->build();

//creating browser client
$client = \Symfony\Component\Panther\Client::createFirefoxClient(__DIR__.'/../../drivers/geckodriver.exe');

echo "loading entity list on web browser\n";
//loading entity list
$client->request('GET', HOME_URL);
$crawler = $client->waitFor('#tree1');

echo "gathering entities...\n";
/**
 * generating array containing all entities
 * @var array
 */
$entities = json_decode(
    $client->executeScript(
        file_get_contents(__DIR__."/entities_list_scraper.js")
    ),
    true
);

$entitiesCount = count($entities);
echo "found {$entitiesCount} entities...\n";

//debug only - print the array of entities
//file_put_contents(__DIR__.'/entities.txt', print_r($entities,true));

echo "classes/enums generation started\n";
//generating the folder structure and the entity classes
foreach($entities as $i => $entity){
    /**
     * @var $entity array{link: string, isLeaf: bool, isEnum:bool, enumValues: string[]}
     */
    echo "[".($i+1)."/{$entitiesCount}] Generating {$entity['link']}\n";
    //loading entity page
    $client->request('GET', $entity['link']);
    $crawler = $client->waitFor('#mainContent');

    //getting entity hierarchy
    $paths = [];
    $pathCounter = 0;
    $client->executeScript('document.querySelectorAll(".superPaths br").forEach(br=>br.previousElementSibling.classList.add("new-hierarchy"))');
    $crawler->filter('div.superPaths a')->each(function(Symfony\Component\Panther\DomCrawler\Crawler $entityNode) use (&$paths, $inflector, &$pathCounter){
        $paths[$pathCounter][] = $inflector->pluralize($entityNode->getText());
        if(str_contains($entityNode->getElement(0)->getAttribute("class"), 'new-hierarchy')) $pathCounter++;
    });

    if($pathCounter > 1) echo "\tThis entity is repeated {$pathCounter} times\n";

    //the same class may repeated in multiple folder structures, obviously the inherited class will change
    foreach($paths as $j => $pathArray){
        if($pathCounter > 1) echo "\t\tGenerating iteration ".($j+1)." of {$pathCounter}\n";
        //getting the entity name and formatting the path array if entity is leaf/enum
        $entityName =  $inflector->singularize(($entity['isLeaf'] || $entity['isEnum']) ? array_pop($pathArray) : end($pathArray));
        
        //creating the directory
        $dir = GENERATION_BASE_PATH.'/'.implode("/", $pathArray);
        if(!file_exists($dir) && !is_dir($dir) ) mkdir($dir, recursive: true);
        if(!$entity['isLeaf'] && !$entity['isEnum']) $dir .= '/..';
    
        //creating the class file
        $filePath = "{$dir}/{$entityName}.php";
        if(!file_exists($filePath)) {
            $scraper = $entity['isEnum'] ? "/enum_scraper.js" : "/entity_scraper.js";
            $content = $client->executeScript(file_get_contents(__DIR__.$scraper)); //this script will scrap all the necessary data to create the class/enum, it isn't perfect but it's good enough
            file_put_contents($filePath, $content);
        }
    }
}
echo "Done!\n";