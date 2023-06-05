<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations;

/**
* @package JsonLDForWP
*/
enum OrderStatus{
	case OrderCancelled;
	case OrderDelivered;
	case OrderInTransit;
	case OrderPaymentDue;
	case OrderPickupAvailable;
	case OrderProblem;
	case OrderProcessing;
	case OrderReturned;

	public function description():string {
		return __("Enumerated status values for Order.", 'jsonld-for-wordpress');
	}
}