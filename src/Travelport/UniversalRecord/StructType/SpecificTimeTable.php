<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecificTimeTable StructType
 * @subpackage Structs
 */
class SpecificTimeTable extends AbstractStructBase
{
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $StartDate;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Carrier;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    public string $FlightNumber;
    /**
     * The FlightOrigin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\FlightOrigin|null
     */
    public ?\Travelport\UniversalRecord\StructType\FlightOrigin $FlightOrigin = null;
    /**
     * The FlightDestination
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\FlightDestination|null
     */
    public ?\Travelport\UniversalRecord\StructType\FlightDestination $FlightDestination = null;
    /**
     * Constructor method for SpecificTimeTable
     * @uses SpecificTimeTable::setStartDate()
     * @uses SpecificTimeTable::setCarrier()
     * @uses SpecificTimeTable::setFlightNumber()
     * @uses SpecificTimeTable::setFlightOrigin()
     * @uses SpecificTimeTable::setFlightDestination()
     * @param string $startDate
     * @param string $carrier
     * @param string $flightNumber
     * @param \Travelport\UniversalRecord\StructType\FlightOrigin $flightOrigin
     * @param \Travelport\UniversalRecord\StructType\FlightDestination $flightDestination
     */
    public function __construct(string $startDate, string $carrier, string $flightNumber, ?\Travelport\UniversalRecord\StructType\FlightOrigin $flightOrigin = null, ?\Travelport\UniversalRecord\StructType\FlightDestination $flightDestination = null)
    {
        $this
            ->setStartDate($startDate)
            ->setCarrier($carrier)
            ->setFlightNumber($flightNumber)
            ->setFlightOrigin($flightOrigin)
            ->setFlightDestination($flightDestination);
    }
    /**
     * Get StartDate value
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Travelport\UniversalRecord\StructType\SpecificTimeTable
     */
    public function setStartDate(string $startDate): self
    {
        $this->StartDate = $startDate;
        
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
     * @return \Travelport\UniversalRecord\StructType\SpecificTimeTable
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
     * @return \Travelport\UniversalRecord\StructType\SpecificTimeTable
     */
    public function setFlightNumber(string $flightNumber): self
    {
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get FlightOrigin value
     * @return \Travelport\UniversalRecord\StructType\FlightOrigin|null
     */
    public function getFlightOrigin(): ?\Travelport\UniversalRecord\StructType\FlightOrigin
    {
        return $this->FlightOrigin;
    }
    /**
     * Set FlightOrigin value
     * @param \Travelport\UniversalRecord\StructType\FlightOrigin $flightOrigin
     * @return \Travelport\UniversalRecord\StructType\SpecificTimeTable
     */
    public function setFlightOrigin(?\Travelport\UniversalRecord\StructType\FlightOrigin $flightOrigin = null): self
    {
        $this->FlightOrigin = $flightOrigin;
        
        return $this;
    }
    /**
     * Get FlightDestination value
     * @return \Travelport\UniversalRecord\StructType\FlightDestination|null
     */
    public function getFlightDestination(): ?\Travelport\UniversalRecord\StructType\FlightDestination
    {
        return $this->FlightDestination;
    }
    /**
     * Set FlightDestination value
     * @param \Travelport\UniversalRecord\StructType\FlightDestination $flightDestination
     * @return \Travelport\UniversalRecord\StructType\SpecificTimeTable
     */
    public function setFlightDestination(?\Travelport\UniversalRecord\StructType\FlightDestination $flightDestination = null): self
    {
        $this->FlightDestination = $flightDestination;
        
        return $this;
    }
}
