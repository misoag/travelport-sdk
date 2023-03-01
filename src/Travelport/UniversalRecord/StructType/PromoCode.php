<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromoCode StructType
 * Meta information extracted from the WSDL
 * - documentation: A container to specify Promotional code with Provider code and Supplier code.
 * @subpackage Structs
 */
class PromoCode extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: To be used to specify Provider Code. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: To be used to specify Supplier Code. | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $SupplierCode;
    /**
     * Constructor method for PromoCode
     * @uses PromoCode::setCode()
     * @uses PromoCode::setProviderCode()
     * @uses PromoCode::setSupplierCode()
     * @param string $code
     * @param string $providerCode
     * @param string $supplierCode
     */
    public function __construct(string $code, string $providerCode, string $supplierCode)
    {
        $this
            ->setCode($code)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode);
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
     * @return \Travelport\UniversalRecord\StructType\PromoCode
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\PromoCode
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\PromoCode
     */
    public function setSupplierCode(string $supplierCode): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
