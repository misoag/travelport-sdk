<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $TCRNumber;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The current status of this TCR. Some status values are not applicable by some Airlines.
     * - use: required
     * @var string
     */
    public string $Status;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which the status was changed on this TCR due to an action event (itemized from the booleans below).
     * - use: required
     * @var string
     */
    public string $ModifiedDate;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: The base price of this TCR as a whole as it was when it was first booked. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $BasePrice;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: The taxes of this TCR as a whole as it was when it was first booked. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Taxes;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: The fees of this TCR as a whole as it was when it was first booked. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Fees;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - documentation: Is it possible to perform a Refund for this TCR.
     * - use: required
     * @var bool
     */
    public bool $Refundable;
    /**
     * The Exchangeable
     * Meta information extracted from the WSDL
     * - documentation: Is it possible to perform an Exchange for this TCR.
     * - use: required
     * @var bool
     */
    public bool $Exchangeable;
    /**
     * The Voidable
     * Meta information extracted from the WSDL
     * - documentation: Is it possible to perform a Void on this TCR.
     * - use: required
     * @var bool
     */
    public bool $Voidable;
    /**
     * The Modifiable
     * Meta information extracted from the WSDL
     * - documentation: Is it possible to modify this TCR (opposed to Refund/Exchange/Void).
     * - use: required
     * @var bool
     */
    public bool $Modifiable;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Air\StructType\FormOfPayment[]
     */
    public ?array $FormOfPayment = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\Air\StructType\Payment[]
     */
    public ?array $Payment = null;
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:BookingTraveler
     * @var \Travelport\Air\StructType\BookingTraveler[]
     */
    public ?array $BookingTraveler = null;
    /**
     * The PassengerTicketNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PassengerTicketNumber
     * @var \Travelport\Air\StructType\PassengerTicketNumber[]
     */
    public ?array $PassengerTicketNumber = null;
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\Air\StructType\AirPricingInfo[]
     */
    public ?array $AirPricingInfo = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyInfo
     * @var \Travelport\Air\StructType\AgencyInfo|null
     */
    public ?\Travelport\Air\StructType\AgencyInfo $AgencyInfo = null;
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirReservationLocatorCode
     * @var \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public ?\Travelport\Air\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\Air\StructType\SupplierLocator[]
     */
    public ?array $SupplierLocator = null;
    /**
     * The RefundRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:RefundRemark
     * @var \Travelport\Air\StructType\RefundRemark[]
     */
    public ?array $RefundRemark = null;
    /**
     * The ConfirmedDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which this TCR was confirmed (not created). This mean the payment was approved and processed and travel for this TCR is confirmed.
     * - use: optional
     * @var string|null
     */
    public ?string $ConfirmedDate = null;
    /**
     * The RefundAccessCode
     * Meta information extracted from the WSDL
     * - ref: RefundAccessCode
     * - use: optional
     * @var string|null
     */
    public ?string $RefundAccessCode = null;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: Total Amount refunded to the customer. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RefundAmount = null;
    /**
     * The RefundFee
     * Meta information extracted from the WSDL
     * - documentation: Charges incurred for processing refund. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RefundFee = null;
    /**
     * The ForfeitAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount forfeited as a result of refund. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ForfeitAmount = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    public ?string $SupplierCode = null;
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
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\Air\StructType\Payment[] $payment
     * @param \Travelport\Air\StructType\BookingTraveler[] $bookingTraveler
     * @param \Travelport\Air\StructType\PassengerTicketNumber[] $passengerTicketNumber
     * @param \Travelport\Air\StructType\AirPricingInfo[] $airPricingInfo
     * @param \Travelport\Air\StructType\AgencyInfo $agencyInfo
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param \Travelport\Air\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\Air\StructType\RefundRemark[] $refundRemark
     * @param string $confirmedDate
     * @param string $refundAccessCode
     * @param string $refundAmount
     * @param string $refundFee
     * @param string $forfeitAmount
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $supplierCode
     */
    public function __construct(string $tCRNumber, string $status, string $modifiedDate, string $basePrice, string $taxes, string $fees, bool $refundable, bool $exchangeable, bool $voidable, bool $modifiable, ?array $formOfPayment = null, ?array $payment = null, ?array $bookingTraveler = null, ?array $passengerTicketNumber = null, ?array $airPricingInfo = null, ?\Travelport\Air\StructType\AgencyInfo $agencyInfo = null, ?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?array $supplierLocator = null, ?array $refundRemark = null, ?string $confirmedDate = null, ?string $refundAccessCode = null, ?string $refundAmount = null, ?string $refundFee = null, ?string $forfeitAmount = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $supplierCode = null)
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setTCRNumber(string $tCRNumber): self
    {
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
     * @param string $status
     * @return \Travelport\Air\StructType\TCR
     */
    public function setStatus(string $status): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setModifiedDate(string $modifiedDate): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setBasePrice(string $basePrice): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setTaxes(string $taxes): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setFees(string $fees): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setRefundable(bool $refundable): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setExchangeable(bool $exchangeable): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setVoidable(bool $voidable): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setModifiable(bool $modifiable): self
    {
        $this->Modifiable = $modifiable;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Air\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\Air\StructType\TCR
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FormOfPayment $item
     * @return \Travelport\Air\StructType\TCR
     */
    public function addToFormOfPayment(\Travelport\Air\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\Air\StructType\Payment[]
     */
    public function getPayment(): ?array
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\Air\StructType\Payment[] $payment
     * @return \Travelport\Air\StructType\TCR
     */
    public function setPayment(?array $payment = null): self
    {
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Payment $item
     * @return \Travelport\Air\StructType\TCR
     */
    public function addToPayment(\Travelport\Air\StructType\Payment $item): self
    {
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTraveler value
     * @return \Travelport\Air\StructType\BookingTraveler[]
     */
    public function getBookingTraveler(): ?array
    {
        return $this->BookingTraveler;
    }
    /**
     * Set BookingTraveler value
     * @param \Travelport\Air\StructType\BookingTraveler[] $bookingTraveler
     * @return \Travelport\Air\StructType\TCR
     */
    public function setBookingTraveler(?array $bookingTraveler = null): self
    {
        $this->BookingTraveler = $bookingTraveler;
        
        return $this;
    }
    /**
     * Add item to BookingTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BookingTraveler $item
     * @return \Travelport\Air\StructType\TCR
     */
    public function addToBookingTraveler(\Travelport\Air\StructType\BookingTraveler $item): self
    {
        $this->BookingTraveler[] = $item;
        
        return $this;
    }
    /**
     * Get PassengerTicketNumber value
     * @return \Travelport\Air\StructType\PassengerTicketNumber[]
     */
    public function getPassengerTicketNumber(): ?array
    {
        return $this->PassengerTicketNumber;
    }
    /**
     * Set PassengerTicketNumber value
     * @param \Travelport\Air\StructType\PassengerTicketNumber[] $passengerTicketNumber
     * @return \Travelport\Air\StructType\TCR
     */
    public function setPassengerTicketNumber(?array $passengerTicketNumber = null): self
    {
        $this->PassengerTicketNumber = $passengerTicketNumber;
        
        return $this;
    }
    /**
     * Add item to PassengerTicketNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PassengerTicketNumber $item
     * @return \Travelport\Air\StructType\TCR
     */
    public function addToPassengerTicketNumber(\Travelport\Air\StructType\PassengerTicketNumber $item): self
    {
        $this->PassengerTicketNumber[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\Air\StructType\AirPricingInfo[]
     */
    public function getAirPricingInfo(): ?array
    {
        return $this->AirPricingInfo;
    }
    /**
     * Set AirPricingInfo value
     * @param \Travelport\Air\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\Air\StructType\TCR
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingInfo $item
     * @return \Travelport\Air\StructType\TCR
     */
    public function addToAirPricingInfo(\Travelport\Air\StructType\AirPricingInfo $item): self
    {
        $this->AirPricingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get AgencyInfo value
     * @return \Travelport\Air\StructType\AgencyInfo|null
     */
    public function getAgencyInfo(): ?\Travelport\Air\StructType\AgencyInfo
    {
        return $this->AgencyInfo;
    }
    /**
     * Set AgencyInfo value
     * @param \Travelport\Air\StructType\AgencyInfo $agencyInfo
     * @return \Travelport\Air\StructType\TCR
     */
    public function setAgencyInfo(?\Travelport\Air\StructType\AgencyInfo $agencyInfo = null): self
    {
        $this->AgencyInfo = $agencyInfo;
        
        return $this;
    }
    /**
     * Get AirReservationLocatorCode value
     * @return \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public function getAirReservationLocatorCode(): ?\Travelport\Air\StructType\AirReservationLocatorCode
    {
        return $this->AirReservationLocatorCode;
    }
    /**
     * Set AirReservationLocatorCode value
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @return \Travelport\Air\StructType\TCR
     */
    public function setAirReservationLocatorCode(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\Air\StructType\SupplierLocator[]
     */
    public function getSupplierLocator(): ?array
    {
        return $this->SupplierLocator;
    }
    /**
     * Set SupplierLocator value
     * @param \Travelport\Air\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\Air\StructType\TCR
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SupplierLocator $item
     * @return \Travelport\Air\StructType\TCR
     */
    public function addToSupplierLocator(\Travelport\Air\StructType\SupplierLocator $item): self
    {
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
    /**
     * Get RefundRemark value
     * @return \Travelport\Air\StructType\RefundRemark[]
     */
    public function getRefundRemark(): ?array
    {
        return $this->RefundRemark;
    }
    /**
     * Set RefundRemark value
     * @param \Travelport\Air\StructType\RefundRemark[] $refundRemark
     * @return \Travelport\Air\StructType\TCR
     */
    public function setRefundRemark(?array $refundRemark = null): self
    {
        $this->RefundRemark = $refundRemark;
        
        return $this;
    }
    /**
     * Add item to RefundRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RefundRemark $item
     * @return \Travelport\Air\StructType\TCR
     */
    public function addToRefundRemark(\Travelport\Air\StructType\RefundRemark $item): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setConfirmedDate(?string $confirmedDate = null): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setRefundAccessCode(?string $refundAccessCode = null): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setRefundAmount(?string $refundAmount = null): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setRefundFee(?string $refundFee = null): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setForfeitAmount(?string $forfeitAmount = null): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setProviderCode(?string $providerCode = null): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
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
     * @return \Travelport\Air\StructType\TCR
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
