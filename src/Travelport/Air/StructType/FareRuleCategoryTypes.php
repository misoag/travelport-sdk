<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Value;
    /**
     * The CategoryDetails
     * Meta information extracted from the WSDL
     * - documentation: To indicate details of which category is displayed
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ValueDetails[]
     */
    public ?array $CategoryDetails = null;
    /**
     * The VariableCategoryDetails
     * Meta information extracted from the WSDL
     * - documentation: If the specified category of Structured Fare Rules is of variable lenght
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\VariableCategoryType[]
     */
    public ?array $VariableCategoryDetails = null;
    /**
     * Constructor method for FareRuleCategoryTypes
     * @uses FareRuleCategoryTypes::setValue()
     * @uses FareRuleCategoryTypes::setCategoryDetails()
     * @uses FareRuleCategoryTypes::setVariableCategoryDetails()
     * @param string $value
     * @param \Travelport\Air\StructType\ValueDetails[] $categoryDetails
     * @param \Travelport\Air\StructType\VariableCategoryType[] $variableCategoryDetails
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
     * @return \Travelport\Air\StructType\FareRuleCategoryTypes
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get CategoryDetails value
     * @return \Travelport\Air\StructType\ValueDetails[]
     */
    public function getCategoryDetails(): ?array
    {
        return $this->CategoryDetails;
    }
    /**
     * Set CategoryDetails value
     * @param \Travelport\Air\StructType\ValueDetails[] $categoryDetails
     * @return \Travelport\Air\StructType\FareRuleCategoryTypes
     */
    public function setCategoryDetails(?array $categoryDetails = null): self
    {
        $this->CategoryDetails = $categoryDetails;
        
        return $this;
    }
    /**
     * Add item to CategoryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ValueDetails $item
     * @return \Travelport\Air\StructType\FareRuleCategoryTypes
     */
    public function addToCategoryDetails(\Travelport\Air\StructType\ValueDetails $item): self
    {
        $this->CategoryDetails[] = $item;
        
        return $this;
    }
    /**
     * Get VariableCategoryDetails value
     * @return \Travelport\Air\StructType\VariableCategoryType[]
     */
    public function getVariableCategoryDetails(): ?array
    {
        return $this->VariableCategoryDetails;
    }
    /**
     * Set VariableCategoryDetails value
     * @param \Travelport\Air\StructType\VariableCategoryType[] $variableCategoryDetails
     * @return \Travelport\Air\StructType\FareRuleCategoryTypes
     */
    public function setVariableCategoryDetails(?array $variableCategoryDetails = null): self
    {
        $this->VariableCategoryDetails = $variableCategoryDetails;
        
        return $this;
    }
    /**
     * Add item to VariableCategoryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\VariableCategoryType $item
     * @return \Travelport\Air\StructType\FareRuleCategoryTypes
     */
    public function addToVariableCategoryDetails(\Travelport\Air\StructType\VariableCategoryType $item): self
    {
        $this->VariableCategoryDetails[] = $item;
        
        return $this;
    }
}
