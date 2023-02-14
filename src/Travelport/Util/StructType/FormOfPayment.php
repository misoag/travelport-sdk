<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\CreditCard|null
     */
    protected ?\Travelport\Util\StructType\CreditCard $CreditCard = null;
    /**
     * The DebitCard
     * Meta information extracted from the WSDL
     * - choice: CreditCard | DebitCard | EnettVan | FormOfPaymentSequenceGroup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: DebitCard
     * @var \Travelport\Util\StructType\DebitCard|null
     */
    protected ?\Travelport\Util\StructType\DebitCard $DebitCard = null;
    /**
     * The EnettVan
     * Meta information extracted from the WSDL
     * - choice: CreditCard | DebitCard | EnettVan | FormOfPaymentSequenceGroup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: EnettVan
     * @var \Travelport\Util\StructType\EnettVan|null
     */
    protected ?\Travelport\Util\StructType\EnettVan $EnettVan = null;
    /**
     * The Certificate
     * @var \Travelport\Util\StructType\Certificate|null
     */
    protected ?\Travelport\Util\StructType\Certificate $Certificate = null;
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
     * @var \Travelport\Util\StructType\Check|null
     */
    protected ?\Travelport\Util\StructType\Check $Check = null;
    /**
     * The Requisition
     * @var \Travelport\Util\StructType\Requisition|null
     */
    protected ?\Travelport\Util\StructType\Requisition $Requisition = null;
    /**
     * The MiscFormOfPayment
     * @var \Travelport\Util\StructType\MiscFormOfPayment|null
     */
    protected ?\Travelport\Util\StructType\MiscFormOfPayment $MiscFormOfPayment = null;
    /**
     * The AgencyPayment
     * @var \Travelport\Util\StructType\TypeAgencyPayment|null
     */
    protected ?\Travelport\Util\StructType\TypeAgencyPayment $AgencyPayment = null;
    /**
     * The UnitedNations
     * @var \Travelport\Util\StructType\UnitedNations|null
     */
    protected ?\Travelport\Util\StructType\UnitedNations $UnitedNations = null;
    /**
     * The DirectPayment
     * @var \Travelport\Util\StructType\DirectPayment|null
     */
    protected ?\Travelport\Util\StructType\DirectPayment $DirectPayment = null;
    /**
     * The AgentVoucher
     * @var \Travelport\Util\StructType\AgentVoucher|null
     */
    protected ?\Travelport\Util\StructType\AgentVoucher $AgentVoucher = null;
    /**
     * The PaymentAdvice
     * @var \Travelport\Util\StructType\PaymentAdvice|null
     */
    protected ?\Travelport\Util\StructType\PaymentAdvice $PaymentAdvice = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeFormOfPaymentPNRReference[]
     */
    protected ?array $ProviderReservationInfoRef = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeGeneralReference[]
     */
    protected ?array $SegmentRef = null;
    /**
     * The BSPPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BSPPayment
     * @var \Travelport\Util\StructType\BSPPayment|null
     */
    protected ?\Travelport\Util\StructType\BSPPayment $BSPPayment = null;
    /**
     * The ARCPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ARCPayment
     * @var \Travelport\Util\StructType\ARCPayment|null
     */
    protected ?\Travelport\Util\StructType\ARCPayment $ARCPayment = null;
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
     * @param \Travelport\Util\StructType\CreditCard $creditCard
     * @param \Travelport\Util\StructType\DebitCard $debitCard
     * @param \Travelport\Util\StructType\EnettVan $enettVan
     * @param \Travelport\Util\StructType\Certificate $certificate
     * @param string $ticketNumber
     * @param \Travelport\Util\StructType\Check $check
     * @param \Travelport\Util\StructType\Requisition $requisition
     * @param \Travelport\Util\StructType\MiscFormOfPayment $miscFormOfPayment
     * @param \Travelport\Util\StructType\TypeAgencyPayment $agencyPayment
     * @param \Travelport\Util\StructType\UnitedNations $unitedNations
     * @param \Travelport\Util\StructType\DirectPayment $directPayment
     * @param \Travelport\Util\StructType\AgentVoucher $agentVoucher
     * @param \Travelport\Util\StructType\PaymentAdvice $paymentAdvice
     * @param \Travelport\Util\StructType\TypeFormOfPaymentPNRReference[] $providerReservationInfoRef
     * @param \Travelport\Util\StructType\TypeGeneralReference[] $segmentRef
     * @param \Travelport\Util\StructType\BSPPayment $bSPPayment
     * @param \Travelport\Util\StructType\ARCPayment $aRCPayment
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
    public function __construct(string $type, ?\Travelport\Util\StructType\CreditCard $creditCard = null, ?\Travelport\Util\StructType\DebitCard $debitCard = null, ?\Travelport\Util\StructType\EnettVan $enettVan = null, ?\Travelport\Util\StructType\Certificate $certificate = null, ?string $ticketNumber = null, ?\Travelport\Util\StructType\Check $check = null, ?\Travelport\Util\StructType\Requisition $requisition = null, ?\Travelport\Util\StructType\MiscFormOfPayment $miscFormOfPayment = null, ?\Travelport\Util\StructType\TypeAgencyPayment $agencyPayment = null, ?\Travelport\Util\StructType\UnitedNations $unitedNations = null, ?\Travelport\Util\StructType\DirectPayment $directPayment = null, ?\Travelport\Util\StructType\AgentVoucher $agentVoucher = null, ?\Travelport\Util\StructType\PaymentAdvice $paymentAdvice = null, ?array $providerReservationInfoRef = null, ?array $segmentRef = null, ?\Travelport\Util\StructType\BSPPayment $bSPPayment = null, ?\Travelport\Util\StructType\ARCPayment $aRCPayment = null, ?string $key = null, ?string $fulfillmentType = null, ?string $fulfillmentLocation = null, ?string $fulfillmentIDType = null, ?string $fulfillmentIDNumber = null, ?bool $isAgentType = false, ?string $agentText = null, ?string $reuseFOP = null, ?string $externalReference = null, ?bool $reusable = false, ?string $profileID = null, ?string $profileKey = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\CreditCard|null
     */
    public function getCreditCard(): ?\Travelport\Util\StructType\CreditCard
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
     * @param \Travelport\Util\StructType\CreditCard $creditCard
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setCreditCard(?\Travelport\Util\StructType\CreditCard $creditCard = null): self
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
     * @return \Travelport\Util\StructType\DebitCard|null
     */
    public function getDebitCard(): ?\Travelport\Util\StructType\DebitCard
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
     * @param \Travelport\Util\StructType\DebitCard $debitCard
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setDebitCard(?\Travelport\Util\StructType\DebitCard $debitCard = null): self
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
     * @return \Travelport\Util\StructType\EnettVan|null
     */
    public function getEnettVan(): ?\Travelport\Util\StructType\EnettVan
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
     * @param \Travelport\Util\StructType\EnettVan $enettVan
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setEnettVan(?\Travelport\Util\StructType\EnettVan $enettVan = null): self
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
     * @return \Travelport\Util\StructType\Certificate|null
     */
    public function getCertificate(): ?\Travelport\Util\StructType\Certificate
    {
        return $this->Certificate;
    }
    /**
     * Set Certificate value
     * @param \Travelport\Util\StructType\Certificate $certificate
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setCertificate(?\Travelport\Util\StructType\Certificate $certificate = null): self
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\Check|null
     */
    public function getCheck(): ?\Travelport\Util\StructType\Check
    {
        return $this->Check;
    }
    /**
     * Set Check value
     * @param \Travelport\Util\StructType\Check $check
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setCheck(?\Travelport\Util\StructType\Check $check = null): self
    {
        $this->Check = $check;
        
        return $this;
    }
    /**
     * Get Requisition value
     * @return \Travelport\Util\StructType\Requisition|null
     */
    public function getRequisition(): ?\Travelport\Util\StructType\Requisition
    {
        return $this->Requisition;
    }
    /**
     * Set Requisition value
     * @param \Travelport\Util\StructType\Requisition $requisition
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setRequisition(?\Travelport\Util\StructType\Requisition $requisition = null): self
    {
        $this->Requisition = $requisition;
        
        return $this;
    }
    /**
     * Get MiscFormOfPayment value
     * @return \Travelport\Util\StructType\MiscFormOfPayment|null
     */
    public function getMiscFormOfPayment(): ?\Travelport\Util\StructType\MiscFormOfPayment
    {
        return $this->MiscFormOfPayment;
    }
    /**
     * Set MiscFormOfPayment value
     * @param \Travelport\Util\StructType\MiscFormOfPayment $miscFormOfPayment
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setMiscFormOfPayment(?\Travelport\Util\StructType\MiscFormOfPayment $miscFormOfPayment = null): self
    {
        $this->MiscFormOfPayment = $miscFormOfPayment;
        
        return $this;
    }
    /**
     * Get AgencyPayment value
     * @return \Travelport\Util\StructType\TypeAgencyPayment|null
     */
    public function getAgencyPayment(): ?\Travelport\Util\StructType\TypeAgencyPayment
    {
        return $this->AgencyPayment;
    }
    /**
     * Set AgencyPayment value
     * @param \Travelport\Util\StructType\TypeAgencyPayment $agencyPayment
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setAgencyPayment(?\Travelport\Util\StructType\TypeAgencyPayment $agencyPayment = null): self
    {
        $this->AgencyPayment = $agencyPayment;
        
        return $this;
    }
    /**
     * Get UnitedNations value
     * @return \Travelport\Util\StructType\UnitedNations|null
     */
    public function getUnitedNations(): ?\Travelport\Util\StructType\UnitedNations
    {
        return $this->UnitedNations;
    }
    /**
     * Set UnitedNations value
     * @param \Travelport\Util\StructType\UnitedNations $unitedNations
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setUnitedNations(?\Travelport\Util\StructType\UnitedNations $unitedNations = null): self
    {
        $this->UnitedNations = $unitedNations;
        
        return $this;
    }
    /**
     * Get DirectPayment value
     * @return \Travelport\Util\StructType\DirectPayment|null
     */
    public function getDirectPayment(): ?\Travelport\Util\StructType\DirectPayment
    {
        return $this->DirectPayment;
    }
    /**
     * Set DirectPayment value
     * @param \Travelport\Util\StructType\DirectPayment $directPayment
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setDirectPayment(?\Travelport\Util\StructType\DirectPayment $directPayment = null): self
    {
        $this->DirectPayment = $directPayment;
        
        return $this;
    }
    /**
     * Get AgentVoucher value
     * @return \Travelport\Util\StructType\AgentVoucher|null
     */
    public function getAgentVoucher(): ?\Travelport\Util\StructType\AgentVoucher
    {
        return $this->AgentVoucher;
    }
    /**
     * Set AgentVoucher value
     * @param \Travelport\Util\StructType\AgentVoucher $agentVoucher
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setAgentVoucher(?\Travelport\Util\StructType\AgentVoucher $agentVoucher = null): self
    {
        $this->AgentVoucher = $agentVoucher;
        
        return $this;
    }
    /**
     * Get PaymentAdvice value
     * @return \Travelport\Util\StructType\PaymentAdvice|null
     */
    public function getPaymentAdvice(): ?\Travelport\Util\StructType\PaymentAdvice
    {
        return $this->PaymentAdvice;
    }
    /**
     * Set PaymentAdvice value
     * @param \Travelport\Util\StructType\PaymentAdvice $paymentAdvice
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setPaymentAdvice(?\Travelport\Util\StructType\PaymentAdvice $paymentAdvice = null): self
    {
        $this->PaymentAdvice = $paymentAdvice;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\Util\StructType\TypeFormOfPaymentPNRReference[]
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
            if (!$formOfPaymentProviderReservationInfoRefItem instanceof \Travelport\Util\StructType\TypeFormOfPaymentPNRReference) {
                $invalidValues[] = is_object($formOfPaymentProviderReservationInfoRefItem) ? get_class($formOfPaymentProviderReservationInfoRefItem) : sprintf('%s(%s)', gettype($formOfPaymentProviderReservationInfoRefItem), var_export($formOfPaymentProviderReservationInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\Util\StructType\TypeFormOfPaymentPNRReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFormOfPaymentPNRReference[] $providerReservationInfoRef
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @param \Travelport\Util\StructType\TypeFormOfPaymentPNRReference $item
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function addToProviderReservationInfoRef(\Travelport\Util\StructType\TypeFormOfPaymentPNRReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeFormOfPaymentPNRReference) {
            throw new InvalidArgumentException(sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\Util\StructType\TypeFormOfPaymentPNRReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\TypeGeneralReference[]
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
            if (!$formOfPaymentSegmentRefItem instanceof \Travelport\Util\StructType\TypeGeneralReference) {
                $invalidValues[] = is_object($formOfPaymentSegmentRefItem) ? get_class($formOfPaymentSegmentRefItem) : sprintf('%s(%s)', gettype($formOfPaymentSegmentRefItem), var_export($formOfPaymentSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SegmentRef property can only contain items of type \Travelport\Util\StructType\TypeGeneralReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeGeneralReference[] $segmentRef
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @param \Travelport\Util\StructType\TypeGeneralReference $item
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function addToSegmentRef(\Travelport\Util\StructType\TypeGeneralReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeGeneralReference) {
            throw new InvalidArgumentException(sprintf('The SegmentRef property can only contain items of type \Travelport\Util\StructType\TypeGeneralReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\BSPPayment|null
     */
    public function getBSPPayment(): ?\Travelport\Util\StructType\BSPPayment
    {
        return $this->BSPPayment;
    }
    /**
     * Set BSPPayment value
     * @param \Travelport\Util\StructType\BSPPayment $bSPPayment
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setBSPPayment(?\Travelport\Util\StructType\BSPPayment $bSPPayment = null): self
    {
        $this->BSPPayment = $bSPPayment;
        
        return $this;
    }
    /**
     * Get ARCPayment value
     * @return \Travelport\Util\StructType\ARCPayment|null
     */
    public function getARCPayment(): ?\Travelport\Util\StructType\ARCPayment
    {
        return $this->ARCPayment;
    }
    /**
     * Set ARCPayment value
     * @param \Travelport\Util\StructType\ARCPayment $aRCPayment
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setARCPayment(?\Travelport\Util\StructType\ARCPayment $aRCPayment = null): self
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @uses \Travelport\Util\EnumType\TypeFulfillmentIDType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFulfillmentIDType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fulfillmentIDType
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setFulfillmentIDType(?string $fulfillmentIDType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFulfillmentIDType::valueIsValid($fulfillmentIDType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFulfillmentIDType', is_array($fulfillmentIDType) ? implode(', ', $fulfillmentIDType) : var_export($fulfillmentIDType, true), implode(', ', \Travelport\Util\EnumType\TypeFulfillmentIDType::getValidValues())), __LINE__);
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\FormOfPayment
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
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
     * @return \Travelport\Util\StructType\FormOfPayment
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
