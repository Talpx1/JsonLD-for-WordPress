<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum MedicalTrialDesign{
	case DoubleBlindedTrial;
	case InternationalTrial;
	case MultiCenterTrial;
	case OpenTrial;
	case PlaceboControlledTrial;
	case RandomizedTrial;
	case SingleBlindedTrial;
	case SingleCenterTrial;
	case TripleBlindedTrial;

	public function description():string {
		return __("Design models for medical trials. Enumerated type.", 'jsonld-for-wordpress');
	}
}