<?php

namespace Tests\Traits;

use RuntimeException;

trait UseFaker {
    /**
     * Faker instance
     *
     * @var \Faker\Generator|null
     */
    public static $faker;

    protected static function createFaker(): void {
        self::$faker = \Faker\Factory::create();
    }

    protected static function destroyFaker(): void {
        self::$faker = null;
    }
}

if (trait_exists("UseTestCaseHooks")) {
    self::$before_class[] = self::createFaker();
    self::$after_class[] = self::destroyFaker();
} else throw new RuntimeException("UseTestCaseHooks Trait not found. It is required to run other traits in tests.");
