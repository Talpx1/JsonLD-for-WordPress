<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Duration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCode;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\PhysicalActivityCategory;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\MonetaryAmount;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PriceSpecification;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\PaymentMethod;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\PaymentStatusType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Order;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class Invoice extends Intangible{
	protected string|null $accountId = null;
	protected Duration|null $billingPeriod = null;
	protected Organization|Person|null $broker = null;
	protected CategoryCode|PhysicalActivityCategory|string|Thing|null $category = null;
	protected string|null $confirmationNumber = null;
	protected Organization|Person|null $customer = null;
	protected MonetaryAmount|PriceSpecification|null $minimumPaymentDue = null;
	protected Date|DateTime|null $paymentDueDate = null;
	protected PaymentMethod|null $paymentMethod = null;
	protected string|null $paymentMethodId = null;
	protected PaymentStatusType|string|null $paymentStatus = null;
	protected Organization|Person|null $provider = null;
	protected Order|null $referencesOrder = null;
	protected Date|null $scheduledPaymentDate = null;
	protected MonetaryAmount|PriceSpecification|null $totalPaymentDue = null;
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
		return __("A statement of the money due for goods or services; a bill.", 'jsonld-for-wordpress');
	}
}