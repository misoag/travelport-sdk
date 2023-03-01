<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailSegment StructType
 * Meta information extracted from the WSDL
 * - documentation: Rail Segment
 * - type: xs:boolean
 * @subpackage Structs
 */
class RailSegment extends Segment
{
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
     * The RailSegmentInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailSegmentInfo
     * @var \Travelport\UniversalRecord\StructType\RailSegmentInfo[]
     */
    public ?array $RailSegmentInfo = null;
    /**
     * The OperatingCompany
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: OperatingCompany
     * @var \Travelport\UniversalRecord\StructType\OperatingCompany|null
     */
    public ?\Travelport\UniversalRecord\StructType\OperatingCompany $OperatingCompany = null;
    /**
     * The RailAvailInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailAvailInfo
     * @var \Travelport\UniversalRecord\StructType\RailAvailInfo[]
     */
    public ?array $RailAvailInfo = null;
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
     * The TrainNumber
     * Meta information extracted from the WSDL
     * - documentation: The number that this train route operates under
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $TrainNumber = null;
    /**
     * The TrainType
     * Meta information extracted from the WSDL
     * - documentation: Type of train used. Same as TrainServiceType.
     * - use: optional
     * @var string|null
     */
    public ?string $TrainType = null;
    /**
     * The TrainTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Code for type of train used. Same as TrainServiceType. | Code for type of train used. Same as TrainServiceType
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $TrainTypeCode = null;
    /**
     * The TransportMode
     * Meta information extracted from the WSDL
     * - documentation: Type of Transport Mode used.
     * - use: optional
     * @var string|null
     */
    public ?string $TransportMode = null;
    /**
     * The SeatAssignable
     * Meta information extracted from the WSDL
     * - documentation: Set to true if there exists seats to be booked
     * - use: optional
     * @var bool|null
     */
    public ?bool $SeatAssignable = null;
    /**
     * The TransportCode
     * Meta information extracted from the WSDL
     * - documentation: Supplier specific train code
     * - use: optional
     * @var string|null
     */
    public ?string $TransportCode = null;
    /**
     * The ReservationRequired
     * Meta information extracted from the WSDL
     * - documentation: Set to true if a reservation is required for booking.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReservationRequired = null;
    /**
     * The TravelTime
     * Meta information extracted from the WSDL
     * - documentation: Total time spent (minutes) traveling
     * - use: optional
     * @var int|null
     */
    public ?int $TravelTime = null;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - documentation: The reference key for the host token. From the HostTokenList Providers RCH. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $HostTokenRef = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: Rail Cabin class specification. The valid values are Economy, Business, First and Other | Rail Cabin class specification .The valid values are Economy,Business,First and Other.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $CabinClass = null;
    /**
     * The ClassCode
     * Meta information extracted from the WSDL
     * - documentation: A booking code or fare basis code or fare class.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $ClassCode = null;
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
     * Constructor method for RailSegment
     * @uses RailSegment::setDepartureTime()
     * @uses RailSegment::setRailSegmentInfo()
     * @uses RailSegment::setOperatingCompany()
     * @uses RailSegment::setRailAvailInfo()
     * @uses RailSegment::setFulFillmentType()
     * @uses RailSegment::setTrainNumber()
     * @uses RailSegment::setTrainType()
     * @uses RailSegment::setTrainTypeCode()
     * @uses RailSegment::setTransportMode()
     * @uses RailSegment::setSeatAssignable()
     * @uses RailSegment::setTransportCode()
     * @uses RailSegment::setReservationRequired()
     * @uses RailSegment::setTravelTime()
     * @uses RailSegment::setHostTokenRef()
     * @uses RailSegment::setCabinClass()
     * @uses RailSegment::setClassCode()
     * @uses RailSegment::setOrigin()
     * @uses RailSegment::setDestination()
     * @uses RailSegment::setArrivalTime()
     * @uses RailSegment::setOriginStationName()
     * @uses RailSegment::setDestinationStationName()
     * @uses RailSegment::setRailLocOrigin()
     * @uses RailSegment::setRailLocDestination()
     * @param string $departureTime
     * @param \Travelport\UniversalRecord\StructType\RailSegmentInfo[] $railSegmentInfo
     * @param \Travelport\UniversalRecord\StructType\OperatingCompany $operatingCompany
     * @param \Travelport\UniversalRecord\StructType\RailAvailInfo[] $railAvailInfo
     * @param string[] $fulFillmentType
     * @param string $trainNumber
     * @param string $trainType
     * @param string $trainTypeCode
     * @param string $transportMode
     * @param bool $seatAssignable
     * @param string $transportCode
     * @param bool $reservationRequired
     * @param int $travelTime
     * @param string $hostTokenRef
     * @param string $cabinClass
     * @param string $classCode
     * @param string $origin
     * @param string $destination
     * @param string $arrivalTime
     * @param string $originStationName
     * @param string $destinationStationName
     * @param string $railLocOrigin
     * @param string $railLocDestination
     */
    public function __construct(string $departureTime, ?array $railSegmentInfo = null, ?\Travelport\UniversalRecord\StructType\OperatingCompany $operatingCompany = null, ?array $railAvailInfo = null, ?array $fulFillmentType = null, ?string $trainNumber = null, ?string $trainType = null, ?string $trainTypeCode = null, ?string $transportMode = null, ?bool $seatAssignable = null, ?string $transportCode = null, ?bool $reservationRequired = null, ?int $travelTime = null, ?string $hostTokenRef = null, ?string $cabinClass = null, ?string $classCode = null, ?string $origin = null, ?string $destination = null, ?string $arrivalTime = null, ?string $originStationName = null, ?string $destinationStationName = null, ?string $railLocOrigin = null, ?string $railLocDestination = null)
    {
        $this
            ->setDepartureTime($departureTime)
            ->setRailSegmentInfo($railSegmentInfo)
            ->setOperatingCompany($operatingCompany)
            ->setRailAvailInfo($railAvailInfo)
            ->setFulFillmentType($fulFillmentType)
            ->setTrainNumber($trainNumber)
            ->setTrainType($trainType)
            ->setTrainTypeCode($trainTypeCode)
            ->setTransportMode($transportMode)
            ->setSeatAssignable($seatAssignable)
            ->setTransportCode($transportCode)
            ->setReservationRequired($reservationRequired)
            ->setTravelTime($travelTime)
            ->setHostTokenRef($hostTokenRef)
            ->setCabinClass($cabinClass)
            ->setClassCode($classCode)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setArrivalTime($arrivalTime)
            ->setOriginStationName($originStationName)
            ->setDestinationStationName($destinationStationName)
            ->setRailLocOrigin($railLocOrigin)
            ->setRailLocDestination($railLocDestination);
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setDepartureTime(string $departureTime): self
    {
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get RailSegmentInfo value
     * @return \Travelport\UniversalRecord\StructType\RailSegmentInfo[]
     */
    public function getRailSegmentInfo(): ?array
    {
        return $this->RailSegmentInfo;
    }
    /**
     * Set RailSegmentInfo value
     * @param \Travelport\UniversalRecord\StructType\RailSegmentInfo[] $railSegmentInfo
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setRailSegmentInfo(?array $railSegmentInfo = null): self
    {
        $this->RailSegmentInfo = $railSegmentInfo;
        
        return $this;
    }
    /**
     * Add item to RailSegmentInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSegmentInfo $item
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function addToRailSegmentInfo(\Travelport\UniversalRecord\StructType\RailSegmentInfo $item): self
    {
        $this->RailSegmentInfo[] = $item;
        
        return $this;
    }
    /**
     * Get OperatingCompany value
     * @return \Travelport\UniversalRecord\StructType\OperatingCompany|null
     */
    public function getOperatingCompany(): ?\Travelport\UniversalRecord\StructType\OperatingCompany
    {
        return $this->OperatingCompany;
    }
    /**
     * Set OperatingCompany value
     * @param \Travelport\UniversalRecord\StructType\OperatingCompany $operatingCompany
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setOperatingCompany(?\Travelport\UniversalRecord\StructType\OperatingCompany $operatingCompany = null): self
    {
        $this->OperatingCompany = $operatingCompany;
        
        return $this;
    }
    /**
     * Get RailAvailInfo value
     * @return \Travelport\UniversalRecord\StructType\RailAvailInfo[]
     */
    public function getRailAvailInfo(): ?array
    {
        return $this->RailAvailInfo;
    }
    /**
     * Set RailAvailInfo value
     * @param \Travelport\UniversalRecord\StructType\RailAvailInfo[] $railAvailInfo
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setRailAvailInfo(?array $railAvailInfo = null): self
    {
        $this->RailAvailInfo = $railAvailInfo;
        
        return $this;
    }
    /**
     * Add item to RailAvailInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailAvailInfo $item
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function addToRailAvailInfo(\Travelport\UniversalRecord\StructType\RailAvailInfo $item): self
    {
        $this->RailAvailInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function addToFulFillmentType(string $item): self
    {
        $this->FulFillmentType[] = $item;
        
        return $this;
    }
    /**
     * Get TrainNumber value
     * @return string|null
     */
    public function getTrainNumber(): ?string
    {
        return $this->TrainNumber;
    }
    /**
     * Set TrainNumber value
     * @param string $trainNumber
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setTrainNumber(?string $trainNumber = null): self
    {
        $this->TrainNumber = $trainNumber;
        
        return $this;
    }
    /**
     * Get TrainType value
     * @return string|null
     */
    public function getTrainType(): ?string
    {
        return $this->TrainType;
    }
    /**
     * Set TrainType value
     * @param string $trainType
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setTrainType(?string $trainType = null): self
    {
        $this->TrainType = $trainType;
        
        return $this;
    }
    /**
     * Get TrainTypeCode value
     * @return string|null
     */
    public function getTrainTypeCode(): ?string
    {
        return $this->TrainTypeCode;
    }
    /**
     * Set TrainTypeCode value
     * @param string $trainTypeCode
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setTrainTypeCode(?string $trainTypeCode = null): self
    {
        $this->TrainTypeCode = $trainTypeCode;
        
        return $this;
    }
    /**
     * Get TransportMode value
     * @return string|null
     */
    public function getTransportMode(): ?string
    {
        return $this->TransportMode;
    }
    /**
     * Set TransportMode value
     * @param string $transportMode
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setTransportMode(?string $transportMode = null): self
    {
        $this->TransportMode = $transportMode;
        
        return $this;
    }
    /**
     * Get SeatAssignable value
     * @return bool|null
     */
    public function getSeatAssignable(): ?bool
    {
        return $this->SeatAssignable;
    }
    /**
     * Set SeatAssignable value
     * @param bool $seatAssignable
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setSeatAssignable(?bool $seatAssignable = null): self
    {
        $this->SeatAssignable = $seatAssignable;
        
        return $this;
    }
    /**
     * Get TransportCode value
     * @return string|null
     */
    public function getTransportCode(): ?string
    {
        return $this->TransportCode;
    }
    /**
     * Set TransportCode value
     * @param string $transportCode
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setTransportCode(?string $transportCode = null): self
    {
        $this->TransportCode = $transportCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setReservationRequired(?bool $reservationRequired = null): self
    {
        $this->ReservationRequired = $reservationRequired;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setTravelTime(?int $travelTime = null): self
    {
        $this->TravelTime = $travelTime;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setHostTokenRef(?string $hostTokenRef = null): self
    {
        $this->HostTokenRef = $hostTokenRef;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get ClassCode value
     * @return string|null
     */
    public function getClassCode(): ?string
    {
        return $this->ClassCode;
    }
    /**
     * Set ClassCode value
     * @param string $classCode
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setClassCode(?string $classCode = null): self
    {
        $this->ClassCode = $classCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setRailLocDestination(?string $railLocDestination = null): self
    {
        $this->RailLocDestination = $railLocDestination;
        
        return $this;
    }
}
