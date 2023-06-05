<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\GeoShapes;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\GeoShape;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\GeoCoordinates;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Distance;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoints\PostalAddress;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeAreas\Country;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class GeoCircle extends GeoShape{
	protected GeoCoordinates|null $geoMidpoint = null;
	protected Distance|float|string|null $geoRadius = null;
	protected PostalAddress|string|null $address = null;
	protected Country|string|null $addressCountry = null;
	protected string|null $box = null;
	protected string|null $circle = null;
	protected float|string|null $elevation = null;
	protected string|null $line = null;
	protected string|null $polygon = null;
	protected string|null $postalCode = null;
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
		return __("A GeoCircle is a GeoShape representing a circular geographic area. As it is a GeoShape\n          it provides the simple textual property 'circle', but also allows the combination of postalCode alongside geoRadius.\n          The center of the circle can be indicated via the 'geoMidpoint' property, or more approximately using 'address', 'postalCode'.", 'jsonld-for-wordpress');
	}
}