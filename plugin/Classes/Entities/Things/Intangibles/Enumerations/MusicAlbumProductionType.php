<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum MusicAlbumProductionType{
	case CompilationAlbum;
	case DJMixAlbum;
	case DemoAlbum;
	case LiveAlbum;
	case MixtapeAlbum;
	case RemixAlbum;
	case SoundtrackAlbum;
	case SpokenWordAlbum;
	case StudioAlbum;

	public function description():string {
		return __("Classification of the album by its type of content: soundtrack, live album, studio album, etc.", 'jsonld-for-wordpress');
	}
}