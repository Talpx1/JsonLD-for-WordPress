<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum MedicalAudienceType{
	case Clinician;
	case MedicalResearcher;

	public function description():string {
		return __("Target audiences types for medical web pages. Enumerated type.", 'jsonld-for-wordpress');
	}
}