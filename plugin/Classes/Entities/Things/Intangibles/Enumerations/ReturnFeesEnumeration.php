<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum ReturnFeesEnumeration{
	case FreeReturn;
	case OriginalShippingFees;
	case RestockingFees;
	case ReturnFeesCustomerResponsibility;
	case ReturnShippingFees;

	public function description():string {
		return __("Enumerates several kinds of policies for product return fees.", 'jsonld-for-wordpress');
	}
}