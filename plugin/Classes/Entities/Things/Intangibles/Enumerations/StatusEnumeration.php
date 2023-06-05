<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;

/**
* @package JsonLDForWP
*/
class StatusEnumeration extends Enumeration{

	public function description():string {
		return __("Lists or enumerations dealing with status types.", 'jsonld-for-wordpress');
	}
}