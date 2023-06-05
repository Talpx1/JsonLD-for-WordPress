<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum MedicalStudyStatus{
	case ActiveNotRecruiting;
	case Completed;
	case EnrollingByInvitation;
	case NotYetRecruiting;
	case Recruiting;
	case ResultsAvailable;
	case ResultsNotAvailable;
	case Suspended;
	case Terminated;
	case Withdrawn;

	public function description():string {
		return __("The status of a medical study. Enumerated type.", 'jsonld-for-wordpress');
	}
}