<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRuleCategory StructType
 * Meta information extracted from the WSDL
 * - documentation: Rule Categories to filter on.
 * @subpackage Structs
 */
class FareRuleCategory extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 50
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    public int $Category;
    /**
     * Constructor method for FareRuleCategory
     * @uses FareRuleCategory::setCategory()
     * @param int $category
     */
    public function __construct(int $category)
    {
        $this
            ->setCategory($category);
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
     * @return \Travelport\UniversalRecord\StructType\FareRuleCategory
     */
    public function setCategory(int $category): self
    {
        $this->Category = $category;
        
        return $this;
    }
}
