<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LanguageOption StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables itineraries and invoices to print in different languages.
 * @subpackage Structs
 */
class LanguageOption extends AbstractStructBase
{
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter ISO Language code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Language;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter ISO Country code | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Country;
    /**
     * Constructor method for LanguageOption
     * @uses LanguageOption::setLanguage()
     * @uses LanguageOption::setCountry()
     * @param string $language
     * @param string $country
     */
    public function __construct(string $language, string $country)
    {
        $this
            ->setLanguage($language)
            ->setCountry($country);
    }
    /**
     * Get Language value
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Travelport\Util\StructType\LanguageOption
     */
    public function setLanguage(string $language): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($language) && mb_strlen((string) $language) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $language)), __LINE__);
        }
        $this->Language = $language;
        
        return $this;
    }
    /**
     * Get Country value
     * @return string
     */
    public function getCountry(): string
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Travelport\Util\StructType\LanguageOption
     */
    public function setCountry(string $country): self
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
}
