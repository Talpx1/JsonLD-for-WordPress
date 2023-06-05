<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum DrugCostCategory{
	case ReimbursementCap;
	case Retail;
	case Wholesale;

	public function description():string {
		return __("Enumerated categories of medical drug costs.", 'jsonld-for-wordpress');
	}
}