<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: Date and Time at which this entity departs. This does not include Time Zone information since it can be derived from origin location
     * @var string|null
     */
    protected ?string $DepartureTime = null;
    /**
     * The TravelOrder
     * @var int|null
     */
    protected ?int $TravelOrder = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    protected ?string $Carrier = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: flight number type.
     * - base: xs:string
     * - maxLength: 5
     * @var string|null
     */
    protected ?string $FlightNumber = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * @var string|null
     */
    protected ?string $ClassOfService = null;
    /**
     * The StopOver
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $StopOver = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $Connection = null;
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
     * @return \Travelport\UniversalRecord\StructType\FlightsOffered
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FlightsOffered
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FlightsOffered
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FlightsOffered
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($travelOrder) && !(is_int($travelOrder) || ctype_digit($travelOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelOrder, true), gettype($travelOrder)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FlightsOffered
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FlightsOffered
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumber, true), gettype($flightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($flightNumber) && mb_strlen((string) $flightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $flightNumber)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FlightsOffered
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classOfService, true), gettype($classOfService)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $classOfService)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $classOfService)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FlightsOffered
     */
    public function setStopOver(?bool $stopOver = false): self
    {
        // validation for constraint: boolean
        if (!is_null($stopOver) && !is_bool($stopOver)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stopOver, true), gettype($stopOver)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FlightsOffered
     */
    public function setConnection(?bool $connection = false): self
    {
        // validation for constraint: boolean
        if (!is_null($connection) && !is_bool($connection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($connection, true), gettype($connection)), __LINE__);
        }
        $this->Connection = $connection;
        
        return $this;
    }
}
