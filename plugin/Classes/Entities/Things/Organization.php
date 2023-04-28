<?php

namespace JsonLDForWP\Plugin\Classes\Entities\Things;

use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Traits\Entities\HasNoWarnings;
use JsonLDForWP\Plugin\Traits\Entities\HasNoMessages;

class Organization extends Thing{

    public CreativeWork|string|null $actionableFeedbackPolicy = null;
    public PostalAddress|string|null $address = null;
    public AggregateRating|null $aggregateRating = null;
    public Person|null $alumni = null;
    public AdministrativeArea|GeoShape|Place|string|null $areaServed = null;
    public string|null $award = null;
    public Brand|Organization|null $brand = null;
    public ContactPoint|null $contactPoint = null;
    public CreativeWork|string|null $correctionsPolicy = null;
    public Organization|null $department = null;
    public Date|null $dissolutionDate = null;
    public CreativeWork|string|null $diversityPolicy = null;
    public Article|string|null $diversityStaffingReport = null;
    public string|null $duns = null;
    public string|null $email = null;
    public Person|null $employee = null;
    public CreativeWork|string|null $ethicsPolicy = null;
    public Event|null $event = null;
    public string|null $faxNumber = null;
    public Person|null $founder = null;
    public Date|null $foundingDate = null;
    public Place|null $foundingLocation = null;
    public Organization|Person|null $funder = null;
    public Grant|null $funding = null;
    public string|null $globalLocationNumber = null;
    public EducationalOccupationalCredential|null $hasCredential = null;
    public MerchantReturnPolicy|null $hasMerchantReturnPolicy = null;
    public OfferCatalog|null $hasOfferCatalog = null;
    public Place|null $hasPOS = null;
    public InteractionCounter|null $interactionStatistic = null;
    public string|null $isicV4 = null;
    public string|null $iso6523Code = null;
    public DefinedTerm|string|null $keywords = null;
    public string|Thing|null $knowsAbout = null;
    public Language|string|null $knowsLanguage = null;
    public string|null $legalName = null;
    public string|null $leiCode = null;
    public Place|PostalAddress|string|VirtualLocation|null $location = null;
    public ImageObject|string|null $logo = null;
    public Offer|null $makesOffer = null;
    public Organization|Person|null $member = null;
    public Organization|ProgramMembership|null $memberOf = null;
    public string|null $naics = null;
    public NonprofitType|null $nonprofitStatus = null;
    public QuantitativeValue|null $numberOfEmployees = null;
    public AboutPage|CreativeWork|string|null $ownershipFundingInfo = null;
    public OwnershipInfo|Product|null $owns = null;
    public Organization|null $parentOrganization = null;
    public CreativeWork|string|null $publishingPrinciples = null;
    public Review|null $review = null;
    public Demand|null $seeks = null;
    public string|null $slogan = null;
    public Organization|Person|null $sponsor = null;
    public Organization|null $subOrganization = null;
    public string|null $taxID = null;
    public string|null $telephone = null;
    public CreativeWork|string|null $unnamedSourcesPolicy = null;
    public string|null $vatID = null;

    use HasNoWarnings, HasNoMessages;

    public function description():string {
        return __("An organization such as a school, NGO, corporation, club, etc.", 'jsonld-for-wordpress');
    }

}
