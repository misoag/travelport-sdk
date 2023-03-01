<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRuleKey StructType
 * Meta information extracted from the WSDL
 * - documentation: The Fare Rule requested using a Key. The key is typically a provider specific string which is required to make a following Air Fare Rule Request. This Key is returned in Low Fare Shop or Air Price Response | At least one character
 * data in Next Result Reference
 * - base: xs:string
 * - minLength: 1
 * - whiteSpace: collapse
 * @subpackage Structs
 */
class FareRuleKey extends AbstractStructBase
{
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: The Fare Component to which this Rule Key applies
     * - use: required
     * @var string
     */
    public string $FareInfoRef;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: At least one character data in Next Result Reference
     * - base: xs:string
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * Constructor method for FareRuleKey
     * @uses FareRuleKey::setFareInfoRef()
     * @uses FareRuleKey::setProviderCode()
     * @uses FareRuleKey::set_()
     * @param string $fareInfoRef
     * @param string $providerCode
     * @param string $_
     */
    public function __construct(string $fareInfoRef, string $providerCode, ?string $_ = null)
    {
        $this
            ->setFareInfoRef($fareInfoRef)
            ->setProviderCode($providerCode)
            ->set_($_);
    }
    /**
     * Get FareInfoRef value
     * @return string
     */
    public function getFareInfoRef(): string
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param string $fareInfoRef
     * @return \Travelport\UniversalRecord\StructType\FareRuleKey
     */
    public function setFareInfoRef(string $fareInfoRef): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
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
     * @return \Travelport\UniversalRecord\StructType\FareRuleKey
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\FareRuleKey
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
