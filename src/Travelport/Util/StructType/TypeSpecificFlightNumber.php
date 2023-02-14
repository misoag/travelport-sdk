<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeSpecificFlightNumber StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify exact flight number.
 * @subpackage Structs
 */
class TypeSpecificFlightNumber extends AbstractStructBase
{
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
     * Constructor method for typeSpecificFlightNumber
     * @uses TypeSpecificFlightNumber::setFlightNumber()
     * @param string $flightNumber
     */
    public function __construct(string $flightNumber)
    {
        $this
            ->setFlightNumber($flightNumber);
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
     * @return \Travelport\Util\StructType\TypeSpecificFlightNumber
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
}
