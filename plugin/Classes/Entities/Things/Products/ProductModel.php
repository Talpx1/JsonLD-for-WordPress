<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Products;

use JsonLDForWP\Plugin\Classes\Entities\Things\Product;
use JsonLDForWP\Plugin\Classes\Entities\Things\Products\ProductGroup;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Ratings\AggregateRating;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Audience;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Brand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCode;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\PhysicalActivityCategory;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeAreas\Country;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Distance;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Grant;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\AdultOrientedEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\EnergyConsumptionDetails;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\MerchantReturnPolicy;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Service;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\OfferItemCondition;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ItemList;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ListItem;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\WebContent;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Demand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offer;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Review;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\QualitativeValues\SizeSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class ProductModel extends Product{
	protected ProductGroup|ProductModel|null $isVariantOf = null;
	protected ProductModel|null $predecessorOf = null;
	protected ProductModel|null $successorOf = null;
	protected PropertyValue|null $additionalProperty = null;
	protected AggregateRating|null $aggregateRating = null;
	protected string|null $asin = null;
	protected Audience|null $audience = null;
	protected string|null $award = null;
	protected Brand|Organization|null $brand = null;
	protected CategoryCode|PhysicalActivityCategory|string|Thing|null $category = null;
	protected string|null $color = null;
	protected string|null $countryOfAssembly = null;
	protected string|null $countryOfLastProcessing = null;
	protected Country|null $countryOfOrigin = null;
	protected Distance|QuantitativeValue|null $depth = null;
	protected Grant|null $funding = null;
	protected string|null $gtin = null;
	protected string|null $gtin12 = null;
	protected string|null $gtin13 = null;
	protected string|null $gtin14 = null;
	protected string|null $gtin8 = null;
	protected AdultOrientedEnumeration|null $hasAdultConsideration = null;
	protected EnergyConsumptionDetails|null $hasEnergyConsumptionDetails = null;
	protected QuantitativeValue|null $hasMeasurement = null;
	protected MerchantReturnPolicy|null $hasMerchantReturnPolicy = null;
	protected Distance|QuantitativeValue|null $height = null;
	protected string|null $inProductGroupWithID = null;
	protected Product|null $isAccessoryOrSparePartFor = null;
	protected Product|null $isConsumableFor = null;
	protected bool|null $isFamilyFriendly = null;
	protected Product|Service|null $isRelatedTo = null;
	protected Product|Service|null $isSimilarTo = null;
	protected OfferItemCondition|null $itemCondition = null;
	protected DefinedTerm|string|null $keywords = null;
	protected ImageObject|string|null $logo = null;
	protected Organization|null $manufacturer = null;
	protected Product|string|null $material = null;
	protected string|null $mobileUrl = null;
	protected ProductModel|string|null $model = null;
	protected string|null $mpn = null;
	protected ItemList|ListItem|string|WebContent|null $negativeNotes = null;
	protected string|null $nsn = null;
	protected Demand|Offer|null $offers = null;
	protected DefinedTerm|string|null $pattern = null;
	protected ItemList|ListItem|string|WebContent|null $positiveNotes = null;
	protected string|null $productID = null;
	protected Date|null $productionDate = null;
	protected Date|null $purchaseDate = null;
	protected Date|null $releaseDate = null;
	protected Review|null $review = null;
	protected DefinedTerm|QuantitativeValue|SizeSpecification|string|null $size = null;
	protected string|null $sku = null;
	protected string|null $slogan = null;
	protected QuantitativeValue|null $weight = null;
	protected Distance|QuantitativeValue|null $width = null;
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
		return __("A datasheet or vendor specification of a product (in the sense of a prototypical description).", 'jsonld-for-wordpress');
	}
}