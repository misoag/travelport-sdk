<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeGuestRoomInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference for the Booking Traveler. Used for Hotel Booking only. The value is arbitrary. | Information about guest to book.
 * @subpackage Structs
 */
class TypeGuestRoomInformation extends AbstractStructBase
{
    /**
     * The Adults
     * Meta information extracted from the WSDL
     * - documentation: The number of adult guests per room. Maximum number of adults may vary by supplier or aggregator.
     * @var int|null
     */
    public ?int $Adults = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The Child
     * Meta information extracted from the WSDL
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\Child[]
     */
    public ?array $Child = null;
    /**
     * Constructor method for typeGuestRoomInformation
     * @uses TypeGuestRoomInformation::setAdults()
     * @uses TypeGuestRoomInformation::setBookingTravelerRef()
     * @uses TypeGuestRoomInformation::setChild()
     * @param int $adults
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\Child[] $child
     */
    public function __construct(?int $adults = null, ?array $bookingTravelerRef = null, ?array $child = null)
    {
        $this
            ->setAdults($adults)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setChild($child);
    }
    /**
     * Get Adults value
     * @return int|null
     */
    public function getAdults(): ?int
    {
        return $this->Adults;
    }
    /**
     * Set Adults value
     * @param int $adults
     * @return \Travelport\UniversalRecord\StructType\TypeGuestRoomInformation
     */
    public function setAdults(?int $adults = null): self
    {
        $this->Adults = $adults;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\TypeGuestRoomInformation
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\TypeGuestRoomInformation
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get Child value
     * @return \Travelport\UniversalRecord\StructType\Child[]
     */
    public function getChild(): ?array
    {
        return $this->Child;
    }
    /**
     * Set Child value
     * @param \Travelport\UniversalRecord\StructType\Child[] $child
     * @return \Travelport\UniversalRecord\StructType\TypeGuestRoomInformation
     */
    public function setChild(?array $child = null): self
    {
        $this->Child = $child;
        
        return $this;
    }
    /**
     * Add item to Child value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Child $item
     * @return \Travelport\UniversalRecord\StructType\TypeGuestRoomInformation
     */
    public function addToChild(\Travelport\UniversalRecord\StructType\Child $item): self
    {
        $this->Child[] = $item;
        
        return $this;
    }
}
