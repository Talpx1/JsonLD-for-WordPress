<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum MedicalEvidenceLevel{
	case EvidenceLevelA;
	case EvidenceLevelB;
	case EvidenceLevelC;

	public function description():string {
		return __("Level of evidence for a medical guideline. Enumerated type.", 'jsonld-for-wordpress');
	}
}