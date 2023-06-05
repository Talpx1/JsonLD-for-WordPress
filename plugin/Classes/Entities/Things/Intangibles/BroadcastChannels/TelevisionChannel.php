<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\BroadcastChannels;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\BroadcastChannel;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\BroadcastFrequencySpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Services\CableOrSatelliteService;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Services\BroadcastService;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class TelevisionChannel extends BroadcastChannel{
	protected string|null $broadcastChannelId = null;
	protected BroadcastFrequencySpecification|string|null $broadcastFrequency = null;
	protected string|null $broadcastServiceTier = null;
	protected string|null $genre = null;
	protected CableOrSatelliteService|null $inBroadcastLineup = null;
	protected BroadcastService|null $providesBroadcastService = null;
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
		return __("A unique instance of a television BroadcastService on a CableOrSatelliteService lineup.", 'jsonld-for-wordpress');
	}
}