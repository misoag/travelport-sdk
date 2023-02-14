<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContentProviderRetrieveReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves all available providers with their suppliers.
 * @subpackage Structs
 */
class ContentProviderRetrieveReq extends BaseReq
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: If ProviderCode present, Retruns Data for the ProviderCode | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Represents SupplierCode or Carrier code. If SupplierCode Presents, returns Data for the SupplierCode. | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * The ShowProviders
     * Meta information extracted from the WSDL
     * - documentation: Enumeration of reqested type of Provider Configuration requested - default is "Provisioned". An error may be returned if 'All' is requested and the user security level is not allowed this access
     * - default: Provisioned
     * @var string|null
     */
    protected ?string $ShowProviders = null;
    /**
     * Constructor method for ContentProviderRetrieveReq
     * @uses ContentProviderRetrieveReq::setProviderCode()
     * @uses ContentProviderRetrieveReq::setSupplierCode()
     * @uses ContentProviderRetrieveReq::setShowProviders()
     * @param string $providerCode
     * @param string $supplierCode
     * @param string $showProviders
     */
    public function __construct(?string $providerCode = null, ?string $supplierCode = null, ?string $showProviders = null)
    {
        $this
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
            ->setShowProviders($showProviders);
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
     * @return \Travelport\Util\StructType\ContentProviderRetrieveReq
     */
    public function setProviderCode(?string $providerCode = null): self
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
     * @return \Travelport\Util\StructType\ContentProviderRetrieveReq
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get ShowProviders value
     * @return string|null
     */
    public function getShowProviders(): ?string
    {
        return $this->ShowProviders;
    }
    /**
     * Set ShowProviders value
     * @uses \Travelport\Util\EnumType\TypeShowProvidersType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeShowProvidersType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $showProviders
     * @return \Travelport\Util\StructType\ContentProviderRetrieveReq
     */
    public function setShowProviders(?string $showProviders = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeShowProvidersType::valueIsValid($showProviders)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeShowProvidersType', is_array($showProviders) ? implode(', ', $showProviders) : var_export($showProviders, true), implode(', ', \Travelport\Util\EnumType\TypeShowProvidersType::getValidValues())), __LINE__);
        }
        $this->ShowProviders = $showProviders;
        
        return $this;
    }
}
