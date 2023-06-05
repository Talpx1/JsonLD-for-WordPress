<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;

/**
* @package JsonLDForWP
*/
class NonprofitType extends Enumeration{

	public function description():string {
		return __("NonprofitType enumerates several kinds of official non-profit types of which a non-profit organization can be.", 'jsonld-for-wordpress');
	}
}