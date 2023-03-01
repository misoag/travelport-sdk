<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $IataCode = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: The country code of the requesting agency. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $Country = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: The currency code in which the reservation will be ticketed. | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $CurrencyCode = null;
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
    public ?string $ProviderCode = null;
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
    public ?string $PseudoCityCode = null;
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
    public ?string $CityCode = null;
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
     * @return \Travelport\UniversalRecord\StructType\AgencySellInfo
     */
    public function setIataCode(?string $iataCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\AgencySellInfo
     */
    public function setCountry(?string $country = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\AgencySellInfo
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\AgencySellInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\AgencySellInfo
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\AgencySellInfo
     */
    public function setCityCode(?string $cityCode = null): self
    {
        $this->CityCode = $cityCode;
        
        return $this;
    }
}
