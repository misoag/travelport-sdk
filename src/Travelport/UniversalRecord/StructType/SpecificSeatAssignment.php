<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $BookingTravelerRef;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The segment that we will assign this seat on | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $SegmentRef;
    /**
     * The SeatId
     * Meta information extracted from the WSDL
     * - documentation: The actual seat ID that is being requested. Special Characters are not supported in this field.
     * - use: required
     * @var string
     */
    public string $SeatId;
    /**
     * The FlightDetailRef
     * Meta information extracted from the WSDL
     * - documentation: The Flight Detail ref of the AirSegment used when requesting seats on Change of Guage flights | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $FlightDetailRef = null;
    /**
     * The RailCoachNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - use: optional
     * @var string|null
     */
    public ?string $RailCoachNumber = null;
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
     * @return \Travelport\UniversalRecord\StructType\SpecificSeatAssignment
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\SpecificSeatAssignment
     */
    public function setSegmentRef(string $segmentRef): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\SpecificSeatAssignment
     */
    public function setSeatId(string $seatId): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\SpecificSeatAssignment
     */
    public function setFlightDetailRef(?string $flightDetailRef = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\SpecificSeatAssignment
     */
    public function setRailCoachNumber(?string $railCoachNumber = null): self
    {
        $this->RailCoachNumber = $railCoachNumber;
        
        return $this;
    }
}
