<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum GenderType{
	case Female;
	case Male;

	public function description():string {
		return __("An enumeration of genders.", 'jsonld-for-wordpress');
	}
}