<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum ReturnMethodEnumeration{
	case ReturnAtKiosk;
	case ReturnByMail;
	case ReturnInStore;

	public function description():string {
		return __("Enumerates several types of product return methods.", 'jsonld-for-wordpress');
	}
}