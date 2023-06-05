<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum AdultOrientedEnumeration{
	case AlcoholConsideration;
	case DangerousGoodConsideration;
	case HealthcareConsideration;
	case NarcoticConsideration;
	case ReducedRelevanceForChildrenConsideration;
	case SexualContentConsideration;
	case TobaccoNicotineConsideration;
	case UnclassifiedAdultConsideration;
	case ViolenceConsideration;
	case WeaponConsideration;

	public function description():string {
		return __("Enumeration of considerations that make a product relevant or potentially restricted for adults only.", 'jsonld-for-wordpress');
	}
}