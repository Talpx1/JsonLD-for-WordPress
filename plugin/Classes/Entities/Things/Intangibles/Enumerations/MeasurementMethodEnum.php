<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum MeasurementMethodEnum{
	case ExampleMeasurementMethodEnum;

	public function description():string {
		return __("Enumeration(s) for use with measurementMethod.", 'jsonld-for-wordpress');
	}
}