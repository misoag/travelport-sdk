<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Country StructType
 * Meta information extracted from the WSDL
 * - documentation: The Full country name or two letter ISO country code e.g. US, France. A two letter country code is required for a Postal Code Searches.
 * @subpackage Structs
 */
class Country extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: required
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
     * The ExtendedCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ExtendedCode = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
    /**
     * The IataCode
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $IataCode = null;
    /**
     * The Continent
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Continent = null;
    /**
     * Constructor method for Country
     * @uses Country::setCode()
     * @uses Country::setName()
     * @uses Country::setExtendedCode()
     * @uses Country::setCurrencyCode()
     * @uses Country::setIataCode()
     * @uses Country::setContinent()
     * @param string $code
     * @param string $name
     * @param string $extendedCode
     * @param string $currencyCode
     * @param string $iataCode
     * @param string $continent
     */
    public function __construct(string $code, ?string $name = null, ?string $extendedCode = null, ?string $currencyCode = null, ?string $iataCode = null, ?string $continent = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setExtendedCode($extendedCode)
            ->setCurrencyCode($currencyCode)
            ->setIataCode($iataCode)
            ->setContinent($continent);
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
     * @return \Travelport\Util\StructType\Country
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($code) && mb_strlen((string) $code) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $code)), __LINE__);
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
     * @return \Travelport\Util\StructType\Country
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
     * Get ExtendedCode value
     * @return string|null
     */
    public function getExtendedCode(): ?string
    {
        return $this->ExtendedCode;
    }
    /**
     * Set ExtendedCode value
     * @param string $extendedCode
     * @return \Travelport\Util\StructType\Country
     */
    public function setExtendedCode(?string $extendedCode = null): self
    {
        // validation for constraint: string
        if (!is_null($extendedCode) && !is_string($extendedCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extendedCode, true), gettype($extendedCode)), __LINE__);
        }
        $this->ExtendedCode = $extendedCode;
        
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
     * @return \Travelport\Util\StructType\Country
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        
        return $this;
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
     * @return \Travelport\Util\StructType\Country
     */
    public function setIataCode(?string $iataCode = null): self
    {
        // validation for constraint: string
        if (!is_null($iataCode) && !is_string($iataCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iataCode, true), gettype($iataCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($iataCode) && mb_strlen((string) $iataCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $iataCode)), __LINE__);
        }
        $this->IataCode = $iataCode;
        
        return $this;
    }
    /**
     * Get Continent value
     * @return string|null
     */
    public function getContinent(): ?string
    {
        return $this->Continent;
    }
    /**
     * Set Continent value
     * @param string $continent
     * @return \Travelport\Util\StructType\Country
     */
    public function setContinent(?string $continent = null): self
    {
        // validation for constraint: string
        if (!is_null($continent) && !is_string($continent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($continent, true), gettype($continent)), __LINE__);
        }
        $this->Continent = $continent;
        
        return $this;
    }
}
