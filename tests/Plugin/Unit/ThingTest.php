<?php

namespace Tests\Plugin\Unit;
use Tests\TestCase;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Interfaces\WithMessages;

use function Brain\Monkey\Functions\stubs;

/**
 * @coversDefaultClass \JsonLDForWP\Plugin\Classes\Entities\Thing
 */
class ThingTest extends TestCase {

    /**
     * @test
     * @covers ::construct
     */
    public function test_thing_gets_constructed() {
        $entity_description = self::$faker->paragraph;
        $thing = new Thing([
            "additionalType" => self::$faker->word,
            "alternateName" => self::$faker->word,
            "description" => self::$faker->word,
            "disambiguatingDescription" => self::$faker->word,
        ]);
        $this->assertInstanceOf(Thing::class, $thing);
    }
    
    /**
     * @test
     * @covers ::warnings
     */
    public function test_thing_has_warnings() {
        stubs(['__']);
        $thing = new Thing([]);
        $this->assertIsArray($thing->warnings());
        $this->assertIsString($thing->warnings()[0]);
        $this->assertEquals($thing->warnings()[0], 'This is a highly generic entity and should NEVER be used');
    }

    /**
     * @test
     * @covers ::getFields
     */
    public function test_can_get_thing_fields() { //FIXME
        $thing = new Thing([]);
        $this->assertIsArray($thing->getFields());
        $this->assertCount(12, $thing->getFields());
        $this->assertEquals([
            'additionalType' => ['string','null'],
            'alternateName' => ['string','null'],
            'description' => ['string','null'],
            'disambiguatingDescription' => ['string','null'],
            'identifier' => ['PropertyValue', 'string','null'],
            'image' => ['ImageObject', 'string','null'],
            'mainEntityOfPage' => ['CreativeWork', 'string','null'],
            'name' => ['string','null'],
            'potentialAction' => ['Action','null'],
            'sameAs' => ['string','null'],
            'subjectOf' => ['CreativeWork', 'Event','null'],
            'string' => ['string','null'],
        ], $thing->getFields());
    }

}
