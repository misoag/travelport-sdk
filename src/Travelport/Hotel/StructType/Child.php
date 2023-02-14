<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Hotel\StructType\BookingTravelerRef|null
     */
    protected ?\Travelport\Hotel\StructType\BookingTravelerRef $BookingTravelerRef = null;
    /**
     * Constructor method for Child
     * @uses Child::setBookingTravelerRef()
     * @param \Travelport\Hotel\StructType\BookingTravelerRef $bookingTravelerRef
     */
    public function __construct(?\Travelport\Hotel\StructType\BookingTravelerRef $bookingTravelerRef = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Hotel\StructType\BookingTravelerRef|null
     */
    public function getBookingTravelerRef(): ?\Travelport\Hotel\StructType\BookingTravelerRef
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\Hotel\StructType\BookingTravelerRef $bookingTravelerRef
     * @return \Travelport\Hotel\StructType\Child
     */
    public function setBookingTravelerRef(?\Travelport\Hotel\StructType\BookingTravelerRef $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
