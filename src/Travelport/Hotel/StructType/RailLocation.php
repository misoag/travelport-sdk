<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: RCH specific location code (a.k.a UCodes) which uniquely identifies a train station.
 * @subpackage Structs
 */
class RailLocation extends Location
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Code;
    /**
     * Constructor method for RailLocation
     * @uses RailLocation::setCode()
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
     * @return \Travelport\Hotel\StructType\RailLocation
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
