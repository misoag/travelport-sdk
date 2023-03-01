<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeSavedTripProductInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information on the product type and its provider
 * @subpackage Structs
 */
class TypeSavedTripProductInfo extends AbstractStructBase
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
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the vendor. For Air, Car and Hotel this will be an IATA vendor code.
     * - use: required
     * @var string
     */
    public string $VendorCode;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * Constructor method for typeSavedTripProductInfo
     * @uses TypeSavedTripProductInfo::setProductType()
     * @uses TypeSavedTripProductInfo::setVendorCode()
     * @uses TypeSavedTripProductInfo::setProviderCode()
     * @param string $productType
     * @param string $vendorCode
     * @param string $providerCode
     */
    public function __construct(string $productType, string $vendorCode, string $providerCode)
    {
        $this
            ->setProductType($productType)
            ->setVendorCode($vendorCode)
            ->setProviderCode($providerCode);
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
     * @return \Travelport\UniversalRecord\StructType\TypeSavedTripProductInfo
     */
    public function setProductType(string $productType): self
    {
        $this->ProductType = $productType;
        
        return $this;
    }
    /**
     * Get VendorCode value
     * @return string
     */
    public function getVendorCode(): string
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Travelport\UniversalRecord\StructType\TypeSavedTripProductInfo
     */
    public function setVendorCode(string $vendorCode): self
    {
        $this->VendorCode = $vendorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeSavedTripProductInfo
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
}
