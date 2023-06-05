<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MeasurementTypeEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\QualitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class QuantitativeValue extends StructuredValue{
	protected PropertyValue|null $additionalProperty = null;
	protected float|null $maxValue = null;
	protected float|null $minValue = null;
	protected string|null $unitCode = null;
	protected string|null $unitText = null;
	protected bool|float|StructuredValue|string|null $value = null;
	protected DefinedTerm|Enumeration|MeasurementTypeEnumeration|PropertyValue|QualitativeValue|QuantitativeValue|StructuredValue|string|null $valueReference = null;
	protected string|null $additionalType = null;
	protected string|null $alternateName = null;
	protected string|TextObject|null $description = null;
	protected string|null $disambiguatingDescription = null;
	protected PropertyValue|string|null $identifier = null;
	protected ImageObject|string|null $image = null;
	protected CreativeWork|string|null $mainEntityOfPage = null;
	protected string|null $name = null;
	protected Action|null $potentialAction = null;
	protected string|null $sameAs = null;
	protected CreativeWork|Event|null $subjectOf = null;
	protected string|null $url = null;

	public function description():string {
		return __("A point value or interval for product characteristics and other purposes.", 'jsonld-for-wordpress');
	}
}