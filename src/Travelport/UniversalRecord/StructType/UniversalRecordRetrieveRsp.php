<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordRetrieveRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Return a Universal Record
 * @subpackage Structs
 */
class UniversalRecordRetrieveRsp extends BaseRsp
{
    /**
     * The UniversalRecord
     * Meta information extracted from the WSDL
     * - ref: UniversalRecord
     * @var \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    protected ?\Travelport\UniversalRecord\StructType\UniversalRecord $UniversalRecord = null;
    /**
     * The Updated
     * Meta information extracted from the WSDL
     * - documentation: Returns true if the underlying reservation has changed since it was last accessed
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Updated = null;
    /**
     * Constructor method for UniversalRecordRetrieveRsp
     * @uses UniversalRecordRetrieveRsp::setUniversalRecord()
     * @uses UniversalRecordRetrieveRsp::setUpdated()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @param bool $updated
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null, ?bool $updated = false)
    {
        $this
            ->setUniversalRecord($universalRecord)
            ->setUpdated($updated);
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveRsp
     */
    public function setUniversalRecord(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null): self
    {
        $this->UniversalRecord = $universalRecord;
        
        return $this;
    }
    /**
     * Get Updated value
     * @return bool|null
     */
    public function getUpdated(): ?bool
    {
        return $this->Updated;
    }
    /**
     * Set Updated value
     * @param bool $updated
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveRsp
     */
    public function setUpdated(?bool $updated = false): self
    {
        // validation for constraint: boolean
        if (!is_null($updated) && !is_bool($updated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updated, true), gettype($updated)), __LINE__);
        }
        $this->Updated = $updated;
        
        return $this;
    }
}
