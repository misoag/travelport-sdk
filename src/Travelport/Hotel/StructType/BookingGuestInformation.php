<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingGuestInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about requested rooms and guests allocation.
 * @subpackage Structs
 */
class BookingGuestInformation extends AbstractStructBase
{
    /**
     * The Room
     * Meta information extracted from the WSDL
     * - documentation: Individual room. Multiple occurrences if there are multiple rooms in the request. Maximum number of rooms may vary by supplier or aggregator.
     * - maxOccurs: 9
     * @var \Travelport\Hotel\StructType\TypeGuestRoomInformation[]
     */
    public ?array $Room = null;
    /**
     * Constructor method for BookingGuestInformation
     * @uses BookingGuestInformation::setRoom()
     * @param \Travelport\Hotel\StructType\TypeGuestRoomInformation[] $room
     */
    public function __construct(?array $room = null)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get Room value
     * @return \Travelport\Hotel\StructType\TypeGuestRoomInformation[]
     */
    public function getRoom(): ?array
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @param \Travelport\Hotel\StructType\TypeGuestRoomInformation[] $room
     * @return \Travelport\Hotel\StructType\BookingGuestInformation
     */
    public function setRoom(?array $room = null): self
    {
        $this->Room = $room;
        
        return $this;
    }
    /**
     * Add item to Room value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeGuestRoomInformation $item
     * @return \Travelport\Hotel\StructType\BookingGuestInformation
     */
    public function addToRoom(\Travelport\Hotel\StructType\TypeGuestRoomInformation $item): self
    {
        $this->Room[] = $item;
        
        return $this;
    }
}
