<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator\Classes\Generators;

use JsonLDForWP\Tools\EntitiesGenerator\Classes\Entities\ThingEntity;
use JsonLDForWP\Tools\EntitiesGenerator\Classes\Entity;
use JsonLDForWP\Tools\EntitiesGenerator\Classes\Generators\ContentGenerators\EnumEntityGenerator;
use JsonLDForWP\Tools\EntitiesGenerator\Classes\Generators\ContentGenerators\ThingEntityGenerator;

class FileContentGenerator{
    protected string $content = "";

    public static function getGeneratorFor(Entity $entity): self{
        return $entity instanceof ThingEntity ? new ThingEntityGenerator($entity) : new EnumEntityGenerator($entity);
    }

    protected function addToContent(string $new_content, int $new_lines = 1, int $tabs = 0): void{
        $this->content .= str_repeat("\t", $tabs);
        $this->content .= $new_content;
        $this->content .= str_repeat("\n", $new_lines);
    }

    protected function generatePackageDocBlock(): void{
        $this->addToContent("/**");
        $this->addToContent("* @package JsonLDForWP");
        $this->addToContent("*/");
    }

    protected function generateDescriptionMethod():void{
        $this->addToContent("public function description():string {", tabs: 1);
        $this->addToContent("return __(\"{$this->entity->getDescription()}\", 'jsonld-for-wordpress');", tabs: 2);
        $this->addToContent("}", tabs: 1);
    }

    protected function generateNamespace():void{
        $this->addToContent("namespace {$this->entity->getNamespace()};", new_lines: 2);        
    }

}