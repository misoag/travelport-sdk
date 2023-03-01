<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerType StructType
 * Meta information extracted from the WSDL
 * - documentation: The 3-char IATA traveler type code
 * - type: typePTC
 * - use: optional
 * @subpackage Structs
 */
class TravelerType extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * Constructor method for TravelerType
     * @uses TravelerType::setCode()
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
     * @return \Travelport\Air\StructType\TravelerType
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
