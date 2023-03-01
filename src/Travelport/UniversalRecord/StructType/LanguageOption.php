<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Language;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter ISO Country code | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Country;
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
     * @return \Travelport\UniversalRecord\StructType\LanguageOption
     */
    public function setLanguage(string $language): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\LanguageOption
     */
    public function setCountry(string $country): self
    {
        $this->Country = $country;
        
        return $this;
    }
}
