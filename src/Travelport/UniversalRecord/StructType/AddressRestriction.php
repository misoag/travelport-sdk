<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressRestriction StructType
 * @subpackage Structs
 */
class AddressRestriction extends AbstractStructBase
{
    /**
     * The RequiredField
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RequiredField
     * @var \Travelport\UniversalRecord\StructType\RequiredField[]
     */
    public ?array $RequiredField = null;
    /**
     * Constructor method for AddressRestriction
     * @uses AddressRestriction::setRequiredField()
     * @param \Travelport\UniversalRecord\StructType\RequiredField[] $requiredField
     */
    public function __construct(?array $requiredField = null)
    {
        $this
            ->setRequiredField($requiredField);
    }
    /**
     * Get RequiredField value
     * @return \Travelport\UniversalRecord\StructType\RequiredField[]
     */
    public function getRequiredField(): ?array
    {
        return $this->RequiredField;
    }
    /**
     * Set RequiredField value
     * @param \Travelport\UniversalRecord\StructType\RequiredField[] $requiredField
     * @return \Travelport\UniversalRecord\StructType\AddressRestriction
     */
    public function setRequiredField(?array $requiredField = null): self
    {
        $this->RequiredField = $requiredField;
        
        return $this;
    }
    /**
     * Add item to RequiredField value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RequiredField $item
     * @return \Travelport\UniversalRecord\StructType\AddressRestriction
     */
    public function addToRequiredField(\Travelport\UniversalRecord\StructType\RequiredField $item): self
    {
        $this->RequiredField[] = $item;
        
        return $this;
    }
}
