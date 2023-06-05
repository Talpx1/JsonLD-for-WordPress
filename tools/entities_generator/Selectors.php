<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator;

class Selectors{
    public const PROPERTY_ROWS_SELECTOR = ".definition-table:first-of-type tbody .supertype:first-of-type ~ tr:not(.supertype):not(.not-to-consider)";
    public const PROPERTY_NAME_A_TAG_USING_SCOPE = ":scope th.prop-nam code a";
    public const PROPERTY_TYPES_A_TAG_USING_SCOPE = ":scope td.prop-ect a";
    public const PROPERTY_TYPES_A_TAG = self::PROPERTY_ROWS_SELECTOR." td.prop-ect a";
}