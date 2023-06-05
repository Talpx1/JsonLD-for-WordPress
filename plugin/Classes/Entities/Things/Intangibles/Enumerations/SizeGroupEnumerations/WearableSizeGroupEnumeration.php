<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\SizeGroupEnumerations;

/**
* @package JsonLDForWP
*/
enum WearableSizeGroupEnumeration{
	case WearableSizeGroupBig;
	case WearableSizeGroupBoys;
	case WearableSizeGroupExtraShort;
	case WearableSizeGroupExtraTall;
	case WearableSizeGroupGirls;
	case WearableSizeGroupHusky;
	case WearableSizeGroupInfants;
	case WearableSizeGroupJuniors;
	case WearableSizeGroupMaternity;
	case WearableSizeGroupMens;
	case WearableSizeGroupMisses;
	case WearableSizeGroupPetite;
	case WearableSizeGroupPlus;
	case WearableSizeGroupRegular;
	case WearableSizeGroupShort;
	case WearableSizeGroupTall;
	case WearableSizeGroupWomens;

	public function description():string {
		return __("Enumerates common size groups (also known as 'size types') for wearable products.", 'jsonld-for-wordpress');
	}
}