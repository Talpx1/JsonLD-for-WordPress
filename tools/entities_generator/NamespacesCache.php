<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator;

final class NamespacesCache{
    private static $cache = [];

    public static function add(string $class, string $namespace):void{
        if(!array_key_exists($class, self::$cache)) self::$cache[$class] = [];

        if(!in_array($namespace, self::$cache[$class])) self::$cache[$class][] = $namespace;
    }

    public static function get(string $class):array{
        if(!array_key_exists($class, self::$cache)) throw new \RuntimeException("Cache Miss!");

        return self::$cache[$class];
    }

    public static function has(string $class):bool{
        return array_key_exists($class, self::$cache);        
    }
}