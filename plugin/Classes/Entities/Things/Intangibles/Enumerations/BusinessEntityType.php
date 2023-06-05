<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;

/**
* @package JsonLDForWP
*/
class BusinessEntityType extends Enumeration{

	public function description():string {
		return __("A business entity type is a conceptual entity representing the legal form, the size, the main line of business, the position in the value chain, or any combination thereof, of an organization or business person.\n\nCommonly used values:\n\n\nhttp://purl.org/goodrelations/v1#Business\nhttp://purl.org/goodrelations/v1#Enduser\nhttp://purl.org/goodrelations/v1#PublicInstitution\nhttp://purl.org/goodrelations/v1#Reseller\n", 'jsonld-for-wordpress');
	}
}