<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef|null
     */
    public ?\Travelport\UniversalRecord\StructType\BookingTravelerRef $BookingTravelerRef = null;
    /**
     * The NameOverride
     * Meta information extracted from the WSDL
     * - choice: BookingTravelerRef | NameOverride
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: NameOverride
     * @var \Travelport\UniversalRecord\StructType\NameOverride|null
     */
    public ?\Travelport\UniversalRecord\StructType\NameOverride $NameOverride = null;
    /**
     * Constructor method for ReservationName
     * @uses ReservationName::setBookingTravelerRef()
     * @uses ReservationName::setNameOverride()
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\NameOverride $nameOverride
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\BookingTravelerRef $bookingTravelerRef = null, ?\Travelport\UniversalRecord\StructType\NameOverride $nameOverride = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setNameOverride($nameOverride);
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef|null
     */
    public function getBookingTravelerRef(): ?\Travelport\UniversalRecord\StructType\BookingTravelerRef
    {
        return $this->BookingTravelerRef ?? null;
    }
    /**
     * Set BookingTravelerRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\ReservationName
     */
    public function setBookingTravelerRef(?\Travelport\UniversalRecord\StructType\BookingTravelerRef $bookingTravelerRef = null): self
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
     * @return \Travelport\UniversalRecord\StructType\NameOverride|null
     */
    public function getNameOverride(): ?\Travelport\UniversalRecord\StructType\NameOverride
    {
        return $this->NameOverride ?? null;
    }
    /**
     * Set NameOverride value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\NameOverride $nameOverride
     * @return \Travelport\UniversalRecord\StructType\ReservationName
     */
    public function setNameOverride(?\Travelport\UniversalRecord\StructType\NameOverride $nameOverride = null): self
    {
        if (is_null($nameOverride) || (is_array($nameOverride) && empty($nameOverride))) {
            unset($this->NameOverride);
        } else {
            $this->NameOverride = $nameOverride;
        }
        
        return $this;
    }
}
