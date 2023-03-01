<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public bool $IncludeTermConditions;
    /**
     * The LanguageOption
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: LanguageOption
     * @var \Travelport\UniversalRecord\StructType\LanguageOption[]
     */
    public ?array $LanguageOption = null;
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
     * Set LanguageOption value
     * @param \Travelport\UniversalRecord\StructType\LanguageOption[] $languageOption
     * @return \Travelport\UniversalRecord\StructType\TermConditions
     */
    public function setLanguageOption(?array $languageOption = null): self
    {
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
        $this->LanguageOption[] = $item;
        
        return $this;
    }
}
