<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations;

/**
* @package JsonLDForWP
*/
enum GameServerStatus{
	case OfflinePermanently;
	case OfflineTemporarily;
	case Online;
	case OnlineFull;

	public function description():string {
		return __("Status of a game server.", 'jsonld-for-wordpress');
	}
}