<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum DrugPregnancyCategory{
	case FDAcategoryA;
	case FDAcategoryB;
	case FDAcategoryC;
	case FDAcategoryD;
	case FDAcategoryX;
	case FDAnotEvaluated;

	public function description():string {
		return __("Categories that represent an assessment of the risk of fetal injury due to a drug or pharmaceutical used as directed by the mother during pregnancy.", 'jsonld-for-wordpress');
	}
}