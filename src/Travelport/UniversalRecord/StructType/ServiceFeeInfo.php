<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The ServiceFeeTaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ServiceFeeTaxInfo
     * @var \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo[]
     */
    protected ?array $ServiceFeeTaxInfo = null;
    /**
     * The CreditCardAuth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CreditCardAuth
     * @var \Travelport\UniversalRecord\StructType\CreditCardAuth|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CreditCardAuth $CreditCardAuth = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Payment
     * @var \Travelport\UniversalRecord\StructType\Payment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Payment $Payment = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of the service fee. Possible Values – Issued, ReadyToIssue, IssueLater.
     * - use: optional
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the service fee.
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The Confirmation
     * Meta information extracted from the WSDL
     * - documentation: The confirmation number of the service fee in the merchant host system.
     * - use: optional
     * @var string|null
     */
    protected ?string $Confirmation = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: The ticket that this fee was issued in connection with.
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketNumber = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a passenger. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to the provider reservation info to which the service is tied. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The PassiveProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to the passive provider reservation info to which the service is tied. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PassiveProviderReservationInfoRef = null;
    /**
     * The TotalAmount
     * Meta information extracted from the WSDL
     * - documentation: The total amount for this Service Fee including base amount and all taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalAmount = null;
    /**
     * The BaseAmount
     * Meta information extracted from the WSDL
     * - documentation: Represents the base price for this entity. This does not include any taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BaseAmount = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: The aggregated amount of all the taxes that are associated with this entity. See the associated Service Fee TaxInfo array for a breakdown of the individual taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency
     * Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The BookingTravelerName
     * Meta information extracted from the WSDL
     * - documentation: The name of the passenger.
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerName = null;
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
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo[] $serviceFeeTaxInfo
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth $creditCardAuth
     * @param \Travelport\UniversalRecord\StructType\Payment $payment
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
    public function __construct(?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null, ?array $serviceFeeTaxInfo = null, ?\Travelport\UniversalRecord\StructType\CreditCardAuth $creditCardAuth = null, ?\Travelport\UniversalRecord\StructType\Payment $payment = null, ?string $status = null, ?string $description = null, ?string $key = null, ?string $confirmation = null, ?string $ticketNumber = null, ?string $bookingTravelerRef = null, ?string $providerReservationInfoRef = null, ?string $passiveProviderReservationInfoRef = null, ?string $totalAmount = null, ?string $baseAmount = null, ?string $taxes = null, ?string $bookingTravelerName = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\UniversalRecord\StructType\FormOfPayment
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setFormOfPayment(?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Get ServiceFeeTaxInfo value
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo[]
     */
    public function getServiceFeeTaxInfo(): ?array
    {
        return $this->ServiceFeeTaxInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceFeeTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceFeeTaxInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceFeeTaxInfoForArrayConstraintsFromSetServiceFeeTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $serviceFeeInfoServiceFeeTaxInfoItem) {
            // validation for constraint: itemType
            if (!$serviceFeeInfoServiceFeeTaxInfoItem instanceof \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo) {
                $invalidValues[] = is_object($serviceFeeInfoServiceFeeTaxInfoItem) ? get_class($serviceFeeInfoServiceFeeTaxInfoItem) : sprintf('%s(%s)', gettype($serviceFeeInfoServiceFeeTaxInfoItem), var_export($serviceFeeInfoServiceFeeTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceFeeTaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ServiceFeeTaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo[] $serviceFeeTaxInfo
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setServiceFeeTaxInfo(?array $serviceFeeTaxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceFeeTaxInfoArrayErrorMessage = self::validateServiceFeeTaxInfoForArrayConstraintsFromSetServiceFeeTaxInfo($serviceFeeTaxInfo))) {
            throw new InvalidArgumentException($serviceFeeTaxInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($serviceFeeTaxInfo) && count($serviceFeeTaxInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($serviceFeeTaxInfo)), __LINE__);
        }
        $this->ServiceFeeTaxInfo = $serviceFeeTaxInfo;
        
        return $this;
    }
    /**
     * Add item to ServiceFeeTaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo $item
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function addToServiceFeeTaxInfo(\Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo) {
            throw new InvalidArgumentException(sprintf('The ServiceFeeTaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceFeeTaxInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ServiceFeeTaxInfo) && count($this->ServiceFeeTaxInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ServiceFeeTaxInfo)), __LINE__);
        }
        $this->ServiceFeeTaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get CreditCardAuth value
     * @return \Travelport\UniversalRecord\StructType\CreditCardAuth|null
     */
    public function getCreditCardAuth(): ?\Travelport\UniversalRecord\StructType\CreditCardAuth
    {
        return $this->CreditCardAuth;
    }
    /**
     * Set CreditCardAuth value
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth $creditCardAuth
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setCreditCardAuth(?\Travelport\UniversalRecord\StructType\CreditCardAuth $creditCardAuth = null): self
    {
        $this->CreditCardAuth = $creditCardAuth;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\UniversalRecord\StructType\Payment|null
     */
    public function getPayment(): ?\Travelport\UniversalRecord\StructType\Payment
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\UniversalRecord\StructType\Payment $payment
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setPayment(?\Travelport\UniversalRecord\StructType\Payment $payment = null): self
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeStatus::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setConfirmation(?string $confirmation = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmation) && !is_string($confirmation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmation, true), gettype($confirmation)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setPassiveProviderReservationInfoRef(?string $passiveProviderReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($passiveProviderReservationInfoRef) && !is_string($passiveProviderReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passiveProviderReservationInfoRef, true), gettype($passiveProviderReservationInfoRef)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setTotalAmount(?string $totalAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($totalAmount) && !is_string($totalAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setTaxes(?string $taxes = null): self
    {
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setBookingTravelerName(?string $bookingTravelerName = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerName) && !is_string($bookingTravelerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerName, true), gettype($bookingTravelerName)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
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
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo
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
