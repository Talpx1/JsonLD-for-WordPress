<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValues;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Property;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ConstraintNodes\StatisticalVariable;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MeasurementMethodEnum;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValue;
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
class Observation extends QuantitativeValue{
	protected QuantitativeValue|null $marginOfError = null;
	protected Property|null $measuredProperty = null;
	protected StatisticalVariable|null $measurementDenominator = null;
	protected DefinedTerm|MeasurementMethodEnum|string|null $measurementMethod = null;
	protected Enumeration|null $measurementQualifier = null;
	protected DefinedTerm|MeasurementMethodEnum|string|null $measurementTechnique = null;
	protected Place|Thing|null $observationAbout = null;
	protected DateTime|null $observationDate = null;
	protected string|null $observationPeriod = null;
	protected Property|PropertyValue|StatisticalVariable|string|null $variableMeasured = null;
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
		return __("Instances of the class Observation are used to specify observations about an entity at a particular time. The principal properties of an Observation are observationAbout, measuredProperty, statType, [[value] and observationDate  and measuredProperty. Some but not all Observations represent a QuantitativeValue. Quantitative observations can be about a StatisticalVariable, which is an abstract specification about which we can make observations that are grounded at a particular location and time. \n\nObservations can also encode a subset of simple RDF-like statements (its observationAbout, a StatisticalVariable, defining the measuredPoperty; its observationAbout property indicating the entity the statement is about, and value )\n\nIn the context of a quantitative knowledge graph, typical properties could include measuredProperty, observationAbout, observationDate, value, unitCode, unitText, measurementMethod.", 'jsonld-for-wordpress');
	}
}