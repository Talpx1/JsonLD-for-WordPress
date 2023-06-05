<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations;

/**
* @package JsonLDForWP
*/
enum LegalForceStatus{
	case InForce;
	case NotInForce;
	case PartiallyInForce;

	public function description():string {
		return __("A list of possible statuses for the legal force of a legislation.", 'jsonld-for-wordpress');
	}
}