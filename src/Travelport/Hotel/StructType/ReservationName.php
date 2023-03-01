<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReservationName StructType
 * Meta information extracted from the WSDL
 * - documentation: To be used if the reservation name is other than booking travelers in the PNR | Container to represent reservation name as appears in GDS booking
 * @subpackage Structs
 */
class ReservationName extends AbstractStructBase
{
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - choice: BookingTravelerRef | NameOverride
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: BookingTravelerRef
     * @var \Travelport\Hotel\StructType\BookingTravelerRef|null
     */
    public ?\Travelport\Hotel\StructType\BookingTravelerRef $BookingTravelerRef = null;
    /**
     * The NameOverride
     * Meta information extracted from the WSDL
     * - choice: BookingTravelerRef | NameOverride
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: NameOverride
     * @var \Travelport\Hotel\StructType\NameOverride|null
     */
    public ?\Travelport\Hotel\StructType\NameOverride $NameOverride = null;
    /**
     * Constructor method for ReservationName
     * @uses ReservationName::setBookingTravelerRef()
     * @uses ReservationName::setNameOverride()
     * @param \Travelport\Hotel\StructType\BookingTravelerRef $bookingTravelerRef
     * @param \Travelport\Hotel\StructType\NameOverride $nameOverride
     */
    public function __construct(?\Travelport\Hotel\StructType\BookingTravelerRef $bookingTravelerRef = null, ?\Travelport\Hotel\StructType\NameOverride $nameOverride = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setNameOverride($nameOverride);
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Hotel\StructType\BookingTravelerRef|null
     */
    public function getBookingTravelerRef(): ?\Travelport\Hotel\StructType\BookingTravelerRef
    {
        return $this->BookingTravelerRef ?? null;
    }
    /**
     * Set BookingTravelerRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\BookingTravelerRef $bookingTravelerRef
     * @return \Travelport\Hotel\StructType\ReservationName
     */
    public function setBookingTravelerRef(?\Travelport\Hotel\StructType\BookingTravelerRef $bookingTravelerRef = null): self
    {
        if (is_null($bookingTravelerRef) || (is_array($bookingTravelerRef) && empty($bookingTravelerRef))) {
            unset($this->BookingTravelerRef);
        } else {
            $this->BookingTravelerRef = $bookingTravelerRef;
        }
        
        return $this;
    }
    /**
     * Get NameOverride value
     * @return \Travelport\Hotel\StructType\NameOverride|null
     */
    public function getNameOverride(): ?\Travelport\Hotel\StructType\NameOverride
    {
        return $this->NameOverride ?? null;
    }
    /**
     * Set NameOverride value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\NameOverride $nameOverride
     * @return \Travelport\Hotel\StructType\ReservationName
     */
    public function setNameOverride(?\Travelport\Hotel\StructType\NameOverride $nameOverride = null): self
    {
        if (is_null($nameOverride) || (is_array($nameOverride) && empty($nameOverride))) {
            unset($this->NameOverride);
        } else {
            $this->NameOverride = $nameOverride;
        }
        
        return $this;
    }
}
