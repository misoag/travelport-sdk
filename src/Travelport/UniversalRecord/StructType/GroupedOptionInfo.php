<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupedOptionInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to display the optional services which are coupled by business rules.
 * @subpackage Structs
 */
class GroupedOptionInfo extends AbstractStructBase
{
    /**
     * The GroupedOption
     * Meta information extracted from the WSDL
     * - choice: GroupedOption
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 2
     * - ref: GroupedOption
     * @var \Travelport\UniversalRecord\StructType\GroupedOption[]
     */
    protected array $GroupedOption;
    /**
     * Constructor method for GroupedOptionInfo
     * @uses GroupedOptionInfo::setGroupedOption()
     * @param \Travelport\UniversalRecord\StructType\GroupedOption[] $groupedOption
     */
    public function __construct(array $groupedOption)
    {
        $this
            ->setGroupedOption($groupedOption);
    }
    /**
     * Get GroupedOption value
     * @return \Travelport\UniversalRecord\StructType\GroupedOption[]
     */
    public function getGroupedOption(): array
    {
        return isset($this->GroupedOption) ? $this->GroupedOption : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupedOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupedOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupedOptionForArrayConstraintsFromSetGroupedOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $groupedOptionInfoGroupedOptionItem) {
            // validation for constraint: itemType
            if (!$groupedOptionInfoGroupedOptionItem instanceof \Travelport\UniversalRecord\StructType\GroupedOption) {
                $invalidValues[] = is_object($groupedOptionInfoGroupedOptionItem) ? get_class($groupedOptionInfoGroupedOptionItem) : sprintf('%s(%s)', gettype($groupedOptionInfoGroupedOptionItem), var_export($groupedOptionInfoGroupedOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupedOption property can only contain items of type \Travelport\UniversalRecord\StructType\GroupedOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setGroupedOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupedOption method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGroupedOptionForChoiceConstraintsFromSetGroupedOption($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GroupedOption can\'t be set as the property %s is already set. Only one property must be set among these properties: GroupedOption, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set GroupedOption value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GroupedOption[] $groupedOption
     * @return \Travelport\UniversalRecord\StructType\GroupedOptionInfo
     */
    public function setGroupedOption(array $groupedOption): self
    {
        // validation for constraint: array
        if ('' !== ($groupedOptionArrayErrorMessage = self::validateGroupedOptionForArrayConstraintsFromSetGroupedOption($groupedOption))) {
            throw new InvalidArgumentException($groupedOptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(GroupedOption)
        if ('' !== ($groupedOptionChoiceErrorMessage = self::validateGroupedOptionForChoiceConstraintsFromSetGroupedOption($groupedOption))) {
            throw new InvalidArgumentException($groupedOptionChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($groupedOption) && count($groupedOption) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($groupedOption)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($groupedOption) && count($groupedOption) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($groupedOption)), __LINE__);
        }
        if (is_null($groupedOption) || (is_array($groupedOption) && empty($groupedOption))) {
            unset($this->GroupedOption);
        } else {
            $this->GroupedOption = $groupedOption;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToGroupedOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToGroupedOption method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToGroupedOption($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GroupedOption can\'t be set as the property %s is already set. Only one property must be set among these properties: GroupedOption, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to GroupedOption value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GroupedOption $item
     * @return \Travelport\UniversalRecord\StructType\GroupedOptionInfo
     */
    public function addToGroupedOption(\Travelport\UniversalRecord\StructType\GroupedOption $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\GroupedOption) {
            throw new InvalidArgumentException(sprintf('The GroupedOption property can only contain items of type \Travelport\UniversalRecord\StructType\GroupedOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(GroupedOption)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToGroupedOption($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->GroupedOption) && count($this->GroupedOption) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->GroupedOption)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GroupedOption) && count($this->GroupedOption) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GroupedOption)), __LINE__);
        }
        $this->GroupedOption[] = $item;
        
        return $this;
    }
}
