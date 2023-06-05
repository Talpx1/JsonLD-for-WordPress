<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;

/**
* @package JsonLDForWP
*/
class MeasurementTypeEnumeration extends Enumeration{

	public function description():string {
		return __("Enumeration of common measurement types (or dimensions), for example 'chest' for a person, 'inseam' for pants, 'gauge' for screws, or 'wheel' for bicycles.", 'jsonld-for-wordpress');
	}
}