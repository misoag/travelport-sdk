<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountCode StructType
 * Meta information extracted from the WSDL
 * - documentation: it will be considered a default AccounCode to be sent to all the Providers or Suppliers. | Account Code is used to get Private Fares.If ProviderCode or SupplierCode is not specified,
 * @subpackage Structs
 */
class AccountCode extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 36
     * - use: optional
     * @var string|null
     */
    public ?string $Code = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: An identifier to categorize this account code. For example, FlightPass for AC Flight Pass or RFB for AC corporate Rewards for Business.
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - type: typeProviderCode
     * - use: optional
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
     * - type: typeSupplierCode
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * Constructor method for AccountCode
     * @uses AccountCode::setCode()
     * @uses AccountCode::setType()
     * @uses AccountCode::setProviderCode()
     * @uses AccountCode::setSupplierCode()
     * @param string $code
     * @param string $type
     * @param string $providerCode
     * @param string $supplierCode
     */
    public function __construct(?string $code = null, ?string $type = null, ?string $providerCode = null, ?string $supplierCode = null)
    {
        $this
            ->setCode($code)
            ->setType($type)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\UniversalRecord\StructType\AccountCode
     */
    public function setCode(?string $code = null): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\AccountCode
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
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
     * @return \Travelport\UniversalRecord\StructType\AccountCode
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
     * @return \Travelport\UniversalRecord\StructType\AccountCode
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
