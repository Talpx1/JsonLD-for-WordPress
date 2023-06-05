<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum MedicalProcedureType{
	case NoninvasiveProcedure;
	case PercutaneousProcedure;

	public function description():string {
		return __("An enumeration that describes different types of medical procedures.", 'jsonld-for-wordpress');
	}
}