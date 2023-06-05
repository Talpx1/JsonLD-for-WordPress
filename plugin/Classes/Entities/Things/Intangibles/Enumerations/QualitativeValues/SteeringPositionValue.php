<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\QualitativeValues;

/**
* @package JsonLDForWP
*/
enum SteeringPositionValue{
	case LeftHandDriving;
	case RightHandDriving;

	public function description():string {
		return __("A value indicating a steering position.", 'jsonld-for-wordpress');
	}
}