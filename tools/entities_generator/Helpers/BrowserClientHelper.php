<?php declare(strict_types=1);

namespace JsonLDForWP\Tools\EntitiesGenerator\Helpers;

final class BrowserClientHelper{
    public static function loadAndWait(string $url, string $waitFor, string $method = 'GET'): void {
        global $client;
		$client->request($method, $url);
        $client->waitFor($waitFor);
	}

    public static function backAndWait(string $waitFor): void {
        global $client;
		$client->back();
        $client->waitFor($waitFor);
	}
}