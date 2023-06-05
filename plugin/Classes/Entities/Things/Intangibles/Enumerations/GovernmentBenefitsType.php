<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum GovernmentBenefitsType{
	case BasicIncome;
	case BusinessSupport;
	case DisabilitySupport;
	case HealthCare;
	case OneTimePayments;
	case PaidLeave;
	case ParentalSupport;
	case UnemploymentSupport;

	public function description():string {
		return __("GovernmentBenefitsType enumerates several kinds of government benefits to support the COVID-19 situation. Note that this structure may not capture all benefits offered.", 'jsonld-for-wordpress');
	}
}