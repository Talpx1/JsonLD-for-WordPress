<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum MedicalImagingTechnique{
	case CT;
	case MRI;
	case PET;
	case Radiography;
	case Ultrasound;
	case XRay;

	public function description():string {
		return __("Any medical imaging modality typically used for diagnostic purposes. Enumerated type.", 'jsonld-for-wordpress');
	}
}