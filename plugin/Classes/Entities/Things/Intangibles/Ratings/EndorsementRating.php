<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Ratings;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Rating;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class EndorsementRating extends Rating{
	protected Organization|Person|null $author = null;
	protected float|string|null $bestRating = null;
	protected string|null $ratingExplanation = null;
	protected float|string|null $ratingValue = null;
	protected string|null $reviewAspect = null;
	protected float|string|null $worstRating = null;
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
		return __("An EndorsementRating is a rating that expresses some level of endorsement, for example inclusion in a 'critic's pick' blog, a\n'Like' or '+1' on a social network. It can be considered the result of an EndorseAction in which the object of the action is rated positively by\nsome agent. As is common elsewhere in schema.org, it is sometimes more useful to describe the results of such an action without explicitly describing the Action.\n\nAn EndorsementRating may be part of a numeric scale or organized system, but this is not required: having an explicit type for indicating a positive,\nendorsement rating is particularly useful in the absence of numeric scales as it helps consumers understand that the rating is broadly positive.", 'jsonld-for-wordpress');
	}
}