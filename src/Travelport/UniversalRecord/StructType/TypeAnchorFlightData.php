<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $AirlineCode;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: Indicates Anchor flight number | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    protected string $FlightNumber;
    /**
     * The ConnectionIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the Anchor flight has any connecting flight or not
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ConnectionIndicator = null;
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
     * @return \Travelport\UniversalRecord\StructType\TypeAnchorFlightData
     */
    public function setAirlineCode(string $airlineCode): self
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineCode, true), gettype($airlineCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($airlineCode) && mb_strlen((string) $airlineCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $airlineCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TypeAnchorFlightData
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
     * @return \Travelport\UniversalRecord\StructType\TypeAnchorFlightData
     */
    public function setConnectionIndicator(?bool $connectionIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($connectionIndicator) && !is_bool($connectionIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($connectionIndicator, true), gettype($connectionIndicator)), __LINE__);
        }
        $this->ConnectionIndicator = $connectionIndicator;
        
        return $this;
    }
}
