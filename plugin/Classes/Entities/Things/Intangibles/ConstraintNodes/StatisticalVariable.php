<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ConstraintNodes;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ConstraintNode;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Property;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MeasurementMethodEnum;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;
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
class StatisticalVariable extends ConstraintNode{
	protected Property|null $measuredProperty = null;
	protected StatisticalVariable|null $measurementDenominator = null;
	protected DefinedTerm|MeasurementMethodEnum|string|null $measurementMethod = null;
	protected Enumeration|null $measurementQualifier = null;
	protected DefinedTerm|MeasurementMethodEnum|string|null $measurementTechnique = null;
	protected _Class|null $populationType = null;
	protected Property|string|null $statType = null;
	protected Property|string|null $constraintProperty = null;
	protected int|null $numConstraints = null;
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
		return __("StatisticalVariable represents any type of statistical metric that can be measured at a place and time. The usage pattern for StatisticalVariable is typically expressed using Observation with an explicit populationType, which is a type, typically drawn from Schema.org. Each StatisticalVariable is marked as a ConstraintNode, meaning that some properties (those listed using constraintProperty) serve in this setting solely to define the statistical variable rather than literally describe a specific person, place or thing. For example, a StatisticalVariable MedianHeightPerson_Female representing the median height of women, could be written as follows: the population type is Person; the measuredProperty height; the statType median; the gender Female. It is important to note that there are many kinds of scientific quantitative observation which are not fully, perfectly or unambiguously described following this pattern, or with solely Schema.org terminology. The approach taken here is designed to allow partial, incremental or minimal description of StatisticalVariables, and the use of detailed sets of entity and property IDs from external repositories. The measurementMethod, unitCode and unitText properties can also be used to clarify the specific nature and notation of an observed measurement.", 'jsonld-for-wordpress');
	}
}