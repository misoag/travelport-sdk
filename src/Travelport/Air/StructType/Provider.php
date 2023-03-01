<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Provider StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider identifier
 * @subpackage Structs
 */
class Provider extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * Constructor method for Provider
     * @uses Provider::setCode()
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
     * @return \Travelport\Air\StructType\Provider
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
