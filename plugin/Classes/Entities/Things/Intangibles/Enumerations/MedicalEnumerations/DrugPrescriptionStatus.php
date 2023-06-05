<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum DrugPrescriptionStatus{
	case OTC;
	case PrescriptionOnly;

	public function description():string {
		return __("Indicates whether this drug is available by prescription or over-the-counter.", 'jsonld-for-wordpress');
	}
}