<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Actions\CreateActions;

use JsonLDForWP\Plugin\Classes\Entities\Things\Actions\CreateAction;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organizations\LocalBusinesses\FoodEstablishment as FoodEstablishment_647e1568a36dd;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\LocalBusinesses\FoodEstablishment as FoodEstablishment_647e1568a36e2;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Events\FoodEvent;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\HowTos\Recipe;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\ActionStatusType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
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
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class CookAction extends CreateAction{
	protected FoodEstablishment_647e1568a36dd|FoodEstablishment_647e1568a36e2|Place|null $foodEstablishment = null;
	protected FoodEvent|null $foodEvent = null;
	protected Recipe|null $recipe = null;
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
		return __("The act of producing/preparing food.", 'jsonld-for-wordpress');
	}
}