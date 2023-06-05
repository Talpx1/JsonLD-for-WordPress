<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator\Classes\Entities;

use JsonLDForWP\Tools\EntitiesGenerator\Classes\Entity;
use JsonLDForWP\Tools\EntitiesGenerator\Constants;
use JsonLDForWP\Tools\EntitiesGenerator\Helpers\BrowserClientHelper;
use JsonLDForWP\Tools\EntitiesGenerator\Helpers\ScriptHelper;
use JsonLDForWP\Tools\EntitiesGenerator\NamespacesCache;
use JsonLDForWP\Tools\EntitiesGenerator\Selectors;
use Symfony\Component\Panther\DomCrawler\Crawler;

final class ThingEntity extends Entity{
  private const TYPE_REPLACEMENTS = ["Text"=>'string', "URL"=>'string', "Number"=>'float', "Float"=>'float', "Integer"=>'int', "Boolean"=>'bool'];  

  private array $used_namespaces;
  private ?string $extended_class_name;
  private array $properties;
  private array $used_traits;
  private array $aliased_types = [];

  public function __construct(
    string $link,
    int $iteration_index,
    private bool $is_leaf,        
  ){        
    parent::__construct($link, $iteration_index);
    $this->used_traits = Constants::DEFAULT_TRAITS;
    $this->extended_class_name = $this->findExtendedClassName();
    $this->used_namespaces = $this->scrapUsedNamespaces();
    $this->properties = $this->scrapProperties();
  }

  public function isLeaf():bool {
		return $this->is_leaf;
	}

  public function getUsedNamespaces():array {
		return $this->used_namespaces;
	}

  public function getExtendedClassName():string {
		return $this->extended_class_name;
	}

  public function getProperties():array {
		return $this->properties;
	}

  public function getUsedTraits():array {
		return $this->used_traits;
	}

  public function extendsClass():bool {
    return count($this->hierarchy) > 1;
  }

  private function findExtendedClassName():?string {
    if(!$this->extendsClass()) return null;

    $parent = array_slice($this->hierarchy, -2, 1)[0];
		return in_array($parent, self::RESTRICTED_WORDS) ? "_{$parent}" : $parent;
	}

  private function scrapUsedNamespaces():array {
    $namespaces = [];
    if($this->extendsClass()) $namespaces[] = $this->findExtendedClassNamespace();
    $namespaces = array_merge($namespaces, $this->scrapPropertiesTypesNamespaces());
    return $namespaces;
  }

  private function findExtendedClassNamespace():?string {
    if(!$this->extendsClass()) return null;
    
    $namespace = Constants::DEFAULT_ENTITY_NAMESPACE_PREFIX;
    
    $parent_hierarchy = array_slice($this->hierarchy, 0, -1);
    
    if(count($parent_hierarchy) === 1) {
      $full_namespace = in_array($parent_hierarchy[0], self::RESTRICTED_WORDS) ? "{$namespace}\\_{$parent_hierarchy[0]}" : "{$namespace}\\{$parent_hierarchy[0]}";
      NamespacesCache::add($this->extended_class_name, $full_namespace);
      return $full_namespace;
    }
    
    global $inflector;

    $parent_hierarchy_without_parent = array_slice($parent_hierarchy, 0, -1);
    foreach($parent_hierarchy_without_parent as $hierarchy_part){
      $namespace .= "\\{$inflector->pluralize($hierarchy_part)}";
    }

    $full_namespace = "{$namespace}\\{$this->getExtendedClassName()}";
    NamespacesCache::add($this->extended_class_name, $full_namespace);
    return $full_namespace;
  }

