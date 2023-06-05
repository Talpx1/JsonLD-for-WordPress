<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations;

/**
* @package JsonLDForWP
*/
enum ActionStatusType{
	case ActiveActionStatus;
	case CompletedActionStatus;
	case FailedActionStatus;
	case PotentialActionStatus;

	public function description():string {
		return __("The status of an Action.", 'jsonld-for-wordpress');
	}
}