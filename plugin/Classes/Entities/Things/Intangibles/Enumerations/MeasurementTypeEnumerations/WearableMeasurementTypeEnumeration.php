<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MeasurementTypeEnumerations;

/**
* @package JsonLDForWP
*/
enum WearableMeasurementTypeEnumeration{
	case WearableMeasurementBack;
	case WearableMeasurementChestOrBust;
	case WearableMeasurementCollar;
	case WearableMeasurementCup;
	case WearableMeasurementHeight;
	case WearableMeasurementHips;
	case WearableMeasurementInseam;
	case WearableMeasurementLength;
	case WearableMeasurementOutsideLeg;
	case WearableMeasurementSleeve;
	case WearableMeasurementWaist;
	case WearableMeasurementWidth;

	public function description():string {
		return __("Enumerates common types of measurement for wearables products.", 'jsonld-for-wordpress');
	}
}