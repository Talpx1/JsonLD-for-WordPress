<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum EventAttendanceModeEnumeration{
	case MixedEventAttendanceMode;
	case OfflineEventAttendanceMode;
	case OnlineEventAttendanceMode;

	public function description():string {
		return __("An EventAttendanceModeEnumeration value is one of potentially several modes of organising an event, relating to whether it is online or offline.", 'jsonld-for-wordpress');
	}
}