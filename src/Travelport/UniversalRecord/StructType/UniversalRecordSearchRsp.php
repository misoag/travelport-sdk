<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordSearchRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response containing summary information for reservations under a Universal Record
 * @subpackage Structs
 */
class UniversalRecordSearchRsp extends BaseRsp
{
    /**
     * The MoreResults
     * Meta information extracted from the WSDL
     * - documentation: Used to browse beyond the maximum number of results specified with the MaxResults parameter. Acts as an offset to skip the specified number of PNRs from the begining of the result set.
     * - base: xs:boolean
     * - use: required
     * @var bool
     */
    public bool $MoreResults;
    /**
     * The UniversalRecordSearchResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: UniversalRecordSearchResult
     * @var \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult[]
     */
    public ?array $UniversalRecordSearchResult = null;
    /**
     * Constructor method for UniversalRecordSearchRsp
     * @uses UniversalRecordSearchRsp::setMoreResults()
     * @uses UniversalRecordSearchRsp::setUniversalRecordSearchResult()
     * @param bool $moreResults
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult[] $universalRecordSearchResult
     */
    public function __construct(bool $moreResults, ?array $universalRecordSearchResult = null)
    {
        $this
            ->setMoreResults($moreResults)
            ->setUniversalRecordSearchResult($universalRecordSearchResult);
    }
    /**
     * Get MoreResults value
     * @return bool
     */
    public function getMoreResults(): bool
    {
        return $this->MoreResults;
    }
    /**
     * Set MoreResults value
     * @param bool $moreResults
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchRsp
     */
    public function setMoreResults(bool $moreResults): self
    {
        $this->MoreResults = $moreResults;
        
        return $this;
    }
    /**
     * Get UniversalRecordSearchResult value
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult[]
     */
    public function getUniversalRecordSearchResult(): ?array
    {
        return $this->UniversalRecordSearchResult;
    }
    /**
     * Set UniversalRecordSearchResult value
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult[] $universalRecordSearchResult
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchRsp
     */
    public function setUniversalRecordSearchResult(?array $universalRecordSearchResult = null): self
    {
        $this->UniversalRecordSearchResult = $universalRecordSearchResult;
        
        return $this;
    }
    /**
     * Add item to UniversalRecordSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchRsp
     */
    public function addToUniversalRecordSearchResult(\Travelport\UniversalRecord\StructType\UniversalRecordSearchResult $item): self
    {
        $this->UniversalRecordSearchResult[] = $item;
        
        return $this;
    }
}
