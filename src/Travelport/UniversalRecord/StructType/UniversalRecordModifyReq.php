<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected int $Version;
    /**
     * The ContinuityCheckOverride
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:ContinuityCheckOverride
     * @var \Travelport\UniversalRecord\StructType\ContinuityCheckOverride|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ContinuityCheckOverride $ContinuityCheckOverride = null;
    /**
     * The RecordIdentifier
     * Meta information extracted from the WSDL
     * - ref: RecordIdentifier
     * @var \Travelport\UniversalRecord\StructType\RecordIdentifier|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RecordIdentifier $RecordIdentifier = null;
    /**
     * The UniversalModifyCmd
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: UniversalModifyCmd
     * @var \Travelport\UniversalRecord\StructType\UniversalModifyCmd[]
     */
    protected ?array $UniversalModifyCmd = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The QueueNextModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: QueueNextModifiers
     * @var \Travelport\UniversalRecord\StructType\QueueNextModifiers|null
     */
    protected ?\Travelport\UniversalRecord\StructType\QueueNextModifiers $QueueNextModifiers = null;
    /**
     * The ReturnRecord
     * Meta information extracted from the WSDL
     * - documentation: Either the updated UniversalRecord or Universal Record for next on queue should be returned in the response
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnRecord = null;
    /**
     * The OverrideMCT
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $OverrideMCT = null;
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
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setUniversalModifyCmd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversalModifyCmd method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUniversalModifyCmdForArrayConstraintFromSetUniversalModifyCmd(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordModifyReqUniversalModifyCmdItem) {
            // validation for constraint: itemType
            if (!$universalRecordModifyReqUniversalModifyCmdItem instanceof \Travelport\UniversalRecord\StructType\UniversalModifyCmd) {
                $invalidValues[] = is_object($universalRecordModifyReqUniversalModifyCmdItem) ? get_class($universalRecordModifyReqUniversalModifyCmdItem) : sprintf('%s(%s)', gettype($universalRecordModifyReqUniversalModifyCmdItem), var_export($universalRecordModifyReqUniversalModifyCmdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UniversalModifyCmd property can only contain items of type \Travelport\UniversalRecord\StructType\UniversalModifyCmd, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UniversalModifyCmd value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyCmd[] $universalModifyCmd
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyReq
     */
    public function setUniversalModifyCmd(?array $universalModifyCmd = null): self
    {
        // validation for constraint: array
        if ('' !== ($universalModifyCmdArrayErrorMessage = self::validateUniversalModifyCmdForArrayConstraintFromSetUniversalModifyCmd($universalModifyCmd))) {
            throw new InvalidArgumentException($universalModifyCmdArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($universalModifyCmd) && count($universalModifyCmd) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($universalModifyCmd)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\UniversalModifyCmd) {
            throw new InvalidArgumentException(sprintf('The UniversalModifyCmd property can only contain items of type \Travelport\UniversalRecord\StructType\UniversalModifyCmd, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->UniversalModifyCmd) && count($this->UniversalModifyCmd) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->UniversalModifyCmd)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($returnRecord) && !is_bool($returnRecord)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnRecord, true), gettype($returnRecord)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($overrideMCT) && !is_bool($overrideMCT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideMCT, true), gettype($overrideMCT)), __LINE__);
        }
        $this->OverrideMCT = $overrideMCT;
        
        return $this;
    }
}
