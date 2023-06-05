<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum MedicalObservationalStudyDesign{
	case CaseSeries;
	case CohortStudy;
	case CrossSectional;
	case Longitudinal;
	case Observational;
	case Registry;

	public function description():string {
		return __("Design models for observational medical studies. Enumerated type.", 'jsonld-for-wordpress');
	}
}