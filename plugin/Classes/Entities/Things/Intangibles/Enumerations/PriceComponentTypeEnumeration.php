<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum PriceComponentTypeEnumeration{
	case ActivationFee;
	case CleaningFee;
	case DistanceFee;
	case Downpayment;
	case Installment;
	case Subscription;

	public function description():string {
		return __("Enumerates different price components that together make up the total price for an offered product.", 'jsonld-for-wordpress');
	}
}