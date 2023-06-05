<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator;
use JsonLDForWP\Tools\EntitiesGenerator\Classes\Entities\EnumEntity;
use JsonLDForWP\Tools\EntitiesGenerator\Classes\Generators\FileContentGenerator;
use JsonLDForWP\Tools\EntitiesGenerator\Classes\Entities\ThingEntity;
use JsonLDForWP\Tools\EntitiesGenerator\Classes\Generators\FileSystemGenerator;
use JsonLDForWP\Tools\EntitiesGenerator\Helpers\BrowserClientHelper;
use JsonLDForWP\Tools\EntitiesGenerator\Helpers\ScriptHelper;

final class Generator{    

    public static function generate():void{
        echo "Generation started\n";
        $entities = self::getEntities();
        self::generateEntities($entities);
        echo "Done!\n";
    }

    private static function getEntities():array{
        echo "Gathering entities\n";
        BrowserClientHelper::loadAndWait(Constants::SCHEMA_ORG_ENTITIES_LIST_URL, '#tree1');
        $entities_as_array = ScriptHelper::executeScriptFromFile('entities_list_scraper');
        return self::rawArrayToEntitiesArray($entities_as_array);        
    }

    private static function generateEntities(array $entities):void{
        foreach(array_chunk($entities, 100) as $entities_chunk){
            foreach($entities_chunk as $entity){
                $content = FileContentGenerator::getGeneratorFor($entity)->generateContent();
                (new FileSystemGenerator($entity, $content))->generate();
            }
        }
    }

    private static function rawArrayToEntitiesArray(array $entities_as_array):array{
        $entities = [];

        foreach($entities_as_array as $n_entity => $entity_as_array) {
            echo "[".($n_entity+1)."/".count($entities_as_array)."] > Scraping {$entity_as_array['link']}\n";
            BrowserClientHelper::loadAndWait($entity_as_array['link'], '#mainContent');
            $implementations_count = ScriptHelper::executeScriptFromFile('implementations_counter');
            for($i=0; $i < $implementations_count; $i++) {
                if($implementations_count > 1) echo "  > iteration ".($i+1)."\n";
                $entities[] = $entity_as_array['isEnum'] ? new EnumEntity($entity_as_array['link'], $i) : new ThingEntity($entity_as_array['link'], $i, $entity_as_array['isLeaf']);
            }
        }

        return $entities;
    }

}

require_once(__DIR__.'/bootstrap.php');
