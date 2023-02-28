<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?array $CountryCode = null;
    /**
     * The TaxCategory
     * Meta information extracted from the WSDL
     * - documentation: Specify tax category for which tax exemption is requested.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $TaxCategory = null;
    /**
     * The AllTaxes
     * Meta information extracted from the WSDL
     * - documentation: Request exemption of all taxes.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AllTaxes = null;
    /**
     * The TaxTerritory
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $TaxTerritory = null;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 24
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $CompanyName = null;
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
     * This method is responsible for validating the value(s) passed to the setCountryCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountryCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountryCodeForArrayConstraintFromSetCountryCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $exemptTaxesCountryCodeItem) {
            // validation for constraint: itemType
            if (!is_string($exemptTaxesCountryCodeItem)) {
                $invalidValues[] = is_object($exemptTaxesCountryCodeItem) ? get_class($exemptTaxesCountryCodeItem) : sprintf('%s(%s)', gettype($exemptTaxesCountryCodeItem), var_export($exemptTaxesCountryCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CountryCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCountryCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountryCode method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountryCodeForLengthConstraintFromSetCountryCode(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $exemptTaxesCountryCodeItem) {
            // validation for constraint: length(2)
            if (mb_strlen((string) $exemptTaxesCountryCodeItem) !== 2) {
                $invalidValues[] = var_export($exemptTaxesCountryCodeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 2', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CountryCode value
     * @throws InvalidArgumentException
     * @param string[] $countryCode
     * @return \Travelport\UniversalRecord\StructType\ExemptTaxes
     */
    public function setCountryCode(?array $countryCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($countryCodeArrayErrorMessage = self::validateCountryCodeForArrayConstraintFromSetCountryCode($countryCode))) {
            throw new InvalidArgumentException($countryCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(2)
        if ('' !== ($countryCodeLengthErrorMessage = self::validateCountryCodeForLengthConstraintFromSetCountryCode($countryCode))) {
            throw new InvalidArgumentException($countryCodeLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($countryCode) && count($countryCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($countryCode)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CountryCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(2)
        if (mb_strlen((string) $item) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CountryCode) && count($this->CountryCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CountryCode)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setTaxCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxCategory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxCategoryForArrayConstraintFromSetTaxCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $exemptTaxesTaxCategoryItem) {
            // validation for constraint: itemType
            if (!is_string($exemptTaxesTaxCategoryItem)) {
                $invalidValues[] = is_object($exemptTaxesTaxCategoryItem) ? get_class($exemptTaxesTaxCategoryItem) : sprintf('%s(%s)', gettype($exemptTaxesTaxCategoryItem), var_export($exemptTaxesTaxCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxCategory property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxCategory value
     * @throws InvalidArgumentException
     * @param string[] $taxCategory
     * @return \Travelport\UniversalRecord\StructType\ExemptTaxes
     */
    public function setTaxCategory(?array $taxCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxCategoryArrayErrorMessage = self::validateTaxCategoryForArrayConstraintFromSetTaxCategory($taxCategory))) {
            throw new InvalidArgumentException($taxCategoryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxCategory) && count($taxCategory) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxCategory)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The TaxCategory property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxCategory) && count($this->TaxCategory) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxCategory)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($allTaxes) && !is_bool($allTaxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allTaxes, true), gettype($allTaxes)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($taxTerritory) && !is_string($taxTerritory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxTerritory, true), gettype($taxTerritory)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($taxTerritory) && mb_strlen((string) $taxTerritory) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $taxTerritory)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        // validation for constraint: maxLength(24)
        if (!is_null($companyName) && mb_strlen((string) $companyName) > 24) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 24', mb_strlen((string) $companyName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($companyName) && mb_strlen((string) $companyName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
        
        return $this;
    }
}
