<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Places\Accommodations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Places\Accommodation;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\FloorPlan;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValues\LocationFeatureSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\BedDetails;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\QualitativeValues\BedType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Duration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoints\PostalAddress;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Ratings\AggregateRating;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\GeoCoordinates;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\GeoShape;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\GeospatialGeometry;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Map;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\OpeningHoursSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Photograph;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Review;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;

/**
* @package JsonLDForWP
*/
class Apartment extends Accommodation{
	protected float|QuantitativeValue|null $numberOfRooms = null;
	protected QuantitativeValue|null $occupancy = null;
	protected string|null $accommodationCategory = null;
	protected FloorPlan|null $accommodationFloorPlan = null;
	protected LocationFeatureSpecification|null $amenityFeature = null;
	protected BedDetails|BedType|string|null $bed = null;
	protected string|null $floorLevel = null;
	protected QuantitativeValue|null $floorSize = null;
	protected Duration|QuantitativeValue|null $leaseLength = null;
	protected int|null $numberOfBathroomsTotal = null;
	protected float|QuantitativeValue|null $numberOfBedrooms = null;
	protected float|null $numberOfFullBathrooms = null;
	protected float|null $numberOfPartialBathrooms = null;
	protected string|null $permittedUsage = null;
	protected bool|string|null $petsAllowed = null;
	protected string|null $tourBookingPage = null;
	protected float|null $yearBuilt = null;
	protected PropertyValue|null $additionalProperty = null;
	protected PostalAddress|string|null $address = null;
	protected AggregateRating|null $aggregateRating = null;
	protected string|null $branchCode = null;
	protected Place|null $containedInPlace = null;
	protected Place|null $containsPlace = null;
	protected Event|null $event = null;
	protected string|null $faxNumber = null;
	protected GeoCoordinates|GeoShape|null $geo = null;
	protected GeospatialGeometry|Place|null $geoContains = null;
	protected GeospatialGeometry|Place|null $geoCoveredBy = null;
	protected GeospatialGeometry|Place|null $geoCovers = null;
	protected GeospatialGeometry|Place|null $geoCrosses = null;
	protected GeospatialGeometry|Place|null $geoDisjoint = null;
	protected GeospatialGeometry|Place|null $geoEquals = null;
	protected GeospatialGeometry|Place|null $geoIntersects = null;
	protected GeospatialGeometry|Place|null $geoOverlaps = null;
	protected GeospatialGeometry|Place|null $geoTouches = null;
	protected GeospatialGeometry|Place|null $geoWithin = null;
	protected string|null $globalLocationNumber = null;
	protected bool|null $hasDriveThroughService = null;
	protected Map|string|null $hasMap = null;
	protected bool|null $isAccessibleForFree = null;
	protected string|null $isicV4 = null;
	protected DefinedTerm|string|null $keywords = null;
	protected float|string|null $latitude = null;
	protected ImageObject|string|null $logo = null;
	protected float|string|null $longitude = null;
	protected int|null $maximumAttendeeCapacity = null;
	protected OpeningHoursSpecification|null $openingHoursSpecification = null;
	protected ImageObject|Photograph|null $photo = null;
	protected bool|null $publicAccess = null;
	protected Review|null $review = null;
	protected string|null $slogan = null;
	protected bool|null $smokingAllowed = null;
	protected OpeningHoursSpecification|null $specialOpeningHoursSpecification = null;
	protected string|null $telephone = null;
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
		return __("An apartment (in American English) or flat (in British English) is a self-contained housing unit (a type of residential real estate) that occupies only part of a building (source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Apartment).", 'jsonld-for-wordpress');
	}
}