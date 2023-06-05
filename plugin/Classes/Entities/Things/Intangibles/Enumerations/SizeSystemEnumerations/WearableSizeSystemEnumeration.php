<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\SizeSystemEnumerations;

/**
* @package JsonLDForWP
*/
enum WearableSizeSystemEnumeration{
	case WearableSizeSystemAU;
	case WearableSizeSystemBR;
	case WearableSizeSystemCN;
	case WearableSizeSystemContinental;
	case WearableSizeSystemDE;
	case WearableSizeSystemEN13402;
	case WearableSizeSystemEurope;
	case WearableSizeSystemFR;
	case WearableSizeSystemGS1;
	case WearableSizeSystemIT;
	case WearableSizeSystemJP;
	case WearableSizeSystemMX;
	case WearableSizeSystemUK;
	case WearableSizeSystemUS;

	public function description():string {
		return __("Enumerates common size systems specific for wearable products", 'jsonld-for-wordpress');
	}
}