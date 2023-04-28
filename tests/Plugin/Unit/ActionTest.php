<?php

namespace Tests\Plugin\Unit;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use Tests\TestCase;
use JsonLDForWP\Plugin\Classes\Entities\Interfaces\WithMessages;

use function Brain\Monkey\Functions\stubs;

/**
 * @coversDefaultClass \JsonLDForWP\Plugin\Classes\Entities\Action
 */
class ActionTest extends TestCase {

    /**
     * @test
     * @covers ::construct
     */
    public function test_action_gets_constructed() {
        $action = new Action([
            "additionalType" => self::$faker->word,
            "alternateName" => self::$faker->word,
            "description" => self::$faker->word,
            "disambiguatingDescription" => self::$faker->word,
        ]);
        $this->assertInstanceOf(Action::class, $action);
    }

    /**
     * @test
     * @covers ::construct
     */
    public function test_action_inherit_from_thing() {
        $action = new Action([
            "additionalType" => self::$faker->word,
            "alternateName" => self::$faker->word,
            "description" => self::$faker->word,
            "disambiguatingDescription" => self::$faker->word,
        ]);
        $this->assertInstanceOf(Action::class, $action);
        $this->assertInstanceOf(Thing::class, $action);
    }

    /**
     * @test
     * @covers ::warnings
     */
    public function test_action_does_not_have_warnings() {
        stubs(['__']);
        $action = new Action([]);
        $this->assertNull($action->warnings());
    }

    /**
     * @test
     * @covers ::warnings
     */
    public function test_action_does_not_have_messages() {
        stubs(['__']);
        $action = new Action([]);
        $this->assertNull($action->messages());
    }

    /**
     * @test
     * @covers ::description
     */
    public function test_event_has_description() {
        stubs(['__']);
        $event = new Action([]);
        $this->assertIsString($event->description());
        $this->assertEquals($event->description(), 'An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.');
    }

    /**
     * @test
     * @covers ::getFields
     */
    public function test_can_get_action_fields() { //FIXME
        $action = new Action([]);
        $this->assertIsArray($action->getFields());
        $this->assertCount(23, $action->getFields());
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
            'actionAttendanceMode' => ['EventAttendanceModeEnumeration','null'],
            'actionSchedule' => ['Schedule','null'],
            'actionStatus' => ['EventStatusType','null'],
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
            'subEvent' => ['Action','null'],
            'superEvent' => ['Action','null'],
            'translator' => ['Organization','Person','null'],
            'typicalAgeRange' => ['Text','null'],
            'workFeatured' => ['CreativeWork','null'],
            'workPerformed' => ['CreativeWork','null'],
        ], $action->getFields());
    }

}
