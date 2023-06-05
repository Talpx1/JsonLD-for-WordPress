<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum OfferItemCondition{
	case DamagedCondition;
	case NewCondition;
	case RefurbishedCondition;
	case UsedCondition;

	public function description():string {
		return __("A list of possible conditions for the item.", 'jsonld-for-wordpress');
	}
}