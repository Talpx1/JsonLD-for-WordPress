<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\EducationalOccupationalPrograms;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\EducationalOccupationalProgram;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCode;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValueDistributions\MonetaryAmountDistribution;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\DayOfWeek;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\EducationalOccupationalCredential;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Courses\Things\CreativeWorks\LearningResources\Course as Course_647e168827bd4;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Course as Course_647e168827bd7;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\LearningResources\Course as Course_647e168827bd8;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Demand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offer;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\AlignmentObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Duration;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class WorkBasedProgram extends EducationalOccupationalProgram{
	protected CategoryCode|string|null $occupationalCategory = null;
	protected MonetaryAmountDistribution|null $trainingSalary = null;
	protected Date|null $applicationDeadline = null;
	protected Date|null $applicationStartDate = null;
	protected DayOfWeek|null $dayOfWeek = null;
	protected EducationalOccupationalCredential|string|null $educationalCredentialAwarded = null;
	protected string|null $educationalProgramMode = null;
	protected Date|DateTime|null $endDate = null;
	protected DefinedTerm|string|null $financialAidEligible = null;
	protected Course_647e168827bd4|Course_647e168827bd7|Course_647e168827bd8|null $hasCourse = null;
	protected int|null $maximumEnrollment = null;
	protected int|StructuredValue|null $numberOfCredits = null;
	protected EducationalOccupationalCredential|string|null $occupationalCredentialAwarded = null;
	protected Demand|Offer|null $offers = null;
	protected AlignmentObject|Course_647e168827bd4|Course_647e168827bd7|Course_647e168827bd8|EducationalOccupationalCredential|string|null $programPrerequisites = null;
	protected DefinedTerm|string|null $programType = null;
	protected Organization|Person|null $provider = null;
	protected MonetaryAmountDistribution|null $salaryUponCompletion = null;
	protected Date|DateTime|null $startDate = null;
	protected Duration|null $termDuration = null;
	protected float|null $termsPerYear = null;
	protected string|null $timeOfDay = null;
	protected Duration|null $timeToComplete = null;
	protected int|StructuredValue|null $typicalCreditsPerTerm = null;
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
		return __("A program with both an educational and employment component. Typically based at a workplace and structured around work-based learning, with the aim of instilling competencies related to an occupation. WorkBasedProgram is used to distinguish programs such as apprenticeships from school, college or other classroom based educational programs.", 'jsonld-for-wordpress');
	}
}