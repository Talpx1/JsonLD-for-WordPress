<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumeration;

/**
* @package JsonLDForWP
*/
class BusinessFunction extends Enumeration{

	public function description():string {
		return __("The business function specifies the type of activity or access (i.e., the bundle of rights) offered by the organization or business person through the offer. Typical are sell, rental or lease, maintenance or repair, manufacture / produce, recycle / dispose, engineering / construction, or installation. Proprietary specifications of access rights are also instances of this class.\n\nCommonly used values:\n\n\nhttp://purl.org/goodrelations/v1#ConstructionInstallation\nhttp://purl.org/goodrelations/v1#Dispose\nhttp://purl.org/goodrelations/v1#LeaseOut\nhttp://purl.org/goodrelations/v1#Maintain\nhttp://purl.org/goodrelations/v1#ProvideService\nhttp://purl.org/goodrelations/v1#Repair\nhttp://purl.org/goodrelations/v1#Sell\nhttp://purl.org/goodrelations/v1#Buy\n", 'jsonld-for-wordpress');
	}
}