<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\NonprofitTypes;

/**
* @package JsonLDForWP
*/
enum NLNonprofitType{
	case NonprofitANBI;
	case NonprofitSBBI;

	public function description():string {
		return __("NLNonprofitType: Non-profit organization type originating from the Netherlands.", 'jsonld-for-wordpress');
	}
}