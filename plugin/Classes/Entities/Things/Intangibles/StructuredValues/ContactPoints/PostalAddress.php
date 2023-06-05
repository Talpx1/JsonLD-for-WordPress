<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoints;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoint;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeAreas\Country;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeArea;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\GeoShape;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Language;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\ContactPointOption;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\OpeningHoursSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\Product;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class PostalAddress extends ContactPoint{
	protected Country|string|null $addressCountry = null;
	protected string|null $addressLocality = null;
	protected string|null $addressRegion = null;
	protected string|null $postOfficeBoxNumber = null;
	protected string|null $postalCode = null;
	protected string|null $streetAddress = null;
	protected AdministrativeArea|GeoShape|Place|string|null $areaServed = null;
	protected Language|string|null $availableLanguage = null;
	protected ContactPointOption|null $contactOption = null;
	protected string|null $contactType = null;
	protected string|null $email = null;
	protected string|null $faxNumber = null;
	protected OpeningHoursSpecification|null $hoursAvailable = null;
	protected Product|string|null $productSupported = null;
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
		return __("The mailing address.", 'jsonld-for-wordpress');
	}
}