<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoint;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\HealthPlanFormulary;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\HealthPlanNetwork;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class HealthInsurancePlan extends Intangible{
	protected string|null $benefitsSummaryUrl = null;
	protected ContactPoint|null $contactPoint = null;
	protected string|null $healthPlanDrugOption = null;
	protected string|null $healthPlanDrugTier = null;
	protected string|null $healthPlanId = null;
	protected string|null $healthPlanMarketingUrl = null;
	protected HealthPlanFormulary|null $includesHealthPlanFormulary = null;
	protected HealthPlanNetwork|null $includesHealthPlanNetwork = null;
	protected string|null $usesHealthPlanIdStandard = null;
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
		return __("A US-style health insurance plan, including PPOs, EPOs, and HMOs.", 'jsonld-for-wordpress');
	}
}