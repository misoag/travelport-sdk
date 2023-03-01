<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vendor StructType
 * Meta information extracted from the WSDL
 * - documentation: The supplier code
 * @subpackage Structs
 */
class Vendor extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * Constructor method for Vendor
     * @uses Vendor::setCode()
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
     * @return \Travelport\UniversalRecord\StructType\Vendor
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
