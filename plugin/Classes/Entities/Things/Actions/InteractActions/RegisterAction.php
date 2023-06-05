<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Actions\InteractActions;

use JsonLDForWP\Plugin\Classes\Entities\Things\Actions\InteractAction;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\ActionStatusType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Time;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
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
class RegisterAction extends InteractAction{
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
		return __("The act of registering to be a user of a service, product or web page.\n\nRelated actions:\n\n\nJoinAction: Unlike JoinAction, RegisterAction implies you are registering to be a user of a service, not a group/team of people.\nFollowAction: Unlike FollowAction, RegisterAction doesn't imply that the agent is expecting to poll for updates from the object.\nSubscribeAction: Unlike SubscribeAction, RegisterAction doesn't imply that the agent is expecting updates from the object.\n", 'jsonld-for-wordpress');
	}
}