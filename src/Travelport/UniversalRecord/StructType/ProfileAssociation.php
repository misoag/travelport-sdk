<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $TravelerID;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Booking Traveler associated with Profile. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $BookingTravelerRef;
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
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
