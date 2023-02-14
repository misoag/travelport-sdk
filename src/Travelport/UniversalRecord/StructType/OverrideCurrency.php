<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $CurrencyCode = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $CountryCode = null;
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
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($currencyCode) && mb_strlen((string) $currencyCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $currencyCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($countryCode) && mb_strlen((string) $countryCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        
        return $this;
    }
}
