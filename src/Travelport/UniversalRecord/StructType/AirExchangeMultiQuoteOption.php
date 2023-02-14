<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeMultiQuoteOption StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of AirExchangeMultiQuoteOptions
 * @subpackage Structs
 */
class AirExchangeMultiQuoteOption extends AbstractStructBase
{
    /**
     * The AirSegmentData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentData
     * @var \Travelport\UniversalRecord\StructType\AirSegmentData[]
     */
    protected ?array $AirSegmentData = null;
    /**
     * The AirExchangeBundleTotal
     * Meta information extracted from the WSDL
     * - maxOccurs: 01
     * - minOccurs: 0
     * - ref: AirExchangeBundleTotal
     * @var \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $AirExchangeBundleTotal = null;
    /**
     * The AirExchangeBundleList
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirExchangeBundleList
     * @var \Travelport\UniversalRecord\StructType\AirExchangeBundleList[]
     */
    protected ?array $AirExchangeBundleList = null;
    /**
     * Constructor method for AirExchangeMultiQuoteOption
     * @uses AirExchangeMultiQuoteOption::setAirSegmentData()
     * @uses AirExchangeMultiQuoteOption::setAirExchangeBundleTotal()
     * @uses AirExchangeMultiQuoteOption::setAirExchangeBundleList()
     * @param \Travelport\UniversalRecord\StructType\AirSegmentData[] $airSegmentData
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleList[] $airExchangeBundleList
     */
    public function __construct(?array $airSegmentData = null, ?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null, ?array $airExchangeBundleList = null)
    {
        $this
            ->setAirSegmentData($airSegmentData)
            ->setAirExchangeBundleTotal($airExchangeBundleTotal)
            ->setAirExchangeBundleList($airExchangeBundleList);
    }
    /**
     * Get AirSegmentData value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData[]
     */
    public function getAirSegmentData(): ?array
    {
        return $this->AirSegmentData;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegmentData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentDataForArrayConstraintsFromSetAirSegmentData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeMultiQuoteOptionAirSegmentDataItem) {
            // validation for constraint: itemType
            if (!$airExchangeMultiQuoteOptionAirSegmentDataItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentData) {
                $invalidValues[] = is_object($airExchangeMultiQuoteOptionAirSegmentDataItem) ? get_class($airExchangeMultiQuoteOptionAirSegmentDataItem) : sprintf('%s(%s)', gettype($airExchangeMultiQuoteOptionAirSegmentDataItem), var_export($airExchangeMultiQuoteOptionAirSegmentDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentData property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentData[] $airSegmentData
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption
     */
    public function setAirSegmentData(?array $airSegmentData = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentDataArrayErrorMessage = self::validateAirSegmentDataForArrayConstraintsFromSetAirSegmentData($airSegmentData))) {
            throw new InvalidArgumentException($airSegmentDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegmentData) && count($airSegmentData) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegmentData)), __LINE__);
        }
        $this->AirSegmentData = $airSegmentData;
        
        return $this;
    }
    /**
     * Add item to AirSegmentData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentData $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption
     */
    public function addToAirSegmentData(\Travelport\UniversalRecord\StructType\AirSegmentData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirSegmentData) {
            throw new InvalidArgumentException(sprintf('The AirSegmentData property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentData) && count($this->AirSegmentData) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentData)), __LINE__);
        }
        $this->AirSegmentData[] = $item;
        
        return $this;
    }
    /**
     * Get AirExchangeBundleTotal value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal|null
     */
    public function getAirExchangeBundleTotal(): ?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal
    {
        return $this->AirExchangeBundleTotal;
    }
    /**
     * Set AirExchangeBundleTotal value
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption
     */
    public function setAirExchangeBundleTotal(?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null): self
    {
        $this->AirExchangeBundleTotal = $airExchangeBundleTotal;
        
        return $this;
    }
    /**
     * Get AirExchangeBundleList value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleList[]
     */
    public function getAirExchangeBundleList(): ?array
    {
        return $this->AirExchangeBundleList;
    }
    /**
     * This method is responsible for validating the values passed to the setAirExchangeBundleList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirExchangeBundleList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirExchangeBundleListForArrayConstraintsFromSetAirExchangeBundleList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeMultiQuoteOptionAirExchangeBundleListItem) {
            // validation for constraint: itemType
            if (!$airExchangeMultiQuoteOptionAirExchangeBundleListItem instanceof \Travelport\UniversalRecord\StructType\AirExchangeBundleList) {
                $invalidValues[] = is_object($airExchangeMultiQuoteOptionAirExchangeBundleListItem) ? get_class($airExchangeMultiQuoteOptionAirExchangeBundleListItem) : sprintf('%s(%s)', gettype($airExchangeMultiQuoteOptionAirExchangeBundleListItem), var_export($airExchangeMultiQuoteOptionAirExchangeBundleListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirExchangeBundleList property can only contain items of type \Travelport\UniversalRecord\StructType\AirExchangeBundleList, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirExchangeBundleList value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleList[] $airExchangeBundleList
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption
     */
    public function setAirExchangeBundleList(?array $airExchangeBundleList = null): self
    {
        // validation for constraint: array
        if ('' !== ($airExchangeBundleListArrayErrorMessage = self::validateAirExchangeBundleListForArrayConstraintsFromSetAirExchangeBundleList($airExchangeBundleList))) {
            throw new InvalidArgumentException($airExchangeBundleListArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airExchangeBundleList) && count($airExchangeBundleList) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airExchangeBundleList)), __LINE__);
        }
        $this->AirExchangeBundleList = $airExchangeBundleList;
        
        return $this;
    }
    /**
     * Add item to AirExchangeBundleList value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleList $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption
     */
    public function addToAirExchangeBundleList(\Travelport\UniversalRecord\StructType\AirExchangeBundleList $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirExchangeBundleList) {
            throw new InvalidArgumentException(sprintf('The AirExchangeBundleList property can only contain items of type \Travelport\UniversalRecord\StructType\AirExchangeBundleList, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirExchangeBundleList) && count($this->AirExchangeBundleList) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirExchangeBundleList)), __LINE__);
        }
        $this->AirExchangeBundleList[] = $item;
        
        return $this;
    }
}
