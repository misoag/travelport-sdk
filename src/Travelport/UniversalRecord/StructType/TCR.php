<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TCR StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Ticketless carriers
 * @subpackage Structs
 */
class TCR extends AbstractStructBase
{
    /**
     * The TCRNumber
     * Meta information extracted from the WSDL
     * - documentation: The identifying number for a Ticketless Air Reservation. | The identifying number for a Ticketless Air Reservation
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $TCRNumber;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The current status of this TCR. Some status values are not applicable by some Airlines.
     * - use: required
     * @var string
     */
    protected string $Status;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which the status was changed on this TCR due to an action event (itemized from the booleans below).
     * - use: required
     * @var string
     */
    protected string $ModifiedDate;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: The base price of this TCR as a whole as it was when it was first booked. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $BasePrice;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: The taxes of this TCR as a whole as it was when it was first booked. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Taxes;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: The fees of this TCR as a whole as it was when it was first booked. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Fees;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - documentation: Is it possible to perform a Refund for this TCR.
     * - use: required
     * @var bool
     */
    protected bool $Refundable;
    /**
     * The Exchangeable
     * Meta information extracted from the WSDL
     * - documentation: Is it possible to perform an Exchange for this TCR.
     * - use: required
     * @var bool
     */
    protected bool $Exchangeable;
    /**
     * The Voidable
     * Meta information extracted from the WSDL
     * - documentation: Is it possible to perform a Void on this TCR.
     * - use: required
     * @var bool
     */
    protected bool $Voidable;
    /**
     * The Modifiable
     * Meta information extracted from the WSDL
     * - documentation: Is it possible to modify this TCR (opposed to Refund/Exchange/Void).
     * - use: required
     * @var bool
     */
    protected bool $Modifiable;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    protected ?array $FormOfPayment = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\UniversalRecord\StructType\Payment[]
     */
    protected ?array $Payment = null;
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:BookingTraveler
     * @var \Travelport\UniversalRecord\StructType\BookingTraveler[]
     */
    protected ?array $BookingTraveler = null;
    /**
     * The PassengerTicketNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PassengerTicketNumber
     * @var \Travelport\UniversalRecord\StructType\PassengerTicketNumber[]
     */
    protected ?array $PassengerTicketNumber = null;
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfo[]
     */
    protected ?array $AirPricingInfo = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AgencyInfo $AgencyInfo = null;
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirReservationLocatorCode
     * @var \Travelport\UniversalRecord\StructType\AirReservationLocatorCode|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    protected ?array $SupplierLocator = null;
    /**
     * The RefundRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:RefundRemark
     * @var \Travelport\UniversalRecord\StructType\RefundRemark[]
     */
    protected ?array $RefundRemark = null;
    /**
     * The ConfirmedDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which this TCR was confirmed (not created). This mean the payment was approved and processed and travel for this TCR is confirmed.
     * - use: optional
     * @var string|null
     */
    protected ?string $ConfirmedDate = null;
    /**
     * The RefundAccessCode
     * Meta information extracted from the WSDL
     * - ref: RefundAccessCode
     * - use: optional
     * @var string|null
     */
    protected ?string $RefundAccessCode = null;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: Total Amount refunded to the customer. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RefundAmount = null;
    /**
     * The RefundFee
     * Meta information extracted from the WSDL
     * - documentation: Charges incurred for processing refund. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RefundFee = null;
    /**
     * The ForfeitAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount forfeited as a result of refund. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ForfeitAmount = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * Constructor method for TCR
     * @uses TCR::setTCRNumber()
     * @uses TCR::setStatus()
     * @uses TCR::setModifiedDate()
     * @uses TCR::setBasePrice()
     * @uses TCR::setTaxes()
     * @uses TCR::setFees()
     * @uses TCR::setRefundable()
     * @uses TCR::setExchangeable()
     * @uses TCR::setVoidable()
     * @uses TCR::setModifiable()
     * @uses TCR::setFormOfPayment()
     * @uses TCR::setPayment()
     * @uses TCR::setBookingTraveler()
     * @uses TCR::setPassengerTicketNumber()
     * @uses TCR::setAirPricingInfo()
     * @uses TCR::setAgencyInfo()
     * @uses TCR::setAirReservationLocatorCode()
     * @uses TCR::setSupplierLocator()
     * @uses TCR::setRefundRemark()
     * @uses TCR::setConfirmedDate()
     * @uses TCR::setRefundAccessCode()
     * @uses TCR::setRefundAmount()
     * @uses TCR::setRefundFee()
     * @uses TCR::setForfeitAmount()
     * @uses TCR::setProviderCode()
     * @uses TCR::setProviderLocatorCode()
     * @uses TCR::setSupplierCode()
     * @param string $tCRNumber
     * @param string $status
     * @param string $modifiedDate
     * @param string $basePrice
     * @param string $taxes
     * @param string $fees
     * @param bool $refundable
     * @param bool $exchangeable
     * @param bool $voidable
     * @param bool $modifiable
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler[] $bookingTraveler
     * @param \Travelport\UniversalRecord\StructType\PassengerTicketNumber[] $passengerTicketNumber
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @param \Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo
     * @param \Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\UniversalRecord\StructType\RefundRemark[] $refundRemark
     * @param string $confirmedDate
     * @param string $refundAccessCode
     * @param string $refundAmount
     * @param string $refundFee
     * @param string $forfeitAmount
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $supplierCode
     */
    public function __construct(string $tCRNumber, string $status, string $modifiedDate, string $basePrice, string $taxes, string $fees, bool $refundable, bool $exchangeable, bool $voidable, bool $modifiable, ?array $formOfPayment = null, ?array $payment = null, ?array $bookingTraveler = null, ?array $passengerTicketNumber = null, ?array $airPricingInfo = null, ?\Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo = null, ?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?array $supplierLocator = null, ?array $refundRemark = null, ?string $confirmedDate = null, ?string $refundAccessCode = null, ?string $refundAmount = null, ?string $refundFee = null, ?string $forfeitAmount = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $supplierCode = null)
    {
        $this
            ->setTCRNumber($tCRNumber)
            ->setStatus($status)
            ->setModifiedDate($modifiedDate)
            ->setBasePrice($basePrice)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setRefundable($refundable)
            ->setExchangeable($exchangeable)
            ->setVoidable($voidable)
            ->setModifiable($modifiable)
            ->setFormOfPayment($formOfPayment)
            ->setPayment($payment)
            ->setBookingTraveler($bookingTraveler)
            ->setPassengerTicketNumber($passengerTicketNumber)
            ->setAirPricingInfo($airPricingInfo)
            ->setAgencyInfo($agencyInfo)
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setSupplierLocator($supplierLocator)
            ->setRefundRemark($refundRemark)
            ->setConfirmedDate($confirmedDate)
            ->setRefundAccessCode($refundAccessCode)
            ->setRefundAmount($refundAmount)
            ->setRefundFee($refundFee)
            ->setForfeitAmount($forfeitAmount)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get TCRNumber value
     * @return string
     */
    public function getTCRNumber(): string
    {
        return $this->TCRNumber;
    }
    /**
     * Set TCRNumber value
     * @param string $tCRNumber
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setTCRNumber(string $tCRNumber): self
    {
        // validation for constraint: string
        if (!is_null($tCRNumber) && !is_string($tCRNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tCRNumber, true), gettype($tCRNumber)), __LINE__);
        }
        $this->TCRNumber = $tCRNumber;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Travelport\UniversalRecord\EnumType\TypeTCRStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTCRStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTCRStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTCRStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTCRStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get ModifiedDate value
     * @return string
     */
    public function getModifiedDate(): string
    {
        return $this->ModifiedDate;
    }
    /**
     * Set ModifiedDate value
     * @param string $modifiedDate
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setModifiedDate(string $modifiedDate): self
    {
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedDate, true), gettype($modifiedDate)), __LINE__);
        }
        $this->ModifiedDate = $modifiedDate;
        
        return $this;
    }
    /**
     * Get BasePrice value
     * @return string
     */
    public function getBasePrice(): string
    {
        return $this->BasePrice;
    }
    /**
     * Set BasePrice value
     * @param string $basePrice
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setBasePrice(string $basePrice): self
    {
        // validation for constraint: string
        if (!is_null($basePrice) && !is_string($basePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($basePrice, true), gettype($basePrice)), __LINE__);
        }
        $this->BasePrice = $basePrice;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string
     */
    public function getTaxes(): string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setTaxes(string $taxes): self
    {
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return string
     */
    public function getFees(): string
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param string $fees
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setFees(string $fees): self
    {
        // validation for constraint: string
        if (!is_null($fees) && !is_string($fees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fees, true), gettype($fees)), __LINE__);
        }
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get Refundable value
     * @return bool
     */
    public function getRefundable(): bool
    {
        return $this->Refundable;
    }
    /**
     * Set Refundable value
     * @param bool $refundable
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setRefundable(bool $refundable): self
    {
        // validation for constraint: boolean
        if (!is_null($refundable) && !is_bool($refundable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refundable, true), gettype($refundable)), __LINE__);
        }
        $this->Refundable = $refundable;
        
        return $this;
    }
    /**
     * Get Exchangeable value
     * @return bool
     */
    public function getExchangeable(): bool
    {
        return $this->Exchangeable;
    }
    /**
     * Set Exchangeable value
     * @param bool $exchangeable
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setExchangeable(bool $exchangeable): self
    {
        // validation for constraint: boolean
        if (!is_null($exchangeable) && !is_bool($exchangeable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exchangeable, true), gettype($exchangeable)), __LINE__);
        }
        $this->Exchangeable = $exchangeable;
        
        return $this;
    }
    /**
     * Get Voidable value
     * @return bool
     */
    public function getVoidable(): bool
    {
        return $this->Voidable;
    }
    /**
     * Set Voidable value
     * @param bool $voidable
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setVoidable(bool $voidable): self
    {
        // validation for constraint: boolean
        if (!is_null($voidable) && !is_bool($voidable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($voidable, true), gettype($voidable)), __LINE__);
        }
        $this->Voidable = $voidable;
        
        return $this;
    }
    /**
     * Get Modifiable value
     * @return bool
     */
    public function getModifiable(): bool
    {
        return $this->Modifiable;
    }
    /**
     * Set Modifiable value
     * @param bool $modifiable
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setModifiable(bool $modifiable): self
    {
        // validation for constraint: boolean
        if (!is_null($modifiable) && !is_bool($modifiable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($modifiable, true), gettype($modifiable)), __LINE__);
        }
        $this->Modifiable = $modifiable;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setFormOfPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$tCRFormOfPaymentItem instanceof \Travelport\UniversalRecord\StructType\FormOfPayment) {
                $invalidValues[] = is_object($tCRFormOfPaymentItem) ? get_class($tCRFormOfPaymentItem) : sprintf('%s(%s)', gettype($tCRFormOfPaymentItem), var_export($tCRFormOfPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FormOfPayment property can only contain items of type \Travelport\UniversalRecord\StructType\FormOfPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($formOfPaymentArrayErrorMessage = self::validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($formOfPayment) && count($formOfPayment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($formOfPayment)), __LINE__);
        }
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $item
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function addToFormOfPayment(\Travelport\UniversalRecord\StructType\FormOfPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FormOfPayment) {
            throw new InvalidArgumentException(sprintf('The FormOfPayment property can only contain items of type \Travelport\UniversalRecord\StructType\FormOfPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FormOfPayment) && count($this->FormOfPayment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FormOfPayment)), __LINE__);
        }
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\UniversalRecord\StructType\Payment[]
     */
    public function getPayment(): ?array
    {
        return $this->Payment;
    }
    /**
     * This method is responsible for validating the values passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintsFromSetPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRPaymentItem) {
            // validation for constraint: itemType
            if (!$tCRPaymentItem instanceof \Travelport\UniversalRecord\StructType\Payment) {
                $invalidValues[] = is_object($tCRPaymentItem) ? get_class($tCRPaymentItem) : sprintf('%s(%s)', gettype($tCRPaymentItem), var_export($tCRPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payment property can only contain items of type \Travelport\UniversalRecord\StructType\Payment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setPayment(?array $payment = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentArrayErrorMessage = self::validatePaymentForArrayConstraintsFromSetPayment($payment))) {
            throw new InvalidArgumentException($paymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($payment) && count($payment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($payment)), __LINE__);
        }
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Payment $item
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function addToPayment(\Travelport\UniversalRecord\StructType\Payment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Payment) {
            throw new InvalidArgumentException(sprintf('The Payment property can only contain items of type \Travelport\UniversalRecord\StructType\Payment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Payment) && count($this->Payment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Payment)), __LINE__);
        }
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTraveler value
     * @return \Travelport\UniversalRecord\StructType\BookingTraveler[]
     */
    public function getBookingTraveler(): ?array
    {
        return $this->BookingTraveler;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTraveler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTraveler method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerForArrayConstraintsFromSetBookingTraveler(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRBookingTravelerItem) {
            // validation for constraint: itemType
            if (!$tCRBookingTravelerItem instanceof \Travelport\UniversalRecord\StructType\BookingTraveler) {
                $invalidValues[] = is_object($tCRBookingTravelerItem) ? get_class($tCRBookingTravelerItem) : sprintf('%s(%s)', gettype($tCRBookingTravelerItem), var_export($tCRBookingTravelerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTraveler property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTraveler, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler[] $bookingTraveler
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setBookingTraveler(?array $bookingTraveler = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerArrayErrorMessage = self::validateBookingTravelerForArrayConstraintsFromSetBookingTraveler($bookingTraveler))) {
            throw new InvalidArgumentException($bookingTravelerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTraveler) && count($bookingTraveler) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTraveler)), __LINE__);
        }
        $this->BookingTraveler = $bookingTraveler;
        
        return $this;
    }
    /**
     * Add item to BookingTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler $item
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function addToBookingTraveler(\Travelport\UniversalRecord\StructType\BookingTraveler $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingTraveler) {
            throw new InvalidArgumentException(sprintf('The BookingTraveler property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTraveler, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTraveler) && count($this->BookingTraveler) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTraveler)), __LINE__);
        }
        $this->BookingTraveler[] = $item;
        
        return $this;
    }
    /**
     * Get PassengerTicketNumber value
     * @return \Travelport\UniversalRecord\StructType\PassengerTicketNumber[]
     */
    public function getPassengerTicketNumber(): ?array
    {
        return $this->PassengerTicketNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setPassengerTicketNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerTicketNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerTicketNumberForArrayConstraintsFromSetPassengerTicketNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRPassengerTicketNumberItem) {
            // validation for constraint: itemType
            if (!$tCRPassengerTicketNumberItem instanceof \Travelport\UniversalRecord\StructType\PassengerTicketNumber) {
                $invalidValues[] = is_object($tCRPassengerTicketNumberItem) ? get_class($tCRPassengerTicketNumberItem) : sprintf('%s(%s)', gettype($tCRPassengerTicketNumberItem), var_export($tCRPassengerTicketNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerTicketNumber property can only contain items of type \Travelport\UniversalRecord\StructType\PassengerTicketNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassengerTicketNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassengerTicketNumber[] $passengerTicketNumber
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setPassengerTicketNumber(?array $passengerTicketNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerTicketNumberArrayErrorMessage = self::validatePassengerTicketNumberForArrayConstraintsFromSetPassengerTicketNumber($passengerTicketNumber))) {
            throw new InvalidArgumentException($passengerTicketNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passengerTicketNumber) && count($passengerTicketNumber) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passengerTicketNumber)), __LINE__);
        }
        $this->PassengerTicketNumber = $passengerTicketNumber;
        
        return $this;
    }
    /**
     * Add item to PassengerTicketNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassengerTicketNumber $item
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function addToPassengerTicketNumber(\Travelport\UniversalRecord\StructType\PassengerTicketNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PassengerTicketNumber) {
            throw new InvalidArgumentException(sprintf('The PassengerTicketNumber property can only contain items of type \Travelport\UniversalRecord\StructType\PassengerTicketNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassengerTicketNumber) && count($this->PassengerTicketNumber) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassengerTicketNumber)), __LINE__);
        }
        $this->PassengerTicketNumber[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo[]
     */
    public function getAirPricingInfo(): ?array
    {
        return $this->AirPricingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setAirPricingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoForArrayConstraintsFromSetAirPricingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRAirPricingInfoItem) {
            // validation for constraint: itemType
            if (!$tCRAirPricingInfoItem instanceof \Travelport\UniversalRecord\StructType\AirPricingInfo) {
                $invalidValues[] = is_object($tCRAirPricingInfoItem) ? get_class($tCRAirPricingInfoItem) : sprintf('%s(%s)', gettype($tCRAirPricingInfoItem), var_export($tCRAirPricingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoArrayErrorMessage = self::validateAirPricingInfoForArrayConstraintsFromSetAirPricingInfo($airPricingInfo))) {
            throw new InvalidArgumentException($airPricingInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfo) && count($airPricingInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfo)), __LINE__);
        }
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo $item
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function addToAirPricingInfo(\Travelport\UniversalRecord\StructType\AirPricingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingInfo) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfo) && count($this->AirPricingInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfo)), __LINE__);
        }
        $this->AirPricingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get AgencyInfo value
     * @return \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    public function getAgencyInfo(): ?\Travelport\UniversalRecord\StructType\AgencyInfo
    {
        return $this->AgencyInfo;
    }
    /**
     * Set AgencyInfo value
     * @param \Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setAgencyInfo(?\Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo = null): self
    {
        $this->AgencyInfo = $agencyInfo;
        
        return $this;
    }
    /**
     * Get AirReservationLocatorCode value
     * @return \Travelport\UniversalRecord\StructType\AirReservationLocatorCode|null
     */
    public function getAirReservationLocatorCode(): ?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode
    {
        return $this->AirReservationLocatorCode;
    }
    /**
     * Set AirReservationLocatorCode value
     * @param \Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setAirReservationLocatorCode(?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public function getSupplierLocator(): ?array
    {
        return $this->SupplierLocator;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplierLocator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierLocator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierLocatorForArrayConstraintsFromSetSupplierLocator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRSupplierLocatorItem) {
            // validation for constraint: itemType
            if (!$tCRSupplierLocatorItem instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
                $invalidValues[] = is_object($tCRSupplierLocatorItem) ? get_class($tCRSupplierLocatorItem) : sprintf('%s(%s)', gettype($tCRSupplierLocatorItem), var_export($tCRSupplierLocatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplierLocator property can only contain items of type \Travelport\UniversalRecord\StructType\SupplierLocator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplierLocatorArrayErrorMessage = self::validateSupplierLocatorForArrayConstraintsFromSetSupplierLocator($supplierLocator))) {
            throw new InvalidArgumentException($supplierLocatorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($supplierLocator) && count($supplierLocator) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($supplierLocator)), __LINE__);
        }
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator $item
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function addToSupplierLocator(\Travelport\UniversalRecord\StructType\SupplierLocator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
            throw new InvalidArgumentException(sprintf('The SupplierLocator property can only contain items of type \Travelport\UniversalRecord\StructType\SupplierLocator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SupplierLocator) && count($this->SupplierLocator) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SupplierLocator)), __LINE__);
        }
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
    /**
     * Get RefundRemark value
     * @return \Travelport\UniversalRecord\StructType\RefundRemark[]
     */
    public function getRefundRemark(): ?array
    {
        return $this->RefundRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundRemarkForArrayConstraintsFromSetRefundRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRRefundRemarkItem) {
            // validation for constraint: itemType
            if (!$tCRRefundRemarkItem instanceof \Travelport\UniversalRecord\StructType\RefundRemark) {
                $invalidValues[] = is_object($tCRRefundRemarkItem) ? get_class($tCRRefundRemarkItem) : sprintf('%s(%s)', gettype($tCRRefundRemarkItem), var_export($tCRRefundRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundRemark property can only contain items of type \Travelport\UniversalRecord\StructType\RefundRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RefundRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RefundRemark[] $refundRemark
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setRefundRemark(?array $refundRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($refundRemarkArrayErrorMessage = self::validateRefundRemarkForArrayConstraintsFromSetRefundRemark($refundRemark))) {
            throw new InvalidArgumentException($refundRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($refundRemark) && count($refundRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($refundRemark)), __LINE__);
        }
        $this->RefundRemark = $refundRemark;
        
        return $this;
    }
    /**
     * Add item to RefundRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RefundRemark $item
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function addToRefundRemark(\Travelport\UniversalRecord\StructType\RefundRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RefundRemark) {
            throw new InvalidArgumentException(sprintf('The RefundRemark property can only contain items of type \Travelport\UniversalRecord\StructType\RefundRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RefundRemark) && count($this->RefundRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RefundRemark)), __LINE__);
        }
        $this->RefundRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ConfirmedDate value
     * @return string|null
     */
    public function getConfirmedDate(): ?string
    {
        return $this->ConfirmedDate;
    }
    /**
     * Set ConfirmedDate value
     * @param string $confirmedDate
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setConfirmedDate(?string $confirmedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmedDate) && !is_string($confirmedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmedDate, true), gettype($confirmedDate)), __LINE__);
        }
        $this->ConfirmedDate = $confirmedDate;
        
        return $this;
    }
    /**
     * Get RefundAccessCode value
     * @return string|null
     */
    public function getRefundAccessCode(): ?string
    {
        return $this->RefundAccessCode;
    }
    /**
     * Set RefundAccessCode value
     * @param string $refundAccessCode
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setRefundAccessCode(?string $refundAccessCode = null): self
    {
        // validation for constraint: string
        if (!is_null($refundAccessCode) && !is_string($refundAccessCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundAccessCode, true), gettype($refundAccessCode)), __LINE__);
        }
        $this->RefundAccessCode = $refundAccessCode;
        
        return $this;
    }
    /**
     * Get RefundAmount value
     * @return string|null
     */
    public function getRefundAmount(): ?string
    {
        return $this->RefundAmount;
    }
    /**
     * Set RefundAmount value
     * @param string $refundAmount
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setRefundAmount(?string $refundAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($refundAmount) && !is_string($refundAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundAmount, true), gettype($refundAmount)), __LINE__);
        }
        $this->RefundAmount = $refundAmount;
        
        return $this;
    }
    /**
     * Get RefundFee value
     * @return string|null
     */
    public function getRefundFee(): ?string
    {
        return $this->RefundFee;
    }
    /**
     * Set RefundFee value
     * @param string $refundFee
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setRefundFee(?string $refundFee = null): self
    {
        // validation for constraint: string
        if (!is_null($refundFee) && !is_string($refundFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundFee, true), gettype($refundFee)), __LINE__);
        }
        $this->RefundFee = $refundFee;
        
        return $this;
    }
    /**
     * Get ForfeitAmount value
     * @return string|null
     */
    public function getForfeitAmount(): ?string
    {
        return $this->ForfeitAmount;
    }
    /**
     * Set ForfeitAmount value
     * @param string $forfeitAmount
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setForfeitAmount(?string $forfeitAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($forfeitAmount) && !is_string($forfeitAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forfeitAmount, true), gettype($forfeitAmount)), __LINE__);
        }
        $this->ForfeitAmount = $forfeitAmount;
        
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
     * @return \Travelport\UniversalRecord\StructType\TCR
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
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\TCR
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\TCR
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
}
