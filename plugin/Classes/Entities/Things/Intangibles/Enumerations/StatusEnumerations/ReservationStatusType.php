<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations;

/**
* @package JsonLDForWP
*/
enum ReservationStatusType{
	case ReservationCancelled;
	case ReservationConfirmed;
	case ReservationHold;
	case ReservationPending;

	public function description():string {
		return __("Enumerated status values for Reservation.", 'jsonld-for-wordpress');
	}
}