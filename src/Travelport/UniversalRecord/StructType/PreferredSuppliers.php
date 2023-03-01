<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredSuppliers StructType
 * @subpackage Structs
 */
class PreferredSuppliers extends AbstractStructBase
{
    /**
     * The RailSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RailSupplier
     * @var \Travelport\UniversalRecord\StructType\RailSupplier[]
     */
    public ?array $RailSupplier = null;
    /**
     * Constructor method for PreferredSuppliers
     * @uses PreferredSuppliers::setRailSupplier()
     * @param \Travelport\UniversalRecord\StructType\RailSupplier[] $railSupplier
     */
    public function __construct(?array $railSupplier = null)
    {
        $this
            ->setRailSupplier($railSupplier);
    }
    /**
     * Get RailSupplier value
     * @return \Travelport\UniversalRecord\StructType\RailSupplier[]
     */
    public function getRailSupplier(): ?array
    {
        return $this->RailSupplier;
    }
    /**
     * Set RailSupplier value
     * @param \Travelport\UniversalRecord\StructType\RailSupplier[] $railSupplier
     * @return \Travelport\UniversalRecord\StructType\PreferredSuppliers
     */
    public function setRailSupplier(?array $railSupplier = null): self
    {
        $this->RailSupplier = $railSupplier;
        
        return $this;
    }
    /**
     * Add item to RailSupplier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSupplier $item
     * @return \Travelport\UniversalRecord\StructType\PreferredSuppliers
     */
    public function addToRailSupplier(\Travelport\UniversalRecord\StructType\RailSupplier $item): self
    {
        $this->RailSupplier[] = $item;
        
        return $this;
    }
}
