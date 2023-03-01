<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for City StructType
 * Meta information extracted from the WSDL
 * - documentation: The city name for the requested address, e.g. Atlanta. | City identifier
 * @subpackage Structs
 */
class City extends Location
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Code;
    /**
     * Constructor method for City
     * @uses City::setCode()
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this
            ->setCode($code);
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
     * @return \Travelport\Hotel\StructType\City
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
