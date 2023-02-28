<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Key;
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
     * The RailSegment
     * Meta information extracted from the WSDL
     * - choice: RailSegment | RailSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: RailSegment
     * @var \Travelport\UniversalRecord\StructType\RailSegment[]
     */
    protected ?array $RailSegment = null;
    /**
     * The RailSegmentRef
     * Meta information extracted from the WSDL
     * - choice: RailSegment | RailSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: RailSegmentRef
     * @var \Travelport\UniversalRecord\StructType\RailSegmentRef[]
     */
    protected ?array $RailSegmentRef = null;
    /**
     * The JourneyRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: JourneyRemark
     * @var \Travelport\UniversalRecord\StructType\JourneyRemark[]
     */
    protected ?array $JourneyRemark = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\UniversalRecord\StructType\HostToken[]
     */
    protected ?array $HostToken = null;
    /**
     * The RouteDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - use: optional
     * @var string|null
     */
    protected ?string $RouteDescription = null;
    /**
     * The JourneyDirection
     * Meta information extracted from the WSDL
     * - documentation: The direction of the Journey (Outward or Return).
     * - use: optional
     * @var string|null
     */
    protected ?string $JourneyDirection = null;
    /**
     * The JourneyDuration
     * Meta information extracted from the WSDL
     * - documentation: The duration of the entire Journey in minutes
     * - use: optional
     * @var int|null
     */
    protected ?int $JourneyDuration = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of this Journey.
     * - use: optional
     * @var string|null
     */
    protected ?string $Status = null;
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
     * - documentation: Passive provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PassiveProviderReservationInfoRef = null;
    /**
     * The TravelOrder
     * Meta information extracted from the WSDL
     * - documentation: To identify the appropriate travel sequence for Air/Car/Hotel/Rail segments/reservations/Journeys based on travel dates. This ordering is applicable across the UR not provider or traveler specific
     * - use: optional
     * @var int|null
     */
    protected ?int $TravelOrder = null;
    /**
     * The RouteReference
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $RouteReference = null;
    /**
     * The Operation
     * Meta information extracted from the WSDL
     * - documentation: "Type of exchange. Add - Add new Journey. Update - Modify existing Journey. Delete - Remove existing Journey"
     * - use: optional
     * @var string|null
     */
    protected ?string $Operation = null;
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
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateFees = null;
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
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @param \Travelport\UniversalRecord\StructType\RailSegment[] $railSegment
     * @param \Travelport\UniversalRecord\StructType\RailSegmentRef[] $railSegmentRef
     * @param \Travelport\UniversalRecord\StructType\JourneyRemark[] $journeyRemark
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * Get RailSegment value
     * @return \Travelport\UniversalRecord\StructType\RailSegment[]|null
     */
    public function getRailSegment(): ?array
    {
        return $this->RailSegment ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailSegment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailSegmentForArrayConstraintFromSetRailSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railJourneyRailSegmentItem) {
            // validation for constraint: itemType
            if (!$railJourneyRailSegmentItem instanceof \Travelport\UniversalRecord\StructType\RailSegment) {
                $invalidValues[] = is_object($railJourneyRailSegmentItem) ? get_class($railJourneyRailSegmentItem) : sprintf('%s(%s)', gettype($railJourneyRailSegmentItem), var_export($railJourneyRailSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailSegment property can only contain items of type \Travelport\UniversalRecord\StructType\RailSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailSegment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailSegmentForChoiceConstraintFromSetRailSegment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailSegmentRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailSegment can\'t be set as the property %s is already set. Only one property must be set among these properties: RailSegment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailSegment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSegment[] $railSegment
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setRailSegment(?array $railSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($railSegmentArrayErrorMessage = self::validateRailSegmentForArrayConstraintFromSetRailSegment($railSegment))) {
            throw new InvalidArgumentException($railSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailSegment, RailSegmentRef)
        if ('' !== ($railSegmentChoiceErrorMessage = self::validateRailSegmentForChoiceConstraintFromSetRailSegment($railSegment))) {
            throw new InvalidArgumentException($railSegmentChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railSegment) && count($railSegment) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railSegment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railSegment) && count($railSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railSegment)), __LINE__);
        }
        if (is_null($railSegment) || (is_array($railSegment) && empty($railSegment))) {
            unset($this->RailSegment);
        } else {
            $this->RailSegment = $railSegment;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToRailSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailSegment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToRailSegment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailSegmentRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailSegment can\'t be set as the property %s is already set. Only one property must be set among these properties: RailSegment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSegment $item
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function addToRailSegment(\Travelport\UniversalRecord\StructType\RailSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailSegment) {
            throw new InvalidArgumentException(sprintf('The RailSegment property can only contain items of type \Travelport\UniversalRecord\StructType\RailSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailSegment, RailSegmentRef)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToRailSegment($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailSegment) && count($this->RailSegment) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailSegment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailSegment) && count($this->RailSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailSegment)), __LINE__);
        }
        $this->RailSegment[] = $item;
        
        return $this;
    }
    /**
     * Get RailSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\RailSegmentRef[]|null
     */
    public function getRailSegmentRef(): ?array
    {
        return $this->RailSegmentRef ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailSegmentRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailSegmentRefForArrayConstraintFromSetRailSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railJourneyRailSegmentRefItem) {
            // validation for constraint: itemType
            if (!$railJourneyRailSegmentRefItem instanceof \Travelport\UniversalRecord\StructType\RailSegmentRef) {
                $invalidValues[] = is_object($railJourneyRailSegmentRefItem) ? get_class($railJourneyRailSegmentRefItem) : sprintf('%s(%s)', gettype($railJourneyRailSegmentRefItem), var_export($railJourneyRailSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailSegmentRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailSegmentRefForChoiceConstraintFromSetRailSegmentRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailSegment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailSegmentRef can\'t be set as the property %s is already set. Only one property must be set among these properties: RailSegmentRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailSegmentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSegmentRef[] $railSegmentRef
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setRailSegmentRef(?array $railSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($railSegmentRefArrayErrorMessage = self::validateRailSegmentRefForArrayConstraintFromSetRailSegmentRef($railSegmentRef))) {
            throw new InvalidArgumentException($railSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailSegment, RailSegmentRef)
        if ('' !== ($railSegmentRefChoiceErrorMessage = self::validateRailSegmentRefForChoiceConstraintFromSetRailSegmentRef($railSegmentRef))) {
            throw new InvalidArgumentException($railSegmentRefChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railSegmentRef) && count($railSegmentRef) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railSegmentRef)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railSegmentRef) && count($railSegmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railSegmentRef)), __LINE__);
        }
        if (is_null($railSegmentRef) || (is_array($railSegmentRef) && empty($railSegmentRef))) {
            unset($this->RailSegmentRef);
        } else {
            $this->RailSegmentRef = $railSegmentRef;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToRailSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailSegmentRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToRailSegmentRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailSegment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailSegmentRef can\'t be set as the property %s is already set. Only one property must be set among these properties: RailSegmentRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function addToRailSegmentRef(\Travelport\UniversalRecord\StructType\RailSegmentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailSegmentRef) {
            throw new InvalidArgumentException(sprintf('The RailSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailSegment, RailSegmentRef)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToRailSegmentRef($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailSegmentRef) && count($this->RailSegmentRef) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailSegmentRef)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailSegmentRef) && count($this->RailSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailSegmentRef)), __LINE__);
        }
        $this->RailSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get JourneyRemark value
     * @return \Travelport\UniversalRecord\StructType\JourneyRemark[]
     */
    public function getJourneyRemark(): ?array
    {
        return $this->JourneyRemark;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setJourneyRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJourneyRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJourneyRemarkForArrayConstraintFromSetJourneyRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railJourneyJourneyRemarkItem) {
            // validation for constraint: itemType
            if (!$railJourneyJourneyRemarkItem instanceof \Travelport\UniversalRecord\StructType\JourneyRemark) {
                $invalidValues[] = is_object($railJourneyJourneyRemarkItem) ? get_class($railJourneyJourneyRemarkItem) : sprintf('%s(%s)', gettype($railJourneyJourneyRemarkItem), var_export($railJourneyJourneyRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JourneyRemark property can only contain items of type \Travelport\UniversalRecord\StructType\JourneyRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set JourneyRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\JourneyRemark[] $journeyRemark
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setJourneyRemark(?array $journeyRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($journeyRemarkArrayErrorMessage = self::validateJourneyRemarkForArrayConstraintFromSetJourneyRemark($journeyRemark))) {
            throw new InvalidArgumentException($journeyRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($journeyRemark) && count($journeyRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($journeyRemark)), __LINE__);
        }
        $this->JourneyRemark = $journeyRemark;
        
        return $this;
    }
    /**
     * Add item to JourneyRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\JourneyRemark $item
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function addToJourneyRemark(\Travelport\UniversalRecord\StructType\JourneyRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\JourneyRemark) {
            throw new InvalidArgumentException(sprintf('The JourneyRemark property can only contain items of type \Travelport\UniversalRecord\StructType\JourneyRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->JourneyRemark) && count($this->JourneyRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->JourneyRemark)), __LINE__);
        }
        $this->JourneyRemark[] = $item;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\UniversalRecord\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHostToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHostToken method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHostTokenForArrayConstraintFromSetHostToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railJourneyHostTokenItem) {
            // validation for constraint: itemType
            if (!$railJourneyHostTokenItem instanceof \Travelport\UniversalRecord\StructType\HostToken) {
                $invalidValues[] = is_object($railJourneyHostTokenItem) ? get_class($railJourneyHostTokenItem) : sprintf('%s(%s)', gettype($railJourneyHostTokenItem), var_export($railJourneyHostTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HostToken property can only contain items of type \Travelport\UniversalRecord\StructType\HostToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setHostToken(?array $hostToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($hostTokenArrayErrorMessage = self::validateHostTokenForArrayConstraintFromSetHostToken($hostToken))) {
            throw new InvalidArgumentException($hostTokenArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hostToken) && count($hostToken) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hostToken)), __LINE__);
        }
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken $item
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function addToHostToken(\Travelport\UniversalRecord\StructType\HostToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HostToken) {
            throw new InvalidArgumentException(sprintf('The HostToken property can only contain items of type \Travelport\UniversalRecord\StructType\HostToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HostToken) && count($this->HostToken) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HostToken)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setRouteDescription(?string $routeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($routeDescription) && !is_string($routeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routeDescription, true), gettype($routeDescription)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($routeDescription) && mb_strlen((string) $routeDescription) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $routeDescription)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeJourneyDirection::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeJourneyDirection::getValidValues()
     * @throws InvalidArgumentException
     * @param string $journeyDirection
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setJourneyDirection(?string $journeyDirection = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeJourneyDirection::valueIsValid($journeyDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeJourneyDirection', is_array($journeyDirection) ? implode(', ', $journeyDirection) : var_export($journeyDirection, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeJourneyDirection::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setJourneyDuration(?int $journeyDuration = null): self
    {
        // validation for constraint: int
        if (!is_null($journeyDuration) && !(is_int($journeyDuration) || ctype_digit($journeyDuration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journeyDuration, true), gettype($journeyDuration)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($travelOrder) && !(is_int($travelOrder) || ctype_digit($travelOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelOrder, true), gettype($travelOrder)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setRouteReference(?string $routeReference = null): self
    {
        // validation for constraint: string
        if (!is_null($routeReference) && !is_string($routeReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routeReference, true), gettype($routeReference)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($routeReference) && mb_strlen((string) $routeReference) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $routeReference)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($routeReference) && mb_strlen((string) $routeReference) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $routeReference)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setOperation(?string $operation = null): self
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operation, true), gettype($operation)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($basePrice) && !is_string($basePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($basePrice, true), gettype($basePrice)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTotalPrice) && !is_string($approximateTotalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTotalPrice, true), gettype($approximateTotalPrice)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateBasePrice) && !is_string($approximateBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateBasePrice, true), gettype($approximateBasePrice)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setEquivalentBasePrice(?string $equivalentBasePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($equivalentBasePrice) && !is_string($equivalentBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equivalentBasePrice, true), gettype($equivalentBasePrice)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setTaxes(?string $taxes = null): self
    {
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setFees(?string $fees = null): self
    {
        // validation for constraint: string
        if (!is_null($fees) && !is_string($fees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fees, true), gettype($fees)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setServices(?string $services = null): self
    {
        // validation for constraint: string
        if (!is_null($services) && !is_string($services)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($services, true), gettype($services)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setApproximateTaxes(?string $approximateTaxes = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTaxes) && !is_string($approximateTaxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTaxes, true), gettype($approximateTaxes)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateFees) && !is_string($approximateFees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateFees, true), gettype($approximateFees)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
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
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailJourney
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
