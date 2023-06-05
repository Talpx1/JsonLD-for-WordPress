<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum DayOfWeek{
	case Friday;
	case Monday;
	case PublicHolidays;
	case Saturday;
	case Sunday;
	case Thursday;
	case Tuesday;
	case Wednesday;

	public function description():string {
		return __("The day of the week, e.g. used to specify to which day the opening hours of an OpeningHoursSpecification refer.\n\nOriginally, URLs from GoodRelations were used (for Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday plus a special entry for PublicHolidays); these have now been integrated directly into schema.org.", 'jsonld-for-wordpress');
	}
}