<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareFamilyDisplay StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to request a fare family display.
 * @subpackage Structs
 */
class FareFamilyDisplay extends AbstractStructBase
{
    /**
     * The ModifierType
     * Meta information extracted from the WSDL
     * - documentation: "FareFamily" returns the lowest branded fares in a fare family. "MaintainBookingCode" attempts to return the lowest branded fare in a fare family display based on the permitted booking code. Any brand that does not have a fare for
     * the permitted booking code will then have the lowest fare returned. "LowestFareInBrand" returns the lowest fare within each branded fare in a fare family display.
     * - use: required
     * @var string
     */
    public string $ModifierType;
    /**
     * Constructor method for FareFamilyDisplay
     * @uses FareFamilyDisplay::setModifierType()
     * @param string $modifierType
     */
    public function __construct(string $modifierType)
    {
        $this
            ->setModifierType($modifierType);
    }
    /**
     * Get ModifierType value
     * @return string
     */
    public function getModifierType(): string
    {
        return $this->ModifierType;
    }
    /**
     * Set ModifierType value
     * @param string $modifierType
     * @return \Travelport\Air\StructType\FareFamilyDisplay
     */
    public function setModifierType(string $modifierType): self
    {
        $this->ModifierType = $modifierType;
        
        return $this;
    }
}
