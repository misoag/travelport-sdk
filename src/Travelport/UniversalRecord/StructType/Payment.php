<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payment StructType
 * Meta information extracted from the WSDL
 * - documentation: Payment information - must be used in conjunction with credit card info
 * @subpackage Structs
 */
class Payment extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - documentation: The credit card that is will be used to make this payment. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $FormOfPaymentRef;
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
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: If the type represents a per traveler payment, then this will reference the traveler this payment refers to. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * The AmountType
     * Meta information extracted from the WSDL
     * - documentation: This field displays type of payment amount when it is non-monetary. Presently available/supported value is "Flight Pass Credits". | Used for Character Strings, length 1 to 32.
     * - base: xs:string
     * - maxLength: 32
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $AmountType = null;
    /**
     * The ApproximateAmount
     * Meta information extracted from the WSDL
     * - documentation: It stores the converted payment amount in agency's default currency | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateAmount = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status to indicate the business association of the payment element.
     * - use: optional
     * @var string|null
     */
    public ?string $Status = null;
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
     * Constructor method for Payment
     * @uses Payment::setType()
     * @uses Payment::setFormOfPaymentRef()
     * @uses Payment::setAmount()
     * @uses Payment::setKey()
     * @uses Payment::setBookingTravelerRef()
     * @uses Payment::setAmountType()
     * @uses Payment::setApproximateAmount()
     * @uses Payment::setStatus()
     * @uses Payment::setElStat()
     * @uses Payment::setKeyOverride()
     * @param string $type
     * @param string $formOfPaymentRef
     * @param string $amount
     * @param string $key
     * @param string $bookingTravelerRef
     * @param string $amountType
     * @param string $approximateAmount
     * @param string $status
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $type, string $formOfPaymentRef, string $amount, ?string $key = null, ?string $bookingTravelerRef = null, ?string $amountType = null, ?string $approximateAmount = null, ?string $status = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setType($type)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setAmount($amount)
            ->setKey($key)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setAmountType($amountType)
            ->setApproximateAmount($approximateAmount)
            ->setStatus($status)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Payment
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return string
     */
    public function getFormOfPaymentRef(): string
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * Set FormOfPaymentRef value
     * @param string $formOfPaymentRef
     * @return \Travelport\UniversalRecord\StructType\Payment
     */
    public function setFormOfPaymentRef(string $formOfPaymentRef): self
    {
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
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
     * @return \Travelport\UniversalRecord\StructType\Payment
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
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
     * @return \Travelport\UniversalRecord\StructType\Payment
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
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
     * @return \Travelport\UniversalRecord\StructType\Payment
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get AmountType value
     * @return string|null
     */
    public function getAmountType(): ?string
    {
        return $this->AmountType;
    }
    /**
     * Set AmountType value
     * @param string $amountType
     * @return \Travelport\UniversalRecord\StructType\Payment
     */
    public function setAmountType(?string $amountType = null): self
    {
        $this->AmountType = $amountType;
        
        return $this;
    }
    /**
     * Get ApproximateAmount value
     * @return string|null
     */
    public function getApproximateAmount(): ?string
    {
        return $this->ApproximateAmount;
    }
    /**
     * Set ApproximateAmount value
     * @param string $approximateAmount
     * @return \Travelport\UniversalRecord\StructType\Payment
     */
    public function setApproximateAmount(?string $approximateAmount = null): self
    {
        $this->ApproximateAmount = $approximateAmount;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\Payment
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
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
     * @return \Travelport\UniversalRecord\StructType\Payment
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
     * @return \Travelport\UniversalRecord\StructType\Payment
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
