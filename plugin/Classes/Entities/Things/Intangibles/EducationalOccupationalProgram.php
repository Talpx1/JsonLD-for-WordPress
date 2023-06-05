<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangible;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\DayOfWeek;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\EducationalOccupationalCredential;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Courses\Things\CreativeWorks\LearningResources\Course;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCode;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Demand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offer;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\AlignmentObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValueDistributions\MonetaryAmountDistribution;
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
class EducationalOccupationalProgram extends Intangible{
	protected Date|null $applicationDeadline = null;
	protected Date|null $applicationStartDate = null;
	protected DayOfWeek|null $dayOfWeek = null;
	protected EducationalOccupationalCredential|string|null $educationalCredentialAwarded = null;
	protected string|null $educationalProgramMode = null;
	protected Date|DateTime|null $endDate = null;
	protected DefinedTerm|string|null $financialAidEligible = null;
	protected Course|null $hasCourse = null;
	protected int|null $maximumEnrollment = null;
	protected int|StructuredValue|null $numberOfCredits = null;
	protected CategoryCode|string|null $occupationalCategory = null;
	protected EducationalOccupationalCredential|string|null $occupationalCredentialAwarded = null;
	protected Demand|Offer|null $offers = null;
	protected AlignmentObject|Course|EducationalOccupationalCredential|string|null $programPrerequisites = null;
	protected DefinedTerm|string|null $programType = null;
	protected Organization|Person|null $provider = null;
	protected MonetaryAmountDistribution|null $salaryUponCompletion = null;
	protected Date|DateTime|null $startDate = null;
	protected Duration|null $termDuration = null;
	protected float|null $termsPerYear = null;
	protected string|null $timeOfDay = null;
	protected Duration|null $timeToComplete = null;
	protected MonetaryAmountDistribution|null $trainingSalary = null;
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
		return __("A program offered by an institution which determines the learning progress to achieve an outcome, usually a credential like a degree or certificate. This would define a discrete set of opportunities (e.g., job, courses) that together constitute a program with a clear start, end, set of requirements, and transition to a new occupational opportunity (e.g., a job), or sometimes a higher educational opportunity (e.g., an advanced degree).", 'jsonld-for-wordpress');
	}
}