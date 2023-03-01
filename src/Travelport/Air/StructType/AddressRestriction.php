<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\RequiredField[]
     */
    public ?array $RequiredField = null;
    /**
     * Constructor method for AddressRestriction
     * @uses AddressRestriction::setRequiredField()
     * @param \Travelport\Air\StructType\RequiredField[] $requiredField
     */
    public function __construct(?array $requiredField = null)
    {
        $this
            ->setRequiredField($requiredField);
    }
    /**
     * Get RequiredField value
     * @return \Travelport\Air\StructType\RequiredField[]
     */
    public function getRequiredField(): ?array
    {
        return $this->RequiredField;
    }
    /**
     * Set RequiredField value
     * @param \Travelport\Air\StructType\RequiredField[] $requiredField
     * @return \Travelport\Air\StructType\AddressRestriction
     */
    public function setRequiredField(?array $requiredField = null): self
    {
        $this->RequiredField = $requiredField;
        
        return $this;
    }
    /**
     * Add item to RequiredField value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RequiredField $item
     * @return \Travelport\Air\StructType\AddressRestriction
     */
    public function addToRequiredField(\Travelport\Air\StructType\RequiredField $item): self
    {
        $this->RequiredField[] = $item;
        
        return $this;
    }
}
