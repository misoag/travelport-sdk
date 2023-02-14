<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeFlightNumberRange StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify a range of flight numbers.
 * @subpackage Structs
 */
class TypeFlightNumberRange extends AbstractStructBase
{
    /**
     * The FlightNumberRangeStart
     * Meta information extracted from the WSDL
     * - documentation: flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    protected string $FlightNumberRangeStart;
    /**
     * The FlightNumberRangeEnd
     * Meta information extracted from the WSDL
     * - documentation: flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    protected string $FlightNumberRangeEnd;
    /**
     * Constructor method for typeFlightNumberRange
     * @uses TypeFlightNumberRange::setFlightNumberRangeStart()
     * @uses TypeFlightNumberRange::setFlightNumberRangeEnd()
     * @param string $flightNumberRangeStart
     * @param string $flightNumberRangeEnd
     */
    public function __construct(string $flightNumberRangeStart, string $flightNumberRangeEnd)
    {
        $this
            ->setFlightNumberRangeStart($flightNumberRangeStart)
            ->setFlightNumberRangeEnd($flightNumberRangeEnd);
    }
    /**
     * Get FlightNumberRangeStart value
     * @return string
     */
    public function getFlightNumberRangeStart(): string
    {
        return $this->FlightNumberRangeStart;
    }
    /**
     * Set FlightNumberRangeStart value
     * @param string $flightNumberRangeStart
     * @return \Travelport\Util\StructType\TypeFlightNumberRange
     */
    public function setFlightNumberRangeStart(string $flightNumberRangeStart): self
    {
        // validation for constraint: string
        if (!is_null($flightNumberRangeStart) && !is_string($flightNumberRangeStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumberRangeStart, true), gettype($flightNumberRangeStart)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($flightNumberRangeStart) && mb_strlen((string) $flightNumberRangeStart) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $flightNumberRangeStart)), __LINE__);
        }
        $this->FlightNumberRangeStart = $flightNumberRangeStart;
        
        return $this;
    }
    /**
     * Get FlightNumberRangeEnd value
     * @return string
     */
    public function getFlightNumberRangeEnd(): string
    {
        return $this->FlightNumberRangeEnd;
    }
    /**
     * Set FlightNumberRangeEnd value
     * @param string $flightNumberRangeEnd
     * @return \Travelport\Util\StructType\TypeFlightNumberRange
     */
    public function setFlightNumberRangeEnd(string $flightNumberRangeEnd): self
    {
        // validation for constraint: string
        if (!is_null($flightNumberRangeEnd) && !is_string($flightNumberRangeEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumberRangeEnd, true), gettype($flightNumberRangeEnd)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($flightNumberRangeEnd) && mb_strlen((string) $flightNumberRangeEnd) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $flightNumberRangeEnd)), __LINE__);
        }
        $this->FlightNumberRangeEnd = $flightNumberRangeEnd;
        
        return $this;
    }
}
