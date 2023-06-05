<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum BookFormatType{
	case AudiobookFormat;
	case EBook;
	case GraphicNovel;
	case Hardcover;
	case Paperback;

	public function description():string {
		return __("The publication format of the book.", 'jsonld-for-wordpress');
	}
}