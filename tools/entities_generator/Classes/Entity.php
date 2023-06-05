<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator\Classes;

use JsonLDForWP\Tools\EntitiesGenerator\Constants;
use JsonLDForWP\Tools\EntitiesGenerator\Helpers\ScriptHelper;
use JsonLDForWP\Tools\EntitiesGenerator\NamespacesCache;

abstract class Entity{

	protected final const RESTRICTED_WORDS = ['Class', '3DModel'];

    protected array $hierarchy;
    protected string $description;
    protected string $name;

	public function __construct(
		protected string $link,
		protected int $iteration_index
	){
		$name = str_replace(Constants::SCHEMA_ORG_DOMAIN."/", '', $link);
		if(in_array($name, self::RESTRICTED_WORDS)) $name = "_{$name}";

		$this->name = $name;
		$this->hierarchy = $this->scrapHierarchy();
		$this->description = $this->scrapDescription();
	}

    public function getName():string {
		return $this->name;
	}

    public function getNamespace():string {
		global $inflector;
		$namespace = Constants::DEFAULT_ENTITY_NAMESPACE_PREFIX;
		if(count($this->hierarchy) === 1) return $namespace;
		$namespace .= "\\".implode("\\",array_map(fn($hierarchy_part) => $inflector->pluralize($hierarchy_part), array_slice($this->hierarchy, 0, -1))); 
		NamespacesCache::add($this->getName(), "{$namespace}\\{$this->getName()}");
		return $namespace;
	}

	public function getHierarchy():array {
		return $this->hierarchy;
	}
	
    public function getDescription():string {
		return $this->description;
	}

	protected function scrapHierarchy():array{
		ScriptHelper::executeScriptFromFile('add_new_hierarchy_class');
		return ScriptHelper::executeScriptFromFile('hierarchies_scraper')[$this->iteration_index];
	}
	
	protected function scrapDescription():string{
		return ScriptHelper::executeScriptFromFile('description_scraper');
	}

}