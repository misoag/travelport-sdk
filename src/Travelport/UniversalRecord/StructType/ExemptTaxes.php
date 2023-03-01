<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExemptTaxes StructType
 * Meta information extracted from the WSDL
 * - documentation: Request tax exemption for specific tax category and/or all taxes of a specific country
 * @subpackage Structs
 */
class ExemptTaxes extends AbstractStructBase
{
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: Specify ISO country code for which tax exemption is requested. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $CountryCode = null;
    /**
     * The TaxCategory
     * Meta information extracted from the WSDL
     * - documentation: Specify tax category for which tax exemption is requested.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $TaxCategory = null;
    /**
     * The AllTaxes
     * Meta information extracted from the WSDL
     * - documentation: Request exemption of all taxes.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AllTaxes = null;
    /**
     * The TaxTerritory
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $TaxTerritory = null;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 24
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $CompanyName = null;
    /**
     * Constructor method for ExemptTaxes
     * @uses ExemptTaxes::setCountryCode()
     * @uses ExemptTaxes::setTaxCategory()
     * @uses ExemptTaxes::setAllTaxes()
     * @uses ExemptTaxes::setTaxTerritory()
     * @uses ExemptTaxes::setCompanyName()
     * @param string[] $countryCode
     * @param string[] $taxCategory
     * @param bool $allTaxes
     * @param string $taxTerritory
     * @param string $companyName
     */
    public function __construct(?array $countryCode = null, ?array $taxCategory = null, ?bool $allTaxes = null, ?string $taxTerritory = null, ?string $companyName = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setTaxCategory($taxCategory)
            ->setAllTaxes($allTaxes)
            ->setTaxTerritory($taxTerritory)
            ->setCompanyName($companyName);
    }
    /**
     * Get CountryCode value
     * @return string[]
     */
    public function getCountryCode(): ?array
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string[] $countryCode
     * @return \Travelport\UniversalRecord\StructType\ExemptTaxes
     */
    public function setCountryCode(?array $countryCode = null): self
    {
        $this->CountryCode = $countryCode;
        
        return $this;
    }
    /**
     * Add item to CountryCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\ExemptTaxes
     */
    public function addToCountryCode(string $item): self
    {
        $this->CountryCode[] = $item;
        
        return $this;
    }
    /**
     * Get TaxCategory value
     * @return string[]
     */
    public function getTaxCategory(): ?array
    {
        return $this->TaxCategory;
    }
    /**
     * Set TaxCategory value
     * @param string[] $taxCategory
     * @return \Travelport\UniversalRecord\StructType\ExemptTaxes
     */
    public function setTaxCategory(?array $taxCategory = null): self
    {
        $this->TaxCategory = $taxCategory;
        
        return $this;
    }
    /**
     * Add item to TaxCategory value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\ExemptTaxes
     */
    public function addToTaxCategory(string $item): self
    {
        $this->TaxCategory[] = $item;
        
        return $this;
    }
    /**
     * Get AllTaxes value
     * @return bool|null
     */
    public function getAllTaxes(): ?bool
    {
        return $this->AllTaxes;
    }
    /**
     * Set AllTaxes value
     * @param bool $allTaxes
     * @return \Travelport\UniversalRecord\StructType\ExemptTaxes
     */
    public function setAllTaxes(?bool $allTaxes = null): self
    {
        $this->AllTaxes = $allTaxes;
        
        return $this;
    }
    /**
     * Get TaxTerritory value
     * @return string|null
     */
    public function getTaxTerritory(): ?string
    {
        return $this->TaxTerritory;
    }
    /**
     * Set TaxTerritory value
     * @param string $taxTerritory
     * @return \Travelport\UniversalRecord\StructType\ExemptTaxes
     */
    public function setTaxTerritory(?string $taxTerritory = null): self
    {
        $this->TaxTerritory = $taxTerritory;
        
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \Travelport\UniversalRecord\StructType\ExemptTaxes
     */
    public function setCompanyName(?string $companyName = null): self
    {
        $this->CompanyName = $companyName;
        
        return $this;
    }
}
