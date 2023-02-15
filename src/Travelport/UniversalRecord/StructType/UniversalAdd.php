<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalAdd StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider:1G,1V,1P,1J,ACH,SDK.Product:Air,Hotel,Vehicle,Cruise | Element to add Review booking to a PNR .
 * @subpackage Structs
 */
class UniversalAdd extends AbstractStructBase
{
    /**
     * The AccountingRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AccountingRemark
     * @var \Travelport\UniversalRecord\StructType\AccountingRemark[]
     */
    protected ?array $AccountingRemark = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The OSI
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:OSI
     * @var \Travelport\UniversalRecord\StructType\OSI[]
     */
    protected ?array $OSI = null;
    /**
     * The UnassociatedRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:UnassociatedRemark
     * @var \Travelport\UniversalRecord\StructType\UnassociatedRemark[]
     */
    protected ?array $UnassociatedRemark = null;
    /**
     * The XMLRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:XMLRemark
     * @var \Travelport\UniversalRecord\StructType\XMLRemark[]
     */
    protected ?array $XMLRemark = null;
    /**
     * The Postscript
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:Postscript
     * @var \Travelport\UniversalRecord\StructType\Postscript|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Postscript $Postscript = null;
    /**
     * The BookingTravelerInfo
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:BookingTravelerInfo
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BookingTravelerInfo $BookingTravelerInfo = null;
    /**
     * The ServiceFeeInfo
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ServiceFeeInfo
     * @var \Travelport\UniversalRecord\StructType\ServiceFeeInfo[]
     */
    protected ?array $ServiceFeeInfo = null;
    /**
     * The LinkedUniversalRecord
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LinkedUniversalRecord
     * @var \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[]
     */
    protected ?array $LinkedUniversalRecord = null;
    /**
     * The AgencyContactInfo
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:AgencyContactInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyContactInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AgencyContactInfo $AgencyContactInfo = null;
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:CustomerID
     * @var \Travelport\UniversalRecord\StructType\CustomerID|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CustomerID $CustomerID = null;
    /**
     * The CommissionRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:CommissionRemark
     * @var \Travelport\UniversalRecord\StructType\CommissionRemark|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CommissionRemark $CommissionRemark = null;
    /**
     * The ConsolidatorRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:ConsolidatorRemark
     * @var \Travelport\UniversalRecord\StructType\ConsolidatorRemark|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ConsolidatorRemark $ConsolidatorRemark = null;
    /**
     * The InvoiceRemark
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:InvoiceRemark
     * @var \Travelport\UniversalRecord\StructType\InvoiceRemark[]
     */
    protected ?array $InvoiceRemark = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ActionStatus $ActionStatus = null;
    /**
     * The ReviewBooking
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ReviewBooking
     * @var \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    protected ?array $ReviewBooking = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - choice: AccountingRemark | GeneralRemark | OSI | UnassociatedRemark | XMLRemark | Postscript | BookingTravelerInfo | ServiceFeeInfo | LinkedUniversalRecord | AgencyContactInfo | CustomerID | CommissionRemark | ConsolidatorRemark | InvoiceRemark |
     * ActionStatus | ReviewBooking | FormOfPayment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    protected ?array $FormOfPayment = null;
    /**
     * Constructor method for UniversalAdd
     * @uses UniversalAdd::setAccountingRemark()
     * @uses UniversalAdd::setGeneralRemark()
     * @uses UniversalAdd::setOSI()
     * @uses UniversalAdd::setUnassociatedRemark()
     * @uses UniversalAdd::setXMLRemark()
     * @uses UniversalAdd::setPostscript()
     * @uses UniversalAdd::setBookingTravelerInfo()
     * @uses UniversalAdd::setServiceFeeInfo()
     * @uses UniversalAdd::setLinkedUniversalRecord()
     * @uses UniversalAdd::setAgencyContactInfo()
     * @uses UniversalAdd::setCustomerID()
     * @uses UniversalAdd::setCommissionRemark()
     * @uses UniversalAdd::setConsolidatorRemark()
     * @uses UniversalAdd::setInvoiceRemark()
     * @uses UniversalAdd::setActionStatus()
     * @uses UniversalAdd::setReviewBooking()
     * @uses UniversalAdd::setFormOfPayment()
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @param \Travelport\UniversalRecord\StructType\OSI[] $oSI
     * @param \Travelport\UniversalRecord\StructType\UnassociatedRemark[] $unassociatedRemark
     * @param \Travelport\UniversalRecord\StructType\XMLRemark[] $xMLRemark
     * @param \Travelport\UniversalRecord\StructType\Postscript $postscript
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerInfo $bookingTravelerInfo
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeInfo[] $serviceFeeInfo
     * @param \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @param \Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo
     * @param \Travelport\UniversalRecord\StructType\CustomerID $customerID
     * @param \Travelport\UniversalRecord\StructType\CommissionRemark $commissionRemark
     * @param \Travelport\UniversalRecord\StructType\ConsolidatorRemark $consolidatorRemark
     * @param \Travelport\UniversalRecord\StructType\InvoiceRemark[] $invoiceRemark
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $actionStatus
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     */
    public function __construct(?array $accountingRemark = null, ?array $generalRemark = null, ?array $oSI = null, ?array $unassociatedRemark = null, ?array $xMLRemark = null, ?\Travelport\UniversalRecord\StructType\Postscript $postscript = null, ?\Travelport\UniversalRecord\StructType\BookingTravelerInfo $bookingTravelerInfo = null, ?array $serviceFeeInfo = null, ?array $linkedUniversalRecord = null, ?\Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo = null, ?\Travelport\UniversalRecord\StructType\CustomerID $customerID = null, ?\Travelport\UniversalRecord\StructType\CommissionRemark $commissionRemark = null, ?\Travelport\UniversalRecord\StructType\ConsolidatorRemark $consolidatorRemark = null, ?array $invoiceRemark = null, ?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null, ?array $reviewBooking = null, ?array $formOfPayment = null)
    {
        $this
            ->setAccountingRemark($accountingRemark)
            ->setGeneralRemark($generalRemark)
            ->setOSI($oSI)
            ->setUnassociatedRemark($unassociatedRemark)
            ->setXMLRemark($xMLRemark)
            ->setPostscript($postscript)
            ->setBookingTravelerInfo($bookingTravelerInfo)
            ->setServiceFeeInfo($serviceFeeInfo)
            ->setLinkedUniversalRecord($linkedUniversalRecord)
            ->setAgencyContactInfo($agencyContactInfo)
            ->setCustomerID($customerID)
            ->setCommissionRemark($commissionRemark)
            ->setConsolidatorRemark($consolidatorRemark)
            ->setInvoiceRemark($invoiceRemark)
            ->setActionStatus($actionStatus)
            ->setReviewBooking($reviewBooking)
            ->setFormOfPayment($formOfPayment);
    }
    /**
     * Get AccountingRemark value
     * @return \Travelport\UniversalRecord\StructType\AccountingRemark[]
     */
    public function getAccountingRemark(): ?array
    {
        return isset($this->AccountingRemark) ? $this->AccountingRemark : null;
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
        foreach ($values as $universalAddAccountingRemarkItem) {
            // validation for constraint: itemType
            if (!$universalAddAccountingRemarkItem instanceof \Travelport\UniversalRecord\StructType\AccountingRemark) {
                $invalidValues[] = is_object($universalAddAccountingRemarkItem) ? get_class($universalAddAccountingRemarkItem) : sprintf('%s(%s)', gettype($universalAddAccountingRemarkItem), var_export($universalAddAccountingRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountingRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AccountingRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setAccountingRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountingRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAccountingRemarkForChoiceConstraintsFromSetAccountingRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AccountingRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: AccountingRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AccountingRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountingRemarkArrayErrorMessage = self::validateAccountingRemarkForArrayConstraintsFromSetAccountingRemark($accountingRemark))) {
            throw new InvalidArgumentException($accountingRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($accountingRemarkChoiceErrorMessage = self::validateAccountingRemarkForChoiceConstraintsFromSetAccountingRemark($accountingRemark))) {
            throw new InvalidArgumentException($accountingRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($accountingRemark) && count($accountingRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($accountingRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($accountingRemark) && count($accountingRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($accountingRemark)), __LINE__);
        }
        if (is_null($accountingRemark) || (is_array($accountingRemark) && empty($accountingRemark))) {
            unset($this->AccountingRemark);
        } else {
            $this->AccountingRemark = $accountingRemark;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToAccountingRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAccountingRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToAccountingRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AccountingRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: AccountingRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AccountingRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToAccountingRemark(\Travelport\UniversalRecord\StructType\AccountingRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AccountingRemark) {
            throw new InvalidArgumentException(sprintf('The AccountingRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AccountingRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToAccountingRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AccountingRemark) && count($this->AccountingRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AccountingRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AccountingRemark) && count($this->AccountingRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AccountingRemark)), __LINE__);
        }
        $this->AccountingRemark[] = $item;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return isset($this->GeneralRemark) ? $this->GeneralRemark : null;
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
        foreach ($values as $universalAddGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$universalAddGeneralRemarkItem instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
                $invalidValues[] = is_object($universalAddGeneralRemarkItem) ? get_class($universalAddGeneralRemarkItem) : sprintf('%s(%s)', gettype($universalAddGeneralRemarkItem), var_export($universalAddGeneralRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GeneralRemark property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setGeneralRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneralRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGeneralRemarkForChoiceConstraintsFromSetGeneralRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GeneralRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: GeneralRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set GeneralRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($generalRemarkArrayErrorMessage = self::validateGeneralRemarkForArrayConstraintsFromSetGeneralRemark($generalRemark))) {
            throw new InvalidArgumentException($generalRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($generalRemarkChoiceErrorMessage = self::validateGeneralRemarkForChoiceConstraintsFromSetGeneralRemark($generalRemark))) {
            throw new InvalidArgumentException($generalRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($generalRemark) && count($generalRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($generalRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($generalRemark) && count($generalRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($generalRemark)), __LINE__);
        }
        if (is_null($generalRemark) || (is_array($generalRemark) && empty($generalRemark))) {
            unset($this->GeneralRemark);
        } else {
            $this->GeneralRemark = $generalRemark;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToGeneralRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToGeneralRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToGeneralRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GeneralRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: GeneralRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToGeneralRemark(\Travelport\UniversalRecord\StructType\GeneralRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
            throw new InvalidArgumentException(sprintf('The GeneralRemark property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToGeneralRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->GeneralRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GeneralRemark)), __LINE__);
        }
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get OSI value
     * @return \Travelport\UniversalRecord\StructType\OSI[]
     */
    public function getOSI(): ?array
    {
        return isset($this->OSI) ? $this->OSI : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOSI method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOSI method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOSIForArrayConstraintsFromSetOSI(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalAddOSIItem) {
            // validation for constraint: itemType
            if (!$universalAddOSIItem instanceof \Travelport\UniversalRecord\StructType\OSI) {
                $invalidValues[] = is_object($universalAddOSIItem) ? get_class($universalAddOSIItem) : sprintf('%s(%s)', gettype($universalAddOSIItem), var_export($universalAddOSIItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OSI property can only contain items of type \Travelport\UniversalRecord\StructType\OSI, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setOSI method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOSI method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOSIForChoiceConstraintsFromSetOSI($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property OSI can\'t be set as the property %s is already set. Only one property must be set among these properties: OSI, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set OSI value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OSI[] $oSI
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setOSI(?array $oSI = null): self
    {
        // validation for constraint: array
        if ('' !== ($oSIArrayErrorMessage = self::validateOSIForArrayConstraintsFromSetOSI($oSI))) {
            throw new InvalidArgumentException($oSIArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($oSIChoiceErrorMessage = self::validateOSIForChoiceConstraintsFromSetOSI($oSI))) {
            throw new InvalidArgumentException($oSIChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($oSI) && count($oSI) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($oSI)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($oSI) && count($oSI) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($oSI)), __LINE__);
        }
        if (is_null($oSI) || (is_array($oSI) && empty($oSI))) {
            unset($this->OSI);
        } else {
            $this->OSI = $oSI;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToOSI method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToOSI method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToOSI($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property OSI can\'t be set as the property %s is already set. Only one property must be set among these properties: OSI, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to OSI value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OSI $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToOSI(\Travelport\UniversalRecord\StructType\OSI $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\OSI) {
            throw new InvalidArgumentException(sprintf('The OSI property can only contain items of type \Travelport\UniversalRecord\StructType\OSI, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToOSI($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->OSI) && count($this->OSI) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->OSI)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->OSI) && count($this->OSI) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->OSI)), __LINE__);
        }
        $this->OSI[] = $item;
        
        return $this;
    }
    /**
     * Get UnassociatedRemark value
     * @return \Travelport\UniversalRecord\StructType\UnassociatedRemark[]
     */
    public function getUnassociatedRemark(): ?array
    {
        return isset($this->UnassociatedRemark) ? $this->UnassociatedRemark : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUnassociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnassociatedRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnassociatedRemarkForArrayConstraintsFromSetUnassociatedRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalAddUnassociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$universalAddUnassociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\UnassociatedRemark) {
                $invalidValues[] = is_object($universalAddUnassociatedRemarkItem) ? get_class($universalAddUnassociatedRemarkItem) : sprintf('%s(%s)', gettype($universalAddUnassociatedRemarkItem), var_export($universalAddUnassociatedRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnassociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\UnassociatedRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setUnassociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnassociatedRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnassociatedRemarkForChoiceConstraintsFromSetUnassociatedRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UnassociatedRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: UnassociatedRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UnassociatedRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UnassociatedRemark[] $unassociatedRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setUnassociatedRemark(?array $unassociatedRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($unassociatedRemarkArrayErrorMessage = self::validateUnassociatedRemarkForArrayConstraintsFromSetUnassociatedRemark($unassociatedRemark))) {
            throw new InvalidArgumentException($unassociatedRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($unassociatedRemarkChoiceErrorMessage = self::validateUnassociatedRemarkForChoiceConstraintsFromSetUnassociatedRemark($unassociatedRemark))) {
            throw new InvalidArgumentException($unassociatedRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($unassociatedRemark) && count($unassociatedRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($unassociatedRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($unassociatedRemark) && count($unassociatedRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($unassociatedRemark)), __LINE__);
        }
        if (is_null($unassociatedRemark) || (is_array($unassociatedRemark) && empty($unassociatedRemark))) {
            unset($this->UnassociatedRemark);
        } else {
            $this->UnassociatedRemark = $unassociatedRemark;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToUnassociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToUnassociatedRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToUnassociatedRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UnassociatedRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: UnassociatedRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to UnassociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UnassociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToUnassociatedRemark(\Travelport\UniversalRecord\StructType\UnassociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\UnassociatedRemark) {
            throw new InvalidArgumentException(sprintf('The UnassociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\UnassociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToUnassociatedRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->UnassociatedRemark) && count($this->UnassociatedRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->UnassociatedRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->UnassociatedRemark) && count($this->UnassociatedRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->UnassociatedRemark)), __LINE__);
        }
        $this->UnassociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get XMLRemark value
     * @return \Travelport\UniversalRecord\StructType\XMLRemark[]
     */
    public function getXMLRemark(): ?array
    {
        return isset($this->XMLRemark) ? $this->XMLRemark : null;
    }
    /**
     * This method is responsible for validating the values passed to the setXMLRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setXMLRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateXMLRemarkForArrayConstraintsFromSetXMLRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalAddXMLRemarkItem) {
            // validation for constraint: itemType
            if (!$universalAddXMLRemarkItem instanceof \Travelport\UniversalRecord\StructType\XMLRemark) {
                $invalidValues[] = is_object($universalAddXMLRemarkItem) ? get_class($universalAddXMLRemarkItem) : sprintf('%s(%s)', gettype($universalAddXMLRemarkItem), var_export($universalAddXMLRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The XMLRemark property can only contain items of type \Travelport\UniversalRecord\StructType\XMLRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setXMLRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setXMLRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateXMLRemarkForChoiceConstraintsFromSetXMLRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property XMLRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: XMLRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set XMLRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\XMLRemark[] $xMLRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setXMLRemark(?array $xMLRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($xMLRemarkArrayErrorMessage = self::validateXMLRemarkForArrayConstraintsFromSetXMLRemark($xMLRemark))) {
            throw new InvalidArgumentException($xMLRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($xMLRemarkChoiceErrorMessage = self::validateXMLRemarkForChoiceConstraintsFromSetXMLRemark($xMLRemark))) {
            throw new InvalidArgumentException($xMLRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($xMLRemark) && count($xMLRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($xMLRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($xMLRemark) && count($xMLRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($xMLRemark)), __LINE__);
        }
        if (is_null($xMLRemark) || (is_array($xMLRemark) && empty($xMLRemark))) {
            unset($this->XMLRemark);
        } else {
            $this->XMLRemark = $xMLRemark;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToXMLRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToXMLRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToXMLRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property XMLRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: XMLRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to XMLRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\XMLRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToXMLRemark(\Travelport\UniversalRecord\StructType\XMLRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\XMLRemark) {
            throw new InvalidArgumentException(sprintf('The XMLRemark property can only contain items of type \Travelport\UniversalRecord\StructType\XMLRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToXMLRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->XMLRemark) && count($this->XMLRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->XMLRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->XMLRemark) && count($this->XMLRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->XMLRemark)), __LINE__);
        }
        $this->XMLRemark[] = $item;
        
        return $this;
    }
    /**
     * Get Postscript value
     * @return \Travelport\UniversalRecord\StructType\Postscript|null
     */
    public function getPostscript(): ?\Travelport\UniversalRecord\StructType\Postscript
    {
        return isset($this->Postscript) ? $this->Postscript : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPostscript method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostscript method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePostscriptForChoiceConstraintsFromSetPostscript($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Postscript can\'t be set as the property %s is already set. Only one property must be set among these properties: Postscript, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Postscript value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Postscript $postscript
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setPostscript(?\Travelport\UniversalRecord\StructType\Postscript $postscript = null): self
    {
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($postscriptChoiceErrorMessage = self::validatePostscriptForChoiceConstraintsFromSetPostscript($postscript))) {
            throw new InvalidArgumentException($postscriptChoiceErrorMessage, __LINE__);
        }
        if (is_null($postscript) || (is_array($postscript) && empty($postscript))) {
            unset($this->Postscript);
        } else {
            $this->Postscript = $postscript;
        }
        
        return $this;
    }
    /**
     * Get BookingTravelerInfo value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerInfo|null
     */
    public function getBookingTravelerInfo(): ?\Travelport\UniversalRecord\StructType\BookingTravelerInfo
    {
        return isset($this->BookingTravelerInfo) ? $this->BookingTravelerInfo : null;
    }
    /**
     * This method is responsible for validating the value passed to the setBookingTravelerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBookingTravelerInfoForChoiceConstraintsFromSetBookingTravelerInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BookingTravelerInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: BookingTravelerInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set BookingTravelerInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerInfo $bookingTravelerInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setBookingTravelerInfo(?\Travelport\UniversalRecord\StructType\BookingTravelerInfo $bookingTravelerInfo = null): self
    {
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($bookingTravelerInfoChoiceErrorMessage = self::validateBookingTravelerInfoForChoiceConstraintsFromSetBookingTravelerInfo($bookingTravelerInfo))) {
            throw new InvalidArgumentException($bookingTravelerInfoChoiceErrorMessage, __LINE__);
        }
        if (is_null($bookingTravelerInfo) || (is_array($bookingTravelerInfo) && empty($bookingTravelerInfo))) {
            unset($this->BookingTravelerInfo);
        } else {
            $this->BookingTravelerInfo = $bookingTravelerInfo;
        }
        
        return $this;
    }
    /**
     * Get ServiceFeeInfo value
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo[]
     */
    public function getServiceFeeInfo(): ?array
    {
        return isset($this->ServiceFeeInfo) ? $this->ServiceFeeInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceFeeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceFeeInfoForArrayConstraintsFromSetServiceFeeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalAddServiceFeeInfoItem) {
            // validation for constraint: itemType
            if (!$universalAddServiceFeeInfoItem instanceof \Travelport\UniversalRecord\StructType\ServiceFeeInfo) {
                $invalidValues[] = is_object($universalAddServiceFeeInfoItem) ? get_class($universalAddServiceFeeInfoItem) : sprintf('%s(%s)', gettype($universalAddServiceFeeInfoItem), var_export($universalAddServiceFeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceFeeInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceFeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setServiceFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceFeeInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateServiceFeeInfoForChoiceConstraintsFromSetServiceFeeInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ServiceFeeInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: ServiceFeeInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ServiceFeeInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeInfo[] $serviceFeeInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setServiceFeeInfo(?array $serviceFeeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceFeeInfoArrayErrorMessage = self::validateServiceFeeInfoForArrayConstraintsFromSetServiceFeeInfo($serviceFeeInfo))) {
            throw new InvalidArgumentException($serviceFeeInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($serviceFeeInfoChoiceErrorMessage = self::validateServiceFeeInfoForChoiceConstraintsFromSetServiceFeeInfo($serviceFeeInfo))) {
            throw new InvalidArgumentException($serviceFeeInfoChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($serviceFeeInfo) && count($serviceFeeInfo) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($serviceFeeInfo)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($serviceFeeInfo) && count($serviceFeeInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($serviceFeeInfo)), __LINE__);
        }
        if (is_null($serviceFeeInfo) || (is_array($serviceFeeInfo) && empty($serviceFeeInfo))) {
            unset($this->ServiceFeeInfo);
        } else {
            $this->ServiceFeeInfo = $serviceFeeInfo;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToServiceFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToServiceFeeInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToServiceFeeInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ServiceFeeInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: ServiceFeeInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to ServiceFeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToServiceFeeInfo(\Travelport\UniversalRecord\StructType\ServiceFeeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ServiceFeeInfo) {
            throw new InvalidArgumentException(sprintf('The ServiceFeeInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceFeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToServiceFeeInfo($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->ServiceFeeInfo) && count($this->ServiceFeeInfo) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->ServiceFeeInfo)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ServiceFeeInfo) && count($this->ServiceFeeInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ServiceFeeInfo)), __LINE__);
        }
        $this->ServiceFeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get LinkedUniversalRecord value
     * @return \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[]
     */
    public function getLinkedUniversalRecord(): ?array
    {
        return isset($this->LinkedUniversalRecord) ? $this->LinkedUniversalRecord : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLinkedUniversalRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLinkedUniversalRecord method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLinkedUniversalRecordForArrayConstraintsFromSetLinkedUniversalRecord(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalAddLinkedUniversalRecordItem) {
            // validation for constraint: itemType
            if (!$universalAddLinkedUniversalRecordItem instanceof \Travelport\UniversalRecord\StructType\LinkedUniversalRecord) {
                $invalidValues[] = is_object($universalAddLinkedUniversalRecordItem) ? get_class($universalAddLinkedUniversalRecordItem) : sprintf('%s(%s)', gettype($universalAddLinkedUniversalRecordItem), var_export($universalAddLinkedUniversalRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LinkedUniversalRecord property can only contain items of type \Travelport\UniversalRecord\StructType\LinkedUniversalRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setLinkedUniversalRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLinkedUniversalRecord method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateLinkedUniversalRecordForChoiceConstraintsFromSetLinkedUniversalRecord($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property LinkedUniversalRecord can\'t be set as the property %s is already set. Only one property must be set among these properties: LinkedUniversalRecord, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set LinkedUniversalRecord value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setLinkedUniversalRecord(?array $linkedUniversalRecord = null): self
    {
        // validation for constraint: array
        if ('' !== ($linkedUniversalRecordArrayErrorMessage = self::validateLinkedUniversalRecordForArrayConstraintsFromSetLinkedUniversalRecord($linkedUniversalRecord))) {
            throw new InvalidArgumentException($linkedUniversalRecordArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($linkedUniversalRecordChoiceErrorMessage = self::validateLinkedUniversalRecordForChoiceConstraintsFromSetLinkedUniversalRecord($linkedUniversalRecord))) {
            throw new InvalidArgumentException($linkedUniversalRecordChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($linkedUniversalRecord) && count($linkedUniversalRecord) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($linkedUniversalRecord)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($linkedUniversalRecord) && count($linkedUniversalRecord) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($linkedUniversalRecord)), __LINE__);
        }
        if (is_null($linkedUniversalRecord) || (is_array($linkedUniversalRecord) && empty($linkedUniversalRecord))) {
            unset($this->LinkedUniversalRecord);
        } else {
            $this->LinkedUniversalRecord = $linkedUniversalRecord;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToLinkedUniversalRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToLinkedUniversalRecord method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToLinkedUniversalRecord($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property LinkedUniversalRecord can\'t be set as the property %s is already set. Only one property must be set among these properties: LinkedUniversalRecord, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to LinkedUniversalRecord value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LinkedUniversalRecord $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToLinkedUniversalRecord(\Travelport\UniversalRecord\StructType\LinkedUniversalRecord $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LinkedUniversalRecord) {
            throw new InvalidArgumentException(sprintf('The LinkedUniversalRecord property can only contain items of type \Travelport\UniversalRecord\StructType\LinkedUniversalRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToLinkedUniversalRecord($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->LinkedUniversalRecord) && count($this->LinkedUniversalRecord) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->LinkedUniversalRecord)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LinkedUniversalRecord) && count($this->LinkedUniversalRecord) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LinkedUniversalRecord)), __LINE__);
        }
        $this->LinkedUniversalRecord[] = $item;
        
        return $this;
    }
    /**
     * Get AgencyContactInfo value
     * @return \Travelport\UniversalRecord\StructType\AgencyContactInfo|null
     */
    public function getAgencyContactInfo(): ?\Travelport\UniversalRecord\StructType\AgencyContactInfo
    {
        return isset($this->AgencyContactInfo) ? $this->AgencyContactInfo : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAgencyContactInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAgencyContactInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAgencyContactInfoForChoiceConstraintsFromSetAgencyContactInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AgencyContactInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: AgencyContactInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AgencyContactInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setAgencyContactInfo(?\Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo = null): self
    {
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($agencyContactInfoChoiceErrorMessage = self::validateAgencyContactInfoForChoiceConstraintsFromSetAgencyContactInfo($agencyContactInfo))) {
            throw new InvalidArgumentException($agencyContactInfoChoiceErrorMessage, __LINE__);
        }
        if (is_null($agencyContactInfo) || (is_array($agencyContactInfo) && empty($agencyContactInfo))) {
            unset($this->AgencyContactInfo);
        } else {
            $this->AgencyContactInfo = $agencyContactInfo;
        }
        
        return $this;
    }
    /**
     * Get CustomerID value
     * @return \Travelport\UniversalRecord\StructType\CustomerID|null
     */
    public function getCustomerID(): ?\Travelport\UniversalRecord\StructType\CustomerID
    {
        return isset($this->CustomerID) ? $this->CustomerID : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCustomerID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCustomerIDForChoiceConstraintsFromSetCustomerID($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CustomerID can\'t be set as the property %s is already set. Only one property must be set among these properties: CustomerID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CustomerID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CustomerID $customerID
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setCustomerID(?\Travelport\UniversalRecord\StructType\CustomerID $customerID = null): self
    {
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($customerIDChoiceErrorMessage = self::validateCustomerIDForChoiceConstraintsFromSetCustomerID($customerID))) {
            throw new InvalidArgumentException($customerIDChoiceErrorMessage, __LINE__);
        }
        if (is_null($customerID) || (is_array($customerID) && empty($customerID))) {
            unset($this->CustomerID);
        } else {
            $this->CustomerID = $customerID;
        }
        
        return $this;
    }
    /**
     * Get CommissionRemark value
     * @return \Travelport\UniversalRecord\StructType\CommissionRemark|null
     */
    public function getCommissionRemark(): ?\Travelport\UniversalRecord\StructType\CommissionRemark
    {
        return isset($this->CommissionRemark) ? $this->CommissionRemark : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCommissionRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommissionRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCommissionRemarkForChoiceConstraintsFromSetCommissionRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CommissionRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: CommissionRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CommissionRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CommissionRemark $commissionRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setCommissionRemark(?\Travelport\UniversalRecord\StructType\CommissionRemark $commissionRemark = null): self
    {
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($commissionRemarkChoiceErrorMessage = self::validateCommissionRemarkForChoiceConstraintsFromSetCommissionRemark($commissionRemark))) {
            throw new InvalidArgumentException($commissionRemarkChoiceErrorMessage, __LINE__);
        }
        if (is_null($commissionRemark) || (is_array($commissionRemark) && empty($commissionRemark))) {
            unset($this->CommissionRemark);
        } else {
            $this->CommissionRemark = $commissionRemark;
        }
        
        return $this;
    }
    /**
     * Get ConsolidatorRemark value
     * @return \Travelport\UniversalRecord\StructType\ConsolidatorRemark|null
     */
    public function getConsolidatorRemark(): ?\Travelport\UniversalRecord\StructType\ConsolidatorRemark
    {
        return isset($this->ConsolidatorRemark) ? $this->ConsolidatorRemark : null;
    }
    /**
     * This method is responsible for validating the value passed to the setConsolidatorRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConsolidatorRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateConsolidatorRemarkForChoiceConstraintsFromSetConsolidatorRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ConsolidatorRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: ConsolidatorRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ConsolidatorRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ConsolidatorRemark $consolidatorRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setConsolidatorRemark(?\Travelport\UniversalRecord\StructType\ConsolidatorRemark $consolidatorRemark = null): self
    {
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($consolidatorRemarkChoiceErrorMessage = self::validateConsolidatorRemarkForChoiceConstraintsFromSetConsolidatorRemark($consolidatorRemark))) {
            throw new InvalidArgumentException($consolidatorRemarkChoiceErrorMessage, __LINE__);
        }
        if (is_null($consolidatorRemark) || (is_array($consolidatorRemark) && empty($consolidatorRemark))) {
            unset($this->ConsolidatorRemark);
        } else {
            $this->ConsolidatorRemark = $consolidatorRemark;
        }
        
        return $this;
    }
    /**
     * Get InvoiceRemark value
     * @return \Travelport\UniversalRecord\StructType\InvoiceRemark[]
     */
    public function getInvoiceRemark(): ?array
    {
        return isset($this->InvoiceRemark) ? $this->InvoiceRemark : null;
    }
    /**
     * This method is responsible for validating the values passed to the setInvoiceRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvoiceRemarkForArrayConstraintsFromSetInvoiceRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalAddInvoiceRemarkItem) {
            // validation for constraint: itemType
            if (!$universalAddInvoiceRemarkItem instanceof \Travelport\UniversalRecord\StructType\InvoiceRemark) {
                $invalidValues[] = is_object($universalAddInvoiceRemarkItem) ? get_class($universalAddInvoiceRemarkItem) : sprintf('%s(%s)', gettype($universalAddInvoiceRemarkItem), var_export($universalAddInvoiceRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InvoiceRemark property can only contain items of type \Travelport\UniversalRecord\StructType\InvoiceRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setInvoiceRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateInvoiceRemarkForChoiceConstraintsFromSetInvoiceRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property InvoiceRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: InvoiceRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set InvoiceRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\InvoiceRemark[] $invoiceRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setInvoiceRemark(?array $invoiceRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceRemarkArrayErrorMessage = self::validateInvoiceRemarkForArrayConstraintsFromSetInvoiceRemark($invoiceRemark))) {
            throw new InvalidArgumentException($invoiceRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($invoiceRemarkChoiceErrorMessage = self::validateInvoiceRemarkForChoiceConstraintsFromSetInvoiceRemark($invoiceRemark))) {
            throw new InvalidArgumentException($invoiceRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($invoiceRemark) && count($invoiceRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($invoiceRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($invoiceRemark) && count($invoiceRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($invoiceRemark)), __LINE__);
        }
        if (is_null($invoiceRemark) || (is_array($invoiceRemark) && empty($invoiceRemark))) {
            unset($this->InvoiceRemark);
        } else {
            $this->InvoiceRemark = $invoiceRemark;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToInvoiceRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToInvoiceRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToInvoiceRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'ActionStatus',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property InvoiceRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: InvoiceRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to InvoiceRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\InvoiceRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToInvoiceRemark(\Travelport\UniversalRecord\StructType\InvoiceRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\InvoiceRemark) {
            throw new InvalidArgumentException(sprintf('The InvoiceRemark property can only contain items of type \Travelport\UniversalRecord\StructType\InvoiceRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToInvoiceRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->InvoiceRemark) && count($this->InvoiceRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->InvoiceRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->InvoiceRemark) && count($this->InvoiceRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->InvoiceRemark)), __LINE__);
        }
        $this->InvoiceRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ActionStatus value
     * @return \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    public function getActionStatus(): ?\Travelport\UniversalRecord\StructType\ActionStatus
    {
        return isset($this->ActionStatus) ? $this->ActionStatus : null;
    }
    /**
     * This method is responsible for validating the value passed to the setActionStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActionStatus method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateActionStatusForChoiceConstraintsFromSetActionStatus($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ReviewBooking',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ActionStatus can\'t be set as the property %s is already set. Only one property must be set among these properties: ActionStatus, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ActionStatus value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $actionStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setActionStatus(?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null): self
    {
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($actionStatusChoiceErrorMessage = self::validateActionStatusForChoiceConstraintsFromSetActionStatus($actionStatus))) {
            throw new InvalidArgumentException($actionStatusChoiceErrorMessage, __LINE__);
        }
        if (is_null($actionStatus) || (is_array($actionStatus) && empty($actionStatus))) {
            unset($this->ActionStatus);
        } else {
            $this->ActionStatus = $actionStatus;
        }
        
        return $this;
    }
    /**
     * Get ReviewBooking value
     * @return \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    public function getReviewBooking(): ?array
    {
        return isset($this->ReviewBooking) ? $this->ReviewBooking : null;
    }
    /**
     * This method is responsible for validating the values passed to the setReviewBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReviewBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReviewBookingForArrayConstraintsFromSetReviewBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalAddReviewBookingItem) {
            // validation for constraint: itemType
            if (!$universalAddReviewBookingItem instanceof \Travelport\UniversalRecord\StructType\ReviewBooking) {
                $invalidValues[] = is_object($universalAddReviewBookingItem) ? get_class($universalAddReviewBookingItem) : sprintf('%s(%s)', gettype($universalAddReviewBookingItem), var_export($universalAddReviewBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReviewBooking property can only contain items of type \Travelport\UniversalRecord\StructType\ReviewBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setReviewBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReviewBooking method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateReviewBookingForChoiceConstraintsFromSetReviewBooking($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ReviewBooking can\'t be set as the property %s is already set. Only one property must be set among these properties: ReviewBooking, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ReviewBooking value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setReviewBooking(?array $reviewBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($reviewBookingArrayErrorMessage = self::validateReviewBookingForArrayConstraintsFromSetReviewBooking($reviewBooking))) {
            throw new InvalidArgumentException($reviewBookingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($reviewBookingChoiceErrorMessage = self::validateReviewBookingForChoiceConstraintsFromSetReviewBooking($reviewBooking))) {
            throw new InvalidArgumentException($reviewBookingChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($reviewBooking) && count($reviewBooking) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($reviewBooking)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($reviewBooking) && count($reviewBooking) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($reviewBooking)), __LINE__);
        }
        if (is_null($reviewBooking) || (is_array($reviewBooking) && empty($reviewBooking))) {
            unset($this->ReviewBooking);
        } else {
            $this->ReviewBooking = $reviewBooking;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToReviewBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToReviewBooking method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToReviewBooking($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'FormOfPayment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ReviewBooking can\'t be set as the property %s is already set. Only one property must be set among these properties: ReviewBooking, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to ReviewBooking value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToReviewBooking(\Travelport\UniversalRecord\StructType\ReviewBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ReviewBooking) {
            throw new InvalidArgumentException(sprintf('The ReviewBooking property can only contain items of type \Travelport\UniversalRecord\StructType\ReviewBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToReviewBooking($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->ReviewBooking) && count($this->ReviewBooking) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->ReviewBooking)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ReviewBooking) && count($this->ReviewBooking) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ReviewBooking)), __LINE__);
        }
        $this->ReviewBooking[] = $item;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return isset($this->FormOfPayment) ? $this->FormOfPayment : null;
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
        foreach ($values as $universalAddFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$universalAddFormOfPaymentItem instanceof \Travelport\UniversalRecord\StructType\FormOfPayment) {
                $invalidValues[] = is_object($universalAddFormOfPaymentItem) ? get_class($universalAddFormOfPaymentItem) : sprintf('%s(%s)', gettype($universalAddFormOfPaymentItem), var_export($universalAddFormOfPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FormOfPayment property can only contain items of type \Travelport\UniversalRecord\StructType\FormOfPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
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
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
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
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($formOfPaymentArrayErrorMessage = self::validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($formOfPaymentChoiceErrorMessage = self::validateFormOfPaymentForChoiceConstraintsFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($formOfPayment) && count($formOfPayment) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($formOfPayment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($formOfPayment) && count($formOfPayment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($formOfPayment)), __LINE__);
        }
        if (is_null($formOfPayment) || (is_array($formOfPayment) && empty($formOfPayment))) {
            unset($this->FormOfPayment);
        } else {
            $this->FormOfPayment = $formOfPayment;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToFormOfPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToFormOfPayment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToFormOfPayment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountingRemark',
            'GeneralRemark',
            'OSI',
            'UnassociatedRemark',
            'XMLRemark',
            'Postscript',
            'BookingTravelerInfo',
            'ServiceFeeInfo',
            'LinkedUniversalRecord',
            'AgencyContactInfo',
            'CustomerID',
            'CommissionRemark',
            'ConsolidatorRemark',
            'InvoiceRemark',
            'ActionStatus',
            'ReviewBooking',
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
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToFormOfPayment(\Travelport\UniversalRecord\StructType\FormOfPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FormOfPayment) {
            throw new InvalidArgumentException(sprintf('The FormOfPayment property can only contain items of type \Travelport\UniversalRecord\StructType\FormOfPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountingRemark, GeneralRemark, OSI, UnassociatedRemark, XMLRemark, Postscript, BookingTravelerInfo, ServiceFeeInfo, LinkedUniversalRecord, AgencyContactInfo, CustomerID, CommissionRemark, ConsolidatorRemark, InvoiceRemark, ActionStatus, ReviewBooking, FormOfPayment)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToFormOfPayment($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->FormOfPayment) && count($this->FormOfPayment) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->FormOfPayment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FormOfPayment) && count($this->FormOfPayment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FormOfPayment)), __LINE__);
        }
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
}
