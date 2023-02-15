<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $LocatorCode;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of the UniversalRecord or the SavedTrip.
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Status;
    /**
     * The LinkedUniversalRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LinkedUniversalRecord
     * @var \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[]
     */
    protected ?array $LinkedUniversalRecord = null;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:Group
     * @var \Travelport\UniversalRecord\StructType\Group|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Group $Group = null;
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTraveler
     * @var \Travelport\UniversalRecord\StructType\BookingTraveler[]
     */
    protected ?array $BookingTraveler = null;
    /**
     * The ServiceFeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ServiceFeeInfo
     * @var \Travelport\UniversalRecord\StructType\ServiceFeeInfo[]
     */
    protected ?array $ServiceFeeInfo = null;
    /**
     * The OSI
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:OSI
     * @var \Travelport\UniversalRecord\StructType\OSI[]
     */
    protected ?array $OSI = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus[]
     */
    protected ?array $ActionStatus = null;
    /**
     * The ProviderReservationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProviderReservationInfo
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfo[]
     */
    protected ?array $ProviderReservationInfo = null;
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
    protected ?array $AirReservation = null;
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
    protected ?array $HotelReservation = null;
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
    protected ?array $VehicleReservation = null;
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
    protected ?array $PassiveReservation = null;
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
    protected ?array $RailReservation = null;
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
    protected ?array $CruiseReservation = null;
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
    protected ?array $EMDSummaryInfo = null;
    /**
     * The ProviderARNKSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ProviderARNKSegment
     * @var \Travelport\UniversalRecord\StructType\ProviderARNKSegment[]
     */
    protected ?array $ProviderARNKSegment = null;
    /**
     * The SegmentContinuityInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: SegmentContinuityInfo
     * @var \Travelport\UniversalRecord\StructType\SegmentContinuityInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\SegmentContinuityInfo $SegmentContinuityInfo = null;
    /**
     * The XMLRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:XMLRemark
     * @var \Travelport\UniversalRecord\StructType\XMLRemark[]
     */
    protected ?array $XMLRemark = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The AccountingRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AccountingRemark
     * @var \Travelport\UniversalRecord\StructType\AccountingRemark[]
     */
    protected ?array $AccountingRemark = null;
    /**
     * The UnassociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:UnassociatedRemark
     * @var \Travelport\UniversalRecord\StructType\UnassociatedRemark[]
     */
    protected ?array $UnassociatedRemark = null;
    /**
     * The Postscript
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Postscript
     * @var \Travelport\UniversalRecord\StructType\Postscript[]
     */
    protected ?array $Postscript = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AgencyInfo $AgencyInfo = null;
    /**
     * The AppliedProfile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AppliedProfile
     * @var \Travelport\UniversalRecord\StructType\AppliedProfile|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AppliedProfile $AppliedProfile = null;
    /**
     * The AgencyContactInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyContactInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyContactInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AgencyContactInfo $AgencyContactInfo = null;
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CustomerID
     * @var \Travelport\UniversalRecord\StructType\CustomerID[]
     */
    protected ?array $CustomerID = null;
    /**
     * The CommissionRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CommissionRemark
     * @var \Travelport\UniversalRecord\StructType\CommissionRemark[]
     */
    protected ?array $CommissionRemark = null;
    /**
     * The ConsolidatorRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ConsolidatorRemark
     * @var \Travelport\UniversalRecord\StructType\ConsolidatorRemark[]
     */
    protected ?array $ConsolidatorRemark = null;
    /**
     * The InvoiceRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:InvoiceRemark
     * @var \Travelport\UniversalRecord\StructType\InvoiceRemark[]
     */
    protected ?array $InvoiceRemark = null;
    /**
     * The ReviewBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ReviewBooking
     * @var \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    protected ?array $ReviewBooking = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SSR
     * @var \Travelport\UniversalRecord\StructType\SSR[]
     */
    protected ?array $SSR = null;
    /**
     * The InvoiceData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:InvoiceData
     * @var \Travelport\UniversalRecord\StructType\InvoiceData[]
     */
    protected ?array $InvoiceData = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    protected ?array $FormOfPayment = null;
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
    protected ?string $SavedTripLocatorCode = null;
    /**
     * The LockReason
     * Meta information extracted from the WSDL
     * - documentation: The reason for which the reservation is currently locked for modifications
     * - use: optional
     * @var string|null
     */
    protected ?string $LockReason = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was created.
     * - use: optional
     * @var string|null
     */
    protected ?string $CreateDate = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * - use: optional
     * @var int|null
     */
    protected ?int $Version = null;
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
        // validation for constraint: string
        if (!is_null($locatorCode) && !is_string($locatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locatorCode, true), gettype($locatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $locatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $locatorCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
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
        foreach ($values as $universalRecordLinkedUniversalRecordItem) {
            // validation for constraint: itemType
            if (!$universalRecordLinkedUniversalRecordItem instanceof \Travelport\UniversalRecord\StructType\LinkedUniversalRecord) {
                $invalidValues[] = is_object($universalRecordLinkedUniversalRecordItem) ? get_class($universalRecordLinkedUniversalRecordItem) : sprintf('%s(%s)', gettype($universalRecordLinkedUniversalRecordItem), var_export($universalRecordLinkedUniversalRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LinkedUniversalRecord property can only contain items of type \Travelport\UniversalRecord\StructType\LinkedUniversalRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LinkedUniversalRecord value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LinkedUniversalRecord[] $linkedUniversalRecord
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
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
     * @param \Travelport\UniversalRecord\StructType\LinkedUniversalRecord $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToLinkedUniversalRecord(\Travelport\UniversalRecord\StructType\LinkedUniversalRecord $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LinkedUniversalRecord) {
            throw new InvalidArgumentException(sprintf('The LinkedUniversalRecord property can only contain items of type \Travelport\UniversalRecord\StructType\LinkedUniversalRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LinkedUniversalRecord) && count($this->LinkedUniversalRecord) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LinkedUniversalRecord)), __LINE__);
        }
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
        foreach ($values as $universalRecordBookingTravelerItem) {
            // validation for constraint: itemType
            if (!$universalRecordBookingTravelerItem instanceof \Travelport\UniversalRecord\StructType\BookingTraveler) {
                $invalidValues[] = is_object($universalRecordBookingTravelerItem) ? get_class($universalRecordBookingTravelerItem) : sprintf('%s(%s)', gettype($universalRecordBookingTravelerItem), var_export($universalRecordBookingTravelerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTraveler property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTraveler, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler[] $bookingTraveler
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
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
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToBookingTraveler(\Travelport\UniversalRecord\StructType\BookingTraveler $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingTraveler) {
            throw new InvalidArgumentException(sprintf('The BookingTraveler property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTraveler, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTraveler) && count($this->BookingTraveler) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTraveler)), __LINE__);
        }
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
        foreach ($values as $universalRecordServiceFeeInfoItem) {
            // validation for constraint: itemType
            if (!$universalRecordServiceFeeInfoItem instanceof \Travelport\UniversalRecord\StructType\ServiceFeeInfo) {
                $invalidValues[] = is_object($universalRecordServiceFeeInfoItem) ? get_class($universalRecordServiceFeeInfoItem) : sprintf('%s(%s)', gettype($universalRecordServiceFeeInfoItem), var_export($universalRecordServiceFeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceFeeInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceFeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ServiceFeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceFeeInfo[] $serviceFeeInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setServiceFeeInfo(?array $serviceFeeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceFeeInfoArrayErrorMessage = self::validateServiceFeeInfoForArrayConstraintsFromSetServiceFeeInfo($serviceFeeInfo))) {
            throw new InvalidArgumentException($serviceFeeInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($serviceFeeInfo) && count($serviceFeeInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($serviceFeeInfo)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ServiceFeeInfo) {
            throw new InvalidArgumentException(sprintf('The ServiceFeeInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceFeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ServiceFeeInfo) && count($this->ServiceFeeInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ServiceFeeInfo)), __LINE__);
        }
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
        foreach ($values as $universalRecordOSIItem) {
            // validation for constraint: itemType
            if (!$universalRecordOSIItem instanceof \Travelport\UniversalRecord\StructType\OSI) {
                $invalidValues[] = is_object($universalRecordOSIItem) ? get_class($universalRecordOSIItem) : sprintf('%s(%s)', gettype($universalRecordOSIItem), var_export($universalRecordOSIItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OSI property can only contain items of type \Travelport\UniversalRecord\StructType\OSI, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OSI value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OSI[] $oSI
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
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
     * @param \Travelport\UniversalRecord\StructType\OSI $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToOSI(\Travelport\UniversalRecord\StructType\OSI $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\OSI) {
            throw new InvalidArgumentException(sprintf('The OSI property can only contain items of type \Travelport\UniversalRecord\StructType\OSI, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->OSI) && count($this->OSI) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->OSI)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setActionStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActionStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActionStatusForArrayConstraintsFromSetActionStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordActionStatusItem) {
            // validation for constraint: itemType
            if (!$universalRecordActionStatusItem instanceof \Travelport\UniversalRecord\StructType\ActionStatus) {
                $invalidValues[] = is_object($universalRecordActionStatusItem) ? get_class($universalRecordActionStatusItem) : sprintf('%s(%s)', gettype($universalRecordActionStatusItem), var_export($universalRecordActionStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ActionStatus property can only contain items of type \Travelport\UniversalRecord\StructType\ActionStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ActionStatus value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ActionStatus[] $actionStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setActionStatus(?array $actionStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($actionStatusArrayErrorMessage = self::validateActionStatusForArrayConstraintsFromSetActionStatus($actionStatus))) {
            throw new InvalidArgumentException($actionStatusArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($actionStatus) && count($actionStatus) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($actionStatus)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ActionStatus) {
            throw new InvalidArgumentException(sprintf('The ActionStatus property can only contain items of type \Travelport\UniversalRecord\StructType\ActionStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ActionStatus) && count($this->ActionStatus) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ActionStatus)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setProviderReservationInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderReservationInfoForArrayConstraintsFromSetProviderReservationInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordProviderReservationInfoItem) {
            // validation for constraint: itemType
            if (!$universalRecordProviderReservationInfoItem instanceof \Travelport\UniversalRecord\StructType\ProviderReservationInfo) {
                $invalidValues[] = is_object($universalRecordProviderReservationInfoItem) ? get_class($universalRecordProviderReservationInfoItem) : sprintf('%s(%s)', gettype($universalRecordProviderReservationInfoItem), var_export($universalRecordProviderReservationInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProviderReservationInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ProviderReservationInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProviderReservationInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfo[] $providerReservationInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setProviderReservationInfo(?array $providerReservationInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerReservationInfoArrayErrorMessage = self::validateProviderReservationInfoForArrayConstraintsFromSetProviderReservationInfo($providerReservationInfo))) {
            throw new InvalidArgumentException($providerReservationInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($providerReservationInfo) && count($providerReservationInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($providerReservationInfo)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ProviderReservationInfo) {
            throw new InvalidArgumentException(sprintf('The ProviderReservationInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ProviderReservationInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProviderReservationInfo) && count($this->ProviderReservationInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProviderReservationInfo)), __LINE__);
        }
        $this->ProviderReservationInfo[] = $item;
        
        return $this;
    }
    /**
     * Get AirReservation value
     * @return \Travelport\UniversalRecord\StructType\AirReservation[]
     */
    public function getAirReservation(): ?array
    {
        return isset($this->AirReservation) ? $this->AirReservation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAirReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirReservationForArrayConstraintsFromSetAirReservation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordAirReservationItem) {
            // validation for constraint: itemType
            if (!$universalRecordAirReservationItem instanceof \Travelport\UniversalRecord\StructType\AirReservation) {
                $invalidValues[] = is_object($universalRecordAirReservationItem) ? get_class($universalRecordAirReservationItem) : sprintf('%s(%s)', gettype($universalRecordAirReservationItem), var_export($universalRecordAirReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirReservation property can only contain items of type \Travelport\UniversalRecord\StructType\AirReservation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setAirReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirReservationForChoiceConstraintsFromSetAirReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: AirReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirReservation[] $airReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setAirReservation(?array $airReservation = null): self
    {
        // validation for constraint: array
        if ('' !== ($airReservationArrayErrorMessage = self::validateAirReservationForArrayConstraintsFromSetAirReservation($airReservation))) {
            throw new InvalidArgumentException($airReservationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AirReservation)
        if ('' !== ($airReservationChoiceErrorMessage = self::validateAirReservationForChoiceConstraintsFromSetAirReservation($airReservation))) {
            throw new InvalidArgumentException($airReservationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airReservation) && count($airReservation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airReservation) && count($airReservation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airReservation)), __LINE__);
        }
        if (is_null($airReservation) || (is_array($airReservation) && empty($airReservation))) {
            unset($this->AirReservation);
        } else {
            $this->AirReservation = $airReservation;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToAirReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToAirReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: AirReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AirReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToAirReservation(\Travelport\UniversalRecord\StructType\AirReservation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirReservation) {
            throw new InvalidArgumentException(sprintf('The AirReservation property can only contain items of type \Travelport\UniversalRecord\StructType\AirReservation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AirReservation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToAirReservation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirReservation) && count($this->AirReservation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirReservation) && count($this->AirReservation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirReservation)), __LINE__);
        }
        $this->AirReservation[] = $item;
        
        return $this;
    }
    /**
     * Get HotelReservation value
     * @return \Travelport\UniversalRecord\StructType\HotelReservation[]
     */
    public function getHotelReservation(): ?array
    {
        return isset($this->HotelReservation) ? $this->HotelReservation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelReservationForArrayConstraintsFromSetHotelReservation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordHotelReservationItem) {
            // validation for constraint: itemType
            if (!$universalRecordHotelReservationItem instanceof \Travelport\UniversalRecord\StructType\HotelReservation) {
                $invalidValues[] = is_object($universalRecordHotelReservationItem) ? get_class($universalRecordHotelReservationItem) : sprintf('%s(%s)', gettype($universalRecordHotelReservationItem), var_export($universalRecordHotelReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelReservation property can only contain items of type \Travelport\UniversalRecord\StructType\HotelReservation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setHotelReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelReservationForChoiceConstraintsFromSetHotelReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelReservation[] $hotelReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setHotelReservation(?array $hotelReservation = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelReservationArrayErrorMessage = self::validateHotelReservationForArrayConstraintsFromSetHotelReservation($hotelReservation))) {
            throw new InvalidArgumentException($hotelReservationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(HotelReservation)
        if ('' !== ($hotelReservationChoiceErrorMessage = self::validateHotelReservationForChoiceConstraintsFromSetHotelReservation($hotelReservation))) {
            throw new InvalidArgumentException($hotelReservationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($hotelReservation) && count($hotelReservation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($hotelReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelReservation) && count($hotelReservation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelReservation)), __LINE__);
        }
        if (is_null($hotelReservation) || (is_array($hotelReservation) && empty($hotelReservation))) {
            unset($this->HotelReservation);
        } else {
            $this->HotelReservation = $hotelReservation;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToHotelReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToHotelReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToHotelReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to HotelReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToHotelReservation(\Travelport\UniversalRecord\StructType\HotelReservation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelReservation) {
            throw new InvalidArgumentException(sprintf('The HotelReservation property can only contain items of type \Travelport\UniversalRecord\StructType\HotelReservation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(HotelReservation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToHotelReservation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->HotelReservation) && count($this->HotelReservation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->HotelReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelReservation) && count($this->HotelReservation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelReservation)), __LINE__);
        }
        $this->HotelReservation[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleReservation value
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation[]
     */
    public function getVehicleReservation(): ?array
    {
        return isset($this->VehicleReservation) ? $this->VehicleReservation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setVehicleReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleReservationForArrayConstraintsFromSetVehicleReservation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordVehicleReservationItem) {
            // validation for constraint: itemType
            if (!$universalRecordVehicleReservationItem instanceof \Travelport\UniversalRecord\StructType\VehicleReservation) {
                $invalidValues[] = is_object($universalRecordVehicleReservationItem) ? get_class($universalRecordVehicleReservationItem) : sprintf('%s(%s)', gettype($universalRecordVehicleReservationItem), var_export($universalRecordVehicleReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleReservation property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleReservation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setVehicleReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleReservationForChoiceConstraintsFromSetVehicleReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleReservation[] $vehicleReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setVehicleReservation(?array $vehicleReservation = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleReservationArrayErrorMessage = self::validateVehicleReservationForArrayConstraintsFromSetVehicleReservation($vehicleReservation))) {
            throw new InvalidArgumentException($vehicleReservationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(VehicleReservation)
        if ('' !== ($vehicleReservationChoiceErrorMessage = self::validateVehicleReservationForChoiceConstraintsFromSetVehicleReservation($vehicleReservation))) {
            throw new InvalidArgumentException($vehicleReservationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($vehicleReservation) && count($vehicleReservation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($vehicleReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleReservation) && count($vehicleReservation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleReservation)), __LINE__);
        }
        if (is_null($vehicleReservation) || (is_array($vehicleReservation) && empty($vehicleReservation))) {
            unset($this->VehicleReservation);
        } else {
            $this->VehicleReservation = $vehicleReservation;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToVehicleReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToVehicleReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToVehicleReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to VehicleReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToVehicleReservation(\Travelport\UniversalRecord\StructType\VehicleReservation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleReservation) {
            throw new InvalidArgumentException(sprintf('The VehicleReservation property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleReservation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(VehicleReservation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToVehicleReservation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->VehicleReservation) && count($this->VehicleReservation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->VehicleReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleReservation) && count($this->VehicleReservation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleReservation)), __LINE__);
        }
        $this->VehicleReservation[] = $item;
        
        return $this;
    }
    /**
     * Get PassiveReservation value
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation[]
     */
    public function getPassiveReservation(): ?array
    {
        return isset($this->PassiveReservation) ? $this->PassiveReservation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPassiveReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassiveReservationForArrayConstraintsFromSetPassiveReservation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordPassiveReservationItem) {
            // validation for constraint: itemType
            if (!$universalRecordPassiveReservationItem instanceof \Travelport\UniversalRecord\StructType\PassiveReservation) {
                $invalidValues[] = is_object($universalRecordPassiveReservationItem) ? get_class($universalRecordPassiveReservationItem) : sprintf('%s(%s)', gettype($universalRecordPassiveReservationItem), var_export($universalRecordPassiveReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassiveReservation property can only contain items of type \Travelport\UniversalRecord\StructType\PassiveReservation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setPassiveReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePassiveReservationForChoiceConstraintsFromSetPassiveReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PassiveReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: PassiveReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PassiveReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveReservation[] $passiveReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setPassiveReservation(?array $passiveReservation = null): self
    {
        // validation for constraint: array
        if ('' !== ($passiveReservationArrayErrorMessage = self::validatePassiveReservationForArrayConstraintsFromSetPassiveReservation($passiveReservation))) {
            throw new InvalidArgumentException($passiveReservationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(PassiveReservation)
        if ('' !== ($passiveReservationChoiceErrorMessage = self::validatePassiveReservationForChoiceConstraintsFromSetPassiveReservation($passiveReservation))) {
            throw new InvalidArgumentException($passiveReservationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($passiveReservation) && count($passiveReservation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($passiveReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passiveReservation) && count($passiveReservation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passiveReservation)), __LINE__);
        }
        if (is_null($passiveReservation) || (is_array($passiveReservation) && empty($passiveReservation))) {
            unset($this->PassiveReservation);
        } else {
            $this->PassiveReservation = $passiveReservation;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToPassiveReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToPassiveReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToPassiveReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PassiveReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: PassiveReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to PassiveReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToPassiveReservation(\Travelport\UniversalRecord\StructType\PassiveReservation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PassiveReservation) {
            throw new InvalidArgumentException(sprintf('The PassiveReservation property can only contain items of type \Travelport\UniversalRecord\StructType\PassiveReservation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(PassiveReservation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToPassiveReservation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->PassiveReservation) && count($this->PassiveReservation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->PassiveReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassiveReservation) && count($this->PassiveReservation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassiveReservation)), __LINE__);
        }
        $this->PassiveReservation[] = $item;
        
        return $this;
    }
    /**
     * Get RailReservation value
     * @return \Travelport\UniversalRecord\StructType\RailReservation[]
     */
    public function getRailReservation(): ?array
    {
        return isset($this->RailReservation) ? $this->RailReservation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRailReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailReservationForArrayConstraintsFromSetRailReservation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordRailReservationItem) {
            // validation for constraint: itemType
            if (!$universalRecordRailReservationItem instanceof \Travelport\UniversalRecord\StructType\RailReservation) {
                $invalidValues[] = is_object($universalRecordRailReservationItem) ? get_class($universalRecordRailReservationItem) : sprintf('%s(%s)', gettype($universalRecordRailReservationItem), var_export($universalRecordRailReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailReservation property can only contain items of type \Travelport\UniversalRecord\StructType\RailReservation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setRailReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailReservationForChoiceConstraintsFromSetRailReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: RailReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailReservation[] $railReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setRailReservation(?array $railReservation = null): self
    {
        // validation for constraint: array
        if ('' !== ($railReservationArrayErrorMessage = self::validateRailReservationForArrayConstraintsFromSetRailReservation($railReservation))) {
            throw new InvalidArgumentException($railReservationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailReservation)
        if ('' !== ($railReservationChoiceErrorMessage = self::validateRailReservationForChoiceConstraintsFromSetRailReservation($railReservation))) {
            throw new InvalidArgumentException($railReservationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railReservation) && count($railReservation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railReservation) && count($railReservation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railReservation)), __LINE__);
        }
        if (is_null($railReservation) || (is_array($railReservation) && empty($railReservation))) {
            unset($this->RailReservation);
        } else {
            $this->RailReservation = $railReservation;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToRailReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToRailReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: RailReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToRailReservation(\Travelport\UniversalRecord\StructType\RailReservation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailReservation) {
            throw new InvalidArgumentException(sprintf('The RailReservation property can only contain items of type \Travelport\UniversalRecord\StructType\RailReservation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailReservation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToRailReservation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailReservation) && count($this->RailReservation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailReservation) && count($this->RailReservation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailReservation)), __LINE__);
        }
        $this->RailReservation[] = $item;
        
        return $this;
    }
    /**
     * Get CruiseReservation value
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation[]
     */
    public function getCruiseReservation(): ?array
    {
        return isset($this->CruiseReservation) ? $this->CruiseReservation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCruiseReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCruiseReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCruiseReservationForArrayConstraintsFromSetCruiseReservation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordCruiseReservationItem) {
            // validation for constraint: itemType
            if (!$universalRecordCruiseReservationItem instanceof \Travelport\UniversalRecord\StructType\CruiseReservation) {
                $invalidValues[] = is_object($universalRecordCruiseReservationItem) ? get_class($universalRecordCruiseReservationItem) : sprintf('%s(%s)', gettype($universalRecordCruiseReservationItem), var_export($universalRecordCruiseReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CruiseReservation property can only contain items of type \Travelport\UniversalRecord\StructType\CruiseReservation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCruiseReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCruiseReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCruiseReservationForChoiceConstraintsFromSetCruiseReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CruiseReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: CruiseReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CruiseReservation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CruiseReservation[] $cruiseReservation
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setCruiseReservation(?array $cruiseReservation = null): self
    {
        // validation for constraint: array
        if ('' !== ($cruiseReservationArrayErrorMessage = self::validateCruiseReservationForArrayConstraintsFromSetCruiseReservation($cruiseReservation))) {
            throw new InvalidArgumentException($cruiseReservationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(CruiseReservation)
        if ('' !== ($cruiseReservationChoiceErrorMessage = self::validateCruiseReservationForChoiceConstraintsFromSetCruiseReservation($cruiseReservation))) {
            throw new InvalidArgumentException($cruiseReservationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($cruiseReservation) && count($cruiseReservation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($cruiseReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($cruiseReservation) && count($cruiseReservation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($cruiseReservation)), __LINE__);
        }
        if (is_null($cruiseReservation) || (is_array($cruiseReservation) && empty($cruiseReservation))) {
            unset($this->CruiseReservation);
        } else {
            $this->CruiseReservation = $cruiseReservation;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToCruiseReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToCruiseReservation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToCruiseReservation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CruiseReservation can\'t be set as the property %s is already set. Only one property must be set among these properties: CruiseReservation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to CruiseReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CruiseReservation $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToCruiseReservation(\Travelport\UniversalRecord\StructType\CruiseReservation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CruiseReservation) {
            throw new InvalidArgumentException(sprintf('The CruiseReservation property can only contain items of type \Travelport\UniversalRecord\StructType\CruiseReservation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(CruiseReservation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToCruiseReservation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->CruiseReservation) && count($this->CruiseReservation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->CruiseReservation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CruiseReservation) && count($this->CruiseReservation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CruiseReservation)), __LINE__);
        }
        $this->CruiseReservation[] = $item;
        
        return $this;
    }
    /**
     * Get EMDSummaryInfo value
     * @return \Travelport\UniversalRecord\StructType\EMDSummaryInfo[]
     */
    public function getEMDSummaryInfo(): ?array
    {
        return isset($this->EMDSummaryInfo) ? $this->EMDSummaryInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEMDSummaryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEMDSummaryInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEMDSummaryInfoForArrayConstraintsFromSetEMDSummaryInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordEMDSummaryInfoItem) {
            // validation for constraint: itemType
            if (!$universalRecordEMDSummaryInfoItem instanceof \Travelport\UniversalRecord\StructType\EMDSummaryInfo) {
                $invalidValues[] = is_object($universalRecordEMDSummaryInfoItem) ? get_class($universalRecordEMDSummaryInfoItem) : sprintf('%s(%s)', gettype($universalRecordEMDSummaryInfoItem), var_export($universalRecordEMDSummaryInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EMDSummaryInfo property can only contain items of type \Travelport\UniversalRecord\StructType\EMDSummaryInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setEMDSummaryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEMDSummaryInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEMDSummaryInfoForChoiceConstraintsFromSetEMDSummaryInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property EMDSummaryInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: EMDSummaryInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set EMDSummaryInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\EMDSummaryInfo[] $eMDSummaryInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setEMDSummaryInfo(?array $eMDSummaryInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($eMDSummaryInfoArrayErrorMessage = self::validateEMDSummaryInfoForArrayConstraintsFromSetEMDSummaryInfo($eMDSummaryInfo))) {
            throw new InvalidArgumentException($eMDSummaryInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(EMDSummaryInfo)
        if ('' !== ($eMDSummaryInfoChoiceErrorMessage = self::validateEMDSummaryInfoForChoiceConstraintsFromSetEMDSummaryInfo($eMDSummaryInfo))) {
            throw new InvalidArgumentException($eMDSummaryInfoChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($eMDSummaryInfo) && count($eMDSummaryInfo) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($eMDSummaryInfo)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($eMDSummaryInfo) && count($eMDSummaryInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($eMDSummaryInfo)), __LINE__);
        }
        if (is_null($eMDSummaryInfo) || (is_array($eMDSummaryInfo) && empty($eMDSummaryInfo))) {
            unset($this->EMDSummaryInfo);
        } else {
            $this->EMDSummaryInfo = $eMDSummaryInfo;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToEMDSummaryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToEMDSummaryInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToEMDSummaryInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property EMDSummaryInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: EMDSummaryInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to EMDSummaryInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\EMDSummaryInfo $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToEMDSummaryInfo(\Travelport\UniversalRecord\StructType\EMDSummaryInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\EMDSummaryInfo) {
            throw new InvalidArgumentException(sprintf('The EMDSummaryInfo property can only contain items of type \Travelport\UniversalRecord\StructType\EMDSummaryInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(EMDSummaryInfo)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToEMDSummaryInfo($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->EMDSummaryInfo) && count($this->EMDSummaryInfo) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->EMDSummaryInfo)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->EMDSummaryInfo) && count($this->EMDSummaryInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->EMDSummaryInfo)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setProviderARNKSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderARNKSegment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderARNKSegmentForArrayConstraintsFromSetProviderARNKSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordProviderARNKSegmentItem) {
            // validation for constraint: itemType
            if (!$universalRecordProviderARNKSegmentItem instanceof \Travelport\UniversalRecord\StructType\ProviderARNKSegment) {
                $invalidValues[] = is_object($universalRecordProviderARNKSegmentItem) ? get_class($universalRecordProviderARNKSegmentItem) : sprintf('%s(%s)', gettype($universalRecordProviderARNKSegmentItem), var_export($universalRecordProviderARNKSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProviderARNKSegment property can only contain items of type \Travelport\UniversalRecord\StructType\ProviderARNKSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProviderARNKSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderARNKSegment[] $providerARNKSegment
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setProviderARNKSegment(?array $providerARNKSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerARNKSegmentArrayErrorMessage = self::validateProviderARNKSegmentForArrayConstraintsFromSetProviderARNKSegment($providerARNKSegment))) {
            throw new InvalidArgumentException($providerARNKSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($providerARNKSegment) && count($providerARNKSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($providerARNKSegment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ProviderARNKSegment) {
            throw new InvalidArgumentException(sprintf('The ProviderARNKSegment property can only contain items of type \Travelport\UniversalRecord\StructType\ProviderARNKSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProviderARNKSegment) && count($this->ProviderARNKSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProviderARNKSegment)), __LINE__);
        }
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
        foreach ($values as $universalRecordXMLRemarkItem) {
            // validation for constraint: itemType
            if (!$universalRecordXMLRemarkItem instanceof \Travelport\UniversalRecord\StructType\XMLRemark) {
                $invalidValues[] = is_object($universalRecordXMLRemarkItem) ? get_class($universalRecordXMLRemarkItem) : sprintf('%s(%s)', gettype($universalRecordXMLRemarkItem), var_export($universalRecordXMLRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The XMLRemark property can only contain items of type \Travelport\UniversalRecord\StructType\XMLRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set XMLRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\XMLRemark[] $xMLRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
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
     * @param \Travelport\UniversalRecord\StructType\XMLRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToXMLRemark(\Travelport\UniversalRecord\StructType\XMLRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\XMLRemark) {
            throw new InvalidArgumentException(sprintf('The XMLRemark property can only contain items of type \Travelport\UniversalRecord\StructType\XMLRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->XMLRemark) && count($this->XMLRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->XMLRemark)), __LINE__);
        }
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
        foreach ($values as $universalRecordGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$universalRecordGeneralRemarkItem instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
                $invalidValues[] = is_object($universalRecordGeneralRemarkItem) ? get_class($universalRecordGeneralRemarkItem) : sprintf('%s(%s)', gettype($universalRecordGeneralRemarkItem), var_export($universalRecordGeneralRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GeneralRemark property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
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
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToGeneralRemark(\Travelport\UniversalRecord\StructType\GeneralRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
            throw new InvalidArgumentException(sprintf('The GeneralRemark property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\UniversalRecord\StructType\AccountingRemark[]
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
        foreach ($values as $universalRecordAccountingRemarkItem) {
            // validation for constraint: itemType
            if (!$universalRecordAccountingRemarkItem instanceof \Travelport\UniversalRecord\StructType\AccountingRemark) {
                $invalidValues[] = is_object($universalRecordAccountingRemarkItem) ? get_class($universalRecordAccountingRemarkItem) : sprintf('%s(%s)', gettype($universalRecordAccountingRemarkItem), var_export($universalRecordAccountingRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountingRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AccountingRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountingRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
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
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToAccountingRemark(\Travelport\UniversalRecord\StructType\AccountingRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AccountingRemark) {
            throw new InvalidArgumentException(sprintf('The AccountingRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AccountingRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AccountingRemark) && count($this->AccountingRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AccountingRemark)), __LINE__);
        }
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
        foreach ($values as $universalRecordUnassociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$universalRecordUnassociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\UnassociatedRemark) {
                $invalidValues[] = is_object($universalRecordUnassociatedRemarkItem) ? get_class($universalRecordUnassociatedRemarkItem) : sprintf('%s(%s)', gettype($universalRecordUnassociatedRemarkItem), var_export($universalRecordUnassociatedRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnassociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\UnassociatedRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnassociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\UnassociatedRemark[] $unassociatedRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
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
     * @param \Travelport\UniversalRecord\StructType\UnassociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToUnassociatedRemark(\Travelport\UniversalRecord\StructType\UnassociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\UnassociatedRemark) {
            throw new InvalidArgumentException(sprintf('The UnassociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\UnassociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\UniversalRecord\StructType\Postscript[]
     */
    public function getPostscript(): ?array
    {
        return $this->Postscript;
    }
    /**
     * This method is responsible for validating the values passed to the setPostscript method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostscript method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePostscriptForArrayConstraintsFromSetPostscript(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordPostscriptItem) {
            // validation for constraint: itemType
            if (!$universalRecordPostscriptItem instanceof \Travelport\UniversalRecord\StructType\Postscript) {
                $invalidValues[] = is_object($universalRecordPostscriptItem) ? get_class($universalRecordPostscriptItem) : sprintf('%s(%s)', gettype($universalRecordPostscriptItem), var_export($universalRecordPostscriptItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Postscript property can only contain items of type \Travelport\UniversalRecord\StructType\Postscript, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Postscript value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Postscript[] $postscript
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setPostscript(?array $postscript = null): self
    {
        // validation for constraint: array
        if ('' !== ($postscriptArrayErrorMessage = self::validatePostscriptForArrayConstraintsFromSetPostscript($postscript))) {
            throw new InvalidArgumentException($postscriptArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($postscript) && count($postscript) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($postscript)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Postscript) {
            throw new InvalidArgumentException(sprintf('The Postscript property can only contain items of type \Travelport\UniversalRecord\StructType\Postscript, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Postscript) && count($this->Postscript) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Postscript)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setCustomerID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerIDForArrayConstraintsFromSetCustomerID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordCustomerIDItem) {
            // validation for constraint: itemType
            if (!$universalRecordCustomerIDItem instanceof \Travelport\UniversalRecord\StructType\CustomerID) {
                $invalidValues[] = is_object($universalRecordCustomerIDItem) ? get_class($universalRecordCustomerIDItem) : sprintf('%s(%s)', gettype($universalRecordCustomerIDItem), var_export($universalRecordCustomerIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerID property can only contain items of type \Travelport\UniversalRecord\StructType\CustomerID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustomerID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CustomerID[] $customerID
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setCustomerID(?array $customerID = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerIDArrayErrorMessage = self::validateCustomerIDForArrayConstraintsFromSetCustomerID($customerID))) {
            throw new InvalidArgumentException($customerIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($customerID) && count($customerID) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($customerID)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CustomerID) {
            throw new InvalidArgumentException(sprintf('The CustomerID property can only contain items of type \Travelport\UniversalRecord\StructType\CustomerID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CustomerID) && count($this->CustomerID) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CustomerID)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setCommissionRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommissionRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommissionRemarkForArrayConstraintsFromSetCommissionRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordCommissionRemarkItem) {
            // validation for constraint: itemType
            if (!$universalRecordCommissionRemarkItem instanceof \Travelport\UniversalRecord\StructType\CommissionRemark) {
                $invalidValues[] = is_object($universalRecordCommissionRemarkItem) ? get_class($universalRecordCommissionRemarkItem) : sprintf('%s(%s)', gettype($universalRecordCommissionRemarkItem), var_export($universalRecordCommissionRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CommissionRemark property can only contain items of type \Travelport\UniversalRecord\StructType\CommissionRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CommissionRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CommissionRemark[] $commissionRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setCommissionRemark(?array $commissionRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($commissionRemarkArrayErrorMessage = self::validateCommissionRemarkForArrayConstraintsFromSetCommissionRemark($commissionRemark))) {
            throw new InvalidArgumentException($commissionRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($commissionRemark) && count($commissionRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($commissionRemark)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CommissionRemark) {
            throw new InvalidArgumentException(sprintf('The CommissionRemark property can only contain items of type \Travelport\UniversalRecord\StructType\CommissionRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CommissionRemark) && count($this->CommissionRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CommissionRemark)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setConsolidatorRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConsolidatorRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConsolidatorRemarkForArrayConstraintsFromSetConsolidatorRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordConsolidatorRemarkItem) {
            // validation for constraint: itemType
            if (!$universalRecordConsolidatorRemarkItem instanceof \Travelport\UniversalRecord\StructType\ConsolidatorRemark) {
                $invalidValues[] = is_object($universalRecordConsolidatorRemarkItem) ? get_class($universalRecordConsolidatorRemarkItem) : sprintf('%s(%s)', gettype($universalRecordConsolidatorRemarkItem), var_export($universalRecordConsolidatorRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ConsolidatorRemark property can only contain items of type \Travelport\UniversalRecord\StructType\ConsolidatorRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ConsolidatorRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ConsolidatorRemark[] $consolidatorRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setConsolidatorRemark(?array $consolidatorRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($consolidatorRemarkArrayErrorMessage = self::validateConsolidatorRemarkForArrayConstraintsFromSetConsolidatorRemark($consolidatorRemark))) {
            throw new InvalidArgumentException($consolidatorRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($consolidatorRemark) && count($consolidatorRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($consolidatorRemark)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ConsolidatorRemark) {
            throw new InvalidArgumentException(sprintf('The ConsolidatorRemark property can only contain items of type \Travelport\UniversalRecord\StructType\ConsolidatorRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ConsolidatorRemark) && count($this->ConsolidatorRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ConsolidatorRemark)), __LINE__);
        }
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
        foreach ($values as $universalRecordInvoiceRemarkItem) {
            // validation for constraint: itemType
            if (!$universalRecordInvoiceRemarkItem instanceof \Travelport\UniversalRecord\StructType\InvoiceRemark) {
                $invalidValues[] = is_object($universalRecordInvoiceRemarkItem) ? get_class($universalRecordInvoiceRemarkItem) : sprintf('%s(%s)', gettype($universalRecordInvoiceRemarkItem), var_export($universalRecordInvoiceRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InvoiceRemark property can only contain items of type \Travelport\UniversalRecord\StructType\InvoiceRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InvoiceRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\InvoiceRemark[] $invoiceRemark
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
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
     * @param \Travelport\UniversalRecord\StructType\InvoiceRemark $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToInvoiceRemark(\Travelport\UniversalRecord\StructType\InvoiceRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\InvoiceRemark) {
            throw new InvalidArgumentException(sprintf('The InvoiceRemark property can only contain items of type \Travelport\UniversalRecord\StructType\InvoiceRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->InvoiceRemark) && count($this->InvoiceRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->InvoiceRemark)), __LINE__);
        }
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
        foreach ($values as $universalRecordReviewBookingItem) {
            // validation for constraint: itemType
            if (!$universalRecordReviewBookingItem instanceof \Travelport\UniversalRecord\StructType\ReviewBooking) {
                $invalidValues[] = is_object($universalRecordReviewBookingItem) ? get_class($universalRecordReviewBookingItem) : sprintf('%s(%s)', gettype($universalRecordReviewBookingItem), var_export($universalRecordReviewBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReviewBooking property can only contain items of type \Travelport\UniversalRecord\StructType\ReviewBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReviewBooking value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setReviewBooking(?array $reviewBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($reviewBookingArrayErrorMessage = self::validateReviewBookingForArrayConstraintsFromSetReviewBooking($reviewBooking))) {
            throw new InvalidArgumentException($reviewBookingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($reviewBooking) && count($reviewBooking) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($reviewBooking)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ReviewBooking) {
            throw new InvalidArgumentException(sprintf('The ReviewBooking property can only contain items of type \Travelport\UniversalRecord\StructType\ReviewBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ReviewBooking) && count($this->ReviewBooking) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ReviewBooking)), __LINE__);
        }
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
        foreach ($values as $universalRecordSSRItem) {
            // validation for constraint: itemType
            if (!$universalRecordSSRItem instanceof \Travelport\UniversalRecord\StructType\SSR) {
                $invalidValues[] = is_object($universalRecordSSRItem) ? get_class($universalRecordSSRItem) : sprintf('%s(%s)', gettype($universalRecordSSRItem), var_export($universalRecordSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SSR property can only contain items of type \Travelport\UniversalRecord\StructType\SSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SSR[] $sSR
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
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
     * @param \Travelport\UniversalRecord\StructType\SSR $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function addToSSR(\Travelport\UniversalRecord\StructType\SSR $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SSR) {
            throw new InvalidArgumentException(sprintf('The SSR property can only contain items of type \Travelport\UniversalRecord\StructType\SSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SSR) && count($this->SSR) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SSR)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setInvoiceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvoiceDataForArrayConstraintsFromSetInvoiceData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordInvoiceDataItem) {
            // validation for constraint: itemType
            if (!$universalRecordInvoiceDataItem instanceof \Travelport\UniversalRecord\StructType\InvoiceData) {
                $invalidValues[] = is_object($universalRecordInvoiceDataItem) ? get_class($universalRecordInvoiceDataItem) : sprintf('%s(%s)', gettype($universalRecordInvoiceDataItem), var_export($universalRecordInvoiceDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InvoiceData property can only contain items of type \Travelport\UniversalRecord\StructType\InvoiceData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InvoiceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\InvoiceData[] $invoiceData
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setInvoiceData(?array $invoiceData = null): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceDataArrayErrorMessage = self::validateInvoiceDataForArrayConstraintsFromSetInvoiceData($invoiceData))) {
            throw new InvalidArgumentException($invoiceDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($invoiceData) && count($invoiceData) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($invoiceData)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\InvoiceData) {
            throw new InvalidArgumentException(sprintf('The InvoiceData property can only contain items of type \Travelport\UniversalRecord\StructType\InvoiceData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->InvoiceData) && count($this->InvoiceData) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->InvoiceData)), __LINE__);
        }
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
        foreach ($values as $universalRecordFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$universalRecordFormOfPaymentItem instanceof \Travelport\UniversalRecord\StructType\FormOfPayment) {
                $invalidValues[] = is_object($universalRecordFormOfPaymentItem) ? get_class($universalRecordFormOfPaymentItem) : sprintf('%s(%s)', gettype($universalRecordFormOfPaymentItem), var_export($universalRecordFormOfPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FormOfPayment property can only contain items of type \Travelport\UniversalRecord\StructType\FormOfPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($formOfPaymentArrayErrorMessage = self::validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($formOfPayment) && count($formOfPayment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($formOfPayment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FormOfPayment) {
            throw new InvalidArgumentException(sprintf('The FormOfPayment property can only contain items of type \Travelport\UniversalRecord\StructType\FormOfPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FormOfPayment) && count($this->FormOfPayment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FormOfPayment)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($savedTripLocatorCode) && !is_string($savedTripLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($savedTripLocatorCode, true), gettype($savedTripLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($savedTripLocatorCode) && mb_strlen((string) $savedTripLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $savedTripLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($savedTripLocatorCode) && mb_strlen((string) $savedTripLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $savedTripLocatorCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($lockReason) && !is_string($lockReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockReason, true), gettype($lockReason)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDate, true), gettype($createDate)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
}
