<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\QualitativeValues;

/**
* @package JsonLDForWP
*/
enum DriveWheelConfigurationValue{
	case AllWheelDriveConfiguration;
	case FourWheelDriveConfiguration;
	case FrontWheelDriveConfiguration;
	case RearWheelDriveConfiguration;

	public function description():string {
		return __("A value indicating which roadwheels will receive torque.", 'jsonld-for-wordpress');
	}
}