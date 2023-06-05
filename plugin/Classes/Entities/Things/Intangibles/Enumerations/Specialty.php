<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;

/**
* @package JsonLDForWP
*/
class Specialty extends Enumeration{

	public function description():string {
		return __("Any branch of a field in which people typically develop specific expertise, usually after significant study, time, and effort.", 'jsonld-for-wordpress');
	}
}