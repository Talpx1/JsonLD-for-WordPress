<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator\Classes\Generators;

use JsonLDForWP\Tools\EntitiesGenerator\Classes\Entity;
use JsonLDForWP\Tools\EntitiesGenerator\Classes\ThingEntity;
use JsonLDForWP\Tools\EntitiesGenerator\Constants;

final class FileSystemGenerator{

    private string $dir;

    public function __construct(private Entity $entity, private string $content){
        $this->dir = $this->hierarchyToDir();
    }

    public function generate():void{
        $this->generateDir();
        $this->generateFile();
    }

    private function hierarchyToDir(): string{
        $dir = Constants::DEFAULT_GENERATION_PATH;

        $hierarchy = $this->entity->getHierarchy();

        if(count($hierarchy) === 1) return $dir;

        global $inflector;

        $dir .= "/".implode("/", array_map(fn($hierarchy_part) => $inflector->pluralize($hierarchy_part), array_slice($hierarchy, 0, -1)));

        return $dir;
    }

    private function generateDir():void{
        if(!file_exists($this->dir) && !is_dir($this->dir) ) mkdir($this->dir, recursive: true);        
    }

    private function generateFile():void{
        $file_path = "{$this->dir}/{$this->entity->getName()}.php";

        if(file_exists($file_path)) return;

        file_put_contents($file_path, $this->content);
    }
}