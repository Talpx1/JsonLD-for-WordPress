<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\EnergyEfficiencyEnumerations;

/**
* @package JsonLDForWP
*/
enum EUEnergyEfficiencyEnumeration{
	case EUEnergyEfficiencyCategoryA;
	case EUEnergyEfficiencyCategoryA1Plus;
	case EUEnergyEfficiencyCategoryA2Plus;
	case EUEnergyEfficiencyCategoryA3Plus;
	case EUEnergyEfficiencyCategoryB;
	case EUEnergyEfficiencyCategoryC;
	case EUEnergyEfficiencyCategoryD;
	case EUEnergyEfficiencyCategoryE;
	case EUEnergyEfficiencyCategoryF;
	case EUEnergyEfficiencyCategoryG;

	public function description():string {
		return __("Enumerates the EU energy efficiency classes A-G as well as A+, A++, and A+++ as defined in EU directive 2017/1369.", 'jsonld-for-wordpress');
	}
}