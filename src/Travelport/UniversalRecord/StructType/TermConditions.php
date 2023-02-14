<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TermConditions StructType
 * Meta information extracted from the WSDL
 * - documentation: The terms and conditions to be included in Fax details
 * @subpackage Structs
 */
class TermConditions extends AbstractStructBase
{
    /**
     * The IncludeTermConditions
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether Term and Conditions included in the Fax or not .
     * - use: required
     * @var bool
     */
    protected bool $IncludeTermConditions;
    /**
     * The LanguageOption
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: LanguageOption
     * @var \Travelport\UniversalRecord\StructType\LanguageOption[]
     */
    protected ?array $LanguageOption = null;
    /**
     * Constructor method for TermConditions
     * @uses TermConditions::setIncludeTermConditions()
     * @uses TermConditions::setLanguageOption()
     * @param bool $includeTermConditions
     * @param \Travelport\UniversalRecord\StructType\LanguageOption[] $languageOption
     */
    public function __construct(bool $includeTermConditions, ?array $languageOption = null)
    {
        $this
            ->setIncludeTermConditions($includeTermConditions)
            ->setLanguageOption($languageOption);
    }
    /**
     * Get IncludeTermConditions value
     * @return bool
     */
    public function getIncludeTermConditions(): bool
    {
        return $this->IncludeTermConditions;
    }
    /**
     * Set IncludeTermConditions value
     * @param bool $includeTermConditions
     * @return \Travelport\UniversalRecord\StructType\TermConditions
     */
    public function setIncludeTermConditions(bool $includeTermConditions): self
    {
        // validation for constraint: boolean
        if (!is_null($includeTermConditions) && !is_bool($includeTermConditions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeTermConditions, true), gettype($includeTermConditions)), __LINE__);
        }
        $this->IncludeTermConditions = $includeTermConditions;
        
        return $this;
    }
    /**
     * Get LanguageOption value
     * @return \Travelport\UniversalRecord\StructType\LanguageOption[]
     */
    public function getLanguageOption(): ?array
    {
        return $this->LanguageOption;
    }
    /**
     * This method is responsible for validating the values passed to the setLanguageOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanguageOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanguageOptionForArrayConstraintsFromSetLanguageOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $termConditionsLanguageOptionItem) {
            // validation for constraint: itemType
            if (!$termConditionsLanguageOptionItem instanceof \Travelport\UniversalRecord\StructType\LanguageOption) {
                $invalidValues[] = is_object($termConditionsLanguageOptionItem) ? get_class($termConditionsLanguageOptionItem) : sprintf('%s(%s)', gettype($termConditionsLanguageOptionItem), var_export($termConditionsLanguageOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LanguageOption property can only contain items of type \Travelport\UniversalRecord\StructType\LanguageOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LanguageOption value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LanguageOption[] $languageOption
     * @return \Travelport\UniversalRecord\StructType\TermConditions
     */
    public function setLanguageOption(?array $languageOption = null): self
    {
        // validation for constraint: array
        if ('' !== ($languageOptionArrayErrorMessage = self::validateLanguageOptionForArrayConstraintsFromSetLanguageOption($languageOption))) {
            throw new InvalidArgumentException($languageOptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($languageOption) && count($languageOption) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($languageOption)), __LINE__);
        }
        $this->LanguageOption = $languageOption;
        
        return $this;
    }
    /**
     * Add item to LanguageOption value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LanguageOption $item
     * @return \Travelport\UniversalRecord\StructType\TermConditions
     */
    public function addToLanguageOption(\Travelport\UniversalRecord\StructType\LanguageOption $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LanguageOption) {
            throw new InvalidArgumentException(sprintf('The LanguageOption property can only contain items of type \Travelport\UniversalRecord\StructType\LanguageOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->LanguageOption) && count($this->LanguageOption) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->LanguageOption)), __LINE__);
        }
        $this->LanguageOption[] = $item;
        
        return $this;
    }
}
