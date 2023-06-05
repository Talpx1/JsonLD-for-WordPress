<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum MusicAlbumReleaseType{
	case AlbumRelease;
	case BroadcastRelease;
	case EPRelease;
	case SingleRelease;

	public function description():string {
		return __("The kind of release which this album is: single, EP or album.", 'jsonld-for-wordpress');
	}
}