<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Audiences\PeopleAudiences;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Audiences\PeopleAudience;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalCondition;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\GenderType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeArea;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class ParentAudience extends PeopleAudience{
	protected float|null $childMaxAge = null;
	protected float|null $childMinAge = null;
	protected MedicalCondition|null $healthCondition = null;
	protected string|null $requiredGender = null;
	protected int|null $requiredMaxAge = null;
	protected int|null $requiredMinAge = null;
	protected QuantitativeValue|null $suggestedAge = null;
	protected GenderType|string|null $suggestedGender = null;
	protected float|null $suggestedMaxAge = null;
	protected QuantitativeValue|null $suggestedMeasurement = null;
	protected float|null $suggestedMinAge = null;
	protected string|null $audienceType = null;
	protected AdministrativeArea|null $geographicArea = null;
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
		return __("A set of characteristics describing parents, who can be interested in viewing some content.", 'jsonld-for-wordpress');
	}
}