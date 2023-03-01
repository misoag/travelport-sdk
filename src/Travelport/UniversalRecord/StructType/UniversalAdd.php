<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalAdd StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider:1G,1V,1P,ACH,SDK.Product:Air,Hotel,Vehicle,Cruise | Element to add Review booking to a PNR .
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
    public ?array $AccountingRemark = null;
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
    public ?array $GeneralRemark = null;
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
    public ?array $OSI = null;
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
    public ?array $UnassociatedRemark = null;
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
    public ?array $XMLRemark = null;
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
    public ?\Travelport\UniversalRecord\StructType\Postscript $Postscript = null;
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
    public ?\Travelport\UniversalRecord\StructType\BookingTravelerInfo $BookingTravelerInfo = null;
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
    public ?array $ServiceFeeInfo = null;
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
    public ?array $LinkedUniversalRecord = null;
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
    public ?\Travelport\UniversalRecord\StructType\AgencyContactInfo $AgencyContactInfo = null;
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
    public ?\Travelport\UniversalRecord\StructType\CustomerID $CustomerID = null;
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
    public ?\Travelport\UniversalRecord\StructType\CommissionRemark $CommissionRemark = null;
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
    public ?\Travelport\UniversalRecord\StructType\ConsolidatorRemark $ConsolidatorRemark = null;
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
    public ?array $InvoiceRemark = null;
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
    public ?\Travelport\UniversalRecord\StructType\ActionStatus $ActionStatus = null;
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
    public ?array $ReviewBooking = null;
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
    public ?array $FormOfPayment = null;
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
     * @return \Travelport\UniversalRecord\StructType\AccountingRemark[]|null
     */
    public function getAccountingRemark(): ?array
    {
        return $this->AccountingRemark ?? null;
    }
    /**
     * Set AccountingRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        if (is_null($accountingRemark) || (is_array($accountingRemark) && empty($accountingRemark))) {
            unset($this->AccountingRemark);
        } else {
            $this->AccountingRemark = $accountingRemark;
        }
        
        return $this;
    }
    /**
     * Add item to AccountingRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToAccountingRemark(\Travelport\UniversalRecord\StructType\AccountingRemark $item): self
    {
        $this->AccountingRemark[] = $item;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\UniversalRecord\StructType\GeneralRemark[]|null
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark ?? null;
    }
    /**
     * Set GeneralRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        if (is_null($generalRemark) || (is_array($generalRemark) && empty($generalRemark))) {
            unset($this->GeneralRemark);
        } else {
            $this->GeneralRemark = $generalRemark;
        }
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToGeneralRemark(\Travelport\UniversalRecord\StructType\GeneralRemark $item): self
    {
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get OSI value
     * @return \Travelport\UniversalRecord\StructType\OSI[]|null
     */
    public function getOSI(): ?array
    {
        return $this->OSI ?? null;
    }
    /**
     * Set OSI value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\OSI[] $oSI
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setOSI(?array $oSI = null): self
    {
        if (is_null($oSI) || (is_array($oSI) && empty($oSI))) {
            unset($this->OSI);
        } else {
            $this->OSI = $oSI;
        }
        
        return $this;
    }
    /**
     * Add item to OSI value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OSI $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToOSI(\Travelport\UniversalRecord\StructType\OSI $item): self
    {
        $this->OSI[] = $item;
        
        return $this;
    }
    /**
     * Get UnassociatedRemark value
     * @return \Travelport\UniversalRecord\StructType\UnassociatedRemark[]|null
     */
    public function getUnassociatedRemark(): ?array
    {
        return $this->UnassociatedRemark ?? null;
    }
    /**
     * Set UnassociatedRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\UnassociatedRemark[] $unassociatedRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setUnassociatedRemark(?array $unassociatedRemark = null): self
    {
        if (is_null($unassociatedRemark) || (is_array($unassociatedRemark) && empty($unassociatedRemark))) {
            unset($this->UnassociatedRemark);
        } else {
            $this->UnassociatedRemark = $unassociatedRemark;
        }
        
        return $this;
    }
    /**
     * Add item to UnassociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UnassociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToUnassociatedRemark(\Travelport\UniversalRecord\StructType\UnassociatedRemark $item): self
    {
        $this->UnassociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get XMLRemark value
     * @return \Travelport\UniversalRecord\StructType\XMLRemark[]|null
     */
    public function getXMLRemark(): ?array
    {
        return $this->XMLRemark ?? null;
    }
    /**
     * Set XMLRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\XMLRemark[] $xMLRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setXMLRemark(?array $xMLRemark = null): self
    {
        if (is_null($xMLRemark) || (is_array($xMLRemark) && empty($xMLRemark))) {
            unset($this->XMLRemark);
        } else {
            $this->XMLRemark = $xMLRemark;
        }
        
        return $this;
    }
    /**
     * Add item to XMLRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\XMLRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToXMLRemark(\Travelport\UniversalRecord\StructType\XMLRemark $item): self
    {
        $this->XMLRemark[] = $item;
        
        return $this;
    }
    /**
     * Get Postscript value
     * @return \Travelport\UniversalRecord\StructType\Postscript|null
     */
    public function getPostscript(): ?\Travelport\UniversalRecord\StructType\Postscript
    {
        return $this->Postscript ?? null;
    }
    /**
     * Set Postscript value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\Postscript $postscript
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setPostscript(?\Travelport\UniversalRecord\StructType\Postscript $postscript = null): self
    {
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
        return $this->BookingTravelerInfo ?? null;
    }
    /**
     * Set BookingTravelerInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerInfo $bookingTravelerInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setBookingTravelerInfo(?\Travelport\UniversalRecord\StructType\BookingTravelerInfo $bookingTravelerInfo = null): self
    {
        if (is_null($bookingTravelerInfo) || (is_array($bookingTravelerInfo) && empty($bookingTravelerInfo))) {
            unset($this->BookingTravelerInfo);
        } else {
            $this->BookingTravelerInfo = $bookingTravelerInfo;
        }
        
        return $this;
    }
    /**
     * Get ServiceFeeInfo value
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo[]|null
     */
    public function getServiceFeeInfo(): ?array
    {
        return $this->ServiceFeeInfo ?? null;
    }
    /**
     * Set ServiceFeeInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeInfo[] $serviceFeeInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setServiceFeeInfo(?array $serviceFeeInfo = null): self
    {
        if (is_null($serviceFeeInfo) || (is_array($serviceFeeInfo) && empty($serviceFeeInfo))) {
            unset($this->ServiceFeeInfo);
        } else {
            $this->ServiceFeeInfo = $serviceFeeInfo;
        }
        
        return $this;
    }
    /**
     * Add item to ServiceFeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToServiceFeeInfo(\Travelport\UniversalRecord\StructType\ServiceFeeInfo $item): self
    {
        $this->ServiceFeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get LinkedUniversalRecord value
     * @return \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[]|null
     */
    public function getLinkedUniversalRecord(): ?array
    {
        return $this->LinkedUniversalRecord ?? null;
    }
    /**
     * Set LinkedUniversalRecord value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setLinkedUniversalRecord(?array $linkedUniversalRecord = null): self
    {
        if (is_null($linkedUniversalRecord) || (is_array($linkedUniversalRecord) && empty($linkedUniversalRecord))) {
            unset($this->LinkedUniversalRecord);
        } else {
            $this->LinkedUniversalRecord = $linkedUniversalRecord;
        }
        
        return $this;
    }
    /**
     * Add item to LinkedUniversalRecord value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LinkedUniversalRecord $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToLinkedUniversalRecord(\Travelport\UniversalRecord\StructType\LinkedUniversalRecord $item): self
    {
        $this->LinkedUniversalRecord[] = $item;
        
        return $this;
    }
    /**
     * Get AgencyContactInfo value
     * @return \Travelport\UniversalRecord\StructType\AgencyContactInfo|null
     */
    public function getAgencyContactInfo(): ?\Travelport\UniversalRecord\StructType\AgencyContactInfo
    {
        return $this->AgencyContactInfo ?? null;
    }
    /**
     * Set AgencyContactInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setAgencyContactInfo(?\Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo = null): self
    {
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
        return $this->CustomerID ?? null;
    }
    /**
     * Set CustomerID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\CustomerID $customerID
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setCustomerID(?\Travelport\UniversalRecord\StructType\CustomerID $customerID = null): self
    {
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
        return $this->CommissionRemark ?? null;
    }
    /**
     * Set CommissionRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\CommissionRemark $commissionRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setCommissionRemark(?\Travelport\UniversalRecord\StructType\CommissionRemark $commissionRemark = null): self
    {
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
        return $this->ConsolidatorRemark ?? null;
    }
    /**
     * Set ConsolidatorRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ConsolidatorRemark $consolidatorRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setConsolidatorRemark(?\Travelport\UniversalRecord\StructType\ConsolidatorRemark $consolidatorRemark = null): self
    {
        if (is_null($consolidatorRemark) || (is_array($consolidatorRemark) && empty($consolidatorRemark))) {
            unset($this->ConsolidatorRemark);
        } else {
            $this->ConsolidatorRemark = $consolidatorRemark;
        }
        
        return $this;
    }
    /**
     * Get InvoiceRemark value
     * @return \Travelport\UniversalRecord\StructType\InvoiceRemark[]|null
     */
    public function getInvoiceRemark(): ?array
    {
        return $this->InvoiceRemark ?? null;
    }
    /**
     * Set InvoiceRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\InvoiceRemark[] $invoiceRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setInvoiceRemark(?array $invoiceRemark = null): self
    {
        if (is_null($invoiceRemark) || (is_array($invoiceRemark) && empty($invoiceRemark))) {
            unset($this->InvoiceRemark);
        } else {
            $this->InvoiceRemark = $invoiceRemark;
        }
        
        return $this;
    }
    /**
     * Add item to InvoiceRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\InvoiceRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToInvoiceRemark(\Travelport\UniversalRecord\StructType\InvoiceRemark $item): self
    {
        $this->InvoiceRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ActionStatus value
     * @return \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    public function getActionStatus(): ?\Travelport\UniversalRecord\StructType\ActionStatus
    {
        return $this->ActionStatus ?? null;
    }
    /**
     * Set ActionStatus value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $actionStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setActionStatus(?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null): self
    {
        if (is_null($actionStatus) || (is_array($actionStatus) && empty($actionStatus))) {
            unset($this->ActionStatus);
        } else {
            $this->ActionStatus = $actionStatus;
        }
        
        return $this;
    }
    /**
     * Get ReviewBooking value
     * @return \Travelport\UniversalRecord\StructType\ReviewBooking[]|null
     */
    public function getReviewBooking(): ?array
    {
        return $this->ReviewBooking ?? null;
    }
    /**
     * Set ReviewBooking value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setReviewBooking(?array $reviewBooking = null): self
    {
        if (is_null($reviewBooking) || (is_array($reviewBooking) && empty($reviewBooking))) {
            unset($this->ReviewBooking);
        } else {
            $this->ReviewBooking = $reviewBooking;
        }
        
        return $this;
    }
    /**
     * Add item to ReviewBooking value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToReviewBooking(\Travelport\UniversalRecord\StructType\ReviewBooking $item): self
    {
        $this->ReviewBooking[] = $item;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment[]|null
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment ?? null;
    }
    /**
     * Set FormOfPayment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        if (is_null($formOfPayment) || (is_array($formOfPayment) && empty($formOfPayment))) {
            unset($this->FormOfPayment);
        } else {
            $this->FormOfPayment = $formOfPayment;
        }
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $item
     * @return \Travelport\UniversalRecord\StructType\UniversalAdd
     */
    public function addToFormOfPayment(\Travelport\UniversalRecord\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
}
