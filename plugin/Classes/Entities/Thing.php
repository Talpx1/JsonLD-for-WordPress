<?php 

namespace JsonLDForWP\Plugin\Classes\Entities;

use ReflectionClass;
use ReflectionUnionType;
use JsonLDForWP\Plugin\Classes\Entities\Interfaces\WithWarnings;
use JsonLDForWP\Plugin\Classes\Entities\Interfaces\Entity;

class Thing implements Entity, WithWarnings{
    protected string|null $additionalType = null;
    protected string|null $alternateName = null;
    protected string|null $description = null;
    protected string|null $disambiguatingDescription = null;
    protected PropertyValue|string|null $identifier = null;
    protected ImageObject|string|null $image = null;
    protected CreativeWork|string|null $mainEntityOfPage = null;
    protected string|null $name = null;
    protected Action|null $potentialAction = null;
    protected string|null $sameAs = null;
    protected CreativeWork|Event|null $subjectOf = null;
    protected string|null $string = null;

    public function __construct(array $data) {
        foreach($data as $property => $value){
            $this->{$property} = $value;
        }
    }

    public function warnings(): array {
        return [
            __('This is a highly generic entity and should NEVER be used', 'jsonld-for-wordpress')
        ];
    }

    public function description(): string {
        return __('The most generic type of item.', 'jsonld-for-wordpress');
    }

    public function getFields(): array {
        $properties = (new ReflectionClass($this))->getProperties();
        $fields = [];
        foreach($properties as $property){
            $prop_type = $property->getType();
            if(is_a($prop_type, ReflectionUnionType::class)) {
                foreach($prop_type->getTypes() as $type) $fields[$property->getName()][] = $type->getName();
            } else $fields[$property->getName()][] = $prop_type->getName();
        }
        return $fields;
    }
}