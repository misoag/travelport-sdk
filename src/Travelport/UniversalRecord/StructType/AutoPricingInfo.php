<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Key;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public ?array $AirSegmentRef = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The AirPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirPricingModifiers
     * @var \Travelport\UniversalRecord\StructType\AirPricingModifiers|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirPricingModifiers $AirPricingModifiers = null;
    /**
     * The AirSegmentPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - ref: AirSegmentPricingModifiers
     * @var \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[]
     */
    public ?array $AirSegmentPricingModifiers = null;
    /**
     * The PricingType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 25
     * - use: optional
     * @var string|null
     */
    public ?string $PricingType = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier for this journey | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PlatingCarrier = null;
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
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifiers $airPricingModifiers
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @param string $pricingType
     * @param string $platingCarrier
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, ?array $airSegmentRef = null, ?array $bookingTravelerRef = null, ?\Travelport\UniversalRecord\StructType\AirPricingModifiers $airPricingModifiers = null, ?array $airSegmentPricingModifiers = null, ?string $pricingType = null, ?string $platingCarrier = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\AirSegmentRef $item): self
    {
        $this->AirSegmentRef[] = $item;
        
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
     * Set BookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingModifiers value
     * @return \Travelport\UniversalRecord\StructType\AirPricingModifiers|null
     */
    public function getAirPricingModifiers(): ?\Travelport\UniversalRecord\StructType\AirPricingModifiers
    {
        return $this->AirPricingModifiers;
    }
    /**
     * Set AirPricingModifiers value
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifiers $airPricingModifiers
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function setAirPricingModifiers(?\Travelport\UniversalRecord\StructType\AirPricingModifiers $airPricingModifiers = null): self
    {
        $this->AirPricingModifiers = $airPricingModifiers;
        
        return $this;
    }
    /**
     * Get AirSegmentPricingModifiers value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[]
     */
    public function getAirSegmentPricingModifiers(): ?array
    {
        return $this->AirSegmentPricingModifiers;
    }
    /**
     * Set AirSegmentPricingModifiers value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function setAirSegmentPricingModifiers(?array $airSegmentPricingModifiers = null): self
    {
        $this->AirSegmentPricingModifiers = $airSegmentPricingModifiers;
        
        return $this;
    }
    /**
     * Add item to AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers $item
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function addToAirSegmentPricingModifiers(\Travelport\UniversalRecord\StructType\AirSegmentPricingModifiers $item): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function setPricingType(?string $pricingType = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
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
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\AutoPricingInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
