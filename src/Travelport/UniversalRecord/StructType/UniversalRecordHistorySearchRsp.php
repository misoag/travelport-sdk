<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?array $UniversalRecordHistorySearchResult = null;
    /**
     * The LastResult
     * Meta information extracted from the WSDL
     * - documentation: Indicate when the search query reached the last result.
     * @var bool|null
     */
    protected ?bool $LastResult = null;
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
     * This method is responsible for validating the value(s) passed to the setUniversalRecordHistorySearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversalRecordHistorySearchResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUniversalRecordHistorySearchResultForArrayConstraintFromSetUniversalRecordHistorySearchResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordHistorySearchRspUniversalRecordHistorySearchResultItem) {
            // validation for constraint: itemType
            if (!$universalRecordHistorySearchRspUniversalRecordHistorySearchResultItem instanceof \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult) {
                $invalidValues[] = is_object($universalRecordHistorySearchRspUniversalRecordHistorySearchResultItem) ? get_class($universalRecordHistorySearchRspUniversalRecordHistorySearchResultItem) : sprintf('%s(%s)', gettype($universalRecordHistorySearchRspUniversalRecordHistorySearchResultItem), var_export($universalRecordHistorySearchRspUniversalRecordHistorySearchResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UniversalRecordHistorySearchResult property can only contain items of type \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UniversalRecordHistorySearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult[] $universalRecordHistorySearchResult
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchRsp
     */
    public function setUniversalRecordHistorySearchResult(?array $universalRecordHistorySearchResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($universalRecordHistorySearchResultArrayErrorMessage = self::validateUniversalRecordHistorySearchResultForArrayConstraintFromSetUniversalRecordHistorySearchResult($universalRecordHistorySearchResult))) {
            throw new InvalidArgumentException($universalRecordHistorySearchResultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($universalRecordHistorySearchResult) && count($universalRecordHistorySearchResult) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($universalRecordHistorySearchResult)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult) {
            throw new InvalidArgumentException(sprintf('The UniversalRecordHistorySearchResult property can only contain items of type \Travelport\UniversalRecord\StructType\UniversalRecordHistorySearchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->UniversalRecordHistorySearchResult) && count($this->UniversalRecordHistorySearchResult) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->UniversalRecordHistorySearchResult)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($lastResult) && !is_bool($lastResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lastResult, true), gettype($lastResult)), __LINE__);
        }
        $this->LastResult = $lastResult;
        
        return $this;
    }
}
