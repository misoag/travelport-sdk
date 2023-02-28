<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $CountryCode = null;
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
    protected ?string $StateProvinceCode = null;
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
    protected ?string $CityCode = null;
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
     * This method is responsible for validating the value(s) passed to the setCountryCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountryCode method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCountryCodeForChoiceConstraintFromSetCountryCode($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'StateProvinceCode',
            'CityCode',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CountryCode can\'t be set as the property %s is already set. Only one property must be set among these properties: CountryCode, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CountryCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $countryCode
     * @return \Travelport\Util\StructType\PersonalGeography
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        // validation for constraint: choice(CountryCode, StateProvinceCode, CityCode)
        if ('' !== ($countryCodeChoiceErrorMessage = self::validateCountryCodeForChoiceConstraintFromSetCountryCode($countryCode))) {
            throw new InvalidArgumentException($countryCodeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($countryCode) && mb_strlen((string) $countryCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $countryCode)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setStateProvinceCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStateProvinceCode method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateStateProvinceCodeForChoiceConstraintFromSetStateProvinceCode($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CountryCode',
            'CityCode',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property StateProvinceCode can\'t be set as the property %s is already set. Only one property must be set among these properties: StateProvinceCode, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set StateProvinceCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $stateProvinceCode
     * @return \Travelport\Util\StructType\PersonalGeography
     */
    public function setStateProvinceCode(?string $stateProvinceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($stateProvinceCode) && !is_string($stateProvinceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateProvinceCode, true), gettype($stateProvinceCode)), __LINE__);
        }
        // validation for constraint: choice(CountryCode, StateProvinceCode, CityCode)
        if ('' !== ($stateProvinceCodeChoiceErrorMessage = self::validateStateProvinceCodeForChoiceConstraintFromSetStateProvinceCode($stateProvinceCode))) {
            throw new InvalidArgumentException($stateProvinceCodeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($stateProvinceCode) && mb_strlen((string) $stateProvinceCode) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $stateProvinceCode)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setCityCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCityCode method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCityCodeForChoiceConstraintFromSetCityCode($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CountryCode',
            'StateProvinceCode',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CityCode can\'t be set as the property %s is already set. Only one property must be set among these properties: CityCode, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CityCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $cityCode
     * @return \Travelport\Util\StructType\PersonalGeography
     */
    public function setCityCode(?string $cityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityCode, true), gettype($cityCode)), __LINE__);
        }
        // validation for constraint: choice(CountryCode, StateProvinceCode, CityCode)
        if ('' !== ($cityCodeChoiceErrorMessage = self::validateCityCodeForChoiceConstraintFromSetCityCode($cityCode))) {
            throw new InvalidArgumentException($cityCodeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($cityCode) && mb_strlen((string) $cityCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $cityCode)), __LINE__);
        }
        if (is_null($cityCode) || (is_array($cityCode) && empty($cityCode))) {
            unset($this->CityCode);
        } else {
            $this->CityCode = $cityCode;
        }
        
        return $this;
    }
}
