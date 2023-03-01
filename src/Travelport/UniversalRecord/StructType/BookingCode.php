<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingCode StructType
 * Meta information extracted from the WSDL
 * - documentation: The Booking Code (Class of Service) for a segment
 * @subpackage Structs
 */
class BookingCode extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * Constructor method for BookingCode
     * @uses BookingCode::setCode()
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
     * @return \Travelport\UniversalRecord\StructType\BookingCode
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
