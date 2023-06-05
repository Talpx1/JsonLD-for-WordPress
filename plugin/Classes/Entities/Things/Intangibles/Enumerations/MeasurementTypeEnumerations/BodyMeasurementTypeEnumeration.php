<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MeasurementTypeEnumerations;

/**
* @package JsonLDForWP
*/
enum BodyMeasurementTypeEnumeration{
	case BodyMeasurementArm;
	case BodyMeasurementBust;
	case BodyMeasurementChest;
	case BodyMeasurementFoot;
	case BodyMeasurementHand;
	case BodyMeasurementHead;
	case BodyMeasurementHeight;
	case BodyMeasurementHips;
	case BodyMeasurementInsideLeg;
	case BodyMeasurementNeck;
	case BodyMeasurementUnderbust;
	case BodyMeasurementWaist;
	case BodyMeasurementWeight;

	public function description():string {
		return __("Enumerates types (or dimensions) of a person's body measurements, for example for fitting of clothes.", 'jsonld-for-wordpress');
	}
}