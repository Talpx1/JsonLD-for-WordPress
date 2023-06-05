<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator\Helpers;

use ErrorException;

final class ScriptHelper{
    private const SCRIPTS_PATH = __DIR__."/../scripts";

    public static function executeScriptFromFile(string $script_name, string $script_ext = 'js'):mixed {
        global $client;
        return $client->executeScript(self::getScriptFileContent($script_name, $script_ext));
    }

    private static function getScriptFileContent(string $script_name, string $script_ext): string{
        $file = self::SCRIPTS_PATH."/{$script_name}.{$script_ext}";
        if(!self::canGetScriptContent($file)) throw new ErrorException("File {$file} is invalid or unaccessible");

        $content = file_get_contents($file);
        if($content === false) throw new ErrorException("Error while loading file {$file}");
        
        return $content;
    }

    private static function canGetScriptContent(string $file): bool{
        return file_exists($file) && is_readable($file) && !is_dir($file);
    }

}