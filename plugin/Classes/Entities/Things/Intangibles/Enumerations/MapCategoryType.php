<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum MapCategoryType{
	case ParkingMap;
	case SeatingMap;
	case TransitMap;
	case VenueMap;

	public function description():string {
		return __("An enumeration of several kinds of Map.", 'jsonld-for-wordpress');
	}
}