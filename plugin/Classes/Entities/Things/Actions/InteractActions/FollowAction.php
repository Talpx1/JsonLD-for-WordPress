<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Actions\InteractActions;

use JsonLDForWP\Plugin\Classes\Entities\Things\Actions\InteractAction;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\ActionStatusType;
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
class FollowAction extends InteractAction{
	protected Organization|Person|null $followee = null;
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
		return __("The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to get updates polled from.\n\nRelated actions:\n\n\nBefriendAction: Unlike BefriendAction, FollowAction implies that the connection is not necessarily reciprocal.\nSubscribeAction: Unlike SubscribeAction, FollowAction implies that the follower acts as an active agent constantly/actively polling for updates.\nRegisterAction: Unlike RegisterAction, FollowAction implies that the agent is interested in continuing receiving updates from the object.\nJoinAction: Unlike JoinAction, FollowAction implies that the agent is interested in getting updates from the object.\nTrackAction: Unlike TrackAction, FollowAction refers to the polling of updates of all aspects of animate objects rather than the location of inanimate objects (e.g. you track a package, but you don't follow it).\n", 'jsonld-for-wordpress');
	}
}