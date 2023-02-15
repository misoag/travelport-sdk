<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeBaseAirSegment StructType
 * @subpackage Structs
 */
class TypeBaseAirSegment extends Segment
{
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - documentation: The Origin Destination Grouping of this segment.
     * - use: required
     * @var int
     */
    protected int $Group;
    /**
     * The SponsoredFltInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SponsoredFltInfo
     * @var \Travelport\UniversalRecord\StructType\SponsoredFltInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\SponsoredFltInfo $SponsoredFltInfo = null;
    /**
     * The CodeshareInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CodeshareInfo
     * @var \Travelport\UniversalRecord\StructType\CodeshareInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CodeshareInfo $CodeshareInfo = null;
    /**
     * The AirAvailInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirAvailInfo
     * @var \Travelport\UniversalRecord\StructType\AirAvailInfo[]
     */
    protected ?array $AirAvailInfo = null;
    /**
     * The FlightDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FlightDetails
     * @var \Travelport\UniversalRecord\StructType\FlightDetails[]
     */
    protected ?array $FlightDetails = null;
    /**
     * The FlightDetailsRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FlightDetailsRef
     * @var \Travelport\UniversalRecord\StructType\FlightDetailsRef[]
     */
    protected ?array $FlightDetailsRef = null;
    /**
     * The AlternateLocationDistanceRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AlternateLocationDistanceRef
     * @var \Travelport\UniversalRecord\StructType\AlternateLocationDistanceRef[]
     */
    protected ?array $AlternateLocationDistanceRef = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\UniversalRecord\StructType\Connection|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Connection $Connection = null;
    /**
     * The SellMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SellMessage
     * @var string[]
     */
    protected ?array $SellMessage = null;
    /**
     * The RailCoachDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailCoachDetails
     * @var \Travelport\UniversalRecord\StructType\RailCoachDetails[]
     */
    protected ?array $RailCoachDetails = null;
    /**
     * The OpenSegment
     * Meta information extracted from the WSDL
     * - documentation: Indicates OpenSegment when True
     * - use: optional
     * @var bool|null
     */
    protected ?bool $OpenSegment = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier that is marketing this segment | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    protected ?string $Carrier = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: Specifies Cabin class for a group of class of services. Cabin class is not identified if it is not present.
     * - use: optional
     * @var string|null
     */
    protected ?string $CabinClass = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The flight number under which the marketing carrier is marketing this flight | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * @var string|null
     */
    protected ?string $FlightNumber = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ClassOfService = null;
    /**
     * The ETicketability
     * Meta information extracted from the WSDL
     * - documentation: Identifies if this particular segment is E-Ticketable
     * - use: optional
     * @var string|null
     */
    protected ?string $ETicketability = null;
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - documentation: Identifies the equipment that this segment is operating under. | 3 Letter equipment code (sometimes vary by carrier)
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $Equipment = null;
    /**
     * The MarriageGroup
     * Meta information extracted from the WSDL
     * - documentation: Identifies this segment as being a married segment. It is paired with other segments of the same value.
     * - use: optional
     * @var int|null
     */
    protected ?int $MarriageGroup = null;
    /**
     * The NumberOfStops
     * Meta information extracted from the WSDL
     * - documentation: Identifies the number of stops for each within the segment.
     * - use: optional
     * @var int|null
     */
    protected ?int $NumberOfStops = null;
    /**
     * The Seamless
     * Meta information extracted from the WSDL
     * - documentation: Identifies that this segment was sold via a direct access channel to the marketing carrier.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Seamless = null;
    /**
     * The ChangeOfPlane
     * Meta information extracted from the WSDL
     * - documentation: Indicates the traveler must change planes between flights.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ChangeOfPlane = null;
    /**
     * The GuaranteedPaymentCarrier
     * Meta information extracted from the WSDL
     * - documentation: Identifies that this segment has Guaranteed Payment Carrier.
     * - use: optional
     * @var string|null
     */
    protected ?string $GuaranteedPaymentCarrier = null;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - documentation: Identifies that this segment has Guaranteed Payment Carrier.
     * - use: optional
     * @var string|null
     */
    protected ?string $HostTokenRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The PassiveProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PassiveProviderReservationInfoRef = null;
    /**
     * The OptionalServicesIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates true if flight provides optional services.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $OptionalServicesIndicator = null;
    /**
     * The AvailabilitySource
     * Meta information extracted from the WSDL
     * - documentation: Indicates Availability source of AirSegment. | Availability Source value for Sell.
     * - base: xs:string
     * - maxLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $AvailabilitySource = null;
    /**
     * The APISRequirementsRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the APIS Requirements for this AirSegment.
     * - use: optional
     * @var string|null
     */
    protected ?string $APISRequirementsRef = null;
    /**
     * The BlackListed
     * Meta information extracted from the WSDL
     * - documentation: Indicates blacklisted carriers which are banned from servicing points to, from and within the European Community.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $BlackListed = null;
    /**
     * The OperationalStatus
     * Meta information extracted from the WSDL
     * - documentation: Refers to the flight operational status for the segment. This attribute will only be returned in the AvailabilitySearchRsp and not used/returned in any other request/responses. If this attribute is not returned back in the response,
     * it means the flight is operational and not past scheduled departure.
     * - use: optional
     * @var string|null
     */
    protected ?string $OperationalStatus = null;
    /**
     * The NumberInParty
     * Meta information extracted from the WSDL
     * - base: xs:positiveInteger
     * - maxInclusive: 99
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $NumberInParty = null;
    /**
     * The RailCoachNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - use: optional
     * @var string|null
     */
    protected ?string $RailCoachNumber = null;
    /**
     * The BookingDate
     * Meta information extracted from the WSDL
     * - documentation: Used for rapid reprice. The date the booking was made. Providers: 1G/1V/1P/1S/1A
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingDate = null;
    /**
     * The FlownSegment
     * Meta information extracted from the WSDL
     * - documentation: Used for rapid reprice. Tells whether or not the air segment has been flown. Providers: 1G/1V/1P/1S/1A
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $FlownSegment = null;
    /**
     * The ScheduleChange
     * Meta information extracted from the WSDL
     * - documentation: Used for rapid reprice. Tells whether or not the air segment had a schedule change by the carrier. This tells rapid reprice that the change in the air segment was involuntary and because of a schedule change, not because the user is
     * changing the segment. Providers: 1G/1V/1P/1S/1A
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ScheduleChange = null;
    /**
     * The BrandIndicator
     * Meta information extracted from the WSDL
     * - documentation: Value “B” specifies that the carrier supports Rich Content and Branding. The Brand Indicator is only returned in the availability search response. Provider: 1G, 1V, 1P, ACH
     * - use: optional
     * @var string|null
     */
    protected ?string $BrandIndicator = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The DepartureTime
     * @var string|null
     */
    protected ?string $DepartureTime = null;
    /**
     * The ArrivalTime
     * @var string|null
     */
    protected ?string $ArrivalTime = null;
    /**
     * The FlightTime
     * @var int|null
     */
    protected ?int $FlightTime = null;
    /**
     * The TravelTime
     * @var int|null
     */
    protected ?int $TravelTime = null;
    /**
     * The Distance
     * @var int|null
     */
    protected ?int $Distance = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * The ParticipantLevel
     * Meta information extracted from the WSDL
     * - documentation: Type of sell agreement between host and link carrier.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ParticipantLevel = null;
    /**
     * The LinkAvailability
     * Meta information extracted from the WSDL
     * - documentation: Indicates if carrier has link (carrier specific) display option.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $LinkAvailability = null;
    /**
     * The PolledAvailabilityOption
     * Meta information extracted from the WSDL
     * - documentation: Indicates if carrier has Inside (polled)Availability option.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PolledAvailabilityOption = null;
    /**
     * The AvailabilityDisplayType
     * Meta information extracted from the WSDL
     * - documentation: The type of availability from which the segment is sold.Possible Values (List): G - General S - Flight Specific L - Carrier Specific/Direct Access M - Manual Sell F - Fare Shop/Optimal Shop Q - Fare Specific Fare Quote unbooked R -
     * Redemption Availability used to complete the sell. Supported Providers: 1G,1V.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AvailabilityDisplayType = null;
    /**
     * Constructor method for typeBaseAirSegment
     * @uses TypeBaseAirSegment::setGroup()
     * @uses TypeBaseAirSegment::setSponsoredFltInfo()
     * @uses TypeBaseAirSegment::setCodeshareInfo()
     * @uses TypeBaseAirSegment::setAirAvailInfo()
     * @uses TypeBaseAirSegment::setFlightDetails()
     * @uses TypeBaseAirSegment::setFlightDetailsRef()
     * @uses TypeBaseAirSegment::setAlternateLocationDistanceRef()
     * @uses TypeBaseAirSegment::setConnection()
     * @uses TypeBaseAirSegment::setSellMessage()
     * @uses TypeBaseAirSegment::setRailCoachDetails()
     * @uses TypeBaseAirSegment::setOpenSegment()
     * @uses TypeBaseAirSegment::setCarrier()
     * @uses TypeBaseAirSegment::setCabinClass()
     * @uses TypeBaseAirSegment::setFlightNumber()
     * @uses TypeBaseAirSegment::setClassOfService()
     * @uses TypeBaseAirSegment::setETicketability()
     * @uses TypeBaseAirSegment::setEquipment()
     * @uses TypeBaseAirSegment::setMarriageGroup()
     * @uses TypeBaseAirSegment::setNumberOfStops()
     * @uses TypeBaseAirSegment::setSeamless()
     * @uses TypeBaseAirSegment::setChangeOfPlane()
     * @uses TypeBaseAirSegment::setGuaranteedPaymentCarrier()
     * @uses TypeBaseAirSegment::setHostTokenRef()
     * @uses TypeBaseAirSegment::setProviderReservationInfoRef()
     * @uses TypeBaseAirSegment::setPassiveProviderReservationInfoRef()
     * @uses TypeBaseAirSegment::setOptionalServicesIndicator()
     * @uses TypeBaseAirSegment::setAvailabilitySource()
     * @uses TypeBaseAirSegment::setAPISRequirementsRef()
     * @uses TypeBaseAirSegment::setBlackListed()
     * @uses TypeBaseAirSegment::setOperationalStatus()
     * @uses TypeBaseAirSegment::setNumberInParty()
     * @uses TypeBaseAirSegment::setRailCoachNumber()
     * @uses TypeBaseAirSegment::setBookingDate()
     * @uses TypeBaseAirSegment::setFlownSegment()
     * @uses TypeBaseAirSegment::setScheduleChange()
     * @uses TypeBaseAirSegment::setBrandIndicator()
     * @uses TypeBaseAirSegment::setOrigin()
     * @uses TypeBaseAirSegment::setDestination()
     * @uses TypeBaseAirSegment::setDepartureTime()
     * @uses TypeBaseAirSegment::setArrivalTime()
     * @uses TypeBaseAirSegment::setFlightTime()
     * @uses TypeBaseAirSegment::setTravelTime()
     * @uses TypeBaseAirSegment::setDistance()
     * @uses TypeBaseAirSegment::setProviderCode()
     * @uses TypeBaseAirSegment::setSupplierCode()
     * @uses TypeBaseAirSegment::setParticipantLevel()
     * @uses TypeBaseAirSegment::setLinkAvailability()
     * @uses TypeBaseAirSegment::setPolledAvailabilityOption()
     * @uses TypeBaseAirSegment::setAvailabilityDisplayType()
     * @param int $group
     * @param \Travelport\UniversalRecord\StructType\SponsoredFltInfo $sponsoredFltInfo
     * @param \Travelport\UniversalRecord\StructType\CodeshareInfo $codeshareInfo
     * @param \Travelport\UniversalRecord\StructType\AirAvailInfo[] $airAvailInfo
     * @param \Travelport\UniversalRecord\StructType\FlightDetails[] $flightDetails
     * @param \Travelport\UniversalRecord\StructType\FlightDetailsRef[] $flightDetailsRef
     * @param \Travelport\UniversalRecord\StructType\AlternateLocationDistanceRef[] $alternateLocationDistanceRef
     * @param \Travelport\UniversalRecord\StructType\Connection $connection
     * @param string[] $sellMessage
     * @param \Travelport\UniversalRecord\StructType\RailCoachDetails[] $railCoachDetails
     * @param bool $openSegment
     * @param string $carrier
     * @param string $cabinClass
     * @param string $flightNumber
     * @param string $classOfService
     * @param string $eTicketability
     * @param string $equipment
     * @param int $marriageGroup
     * @param int $numberOfStops
     * @param bool $seamless
     * @param bool $changeOfPlane
     * @param string $guaranteedPaymentCarrier
     * @param string $hostTokenRef
     * @param string $providerReservationInfoRef
     * @param string $passiveProviderReservationInfoRef
     * @param bool $optionalServicesIndicator
     * @param string $availabilitySource
     * @param string $aPISRequirementsRef
     * @param bool $blackListed
     * @param string $operationalStatus
     * @param int $numberInParty
     * @param string $railCoachNumber
     * @param string $bookingDate
     * @param bool $flownSegment
     * @param bool $scheduleChange
     * @param string $brandIndicator
     * @param string $origin
     * @param string $destination
     * @param string $departureTime
     * @param string $arrivalTime
     * @param int $flightTime
     * @param int $travelTime
     * @param int $distance
     * @param string $providerCode
     * @param string $supplierCode
     * @param string $participantLevel
     * @param bool $linkAvailability
     * @param string $polledAvailabilityOption
     * @param string $availabilityDisplayType
     */
    public function __construct(int $group, ?\Travelport\UniversalRecord\StructType\SponsoredFltInfo $sponsoredFltInfo = null, ?\Travelport\UniversalRecord\StructType\CodeshareInfo $codeshareInfo = null, ?array $airAvailInfo = null, ?array $flightDetails = null, ?array $flightDetailsRef = null, ?array $alternateLocationDistanceRef = null, ?\Travelport\UniversalRecord\StructType\Connection $connection = null, ?array $sellMessage = null, ?array $railCoachDetails = null, ?bool $openSegment = null, ?string $carrier = null, ?string $cabinClass = null, ?string $flightNumber = null, ?string $classOfService = null, ?string $eTicketability = null, ?string $equipment = null, ?int $marriageGroup = null, ?int $numberOfStops = null, ?bool $seamless = null, ?bool $changeOfPlane = false, ?string $guaranteedPaymentCarrier = null, ?string $hostTokenRef = null, ?string $providerReservationInfoRef = null, ?string $passiveProviderReservationInfoRef = null, ?bool $optionalServicesIndicator = null, ?string $availabilitySource = null, ?string $aPISRequirementsRef = null, ?bool $blackListed = null, ?string $operationalStatus = null, ?int $numberInParty = null, ?string $railCoachNumber = null, ?string $bookingDate = null, ?bool $flownSegment = false, ?bool $scheduleChange = false, ?string $brandIndicator = null, ?string $origin = null, ?string $destination = null, ?string $departureTime = null, ?string $arrivalTime = null, ?int $flightTime = null, ?int $travelTime = null, ?int $distance = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $participantLevel = null, ?bool $linkAvailability = null, ?string $polledAvailabilityOption = null, ?string $availabilityDisplayType = null)
    {
        $this
            ->setGroup($group)
            ->setSponsoredFltInfo($sponsoredFltInfo)
            ->setCodeshareInfo($codeshareInfo)
            ->setAirAvailInfo($airAvailInfo)
            ->setFlightDetails($flightDetails)
            ->setFlightDetailsRef($flightDetailsRef)
            ->setAlternateLocationDistanceRef($alternateLocationDistanceRef)
            ->setConnection($connection)
            ->setSellMessage($sellMessage)
            ->setRailCoachDetails($railCoachDetails)
            ->setOpenSegment($openSegment)
            ->setCarrier($carrier)
            ->setCabinClass($cabinClass)
            ->setFlightNumber($flightNumber)
            ->setClassOfService($classOfService)
            ->setETicketability($eTicketability)
            ->setEquipment($equipment)
            ->setMarriageGroup($marriageGroup)
            ->setNumberOfStops($numberOfStops)
            ->setSeamless($seamless)
            ->setChangeOfPlane($changeOfPlane)
            ->setGuaranteedPaymentCarrier($guaranteedPaymentCarrier)
            ->setHostTokenRef($hostTokenRef)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setPassiveProviderReservationInfoRef($passiveProviderReservationInfoRef)
            ->setOptionalServicesIndicator($optionalServicesIndicator)
            ->setAvailabilitySource($availabilitySource)
            ->setAPISRequirementsRef($aPISRequirementsRef)
            ->setBlackListed($blackListed)
            ->setOperationalStatus($operationalStatus)
            ->setNumberInParty($numberInParty)
            ->setRailCoachNumber($railCoachNumber)
            ->setBookingDate($bookingDate)
            ->setFlownSegment($flownSegment)
            ->setScheduleChange($scheduleChange)
            ->setBrandIndicator($brandIndicator)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setFlightTime($flightTime)
            ->setTravelTime($travelTime)
            ->setDistance($distance)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
            ->setParticipantLevel($participantLevel)
            ->setLinkAvailability($linkAvailability)
            ->setPolledAvailabilityOption($polledAvailabilityOption)
            ->setAvailabilityDisplayType($availabilityDisplayType);
    }
    /**
     * Get Group value
     * @return int
     */
    public function getGroup(): int
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param int $group
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setGroup(int $group): self
    {
        // validation for constraint: int
        if (!is_null($group) && !(is_int($group) || ctype_digit($group))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->Group = $group;
        
        return $this;
    }
    /**
     * Get SponsoredFltInfo value
     * @return \Travelport\UniversalRecord\StructType\SponsoredFltInfo|null
     */
    public function getSponsoredFltInfo(): ?\Travelport\UniversalRecord\StructType\SponsoredFltInfo
    {
        return $this->SponsoredFltInfo;
    }
    /**
     * Set SponsoredFltInfo value
     * @param \Travelport\UniversalRecord\StructType\SponsoredFltInfo $sponsoredFltInfo
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setSponsoredFltInfo(?\Travelport\UniversalRecord\StructType\SponsoredFltInfo $sponsoredFltInfo = null): self
    {
        $this->SponsoredFltInfo = $sponsoredFltInfo;
        
        return $this;
    }
    /**
     * Get CodeshareInfo value
     * @return \Travelport\UniversalRecord\StructType\CodeshareInfo|null
     */
    public function getCodeshareInfo(): ?\Travelport\UniversalRecord\StructType\CodeshareInfo
    {
        return $this->CodeshareInfo;
    }
    /**
     * Set CodeshareInfo value
     * @param \Travelport\UniversalRecord\StructType\CodeshareInfo $codeshareInfo
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setCodeshareInfo(?\Travelport\UniversalRecord\StructType\CodeshareInfo $codeshareInfo = null): self
    {
        $this->CodeshareInfo = $codeshareInfo;
        
        return $this;
    }
    /**
     * Get AirAvailInfo value
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo[]
     */
    public function getAirAvailInfo(): ?array
    {
        return $this->AirAvailInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setAirAvailInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirAvailInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirAvailInfoForArrayConstraintsFromSetAirAvailInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirSegmentAirAvailInfoItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirSegmentAirAvailInfoItem instanceof \Travelport\UniversalRecord\StructType\AirAvailInfo) {
                $invalidValues[] = is_object($typeBaseAirSegmentAirAvailInfoItem) ? get_class($typeBaseAirSegmentAirAvailInfoItem) : sprintf('%s(%s)', gettype($typeBaseAirSegmentAirAvailInfoItem), var_export($typeBaseAirSegmentAirAvailInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirAvailInfo property can only contain items of type \Travelport\UniversalRecord\StructType\AirAvailInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirAvailInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirAvailInfo[] $airAvailInfo
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setAirAvailInfo(?array $airAvailInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($airAvailInfoArrayErrorMessage = self::validateAirAvailInfoForArrayConstraintsFromSetAirAvailInfo($airAvailInfo))) {
            throw new InvalidArgumentException($airAvailInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airAvailInfo) && count($airAvailInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airAvailInfo)), __LINE__);
        }
        $this->AirAvailInfo = $airAvailInfo;
        
        return $this;
    }
    /**
     * Add item to AirAvailInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirAvailInfo $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function addToAirAvailInfo(\Travelport\UniversalRecord\StructType\AirAvailInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirAvailInfo) {
            throw new InvalidArgumentException(sprintf('The AirAvailInfo property can only contain items of type \Travelport\UniversalRecord\StructType\AirAvailInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirAvailInfo) && count($this->AirAvailInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirAvailInfo)), __LINE__);
        }
        $this->AirAvailInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FlightDetails value
     * @return \Travelport\UniversalRecord\StructType\FlightDetails[]
     */
    public function getFlightDetails(): ?array
    {
        return $this->FlightDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setFlightDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightDetailsForArrayConstraintsFromSetFlightDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirSegmentFlightDetailsItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirSegmentFlightDetailsItem instanceof \Travelport\UniversalRecord\StructType\FlightDetails) {
                $invalidValues[] = is_object($typeBaseAirSegmentFlightDetailsItem) ? get_class($typeBaseAirSegmentFlightDetailsItem) : sprintf('%s(%s)', gettype($typeBaseAirSegmentFlightDetailsItem), var_export($typeBaseAirSegmentFlightDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightDetails property can only contain items of type \Travelport\UniversalRecord\StructType\FlightDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightDetails[] $flightDetails
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setFlightDetails(?array $flightDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightDetailsArrayErrorMessage = self::validateFlightDetailsForArrayConstraintsFromSetFlightDetails($flightDetails))) {
            throw new InvalidArgumentException($flightDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($flightDetails) && count($flightDetails) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($flightDetails)), __LINE__);
        }
        $this->FlightDetails = $flightDetails;
        
        return $this;
    }
    /**
     * Add item to FlightDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightDetails $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function addToFlightDetails(\Travelport\UniversalRecord\StructType\FlightDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FlightDetails) {
            throw new InvalidArgumentException(sprintf('The FlightDetails property can only contain items of type \Travelport\UniversalRecord\StructType\FlightDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FlightDetails) && count($this->FlightDetails) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FlightDetails)), __LINE__);
        }
        $this->FlightDetails[] = $item;
        
        return $this;
    }
    /**
     * Get FlightDetailsRef value
     * @return \Travelport\UniversalRecord\StructType\FlightDetailsRef[]
     */
    public function getFlightDetailsRef(): ?array
    {
        return $this->FlightDetailsRef;
    }
    /**
     * This method is responsible for validating the values passed to the setFlightDetailsRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightDetailsRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightDetailsRefForArrayConstraintsFromSetFlightDetailsRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirSegmentFlightDetailsRefItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirSegmentFlightDetailsRefItem instanceof \Travelport\UniversalRecord\StructType\FlightDetailsRef) {
                $invalidValues[] = is_object($typeBaseAirSegmentFlightDetailsRefItem) ? get_class($typeBaseAirSegmentFlightDetailsRefItem) : sprintf('%s(%s)', gettype($typeBaseAirSegmentFlightDetailsRefItem), var_export($typeBaseAirSegmentFlightDetailsRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightDetailsRef property can only contain items of type \Travelport\UniversalRecord\StructType\FlightDetailsRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightDetailsRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightDetailsRef[] $flightDetailsRef
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setFlightDetailsRef(?array $flightDetailsRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightDetailsRefArrayErrorMessage = self::validateFlightDetailsRefForArrayConstraintsFromSetFlightDetailsRef($flightDetailsRef))) {
            throw new InvalidArgumentException($flightDetailsRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($flightDetailsRef) && count($flightDetailsRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($flightDetailsRef)), __LINE__);
        }
        $this->FlightDetailsRef = $flightDetailsRef;
        
        return $this;
    }
    /**
     * Add item to FlightDetailsRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightDetailsRef $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function addToFlightDetailsRef(\Travelport\UniversalRecord\StructType\FlightDetailsRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FlightDetailsRef) {
            throw new InvalidArgumentException(sprintf('The FlightDetailsRef property can only contain items of type \Travelport\UniversalRecord\StructType\FlightDetailsRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FlightDetailsRef) && count($this->FlightDetailsRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FlightDetailsRef)), __LINE__);
        }
        $this->FlightDetailsRef[] = $item;
        
        return $this;
    }
    /**
     * Get AlternateLocationDistanceRef value
     * @return \Travelport\UniversalRecord\StructType\AlternateLocationDistanceRef[]
     */
    public function getAlternateLocationDistanceRef(): ?array
    {
        return $this->AlternateLocationDistanceRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAlternateLocationDistanceRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlternateLocationDistanceRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlternateLocationDistanceRefForArrayConstraintsFromSetAlternateLocationDistanceRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirSegmentAlternateLocationDistanceRefItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirSegmentAlternateLocationDistanceRefItem instanceof \Travelport\UniversalRecord\StructType\AlternateLocationDistanceRef) {
                $invalidValues[] = is_object($typeBaseAirSegmentAlternateLocationDistanceRefItem) ? get_class($typeBaseAirSegmentAlternateLocationDistanceRefItem) : sprintf('%s(%s)', gettype($typeBaseAirSegmentAlternateLocationDistanceRefItem), var_export($typeBaseAirSegmentAlternateLocationDistanceRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AlternateLocationDistanceRef property can only contain items of type \Travelport\UniversalRecord\StructType\AlternateLocationDistanceRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AlternateLocationDistanceRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AlternateLocationDistanceRef[] $alternateLocationDistanceRef
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setAlternateLocationDistanceRef(?array $alternateLocationDistanceRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($alternateLocationDistanceRefArrayErrorMessage = self::validateAlternateLocationDistanceRefForArrayConstraintsFromSetAlternateLocationDistanceRef($alternateLocationDistanceRef))) {
            throw new InvalidArgumentException($alternateLocationDistanceRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($alternateLocationDistanceRef) && count($alternateLocationDistanceRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($alternateLocationDistanceRef)), __LINE__);
        }
        $this->AlternateLocationDistanceRef = $alternateLocationDistanceRef;
        
        return $this;
    }
    /**
     * Add item to AlternateLocationDistanceRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AlternateLocationDistanceRef $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function addToAlternateLocationDistanceRef(\Travelport\UniversalRecord\StructType\AlternateLocationDistanceRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AlternateLocationDistanceRef) {
            throw new InvalidArgumentException(sprintf('The AlternateLocationDistanceRef property can only contain items of type \Travelport\UniversalRecord\StructType\AlternateLocationDistanceRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AlternateLocationDistanceRef) && count($this->AlternateLocationDistanceRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AlternateLocationDistanceRef)), __LINE__);
        }
        $this->AlternateLocationDistanceRef[] = $item;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return \Travelport\UniversalRecord\StructType\Connection|null
     */
    public function getConnection(): ?\Travelport\UniversalRecord\StructType\Connection
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @param \Travelport\UniversalRecord\StructType\Connection $connection
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setConnection(?\Travelport\UniversalRecord\StructType\Connection $connection = null): self
    {
        $this->Connection = $connection;
        
        return $this;
    }
    /**
     * Get SellMessage value
     * @return string[]
     */
    public function getSellMessage(): ?array
    {
        return $this->SellMessage;
    }
    /**
     * This method is responsible for validating the values passed to the setSellMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellMessage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellMessageForArrayConstraintsFromSetSellMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirSegmentSellMessageItem) {
            // validation for constraint: itemType
            if (!is_string($typeBaseAirSegmentSellMessageItem)) {
                $invalidValues[] = is_object($typeBaseAirSegmentSellMessageItem) ? get_class($typeBaseAirSegmentSellMessageItem) : sprintf('%s(%s)', gettype($typeBaseAirSegmentSellMessageItem), var_export($typeBaseAirSegmentSellMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellMessage property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellMessage value
     * @throws InvalidArgumentException
     * @param string[] $sellMessage
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setSellMessage(?array $sellMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($sellMessageArrayErrorMessage = self::validateSellMessageForArrayConstraintsFromSetSellMessage($sellMessage))) {
            throw new InvalidArgumentException($sellMessageArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($sellMessage) && count($sellMessage) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($sellMessage)), __LINE__);
        }
        $this->SellMessage = $sellMessage;
        
        return $this;
    }
    /**
     * Add item to SellMessage value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function addToSellMessage(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The SellMessage property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SellMessage) && count($this->SellMessage) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SellMessage)), __LINE__);
        }
        $this->SellMessage[] = $item;
        
        return $this;
    }
    /**
     * Get RailCoachDetails value
     * @return \Travelport\UniversalRecord\StructType\RailCoachDetails[]
     */
    public function getRailCoachDetails(): ?array
    {
        return $this->RailCoachDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setRailCoachDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailCoachDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailCoachDetailsForArrayConstraintsFromSetRailCoachDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirSegmentRailCoachDetailsItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirSegmentRailCoachDetailsItem instanceof \Travelport\UniversalRecord\StructType\RailCoachDetails) {
                $invalidValues[] = is_object($typeBaseAirSegmentRailCoachDetailsItem) ? get_class($typeBaseAirSegmentRailCoachDetailsItem) : sprintf('%s(%s)', gettype($typeBaseAirSegmentRailCoachDetailsItem), var_export($typeBaseAirSegmentRailCoachDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailCoachDetails property can only contain items of type \Travelport\UniversalRecord\StructType\RailCoachDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailCoachDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailCoachDetails[] $railCoachDetails
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setRailCoachDetails(?array $railCoachDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($railCoachDetailsArrayErrorMessage = self::validateRailCoachDetailsForArrayConstraintsFromSetRailCoachDetails($railCoachDetails))) {
            throw new InvalidArgumentException($railCoachDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railCoachDetails) && count($railCoachDetails) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railCoachDetails)), __LINE__);
        }
        $this->RailCoachDetails = $railCoachDetails;
        
        return $this;
    }
    /**
     * Add item to RailCoachDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailCoachDetails $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function addToRailCoachDetails(\Travelport\UniversalRecord\StructType\RailCoachDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailCoachDetails) {
            throw new InvalidArgumentException(sprintf('The RailCoachDetails property can only contain items of type \Travelport\UniversalRecord\StructType\RailCoachDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailCoachDetails) && count($this->RailCoachDetails) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailCoachDetails)), __LINE__);
        }
        $this->RailCoachDetails[] = $item;
        
        return $this;
    }
    /**
     * Get OpenSegment value
     * @return bool|null
     */
    public function getOpenSegment(): ?bool
    {
        return $this->OpenSegment;
    }
    /**
     * Set OpenSegment value
     * @param bool $openSegment
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setOpenSegment(?bool $openSegment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($openSegment) && !is_bool($openSegment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($openSegment, true), gettype($openSegment)), __LINE__);
        }
        $this->OpenSegment = $openSegment;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return string|null
     */
    public function getCabinClass(): ?string
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param string $cabinClass
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinClass, true), gettype($cabinClass)), __LINE__);
        }
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber(): ?string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumber, true), gettype($flightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($flightNumber) && mb_strlen((string) $flightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get ClassOfService value
     * @return string|null
     */
    public function getClassOfService(): ?string
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classOfService, true), gettype($classOfService)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $classOfService)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
    /**
     * Get ETicketability value
     * @return string|null
     */
    public function getETicketability(): ?string
    {
        return $this->ETicketability;
    }
    /**
     * Set ETicketability value
     * @uses \Travelport\UniversalRecord\EnumType\TypeEticketability::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeEticketability::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eTicketability
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setETicketability(?string $eTicketability = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeEticketability::valueIsValid($eTicketability)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeEticketability', is_array($eTicketability) ? implode(', ', $eTicketability) : var_export($eTicketability, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeEticketability::getValidValues())), __LINE__);
        }
        $this->ETicketability = $eTicketability;
        
        return $this;
    }
    /**
     * Get Equipment value
     * @return string|null
     */
    public function getEquipment(): ?string
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param string $equipment
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setEquipment(?string $equipment = null): self
    {
        // validation for constraint: string
        if (!is_null($equipment) && !is_string($equipment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equipment, true), gettype($equipment)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($equipment) && mb_strlen((string) $equipment) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $equipment)), __LINE__);
        }
        $this->Equipment = $equipment;
        
        return $this;
    }
    /**
     * Get MarriageGroup value
     * @return int|null
     */
    public function getMarriageGroup(): ?int
    {
        return $this->MarriageGroup;
    }
    /**
     * Set MarriageGroup value
     * @param int $marriageGroup
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setMarriageGroup(?int $marriageGroup = null): self
    {
        // validation for constraint: int
        if (!is_null($marriageGroup) && !(is_int($marriageGroup) || ctype_digit($marriageGroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($marriageGroup, true), gettype($marriageGroup)), __LINE__);
        }
        $this->MarriageGroup = $marriageGroup;
        
        return $this;
    }
    /**
     * Get NumberOfStops value
     * @return int|null
     */
    public function getNumberOfStops(): ?int
    {
        return $this->NumberOfStops;
    }
    /**
     * Set NumberOfStops value
     * @param int $numberOfStops
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setNumberOfStops(?int $numberOfStops = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfStops) && !(is_int($numberOfStops) || ctype_digit($numberOfStops))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfStops, true), gettype($numberOfStops)), __LINE__);
        }
        $this->NumberOfStops = $numberOfStops;
        
        return $this;
    }
    /**
     * Get Seamless value
     * @return bool|null
     */
    public function getSeamless(): ?bool
    {
        return $this->Seamless;
    }
    /**
     * Set Seamless value
     * @param bool $seamless
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setSeamless(?bool $seamless = null): self
    {
        // validation for constraint: boolean
        if (!is_null($seamless) && !is_bool($seamless)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($seamless, true), gettype($seamless)), __LINE__);
        }
        $this->Seamless = $seamless;
        
        return $this;
    }
    /**
     * Get ChangeOfPlane value
     * @return bool|null
     */
    public function getChangeOfPlane(): ?bool
    {
        return $this->ChangeOfPlane;
    }
    /**
     * Set ChangeOfPlane value
     * @param bool $changeOfPlane
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setChangeOfPlane(?bool $changeOfPlane = false): self
    {
        // validation for constraint: boolean
        if (!is_null($changeOfPlane) && !is_bool($changeOfPlane)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($changeOfPlane, true), gettype($changeOfPlane)), __LINE__);
        }
        $this->ChangeOfPlane = $changeOfPlane;
        
        return $this;
    }
    /**
     * Get GuaranteedPaymentCarrier value
     * @return string|null
     */
    public function getGuaranteedPaymentCarrier(): ?string
    {
        return $this->GuaranteedPaymentCarrier;
    }
    /**
     * Set GuaranteedPaymentCarrier value
     * @param string $guaranteedPaymentCarrier
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setGuaranteedPaymentCarrier(?string $guaranteedPaymentCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($guaranteedPaymentCarrier) && !is_string($guaranteedPaymentCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guaranteedPaymentCarrier, true), gettype($guaranteedPaymentCarrier)), __LINE__);
        }
        $this->GuaranteedPaymentCarrier = $guaranteedPaymentCarrier;
        
        return $this;
    }
    /**
     * Get HostTokenRef value
     * @return string|null
     */
    public function getHostTokenRef(): ?string
    {
        return $this->HostTokenRef;
    }
    /**
     * Set HostTokenRef value
     * @param string $hostTokenRef
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setHostTokenRef(?string $hostTokenRef = null): self
    {
        // validation for constraint: string
        if (!is_null($hostTokenRef) && !is_string($hostTokenRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostTokenRef, true), gettype($hostTokenRef)), __LINE__);
        }
        $this->HostTokenRef = $hostTokenRef;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get PassiveProviderReservationInfoRef value
     * @return string|null
     */
    public function getPassiveProviderReservationInfoRef(): ?string
    {
        return $this->PassiveProviderReservationInfoRef;
    }
    /**
     * Set PassiveProviderReservationInfoRef value
     * @param string $passiveProviderReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setPassiveProviderReservationInfoRef(?string $passiveProviderReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($passiveProviderReservationInfoRef) && !is_string($passiveProviderReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passiveProviderReservationInfoRef, true), gettype($passiveProviderReservationInfoRef)), __LINE__);
        }
        $this->PassiveProviderReservationInfoRef = $passiveProviderReservationInfoRef;
        
        return $this;
    }
    /**
     * Get OptionalServicesIndicator value
     * @return bool|null
     */
    public function getOptionalServicesIndicator(): ?bool
    {
        return $this->OptionalServicesIndicator;
    }
    /**
     * Set OptionalServicesIndicator value
     * @param bool $optionalServicesIndicator
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setOptionalServicesIndicator(?bool $optionalServicesIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($optionalServicesIndicator) && !is_bool($optionalServicesIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optionalServicesIndicator, true), gettype($optionalServicesIndicator)), __LINE__);
        }
        $this->OptionalServicesIndicator = $optionalServicesIndicator;
        
        return $this;
    }
    /**
     * Get AvailabilitySource value
     * @return string|null
     */
    public function getAvailabilitySource(): ?string
    {
        return $this->AvailabilitySource;
    }
    /**
     * Set AvailabilitySource value
     * @param string $availabilitySource
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setAvailabilitySource(?string $availabilitySource = null): self
    {
        // validation for constraint: string
        if (!is_null($availabilitySource) && !is_string($availabilitySource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availabilitySource, true), gettype($availabilitySource)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($availabilitySource) && mb_strlen((string) $availabilitySource) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $availabilitySource)), __LINE__);
        }
        $this->AvailabilitySource = $availabilitySource;
        
        return $this;
    }
    /**
     * Get APISRequirementsRef value
     * @return string|null
     */
    public function getAPISRequirementsRef(): ?string
    {
        return $this->APISRequirementsRef;
    }
    /**
     * Set APISRequirementsRef value
     * @param string $aPISRequirementsRef
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setAPISRequirementsRef(?string $aPISRequirementsRef = null): self
    {
        // validation for constraint: string
        if (!is_null($aPISRequirementsRef) && !is_string($aPISRequirementsRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aPISRequirementsRef, true), gettype($aPISRequirementsRef)), __LINE__);
        }
        $this->APISRequirementsRef = $aPISRequirementsRef;
        
        return $this;
    }
    /**
     * Get BlackListed value
     * @return bool|null
     */
    public function getBlackListed(): ?bool
    {
        return $this->BlackListed;
    }
    /**
     * Set BlackListed value
     * @param bool $blackListed
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setBlackListed(?bool $blackListed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($blackListed) && !is_bool($blackListed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($blackListed, true), gettype($blackListed)), __LINE__);
        }
        $this->BlackListed = $blackListed;
        
        return $this;
    }
    /**
     * Get OperationalStatus value
     * @return string|null
     */
    public function getOperationalStatus(): ?string
    {
        return $this->OperationalStatus;
    }
    /**
     * Set OperationalStatus value
     * @param string $operationalStatus
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setOperationalStatus(?string $operationalStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($operationalStatus) && !is_string($operationalStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operationalStatus, true), gettype($operationalStatus)), __LINE__);
        }
        $this->OperationalStatus = $operationalStatus;
        
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return int|null
     */
    public function getNumberInParty(): ?int
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param int $numberInParty
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setNumberInParty(?int $numberInParty = null): self
    {
        // validation for constraint: int
        if (!is_null($numberInParty) && !(is_int($numberInParty) || ctype_digit($numberInParty))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberInParty, true), gettype($numberInParty)), __LINE__);
        }
        // validation for constraint: maxInclusive(99)
        if (!is_null($numberInParty) && $numberInParty > 99) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99', var_export($numberInParty, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($numberInParty) && $numberInParty < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($numberInParty, true)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
        
        return $this;
    }
    /**
     * Get RailCoachNumber value
     * @return string|null
     */
    public function getRailCoachNumber(): ?string
    {
        return $this->RailCoachNumber;
    }
    /**
     * Set RailCoachNumber value
     * @param string $railCoachNumber
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setRailCoachNumber(?string $railCoachNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($railCoachNumber) && !is_string($railCoachNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railCoachNumber, true), gettype($railCoachNumber)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($railCoachNumber) && mb_strlen((string) $railCoachNumber) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $railCoachNumber)), __LINE__);
        }
        $this->RailCoachNumber = $railCoachNumber;
        
        return $this;
    }
    /**
     * Get BookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->BookingDate;
    }
    /**
     * Set BookingDate value
     * @param string $bookingDate
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->BookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get FlownSegment value
     * @return bool|null
     */
    public function getFlownSegment(): ?bool
    {
        return $this->FlownSegment;
    }
    /**
     * Set FlownSegment value
     * @param bool $flownSegment
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setFlownSegment(?bool $flownSegment = false): self
    {
        // validation for constraint: boolean
        if (!is_null($flownSegment) && !is_bool($flownSegment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flownSegment, true), gettype($flownSegment)), __LINE__);
        }
        $this->FlownSegment = $flownSegment;
        
        return $this;
    }
    /**
     * Get ScheduleChange value
     * @return bool|null
     */
    public function getScheduleChange(): ?bool
    {
        return $this->ScheduleChange;
    }
    /**
     * Set ScheduleChange value
     * @param bool $scheduleChange
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setScheduleChange(?bool $scheduleChange = false): self
    {
        // validation for constraint: boolean
        if (!is_null($scheduleChange) && !is_bool($scheduleChange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($scheduleChange, true), gettype($scheduleChange)), __LINE__);
        }
        $this->ScheduleChange = $scheduleChange;
        
        return $this;
    }
    /**
     * Get BrandIndicator value
     * @return string|null
     */
    public function getBrandIndicator(): ?string
    {
        return $this->BrandIndicator;
    }
    /**
     * Set BrandIndicator value
     * @param string $brandIndicator
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setBrandIndicator(?string $brandIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($brandIndicator) && !is_string($brandIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brandIndicator, true), gettype($brandIndicator)), __LINE__);
        }
        $this->BrandIndicator = $brandIndicator;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get ArrivalTime value
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->ArrivalTime;
    }
    /**
     * Set ArrivalTime value
     * @param string $arrivalTime
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->ArrivalTime = $arrivalTime;
        
        return $this;
    }
    /**
     * Get FlightTime value
     * @return int|null
     */
    public function getFlightTime(): ?int
    {
        return $this->FlightTime;
    }
    /**
     * Set FlightTime value
     * @param int $flightTime
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setFlightTime(?int $flightTime = null): self
    {
        // validation for constraint: int
        if (!is_null($flightTime) && !(is_int($flightTime) || ctype_digit($flightTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flightTime, true), gettype($flightTime)), __LINE__);
        }
        $this->FlightTime = $flightTime;
        
        return $this;
    }
    /**
     * Get TravelTime value
     * @return int|null
     */
    public function getTravelTime(): ?int
    {
        return $this->TravelTime;
    }
    /**
     * Set TravelTime value
     * @param int $travelTime
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setTravelTime(?int $travelTime = null): self
    {
        // validation for constraint: int
        if (!is_null($travelTime) && !(is_int($travelTime) || ctype_digit($travelTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelTime, true), gettype($travelTime)), __LINE__);
        }
        $this->TravelTime = $travelTime;
        
        return $this;
    }
    /**
     * Get Distance value
     * @return int|null
     */
    public function getDistance(): ?int
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param int $distance
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setDistance(?int $distance = null): self
    {
        // validation for constraint: int
        if (!is_null($distance) && !(is_int($distance) || ctype_digit($distance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($distance, true), gettype($distance)), __LINE__);
        }
        $this->Distance = $distance;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get ParticipantLevel value
     * @return string|null
     */
    public function getParticipantLevel(): ?string
    {
        return $this->ParticipantLevel;
    }
    /**
     * Set ParticipantLevel value
     * @param string $participantLevel
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setParticipantLevel(?string $participantLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($participantLevel) && !is_string($participantLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($participantLevel, true), gettype($participantLevel)), __LINE__);
        }
        $this->ParticipantLevel = $participantLevel;
        
        return $this;
    }
    /**
     * Get LinkAvailability value
     * @return bool|null
     */
    public function getLinkAvailability(): ?bool
    {
        return $this->LinkAvailability;
    }
    /**
     * Set LinkAvailability value
     * @param bool $linkAvailability
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setLinkAvailability(?bool $linkAvailability = null): self
    {
        // validation for constraint: boolean
        if (!is_null($linkAvailability) && !is_bool($linkAvailability)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($linkAvailability, true), gettype($linkAvailability)), __LINE__);
        }
        $this->LinkAvailability = $linkAvailability;
        
        return $this;
    }
    /**
     * Get PolledAvailabilityOption value
     * @return string|null
     */
    public function getPolledAvailabilityOption(): ?string
    {
        return $this->PolledAvailabilityOption;
    }
    /**
     * Set PolledAvailabilityOption value
     * @param string $polledAvailabilityOption
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setPolledAvailabilityOption(?string $polledAvailabilityOption = null): self
    {
        // validation for constraint: string
        if (!is_null($polledAvailabilityOption) && !is_string($polledAvailabilityOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($polledAvailabilityOption, true), gettype($polledAvailabilityOption)), __LINE__);
        }
        $this->PolledAvailabilityOption = $polledAvailabilityOption;
        
        return $this;
    }
    /**
     * Get AvailabilityDisplayType value
     * @return string|null
     */
    public function getAvailabilityDisplayType(): ?string
    {
        return $this->AvailabilityDisplayType;
    }
    /**
     * Set AvailabilityDisplayType value
     * @param string $availabilityDisplayType
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment
     */
    public function setAvailabilityDisplayType(?string $availabilityDisplayType = null): self
    {
        // validation for constraint: string
        if (!is_null($availabilityDisplayType) && !is_string($availabilityDisplayType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availabilityDisplayType, true), gettype($availabilityDisplayType)), __LINE__);
        }
        $this->AvailabilityDisplayType = $availabilityDisplayType;
        
        return $this;
    }
}
