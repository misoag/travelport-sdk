<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected int $Category;
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
        // validation for constraint: int
        if (!is_null($category) && !(is_int($category) || ctype_digit($category))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        // validation for constraint: maxInclusive(50)
        if (!is_null($category) && $category > 50) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 50', var_export($category, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($category) && $category < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($category, true)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
}
