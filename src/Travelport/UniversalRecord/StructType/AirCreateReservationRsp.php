<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirCreateReservationRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: 1G,1V,1P,ACH.
 * @subpackage Structs
 */
class AirCreateReservationRsp extends BaseRsp
{
    /**
     * The UniversalRecord
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UniversalRecord
     * @var \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    public ?\Travelport\UniversalRecord\StructType\UniversalRecord $UniversalRecord = null;
    /**
     * The AirSolutionChangedInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirSolutionChangedInfo
     * @var \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo[]
     */
    public ?array $AirSolutionChangedInfo = null;
    /**
     * The AirSegmentSellFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: air_v52_0:AirSegmentSellFailureInfo
     * @var \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $AirSegmentSellFailureInfo = null;
    /**
     * Constructor method for AirCreateReservationRsp
     * @uses AirCreateReservationRsp::setUniversalRecord()
     * @uses AirCreateReservationRsp::setAirSolutionChangedInfo()
     * @uses AirCreateReservationRsp::setAirSegmentSellFailureInfo()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @param \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo[] $airSolutionChangedInfo
     * @param \Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null, ?array $airSolutionChangedInfo = null, ?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo = null)
    {
        $this
            ->setUniversalRecord($universalRecord)
            ->setAirSolutionChangedInfo($airSolutionChangedInfo)
            ->setAirSegmentSellFailureInfo($airSegmentSellFailureInfo);
    }
    /**
     * Get UniversalRecord value
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    public function getUniversalRecord(): ?\Travelport\UniversalRecord\StructType\UniversalRecord
    {
        return $this->UniversalRecord;
    }
    /**
     * Set UniversalRecord value
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationRsp
     */
    public function setUniversalRecord(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null): self
    {
        $this->UniversalRecord = $universalRecord;
        
        return $this;
    }
    /**
     * Get AirSolutionChangedInfo value
     * @return \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo[]
     */
    public function getAirSolutionChangedInfo(): ?array
    {
        return $this->AirSolutionChangedInfo;
    }
    /**
     * Set AirSolutionChangedInfo value
     * @param \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo[] $airSolutionChangedInfo
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationRsp
     */
    public function setAirSolutionChangedInfo(?array $airSolutionChangedInfo = null): self
    {
        $this->AirSolutionChangedInfo = $airSolutionChangedInfo;
        
        return $this;
    }
    /**
     * Add item to AirSolutionChangedInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationRsp
     */
    public function addToAirSolutionChangedInfo(\Travelport\UniversalRecord\StructType\AirSolutionChangedInfo $item): self
    {
        $this->AirSolutionChangedInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationRsp
     */
    public function setAirSegmentSellFailureInfo(?\Travelport\UniversalRecord\StructType\AirSegmentSellFailureInfo $airSegmentSellFailureInfo = null): self
    {
        $this->AirSegmentSellFailureInfo = $airSegmentSellFailureInfo;
        
        return $this;
    }
}
