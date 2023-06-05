<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;

/**
* @package JsonLDForWP
*/
class WarrantyScope extends Enumeration{

	public function description():string {
		return __("A range of services that will be provided to a customer free of charge in case of a defect or malfunction of a product.\n\nCommonly used values:\n\n\nhttp://purl.org/goodrelations/v1#Labor-BringIn\nhttp://purl.org/goodrelations/v1#PartsAndLabor-BringIn\nhttp://purl.org/goodrelations/v1#PartsAndLabor-PickUp\n", 'jsonld-for-wordpress');
	}
}