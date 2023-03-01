<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\GroupedOption[]
     */
    public array $GroupedOption;
    /**
     * Constructor method for GroupedOptionInfo
     * @uses GroupedOptionInfo::setGroupedOption()
     * @param \Travelport\Air\StructType\GroupedOption[] $groupedOption
     */
    public function __construct(array $groupedOption = null)
    {
        $this
            ->setGroupedOption($groupedOption);
    }
    /**
     * Get GroupedOption value
     * @return \Travelport\Air\StructType\GroupedOption[]|null
     */
    public function getGroupedOption(): ?array
    {
        return $this->GroupedOption ?? null;
    }
    /**
     * Set GroupedOption value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\GroupedOption[] $groupedOption
     * @return \Travelport\Air\StructType\GroupedOptionInfo
     */
    public function setGroupedOption(array $groupedOption = null): self
    {
        if (is_null($groupedOption) || (is_array($groupedOption) && empty($groupedOption))) {
            unset($this->GroupedOption);
        } else {
            $this->GroupedOption = $groupedOption;
        }
        
        return $this;
    }
    /**
     * Add item to GroupedOption value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\GroupedOption $item
     * @return \Travelport\Air\StructType\GroupedOptionInfo
     */
    public function addToGroupedOption(\Travelport\Air\StructType\GroupedOption $item): self
    {
        $this->GroupedOption[] = $item;
        
        return $this;
    }
}
