<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailAutoSeatAssignment StructType
 * Meta information extracted from the WSDL
 * - documentation: Request object used to request seats automatically by seat type
 * @subpackage Structs
 */
class RailAutoSeatAssignment extends AbstractStructBase
{
    /**
     * The SeatType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: required
     * @var string
     */
    protected string $SeatType;
    /**
     * The SeatValue
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: required
     * @var string
     */
    protected string $SeatValue;
    /**
     * The RailSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The rail segment that this assignment belongs to | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RailSegmentRef = null;
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
     * Constructor method for RailAutoSeatAssignment
     * @uses RailAutoSeatAssignment::setSeatType()
     * @uses RailAutoSeatAssignment::setSeatValue()
     * @uses RailAutoSeatAssignment::setRailSegmentRef()
     * @uses RailAutoSeatAssignment::setBookingTravelerRef()
     * @param string $seatType
     * @param string $seatValue
     * @param string $railSegmentRef
     * @param string $bookingTravelerRef
     */
    public function __construct(string $seatType, string $seatValue, ?string $railSegmentRef = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setSeatType($seatType)
            ->setSeatValue($seatValue)
            ->setRailSegmentRef($railSegmentRef)
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
     * @return \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment
     */
    public function setSeatType(string $seatType): self
    {
        // validation for constraint: string
        if (!is_null($seatType) && !is_string($seatType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatType, true), gettype($seatType)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($seatType) && mb_strlen((string) $seatType) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $seatType)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($seatType) && mb_strlen((string) $seatType) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $seatType)), __LINE__);
        }
        $this->SeatType = $seatType;
        
        return $this;
    }
    /**
     * Get SeatValue value
     * @return string
     */
    public function getSeatValue(): string
    {
        return $this->SeatValue;
    }
    /**
     * Set SeatValue value
     * @param string $seatValue
     * @return \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment
     */
    public function setSeatValue(string $seatValue): self
    {
        // validation for constraint: string
        if (!is_null($seatValue) && !is_string($seatValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatValue, true), gettype($seatValue)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($seatValue) && mb_strlen((string) $seatValue) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $seatValue)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($seatValue) && mb_strlen((string) $seatValue) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $seatValue)), __LINE__);
        }
        $this->SeatValue = $seatValue;
        
        return $this;
    }
    /**
     * Get RailSegmentRef value
     * @return string|null
     */
    public function getRailSegmentRef(): ?string
    {
        return $this->RailSegmentRef;
    }
    /**
     * Set RailSegmentRef value
     * @param string $railSegmentRef
     * @return \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment
     */
    public function setRailSegmentRef(?string $railSegmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($railSegmentRef) && !is_string($railSegmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railSegmentRef, true), gettype($railSegmentRef)), __LINE__);
        }
        $this->RailSegmentRef = $railSegmentRef;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailAutoSeatAssignment
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
