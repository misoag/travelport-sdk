<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $ModifierType;
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
     * @return \Travelport\UniversalRecord\StructType\FareFamilyDisplay
     */
    public function setModifierType(string $modifierType): self
    {
        // validation for constraint: string
        if (!is_null($modifierType) && !is_string($modifierType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifierType, true), gettype($modifierType)), __LINE__);
        }
        $this->ModifierType = $modifierType;
        
        return $this;
    }
}
