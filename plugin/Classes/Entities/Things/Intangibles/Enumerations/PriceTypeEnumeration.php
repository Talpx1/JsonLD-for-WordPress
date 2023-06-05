<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum PriceTypeEnumeration{
	case InvoicePrice;
	case ListPrice;
	case MSRP;
	case MinimumAdvertisedPrice;
	case SRP;
	case SalePrice;

	public function description():string {
		return __("Enumerates different price types, for example list price, invoice price, and sale price.", 'jsonld-for-wordpress');
	}
}