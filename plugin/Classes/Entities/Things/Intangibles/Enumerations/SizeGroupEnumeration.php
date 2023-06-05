<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;

/**
* @package JsonLDForWP
*/
class SizeGroupEnumeration extends Enumeration{

	public function description():string {
		return __("Enumerates common size groups for various product categories.", 'jsonld-for-wordpress');
	}
}