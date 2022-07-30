<?php

namespace Tests\Framework\Unit;

use JsonLDForWP\Framework\Settings\Enums\SettingTypes;
use JsonLDForWP\Framework\Settings\Setting;
use JsonLDForWP\Framework\Settings\SettingsSection;
use Tests\TestCase;

use function Brain\Monkey\Functions\stubs;

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
        stubs(['sanitize_title']);
        $this->assertInstanceOf(Setting::class, Setting::create($settingSection, self::$faker->word, self::$faker->slug));
    }

    /** 
     * @test  
     * @covers ::setType
     */
    public function test_can_set_type_of_setting_object() {
        $settingSection = $this->createMock(SettingsSection::class);
        stubs(['sanitize_title']);
        $setting = Setting::create($settingSection, self::$faker->word, slugify(self::$faker->word));
        $this->assertInstanceOf(Setting::class, $setting);
        $setting->setType(SettingTypes::BOOL);
        $this->assertTrue($setting->type() === SettingTypes::BOOL->realValue());
    }
}
