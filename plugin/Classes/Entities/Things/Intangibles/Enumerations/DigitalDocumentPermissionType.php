<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum DigitalDocumentPermissionType{
	case CommentPermission;
	case ReadPermission;
	case WritePermission;

	public function description():string {
		return __("A type of permission which can be granted for accessing a digital document.", 'jsonld-for-wordpress');
	}
}