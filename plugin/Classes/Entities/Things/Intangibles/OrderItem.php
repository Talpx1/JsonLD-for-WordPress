<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ParcelDelivery;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\OrderStatus;
use JsonLDForWP\Plugin\Classes\Entities\Things\Product;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Service;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class OrderItem extends Intangible{
	protected ParcelDelivery|null $orderDelivery = null;
	protected string|null $orderItemNumber = null;
	protected OrderStatus|null $orderItemStatus = null;
	protected float|null $orderQuantity = null;
	protected OrderItem|Product|Service|null $orderedItem = null;
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
		return __("An order item is a line of an order. It includes the quantity and shipping details of a bought offer.", 'jsonld-for-wordpress');
	}
}