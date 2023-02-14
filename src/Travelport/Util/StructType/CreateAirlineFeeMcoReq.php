<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAirlineFeeMcoReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Manually create an Airline Fee MCO.
 * @subpackage Structs
 */
class CreateAirlineFeeMcoReq extends BaseReq
{
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
     * The LocationCode
     * Meta information extracted from the WSDL
     * - documentation: The airport code where the MCO will be accepted, or the City code where the requesting agency resides. If not entered, the default location of the agency will be selected. | 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * - use: required
     * @var string
     */
    protected string $LocationCode;
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - use: required
     * @var string
     */
    protected string $LocatorCode;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - ref: common:Name
     * @var \Travelport\Util\StructType\Name|null
     */
    protected ?\Travelport\Util\StructType\Name $Name = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - choice: FormOfPayment | FormOfPaymentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Util\StructType\FormOfPayment|null
     */
    protected ?\Travelport\Util\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - choice: FormOfPayment | FormOfPaymentRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:FormOfPaymentRef
     * @var \Travelport\Util\StructType\FormOfPaymentRef|null
     */
    protected ?\Travelport\Util\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\Util\StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The AccountingRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AccountingRemark
     * @var \Travelport\Util\StructType\AccountingRemark[]
     */
    protected ?array $AccountingRemark = null;
    /**
     * The Endorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Endorsement
     * @var \Travelport\Util\StructType\Endorsement[]
     */
    protected ?array $Endorsement = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: The ticket that this MCO was issued in connection with. Could be the ticket that caused the fee, a residual from an exchange, or an airline service fee.
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketNumber = null;
    /**
     * Constructor method for CreateAirlineFeeMcoReq
     * @uses CreateAirlineFeeMcoReq::setAmount()
     * @uses CreateAirlineFeeMcoReq::setLocationCode()
     * @uses CreateAirlineFeeMcoReq::setLocatorCode()
     * @uses CreateAirlineFeeMcoReq::setName()
     * @uses CreateAirlineFeeMcoReq::setFormOfPayment()
     * @uses CreateAirlineFeeMcoReq::setFormOfPaymentRef()
     * @uses CreateAirlineFeeMcoReq::setGeneralRemark()
     * @uses CreateAirlineFeeMcoReq::setAccountingRemark()
     * @uses CreateAirlineFeeMcoReq::setEndorsement()
     * @uses CreateAirlineFeeMcoReq::setTicketNumber()
     * @param string $amount
     * @param string $locationCode
     * @param string $locatorCode
     * @param \Travelport\Util\StructType\Name $name
     * @param \Travelport\Util\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\Util\StructType\GeneralRemark[] $generalRemark
     * @param \Travelport\Util\StructType\AccountingRemark[] $accountingRemark
     * @param \Travelport\Util\StructType\Endorsement[] $endorsement
     * @param string $ticketNumber
     */
    public function __construct(string $amount, string $locationCode, string $locatorCode, ?\Travelport\Util\StructType\Name $name = null, ?\Travelport\Util\StructType\FormOfPayment $formOfPayment = null, ?\Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?array $generalRemark = null, ?array $accountingRemark = null, ?array $endorsement = null, ?string $ticketNumber = null)
    {
        $this
            ->setAmount($amount)
            ->setLocationCode($locationCode)
            ->setLocatorCode($locatorCode)
            ->setName($name)
            ->setFormOfPayment($formOfPayment)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setGeneralRemark($generalRemark)
            ->setAccountingRemark($accountingRemark)
            ->setEndorsement($endorsement)
            ->setTicketNumber($ticketNumber);
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
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
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
     * Get LocationCode value
     * @return string
     */
    public function getLocationCode(): string
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function setLocationCode(string $locationCode): self
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationCode, true), gettype($locationCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($locationCode) && mb_strlen((string) $locationCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
        
        return $this;
    }
    /**
     * Get LocatorCode value
     * @return string
     */
    public function getLocatorCode(): string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function setLocatorCode(string $locatorCode): self
    {
        // validation for constraint: string
        if (!is_null($locatorCode) && !is_string($locatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locatorCode, true), gettype($locatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $locatorCode)), __LINE__);
        }
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\Util\StructType\Name|null
     */
    public function getName(): ?\Travelport\Util\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\Util\StructType\Name $name
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function setName(?\Travelport\Util\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Util\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\Util\StructType\FormOfPayment
    {
        return isset($this->FormOfPayment) ? $this->FormOfPayment : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFormOfPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPayment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFormOfPaymentForChoiceConstraintsFromSetFormOfPayment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FormOfPaymentRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FormOfPayment can\'t be set as the property %s is already set. Only one property must be set among these properties: FormOfPayment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FormOfPayment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function setFormOfPayment(?\Travelport\Util\StructType\FormOfPayment $formOfPayment = null): self
    {
        // validation for constraint: choice(FormOfPayment, FormOfPaymentRef)
        if ('' !== ($formOfPaymentChoiceErrorMessage = self::validateFormOfPaymentForChoiceConstraintsFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentChoiceErrorMessage, __LINE__);
        }
        if (is_null($formOfPayment) || (is_array($formOfPayment) && empty($formOfPayment))) {
            unset($this->FormOfPayment);
        } else {
            $this->FormOfPayment = $formOfPayment;
        }
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\Util\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\Util\StructType\FormOfPaymentRef
    {
        return isset($this->FormOfPaymentRef) ? $this->FormOfPaymentRef : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFormOfPaymentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPaymentRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFormOfPaymentRefForChoiceConstraintsFromSetFormOfPaymentRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FormOfPaymentRef can\'t be set as the property %s is already set. Only one property must be set among these properties: FormOfPaymentRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FormOfPaymentRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function setFormOfPaymentRef(?\Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        // validation for constraint: choice(FormOfPayment, FormOfPaymentRef)
        if ('' !== ($formOfPaymentRefChoiceErrorMessage = self::validateFormOfPaymentRefForChoiceConstraintsFromSetFormOfPaymentRef($formOfPaymentRef))) {
            throw new InvalidArgumentException($formOfPaymentRefChoiceErrorMessage, __LINE__);
        }
        if (is_null($formOfPaymentRef) || (is_array($formOfPaymentRef) && empty($formOfPaymentRef))) {
            unset($this->FormOfPaymentRef);
        } else {
            $this->FormOfPaymentRef = $formOfPaymentRef;
        }
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\Util\StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setGeneralRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneralRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGeneralRemarkForArrayConstraintsFromSetGeneralRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createAirlineFeeMcoReqGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$createAirlineFeeMcoReqGeneralRemarkItem instanceof \Travelport\Util\StructType\GeneralRemark) {
                $invalidValues[] = is_object($createAirlineFeeMcoReqGeneralRemarkItem) ? get_class($createAirlineFeeMcoReqGeneralRemarkItem) : sprintf('%s(%s)', gettype($createAirlineFeeMcoReqGeneralRemarkItem), var_export($createAirlineFeeMcoReqGeneralRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GeneralRemark property can only contain items of type \Travelport\Util\StructType\GeneralRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($generalRemarkArrayErrorMessage = self::validateGeneralRemarkForArrayConstraintsFromSetGeneralRemark($generalRemark))) {
            throw new InvalidArgumentException($generalRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($generalRemark) && count($generalRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($generalRemark)), __LINE__);
        }
        $this->GeneralRemark = $generalRemark;
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\GeneralRemark $item
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function addToGeneralRemark(\Travelport\Util\StructType\GeneralRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\GeneralRemark) {
            throw new InvalidArgumentException(sprintf('The GeneralRemark property can only contain items of type \Travelport\Util\StructType\GeneralRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GeneralRemark)), __LINE__);
        }
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get AccountingRemark value
     * @return \Travelport\Util\StructType\AccountingRemark[]
     */
    public function getAccountingRemark(): ?array
    {
        return $this->AccountingRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountingRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountingRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountingRemarkForArrayConstraintsFromSetAccountingRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createAirlineFeeMcoReqAccountingRemarkItem) {
            // validation for constraint: itemType
            if (!$createAirlineFeeMcoReqAccountingRemarkItem instanceof \Travelport\Util\StructType\AccountingRemark) {
                $invalidValues[] = is_object($createAirlineFeeMcoReqAccountingRemarkItem) ? get_class($createAirlineFeeMcoReqAccountingRemarkItem) : sprintf('%s(%s)', gettype($createAirlineFeeMcoReqAccountingRemarkItem), var_export($createAirlineFeeMcoReqAccountingRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountingRemark property can only contain items of type \Travelport\Util\StructType\AccountingRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountingRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AccountingRemark[] $accountingRemark
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountingRemarkArrayErrorMessage = self::validateAccountingRemarkForArrayConstraintsFromSetAccountingRemark($accountingRemark))) {
            throw new InvalidArgumentException($accountingRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($accountingRemark) && count($accountingRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($accountingRemark)), __LINE__);
        }
        $this->AccountingRemark = $accountingRemark;
        
        return $this;
    }
    /**
     * Add item to AccountingRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AccountingRemark $item
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function addToAccountingRemark(\Travelport\Util\StructType\AccountingRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AccountingRemark) {
            throw new InvalidArgumentException(sprintf('The AccountingRemark property can only contain items of type \Travelport\Util\StructType\AccountingRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AccountingRemark) && count($this->AccountingRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AccountingRemark)), __LINE__);
        }
        $this->AccountingRemark[] = $item;
        
        return $this;
    }
    /**
     * Get Endorsement value
     * @return \Travelport\Util\StructType\Endorsement[]
     */
    public function getEndorsement(): ?array
    {
        return $this->Endorsement;
    }
    /**
     * This method is responsible for validating the values passed to the setEndorsement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEndorsement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEndorsementForArrayConstraintsFromSetEndorsement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createAirlineFeeMcoReqEndorsementItem) {
            // validation for constraint: itemType
            if (!$createAirlineFeeMcoReqEndorsementItem instanceof \Travelport\Util\StructType\Endorsement) {
                $invalidValues[] = is_object($createAirlineFeeMcoReqEndorsementItem) ? get_class($createAirlineFeeMcoReqEndorsementItem) : sprintf('%s(%s)', gettype($createAirlineFeeMcoReqEndorsementItem), var_export($createAirlineFeeMcoReqEndorsementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Endorsement property can only contain items of type \Travelport\Util\StructType\Endorsement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Endorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Endorsement[] $endorsement
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function setEndorsement(?array $endorsement = null): self
    {
        // validation for constraint: array
        if ('' !== ($endorsementArrayErrorMessage = self::validateEndorsementForArrayConstraintsFromSetEndorsement($endorsement))) {
            throw new InvalidArgumentException($endorsementArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($endorsement) && count($endorsement) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($endorsement)), __LINE__);
        }
        $this->Endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Add item to Endorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Endorsement $item
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
     */
    public function addToEndorsement(\Travelport\Util\StructType\Endorsement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Endorsement) {
            throw new InvalidArgumentException(sprintf('The Endorsement property can only contain items of type \Travelport\Util\StructType\Endorsement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Endorsement) && count($this->Endorsement) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Endorsement)), __LINE__);
        }
        $this->Endorsement[] = $item;
        
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
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoReq
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
}
