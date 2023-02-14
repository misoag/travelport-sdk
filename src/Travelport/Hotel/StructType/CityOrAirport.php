<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityOrAirport StructType
 * Meta information extracted from the WSDL
 * - documentation: This element can be used when it is not known whether the value is an airport or a city code.
 * @subpackage Structs
 */
class CityOrAirport extends Location
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The airport or city IATA code. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Code;
    /**
     * The PreferCity
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the search should prefer city results over airport results.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PreferCity = null;
    /**
     * Constructor method for CityOrAirport
     * @uses CityOrAirport::setCode()
     * @uses CityOrAirport::setPreferCity()
     * @param string $code
     * @param bool $preferCity
     */
    public function __construct(string $code, ?bool $preferCity = false)
    {
        $this
            ->setCode($code)
            ->setPreferCity($preferCity);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\Hotel\StructType\CityOrAirport
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($code) && mb_strlen((string) $code) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get PreferCity value
     * @return bool|null
     */
    public function getPreferCity(): ?bool
    {
        return $this->PreferCity;
    }
    /**
     * Set PreferCity value
     * @param bool $preferCity
     * @return \Travelport\Hotel\StructType\CityOrAirport
     */
    public function setPreferCity(?bool $preferCity = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preferCity) && !is_bool($preferCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preferCity, true), gettype($preferCity)), __LINE__);
        }
        $this->PreferCity = $preferCity;
        
        return $this;
    }
}
