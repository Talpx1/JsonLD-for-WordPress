<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum GameAvailabilityEnumeration{
	case DemoGameAvailability;
	case FullGameAvailability;

	public function description():string {
		return __("For a VideoGame, such as used with a PlayGameAction, an enumeration of the kind of game availability offered.", 'jsonld-for-wordpress');
	}
}