<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Type;
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - choice: CreditCard | DebitCard | EnettVan | FormOfPaymentSequenceGroup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CreditCard
     * @var \Travelport\UniversalRecord\StructType\CreditCard|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CreditCard $CreditCard = null;
    /**
     * The DebitCard
     * Meta information extracted from the WSDL
     * - choice: CreditCard | DebitCard | EnettVan | FormOfPaymentSequenceGroup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: DebitCard
     * @var \Travelport\UniversalRecord\StructType\DebitCard|null
     */
    protected ?\Travelport\UniversalRecord\StructType\DebitCard $DebitCard = null;
    /**
     * The EnettVan
     * Meta information extracted from the WSDL
     * - choice: CreditCard | DebitCard | EnettVan | FormOfPaymentSequenceGroup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: EnettVan
     * @var \Travelport\UniversalRecord\StructType\EnettVan|null
     */
    protected ?\Travelport\UniversalRecord\StructType\EnettVan $EnettVan = null;
    /**
     * The Certificate
     * @var \Travelport\UniversalRecord\StructType\Certificate|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Certificate $Certificate = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * @var string|null
     */
    protected ?string $TicketNumber = null;
    /**
     * The Check
     * @var \Travelport\UniversalRecord\StructType\Check|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Check $Check = null;
    /**
     * The Requisition
     * @var \Travelport\UniversalRecord\StructType\Requisition|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Requisition $Requisition = null;
    /**
     * The MiscFormOfPayment
     * @var \Travelport\UniversalRecord\StructType\MiscFormOfPayment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\MiscFormOfPayment $MiscFormOfPayment = null;
    /**
     * The AgencyPayment
     * @var \Travelport\UniversalRecord\StructType\TypeAgencyPayment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeAgencyPayment $AgencyPayment = null;
    /**
     * The UnitedNations
     * @var \Travelport\UniversalRecord\StructType\UnitedNations|null
     */
    protected ?\Travelport\UniversalRecord\StructType\UnitedNations $UnitedNations = null;
    /**
     * The DirectPayment
     * @var \Travelport\UniversalRecord\StructType\DirectPayment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\DirectPayment $DirectPayment = null;
    /**
     * The AgentVoucher
     * @var \Travelport\UniversalRecord\StructType\AgentVoucher|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AgentVoucher $AgentVoucher = null;
    /**
     * The PaymentAdvice
     * @var \Travelport\UniversalRecord\StructType\PaymentAdvice|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PaymentAdvice $PaymentAdvice = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference[]
     */
    protected ?array $ProviderReservationInfoRef = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeGeneralReference[]
     */
    protected ?array $SegmentRef = null;
    /**
     * The BSPPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BSPPayment
     * @var \Travelport\UniversalRecord\StructType\BSPPayment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BSPPayment $BSPPayment = null;
    /**
     * The ARCPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ARCPayment
     * @var \Travelport\UniversalRecord\StructType\ARCPayment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ARCPayment $ARCPayment = null;
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
     * The FulfillmentType
     * Meta information extracted from the WSDL
     * - documentation: Collect booking ticket at a Kiosk, print in agency. | Defines how the client wishes to receive travel documents. Type does not define where or how payment is made. The supported values are "Ticket on Departure", "Travel Agency",
     * "Courier", "Standard Mail", "Ticketless", "Ticket Office", "Express Mail", "Corporate Kiosk", "Train Station Service Desk", "Direct Printing of Ticket", "Ticket by Email", "Digital Printing of Ticket at Home", "Retrieve Ticket at Eurostar in London"
     * - use: optional
     * @var string|null
     */
    protected ?string $FulfillmentType = null;
    /**
     * The FulfillmentLocation
     * Meta information extracted from the WSDL
     * - documentation: Information about the location of the printer.
     * - use: optional
     * @var string|null
     */
    protected ?string $FulfillmentLocation = null;
    /**
     * The FulfillmentIDType
     * Meta information extracted from the WSDL
     * - documentation: Identification type, e.g. credit card, to define how the customer will identify himself when collecting the ticket
     * - use: optional
     * @var string|null
     */
    protected ?string $FulfillmentIDType = null;
    /**
     * The FulfillmentIDNumber
     * Meta information extracted from the WSDL
     * - documentation: Identification number, e.g. card number, to define how the customer will identify himself when collecting the ticket
     * - use: optional
     * @var string|null
     */
    protected ?string $FulfillmentIDNumber = null;
    /**
     * The IsAgentType
     * Meta information extracted from the WSDL
     * - documentation: If this is true then FormOfPayment mention in Type is anAgent type FormOfPayment.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsAgentType = null;
    /**
     * The AgentText
     * Meta information extracted from the WSDL
     * - documentation: This is only relevent when IsAgentType is specified as true. Otherwise this will be ignored.
     * - use: optional
     * @var string|null
     */
    protected ?string $AgentText = null;
    /**
     * The ReuseFOP
     * Meta information extracted from the WSDL
     * - documentation: Key of the FOP Key to be reused as this Form of Payment.Only Credit and Debit Card will be supported for FOP Reuse. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ReuseFOP = null;
    /**
     * The ExternalReference
     * Meta information extracted from the WSDL
     * - documentation: External reference string for Client application to identify the Form of Payment. Element will be a max of 32 hex characters alpha-numeric.
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    protected ?string $ExternalReference = null;
    /**
     * The Reusable
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the form of payment can be reused or not. Currently applicable for Credit and Debit form of payment
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Reusable = null;
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - documentation: The unique ID of the profile that contains the payment details to use.
     * @var string|null
     */
    protected ?string $ProfileID = null;
    /**
     * The ProfileKey
     * Meta information extracted from the WSDL
     * - documentation: The Key assigned to the payment details value from the specified profile. | Reference type
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ProfileKey = null;
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
     * @param \Travelport\UniversalRecord\StructType\CreditCard $creditCard
     * @param \Travelport\UniversalRecord\StructType\DebitCard $debitCard
     * @param \Travelport\UniversalRecord\StructType\EnettVan $enettVan
     * @param \Travelport\UniversalRecord\StructType\Certificate $certificate
     * @param string $ticketNumber
     * @param \Travelport\UniversalRecord\StructType\Check $check
     * @param \Travelport\UniversalRecord\StructType\Requisition $requisition
     * @param \Travelport\UniversalRecord\StructType\MiscFormOfPayment $miscFormOfPayment
     * @param \Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment
     * @param \Travelport\UniversalRecord\StructType\UnitedNations $unitedNations
     * @param \Travelport\UniversalRecord\StructType\DirectPayment $directPayment
     * @param \Travelport\UniversalRecord\StructType\AgentVoucher $agentVoucher
     * @param \Travelport\UniversalRecord\StructType\PaymentAdvice $paymentAdvice
     * @param \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference[] $providerReservationInfoRef
     * @param \Travelport\UniversalRecord\StructType\TypeGeneralReference[] $segmentRef
     * @param \Travelport\UniversalRecord\StructType\BSPPayment $bSPPayment
     * @param \Travelport\UniversalRecord\StructType\ARCPayment $aRCPayment
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
    public function __construct(string $type, ?\Travelport\UniversalRecord\StructType\CreditCard $creditCard = null, ?\Travelport\UniversalRecord\StructType\DebitCard $debitCard = null, ?\Travelport\UniversalRecord\StructType\EnettVan $enettVan = null, ?\Travelport\UniversalRecord\StructType\Certificate $certificate = null, ?string $ticketNumber = null, ?\Travelport\UniversalRecord\StructType\Check $check = null, ?\Travelport\UniversalRecord\StructType\Requisition $requisition = null, ?\Travelport\UniversalRecord\StructType\MiscFormOfPayment $miscFormOfPayment = null, ?\Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment = null, ?\Travelport\UniversalRecord\StructType\UnitedNations $unitedNations = null, ?\Travelport\UniversalRecord\StructType\DirectPayment $directPayment = null, ?\Travelport\UniversalRecord\StructType\AgentVoucher $agentVoucher = null, ?\Travelport\UniversalRecord\StructType\PaymentAdvice $paymentAdvice = null, ?array $providerReservationInfoRef = null, ?array $segmentRef = null, ?\Travelport\UniversalRecord\StructType\BSPPayment $bSPPayment = null, ?\Travelport\UniversalRecord\StructType\ARCPayment $aRCPayment = null, ?string $key = null, ?string $fulfillmentType = null, ?string $fulfillmentLocation = null, ?string $fulfillmentIDType = null, ?string $fulfillmentIDNumber = null, ?bool $isAgentType = false, ?string $agentText = null, ?string $reuseFOP = null, ?string $externalReference = null, ?bool $reusable = false, ?string $profileID = null, ?string $profileKey = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($type) && mb_strlen((string) $type) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \Travelport\UniversalRecord\StructType\CreditCard|null
     */
    public function getCreditCard(): ?\Travelport\UniversalRecord\StructType\CreditCard
    {
        return isset($this->CreditCard) ? $this->CreditCard : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreditCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCard method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreditCardForChoiceConstraintsFromSetCreditCard($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DebitCard',
            'EnettVan',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CreditCard can\'t be set as the property %s is already set. Only one property must be set among these properties: CreditCard, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CreditCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CreditCard $creditCard
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setCreditCard(?\Travelport\UniversalRecord\StructType\CreditCard $creditCard = null): self
    {
        // validation for constraint: choice(CreditCard, DebitCard, EnettVan, FormOfPaymentSequenceGroup)
        if ('' !== ($creditCardChoiceErrorMessage = self::validateCreditCardForChoiceConstraintsFromSetCreditCard($creditCard))) {
            throw new InvalidArgumentException($creditCardChoiceErrorMessage, __LINE__);
        }
        if (is_null($creditCard) || (is_array($creditCard) && empty($creditCard))) {
            unset($this->CreditCard);
        } else {
            $this->CreditCard = $creditCard;
        }
        
        return $this;
    }
    /**
     * Get DebitCard value
     * @return \Travelport\UniversalRecord\StructType\DebitCard|null
     */
    public function getDebitCard(): ?\Travelport\UniversalRecord\StructType\DebitCard
    {
        return isset($this->DebitCard) ? $this->DebitCard : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDebitCard method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDebitCardForChoiceConstraintsFromSetDebitCard($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreditCard',
            'EnettVan',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DebitCard can\'t be set as the property %s is already set. Only one property must be set among these properties: DebitCard, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DebitCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DebitCard $debitCard
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setDebitCard(?\Travelport\UniversalRecord\StructType\DebitCard $debitCard = null): self
    {
        // validation for constraint: choice(CreditCard, DebitCard, EnettVan, FormOfPaymentSequenceGroup)
        if ('' !== ($debitCardChoiceErrorMessage = self::validateDebitCardForChoiceConstraintsFromSetDebitCard($debitCard))) {
            throw new InvalidArgumentException($debitCardChoiceErrorMessage, __LINE__);
        }
        if (is_null($debitCard) || (is_array($debitCard) && empty($debitCard))) {
            unset($this->DebitCard);
        } else {
            $this->DebitCard = $debitCard;
        }
        
        return $this;
    }
    /**
     * Get EnettVan value
     * @return \Travelport\UniversalRecord\StructType\EnettVan|null
     */
    public function getEnettVan(): ?\Travelport\UniversalRecord\StructType\EnettVan
    {
        return isset($this->EnettVan) ? $this->EnettVan : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEnettVan method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnettVan method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEnettVanForChoiceConstraintsFromSetEnettVan($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreditCard',
            'DebitCard',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property EnettVan can\'t be set as the property %s is already set. Only one property must be set among these properties: EnettVan, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set EnettVan value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\EnettVan $enettVan
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setEnettVan(?\Travelport\UniversalRecord\StructType\EnettVan $enettVan = null): self
    {
        // validation for constraint: choice(CreditCard, DebitCard, EnettVan, FormOfPaymentSequenceGroup)
        if ('' !== ($enettVanChoiceErrorMessage = self::validateEnettVanForChoiceConstraintsFromSetEnettVan($enettVan))) {
            throw new InvalidArgumentException($enettVanChoiceErrorMessage, __LINE__);
        }
        if (is_null($enettVan) || (is_array($enettVan) && empty($enettVan))) {
            unset($this->EnettVan);
        } else {
            $this->EnettVan = $enettVan;
        }
        
        return $this;
    }
    /**
     * Get Certificate value
     * @return \Travelport\UniversalRecord\StructType\Certificate|null
     */
    public function getCertificate(): ?\Travelport\UniversalRecord\StructType\Certificate
    {
        return $this->Certificate;
    }
    /**
     * Set Certificate value
     * @param \Travelport\UniversalRecord\StructType\Certificate $certificate
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setCertificate(?\Travelport\UniversalRecord\StructType\Certificate $certificate = null): self
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        // validation for constraint: maxLength(13)
        if (!is_null($ticketNumber) && mb_strlen((string) $ticketNumber) > 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 13', mb_strlen((string) $ticketNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ticketNumber) && mb_strlen((string) $ticketNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get Check value
     * @return \Travelport\UniversalRecord\StructType\Check|null
     */
    public function getCheck(): ?\Travelport\UniversalRecord\StructType\Check
    {
        return $this->Check;
    }
    /**
     * Set Check value
     * @param \Travelport\UniversalRecord\StructType\Check $check
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setCheck(?\Travelport\UniversalRecord\StructType\Check $check = null): self
    {
        $this->Check = $check;
        
        return $this;
    }
    /**
     * Get Requisition value
     * @return \Travelport\UniversalRecord\StructType\Requisition|null
     */
    public function getRequisition(): ?\Travelport\UniversalRecord\StructType\Requisition
    {
        return $this->Requisition;
    }
    /**
     * Set Requisition value
     * @param \Travelport\UniversalRecord\StructType\Requisition $requisition
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setRequisition(?\Travelport\UniversalRecord\StructType\Requisition $requisition = null): self
    {
        $this->Requisition = $requisition;
        
        return $this;
    }
    /**
     * Get MiscFormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\MiscFormOfPayment|null
     */
    public function getMiscFormOfPayment(): ?\Travelport\UniversalRecord\StructType\MiscFormOfPayment
    {
        return $this->MiscFormOfPayment;
    }
    /**
     * Set MiscFormOfPayment value
     * @param \Travelport\UniversalRecord\StructType\MiscFormOfPayment $miscFormOfPayment
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setMiscFormOfPayment(?\Travelport\UniversalRecord\StructType\MiscFormOfPayment $miscFormOfPayment = null): self
    {
        $this->MiscFormOfPayment = $miscFormOfPayment;
        
        return $this;
    }
    /**
     * Get AgencyPayment value
     * @return \Travelport\UniversalRecord\StructType\TypeAgencyPayment|null
     */
    public function getAgencyPayment(): ?\Travelport\UniversalRecord\StructType\TypeAgencyPayment
    {
        return $this->AgencyPayment;
    }
    /**
     * Set AgencyPayment value
     * @param \Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setAgencyPayment(?\Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment = null): self
    {
        $this->AgencyPayment = $agencyPayment;
        
        return $this;
    }
    /**
     * Get UnitedNations value
     * @return \Travelport\UniversalRecord\StructType\UnitedNations|null
     */
    public function getUnitedNations(): ?\Travelport\UniversalRecord\StructType\UnitedNations
    {
        return $this->UnitedNations;
    }
    /**
     * Set UnitedNations value
     * @param \Travelport\UniversalRecord\StructType\UnitedNations $unitedNations
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setUnitedNations(?\Travelport\UniversalRecord\StructType\UnitedNations $unitedNations = null): self
    {
        $this->UnitedNations = $unitedNations;
        
        return $this;
    }
    /**
     * Get DirectPayment value
     * @return \Travelport\UniversalRecord\StructType\DirectPayment|null
     */
    public function getDirectPayment(): ?\Travelport\UniversalRecord\StructType\DirectPayment
    {
        return $this->DirectPayment;
    }
    /**
     * Set DirectPayment value
     * @param \Travelport\UniversalRecord\StructType\DirectPayment $directPayment
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setDirectPayment(?\Travelport\UniversalRecord\StructType\DirectPayment $directPayment = null): self
    {
        $this->DirectPayment = $directPayment;
        
        return $this;
    }
    /**
     * Get AgentVoucher value
     * @return \Travelport\UniversalRecord\StructType\AgentVoucher|null
     */
    public function getAgentVoucher(): ?\Travelport\UniversalRecord\StructType\AgentVoucher
    {
        return $this->AgentVoucher;
    }
    /**
     * Set AgentVoucher value
     * @param \Travelport\UniversalRecord\StructType\AgentVoucher $agentVoucher
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setAgentVoucher(?\Travelport\UniversalRecord\StructType\AgentVoucher $agentVoucher = null): self
    {
        $this->AgentVoucher = $agentVoucher;
        
        return $this;
    }
    /**
     * Get PaymentAdvice value
     * @return \Travelport\UniversalRecord\StructType\PaymentAdvice|null
     */
    public function getPaymentAdvice(): ?\Travelport\UniversalRecord\StructType\PaymentAdvice
    {
        return $this->PaymentAdvice;
    }
    /**
     * Set PaymentAdvice value
     * @param \Travelport\UniversalRecord\StructType\PaymentAdvice $paymentAdvice
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setPaymentAdvice(?\Travelport\UniversalRecord\StructType\PaymentAdvice $paymentAdvice = null): self
    {
        $this->PaymentAdvice = $paymentAdvice;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setProviderReservationInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderReservationInfoRefForArrayConstraintsFromSetProviderReservationInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $formOfPaymentProviderReservationInfoRefItem) {
            // validation for constraint: itemType
            if (!$formOfPaymentProviderReservationInfoRefItem instanceof \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference) {
                $invalidValues[] = is_object($formOfPaymentProviderReservationInfoRefItem) ? get_class($formOfPaymentProviderReservationInfoRefItem) : sprintf('%s(%s)', gettype($formOfPaymentProviderReservationInfoRefItem), var_export($formOfPaymentProviderReservationInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference[] $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerReservationInfoRefArrayErrorMessage = self::validateProviderReservationInfoRefForArrayConstraintsFromSetProviderReservationInfoRef($providerReservationInfoRef))) {
            throw new InvalidArgumentException($providerReservationInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($providerReservationInfoRef) && count($providerReservationInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference $item
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function addToProviderReservationInfoRef(\Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference) {
            throw new InvalidArgumentException(sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProviderReservationInfoRef) && count($this->ProviderReservationInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProviderReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return \Travelport\UniversalRecord\StructType\TypeGeneralReference[]
     */
    public function getSegmentRef(): ?array
    {
        return $this->SegmentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSegmentRefForArrayConstraintsFromSetSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $formOfPaymentSegmentRefItem) {
            // validation for constraint: itemType
            if (!$formOfPaymentSegmentRefItem instanceof \Travelport\UniversalRecord\StructType\TypeGeneralReference) {
                $invalidValues[] = is_object($formOfPaymentSegmentRefItem) ? get_class($formOfPaymentSegmentRefItem) : sprintf('%s(%s)', gettype($formOfPaymentSegmentRefItem), var_export($formOfPaymentSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeGeneralReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeGeneralReference[] $segmentRef
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setSegmentRef(?array $segmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($segmentRefArrayErrorMessage = self::validateSegmentRefForArrayConstraintsFromSetSegmentRef($segmentRef))) {
            throw new InvalidArgumentException($segmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($segmentRef) && count($segmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Add item to SegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeGeneralReference $item
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function addToSegmentRef(\Travelport\UniversalRecord\StructType\TypeGeneralReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeGeneralReference) {
            throw new InvalidArgumentException(sprintf('The SegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\TypeGeneralReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SegmentRef) && count($this->SegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SegmentRef)), __LINE__);
        }
        $this->SegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get BSPPayment value
     * @return \Travelport\UniversalRecord\StructType\BSPPayment|null
     */
    public function getBSPPayment(): ?\Travelport\UniversalRecord\StructType\BSPPayment
    {
        return $this->BSPPayment;
    }
    /**
     * Set BSPPayment value
     * @param \Travelport\UniversalRecord\StructType\BSPPayment $bSPPayment
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setBSPPayment(?\Travelport\UniversalRecord\StructType\BSPPayment $bSPPayment = null): self
    {
        $this->BSPPayment = $bSPPayment;
        
        return $this;
    }
    /**
     * Get ARCPayment value
     * @return \Travelport\UniversalRecord\StructType\ARCPayment|null
     */
    public function getARCPayment(): ?\Travelport\UniversalRecord\StructType\ARCPayment
    {
        return $this->ARCPayment;
    }
    /**
     * Set ARCPayment value
     * @param \Travelport\UniversalRecord\StructType\ARCPayment $aRCPayment
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setARCPayment(?\Travelport\UniversalRecord\StructType\ARCPayment $aRCPayment = null): self
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setFulfillmentType(?string $fulfillmentType = null): self
    {
        // validation for constraint: string
        if (!is_null($fulfillmentType) && !is_string($fulfillmentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fulfillmentType, true), gettype($fulfillmentType)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setFulfillmentLocation(?string $fulfillmentLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($fulfillmentLocation) && !is_string($fulfillmentLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fulfillmentLocation, true), gettype($fulfillmentLocation)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeFulfillmentIDType::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFulfillmentIDType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fulfillmentIDType
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setFulfillmentIDType(?string $fulfillmentIDType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFulfillmentIDType::valueIsValid($fulfillmentIDType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFulfillmentIDType', is_array($fulfillmentIDType) ? implode(', ', $fulfillmentIDType) : var_export($fulfillmentIDType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFulfillmentIDType::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setFulfillmentIDNumber(?string $fulfillmentIDNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($fulfillmentIDNumber) && !is_string($fulfillmentIDNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fulfillmentIDNumber, true), gettype($fulfillmentIDNumber)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setIsAgentType(?bool $isAgentType = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isAgentType) && !is_bool($isAgentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAgentType, true), gettype($isAgentType)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setAgentText(?string $agentText = null): self
    {
        // validation for constraint: string
        if (!is_null($agentText) && !is_string($agentText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentText, true), gettype($agentText)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setReuseFOP(?string $reuseFOP = null): self
    {
        // validation for constraint: string
        if (!is_null($reuseFOP) && !is_string($reuseFOP)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reuseFOP, true), gettype($reuseFOP)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setExternalReference(?string $externalReference = null): self
    {
        // validation for constraint: string
        if (!is_null($externalReference) && !is_string($externalReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalReference, true), gettype($externalReference)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($externalReference) && mb_strlen((string) $externalReference) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $externalReference)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setReusable(?bool $reusable = false): self
    {
        // validation for constraint: boolean
        if (!is_null($reusable) && !is_bool($reusable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reusable, true), gettype($reusable)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setProfileID(?string $profileID = null): self
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileID, true), gettype($profileID)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
     */
    public function setProfileKey(?string $profileKey = null): self
    {
        // validation for constraint: string
        if (!is_null($profileKey) && !is_string($profileKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileKey, true), gettype($profileKey)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
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
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment
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
