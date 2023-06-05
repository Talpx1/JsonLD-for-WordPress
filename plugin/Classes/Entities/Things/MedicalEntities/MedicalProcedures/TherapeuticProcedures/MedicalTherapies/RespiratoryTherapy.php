<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalProcedures\TherapeuticProcedures\MedicalTherapies;

use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalProcedures\TherapeuticProcedures\MedicalTherapy;

/**
* @package JsonLDForWP
*/
class RespiratoryTherapy extends MedicalTherapy{

	public function description():string {
		return __("The therapy that is concerned with the maintenance or improvement of respiratory function (as in patients with pulmonary disease).", 'jsonld-for-wordpress');
	}
}