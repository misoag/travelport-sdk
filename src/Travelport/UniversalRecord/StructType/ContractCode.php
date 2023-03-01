<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContractCode StructType
 * Meta information extracted from the WSDL
 * - documentation: Some private fares (non-ATPCO) are secured to a contract code.
 * @subpackage Structs
 */
class ContractCode extends AbstractStructBase
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
     * The CompanyName
     * Meta information extracted from the WSDL
     * - documentation: Providers supported : ACH
     * @var string|null
     */
    public ?string $CompanyName = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * Constructor method for ContractCode
     * @uses ContractCode::setCode()
     * @uses ContractCode::setCompanyName()
     * @uses ContractCode::setProviderCode()
     * @uses ContractCode::setSupplierCode()
     * @param string $code
     * @param string $companyName
     * @param string $providerCode
     * @param string $supplierCode
     */
    public function __construct(string $code, ?string $companyName = null, ?string $providerCode = null, ?string $supplierCode = null)
    {
        $this
            ->setCode($code)
            ->setCompanyName($companyName)
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
     * @return \Travelport\UniversalRecord\StructType\ContractCode
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \Travelport\UniversalRecord\StructType\ContractCode
     */
    public function setCompanyName(?string $companyName = null): self
    {
        $this->CompanyName = $companyName;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\ContractCode
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\ContractCode
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
