<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdaptedRoomGuestAllocation StructType
 * Meta information extracted from the WSDL
 * - documentation: This element defines how the aggregators or hotel property have allocated the guests to the rooms. Only displayed when Requested guest allocation is different from the Adapted room guest allocation.
 * - minOccurs: 0
 * @subpackage Structs
 */
class AdaptedRoomGuestAllocation extends AbstractStructBase
{
    /**
     * The Room
     * Meta information extracted from the WSDL
     * - documentation: Individual room. Multiple occurrences if there are multiple rooms in the request. Maximum number of rooms may vary by supplier or aggregator.
     * - maxOccurs: 9
     * @var \Travelport\UniversalRecord\StructType\TypeAdaptedRoomGuestAllocation[]
     */
    public ?array $Room = null;
    /**
     * Constructor method for AdaptedRoomGuestAllocation
     * @uses AdaptedRoomGuestAllocation::setRoom()
     * @param \Travelport\UniversalRecord\StructType\TypeAdaptedRoomGuestAllocation[] $room
     */
    public function __construct(?array $room = null)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get Room value
     * @return \Travelport\UniversalRecord\StructType\TypeAdaptedRoomGuestAllocation[]
     */
    public function getRoom(): ?array
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @param \Travelport\UniversalRecord\StructType\TypeAdaptedRoomGuestAllocation[] $room
     * @return \Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation
     */
    public function setRoom(?array $room = null): self
    {
        $this->Room = $room;
        
        return $this;
    }
    /**
     * Add item to Room value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeAdaptedRoomGuestAllocation $item
     * @return \Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation
     */
    public function addToRoom(\Travelport\UniversalRecord\StructType\TypeAdaptedRoomGuestAllocation $item): self
    {
        $this->Room[] = $item;
        
        return $this;
    }
}
