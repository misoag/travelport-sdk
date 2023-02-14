<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencySellInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about the agency selling the reservation
 * @subpackage Structs
 */
class AgencySellInfo extends AbstractStructBase
{
    /**
     * The IataCode
     * Meta information extracted from the WSDL
     * - documentation: The IATA code that pertains to this Agency and Branch. | ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * - use: optional
     * @var string|null
     */
    protected ?string $IataCode = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: The country code of the requesting agency. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: The currency code in which the reservation will be ticketed. | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: The IATA assigned airline/GDS code. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: The PCC in the host system. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PseudoCityCode = null;
    /**
     * The CityCode
     * Meta information extracted from the WSDL
     * - documentation: IATA code of "home" city or airport. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CityCode = null;
    /**
     * Constructor method for AgencySellInfo
     * @uses AgencySellInfo::setIataCode()
     * @uses AgencySellInfo::setCountry()
     * @uses AgencySellInfo::setCurrencyCode()
     * @uses AgencySellInfo::setProviderCode()
     * @uses AgencySellInfo::setPseudoCityCode()
     * @uses AgencySellInfo::setCityCode()
     * @param string $iataCode
     * @param string $country
     * @param string $currencyCode
     * @param string $providerCode
     * @param string $pseudoCityCode
     * @param string $cityCode
     */
    public function __construct(?string $iataCode = null, ?string $country = null, ?string $currencyCode = null, ?string $providerCode = null, ?string $pseudoCityCode = null, ?string $cityCode = null)
    {
        $this
            ->setIataCode($iataCode)
            ->setCountry($country)
            ->setCurrencyCode($currencyCode)
            ->setProviderCode($providerCode)
            ->setPseudoCityCode($pseudoCityCode)
            ->setCityCode($cityCode);
    }
    /**
     * Get IataCode value
     * @return string|null
     */
    public function getIataCode(): ?string
    {
        return $this->IataCode;
    }
    /**
     * Set IataCode value
     * @param string $iataCode
     * @return \Travelport\Hotel\StructType\AgencySellInfo
     */
    public function setIataCode(?string $iataCode = null): self
    {
        // validation for constraint: string
        if (!is_null($iataCode) && !is_string($iataCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iataCode, true), gettype($iataCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($iataCode) && mb_strlen((string) $iataCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $iataCode)), __LINE__);
        }
        $this->IataCode = $iataCode;
        
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Travelport\Hotel\StructType\AgencySellInfo
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($country) && mb_strlen((string) $country) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $country)), __LINE__);
        }
        $this->Country = $country;
        
        return $this;
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
     * @return \Travelport\Hotel\StructType\AgencySellInfo
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
     * @return \Travelport\Hotel\StructType\AgencySellInfo
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
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Travelport\Hotel\StructType\AgencySellInfo
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pseudoCityCode, true), gettype($pseudoCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Get CityCode value
     * @return string|null
     */
    public function getCityCode(): ?string
    {
        return $this->CityCode;
    }
    /**
     * Set CityCode value
     * @param string $cityCode
     * @return \Travelport\Hotel\StructType\AgencySellInfo
     */
    public function setCityCode(?string $cityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityCode, true), gettype($cityCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($cityCode) && mb_strlen((string) $cityCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $cityCode)), __LINE__);
        }
        $this->CityCode = $cityCode;
        
        return $this;
    }
}
