<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator\Classes\Generators\ContentGenerators;

use JsonLDForWP\Tools\EntitiesGenerator\Classes\Entities\ThingEntity;
use JsonLDForWP\Tools\EntitiesGenerator\Classes\Generators\FileContentGenerator;
use JsonLDForWP\Tools\EntitiesGenerator\Constants;

final class ThingEntityGenerator extends FileContentGenerator{

    public function __construct(protected ThingEntity $entity){}

    public function generateContent():string{
        $this->addToContent("<?php declare(strict_types=1);", new_lines: 2);
        $this->generateNamespace();  
        $this->generateUsedNamespaces();     
        $this->generatePackageDocBlock(); 
        $this->generateClassSignature();      
        $this->generateProperties();      
        $this->generateDescriptionMethod();
        
        if($this->entity->getName() === "Thing") $this->addThingOnlyMethods();
        
        $this->addToContent("}", new_lines: 0);

        return $this->content;
    }

    private function generateClassSignature():void{
        $signature = "class {$this->entity->getName()}";
        if($this->entity->extendsClass()) $signature .= " extends {$this->entity->getExtendedClassName()}";
        $signature .= "{";
        
        $this->addToContent($signature);
    }

    private function generateProperties():void{
        foreach($this->entity->getProperties() as $name => $types){
            $this->addToContent(Constants::DEFAULT_PROPERTY_VISIBILITY." ".implode("|", $types)."|null \${$name} = null;", tabs:1);
        }
        $this->addToContent("", new_lines:1);
    }

    private function generateUsedTraits():void{
        $this->addToContent("use ".implode(",", $this->entity->getUsedTraits()).";", new_lines:2, tabs: 1);
    }

    private function generateUsedNamespaces():void{
        foreach($this->entity->getUsedNamespaces() as $namespace) {
            $this->addToContent("use {$namespace};");
        }
        $this->addToContent("", new_lines:1);
    }

    private function addThingOnlyMethods():void{
        $this->addToContent("", new_lines:1);
        $this->addToContent(file_get_contents(__DIR__."/../../../templates/thing_only_methods.txt"));
    }

}