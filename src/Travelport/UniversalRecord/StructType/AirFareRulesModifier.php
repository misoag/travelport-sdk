<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\AirFareRuleCategory[]
     */
    protected ?array $AirFareRuleCategory = null;
    /**
     * Constructor method for AirFareRulesModifier
     * @uses AirFareRulesModifier::setAirFareRuleCategory()
     * @param \Travelport\UniversalRecord\StructType\AirFareRuleCategory[] $airFareRuleCategory
     */
    public function __construct(?array $airFareRuleCategory = null)
    {
        $this
            ->setAirFareRuleCategory($airFareRuleCategory);
    }
    /**
     * Get AirFareRuleCategory value
     * @return \Travelport\UniversalRecord\StructType\AirFareRuleCategory[]
     */
    public function getAirFareRuleCategory(): ?array
    {
        return $this->AirFareRuleCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setAirFareRuleCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirFareRuleCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirFareRuleCategoryForArrayConstraintsFromSetAirFareRuleCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airFareRulesModifierAirFareRuleCategoryItem) {
            // validation for constraint: itemType
            if (!$airFareRulesModifierAirFareRuleCategoryItem instanceof \Travelport\UniversalRecord\StructType\AirFareRuleCategory) {
                $invalidValues[] = is_object($airFareRulesModifierAirFareRuleCategoryItem) ? get_class($airFareRulesModifierAirFareRuleCategoryItem) : sprintf('%s(%s)', gettype($airFareRulesModifierAirFareRuleCategoryItem), var_export($airFareRulesModifierAirFareRuleCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirFareRuleCategory property can only contain items of type \Travelport\UniversalRecord\StructType\AirFareRuleCategory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirFareRuleCategory value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirFareRuleCategory[] $airFareRuleCategory
     * @return \Travelport\UniversalRecord\StructType\AirFareRulesModifier
     */
    public function setAirFareRuleCategory(?array $airFareRuleCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($airFareRuleCategoryArrayErrorMessage = self::validateAirFareRuleCategoryForArrayConstraintsFromSetAirFareRuleCategory($airFareRuleCategory))) {
            throw new InvalidArgumentException($airFareRuleCategoryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airFareRuleCategory) && count($airFareRuleCategory) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airFareRuleCategory)), __LINE__);
        }
        $this->AirFareRuleCategory = $airFareRuleCategory;
        
        return $this;
    }
    /**
     * Add item to AirFareRuleCategory value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirFareRuleCategory $item
     * @return \Travelport\UniversalRecord\StructType\AirFareRulesModifier
     */
    public function addToAirFareRuleCategory(\Travelport\UniversalRecord\StructType\AirFareRuleCategory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirFareRuleCategory) {
            throw new InvalidArgumentException(sprintf('The AirFareRuleCategory property can only contain items of type \Travelport\UniversalRecord\StructType\AirFareRuleCategory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirFareRuleCategory) && count($this->AirFareRuleCategory) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirFareRuleCategory)), __LINE__);
        }
        $this->AirFareRuleCategory[] = $item;
        
        return $this;
    }
}
