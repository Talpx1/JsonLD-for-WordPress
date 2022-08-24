<?php 

namespace Plugin\Classes\Entities;
use ReflectionClass;
use ReflectionUnionType;
use Plugin\Classes\Entities\Interfaces\WithMessages;
use Plugin\Classes\Entities\Interfaces\WithWarnings;

class Thing implements Entity, WithWarnings{
    protected URL|null $additionalType = null;
    protected Text|null $alternateName = null;
    protected Text|null $description = null;
    protected Text|null $disambiguatingDescription = null;
    protected PropertyValue|Text|URL|null $identifier = null;
    protected ImageObject|URL|null $image = null;
    protected CreativeWork|URL|null $mainEntityOfPage = null;
    protected Text|null $name = null;
    protected Action|null $potentialAction = null;
    protected URL|null $sameAs = null;
    protected CreativeWork|Event|null $subjectOf = null;
    protected URL|null $url = null;

    public function __construct(array $data, private string $description) {
        foreach($data as $property => $value){
            $this?->{$property} = $value;
        }
    }

    public function warnings(): array {
        return [
            __('This is a highly generic entity and should NEVER be used', 'jsonld-for-wordpress')
        ];
    }

    public function description(): string {
        return $this->description;
    }

    public function getFields(): array{
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