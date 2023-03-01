<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Category;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * The TaxDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxDetail
     * @var \Travelport\UniversalRecord\StructType\TaxDetail[]
     */
    public ?array $TaxDetail = null;
    /**
     * The IncludedInBase
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: IncludedInBase
     * @var \Travelport\UniversalRecord\StructType\IncludedInBase|null
     */
    public ?\Travelport\UniversalRecord\StructType\IncludedInBase $IncludedInBase = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: The tax key represents a valid key of tax | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The CarrierDefinedCategory
     * Meta information extracted from the WSDL
     * - documentation: Optional category, where a carrier has used a non-standard IATA tax category. The tax category will be set to "DU"
     * - use: optional
     * @var string|null
     */
    public ?string $CarrierDefinedCategory = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The segment to which that tax is relative (if applicable) | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SegmentRef = null;
    /**
     * The FlightDetailsRef
     * Meta information extracted from the WSDL
     * - documentation: The flight details that this tax is relative to (if applicable) | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $FlightDetailsRef = null;
    /**
     * The CouponRef
     * Meta information extracted from the WSDL
     * - documentation: The coupon to which that tax is relative (if applicable) | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $CouponRef = null;
    /**
     * The TaxExempted
     * Meta information extracted from the WSDL
     * - documentation: This indicates whether the tax specified by tax category is exempted.
     * - use: optional
     * @var bool|null
     */
    public ?bool $TaxExempted = null;
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
    public ?string $ProviderCode = null;
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
    public ?string $SupplierCode = null;
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
    public ?string $Text = null;
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
    public ?string $OriginAirport = null;
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
    public ?string $DestinationAirport = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $CountryCode = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - type: typeRef
     * - use: optional
     * @var string|null
     */
    public ?string $FareInfoRef = null;
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
     * @param \Travelport\UniversalRecord\StructType\TaxDetail[] $taxDetail
     * @param \Travelport\UniversalRecord\StructType\IncludedInBase $includedInBase
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
    public function __construct(string $category, string $amount, ?array $taxDetail = null, ?\Travelport\UniversalRecord\StructType\IncludedInBase $includedInBase = null, ?string $key = null, ?string $carrierDefinedCategory = null, ?string $segmentRef = null, ?string $flightDetailsRef = null, ?string $couponRef = null, ?bool $taxExempted = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $text = null, ?string $originAirport = null, ?string $destinationAirport = null, ?string $countryCode = null, ?string $fareInfoRef = null)
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setCategory(string $category): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get TaxDetail value
     * @return \Travelport\UniversalRecord\StructType\TaxDetail[]
     */
    public function getTaxDetail(): ?array
    {
        return $this->TaxDetail;
    }
    /**
     * Set TaxDetail value
     * @param \Travelport\UniversalRecord\StructType\TaxDetail[] $taxDetail
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setTaxDetail(?array $taxDetail = null): self
    {
        $this->TaxDetail = $taxDetail;
        
        return $this;
    }
    /**
     * Add item to TaxDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TaxDetail $item
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function addToTaxDetail(\Travelport\UniversalRecord\StructType\TaxDetail $item): self
    {
        $this->TaxDetail[] = $item;
        
        return $this;
    }
    /**
     * Get IncludedInBase value
     * @return \Travelport\UniversalRecord\StructType\IncludedInBase|null
     */
    public function getIncludedInBase(): ?\Travelport\UniversalRecord\StructType\IncludedInBase
    {
        return $this->IncludedInBase;
    }
    /**
     * Set IncludedInBase value
     * @param \Travelport\UniversalRecord\StructType\IncludedInBase $includedInBase
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setIncludedInBase(?\Travelport\UniversalRecord\StructType\IncludedInBase $includedInBase = null): self
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setKey(?string $key = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setCarrierDefinedCategory(?string $carrierDefinedCategory = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setFlightDetailsRef(?string $flightDetailsRef = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setCouponRef(?string $couponRef = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setTaxExempted(?bool $taxExempted = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setText(?string $text = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setOriginAirport(?string $originAirport = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setDestinationAirport(?string $destinationAirport = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setCountryCode(?string $countryCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
