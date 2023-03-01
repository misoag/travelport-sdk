<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeProviderReservationDetail StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of a provider reservation locator consisting of provider locator code and provider code. To be used as a request element type while accessing a specific PNR
 * @subpackage Structs
 */
class TypeProviderReservationDetail extends AbstractStructBase
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - type: typeProviderCode
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * - type: typeProviderLocatorCode
     * - use: required
     * @var string
     */
    public string $ProviderLocatorCode;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Represents Carrier Code for ACH PNR Retrieve. | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - type: typeSupplierCode
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * Constructor method for typeProviderReservationDetail
     * @uses TypeProviderReservationDetail::setProviderCode()
     * @uses TypeProviderReservationDetail::setProviderLocatorCode()
     * @uses TypeProviderReservationDetail::setSupplierCode()
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $supplierCode
     */
    public function __construct(string $providerCode, string $providerLocatorCode, ?string $supplierCode = null)
    {
        $this
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setSupplierCode($supplierCode);
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
     * @return \Travelport\UniversalRecord\StructType\TypeProviderReservationDetail
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string
     */
    public function getProviderLocatorCode(): string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\TypeProviderReservationDetail
     */
    public function setProviderLocatorCode(string $providerLocatorCode): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeProviderReservationDetail
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
