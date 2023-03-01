<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public int $Group;
    /**
     * The SponsoredFltInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SponsoredFltInfo
     * @var \Travelport\Air\StructType\SponsoredFltInfo|null
     */
    public ?\Travelport\Air\StructType\SponsoredFltInfo $SponsoredFltInfo = null;
    /**
     * The CodeshareInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CodeshareInfo
     * @var \Travelport\Air\StructType\CodeshareInfo|null
     */
    public ?\Travelport\Air\StructType\CodeshareInfo $CodeshareInfo = null;
    /**
     * The AirAvailInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirAvailInfo
     * @var \Travelport\Air\StructType\AirAvailInfo[]
     */
    public ?array $AirAvailInfo = null;
    /**
     * The FlightDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FlightDetails
     * @var \Travelport\Air\StructType\FlightDetails[]
     */
    public ?array $FlightDetails = null;
    /**
     * The FlightDetailsRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FlightDetailsRef
     * @var \Travelport\Air\StructType\FlightDetailsRef[]
     */
    public ?array $FlightDetailsRef = null;
    /**
     * The AlternateLocationDistanceRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AlternateLocationDistanceRef
     * @var \Travelport\Air\StructType\AlternateLocationDistanceRef[]
     */
    public ?array $AlternateLocationDistanceRef = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\Air\StructType\Connection|null
     */
    public ?\Travelport\Air\StructType\Connection $Connection = null;
    /**
     * The SellMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SellMessage
     * @var string[]
     */
    public ?array $SellMessage = null;
    /**
     * The RailCoachDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailCoachDetails
     * @var \Travelport\Air\StructType\RailCoachDetails[]
     */
    public ?array $RailCoachDetails = null;
    /**
     * The OpenSegment
     * Meta information extracted from the WSDL
     * - documentation: Indicates OpenSegment when True
     * - use: optional
     * @var bool|null
     */
    public ?bool $OpenSegment = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier that is marketing this segment | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    public ?string $Carrier = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: Specifies Cabin class for a group of class of services. Cabin class is not identified if it is not present.
     * - use: optional
     * @var string|null
     */
    public ?string $CabinClass = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The flight number under which the marketing carrier is marketing this flight | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * @var string|null
     */
    public ?string $FlightNumber = null;
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
    public ?string $ClassOfService = null;
    /**
     * The ETicketability
     * Meta information extracted from the WSDL
     * - documentation: Identifies if this particular segment is E-Ticketable
     * - use: optional
     * @var string|null
     */
    public ?string $ETicketability = null;
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - documentation: Identifies the equipment that this segment is operating under. | 3 Letter equipment code (sometimes vary by carrier)
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $Equipment = null;
    /**
     * The MarriageGroup
     * Meta information extracted from the WSDL
     * - documentation: Identifies this segment as being a married segment. It is paired with other segments of the same value.
     * - use: optional
     * @var int|null
     */
    public ?int $MarriageGroup = null;
    /**
     * The NumberOfStops
     * Meta information extracted from the WSDL
     * - documentation: Identifies the number of stops for each within the segment.
     * - use: optional
     * @var int|null
     */
    public ?int $NumberOfStops = null;
    /**
     * The Seamless
     * Meta information extracted from the WSDL
     * - documentation: Identifies that this segment was sold via a direct access channel to the marketing carrier.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Seamless = null;
    /**
     * The ChangeOfPlane
     * Meta information extracted from the WSDL
     * - documentation: Indicates the traveler must change planes between flights.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ChangeOfPlane = null;
    /**
     * The GuaranteedPaymentCarrier
     * Meta information extracted from the WSDL
     * - documentation: Identifies that this segment has Guaranteed Payment Carrier.
     * - use: optional
     * @var string|null
     */
    public ?string $GuaranteedPaymentCarrier = null;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - documentation: Identifies that this segment has Guaranteed Payment Carrier.
     * - use: optional
     * @var string|null
     */
    public ?string $HostTokenRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The PassiveProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PassiveProviderReservationInfoRef = null;
    /**
     * The OptionalServicesIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates true if flight provides optional services.
     * - use: optional
     * @var bool|null
     */
    public ?bool $OptionalServicesIndicator = null;
    /**
     * The AvailabilitySource
     * Meta information extracted from the WSDL
     * - documentation: Indicates Availability source of AirSegment. | Availability Source value for Sell.
     * - base: xs:string
     * - maxLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $AvailabilitySource = null;
    /**
     * The APISRequirementsRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the APIS Requirements for this AirSegment.
     * - use: optional
     * @var string|null
     */
    public ?string $APISRequirementsRef = null;
    /**
     * The BlackListed
     * Meta information extracted from the WSDL
     * - documentation: Indicates blacklisted carriers which are banned from servicing points to, from and within the European Community.
     * - use: optional
     * @var bool|null
     */
    public ?bool $BlackListed = null;
    /**
     * The OperationalStatus
     * Meta information extracted from the WSDL
     * - documentation: Refers to the flight operational status for the segment. This attribute will only be returned in the AvailabilitySearchRsp and not used/returned in any other request/responses. If this attribute is not returned back in the response,
     * it means the flight is operational and not past scheduled departure.
     * - use: optional
     * @var string|null
     */
    public ?string $OperationalStatus = null;
    /**
     * The NumberInParty
     * Meta information extracted from the WSDL
     * - base: xs:positiveInteger
     * - maxInclusive: 99
     * - minInclusive: 1
     * @var int|null
     */
    public ?int $NumberInParty = null;
    /**
     * The RailCoachNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - use: optional
     * @var string|null
     */
    public ?string $RailCoachNumber = null;
    /**
     * The BookingDate
     * Meta information extracted from the WSDL
     * - documentation: Used for rapid reprice. The date the booking was made. Providers: 1G/1V/1P/1S/1A
     * - use: optional
     * @var string|null
     */
    public ?string $BookingDate = null;
    /**
     * The FlownSegment
     * Meta information extracted from the WSDL
     * - documentation: Used for rapid reprice. Tells whether or not the air segment has been flown. Providers: 1G/1V/1P/1S/1A
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $FlownSegment = null;
    /**
     * The ScheduleChange
     * Meta information extracted from the WSDL
     * - documentation: Used for rapid reprice. Tells whether or not the air segment had a schedule change by the carrier. This tells rapid reprice that the change in the air segment was involuntary and because of a schedule change, not because the user is
     * changing the segment. Providers: 1G/1V/1P/1S/1A
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ScheduleChange = null;
    /**
     * The BrandIndicator
     * Meta information extracted from the WSDL
     * - documentation: Value “B” specifies that the carrier supports Rich Content and Branding. The Brand Indicator is only returned in the availability search response. Provider: 1G, 1V, 1P, ACH
     * - use: optional
     * @var string|null
     */
    public ?string $BrandIndicator = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The DepartureTime
     * @var string|null
     */
    public ?string $DepartureTime = null;
    /**
     * The ArrivalTime
     * @var string|null
     */
    public ?string $ArrivalTime = null;
    /**
     * The FlightTime
     * @var int|null
     */
    public ?int $FlightTime = null;
    /**
     * The TravelTime
     * @var int|null
     */
    public ?int $TravelTime = null;
    /**
     * The Distance
     * @var int|null
     */
    public ?int $Distance = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The ParticipantLevel
     * Meta information extracted from the WSDL
     * - documentation: Type of sell agreement between host and link carrier.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ParticipantLevel = null;
    /**
     * The LinkAvailability
     * Meta information extracted from the WSDL
     * - documentation: Indicates if carrier has link (carrier specific) display option.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $LinkAvailability = null;
    /**
     * The PolledAvailabilityOption
     * Meta information extracted from the WSDL
     * - documentation: Indicates if carrier has Inside (polled)Availability option.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PolledAvailabilityOption = null;
    /**
     * The AvailabilityDisplayType
     * Meta information extracted from the WSDL
     * - documentation: The type of availability from which the segment is sold.Possible Values (List): G - General S - Flight Specific L - Carrier Specific/Direct Access M - Manual Sell F - Fare Shop/Optimal Shop Q - Fare Specific Fare Quote unbooked R -
     * Redemption Availability used to complete the sell. Supported Providers: 1G,1V.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AvailabilityDisplayType = null;
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
     * @param \Travelport\Air\StructType\SponsoredFltInfo $sponsoredFltInfo
     * @param \Travelport\Air\StructType\CodeshareInfo $codeshareInfo
     * @param \Travelport\Air\StructType\AirAvailInfo[] $airAvailInfo
     * @param \Travelport\Air\StructType\FlightDetails[] $flightDetails
     * @param \Travelport\Air\StructType\FlightDetailsRef[] $flightDetailsRef
     * @param \Travelport\Air\StructType\AlternateLocationDistanceRef[] $alternateLocationDistanceRef
     * @param \Travelport\Air\StructType\Connection $connection
     * @param string[] $sellMessage
     * @param \Travelport\Air\StructType\RailCoachDetails[] $railCoachDetails
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
    public function __construct(int $group, ?\Travelport\Air\StructType\SponsoredFltInfo $sponsoredFltInfo = null, ?\Travelport\Air\StructType\CodeshareInfo $codeshareInfo = null, ?array $airAvailInfo = null, ?array $flightDetails = null, ?array $flightDetailsRef = null, ?array $alternateLocationDistanceRef = null, ?\Travelport\Air\StructType\Connection $connection = null, ?array $sellMessage = null, ?array $railCoachDetails = null, ?bool $openSegment = null, ?string $carrier = null, ?string $cabinClass = null, ?string $flightNumber = null, ?string $classOfService = null, ?string $eTicketability = null, ?string $equipment = null, ?int $marriageGroup = null, ?int $numberOfStops = null, ?bool $seamless = null, ?bool $changeOfPlane = false, ?string $guaranteedPaymentCarrier = null, ?string $hostTokenRef = null, ?string $providerReservationInfoRef = null, ?string $passiveProviderReservationInfoRef = null, ?bool $optionalServicesIndicator = null, ?string $availabilitySource = null, ?string $aPISRequirementsRef = null, ?bool $blackListed = null, ?string $operationalStatus = null, ?int $numberInParty = null, ?string $railCoachNumber = null, ?string $bookingDate = null, ?bool $flownSegment = false, ?bool $scheduleChange = false, ?string $brandIndicator = null, ?string $origin = null, ?string $destination = null, ?string $departureTime = null, ?string $arrivalTime = null, ?int $flightTime = null, ?int $travelTime = null, ?int $distance = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $participantLevel = null, ?bool $linkAvailability = null, ?string $polledAvailabilityOption = null, ?string $availabilityDisplayType = null)
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setGroup(int $group): self
    {
        $this->Group = $group;
        
        return $this;
    }
    /**
     * Get SponsoredFltInfo value
     * @return \Travelport\Air\StructType\SponsoredFltInfo|null
     */
    public function getSponsoredFltInfo(): ?\Travelport\Air\StructType\SponsoredFltInfo
    {
        return $this->SponsoredFltInfo;
    }
    /**
     * Set SponsoredFltInfo value
     * @param \Travelport\Air\StructType\SponsoredFltInfo $sponsoredFltInfo
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setSponsoredFltInfo(?\Travelport\Air\StructType\SponsoredFltInfo $sponsoredFltInfo = null): self
    {
        $this->SponsoredFltInfo = $sponsoredFltInfo;
        
        return $this;
    }
    /**
     * Get CodeshareInfo value
     * @return \Travelport\Air\StructType\CodeshareInfo|null
     */
    public function getCodeshareInfo(): ?\Travelport\Air\StructType\CodeshareInfo
    {
        return $this->CodeshareInfo;
    }
    /**
     * Set CodeshareInfo value
     * @param \Travelport\Air\StructType\CodeshareInfo $codeshareInfo
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setCodeshareInfo(?\Travelport\Air\StructType\CodeshareInfo $codeshareInfo = null): self
    {
        $this->CodeshareInfo = $codeshareInfo;
        
        return $this;
    }
    /**
     * Get AirAvailInfo value
     * @return \Travelport\Air\StructType\AirAvailInfo[]
     */
    public function getAirAvailInfo(): ?array
    {
        return $this->AirAvailInfo;
    }
    /**
     * Set AirAvailInfo value
     * @param \Travelport\Air\StructType\AirAvailInfo[] $airAvailInfo
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setAirAvailInfo(?array $airAvailInfo = null): self
    {
        $this->AirAvailInfo = $airAvailInfo;
        
        return $this;
    }
    /**
     * Add item to AirAvailInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirAvailInfo $item
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function addToAirAvailInfo(\Travelport\Air\StructType\AirAvailInfo $item): self
    {
        $this->AirAvailInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FlightDetails value
     * @return \Travelport\Air\StructType\FlightDetails[]
     */
    public function getFlightDetails(): ?array
    {
        return $this->FlightDetails;
    }
    /**
     * Set FlightDetails value
     * @param \Travelport\Air\StructType\FlightDetails[] $flightDetails
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setFlightDetails(?array $flightDetails = null): self
    {
        $this->FlightDetails = $flightDetails;
        
        return $this;
    }
    /**
     * Add item to FlightDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FlightDetails $item
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function addToFlightDetails(\Travelport\Air\StructType\FlightDetails $item): self
    {
        $this->FlightDetails[] = $item;
        
        return $this;
    }
    /**
     * Get FlightDetailsRef value
     * @return \Travelport\Air\StructType\FlightDetailsRef[]
     */
    public function getFlightDetailsRef(): ?array
    {
        return $this->FlightDetailsRef;
    }
    /**
     * Set FlightDetailsRef value
     * @param \Travelport\Air\StructType\FlightDetailsRef[] $flightDetailsRef
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setFlightDetailsRef(?array $flightDetailsRef = null): self
    {
        $this->FlightDetailsRef = $flightDetailsRef;
        
        return $this;
    }
    /**
     * Add item to FlightDetailsRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FlightDetailsRef $item
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function addToFlightDetailsRef(\Travelport\Air\StructType\FlightDetailsRef $item): self
    {
        $this->FlightDetailsRef[] = $item;
        
        return $this;
    }
    /**
     * Get AlternateLocationDistanceRef value
     * @return \Travelport\Air\StructType\AlternateLocationDistanceRef[]
     */
    public function getAlternateLocationDistanceRef(): ?array
    {
        return $this->AlternateLocationDistanceRef;
    }
    /**
     * Set AlternateLocationDistanceRef value
     * @param \Travelport\Air\StructType\AlternateLocationDistanceRef[] $alternateLocationDistanceRef
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setAlternateLocationDistanceRef(?array $alternateLocationDistanceRef = null): self
    {
        $this->AlternateLocationDistanceRef = $alternateLocationDistanceRef;
        
        return $this;
    }
    /**
     * Add item to AlternateLocationDistanceRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AlternateLocationDistanceRef $item
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function addToAlternateLocationDistanceRef(\Travelport\Air\StructType\AlternateLocationDistanceRef $item): self
    {
        $this->AlternateLocationDistanceRef[] = $item;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return \Travelport\Air\StructType\Connection|null
     */
    public function getConnection(): ?\Travelport\Air\StructType\Connection
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @param \Travelport\Air\StructType\Connection $connection
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setConnection(?\Travelport\Air\StructType\Connection $connection = null): self
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
     * Set SellMessage value
     * @param string[] $sellMessage
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setSellMessage(?array $sellMessage = null): self
    {
        $this->SellMessage = $sellMessage;
        
        return $this;
    }
    /**
     * Add item to SellMessage value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function addToSellMessage(string $item): self
    {
        $this->SellMessage[] = $item;
        
        return $this;
    }
    /**
     * Get RailCoachDetails value
     * @return \Travelport\Air\StructType\RailCoachDetails[]
     */
    public function getRailCoachDetails(): ?array
    {
        return $this->RailCoachDetails;
    }
    /**
     * Set RailCoachDetails value
     * @param \Travelport\Air\StructType\RailCoachDetails[] $railCoachDetails
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setRailCoachDetails(?array $railCoachDetails = null): self
    {
        $this->RailCoachDetails = $railCoachDetails;
        
        return $this;
    }
    /**
     * Add item to RailCoachDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailCoachDetails $item
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function addToRailCoachDetails(\Travelport\Air\StructType\RailCoachDetails $item): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setOpenSegment(?bool $openSegment = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setCarrier(?string $carrier = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setClassOfService(?string $classOfService = null): self
    {
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
     * @param string $eTicketability
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setETicketability(?string $eTicketability = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setEquipment(?string $equipment = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setMarriageGroup(?int $marriageGroup = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setNumberOfStops(?int $numberOfStops = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setSeamless(?bool $seamless = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setChangeOfPlane(?bool $changeOfPlane = false): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setGuaranteedPaymentCarrier(?string $guaranteedPaymentCarrier = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setHostTokenRef(?string $hostTokenRef = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setPassiveProviderReservationInfoRef(?string $passiveProviderReservationInfoRef = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setOptionalServicesIndicator(?bool $optionalServicesIndicator = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setAvailabilitySource(?string $availabilitySource = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setAPISRequirementsRef(?string $aPISRequirementsRef = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setBlackListed(?bool $blackListed = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setOperationalStatus(?string $operationalStatus = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setNumberInParty(?int $numberInParty = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setRailCoachNumber(?string $railCoachNumber = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setFlownSegment(?bool $flownSegment = false): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setScheduleChange(?bool $scheduleChange = false): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setBrandIndicator(?string $brandIndicator = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setOrigin(?string $origin = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setDestination(?string $destination = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setFlightTime(?int $flightTime = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setTravelTime(?int $travelTime = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setDistance(?int $distance = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setProviderCode(?string $providerCode = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setParticipantLevel(?string $participantLevel = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setLinkAvailability(?bool $linkAvailability = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setPolledAvailabilityOption(?string $polledAvailabilityOption = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeBaseAirSegment
     */
    public function setAvailabilityDisplayType(?string $availabilityDisplayType = null): self
    {
        $this->AvailabilityDisplayType = $availabilityDisplayType;
        
        return $this;
    }
}
