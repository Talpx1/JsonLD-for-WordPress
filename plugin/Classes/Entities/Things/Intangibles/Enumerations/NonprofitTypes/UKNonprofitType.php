<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\NonprofitTypes;

/**
* @package JsonLDForWP
*/
enum UKNonprofitType{
	case CharitableIncorporatedOrganization;
	case LimitedByGuaranteeCharity;
	case UKTrust;
	case UnincorporatedAssociationCharity;

	public function description():string {
		return __("UKNonprofitType: Non-profit organization type originating from the United Kingdom.", 'jsonld-for-wordpress');
	}
}