<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Services\FinancialProducts\LoanOrCredit;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\PaymentMethod;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeArea;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\GeoShape;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\ItemAvailability;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Time;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\DeliveryMethod;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\BusinessFunction;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\BusinessEntityType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PriceSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\TypeAndQuantityNode;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\OfferItemCondition;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offers\AggregateOffer;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\MenuItem;
use JsonLDForWP\Plugin\Classes\Entities\Things\Product;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Service;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Trip;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\WarrantyPromise;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;

/**
* @package JsonLDForWP
*/
class Demand extends Intangible{
	protected LoanOrCredit|PaymentMethod|null $acceptedPaymentMethod = null;
	protected QuantitativeValue|null $advanceBookingRequirement = null;
	protected AdministrativeArea|GeoShape|Place|string|null $areaServed = null;
	protected string|null $asin = null;
	protected ItemAvailability|null $availability = null;
	protected Date|DateTime|Time|null $availabilityEnds = null;
	protected Date|DateTime|Time|null $availabilityStarts = null;
	protected Place|null $availableAtOrFrom = null;
	protected DeliveryMethod|null $availableDeliveryMethod = null;
	protected BusinessFunction|null $businessFunction = null;
	protected QuantitativeValue|null $deliveryLeadTime = null;
	protected BusinessEntityType|null $eligibleCustomerType = null;
	protected QuantitativeValue|null $eligibleDuration = null;
	protected QuantitativeValue|null $eligibleQuantity = null;
	protected GeoShape|Place|string|null $eligibleRegion = null;
	protected PriceSpecification|null $eligibleTransactionVolume = null;
	protected string|null $gtin = null;
	protected string|null $gtin12 = null;
	protected string|null $gtin13 = null;
	protected string|null $gtin14 = null;
	protected string|null $gtin8 = null;
	protected TypeAndQuantityNode|null $includesObject = null;
	protected GeoShape|Place|string|null $ineligibleRegion = null;
	protected QuantitativeValue|null $inventoryLevel = null;
	protected OfferItemCondition|null $itemCondition = null;
	protected AggregateOffer|CreativeWork|Event|MenuItem|Product|Service|Trip|null $itemOffered = null;
	protected string|null $mpn = null;
	protected PriceSpecification|null $priceSpecification = null;
	protected Organization|Person|null $seller = null;
	protected string|null $serialNumber = null;
	protected string|null $sku = null;
	protected Date|DateTime|null $validFrom = null;
	protected Date|DateTime|null $validThrough = null;
	protected WarrantyPromise|null $warranty = null;
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
		return __("A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.", 'jsonld-for-wordpress');
	}
}