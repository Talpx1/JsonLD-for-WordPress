<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator\Classes\Entities;

use JsonLDForWP\Tools\EntitiesGenerator\Classes\Entity;
use JsonLDForWP\Tools\EntitiesGenerator\Helpers\ScriptHelper;

final class EnumEntity extends Entity{
    private array $cases;

    public function __construct(
        string $link,
        int $iteration_index     
    ){        
        parent::__construct($link, $iteration_index);
        $this->cases = $this->scrapCases();        
    }    

    private function scrapCases():array {
		return ScriptHelper::executeScriptFromFile('enum_cases_scraper');
	}

    public function getCases():array {
		return $this->cases;
	}
}