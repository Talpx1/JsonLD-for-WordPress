<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Organizations\PerformingGroups;

use JsonLDForWP\Plugin\Classes\Entities\Things\Organizations\PerformingGroup;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MusicPlaylists\MusicAlbum;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ItemList;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MusicRecording;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoints\PostalAddress;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Ratings\AggregateRating;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeArea;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\GeoShape;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Brand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoint;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Article;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Grant;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\EducationalOccupationalCredential;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\MerchantReturnPolicy;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ItemLists\OfferCatalog;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\InteractionCounter;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Language;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\VirtualLocation;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offer;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ProgramMembership;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\NonprofitType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\WebPages\AboutPage;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\OwnershipInfo;
use JsonLDForWP\Plugin\Classes\Entities\Things\Product;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Review;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Demand;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;

/**
* @package JsonLDForWP
*/
class MusicGroup extends PerformingGroup{
	protected MusicAlbum|null $album = null;
	protected string|null $genre = null;
	protected ItemList|MusicRecording|null $track = null;
	protected CreativeWork|string|null $actionableFeedbackPolicy = null;
	protected PostalAddress|string|null $address = null;
	protected AggregateRating|null $aggregateRating = null;
	protected Person|null $alumni = null;
	protected AdministrativeArea|GeoShape|Place|string|null $areaServed = null;
	protected string|null $award = null;
	protected Brand|Organization|null $brand = null;
	protected ContactPoint|null $contactPoint = null;
	protected CreativeWork|string|null $correctionsPolicy = null;
	protected Organization|null $department = null;
	protected Date|null $dissolutionDate = null;
	protected CreativeWork|string|null $diversityPolicy = null;
	protected Article|string|null $diversityStaffingReport = null;
	protected string|null $duns = null;
	protected string|null $email = null;
	protected Person|null $employee = null;
	protected CreativeWork|string|null $ethicsPolicy = null;
	protected Event|null $event = null;
	protected string|null $faxNumber = null;
	protected Person|null $founder = null;
	protected Date|null $foundingDate = null;
	protected Place|null $foundingLocation = null;
	protected Organization|Person|null $funder = null;
	protected Grant|null $funding = null;
	protected string|null $globalLocationNumber = null;
	protected EducationalOccupationalCredential|null $hasCredential = null;
	protected MerchantReturnPolicy|null $hasMerchantReturnPolicy = null;
	protected OfferCatalog|null $hasOfferCatalog = null;
	protected Place|null $hasPOS = null;
	protected InteractionCounter|null $interactionStatistic = null;
	protected string|null $isicV4 = null;
	protected string|null $iso6523Code = null;
	protected DefinedTerm|string|null $keywords = null;
	protected string|Thing|null $knowsAbout = null;
	protected Language|string|null $knowsLanguage = null;
	protected string|null $legalName = null;
	protected string|null $leiCode = null;
	protected Place|PostalAddress|string|VirtualLocation|null $location = null;
	protected ImageObject|string|null $logo = null;
	protected Offer|null $makesOffer = null;
	protected Organization|Person|null $member = null;
	protected Organization|ProgramMembership|null $memberOf = null;
	protected string|null $naics = null;
	protected NonprofitType|null $nonprofitStatus = null;
	protected QuantitativeValue|null $numberOfEmployees = null;
	protected AboutPage|CreativeWork|string|null $ownershipFundingInfo = null;
	protected OwnershipInfo|Product|null $owns = null;
	protected Organization|null $parentOrganization = null;
	protected CreativeWork|string|null $publishingPrinciples = null;
	protected Review|null $review = null;
	protected Demand|null $seeks = null;
	protected string|null $slogan = null;
	protected Organization|Person|null $sponsor = null;
	protected Organization|null $subOrganization = null;
	protected string|null $taxID = null;
	protected string|null $telephone = null;
	protected CreativeWork|string|null $unnamedSourcesPolicy = null;
	protected string|null $vatID = null;
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
		return __("A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.", 'jsonld-for-wordpress');
	}
}