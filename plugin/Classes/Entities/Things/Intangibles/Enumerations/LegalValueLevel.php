<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum LegalValueLevel{
	case AuthoritativeLegalValue;
	case DefinitiveLegalValue;
	case OfficialLegalValue;
	case UnofficialLegalValue;

	public function description():string {
		return __("A list of possible levels for the legal validity of a legislation.", 'jsonld-for-wordpress');
	}
}