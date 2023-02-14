<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\TypeBaseAirSegment|null
     */
    protected ?\Travelport\Util\StructType\TypeBaseAirSegment $AirSegment = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - ref: common:CabinClass
     * @var \Travelport\Util\StructType\CabinClass|null
     */
    protected ?\Travelport\Util\StructType\CabinClass $CabinClass = null;
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
     * @param \Travelport\Util\StructType\TypeBaseAirSegment $airSegment
     * @param \Travelport\Util\StructType\CabinClass $cabinClass
     * @param string $fareBasisCode
     */
    public function __construct(?\Travelport\Util\StructType\TypeBaseAirSegment $airSegment = null, ?\Travelport\Util\StructType\CabinClass $cabinClass = null, ?string $fareBasisCode = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setCabinClass($cabinClass)
            ->setFareBasisCode($fareBasisCode);
    }
    /**
     * Get AirSegment value
     * @return \Travelport\Util\StructType\TypeBaseAirSegment|null
     */
    public function getAirSegment(): ?\Travelport\Util\StructType\TypeBaseAirSegment
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\Util\StructType\TypeBaseAirSegment $airSegment
     * @return \Travelport\Util\StructType\ExchangeAirSegment
     */
    public function setAirSegment(?\Travelport\Util\StructType\TypeBaseAirSegment $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return \Travelport\Util\StructType\CabinClass|null
     */
    public function getCabinClass(): ?\Travelport\Util\StructType\CabinClass
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\Util\StructType\CabinClass $cabinClass
     * @return \Travelport\Util\StructType\ExchangeAirSegment
     */
    public function setCabinClass(?\Travelport\Util\StructType\CabinClass $cabinClass = null): self
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
     * @return \Travelport\Util\StructType\ExchangeAirSegment
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
