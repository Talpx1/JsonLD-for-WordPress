<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Reservations;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Reservation;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Time;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\QualitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ProgramMembership;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\ReservationStatusType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Ticket;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PriceSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class LodgingReservation extends Reservation{
	protected DateTime|Time|null $checkinTime = null;
	protected DateTime|Time|null $checkoutTime = null;
	protected string|null $lodgingUnitDescription = null;
	protected QualitativeValue|string|null $lodgingUnitType = null;
	protected int|QuantitativeValue|null $numAdults = null;
	protected int|QuantitativeValue|null $numChildren = null;
	protected DateTime|null $bookingTime = null;
	protected Organization|Person|null $broker = null;
	protected DateTime|null $modifiedTime = null;
	protected string|null $priceCurrency = null;
	protected ProgramMembership|null $programMembershipUsed = null;
	protected Organization|Person|null $provider = null;
	protected Thing|null $reservationFor = null;
	protected string|null $reservationId = null;
	protected ReservationStatusType|null $reservationStatus = null;
	protected Ticket|null $reservedTicket = null;
	protected float|PriceSpecification|string|null $totalPrice = null;
	protected Organization|Person|null $underName = null;
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
		return __("A reservation for lodging at a hotel, motel, inn, etc.\n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.", 'jsonld-for-wordpress');
	}
}