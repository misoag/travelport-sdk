<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalModifyFailureInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to return air segment sell failures.
 * @subpackage Structs
 */
class UniversalModifyFailureInfo extends AbstractStructBase
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
     * The AirSegmentSellFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegmentSellFailureInfo
     * @var \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $AirSegmentSellFailureInfo = null;
    /**
     * Constructor method for UniversalModifyFailureInfo
     * @uses UniversalModifyFailureInfo::setUniversalModifyCommandError()
     * @uses UniversalModifyFailureInfo::setAirSegmentSellFailureInfo()
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCommandError[] $universalModifyCommandError
     * @param \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo
     */
    public function __construct(?array $universalModifyCommandError = null, ?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo = null)
    {
        $this
            ->setUniversalModifyCommandError($universalModifyCommandError)
            ->setAirSegmentSellFailureInfo($airSegmentSellFailureInfo);
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
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo
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
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo
     */
    public function addToUniversalModifyCommandError(\Travelport\UniversalRecord\StructType\UniversalModifyCommandError $item): self
    {
        $this->UniversalModifyCommandError[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegmentSellFailureInfo value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo|null
     */
    public function getAirSegmentSellFailureInfo(): ?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo
    {
        return $this->AirSegmentSellFailureInfo;
    }
    /**
     * Set AirSegmentSellFailureInfo value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo
     */
    public function setAirSegmentSellFailureInfo(?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo = null): self
    {
        $this->AirSegmentSellFailureInfo = $airSegmentSellFailureInfo;
        
        return $this;
    }
}
