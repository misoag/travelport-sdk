<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryDetailsType StructType
 * @subpackage Structs
 */
class CategoryDetailsType extends AbstractStructBase
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
     * - documentation: For each category Details of Structured Fare Rules
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\ValueDetails[]
     */
    protected ?array $CategoryDetails = null;
    /**
     * Constructor method for CategoryDetailsType
     * @uses CategoryDetailsType::setValue()
     * @uses CategoryDetailsType::setCategoryDetails()
     * @param string $value
     * @param \Travelport\Util\StructType\ValueDetails[] $categoryDetails
     */
    public function __construct(string $value, ?array $categoryDetails = null)
    {
        $this
            ->setValue($value)
            ->setCategoryDetails($categoryDetails);
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
     * @return \Travelport\Util\StructType\CategoryDetailsType
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
        foreach ($values as $categoryDetailsTypeCategoryDetailsItem) {
            // validation for constraint: itemType
            if (!$categoryDetailsTypeCategoryDetailsItem instanceof \Travelport\Util\StructType\ValueDetails) {
                $invalidValues[] = is_object($categoryDetailsTypeCategoryDetailsItem) ? get_class($categoryDetailsTypeCategoryDetailsItem) : sprintf('%s(%s)', gettype($categoryDetailsTypeCategoryDetailsItem), var_export($categoryDetailsTypeCategoryDetailsItem, true));
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
     * @return \Travelport\Util\StructType\CategoryDetailsType
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
     * @param \Travelport\Util\StructType\ValueDetails $item
     * @return \Travelport\Util\StructType\CategoryDetailsType
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
}
