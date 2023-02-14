<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected string $ProviderCode;
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
    protected string $VendorCode;
    /**
     * The PreferredOption
     * Meta information extracted from the WSDL
     * - documentation: Preferred Option marker for Location.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PreferredOption = null;
    /**
     * The VendorLocationID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $VendorLocationID = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key which maps vendor location with vehicles | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The MoreRatesToken
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $MoreRatesToken = null;
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
     * @return \Travelport\Hotel\StructType\TypeVendorLocation
     */
    public function setProviderCode(string $providerCode): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\TypeVendorLocation
     */
    public function setVendorCode(string $vendorCode): self
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorCode, true), gettype($vendorCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($vendorCode) && mb_strlen((string) $vendorCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $vendorCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($vendorCode) && mb_strlen((string) $vendorCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $vendorCode)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\TypeVendorLocation
     */
    public function setPreferredOption(?bool $preferredOption = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preferredOption) && !is_bool($preferredOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preferredOption, true), gettype($preferredOption)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\TypeVendorLocation
     */
    public function setVendorLocationID(?string $vendorLocationID = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorLocationID) && !is_string($vendorLocationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorLocationID, true), gettype($vendorLocationID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($vendorLocationID) && mb_strlen((string) $vendorLocationID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $vendorLocationID)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\TypeVendorLocation
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\TypeVendorLocation
     */
    public function setMoreRatesToken(?string $moreRatesToken = null): self
    {
        // validation for constraint: string
        if (!is_null($moreRatesToken) && !is_string($moreRatesToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moreRatesToken, true), gettype($moreRatesToken)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($moreRatesToken) && mb_strlen((string) $moreRatesToken) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $moreRatesToken)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($moreRatesToken) && mb_strlen((string) $moreRatesToken) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $moreRatesToken)), __LINE__);
        }
        $this->MoreRatesToken = $moreRatesToken;
        
        return $this;
    }
}
