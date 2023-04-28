<?php

namespace JsonLDForWP\Plugin\Classes\Entities\Things;

use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Traits\Entities\HasNoMessages;
use JsonLDForWP\Plugin\Traits\Entities\HasNoWarnings;

class BioChemEntity extends Thing{

    public MedicalCondition|PropertyValue|URL|null $associatedDisease = null;
    public BioChemEntity|null $bioChemInteraction = null;
    public BioChemEntity|null $bioChemSimilarity = null;
    public DefinedTerm|null $biologicalRole = null;
    public Grant|null $funding = null;
    public BioChemEntity|null $hasBioChemEntityPart = null;
    public DefinedTerm|PropertyValue|URL|null $hasMolecularFunction = null;
    public PropertyValue|string|URL|null $hasRepresentation = null;
    public Gene|null $isEncodedByBioChemEntity = null;
    public DefinedTerm|PropertyValue|URL|null $isInvolvedInBiologicalProcess = null;
    public DefinedTerm|PropertyValue|URL|null $isLocatedInSubcellularLocation = null;
    public BioChemEntity|null $isPartOfBioChemEntity = null;
    public DefinedTerm|Taxon|string|URL|null $taxonomicRange = null;

    use HasNoMessages, HasNoWarnings;

    public function description():string {
        return __("Any biological, chemical, or biochemical thing. For example: a protein; a gene; a chemical; a synthetic chemical.", 'jsonld-for-wordpress');
    }

}
