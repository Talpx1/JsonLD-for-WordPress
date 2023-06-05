<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offer;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoints\PostalAddress;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ParcelDelivery;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\OrderStatus;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\OrderItem;
use JsonLDForWP\Plugin\Classes\Entities\Things\Product;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Service;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Invoice;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\PaymentMethod;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class Order extends Intangible{
	protected Offer|null $acceptedOffer = null;
	protected PostalAddress|null $billingAddress = null;
	protected Organization|Person|null $broker = null;
	protected string|null $confirmationNumber = null;
	protected Organization|Person|null $customer = null;
	protected float|string|null $discount = null;
	protected string|null $discountCode = null;
	protected string|null $discountCurrency = null;
	protected bool|null $isGift = null;
	protected Date|DateTime|null $orderDate = null;
	protected ParcelDelivery|null $orderDelivery = null;
	protected string|null $orderNumber = null;
	protected OrderStatus|null $orderStatus = null;
	protected OrderItem|Product|Service|null $orderedItem = null;
	protected Invoice|null $partOfInvoice = null;
	protected Date|DateTime|null $paymentDueDate = null;
	protected PaymentMethod|null $paymentMethod = null;
	protected string|null $paymentMethodId = null;
	protected string|null $paymentUrl = null;
	protected Organization|Person|null $seller = null;
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
		return __("An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.", 'jsonld-for-wordpress');
	}
}