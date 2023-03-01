<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecord StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: 1G,1V,1P,ACH,SDK.Product:Air,Hotel,Vehicle,Cruise | SSR's having no bookingTravelerRef need to add at providerReservation level outside bookingTraveler | Review Booking or Queue Minders is to add the reminders in the
 * Provider Reservation along with the date time and Queue details. On the date time defined in reminders, the message along with the PNR goes to the desired Queue. | List of EMDs to be shown as part of UR. Supported providers are 1V/1G/1P | The parent
 * container for all cruise booking data. Supported Providers :1V | Travel Agency Service Fees (TASF) are charged by the agency through BSP or Airline Reporting Corporation (ARC). FOP will appear directly inside UniversalRecord | Universal Record holds
 * one or more provider reservations
 * @subpackage Structs
 */
class UniversalRecord extends AbstractStructBase
{
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier of a Universal Record. If this is ViewOnly UR then Locator Code is '999999'. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    public string $LocatorCode;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of the UniversalRecord or the SavedTrip.
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Status;
    /**
     * The LinkedUniversalRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LinkedUniversalRecord
     * @var \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[]
     */
    public ?array $LinkedUniversalRecord = null;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:Group
     * @var \Travelport\UniversalRecord\StructType\Group|null
     */
    public ?\Travelport\UniversalRecord\StructType\Group $Group = null;
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTraveler
     * @var \Travelport\UniversalRecord\StructType\BookingTraveler[]
     */
    public ?array $BookingTraveler = null;
    /**
     * The ServiceFeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ServiceFeeInfo
     * @var \Travelport\UniversalRecord\StructType\ServiceFeeInfo[]
     */
    public ?array $ServiceFeeInfo = null;
    /**
     * The OSI
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:OSI
     * @var \Travelport\UniversalRecord\StructType\OSI[]
     */
    public ?array $OSI = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus[]
     */
    public ?array $ActionStatus = null;
    /**
     * The ProviderReservationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProviderReservationInfo
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfo[]
     */
    public ?array $ProviderReservationInfo = null;
    /**
     * The AirReservation
     * Meta information extracted from the WSDL
     * - choice: AirReservation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirReservation
     * @var \Travelport\UniversalRecord\StructType\AirReservation[]
     */
    public ?array $AirReservation = null;
    /**
     * The HotelReservation
     * Meta information extracted from the WSDL
     * - choice: HotelReservation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: hotel_v52_0:HotelReservation
     * @var \Travelport\UniversalRecord\StructType\HotelReservation[]
     */
    public ?array $HotelReservation = null;
    /**
     * The VehicleReservation
     * Meta information extracted from the WSDL
     * - choice: VehicleReservation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:VehicleReservation
     * @var \Travelport\UniversalRecord\StructType\VehicleReservation[]
     */
    public ?array $VehicleReservation = null;
    /**
     * The PassiveReservation
     * Meta information extracted from the WSDL
     * - choice: PassiveReservation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: passive_v52_0:PassiveReservation
     * @var \Travelport\UniversalRecord\StructType\PassiveReservation[]
     */
    public ?array $PassiveReservation = null;
    /**
     * The RailReservation
     * Meta information extracted from the WSDL
     * - choice: RailReservation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: rail_v52_0:RailReservation
     * @var \Travelport\UniversalRecord\StructType\RailReservation[]
     */
    public ?array $RailReservation = null;
    /**
     * The CruiseReservation
     * Meta information extracted from the WSDL
     * - choice: CruiseReservation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: cruise_v52_0:CruiseReservation
     * @var \Travelport\UniversalRecord\StructType\CruiseReservation[]
     */
    public ?array $CruiseReservation = null;
    /**
     * The EMDSummaryInfo
     * Meta information extracted from the WSDL
     * - choice: EMDSummaryInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:EMDSummaryInfo
     * @var \Travelport\UniversalRecord\StructType\EMDSummaryInfo[]
     */
    public ?array $EMDSummaryInfo = null;
    /**
     * The ProviderARNKSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ProviderARNKSegment
     * @var \Travelport\UniversalRecord\StructType\ProviderARNKSegment[]
     */
    public ?array $ProviderARNKSegment = null;
    /**
     * The SegmentContinuityInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: SegmentContinuityInfo
     * @var \Travelport\UniversalRecord\StructType\SegmentContinuityInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\SegmentContinuityInfo $SegmentContinuityInfo = null;
    /**
     * The XMLRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:XMLRemark
     * @var \Travelport\UniversalRecord\StructType\XMLRemark[]
     */
    public ?array $XMLRemark = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    public ?array $GeneralRemark = null;
    /**
     * The AccountingRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AccountingRemark
     * @var \Travelport\UniversalRecord\StructType\AccountingRemark[]
     */
    public ?array $AccountingRemark = null;
    /**
     * The UnassociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:UnassociatedRemark
     * @var \Travelport\UniversalRecord\StructType\UnassociatedRemark[]
     */
    public ?array $UnassociatedRemark = null;
    /**
     * The Postscript
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Postscript
     * @var \Travelport\UniversalRecord\StructType\Postscript[]
     */
    public ?array $Postscript = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AgencyInfo $AgencyInfo = null;
    /**
     * The AppliedProfile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AppliedProfile
     * @var \Travelport\UniversalRecord\StructType\AppliedProfile|null
     */
    public ?\Travelport\UniversalRecord\StructType\AppliedProfile $AppliedProfile = null;
    /**
     * The AgencyContactInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyContactInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyContactInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AgencyContactInfo $AgencyContactInfo = null;
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CustomerID
     * @var \Travelport\UniversalRecord\StructType\CustomerID[]
     */
    public ?array $CustomerID = null;
    /**
     * The CommissionRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CommissionRemark
     * @var \Travelport\UniversalRecord\StructType\CommissionRemark[]
     */
    public ?array $CommissionRemark = null;
    /**
     * The ConsolidatorRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ConsolidatorRemark
     * @var \Travelport\UniversalRecord\StructType\ConsolidatorRemark[]
     */
    public ?array $ConsolidatorRemark = null;
    /**
     * The InvoiceRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:InvoiceRemark
     * @var \Travelport\UniversalRecord\StructType\InvoiceRemark[]
     */
    public ?array $InvoiceRemark = null;
    /**
     * The ReviewBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ReviewBooking
     * @var \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    public ?array $ReviewBooking = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SSR
     * @var \Travelport\UniversalRecord\StructType\SSR[]
     */
    public ?array $SSR = null;
    /**
     * The InvoiceData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:InvoiceData
     * @var \Travelport\UniversalRecord\StructType\InvoiceData[]
     */
    public ?array $InvoiceData = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    public ?array $FormOfPayment = null;
    /**
     * The SavedTripLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $SavedTripLocatorCode = null;
    /**
     * The LockReason
     * Meta information extracted from the WSDL
     * - documentation: The reason for which the reservation is currently locked for modifications
     * - use: optional
     * @var string|null
     */
    public ?string $LockReason = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was created.
     * - use: optional
     * @var string|null
     */
    public ?string $CreateDate = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * - use: optional
     * @var int|null
     */
    public ?int $Version = null;
    /**
     * Constructor method for UniversalRecord
     * @uses UniversalRecord::setLocatorCode()
     * @uses UniversalRecord::setStatus()
     * @uses UniversalRecord::setLinkedUniversalRecord()
     * @uses UniversalRecord::setGroup()
     * @uses UniversalRecord::setBookingTraveler()
     * @uses UniversalRecord::setServiceFeeInfo()
     * @uses UniversalRecord::setOSI()
     * @uses UniversalRecord::setActionStatus()
     * @uses UniversalRecord::setProviderReservationInfo()
     * @uses UniversalRecord::setAirReservation()
     * @uses UniversalRecord::setHotelReservation()
     * @uses UniversalRecord::setVehicleReservation()
     * @uses UniversalRecord::setPassiveReservation()
     * @uses UniversalRecord::setRailReservation()
     * @uses UniversalRecord::setCruiseReservation()
     * @uses UniversalRecord::setEMDSummaryInfo()
     * @uses UniversalRecord::setProviderARNKSegment()
     * @uses UniversalRecord::setSegmentContinuityInfo()
     * @uses UniversalRecord::setXMLRemark()
     * @uses UniversalRecord::setGeneralRemark()
     * @uses UniversalRecord::setAccountingRemark()
     * @uses UniversalRecord::setUnassociatedRemark()
     * @uses UniversalRecord::setPostscript()
     * @uses UniversalRecord::setAgencyInfo()
     * @uses UniversalRecord::setAppliedProfile()
     * @uses UniversalRecord::setAgencyContactInfo()
     * @uses UniversalRecord::setCustomerID()
     * @uses UniversalRecord::setCommissionRemark()
     * @uses UniversalRecord::setConsolidatorRemark()
     * @uses UniversalRecord::setInvoiceRemark()
     * @uses UniversalRecord::setReviewBooking()
     * @uses UniversalRecord::setSSR()
     * @uses UniversalRecord::setInvoiceData()
     * @uses UniversalRecord::setFormOfPayment()
     * @uses UniversalRecord::setSavedTripLocatorCode()
     * @uses UniversalRecord::setLockReason()
     * @uses UniversalRecord::setCreateDate()
     * @uses UniversalRecord::setVersion()
     * @param string $locatorCode
     * @param string $status
     * @param \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @param \Travelport\UniversalRecord\StructType\Group $group
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler[] $bookingTraveler
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeInfo[] $serviceFeeInfo
     * @param \Travelport\UniversalRecord\StructType\OSI[] $oSI
     * @param \Travelport\UniversalRecord\StructType\ActionStatus[] $actionStatus
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfo[] $providerReservationInfo
     * @param \Travelport\UniversalRecord\StructType\AirReservation[] $airReservation
     * @param \Travelport\UniversalRecord\StructType\HotelReservation[] $hotelReservation
     * @param \Travelport\UniversalRecord\StructType\VehicleReservation[] $vehicleReservation
     * @param \Travelport\UniversalRecord\StructType\PassiveReservation[] $passiveReservation
     * @param \Travelport\UniversalRecord\StructType\RailReservation[] $railReservation
     * @param \Travelport\UniversalRecord\StructType\CruiseReservation[] $cruiseReservation
     * @param \Travelport\UniversalRecord\StructType\EMDSummaryInfo[] $eMDSummaryInfo
     * @param \Travelport\UniversalRecord\StructType\ProviderARNKSegment[] $providerARNKSegment
     * @param \Travelport\UniversalRecord\StructType\SegmentContinuityInfo $segmentContinuityInfo
     * @param \Travelport\UniversalRecord\StructType\XMLRemark[] $xMLRemark
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @param \Travelport\UniversalRecord\StructType\UnassociatedRemark[] $unassociatedRemark
     * @param \Travelport\UniversalRecord\StructType\Postscript[] $postscript
     * @param \Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo
     * @param \Travelport\UniversalRecord\StructType\AppliedProfile $appliedProfile
     * @param \Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo
     * @param \Travelport\UniversalRecord\StructType\CustomerID[] $customerID
     * @param \Travelport\UniversalRecord\StructType\CommissionRemark[] $commissionRemark
     * @param \Travelport\UniversalRecord\StructType\ConsolidatorRemark[] $consolidatorRemark
     * @param \Travelport\UniversalRecord\StructType\InvoiceRemark[] $invoiceRemark
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @param \Travelport\UniversalRecord\StructType\SSR[] $sSR
     * @param \Travelport\UniversalRecord\StructType\InvoiceData[] $invoiceData
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @param string $savedTripLocatorCode
     * @param string $lockReason
     * @param string $createDate
     * @param int $version
     */
    public function __construct(string $locatorCode, string $status, ?array $linkedUniversalRecord = null, ?\Travelport\UniversalRecord\StructType\Group $group = null, ?array $bookingTraveler = null, ?array $serviceFeeInfo = null, ?array $oSI = null, ?array $actionStatus = null, ?array $providerReservationInfo = null, ?array $airReservation = null, ?array $hotelReservation = null, ?array $vehicleReservation = null, ?array $passiveReservation = null, ?array $railReservation = null, ?array $cruiseReservation = null, ?array $eMDSummaryInfo = null, ?array $providerARNKSegment = null, ?\Travelport\UniversalRecord\StructType\SegmentContinuityInfo $segmentContinuityInfo = null, ?array $xMLRemark = null, ?array $generalRemark = null, ?array $accountingRemark = null, ?array $unassociatedRemark = null, ?array $postscript = null, ?\Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo = null, ?\Travelport\UniversalRecord\StructType\AppliedProfile $appliedProfile = null, ?\Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo = null, ?array $customerID = null, ?array $commissionRemark = null, ?array $consolidatorRemark = null, ?array $invoiceRemark = null, ?array $reviewBooking = null, ?array $sSR = null, ?array $invoiceData = null, ?array $formOfPayment = null, ?string $savedTripLocatorCode = null, ?string $lockReason = null, ?string $createDate = null, ?int $version = null)
    {
        $this
            ->setLocatorCode($locatorCode)
            ->setStatus($status)
            ->setLinkedUniversalRecord($linkedUniversalRecord)
            ->setGroup($group)
            ->setBookingTraveler($bookingTraveler)
            ->setServiceFeeInfo($serviceFeeInfo)
            ->setOSI($oSI)
            ->setActionStatus($actionStatus)
            ->setProviderReservationInfo($providerReservationInfo)
            ->setAirReservation($airReservation)
            ->setHotelReservation($hotelReservation)
            ->setVehicleReservation($vehicleReservation)
            ->setPassiveReservation($passiveReservation)
            ->setRailReservation($railReservation)
            ->setCruiseReservation($cruiseReservation)
            ->setEMDSummaryInfo($eMDSummaryInfo)
            ->setProviderARNKSegment($providerARNKSegment)
            ->setSegmentContinuityInfo($segmentContinuityInfo)
            ->setXMLRemark($xMLRemark)
            ->setGeneralRemark($generalRemark)
            ->setAccountingRemark($accountingRemark)
            ->setUnassociatedRemark($unassociatedRemark)
            ->setPostscript($postscript)
            ->setAgencyInfo($agencyInfo)
            ->setAppliedProfile($appliedProfile)
            ->setAgencyContactInfo($agencyContactInfo)
            ->setCustomerID($customerID)
            ->setCommissionRemark($commissionRemark)
            ->setConsolidatorRemark($consolidatorRemark)
            ->setInvoiceRemark($invoiceRemark)
            ->setReviewBooking($reviewBooking)
            ->setSSR($sSR)
            ->setInvoiceData($invoiceData)
            ->setFormOfPayment($formOfPayment)
            ->setSavedTripLocatorCode($savedTripLocatorCode)
            ->setLockReason($lockReason)
            ->setCreateDate($createDate)
            ->setVersion($version);
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setLocatorCode(string $locatorCode): self
    {
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setStatus(string $status): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get LinkedUniversalRecord value
     * @return \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[]
     */
    public function getLinkedUniversalRecord(): ?array
    {
        return $this->LinkedUniversalRecord;
    }
    /**
     * Set LinkedUniversalRecord value
     * @param \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setLinkedUniversalRecord(?array $linkedUniversalRecord = null): self
    {
        $this->LinkedUniversalRecord = $linkedUniversalRecord;
        
        return $this;
    }
    /**
     * Add item to LinkedUniversalRecord value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LinkedUniversalRecord $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToLinkedUniversalRecord(\Travelport\UniversalRecord\StructType\LinkedUniversalRecord $item): self
    {
        $this->LinkedUniversalRecord[] = $item;
        
        return $this;
    }
    /**
     * Get Group value
     * @return \Travelport\UniversalRecord\StructType\Group|null
     */
    public function getGroup(): ?\Travelport\UniversalRecord\StructType\Group
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param \Travelport\UniversalRecord\StructType\Group $group
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setGroup(?\Travelport\UniversalRecord\StructType\Group $group = null): self
    {
        $this->Group = $group;
        
        return $this;
    }
    /**
     * Get BookingTraveler value
     * @return \Travelport\UniversalRecord\StructType\BookingTraveler[]
     */
    public function getBookingTraveler(): ?array
    {
        return $this->BookingTraveler;
    }
    /**
     * Set BookingTraveler value
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler[] $bookingTraveler
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setBookingTraveler(?array $bookingTraveler = null): self
    {
        $this->BookingTraveler = $bookingTraveler;
        
        return $this;
    }
    /**
     * Add item to BookingTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToBookingTraveler(\Travelport\UniversalRecord\StructType\BookingTraveler $item): self
    {
        $this->BookingTraveler[] = $item;
        
        return $this;
    }
    /**
     * Get ServiceFeeInfo value
     * @return \Travelport\UniversalRecord\StructType\ServiceFeeInfo[]
     */
    public function getServiceFeeInfo(): ?array
    {
        return $this->ServiceFeeInfo;
    }
    /**
     * Set ServiceFeeInfo value
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeInfo[] $serviceFeeInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setServiceFeeInfo(?array $serviceFeeInfo = null): self
    {
        $this->ServiceFeeInfo = $serviceFeeInfo;
        
        return $this;
    }
    /**
     * Add item to ServiceFeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToServiceFeeInfo(\Travelport\UniversalRecord\StructType\ServiceFeeInfo $item): self
    {
        $this->ServiceFeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get OSI value
     * @return \Travelport\UniversalRecord\StructType\OSI[]
     */
    public function getOSI(): ?array
    {
        return $this->OSI;
    }
    /**
     * Set OSI value
     * @param \Travelport\UniversalRecord\StructType\OSI[] $oSI
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setOSI(?array $oSI = null): self
    {
        $this->OSI = $oSI;
        
        return $this;
    }
    /**
     * Add item to OSI value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OSI $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToOSI(\Travelport\UniversalRecord\StructType\OSI $item): self
    {
        $this->OSI[] = $item;
        
        return $this;
    }
    /**
     * Get ActionStatus value
     * @return \Travelport\UniversalRecord\StructType\ActionStatus[]
     */
    public function getActionStatus(): ?array
    {
        return $this->ActionStatus;
    }
    /**
     * Set ActionStatus value
     * @param \Travelport\UniversalRecord\StructType\ActionStatus[] $actionStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setActionStatus(?array $actionStatus = null): self
    {
        $this->ActionStatus = $actionStatus;
        
        return $this;
    }
    /**
     * Add item to ActionStatus value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToActionStatus(\Travelport\UniversalRecord\StructType\ActionStatus $item): self
    {
        $this->ActionStatus[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfo value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo[]
     */
    public function getProviderReservationInfo(): ?array
    {
        return $this->ProviderReservationInfo;
    }
    /**
     * Set ProviderReservationInfo value
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfo[] $providerReservationInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setProviderReservationInfo(?array $providerReservationInfo = null): self
    {
        $this->ProviderReservationInfo = $providerReservationInfo;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfo $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToProviderReservationInfo(\Travelport\UniversalRecord\StructType\ProviderReservationInfo $item): self
    {
        $this->ProviderReservationInfo[] = $item;
        
        return $this;
    }
    /**
     * Get AirReservation value
     * @return \Travelport\UniversalRecord\StructType\AirReservation[]|null
     */
    public function getAirReservation(): ?array
    {
        return $this->AirReservation ?? null;
    }
    /**
     * Set AirReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AirReservation[] $airReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setAirReservation(?array $airReservation = null): self
    {
        if (is_null($airReservation) || (is_array($airReservation) && empty($airReservation))) {
            unset($this->AirReservation);
        } else {
            $this->AirReservation = $airReservation;
        }
        
        return $this;
    }
    /**
     * Add item to AirReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToAirReservation(\Travelport\UniversalRecord\StructType\AirReservation $item): self
    {
        $this->AirReservation[] = $item;
        
        return $this;
    }
    /**
     * Get HotelReservation value
     * @return \Travelport\UniversalRecord\StructType\HotelReservation[]|null
     */
    public function getHotelReservation(): ?array
    {
        return $this->HotelReservation ?? null;
    }
    /**
     * Set HotelReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\HotelReservation[] $hotelReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setHotelReservation(?array $hotelReservation = null): self
    {
        if (is_null($hotelReservation) || (is_array($hotelReservation) && empty($hotelReservation))) {
            unset($this->HotelReservation);
        } else {
            $this->HotelReservation = $hotelReservation;
        }
        
        return $this;
    }
    /**
     * Add item to HotelReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToHotelReservation(\Travelport\UniversalRecord\StructType\HotelReservation $item): self
    {
        $this->HotelReservation[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleReservation value
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation[]|null
     */
    public function getVehicleReservation(): ?array
    {
        return $this->VehicleReservation ?? null;
    }
    /**
     * Set VehicleReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\VehicleReservation[] $vehicleReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setVehicleReservation(?array $vehicleReservation = null): self
    {
        if (is_null($vehicleReservation) || (is_array($vehicleReservation) && empty($vehicleReservation))) {
            unset($this->VehicleReservation);
        } else {
            $this->VehicleReservation = $vehicleReservation;
        }
        
        return $this;
    }
    /**
     * Add item to VehicleReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToVehicleReservation(\Travelport\UniversalRecord\StructType\VehicleReservation $item): self
    {
        $this->VehicleReservation[] = $item;
        
        return $this;
    }
    /**
     * Get PassiveReservation value
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation[]|null
     */
    public function getPassiveReservation(): ?array
    {
        return $this->PassiveReservation ?? null;
    }
    /**
     * Set PassiveReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\PassiveReservation[] $passiveReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setPassiveReservation(?array $passiveReservation = null): self
    {
        if (is_null($passiveReservation) || (is_array($passiveReservation) && empty($passiveReservation))) {
            unset($this->PassiveReservation);
        } else {
            $this->PassiveReservation = $passiveReservation;
        }
        
        return $this;
    }
    /**
     * Add item to PassiveReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToPassiveReservation(\Travelport\UniversalRecord\StructType\PassiveReservation $item): self
    {
        $this->PassiveReservation[] = $item;
        
        return $this;
    }
    /**
     * Get RailReservation value
     * @return \Travelport\UniversalRecord\StructType\RailReservation[]|null
     */
    public function getRailReservation(): ?array
    {
        return $this->RailReservation ?? null;
    }
    /**
     * Set RailReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\RailReservation[] $railReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setRailReservation(?array $railReservation = null): self
    {
        if (is_null($railReservation) || (is_array($railReservation) && empty($railReservation))) {
            unset($this->RailReservation);
        } else {
            $this->RailReservation = $railReservation;
        }
        
        return $this;
    }
    /**
     * Add item to RailReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToRailReservation(\Travelport\UniversalRecord\StructType\RailReservation $item): self
    {
        $this->RailReservation[] = $item;
        
        return $this;
    }
    /**
     * Get CruiseReservation value
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation[]|null
     */
    public function getCruiseReservation(): ?array
    {
        return $this->CruiseReservation ?? null;
    }
    /**
     * Set CruiseReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\CruiseReservation[] $cruiseReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setCruiseReservation(?array $cruiseReservation = null): self
    {
        if (is_null($cruiseReservation) || (is_array($cruiseReservation) && empty($cruiseReservation))) {
            unset($this->CruiseReservation);
        } else {
            $this->CruiseReservation = $cruiseReservation;
        }
        
        return $this;
    }
    /**
     * Add item to CruiseReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CruiseReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToCruiseReservation(\Travelport\UniversalRecord\StructType\CruiseReservation $item): self
    {
        $this->CruiseReservation[] = $item;
        
        return $this;
    }
    /**
     * Get EMDSummaryInfo value
     * @return \Travelport\UniversalRecord\StructType\EMDSummaryInfo[]|null
     */
    public function getEMDSummaryInfo(): ?array
    {
        return $this->EMDSummaryInfo ?? null;
    }
    /**
     * Set EMDSummaryInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\EMDSummaryInfo[] $eMDSummaryInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setEMDSummaryInfo(?array $eMDSummaryInfo = null): self
    {
        if (is_null($eMDSummaryInfo) || (is_array($eMDSummaryInfo) && empty($eMDSummaryInfo))) {
            unset($this->EMDSummaryInfo);
        } else {
            $this->EMDSummaryInfo = $eMDSummaryInfo;
        }
        
        return $this;
    }
    /**
     * Add item to EMDSummaryInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\EMDSummaryInfo $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToEMDSummaryInfo(\Travelport\UniversalRecord\StructType\EMDSummaryInfo $item): self
    {
        $this->EMDSummaryInfo[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderARNKSegment value
     * @return \Travelport\UniversalRecord\StructType\ProviderARNKSegment[]
     */
    public function getProviderARNKSegment(): ?array
    {
        return $this->ProviderARNKSegment;
    }
    /**
     * Set ProviderARNKSegment value
     * @param \Travelport\UniversalRecord\StructType\ProviderARNKSegment[] $providerARNKSegment
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setProviderARNKSegment(?array $providerARNKSegment = null): self
    {
        $this->ProviderARNKSegment = $providerARNKSegment;
        
        return $this;
    }
    /**
     * Add item to ProviderARNKSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderARNKSegment $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToProviderARNKSegment(\Travelport\UniversalRecord\StructType\ProviderARNKSegment $item): self
    {
        $this->ProviderARNKSegment[] = $item;
        
        return $this;
    }
    /**
     * Get SegmentContinuityInfo value
     * @return \Travelport\UniversalRecord\StructType\SegmentContinuityInfo|null
     */
    public function getSegmentContinuityInfo(): ?\Travelport\UniversalRecord\StructType\SegmentContinuityInfo
    {
        return $this->SegmentContinuityInfo;
    }
    /**
     * Set SegmentContinuityInfo value
     * @param \Travelport\UniversalRecord\StructType\SegmentContinuityInfo $segmentContinuityInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setSegmentContinuityInfo(?\Travelport\UniversalRecord\StructType\SegmentContinuityInfo $segmentContinuityInfo = null): self
    {
        $this->SegmentContinuityInfo = $segmentContinuityInfo;
        
        return $this;
    }
    /**
     * Get XMLRemark value
     * @return \Travelport\UniversalRecord\StructType\XMLRemark[]
     */
    public function getXMLRemark(): ?array
    {
        return $this->XMLRemark;
    }
    /**
     * Set XMLRemark value
     * @param \Travelport\UniversalRecord\StructType\XMLRemark[] $xMLRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setXMLRemark(?array $xMLRemark = null): self
    {
        $this->XMLRemark = $xMLRemark;
        
        return $this;
    }
    /**
     * Add item to XMLRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\XMLRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToXMLRemark(\Travelport\UniversalRecord\StructType\XMLRemark $item): self
    {
        $this->XMLRemark[] = $item;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark;
    }
    /**
     * Set GeneralRemark value
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        $this->GeneralRemark = $generalRemark;
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToGeneralRemark(\Travelport\UniversalRecord\StructType\GeneralRemark $item): self
    {
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get AccountingRemark value
     * @return \Travelport\UniversalRecord\StructType\AccountingRemark[]
     */
    public function getAccountingRemark(): ?array
    {
        return $this->AccountingRemark;
    }
    /**
     * Set AccountingRemark value
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        $this->AccountingRemark = $accountingRemark;
        
        return $this;
    }
    /**
     * Add item to AccountingRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToAccountingRemark(\Travelport\UniversalRecord\StructType\AccountingRemark $item): self
    {
        $this->AccountingRemark[] = $item;
        
        return $this;
    }
    /**
     * Get UnassociatedRemark value
     * @return \Travelport\UniversalRecord\StructType\UnassociatedRemark[]
     */
    public function getUnassociatedRemark(): ?array
    {
        return $this->UnassociatedRemark;
    }
    /**
     * Set UnassociatedRemark value
     * @param \Travelport\UniversalRecord\StructType\UnassociatedRemark[] $unassociatedRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setUnassociatedRemark(?array $unassociatedRemark = null): self
    {
        $this->UnassociatedRemark = $unassociatedRemark;
        
        return $this;
    }
    /**
     * Add item to UnassociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UnassociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToUnassociatedRemark(\Travelport\UniversalRecord\StructType\UnassociatedRemark $item): self
    {
        $this->UnassociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get Postscript value
     * @return \Travelport\UniversalRecord\StructType\Postscript[]
     */
    public function getPostscript(): ?array
    {
        return $this->Postscript;
    }
    /**
     * Set Postscript value
     * @param \Travelport\UniversalRecord\StructType\Postscript[] $postscript
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setPostscript(?array $postscript = null): self
    {
        $this->Postscript = $postscript;
        
        return $this;
    }
    /**
     * Add item to Postscript value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Postscript $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToPostscript(\Travelport\UniversalRecord\StructType\Postscript $item): self
    {
        $this->Postscript[] = $item;
        
        return $this;
    }
    /**
     * Get AgencyInfo value
     * @return \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    public function getAgencyInfo(): ?\Travelport\UniversalRecord\StructType\AgencyInfo
    {
        return $this->AgencyInfo;
    }
    /**
     * Set AgencyInfo value
     * @param \Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setAgencyInfo(?\Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo = null): self
    {
        $this->AgencyInfo = $agencyInfo;
        
        return $this;
    }
    /**
     * Get AppliedProfile value
     * @return \Travelport\UniversalRecord\StructType\AppliedProfile|null
     */
    public function getAppliedProfile(): ?\Travelport\UniversalRecord\StructType\AppliedProfile
    {
        return $this->AppliedProfile;
    }
    /**
     * Set AppliedProfile value
     * @param \Travelport\UniversalRecord\StructType\AppliedProfile $appliedProfile
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setAppliedProfile(?\Travelport\UniversalRecord\StructType\AppliedProfile $appliedProfile = null): self
    {
        $this->AppliedProfile = $appliedProfile;
        
        return $this;
    }
    /**
     * Get AgencyContactInfo value
     * @return \Travelport\UniversalRecord\StructType\AgencyContactInfo|null
     */
    public function getAgencyContactInfo(): ?\Travelport\UniversalRecord\StructType\AgencyContactInfo
    {
        return $this->AgencyContactInfo;
    }
    /**
     * Set AgencyContactInfo value
     * @param \Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setAgencyContactInfo(?\Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo = null): self
    {
        $this->AgencyContactInfo = $agencyContactInfo;
        
        return $this;
    }
    /**
     * Get CustomerID value
     * @return \Travelport\UniversalRecord\StructType\CustomerID[]
     */
    public function getCustomerID(): ?array
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param \Travelport\UniversalRecord\StructType\CustomerID[] $customerID
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setCustomerID(?array $customerID = null): self
    {
        $this->CustomerID = $customerID;
        
        return $this;
    }
    /**
     * Add item to CustomerID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CustomerID $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToCustomerID(\Travelport\UniversalRecord\StructType\CustomerID $item): self
    {
        $this->CustomerID[] = $item;
        
        return $this;
    }
    /**
     * Get CommissionRemark value
     * @return \Travelport\UniversalRecord\StructType\CommissionRemark[]
     */
    public function getCommissionRemark(): ?array
    {
        return $this->CommissionRemark;
    }
    /**
     * Set CommissionRemark value
     * @param \Travelport\UniversalRecord\StructType\CommissionRemark[] $commissionRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setCommissionRemark(?array $commissionRemark = null): self
    {
        $this->CommissionRemark = $commissionRemark;
        
        return $this;
    }
    /**
     * Add item to CommissionRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CommissionRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToCommissionRemark(\Travelport\UniversalRecord\StructType\CommissionRemark $item): self
    {
        $this->CommissionRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ConsolidatorRemark value
     * @return \Travelport\UniversalRecord\StructType\ConsolidatorRemark[]
     */
    public function getConsolidatorRemark(): ?array
    {
        return $this->ConsolidatorRemark;
    }
    /**
     * Set ConsolidatorRemark value
     * @param \Travelport\UniversalRecord\StructType\ConsolidatorRemark[] $consolidatorRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setConsolidatorRemark(?array $consolidatorRemark = null): self
    {
        $this->ConsolidatorRemark = $consolidatorRemark;
        
        return $this;
    }
    /**
     * Add item to ConsolidatorRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ConsolidatorRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToConsolidatorRemark(\Travelport\UniversalRecord\StructType\ConsolidatorRemark $item): self
    {
        $this->ConsolidatorRemark[] = $item;
        
        return $this;
    }
    /**
     * Get InvoiceRemark value
     * @return \Travelport\UniversalRecord\StructType\InvoiceRemark[]
     */
    public function getInvoiceRemark(): ?array
    {
        return $this->InvoiceRemark;
    }
    /**
     * Set InvoiceRemark value
     * @param \Travelport\UniversalRecord\StructType\InvoiceRemark[] $invoiceRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setInvoiceRemark(?array $invoiceRemark = null): self
    {
        $this->InvoiceRemark = $invoiceRemark;
        
        return $this;
    }
    /**
     * Add item to InvoiceRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\InvoiceRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToInvoiceRemark(\Travelport\UniversalRecord\StructType\InvoiceRemark $item): self
    {
        $this->InvoiceRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ReviewBooking value
     * @return \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    public function getReviewBooking(): ?array
    {
        return $this->ReviewBooking;
    }
    /**
     * Set ReviewBooking value
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setReviewBooking(?array $reviewBooking = null): self
    {
        $this->ReviewBooking = $reviewBooking;
        
        return $this;
    }
    /**
     * Add item to ReviewBooking value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToReviewBooking(\Travelport\UniversalRecord\StructType\ReviewBooking $item): self
    {
        $this->ReviewBooking[] = $item;
        
        return $this;
    }
    /**
     * Get SSR value
     * @return \Travelport\UniversalRecord\StructType\SSR[]
     */
    public function getSSR(): ?array
    {
        return $this->SSR;
    }
    /**
     * Set SSR value
     * @param \Travelport\UniversalRecord\StructType\SSR[] $sSR
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setSSR(?array $sSR = null): self
    {
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SSR $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToSSR(\Travelport\UniversalRecord\StructType\SSR $item): self
    {
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get InvoiceData value
     * @return \Travelport\UniversalRecord\StructType\InvoiceData[]
     */
    public function getInvoiceData(): ?array
    {
        return $this->InvoiceData;
    }
    /**
     * Set InvoiceData value
     * @param \Travelport\UniversalRecord\StructType\InvoiceData[] $invoiceData
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setInvoiceData(?array $invoiceData = null): self
    {
        $this->InvoiceData = $invoiceData;
        
        return $this;
    }
    /**
     * Add item to InvoiceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\InvoiceData $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToInvoiceData(\Travelport\UniversalRecord\StructType\InvoiceData $item): self
    {
        $this->InvoiceData[] = $item;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToFormOfPayment(\Travelport\UniversalRecord\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get SavedTripLocatorCode value
     * @return string|null
     */
    public function getSavedTripLocatorCode(): ?string
    {
        return $this->SavedTripLocatorCode;
    }
    /**
     * Set SavedTripLocatorCode value
     * @param string $savedTripLocatorCode
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setSavedTripLocatorCode(?string $savedTripLocatorCode = null): self
    {
        $this->SavedTripLocatorCode = $savedTripLocatorCode;
        
        return $this;
    }
    /**
     * Get LockReason value
     * @return string|null
     */
    public function getLockReason(): ?string
    {
        return $this->LockReason;
    }
    /**
     * Set LockReason value
     * @param string $lockReason
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setLockReason(?string $lockReason = null): self
    {
        $this->LockReason = $lockReason;
        
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string|null
     */
    public function getCreateDate(): ?string
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setCreateDate(?string $createDate = null): self
    {
        $this->CreateDate = $createDate;
        
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setVersion(?int $version = null): self
    {
        $this->Version = $version;
        
        return $this;
    }
}
