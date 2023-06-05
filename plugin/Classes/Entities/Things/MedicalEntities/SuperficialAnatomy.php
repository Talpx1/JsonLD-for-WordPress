<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities;

use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntity;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalStructure;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalSystem;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalCondition;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalProcedures\TherapeuticProcedures\MedicalTherapy;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCodes\MedicalCodes\Things\MedicalEntities\MedicalIntangibles\MedicalCode as MedicalCode_647e171e5fb11;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCodes\MedicalCode as MedicalCode_647e171e5fb14;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\MedicalCode as MedicalCode_647e171e5fb15;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Grant;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalGuideline;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\DrugLegalStatus;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations\MedicineSystem;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations\MedicalSpecialties\Things\Intangibles\Enumerations\Specialties\MedicalSpecialty as MedicalSpecialty_647e171e5fb69;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations\MedicalSpecialty as MedicalSpecialty_647e171e5fb6c;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\Specialties\MedicalSpecialty as MedicalSpecialty_647e171e5fb6d;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalStudy;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class SuperficialAnatomy extends MedicalEntity{
	protected string|null $associatedPathophysiology = null;
	protected AnatomicalStructure|AnatomicalSystem|null $relatedAnatomy = null;
	protected MedicalCondition|null $relatedCondition = null;
	protected MedicalTherapy|null $relatedTherapy = null;
	protected string|null $significance = null;
	protected MedicalCode_647e171e5fb11|MedicalCode_647e171e5fb14|MedicalCode_647e171e5fb15|null $code = null;
	protected Grant|null $funding = null;
	protected MedicalGuideline|null $guideline = null;
	protected DrugLegalStatus|MedicalEnumeration|string|null $legalStatus = null;
	protected MedicineSystem|null $medicineSystem = null;
	protected Organization|null $recognizingAuthority = null;
	protected MedicalSpecialty_647e171e5fb69|MedicalSpecialty_647e171e5fb6c|MedicalSpecialty_647e171e5fb6d|null $relevantSpecialty = null;
	protected MedicalStudy|null $study = null;
	protected string|null $additionalType = null;
	protected string|null $alternateName = null;
	protected string|TextObject|null $description = null;
	protected string|null $disambiguatingDescription = null;
	protected PropertyValue|string|null $identifier = null;
	protected ImageObject|string|null $image = null;
	protected CreativeWork|string|null $mainEntityOfPage = null;
	protected string|null $name = null;
	protected Action|null $potentialAction = null;
	protected string|null $sameAs = null;
	protected CreativeWork|Event|null $subjectOf = null;
	protected string|null $url = null;

	public function description():string {
		return __("Anatomical features that can be observed by sight (without dissection), including the form and proportions of the human body as well as surface landmarks that correspond to deeper subcutaneous structures. Superficial anatomy plays an important role in sports medicine, phlebotomy, and other medical specialties as underlying anatomical structures can be identified through surface palpation. For example, during back surgery, superficial anatomy can be used to palpate and count vertebrae to find the site of incision. Or in phlebotomy, superficial anatomy can be used to locate an underlying vein; for example, the median cubital vein can be located by palpating the borders of the cubital fossa (such as the epicondyles of the humerus) and then looking for the superficial signs of the vein, such as size, prominence, ability to refill after depression, and feel of surrounding tissue support. As another example, in a subluxation (dislocation) of the glenohumeral joint, the bony structure becomes pronounced with the deltoid muscle failing to cover the glenohumeral joint allowing the edges of the scapula to be superficially visible. Here, the superficial anatomy is the visible edges of the scapula, implying the underlying dislocation of the joint (the related anatomical structure).", 'jsonld-for-wordpress');
	}
}