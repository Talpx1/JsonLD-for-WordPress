<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum MerchantReturnEnumeration{
	case MerchantReturnFiniteReturnWindow;
	case MerchantReturnNotPermitted;
	case MerchantReturnUnlimitedWindow;
	case MerchantReturnUnspecified;

	public function description():string {
		return __("Enumerates several kinds of product return policies.", 'jsonld-for-wordpress');
	}
}