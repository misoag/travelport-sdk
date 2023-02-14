<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecondaryTypeRules StructType
 * Meta information extracted from the WSDL
 * - documentation: Lists the supported Secondary Codes for the optional / additional service.
 * @subpackage Structs
 */
class SecondaryTypeRules extends AbstractStructBase
{
    /**
     * The SecondaryTypeRule
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\Util\StructType\SecondaryTypeRule[]
     */
    protected ?array $SecondaryTypeRule = null;
    /**
     * Constructor method for SecondaryTypeRules
     * @uses SecondaryTypeRules::setSecondaryTypeRule()
     * @param \Travelport\Util\StructType\SecondaryTypeRule[] $secondaryTypeRule
     */
    public function __construct(?array $secondaryTypeRule = null)
    {
        $this
            ->setSecondaryTypeRule($secondaryTypeRule);
    }
    /**
     * Get SecondaryTypeRule value
     * @return \Travelport\Util\StructType\SecondaryTypeRule[]
     */
    public function getSecondaryTypeRule(): ?array
    {
        return $this->SecondaryTypeRule;
    }
    /**
     * This method is responsible for validating the values passed to the setSecondaryTypeRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSecondaryTypeRule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSecondaryTypeRuleForArrayConstraintsFromSetSecondaryTypeRule(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $secondaryTypeRulesSecondaryTypeRuleItem) {
            // validation for constraint: itemType
            if (!$secondaryTypeRulesSecondaryTypeRuleItem instanceof \Travelport\Util\StructType\SecondaryTypeRule) {
                $invalidValues[] = is_object($secondaryTypeRulesSecondaryTypeRuleItem) ? get_class($secondaryTypeRulesSecondaryTypeRuleItem) : sprintf('%s(%s)', gettype($secondaryTypeRulesSecondaryTypeRuleItem), var_export($secondaryTypeRulesSecondaryTypeRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SecondaryTypeRule property can only contain items of type \Travelport\Util\StructType\SecondaryTypeRule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SecondaryTypeRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SecondaryTypeRule[] $secondaryTypeRule
     * @return \Travelport\Util\StructType\SecondaryTypeRules
     */
    public function setSecondaryTypeRule(?array $secondaryTypeRule = null): self
    {
        // validation for constraint: array
        if ('' !== ($secondaryTypeRuleArrayErrorMessage = self::validateSecondaryTypeRuleForArrayConstraintsFromSetSecondaryTypeRule($secondaryTypeRule))) {
            throw new InvalidArgumentException($secondaryTypeRuleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($secondaryTypeRule) && count($secondaryTypeRule) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($secondaryTypeRule)), __LINE__);
        }
        $this->SecondaryTypeRule = $secondaryTypeRule;
        
        return $this;
    }
    /**
     * Add item to SecondaryTypeRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SecondaryTypeRule $item
     * @return \Travelport\Util\StructType\SecondaryTypeRules
     */
    public function addToSecondaryTypeRule(\Travelport\Util\StructType\SecondaryTypeRule $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SecondaryTypeRule) {
            throw new InvalidArgumentException(sprintf('The SecondaryTypeRule property can only contain items of type \Travelport\Util\StructType\SecondaryTypeRule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SecondaryTypeRule) && count($this->SecondaryTypeRule) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SecondaryTypeRule)), __LINE__);
        }
        $this->SecondaryTypeRule[] = $item;
        
        return $this;
    }
}
