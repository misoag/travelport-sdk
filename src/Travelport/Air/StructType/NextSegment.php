<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NextSegment StructType
 * @subpackage Structs
 */
class NextSegment extends AbstractStructBase
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
     * @var \Travelport\Air\StructType\TypeSegmentRef|null
     */
    public ?\Travelport\Air\StructType\TypeSegmentRef $AirSegmentRef = null;
    /**
     * The HotelReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Hotel reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeNonAirReservationRef|null
     */
    public ?\Travelport\Air\StructType\TypeNonAirReservationRef $HotelReservationRef = null;
    /**
     * The VehicleReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Vehicle reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeNonAirReservationRef|null
     */
    public ?\Travelport\Air\StructType\TypeNonAirReservationRef $VehicleReservationRef = null;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to PassiveSegment from a Passive Reservation.
     * - choice: AirSegmentRef | HotelReservationRef | VehicleReservationRef | PassiveSegmentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeSegmentRef|null
     */
    public ?\Travelport\Air\StructType\TypeSegmentRef $PassiveSegmentRef = null;
    /**
     * Constructor method for NextSegment
     * @uses NextSegment::setAirSegmentRef()
     * @uses NextSegment::setHotelReservationRef()
     * @uses NextSegment::setVehicleReservationRef()
     * @uses NextSegment::setPassiveSegmentRef()
     * @param \Travelport\Air\StructType\TypeSegmentRef $airSegmentRef
     * @param \Travelport\Air\StructType\TypeNonAirReservationRef $hotelReservationRef
     * @param \Travelport\Air\StructType\TypeNonAirReservationRef $vehicleReservationRef
     * @param \Travelport\Air\StructType\TypeSegmentRef $passiveSegmentRef
     */
    public function __construct(?\Travelport\Air\StructType\TypeSegmentRef $airSegmentRef = null, ?\Travelport\Air\StructType\TypeNonAirReservationRef $hotelReservationRef = null, ?\Travelport\Air\StructType\TypeNonAirReservationRef $vehicleReservationRef = null, ?\Travelport\Air\StructType\TypeSegmentRef $passiveSegmentRef = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setHotelReservationRef($hotelReservationRef)
            ->setVehicleReservationRef($vehicleReservationRef)
            ->setPassiveSegmentRef($passiveSegmentRef);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\Air\StructType\TypeSegmentRef|null
     */
    public function getAirSegmentRef(): ?\Travelport\Air\StructType\TypeSegmentRef
    {
        return $this->AirSegmentRef ?? null;
    }
    /**
     * Set AirSegmentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\TypeSegmentRef $airSegmentRef
     * @return \Travelport\Air\StructType\NextSegment
     */
    public function setAirSegmentRef(?\Travelport\Air\StructType\TypeSegmentRef $airSegmentRef = null): self
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
     * @return \Travelport\Air\StructType\TypeNonAirReservationRef|null
     */
    public function getHotelReservationRef(): ?\Travelport\Air\StructType\TypeNonAirReservationRef
    {
        return $this->HotelReservationRef ?? null;
    }
    /**
     * Set HotelReservationRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\TypeNonAirReservationRef $hotelReservationRef
     * @return \Travelport\Air\StructType\NextSegment
     */
    public function setHotelReservationRef(?\Travelport\Air\StructType\TypeNonAirReservationRef $hotelReservationRef = null): self
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
     * @return \Travelport\Air\StructType\TypeNonAirReservationRef|null
     */
    public function getVehicleReservationRef(): ?\Travelport\Air\StructType\TypeNonAirReservationRef
    {
        return $this->VehicleReservationRef ?? null;
    }
    /**
     * Set VehicleReservationRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\TypeNonAirReservationRef $vehicleReservationRef
     * @return \Travelport\Air\StructType\NextSegment
     */
    public function setVehicleReservationRef(?\Travelport\Air\StructType\TypeNonAirReservationRef $vehicleReservationRef = null): self
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
     * @return \Travelport\Air\StructType\TypeSegmentRef|null
     */
    public function getPassiveSegmentRef(): ?\Travelport\Air\StructType\TypeSegmentRef
    {
        return $this->PassiveSegmentRef ?? null;
    }
    /**
     * Set PassiveSegmentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\TypeSegmentRef $passiveSegmentRef
     * @return \Travelport\Air\StructType\NextSegment
     */
    public function setPassiveSegmentRef(?\Travelport\Air\StructType\TypeSegmentRef $passiveSegmentRef = null): self
    {
        if (is_null($passiveSegmentRef) || (is_array($passiveSegmentRef) && empty($passiveSegmentRef))) {
            unset($this->PassiveSegmentRef);
        } else {
            $this->PassiveSegmentRef = $passiveSegmentRef;
        }
        
        return $this;
    }
}
