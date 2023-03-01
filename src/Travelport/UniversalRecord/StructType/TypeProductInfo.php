<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeProductInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information on the product type and its provider
 * @subpackage Structs
 */
class TypeProductInfo extends AbstractStructBase
{
    /**
     * The ProductType
     * Meta information extracted from the WSDL
     * - documentation: The type of product returned
     * - use: required
     * @var string
     */
    public string $ProductType;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $ProviderLocatorCode;
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the vendor. For Air, Car and Hotel this will be an IATA vendor code.
     * - use: optional
     * @var string|null
     */
    public ?string $VendorCode = null;
    /**
     * Constructor method for typeProductInfo
     * @uses TypeProductInfo::setProductType()
     * @uses TypeProductInfo::setProviderCode()
     * @uses TypeProductInfo::setProviderLocatorCode()
     * @uses TypeProductInfo::setVendorCode()
     * @param string $productType
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $vendorCode
     */
    public function __construct(string $productType, string $providerCode, string $providerLocatorCode, ?string $vendorCode = null)
    {
        $this
            ->setProductType($productType)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setVendorCode($vendorCode);
    }
    /**
     * Get ProductType value
     * @return string
     */
    public function getProductType(): string
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @param string $productType
     * @return \Travelport\UniversalRecord\StructType\TypeProductInfo
     */
    public function setProductType(string $productType): self
    {
        $this->ProductType = $productType;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeProductInfo
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
     * @return \Travelport\UniversalRecord\StructType\TypeProductInfo
     */
    public function setProviderLocatorCode(string $providerLocatorCode): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode(): ?string
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Travelport\UniversalRecord\StructType\TypeProductInfo
     */
    public function setVendorCode(?string $vendorCode = null): self
    {
        $this->VendorCode = $vendorCode;
        
        return $this;
    }
}
