<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum DigitalPlatformEnumeration{
	case AndroidPlatform;
	case DesktopWebPlatform;
	case GenericWebPlatform;
	case IOSPlatform;
	case MobileWebPlatform;

	public function description():string {
		return __("Enumerates some common technology platforms, for use with properties such as actionPlatform. It is not supposed to be comprehensive - when a suitable code is not enumerated here, textual or URL values can be used instead. These codes are at a fairly high level and do not deal with versioning and other nuance. Additional codes can be suggested in github.", 'jsonld-for-wordpress');
	}
}