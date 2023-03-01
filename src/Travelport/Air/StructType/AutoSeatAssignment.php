<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoSeatAssignment StructType
 * Meta information extracted from the WSDL
 * - documentation: Request object used to request seats automatically by seat type
 * @subpackage Structs
 */
class AutoSeatAssignment extends AbstractStructBase
{
    /**
     * The SeatType
     * Meta information extracted from the WSDL
     * - documentation: The type of seat that is requested
     * - use: required
     * @var string
     */
    public string $SeatType;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The segment that this assignment belongs to | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SegmentRef = null;
    /**
     * The Smoking
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the requested seat type should be a smoking seat.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $Smoking = null;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - documentation: Indicates that this seat request is for group seating for all passengers. If no SegmentRef is included, group seating will be requested for all segments.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $Group = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: The booking traveler that this seat assignment is for. If not entered, this applies to the primary booking traveler and other passengers are adjacent. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * Constructor method for AutoSeatAssignment
     * @uses AutoSeatAssignment::setSeatType()
     * @uses AutoSeatAssignment::setSegmentRef()
     * @uses AutoSeatAssignment::setSmoking()
     * @uses AutoSeatAssignment::setGroup()
     * @uses AutoSeatAssignment::setBookingTravelerRef()
     * @param string $seatType
     * @param string $segmentRef
     * @param bool $smoking
     * @param bool $group
     * @param string $bookingTravelerRef
     */
    public function __construct(string $seatType, ?string $segmentRef = null, ?bool $smoking = false, ?bool $group = false, ?string $bookingTravelerRef = null)
    {
        $this
            ->setSeatType($seatType)
            ->setSegmentRef($segmentRef)
            ->setSmoking($smoking)
            ->setGroup($group)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get SeatType value
     * @return string
     */
    public function getSeatType(): string
    {
        return $this->SeatType;
    }
    /**
     * Set SeatType value
     * @param string $seatType
     * @return \Travelport\Air\StructType\AutoSeatAssignment
     */
    public function setSeatType(string $seatType): self
    {
        $this->SeatType = $seatType;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\Air\StructType\AutoSeatAssignment
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get Smoking value
     * @return bool|null
     */
    public function getSmoking(): ?bool
    {
        return $this->Smoking;
    }
    /**
     * Set Smoking value
     * @param bool $smoking
     * @return \Travelport\Air\StructType\AutoSeatAssignment
     */
    public function setSmoking(?bool $smoking = false): self
    {
        $this->Smoking = $smoking;
        
        return $this;
    }
    /**
     * Get Group value
     * @return bool|null
     */
    public function getGroup(): ?bool
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param bool $group
     * @return \Travelport\Air\StructType\AutoSeatAssignment
     */
    public function setGroup(?bool $group = false): self
    {
        $this->Group = $group;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\Air\StructType\AutoSeatAssignment
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
