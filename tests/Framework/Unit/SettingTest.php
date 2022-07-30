<?php

namespace Tests\Framework\Unit;

use JsonLDForWP\Framework\Settings\Setting;
use JsonLDForWP\Framework\Settings\SettingsSection;
use Tests\TestCase;

/**
 * @coversDefaultClass \JsonLDForWP\Framework\Settings\Setting
 */
class SettingTest extends TestCase {

    /** 
     * @test  
     * @covers ::create
     */
    public function test_setting_object_gets_instantiated() {
        $settingSection = $this->createMock(SettingsSection::class);
        $this->assertInstanceOf(Setting::class, Setting::create($settingSection, self::$faker->word, self::$faker->slug));
    }
}
