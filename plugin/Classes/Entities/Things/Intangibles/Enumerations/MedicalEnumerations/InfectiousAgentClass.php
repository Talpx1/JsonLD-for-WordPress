<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations;

/**
* @package JsonLDForWP
*/
enum InfectiousAgentClass{
	case Bacteria;
	case Fungus;
	case MulticellularParasite;
	case Prion;
	case Protozoa;
	case Virus;

	public function description():string {
		return __("Classes of agents or pathogens that transmit infectious diseases. Enumerated type.", 'jsonld-for-wordpress');
	}
}