<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeAreas\Country;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\ReturnFeesEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\ReturnLabelSourceEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\MonetaryAmount;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\OfferItemCondition;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\RefundTypeEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\ReturnMethodEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MerchantReturnEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\MerchantReturnPolicySeasonalOverride;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class MerchantReturnPolicy extends Intangible{
	protected PropertyValue|null $additionalProperty = null;
	protected Country|string|null $applicableCountry = null;
	protected ReturnFeesEnumeration|null $customerRemorseReturnFees = null;
	protected ReturnLabelSourceEnumeration|null $customerRemorseReturnLabelSource = null;
	protected MonetaryAmount|null $customerRemorseReturnShippingFeesAmount = null;
	protected bool|null $inStoreReturnsOffered = null;
	protected OfferItemCondition|null $itemCondition = null;
	protected ReturnFeesEnumeration|null $itemDefectReturnFees = null;
	protected ReturnLabelSourceEnumeration|null $itemDefectReturnLabelSource = null;
	protected MonetaryAmount|null $itemDefectReturnShippingFeesAmount = null;
	protected Date|DateTime|int|null $merchantReturnDays = null;
	protected string|null $merchantReturnLink = null;
	protected RefundTypeEnumeration|null $refundType = null;
	protected MonetaryAmount|float|null $restockingFee = null;
	protected ReturnFeesEnumeration|null $returnFees = null;
	protected ReturnLabelSourceEnumeration|null $returnLabelSource = null;
	protected ReturnMethodEnumeration|null $returnMethod = null;
	protected MerchantReturnEnumeration|null $returnPolicyCategory = null;
	protected Country|string|null $returnPolicyCountry = null;
	protected MerchantReturnPolicySeasonalOverride|null $returnPolicySeasonalOverride = null;
	protected MonetaryAmount|null $returnShippingFeesAmount = null;
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
		return __("A MerchantReturnPolicy provides information about product return policies associated with an Organization, Product, or Offer.", 'jsonld-for-wordpress');
	}
}