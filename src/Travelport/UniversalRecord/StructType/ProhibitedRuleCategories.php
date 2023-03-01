<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProhibitedRuleCategories StructType
 * @subpackage Structs
 */
class ProhibitedRuleCategories extends AbstractStructBase
{
    /**
     * The FareRuleCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FareRuleCategory
     * @var \Travelport\UniversalRecord\StructType\FareRuleCategory[]
     */
    public ?array $FareRuleCategory = null;
    /**
     * Constructor method for ProhibitedRuleCategories
     * @uses ProhibitedRuleCategories::setFareRuleCategory()
     * @param \Travelport\UniversalRecord\StructType\FareRuleCategory[] $fareRuleCategory
     */
    public function __construct(?array $fareRuleCategory = null)
    {
        $this
            ->setFareRuleCategory($fareRuleCategory);
    }
    /**
     * Get FareRuleCategory value
     * @return \Travelport\UniversalRecord\StructType\FareRuleCategory[]
     */
    public function getFareRuleCategory(): ?array
    {
        return $this->FareRuleCategory;
    }
    /**
     * Set FareRuleCategory value
     * @param \Travelport\UniversalRecord\StructType\FareRuleCategory[] $fareRuleCategory
     * @return \Travelport\UniversalRecord\StructType\ProhibitedRuleCategories
     */
    public function setFareRuleCategory(?array $fareRuleCategory = null): self
    {
        $this->FareRuleCategory = $fareRuleCategory;
        
        return $this;
    }
    /**
     * Add item to FareRuleCategory value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRuleCategory $item
     * @return \Travelport\UniversalRecord\StructType\ProhibitedRuleCategories
     */
    public function addToFareRuleCategory(\Travelport\UniversalRecord\StructType\FareRuleCategory $item): self
    {
        $this->FareRuleCategory[] = $item;
        
        return $this;
    }
}
