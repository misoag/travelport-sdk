<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailSpecificSeatAssignment StructType
 * Meta information extracted from the WSDL
 * - documentation: Request object used to request a specific coach and seat number or a seat near-to a specific seat number.
 * @subpackage Structs
 */
class RailSpecificSeatAssignment extends AbstractStructBase
{
    /**
     * The CoachLabel
     * Meta information extracted from the WSDL
     * - documentation: The coach number of the train being requested.
     * - use: required
     * @var string
     */
    public string $CoachLabel;
    /**
     * The PlaceLabel
     * Meta information extracted from the WSDL
     * - documentation: The actual seat number or the close-to seat number based on the Assignment.
     * - use: required
     * @var string
     */
    public string $PlaceLabel;
    /**
     * The Assignment
     * Meta information extracted from the WSDL
     * - documentation: Defines how the PlaceLabel should be applied. The values are 6.STP for actual seat or 2.STP for close-to seat. Default is 2.STP.
     * - use: required
     * @var string
     */
    public string $Assignment;
    /**
     * The RailSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The rail segment to which this assignment belongs. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $RailSegmentRef;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: The BookingTraveler for this seat assignment. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $BookingTravelerRef;
    /**
     * Constructor method for RailSpecificSeatAssignment
     * @uses RailSpecificSeatAssignment::setCoachLabel()
     * @uses RailSpecificSeatAssignment::setPlaceLabel()
     * @uses RailSpecificSeatAssignment::setAssignment()
     * @uses RailSpecificSeatAssignment::setRailSegmentRef()
     * @uses RailSpecificSeatAssignment::setBookingTravelerRef()
     * @param string $coachLabel
     * @param string $placeLabel
     * @param string $assignment
     * @param string $railSegmentRef
     * @param string $bookingTravelerRef
     */
    public function __construct(string $coachLabel, string $placeLabel, string $assignment, string $railSegmentRef, string $bookingTravelerRef)
    {
        $this
            ->setCoachLabel($coachLabel)
            ->setPlaceLabel($placeLabel)
            ->setAssignment($assignment)
            ->setRailSegmentRef($railSegmentRef)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get CoachLabel value
     * @return string
     */
    public function getCoachLabel(): string
    {
        return $this->CoachLabel;
    }
    /**
     * Set CoachLabel value
     * @param string $coachLabel
     * @return \Travelport\Air\StructType\RailSpecificSeatAssignment
     */
    public function setCoachLabel(string $coachLabel): self
    {
        $this->CoachLabel = $coachLabel;
        
        return $this;
    }
    /**
     * Get PlaceLabel value
     * @return string
     */
    public function getPlaceLabel(): string
    {
        return $this->PlaceLabel;
    }
    /**
     * Set PlaceLabel value
     * @param string $placeLabel
     * @return \Travelport\Air\StructType\RailSpecificSeatAssignment
     */
    public function setPlaceLabel(string $placeLabel): self
    {
        $this->PlaceLabel = $placeLabel;
        
        return $this;
    }
    /**
     * Get Assignment value
     * @return string
     */
    public function getAssignment(): string
    {
        return $this->Assignment;
    }
    /**
     * Set Assignment value
     * @param string $assignment
     * @return \Travelport\Air\StructType\RailSpecificSeatAssignment
     */
    public function setAssignment(string $assignment): self
    {
        $this->Assignment = $assignment;
        
        return $this;
    }
    /**
     * Get RailSegmentRef value
     * @return string
     */
    public function getRailSegmentRef(): string
    {
        return $this->RailSegmentRef;
    }
    /**
     * Set RailSegmentRef value
     * @param string $railSegmentRef
     * @return \Travelport\Air\StructType\RailSpecificSeatAssignment
     */
    public function setRailSegmentRef(string $railSegmentRef): self
    {
        $this->RailSegmentRef = $railSegmentRef;
        
        return $this;
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
     * @return \Travelport\Air\StructType\RailSpecificSeatAssignment
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
