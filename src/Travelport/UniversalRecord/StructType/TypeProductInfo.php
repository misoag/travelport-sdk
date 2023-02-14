<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $ProductType;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ProviderCode;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ProviderLocatorCode;
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the vendor. For Air, Car and Hotel this will be an IATA vendor code.
     * - use: optional
     * @var string|null
     */
    protected ?string $VendorCode = null;
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeProduct::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeProduct::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productType
     * @return \Travelport\UniversalRecord\StructType\TypeProductInfo
     */
    public function setProductType(string $productType): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeProduct::valueIsValid($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeProduct', is_array($productType) ? implode(', ', $productType) : var_export($productType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeProduct::getValidValues())), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorCode, true), gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        
        return $this;
    }
}
