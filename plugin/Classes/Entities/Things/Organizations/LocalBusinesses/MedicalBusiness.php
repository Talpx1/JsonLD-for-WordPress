<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Organizations\LocalBusinesses;

/**
* @package JsonLDForWP
*/
enum MedicalBusiness{
	case CommunityHealth;
	case Dentist;
	case Dermatology;
	case DietNutrition;
	case Emergency;
	case Geriatric;
	case Gynecologic;
	case MedicalClinic;
	case Midwifery;
	case Nursing;
	case Obstetric;
	case Oncologic;
	case Optician;
	case Optometric;
	case Otolaryngologic;
	case Pediatric;
	case Pharmacy;
	case Physician;
	case Physiotherapy;
	case PlasticSurgery;
	case Podiatric;
	case PrimaryCare;
	case Psychiatric;
	case PublicHealth;

	public function description():string {
		return __("A particular physical or virtual business of an organization for medical purposes. Examples of MedicalBusiness include different businesses run by health professionals.", 'jsonld-for-wordpress');
	}
}