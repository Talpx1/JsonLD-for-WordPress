<?php declare(strict_types=1);

require __DIR__.'/../../vendor/autoload.php';

const HOME_URL='https://schema.org/docs/full.html';
const SCHEMA_ORG_DOMAIN='https://schema.org/';
const GENERATION_BASE_PATH = __DIR__."/TEST/Classes/Entities";

//creating browser client
$client = \Symfony\Component\Panther\Client::createFirefoxClient(__DIR__.'/../../drivers/geckodriver.exe');

//loading entity list
$client->request('GET', HOME_URL);
$crawler = $client->waitFor('#tree1');

//expanding hierarchy (otherwise text would not be accessible)
$crawler->filter(".dttTreeContainer .ddtOpenAll")->first()->click();

//generating links for all entities
$links = [];
$crawler->filter('#tree1 a.core')->each(function(\Symfony\Component\Panther\DomCrawler\Crawler $node) use (&$links){
    $links[] = SCHEMA_ORG_DOMAIN.$node->text();
});

//debug only - print the array of links
file_put_contents(__DIR__.'/links.txt', print_r($links,true));

//generating the folder structure and the entity classes
//FIXME: last lvl entities should not create own folder
foreach($links as $link){
    //loading entity page
    $client->request('GET', $link);
    $crawler = $client->waitFor('#mainContent');

    //getting entity hierarchy
    $paths = [];
    $hierarchyArray = $crawler->filter('div.superPaths a')->each(function($entity) use (&$paths){$paths[] = $entity->getText()."s";}); //adding an 's' to create the plural folder name (yea kinda sucks I know)

    //creating the directory
    $dir = $base_path.'/'.implode("/", $paths);
    if(!file_exists($dir) && !is_dir($dir) ) mkdir($dir, recursive: true);

    //creating the class file
    $fileName = rtrim(end($paths), 's').".php";
    $filePath = $dir."/".$fileName;
    if(!file_exists($filePath)) {
        $content = $client->executeScript(file_get_contents(__DIR__."/scherma_org_console_scraper.js")); //this script will scrap all the necessary data to create the class, it isn't perfect but it's good enough
        file_put_contents($filePath, $content);
    }
}