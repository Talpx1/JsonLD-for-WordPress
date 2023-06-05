<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;

/**
* @package JsonLDForWP
*/
class PaymentMethod extends Enumeration{

	public function description():string {
		return __("A payment method is a standardized procedure for transferring the monetary amount for a purchase. Payment methods are characterized by the legal and technical structures used, and by the organization or group carrying out the transaction.\n\nCommonly used values:\n\n\nhttp://purl.org/goodrelations/v1#ByBankTransferInAdvance\nhttp://purl.org/goodrelations/v1#ByInvoice\nhttp://purl.org/goodrelations/v1#Cash\nhttp://purl.org/goodrelations/v1#CheckInAdvance\nhttp://purl.org/goodrelations/v1#COD\nhttp://purl.org/goodrelations/v1#DirectDebit\nhttp://purl.org/goodrelations/v1#GoogleCheckout\nhttp://purl.org/goodrelations/v1#PayPal\nhttp://purl.org/goodrelations/v1#PaySwarm\n", 'jsonld-for-wordpress');
	}
}