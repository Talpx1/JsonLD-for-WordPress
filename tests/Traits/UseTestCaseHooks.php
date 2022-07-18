<?php

namespace Tests\Traits;

trait UseTestCaseHooks {
    /**
     * Before class tests hook
     *
     * @var array<callable>
     */
    protected static $before_class = [];

    /**
     * After class tests hook
     *
     * @var array<callable>
     */
    protected static $after_class = [];

    /**
     * Before test hook
     *
     * @var array<callable>
     */
    protected static $before_test = [];

    /**
     * After test hook
     *
     * @var array<callable>
     */
    protected static $after_test = [];



    protected static function setUpBeforeClass(): void {
        foreach (self::$before_class as $callback) $callback();
    }

    protected static function tearDownAfterClass(): void {
        foreach (self::$after_class as $callback) $callback();
    }

    protected static function setUp(): void {
        foreach (self::$before_test as $callback) $callback();
    }

    protected static function tearDown(): void {
        foreach (self::$after_test as $callback) $callback();
    }
}
