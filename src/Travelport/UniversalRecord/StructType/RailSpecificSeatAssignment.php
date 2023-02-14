<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $CoachLabel;
    /**
     * The PlaceLabel
     * Meta information extracted from the WSDL
     * - documentation: The actual seat number or the close-to seat number based on the Assignment.
     * - use: required
     * @var string
     */
    protected string $PlaceLabel;
    /**
     * The Assignment
     * Meta information extracted from the WSDL
     * - documentation: Defines how the PlaceLabel should be applied. The values are 6.STP for actual seat or 2.STP for close-to seat. Default is 2.STP.
     * - use: required
     * @var string
     */
    protected string $Assignment;
    /**
     * The RailSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The rail segment to which this assignment belongs. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $RailSegmentRef;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: The BookingTraveler for this seat assignment. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $BookingTravelerRef;
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
     * @return \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment
     */
    public function setCoachLabel(string $coachLabel): self
    {
        // validation for constraint: string
        if (!is_null($coachLabel) && !is_string($coachLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coachLabel, true), gettype($coachLabel)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment
     */
    public function setPlaceLabel(string $placeLabel): self
    {
        // validation for constraint: string
        if (!is_null($placeLabel) && !is_string($placeLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($placeLabel, true), gettype($placeLabel)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment
     */
    public function setAssignment(string $assignment): self
    {
        // validation for constraint: string
        if (!is_null($assignment) && !is_string($assignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignment, true), gettype($assignment)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment
     */
    public function setRailSegmentRef(string $railSegmentRef): self
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
     * @return string
     */
    public function getBookingTravelerRef(): string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\RailSpecificSeatAssignment
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
}
