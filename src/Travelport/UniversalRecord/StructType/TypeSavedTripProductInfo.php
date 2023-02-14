<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $ProductType;
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the vendor. For Air, Car and Hotel this will be an IATA vendor code.
     * - use: required
     * @var string
     */
    protected string $VendorCode;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ProviderCode;
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeProduct::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeProduct::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productType
     * @return \Travelport\UniversalRecord\StructType\TypeSavedTripProductInfo
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
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorCode, true), gettype($vendorCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
}
