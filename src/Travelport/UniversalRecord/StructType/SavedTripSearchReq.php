<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to retrieve a summary information for reservations under a SavedTrip
 * @subpackage Structs
 */
class SavedTripSearchReq extends BaseReq
{
    /**
     * The SavedTripSearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SavedTripSearchModifiers
     * @var \Travelport\UniversalRecord\StructType\SavedTripSearchModifiers|null
     */
    protected ?\Travelport\UniversalRecord\StructType\SavedTripSearchModifiers $SavedTripSearchModifiers = null;
    /**
     * The TravelerCriteria
     * @var \Travelport\UniversalRecord\StructType\TravelerCriteria|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TravelerCriteria $TravelerCriteria = null;
    /**
     * The SearchAgent
     * @var \Travelport\UniversalRecord\StructType\SearchAgent|null
     */
    protected ?\Travelport\UniversalRecord\StructType\SearchAgent $SearchAgent = null;
    /**
     * The AirReservationCriteria
     * @var \Travelport\UniversalRecord\StructType\AirReservationCriteria|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirReservationCriteria $AirReservationCriteria = null;
    /**
     * The HotelReservationCriteria
     * @var \Travelport\UniversalRecord\StructType\HotelReservationCriteria|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelReservationCriteria $HotelReservationCriteria = null;
    /**
     * The VehicleReservationCriteria
     * @var \Travelport\UniversalRecord\StructType\VehicleReservationCriteria|null
     */
    protected ?\Travelport\UniversalRecord\StructType\VehicleReservationCriteria $VehicleReservationCriteria = null;
    /**
     * The RailReservationCriteria
     * @var \Travelport\UniversalRecord\StructType\RailReservationCriteria|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RailReservationCriteria $RailReservationCriteria = null;
    /**
     * The RecordStatus
     * @var string|null
     */
    protected ?string $RecordStatus = null;
    /**
     * Constructor method for SavedTripSearchReq
     * @uses SavedTripSearchReq::setSavedTripSearchModifiers()
     * @uses SavedTripSearchReq::setTravelerCriteria()
     * @uses SavedTripSearchReq::setSearchAgent()
     * @uses SavedTripSearchReq::setAirReservationCriteria()
     * @uses SavedTripSearchReq::setHotelReservationCriteria()
     * @uses SavedTripSearchReq::setVehicleReservationCriteria()
     * @uses SavedTripSearchReq::setRailReservationCriteria()
     * @uses SavedTripSearchReq::setRecordStatus()
     * @param \Travelport\UniversalRecord\StructType\SavedTripSearchModifiers $savedTripSearchModifiers
     * @param \Travelport\UniversalRecord\StructType\TravelerCriteria $travelerCriteria
     * @param \Travelport\UniversalRecord\StructType\SearchAgent $searchAgent
     * @param \Travelport\UniversalRecord\StructType\AirReservationCriteria $airReservationCriteria
     * @param \Travelport\UniversalRecord\StructType\HotelReservationCriteria $hotelReservationCriteria
     * @param \Travelport\UniversalRecord\StructType\VehicleReservationCriteria $vehicleReservationCriteria
     * @param \Travelport\UniversalRecord\StructType\RailReservationCriteria $railReservationCriteria
     * @param string $recordStatus
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\SavedTripSearchModifiers $savedTripSearchModifiers = null, ?\Travelport\UniversalRecord\StructType\TravelerCriteria $travelerCriteria = null, ?\Travelport\UniversalRecord\StructType\SearchAgent $searchAgent = null, ?\Travelport\UniversalRecord\StructType\AirReservationCriteria $airReservationCriteria = null, ?\Travelport\UniversalRecord\StructType\HotelReservationCriteria $hotelReservationCriteria = null, ?\Travelport\UniversalRecord\StructType\VehicleReservationCriteria $vehicleReservationCriteria = null, ?\Travelport\UniversalRecord\StructType\RailReservationCriteria $railReservationCriteria = null, ?string $recordStatus = null)
    {
        $this
            ->setSavedTripSearchModifiers($savedTripSearchModifiers)
            ->setTravelerCriteria($travelerCriteria)
            ->setSearchAgent($searchAgent)
            ->setAirReservationCriteria($airReservationCriteria)
            ->setHotelReservationCriteria($hotelReservationCriteria)
            ->setVehicleReservationCriteria($vehicleReservationCriteria)
            ->setRailReservationCriteria($railReservationCriteria)
            ->setRecordStatus($recordStatus);
    }
    /**
     * Get SavedTripSearchModifiers value
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchModifiers|null
     */
    public function getSavedTripSearchModifiers(): ?\Travelport\UniversalRecord\StructType\SavedTripSearchModifiers
    {
        return $this->SavedTripSearchModifiers;
    }
    /**
     * Set SavedTripSearchModifiers value
     * @param \Travelport\UniversalRecord\StructType\SavedTripSearchModifiers $savedTripSearchModifiers
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchReq
     */
    public function setSavedTripSearchModifiers(?\Travelport\UniversalRecord\StructType\SavedTripSearchModifiers $savedTripSearchModifiers = null): self
    {
        $this->SavedTripSearchModifiers = $savedTripSearchModifiers;
        
        return $this;
    }
    /**
     * Get TravelerCriteria value
     * @return \Travelport\UniversalRecord\StructType\TravelerCriteria|null
     */
    public function getTravelerCriteria(): ?\Travelport\UniversalRecord\StructType\TravelerCriteria
    {
        return $this->TravelerCriteria;
    }
    /**
     * Set TravelerCriteria value
     * @param \Travelport\UniversalRecord\StructType\TravelerCriteria $travelerCriteria
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchReq
     */
    public function setTravelerCriteria(?\Travelport\UniversalRecord\StructType\TravelerCriteria $travelerCriteria = null): self
    {
        $this->TravelerCriteria = $travelerCriteria;
        
        return $this;
    }
    /**
     * Get SearchAgent value
     * @return \Travelport\UniversalRecord\StructType\SearchAgent|null
     */
    public function getSearchAgent(): ?\Travelport\UniversalRecord\StructType\SearchAgent
    {
        return $this->SearchAgent;
    }
    /**
     * Set SearchAgent value
     * @param \Travelport\UniversalRecord\StructType\SearchAgent $searchAgent
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchReq
     */
    public function setSearchAgent(?\Travelport\UniversalRecord\StructType\SearchAgent $searchAgent = null): self
    {
        $this->SearchAgent = $searchAgent;
        
        return $this;
    }
    /**
     * Get AirReservationCriteria value
     * @return \Travelport\UniversalRecord\StructType\AirReservationCriteria|null
     */
    public function getAirReservationCriteria(): ?\Travelport\UniversalRecord\StructType\AirReservationCriteria
    {
        return $this->AirReservationCriteria;
    }
    /**
     * Set AirReservationCriteria value
     * @param \Travelport\UniversalRecord\StructType\AirReservationCriteria $airReservationCriteria
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchReq
     */
    public function setAirReservationCriteria(?\Travelport\UniversalRecord\StructType\AirReservationCriteria $airReservationCriteria = null): self
    {
        $this->AirReservationCriteria = $airReservationCriteria;
        
        return $this;
    }
    /**
     * Get HotelReservationCriteria value
     * @return \Travelport\UniversalRecord\StructType\HotelReservationCriteria|null
     */
    public function getHotelReservationCriteria(): ?\Travelport\UniversalRecord\StructType\HotelReservationCriteria
    {
        return $this->HotelReservationCriteria;
    }
    /**
     * Set HotelReservationCriteria value
     * @param \Travelport\UniversalRecord\StructType\HotelReservationCriteria $hotelReservationCriteria
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchReq
     */
    public function setHotelReservationCriteria(?\Travelport\UniversalRecord\StructType\HotelReservationCriteria $hotelReservationCriteria = null): self
    {
        $this->HotelReservationCriteria = $hotelReservationCriteria;
        
        return $this;
    }
    /**
     * Get VehicleReservationCriteria value
     * @return \Travelport\UniversalRecord\StructType\VehicleReservationCriteria|null
     */
    public function getVehicleReservationCriteria(): ?\Travelport\UniversalRecord\StructType\VehicleReservationCriteria
    {
        return $this->VehicleReservationCriteria;
    }
    /**
     * Set VehicleReservationCriteria value
     * @param \Travelport\UniversalRecord\StructType\VehicleReservationCriteria $vehicleReservationCriteria
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchReq
     */
    public function setVehicleReservationCriteria(?\Travelport\UniversalRecord\StructType\VehicleReservationCriteria $vehicleReservationCriteria = null): self
    {
        $this->VehicleReservationCriteria = $vehicleReservationCriteria;
        
        return $this;
    }
    /**
     * Get RailReservationCriteria value
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria|null
     */
    public function getRailReservationCriteria(): ?\Travelport\UniversalRecord\StructType\RailReservationCriteria
    {
        return $this->RailReservationCriteria;
    }
    /**
     * Set RailReservationCriteria value
     * @param \Travelport\UniversalRecord\StructType\RailReservationCriteria $railReservationCriteria
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchReq
     */
    public function setRailReservationCriteria(?\Travelport\UniversalRecord\StructType\RailReservationCriteria $railReservationCriteria = null): self
    {
        $this->RailReservationCriteria = $railReservationCriteria;
        
        return $this;
    }
    /**
     * Get RecordStatus value
     * @return string|null
     */
    public function getRecordStatus(): ?string
    {
        return $this->RecordStatus;
    }
    /**
     * Set RecordStatus value
     * @uses \Travelport\UniversalRecord\EnumType\TypeSavedTripRecordStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeSavedTripRecordStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $recordStatus
     * @return \Travelport\UniversalRecord\StructType\SavedTripSearchReq
     */
    public function setRecordStatus(?string $recordStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeSavedTripRecordStatus::valueIsValid($recordStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeSavedTripRecordStatus', is_array($recordStatus) ? implode(', ', $recordStatus) : var_export($recordStatus, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeSavedTripRecordStatus::getValidValues())), __LINE__);
        }
        $this->RecordStatus = $recordStatus;
        
        return $this;
    }
}
