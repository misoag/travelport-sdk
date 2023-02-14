<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileAssociation StructType
 * Meta information extracted from the WSDL
 * - documentation: Profile information associated with SavedTrip.
 * @subpackage Structs
 */
class ProfileAssociation extends AbstractStructBase
{
    /**
     * The TravelerID
     * Meta information extracted from the WSDL
     * - documentation: Traveler ID associated with saved Trip. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $TravelerID;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Booking Traveler associated with Profile. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $BookingTravelerRef;
    /**
     * Constructor method for ProfileAssociation
     * @uses ProfileAssociation::setTravelerID()
     * @uses ProfileAssociation::setBookingTravelerRef()
     * @param string $travelerID
     * @param string $bookingTravelerRef
     */
    public function __construct(string $travelerID, string $bookingTravelerRef)
    {
        $this
            ->setTravelerID($travelerID)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get TravelerID value
     * @return string
     */
    public function getTravelerID(): string
    {
        return $this->TravelerID;
    }
    /**
     * Set TravelerID value
     * @param string $travelerID
     * @return \Travelport\UniversalRecord\StructType\ProfileAssociation
     */
    public function setTravelerID(string $travelerID): self
    {
        // validation for constraint: string
        if (!is_null($travelerID) && !is_string($travelerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerID, true), gettype($travelerID)), __LINE__);
        }
        $this->TravelerID = $travelerID;
        
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
     * @return \Travelport\UniversalRecord\StructType\ProfileAssociation
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
