<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentError StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to return error messages corresponding to AirSegment
 * @subpackage Structs
 */
class AirSegmentError extends AbstractStructBase
{
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - ref: AirSegment
     * @var \Travelport\Air\StructType\TypeBaseAirSegment|null
     */
    public ?\Travelport\Air\StructType\TypeBaseAirSegment $AirSegment = null;
    /**
     * The ErrorMessage
     * @var string|null
     */
    public ?string $ErrorMessage = null;
    /**
     * Constructor method for AirSegmentError
     * @uses AirSegmentError::setAirSegment()
     * @uses AirSegmentError::setErrorMessage()
     * @param \Travelport\Air\StructType\TypeBaseAirSegment $airSegment
     * @param string $errorMessage
     */
    public function __construct(?\Travelport\Air\StructType\TypeBaseAirSegment $airSegment = null, ?string $errorMessage = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setErrorMessage($errorMessage);
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
     * @return \Travelport\Air\StructType\AirSegmentError
     */
    public function setAirSegment(?\Travelport\Air\StructType\TypeBaseAirSegment $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \Travelport\Air\StructType\AirSegmentError
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        $this->ErrorMessage = $errorMessage;
        
        return $this;
    }
}
