<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordHistorySearchRsp StructType
 * @subpackage Structs
 */
class UniversalRecordHistorySearchRsp extends BaseRsp
{
    /**
     * The UniversalRecordHistorySearchResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: UniversalRecordHistorySearchResult
     * @var \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult[]
     */
    public ?array $UniversalRecordHistorySearchResult = null;
    /**
     * The LastResult
     * Meta information extracted from the WSDL
     * - documentation: Indicate when the search query reached the last result.
     * @var bool|null
     */
    public ?bool $LastResult = null;
    /**
     * Constructor method for UniversalRecordHistorySearchRsp
     * @uses UniversalRecordHistorySearchRsp::setUniversalRecordHistorySearchResult()
     * @uses UniversalRecordHistorySearchRsp::setLastResult()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult[] $universalRecordHistorySearchResult
     * @param bool $lastResult
     */
    public function __construct(?array $universalRecordHistorySearchResult = null, ?bool $lastResult = null)
    {
        $this
            ->setUniversalRecordHistorySearchResult($universalRecordHistorySearchResult)
            ->setLastResult($lastResult);
    }
    /**
     * Get UniversalRecordHistorySearchResult value
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult[]
     */
    public function getUniversalRecordHistorySearchResult(): ?array
    {
        return $this->UniversalRecordHistorySearchResult;
    }
    /**
     * Set UniversalRecordHistorySearchResult value
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult[] $universalRecordHistorySearchResult
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchRsp
     */
    public function setUniversalRecordHistorySearchResult(?array $universalRecordHistorySearchResult = null): self
    {
        $this->UniversalRecordHistorySearchResult = $universalRecordHistorySearchResult;
        
        return $this;
    }
    /**
     * Add item to UniversalRecordHistorySearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchRsp
     */
    public function addToUniversalRecordHistorySearchResult(\Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult $item): self
    {
        $this->UniversalRecordHistorySearchResult[] = $item;
        
        return $this;
    }
    /**
     * Get LastResult value
     * @return bool|null
     */
    public function getLastResult(): ?bool
    {
        return $this->LastResult;
    }
    /**
     * Set LastResult value
     * @param bool $lastResult
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchRsp
     */
    public function setLastResult(?bool $lastResult = null): self
    {
        $this->LastResult = $lastResult;
        
        return $this;
    }
}
