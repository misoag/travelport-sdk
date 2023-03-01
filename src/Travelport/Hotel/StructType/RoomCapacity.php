<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomCapacity StructType
 * Meta information extracted from the WSDL
 * - documentation: The maximum number of guests for a room or for each room in a package.
 * @subpackage Structs
 */
class RoomCapacity extends AbstractStructBase
{
    /**
     * The Capacity
     * Meta information extracted from the WSDL
     * - documentation: The maximum number of guests per room.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var int[]
     */
    public ?array $Capacity = null;
    /**
     * The IsPackage
     * Meta information extracted from the WSDL
     * - documentation: If true, the rooms are offered as a package by the aggregator.
     * - use: optional
     * @var bool|null
     */
    public ?bool $IsPackage = null;
    /**
     * Constructor method for RoomCapacity
     * @uses RoomCapacity::setCapacity()
     * @uses RoomCapacity::setIsPackage()
     * @param int[] $capacity
     * @param bool $isPackage
     */
    public function __construct(?array $capacity = null, ?bool $isPackage = null)
    {
        $this
            ->setCapacity($capacity)
            ->setIsPackage($isPackage);
    }
    /**
     * Get Capacity value
     * @return int[]
     */
    public function getCapacity(): ?array
    {
        return $this->Capacity;
    }
    /**
     * Set Capacity value
     * @param int[] $capacity
     * @return \Travelport\Hotel\StructType\RoomCapacity
     */
    public function setCapacity(?array $capacity = null): self
    {
        $this->Capacity = $capacity;
        
        return $this;
    }
    /**
     * Add item to Capacity value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Travelport\Hotel\StructType\RoomCapacity
     */
    public function addToCapacity(int $item): self
    {
        $this->Capacity[] = $item;
        
        return $this;
    }
    /**
     * Get IsPackage value
     * @return bool|null
     */
    public function getIsPackage(): ?bool
    {
        return $this->IsPackage;
    }
    /**
     * Set IsPackage value
     * @param bool $isPackage
     * @return \Travelport\Hotel\StructType\RoomCapacity
     */
    public function setIsPackage(?bool $isPackage = null): self
    {
        $this->IsPackage = $isPackage;
        
        return $this;
    }
}
