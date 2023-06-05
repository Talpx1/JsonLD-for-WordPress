<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\_Class;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class StatisticalPopulation extends Intangible{
	protected _Class|null $populationType = null;
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
		return __("A StatisticalPopulation is a set of instances of a certain given type that satisfy some set of constraints. The property populationType is used to specify the type. Any property that can be used on instances of that type can appear on the statistical population. For example, a StatisticalPopulation representing all Persons with a homeLocation of East Podunk California would be described by applying the appropriate homeLocation and populationType properties to a StatisticalPopulation item that stands for that set of people.\nThe properties numConstraints and constraintProperty are used to specify which of the populations properties are used to specify the population. Note that the sense of 'population' used here is the general sense of a statistical\npopulation, and does not imply that the population consists of people. For example, a populationType of Event or NewsArticle could be used. See also Observation, where a populationType such as Person or Event can be indicated directly. In most cases it may be better to use StatisticalVariable instead of StatisticalPopulation.", 'jsonld-for-wordpress');
	}
}