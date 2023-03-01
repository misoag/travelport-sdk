<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightArrivalInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: The flight arrival information (airline code and flight number) for the airport/city at which the rental car will be picked up
 * @subpackage Structs
 */
class FlightArrivalInformation extends AbstractStructBase
{
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
     * - base: xs:string
     * - maxLength: 30
     * @var string|null
     */
    public ?string $FlightNumber = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for FlightArrivalInformation
     * @uses FlightArrivalInformation::setCarrier()
     * @uses FlightArrivalInformation::setFlightNumber()
     * @uses FlightArrivalInformation::setKey()
     * @param string $carrier
     * @param string $flightNumber
     * @param string $key
     */
    public function __construct(string $carrier, ?string $flightNumber = null, ?string $key = null)
    {
        $this
            ->setCarrier($carrier)
            ->setFlightNumber($flightNumber)
            ->setKey($key);
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
     * @return \Travelport\UniversalRecord\StructType\FlightArrivalInformation
     */
    public function setCarrier(string $carrier): self
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
     * @return \Travelport\UniversalRecord\StructType\FlightArrivalInformation
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\FlightArrivalInformation
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
