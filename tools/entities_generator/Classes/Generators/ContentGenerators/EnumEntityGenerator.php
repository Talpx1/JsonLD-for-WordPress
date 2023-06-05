<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator\Classes\Generators\ContentGenerators;

use JsonLDForWP\Tools\EntitiesGenerator\Classes\Entities\EnumEntity;
use JsonLDForWP\Tools\EntitiesGenerator\Classes\Generators\FileContentGenerator;

final class EnumEntityGenerator extends FileContentGenerator{

    public function __construct(protected EnumEntity $entity){}

    public function generateContent():string{       
        $this->addToContent("<?php declare(strict_types=1);", new_lines: 2);
        $this->generateNamespace();
        $this->generatePackageDocBlock();
        $this->generateEnumSignature();      
        $this->generateCases();      
        $this->generateDescriptionMethod();     
        $this->addToContent("}", new_lines: 0);
        
        return $this->content;
    }

    private function generateEnumSignature():void{
        $this->addToContent("enum {$this->entity->getName()}{");
    }

    private function generateCases():void{
        foreach($this->entity->getCases() as $case){
            $this->addToContent($case, tabs:1);
        }
        $this->addToContent("", new_lines:1);
    }
}