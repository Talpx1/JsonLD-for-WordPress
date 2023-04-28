<?php

namespace JsonLDForWP\Plugin\Classes\Entities\Things;

use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Traits\Entities\HasNoMessages;
use JsonLDForWP\Plugin\Traits\Entities\HasNoWarnings;

class CreativeWork extends Thing{

    public Thing|null $about = null;
    public string|null $abstract = null;
    public string|null $accessMode = null;
    public ItemList|null $accessModeSufficient = null;
    public string|null $accessibilityAPI = null;
    public string|null $accessibilityControl = null;
    public string|null $accessibilityFeature = null;
    public string|null $accessibilityHazard = null;
    public string|null $accessibilitySummary = null;
    public Person|null $accountablePerson = null;
    public CreativeWork|URL|null $acquireLicensePage = null;
    public AggregateRating|null $aggregateRating = null;
    public string|null $alternativeHeadline = null;
    public URL|WebPage|null $archivedAt = null;
    public DefinedTerm|string|null $assesses = null;
    public MediaObject|null $associatedMedia = null;
    public Audience|null $audience = null;
    public AudioObject|Clip|MusicRecording|null $audio = null;
    public Organization|Person|null $author = null;
    public string|null $award = null;
    public Person|null $character = null;
    public CreativeWork|string|null $citation = null;
    public Comment|null $comment = null;
    public Integer|null $commentCount = null;
    public string|null $conditionsOfAccess = null;
    public Place|null $contentLocation = null;
    public Rating|string|null $contentRating = null;
    public DateTime|null $contentReferenceTime = null;
    public Organization|Person|null $contributor = null;
    public Organization|Person|null $copyrightHolder = null;
    public string|null $copyrightNotice = null;
    public float|null $copyrightYear = null;
    public CorrectionComment|string|URL|null $correction = null;
    public Country|null $countryOfOrigin = null;
    public DefinedTerm|string|null $creativeWorkStatus = null;
    public Organization|Person|null $creator = null;
    public string|null $creditText = null;
    public Date|DateTime|null $dateCreated = null;
    public Date|DateTime|null $dateModified = null;
    public Date|DateTime|null $datePublished = null;
    public URL|null $discussionUrl = null;
    public string|URL|null $editEIDR = null;
    public Person|null $editor = null;
    public AlignmentObject|null $educationalAlignment = null;
    public DefinedTerm|string|URL|null $educationalLevel = null;
    public DefinedTerm|string|null $educationalUse = null;
    public MediaObject|null $encoding = null;
    public string|URL|null $encodingFormat = null;
    public CreativeWork|null $exampleOfWork = null;
    public Date|DateTime|null $expires = null;
    public Organization|Person|null $funder = null;
    public Grant|null $funding = null;
    public string|URL|null $genre = null;
    public CreativeWork|null $hasPart = null;
    public string|null $headline = null;
    public Language|string|null $inLanguage = null;
    public InteractionCounter|null $interactionStatistic = null;
    public string|null $interactivityType = null;
    public Claim|null $interpretedAsClaim = null;
    public Boolean|null $isAccessibleForFree = null;
    public CreativeWork|Product|URL|null $isBasedOn = null;
    public Boolean|null $isFamilyFriendly = null;
    public CreativeWork|URL|null $isPartOf = null;
    public DefinedTerm|string|URL|null $keywords = null;
    public DefinedTerm|string|null $learningResourceType = null;
    public CreativeWork|URL|null $license = null;
    public Place|null $locationCreated = null;
    public Thing|null $mainEntity = null;
    public Organization|Person|null $maintainer = null;
    public Product|string|URL|null $material = null;
    public QuantitativeValue|string|null $materialExtent = null;
    public Thing|null $mentions = null;
    public Demand|Offer|null $offers = null;
    public DefinedTerm|string|null $pattern = null;
    public Integer|string|null $position = null;
    public Organization|Person|null $producer = null;
    public Organization|Person|null $provider = null;
    public PublicationEvent|null $publication = null;
    public Organization|Person|null $publisher = null;
    public Organization|null $publisherImprint = null;
    public CreativeWork|URL|null $publishingPrinciples = null;
    public Event|null $recordedAt = null;
    public PublicationEvent|null $releasedEvent = null;
    public Review|null $review = null;
    public string|URL|null $schemaVersion = null;
    public Date|null $sdDatePublished = null;
    public CreativeWork|URL|null $sdLicense = null;
    public Organization|Person|null $sdPublisher = null;
    public DefinedTerm|QuantitativeValue|SizeSpecification|string|null $size = null;
    public Organization|null $sourceOrganization = null;
    public Place|null $spatial = null;
    public Place|null $spatialCoverage = null;
    public Organization|Person|null $sponsor = null;
    public DefinedTerm|string|null $teaches = null;
    public DateTime|string|null $temporal = null;
    public DateTime|string|URL|null $temporalCoverage = null;
    public string|null $text = null;
    public URL|null $thumbnailUrl = null;
    public Duration|null $timeRequired = null;
    public CreativeWork|null $translationOfWork = null;
    public Organization|Person|null $translator = null;
    public string|null $typicalAgeRange = null;
    public CreativeWork|URL|null $usageInfo = null;
    public float|string|null $version = null;
    public Clip|VideoObject|null $video = null;
    public CreativeWork|null $workExample = null;
    public CreativeWork|null $workTranslation = null;

    use HasNoMessages, HasNoWarnings;

    public function description():string {
        return __("The most generic kind of creative work, including books, movies, photographs, software programs, etc.", 'jsonld-for-wordpress');
    }

}