<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentData StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of AirsegmentData
 * @subpackage Structs
 */
class AirSegmentData extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public ?array $AirSegmentRef = null;
    /**
     * The BaggageAllowance
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BaggageAllowance
     * @var \Travelport\UniversalRecord\StructType\BaggageAllowance[]
     */
    public ?array $BaggageAllowance = null;
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: Brand
     * @var \Travelport\UniversalRecord\StructType\Brand[]
     */
    public ?array $Brand = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: Specifies Cabin class for a group of class of services. Cabin class is not identified if it is not present.
     * - use: optional
     * @var string|null
     */
    public ?string $CabinClass = null;
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
     * Constructor method for AirSegmentData
     * @uses AirSegmentData::setAirSegmentRef()
     * @uses AirSegmentData::setBaggageAllowance()
     * @uses AirSegmentData::setBrand()
     * @uses AirSegmentData::setCabinClass()
     * @uses AirSegmentData::setClassOfService()
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowance[] $baggageAllowance
     * @param \Travelport\UniversalRecord\StructType\Brand[] $brand
     * @param string $cabinClass
     * @param string $classOfService
     */
    public function __construct(?array $airSegmentRef = null, ?array $baggageAllowance = null, ?array $brand = null, ?string $cabinClass = null, ?string $classOfService = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setBaggageAllowance($baggageAllowance)
            ->setBrand($brand)
            ->setCabinClass($cabinClass)
            ->setClassOfService($classOfService);
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\AirSegmentRef $item): self
    {
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowance[]
     */
    public function getBaggageAllowance(): ?array
    {
        return $this->BaggageAllowance;
    }
    /**
     * Set BaggageAllowance value
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowance[] $baggageAllowance
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function setBaggageAllowance(?array $baggageAllowance = null): self
    {
        $this->BaggageAllowance = $baggageAllowance;
        
        return $this;
    }
    /**
     * Add item to BaggageAllowance value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowance $item
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function addToBaggageAllowance(\Travelport\UniversalRecord\StructType\BaggageAllowance $item): self
    {
        $this->BaggageAllowance[] = $item;
        
        return $this;
    }
    /**
     * Get Brand value
     * @return \Travelport\UniversalRecord\StructType\Brand[]
     */
    public function getBrand(): ?array
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param \Travelport\UniversalRecord\StructType\Brand[] $brand
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function setBrand(?array $brand = null): self
    {
        $this->Brand = $brand;
        
        return $this;
    }
    /**
     * Add item to Brand value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Brand $item
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function addToBrand(\Travelport\UniversalRecord\StructType\Brand $item): self
    {
        $this->Brand[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
}
