<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailFare StructType
 * Meta information extracted from the WSDL
 * - documentation: Use references on rail availability response, and the full fare IDs on the reservation. | Key reference to RailFareNote present in RailFareNotList | Information about this fare component
 * @subpackage Structs
 */
class RailFare extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code or fare class for this fare | Rail Cabin class specification .The valid values are Economy,Business,First and Other.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $CabinClass;
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - documentation: Returns the date on which this fare was quoted. Set as current date
     * - use: required
     * @var string
     */
    public string $EffectiveDate;
    /**
     * The RailFareNoteRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFareNoteRef
     * @var \Travelport\Air\StructType\RailFareNoteRef[]
     */
    public ?array $RailFareNoteRef = null;
    /**
     * The RailFareID
     * Meta information extracted from the WSDL
     * - choice: RailFareID | RailFareIDRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFareID
     * @var \Travelport\Air\StructType\RailFareID[]
     */
    public ?array $RailFareID = null;
    /**
     * The RailFareIDRef
     * Meta information extracted from the WSDL
     * - choice: RailFareID | RailFareIDRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFareIDRef
     * @var \Travelport\Air\StructType\RailFareIDRef[]
     */
    public ?array $RailFareIDRef = null;
    /**
     * The FareValidity
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareValidity
     * @var \Travelport\Air\StructType\FareValidity[]
     */
    public ?array $FareValidity = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Air\StructType\HostToken|null
     */
    public ?\Travelport\Air\StructType\HostToken $HostToken = null;
    /**
     * The FulFillmentType
     * Meta information extracted from the WSDL
     * - documentation: Fulfillment options for this segment. the options will be one of "Ticket on Departure", "Ticketless", "Ticket By Email", "Travel Agency"
     * - base: xs:string
     * - maxLength: 255
     * - maxOccurs: 999
     * - minLength: 0
     * - minOccurs: 0
     * - ref: FulFillmentType
     * @var string[]
     */
    public ?array $FulFillmentType = null;
    /**
     * The RailFareComponent
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: RailFareComponent
     * @var \Travelport\Air\StructType\RailFareComponent[]
     */
    public ?array $RailFareComponent = null;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code or fare description for this fare
     * - use: optional
     * @var string|null
     */
    public ?string $FareBasis = null;
    /**
     * The PassengerTypeCode
     * Meta information extracted from the WSDL
     * - documentation: The PTC that is associated with this fare. Default to ADT | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $PassengerTypeCode = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Returns the airport or city code that defines the origin market for this fare. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Returns the airport or city code that defines the destination market for this fare. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The RouteDescription
     * Meta information extracted from the WSDL
     * - documentation: Describes the route of the train fare.
     * - use: optional
     * @var string|null
     */
    public ?string $RouteDescription = null;
    /**
     * The TicketTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Describes the main identifier code of the fare.
     * - use: optional
     * @var string|null
     */
    public ?string $TicketTypeCode = null;
    /**
     * The FareReference
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 32
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $FareReference = null;
    /**
     * The CrossCityFare
     * Meta information extracted from the WSDL
     * - documentation: Set to 'true' if the fare is valid across a Metropolitan Area, eg. Cross-London travel via the London Underground.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $CrossCityFare = null;
    /**
     * The OriginStationName
     * Meta information extracted from the WSDL
     * - documentation: The origin station name for the Rail Fare.
     * - use: optional
     * @var string|null
     */
    public ?string $OriginStationName = null;
    /**
     * The DestinationStationName
     * Meta information extracted from the WSDL
     * - documentation: The destination station name for the Rail Fare.
     * - use: optional
     * @var string|null
     */
    public ?string $DestinationStationName = null;
    /**
     * The ReservationRequired
     * Meta information extracted from the WSDL
     * - documentation: Set to true if a seat reservation is required while booking.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReservationRequired = null;
    /**
     * The JourneyDirection
     * Meta information extracted from the WSDL
     * - documentation: The direction of the Journey (Outward or Return) associated with the Rail fare.
     * - use: optional
     * @var string|null
     */
    public ?string $JourneyDirection = null;
    /**
     * The RailLocOrigin
     * Meta information extracted from the WSDL
     * - documentation: RCH specific origin code (a.k.a UCodes) which uniquely identifies a train station. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $RailLocOrigin = null;
    /**
     * The RailLocDestination
     * Meta information extracted from the WSDL
     * - documentation: RCH specific destination code (a.k.a UCodes) which uniquely identifies a train station. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $RailLocDestination = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for RailFare
     * @uses RailFare::setKey()
     * @uses RailFare::setCabinClass()
     * @uses RailFare::setEffectiveDate()
     * @uses RailFare::setRailFareNoteRef()
     * @uses RailFare::setRailFareID()
     * @uses RailFare::setRailFareIDRef()
     * @uses RailFare::setFareValidity()
     * @uses RailFare::setHostToken()
     * @uses RailFare::setFulFillmentType()
     * @uses RailFare::setRailFareComponent()
     * @uses RailFare::setFareBasis()
     * @uses RailFare::setPassengerTypeCode()
     * @uses RailFare::setOrigin()
     * @uses RailFare::setDestination()
     * @uses RailFare::setAmount()
     * @uses RailFare::setRouteDescription()
     * @uses RailFare::setTicketTypeCode()
     * @uses RailFare::setFareReference()
     * @uses RailFare::setCrossCityFare()
     * @uses RailFare::setOriginStationName()
     * @uses RailFare::setDestinationStationName()
     * @uses RailFare::setReservationRequired()
     * @uses RailFare::setJourneyDirection()
     * @uses RailFare::setRailLocOrigin()
     * @uses RailFare::setRailLocDestination()
     * @uses RailFare::setElStat()
     * @uses RailFare::setKeyOverride()
     * @param string $key
     * @param string $cabinClass
     * @param string $effectiveDate
     * @param \Travelport\Air\StructType\RailFareNoteRef[] $railFareNoteRef
     * @param \Travelport\Air\StructType\RailFareID[] $railFareID
     * @param \Travelport\Air\StructType\RailFareIDRef[] $railFareIDRef
     * @param \Travelport\Air\StructType\FareValidity[] $fareValidity
     * @param \Travelport\Air\StructType\HostToken $hostToken
     * @param string[] $fulFillmentType
     * @param \Travelport\Air\StructType\RailFareComponent[] $railFareComponent
     * @param string $fareBasis
     * @param string $passengerTypeCode
     * @param string $origin
     * @param string $destination
     * @param string $amount
     * @param string $routeDescription
     * @param string $ticketTypeCode
     * @param string $fareReference
     * @param bool $crossCityFare
     * @param string $originStationName
     * @param string $destinationStationName
     * @param bool $reservationRequired
     * @param string $journeyDirection
     * @param string $railLocOrigin
     * @param string $railLocDestination
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, string $cabinClass, string $effectiveDate, ?array $railFareNoteRef = null, ?array $railFareID = null, ?array $railFareIDRef = null, ?array $fareValidity = null, ?\Travelport\Air\StructType\HostToken $hostToken = null, ?array $fulFillmentType = null, ?array $railFareComponent = null, ?string $fareBasis = null, ?string $passengerTypeCode = null, ?string $origin = null, ?string $destination = null, ?string $amount = null, ?string $routeDescription = null, ?string $ticketTypeCode = null, ?string $fareReference = null, ?bool $crossCityFare = false, ?string $originStationName = null, ?string $destinationStationName = null, ?bool $reservationRequired = null, ?string $journeyDirection = null, ?string $railLocOrigin = null, ?string $railLocDestination = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setCabinClass($cabinClass)
            ->setEffectiveDate($effectiveDate)
            ->setRailFareNoteRef($railFareNoteRef)
            ->setRailFareID($railFareID)
            ->setRailFareIDRef($railFareIDRef)
            ->setFareValidity($fareValidity)
            ->setHostToken($hostToken)
            ->setFulFillmentType($fulFillmentType)
            ->setRailFareComponent($railFareComponent)
            ->setFareBasis($fareBasis)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setAmount($amount)
            ->setRouteDescription($routeDescription)
            ->setTicketTypeCode($ticketTypeCode)
            ->setFareReference($fareReference)
            ->setCrossCityFare($crossCityFare)
            ->setOriginStationName($originStationName)
            ->setDestinationStationName($destinationStationName)
            ->setReservationRequired($reservationRequired)
            ->setJourneyDirection($journeyDirection)
            ->setRailLocOrigin($railLocOrigin)
            ->setRailLocDestination($railLocDestination)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return string
     */
    public function getCabinClass(): string
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param string $cabinClass
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setCabinClass(string $cabinClass): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get RailFareNoteRef value
     * @return \Travelport\Air\StructType\RailFareNoteRef[]
     */
    public function getRailFareNoteRef(): ?array
    {
        return $this->RailFareNoteRef;
    }
    /**
     * Set RailFareNoteRef value
     * @param \Travelport\Air\StructType\RailFareNoteRef[] $railFareNoteRef
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setRailFareNoteRef(?array $railFareNoteRef = null): self
    {
        $this->RailFareNoteRef = $railFareNoteRef;
        
        return $this;
    }
    /**
     * Add item to RailFareNoteRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailFareNoteRef $item
     * @return \Travelport\Air\StructType\RailFare
     */
    public function addToRailFareNoteRef(\Travelport\Air\StructType\RailFareNoteRef $item): self
    {
        $this->RailFareNoteRef[] = $item;
        
        return $this;
    }
    /**
     * Get RailFareID value
     * @return \Travelport\Air\StructType\RailFareID[]|null
     */
    public function getRailFareID(): ?array
    {
        return $this->RailFareID ?? null;
    }
    /**
     * Set RailFareID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\RailFareID[] $railFareID
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setRailFareID(?array $railFareID = null): self
    {
        if (is_null($railFareID) || (is_array($railFareID) && empty($railFareID))) {
            unset($this->RailFareID);
        } else {
            $this->RailFareID = $railFareID;
        }
        
        return $this;
    }
    /**
     * Add item to RailFareID value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailFareID $item
     * @return \Travelport\Air\StructType\RailFare
     */
    public function addToRailFareID(\Travelport\Air\StructType\RailFareID $item): self
    {
        $this->RailFareID[] = $item;
        
        return $this;
    }
    /**
     * Get RailFareIDRef value
     * @return \Travelport\Air\StructType\RailFareIDRef[]|null
     */
    public function getRailFareIDRef(): ?array
    {
        return $this->RailFareIDRef ?? null;
    }
    /**
     * Set RailFareIDRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\RailFareIDRef[] $railFareIDRef
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setRailFareIDRef(?array $railFareIDRef = null): self
    {
        if (is_null($railFareIDRef) || (is_array($railFareIDRef) && empty($railFareIDRef))) {
            unset($this->RailFareIDRef);
        } else {
            $this->RailFareIDRef = $railFareIDRef;
        }
        
        return $this;
    }
    /**
     * Add item to RailFareIDRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailFareIDRef $item
     * @return \Travelport\Air\StructType\RailFare
     */
    public function addToRailFareIDRef(\Travelport\Air\StructType\RailFareIDRef $item): self
    {
        $this->RailFareIDRef[] = $item;
        
        return $this;
    }
    /**
     * Get FareValidity value
     * @return \Travelport\Air\StructType\FareValidity[]
     */
    public function getFareValidity(): ?array
    {
        return $this->FareValidity;
    }
    /**
     * Set FareValidity value
     * @param \Travelport\Air\StructType\FareValidity[] $fareValidity
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setFareValidity(?array $fareValidity = null): self
    {
        $this->FareValidity = $fareValidity;
        
        return $this;
    }
    /**
     * Add item to FareValidity value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareValidity $item
     * @return \Travelport\Air\StructType\RailFare
     */
    public function addToFareValidity(\Travelport\Air\StructType\FareValidity $item): self
    {
        $this->FareValidity[] = $item;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\Air\StructType\HostToken|null
     */
    public function getHostToken(): ?\Travelport\Air\StructType\HostToken
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\Air\StructType\HostToken $hostToken
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setHostToken(?\Travelport\Air\StructType\HostToken $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Get FulFillmentType value
     * @return string[]
     */
    public function getFulFillmentType(): ?array
    {
        return $this->FulFillmentType;
    }
    /**
     * Set FulFillmentType value
     * @param string[] $fulFillmentType
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setFulFillmentType(?array $fulFillmentType = null): self
    {
        $this->FulFillmentType = $fulFillmentType;
        
        return $this;
    }
    /**
     * Add item to FulFillmentType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\RailFare
     */
    public function addToFulFillmentType(string $item): self
    {
        $this->FulFillmentType[] = $item;
        
        return $this;
    }
    /**
     * Get RailFareComponent value
     * @return \Travelport\Air\StructType\RailFareComponent[]
     */
    public function getRailFareComponent(): ?array
    {
        return $this->RailFareComponent;
    }
    /**
     * Set RailFareComponent value
     * @param \Travelport\Air\StructType\RailFareComponent[] $railFareComponent
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setRailFareComponent(?array $railFareComponent = null): self
    {
        $this->RailFareComponent = $railFareComponent;
        
        return $this;
    }
    /**
     * Add item to RailFareComponent value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailFareComponent $item
     * @return \Travelport\Air\StructType\RailFare
     */
    public function addToRailFareComponent(\Travelport\Air\StructType\RailFareComponent $item): self
    {
        $this->RailFareComponent[] = $item;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return string|null
     */
    public function getFareBasis(): ?string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setFareBasis(?string $fareBasis = null): self
    {
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode(): ?string
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setPassengerTypeCode(?string $passengerTypeCode = null): self
    {
        $this->PassengerTypeCode = $passengerTypeCode;
        
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
     * @return \Travelport\Air\StructType\RailFare
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
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get RouteDescription value
     * @return string|null
     */
    public function getRouteDescription(): ?string
    {
        return $this->RouteDescription;
    }
    /**
     * Set RouteDescription value
     * @param string $routeDescription
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setRouteDescription(?string $routeDescription = null): self
    {
        $this->RouteDescription = $routeDescription;
        
        return $this;
    }
    /**
     * Get TicketTypeCode value
     * @return string|null
     */
    public function getTicketTypeCode(): ?string
    {
        return $this->TicketTypeCode;
    }
    /**
     * Set TicketTypeCode value
     * @param string $ticketTypeCode
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setTicketTypeCode(?string $ticketTypeCode = null): self
    {
        $this->TicketTypeCode = $ticketTypeCode;
        
        return $this;
    }
    /**
     * Get FareReference value
     * @return string|null
     */
    public function getFareReference(): ?string
    {
        return $this->FareReference;
    }
    /**
     * Set FareReference value
     * @param string $fareReference
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setFareReference(?string $fareReference = null): self
    {
        $this->FareReference = $fareReference;
        
        return $this;
    }
    /**
     * Get CrossCityFare value
     * @return bool|null
     */
    public function getCrossCityFare(): ?bool
    {
        return $this->CrossCityFare;
    }
    /**
     * Set CrossCityFare value
     * @param bool $crossCityFare
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setCrossCityFare(?bool $crossCityFare = false): self
    {
        $this->CrossCityFare = $crossCityFare;
        
        return $this;
    }
    /**
     * Get OriginStationName value
     * @return string|null
     */
    public function getOriginStationName(): ?string
    {
        return $this->OriginStationName;
    }
    /**
     * Set OriginStationName value
     * @param string $originStationName
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setOriginStationName(?string $originStationName = null): self
    {
        $this->OriginStationName = $originStationName;
        
        return $this;
    }
    /**
     * Get DestinationStationName value
     * @return string|null
     */
    public function getDestinationStationName(): ?string
    {
        return $this->DestinationStationName;
    }
    /**
     * Set DestinationStationName value
     * @param string $destinationStationName
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setDestinationStationName(?string $destinationStationName = null): self
    {
        $this->DestinationStationName = $destinationStationName;
        
        return $this;
    }
    /**
     * Get ReservationRequired value
     * @return bool|null
     */
    public function getReservationRequired(): ?bool
    {
        return $this->ReservationRequired;
    }
    /**
     * Set ReservationRequired value
     * @param bool $reservationRequired
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setReservationRequired(?bool $reservationRequired = null): self
    {
        $this->ReservationRequired = $reservationRequired;
        
        return $this;
    }
    /**
     * Get JourneyDirection value
     * @return string|null
     */
    public function getJourneyDirection(): ?string
    {
        return $this->JourneyDirection;
    }
    /**
     * Set JourneyDirection value
     * @param string $journeyDirection
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setJourneyDirection(?string $journeyDirection = null): self
    {
        $this->JourneyDirection = $journeyDirection;
        
        return $this;
    }
    /**
     * Get RailLocOrigin value
     * @return string|null
     */
    public function getRailLocOrigin(): ?string
    {
        return $this->RailLocOrigin;
    }
    /**
     * Set RailLocOrigin value
     * @param string $railLocOrigin
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setRailLocOrigin(?string $railLocOrigin = null): self
    {
        $this->RailLocOrigin = $railLocOrigin;
        
        return $this;
    }
    /**
     * Get RailLocDestination value
     * @return string|null
     */
    public function getRailLocDestination(): ?string
    {
        return $this->RailLocDestination;
    }
    /**
     * Set RailLocDestination value
     * @param string $railLocDestination
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setRailLocDestination(?string $railLocDestination = null): self
    {
        $this->RailLocDestination = $railLocDestination;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Air\StructType\RailFare
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
