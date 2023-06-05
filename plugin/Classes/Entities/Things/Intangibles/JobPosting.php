<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeArea;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoint;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\MonetaryAmount;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PriceSpecification;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\EducationalOccupationalCredential;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValueDistributions\MonetaryAmountDistribution;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\OccupationalExperienceRequirements;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCode;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Occupation;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class JobPosting extends Intangible{
	protected AdministrativeArea|null $applicantLocationRequirements = null;
	protected ContactPoint|null $applicationContact = null;
	protected MonetaryAmount|float|PriceSpecification|null $baseSalary = null;
	protected Date|DateTime|null $datePosted = null;
	protected bool|null $directApply = null;
	protected EducationalOccupationalCredential|string|null $educationRequirements = null;
	protected string|null $eligibilityToWorkRequirement = null;
	protected string|null $employerOverview = null;
	protected string|null $employmentType = null;
	protected Organization|null $employmentUnit = null;
	protected MonetaryAmount|MonetaryAmountDistribution|float|null $estimatedSalary = null;
	protected bool|null $experienceInPlaceOfEducation = null;
	protected OccupationalExperienceRequirements|string|null $experienceRequirements = null;
	protected Organization|Person|null $hiringOrganization = null;
	protected string|null $incentiveCompensation = null;
	protected DefinedTerm|string|null $industry = null;
	protected string|null $jobBenefits = null;
	protected bool|null $jobImmediateStart = null;
	protected Place|null $jobLocation = null;
	protected string|null $jobLocationType = null;
	protected Date|string|null $jobStartDate = null;
	protected CategoryCode|string|null $occupationalCategory = null;
	protected DefinedTerm|string|null $physicalRequirement = null;
	protected EducationalOccupationalCredential|string|null $qualifications = null;
	protected Occupation|null $relevantOccupation = null;
	protected string|null $responsibilities = null;
	protected string|null $salaryCurrency = null;
	protected string|null $securityClearanceRequirement = null;
	protected DefinedTerm|string|null $sensoryRequirement = null;
	protected DefinedTerm|string|null $skills = null;
	protected string|null $specialCommitments = null;
	protected string|null $title = null;
	protected int|null $totalJobOpenings = null;
	protected Date|DateTime|null $validThrough = null;
	protected string|null $workHours = null;
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
		return __("A listing that describes a job opening in a certain organization.", 'jsonld-for-wordpress');
	}
}