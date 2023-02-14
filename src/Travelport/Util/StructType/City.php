<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for City StructType
 * Meta information extracted from the WSDL
 * - documentation: The city name for the requested address, e.g. Atlanta. | City identifier
 * @subpackage Structs
 */
class City extends Location
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
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The StateCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $StateCode = null;
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
     * Constructor method for City
     * @uses City::setCode()
     * @uses City::setName()
     * @uses City::setStateCode()
     * @uses City::setCountryCode()
     * @param string $code
     * @param string $name
     * @param string $stateCode
     * @param string $countryCode
     */
    public function __construct(string $code, string $name, ?string $stateCode = null, ?string $countryCode = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setStateCode($stateCode)
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
     * @return \Travelport\Util\StructType\City
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
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Util\StructType\City
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get StateCode value
     * @return string|null
     */
    public function getStateCode(): ?string
    {
        return $this->StateCode;
    }
    /**
     * Set StateCode value
     * @param string $stateCode
     * @return \Travelport\Util\StructType\City
     */
    public function setStateCode(?string $stateCode = null): self
    {
        // validation for constraint: string
        if (!is_null($stateCode) && !is_string($stateCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateCode, true), gettype($stateCode)), __LINE__);
        }
        $this->StateCode = $stateCode;
        
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
     * @return \Travelport\Util\StructType\City
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
