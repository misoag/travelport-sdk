<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecificSeatAssignment StructType
 * Meta information extracted from the WSDL
 * - documentation: Request object used to specify a specific seat
 * @subpackage Structs
 */
class SpecificSeatAssignment extends AbstractStructBase
{
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: The passenger that this seat assignment is for | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $BookingTravelerRef;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The segment that we will assign this seat on | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $SegmentRef;
    /**
     * The SeatId
     * Meta information extracted from the WSDL
     * - documentation: The actual seat ID that is being requested. Special Characters are not supported in this field.
     * - use: required
     * @var string
     */
    protected string $SeatId;
    /**
     * The FlightDetailRef
     * Meta information extracted from the WSDL
     * - documentation: The Flight Detail ref of the AirSegment used when requesting seats on Change of Guage flights | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $FlightDetailRef = null;
    /**
     * The RailCoachNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - use: optional
     * @var string|null
     */
    protected ?string $RailCoachNumber = null;
    /**
     * Constructor method for SpecificSeatAssignment
     * @uses SpecificSeatAssignment::setBookingTravelerRef()
     * @uses SpecificSeatAssignment::setSegmentRef()
     * @uses SpecificSeatAssignment::setSeatId()
     * @uses SpecificSeatAssignment::setFlightDetailRef()
     * @uses SpecificSeatAssignment::setRailCoachNumber()
     * @param string $bookingTravelerRef
     * @param string $segmentRef
     * @param string $seatId
     * @param string $flightDetailRef
     * @param string $railCoachNumber
     */
    public function __construct(string $bookingTravelerRef, string $segmentRef, string $seatId, ?string $flightDetailRef = null, ?string $railCoachNumber = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setSegmentRef($segmentRef)
            ->setSeatId($seatId)
            ->setFlightDetailRef($flightDetailRef)
            ->setRailCoachNumber($railCoachNumber);
    }
    /**
     * Get BookingTravelerRef value
     * @return string
     */
    public function getBookingTravelerRef(): string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\Util\StructType\SpecificSeatAssignment
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string
     */
    public function getSegmentRef(): string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\Util\StructType\SpecificSeatAssignment
     */
    public function setSegmentRef(string $segmentRef): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get SeatId value
     * @return string
     */
    public function getSeatId(): string
    {
        return $this->SeatId;
    }
    /**
     * Set SeatId value
     * @param string $seatId
     * @return \Travelport\Util\StructType\SpecificSeatAssignment
     */
    public function setSeatId(string $seatId): self
    {
        // validation for constraint: string
        if (!is_null($seatId) && !is_string($seatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatId, true), gettype($seatId)), __LINE__);
        }
        $this->SeatId = $seatId;
        
        return $this;
    }
    /**
     * Get FlightDetailRef value
     * @return string|null
     */
    public function getFlightDetailRef(): ?string
    {
        return $this->FlightDetailRef;
    }
    /**
     * Set FlightDetailRef value
     * @param string $flightDetailRef
     * @return \Travelport\Util\StructType\SpecificSeatAssignment
     */
    public function setFlightDetailRef(?string $flightDetailRef = null): self
    {
        // validation for constraint: string
        if (!is_null($flightDetailRef) && !is_string($flightDetailRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightDetailRef, true), gettype($flightDetailRef)), __LINE__);
        }
        $this->FlightDetailRef = $flightDetailRef;
        
        return $this;
    }
    /**
     * Get RailCoachNumber value
     * @return string|null
     */
    public function getRailCoachNumber(): ?string
    {
        return $this->RailCoachNumber;
    }
    /**
     * Set RailCoachNumber value
     * @param string $railCoachNumber
     * @return \Travelport\Util\StructType\SpecificSeatAssignment
     */
    public function setRailCoachNumber(?string $railCoachNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($railCoachNumber) && !is_string($railCoachNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railCoachNumber, true), gettype($railCoachNumber)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($railCoachNumber) && mb_strlen((string) $railCoachNumber) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $railCoachNumber)), __LINE__);
        }
        $this->RailCoachNumber = $railCoachNumber;
        
        return $this;
    }
}
