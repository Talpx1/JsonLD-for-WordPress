<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum MedicalDevicePurpose{
	case Diagnostic;
	case Therapeutic;

	public function description():string {
		return __("Categories of medical devices, organized by the purpose or intended use of the device.", 'jsonld-for-wordpress');
	}
}