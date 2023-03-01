<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Value;
    /**
     * The CategoryDetails
     * Meta information extracted from the WSDL
     * - documentation: For each category Details of Structured Fare Rules
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ValueDetails[]
     */
    public ?array $CategoryDetails = null;
    /**
     * Constructor method for CategoryDetailsType
     * @uses CategoryDetailsType::setValue()
     * @uses CategoryDetailsType::setCategoryDetails()
     * @param string $value
     * @param \Travelport\Air\StructType\ValueDetails[] $categoryDetails
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
     * @return \Travelport\Air\StructType\CategoryDetailsType
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
     * @return \Travelport\Air\StructType\CategoryDetailsType
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
     * @return \Travelport\Air\StructType\CategoryDetailsType
     */
    public function addToCategoryDetails(\Travelport\Air\StructType\ValueDetails $item): self
    {
        $this->CategoryDetails[] = $item;
        
        return $this;
    }
}
