<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Carrier StructType
 * Meta information extracted from the WSDL
 * - documentation: Carrier identifier
 * @subpackage Structs
 */
class Carrier extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * Constructor method for Carrier
     * @uses Carrier::setCode()
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
     * @return \Travelport\UniversalRecord\StructType\Carrier
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
