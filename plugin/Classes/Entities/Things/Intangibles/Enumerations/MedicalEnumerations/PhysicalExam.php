<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumeration;

/**
* @package JsonLDForWP
*/
class PhysicalExam extends MedicalEnumeration{

	public function description():string {
		return __("A type of physical examination of a patient performed by a physician.", 'jsonld-for-wordpress');
	}
}