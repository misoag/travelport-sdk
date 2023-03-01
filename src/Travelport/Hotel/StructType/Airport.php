<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Airport StructType
 * Meta information extracted from the WSDL
 * - documentation: Airport identifier
 * @subpackage Structs
 */
class Airport extends Location
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
     * Constructor method for Airport
     * @uses Airport::setCode()
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
     * @return \Travelport\Hotel\StructType\Airport
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
