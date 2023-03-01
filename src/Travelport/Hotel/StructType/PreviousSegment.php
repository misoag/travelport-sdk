<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreviousSegment StructType
 * @subpackage Structs
 */
class PreviousSegment extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to AirSegment from an Air Reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeSegmentRef|null
     */
    public ?\Travelport\Hotel\StructType\TypeSegmentRef $AirSegmentRef = null;
    /**
     * The HotelReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Hotel reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeNonAirReservationRef|null
     */
    public ?\Travelport\Hotel\StructType\TypeNonAirReservationRef $HotelReservationRef = null;
    /**
     * The VehicleReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Vehicle reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeNonAirReservationRef|null
     */
    public ?\Travelport\Hotel\StructType\TypeNonAirReservationRef $VehicleReservationRef = null;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to PassiveSegment from a Passive Reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeSegmentRef|null
     */
    public ?\Travelport\Hotel\StructType\TypeSegmentRef $PassiveSegmentRef = null;
    /**
     * Constructor method for PreviousSegment
     * @uses PreviousSegment::setAirSegmentRef()
     * @uses PreviousSegment::setHotelReservationRef()
     * @uses PreviousSegment::setVehicleReservationRef()
     * @uses PreviousSegment::setPassiveSegmentRef()
     * @param \Travelport\Hotel\StructType\TypeSegmentRef $airSegmentRef
     * @param \Travelport\Hotel\StructType\TypeNonAirReservationRef $hotelReservationRef
     * @param \Travelport\Hotel\StructType\TypeNonAirReservationRef $vehicleReservationRef
     * @param \Travelport\Hotel\StructType\TypeSegmentRef $passiveSegmentRef
     */
    public function __construct(?\Travelport\Hotel\StructType\TypeSegmentRef $airSegmentRef = null, ?\Travelport\Hotel\StructType\TypeNonAirReservationRef $hotelReservationRef = null, ?\Travelport\Hotel\StructType\TypeNonAirReservationRef $vehicleReservationRef = null, ?\Travelport\Hotel\StructType\TypeSegmentRef $passiveSegmentRef = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setHotelReservationRef($hotelReservationRef)
            ->setVehicleReservationRef($vehicleReservationRef)
            ->setPassiveSegmentRef($passiveSegmentRef);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\Hotel\StructType\TypeSegmentRef|null
     */
    public function getAirSegmentRef(): ?\Travelport\Hotel\StructType\TypeSegmentRef
    {
        return $this->AirSegmentRef ?? null;
    }
    /**
     * Set AirSegmentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\TypeSegmentRef $airSegmentRef
     * @return \Travelport\Hotel\StructType\PreviousSegment
     */
    public function setAirSegmentRef(?\Travelport\Hotel\StructType\TypeSegmentRef $airSegmentRef = null): self
    {
        if (is_null($airSegmentRef) || (is_array($airSegmentRef) && empty($airSegmentRef))) {
            unset($this->AirSegmentRef);
        } else {
            $this->AirSegmentRef = $airSegmentRef;
        }
        
        return $this;
    }
    /**
     * Get HotelReservationRef value
     * @return \Travelport\Hotel\StructType\TypeNonAirReservationRef|null
     */
    public function getHotelReservationRef(): ?\Travelport\Hotel\StructType\TypeNonAirReservationRef
    {
        return $this->HotelReservationRef ?? null;
    }
    /**
     * Set HotelReservationRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\TypeNonAirReservationRef $hotelReservationRef
     * @return \Travelport\Hotel\StructType\PreviousSegment
     */
    public function setHotelReservationRef(?\Travelport\Hotel\StructType\TypeNonAirReservationRef $hotelReservationRef = null): self
    {
        if (is_null($hotelReservationRef) || (is_array($hotelReservationRef) && empty($hotelReservationRef))) {
            unset($this->HotelReservationRef);
        } else {
            $this->HotelReservationRef = $hotelReservationRef;
        }
        
        return $this;
    }
    /**
     * Get VehicleReservationRef value
     * @return \Travelport\Hotel\StructType\TypeNonAirReservationRef|null
     */
    public function getVehicleReservationRef(): ?\Travelport\Hotel\StructType\TypeNonAirReservationRef
    {
        return $this->VehicleReservationRef ?? null;
    }
    /**
     * Set VehicleReservationRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\TypeNonAirReservationRef $vehicleReservationRef
     * @return \Travelport\Hotel\StructType\PreviousSegment
     */
    public function setVehicleReservationRef(?\Travelport\Hotel\StructType\TypeNonAirReservationRef $vehicleReservationRef = null): self
    {
        if (is_null($vehicleReservationRef) || (is_array($vehicleReservationRef) && empty($vehicleReservationRef))) {
            unset($this->VehicleReservationRef);
        } else {
            $this->VehicleReservationRef = $vehicleReservationRef;
        }
        
        return $this;
    }
    /**
     * Get PassiveSegmentRef value
     * @return \Travelport\Hotel\StructType\TypeSegmentRef|null
     */
    public function getPassiveSegmentRef(): ?\Travelport\Hotel\StructType\TypeSegmentRef
    {
        return $this->PassiveSegmentRef ?? null;
    }
    /**
     * Set PassiveSegmentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\TypeSegmentRef $passiveSegmentRef
     * @return \Travelport\Hotel\StructType\PreviousSegment
     */
    public function setPassiveSegmentRef(?\Travelport\Hotel\StructType\TypeSegmentRef $passiveSegmentRef = null): self
    {
        if (is_null($passiveSegmentRef) || (is_array($passiveSegmentRef) && empty($passiveSegmentRef))) {
            unset($this->PassiveSegmentRef);
        } else {
            $this->PassiveSegmentRef = $passiveSegmentRef;
        }
        
        return $this;
    }
}
