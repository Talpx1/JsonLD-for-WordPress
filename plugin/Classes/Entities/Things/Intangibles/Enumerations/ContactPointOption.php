<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum ContactPointOption{
	case HearingImpairedSupported;
	case TollFree;

	public function description():string {
		return __("Enumerated options related to a ContactPoint.", 'jsonld-for-wordpress');
	}
}