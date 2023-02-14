<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRuleCategoryTypes StructType
 * @subpackage Structs
 */
class FareRuleCategoryTypes extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Value;
    /**
     * The CategoryDetails
     * Meta information extracted from the WSDL
     * - documentation: To indicate details of which category is displayed
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ValueDetails[]
     */
    protected ?array $CategoryDetails = null;
    /**
     * The VariableCategoryDetails
     * Meta information extracted from the WSDL
     * - documentation: If the specified category of Structured Fare Rules is of variable lenght
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VariableCategoryType[]
     */
    protected ?array $VariableCategoryDetails = null;
    /**
     * Constructor method for FareRuleCategoryTypes
     * @uses FareRuleCategoryTypes::setValue()
     * @uses FareRuleCategoryTypes::setCategoryDetails()
     * @uses FareRuleCategoryTypes::setVariableCategoryDetails()
     * @param string $value
     * @param \Travelport\UniversalRecord\StructType\ValueDetails[] $categoryDetails
     * @param \Travelport\UniversalRecord\StructType\VariableCategoryType[] $variableCategoryDetails
     */
    public function __construct(string $value, ?array $categoryDetails = null, ?array $variableCategoryDetails = null)
    {
        $this
            ->setValue($value)
            ->setCategoryDetails($categoryDetails)
            ->setVariableCategoryDetails($variableCategoryDetails);
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\UniversalRecord\StructType\FareRuleCategoryTypes
     */
    public function setValue(string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get CategoryDetails value
     * @return \Travelport\UniversalRecord\StructType\ValueDetails[]
     */
    public function getCategoryDetails(): ?array
    {
        return $this->CategoryDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryDetailsForArrayConstraintsFromSetCategoryDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRuleCategoryTypesCategoryDetailsItem) {
            // validation for constraint: itemType
            if (!$fareRuleCategoryTypesCategoryDetailsItem instanceof \Travelport\UniversalRecord\StructType\ValueDetails) {
                $invalidValues[] = is_object($fareRuleCategoryTypesCategoryDetailsItem) ? get_class($fareRuleCategoryTypesCategoryDetailsItem) : sprintf('%s(%s)', gettype($fareRuleCategoryTypesCategoryDetailsItem), var_export($fareRuleCategoryTypesCategoryDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryDetails property can only contain items of type \Travelport\UniversalRecord\StructType\ValueDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategoryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ValueDetails[] $categoryDetails
     * @return \Travelport\UniversalRecord\StructType\FareRuleCategoryTypes
     */
    public function setCategoryDetails(?array $categoryDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryDetailsArrayErrorMessage = self::validateCategoryDetailsForArrayConstraintsFromSetCategoryDetails($categoryDetails))) {
            throw new InvalidArgumentException($categoryDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($categoryDetails) && count($categoryDetails) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($categoryDetails)), __LINE__);
        }
        $this->CategoryDetails = $categoryDetails;
        
        return $this;
    }
    /**
     * Add item to CategoryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ValueDetails $item
     * @return \Travelport\UniversalRecord\StructType\FareRuleCategoryTypes
     */
    public function addToCategoryDetails(\Travelport\UniversalRecord\StructType\ValueDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ValueDetails) {
            throw new InvalidArgumentException(sprintf('The CategoryDetails property can only contain items of type \Travelport\UniversalRecord\StructType\ValueDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->CategoryDetails) && count($this->CategoryDetails) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->CategoryDetails)), __LINE__);
        }
        $this->CategoryDetails[] = $item;
        
        return $this;
    }
    /**
     * Get VariableCategoryDetails value
     * @return \Travelport\UniversalRecord\StructType\VariableCategoryType[]
     */
    public function getVariableCategoryDetails(): ?array
    {
        return $this->VariableCategoryDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setVariableCategoryDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariableCategoryDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariableCategoryDetailsForArrayConstraintsFromSetVariableCategoryDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRuleCategoryTypesVariableCategoryDetailsItem) {
            // validation for constraint: itemType
            if (!$fareRuleCategoryTypesVariableCategoryDetailsItem instanceof \Travelport\UniversalRecord\StructType\VariableCategoryType) {
                $invalidValues[] = is_object($fareRuleCategoryTypesVariableCategoryDetailsItem) ? get_class($fareRuleCategoryTypesVariableCategoryDetailsItem) : sprintf('%s(%s)', gettype($fareRuleCategoryTypesVariableCategoryDetailsItem), var_export($fareRuleCategoryTypesVariableCategoryDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VariableCategoryDetails property can only contain items of type \Travelport\UniversalRecord\StructType\VariableCategoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VariableCategoryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VariableCategoryType[] $variableCategoryDetails
     * @return \Travelport\UniversalRecord\StructType\FareRuleCategoryTypes
     */
    public function setVariableCategoryDetails(?array $variableCategoryDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($variableCategoryDetailsArrayErrorMessage = self::validateVariableCategoryDetailsForArrayConstraintsFromSetVariableCategoryDetails($variableCategoryDetails))) {
            throw new InvalidArgumentException($variableCategoryDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($variableCategoryDetails) && count($variableCategoryDetails) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($variableCategoryDetails)), __LINE__);
        }
        $this->VariableCategoryDetails = $variableCategoryDetails;
        
        return $this;
    }
    /**
     * Add item to VariableCategoryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VariableCategoryType $item
     * @return \Travelport\UniversalRecord\StructType\FareRuleCategoryTypes
     */
    public function addToVariableCategoryDetails(\Travelport\UniversalRecord\StructType\VariableCategoryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VariableCategoryType) {
            throw new InvalidArgumentException(sprintf('The VariableCategoryDetails property can only contain items of type \Travelport\UniversalRecord\StructType\VariableCategoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->VariableCategoryDetails) && count($this->VariableCategoryDetails) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->VariableCategoryDetails)), __LINE__);
        }
        $this->VariableCategoryDetails[] = $item;
        
        return $this;
    }
}
