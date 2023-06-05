<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum ReturnLabelSourceEnumeration{
	case ReturnLabelCustomerResponsibility;
	case ReturnLabelDownloadAndPrint;
	case ReturnLabelInBox;

	public function description():string {
		return __("Enumerates several types of return labels for product returns.", 'jsonld-for-wordpress');
	}
}