<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFareRulesModifier StructType
 * Meta information extracted from the WSDL
 * - documentation: The modifiers for Air Fare Rules
 * @subpackage Structs
 */
class AirFareRulesModifier extends AbstractStructBase
{
    /**
     * The AirFareRuleCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirFareRuleCategory
     * @var \Travelport\Air\StructType\AirFareRuleCategory[]
     */
    public ?array $AirFareRuleCategory = null;
    /**
     * Constructor method for AirFareRulesModifier
     * @uses AirFareRulesModifier::setAirFareRuleCategory()
     * @param \Travelport\Air\StructType\AirFareRuleCategory[] $airFareRuleCategory
     */
    public function __construct(?array $airFareRuleCategory = null)
    {
        $this
            ->setAirFareRuleCategory($airFareRuleCategory);
    }
    /**
     * Get AirFareRuleCategory value
     * @return \Travelport\Air\StructType\AirFareRuleCategory[]
     */
    public function getAirFareRuleCategory(): ?array
    {
        return $this->AirFareRuleCategory;
    }
    /**
     * Set AirFareRuleCategory value
     * @param \Travelport\Air\StructType\AirFareRuleCategory[] $airFareRuleCategory
     * @return \Travelport\Air\StructType\AirFareRulesModifier
     */
    public function setAirFareRuleCategory(?array $airFareRuleCategory = null): self
    {
        $this->AirFareRuleCategory = $airFareRuleCategory;
        
        return $this;
    }
    /**
     * Add item to AirFareRuleCategory value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirFareRuleCategory $item
     * @return \Travelport\Air\StructType\AirFareRulesModifier
     */
    public function addToAirFareRuleCategory(\Travelport\Air\StructType\AirFareRuleCategory $item): self
    {
        $this->AirFareRuleCategory[] = $item;
        
        return $this;
    }
}
