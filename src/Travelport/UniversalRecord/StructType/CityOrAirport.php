<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Code;
    /**
     * The PreferCity
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the search should prefer city results over airport results.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $PreferCity = null;
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
     * @return \Travelport\UniversalRecord\StructType\CityOrAirport
     */
    public function setCode(string $code): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\CityOrAirport
     */
    public function setPreferCity(?bool $preferCity = false): self
    {
        $this->PreferCity = $preferCity;
        
        return $this;
    }
}
