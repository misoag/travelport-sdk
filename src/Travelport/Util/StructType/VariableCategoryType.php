<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariableCategoryType StructType
 * @subpackage Structs
 */
class VariableCategoryType extends AbstractStructBase
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
     * @var \Travelport\Util\StructType\ValueDetails[]
     */
    protected ?array $CategoryDetails = null;
    /**
     * The VariableCategoryDetail
     * Meta information extracted from the WSDL
     * - documentation: If the specified category of Structured Fare Rules is of variable lenght
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\CategoryDetailsType[]
     */
    protected ?array $VariableCategoryDetail = null;
    /**
     * Constructor method for VariableCategoryType
     * @uses VariableCategoryType::setValue()
     * @uses VariableCategoryType::setCategoryDetails()
     * @uses VariableCategoryType::setVariableCategoryDetail()
     * @param string $value
     * @param \Travelport\Util\StructType\ValueDetails[] $categoryDetails
     * @param \Travelport\Util\StructType\CategoryDetailsType[] $variableCategoryDetail
     */
    public function __construct(string $value, ?array $categoryDetails = null, ?array $variableCategoryDetail = null)
    {
        $this
            ->setValue($value)
            ->setCategoryDetails($categoryDetails)
            ->setVariableCategoryDetail($variableCategoryDetail);
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
     * @return \Travelport\Util\StructType\VariableCategoryType
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
     * @return \Travelport\Util\StructType\ValueDetails[]
     */
    public function getCategoryDetails(): ?array
    {
        return $this->CategoryDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCategoryDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryDetailsForArrayConstraintFromSetCategoryDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $variableCategoryTypeCategoryDetailsItem) {
            // validation for constraint: itemType
            if (!$variableCategoryTypeCategoryDetailsItem instanceof \Travelport\Util\StructType\ValueDetails) {
                $invalidValues[] = is_object($variableCategoryTypeCategoryDetailsItem) ? get_class($variableCategoryTypeCategoryDetailsItem) : sprintf('%s(%s)', gettype($variableCategoryTypeCategoryDetailsItem), var_export($variableCategoryTypeCategoryDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryDetails property can only contain items of type \Travelport\Util\StructType\ValueDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategoryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ValueDetails[] $categoryDetails
     * @return \Travelport\Util\StructType\VariableCategoryType
     */
    public function setCategoryDetails(?array $categoryDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryDetailsArrayErrorMessage = self::validateCategoryDetailsForArrayConstraintFromSetCategoryDetails($categoryDetails))) {
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
     * @param \Travelport\Util\StructType\ValueDetails $item
     * @return \Travelport\Util\StructType\VariableCategoryType
     */
    public function addToCategoryDetails(\Travelport\Util\StructType\ValueDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ValueDetails) {
            throw new InvalidArgumentException(sprintf('The CategoryDetails property can only contain items of type \Travelport\Util\StructType\ValueDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->CategoryDetails) && count($this->CategoryDetails) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->CategoryDetails)), __LINE__);
        }
        $this->CategoryDetails[] = $item;
        
        return $this;
    }
    /**
     * Get VariableCategoryDetail value
     * @return \Travelport\Util\StructType\CategoryDetailsType[]
     */
    public function getVariableCategoryDetail(): ?array
    {
        return $this->VariableCategoryDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVariableCategoryDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariableCategoryDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariableCategoryDetailForArrayConstraintFromSetVariableCategoryDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $variableCategoryTypeVariableCategoryDetailItem) {
            // validation for constraint: itemType
            if (!$variableCategoryTypeVariableCategoryDetailItem instanceof \Travelport\Util\StructType\CategoryDetailsType) {
                $invalidValues[] = is_object($variableCategoryTypeVariableCategoryDetailItem) ? get_class($variableCategoryTypeVariableCategoryDetailItem) : sprintf('%s(%s)', gettype($variableCategoryTypeVariableCategoryDetailItem), var_export($variableCategoryTypeVariableCategoryDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VariableCategoryDetail property can only contain items of type \Travelport\Util\StructType\CategoryDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VariableCategoryDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CategoryDetailsType[] $variableCategoryDetail
     * @return \Travelport\Util\StructType\VariableCategoryType
     */
    public function setVariableCategoryDetail(?array $variableCategoryDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($variableCategoryDetailArrayErrorMessage = self::validateVariableCategoryDetailForArrayConstraintFromSetVariableCategoryDetail($variableCategoryDetail))) {
            throw new InvalidArgumentException($variableCategoryDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($variableCategoryDetail) && count($variableCategoryDetail) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($variableCategoryDetail)), __LINE__);
        }
        $this->VariableCategoryDetail = $variableCategoryDetail;
        
        return $this;
    }
    /**
     * Add item to VariableCategoryDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CategoryDetailsType $item
     * @return \Travelport\Util\StructType\VariableCategoryType
     */
    public function addToVariableCategoryDetail(\Travelport\Util\StructType\CategoryDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\CategoryDetailsType) {
            throw new InvalidArgumentException(sprintf('The VariableCategoryDetail property can only contain items of type \Travelport\Util\StructType\CategoryDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->VariableCategoryDetail) && count($this->VariableCategoryDetail) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->VariableCategoryDetail)), __LINE__);
        }
        $this->VariableCategoryDetail[] = $item;
        
        return $this;
    }
}
