<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalModifyErrorInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to return modify command errors.
 * @subpackage Structs
 */
class UniversalModifyErrorInfo extends TypeErrorInfo
{
    /**
     * The UniversalModifyCommandError
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: UniversalModifyCommandError
     * @var \Travelport\UniversalRecord\StructType\UniversalModifyCommandError[]
     */
    public ?array $UniversalModifyCommandError = null;
    /**
     * The AirSegmentError
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegmentError
     * @var \Travelport\UniversalRecord\StructType\AirSegmentError[]
     */
    public ?array $AirSegmentError = null;
    /**
     * Constructor method for UniversalModifyErrorInfo
     * @uses UniversalModifyErrorInfo::setUniversalModifyCommandError()
     * @uses UniversalModifyErrorInfo::setAirSegmentError()
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCommandError[] $universalModifyCommandError
     * @param \Travelport\UniversalRecord\StructType\AirSegmentError[] $airSegmentError
     */
    public function __construct(?array $universalModifyCommandError = null, ?array $airSegmentError = null)
    {
        $this
            ->setUniversalModifyCommandError($universalModifyCommandError)
            ->setAirSegmentError($airSegmentError);
    }
    /**
     * Get UniversalModifyCommandError value
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCommandError[]
     */
    public function getUniversalModifyCommandError(): ?array
    {
        return $this->UniversalModifyCommandError;
    }
    /**
     * Set UniversalModifyCommandError value
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCommandError[] $universalModifyCommandError
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyErrorInfo
     */
    public function setUniversalModifyCommandError(?array $universalModifyCommandError = null): self
    {
        $this->UniversalModifyCommandError = $universalModifyCommandError;
        
        return $this;
    }
    /**
     * Add item to UniversalModifyCommandError value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCommandError $item
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyErrorInfo
     */
    public function addToUniversalModifyCommandError(\Travelport\UniversalRecord\StructType\UniversalModifyCommandError $item): self
    {
        $this->UniversalModifyCommandError[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegmentError value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentError[]
     */
    public function getAirSegmentError(): ?array
    {
        return $this->AirSegmentError;
    }
    /**
     * Set AirSegmentError value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentError[] $airSegmentError
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyErrorInfo
     */
    public function setAirSegmentError(?array $airSegmentError = null): self
    {
        $this->AirSegmentError = $airSegmentError;
        
        return $this;
    }
    /**
     * Add item to AirSegmentError value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentError $item
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyErrorInfo
     */
    public function addToAirSegmentError(\Travelport\UniversalRecord\StructType\AirSegmentError $item): self
    {
        $this->AirSegmentError[] = $item;
        
        return $this;
    }
}
