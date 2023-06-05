<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum RefundTypeEnumeration{
	case ExchangeRefund;
	case FullRefund;
	case StoreCreditRefund;

	public function description():string {
		return __("Enumerates several kinds of product return refund types.", 'jsonld-for-wordpress');
	}
}