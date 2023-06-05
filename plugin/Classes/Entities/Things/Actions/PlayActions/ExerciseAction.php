<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Actions\PlayActions;

use JsonLDForWP\Plugin\Classes\Entities\Things\Actions\PlayAction;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Diets\Things\MedicalEntities\LifestyleModifications\Diet;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Distance;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\ExercisePlans\Things\MedicalEntities\LifestyleModifications\PhysicalActivities\ExercisePlan;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organizations\LocalBusinesses\SportsActivityLocation as SportsActivityLocation_647e158590e45;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\LocalBusinesses\SportsActivityLocation as SportsActivityLocation_647e158590e48;
use JsonLDForWP\Plugin\Classes\Entities\Things\Events\SportsEvent;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organizations\SportsOrganizations\SportsTeam;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Audience;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\ActionStatusType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Time;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoints\PostalAddress;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\VirtualLocation;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\EntryPoint;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;

/**
* @package JsonLDForWP
*/
class ExerciseAction extends PlayAction{
	protected Diet|null $diet = null;
	protected Distance|null $distance = null;
	protected Place|null $exerciseCourse = null;
	protected ExercisePlan|null $exercisePlan = null;
	protected Diet|null $exerciseRelatedDiet = null;
	protected string|null $exerciseType = null;
	protected Place|null $fromLocation = null;
	protected Person|null $opponent = null;
	protected SportsActivityLocation_647e158590e45|SportsActivityLocation_647e158590e48|null $sportsActivityLocation = null;
	protected SportsEvent|null $sportsEvent = null;
	protected SportsTeam|null $sportsTeam = null;
	protected Place|null $toLocation = null;
	protected Audience|null $audience = null;
	protected Event|null $event = null;
	protected ActionStatusType|null $actionStatus = null;
	protected Organization|Person|null $agent = null;
	protected DateTime|Time|null $endTime = null;
	protected Thing|null $error = null;
	protected Thing|null $instrument = null;
	protected Place|PostalAddress|string|VirtualLocation|null $location = null;
	protected Thing|null $object = null;
	protected Organization|Person|null $participant = null;
	protected Organization|Person|null $provider = null;
	protected Thing|null $result = null;
	protected DateTime|Time|null $startTime = null;
	protected EntryPoint|string|null $target = null;
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
		return __("The act of participating in exertive activity for the purposes of improving health and fitness.", 'jsonld-for-wordpress');
	}
}