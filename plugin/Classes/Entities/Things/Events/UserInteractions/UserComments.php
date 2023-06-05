<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Events\UserInteractions;

use JsonLDForWP\Plugin\Classes\Entities\Things\Events\UserInteraction;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Ratings\AggregateRating;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Audience;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Time;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Duration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\EventAttendanceModeEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Schedule;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\EventStatusType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Grant;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Language;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoints\PostalAddress;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\VirtualLocation;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Demand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offer;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Review;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;

/**
* @package JsonLDForWP
*/
class UserComments extends UserInteraction{
	protected string|null $commentText = null;
	protected Date|DateTime|null $commentTime = null;
	protected Organization|Person|null $creator = null;
	protected CreativeWork|null $discusses = null;
	protected string|null $replyToUrl = null;
	protected Thing|null $about = null;
	protected Person|null $actor = null;
	protected AggregateRating|null $aggregateRating = null;
	protected Organization|Person|null $attendee = null;
	protected Audience|null $audience = null;
	protected Organization|Person|null $composer = null;
	protected Organization|Person|null $contributor = null;
	protected Person|null $director = null;
	protected DateTime|Time|null $doorTime = null;
	protected Duration|null $duration = null;
	protected Date|DateTime|null $endDate = null;
	protected EventAttendanceModeEnumeration|null $eventAttendanceMode = null;
	protected Schedule|null $eventSchedule = null;
	protected EventStatusType|null $eventStatus = null;
	protected Organization|Person|null $funder = null;
	protected Grant|null $funding = null;
	protected Language|string|null $inLanguage = null;
	protected bool|null $isAccessibleForFree = null;
	protected DefinedTerm|string|null $keywords = null;
	protected Place|PostalAddress|string|VirtualLocation|null $location = null;
	protected int|null $maximumAttendeeCapacity = null;
	protected int|null $maximumPhysicalAttendeeCapacity = null;
	protected int|null $maximumVirtualAttendeeCapacity = null;
	protected Demand|Offer|null $offers = null;
	protected Organization|Person|null $organizer = null;
	protected Organization|Person|null $performer = null;
	protected Date|null $previousStartDate = null;
	protected CreativeWork|null $recordedIn = null;
	protected int|null $remainingAttendeeCapacity = null;
	protected Review|null $review = null;
	protected Organization|Person|null $sponsor = null;
	protected Date|DateTime|null $startDate = null;
	protected Event|null $subEvent = null;
	protected Event|null $superEvent = null;
	protected Organization|Person|null $translator = null;
	protected string|null $typicalAgeRange = null;
	protected CreativeWork|null $workFeatured = null;
	protected CreativeWork|null $workPerformed = null;
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
		return __("UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.", 'jsonld-for-wordpress');
	}
}