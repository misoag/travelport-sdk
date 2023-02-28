<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripSearchRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response containing summary information of savedTrip
 * @subpackage Structs
 */
class SavedTripSearchRsp extends BaseRsp
{
    /**
     * The SavedTripSearchResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SavedTripSearchResult
     * @var \Travelport\UniversalRecord\StructType\SavedTripSearchResult[]
     */
    protected ?array $SavedTripSearchResult = null;
    /**
     * Constructor method for SavedTripSearchRsp
     * @uses SavedTripSearchRsp::setSavedTripSearchResult()
     * @param \Travelport\UniversalRecord\StructType\SavedTripSearchResult[] $savedTripSearchResult
     */
    public function __construct(?array $savedTripSearchResult = null)
    {
        $this
            ->setSavedTripSearchResult($savedTripSearchResult);
    }
    /**
     * Get SavedTripSearchResult value
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchResult[]
     */
    public function getSavedTripSearchResult(): ?array
    {
        return $this->SavedTripSearchResult;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSavedTripSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSavedTripSearchResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSavedTripSearchResultForArrayConstraintFromSetSavedTripSearchResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripSearchRspSavedTripSearchResultItem) {
            // validation for constraint: itemType
            if (!$savedTripSearchRspSavedTripSearchResultItem instanceof \Travelport\UniversalRecord\StructType\SavedTripSearchResult) {
                $invalidValues[] = is_object($savedTripSearchRspSavedTripSearchResultItem) ? get_class($savedTripSearchRspSavedTripSearchResultItem) : sprintf('%s(%s)', gettype($savedTripSearchRspSavedTripSearchResultItem), var_export($savedTripSearchRspSavedTripSearchResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SavedTripSearchResult property can only contain items of type \Travelport\UniversalRecord\StructType\SavedTripSearchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SavedTripSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SavedTripSearchResult[] $savedTripSearchResult
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchRsp
     */
    public function setSavedTripSearchResult(?array $savedTripSearchResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($savedTripSearchResultArrayErrorMessage = self::validateSavedTripSearchResultForArrayConstraintFromSetSavedTripSearchResult($savedTripSearchResult))) {
            throw new InvalidArgumentException($savedTripSearchResultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($savedTripSearchResult) && count($savedTripSearchResult) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($savedTripSearchResult)), __LINE__);
        }
        $this->SavedTripSearchResult = $savedTripSearchResult;
        
        return $this;
    }
    /**
     * Add item to SavedTripSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SavedTripSearchResult $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchRsp
     */
    public function addToSavedTripSearchResult(\Travelport\UniversalRecord\StructType\SavedTripSearchResult $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SavedTripSearchResult) {
            throw new InvalidArgumentException(sprintf('The SavedTripSearchResult property can only contain items of type \Travelport\UniversalRecord\StructType\SavedTripSearchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SavedTripSearchResult) && count($this->SavedTripSearchResult) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SavedTripSearchResult)), __LINE__);
        }
        $this->SavedTripSearchResult[] = $item;
        
        return $this;
    }
}
