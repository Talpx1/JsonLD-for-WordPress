<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\BioChemEntities;

use JsonLDForWP\Plugin\Classes\Entities\Things\BioChemEntity;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalStructure;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalSystem;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalCondition;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Grant;
use JsonLDForWP\Plugin\Classes\Entities\Things\Taxon;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class Gene extends BioChemEntity{
	protected Gene|null $alternativeOf = null;
	protected BioChemEntity|null $encodesBioChemEntity = null;
	protected AnatomicalStructure|AnatomicalSystem|BioChemEntity|DefinedTerm|null $expressedIn = null;
	protected string|null $hasBioPolymerSequence = null;
	protected MedicalCondition|PropertyValue|string|null $associatedDisease = null;
	protected BioChemEntity|null $bioChemInteraction = null;
	protected BioChemEntity|null $bioChemSimilarity = null;
	protected DefinedTerm|null $biologicalRole = null;
	protected Grant|null $funding = null;
	protected BioChemEntity|null $hasBioChemEntityPart = null;
	protected DefinedTerm|PropertyValue|string|null $hasMolecularFunction = null;
	protected PropertyValue|string|null $hasRepresentation = null;
	protected Gene|null $isEncodedByBioChemEntity = null;
	protected DefinedTerm|PropertyValue|string|null $isInvolvedInBiologicalProcess = null;
	protected DefinedTerm|PropertyValue|string|null $isLocatedInSubcellularLocation = null;
	protected BioChemEntity|null $isPartOfBioChemEntity = null;
	protected DefinedTerm|Taxon|string|null $taxonomicRange = null;
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
		return __("A discrete unit of inheritance which affects one or more biological traits (Source: https://en.wikipedia.org/wiki/Gene). Examples include FOXP2 (Forkhead box protein P2), SCARNA21 (small Cajal body-specific RNA 21), A- (agouti genotype).", 'jsonld-for-wordpress');
	}
}