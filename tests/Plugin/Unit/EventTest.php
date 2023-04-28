<?php

namespace Tests\Plugin\Unit;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use Tests\TestCase;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;
use JsonLDForWP\Plugin\Classes\Entities\Interfaces\WithMessages;

use function Brain\Monkey\Functions\stubs;

/**
 * @coversDefaultClass \JsonLDForWP\Plugin\Classes\Entities\Event
 */
class EventTest extends TestCase {

    /**
     * @test
     * @covers ::construct
     */
    public function test_event_gets_constructed() {
        $event = new Event([
            "additionalType" => self::$faker->word,
            "alternateName" => self::$faker->word,
            "description" => self::$faker->word,
            "disambiguatingDescription" => self::$faker->word,
        ]);
        $this->assertInstanceOf(Event::class, $event);
    }

    /**
     * @test
     * @covers ::construct
     */
    public function test_event_inherit_from_thing() {
        $event = new Event([
            "additionalType" => self::$faker->word,
            "alternateName" => self::$faker->word,
            "description" => self::$faker->word,
            "disambiguatingDescription" => self::$faker->word,
        ]);
        $this->assertInstanceOf(Event::class, $event);
        $this->assertInstanceOf(Thing::class, $event);
    }

    /**
     * @test
     * @covers ::warnings
     */
    public function test_event_does_not_have_warnings() {
        stubs(['__']);
        $event = new Event([]);
        $this->assertNull($event->warnings());
    }

    /**
     * @test
     * @covers ::warnings
     */
    public function test_event_does_not_have_messages() {
        stubs(['__']);
        $event = new Event([]);
        $this->assertNull($event->messages());
    }

    /**
     * @test
     * @covers ::description
     */
    public function test_event_has_description() {
        stubs(['__']);
        $event = new Event([]);
        $this->assertIsString($event->description());
        $this->assertEquals($event->description(), 'An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the offers property. Repeated events may be structured as separate Event objects.');
    }

    /**
     * @test
     * @covers ::getFields
     */
    public function test_can_get_event_fields() { //FIXME
        $event = new Event([]);
        $this->assertIsArray($event->getFields());
        $this->assertCount(49, $event->getFields());
        $this->assertContains([
            'about' => ['Thing','null'],
            'actor' => ['Person','null'],
            'aggregateRating' => ['AggregateRating','null'],
            'attendee' => ['Organization','Person','null'],
            'audience' => ['Audience','null'],
            'composer' => ['Organization','Person','null'],
            'contributor' => ['Organization','Person','null'],
            'director' => ['Person','null'],
            'doorTime' => ['DateTime','Time','null'],
            'duration' => ['Duration','null'],
            'endDate' => ['Date','DateTime','null'],
            'eventAttendanceMode' => ['EventAttendanceModeEnumeration','null'],
            'eventSchedule' => ['Schedule','null'],
            'eventStatus' => ['EventStatusType','null'],
            'funder' => ['Organization','Person','null'],
            'funding' => ['Grant','null'],
            'inLanguage' => ['Language','Text','null'],
            'isAccessibleForFree' => ['Boolean','null'],
            'keywords' => ['DefinedTerm','Text','URL','null'],
            'location' => ['Place','PostalAddress','Text','VirtualLocation','null'],
            'maximumAttendeeCapacity' => ['Integer','null'],
            'maximumPhysicalAttendeeCapacity' => ['Integer','null'],
            'maximumVirtualAttendeeCapacity' => ['Integer','null'],
            'offers' => ['Demand','Offer','null'],
            'organizer' => ['Organization','Person','null'],
            'performer' => ['Organization','Person','null'],
            'previousStartDate' => ['Date','null'],
            'recordedIn' => ['CreativeWork','null'],
            'remainingAttendeeCapacity' => ['Integer','null'],
            'review' => ['Review','null'],
            'sponsor' => ['Organization','Person','null'],
            'startDate' => ['Date','DateTime','null'],
            'subEvent' => ['Event','null'],
            'superEvent' => ['Event','null'],
            'translator' => ['Organization','Person','null'],
            'typicalAgeRange' => ['Text','null'],
            'workFeatured' => ['CreativeWork','null'],
            'workPerformed' => ['CreativeWork','null'],
        ], $event->getFields());
    }

}
