<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValues\LocationFeatureSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\Accommodation;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class FloorPlan extends Intangible{
	protected LocationFeatureSpecification|null $amenityFeature = null;
	protected QuantitativeValue|null $floorSize = null;
	protected Accommodation|null $isPlanForApartment = null;
	protected ImageObject|string|null $layoutImage = null;
	protected QuantitativeValue|null $numberOfAccommodationUnits = null;
	protected QuantitativeValue|null $numberOfAvailableAccommodationUnits = null;
	protected int|null $numberOfBathroomsTotal = null;
	protected float|QuantitativeValue|null $numberOfBedrooms = null;
	protected float|null $numberOfFullBathrooms = null;
	protected float|null $numberOfPartialBathrooms = null;
	protected float|QuantitativeValue|null $numberOfRooms = null;
	protected bool|string|null $petsAllowed = null;
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
		return __("A FloorPlan is an explicit representation of a collection of similar accommodations, allowing the provision of common information (room counts, sizes, layout diagrams) and offers for rental or sale. In typical use, some ApartmentComplex has an accommodationFloorPlan which is a FloorPlan.  A FloorPlan is always in the context of a particular place, either a larger ApartmentComplex or a single Apartment. The visual/spatial aspects of a floor plan (i.e. room layout, see wikipedia) can be indicated using image.", 'jsonld-for-wordpress');
	}
}