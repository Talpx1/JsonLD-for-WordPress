<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum ItemAvailability{
	case BackOrder;
	case Discontinued;
	case InStock;
	case InStoreOnly;
	case LimitedAvailability;
	case OnlineOnly;
	case OutOfStock;
	case PreOrder;
	case PreSale;
	case SoldOut;

	public function description():string {
		return __("A list of possible product availability options.", 'jsonld-for-wordpress');
	}
}