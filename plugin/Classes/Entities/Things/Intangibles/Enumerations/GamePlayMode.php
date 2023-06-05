<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum GamePlayMode{
	case CoOp;
	case MultiPlayer;
	case SinglePlayer;

	public function description():string {
		return __("Indicates whether this game is multi-player, co-op or single-player.", 'jsonld-for-wordpress');
	}
}