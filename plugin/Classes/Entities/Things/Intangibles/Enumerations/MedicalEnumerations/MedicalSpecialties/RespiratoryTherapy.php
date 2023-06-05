<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations\MedicalSpecialties;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations\MedicalSpecialty;

/**
* @package JsonLDForWP
*/
class RespiratoryTherapy extends MedicalSpecialty{

	public function description():string {
		return __("The therapy that is concerned with the maintenance or improvement of respiratory function (as in patients with pulmonary disease).", 'jsonld-for-wordpress');
	}
}