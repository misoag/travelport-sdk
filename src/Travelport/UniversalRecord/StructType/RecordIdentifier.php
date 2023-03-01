<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecordIdentifier StructType
 * Meta information extracted from the WSDL
 * - documentation: The information that uniquly identifies a particular supplier reservation.
 * @subpackage Structs
 */
class RecordIdentifier extends AbstractStructBase
{
    /**
     * The UniversalLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    public string $UniversalLocatorCode;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * Constructor method for RecordIdentifier
     * @uses RecordIdentifier::setUniversalLocatorCode()
     * @uses RecordIdentifier::setProviderCode()
     * @uses RecordIdentifier::setProviderLocatorCode()
     * @param string $universalLocatorCode
     * @param string $providerCode
     * @param string $providerLocatorCode
     */
    public function __construct(string $universalLocatorCode, ?string $providerCode = null, ?string $providerLocatorCode = null)
    {
        $this
            ->setUniversalLocatorCode($universalLocatorCode)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode);
    }
    /**
     * Get UniversalLocatorCode value
     * @return string
     */
    public function getUniversalLocatorCode(): string
    {
        return $this->UniversalLocatorCode;
    }
    /**
     * Set UniversalLocatorCode value
     * @param string $universalLocatorCode
     * @return \Travelport\UniversalRecord\StructType\RecordIdentifier
     */
    public function setUniversalLocatorCode(string $universalLocatorCode): self
    {
        $this->UniversalLocatorCode = $universalLocatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\RecordIdentifier
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\RecordIdentifier
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
