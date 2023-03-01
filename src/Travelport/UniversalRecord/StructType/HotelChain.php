<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelChain StructType
 * Meta information extracted from the WSDL
 * - documentation: The hotel chain code
 * @subpackage Structs
 */
class HotelChain extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Hotel Chain Code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * Constructor method for HotelChain
     * @uses HotelChain::setCode()
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
     * @return \Travelport\UniversalRecord\StructType\HotelChain
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
