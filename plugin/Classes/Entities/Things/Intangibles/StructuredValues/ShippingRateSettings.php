<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PriceSpecifications\DeliveryChargeSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\MonetaryAmount;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\DefinedRegion;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class ShippingRateSettings extends StructuredValue{
	protected bool|null $doesNotShip = null;
	protected DeliveryChargeSpecification|MonetaryAmount|null $freeShippingThreshold = null;
	protected bool|null $isUnlabelledFallback = null;
	protected DefinedRegion|null $shippingDestination = null;
	protected string|null $shippingLabel = null;
	protected MonetaryAmount|null $shippingRate = null;
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
		return __("A ShippingRateSettings represents re-usable pieces of shipping information. It is designed for publication on an URL that may be referenced via the shippingSettingsLink property of an OfferShippingDetails. Several occurrences can be published, distinguished and matched (i.e. identified/referenced) by their different values for shippingLabel.", 'jsonld-for-wordpress');
	}
}