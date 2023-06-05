<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum DeliveryMethod{
	case LockerDelivery;
	case OnSitePickup;
	case ParcelService;

	public function description():string {
		return __("A delivery method is a standardized procedure for transferring the product or service to the destination of fulfillment chosen by the customer. Delivery methods are characterized by the means of transportation used, and by the organization or group that is the contracting party for the sending organization or person.\n\nCommonly used values:\n\n\nhttp://purl.org/goodrelations/v1#DeliveryModeDirectDownload\nhttp://purl.org/goodrelations/v1#DeliveryModeFreight\nhttp://purl.org/goodrelations/v1#DeliveryModeMail\nhttp://purl.org/goodrelations/v1#DeliveryModeOwnFleet\nhttp://purl.org/goodrelations/v1#DeliveryModePickUp\nhttp://purl.org/goodrelations/v1#DHL\nhttp://purl.org/goodrelations/v1#FederalExpress\nhttp://purl.org/goodrelations/v1#UPS\n", 'jsonld-for-wordpress');
	}
}