<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalProcedures;

use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalProcedure;

/**
* @package JsonLDForWP
*/
class PhysicalExam extends MedicalProcedure{

	public function description():string {
		return __("A type of physical examination of a patient performed by a physician.", 'jsonld-for-wordpress');
	}
}