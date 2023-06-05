<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum MedicineSystem{
	case Ayurvedic;
	case Chiropractic;
	case Homeopathic;
	case Osteopathic;
	case TraditionalChinese;
	case WesternConventional;

	public function description():string {
		return __("Systems of medical practice.", 'jsonld-for-wordpress');
	}
}