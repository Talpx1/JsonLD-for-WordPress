<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\EnergyEfficiencyEnumerations;

/**
* @package JsonLDForWP
*/
enum EnergyStarEnergyEfficiencyEnumeration{
	case EnergyStarCertified;

	public function description():string {
		return __("Used to indicate whether a product is EnergyStar certified.", 'jsonld-for-wordpress');
	}
}