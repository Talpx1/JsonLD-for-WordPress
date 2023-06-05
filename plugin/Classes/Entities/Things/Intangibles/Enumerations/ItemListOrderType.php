<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum ItemListOrderType{
	case ItemListOrderAscending;
	case ItemListOrderDescending;
	case ItemListUnordered;

	public function description():string {
		return __("Enumerated for values for itemListOrder for indicating how an ordered ItemList is organized.", 'jsonld-for-wordpress');
	}
}