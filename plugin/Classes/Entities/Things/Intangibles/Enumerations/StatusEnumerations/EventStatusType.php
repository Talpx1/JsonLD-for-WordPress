<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations;

/**
* @package JsonLDForWP
*/
enum EventStatusType{
	case EventCancelled;
	case EventMovedOnline;
	case EventPostponed;
	case EventRescheduled;
	case EventScheduled;

	public function description():string {
		return __("EventStatusType is an enumeration type whose instances represent several states that an Event may be in.", 'jsonld-for-wordpress');
	}
}