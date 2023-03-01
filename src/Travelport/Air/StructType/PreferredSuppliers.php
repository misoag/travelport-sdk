<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\RailSupplier[]
     */
    public ?array $RailSupplier = null;
    /**
     * Constructor method for PreferredSuppliers
     * @uses PreferredSuppliers::setRailSupplier()
     * @param \Travelport\Air\StructType\RailSupplier[] $railSupplier
     */
    public function __construct(?array $railSupplier = null)
    {
        $this
            ->setRailSupplier($railSupplier);
    }
    /**
     * Get RailSupplier value
     * @return \Travelport\Air\StructType\RailSupplier[]
     */
    public function getRailSupplier(): ?array
    {
        return $this->RailSupplier;
    }
    /**
     * Set RailSupplier value
     * @param \Travelport\Air\StructType\RailSupplier[] $railSupplier
     * @return \Travelport\Air\StructType\PreferredSuppliers
     */
    public function setRailSupplier(?array $railSupplier = null): self
    {
        $this->RailSupplier = $railSupplier;
        
        return $this;
    }
    /**
     * Add item to RailSupplier value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailSupplier $item
     * @return \Travelport\Air\StructType\PreferredSuppliers
     */
    public function addToRailSupplier(\Travelport\Air\StructType\RailSupplier $item): self
    {
        $this->RailSupplier[] = $item;
        
        return $this;
    }
}
