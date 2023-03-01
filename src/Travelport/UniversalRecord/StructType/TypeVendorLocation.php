<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeVendorLocation StructType
 * @subpackage Structs
 */
class TypeVendorLocation extends AbstractStructBase
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the provider (e.g. 1G, 1S) | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the vendor (e.g. HZ, etc.) | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $VendorCode;
    /**
     * The PreferredOption
     * Meta information extracted from the WSDL
     * - documentation: Preferred Option marker for Location.
     * - use: optional
     * @var bool|null
     */
    public ?bool $PreferredOption = null;
    /**
     * The VendorLocationID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $VendorLocationID = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key which maps vendor location with vehicles | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The MoreRatesToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $MoreRatesToken = null;
    /**
     * Constructor method for typeVendorLocation
     * @uses TypeVendorLocation::setProviderCode()
     * @uses TypeVendorLocation::setVendorCode()
     * @uses TypeVendorLocation::setPreferredOption()
     * @uses TypeVendorLocation::setVendorLocationID()
     * @uses TypeVendorLocation::setKey()
     * @uses TypeVendorLocation::setMoreRatesToken()
     * @param string $providerCode
     * @param string $vendorCode
     * @param bool $preferredOption
     * @param string $vendorLocationID
     * @param string $key
     * @param string $moreRatesToken
     */
    public function __construct(string $providerCode, string $vendorCode, ?bool $preferredOption = null, ?string $vendorLocationID = null, ?string $key = null, ?string $moreRatesToken = null)
    {
        $this
            ->setProviderCode($providerCode)
            ->setVendorCode($vendorCode)
            ->setPreferredOption($preferredOption)
            ->setVendorLocationID($vendorLocationID)
            ->setKey($key)
            ->setMoreRatesToken($moreRatesToken);
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
     * @return \Travelport\UniversalRecord\StructType\TypeVendorLocation
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeVendorLocation
     */
    public function setVendorCode(string $vendorCode): self
    {
        $this->VendorCode = $vendorCode;
        
        return $this;
    }
    /**
     * Get PreferredOption value
     * @return bool|null
     */
    public function getPreferredOption(): ?bool
    {
        return $this->PreferredOption;
    }
    /**
     * Set PreferredOption value
     * @param bool $preferredOption
     * @return \Travelport\UniversalRecord\StructType\TypeVendorLocation
     */
    public function setPreferredOption(?bool $preferredOption = null): self
    {
        $this->PreferredOption = $preferredOption;
        
        return $this;
    }
    /**
     * Get VendorLocationID value
     * @return string|null
     */
    public function getVendorLocationID(): ?string
    {
        return $this->VendorLocationID;
    }
    /**
     * Set VendorLocationID value
     * @param string $vendorLocationID
     * @return \Travelport\UniversalRecord\StructType\TypeVendorLocation
     */
    public function setVendorLocationID(?string $vendorLocationID = null): self
    {
        $this->VendorLocationID = $vendorLocationID;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\TypeVendorLocation
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get MoreRatesToken value
     * @return string|null
     */
    public function getMoreRatesToken(): ?string
    {
        return $this->MoreRatesToken;
    }
    /**
     * Set MoreRatesToken value
     * @param string $moreRatesToken
     * @return \Travelport\UniversalRecord\StructType\TypeVendorLocation
     */
    public function setMoreRatesToken(?string $moreRatesToken = null): self
    {
        $this->MoreRatesToken = $moreRatesToken;
        
        return $this;
    }
}
