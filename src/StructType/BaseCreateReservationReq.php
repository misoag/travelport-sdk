<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\LinkedUniversalRecord[]
     */
    protected ?array $LinkedUniversalRecord = null;
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingTraveler
     * @var \StructType\BookingTraveler[]
     */
    protected ?array $BookingTraveler = null;
    /**
     * The OSI
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: OSI
     * @var \StructType\OSI[]
     */
    protected ?array $OSI = null;
    /**
     * The AccountingRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AccountingRemark
     * @var \StructType\AccountingRemark[]
     */
    protected ?array $AccountingRemark = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GeneralRemark
     * @var \StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The XMLRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: XMLRemark
     * @var \StructType\XMLRemark[]
     */
    protected ?array $XMLRemark = null;
    /**
     * The UnassociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: UnassociatedRemark
     * @var \StructType\UnassociatedRemark[]
     */
    protected ?array $UnassociatedRemark = null;
    /**
     * The Postscript
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Postscript
     * @var \StructType\Postscript|null
     */
    protected ?\StructType\Postscript $Postscript = null;
    /**
     * The PassiveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PassiveInfo
     * @var \StructType\PassiveInfo|null
     */
    protected ?\StructType\PassiveInfo $PassiveInfo = null;
    /**
     * The ContinuityCheckOverride
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ContinuityCheckOverride
     * @var \StructType\ContinuityCheckOverride|null
     */
    protected ?\StructType\ContinuityCheckOverride $ContinuityCheckOverride = null;
    /**
     * The AgencyContactInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AgencyContactInfo
     * @var \StructType\AgencyContactInfo|null
     */
    protected ?\StructType\AgencyContactInfo $AgencyContactInfo = null;
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CustomerID
     * @var \StructType\CustomerID|null
     */
    protected ?\StructType\CustomerID $CustomerID = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FileFinishingInfo
     * @var \StructType\FileFinishingInfo|null
     */
    protected ?\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The CommissionRemark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CommissionRemark
     * @var \StructType\CommissionRemark|null
     */
    protected ?\StructType\CommissionRemark $CommissionRemark = null;
    /**
     * The ConsolidatorRemark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ConsolidatorRemark
     * @var \StructType\ConsolidatorRemark|null
     */
    protected ?\StructType\ConsolidatorRemark $ConsolidatorRemark = null;
    /**
     * The InvoiceRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: InvoiceRemark
     * @var \StructType\InvoiceRemark[]
     */
    protected ?array $InvoiceRemark = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SSR
     * @var \StructType\SSR[]
     */
    protected ?array $SSR = null;
    /**
     * The EmailNotification
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: EmailNotification
     * @var \StructType\EmailNotification|null
     */
    protected ?\StructType\EmailNotification $EmailNotification = null;
    /**
     * The QueuePlace
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: QueuePlace
     * @var \StructType\QueuePlace|null
     */
    protected ?\StructType\QueuePlace $QueuePlace = null;
    /**
     * The RuleName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $RuleName = null;
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
    protected ?string $UniversalRecordLocatorCode = null;
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
    protected ?string $ProviderLocatorCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: To be used with ProviderLocatorCode, which host the reservation being added to belongs to.
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - documentation: Optional client centric customer identifier
     * - use: optional
     * @var string|null
     */
    protected ?string $CustomerNumber = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $Version = null;
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
     * @param \StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @param \StructType\BookingTraveler[] $bookingTraveler
     * @param \StructType\OSI[] $oSI
     * @param \StructType\AccountingRemark[] $accountingRemark
     * @param \StructType\GeneralRemark[] $generalRemark
     * @param \StructType\XMLRemark[] $xMLRemark
     * @param \StructType\UnassociatedRemark[] $unassociatedRemark
     * @param \StructType\Postscript $postscript
     * @param \StructType\PassiveInfo $passiveInfo
     * @param \StructType\ContinuityCheckOverride $continuityCheckOverride
     * @param \StructType\AgencyContactInfo $agencyContactInfo
     * @param \StructType\CustomerID $customerID
     * @param \StructType\FileFinishingInfo $fileFinishingInfo
     * @param \StructType\CommissionRemark $commissionRemark
     * @param \StructType\ConsolidatorRemark $consolidatorRemark
     * @param \StructType\InvoiceRemark[] $invoiceRemark
     * @param \StructType\SSR[] $sSR
     * @param \StructType\EmailNotification $emailNotification
     * @param \StructType\QueuePlace $queuePlace
     * @param string $ruleName
     * @param string $universalRecordLocatorCode
     * @param string $providerLocatorCode
     * @param string $providerCode
     * @param string $customerNumber
     * @param int $version
     */
    public function __construct(?array $linkedUniversalRecord = null, ?array $bookingTraveler = null, ?array $oSI = null, ?array $accountingRemark = null, ?array $generalRemark = null, ?array $xMLRemark = null, ?array $unassociatedRemark = null, ?\StructType\Postscript $postscript = null, ?\StructType\PassiveInfo $passiveInfo = null, ?\StructType\ContinuityCheckOverride $continuityCheckOverride = null, ?\StructType\AgencyContactInfo $agencyContactInfo = null, ?\StructType\CustomerID $customerID = null, ?\StructType\FileFinishingInfo $fileFinishingInfo = null, ?\StructType\CommissionRemark $commissionRemark = null, ?\StructType\ConsolidatorRemark $consolidatorRemark = null, ?array $invoiceRemark = null, ?array $sSR = null, ?\StructType\EmailNotification $emailNotification = null, ?\StructType\QueuePlace $queuePlace = null, ?string $ruleName = null, ?string $universalRecordLocatorCode = null, ?string $providerLocatorCode = null, ?string $providerCode = null, ?string $customerNumber = null, ?int $version = null)
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
     * @return \StructType\LinkedUniversalRecord[]
     */
    public function getLinkedUniversalRecord(): ?array
    {
        return $this->LinkedUniversalRecord;
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
        foreach ($values as $baseCreateReservationReqLinkedUniversalRecordItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqLinkedUniversalRecordItem instanceof \StructType\LinkedUniversalRecord) {
                $invalidValues[] = is_object($baseCreateReservationReqLinkedUniversalRecordItem) ? get_class($baseCreateReservationReqLinkedUniversalRecordItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqLinkedUniversalRecordItem), var_export($baseCreateReservationReqLinkedUniversalRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LinkedUniversalRecord property can only contain items of type \StructType\LinkedUniversalRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LinkedUniversalRecord value
     * @throws InvalidArgumentException
     * @param \StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @return \StructType\BaseCreateReservationReq
     */
    public function setLinkedUniversalRecord(?array $linkedUniversalRecord = null): self
    {
        // validation for constraint: array
        if ('' !== ($linkedUniversalRecordArrayErrorMessage = self::validateLinkedUniversalRecordForArrayConstraintsFromSetLinkedUniversalRecord($linkedUniversalRecord))) {
            throw new InvalidArgumentException($linkedUniversalRecordArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($linkedUniversalRecord) && count($linkedUniversalRecord) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($linkedUniversalRecord)), __LINE__);
        }
        $this->LinkedUniversalRecord = $linkedUniversalRecord;
        
        return $this;
    }
    /**
     * Add item to LinkedUniversalRecord value
     * @throws InvalidArgumentException
     * @param \StructType\LinkedUniversalRecord $item
     * @return \StructType\BaseCreateReservationReq
     */
    public function addToLinkedUniversalRecord(\StructType\LinkedUniversalRecord $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LinkedUniversalRecord) {
            throw new InvalidArgumentException(sprintf('The LinkedUniversalRecord property can only contain items of type \StructType\LinkedUniversalRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LinkedUniversalRecord) && count($this->LinkedUniversalRecord) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LinkedUniversalRecord)), __LINE__);
        }
        $this->LinkedUniversalRecord[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTraveler value
     * @return \StructType\BookingTraveler[]
     */
    public function getBookingTraveler(): ?array
    {
        return $this->BookingTraveler;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTraveler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTraveler method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerForArrayConstraintsFromSetBookingTraveler(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseCreateReservationReqBookingTravelerItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqBookingTravelerItem instanceof \StructType\BookingTraveler) {
                $invalidValues[] = is_object($baseCreateReservationReqBookingTravelerItem) ? get_class($baseCreateReservationReqBookingTravelerItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqBookingTravelerItem), var_export($baseCreateReservationReqBookingTravelerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTraveler property can only contain items of type \StructType\BookingTraveler, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTraveler value
     * @throws InvalidArgumentException
     * @param \StructType\BookingTraveler[] $bookingTraveler
     * @return \StructType\BaseCreateReservationReq
     */
    public function setBookingTraveler(?array $bookingTraveler = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerArrayErrorMessage = self::validateBookingTravelerForArrayConstraintsFromSetBookingTraveler($bookingTraveler))) {
            throw new InvalidArgumentException($bookingTravelerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTraveler) && count($bookingTraveler) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTraveler)), __LINE__);
        }
        $this->BookingTraveler = $bookingTraveler;
        
        return $this;
    }
    /**
     * Add item to BookingTraveler value
     * @throws InvalidArgumentException
     * @param \StructType\BookingTraveler $item
     * @return \StructType\BaseCreateReservationReq
     */
    public function addToBookingTraveler(\StructType\BookingTraveler $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BookingTraveler) {
            throw new InvalidArgumentException(sprintf('The BookingTraveler property can only contain items of type \StructType\BookingTraveler, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTraveler) && count($this->BookingTraveler) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTraveler)), __LINE__);
        }
        $this->BookingTraveler[] = $item;
        
        return $this;
    }
    /**
     * Get OSI value
     * @return \StructType\OSI[]
     */
    public function getOSI(): ?array
    {
        return $this->OSI;
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
        foreach ($values as $baseCreateReservationReqOSIItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqOSIItem instanceof \StructType\OSI) {
                $invalidValues[] = is_object($baseCreateReservationReqOSIItem) ? get_class($baseCreateReservationReqOSIItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqOSIItem), var_export($baseCreateReservationReqOSIItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OSI property can only contain items of type \StructType\OSI, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OSI value
     * @throws InvalidArgumentException
     * @param \StructType\OSI[] $oSI
     * @return \StructType\BaseCreateReservationReq
     */
    public function setOSI(?array $oSI = null): self
    {
        // validation for constraint: array
        if ('' !== ($oSIArrayErrorMessage = self::validateOSIForArrayConstraintsFromSetOSI($oSI))) {
            throw new InvalidArgumentException($oSIArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($oSI) && count($oSI) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($oSI)), __LINE__);
        }
        $this->OSI = $oSI;
        
        return $this;
    }
    /**
     * Add item to OSI value
     * @throws InvalidArgumentException
     * @param \StructType\OSI $item
     * @return \StructType\BaseCreateReservationReq
     */
    public function addToOSI(\StructType\OSI $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OSI) {
            throw new InvalidArgumentException(sprintf('The OSI property can only contain items of type \StructType\OSI, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->OSI) && count($this->OSI) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->OSI)), __LINE__);
        }
        $this->OSI[] = $item;
        
        return $this;
    }
    /**
     * Get AccountingRemark value
     * @return \StructType\AccountingRemark[]
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
        foreach ($values as $baseCreateReservationReqAccountingRemarkItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqAccountingRemarkItem instanceof \StructType\AccountingRemark) {
                $invalidValues[] = is_object($baseCreateReservationReqAccountingRemarkItem) ? get_class($baseCreateReservationReqAccountingRemarkItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqAccountingRemarkItem), var_export($baseCreateReservationReqAccountingRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountingRemark property can only contain items of type \StructType\AccountingRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountingRemark value
     * @throws InvalidArgumentException
     * @param \StructType\AccountingRemark[] $accountingRemark
     * @return \StructType\BaseCreateReservationReq
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
     * @param \StructType\AccountingRemark $item
     * @return \StructType\BaseCreateReservationReq
     */
    public function addToAccountingRemark(\StructType\AccountingRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AccountingRemark) {
            throw new InvalidArgumentException(sprintf('The AccountingRemark property can only contain items of type \StructType\AccountingRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \StructType\GeneralRemark[]
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
        foreach ($values as $baseCreateReservationReqGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqGeneralRemarkItem instanceof \StructType\GeneralRemark) {
                $invalidValues[] = is_object($baseCreateReservationReqGeneralRemarkItem) ? get_class($baseCreateReservationReqGeneralRemarkItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqGeneralRemarkItem), var_export($baseCreateReservationReqGeneralRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GeneralRemark property can only contain items of type \StructType\GeneralRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GeneralRemark value
     * @throws InvalidArgumentException
     * @param \StructType\GeneralRemark[] $generalRemark
     * @return \StructType\BaseCreateReservationReq
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
     * @param \StructType\GeneralRemark $item
     * @return \StructType\BaseCreateReservationReq
     */
    public function addToGeneralRemark(\StructType\GeneralRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GeneralRemark) {
            throw new InvalidArgumentException(sprintf('The GeneralRemark property can only contain items of type \StructType\GeneralRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GeneralRemark)), __LINE__);
        }
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get XMLRemark value
     * @return \StructType\XMLRemark[]
     */
    public function getXMLRemark(): ?array
    {
        return $this->XMLRemark;
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
        foreach ($values as $baseCreateReservationReqXMLRemarkItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqXMLRemarkItem instanceof \StructType\XMLRemark) {
                $invalidValues[] = is_object($baseCreateReservationReqXMLRemarkItem) ? get_class($baseCreateReservationReqXMLRemarkItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqXMLRemarkItem), var_export($baseCreateReservationReqXMLRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The XMLRemark property can only contain items of type \StructType\XMLRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set XMLRemark value
     * @throws InvalidArgumentException
     * @param \StructType\XMLRemark[] $xMLRemark
     * @return \StructType\BaseCreateReservationReq
     */
    public function setXMLRemark(?array $xMLRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($xMLRemarkArrayErrorMessage = self::validateXMLRemarkForArrayConstraintsFromSetXMLRemark($xMLRemark))) {
            throw new InvalidArgumentException($xMLRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($xMLRemark) && count($xMLRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($xMLRemark)), __LINE__);
        }
        $this->XMLRemark = $xMLRemark;
        
        return $this;
    }
    /**
     * Add item to XMLRemark value
     * @throws InvalidArgumentException
     * @param \StructType\XMLRemark $item
     * @return \StructType\BaseCreateReservationReq
     */
    public function addToXMLRemark(\StructType\XMLRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\XMLRemark) {
            throw new InvalidArgumentException(sprintf('The XMLRemark property can only contain items of type \StructType\XMLRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->XMLRemark) && count($this->XMLRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->XMLRemark)), __LINE__);
        }
        $this->XMLRemark[] = $item;
        
        return $this;
    }
    /**
     * Get UnassociatedRemark value
     * @return \StructType\UnassociatedRemark[]
     */
    public function getUnassociatedRemark(): ?array
    {
        return $this->UnassociatedRemark;
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
        foreach ($values as $baseCreateReservationReqUnassociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqUnassociatedRemarkItem instanceof \StructType\UnassociatedRemark) {
                $invalidValues[] = is_object($baseCreateReservationReqUnassociatedRemarkItem) ? get_class($baseCreateReservationReqUnassociatedRemarkItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqUnassociatedRemarkItem), var_export($baseCreateReservationReqUnassociatedRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnassociatedRemark property can only contain items of type \StructType\UnassociatedRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnassociatedRemark value
     * @throws InvalidArgumentException
     * @param \StructType\UnassociatedRemark[] $unassociatedRemark
     * @return \StructType\BaseCreateReservationReq
     */
    public function setUnassociatedRemark(?array $unassociatedRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($unassociatedRemarkArrayErrorMessage = self::validateUnassociatedRemarkForArrayConstraintsFromSetUnassociatedRemark($unassociatedRemark))) {
            throw new InvalidArgumentException($unassociatedRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($unassociatedRemark) && count($unassociatedRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($unassociatedRemark)), __LINE__);
        }
        $this->UnassociatedRemark = $unassociatedRemark;
        
        return $this;
    }
    /**
     * Add item to UnassociatedRemark value
     * @throws InvalidArgumentException
     * @param \StructType\UnassociatedRemark $item
     * @return \StructType\BaseCreateReservationReq
     */
    public function addToUnassociatedRemark(\StructType\UnassociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UnassociatedRemark) {
            throw new InvalidArgumentException(sprintf('The UnassociatedRemark property can only contain items of type \StructType\UnassociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->UnassociatedRemark) && count($this->UnassociatedRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->UnassociatedRemark)), __LINE__);
        }
        $this->UnassociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get Postscript value
     * @return \StructType\Postscript|null
     */
    public function getPostscript(): ?\StructType\Postscript
    {
        return $this->Postscript;
    }
    /**
     * Set Postscript value
     * @param \StructType\Postscript $postscript
     * @return \StructType\BaseCreateReservationReq
     */
    public function setPostscript(?\StructType\Postscript $postscript = null): self
    {
        $this->Postscript = $postscript;
        
        return $this;
    }
    /**
     * Get PassiveInfo value
     * @return \StructType\PassiveInfo|null
     */
    public function getPassiveInfo(): ?\StructType\PassiveInfo
    {
        return $this->PassiveInfo;
    }
    /**
     * Set PassiveInfo value
     * @param \StructType\PassiveInfo $passiveInfo
     * @return \StructType\BaseCreateReservationReq
     */
    public function setPassiveInfo(?\StructType\PassiveInfo $passiveInfo = null): self
    {
        $this->PassiveInfo = $passiveInfo;
        
        return $this;
    }
    /**
     * Get ContinuityCheckOverride value
     * @return \StructType\ContinuityCheckOverride|null
     */
    public function getContinuityCheckOverride(): ?\StructType\ContinuityCheckOverride
    {
        return $this->ContinuityCheckOverride;
    }
    /**
     * Set ContinuityCheckOverride value
     * @param \StructType\ContinuityCheckOverride $continuityCheckOverride
     * @return \StructType\BaseCreateReservationReq
     */
    public function setContinuityCheckOverride(?\StructType\ContinuityCheckOverride $continuityCheckOverride = null): self
    {
        $this->ContinuityCheckOverride = $continuityCheckOverride;
        
        return $this;
    }
    /**
     * Get AgencyContactInfo value
     * @return \StructType\AgencyContactInfo|null
     */
    public function getAgencyContactInfo(): ?\StructType\AgencyContactInfo
    {
        return $this->AgencyContactInfo;
    }
    /**
     * Set AgencyContactInfo value
     * @param \StructType\AgencyContactInfo $agencyContactInfo
     * @return \StructType\BaseCreateReservationReq
     */
    public function setAgencyContactInfo(?\StructType\AgencyContactInfo $agencyContactInfo = null): self
    {
        $this->AgencyContactInfo = $agencyContactInfo;
        
        return $this;
    }
    /**
     * Get CustomerID value
     * @return \StructType\CustomerID|null
     */
    public function getCustomerID(): ?\StructType\CustomerID
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param \StructType\CustomerID $customerID
     * @return \StructType\BaseCreateReservationReq
     */
    public function setCustomerID(?\StructType\CustomerID $customerID = null): self
    {
        $this->CustomerID = $customerID;
        
        return $this;
    }
    /**
     * Get FileFinishingInfo value
     * @return \StructType\FileFinishingInfo|null
     */
    public function getFileFinishingInfo(): ?\StructType\FileFinishingInfo
    {
        return $this->FileFinishingInfo;
    }
    /**
     * Set FileFinishingInfo value
     * @param \StructType\FileFinishingInfo $fileFinishingInfo
     * @return \StructType\BaseCreateReservationReq
     */
    public function setFileFinishingInfo(?\StructType\FileFinishingInfo $fileFinishingInfo = null): self
    {
        $this->FileFinishingInfo = $fileFinishingInfo;
        
        return $this;
    }
    /**
     * Get CommissionRemark value
     * @return \StructType\CommissionRemark|null
     */
    public function getCommissionRemark(): ?\StructType\CommissionRemark
    {
        return $this->CommissionRemark;
    }
    /**
     * Set CommissionRemark value
     * @param \StructType\CommissionRemark $commissionRemark
     * @return \StructType\BaseCreateReservationReq
     */
    public function setCommissionRemark(?\StructType\CommissionRemark $commissionRemark = null): self
    {
        $this->CommissionRemark = $commissionRemark;
        
        return $this;
    }
    /**
     * Get ConsolidatorRemark value
     * @return \StructType\ConsolidatorRemark|null
     */
    public function getConsolidatorRemark(): ?\StructType\ConsolidatorRemark
    {
        return $this->ConsolidatorRemark;
    }
    /**
     * Set ConsolidatorRemark value
     * @param \StructType\ConsolidatorRemark $consolidatorRemark
     * @return \StructType\BaseCreateReservationReq
     */
    public function setConsolidatorRemark(?\StructType\ConsolidatorRemark $consolidatorRemark = null): self
    {
        $this->ConsolidatorRemark = $consolidatorRemark;
        
        return $this;
    }
    /**
     * Get InvoiceRemark value
     * @return \StructType\InvoiceRemark[]
     */
    public function getInvoiceRemark(): ?array
    {
        return $this->InvoiceRemark;
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
        foreach ($values as $baseCreateReservationReqInvoiceRemarkItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqInvoiceRemarkItem instanceof \StructType\InvoiceRemark) {
                $invalidValues[] = is_object($baseCreateReservationReqInvoiceRemarkItem) ? get_class($baseCreateReservationReqInvoiceRemarkItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqInvoiceRemarkItem), var_export($baseCreateReservationReqInvoiceRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InvoiceRemark property can only contain items of type \StructType\InvoiceRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InvoiceRemark value
     * @throws InvalidArgumentException
     * @param \StructType\InvoiceRemark[] $invoiceRemark
     * @return \StructType\BaseCreateReservationReq
     */
    public function setInvoiceRemark(?array $invoiceRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceRemarkArrayErrorMessage = self::validateInvoiceRemarkForArrayConstraintsFromSetInvoiceRemark($invoiceRemark))) {
            throw new InvalidArgumentException($invoiceRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($invoiceRemark) && count($invoiceRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($invoiceRemark)), __LINE__);
        }
        $this->InvoiceRemark = $invoiceRemark;
        
        return $this;
    }
    /**
     * Add item to InvoiceRemark value
     * @throws InvalidArgumentException
     * @param \StructType\InvoiceRemark $item
     * @return \StructType\BaseCreateReservationReq
     */
    public function addToInvoiceRemark(\StructType\InvoiceRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\InvoiceRemark) {
            throw new InvalidArgumentException(sprintf('The InvoiceRemark property can only contain items of type \StructType\InvoiceRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->InvoiceRemark) && count($this->InvoiceRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->InvoiceRemark)), __LINE__);
        }
        $this->InvoiceRemark[] = $item;
        
        return $this;
    }
    /**
     * Get SSR value
     * @return \StructType\SSR[]
     */
    public function getSSR(): ?array
    {
        return $this->SSR;
    }
    /**
     * This method is responsible for validating the values passed to the setSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSSR method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSSRForArrayConstraintsFromSetSSR(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseCreateReservationReqSSRItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqSSRItem instanceof \StructType\SSR) {
                $invalidValues[] = is_object($baseCreateReservationReqSSRItem) ? get_class($baseCreateReservationReqSSRItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqSSRItem), var_export($baseCreateReservationReqSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SSR property can only contain items of type \StructType\SSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SSR value
     * @throws InvalidArgumentException
     * @param \StructType\SSR[] $sSR
     * @return \StructType\BaseCreateReservationReq
     */
    public function setSSR(?array $sSR = null): self
    {
        // validation for constraint: array
        if ('' !== ($sSRArrayErrorMessage = self::validateSSRForArrayConstraintsFromSetSSR($sSR))) {
            throw new InvalidArgumentException($sSRArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($sSR) && count($sSR) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($sSR)), __LINE__);
        }
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \StructType\SSR $item
     * @return \StructType\BaseCreateReservationReq
     */
    public function addToSSR(\StructType\SSR $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SSR) {
            throw new InvalidArgumentException(sprintf('The SSR property can only contain items of type \StructType\SSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SSR) && count($this->SSR) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SSR)), __LINE__);
        }
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get EmailNotification value
     * @return \StructType\EmailNotification|null
     */
    public function getEmailNotification(): ?\StructType\EmailNotification
    {
        return $this->EmailNotification;
    }
    /**
     * Set EmailNotification value
     * @param \StructType\EmailNotification $emailNotification
     * @return \StructType\BaseCreateReservationReq
     */
    public function setEmailNotification(?\StructType\EmailNotification $emailNotification = null): self
    {
        $this->EmailNotification = $emailNotification;
        
        return $this;
    }
    /**
     * Get QueuePlace value
     * @return \StructType\QueuePlace|null
     */
    public function getQueuePlace(): ?\StructType\QueuePlace
    {
        return $this->QueuePlace;
    }
    /**
     * Set QueuePlace value
     * @param \StructType\QueuePlace $queuePlace
     * @return \StructType\BaseCreateReservationReq
     */
    public function setQueuePlace(?\StructType\QueuePlace $queuePlace = null): self
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
     * @return \StructType\BaseCreateReservationReq
     */
    public function setRuleName(?string $ruleName = null): self
    {
        // validation for constraint: string
        if (!is_null($ruleName) && !is_string($ruleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleName, true), gettype($ruleName)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($ruleName) && mb_strlen((string) $ruleName) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $ruleName)), __LINE__);
        }
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
     * @return \StructType\BaseCreateReservationReq
     */
    public function setUniversalRecordLocatorCode(?string $universalRecordLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($universalRecordLocatorCode) && !is_string($universalRecordLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universalRecordLocatorCode, true), gettype($universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
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
     * @return \StructType\BaseCreateReservationReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
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
     * @return \StructType\BaseCreateReservationReq
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
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
     * @return \StructType\BaseCreateReservationReq
     */
    public function setCustomerNumber(?string $customerNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customerNumber) && !is_string($customerNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerNumber, true), gettype($customerNumber)), __LINE__);
        }
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
     * @return \StructType\BaseCreateReservationReq
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
}
