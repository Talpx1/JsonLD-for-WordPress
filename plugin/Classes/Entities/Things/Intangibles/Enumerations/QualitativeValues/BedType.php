<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\QualitativeValues;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\QualitativeValue;

/**
* @package JsonLDForWP
*/
class BedType extends QualitativeValue{

	public function description():string {
		return __("A type of bed. This is used for indicating the bed or beds available in an accommodation.", 'jsonld-for-wordpress');
	}
}