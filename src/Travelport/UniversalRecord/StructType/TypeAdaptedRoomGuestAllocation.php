<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeAdaptedRoomGuestAllocation StructType
 * Meta information extracted from the WSDL
 * - documentation: The allocation of guests per room assigned by the aggregator or supplier (hotel property). Returned only when the requested guest allocation is different from the provider or supplier’s adapted guest allocation.
 * @subpackage Structs
 */
class TypeAdaptedRoomGuestAllocation extends AbstractStructBase
{
    /**
     * The Child
     * Meta information extracted from the WSDL
     * - documentation: Information about a child guest.
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeGuestChildInformation[]
     */
    public ?array $Child = null;
    /**
     * The NumberOfAdults
     * Meta information extracted from the WSDL
     * - documentation: The number of adult guests per room. Maximum number of adults may vary by supplier or aggregator.
     * @var int|null
     */
    public ?int $NumberOfAdults = null;
    /**
     * Constructor method for typeAdaptedRoomGuestAllocation
     * @uses TypeAdaptedRoomGuestAllocation::setChild()
     * @uses TypeAdaptedRoomGuestAllocation::setNumberOfAdults()
     * @param \Travelport\UniversalRecord\StructType\TypeGuestChildInformation[] $child
     * @param int $numberOfAdults
     */
    public function __construct(?array $child = null, ?int $numberOfAdults = null)
    {
        $this
            ->setChild($child)
            ->setNumberOfAdults($numberOfAdults);
    }
    /**
     * Get Child value
     * @return \Travelport\UniversalRecord\StructType\TypeGuestChildInformation[]
     */
    public function getChild(): ?array
    {
        return $this->Child;
    }
    /**
     * Set Child value
     * @param \Travelport\UniversalRecord\StructType\TypeGuestChildInformation[] $child
     * @return \Travelport\UniversalRecord\StructType\TypeAdaptedRoomGuestAllocation
     */
    public function setChild(?array $child = null): self
    {
        $this->Child = $child;
        
        return $this;
    }
    /**
     * Add item to Child value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeGuestChildInformation $item
     * @return \Travelport\UniversalRecord\StructType\TypeAdaptedRoomGuestAllocation
     */
    public function addToChild(\Travelport\UniversalRecord\StructType\TypeGuestChildInformation $item): self
    {
        $this->Child[] = $item;
        
        return $this;
    }
    /**
     * Get NumberOfAdults value
     * @return int|null
     */
    public function getNumberOfAdults(): ?int
    {
        return $this->NumberOfAdults;
    }
    /**
     * Set NumberOfAdults value
     * @param int $numberOfAdults
     * @return \Travelport\UniversalRecord\StructType\TypeAdaptedRoomGuestAllocation
     */
    public function setNumberOfAdults(?int $numberOfAdults = null): self
    {
        $this->NumberOfAdults = $numberOfAdults;
        
        return $this;
    }
}
