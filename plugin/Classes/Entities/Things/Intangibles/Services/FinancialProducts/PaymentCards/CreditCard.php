<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Services\FinancialProducts\PaymentCards;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Services\FinancialProducts\PaymentCard;

/**
* @package JsonLDForWP
*/
class CreditCard extends PaymentCard{

	public function description():string {
		return __("A card payment method of a particular brand or name.  Used to mark up a particular payment method and/or the financial product/service that supplies the card account.\n\nCommonly used values:\n\n\nhttp://purl.org/goodrelations/v1#AmericanExpress\nhttp://purl.org/goodrelations/v1#DinersClub\nhttp://purl.org/goodrelations/v1#Discover\nhttp://purl.org/goodrelations/v1#JCB\nhttp://purl.org/goodrelations/v1#MasterCard\nhttp://purl.org/goodrelations/v1#VISA\n", 'jsonld-for-wordpress');
	}
}