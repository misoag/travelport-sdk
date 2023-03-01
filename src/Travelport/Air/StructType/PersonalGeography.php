<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonalGeography StructType
 * Meta information extracted from the WSDL
 * - documentation: Personal geography details of the associated passenger.
 * @subpackage Structs
 */
class PersonalGeography extends AbstractStructBase
{
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: Passenger country code. | 2 Letter Country code
     * - base: xs:string
     * - choice: CountryCode | StateProvinceCode | CityCode
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - length: 2
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $CountryCode = null;
    /**
     * The StateProvinceCode
     * Meta information extracted from the WSDL
     * - documentation: Passenger state/province code. | Defines the State code.
     * - base: xs:string
     * - choice: CountryCode | StateProvinceCode | CityCode
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 6
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $StateProvinceCode = null;
    /**
     * The CityCode
     * Meta information extracted from the WSDL
     * - documentation: Passenger city code. | 3 Letter City Code
     * - base: xs:string
     * - choice: CountryCode | StateProvinceCode | CityCode
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - length: 3
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $CityCode = null;
    /**
     * Constructor method for PersonalGeography
     * @uses PersonalGeography::setCountryCode()
     * @uses PersonalGeography::setStateProvinceCode()
     * @uses PersonalGeography::setCityCode()
     * @param string $countryCode
     * @param string $stateProvinceCode
     * @param string $cityCode
     */
    public function __construct(?string $countryCode = null, ?string $stateProvinceCode = null, ?string $cityCode = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setStateProvinceCode($stateProvinceCode)
            ->setCityCode($cityCode);
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode ?? null;
    }
    /**
     * Set CountryCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $countryCode
     * @return \Travelport\Air\StructType\PersonalGeography
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        
        return $this;
    }
    /**
     * Get StateProvinceCode value
     * @return string|null
     */
    public function getStateProvinceCode(): ?string
    {
        return $this->StateProvinceCode ?? null;
    }
    /**
     * Set StateProvinceCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $stateProvinceCode
     * @return \Travelport\Air\StructType\PersonalGeography
     */
    public function setStateProvinceCode(?string $stateProvinceCode = null): self
    {
        if (is_null($stateProvinceCode) || (is_array($stateProvinceCode) && empty($stateProvinceCode))) {
            unset($this->StateProvinceCode);
        } else {
            $this->StateProvinceCode = $stateProvinceCode;
        }
        
        return $this;
    }
    /**
     * Get CityCode value
     * @return string|null
     */
    public function getCityCode(): ?string
    {
        return $this->CityCode ?? null;
    }
    /**
     * Set CityCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $cityCode
     * @return \Travelport\Air\StructType\PersonalGeography
     */
    public function setCityCode(?string $cityCode = null): self
    {
        if (is_null($cityCode) || (is_array($cityCode) && empty($cityCode))) {
            unset($this->CityCode);
        } else {
            $this->CityCode = $cityCode;
        }
        
        return $this;
    }
}
