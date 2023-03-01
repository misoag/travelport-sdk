<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightsOffered StructType
 * Meta information extracted from the WSDL
 * - documentation: Flights with lowest logical airfare returned as response to LFS request
 * @subpackage Structs
 */
class FlightsOffered extends AbstractStructBase
{
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: Date and Time at which this entity departs. This does not include Time Zone information since it can be derived from origin location
     * @var string|null
     */
    public ?string $DepartureTime = null;
    /**
     * The TravelOrder
     * @var int|null
     */
    public ?int $TravelOrder = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    public ?string $Carrier = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: flight number type.
     * - base: xs:string
     * - maxLength: 5
     * @var string|null
     */
    public ?string $FlightNumber = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * @var string|null
     */
    public ?string $ClassOfService = null;
    /**
     * The StopOver
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    public ?bool $StopOver = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    public ?bool $Connection = null;
    /**
     * Constructor method for FlightsOffered
     * @uses FlightsOffered::setOrigin()
     * @uses FlightsOffered::setDestination()
     * @uses FlightsOffered::setDepartureTime()
     * @uses FlightsOffered::setTravelOrder()
     * @uses FlightsOffered::setCarrier()
     * @uses FlightsOffered::setFlightNumber()
     * @uses FlightsOffered::setClassOfService()
     * @uses FlightsOffered::setStopOver()
     * @uses FlightsOffered::setConnection()
     * @param string $origin
     * @param string $destination
     * @param string $departureTime
     * @param int $travelOrder
     * @param string $carrier
     * @param string $flightNumber
     * @param string $classOfService
     * @param bool $stopOver
     * @param bool $connection
     */
    public function __construct(?string $origin = null, ?string $destination = null, ?string $departureTime = null, ?int $travelOrder = null, ?string $carrier = null, ?string $flightNumber = null, ?string $classOfService = null, ?bool $stopOver = false, ?bool $connection = false)
    {
        $this
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setDepartureTime($departureTime)
            ->setTravelOrder($travelOrder)
            ->setCarrier($carrier)
            ->setFlightNumber($flightNumber)
            ->setClassOfService($classOfService)
            ->setStopOver($stopOver)
            ->setConnection($connection);
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
     * @return \Travelport\Hotel\StructType\FlightsOffered
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
     * @return \Travelport\Hotel\StructType\FlightsOffered
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Travelport\Hotel\StructType\FlightsOffered
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get TravelOrder value
     * @return int|null
     */
    public function getTravelOrder(): ?int
    {
        return $this->TravelOrder;
    }
    /**
     * Set TravelOrder value
     * @param int $travelOrder
     * @return \Travelport\Hotel\StructType\FlightsOffered
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        $this->TravelOrder = $travelOrder;
        
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
     * @return \Travelport\Hotel\StructType\FlightsOffered
     */
    public function setCarrier(?string $carrier = null): self
    {
        $this->Carrier = $carrier;
        
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
     * @return \Travelport\Hotel\StructType\FlightsOffered
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get ClassOfService value
     * @return string|null
     */
    public function getClassOfService(): ?string
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Travelport\Hotel\StructType\FlightsOffered
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
    /**
     * Get StopOver value
     * @return bool|null
     */
    public function getStopOver(): ?bool
    {
        return $this->StopOver;
    }
    /**
     * Set StopOver value
     * @param bool $stopOver
     * @return \Travelport\Hotel\StructType\FlightsOffered
     */
    public function setStopOver(?bool $stopOver = false): self
    {
        $this->StopOver = $stopOver;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return bool|null
     */
    public function getConnection(): ?bool
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @param bool $connection
     * @return \Travelport\Hotel\StructType\FlightsOffered
     */
    public function setConnection(?bool $connection = false): self
    {
        $this->Connection = $connection;
        
        return $this;
    }
}
