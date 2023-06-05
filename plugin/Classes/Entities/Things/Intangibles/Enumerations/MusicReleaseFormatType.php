<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum MusicReleaseFormatType{
	case CDFormat;
	case CassetteFormat;
	case DVDFormat;
	case DigitalAudioTapeFormat;
	case DigitalFormat;
	case LaserDiscFormat;
	case VinylFormat;

	public function description():string {
		return __("Format of this release (the type of recording media used, i.e. compact disc, digital media, LP, etc.).", 'jsonld-for-wordpress');
	}
}