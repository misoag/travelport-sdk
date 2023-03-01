<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Child StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about a child guest.
 * @subpackage Structs
 */
class Child extends TypeGuestChildInformation
{
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef|null
     */
    public ?\Travelport\UniversalRecord\StructType\BookingTravelerRef $BookingTravelerRef = null;
    /**
     * Constructor method for Child
     * @uses Child::setBookingTravelerRef()
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $bookingTravelerRef
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\BookingTravelerRef $bookingTravelerRef = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef|null
     */
    public function getBookingTravelerRef(): ?\Travelport\UniversalRecord\StructType\BookingTravelerRef
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\Child
     */
    public function setBookingTravelerRef(?\Travelport\UniversalRecord\StructType\BookingTravelerRef $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
