<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailPricingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Use references on rail availability response, and the full fare on the reservation. | Per traveler type pricing breakdown.
 * @subpackage Structs
 */
class RailPricingInfo extends AbstractStructBase
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
     * The RailFare
     * Meta information extracted from the WSDL
     * - choice: RailFare | RailFareRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFare
     * @var \Travelport\UniversalRecord\StructType\RailFare[]
     */
    protected ?array $RailFare = null;
    /**
     * The RailFareRef
     * Meta information extracted from the WSDL
     * - choice: RailFare | RailFareRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFareRef
     * @var \Travelport\UniversalRecord\StructType\RailFareRef[]
     */
    protected ?array $RailFareRef = null;
    /**
     * The RailBookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailBookingInfo
     * @var \Travelport\UniversalRecord\StructType\RailBookingInfo[]
     */
    protected ?array $RailBookingInfo = null;
    /**
     * The PassengerType
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypePassengerType[]
     */
    protected ?array $PassengerType = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The ExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount to pay to cover the exchange of the fare (includes penalties). | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ExchangeAmount = null;
    /**
     * The ApproximateExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateExchangeAmount = null;
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
     * Constructor method for RailPricingInfo
     * @uses RailPricingInfo::setKey()
     * @uses RailPricingInfo::setRailFare()
     * @uses RailPricingInfo::setRailFareRef()
     * @uses RailPricingInfo::setRailBookingInfo()
     * @uses RailPricingInfo::setPassengerType()
     * @uses RailPricingInfo::setBookingTravelerRef()
     * @uses RailPricingInfo::setExchangeAmount()
     * @uses RailPricingInfo::setApproximateExchangeAmount()
     * @uses RailPricingInfo::setTotalPrice()
     * @uses RailPricingInfo::setBasePrice()
     * @uses RailPricingInfo::setApproximateTotalPrice()
     * @uses RailPricingInfo::setApproximateBasePrice()
     * @uses RailPricingInfo::setEquivalentBasePrice()
     * @uses RailPricingInfo::setTaxes()
     * @uses RailPricingInfo::setFees()
     * @uses RailPricingInfo::setServices()
     * @uses RailPricingInfo::setApproximateTaxes()
     * @uses RailPricingInfo::setApproximateFees()
     * @uses RailPricingInfo::setElStat()
     * @uses RailPricingInfo::setKeyOverride()
     * @param string $key
     * @param \Travelport\UniversalRecord\StructType\RailFare[] $railFare
     * @param \Travelport\UniversalRecord\StructType\RailFareRef[] $railFareRef
     * @param \Travelport\UniversalRecord\StructType\RailBookingInfo[] $railBookingInfo
     * @param \Travelport\UniversalRecord\StructType\TypePassengerType[] $passengerType
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param string $exchangeAmount
     * @param string $approximateExchangeAmount
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
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, ?array $railFare = null, ?array $railFareRef = null, ?array $railBookingInfo = null, ?array $passengerType = null, ?array $bookingTravelerRef = null, ?string $exchangeAmount = null, ?string $approximateExchangeAmount = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setRailFare($railFare)
            ->setRailFareRef($railFareRef)
            ->setRailBookingInfo($railBookingInfo)
            ->setPassengerType($passengerType)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setExchangeAmount($exchangeAmount)
            ->setApproximateExchangeAmount($approximateExchangeAmount)
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * Get RailFare value
     * @return \Travelport\UniversalRecord\StructType\RailFare[]
     */
    public function getRailFare(): ?array
    {
        return isset($this->RailFare) ? $this->RailFare : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRailFare method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFare method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailFareForArrayConstraintsFromSetRailFare(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railPricingInfoRailFareItem) {
            // validation for constraint: itemType
            if (!$railPricingInfoRailFareItem instanceof \Travelport\UniversalRecord\StructType\RailFare) {
                $invalidValues[] = is_object($railPricingInfoRailFareItem) ? get_class($railPricingInfoRailFareItem) : sprintf('%s(%s)', gettype($railPricingInfoRailFareItem), var_export($railPricingInfoRailFareItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailFare property can only contain items of type \Travelport\UniversalRecord\StructType\RailFare, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setRailFare method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFare method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailFareForChoiceConstraintsFromSetRailFare($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailFareRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailFare can\'t be set as the property %s is already set. Only one property must be set among these properties: RailFare, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailFare value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFare[] $railFare
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setRailFare(?array $railFare = null): self
    {
        // validation for constraint: array
        if ('' !== ($railFareArrayErrorMessage = self::validateRailFareForArrayConstraintsFromSetRailFare($railFare))) {
            throw new InvalidArgumentException($railFareArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailFare, RailFareRef)
        if ('' !== ($railFareChoiceErrorMessage = self::validateRailFareForChoiceConstraintsFromSetRailFare($railFare))) {
            throw new InvalidArgumentException($railFareChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railFare) && count($railFare) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railFare)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railFare) && count($railFare) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railFare)), __LINE__);
        }
        if (is_null($railFare) || (is_array($railFare) && empty($railFare))) {
            unset($this->RailFare);
        } else {
            $this->RailFare = $railFare;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToRailFare method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailFare method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToRailFare($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailFareRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailFare can\'t be set as the property %s is already set. Only one property must be set among these properties: RailFare, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailFare value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFare $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function addToRailFare(\Travelport\UniversalRecord\StructType\RailFare $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailFare) {
            throw new InvalidArgumentException(sprintf('The RailFare property can only contain items of type \Travelport\UniversalRecord\StructType\RailFare, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailFare, RailFareRef)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToRailFare($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailFare) && count($this->RailFare) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailFare)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailFare) && count($this->RailFare) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailFare)), __LINE__);
        }
        $this->RailFare[] = $item;
        
        return $this;
    }
    /**
     * Get RailFareRef value
     * @return \Travelport\UniversalRecord\StructType\RailFareRef[]
     */
    public function getRailFareRef(): ?array
    {
        return isset($this->RailFareRef) ? $this->RailFareRef : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRailFareRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailFareRefForArrayConstraintsFromSetRailFareRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railPricingInfoRailFareRefItem) {
            // validation for constraint: itemType
            if (!$railPricingInfoRailFareRefItem instanceof \Travelport\UniversalRecord\StructType\RailFareRef) {
                $invalidValues[] = is_object($railPricingInfoRailFareRefItem) ? get_class($railPricingInfoRailFareRefItem) : sprintf('%s(%s)', gettype($railPricingInfoRailFareRefItem), var_export($railPricingInfoRailFareRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailFareRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setRailFareRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailFareRefForChoiceConstraintsFromSetRailFareRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailFare',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailFareRef can\'t be set as the property %s is already set. Only one property must be set among these properties: RailFareRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailFareRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareRef[] $railFareRef
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setRailFareRef(?array $railFareRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($railFareRefArrayErrorMessage = self::validateRailFareRefForArrayConstraintsFromSetRailFareRef($railFareRef))) {
            throw new InvalidArgumentException($railFareRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailFare, RailFareRef)
        if ('' !== ($railFareRefChoiceErrorMessage = self::validateRailFareRefForChoiceConstraintsFromSetRailFareRef($railFareRef))) {
            throw new InvalidArgumentException($railFareRefChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railFareRef) && count($railFareRef) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railFareRef)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railFareRef) && count($railFareRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railFareRef)), __LINE__);
        }
        if (is_null($railFareRef) || (is_array($railFareRef) && empty($railFareRef))) {
            unset($this->RailFareRef);
        } else {
            $this->RailFareRef = $railFareRef;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToRailFareRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailFareRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToRailFareRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailFare',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailFareRef can\'t be set as the property %s is already set. Only one property must be set among these properties: RailFareRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailFareRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareRef $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function addToRailFareRef(\Travelport\UniversalRecord\StructType\RailFareRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailFareRef) {
            throw new InvalidArgumentException(sprintf('The RailFareRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailFare, RailFareRef)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToRailFareRef($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailFareRef) && count($this->RailFareRef) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailFareRef)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailFareRef) && count($this->RailFareRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailFareRef)), __LINE__);
        }
        $this->RailFareRef[] = $item;
        
        return $this;
    }
    /**
     * Get RailBookingInfo value
     * @return \Travelport\UniversalRecord\StructType\RailBookingInfo[]
     */
    public function getRailBookingInfo(): ?array
    {
        return $this->RailBookingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setRailBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailBookingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailBookingInfoForArrayConstraintsFromSetRailBookingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railPricingInfoRailBookingInfoItem) {
            // validation for constraint: itemType
            if (!$railPricingInfoRailBookingInfoItem instanceof \Travelport\UniversalRecord\StructType\RailBookingInfo) {
                $invalidValues[] = is_object($railPricingInfoRailBookingInfoItem) ? get_class($railPricingInfoRailBookingInfoItem) : sprintf('%s(%s)', gettype($railPricingInfoRailBookingInfoItem), var_export($railPricingInfoRailBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailBookingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailBookingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailBookingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailBookingInfo[] $railBookingInfo
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setRailBookingInfo(?array $railBookingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($railBookingInfoArrayErrorMessage = self::validateRailBookingInfoForArrayConstraintsFromSetRailBookingInfo($railBookingInfo))) {
            throw new InvalidArgumentException($railBookingInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railBookingInfo) && count($railBookingInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railBookingInfo)), __LINE__);
        }
        $this->RailBookingInfo = $railBookingInfo;
        
        return $this;
    }
    /**
     * Add item to RailBookingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailBookingInfo $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function addToRailBookingInfo(\Travelport\UniversalRecord\StructType\RailBookingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailBookingInfo) {
            throw new InvalidArgumentException(sprintf('The RailBookingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailBookingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailBookingInfo) && count($this->RailBookingInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailBookingInfo)), __LINE__);
        }
        $this->RailBookingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get PassengerType value
     * @return \Travelport\UniversalRecord\StructType\TypePassengerType[]
     */
    public function getPassengerType(): ?array
    {
        return $this->PassengerType;
    }
    /**
     * This method is responsible for validating the values passed to the setPassengerType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerTypeForArrayConstraintsFromSetPassengerType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railPricingInfoPassengerTypeItem) {
            // validation for constraint: itemType
            if (!$railPricingInfoPassengerTypeItem instanceof \Travelport\UniversalRecord\StructType\TypePassengerType) {
                $invalidValues[] = is_object($railPricingInfoPassengerTypeItem) ? get_class($railPricingInfoPassengerTypeItem) : sprintf('%s(%s)', gettype($railPricingInfoPassengerTypeItem), var_export($railPricingInfoPassengerTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerType property can only contain items of type \Travelport\UniversalRecord\StructType\TypePassengerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassengerType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypePassengerType[] $passengerType
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setPassengerType(?array $passengerType = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerTypeArrayErrorMessage = self::validatePassengerTypeForArrayConstraintsFromSetPassengerType($passengerType))) {
            throw new InvalidArgumentException($passengerTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passengerType) && count($passengerType) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passengerType)), __LINE__);
        }
        $this->PassengerType = $passengerType;
        
        return $this;
    }
    /**
     * Add item to PassengerType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypePassengerType $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function addToPassengerType(\Travelport\UniversalRecord\StructType\TypePassengerType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypePassengerType) {
            throw new InvalidArgumentException(sprintf('The PassengerType property can only contain items of type \Travelport\UniversalRecord\StructType\TypePassengerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassengerType) && count($this->PassengerType) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassengerType)), __LINE__);
        }
        $this->PassengerType[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railPricingInfoBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$railPricingInfoBookingTravelerRefItem instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($railPricingInfoBookingTravelerRefItem) ? get_class($railPricingInfoBookingTravelerRefItem) : sprintf('%s(%s)', gettype($railPricingInfoBookingTravelerRefItem), var_export($railPricingInfoBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get ExchangeAmount value
     * @return string|null
     */
    public function getExchangeAmount(): ?string
    {
        return $this->ExchangeAmount;
    }
    /**
     * Set ExchangeAmount value
     * @param string $exchangeAmount
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setExchangeAmount(?string $exchangeAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($exchangeAmount) && !is_string($exchangeAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exchangeAmount, true), gettype($exchangeAmount)), __LINE__);
        }
        $this->ExchangeAmount = $exchangeAmount;
        
        return $this;
    }
    /**
     * Get ApproximateExchangeAmount value
     * @return string|null
     */
    public function getApproximateExchangeAmount(): ?string
    {
        return $this->ApproximateExchangeAmount;
    }
    /**
     * Set ApproximateExchangeAmount value
     * @param string $approximateExchangeAmount
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setApproximateExchangeAmount(?string $approximateExchangeAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateExchangeAmount) && !is_string($approximateExchangeAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateExchangeAmount, true), gettype($approximateExchangeAmount)), __LINE__);
        }
        $this->ApproximateExchangeAmount = $approximateExchangeAmount;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
