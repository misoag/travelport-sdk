<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordModifyRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Return a Universal Record
 * @subpackage Structs
 */
class UniversalRecordModifyRsp extends BaseRsp
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
     * The UniversalModifyFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UniversalModifyFailureInfo
     * @var \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo $UniversalModifyFailureInfo = null;
    /**
     * The QueueSessionToken
     * Meta information extracted from the WSDL
     * - documentation: Queue Session Token to hold session token for multiple queue
     * - use: optional
     * @var string|null
     */
    public ?string $QueueSessionToken = null;
    /**
     * Constructor method for UniversalRecordModifyRsp
     * @uses UniversalRecordModifyRsp::setUniversalRecord()
     * @uses UniversalRecordModifyRsp::setAirSolutionChangedInfo()
     * @uses UniversalRecordModifyRsp::setUniversalModifyFailureInfo()
     * @uses UniversalRecordModifyRsp::setQueueSessionToken()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @param \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo[] $airSolutionChangedInfo
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo $universalModifyFailureInfo
     * @param string $queueSessionToken
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null, ?array $airSolutionChangedInfo = null, ?\Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo $universalModifyFailureInfo = null, ?string $queueSessionToken = null)
    {
        $this
            ->setUniversalRecord($universalRecord)
            ->setAirSolutionChangedInfo($airSolutionChangedInfo)
            ->setUniversalModifyFailureInfo($universalModifyFailureInfo)
            ->setQueueSessionToken($queueSessionToken);
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp
     */
    public function addToAirSolutionChangedInfo(\Travelport\UniversalRecord\StructType\AirSolutionChangedInfo $item): self
    {
        $this->AirSolutionChangedInfo[] = $item;
        
        return $this;
    }
    /**
     * Get UniversalModifyFailureInfo value
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo|null
     */
    public function getUniversalModifyFailureInfo(): ?\Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo
    {
        return $this->UniversalModifyFailureInfo;
    }
    /**
     * Set UniversalModifyFailureInfo value
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo $universalModifyFailureInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp
     */
    public function setUniversalModifyFailureInfo(?\Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo $universalModifyFailureInfo = null): self
    {
        $this->UniversalModifyFailureInfo = $universalModifyFailureInfo;
        
        return $this;
    }
    /**
     * Get QueueSessionToken value
     * @return string|null
     */
    public function getQueueSessionToken(): ?string
    {
        return $this->QueueSessionToken;
    }
    /**
     * Set QueueSessionToken value
     * @param string $queueSessionToken
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp
     */
    public function setQueueSessionToken(?string $queueSessionToken = null): self
    {
        $this->QueueSessionToken = $queueSessionToken;
        
        return $this;
    }
}
