<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\LinkedUniversalRecord[]
     */
    protected ?array $LinkedUniversalRecord = null;
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingTraveler
     * @var \Travelport\Util\StructType\BookingTraveler[]
     */
    protected ?array $BookingTraveler = null;
    /**
     * The OSI
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: OSI
     * @var \Travelport\Util\StructType\OSI[]
     */
    protected ?array $OSI = null;
    /**
     * The AccountingRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AccountingRemark
     * @var \Travelport\Util\StructType\AccountingRemark[]
     */
    protected ?array $AccountingRemark = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GeneralRemark
     * @var \Travelport\Util\StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The XMLRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: XMLRemark
     * @var \Travelport\Util\StructType\XMLRemark[]
     */
    protected ?array $XMLRemark = null;
    /**
     * The UnassociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: UnassociatedRemark
     * @var \Travelport\Util\StructType\UnassociatedRemark[]
     */
    protected ?array $UnassociatedRemark = null;
    /**
     * The Postscript
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Postscript
     * @var \Travelport\Util\StructType\Postscript|null
     */
    protected ?\Travelport\Util\StructType\Postscript $Postscript = null;
    /**
     * The PassiveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PassiveInfo
     * @var \Travelport\Util\StructType\PassiveInfo|null
     */
    protected ?\Travelport\Util\StructType\PassiveInfo $PassiveInfo = null;
    /**
     * The ContinuityCheckOverride
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ContinuityCheckOverride
     * @var \Travelport\Util\StructType\ContinuityCheckOverride|null
     */
    protected ?\Travelport\Util\StructType\ContinuityCheckOverride $ContinuityCheckOverride = null;
    /**
     * The AgencyContactInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AgencyContactInfo
     * @var \Travelport\Util\StructType\AgencyContactInfo|null
     */
    protected ?\Travelport\Util\StructType\AgencyContactInfo $AgencyContactInfo = null;
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CustomerID
     * @var \Travelport\Util\StructType\CustomerID|null
     */
    protected ?\Travelport\Util\StructType\CustomerID $CustomerID = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FileFinishingInfo
     * @var \Travelport\Util\StructType\FileFinishingInfo|null
     */
    protected ?\Travelport\Util\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The CommissionRemark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CommissionRemark
     * @var \Travelport\Util\StructType\CommissionRemark|null
     */
    protected ?\Travelport\Util\StructType\CommissionRemark $CommissionRemark = null;
    /**
     * The ConsolidatorRemark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ConsolidatorRemark
     * @var \Travelport\Util\StructType\ConsolidatorRemark|null
     */
    protected ?\Travelport\Util\StructType\ConsolidatorRemark $ConsolidatorRemark = null;
    /**
     * The InvoiceRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: InvoiceRemark
     * @var \Travelport\Util\StructType\InvoiceRemark[]
     */
    protected ?array $InvoiceRemark = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SSR
     * @var \Travelport\Util\StructType\SSR[]
     */
    protected ?array $SSR = null;
    /**
     * The EmailNotification
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: EmailNotification
     * @var \Travelport\Util\StructType\EmailNotification|null
     */
    protected ?\Travelport\Util\StructType\EmailNotification $EmailNotification = null;
    /**
     * The QueuePlace
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: QueuePlace
     * @var \Travelport\Util\StructType\QueuePlace|null
     */
    protected ?\Travelport\Util\StructType\QueuePlace $QueuePlace = null;
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
     * @param \Travelport\Util\StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @param \Travelport\Util\StructType\BookingTraveler[] $bookingTraveler
     * @param \Travelport\Util\StructType\OSI[] $oSI
     * @param \Travelport\Util\StructType\AccountingRemark[] $accountingRemark
     * @param \Travelport\Util\StructType\GeneralRemark[] $generalRemark
     * @param \Travelport\Util\StructType\XMLRemark[] $xMLRemark
     * @param \Travelport\Util\StructType\UnassociatedRemark[] $unassociatedRemark
     * @param \Travelport\Util\StructType\Postscript $postscript
     * @param \Travelport\Util\StructType\PassiveInfo $passiveInfo
     * @param \Travelport\Util\StructType\ContinuityCheckOverride $continuityCheckOverride
     * @param \Travelport\Util\StructType\AgencyContactInfo $agencyContactInfo
     * @param \Travelport\Util\StructType\CustomerID $customerID
     * @param \Travelport\Util\StructType\FileFinishingInfo $fileFinishingInfo
     * @param \Travelport\Util\StructType\CommissionRemark $commissionRemark
     * @param \Travelport\Util\StructType\ConsolidatorRemark $consolidatorRemark
     * @param \Travelport\Util\StructType\InvoiceRemark[] $invoiceRemark
     * @param \Travelport\Util\StructType\SSR[] $sSR
     * @param \Travelport\Util\StructType\EmailNotification $emailNotification
     * @param \Travelport\Util\StructType\QueuePlace $queuePlace
     * @param string $ruleName
     * @param string $universalRecordLocatorCode
     * @param string $providerLocatorCode
     * @param string $providerCode
     * @param string $customerNumber
     * @param int $version
     */
    public function __construct(?array $linkedUniversalRecord = null, ?array $bookingTraveler = null, ?array $oSI = null, ?array $accountingRemark = null, ?array $generalRemark = null, ?array $xMLRemark = null, ?array $unassociatedRemark = null, ?\Travelport\Util\StructType\Postscript $postscript = null, ?\Travelport\Util\StructType\PassiveInfo $passiveInfo = null, ?\Travelport\Util\StructType\ContinuityCheckOverride $continuityCheckOverride = null, ?\Travelport\Util\StructType\AgencyContactInfo $agencyContactInfo = null, ?\Travelport\Util\StructType\CustomerID $customerID = null, ?\Travelport\Util\StructType\FileFinishingInfo $fileFinishingInfo = null, ?\Travelport\Util\StructType\CommissionRemark $commissionRemark = null, ?\Travelport\Util\StructType\ConsolidatorRemark $consolidatorRemark = null, ?array $invoiceRemark = null, ?array $sSR = null, ?\Travelport\Util\StructType\EmailNotification $emailNotification = null, ?\Travelport\Util\StructType\QueuePlace $queuePlace = null, ?string $ruleName = null, ?string $universalRecordLocatorCode = null, ?string $providerLocatorCode = null, ?string $providerCode = null, ?string $customerNumber = null, ?int $version = null)
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
     * @return \Travelport\Util\StructType\LinkedUniversalRecord[]
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
            if (!$baseCreateReservationReqLinkedUniversalRecordItem instanceof \Travelport\Util\StructType\LinkedUniversalRecord) {
                $invalidValues[] = is_object($baseCreateReservationReqLinkedUniversalRecordItem) ? get_class($baseCreateReservationReqLinkedUniversalRecordItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqLinkedUniversalRecordItem), var_export($baseCreateReservationReqLinkedUniversalRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LinkedUniversalRecord property can only contain items of type \Travelport\Util\StructType\LinkedUniversalRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LinkedUniversalRecord value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @param \Travelport\Util\StructType\LinkedUniversalRecord $item
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function addToLinkedUniversalRecord(\Travelport\Util\StructType\LinkedUniversalRecord $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\LinkedUniversalRecord) {
            throw new InvalidArgumentException(sprintf('The LinkedUniversalRecord property can only contain items of type \Travelport\Util\StructType\LinkedUniversalRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\BookingTraveler[]
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
            if (!$baseCreateReservationReqBookingTravelerItem instanceof \Travelport\Util\StructType\BookingTraveler) {
                $invalidValues[] = is_object($baseCreateReservationReqBookingTravelerItem) ? get_class($baseCreateReservationReqBookingTravelerItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqBookingTravelerItem), var_export($baseCreateReservationReqBookingTravelerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTraveler property can only contain items of type \Travelport\Util\StructType\BookingTraveler, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingTraveler[] $bookingTraveler
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @param \Travelport\Util\StructType\BookingTraveler $item
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function addToBookingTraveler(\Travelport\Util\StructType\BookingTraveler $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\BookingTraveler) {
            throw new InvalidArgumentException(sprintf('The BookingTraveler property can only contain items of type \Travelport\Util\StructType\BookingTraveler, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\OSI[]
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
            if (!$baseCreateReservationReqOSIItem instanceof \Travelport\Util\StructType\OSI) {
                $invalidValues[] = is_object($baseCreateReservationReqOSIItem) ? get_class($baseCreateReservationReqOSIItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqOSIItem), var_export($baseCreateReservationReqOSIItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OSI property can only contain items of type \Travelport\Util\StructType\OSI, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OSI value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\OSI[] $oSI
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @param \Travelport\Util\StructType\OSI $item
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function addToOSI(\Travelport\Util\StructType\OSI $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\OSI) {
            throw new InvalidArgumentException(sprintf('The OSI property can only contain items of type \Travelport\Util\StructType\OSI, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
        foreach ($values as $baseCreateReservationReqAccountingRemarkItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqAccountingRemarkItem instanceof \Travelport\Util\StructType\AccountingRemark) {
                $invalidValues[] = is_object($baseCreateReservationReqAccountingRemarkItem) ? get_class($baseCreateReservationReqAccountingRemarkItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqAccountingRemarkItem), var_export($baseCreateReservationReqAccountingRemarkItem, true));
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
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
        foreach ($values as $baseCreateReservationReqGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$baseCreateReservationReqGeneralRemarkItem instanceof \Travelport\Util\StructType\GeneralRemark) {
                $invalidValues[] = is_object($baseCreateReservationReqGeneralRemarkItem) ? get_class($baseCreateReservationReqGeneralRemarkItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqGeneralRemarkItem), var_export($baseCreateReservationReqGeneralRemarkItem, true));
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
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * Get XMLRemark value
     * @return \Travelport\Util\StructType\XMLRemark[]
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
            if (!$baseCreateReservationReqXMLRemarkItem instanceof \Travelport\Util\StructType\XMLRemark) {
                $invalidValues[] = is_object($baseCreateReservationReqXMLRemarkItem) ? get_class($baseCreateReservationReqXMLRemarkItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqXMLRemarkItem), var_export($baseCreateReservationReqXMLRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The XMLRemark property can only contain items of type \Travelport\Util\StructType\XMLRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set XMLRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\XMLRemark[] $xMLRemark
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @param \Travelport\Util\StructType\XMLRemark $item
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function addToXMLRemark(\Travelport\Util\StructType\XMLRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\XMLRemark) {
            throw new InvalidArgumentException(sprintf('The XMLRemark property can only contain items of type \Travelport\Util\StructType\XMLRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\UnassociatedRemark[]
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
            if (!$baseCreateReservationReqUnassociatedRemarkItem instanceof \Travelport\Util\StructType\UnassociatedRemark) {
                $invalidValues[] = is_object($baseCreateReservationReqUnassociatedRemarkItem) ? get_class($baseCreateReservationReqUnassociatedRemarkItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqUnassociatedRemarkItem), var_export($baseCreateReservationReqUnassociatedRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnassociatedRemark property can only contain items of type \Travelport\Util\StructType\UnassociatedRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnassociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\UnassociatedRemark[] $unassociatedRemark
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @param \Travelport\Util\StructType\UnassociatedRemark $item
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function addToUnassociatedRemark(\Travelport\Util\StructType\UnassociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\UnassociatedRemark) {
            throw new InvalidArgumentException(sprintf('The UnassociatedRemark property can only contain items of type \Travelport\Util\StructType\UnassociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\Postscript|null
     */
    public function getPostscript(): ?\Travelport\Util\StructType\Postscript
    {
        return $this->Postscript;
    }
    /**
     * Set Postscript value
     * @param \Travelport\Util\StructType\Postscript $postscript
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function setPostscript(?\Travelport\Util\StructType\Postscript $postscript = null): self
    {
        $this->Postscript = $postscript;
        
        return $this;
    }
    /**
     * Get PassiveInfo value
     * @return \Travelport\Util\StructType\PassiveInfo|null
     */
    public function getPassiveInfo(): ?\Travelport\Util\StructType\PassiveInfo
    {
        return $this->PassiveInfo;
    }
    /**
     * Set PassiveInfo value
     * @param \Travelport\Util\StructType\PassiveInfo $passiveInfo
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function setPassiveInfo(?\Travelport\Util\StructType\PassiveInfo $passiveInfo = null): self
    {
        $this->PassiveInfo = $passiveInfo;
        
        return $this;
    }
    /**
     * Get ContinuityCheckOverride value
     * @return \Travelport\Util\StructType\ContinuityCheckOverride|null
     */
    public function getContinuityCheckOverride(): ?\Travelport\Util\StructType\ContinuityCheckOverride
    {
        return $this->ContinuityCheckOverride;
    }
    /**
     * Set ContinuityCheckOverride value
     * @param \Travelport\Util\StructType\ContinuityCheckOverride $continuityCheckOverride
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function setContinuityCheckOverride(?\Travelport\Util\StructType\ContinuityCheckOverride $continuityCheckOverride = null): self
    {
        $this->ContinuityCheckOverride = $continuityCheckOverride;
        
        return $this;
    }
    /**
     * Get AgencyContactInfo value
     * @return \Travelport\Util\StructType\AgencyContactInfo|null
     */
    public function getAgencyContactInfo(): ?\Travelport\Util\StructType\AgencyContactInfo
    {
        return $this->AgencyContactInfo;
    }
    /**
     * Set AgencyContactInfo value
     * @param \Travelport\Util\StructType\AgencyContactInfo $agencyContactInfo
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function setAgencyContactInfo(?\Travelport\Util\StructType\AgencyContactInfo $agencyContactInfo = null): self
    {
        $this->AgencyContactInfo = $agencyContactInfo;
        
        return $this;
    }
    /**
     * Get CustomerID value
     * @return \Travelport\Util\StructType\CustomerID|null
     */
    public function getCustomerID(): ?\Travelport\Util\StructType\CustomerID
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param \Travelport\Util\StructType\CustomerID $customerID
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function setCustomerID(?\Travelport\Util\StructType\CustomerID $customerID = null): self
    {
        $this->CustomerID = $customerID;
        
        return $this;
    }
    /**
     * Get FileFinishingInfo value
     * @return \Travelport\Util\StructType\FileFinishingInfo|null
     */
    public function getFileFinishingInfo(): ?\Travelport\Util\StructType\FileFinishingInfo
    {
        return $this->FileFinishingInfo;
    }
    /**
     * Set FileFinishingInfo value
     * @param \Travelport\Util\StructType\FileFinishingInfo $fileFinishingInfo
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function setFileFinishingInfo(?\Travelport\Util\StructType\FileFinishingInfo $fileFinishingInfo = null): self
    {
        $this->FileFinishingInfo = $fileFinishingInfo;
        
        return $this;
    }
    /**
     * Get CommissionRemark value
     * @return \Travelport\Util\StructType\CommissionRemark|null
     */
    public function getCommissionRemark(): ?\Travelport\Util\StructType\CommissionRemark
    {
        return $this->CommissionRemark;
    }
    /**
     * Set CommissionRemark value
     * @param \Travelport\Util\StructType\CommissionRemark $commissionRemark
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function setCommissionRemark(?\Travelport\Util\StructType\CommissionRemark $commissionRemark = null): self
    {
        $this->CommissionRemark = $commissionRemark;
        
        return $this;
    }
    /**
     * Get ConsolidatorRemark value
     * @return \Travelport\Util\StructType\ConsolidatorRemark|null
     */
    public function getConsolidatorRemark(): ?\Travelport\Util\StructType\ConsolidatorRemark
    {
        return $this->ConsolidatorRemark;
    }
    /**
     * Set ConsolidatorRemark value
     * @param \Travelport\Util\StructType\ConsolidatorRemark $consolidatorRemark
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function setConsolidatorRemark(?\Travelport\Util\StructType\ConsolidatorRemark $consolidatorRemark = null): self
    {
        $this->ConsolidatorRemark = $consolidatorRemark;
        
        return $this;
    }
    /**
     * Get InvoiceRemark value
     * @return \Travelport\Util\StructType\InvoiceRemark[]
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
            if (!$baseCreateReservationReqInvoiceRemarkItem instanceof \Travelport\Util\StructType\InvoiceRemark) {
                $invalidValues[] = is_object($baseCreateReservationReqInvoiceRemarkItem) ? get_class($baseCreateReservationReqInvoiceRemarkItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqInvoiceRemarkItem), var_export($baseCreateReservationReqInvoiceRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InvoiceRemark property can only contain items of type \Travelport\Util\StructType\InvoiceRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InvoiceRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\InvoiceRemark[] $invoiceRemark
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @param \Travelport\Util\StructType\InvoiceRemark $item
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function addToInvoiceRemark(\Travelport\Util\StructType\InvoiceRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\InvoiceRemark) {
            throw new InvalidArgumentException(sprintf('The InvoiceRemark property can only contain items of type \Travelport\Util\StructType\InvoiceRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\SSR[]
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
            if (!$baseCreateReservationReqSSRItem instanceof \Travelport\Util\StructType\SSR) {
                $invalidValues[] = is_object($baseCreateReservationReqSSRItem) ? get_class($baseCreateReservationReqSSRItem) : sprintf('%s(%s)', gettype($baseCreateReservationReqSSRItem), var_export($baseCreateReservationReqSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SSR property can only contain items of type \Travelport\Util\StructType\SSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SSR[] $sSR
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @param \Travelport\Util\StructType\SSR $item
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function addToSSR(\Travelport\Util\StructType\SSR $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SSR) {
            throw new InvalidArgumentException(sprintf('The SSR property can only contain items of type \Travelport\Util\StructType\SSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\EmailNotification|null
     */
    public function getEmailNotification(): ?\Travelport\Util\StructType\EmailNotification
    {
        return $this->EmailNotification;
    }
    /**
     * Set EmailNotification value
     * @param \Travelport\Util\StructType\EmailNotification $emailNotification
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function setEmailNotification(?\Travelport\Util\StructType\EmailNotification $emailNotification = null): self
    {
        $this->EmailNotification = $emailNotification;
        
        return $this;
    }
    /**
     * Get QueuePlace value
     * @return \Travelport\Util\StructType\QueuePlace|null
     */
    public function getQueuePlace(): ?\Travelport\Util\StructType\QueuePlace
    {
        return $this->QueuePlace;
    }
    /**
     * Set QueuePlace value
     * @param \Travelport\Util\StructType\QueuePlace $queuePlace
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
     */
    public function setQueuePlace(?\Travelport\Util\StructType\QueuePlace $queuePlace = null): self
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
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
     * @return \Travelport\Util\StructType\BaseCreateReservationReq
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
