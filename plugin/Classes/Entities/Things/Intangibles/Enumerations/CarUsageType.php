<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum CarUsageType{
	case DrivingSchoolVehicleUsage;
	case RentalVehicleUsage;
	case TaxiVehicleUsage;

	public function description():string {
		return __("A value indicating a special usage of a car, e.g. commercial rental, driving school, or as a taxi.", 'jsonld-for-wordpress');
	}
}