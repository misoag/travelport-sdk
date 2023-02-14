<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Airport StructType
 * Meta information extracted from the WSDL
 * - documentation: Airport identifier
 * @subpackage Structs
 */
class Airport extends Location
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Code;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The CityCode
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CityCode = null;
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
     * Constructor method for Airport
     * @uses Airport::setCode()
     * @uses Airport::setName()
     * @uses Airport::setCityCode()
     * @uses Airport::setCountryCode()
     * @param string $code
     * @param string $name
     * @param string $cityCode
     * @param string $countryCode
     */
    public function __construct(string $code, ?string $name = null, ?string $cityCode = null, ?string $countryCode = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setCityCode($cityCode)
            ->setCountryCode($countryCode);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\Util\StructType\Airport
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($code) && mb_strlen((string) $code) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Util\StructType\Airport
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
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
     * @return \Travelport\Util\StructType\Airport
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
     * @return \Travelport\Util\StructType\Airport
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
