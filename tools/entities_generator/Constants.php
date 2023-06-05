<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator;

final class Constants{
    public const SCHEMA_ORG_ENTITIES_LIST_URL = 'https://schema.org/docs/full.html';
    public const SCHEMA_ORG_DOMAIN = 'https://schema.org';
    public const DEFAULT_ENTITY_NAMESPACE_PREFIX = 'JsonLDForWP\\Plugin\\Classes\\Entities';
    public const DEFAULT_TRAIT_NAMESPACE_PREFIX = 'JsonLDForWP\\Plugin\\Traits\\Entities';
    public const DEFAULT_TRAITS = ["HasNoWarnings", "HasNoMessages"];
    public const DEFAULT_PROPERTY_VISIBILITY = 'protected';
    public const DEFAULT_GENERATION_PATH = __DIR__."/../plugin/Classes/Entities";
}