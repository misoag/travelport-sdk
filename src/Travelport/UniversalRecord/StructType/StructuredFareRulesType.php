<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StructuredFareRulesType StructType
 * @subpackage Structs
 */
class StructuredFareRulesType extends AbstractStructBase
{
    /**
     * The FareRuleCategoryType
     * Meta information extracted from the WSDL
     * - documentation: For FareRulesType element
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\FareRuleCategoryTypes[]
     */
    public ?array $FareRuleCategoryType = null;
    /**
     * Constructor method for StructuredFareRulesType
     * @uses StructuredFareRulesType::setFareRuleCategoryType()
     * @param \Travelport\UniversalRecord\StructType\FareRuleCategoryTypes[] $fareRuleCategoryType
     */
    public function __construct(?array $fareRuleCategoryType = null)
    {
        $this
            ->setFareRuleCategoryType($fareRuleCategoryType);
    }
    /**
     * Get FareRuleCategoryType value
     * @return \Travelport\UniversalRecord\StructType\FareRuleCategoryTypes[]
     */
    public function getFareRuleCategoryType(): ?array
    {
        return $this->FareRuleCategoryType;
    }
    /**
     * Set FareRuleCategoryType value
     * @param \Travelport\UniversalRecord\StructType\FareRuleCategoryTypes[] $fareRuleCategoryType
     * @return \Travelport\UniversalRecord\StructType\StructuredFareRulesType
     */
    public function setFareRuleCategoryType(?array $fareRuleCategoryType = null): self
    {
        $this->FareRuleCategoryType = $fareRuleCategoryType;
        
        return $this;
    }
    /**
     * Add item to FareRuleCategoryType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRuleCategoryTypes $item
     * @return \Travelport\UniversalRecord\StructType\StructuredFareRulesType
     */
    public function addToFareRuleCategoryType(\Travelport\UniversalRecord\StructType\FareRuleCategoryTypes $item): self
    {
        $this->FareRuleCategoryType[] = $item;
        
        return $this;
    }
}
