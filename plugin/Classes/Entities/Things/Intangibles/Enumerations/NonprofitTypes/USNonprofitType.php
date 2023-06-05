<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\NonprofitTypes;

/**
* @package JsonLDForWP
*/
enum USNonprofitType{
	case Nonprofit501a;
	case Nonprofit501c1;
	case Nonprofit501c10;
	case Nonprofit501c11;
	case Nonprofit501c12;
	case Nonprofit501c13;
	case Nonprofit501c14;
	case Nonprofit501c15;
	case Nonprofit501c16;
	case Nonprofit501c17;
	case Nonprofit501c18;
	case Nonprofit501c19;
	case Nonprofit501c2;
	case Nonprofit501c20;
	case Nonprofit501c21;
	case Nonprofit501c22;
	case Nonprofit501c23;
	case Nonprofit501c24;
	case Nonprofit501c25;
	case Nonprofit501c26;
	case Nonprofit501c27;
	case Nonprofit501c28;
	case Nonprofit501c3;
	case Nonprofit501c4;
	case Nonprofit501c5;
	case Nonprofit501c6;
	case Nonprofit501c7;
	case Nonprofit501c8;
	case Nonprofit501c9;
	case Nonprofit501d;
	case Nonprofit501e;
	case Nonprofit501f;
	case Nonprofit501k;
	case Nonprofit501n;
	case Nonprofit501q;
	case Nonprofit527;

	public function description():string {
		return __("USNonprofitType: Non-profit organization type originating from the United States.", 'jsonld-for-wordpress');
	}
}