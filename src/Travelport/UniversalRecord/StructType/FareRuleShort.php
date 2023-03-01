<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public int $Category;
    /**
     * The FareRuleNameValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FareRuleNameValue
     * @var \Travelport\UniversalRecord\StructType\FareRuleNameValue[]
     */
    public ?array $FareRuleNameValue = null;
    /**
     * The TableNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TableNumber = null;
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
     * Set FareRuleNameValue value
     * @param \Travelport\UniversalRecord\StructType\FareRuleNameValue[] $fareRuleNameValue
     * @return \Travelport\UniversalRecord\StructType\FareRuleShort
     */
    public function setFareRuleNameValue(?array $fareRuleNameValue = null): self
    {
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
        $this->TableNumber = $tableNumber;
        
        return $this;
    }
}