  private function scrapPropertiesTypesNamespaces():array {
    $type_names = array_unique(ScriptHelper::executeScriptFromFile('properties_types_scraper'));
    $namespaces = [];
    
    foreach($type_names as $type_name){
      if(in_array($type_name, array_keys(self::TYPE_REPLACEMENTS))) continue;
      if(in_array($type_name, self::RESTRICTED_WORDS)) $type_name = "_{$type_name}";
      if($this->extendsClass() && $type_name === $this->extended_class_name) continue;

      $full_own_namespace  = "{$this->getNamespace()}\\{$this->getName()}";
      if(NamespacesCache::has($type_name)) {
        $cached_namespaces = NamespacesCache::get($type_name);
        if(count($cached_namespaces) > 1){
          foreach($cached_namespaces as $cached_namespace){
            if($cached_namespace === $full_own_namespace) continue;
            $namespaces[] = $this->aliasNamespace($cached_namespace, $type_name, from_cache: true);
          }        
          continue;
        }        
        if($cached_namespaces[0] === $full_own_namespace) continue;
        $namespaces[] = $cached_namespaces[0];
        continue;
      }
      
      $url = Constants::SCHEMA_ORG_DOMAIN."/".str_replace('_', '',$type_name);
      BrowserClientHelper::loadAndWait($url, '#mainContent');

      $type_hierarchies = ScriptHelper::executeScriptFromFile('hierarchies_scraper');
      $need_aliasing = count($type_hierarchies) > 1;

      global $inflector;

      foreach($type_hierarchies as $i => $hierarchy){
        if(count($hierarchy) === 1) {
          $namespaces[] = Constants::DEFAULT_ENTITY_NAMESPACE_PREFIX."\\{$hierarchy[0]}";
          continue;
        }

        $curr_type_partial_namespace = implode("\\", array_merge(
          array_map(fn($hierarchy_part) => $inflector->pluralize($hierarchy_part), array_slice($hierarchy, 0, -1)),
          [$type_name]
        ));

        $namespace = Constants::DEFAULT_ENTITY_NAMESPACE_PREFIX."\\{$curr_type_partial_namespace}";

        if($need_aliasing) 
          $namespace = $this->aliasNamespace($namespace, $type_name, $i);
        else
          NamespacesCache::add($type_name, $namespace);

        if($namespace === $full_own_namespace) continue;
        $namespaces[] = $namespace;
      }
    }

    return $namespaces;
  }

  private function aliasNamespace(string $namespace, string $type_name, ?string $suffix = null, bool $from_cache = false):string{
    $suffix ??= uniqid();
    if(!$from_cache) NamespacesCache::add($type_name, $namespace);
    
    $alias = "{$type_name}_{$suffix}";
    $namespace .= " as {$alias}";
    $this->aliased_types[$type_name][] = $alias;

    return $namespace;
  }

  private function scrapProperties():array {
    global $client;   

    BrowserClientHelper::loadAndWait($this->link, "#mainContent");

    $props = [];    
    $client->getCrawler()->filter(Selectors::PROPERTY_ROWS_SELECTOR)->each(function(Crawler $prop_row) use (&$props){
      $prop_name = $prop_row->filter(Selectors::PROPERTY_NAME_A_TAG_USING_SCOPE)->getText();      
      $props[$prop_name] = [];

      $prop_row->filter(Selectors::PROPERTY_TYPES_A_TAG_USING_SCOPE)->each(function(Crawler $prop_type) use ($prop_name, &$props){      
        $type_name = $prop_type->getText();

        if(in_array($type_name, array_keys(self::TYPE_REPLACEMENTS))) {
          if(in_array(self::TYPE_REPLACEMENTS[$type_name], $props[$prop_name])) return;
          $props[$prop_name][] = self::TYPE_REPLACEMENTS[$type_name];
          return;
        }

        if(in_array($type_name, self::RESTRICTED_WORDS)) $type_name = "_{$type_name}";

        if(in_array($type_name, array_keys($this->aliased_types))) {
          foreach($this->aliased_types[$type_name] as $aliased_type){
            $props[$prop_name][] = $aliased_type;
          }
          return;
        }

        $props[$prop_name][] = $type_name;
      });        
    });

    return $props;
  }

}