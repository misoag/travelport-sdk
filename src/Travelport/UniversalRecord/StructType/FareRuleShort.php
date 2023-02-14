<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRuleShort StructType
 * Meta information extracted from the WSDL
 * - documentation: Short Text Fare Rule
 * @subpackage Structs
 */
class FareRuleShort extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Category;
    /**
     * The FareRuleNameValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FareRuleNameValue
     * @var \Travelport\UniversalRecord\StructType\FareRuleNameValue[]
     */
    protected ?array $FareRuleNameValue = null;
    /**
     * The TableNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TableNumber = null;
    /**
     * Constructor method for FareRuleShort
     * @uses FareRuleShort::setCategory()
     * @uses FareRuleShort::setFareRuleNameValue()
     * @uses FareRuleShort::setTableNumber()
     * @param int $category
     * @param \Travelport\UniversalRecord\StructType\FareRuleNameValue[] $fareRuleNameValue
     * @param string $tableNumber
     */
    public function __construct(int $category, ?array $fareRuleNameValue = null, ?string $tableNumber = null)
    {
        $this
            ->setCategory($category)
            ->setFareRuleNameValue($fareRuleNameValue)
            ->setTableNumber($tableNumber);
    }
    /**
     * Get Category value
     * @return int
     */
    public function getCategory(): int
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param int $category
     * @return \Travelport\UniversalRecord\StructType\FareRuleShort
     */
    public function setCategory(int $category): self
    {
        // validation for constraint: int
        if (!is_null($category) && !(is_int($category) || ctype_digit($category))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get FareRuleNameValue value
     * @return \Travelport\UniversalRecord\StructType\FareRuleNameValue[]
     */
    public function getFareRuleNameValue(): ?array
    {
        return $this->FareRuleNameValue;
    }
    /**
     * This method is responsible for validating the values passed to the setFareRuleNameValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRuleNameValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRuleNameValueForArrayConstraintsFromSetFareRuleNameValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRuleShortFareRuleNameValueItem) {
            // validation for constraint: itemType
            if (!$fareRuleShortFareRuleNameValueItem instanceof \Travelport\UniversalRecord\StructType\FareRuleNameValue) {
                $invalidValues[] = is_object($fareRuleShortFareRuleNameValueItem) ? get_class($fareRuleShortFareRuleNameValueItem) : sprintf('%s(%s)', gettype($fareRuleShortFareRuleNameValueItem), var_export($fareRuleShortFareRuleNameValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRuleNameValue property can only contain items of type \Travelport\UniversalRecord\StructType\FareRuleNameValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRuleNameValue value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRuleNameValue[] $fareRuleNameValue
     * @return \Travelport\UniversalRecord\StructType\FareRuleShort
     */
    public function setFareRuleNameValue(?array $fareRuleNameValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRuleNameValueArrayErrorMessage = self::validateFareRuleNameValueForArrayConstraintsFromSetFareRuleNameValue($fareRuleNameValue))) {
            throw new InvalidArgumentException($fareRuleNameValueArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareRuleNameValue) && count($fareRuleNameValue) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareRuleNameValue)), __LINE__);
        }
        $this->FareRuleNameValue = $fareRuleNameValue;
        
        return $this;
    }
    /**
     * Add item to FareRuleNameValue value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRuleNameValue $item
     * @return \Travelport\UniversalRecord\StructType\FareRuleShort
     */
    public function addToFareRuleNameValue(\Travelport\UniversalRecord\StructType\FareRuleNameValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FareRuleNameValue) {
            throw new InvalidArgumentException(sprintf('The FareRuleNameValue property can only contain items of type \Travelport\UniversalRecord\StructType\FareRuleNameValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareRuleNameValue) && count($this->FareRuleNameValue) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareRuleNameValue)), __LINE__);
        }
        $this->FareRuleNameValue[] = $item;
        
        return $this;
    }
    /**
     * Get TableNumber value
     * @return string|null
     */
    public function getTableNumber(): ?string
    {
        return $this->TableNumber;
    }
    /**
     * Set TableNumber value
     * @param string $tableNumber
     * @return \Travelport\UniversalRecord\StructType\FareRuleShort
     */
    public function setTableNumber(?string $tableNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($tableNumber) && !is_string($tableNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tableNumber, true), gettype($tableNumber)), __LINE__);
        }
        $this->TableNumber = $tableNumber;
        
        return $this;
    }
}
