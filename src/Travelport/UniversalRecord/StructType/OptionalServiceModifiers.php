<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionalServiceModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Rich Content and Branding for an optional service
 * @subpackage Structs
 */
class OptionalServiceModifiers extends AbstractStructBase
{
    /**
     * The OptionalServiceModifier
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - ref: OptionalServiceModifier
     * @var \Travelport\UniversalRecord\StructType\OptionalServiceModifier[]
     */
    protected ?array $OptionalServiceModifier = null;
    /**
     * Constructor method for OptionalServiceModifiers
     * @uses OptionalServiceModifiers::setOptionalServiceModifier()
     * @param \Travelport\UniversalRecord\StructType\OptionalServiceModifier[] $optionalServiceModifier
     */
    public function __construct(?array $optionalServiceModifier = null)
    {
        $this
            ->setOptionalServiceModifier($optionalServiceModifier);
    }
    /**
     * Get OptionalServiceModifier value
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifier[]
     */
    public function getOptionalServiceModifier(): ?array
    {
        return $this->OptionalServiceModifier;
    }
    /**
     * This method is responsible for validating the values passed to the setOptionalServiceModifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionalServiceModifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionalServiceModifierForArrayConstraintsFromSetOptionalServiceModifier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServiceModifiersOptionalServiceModifierItem) {
            // validation for constraint: itemType
            if (!$optionalServiceModifiersOptionalServiceModifierItem instanceof \Travelport\UniversalRecord\StructType\OptionalServiceModifier) {
                $invalidValues[] = is_object($optionalServiceModifiersOptionalServiceModifierItem) ? get_class($optionalServiceModifiersOptionalServiceModifierItem) : sprintf('%s(%s)', gettype($optionalServiceModifiersOptionalServiceModifierItem), var_export($optionalServiceModifiersOptionalServiceModifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionalServiceModifier property can only contain items of type \Travelport\UniversalRecord\StructType\OptionalServiceModifier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OptionalServiceModifier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OptionalServiceModifier[] $optionalServiceModifier
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifiers
     */
    public function setOptionalServiceModifier(?array $optionalServiceModifier = null): self
    {
        // validation for constraint: array
        if ('' !== ($optionalServiceModifierArrayErrorMessage = self::validateOptionalServiceModifierForArrayConstraintsFromSetOptionalServiceModifier($optionalServiceModifier))) {
            throw new InvalidArgumentException($optionalServiceModifierArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($optionalServiceModifier) && count($optionalServiceModifier) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($optionalServiceModifier)), __LINE__);
        }
        $this->OptionalServiceModifier = $optionalServiceModifier;
        
        return $this;
    }
    /**
     * Add item to OptionalServiceModifier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OptionalServiceModifier $item
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifiers
     */
    public function addToOptionalServiceModifier(\Travelport\UniversalRecord\StructType\OptionalServiceModifier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\OptionalServiceModifier) {
            throw new InvalidArgumentException(sprintf('The OptionalServiceModifier property can only contain items of type \Travelport\UniversalRecord\StructType\OptionalServiceModifier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->OptionalServiceModifier) && count($this->OptionalServiceModifier) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->OptionalServiceModifier)), __LINE__);
        }
        $this->OptionalServiceModifier[] = $item;
        
        return $this;
    }
}