<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Services;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Service;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Ratings\AggregateRating;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeArea;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\GeoShape;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Audience;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ServiceChannel;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Brand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCode;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\PhysicalActivityCategory;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ItemLists\OfferCatalog;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\OpeningHoursSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\Product;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Demand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offer;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Review;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\GovernmentBenefitsType;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class FinancialProduct extends Service{
	protected float|QuantitativeValue|null $annualPercentageRate = null;
	protected string|null $feesAndCommissionsSpecification = null;
	protected float|QuantitativeValue|null $interestRate = null;
	protected AggregateRating|null $aggregateRating = null;
	protected AdministrativeArea|GeoShape|Place|string|null $areaServed = null;
	protected Audience|null $audience = null;
	protected ServiceChannel|null $availableChannel = null;
	protected string|null $award = null;
	protected Brand|Organization|null $brand = null;
	protected Organization|Person|null $broker = null;
	protected CategoryCode|PhysicalActivityCategory|string|Thing|null $category = null;
	protected OfferCatalog|null $hasOfferCatalog = null;
	protected OpeningHoursSpecification|null $hoursAvailable = null;
	protected Product|Service|null $isRelatedTo = null;
	protected Product|Service|null $isSimilarTo = null;
	protected ImageObject|string|null $logo = null;
	protected Demand|Offer|null $offers = null;
	protected Organization|Person|null $provider = null;
	protected string|null $providerMobility = null;
	protected Review|null $review = null;
	protected Thing|null $serviceOutput = null;
	protected GovernmentBenefitsType|string|null $serviceType = null;
	protected string|null $slogan = null;
	protected string|null $termsOfService = null;
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
		return __("A product provided to consumers and businesses by financial institutions such as banks, insurance companies, brokerage firms, consumer finance companies, and investment companies which comprise the financial services industry.", 'jsonld-for-wordpress');
	}
}