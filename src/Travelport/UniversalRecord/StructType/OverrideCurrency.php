<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OverrideCurrency StructType
 * @subpackage Structs
 */
class OverrideCurrency extends AbstractStructBase
{
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $CurrencyCode = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $CountryCode = null;
    /**
     * Constructor method for OverrideCurrency
     * @uses OverrideCurrency::setCurrencyCode()
     * @uses OverrideCurrency::setCountryCode()
     * @param string $currencyCode
     * @param string $countryCode
     */
    public function __construct(?string $currencyCode = null, ?string $countryCode = null)
    {
        $this
            ->setCurrencyCode($currencyCode)
            ->setCountryCode($countryCode);
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Travelport\UniversalRecord\StructType\OverrideCurrency
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        $this->CurrencyCode = $currencyCode;
        
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Travelport\UniversalRecord\StructType\OverrideCurrency
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        $this->CountryCode = $countryCode;
        
        return $this;
    }
}
