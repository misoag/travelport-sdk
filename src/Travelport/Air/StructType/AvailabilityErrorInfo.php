<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityErrorInfo StructType
 * @subpackage Structs
 */
class AvailabilityErrorInfo extends TypeErrorInfo
{
    /**
     * The AirSegmentError
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirSegmentError
     * @var \Travelport\Air\StructType\AirSegmentError[]
     */
    public ?array $AirSegmentError = null;
    /**
     * Constructor method for AvailabilityErrorInfo
     * @uses AvailabilityErrorInfo::setAirSegmentError()
     * @param \Travelport\Air\StructType\AirSegmentError[] $airSegmentError
     */
    public function __construct(?array $airSegmentError = null)
    {
        $this
            ->setAirSegmentError($airSegmentError);
    }
    /**
     * Get AirSegmentError value
     * @return \Travelport\Air\StructType\AirSegmentError[]
     */
    public function getAirSegmentError(): ?array
    {
        return $this->AirSegmentError;
    }
    /**
     * Set AirSegmentError value
     * @param \Travelport\Air\StructType\AirSegmentError[] $airSegmentError
     * @return \Travelport\Air\StructType\AvailabilityErrorInfo
     */
    public function setAirSegmentError(?array $airSegmentError = null): self
    {
        $this->AirSegmentError = $airSegmentError;
        
        return $this;
    }
    /**
     * Add item to AirSegmentError value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirSegmentError $item
     * @return \Travelport\Air\StructType\AvailabilityErrorInfo
     */
    public function addToAirSegmentError(\Travelport\Air\StructType\AirSegmentError $item): self
    {
        $this->AirSegmentError[] = $item;
        
        return $this;
    }
}
