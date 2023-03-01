<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeFeeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: A generic type of fee for those charges which are incurred by the passenger, but not necessarily shown on tickets
 * @subpackage Structs
 */
class TypeFeeInfo extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * The TaxInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TaxInfoRef[]
     */
    public ?array $TaxInfoRef = null;
    /**
     * The IncludedInBase
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: IncludedInBase
     * @var \Travelport\Air\StructType\IncludedInBase|null
     */
    public ?\Travelport\Air\StructType\IncludedInBase $IncludedInBase = null;
    /**
     * The BaseAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BaseAmount = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * The SubCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SubCode = null;
    /**
     * The FeeToken
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $FeeToken = null;
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - documentation: The reference to the one of the air reservation payments if fee included in charge | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PaymentRef = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to booking traveler | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * The PassengerTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * @var string|null
     */
    public ?string $PassengerTypeCode = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Additional Information returned from Supplier.(ACH only) | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Text = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - type: typeProviderCode
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - type: typeSupplierCode
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for typeFeeInfo
     * @uses TypeFeeInfo::setKey()
     * @uses TypeFeeInfo::setAmount()
     * @uses TypeFeeInfo::setCode()
     * @uses TypeFeeInfo::setTaxInfoRef()
     * @uses TypeFeeInfo::setIncludedInBase()
     * @uses TypeFeeInfo::setBaseAmount()
     * @uses TypeFeeInfo::setDescription()
     * @uses TypeFeeInfo::setSubCode()
     * @uses TypeFeeInfo::setFeeToken()
     * @uses TypeFeeInfo::setPaymentRef()
     * @uses TypeFeeInfo::setBookingTravelerRef()
     * @uses TypeFeeInfo::setPassengerTypeCode()
     * @uses TypeFeeInfo::setText()
     * @uses TypeFeeInfo::setProviderCode()
     * @uses TypeFeeInfo::setSupplierCode()
     * @uses TypeFeeInfo::setElStat()
     * @uses TypeFeeInfo::setKeyOverride()
     * @param string $key
     * @param string $amount
     * @param string $code
     * @param \Travelport\Air\StructType\TaxInfoRef[] $taxInfoRef
     * @param \Travelport\Air\StructType\IncludedInBase $includedInBase
     * @param string $baseAmount
     * @param string $description
     * @param string $subCode
     * @param string $feeToken
     * @param string $paymentRef
     * @param string $bookingTravelerRef
     * @param string $passengerTypeCode
     * @param string $text
     * @param string $providerCode
     * @param string $supplierCode
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, string $amount, string $code, ?array $taxInfoRef = null, ?\Travelport\Air\StructType\IncludedInBase $includedInBase = null, ?string $baseAmount = null, ?string $description = null, ?string $subCode = null, ?string $feeToken = null, ?string $paymentRef = null, ?string $bookingTravelerRef = null, ?string $passengerTypeCode = null, ?string $text = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setAmount($amount)
            ->setCode($code)
            ->setTaxInfoRef($taxInfoRef)
            ->setIncludedInBase($includedInBase)
            ->setBaseAmount($baseAmount)
            ->setDescription($description)
            ->setSubCode($subCode)
            ->setFeeToken($feeToken)
            ->setPaymentRef($paymentRef)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setText($text)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
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
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
        return $this;
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
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get TaxInfoRef value
     * @return \Travelport\Air\StructType\TaxInfoRef[]
     */
    public function getTaxInfoRef(): ?array
    {
        return $this->TaxInfoRef;
    }
    /**
     * Set TaxInfoRef value
     * @param \Travelport\Air\StructType\TaxInfoRef[] $taxInfoRef
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setTaxInfoRef(?array $taxInfoRef = null): self
    {
        $this->TaxInfoRef = $taxInfoRef;
        
        return $this;
    }
    /**
     * Add item to TaxInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TaxInfoRef $item
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function addToTaxInfoRef(\Travelport\Air\StructType\TaxInfoRef $item): self
    {
        $this->TaxInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get IncludedInBase value
     * @return \Travelport\Air\StructType\IncludedInBase|null
     */
    public function getIncludedInBase(): ?\Travelport\Air\StructType\IncludedInBase
    {
        return $this->IncludedInBase;
    }
    /**
     * Set IncludedInBase value
     * @param \Travelport\Air\StructType\IncludedInBase $includedInBase
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setIncludedInBase(?\Travelport\Air\StructType\IncludedInBase $includedInBase = null): self
    {
        $this->IncludedInBase = $includedInBase;
        
        return $this;
    }
    /**
     * Get BaseAmount value
     * @return string|null
     */
    public function getBaseAmount(): ?string
    {
        return $this->BaseAmount;
    }
    /**
     * Set BaseAmount value
     * @param string $baseAmount
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setBaseAmount(?string $baseAmount = null): self
    {
        $this->BaseAmount = $baseAmount;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get SubCode value
     * @return string|null
     */
    public function getSubCode(): ?string
    {
        return $this->SubCode;
    }
    /**
     * Set SubCode value
     * @param string $subCode
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setSubCode(?string $subCode = null): self
    {
        $this->SubCode = $subCode;
        
        return $this;
    }
    /**
     * Get FeeToken value
     * @return string|null
     */
    public function getFeeToken(): ?string
    {
        return $this->FeeToken;
    }
    /**
     * Set FeeToken value
     * @param string $feeToken
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setFeeToken(?string $feeToken = null): self
    {
        $this->FeeToken = $feeToken;
        
        return $this;
    }
    /**
     * Get PaymentRef value
     * @return string|null
     */
    public function getPaymentRef(): ?string
    {
        return $this->PaymentRef;
    }
    /**
     * Set PaymentRef value
     * @param string $paymentRef
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setPaymentRef(?string $paymentRef = null): self
    {
        $this->PaymentRef = $paymentRef;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode(): ?string
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setPassengerTypeCode(?string $passengerTypeCode = null): self
    {
        $this->PassengerTypeCode = $passengerTypeCode;
        
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
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setText(?string $text = null): self
    {
        $this->Text = $text;
        
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
     * @return \Travelport\Air\StructType\TypeFeeInfo
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
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Air\StructType\TypeFeeInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
