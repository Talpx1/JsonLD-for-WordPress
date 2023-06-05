<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\Specialties;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\Specialty;

/**
* @package JsonLDForWP
*/
class MedicalSpecialty extends Specialty{

	public function description():string {
		return __("Any specific branch of medical science or practice. Medical specialities include clinical specialties that pertain to particular organ systems and their respective disease states, as well as allied health specialties. Enumerated type.", 'jsonld-for-wordpress');
	}
}