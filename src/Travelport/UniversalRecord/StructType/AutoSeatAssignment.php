<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $SeatType;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The segment that this assignment belongs to | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentRef = null;
    /**
     * The Smoking
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the requested seat type should be a smoking seat.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Smoking = null;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - documentation: Indicates that this seat request is for group seating for all passengers. If no SegmentRef is included, group seating will be requested for all segments.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Group = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: The booking traveler that this seat assignment is for. If not entered, this applies to the primary booking traveler and other passengers are adjacent. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeReqSeat::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeReqSeat::getValidValues()
     * @throws InvalidArgumentException
     * @param string $seatType
     * @return \Travelport\UniversalRecord\StructType\AutoSeatAssignment
     */
    public function setSeatType(string $seatType): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeReqSeat::valueIsValid($seatType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeReqSeat', is_array($seatType) ? implode(', ', $seatType) : var_export($seatType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeReqSeat::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AutoSeatAssignment
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AutoSeatAssignment
     */
    public function setSmoking(?bool $smoking = false): self
    {
        // validation for constraint: boolean
        if (!is_null($smoking) && !is_bool($smoking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($smoking, true), gettype($smoking)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AutoSeatAssignment
     */
    public function setGroup(?bool $group = false): self
    {
        // validation for constraint: boolean
        if (!is_null($group) && !is_bool($group)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AutoSeatAssignment
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
