<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Energy;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Mass;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class NutritionInformation extends StructuredValue{
	protected Energy|null $calories = null;
	protected Mass|null $carbohydrateContent = null;
	protected Mass|null $cholesterolContent = null;
	protected Mass|null $fatContent = null;
	protected Mass|null $fiberContent = null;
	protected Mass|null $proteinContent = null;
	protected Mass|null $saturatedFatContent = null;
	protected string|null $servingSize = null;
	protected Mass|null $sodiumContent = null;
	protected Mass|null $sugarContent = null;
	protected Mass|null $transFatContent = null;
	protected Mass|null $unsaturatedFatContent = null;
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
		return __("Nutritional information about the recipe.", 'jsonld-for-wordpress');
	}
}