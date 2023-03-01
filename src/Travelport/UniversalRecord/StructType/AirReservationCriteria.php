<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirReservationCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Criteria for searching the Air reservations
 * @subpackage Structs
 */
class AirReservationCriteria extends AbstractStructBase
{
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - documentation: Flight Departure Date or Date Range
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeDateSpec $DepartureDate = null;
    /**
     * The ArrivalDate
     * Meta information extracted from the WSDL
     * - documentation: Flight Arrival Date or Date Range
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeDateSpec $ArrivalDate = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $FlightNumber = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $Carrier = null;
    /**
     * The PassiveOnly
     * Meta information extracted from the WSDL
     * - documentation: Search for Passives Only
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $PassiveOnly = null;
    /**
     * Constructor method for AirReservationCriteria
     * @uses AirReservationCriteria::setDepartureDate()
     * @uses AirReservationCriteria::setArrivalDate()
     * @uses AirReservationCriteria::setOrigin()
     * @uses AirReservationCriteria::setDestination()
     * @uses AirReservationCriteria::setFlightNumber()
     * @uses AirReservationCriteria::setCarrier()
     * @uses AirReservationCriteria::setPassiveOnly()
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $departureDate
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $arrivalDate
     * @param string $origin
     * @param string $destination
     * @param string $flightNumber
     * @param string $carrier
     * @param bool $passiveOnly
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeDateSpec $departureDate = null, ?\Travelport\UniversalRecord\StructType\TypeDateSpec $arrivalDate = null, ?string $origin = null, ?string $destination = null, ?string $flightNumber = null, ?string $carrier = null, ?bool $passiveOnly = false)
    {
        $this
            ->setDepartureDate($departureDate)
            ->setArrivalDate($arrivalDate)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setFlightNumber($flightNumber)
            ->setCarrier($carrier)
            ->setPassiveOnly($passiveOnly);
    }
    /**
     * Get DepartureDate value
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public function getDepartureDate(): ?\Travelport\UniversalRecord\StructType\TypeDateSpec
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $departureDate
     * @return \Travelport\UniversalRecord\StructType\AirReservationCriteria
     */
    public function setDepartureDate(?\Travelport\UniversalRecord\StructType\TypeDateSpec $departureDate = null): self
    {
        $this->DepartureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get ArrivalDate value
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public function getArrivalDate(): ?\Travelport\UniversalRecord\StructType\TypeDateSpec
    {
        return $this->ArrivalDate;
    }
    /**
     * Set ArrivalDate value
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $arrivalDate
     * @return \Travelport\UniversalRecord\StructType\AirReservationCriteria
     */
    public function setArrivalDate(?\Travelport\UniversalRecord\StructType\TypeDateSpec $arrivalDate = null): self
    {
        $this->ArrivalDate = $arrivalDate;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\UniversalRecord\StructType\AirReservationCriteria
     */
    public function setOrigin(?string $origin = null): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\UniversalRecord\StructType\AirReservationCriteria
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber(): ?string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\UniversalRecord\StructType\AirReservationCriteria
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\UniversalRecord\StructType\AirReservationCriteria
     */
    public function setCarrier(?string $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get PassiveOnly value
     * @return bool|null
     */
    public function getPassiveOnly(): ?bool
    {
        return $this->PassiveOnly;
    }
    /**
     * Set PassiveOnly value
     * @param bool $passiveOnly
     * @return \Travelport\UniversalRecord\StructType\AirReservationCriteria
     */
    public function setPassiveOnly(?bool $passiveOnly = false): self
    {
        $this->PassiveOnly = $passiveOnly;
        
        return $this;
    }
}
