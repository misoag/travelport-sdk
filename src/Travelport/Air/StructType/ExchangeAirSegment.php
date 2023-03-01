<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangeAirSegment StructType
 * Meta information extracted from the WSDL
 * - documentation: A container to define segment and cabin class in order to process an exchange
 * @subpackage Structs
 */
class ExchangeAirSegment extends AbstractStructBase
{
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - ref: AirSegment
     * @var \Travelport\Air\StructType\TypeBaseAirSegment|null
     */
    public ?\Travelport\Air\StructType\TypeBaseAirSegment $AirSegment = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - ref: common:CabinClass
     * @var \Travelport\Air\StructType\CabinClass|null
     */
    public ?\Travelport\Air\StructType\CabinClass $CabinClass = null;
    /**
     * The FareBasisCode
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code to be used for exchange of this segment.
     * - use: optional
     * @var string|null
     */
    public ?string $FareBasisCode = null;
    /**
     * Constructor method for ExchangeAirSegment
     * @uses ExchangeAirSegment::setAirSegment()
     * @uses ExchangeAirSegment::setCabinClass()
     * @uses ExchangeAirSegment::setFareBasisCode()
     * @param \Travelport\Air\StructType\TypeBaseAirSegment $airSegment
     * @param \Travelport\Air\StructType\CabinClass $cabinClass
     * @param string $fareBasisCode
     */
    public function __construct(?\Travelport\Air\StructType\TypeBaseAirSegment $airSegment = null, ?\Travelport\Air\StructType\CabinClass $cabinClass = null, ?string $fareBasisCode = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setCabinClass($cabinClass)
            ->setFareBasisCode($fareBasisCode);
    }
    /**
     * Get AirSegment value
     * @return \Travelport\Air\StructType\TypeBaseAirSegment|null
     */
    public function getAirSegment(): ?\Travelport\Air\StructType\TypeBaseAirSegment
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\Air\StructType\TypeBaseAirSegment $airSegment
     * @return \Travelport\Air\StructType\ExchangeAirSegment
     */
    public function setAirSegment(?\Travelport\Air\StructType\TypeBaseAirSegment $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return \Travelport\Air\StructType\CabinClass|null
     */
    public function getCabinClass(): ?\Travelport\Air\StructType\CabinClass
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\Air\StructType\CabinClass $cabinClass
     * @return \Travelport\Air\StructType\ExchangeAirSegment
     */
    public function setCabinClass(?\Travelport\Air\StructType\CabinClass $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get FareBasisCode value
     * @return string|null
     */
    public function getFareBasisCode(): ?string
    {
        return $this->FareBasisCode;
    }
    /**
     * Set FareBasisCode value
     * @param string $fareBasisCode
     * @return \Travelport\Air\StructType\ExchangeAirSegment
     */
    public function setFareBasisCode(?string $fareBasisCode = null): self
    {
        $this->FareBasisCode = $fareBasisCode;
        
        return $this;
    }
}
