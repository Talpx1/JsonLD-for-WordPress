<?php

namespace Tests\Traits;

use PDO;
use RuntimeException;

trait UseMemoryDatabase {
    /**
     * DB connection variable
     *
     * @var PDO|null
     */
    private static $db;

    protected static function refreshDb(): void {
        if (is_null(self::$db)) self::createDb();
        self::$db->query(
            "PRAGMA writable_schema = 1;
            DELETE FROM sqlite_master WHERE TYPE IN ('table', 'index', 'trigger');
            PRAGMA writable_schema = 0;
            VACUUM;
            PRAGMA INTEGRITY_CHECK;"
        );
    }

    protected static function destroyDb(): void {
        self::refreshDb();
        self::$db = null;
    }

    protected static function createDb() {
        self::$db = new PDO('sqlite::memory:');
    }
}

if (trait_exists("UseTestCaseHooks")) {
    self::$before_class[] = self::createDb();
    self::$after_class[] = self::destroyDb();
    self::$before_test[] = self::refreshDb();
} else throw new RuntimeException("UseTestCaseHooks Trait not found. It is required to run other traits in tests.");
