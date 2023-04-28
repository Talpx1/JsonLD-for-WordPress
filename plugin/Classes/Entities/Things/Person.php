<?php

namespace JsonLDForWP\Plugin\Classes\Entities\Things;

use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Traits\Entities\HasNoWarnings;
use JsonLDForWP\Plugin\Traits\Entities\HasNoMessages;

class Person extends Thing{

    public string|null $additionalName = null;
    public PostalAddress|string|null $address = null;
    public Organization|null $affiliation = null;
    public EducationalOrganization|Organization|null $alumniOf = null;
    public string|null $award = null;
    public Date|null $birthDate = null;
    public Place|null $birthPlace = null;
    public Brand|Organization|null $brand = null;
    public string|null $callSign = null;
    public Person|null $children = null;
    public Person|string|null $colleague = null;
    public ContactPoint|null $contactPoint = null;
    public Date|null $deathDate = null;
    public Place|null $deathPlace = null;
    public string|null $duns = null;
    public string|null $email = null;
    public string|null $familyName = null;
    public string|null $faxNumber = null;
    public Person|null $follows = null;
    public Organization|Person|null $funder = null;
    public Grant|null $funding = null;
    public GenderType|string|null $gender = null;
    public string|null $givenName = null;
    public string|null $globalLocationNumber = null;
    public EducationalOccupationalCredential|null $hasCredential = null;
    public Occupation|null $hasOccupation = null;
    public OfferCatalog|null $hasOfferCatalog = null;
    public Place|null $hasPOS = null;
    public Distance|QuantitativeValue|null $height = null;
    public ContactPoint|Place|null $homeLocation = null;
    public string|null $honorificPrefix = null;
    public string|null $honorificSuffix = null;
    public InteractionCounter|null $interactionStatistic = null;
    public string|null $isicV4 = null;
    public DefinedTerm|string|null $jobTitle = null;
    public Person|null $knows = null;
    public string|Thing|null $knowsAbout = null;
    public Language|string|null $knowsLanguage = null;
    public Offer|null $makesOffer = null;
    public Organization|ProgramMembership|null $memberOf = null;
    public string|null $naics = null;
    public Country|null $nationality = null;
    public MonetaryAmount|PriceSpecification|null $netWorth = null;
    public OwnershipInfo|Product|null $owns = null;
    public Person|null $parent = null;
    public Event|null $performerIn = null;
    public CreativeWork|string|null $publishingPrinciples = null;
    public Person|null $relatedTo = null;
    public Demand|null $seeks = null;
    public Person|null $sibling = null;
    public Organization|Person|null $sponsor = null;
    public Person|null $spouse = null;
    public string|null $taxID = null;
    public string|null $telephone = null;
    public string|null $vatID = null;
    public QuantitativeValue|null $weight = null;
    public ContactPoint|Place|null $workLocation = null;
    public Organization|null $worksFor = null;

    use HasNoWarnings, HasNoMessages;

    public function description():string {
        return __("A person (alive, dead, undead, or fictional).", 'jsonld-for-wordpress');
    }

} debugger eval code:10:9
