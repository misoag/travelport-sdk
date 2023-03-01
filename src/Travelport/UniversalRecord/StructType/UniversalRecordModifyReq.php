<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordModifyReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Update the universal record
 * @subpackage Structs
 */
class UniversalRecordModifyReq extends BaseReq
{
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * - use: required
     * @var int
     */
    public int $Version;
    /**
     * The ContinuityCheckOverride
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:ContinuityCheckOverride
     * @var \Travelport\UniversalRecord\StructType\ContinuityCheckOverride|null
     */
    public ?\Travelport\UniversalRecord\StructType\ContinuityCheckOverride $ContinuityCheckOverride = null;
    /**
     * The RecordIdentifier
     * Meta information extracted from the WSDL
     * - ref: RecordIdentifier
     * @var \Travelport\UniversalRecord\StructType\RecordIdentifier|null
     */
    public ?\Travelport\UniversalRecord\StructType\RecordIdentifier $RecordIdentifier = null;
    /**
     * The UniversalModifyCmd
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: UniversalModifyCmd
     * @var \Travelport\UniversalRecord\StructType\UniversalModifyCmd[]
     */
    public ?array $UniversalModifyCmd = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The QueueNextModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: QueueNextModifiers
     * @var \Travelport\UniversalRecord\StructType\QueueNextModifiers|null
     */
    public ?\Travelport\UniversalRecord\StructType\QueueNextModifiers $QueueNextModifiers = null;
    /**
     * The ReturnRecord
     * Meta information extracted from the WSDL
     * - documentation: Either the updated UniversalRecord or Universal Record for next on queue should be returned in the response
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnRecord = null;
    /**
     * The OverrideMCT
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $OverrideMCT = null;
    /**
     * Constructor method for UniversalRecordModifyReq
     * @uses UniversalRecordModifyReq::setVersion()
     * @uses UniversalRecordModifyReq::setContinuityCheckOverride()
     * @uses UniversalRecordModifyReq::setRecordIdentifier()
     * @uses UniversalRecordModifyReq::setUniversalModifyCmd()
     * @uses UniversalRecordModifyReq::setFileFinishingInfo()
     * @uses UniversalRecordModifyReq::setQueueNextModifiers()
     * @uses UniversalRecordModifyReq::setReturnRecord()
     * @uses UniversalRecordModifyReq::setOverrideMCT()
     * @param int $version
     * @param \Travelport\UniversalRecord\StructType\ContinuityCheckOverride $continuityCheckOverride
     * @param \Travelport\UniversalRecord\StructType\RecordIdentifier $recordIdentifier
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCmd[] $universalModifyCmd
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @param \Travelport\UniversalRecord\StructType\QueueNextModifiers $queueNextModifiers
     * @param bool $returnRecord
     * @param bool $overrideMCT
     */
    public function __construct(int $version, ?\Travelport\UniversalRecord\StructType\ContinuityCheckOverride $continuityCheckOverride = null, ?\Travelport\UniversalRecord\StructType\RecordIdentifier $recordIdentifier = null, ?array $universalModifyCmd = null, ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null, ?\Travelport\UniversalRecord\StructType\QueueNextModifiers $queueNextModifiers = null, ?bool $returnRecord = false, ?bool $overrideMCT = false)
    {
        $this
            ->setVersion($version)
            ->setContinuityCheckOverride($continuityCheckOverride)
            ->setRecordIdentifier($recordIdentifier)
            ->setUniversalModifyCmd($universalModifyCmd)
            ->setFileFinishingInfo($fileFinishingInfo)
            ->setQueueNextModifiers($queueNextModifiers)
            ->setReturnRecord($returnRecord)
            ->setOverrideMCT($overrideMCT);
    }
    /**
     * Get Version value
     * @return int
     */
    public function getVersion(): int
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq
     */
    public function setVersion(int $version): self
    {
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get ContinuityCheckOverride value
     * @return \Travelport\UniversalRecord\StructType\ContinuityCheckOverride|null
     */
    public function getContinuityCheckOverride(): ?\Travelport\UniversalRecord\StructType\ContinuityCheckOverride
    {
        return $this->ContinuityCheckOverride;
    }
    /**
     * Set ContinuityCheckOverride value
     * @param \Travelport\UniversalRecord\StructType\ContinuityCheckOverride $continuityCheckOverride
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq
     */
    public function setContinuityCheckOverride(?\Travelport\UniversalRecord\StructType\ContinuityCheckOverride $continuityCheckOverride = null): self
    {
        $this->ContinuityCheckOverride = $continuityCheckOverride;
        
        return $this;
    }
    /**
     * Get RecordIdentifier value
     * @return \Travelport\UniversalRecord\StructType\RecordIdentifier|null
     */
    public function getRecordIdentifier(): ?\Travelport\UniversalRecord\StructType\RecordIdentifier
    {
        return $this->RecordIdentifier;
    }
    /**
     * Set RecordIdentifier value
     * @param \Travelport\UniversalRecord\StructType\RecordIdentifier $recordIdentifier
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq
     */
    public function setRecordIdentifier(?\Travelport\UniversalRecord\StructType\RecordIdentifier $recordIdentifier = null): self
    {
        $this->RecordIdentifier = $recordIdentifier;
        
        return $this;
    }
    /**
     * Get UniversalModifyCmd value
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCmd[]
     */
    public function getUniversalModifyCmd(): ?array
    {
        return $this->UniversalModifyCmd;
    }
    /**
     * Set UniversalModifyCmd value
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCmd[] $universalModifyCmd
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq
     */
    public function setUniversalModifyCmd(?array $universalModifyCmd = null): self
    {
        $this->UniversalModifyCmd = $universalModifyCmd;
        
        return $this;
    }
    /**
     * Add item to UniversalModifyCmd value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCmd $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq
     */
    public function addToUniversalModifyCmd(\Travelport\UniversalRecord\StructType\UniversalModifyCmd $item): self
    {
        $this->UniversalModifyCmd[] = $item;
        
        return $this;
    }
    /**
     * Get FileFinishingInfo value
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public function getFileFinishingInfo(): ?\Travelport\UniversalRecord\StructType\FileFinishingInfo
    {
        return $this->FileFinishingInfo;
    }
    /**
     * Set FileFinishingInfo value
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq
     */
    public function setFileFinishingInfo(?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null): self
    {
        $this->FileFinishingInfo = $fileFinishingInfo;
        
        return $this;
    }
    /**
     * Get QueueNextModifiers value
     * @return \Travelport\UniversalRecord\StructType\QueueNextModifiers|null
     */
    public function getQueueNextModifiers(): ?\Travelport\UniversalRecord\StructType\QueueNextModifiers
    {
        return $this->QueueNextModifiers;
    }
    /**
     * Set QueueNextModifiers value
     * @param \Travelport\UniversalRecord\StructType\QueueNextModifiers $queueNextModifiers
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq
     */
    public function setQueueNextModifiers(?\Travelport\UniversalRecord\StructType\QueueNextModifiers $queueNextModifiers = null): self
    {
        $this->QueueNextModifiers = $queueNextModifiers;
        
        return $this;
    }
    /**
     * Get ReturnRecord value
     * @return bool|null
     */
    public function getReturnRecord(): ?bool
    {
        return $this->ReturnRecord;
    }
    /**
     * Set ReturnRecord value
     * @param bool $returnRecord
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq
     */
    public function setReturnRecord(?bool $returnRecord = false): self
    {
        $this->ReturnRecord = $returnRecord;
        
        return $this;
    }
    /**
     * Get OverrideMCT value
     * @return bool|null
     */
    public function getOverrideMCT(): ?bool
    {
        return $this->OverrideMCT;
    }
    /**
     * Set OverrideMCT value
     * @param bool $overrideMCT
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq
     */
    public function setOverrideMCT(?bool $overrideMCT = false): self
    {
        $this->OverrideMCT = $overrideMCT;
        
        return $this;
    }
}
