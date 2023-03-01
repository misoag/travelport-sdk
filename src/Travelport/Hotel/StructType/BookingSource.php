<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingSource StructType
 * Meta information extracted from the WSDL
 * - documentation: Used as an override in a booking.
 * @subpackage Structs
 */
class BookingSource extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * Constructor method for BookingSource
     * @uses BookingSource::setCode()
     * @uses BookingSource::setType()
     * @param string $code
     * @param string $type
     */
    public function __construct(string $code, string $type)
    {
        $this
            ->setCode($code)
            ->setType($type);
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
     * @return \Travelport\Hotel\StructType\BookingSource
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Hotel\StructType\BookingSource
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
