<?php

declare(strict_types=1);

namespace StructType;

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
     * @var \StructType\BookingTravelerRef|null
     */
    protected ?\StructType\BookingTravelerRef $BookingTravelerRef = null;
    /**
     * Constructor method for Child
     * @uses Child::setBookingTravelerRef()
     * @param \StructType\BookingTravelerRef $bookingTravelerRef
     */
    public function __construct(?\StructType\BookingTravelerRef $bookingTravelerRef = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get BookingTravelerRef value
     * @return \StructType\BookingTravelerRef|null
     */
    public function getBookingTravelerRef(): ?\StructType\BookingTravelerRef
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \StructType\BookingTravelerRef $bookingTravelerRef
     * @return \StructType\Child
     */
    public function setBookingTravelerRef(?\StructType\BookingTravelerRef $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
