<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $StartDate;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Carrier;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    protected string $FlightNumber;
    /**
     * The FlightOrigin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\FlightOrigin|null
     */
    protected ?\Travelport\Util\StructType\FlightOrigin $FlightOrigin = null;
    /**
     * The FlightDestination
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\FlightDestination|null
     */
    protected ?\Travelport\Util\StructType\FlightDestination $FlightDestination = null;
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
     * @param \Travelport\Util\StructType\FlightOrigin $flightOrigin
     * @param \Travelport\Util\StructType\FlightDestination $flightDestination
     */
    public function __construct(string $startDate, string $carrier, string $flightNumber, ?\Travelport\Util\StructType\FlightOrigin $flightOrigin = null, ?\Travelport\Util\StructType\FlightDestination $flightDestination = null)
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
     * @return \Travelport\Util\StructType\SpecificTimeTable
     */
    public function setStartDate(string $startDate): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SpecificTimeTable
     */
    public function setCarrier(string $carrier): self
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
     * @return string
     */
    public function getFlightNumber(): string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\Util\StructType\SpecificTimeTable
     */
    public function setFlightNumber(string $flightNumber): self
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
     * Get FlightOrigin value
     * @return \Travelport\Util\StructType\FlightOrigin|null
     */
    public function getFlightOrigin(): ?\Travelport\Util\StructType\FlightOrigin
    {
        return $this->FlightOrigin;
    }
    /**
     * Set FlightOrigin value
     * @param \Travelport\Util\StructType\FlightOrigin $flightOrigin
     * @return \Travelport\Util\StructType\SpecificTimeTable
     */
    public function setFlightOrigin(?\Travelport\Util\StructType\FlightOrigin $flightOrigin = null): self
    {
        $this->FlightOrigin = $flightOrigin;
        
        return $this;
    }
    /**
     * Get FlightDestination value
     * @return \Travelport\Util\StructType\FlightDestination|null
     */
    public function getFlightDestination(): ?\Travelport\Util\StructType\FlightDestination
    {
        return $this->FlightDestination;
    }
    /**
     * Set FlightDestination value
     * @param \Travelport\Util\StructType\FlightDestination $flightDestination
     * @return \Travelport\Util\StructType\SpecificTimeTable
     */
    public function setFlightDestination(?\Travelport\Util\StructType\FlightDestination $flightDestination = null): self
    {
        $this->FlightDestination = $flightDestination;
        
        return $this;
    }
}
