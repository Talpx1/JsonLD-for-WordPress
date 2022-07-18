<?php

namespace Tests\Traits;

use PDO;

trait UseMemoryDatabase {
    /**
     * DB connection variable
     *
     * @var PDO|null
     */
    private static $db;

    public static function setUpBeforeClass(): void {
        self::createDb();
    }

    public static function setUp(): void {
        if (is_null(self::$db)) self::createDb();
        self::$db->query("
            PRAGMA writable_schema = 1;
            DELETE FROM sqlite_master WHERE TYPE IN ('table', 'index', 'trigger');
            PRAGMA writable_schema = 0;
            VACUUM;
            PRAGMA INTEGRITY_CHECK;
        ");
    }

    public static function tearDownAfterClass(): void {
        self::$db = null;
    }

    public static function createDb() {
        self::$db = new PDO('sqlite::memory:');
    }
}
