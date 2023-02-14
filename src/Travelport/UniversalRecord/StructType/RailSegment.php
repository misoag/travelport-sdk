<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $DepartureTime;
    /**
     * The RailSegmentInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailSegmentInfo
     * @var \Travelport\UniversalRecord\StructType\RailSegmentInfo[]
     */
    protected ?array $RailSegmentInfo = null;
    /**
     * The OperatingCompany
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: OperatingCompany
     * @var \Travelport\UniversalRecord\StructType\OperatingCompany|null
     */
    protected ?\Travelport\UniversalRecord\StructType\OperatingCompany $OperatingCompany = null;
    /**
     * The RailAvailInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailAvailInfo
     * @var \Travelport\UniversalRecord\StructType\RailAvailInfo[]
     */
    protected ?array $RailAvailInfo = null;
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
    protected ?array $FulFillmentType = null;
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
    protected ?string $TrainNumber = null;
    /**
     * The TrainType
     * Meta information extracted from the WSDL
     * - documentation: Type of train used. Same as TrainServiceType.
     * - use: optional
     * @var string|null
     */
    protected ?string $TrainType = null;
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
    protected ?string $TrainTypeCode = null;
    /**
     * The TransportMode
     * Meta information extracted from the WSDL
     * - documentation: Type of Transport Mode used.
     * - use: optional
     * @var string|null
     */
    protected ?string $TransportMode = null;
    /**
     * The SeatAssignable
     * Meta information extracted from the WSDL
     * - documentation: Set to true if there exists seats to be booked
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SeatAssignable = null;
    /**
     * The TransportCode
     * Meta information extracted from the WSDL
     * - documentation: Supplier specific train code
     * - use: optional
     * @var string|null
     */
    protected ?string $TransportCode = null;
    /**
     * The ReservationRequired
     * Meta information extracted from the WSDL
     * - documentation: Set to true if a reservation is required for booking.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReservationRequired = null;
    /**
     * The TravelTime
     * Meta information extracted from the WSDL
     * - documentation: Total time spent (minutes) traveling
     * - use: optional
     * @var int|null
     */
    protected ?int $TravelTime = null;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - documentation: The reference key for the host token. From the HostTokenList Providers RCH. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $HostTokenRef = null;
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
    protected ?string $CabinClass = null;
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
    protected ?string $ClassCode = null;
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
    protected ?string $Origin = null;
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
    protected ?string $Destination = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the origin location.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ArrivalTime = null;
    /**
     * The OriginStationName
     * Meta information extracted from the WSDL
     * - documentation: The origin station name for the Journey.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginStationName = null;
    /**
     * The DestinationStationName
     * Meta information extracted from the WSDL
     * - documentation: The destination station name for the Journey.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $DestinationStationName = null;
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
    protected ?string $RailLocOrigin = null;
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
    protected ?string $RailLocDestination = null;
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
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setRailSegmentInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailSegmentInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailSegmentInfoForArrayConstraintsFromSetRailSegmentInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railSegmentRailSegmentInfoItem) {
            // validation for constraint: itemType
            if (!$railSegmentRailSegmentInfoItem instanceof \Travelport\UniversalRecord\StructType\RailSegmentInfo) {
                $invalidValues[] = is_object($railSegmentRailSegmentInfoItem) ? get_class($railSegmentRailSegmentInfoItem) : sprintf('%s(%s)', gettype($railSegmentRailSegmentInfoItem), var_export($railSegmentRailSegmentInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailSegmentInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailSegmentInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailSegmentInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSegmentInfo[] $railSegmentInfo
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setRailSegmentInfo(?array $railSegmentInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($railSegmentInfoArrayErrorMessage = self::validateRailSegmentInfoForArrayConstraintsFromSetRailSegmentInfo($railSegmentInfo))) {
            throw new InvalidArgumentException($railSegmentInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railSegmentInfo) && count($railSegmentInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railSegmentInfo)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailSegmentInfo) {
            throw new InvalidArgumentException(sprintf('The RailSegmentInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailSegmentInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailSegmentInfo) && count($this->RailSegmentInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailSegmentInfo)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setRailAvailInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailAvailInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailAvailInfoForArrayConstraintsFromSetRailAvailInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railSegmentRailAvailInfoItem) {
            // validation for constraint: itemType
            if (!$railSegmentRailAvailInfoItem instanceof \Travelport\UniversalRecord\StructType\RailAvailInfo) {
                $invalidValues[] = is_object($railSegmentRailAvailInfoItem) ? get_class($railSegmentRailAvailInfoItem) : sprintf('%s(%s)', gettype($railSegmentRailAvailInfoItem), var_export($railSegmentRailAvailInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailAvailInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailAvailInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailAvailInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailAvailInfo[] $railAvailInfo
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setRailAvailInfo(?array $railAvailInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($railAvailInfoArrayErrorMessage = self::validateRailAvailInfoForArrayConstraintsFromSetRailAvailInfo($railAvailInfo))) {
            throw new InvalidArgumentException($railAvailInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railAvailInfo) && count($railAvailInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railAvailInfo)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailAvailInfo) {
            throw new InvalidArgumentException(sprintf('The RailAvailInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailAvailInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailAvailInfo) && count($this->RailAvailInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailAvailInfo)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setFulFillmentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulFillmentType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulFillmentTypeForArrayConstraintsFromSetFulFillmentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railSegmentFulFillmentTypeItem) {
            // validation for constraint: itemType
            if (!is_string($railSegmentFulFillmentTypeItem)) {
                $invalidValues[] = is_object($railSegmentFulFillmentTypeItem) ? get_class($railSegmentFulFillmentTypeItem) : sprintf('%s(%s)', gettype($railSegmentFulFillmentTypeItem), var_export($railSegmentFulFillmentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FulFillmentType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setFulFillmentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulFillmentType method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulFillmentTypeForMaxLengthConstraintFromSetFulFillmentType($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $railSegmentFulFillmentTypeItem) {
            // validation for constraint: maxLength(255)
            if (mb_strlen((string) $railSegmentFulFillmentTypeItem) > 255) {
                $invalidValues[] = var_export($railSegmentFulFillmentTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 255', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setFulFillmentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulFillmentType method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulFillmentTypeForMinLengthConstraintFromSetFulFillmentType($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $railSegmentFulFillmentTypeItem) {
            // validation for constraint: minLength
            if (mb_strlen((string) $railSegmentFulFillmentTypeItem) < 0) {
                $invalidValues[] = var_export($railSegmentFulFillmentTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 0', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FulFillmentType value
     * @throws InvalidArgumentException
     * @param string[] $fulFillmentType
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setFulFillmentType(?array $fulFillmentType = null): self
    {
        // validation for constraint: array
        if ('' !== ($fulFillmentTypeArrayErrorMessage = self::validateFulFillmentTypeForArrayConstraintsFromSetFulFillmentType($fulFillmentType))) {
            throw new InvalidArgumentException($fulFillmentTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(255)
        if ('' !== ($fulFillmentTypeMaxLengthErrorMessage = self::validateFulFillmentTypeForMaxLengthConstraintFromSetFulFillmentType($fulFillmentType))) {
            throw new InvalidArgumentException($fulFillmentTypeMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fulFillmentType) && count($fulFillmentType) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fulFillmentType)), __LINE__);
        }
        // validation for constraint: minLength
        if ('' !== ($fulFillmentTypeMinLengthErrorMessage = self::validateFulFillmentTypeForMinLengthConstraintFromSetFulFillmentType($fulFillmentType))) {
            throw new InvalidArgumentException($fulFillmentTypeMinLengthErrorMessage, __LINE__);
        }
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
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The FulFillmentType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (mb_strlen((string) $item) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FulFillmentType) && count($this->FulFillmentType) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FulFillmentType)), __LINE__);
        }
        // validation for constraint: minLength
        if (mb_strlen((string) $item) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $item)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($trainNumber) && !is_string($trainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNumber, true), gettype($trainNumber)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($trainNumber) && mb_strlen((string) $trainNumber) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $trainNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($trainNumber) && mb_strlen((string) $trainNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $trainNumber)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($trainType) && !is_string($trainType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainType, true), gettype($trainType)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($trainTypeCode) && !is_string($trainTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainTypeCode, true), gettype($trainTypeCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($trainTypeCode) && mb_strlen((string) $trainTypeCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $trainTypeCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($trainTypeCode) && mb_strlen((string) $trainTypeCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $trainTypeCode)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeTransportMode::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTransportMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $transportMode
     * @return \Travelport\UniversalRecord\StructType\RailSegment
     */
    public function setTransportMode(?string $transportMode = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTransportMode::valueIsValid($transportMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTransportMode', is_array($transportMode) ? implode(', ', $transportMode) : var_export($transportMode, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTransportMode::getValidValues())), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($seatAssignable) && !is_bool($seatAssignable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($seatAssignable, true), gettype($seatAssignable)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($transportCode) && !is_string($transportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportCode, true), gettype($transportCode)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($reservationRequired) && !is_bool($reservationRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reservationRequired, true), gettype($reservationRequired)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($travelTime) && !(is_int($travelTime) || ctype_digit($travelTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelTime, true), gettype($travelTime)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($hostTokenRef) && !is_string($hostTokenRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostTokenRef, true), gettype($hostTokenRef)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinClass, true), gettype($cabinClass)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($cabinClass) && mb_strlen((string) $cabinClass) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $cabinClass)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($cabinClass) && mb_strlen((string) $cabinClass) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $cabinClass)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($classCode) && !is_string($classCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classCode, true), gettype($classCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($classCode) && mb_strlen((string) $classCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $classCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($classCode) && mb_strlen((string) $classCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $classCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailSegment
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
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($originStationName) && !is_string($originStationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originStationName, true), gettype($originStationName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($destinationStationName) && !is_string($destinationStationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationStationName, true), gettype($destinationStationName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($railLocOrigin) && !is_string($railLocOrigin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railLocOrigin, true), gettype($railLocOrigin)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($railLocOrigin) && mb_strlen((string) $railLocOrigin) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $railLocOrigin)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($railLocOrigin) && mb_strlen((string) $railLocOrigin) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $railLocOrigin)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($railLocDestination) && !is_string($railLocDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railLocDestination, true), gettype($railLocDestination)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($railLocDestination) && mb_strlen((string) $railLocDestination) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $railLocDestination)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($railLocDestination) && mb_strlen((string) $railLocDestination) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $railLocDestination)), __LINE__);
        }
        $this->RailLocDestination = $railLocDestination;
        
        return $this;
    }
}
