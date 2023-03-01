<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseCreateReservationReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Allow queue placement of a PNR at the time of booking in AirCreateReservationReq,HotelCreateReservationReq,PassiveCreateReservationReq and VehicleCreateReservationReq for providers 1G,1V and 1P. | SSR element outside Booking Traveler
 * without any Segment Ref or Booking Traveler Ref. | This element will be used if user wants to override segment continuity check.
 * @subpackage Structs
 */
class BaseCreateReservationReq extends BaseReq
{
    /**
     * The LinkedUniversalRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: LinkedUniversalRecord
     * @var \Travelport\Hotel\StructType\LinkedUniversalRecord[]
     */
    public ?array $LinkedUniversalRecord = null;
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingTraveler
     * @var \Travelport\Hotel\StructType\BookingTraveler[]
     */
    public ?array $BookingTraveler = null;
    /**
     * The OSI
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: OSI
     * @var \Travelport\Hotel\StructType\OSI[]
     */
    public ?array $OSI = null;
    /**
     * The AccountingRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AccountingRemark
     * @var \Travelport\Hotel\StructType\AccountingRemark[]
     */
    public ?array $AccountingRemark = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GeneralRemark
     * @var \Travelport\Hotel\StructType\GeneralRemark[]
     */
    public ?array $GeneralRemark = null;
    /**
     * The XMLRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: XMLRemark
     * @var \Travelport\Hotel\StructType\XMLRemark[]
     */
    public ?array $XMLRemark = null;
    /**
     * The UnassociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: UnassociatedRemark
     * @var \Travelport\Hotel\StructType\UnassociatedRemark[]
     */
    public ?array $UnassociatedRemark = null;
    /**
     * The Postscript
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Postscript
     * @var \Travelport\Hotel\StructType\Postscript|null
     */
    public ?\Travelport\Hotel\StructType\Postscript $Postscript = null;
    /**
     * The PassiveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PassiveInfo
     * @var \Travelport\Hotel\StructType\PassiveInfo|null
     */
    public ?\Travelport\Hotel\StructType\PassiveInfo $PassiveInfo = null;
    /**
     * The ContinuityCheckOverride
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ContinuityCheckOverride
     * @var \Travelport\Hotel\StructType\ContinuityCheckOverride|null
     */
    public ?\Travelport\Hotel\StructType\ContinuityCheckOverride $ContinuityCheckOverride = null;
    /**
     * The AgencyContactInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AgencyContactInfo
     * @var \Travelport\Hotel\StructType\AgencyContactInfo|null
     */
    public ?\Travelport\Hotel\StructType\AgencyContactInfo $AgencyContactInfo = null;
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CustomerID
     * @var \Travelport\Hotel\StructType\CustomerID|null
     */
    public ?\Travelport\Hotel\StructType\CustomerID $CustomerID = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FileFinishingInfo
     * @var \Travelport\Hotel\StructType\FileFinishingInfo|null
     */
    public ?\Travelport\Hotel\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The CommissionRemark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CommissionRemark
     * @var \Travelport\Hotel\StructType\CommissionRemark|null
     */
    public ?\Travelport\Hotel\StructType\CommissionRemark $CommissionRemark = null;
    /**
     * The ConsolidatorRemark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ConsolidatorRemark
     * @var \Travelport\Hotel\StructType\ConsolidatorRemark|null
     */
    public ?\Travelport\Hotel\StructType\ConsolidatorRemark $ConsolidatorRemark = null;
    /**
     * The InvoiceRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: InvoiceRemark
     * @var \Travelport\Hotel\StructType\InvoiceRemark[]
     */
    public ?array $InvoiceRemark = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SSR
     * @var \Travelport\Hotel\StructType\SSR[]
     */
    public ?array $SSR = null;
    /**
     * The EmailNotification
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: EmailNotification
     * @var \Travelport\Hotel\StructType\EmailNotification|null
     */
    public ?\Travelport\Hotel\StructType\EmailNotification $EmailNotification = null;
    /**
     * The QueuePlace
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: QueuePlace
     * @var \Travelport\Hotel\StructType\QueuePlace|null
     */
    public ?\Travelport\Hotel\StructType\QueuePlace $QueuePlace = null;
    /**
     * The RuleName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    public ?string $RuleName = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Which UniversalRecord should this new reservation be applied to. If blank, then a new one is created. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $UniversalRecordLocatorCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Which Provider reservation does this reservation get added to. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: To be used with ProviderLocatorCode, which host the reservation being added to belongs to.
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - documentation: Optional client centric customer identifier
     * - use: optional
     * @var string|null
     */
    public ?string $CustomerNumber = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $Version = null;
    /**
     * Constructor method for BaseCreateReservationReq
     * @uses BaseCreateReservationReq::setLinkedUniversalRecord()
     * @uses BaseCreateReservationReq::setBookingTraveler()
     * @uses BaseCreateReservationReq::setOSI()
     * @uses BaseCreateReservationReq::setAccountingRemark()
     * @uses BaseCreateReservationReq::setGeneralRemark()
     * @uses BaseCreateReservationReq::setXMLRemark()
     * @uses BaseCreateReservationReq::setUnassociatedRemark()
     * @uses BaseCreateReservationReq::setPostscript()
     * @uses BaseCreateReservationReq::setPassiveInfo()
     * @uses BaseCreateReservationReq::setContinuityCheckOverride()
     * @uses BaseCreateReservationReq::setAgencyContactInfo()
     * @uses BaseCreateReservationReq::setCustomerID()
     * @uses BaseCreateReservationReq::setFileFinishingInfo()
     * @uses BaseCreateReservationReq::setCommissionRemark()
     * @uses BaseCreateReservationReq::setConsolidatorRemark()
     * @uses BaseCreateReservationReq::setInvoiceRemark()
     * @uses BaseCreateReservationReq::setSSR()
     * @uses BaseCreateReservationReq::setEmailNotification()
     * @uses BaseCreateReservationReq::setQueuePlace()
     * @uses BaseCreateReservationReq::setRuleName()
     * @uses BaseCreateReservationReq::setUniversalRecordLocatorCode()
     * @uses BaseCreateReservationReq::setProviderLocatorCode()
     * @uses BaseCreateReservationReq::setProviderCode()
     * @uses BaseCreateReservationReq::setCustomerNumber()
     * @uses BaseCreateReservationReq::setVersion()
     * @param \Travelport\Hotel\StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @param \Travelport\Hotel\StructType\BookingTraveler[] $bookingTraveler
     * @param \Travelport\Hotel\StructType\OSI[] $oSI
     * @param \Travelport\Hotel\StructType\AccountingRemark[] $accountingRemark
     * @param \Travelport\Hotel\StructType\GeneralRemark[] $generalRemark
     * @param \Travelport\Hotel\StructType\XMLRemark[] $xMLRemark
     * @param \Travelport\Hotel\StructType\UnassociatedRemark[] $unassociatedRemark
     * @param \Travelport\Hotel\StructType\Postscript $postscript
     * @param \Travelport\Hotel\StructType\PassiveInfo $passiveInfo
     * @param \Travelport\Hotel\StructType\ContinuityCheckOverride $continuityCheckOverride
     * @param \Travelport\Hotel\StructType\AgencyContactInfo $agencyContactInfo
     * @param \Travelport\Hotel\StructType\CustomerID $customerID
     * @param \Travelport\Hotel\StructType\FileFinishingInfo $fileFinishingInfo
     * @param \Travelport\Hotel\StructType\CommissionRemark $commissionRemark
     * @param \Travelport\Hotel\StructType\ConsolidatorRemark $consolidatorRemark
     * @param \Travelport\Hotel\StructType\InvoiceRemark[] $invoiceRemark
     * @param \Travelport\Hotel\StructType\SSR[] $sSR
     * @param \Travelport\Hotel\StructType\EmailNotification $emailNotification
     * @param \Travelport\Hotel\StructType\QueuePlace $queuePlace
     * @param string $ruleName
     * @param string $universalRecordLocatorCode
     * @param string $providerLocatorCode
     * @param string $providerCode
     * @param string $customerNumber
     * @param int $version
     */
    public function __construct(?array $linkedUniversalRecord = null, ?array $bookingTraveler = null, ?array $oSI = null, ?array $accountingRemark = null, ?array $generalRemark = null, ?array $xMLRemark = null, ?array $unassociatedRemark = null, ?\Travelport\Hotel\StructType\Postscript $postscript = null, ?\Travelport\Hotel\StructType\PassiveInfo $passiveInfo = null, ?\Travelport\Hotel\StructType\ContinuityCheckOverride $continuityCheckOverride = null, ?\Travelport\Hotel\StructType\AgencyContactInfo $agencyContactInfo = null, ?\Travelport\Hotel\StructType\CustomerID $customerID = null, ?\Travelport\Hotel\StructType\FileFinishingInfo $fileFinishingInfo = null, ?\Travelport\Hotel\StructType\CommissionRemark $commissionRemark = null, ?\Travelport\Hotel\StructType\ConsolidatorRemark $consolidatorRemark = null, ?array $invoiceRemark = null, ?array $sSR = null, ?\Travelport\Hotel\StructType\EmailNotification $emailNotification = null, ?\Travelport\Hotel\StructType\QueuePlace $queuePlace = null, ?string $ruleName = null, ?string $universalRecordLocatorCode = null, ?string $providerLocatorCode = null, ?string $providerCode = null, ?string $customerNumber = null, ?int $version = null)
    {
        $this
            ->setLinkedUniversalRecord($linkedUniversalRecord)
            ->setBookingTraveler($bookingTraveler)
            ->setOSI($oSI)
            ->setAccountingRemark($accountingRemark)
            ->setGeneralRemark($generalRemark)
            ->setXMLRemark($xMLRemark)
            ->setUnassociatedRemark($unassociatedRemark)
            ->setPostscript($postscript)
            ->setPassiveInfo($passiveInfo)
            ->setContinuityCheckOverride($continuityCheckOverride)
            ->setAgencyContactInfo($agencyContactInfo)
            ->setCustomerID($customerID)
            ->setFileFinishingInfo($fileFinishingInfo)
            ->setCommissionRemark($commissionRemark)
            ->setConsolidatorRemark($consolidatorRemark)
            ->setInvoiceRemark($invoiceRemark)
            ->setSSR($sSR)
            ->setEmailNotification($emailNotification)
            ->setQueuePlace($queuePlace)
            ->setRuleName($ruleName)
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setProviderCode($providerCode)
            ->setCustomerNumber($customerNumber)
            ->setVersion($version);
    }
    /**
     * Get LinkedUniversalRecord value
     * @return \Travelport\Hotel\StructType\LinkedUniversalRecord[]
     */
    public function getLinkedUniversalRecord(): ?array
    {
        return $this->LinkedUniversalRecord;
    }
    /**
     * Set LinkedUniversalRecord value
     * @param \Travelport\Hotel\StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setLinkedUniversalRecord(?array $linkedUniversalRecord = null): self
    {
        $this->LinkedUniversalRecord = $linkedUniversalRecord;
        
        return $this;
    }
    /**
     * Add item to LinkedUniversalRecord value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\LinkedUniversalRecord $item
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function addToLinkedUniversalRecord(\Travelport\Hotel\StructType\LinkedUniversalRecord $item): self
    {
        $this->LinkedUniversalRecord[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTraveler value
     * @return \Travelport\Hotel\StructType\BookingTraveler[]
     */
    public function getBookingTraveler(): ?array
    {
        return $this->BookingTraveler;
    }
    /**
     * Set BookingTraveler value
     * @param \Travelport\Hotel\StructType\BookingTraveler[] $bookingTraveler
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setBookingTraveler(?array $bookingTraveler = null): self
    {
        $this->BookingTraveler = $bookingTraveler;
        
        return $this;
    }
    /**
     * Add item to BookingTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\BookingTraveler $item
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function addToBookingTraveler(\Travelport\Hotel\StructType\BookingTraveler $item): self
    {
        $this->BookingTraveler[] = $item;
        
        return $this;
    }
    /**
     * Get OSI value
     * @return \Travelport\Hotel\StructType\OSI[]
     */
    public function getOSI(): ?array
    {
        return $this->OSI;
    }
    /**
     * Set OSI value
     * @param \Travelport\Hotel\StructType\OSI[] $oSI
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setOSI(?array $oSI = null): self
    {
        $this->OSI = $oSI;
        
        return $this;
    }
    /**
     * Add item to OSI value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\OSI $item
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function addToOSI(\Travelport\Hotel\StructType\OSI $item): self
    {
        $this->OSI[] = $item;
        
        return $this;
    }
    /**
     * Get AccountingRemark value
     * @return \Travelport\Hotel\StructType\AccountingRemark[]
     */
    public function getAccountingRemark(): ?array
    {
        return $this->AccountingRemark;
    }
    /**
     * Set AccountingRemark value
     * @param \Travelport\Hotel\StructType\AccountingRemark[] $accountingRemark
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        $this->AccountingRemark = $accountingRemark;
        
        return $this;
    }
    /**
     * Add item to AccountingRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\AccountingRemark $item
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function addToAccountingRemark(\Travelport\Hotel\StructType\AccountingRemark $item): self
    {
        $this->AccountingRemark[] = $item;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\Hotel\StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark;
    }
    /**
     * Set GeneralRemark value
     * @param \Travelport\Hotel\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        $this->GeneralRemark = $generalRemark;
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\GeneralRemark $item
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function addToGeneralRemark(\Travelport\Hotel\StructType\GeneralRemark $item): self
    {
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get XMLRemark value
     * @return \Travelport\Hotel\StructType\XMLRemark[]
     */
    public function getXMLRemark(): ?array
    {
        return $this->XMLRemark;
    }
    /**
     * Set XMLRemark value
     * @param \Travelport\Hotel\StructType\XMLRemark[] $xMLRemark
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setXMLRemark(?array $xMLRemark = null): self
    {
        $this->XMLRemark = $xMLRemark;
        
        return $this;
    }
    /**
     * Add item to XMLRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\XMLRemark $item
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function addToXMLRemark(\Travelport\Hotel\StructType\XMLRemark $item): self
    {
        $this->XMLRemark[] = $item;
        
        return $this;
    }
    /**
     * Get UnassociatedRemark value
     * @return \Travelport\Hotel\StructType\UnassociatedRemark[]
     */
    public function getUnassociatedRemark(): ?array
    {
        return $this->UnassociatedRemark;
    }
    /**
     * Set UnassociatedRemark value
     * @param \Travelport\Hotel\StructType\UnassociatedRemark[] $unassociatedRemark
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setUnassociatedRemark(?array $unassociatedRemark = null): self
    {
        $this->UnassociatedRemark = $unassociatedRemark;
        
        return $this;
    }
    /**
     * Add item to UnassociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\UnassociatedRemark $item
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function addToUnassociatedRemark(\Travelport\Hotel\StructType\UnassociatedRemark $item): self
    {
        $this->UnassociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get Postscript value
     * @return \Travelport\Hotel\StructType\Postscript|null
     */
    public function getPostscript(): ?\Travelport\Hotel\StructType\Postscript
    {
        return $this->Postscript;
    }
    /**
     * Set Postscript value
     * @param \Travelport\Hotel\StructType\Postscript $postscript
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setPostscript(?\Travelport\Hotel\StructType\Postscript $postscript = null): self
    {
        $this->Postscript = $postscript;
        
        return $this;
    }
    /**
     * Get PassiveInfo value
     * @return \Travelport\Hotel\StructType\PassiveInfo|null
     */
    public function getPassiveInfo(): ?\Travelport\Hotel\StructType\PassiveInfo
    {
        return $this->PassiveInfo;
    }
    /**
     * Set PassiveInfo value
     * @param \Travelport\Hotel\StructType\PassiveInfo $passiveInfo
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setPassiveInfo(?\Travelport\Hotel\StructType\PassiveInfo $passiveInfo = null): self
    {
        $this->PassiveInfo = $passiveInfo;
        
        return $this;
    }
    /**
     * Get ContinuityCheckOverride value
     * @return \Travelport\Hotel\StructType\ContinuityCheckOverride|null
     */
    public function getContinuityCheckOverride(): ?\Travelport\Hotel\StructType\ContinuityCheckOverride
    {
        return $this->ContinuityCheckOverride;
    }
    /**
     * Set ContinuityCheckOverride value
     * @param \Travelport\Hotel\StructType\ContinuityCheckOverride $continuityCheckOverride
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setContinuityCheckOverride(?\Travelport\Hotel\StructType\ContinuityCheckOverride $continuityCheckOverride = null): self
    {
        $this->ContinuityCheckOverride = $continuityCheckOverride;
        
        return $this;
    }
    /**
     * Get AgencyContactInfo value
     * @return \Travelport\Hotel\StructType\AgencyContactInfo|null
     */
    public function getAgencyContactInfo(): ?\Travelport\Hotel\StructType\AgencyContactInfo
    {
        return $this->AgencyContactInfo;
    }
    /**
     * Set AgencyContactInfo value
     * @param \Travelport\Hotel\StructType\AgencyContactInfo $agencyContactInfo
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setAgencyContactInfo(?\Travelport\Hotel\StructType\AgencyContactInfo $agencyContactInfo = null): self
    {
        $this->AgencyContactInfo = $agencyContactInfo;
        
        return $this;
    }
    /**
     * Get CustomerID value
     * @return \Travelport\Hotel\StructType\CustomerID|null
     */
    public function getCustomerID(): ?\Travelport\Hotel\StructType\CustomerID
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param \Travelport\Hotel\StructType\CustomerID $customerID
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setCustomerID(?\Travelport\Hotel\StructType\CustomerID $customerID = null): self
    {
        $this->CustomerID = $customerID;
        
        return $this;
    }
    /**
     * Get FileFinishingInfo value
     * @return \Travelport\Hotel\StructType\FileFinishingInfo|null
     */
    public function getFileFinishingInfo(): ?\Travelport\Hotel\StructType\FileFinishingInfo
    {
        return $this->FileFinishingInfo;
    }
    /**
     * Set FileFinishingInfo value
     * @param \Travelport\Hotel\StructType\FileFinishingInfo $fileFinishingInfo
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setFileFinishingInfo(?\Travelport\Hotel\StructType\FileFinishingInfo $fileFinishingInfo = null): self
    {
        $this->FileFinishingInfo = $fileFinishingInfo;
        
        return $this;
    }
    /**
     * Get CommissionRemark value
     * @return \Travelport\Hotel\StructType\CommissionRemark|null
     */
    public function getCommissionRemark(): ?\Travelport\Hotel\StructType\CommissionRemark
    {
        return $this->CommissionRemark;
    }
    /**
     * Set CommissionRemark value
     * @param \Travelport\Hotel\StructType\CommissionRemark $commissionRemark
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setCommissionRemark(?\Travelport\Hotel\StructType\CommissionRemark $commissionRemark = null): self
    {
        $this->CommissionRemark = $commissionRemark;
        
        return $this;
    }
    /**
     * Get ConsolidatorRemark value
     * @return \Travelport\Hotel\StructType\ConsolidatorRemark|null
     */
    public function getConsolidatorRemark(): ?\Travelport\Hotel\StructType\ConsolidatorRemark
    {
        return $this->ConsolidatorRemark;
    }
    /**
     * Set ConsolidatorRemark value
     * @param \Travelport\Hotel\StructType\ConsolidatorRemark $consolidatorRemark
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setConsolidatorRemark(?\Travelport\Hotel\StructType\ConsolidatorRemark $consolidatorRemark = null): self
    {
        $this->ConsolidatorRemark = $consolidatorRemark;
        
        return $this;
    }
    /**
     * Get InvoiceRemark value
     * @return \Travelport\Hotel\StructType\InvoiceRemark[]
     */
    public function getInvoiceRemark(): ?array
    {
        return $this->InvoiceRemark;
    }
    /**
     * Set InvoiceRemark value
     * @param \Travelport\Hotel\StructType\InvoiceRemark[] $invoiceRemark
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setInvoiceRemark(?array $invoiceRemark = null): self
    {
        $this->InvoiceRemark = $invoiceRemark;
        
        return $this;
    }
    /**
     * Add item to InvoiceRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\InvoiceRemark $item
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function addToInvoiceRemark(\Travelport\Hotel\StructType\InvoiceRemark $item): self
    {
        $this->InvoiceRemark[] = $item;
        
        return $this;
    }
    /**
     * Get SSR value
     * @return \Travelport\Hotel\StructType\SSR[]
     */
    public function getSSR(): ?array
    {
        return $this->SSR;
    }
    /**
     * Set SSR value
     * @param \Travelport\Hotel\StructType\SSR[] $sSR
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setSSR(?array $sSR = null): self
    {
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\SSR $item
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function addToSSR(\Travelport\Hotel\StructType\SSR $item): self
    {
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get EmailNotification value
     * @return \Travelport\Hotel\StructType\EmailNotification|null
     */
    public function getEmailNotification(): ?\Travelport\Hotel\StructType\EmailNotification
    {
        return $this->EmailNotification;
    }
    /**
     * Set EmailNotification value
     * @param \Travelport\Hotel\StructType\EmailNotification $emailNotification
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setEmailNotification(?\Travelport\Hotel\StructType\EmailNotification $emailNotification = null): self
    {
        $this->EmailNotification = $emailNotification;
        
        return $this;
    }
    /**
     * Get QueuePlace value
     * @return \Travelport\Hotel\StructType\QueuePlace|null
     */
    public function getQueuePlace(): ?\Travelport\Hotel\StructType\QueuePlace
    {
        return $this->QueuePlace;
    }
    /**
     * Set QueuePlace value
     * @param \Travelport\Hotel\StructType\QueuePlace $queuePlace
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setQueuePlace(?\Travelport\Hotel\StructType\QueuePlace $queuePlace = null): self
    {
        $this->QueuePlace = $queuePlace;
        
        return $this;
    }
    /**
     * Get RuleName value
     * @return string|null
     */
    public function getRuleName(): ?string
    {
        return $this->RuleName;
    }
    /**
     * Set RuleName value
     * @param string $ruleName
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setRuleName(?string $ruleName = null): self
    {
        $this->RuleName = $ruleName;
        
        return $this;
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string|null
     */
    public function getUniversalRecordLocatorCode(): ?string
    {
        return $this->UniversalRecordLocatorCode;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * @param string $universalRecordLocatorCode
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setUniversalRecordLocatorCode(?string $universalRecordLocatorCode = null): self
    {
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
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
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
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
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get CustomerNumber value
     * @return string|null
     */
    public function getCustomerNumber(): ?string
    {
        return $this->CustomerNumber;
    }
    /**
     * Set CustomerNumber value
     * @param string $customerNumber
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setCustomerNumber(?string $customerNumber = null): self
    {
        $this->CustomerNumber = $customerNumber;
        
        return $this;
    }
    /**
     * Get Version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Travelport\Hotel\StructType\BaseCreateReservationReq
     */
    public function setVersion(?int $version = null): self
    {
        $this->Version = $version;
        
        return $this;
    }
}
