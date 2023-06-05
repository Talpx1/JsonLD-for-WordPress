<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;

/**
* @package JsonLDForWP
*/
class EnergyEfficiencyEnumeration extends Enumeration{

	public function description():string {
		return __("Enumerates energy efficiency levels (also known as 'classes' or 'ratings') and certifications that are part of several international energy efficiency standards.", 'jsonld-for-wordpress');
	}
}