<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum PhysicalActivityCategory{
	case AerobicActivity;
	case AnaerobicActivity;
	case Balance;
	case Flexibility;
	case LeisureTimeActivity;
	case OccupationalActivity;
	case StrengthTraining;

	public function description():string {
		return __("Categories of physical activity, organized by physiologic classification.", 'jsonld-for-wordpress');
	}
}