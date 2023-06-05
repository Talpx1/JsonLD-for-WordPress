<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MeasurementTypeEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\_Class;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Property;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class QualitativeValue extends Enumeration{
	protected PropertyValue|null $additionalProperty = null;
	protected QualitativeValue|null $equal = null;
	protected QualitativeValue|null $greater = null;
	protected QualitativeValue|null $greaterOrEqual = null;
	protected QualitativeValue|null $lesser = null;
	protected QualitativeValue|null $lesserOrEqual = null;
	protected QualitativeValue|null $nonEqual = null;
	protected DefinedTerm|Enumeration|MeasurementTypeEnumeration|PropertyValue|QualitativeValue|QuantitativeValue|StructuredValue|string|null $valueReference = null;
	protected _Class|Enumeration|Property|null $supersededBy = null;
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
		return __("A predefined value for a product characteristic, e.g. the power cord plug type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.", 'jsonld-for-wordpress');
	}
}