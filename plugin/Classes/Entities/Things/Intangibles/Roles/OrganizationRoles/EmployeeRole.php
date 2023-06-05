<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Roles\OrganizationRoles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Roles\OrganizationRole;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\MonetaryAmount;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PriceSpecification;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class EmployeeRole extends OrganizationRole{
	protected MonetaryAmount|float|PriceSpecification|null $baseSalary = null;
	protected string|null $salaryCurrency = null;
	protected float|null $numberedPosition = null;
	protected Date|DateTime|null $endDate = null;
	protected string|null $roleName = null;
	protected Date|DateTime|null $startDate = null;
	protected string|null $additionalType = null;
	protected string|null $alternateName = null;
	protected string|TextObject|null $description = null;
	protected string|null $disambiguatingDescription = null;
	protected PropertyValue|string|null $identifier = null;
	protected ImageObject|string|null $image = null;
	protected CreativeWork|string|null $mainEntityOfPage = null;
	protected string|null $name = null;
	protected Action|null $potentialAction = null;
	protected string|null $sameAs = null;
	protected CreativeWork|Event|null $subjectOf = null;
	protected string|null $url = null;

	public function description():string {
		return __("A subclass of OrganizationRole used to describe employee relationships.", 'jsonld-for-wordpress');
	}
}