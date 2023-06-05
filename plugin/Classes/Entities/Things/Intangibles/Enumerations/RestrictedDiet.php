<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum RestrictedDiet{
	case DiabeticDiet;
	case GlutenFreeDiet;
	case HalalDiet;
	case HinduDiet;
	case KosherDiet;
	case LowCalorieDiet;
	case LowFatDiet;
	case LowLactoseDiet;
	case LowSaltDiet;
	case VeganDiet;
	case VegetarianDiet;

	public function description():string {
		return __("A diet restricted to certain foods or preparations for cultural, religious, health or lifestyle reasons.", 'jsonld-for-wordpress');
	}
}