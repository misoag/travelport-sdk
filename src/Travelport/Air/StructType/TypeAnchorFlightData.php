<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeAnchorFlightData StructType
 * Meta information extracted from the WSDL
 * - documentation: To support Anchor flight search contain the anchor flight details. Supported providers 1P
 * @subpackage Structs
 */
class TypeAnchorFlightData extends AbstractStructBase
{
    /**
     * The AirlineCode
     * Meta information extracted from the WSDL
     * - documentation: Indicates Anchor flight carrier code | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $AirlineCode;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: Indicates Anchor flight number | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    public string $FlightNumber;
    /**
     * The ConnectionIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the Anchor flight has any connecting flight or not
     * - use: optional
     * @var bool|null
     */
    public ?bool $ConnectionIndicator = null;
    /**
     * Constructor method for typeAnchorFlightData
     * @uses TypeAnchorFlightData::setAirlineCode()
     * @uses TypeAnchorFlightData::setFlightNumber()
     * @uses TypeAnchorFlightData::setConnectionIndicator()
     * @param string $airlineCode
     * @param string $flightNumber
     * @param bool $connectionIndicator
     */
    public function __construct(string $airlineCode, string $flightNumber, ?bool $connectionIndicator = null)
    {
        $this
            ->setAirlineCode($airlineCode)
            ->setFlightNumber($flightNumber)
            ->setConnectionIndicator($connectionIndicator);
    }
    /**
     * Get AirlineCode value
     * @return string
     */
    public function getAirlineCode(): string
    {
        return $this->AirlineCode;
    }
    /**
     * Set AirlineCode value
     * @param string $airlineCode
     * @return \Travelport\Air\StructType\TypeAnchorFlightData
     */
    public function setAirlineCode(string $airlineCode): self
    {
        $this->AirlineCode = $airlineCode;
        
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
     * @return \Travelport\Air\StructType\TypeAnchorFlightData
     */
    public function setFlightNumber(string $flightNumber): self
    {
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get ConnectionIndicator value
     * @return bool|null
     */
    public function getConnectionIndicator(): ?bool
    {
        return $this->ConnectionIndicator;
    }
    /**
     * Set ConnectionIndicator value
     * @param bool $connectionIndicator
     * @return \Travelport\Air\StructType\TypeAnchorFlightData
     */
    public function setConnectionIndicator(?bool $connectionIndicator = null): self
    {
        $this->ConnectionIndicator = $connectionIndicator;
        
        return $this;
    }
}
