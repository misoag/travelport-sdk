<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PointOfCommencement StructType
 * Meta information extracted from the WSDL
 * - documentation: Point of Commencement is optional. CityOrAirportCode and date portion of the Time attribute is mandatory.
 * @subpackage Structs
 */
class PointOfCommencement extends AbstractStructBase
{
    /**
     * The CityOrAirportCode
     * Meta information extracted from the WSDL
     * - documentation: Three digit Airport or City code that would be the Point of Commencement location for the trips/legs mentioned. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $CityOrAirportCode;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - documentation: Specify a date or date and time
     * - use: required
     * @var string
     */
    protected string $Time;
    /**
     * Constructor method for PointOfCommencement
     * @uses PointOfCommencement::setCityOrAirportCode()
     * @uses PointOfCommencement::setTime()
     * @param string $cityOrAirportCode
     * @param string $time
     */
    public function __construct(string $cityOrAirportCode, string $time)
    {
        $this
            ->setCityOrAirportCode($cityOrAirportCode)
            ->setTime($time);
    }
    /**
     * Get CityOrAirportCode value
     * @return string
     */
    public function getCityOrAirportCode(): string
    {
        return $this->CityOrAirportCode;
    }
    /**
     * Set CityOrAirportCode value
     * @param string $cityOrAirportCode
     * @return \Travelport\Util\StructType\PointOfCommencement
     */
    public function setCityOrAirportCode(string $cityOrAirportCode): self
    {
        // validation for constraint: string
        if (!is_null($cityOrAirportCode) && !is_string($cityOrAirportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityOrAirportCode, true), gettype($cityOrAirportCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($cityOrAirportCode) && mb_strlen((string) $cityOrAirportCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $cityOrAirportCode)), __LINE__);
        }
        $this->CityOrAirportCode = $cityOrAirportCode;
        
        return $this;
    }
    /**
     * Get Time value
     * @return string
     */
    public function getTime(): string
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \Travelport\Util\StructType\PointOfCommencement
     */
    public function setTime(string $time): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        
        return $this;
    }
}
