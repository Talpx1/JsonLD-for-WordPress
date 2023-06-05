<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValue;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class CDCPMDRecord extends StructuredValue{
	protected DateTime|string|null $cvdCollectionDate = null;
	protected string|null $cvdFacilityCounty = null;
	protected string|null $cvdFacilityId = null;
	protected float|null $cvdNumBeds = null;
	protected float|null $cvdNumBedsOcc = null;
	protected float|null $cvdNumC19Died = null;
	protected float|null $cvdNumC19HOPats = null;
	protected float|null $cvdNumC19HospPats = null;
	protected float|null $cvdNumC19MechVentPats = null;
	protected float|null $cvdNumC19OFMechVentPats = null;
	protected float|null $cvdNumC19OverflowPats = null;
	protected float|null $cvdNumICUBeds = null;
	protected float|null $cvdNumICUBedsOcc = null;
	protected float|null $cvdNumTotBeds = null;
	protected float|null $cvdNumVent = null;
	protected float|null $cvdNumVentUse = null;
	protected Date|DateTime|null $datePosted = null;
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
		return __("A CDCPMDRecord is a data structure representing a record in a CDC tabular data format\n      used for hospital data reporting. See documentation for details, and the linked CDC materials for authoritative\n      definitions used as the source here.", 'jsonld-for-wordpress');
	}
}