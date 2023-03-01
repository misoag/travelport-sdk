<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorInfo StructType
 * @subpackage Structs
 */
class VendorInfo extends AbstractStructBase
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
     * The Name
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * Constructor method for VendorInfo
     * @uses VendorInfo::setCode()
     * @uses VendorInfo::setName()
     * @param string $code
     * @param string $name
     */
    public function __construct(string $code, ?string $name = null)
    {
        $this
            ->setCode($code)
            ->setName($name);
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
     * @return \Travelport\UniversalRecord\StructType\VendorInfo
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\UniversalRecord\StructType\VendorInfo
     */
    public function setName(?string $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
}
