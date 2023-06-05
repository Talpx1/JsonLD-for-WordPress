<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations;

/**
* @package JsonLDForWP
*/
enum PaymentStatusType{
	case PaymentAutomaticallyApplied;
	case PaymentComplete;
	case PaymentDeclined;
	case PaymentDue;
	case PaymentPastDue;

	public function description():string {
		return __("A specific payment status. For example, PaymentDue, PaymentComplete, etc.", 'jsonld-for-wordpress');
	}
}