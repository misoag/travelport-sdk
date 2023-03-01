<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Value;
    /**
     * The CategoryDetails
     * Meta information extracted from the WSDL
     * - documentation: To indicate details of which category is displayed
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ValueDetails[]
     */
    public ?array $CategoryDetails = null;
    /**
     * The VariableCategoryDetail
     * Meta information extracted from the WSDL
     * - documentation: If the specified category of Structured Fare Rules is of variable lenght
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\CategoryDetailsType[]
     */
    public ?array $VariableCategoryDetail = null;
    /**
     * Constructor method for VariableCategoryType
     * @uses VariableCategoryType::setValue()
     * @uses VariableCategoryType::setCategoryDetails()
     * @uses VariableCategoryType::setVariableCategoryDetail()
     * @param string $value
     * @param \Travelport\UniversalRecord\StructType\ValueDetails[] $categoryDetails
     * @param \Travelport\UniversalRecord\StructType\CategoryDetailsType[] $variableCategoryDetail
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
     * @return \Travelport\UniversalRecord\StructType\VariableCategoryType
     */
    public function setValue(string $value): self
    {
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
     * Set CategoryDetails value
     * @param \Travelport\UniversalRecord\StructType\ValueDetails[] $categoryDetails
     * @return \Travelport\UniversalRecord\StructType\VariableCategoryType
     */
    public function setCategoryDetails(?array $categoryDetails = null): self
    {
        $this->CategoryDetails = $categoryDetails;
        
        return $this;
    }
    /**
     * Add item to CategoryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ValueDetails $item
     * @return \Travelport\UniversalRecord\StructType\VariableCategoryType
     */
    public function addToCategoryDetails(\Travelport\UniversalRecord\StructType\ValueDetails $item): self
    {
        $this->CategoryDetails[] = $item;
        
        return $this;
    }
    /**
     * Get VariableCategoryDetail value
     * @return \Travelport\UniversalRecord\StructType\CategoryDetailsType[]
     */
    public function getVariableCategoryDetail(): ?array
    {
        return $this->VariableCategoryDetail;
    }
    /**
     * Set VariableCategoryDetail value
     * @param \Travelport\UniversalRecord\StructType\CategoryDetailsType[] $variableCategoryDetail
     * @return \Travelport\UniversalRecord\StructType\VariableCategoryType
     */
    public function setVariableCategoryDetail(?array $variableCategoryDetail = null): self
    {
        $this->VariableCategoryDetail = $variableCategoryDetail;
        
        return $this;
    }
    /**
     * Add item to VariableCategoryDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CategoryDetailsType $item
     * @return \Travelport\UniversalRecord\StructType\VariableCategoryType
     */
    public function addToVariableCategoryDetail(\Travelport\UniversalRecord\StructType\CategoryDetailsType $item): self
    {
        $this->VariableCategoryDetail[] = $item;
        
        return $this;
    }
}
