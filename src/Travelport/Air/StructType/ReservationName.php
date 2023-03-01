<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\BookingTravelerRef|null
     */
    public ?\Travelport\Air\StructType\BookingTravelerRef $BookingTravelerRef = null;
    /**
     * The NameOverride
     * Meta information extracted from the WSDL
     * - choice: BookingTravelerRef | NameOverride
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: NameOverride
     * @var \Travelport\Air\StructType\NameOverride|null
     */
    public ?\Travelport\Air\StructType\NameOverride $NameOverride = null;
    /**
     * Constructor method for ReservationName
     * @uses ReservationName::setBookingTravelerRef()
     * @uses ReservationName::setNameOverride()
     * @param \Travelport\Air\StructType\BookingTravelerRef $bookingTravelerRef
     * @param \Travelport\Air\StructType\NameOverride $nameOverride
     */
    public function __construct(?\Travelport\Air\StructType\BookingTravelerRef $bookingTravelerRef = null, ?\Travelport\Air\StructType\NameOverride $nameOverride = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setNameOverride($nameOverride);
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Air\StructType\BookingTravelerRef|null
     */
    public function getBookingTravelerRef(): ?\Travelport\Air\StructType\BookingTravelerRef
    {
        return $this->BookingTravelerRef ?? null;
    }
    /**
     * Set BookingTravelerRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\BookingTravelerRef $bookingTravelerRef
     * @return \Travelport\Air\StructType\ReservationName
     */
    public function setBookingTravelerRef(?\Travelport\Air\StructType\BookingTravelerRef $bookingTravelerRef = null): self
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
     * @return \Travelport\Air\StructType\NameOverride|null
     */
    public function getNameOverride(): ?\Travelport\Air\StructType\NameOverride
    {
        return $this->NameOverride ?? null;
    }
    /**
     * Set NameOverride value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\NameOverride $nameOverride
     * @return \Travelport\Air\StructType\ReservationName
     */
    public function setNameOverride(?\Travelport\Air\StructType\NameOverride $nameOverride = null): self
    {
        if (is_null($nameOverride) || (is_array($nameOverride) && empty($nameOverride))) {
            unset($this->NameOverride);
        } else {
            $this->NameOverride = $nameOverride;
        }
        
        return $this;
    }
}
