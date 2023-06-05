<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum RsvpResponseType{
	case RsvpResponseMaybe;
	case RsvpResponseNo;
	case RsvpResponseYes;

	public function description():string {
		return __("RsvpResponseType is an enumeration type whose instances represent responding to an RSVP request.", 'jsonld-for-wordpress');
	}
}