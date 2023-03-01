<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightInfoCriteria StructType
 * @subpackage Structs
 */
class FlightInfoCriteria extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: An identifier to link the flightinfo responses to the criteria. The value passed here will be returned in the resulting flightinfo(s) from this command. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier that is marketing this segment | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Carrier;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The flight number under which the marketing carrier is marketing this flight | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    public string $FlightNumber;
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which this entity departs. This does not include time zone information since it can be derived from the origin location.
     * - use: required
     * @var string
     */
    public string $DepartureDate;
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
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $ClassOfService = null;
    /**
     * Constructor method for FlightInfoCriteria
     * @uses FlightInfoCriteria::setKey()
     * @uses FlightInfoCriteria::setCarrier()
     * @uses FlightInfoCriteria::setFlightNumber()
     * @uses FlightInfoCriteria::setDepartureDate()
     * @uses FlightInfoCriteria::setOrigin()
     * @uses FlightInfoCriteria::setDestination()
     * @uses FlightInfoCriteria::setClassOfService()
     * @param string $key
     * @param string $carrier
     * @param string $flightNumber
     * @param string $departureDate
     * @param string $origin
     * @param string $destination
     * @param string $classOfService
     */
    public function __construct(string $key, string $carrier, string $flightNumber, string $departureDate, ?string $origin = null, ?string $destination = null, ?string $classOfService = null)
    {
        $this
            ->setKey($key)
            ->setCarrier($carrier)
            ->setFlightNumber($flightNumber)
            ->setDepartureDate($departureDate)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setClassOfService($classOfService);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\FlightInfoCriteria
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\Air\StructType\FlightInfoCriteria
     */
    public function setCarrier(string $carrier): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string
     */
    public function getFlightNumber(): string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\Air\StructType\FlightInfoCriteria
     */
    public function setFlightNumber(string $flightNumber): self
    {
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string
     */
    public function getDepartureDate(): string
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Travelport\Air\StructType\FlightInfoCriteria
     */
    public function setDepartureDate(string $departureDate): self
    {
        $this->DepartureDate = $departureDate;
        
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
     * @return \Travelport\Air\StructType\FlightInfoCriteria
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
     * @return \Travelport\Air\StructType\FlightInfoCriteria
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
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
     * @return \Travelport\Air\StructType\FlightInfoCriteria
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
}
