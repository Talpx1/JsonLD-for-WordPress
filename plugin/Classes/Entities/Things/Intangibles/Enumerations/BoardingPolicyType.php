<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum BoardingPolicyType{
	case GroupBoardingPolicy;
	case ZoneBoardingPolicy;

	public function description():string {
		return __("A type of boarding policy used by an airline.", 'jsonld-for-wordpress');
	}
}