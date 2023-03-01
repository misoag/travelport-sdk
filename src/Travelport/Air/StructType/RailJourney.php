<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailJourney StructType
 * Meta information extracted from the WSDL
 * - documentation: Use references on rail availability response, and the full segment on the reservation. | Captures all journey-related data
 * @subpackage Structs
 */
class RailJourney extends AbstractStructBase
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
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity departs. This does not include time zone information since it can be derived from the origin location.
     * - type: xs:string
     * - use: required
     * @var string
     */
    public string $DepartureTime;
    /**
     * The RailSegment
     * Meta information extracted from the WSDL
     * - choice: RailSegment | RailSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: RailSegment
     * @var \Travelport\Air\StructType\RailSegment[]
     */
    public ?array $RailSegment = null;
    /**
     * The RailSegmentRef
     * Meta information extracted from the WSDL
     * - choice: RailSegment | RailSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: RailSegmentRef
     * @var \Travelport\Air\StructType\RailSegmentRef[]
     */
    public ?array $RailSegmentRef = null;
    /**
     * The JourneyRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: JourneyRemark
     * @var \Travelport\Air\StructType\JourneyRemark[]
     */
    public ?array $JourneyRemark = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Air\StructType\HostToken[]
     */
    public ?array $HostToken = null;
    /**
     * The RouteDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - use: optional
     * @var string|null
     */
    public ?string $RouteDescription = null;
    /**
     * The JourneyDirection
     * Meta information extracted from the WSDL
     * - documentation: The direction of the Journey (Outward or Return).
     * - use: optional
     * @var string|null
     */
    public ?string $JourneyDirection = null;
    /**
     * The JourneyDuration
     * Meta information extracted from the WSDL
     * - documentation: The duration of the entire Journey in minutes
     * - use: optional
     * @var int|null
     */
    public ?int $JourneyDuration = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of this Journey.
     * - use: optional
     * @var string|null
     */
    public ?string $Status = null;
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
     * - documentation: Passive provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PassiveProviderReservationInfoRef = null;
    /**
     * The TravelOrder
     * Meta information extracted from the WSDL
     * - documentation: To identify the appropriate travel sequence for Air/Car/Hotel/Rail segments/reservations/Journeys based on travel dates. This ordering is applicable across the UR not provider or traveler specific
     * - use: optional
     * @var int|null
     */
    public ?int $TravelOrder = null;
    /**
     * The RouteReference
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $RouteReference = null;
    /**
     * The Operation
     * Meta information extracted from the WSDL
     * - documentation: "Type of exchange. Add - Add new Journey. Update - Modify existing Journey. Delete - Remove existing Journey"
     * - use: optional
     * @var string|null
     */
    public ?string $Operation = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - type: common:typeIATACode
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - type: common:typeIATACode
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the origin location.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ArrivalTime = null;
    /**
     * The OriginStationName
     * Meta information extracted from the WSDL
     * - documentation: The origin station name for the Journey.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $OriginStationName = null;
    /**
     * The DestinationStationName
     * Meta information extracted from the WSDL
     * - documentation: The destination station name for the Journey.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $DestinationStationName = null;
    /**
     * The RailLocOrigin
     * Meta information extracted from the WSDL
     * - documentation: RCH specific origin code (a.k.a UCodes) which uniquely identifies a train station. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - type: common:typeRailLocationCode
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
     * - type: common:typeRailLocationCode
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $RailLocDestination = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateFees = null;
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
     * Constructor method for RailJourney
     * @uses RailJourney::setKey()
     * @uses RailJourney::setDepartureTime()
     * @uses RailJourney::setRailSegment()
     * @uses RailJourney::setRailSegmentRef()
     * @uses RailJourney::setJourneyRemark()
     * @uses RailJourney::setHostToken()
     * @uses RailJourney::setRouteDescription()
     * @uses RailJourney::setJourneyDirection()
     * @uses RailJourney::setJourneyDuration()
     * @uses RailJourney::setStatus()
     * @uses RailJourney::setProviderReservationInfoRef()
     * @uses RailJourney::setPassiveProviderReservationInfoRef()
     * @uses RailJourney::setTravelOrder()
     * @uses RailJourney::setRouteReference()
     * @uses RailJourney::setOperation()
     * @uses RailJourney::setOrigin()
     * @uses RailJourney::setDestination()
     * @uses RailJourney::setArrivalTime()
     * @uses RailJourney::setOriginStationName()
     * @uses RailJourney::setDestinationStationName()
     * @uses RailJourney::setRailLocOrigin()
     * @uses RailJourney::setRailLocDestination()
     * @uses RailJourney::setTotalPrice()
     * @uses RailJourney::setBasePrice()
     * @uses RailJourney::setApproximateTotalPrice()
     * @uses RailJourney::setApproximateBasePrice()
     * @uses RailJourney::setEquivalentBasePrice()
     * @uses RailJourney::setTaxes()
     * @uses RailJourney::setFees()
     * @uses RailJourney::setServices()
     * @uses RailJourney::setApproximateTaxes()
     * @uses RailJourney::setApproximateFees()
     * @uses RailJourney::setProviderCode()
     * @uses RailJourney::setSupplierCode()
     * @uses RailJourney::setElStat()
     * @uses RailJourney::setKeyOverride()
     * @param string $key
     * @param string $departureTime
     * @param \Travelport\Air\StructType\RailSegment[] $railSegment
     * @param \Travelport\Air\StructType\RailSegmentRef[] $railSegmentRef
     * @param \Travelport\Air\StructType\JourneyRemark[] $journeyRemark
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @param string $routeDescription
     * @param string $journeyDirection
     * @param int $journeyDuration
     * @param string $status
     * @param string $providerReservationInfoRef
     * @param string $passiveProviderReservationInfoRef
     * @param int $travelOrder
     * @param string $routeReference
     * @param string $operation
     * @param string $origin
     * @param string $destination
     * @param string $arrivalTime
     * @param string $originStationName
     * @param string $destinationStationName
     * @param string $railLocOrigin
     * @param string $railLocDestination
     * @param string $totalPrice
     * @param string $basePrice
     * @param string $approximateTotalPrice
     * @param string $approximateBasePrice
     * @param string $equivalentBasePrice
     * @param string $taxes
     * @param string $fees
     * @param string $services
     * @param string $approximateTaxes
     * @param string $approximateFees
     * @param string $providerCode
     * @param string $supplierCode
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, string $departureTime, ?array $railSegment = null, ?array $railSegmentRef = null, ?array $journeyRemark = null, ?array $hostToken = null, ?string $routeDescription = null, ?string $journeyDirection = null, ?int $journeyDuration = null, ?string $status = null, ?string $providerReservationInfoRef = null, ?string $passiveProviderReservationInfoRef = null, ?int $travelOrder = null, ?string $routeReference = null, ?string $operation = null, ?string $origin = null, ?string $destination = null, ?string $arrivalTime = null, ?string $originStationName = null, ?string $destinationStationName = null, ?string $railLocOrigin = null, ?string $railLocDestination = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setDepartureTime($departureTime)
            ->setRailSegment($railSegment)
            ->setRailSegmentRef($railSegmentRef)
            ->setJourneyRemark($journeyRemark)
            ->setHostToken($hostToken)
            ->setRouteDescription($routeDescription)
            ->setJourneyDirection($journeyDirection)
            ->setJourneyDuration($journeyDuration)
            ->setStatus($status)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setPassiveProviderReservationInfoRef($passiveProviderReservationInfoRef)
            ->setTravelOrder($travelOrder)
            ->setRouteReference($routeReference)
            ->setOperation($operation)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setArrivalTime($arrivalTime)
            ->setOriginStationName($originStationName)
            ->setDestinationStationName($destinationStationName)
            ->setRailLocOrigin($railLocOrigin)
            ->setRailLocDestination($railLocDestination)
            ->setTotalPrice($totalPrice)
            ->setBasePrice($basePrice)
            ->setApproximateTotalPrice($approximateTotalPrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setEquivalentBasePrice($equivalentBasePrice)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setServices($services)
            ->setApproximateTaxes($approximateTaxes)
            ->setApproximateFees($approximateFees)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
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
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string
     */
    public function getDepartureTime(): string
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setDepartureTime(string $departureTime): self
    {
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get RailSegment value
     * @return \Travelport\Air\StructType\RailSegment[]|null
     */
    public function getRailSegment(): ?array
    {
        return $this->RailSegment ?? null;
    }
    /**
     * Set RailSegment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\RailSegment[] $railSegment
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setRailSegment(?array $railSegment = null): self
    {
        if (is_null($railSegment) || (is_array($railSegment) && empty($railSegment))) {
            unset($this->RailSegment);
        } else {
            $this->RailSegment = $railSegment;
        }
        
        return $this;
    }
    /**
     * Add item to RailSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailSegment $item
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function addToRailSegment(\Travelport\Air\StructType\RailSegment $item): self
    {
        $this->RailSegment[] = $item;
        
        return $this;
    }
    /**
     * Get RailSegmentRef value
     * @return \Travelport\Air\StructType\RailSegmentRef[]|null
     */
    public function getRailSegmentRef(): ?array
    {
        return $this->RailSegmentRef ?? null;
    }
    /**
     * Set RailSegmentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\RailSegmentRef[] $railSegmentRef
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setRailSegmentRef(?array $railSegmentRef = null): self
    {
        if (is_null($railSegmentRef) || (is_array($railSegmentRef) && empty($railSegmentRef))) {
            unset($this->RailSegmentRef);
        } else {
            $this->RailSegmentRef = $railSegmentRef;
        }
        
        return $this;
    }
    /**
     * Add item to RailSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailSegmentRef $item
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function addToRailSegmentRef(\Travelport\Air\StructType\RailSegmentRef $item): self
    {
        $this->RailSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get JourneyRemark value
     * @return \Travelport\Air\StructType\JourneyRemark[]
     */
    public function getJourneyRemark(): ?array
    {
        return $this->JourneyRemark;
    }
    /**
     * Set JourneyRemark value
     * @param \Travelport\Air\StructType\JourneyRemark[] $journeyRemark
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setJourneyRemark(?array $journeyRemark = null): self
    {
        $this->JourneyRemark = $journeyRemark;
        
        return $this;
    }
    /**
     * Add item to JourneyRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\JourneyRemark $item
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function addToJourneyRemark(\Travelport\Air\StructType\JourneyRemark $item): self
    {
        $this->JourneyRemark[] = $item;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\Air\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setHostToken(?array $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\HostToken $item
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function addToHostToken(\Travelport\Air\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
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
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setRouteDescription(?string $routeDescription = null): self
    {
        $this->RouteDescription = $routeDescription;
        
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
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setJourneyDirection(?string $journeyDirection = null): self
    {
        $this->JourneyDirection = $journeyDirection;
        
        return $this;
    }
    /**
     * Get JourneyDuration value
     * @return int|null
     */
    public function getJourneyDuration(): ?int
    {
        return $this->JourneyDuration;
    }
    /**
     * Set JourneyDuration value
     * @param int $journeyDuration
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setJourneyDuration(?int $journeyDuration = null): self
    {
        $this->JourneyDuration = $journeyDuration;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
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
     * @return \Travelport\Air\StructType\RailJourney
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
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setPassiveProviderReservationInfoRef(?string $passiveProviderReservationInfoRef = null): self
    {
        $this->PassiveProviderReservationInfoRef = $passiveProviderReservationInfoRef;
        
        return $this;
    }
    /**
     * Get TravelOrder value
     * @return int|null
     */
    public function getTravelOrder(): ?int
    {
        return $this->TravelOrder;
    }
    /**
     * Set TravelOrder value
     * @param int $travelOrder
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        $this->TravelOrder = $travelOrder;
        
        return $this;
    }
    /**
     * Get RouteReference value
     * @return string|null
     */
    public function getRouteReference(): ?string
    {
        return $this->RouteReference;
    }
    /**
     * Set RouteReference value
     * @param string $routeReference
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setRouteReference(?string $routeReference = null): self
    {
        $this->RouteReference = $routeReference;
        
        return $this;
    }
    /**
     * Get Operation value
     * @return string|null
     */
    public function getOperation(): ?string
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setOperation(?string $operation = null): self
    {
        $this->Operation = $operation;
        
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
     * @return \Travelport\Air\StructType\RailJourney
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
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
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
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        $this->ArrivalTime = $arrivalTime;
        
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
     * @return \Travelport\Air\StructType\RailJourney
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
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setDestinationStationName(?string $destinationStationName = null): self
    {
        $this->DestinationStationName = $destinationStationName;
        
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
     * @return \Travelport\Air\StructType\RailJourney
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
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setRailLocDestination(?string $railLocDestination = null): self
    {
        $this->RailLocDestination = $railLocDestination;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get BasePrice value
     * @return string|null
     */
    public function getBasePrice(): ?string
    {
        return $this->BasePrice;
    }
    /**
     * Set BasePrice value
     * @param string $basePrice
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        $this->BasePrice = $basePrice;
        
        return $this;
    }
    /**
     * Get ApproximateTotalPrice value
     * @return string|null
     */
    public function getApproximateTotalPrice(): ?string
    {
        return $this->ApproximateTotalPrice;
    }
    /**
     * Set ApproximateTotalPrice value
     * @param string $approximateTotalPrice
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
    /**
     * Get ApproximateBasePrice value
     * @return string|null
     */
    public function getApproximateBasePrice(): ?string
    {
        return $this->ApproximateBasePrice;
    }
    /**
     * Set ApproximateBasePrice value
     * @param string $approximateBasePrice
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        $this->ApproximateBasePrice = $approximateBasePrice;
        
        return $this;
    }
    /**
     * Get EquivalentBasePrice value
     * @return string|null
     */
    public function getEquivalentBasePrice(): ?string
    {
        return $this->EquivalentBasePrice;
    }
    /**
     * Set EquivalentBasePrice value
     * @param string $equivalentBasePrice
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setEquivalentBasePrice(?string $equivalentBasePrice = null): self
    {
        $this->EquivalentBasePrice = $equivalentBasePrice;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setTaxes(?string $taxes = null): self
    {
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return string|null
     */
    public function getFees(): ?string
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param string $fees
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setFees(?string $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get Services value
     * @return string|null
     */
    public function getServices(): ?string
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param string $services
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setServices(?string $services = null): self
    {
        $this->Services = $services;
        
        return $this;
    }
    /**
     * Get ApproximateTaxes value
     * @return string|null
     */
    public function getApproximateTaxes(): ?string
    {
        return $this->ApproximateTaxes;
    }
    /**
     * Set ApproximateTaxes value
     * @param string $approximateTaxes
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setApproximateTaxes(?string $approximateTaxes = null): self
    {
        $this->ApproximateTaxes = $approximateTaxes;
        
        return $this;
    }
    /**
     * Get ApproximateFees value
     * @return string|null
     */
    public function getApproximateFees(): ?string
    {
        return $this->ApproximateFees;
    }
    /**
     * Set ApproximateFees value
     * @param string $approximateFees
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        $this->ApproximateFees = $approximateFees;
        
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
     * @return \Travelport\Air\StructType\RailJourney
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
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
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
     * @return \Travelport\Air\StructType\RailJourney
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
     * @return \Travelport\Air\StructType\RailJourney
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
