<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoPricingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Auto Pricing based on Segment and Traveler Association.
 * @subpackage Structs
 */
class AutoPricingInfo extends AbstractStructBase
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
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\Util\StructType\AirSegmentRef[]
     */
    protected ?array $AirSegmentRef = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\Util\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The AirPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirPricingModifiers
     * @var \Travelport\Util\StructType\AirPricingModifiers|null
     */
    protected ?\Travelport\Util\StructType\AirPricingModifiers $AirPricingModifiers = null;
    /**
     * The AirSegmentPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: AirSegmentPricingModifiers
     * @var \Travelport\Util\StructType\AirSegmentPricingModifiers[]
     */
    protected ?array $AirSegmentPricingModifiers = null;
    /**
     * The PricingType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 25
     * - use: optional
     * @var string|null
     */
    protected ?string $PricingType = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier for this journey | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PlatingCarrier = null;
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
     * Constructor method for AutoPricingInfo
     * @uses AutoPricingInfo::setKey()
     * @uses AutoPricingInfo::setAirSegmentRef()
     * @uses AutoPricingInfo::setBookingTravelerRef()
     * @uses AutoPricingInfo::setAirPricingModifiers()
     * @uses AutoPricingInfo::setAirSegmentPricingModifiers()
     * @uses AutoPricingInfo::setPricingType()
     * @uses AutoPricingInfo::setPlatingCarrier()
     * @uses AutoPricingInfo::setElStat()
     * @uses AutoPricingInfo::setKeyOverride()
     * @param string $key
     * @param \Travelport\Util\StructType\AirSegmentRef[] $airSegmentRef
     * @param \Travelport\Util\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers
     * @param \Travelport\Util\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @param string $pricingType
     * @param string $platingCarrier
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, ?array $airSegmentRef = null, ?array $bookingTravelerRef = null, ?\Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers = null, ?array $airSegmentPricingModifiers = null, ?string $pricingType = null, ?string $platingCarrier = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setAirSegmentRef($airSegmentRef)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setAirPricingModifiers($airPricingModifiers)
            ->setAirSegmentPricingModifiers($airSegmentPricingModifiers)
            ->setPricingType($pricingType)
            ->setPlatingCarrier($platingCarrier)
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
     * @return \Travelport\Util\StructType\AutoPricingInfo
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
     * Get AirSegmentRef value
     * @return \Travelport\Util\StructType\AirSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentRefForArrayConstraintFromSetAirSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $autoPricingInfoAirSegmentRefItem) {
            // validation for constraint: itemType
            if (!$autoPricingInfoAirSegmentRefItem instanceof \Travelport\Util\StructType\AirSegmentRef) {
                $invalidValues[] = is_object($autoPricingInfoAirSegmentRefItem) ? get_class($autoPricingInfoAirSegmentRefItem) : sprintf('%s(%s)', gettype($autoPricingInfoAirSegmentRefItem), var_export($autoPricingInfoAirSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentRef property can only contain items of type \Travelport\Util\StructType\AirSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\Util\StructType\AutoPricingInfo
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentRefArrayErrorMessage = self::validateAirSegmentRefForArrayConstraintFromSetAirSegmentRef($airSegmentRef))) {
            throw new InvalidArgumentException($airSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($airSegmentRef) && count($airSegmentRef) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($airSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSegmentRef $item
     * @return \Travelport\Util\StructType\AutoPricingInfo
     */
    public function addToAirSegmentRef(\Travelport\Util\StructType\AirSegmentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirSegmentRef) {
            throw new InvalidArgumentException(sprintf('The AirSegmentRef property can only contain items of type \Travelport\Util\StructType\AirSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->AirSegmentRef) && count($this->AirSegmentRef) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->AirSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Util\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $autoPricingInfoBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$autoPricingInfoBookingTravelerRefItem instanceof \Travelport\Util\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($autoPricingInfoBookingTravelerRefItem) ? get_class($autoPricingInfoBookingTravelerRefItem) : sprintf('%s(%s)', gettype($autoPricingInfoBookingTravelerRefItem), var_export($autoPricingInfoBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \Travelport\Util\StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\Util\StructType\AutoPricingInfo
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingTravelerRef $item
     * @return \Travelport\Util\StructType\AutoPricingInfo
     */
    public function addToBookingTravelerRef(\Travelport\Util\StructType\BookingTravelerRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \Travelport\Util\StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingModifiers value
     * @return \Travelport\Util\StructType\AirPricingModifiers|null
     */
    public function getAirPricingModifiers(): ?\Travelport\Util\StructType\AirPricingModifiers
    {
        return $this->AirPricingModifiers;
    }
    /**
     * Set AirPricingModifiers value
     * @param \Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers
     * @return \Travelport\Util\StructType\AutoPricingInfo
     */
    public function setAirPricingModifiers(?\Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers = null): self
    {
        $this->AirPricingModifiers = $airPricingModifiers;
        
        return $this;
    }
    /**
     * Get AirSegmentPricingModifiers value
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers[]
     */
    public function getAirSegmentPricingModifiers(): ?array
    {
        return $this->AirSegmentPricingModifiers;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirSegmentPricingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentPricingModifiers method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentPricingModifiersForArrayConstraintFromSetAirSegmentPricingModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $autoPricingInfoAirSegmentPricingModifiersItem) {
            // validation for constraint: itemType
            if (!$autoPricingInfoAirSegmentPricingModifiersItem instanceof \Travelport\Util\StructType\AirSegmentPricingModifiers) {
                $invalidValues[] = is_object($autoPricingInfoAirSegmentPricingModifiersItem) ? get_class($autoPricingInfoAirSegmentPricingModifiersItem) : sprintf('%s(%s)', gettype($autoPricingInfoAirSegmentPricingModifiersItem), var_export($autoPricingInfoAirSegmentPricingModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentPricingModifiers property can only contain items of type \Travelport\Util\StructType\AirSegmentPricingModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @return \Travelport\Util\StructType\AutoPricingInfo
     */
    public function setAirSegmentPricingModifiers(?array $airSegmentPricingModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentPricingModifiersArrayErrorMessage = self::validateAirSegmentPricingModifiersForArrayConstraintFromSetAirSegmentPricingModifiers($airSegmentPricingModifiers))) {
            throw new InvalidArgumentException($airSegmentPricingModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($airSegmentPricingModifiers) && count($airSegmentPricingModifiers) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($airSegmentPricingModifiers)), __LINE__);
        }
        $this->AirSegmentPricingModifiers = $airSegmentPricingModifiers;
        
        return $this;
    }
    /**
     * Add item to AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSegmentPricingModifiers $item
     * @return \Travelport\Util\StructType\AutoPricingInfo
     */
    public function addToAirSegmentPricingModifiers(\Travelport\Util\StructType\AirSegmentPricingModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirSegmentPricingModifiers) {
            throw new InvalidArgumentException(sprintf('The AirSegmentPricingModifiers property can only contain items of type \Travelport\Util\StructType\AirSegmentPricingModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->AirSegmentPricingModifiers) && count($this->AirSegmentPricingModifiers) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->AirSegmentPricingModifiers)), __LINE__);
        }
        $this->AirSegmentPricingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get PricingType value
     * @return string|null
     */
    public function getPricingType(): ?string
    {
        return $this->PricingType;
    }
    /**
     * Set PricingType value
     * @param string $pricingType
     * @return \Travelport\Util\StructType\AutoPricingInfo
     */
    public function setPricingType(?string $pricingType = null): self
    {
        // validation for constraint: string
        if (!is_null($pricingType) && !is_string($pricingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pricingType, true), gettype($pricingType)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($pricingType) && mb_strlen((string) $pricingType) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $pricingType)), __LINE__);
        }
        $this->PricingType = $pricingType;
        
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * @return string|null
     */
    public function getPlatingCarrier(): ?string
    {
        return $this->PlatingCarrier;
    }
    /**
     * Set PlatingCarrier value
     * @param string $platingCarrier
     * @return \Travelport\Util\StructType\AutoPricingInfo
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($platingCarrier, true), gettype($platingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($platingCarrier) && mb_strlen((string) $platingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $platingCarrier)), __LINE__);
        }
        $this->PlatingCarrier = $platingCarrier;
        
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
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\AutoPricingInfo
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
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
     * @return \Travelport\Util\StructType\AutoPricingInfo
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
