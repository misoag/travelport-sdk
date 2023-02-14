<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Amount;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The TaxInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \StructType\TaxInfoRef[]
     */
    protected ?array $TaxInfoRef = null;
    /**
     * The IncludedInBase
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: IncludedInBase
     * @var \StructType\IncludedInBase|null
     */
    protected ?\StructType\IncludedInBase $IncludedInBase = null;
    /**
     * The BaseAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BaseAmount = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The SubCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SubCode = null;
    /**
     * The FeeToken
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $FeeToken = null;
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - documentation: The reference to the one of the air reservation payments if fee included in charge | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PaymentRef = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to booking traveler | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * The PassengerTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * @var string|null
     */
    protected ?string $PassengerTypeCode = null;
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
    protected ?string $Text = null;
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
    protected ?string $ProviderCode = null;
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
    protected ?string $SupplierCode = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @param \StructType\TaxInfoRef[] $taxInfoRef
     * @param \StructType\IncludedInBase $includedInBase
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
    public function __construct(string $key, string $amount, string $code, ?array $taxInfoRef = null, ?\StructType\IncludedInBase $includedInBase = null, ?string $baseAmount = null, ?string $description = null, ?string $subCode = null, ?string $feeToken = null, ?string $paymentRef = null, ?string $bookingTravelerRef = null, ?string $passengerTypeCode = null, ?string $text = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \StructType\TypeFeeInfo
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \StructType\TypeFeeInfo
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
     * @return \StructType\TypeFeeInfo
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get TaxInfoRef value
     * @return \StructType\TaxInfoRef[]
     */
    public function getTaxInfoRef(): ?array
    {
        return $this->TaxInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoRefForArrayConstraintsFromSetTaxInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeFeeInfoTaxInfoRefItem) {
            // validation for constraint: itemType
            if (!$typeFeeInfoTaxInfoRefItem instanceof \StructType\TaxInfoRef) {
                $invalidValues[] = is_object($typeFeeInfoTaxInfoRefItem) ? get_class($typeFeeInfoTaxInfoRefItem) : sprintf('%s(%s)', gettype($typeFeeInfoTaxInfoRefItem), var_export($typeFeeInfoTaxInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxInfoRef property can only contain items of type \StructType\TaxInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxInfoRef value
     * @throws InvalidArgumentException
     * @param \StructType\TaxInfoRef[] $taxInfoRef
     * @return \StructType\TypeFeeInfo
     */
    public function setTaxInfoRef(?array $taxInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoRefArrayErrorMessage = self::validateTaxInfoRefForArrayConstraintsFromSetTaxInfoRef($taxInfoRef))) {
            throw new InvalidArgumentException($taxInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxInfoRef) && count($taxInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxInfoRef)), __LINE__);
        }
        $this->TaxInfoRef = $taxInfoRef;
        
        return $this;
    }
    /**
     * Add item to TaxInfoRef value
     * @throws InvalidArgumentException
     * @param \StructType\TaxInfoRef $item
     * @return \StructType\TypeFeeInfo
     */
    public function addToTaxInfoRef(\StructType\TaxInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TaxInfoRef) {
            throw new InvalidArgumentException(sprintf('The TaxInfoRef property can only contain items of type \StructType\TaxInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxInfoRef) && count($this->TaxInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxInfoRef)), __LINE__);
        }
        $this->TaxInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get IncludedInBase value
     * @return \StructType\IncludedInBase|null
     */
    public function getIncludedInBase(): ?\StructType\IncludedInBase
    {
        return $this->IncludedInBase;
    }
    /**
     * Set IncludedInBase value
     * @param \StructType\IncludedInBase $includedInBase
     * @return \StructType\TypeFeeInfo
     */
    public function setIncludedInBase(?\StructType\IncludedInBase $includedInBase = null): self
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
     * @return \StructType\TypeFeeInfo
     */
    public function setBaseAmount(?string $baseAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($baseAmount) && !is_string($baseAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseAmount, true), gettype($baseAmount)), __LINE__);
        }
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
     * @return \StructType\TypeFeeInfo
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
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
     * @return \StructType\TypeFeeInfo
     */
    public function setSubCode(?string $subCode = null): self
    {
        // validation for constraint: string
        if (!is_null($subCode) && !is_string($subCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subCode, true), gettype($subCode)), __LINE__);
        }
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
     * @return \StructType\TypeFeeInfo
     */
    public function setFeeToken(?string $feeToken = null): self
    {
        // validation for constraint: string
        if (!is_null($feeToken) && !is_string($feeToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeToken, true), gettype($feeToken)), __LINE__);
        }
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
     * @return \StructType\TypeFeeInfo
     */
    public function setPaymentRef(?string $paymentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentRef) && !is_string($paymentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentRef, true), gettype($paymentRef)), __LINE__);
        }
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
     * @return \StructType\TypeFeeInfo
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
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
     * @return \StructType\TypeFeeInfo
     */
    public function setPassengerTypeCode(?string $passengerTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerTypeCode, true), gettype($passengerTypeCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($passengerTypeCode) && mb_strlen((string) $passengerTypeCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $passengerTypeCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($passengerTypeCode) && mb_strlen((string) $passengerTypeCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $passengerTypeCode)), __LINE__);
        }
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
     * @return \StructType\TypeFeeInfo
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($text) && mb_strlen((string) $text) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $text)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($text) && mb_strlen((string) $text) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $text)), __LINE__);
        }
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
     * @return \StructType\TypeFeeInfo
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
     * @return \StructType\TypeFeeInfo
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
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \EnumType\TypeElementStatus::valueIsValid()
     * @uses \EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \StructType\TypeFeeInfo
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
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
     * @return \StructType\TypeFeeInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
