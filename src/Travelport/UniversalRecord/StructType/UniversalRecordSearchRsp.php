<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected bool $MoreResults;
    /**
     * The UniversalRecordSearchResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: UniversalRecordSearchResult
     * @var \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult[]
     */
    protected ?array $UniversalRecordSearchResult = null;
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
        // validation for constraint: boolean
        if (!is_null($moreResults) && !is_bool($moreResults)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreResults, true), gettype($moreResults)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setUniversalRecordSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversalRecordSearchResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUniversalRecordSearchResultForArrayConstraintFromSetUniversalRecordSearchResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordSearchRspUniversalRecordSearchResultItem) {
            // validation for constraint: itemType
            if (!$universalRecordSearchRspUniversalRecordSearchResultItem instanceof \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult) {
                $invalidValues[] = is_object($universalRecordSearchRspUniversalRecordSearchResultItem) ? get_class($universalRecordSearchRspUniversalRecordSearchResultItem) : sprintf('%s(%s)', gettype($universalRecordSearchRspUniversalRecordSearchResultItem), var_export($universalRecordSearchRspUniversalRecordSearchResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UniversalRecordSearchResult property can only contain items of type \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UniversalRecordSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult[] $universalRecordSearchResult
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchRsp
     */
    public function setUniversalRecordSearchResult(?array $universalRecordSearchResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($universalRecordSearchResultArrayErrorMessage = self::validateUniversalRecordSearchResultForArrayConstraintFromSetUniversalRecordSearchResult($universalRecordSearchResult))) {
            throw new InvalidArgumentException($universalRecordSearchResultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($universalRecordSearchResult) && count($universalRecordSearchResult) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($universalRecordSearchResult)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult) {
            throw new InvalidArgumentException(sprintf('The UniversalRecordSearchResult property can only contain items of type \Travelport\UniversalRecord\StructType\UniversalRecordSearchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->UniversalRecordSearchResult) && count($this->UniversalRecordSearchResult) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->UniversalRecordSearchResult)), __LINE__);
        }
        $this->UniversalRecordSearchResult[] = $item;
        
        return $this;
    }
}
