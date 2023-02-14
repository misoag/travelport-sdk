<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $AirSegment = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - ref: common:CabinClass
     * @var \Travelport\UniversalRecord\StructType\CabinClass|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CabinClass $CabinClass = null;
    /**
     * The FareBasisCode
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code to be used for exchange of this segment.
     * - use: optional
     * @var string|null
     */
    protected ?string $FareBasisCode = null;
    /**
     * Constructor method for ExchangeAirSegment
     * @uses ExchangeAirSegment::setAirSegment()
     * @uses ExchangeAirSegment::setCabinClass()
     * @uses ExchangeAirSegment::setFareBasisCode()
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment
     * @param \Travelport\UniversalRecord\StructType\CabinClass $cabinClass
     * @param string $fareBasisCode
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment = null, ?\Travelport\UniversalRecord\StructType\CabinClass $cabinClass = null, ?string $fareBasisCode = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setCabinClass($cabinClass)
            ->setFareBasisCode($fareBasisCode);
    }
    /**
     * Get AirSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment|null
     */
    public function getAirSegment(): ?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment
     * @return \Travelport\UniversalRecord\StructType\ExchangeAirSegment
     */
    public function setAirSegment(?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return \Travelport\UniversalRecord\StructType\CabinClass|null
     */
    public function getCabinClass(): ?\Travelport\UniversalRecord\StructType\CabinClass
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\UniversalRecord\StructType\CabinClass $cabinClass
     * @return \Travelport\UniversalRecord\StructType\ExchangeAirSegment
     */
    public function setCabinClass(?\Travelport\UniversalRecord\StructType\CabinClass $cabinClass = null): self
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
     * @return \Travelport\UniversalRecord\StructType\ExchangeAirSegment
     */
    public function setFareBasisCode(?string $fareBasisCode = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBasisCode) && !is_string($fareBasisCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasisCode, true), gettype($fareBasisCode)), __LINE__);
        }
        $this->FareBasisCode = $fareBasisCode;
        
        return $this;
    }
}
