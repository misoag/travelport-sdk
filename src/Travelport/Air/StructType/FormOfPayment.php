<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormOfPayment StructType
 * Meta information extracted from the WSDL
 * - documentation: A Form of Payment used to purchase all or part of a booking.
 * @subpackage Structs
 */
class FormOfPayment extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 25
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - choice: CreditCard | DebitCard | EnettVan | FormOfPaymentSequenceGroup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CreditCard
     * @var \Travelport\Air\StructType\CreditCard|null
     */
    public ?\Travelport\Air\StructType\CreditCard $CreditCard = null;
    /**
     * The DebitCard
     * Meta information extracted from the WSDL
     * - choice: CreditCard | DebitCard | EnettVan | FormOfPaymentSequenceGroup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: DebitCard
     * @var \Travelport\Air\StructType\DebitCard|null
     */
    public ?\Travelport\Air\StructType\DebitCard $DebitCard = null;
    /**
     * The EnettVan
     * Meta information extracted from the WSDL
     * - choice: CreditCard | DebitCard | EnettVan | FormOfPaymentSequenceGroup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: EnettVan
     * @var \Travelport\Air\StructType\EnettVan|null
     */
    public ?\Travelport\Air\StructType\EnettVan $EnettVan = null;
    /**
     * The Certificate
     * @var \Travelport\Air\StructType\Certificate|null
     */
    public ?\Travelport\Air\StructType\Certificate $Certificate = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * @var string|null
     */
    public ?string $TicketNumber = null;
    /**
     * The Check
     * @var \Travelport\Air\StructType\Check|null
     */
    public ?\Travelport\Air\StructType\Check $Check = null;
    /**
     * The Requisition
     * @var \Travelport\Air\StructType\Requisition|null
     */
    public ?\Travelport\Air\StructType\Requisition $Requisition = null;
    /**
     * The MiscFormOfPayment
     * @var \Travelport\Air\StructType\MiscFormOfPayment|null
     */
    public ?\Travelport\Air\StructType\MiscFormOfPayment $MiscFormOfPayment = null;
    /**
     * The AgencyPayment
     * @var \Travelport\Air\StructType\TypeAgencyPayment|null
     */
    public ?\Travelport\Air\StructType\TypeAgencyPayment $AgencyPayment = null;
    /**
     * The UnitedNations
     * @var \Travelport\Air\StructType\UnitedNations|null
     */
    public ?\Travelport\Air\StructType\UnitedNations $UnitedNations = null;
    /**
     * The DirectPayment
     * @var \Travelport\Air\StructType\DirectPayment|null
     */
    public ?\Travelport\Air\StructType\DirectPayment $DirectPayment = null;
    /**
     * The AgentVoucher
     * @var \Travelport\Air\StructType\AgentVoucher|null
     */
    public ?\Travelport\Air\StructType\AgentVoucher $AgentVoucher = null;
    /**
     * The PaymentAdvice
     * @var \Travelport\Air\StructType\PaymentAdvice|null
     */
    public ?\Travelport\Air\StructType\PaymentAdvice $PaymentAdvice = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeFormOfPaymentPNRReference[]
     */
    public ?array $ProviderReservationInfoRef = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeGeneralReference[]
     */
    public ?array $SegmentRef = null;
    /**
     * The BSPPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BSPPayment
     * @var \Travelport\Air\StructType\BSPPayment|null
     */
    public ?\Travelport\Air\StructType\BSPPayment $BSPPayment = null;
    /**
     * The ARCPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ARCPayment
     * @var \Travelport\Air\StructType\ARCPayment|null
     */
    public ?\Travelport\Air\StructType\ARCPayment $ARCPayment = null;
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
     * The FulfillmentType
     * Meta information extracted from the WSDL
     * - documentation: Collect booking ticket at a Kiosk, print in agency. | Defines how the client wishes to receive travel documents. Type does not define where or how payment is made. The supported values are "Ticket on Departure", "Travel Agency",
     * "Courier", "Standard Mail", "Ticketless", "Ticket Office", "Express Mail", "Corporate Kiosk", "Train Station Service Desk", "Direct Printing of Ticket", "Ticket by Email", "Digital Printing of Ticket at Home", "Retrieve Ticket at Eurostar in London"
     * - use: optional
     * @var string|null
     */
    public ?string $FulfillmentType = null;
    /**
     * The FulfillmentLocation
     * Meta information extracted from the WSDL
     * - documentation: Information about the location of the printer.
     * - use: optional
     * @var string|null
     */
    public ?string $FulfillmentLocation = null;
    /**
     * The FulfillmentIDType
     * Meta information extracted from the WSDL
     * - documentation: Identification type, e.g. credit card, to define how the customer will identify himself when collecting the ticket
     * - use: optional
     * @var string|null
     */
    public ?string $FulfillmentIDType = null;
    /**
     * The FulfillmentIDNumber
     * Meta information extracted from the WSDL
     * - documentation: Identification number, e.g. card number, to define how the customer will identify himself when collecting the ticket
     * - use: optional
     * @var string|null
     */
    public ?string $FulfillmentIDNumber = null;
    /**
     * The IsAgentType
     * Meta information extracted from the WSDL
     * - documentation: If this is true then FormOfPayment mention in Type is anAgent type FormOfPayment.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $IsAgentType = null;
    /**
     * The AgentText
     * Meta information extracted from the WSDL
     * - documentation: This is only relevent when IsAgentType is specified as true. Otherwise this will be ignored.
     * - use: optional
     * @var string|null
     */
    public ?string $AgentText = null;
    /**
     * The ReuseFOP
     * Meta information extracted from the WSDL
     * - documentation: Key of the FOP Key to be reused as this Form of Payment.Only Credit and Debit Card will be supported for FOP Reuse. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ReuseFOP = null;
    /**
     * The ExternalReference
     * Meta information extracted from the WSDL
     * - documentation: External reference string for Client application to identify the Form of Payment. Element will be a max of 32 hex characters alpha-numeric.
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    public ?string $ExternalReference = null;
    /**
     * The Reusable
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the form of payment can be reused or not. Currently applicable for Credit and Debit form of payment
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $Reusable = null;
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - documentation: The unique ID of the profile that contains the payment details to use.
     * @var string|null
     */
    public ?string $ProfileID = null;
    /**
     * The ProfileKey
     * Meta information extracted from the WSDL
     * - documentation: The Key assigned to the payment details value from the specified profile. | Reference type
     * - base: xs:string
     * @var string|null
     */
    public ?string $ProfileKey = null;
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
     * Constructor method for FormOfPayment
     * @uses FormOfPayment::setType()
     * @uses FormOfPayment::setCreditCard()
     * @uses FormOfPayment::setDebitCard()
     * @uses FormOfPayment::setEnettVan()
     * @uses FormOfPayment::setCertificate()
     * @uses FormOfPayment::setTicketNumber()
     * @uses FormOfPayment::setCheck()
     * @uses FormOfPayment::setRequisition()
     * @uses FormOfPayment::setMiscFormOfPayment()
     * @uses FormOfPayment::setAgencyPayment()
     * @uses FormOfPayment::setUnitedNations()
     * @uses FormOfPayment::setDirectPayment()
     * @uses FormOfPayment::setAgentVoucher()
     * @uses FormOfPayment::setPaymentAdvice()
     * @uses FormOfPayment::setProviderReservationInfoRef()
     * @uses FormOfPayment::setSegmentRef()
     * @uses FormOfPayment::setBSPPayment()
     * @uses FormOfPayment::setARCPayment()
     * @uses FormOfPayment::setKey()
     * @uses FormOfPayment::setFulfillmentType()
     * @uses FormOfPayment::setFulfillmentLocation()
     * @uses FormOfPayment::setFulfillmentIDType()
     * @uses FormOfPayment::setFulfillmentIDNumber()
     * @uses FormOfPayment::setIsAgentType()
     * @uses FormOfPayment::setAgentText()
     * @uses FormOfPayment::setReuseFOP()
     * @uses FormOfPayment::setExternalReference()
     * @uses FormOfPayment::setReusable()
     * @uses FormOfPayment::setProfileID()
     * @uses FormOfPayment::setProfileKey()
     * @uses FormOfPayment::setElStat()
     * @uses FormOfPayment::setKeyOverride()
     * @param string $type
     * @param \Travelport\Air\StructType\CreditCard $creditCard
     * @param \Travelport\Air\StructType\DebitCard $debitCard
     * @param \Travelport\Air\StructType\EnettVan $enettVan
     * @param \Travelport\Air\StructType\Certificate $certificate
     * @param string $ticketNumber
     * @param \Travelport\Air\StructType\Check $check
     * @param \Travelport\Air\StructType\Requisition $requisition
     * @param \Travelport\Air\StructType\MiscFormOfPayment $miscFormOfPayment
     * @param \Travelport\Air\StructType\TypeAgencyPayment $agencyPayment
     * @param \Travelport\Air\StructType\UnitedNations $unitedNations
     * @param \Travelport\Air\StructType\DirectPayment $directPayment
     * @param \Travelport\Air\StructType\AgentVoucher $agentVoucher
     * @param \Travelport\Air\StructType\PaymentAdvice $paymentAdvice
     * @param \Travelport\Air\StructType\TypeFormOfPaymentPNRReference[] $providerReservationInfoRef
     * @param \Travelport\Air\StructType\TypeGeneralReference[] $segmentRef
     * @param \Travelport\Air\StructType\BSPPayment $bSPPayment
     * @param \Travelport\Air\StructType\ARCPayment $aRCPayment
     * @param string $key
     * @param string $fulfillmentType
     * @param string $fulfillmentLocation
     * @param string $fulfillmentIDType
     * @param string $fulfillmentIDNumber
     * @param bool $isAgentType
     * @param string $agentText
     * @param string $reuseFOP
     * @param string $externalReference
     * @param bool $reusable
     * @param string $profileID
     * @param string $profileKey
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $type, ?\Travelport\Air\StructType\CreditCard $creditCard = null, ?\Travelport\Air\StructType\DebitCard $debitCard = null, ?\Travelport\Air\StructType\EnettVan $enettVan = null, ?\Travelport\Air\StructType\Certificate $certificate = null, ?string $ticketNumber = null, ?\Travelport\Air\StructType\Check $check = null, ?\Travelport\Air\StructType\Requisition $requisition = null, ?\Travelport\Air\StructType\MiscFormOfPayment $miscFormOfPayment = null, ?\Travelport\Air\StructType\TypeAgencyPayment $agencyPayment = null, ?\Travelport\Air\StructType\UnitedNations $unitedNations = null, ?\Travelport\Air\StructType\DirectPayment $directPayment = null, ?\Travelport\Air\StructType\AgentVoucher $agentVoucher = null, ?\Travelport\Air\StructType\PaymentAdvice $paymentAdvice = null, ?array $providerReservationInfoRef = null, ?array $segmentRef = null, ?\Travelport\Air\StructType\BSPPayment $bSPPayment = null, ?\Travelport\Air\StructType\ARCPayment $aRCPayment = null, ?string $key = null, ?string $fulfillmentType = null, ?string $fulfillmentLocation = null, ?string $fulfillmentIDType = null, ?string $fulfillmentIDNumber = null, ?bool $isAgentType = false, ?string $agentText = null, ?string $reuseFOP = null, ?string $externalReference = null, ?bool $reusable = false, ?string $profileID = null, ?string $profileKey = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setType($type)
            ->setCreditCard($creditCard)
            ->setDebitCard($debitCard)
            ->setEnettVan($enettVan)
            ->setCertificate($certificate)
            ->setTicketNumber($ticketNumber)
            ->setCheck($check)
            ->setRequisition($requisition)
            ->setMiscFormOfPayment($miscFormOfPayment)
            ->setAgencyPayment($agencyPayment)
            ->setUnitedNations($unitedNations)
            ->setDirectPayment($directPayment)
            ->setAgentVoucher($agentVoucher)
            ->setPaymentAdvice($paymentAdvice)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setSegmentRef($segmentRef)
            ->setBSPPayment($bSPPayment)
            ->setARCPayment($aRCPayment)
            ->setKey($key)
            ->setFulfillmentType($fulfillmentType)
            ->setFulfillmentLocation($fulfillmentLocation)
            ->setFulfillmentIDType($fulfillmentIDType)
            ->setFulfillmentIDNumber($fulfillmentIDNumber)
            ->setIsAgentType($isAgentType)
            ->setAgentText($agentText)
            ->setReuseFOP($reuseFOP)
            ->setExternalReference($externalReference)
            ->setReusable($reusable)
            ->setProfileID($profileID)
            ->setProfileKey($profileKey)
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
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \Travelport\Air\StructType\CreditCard|null
     */
    public function getCreditCard(): ?\Travelport\Air\StructType\CreditCard
    {
        return $this->CreditCard ?? null;
    }
    /**
     * Set CreditCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\CreditCard $creditCard
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setCreditCard(?\Travelport\Air\StructType\CreditCard $creditCard = null): self
    {
        if (is_null($creditCard) || (is_array($creditCard) && empty($creditCard))) {
            unset($this->CreditCard);
        } else {
            $this->CreditCard = $creditCard;
        }
        
        return $this;
    }
    /**
     * Get DebitCard value
     * @return \Travelport\Air\StructType\DebitCard|null
     */
    public function getDebitCard(): ?\Travelport\Air\StructType\DebitCard
    {
        return $this->DebitCard ?? null;
    }
    /**
     * Set DebitCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\DebitCard $debitCard
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setDebitCard(?\Travelport\Air\StructType\DebitCard $debitCard = null): self
    {
        if (is_null($debitCard) || (is_array($debitCard) && empty($debitCard))) {
            unset($this->DebitCard);
        } else {
            $this->DebitCard = $debitCard;
        }
        
        return $this;
    }
    /**
     * Get EnettVan value
     * @return \Travelport\Air\StructType\EnettVan|null
     */
    public function getEnettVan(): ?\Travelport\Air\StructType\EnettVan
    {
        return $this->EnettVan ?? null;
    }
    /**
     * Set EnettVan value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\EnettVan $enettVan
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setEnettVan(?\Travelport\Air\StructType\EnettVan $enettVan = null): self
    {
        if (is_null($enettVan) || (is_array($enettVan) && empty($enettVan))) {
            unset($this->EnettVan);
        } else {
            $this->EnettVan = $enettVan;
        }
        
        return $this;
    }
    /**
     * Get Certificate value
     * @return \Travelport\Air\StructType\Certificate|null
     */
    public function getCertificate(): ?\Travelport\Air\StructType\Certificate
    {
        return $this->Certificate;
    }
    /**
     * Set Certificate value
     * @param \Travelport\Air\StructType\Certificate $certificate
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setCertificate(?\Travelport\Air\StructType\Certificate $certificate = null): self
    {
        $this->Certificate = $certificate;
        
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
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get Check value
     * @return \Travelport\Air\StructType\Check|null
     */
    public function getCheck(): ?\Travelport\Air\StructType\Check
    {
        return $this->Check;
    }
    /**
     * Set Check value
     * @param \Travelport\Air\StructType\Check $check
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setCheck(?\Travelport\Air\StructType\Check $check = null): self
    {
        $this->Check = $check;
        
        return $this;
    }
    /**
     * Get Requisition value
     * @return \Travelport\Air\StructType\Requisition|null
     */
    public function getRequisition(): ?\Travelport\Air\StructType\Requisition
    {
        return $this->Requisition;
    }
    /**
     * Set Requisition value
     * @param \Travelport\Air\StructType\Requisition $requisition
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setRequisition(?\Travelport\Air\StructType\Requisition $requisition = null): self
    {
        $this->Requisition = $requisition;
        
        return $this;
    }
    /**
     * Get MiscFormOfPayment value
     * @return \Travelport\Air\StructType\MiscFormOfPayment|null
     */
    public function getMiscFormOfPayment(): ?\Travelport\Air\StructType\MiscFormOfPayment
    {
        return $this->MiscFormOfPayment;
    }
    /**
     * Set MiscFormOfPayment value
     * @param \Travelport\Air\StructType\MiscFormOfPayment $miscFormOfPayment
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setMiscFormOfPayment(?\Travelport\Air\StructType\MiscFormOfPayment $miscFormOfPayment = null): self
    {
        $this->MiscFormOfPayment = $miscFormOfPayment;
        
        return $this;
    }
    /**
     * Get AgencyPayment value
     * @return \Travelport\Air\StructType\TypeAgencyPayment|null
     */
    public function getAgencyPayment(): ?\Travelport\Air\StructType\TypeAgencyPayment
    {
        return $this->AgencyPayment;
    }
    /**
     * Set AgencyPayment value
     * @param \Travelport\Air\StructType\TypeAgencyPayment $agencyPayment
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setAgencyPayment(?\Travelport\Air\StructType\TypeAgencyPayment $agencyPayment = null): self
    {
        $this->AgencyPayment = $agencyPayment;
        
        return $this;
    }
    /**
     * Get UnitedNations value
     * @return \Travelport\Air\StructType\UnitedNations|null
     */
    public function getUnitedNations(): ?\Travelport\Air\StructType\UnitedNations
    {
        return $this->UnitedNations;
    }
    /**
     * Set UnitedNations value
     * @param \Travelport\Air\StructType\UnitedNations $unitedNations
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setUnitedNations(?\Travelport\Air\StructType\UnitedNations $unitedNations = null): self
    {
        $this->UnitedNations = $unitedNations;
        
        return $this;
    }
    /**
     * Get DirectPayment value
     * @return \Travelport\Air\StructType\DirectPayment|null
     */
    public function getDirectPayment(): ?\Travelport\Air\StructType\DirectPayment
    {
        return $this->DirectPayment;
    }
    /**
     * Set DirectPayment value
     * @param \Travelport\Air\StructType\DirectPayment $directPayment
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setDirectPayment(?\Travelport\Air\StructType\DirectPayment $directPayment = null): self
    {
        $this->DirectPayment = $directPayment;
        
        return $this;
    }
    /**
     * Get AgentVoucher value
     * @return \Travelport\Air\StructType\AgentVoucher|null
     */
    public function getAgentVoucher(): ?\Travelport\Air\StructType\AgentVoucher
    {
        return $this->AgentVoucher;
    }
    /**
     * Set AgentVoucher value
     * @param \Travelport\Air\StructType\AgentVoucher $agentVoucher
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setAgentVoucher(?\Travelport\Air\StructType\AgentVoucher $agentVoucher = null): self
    {
        $this->AgentVoucher = $agentVoucher;
        
        return $this;
    }
    /**
     * Get PaymentAdvice value
     * @return \Travelport\Air\StructType\PaymentAdvice|null
     */
    public function getPaymentAdvice(): ?\Travelport\Air\StructType\PaymentAdvice
    {
        return $this->PaymentAdvice;
    }
    /**
     * Set PaymentAdvice value
     * @param \Travelport\Air\StructType\PaymentAdvice $paymentAdvice
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setPaymentAdvice(?\Travelport\Air\StructType\PaymentAdvice $paymentAdvice = null): self
    {
        $this->PaymentAdvice = $paymentAdvice;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\Air\StructType\TypeFormOfPaymentPNRReference[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param \Travelport\Air\StructType\TypeFormOfPaymentPNRReference[] $providerReservationInfoRef
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeFormOfPaymentPNRReference $item
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function addToProviderReservationInfoRef(\Travelport\Air\StructType\TypeFormOfPaymentPNRReference $item): self
    {
        $this->ProviderReservationInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return \Travelport\Air\StructType\TypeGeneralReference[]
     */
    public function getSegmentRef(): ?array
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param \Travelport\Air\StructType\TypeGeneralReference[] $segmentRef
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setSegmentRef(?array $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Add item to SegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeGeneralReference $item
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function addToSegmentRef(\Travelport\Air\StructType\TypeGeneralReference $item): self
    {
        $this->SegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get BSPPayment value
     * @return \Travelport\Air\StructType\BSPPayment|null
     */
    public function getBSPPayment(): ?\Travelport\Air\StructType\BSPPayment
    {
        return $this->BSPPayment;
    }
    /**
     * Set BSPPayment value
     * @param \Travelport\Air\StructType\BSPPayment $bSPPayment
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setBSPPayment(?\Travelport\Air\StructType\BSPPayment $bSPPayment = null): self
    {
        $this->BSPPayment = $bSPPayment;
        
        return $this;
    }
    /**
     * Get ARCPayment value
     * @return \Travelport\Air\StructType\ARCPayment|null
     */
    public function getARCPayment(): ?\Travelport\Air\StructType\ARCPayment
    {
        return $this->ARCPayment;
    }
    /**
     * Set ARCPayment value
     * @param \Travelport\Air\StructType\ARCPayment $aRCPayment
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setARCPayment(?\Travelport\Air\StructType\ARCPayment $aRCPayment = null): self
    {
        $this->ARCPayment = $aRCPayment;
        
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
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get FulfillmentType value
     * @return string|null
     */
    public function getFulfillmentType(): ?string
    {
        return $this->FulfillmentType;
    }
    /**
     * Set FulfillmentType value
     * @param string $fulfillmentType
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setFulfillmentType(?string $fulfillmentType = null): self
    {
        $this->FulfillmentType = $fulfillmentType;
        
        return $this;
    }
    /**
     * Get FulfillmentLocation value
     * @return string|null
     */
    public function getFulfillmentLocation(): ?string
    {
        return $this->FulfillmentLocation;
    }
    /**
     * Set FulfillmentLocation value
     * @param string $fulfillmentLocation
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setFulfillmentLocation(?string $fulfillmentLocation = null): self
    {
        $this->FulfillmentLocation = $fulfillmentLocation;
        
        return $this;
    }
    /**
     * Get FulfillmentIDType value
     * @return string|null
     */
    public function getFulfillmentIDType(): ?string
    {
        return $this->FulfillmentIDType;
    }
    /**
     * Set FulfillmentIDType value
     * @param string $fulfillmentIDType
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setFulfillmentIDType(?string $fulfillmentIDType = null): self
    {
        $this->FulfillmentIDType = $fulfillmentIDType;
        
        return $this;
    }
    /**
     * Get FulfillmentIDNumber value
     * @return string|null
     */
    public function getFulfillmentIDNumber(): ?string
    {
        return $this->FulfillmentIDNumber;
    }
    /**
     * Set FulfillmentIDNumber value
     * @param string $fulfillmentIDNumber
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setFulfillmentIDNumber(?string $fulfillmentIDNumber = null): self
    {
        $this->FulfillmentIDNumber = $fulfillmentIDNumber;
        
        return $this;
    }
    /**
     * Get IsAgentType value
     * @return bool|null
     */
    public function getIsAgentType(): ?bool
    {
        return $this->IsAgentType;
    }
    /**
     * Set IsAgentType value
     * @param bool $isAgentType
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setIsAgentType(?bool $isAgentType = false): self
    {
        $this->IsAgentType = $isAgentType;
        
        return $this;
    }
    /**
     * Get AgentText value
     * @return string|null
     */
    public function getAgentText(): ?string
    {
        return $this->AgentText;
    }
    /**
     * Set AgentText value
     * @param string $agentText
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setAgentText(?string $agentText = null): self
    {
        $this->AgentText = $agentText;
        
        return $this;
    }
    /**
     * Get ReuseFOP value
     * @return string|null
     */
    public function getReuseFOP(): ?string
    {
        return $this->ReuseFOP;
    }
    /**
     * Set ReuseFOP value
     * @param string $reuseFOP
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setReuseFOP(?string $reuseFOP = null): self
    {
        $this->ReuseFOP = $reuseFOP;
        
        return $this;
    }
    /**
     * Get ExternalReference value
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->ExternalReference;
    }
    /**
     * Set ExternalReference value
     * @param string $externalReference
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setExternalReference(?string $externalReference = null): self
    {
        $this->ExternalReference = $externalReference;
        
        return $this;
    }
    /**
     * Get Reusable value
     * @return bool|null
     */
    public function getReusable(): ?bool
    {
        return $this->Reusable;
    }
    /**
     * Set Reusable value
     * @param bool $reusable
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setReusable(?bool $reusable = false): self
    {
        $this->Reusable = $reusable;
        
        return $this;
    }
    /**
     * Get ProfileID value
     * @return string|null
     */
    public function getProfileID(): ?string
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setProfileID(?string $profileID = null): self
    {
        $this->ProfileID = $profileID;
        
        return $this;
    }
    /**
     * Get ProfileKey value
     * @return string|null
     */
    public function getProfileKey(): ?string
    {
        return $this->ProfileKey;
    }
    /**
     * Set ProfileKey value
     * @param string $profileKey
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setProfileKey(?string $profileKey = null): self
    {
        $this->ProfileKey = $profileKey;
        
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
     * @return \Travelport\Air\StructType\FormOfPayment
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
     * @return \Travelport\Air\StructType\FormOfPayment
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
