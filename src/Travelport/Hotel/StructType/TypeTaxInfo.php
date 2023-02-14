<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTaxInfo StructType
 * @subpackage Structs
 */
class TypeTaxInfo extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: The tax category represents a valid IATA tax code.
     * - use: required
     * @var string
     */
    protected string $Category;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: required
     * @var string
     */
    protected string $Amount;
    /**
     * The TaxDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxDetail
     * @var \Travelport\Hotel\StructType\TaxDetail[]
     */
    protected ?array $TaxDetail = null;
    /**
     * The IncludedInBase
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: IncludedInBase
     * @var \Travelport\Hotel\StructType\IncludedInBase|null
     */
    protected ?\Travelport\Hotel\StructType\IncludedInBase $IncludedInBase = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: The tax key represents a valid key of tax | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The CarrierDefinedCategory
     * Meta information extracted from the WSDL
     * - documentation: Optional category, where a carrier has used a non-standard IATA tax category. The tax category will be set to "DU"
     * - use: optional
     * @var string|null
     */
    protected ?string $CarrierDefinedCategory = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The segment to which that tax is relative (if applicable) | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentRef = null;
    /**
     * The FlightDetailsRef
     * Meta information extracted from the WSDL
     * - documentation: The flight details that this tax is relative to (if applicable) | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $FlightDetailsRef = null;
    /**
     * The CouponRef
     * Meta information extracted from the WSDL
     * - documentation: The coupon to which that tax is relative (if applicable) | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $CouponRef = null;
    /**
     * The TaxExempted
     * Meta information extracted from the WSDL
     * - documentation: This indicates whether the tax specified by tax category is exempted.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $TaxExempted = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Code of the provider returning this TaxInfo. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Code of the supplier returning this TaxInfo. | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Additional Information returned from Supplier.(ACH only) | Used for Character Strings, length 1 to 128.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * The OriginAirport
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * - type: typeAirport
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginAirport = null;
    /**
     * The DestinationAirport
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * - type: typeAirport
     * - use: optional
     * @var string|null
     */
    protected ?string $DestinationAirport = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $CountryCode = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - type: typeRef
     * - use: optional
     * @var string|null
     */
    protected ?string $FareInfoRef = null;
    /**
     * Constructor method for typeTaxInfo
     * @uses TypeTaxInfo::setCategory()
     * @uses TypeTaxInfo::setAmount()
     * @uses TypeTaxInfo::setTaxDetail()
     * @uses TypeTaxInfo::setIncludedInBase()
     * @uses TypeTaxInfo::setKey()
     * @uses TypeTaxInfo::setCarrierDefinedCategory()
     * @uses TypeTaxInfo::setSegmentRef()
     * @uses TypeTaxInfo::setFlightDetailsRef()
     * @uses TypeTaxInfo::setCouponRef()
     * @uses TypeTaxInfo::setTaxExempted()
     * @uses TypeTaxInfo::setProviderCode()
     * @uses TypeTaxInfo::setSupplierCode()
     * @uses TypeTaxInfo::setText()
     * @uses TypeTaxInfo::setOriginAirport()
     * @uses TypeTaxInfo::setDestinationAirport()
     * @uses TypeTaxInfo::setCountryCode()
     * @uses TypeTaxInfo::setFareInfoRef()
     * @param string $category
     * @param string $amount
     * @param \Travelport\Hotel\StructType\TaxDetail[] $taxDetail
     * @param \Travelport\Hotel\StructType\IncludedInBase $includedInBase
     * @param string $key
     * @param string $carrierDefinedCategory
     * @param string $segmentRef
     * @param string $flightDetailsRef
     * @param string $couponRef
     * @param bool $taxExempted
     * @param string $providerCode
     * @param string $supplierCode
     * @param string $text
     * @param string $originAirport
     * @param string $destinationAirport
     * @param string $countryCode
     * @param string $fareInfoRef
     */
    public function __construct(string $category, string $amount, ?array $taxDetail = null, ?\Travelport\Hotel\StructType\IncludedInBase $includedInBase = null, ?string $key = null, ?string $carrierDefinedCategory = null, ?string $segmentRef = null, ?string $flightDetailsRef = null, ?string $couponRef = null, ?bool $taxExempted = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $text = null, ?string $originAirport = null, ?string $destinationAirport = null, ?string $countryCode = null, ?string $fareInfoRef = null)
    {
        $this
            ->setCategory($category)
            ->setAmount($amount)
            ->setTaxDetail($taxDetail)
            ->setIncludedInBase($includedInBase)
            ->setKey($key)
            ->setCarrierDefinedCategory($carrierDefinedCategory)
            ->setSegmentRef($segmentRef)
            ->setFlightDetailsRef($flightDetailsRef)
            ->setCouponRef($couponRef)
            ->setTaxExempted($taxExempted)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
            ->setText($text)
            ->setOriginAirport($originAirport)
            ->setDestinationAirport($destinationAirport)
            ->setCountryCode($countryCode)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get Category value
     * @return string
     */
    public function getCategory(): string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setCategory(string $category): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setAmount(string $amount): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get TaxDetail value
     * @return \Travelport\Hotel\StructType\TaxDetail[]
     */
    public function getTaxDetail(): ?array
    {
        return $this->TaxDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxDetailForArrayConstraintsFromSetTaxDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeTaxInfoTaxDetailItem) {
            // validation for constraint: itemType
            if (!$typeTaxInfoTaxDetailItem instanceof \Travelport\Hotel\StructType\TaxDetail) {
                $invalidValues[] = is_object($typeTaxInfoTaxDetailItem) ? get_class($typeTaxInfoTaxDetailItem) : sprintf('%s(%s)', gettype($typeTaxInfoTaxDetailItem), var_export($typeTaxInfoTaxDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxDetail property can only contain items of type \Travelport\Hotel\StructType\TaxDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TaxDetail[] $taxDetail
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setTaxDetail(?array $taxDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxDetailArrayErrorMessage = self::validateTaxDetailForArrayConstraintsFromSetTaxDetail($taxDetail))) {
            throw new InvalidArgumentException($taxDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxDetail) && count($taxDetail) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxDetail)), __LINE__);
        }
        $this->TaxDetail = $taxDetail;
        
        return $this;
    }
    /**
     * Add item to TaxDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TaxDetail $item
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function addToTaxDetail(\Travelport\Hotel\StructType\TaxDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\TaxDetail) {
            throw new InvalidArgumentException(sprintf('The TaxDetail property can only contain items of type \Travelport\Hotel\StructType\TaxDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxDetail) && count($this->TaxDetail) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxDetail)), __LINE__);
        }
        $this->TaxDetail[] = $item;
        
        return $this;
    }
    /**
     * Get IncludedInBase value
     * @return \Travelport\Hotel\StructType\IncludedInBase|null
     */
    public function getIncludedInBase(): ?\Travelport\Hotel\StructType\IncludedInBase
    {
        return $this->IncludedInBase;
    }
    /**
     * Set IncludedInBase value
     * @param \Travelport\Hotel\StructType\IncludedInBase $includedInBase
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setIncludedInBase(?\Travelport\Hotel\StructType\IncludedInBase $includedInBase = null): self
    {
        $this->IncludedInBase = $includedInBase;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get CarrierDefinedCategory value
     * @return string|null
     */
    public function getCarrierDefinedCategory(): ?string
    {
        return $this->CarrierDefinedCategory;
    }
    /**
     * Set CarrierDefinedCategory value
     * @param string $carrierDefinedCategory
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setCarrierDefinedCategory(?string $carrierDefinedCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierDefinedCategory) && !is_string($carrierDefinedCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierDefinedCategory, true), gettype($carrierDefinedCategory)), __LINE__);
        }
        $this->CarrierDefinedCategory = $carrierDefinedCategory;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get FlightDetailsRef value
     * @return string|null
     */
    public function getFlightDetailsRef(): ?string
    {
        return $this->FlightDetailsRef;
    }
    /**
     * Set FlightDetailsRef value
     * @param string $flightDetailsRef
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setFlightDetailsRef(?string $flightDetailsRef = null): self
    {
        // validation for constraint: string
        if (!is_null($flightDetailsRef) && !is_string($flightDetailsRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightDetailsRef, true), gettype($flightDetailsRef)), __LINE__);
        }
        $this->FlightDetailsRef = $flightDetailsRef;
        
        return $this;
    }
    /**
     * Get CouponRef value
     * @return string|null
     */
    public function getCouponRef(): ?string
    {
        return $this->CouponRef;
    }
    /**
     * Set CouponRef value
     * @param string $couponRef
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setCouponRef(?string $couponRef = null): self
    {
        // validation for constraint: string
        if (!is_null($couponRef) && !is_string($couponRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($couponRef, true), gettype($couponRef)), __LINE__);
        }
        $this->CouponRef = $couponRef;
        
        return $this;
    }
    /**
     * Get TaxExempted value
     * @return bool|null
     */
    public function getTaxExempted(): ?bool
    {
        return $this->TaxExempted;
    }
    /**
     * Set TaxExempted value
     * @param bool $taxExempted
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setTaxExempted(?bool $taxExempted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($taxExempted) && !is_bool($taxExempted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($taxExempted, true), gettype($taxExempted)), __LINE__);
        }
        $this->TaxExempted = $taxExempted;
        
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
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($text) && mb_strlen((string) $text) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $text)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($text) && mb_strlen((string) $text) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Get OriginAirport value
     * @return string|null
     */
    public function getOriginAirport(): ?string
    {
        return $this->OriginAirport;
    }
    /**
     * Set OriginAirport value
     * @param string $originAirport
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setOriginAirport(?string $originAirport = null): self
    {
        // validation for constraint: string
        if (!is_null($originAirport) && !is_string($originAirport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originAirport, true), gettype($originAirport)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($originAirport) && mb_strlen((string) $originAirport) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $originAirport)), __LINE__);
        }
        $this->OriginAirport = $originAirport;
        
        return $this;
    }
    /**
     * Get DestinationAirport value
     * @return string|null
     */
    public function getDestinationAirport(): ?string
    {
        return $this->DestinationAirport;
    }
    /**
     * Set DestinationAirport value
     * @param string $destinationAirport
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setDestinationAirport(?string $destinationAirport = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationAirport) && !is_string($destinationAirport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationAirport, true), gettype($destinationAirport)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destinationAirport) && mb_strlen((string) $destinationAirport) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destinationAirport)), __LINE__);
        }
        $this->DestinationAirport = $destinationAirport;
        
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
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return string|null
     */
    public function getFareInfoRef(): ?string
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param string $fareInfoRef
     * @return \Travelport\Hotel\StructType\TypeTaxInfo
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($fareInfoRef) && !is_string($fareInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareInfoRef, true), gettype($fareInfoRef)), __LINE__);
        }
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
