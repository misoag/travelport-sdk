<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentSelect StructType
 * Meta information extracted from the WSDL
 * - documentation: To be used to pass the selected segment.
 * @subpackage Structs
 */
class SegmentSelect extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to AirSegment from an Air Reservation.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentRef[]
     */
    public ?array $AirSegmentRef = null;
    /**
     * The HotelReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Hotel reservation if it needs to be considered as Auxiliary segment
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[]
     */
    public ?array $HotelReservationRef = null;
    /**
     * The VehicleReservationRef
     * Meta information extracted from the WSDL
     * - documentation: Specify the locator code of Vehicle reservation if it needs to be considered as Auxiliary segment
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[]
     */
    public ?array $VehicleReservationRef = null;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to PassiveSegment from a Passive Reservation.Specify the passive segment if it needs to be considered as Auxiliary segment
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSegmentRef[]
     */
    public ?array $PassiveSegmentRef = null;
    /**
     * The AllConfirmedAir
     * Meta information extracted from the WSDL
     * - documentation: Set to true to consider all Confirmed segments including active and passive and set to false to discard confirmed segments
     * @var bool|null
     */
    public ?bool $AllConfirmedAir = null;
    /**
     * The AllWaitlistedAir
     * Meta information extracted from the WSDL
     * - documentation: Set to true to consider all Waitlisted segments and false to discard all waitlisted segments
     * @var bool|null
     */
    public ?bool $AllWaitlistedAir = null;
    /**
     * The AllHotel
     * Meta information extracted from the WSDL
     * - documentation: Set to true to consider all Hotel reservations as Auxiliary segment and false to discard all Hotel reservations
     * @var bool|null
     */
    public ?bool $AllHotel = null;
    /**
     * The AllVehicle
     * Meta information extracted from the WSDL
     * - documentation: Set to true to consider all Vehicle reservations as Auxiliary segment and false to discard all Vehicle reservations
     * @var bool|null
     */
    public ?bool $AllVehicle = null;
    /**
     * The AllPassive
     * Meta information extracted from the WSDL
     * - documentation: Set to true to consider all Passive segments as Auxiliary segment and false to discard passive segments
     * @var bool|null
     */
    public ?bool $AllPassive = null;
    /**
     * Constructor method for SegmentSelect
     * @uses SegmentSelect::setAirSegmentRef()
     * @uses SegmentSelect::setHotelReservationRef()
     * @uses SegmentSelect::setVehicleReservationRef()
     * @uses SegmentSelect::setPassiveSegmentRef()
     * @uses SegmentSelect::setAllConfirmedAir()
     * @uses SegmentSelect::setAllWaitlistedAir()
     * @uses SegmentSelect::setAllHotel()
     * @uses SegmentSelect::setAllVehicle()
     * @uses SegmentSelect::setAllPassive()
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef[] $airSegmentRef
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[] $hotelReservationRef
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[] $vehicleReservationRef
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef[] $passiveSegmentRef
     * @param bool $allConfirmedAir
     * @param bool $allWaitlistedAir
     * @param bool $allHotel
     * @param bool $allVehicle
     * @param bool $allPassive
     */
    public function __construct(?array $airSegmentRef = null, ?array $hotelReservationRef = null, ?array $vehicleReservationRef = null, ?array $passiveSegmentRef = null, ?bool $allConfirmedAir = null, ?bool $allWaitlistedAir = null, ?bool $allHotel = null, ?bool $allVehicle = null, ?bool $allPassive = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setHotelReservationRef($hotelReservationRef)
            ->setVehicleReservationRef($vehicleReservationRef)
            ->setPassiveSegmentRef($passiveSegmentRef)
            ->setAllConfirmedAir($allConfirmedAir)
            ->setAllWaitlistedAir($allWaitlistedAir)
            ->setAllHotel($allHotel)
            ->setAllVehicle($allVehicle)
            ->setAllPassive($allPassive);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\TypeSegmentRef $item): self
    {
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get HotelReservationRef value
     * @return \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[]
     */
    public function getHotelReservationRef(): ?array
    {
        return $this->HotelReservationRef;
    }
    /**
     * Set HotelReservationRef value
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[] $hotelReservationRef
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setHotelReservationRef(?array $hotelReservationRef = null): self
    {
        $this->HotelReservationRef = $hotelReservationRef;
        
        return $this;
    }
    /**
     * Add item to HotelReservationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef $item
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function addToHotelReservationRef(\Travelport\UniversalRecord\StructType\TypeNonAirReservationRef $item): self
    {
        $this->HotelReservationRef[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleReservationRef value
     * @return \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[]
     */
    public function getVehicleReservationRef(): ?array
    {
        return $this->VehicleReservationRef;
    }
    /**
     * Set VehicleReservationRef value
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef[] $vehicleReservationRef
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setVehicleReservationRef(?array $vehicleReservationRef = null): self
    {
        $this->VehicleReservationRef = $vehicleReservationRef;
        
        return $this;
    }
    /**
     * Add item to VehicleReservationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeNonAirReservationRef $item
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function addToVehicleReservationRef(\Travelport\UniversalRecord\StructType\TypeNonAirReservationRef $item): self
    {
        $this->VehicleReservationRef[] = $item;
        
        return $this;
    }
    /**
     * Get PassiveSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentRef[]
     */
    public function getPassiveSegmentRef(): ?array
    {
        return $this->PassiveSegmentRef;
    }
    /**
     * Set PassiveSegmentRef value
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef[] $passiveSegmentRef
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setPassiveSegmentRef(?array $passiveSegmentRef = null): self
    {
        $this->PassiveSegmentRef = $passiveSegmentRef;
        
        return $this;
    }
    /**
     * Add item to PassiveSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function addToPassiveSegmentRef(\Travelport\UniversalRecord\StructType\TypeSegmentRef $item): self
    {
        $this->PassiveSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get AllConfirmedAir value
     * @return bool|null
     */
    public function getAllConfirmedAir(): ?bool
    {
        return $this->AllConfirmedAir;
    }
    /**
     * Set AllConfirmedAir value
     * @param bool $allConfirmedAir
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAllConfirmedAir(?bool $allConfirmedAir = null): self
    {
        $this->AllConfirmedAir = $allConfirmedAir;
        
        return $this;
    }
    /**
     * Get AllWaitlistedAir value
     * @return bool|null
     */
    public function getAllWaitlistedAir(): ?bool
    {
        return $this->AllWaitlistedAir;
    }
    /**
     * Set AllWaitlistedAir value
     * @param bool $allWaitlistedAir
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAllWaitlistedAir(?bool $allWaitlistedAir = null): self
    {
        $this->AllWaitlistedAir = $allWaitlistedAir;
        
        return $this;
    }
    /**
     * Get AllHotel value
     * @return bool|null
     */
    public function getAllHotel(): ?bool
    {
        return $this->AllHotel;
    }
    /**
     * Set AllHotel value
     * @param bool $allHotel
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAllHotel(?bool $allHotel = null): self
    {
        $this->AllHotel = $allHotel;
        
        return $this;
    }
    /**
     * Get AllVehicle value
     * @return bool|null
     */
    public function getAllVehicle(): ?bool
    {
        return $this->AllVehicle;
    }
    /**
     * Set AllVehicle value
     * @param bool $allVehicle
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAllVehicle(?bool $allVehicle = null): self
    {
        $this->AllVehicle = $allVehicle;
        
        return $this;
    }
    /**
     * Get AllPassive value
     * @return bool|null
     */
    public function getAllPassive(): ?bool
    {
        return $this->AllPassive;
    }
    /**
     * Set AllPassive value
     * @param bool $allPassive
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect
     */
    public function setAllPassive(?bool $allPassive = null): self
    {
        $this->AllPassive = $allPassive;
        
        return $this;
    }
}
