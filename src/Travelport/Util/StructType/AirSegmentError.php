<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\TypeBaseAirSegment|null
     */
    protected ?\Travelport\Util\StructType\TypeBaseAirSegment $AirSegment = null;
    /**
     * The ErrorMessage
     * @var string|null
     */
    protected ?string $ErrorMessage = null;
    /**
     * Constructor method for AirSegmentError
     * @uses AirSegmentError::setAirSegment()
     * @uses AirSegmentError::setErrorMessage()
     * @param \Travelport\Util\StructType\TypeBaseAirSegment $airSegment
     * @param string $errorMessage
     */
    public function __construct(?\Travelport\Util\StructType\TypeBaseAirSegment $airSegment = null, ?string $errorMessage = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setErrorMessage($errorMessage);
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
     * @return \Travelport\Util\StructType\AirSegmentError
     */
    public function setAirSegment(?\Travelport\Util\StructType\TypeBaseAirSegment $airSegment = null): self
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
     * @return \Travelport\Util\StructType\AirSegmentError
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
