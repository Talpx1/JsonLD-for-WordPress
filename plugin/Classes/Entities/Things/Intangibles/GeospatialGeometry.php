<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class GeospatialGeometry extends Intangible{
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
		return __("(Eventually to be defined as) a supertype of GeoShape designed to accommodate definitions from Geo-Spatial best practices.", 'jsonld-for-wordpress');
	}
}