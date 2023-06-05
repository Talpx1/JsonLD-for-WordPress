<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum SizeSystemEnumeration{
	case SizeSystemImperial;
	case SizeSystemMetric;
	case WearableSizeSystemEnumeration;

	public function description():string {
		return __("Enumerates common size systems for different categories of products, for example 'EN-13402' or 'UK' for wearables or 'Imperial' for screws.", 'jsonld-for-wordpress');
	}
}