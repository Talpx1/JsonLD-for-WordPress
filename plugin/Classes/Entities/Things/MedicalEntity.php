<?php

namespace JsonLDForWP\Plugin\Classes\Entities\Things;

use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Traits\Entities\HasHighlyGenericWarning;
use JsonLDForWP\Plugin\Traits\Entities\HasNoWarnings;
use JsonLDForWP\Plugin\Traits\Entities\HasNoMessages;

class MedicalEntity extends Thing{

    public MedicalCode|null $code = null;
    public Grant|null $funding = null;
    public MedicalGuideline|null $guideline = null;
    public DrugLegalStatus|MedicalEnumeration|string|null $legalStatus = null;
    public MedicineSystem|null $medicineSystem = null;
    public Organization|null $recognizingAuthority = null;
    public MedicalSpecialty|null $relevantSpecialty = null;
    public MedicalStudy|null $study = null;

    use HasHighlyGenericWarning, HasNoMessages;

    public function description():string {
        return __("The most generic type of entity related to health and the practice of medicine.", 'jsonld-for-wordpress');
    }

}
