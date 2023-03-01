<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceFeeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Travel Agency Service Fees (TASF) are charged by the agency through BSP or Airline Reporting Corporation (ARC).
 * @subpackage Structs
 */
class ServiceFeeInfo extends AbstractStructBase
{
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FormOfPayment
     * @var \Travelport\Air\StructType\FormOfPayment|null
     */
    public ?\Travelport\Air\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The ServiceFeeTaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ServiceFeeTaxInfo
     * @var \Travelport\Air\StructType\ServiceFeeTaxInfo[]
     */
    public ?array $ServiceFeeTaxInfo = null;
    /**
     * The CreditCardAuth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CreditCardAuth
     * @var \Travelport\Air\StructType\CreditCardAuth|null
     */
    public ?\Travelport\Air\StructType\CreditCardAuth $CreditCardAuth = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Payment
     * @var \Travelport\Air\StructType\Payment|null
     */
    public ?\Travelport\Air\StructType\Payment $Payment = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of the service fee. Possible Values – Issued, ReadyToIssue, IssueLater.
     * - use: optional
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the service fee.
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
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
     * The Confirmation
     * Meta information extracted from the WSDL
     * - documentation: The confirmation number of the service fee in the merchant host system.
     * - use: optional
     * @var string|null
     */
    public ?string $Confirmation = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: The ticket that this fee was issued in connection with.
     * - use: optional
     * @var string|null
     */
    public ?string $TicketNumber = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a passenger. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to the provider reservation info to which the service is tied. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The PassiveProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to the passive provider reservation info to which the service is tied. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PassiveProviderReservationInfoRef = null;
    /**
     * The TotalAmount
     * Meta information extracted from the WSDL
     * - documentation: The total amount for this Service Fee including base amount and all taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TotalAmount = null;
    /**
     * The BaseAmount
     * Meta information extracted from the WSDL
     * - documentation: Represents the base price for this entity. This does not include any taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BaseAmount = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: The aggregated amount of all the taxes that are associated with this entity. See the associated Service Fee TaxInfo array for a breakdown of the individual taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency
     * Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The BookingTravelerName
     * Meta information extracted from the WSDL
     * - documentation: The name of the passenger.
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerName = null;
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
     * Constructor method for ServiceFeeInfo
     * @uses ServiceFeeInfo::setFormOfPayment()
     * @uses ServiceFeeInfo::setServiceFeeTaxInfo()
     * @uses ServiceFeeInfo::setCreditCardAuth()
     * @uses ServiceFeeInfo::setPayment()
     * @uses ServiceFeeInfo::setStatus()
     * @uses ServiceFeeInfo::setDescription()
     * @uses ServiceFeeInfo::setKey()
     * @uses ServiceFeeInfo::setConfirmation()
     * @uses ServiceFeeInfo::setTicketNumber()
     * @uses ServiceFeeInfo::setBookingTravelerRef()
     * @uses ServiceFeeInfo::setProviderReservationInfoRef()
     * @uses ServiceFeeInfo::setPassiveProviderReservationInfoRef()
     * @uses ServiceFeeInfo::setTotalAmount()
     * @uses ServiceFeeInfo::setBaseAmount()
     * @uses ServiceFeeInfo::setTaxes()
     * @uses ServiceFeeInfo::setBookingTravelerName()
     * @uses ServiceFeeInfo::setElStat()
     * @uses ServiceFeeInfo::setKeyOverride()
     * @param \Travelport\Air\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\Air\StructType\ServiceFeeTaxInfo[] $serviceFeeTaxInfo
     * @param \Travelport\Air\StructType\CreditCardAuth $creditCardAuth
     * @param \Travelport\Air\StructType\Payment $payment
     * @param string $status
     * @param string $description
     * @param string $key
     * @param string $confirmation
     * @param string $ticketNumber
     * @param string $bookingTravelerRef
     * @param string $providerReservationInfoRef
     * @param string $passiveProviderReservationInfoRef
     * @param string $totalAmount
     * @param string $baseAmount
     * @param string $taxes
     * @param string $bookingTravelerName
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?\Travelport\Air\StructType\FormOfPayment $formOfPayment = null, ?array $serviceFeeTaxInfo = null, ?\Travelport\Air\StructType\CreditCardAuth $creditCardAuth = null, ?\Travelport\Air\StructType\Payment $payment = null, ?string $status = null, ?string $description = null, ?string $key = null, ?string $confirmation = null, ?string $ticketNumber = null, ?string $bookingTravelerRef = null, ?string $providerReservationInfoRef = null, ?string $passiveProviderReservationInfoRef = null, ?string $totalAmount = null, ?string $baseAmount = null, ?string $taxes = null, ?string $bookingTravelerName = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setFormOfPayment($formOfPayment)
            ->setServiceFeeTaxInfo($serviceFeeTaxInfo)
            ->setCreditCardAuth($creditCardAuth)
            ->setPayment($payment)
            ->setStatus($status)
            ->setDescription($description)
            ->setKey($key)
            ->setConfirmation($confirmation)
            ->setTicketNumber($ticketNumber)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setPassiveProviderReservationInfoRef($passiveProviderReservationInfoRef)
            ->setTotalAmount($totalAmount)
            ->setBaseAmount($baseAmount)
            ->setTaxes($taxes)
            ->setBookingTravelerName($bookingTravelerName)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Air\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\Air\StructType\FormOfPayment
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Air\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setFormOfPayment(?\Travelport\Air\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Get ServiceFeeTaxInfo value
     * @return \Travelport\Air\StructType\ServiceFeeTaxInfo[]
     */
    public function getServiceFeeTaxInfo(): ?array
    {
        return $this->ServiceFeeTaxInfo;
    }
    /**
     * Set ServiceFeeTaxInfo value
     * @param \Travelport\Air\StructType\ServiceFeeTaxInfo[] $serviceFeeTaxInfo
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setServiceFeeTaxInfo(?array $serviceFeeTaxInfo = null): self
    {
        $this->ServiceFeeTaxInfo = $serviceFeeTaxInfo;
        
        return $this;
    }
    /**
     * Add item to ServiceFeeTaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ServiceFeeTaxInfo $item
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function addToServiceFeeTaxInfo(\Travelport\Air\StructType\ServiceFeeTaxInfo $item): self
    {
        $this->ServiceFeeTaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get CreditCardAuth value
     * @return \Travelport\Air\StructType\CreditCardAuth|null
     */
    public function getCreditCardAuth(): ?\Travelport\Air\StructType\CreditCardAuth
    {
        return $this->CreditCardAuth;
    }
    /**
     * Set CreditCardAuth value
     * @param \Travelport\Air\StructType\CreditCardAuth $creditCardAuth
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setCreditCardAuth(?\Travelport\Air\StructType\CreditCardAuth $creditCardAuth = null): self
    {
        $this->CreditCardAuth = $creditCardAuth;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\Air\StructType\Payment|null
     */
    public function getPayment(): ?\Travelport\Air\StructType\Payment
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\Air\StructType\Payment $payment
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setPayment(?\Travelport\Air\StructType\Payment $payment = null): self
    {
        $this->Payment = $payment;
        
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
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
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
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
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
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Confirmation value
     * @return string|null
     */
    public function getConfirmation(): ?string
    {
        return $this->Confirmation;
    }
    /**
     * Set Confirmation value
     * @param string $confirmation
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setConfirmation(?string $confirmation = null): self
    {
        $this->Confirmation = $confirmation;
        
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
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
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get PassiveProviderReservationInfoRef value
     * @return string|null
     */
    public function getPassiveProviderReservationInfoRef(): ?string
    {
        return $this->PassiveProviderReservationInfoRef;
    }
    /**
     * Set PassiveProviderReservationInfoRef value
     * @param string $passiveProviderReservationInfoRef
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setPassiveProviderReservationInfoRef(?string $passiveProviderReservationInfoRef = null): self
    {
        $this->PassiveProviderReservationInfoRef = $passiveProviderReservationInfoRef;
        
        return $this;
    }
    /**
     * Get TotalAmount value
     * @return string|null
     */
    public function getTotalAmount(): ?string
    {
        return $this->TotalAmount;
    }
    /**
     * Set TotalAmount value
     * @param string $totalAmount
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setTotalAmount(?string $totalAmount = null): self
    {
        $this->TotalAmount = $totalAmount;
        
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
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setBaseAmount(?string $baseAmount = null): self
    {
        $this->BaseAmount = $baseAmount;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setTaxes(?string $taxes = null): self
    {
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get BookingTravelerName value
     * @return string|null
     */
    public function getBookingTravelerName(): ?string
    {
        return $this->BookingTravelerName;
    }
    /**
     * Set BookingTravelerName value
     * @param string $bookingTravelerName
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setBookingTravelerName(?string $bookingTravelerName = null): self
    {
        $this->BookingTravelerName = $bookingTravelerName;
        
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
     * @return \Travelport\Air\StructType\ServiceFeeInfo
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
     * @return \Travelport\Air\StructType\ServiceFeeInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
