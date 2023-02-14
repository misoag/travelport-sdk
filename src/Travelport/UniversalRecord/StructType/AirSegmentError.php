<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $AirSegment = null;
    /**
     * The ErrorMessage
     * @var string|null
     */
    protected ?string $ErrorMessage = null;
    /**
     * Constructor method for AirSegmentError
     * @uses AirSegmentError::setAirSegment()
     * @uses AirSegmentError::setErrorMessage()
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment
     * @param string $errorMessage
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment = null, ?string $errorMessage = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setErrorMessage($errorMessage);
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentError
     */
    public function setAirSegment(?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment = null): self
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentError
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        
        return $this;
    }
}
