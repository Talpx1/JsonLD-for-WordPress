<?php 

namespace JsonLDForWP\Plugin\Classes\Entities\Things;

use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Traits\Entities\HasNoMessages;
use JsonLDForWP\Plugin\Traits\Entities\HasNoWarnings;

class Event extends Thing{
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
    protected Language|Text|null $inLanguage = null;
    protected Boolean|null $isAccessibleForFree = null;
    protected DefinedTerm|Text|URL|null $keywords = null;
    protected Place|PostalAddress|Text|VirtualLocation|null $location = null;
    protected Integer|null $maximumAttendeeCapacity = null;
    protected Integer|null $maximumPhysicalAttendeeCapacity = null;
    protected Integer|null $maximumVirtualAttendeeCapacity = null;
    protected Demand|Offer|null $offers = null;
    protected Organization|Person|null $organizer = null;
    protected Organization|Person|null $performer = null;
    protected Date|null $previousStartDate = null;
    protected CreativeWork|null $recordedIn = null;
    protected Integer|null $remainingAttendeeCapacity = null;
    protected Review|null $review = null;
    protected Organization|Person|null $sponsor = null;
    protected Date|DateTime|null $startDate = null;
    protected Event|null $subEvent = null;
    protected Event|null $superEvent = null;
    protected Organization|Person|null $translator = null;
    protected Text|null $typicalAgeRange = null;
    protected CreativeWork|null $workFeatured = null;
    protected CreativeWork|null $workPerformed = null;

    use HasNoMessages, HasNoWarnings;

    public function description():string {
        return __("An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the offers property. Repeated events may be structured as separate Event objects.", 'jsonld-for-wordpress');
    }
}