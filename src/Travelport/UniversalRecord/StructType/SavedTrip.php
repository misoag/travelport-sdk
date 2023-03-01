<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTrip StructType
 * Meta information extracted from the WSDL
 * - documentation: SavedTrip holds a draft Itinerary/booking which can be used at later point of time to do a booking.
 * @subpackage Structs
 */
class SavedTrip extends AbstractStructBase
{
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: common:BookingTraveler
     * @var \Travelport\UniversalRecord\StructType\BookingTraveler[]
     */
    public array $BookingTraveler;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Name;
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
     * The AgencyContactInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyContactInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyContactInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AgencyContactInfo $AgencyContactInfo = null;
    /**
     * The SearchPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SearchPassenger
     * @var \Travelport\UniversalRecord\StructType\SearchPassenger[]
     */
    public ?array $SearchPassenger = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale[]
     */
    public ?array $PointOfSale = null;
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
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    public ?array $GeneralRemark = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AgencyInfo $AgencyInfo = null;
    /**
     * The ReservationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ReservationName
     * @var \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    public ?\Travelport\UniversalRecord\StructType\ReservationName $ReservationName = null;
    /**
     * The AirPricingModifiers
     * Meta information extracted from the WSDL
     * - choice: AirPricingModifiers
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirPricingModifiers
     * @var \Travelport\UniversalRecord\StructType\AirPricingModifiers[]
     */
    public ?array $AirPricingModifiers = null;
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - choice: AirPricingSolution
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirPricingSolution
     * @var \Travelport\UniversalRecord\StructType\AirPricingSolution[]
     */
    public ?array $AirPricingSolution = null;
    /**
     * The AirTripNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    public ?array $AirTripNote = null;
    /**
     * The VehicleSearchModifiers
     * Meta information extracted from the WSDL
     * - choice: VehicleSearchModifiers
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:VehicleSearchModifiers
     * @var \Travelport\UniversalRecord\StructType\VehicleSearchModifiers[]
     */
    public ?array $VehicleSearchModifiers = null;
    /**
     * The VehicleDateLocation
     * Meta information extracted from the WSDL
     * - choice: VehicleDateLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:VehicleDateLocation
     * @var \Travelport\UniversalRecord\StructType\VehicleDateLocation[]
     */
    public ?array $VehicleDateLocation = null;
    /**
     * The SpecialEquipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SpecialEquipment
     * @var \Travelport\UniversalRecord\StructType\SpecialEquipment[]
     */
    public ?array $SpecialEquipment = null;
    /**
     * The VehicleSpecialRequest
     * Meta information extracted from the WSDL
     * - choice: VehicleSpecialRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:VehicleSpecialRequest
     * @var \Travelport\UniversalRecord\StructType\VehicleSpecialRequest[]
     */
    public ?array $VehicleSpecialRequest = null;
    /**
     * The PaymentInformation
     * Meta information extracted from the WSDL
     * - choice: PaymentInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:PaymentInformation
     * @var \Travelport\UniversalRecord\StructType\PaymentInformation[]
     */
    public ?array $PaymentInformation = null;
    /**
     * The DeliveryAddress
     * Meta information extracted from the WSDL
     * - choice: DeliveryAddress
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:DeliveryAddress
     * @var \Travelport\UniversalRecord\StructType\DeliveryAddress[]
     */
    public ?array $DeliveryAddress = null;
    /**
     * The CollectionAddress
     * Meta information extracted from the WSDL
     * - choice: CollectionAddress
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:CollectionAddress
     * @var \Travelport\UniversalRecord\StructType\CollectionAddress[]
     */
    public ?array $CollectionAddress = null;
    /**
     * The FlightArrivalInformation
     * Meta information extracted from the WSDL
     * - choice: FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:FlightArrivalInformation
     * @var \Travelport\UniversalRecord\StructType\FlightArrivalInformation[]
     */
    public ?array $FlightArrivalInformation = null;
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - choice: Vehicle
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:Vehicle
     * @var \Travelport\UniversalRecord\StructType\Vehicle[]
     */
    public ?array $Vehicle = null;
    /**
     * The VehicleTripNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    public ?array $VehicleTripNote = null;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    public ?array $VendorLocation = null;
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - choice: HotelProperty
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: hotel_v52_0:HotelProperty
     * @var \Travelport\UniversalRecord\StructType\HotelProperty[]
     */
    public ?array $HotelProperty = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - choice: HotelStay
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: hotel_v52_0:HotelStay
     * @var \Travelport\UniversalRecord\StructType\HotelStay[]
     */
    public ?array $HotelStay = null;
    /**
     * The HotelRulesModifiers
     * Meta information extracted from the WSDL
     * - choice: HotelRulesModifiers
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: hotel_v52_0:HotelRulesModifiers
     * @var \Travelport\UniversalRecord\StructType\HotelRulesModifiers[]
     */
    public ?array $HotelRulesModifiers = null;
    /**
     * The HotelDetailsModifiers
     * Meta information extracted from the WSDL
     * - choice: HotelDetailsModifiers
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: hotel_v52_0:HotelDetailsModifiers
     * @var \Travelport\UniversalRecord\StructType\HotelDetailsModifiers[]
     */
    public ?array $HotelDetailsModifiers = null;
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - choice: HotelRateDetail
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: hotel_v52_0:HotelRateDetail
     * @var \Travelport\UniversalRecord\StructType\HotelRateDetail[]
     */
    public ?array $HotelRateDetail = null;
    /**
     * The PromotionCode
     * Meta information extracted from the WSDL
     * - choice: PromotionCode
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: hotel_v52_0:PromotionCode
     * @var \Travelport\UniversalRecord\StructType\PromotionCode[]
     */
    public ?array $PromotionCode = null;
    /**
     * The HotelTripNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    public ?array $HotelTripNote = null;
    /**
     * The RailPricingSolution
     * Meta information extracted from the WSDL
     * - choice: RailPricingSolution
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: rail_v52_0:RailPricingSolution
     * @var \Travelport\UniversalRecord\StructType\RailPricingSolution[]
     */
    public ?array $RailPricingSolution = null;
    /**
     * The RailFareNote
     * Meta information extracted from the WSDL
     * - choice: RailFareNote
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: rail_v52_0:RailFareNote
     * @var \Travelport\UniversalRecord\StructType\RailFareNote[]
     */
    public ?array $RailFareNote = null;
    /**
     * The RailTripNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    public ?array $RailTripNote = null;
    /**
     * The SavedTripNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    public ?array $SavedTripNote = null;
    /**
     * The SavedTripActivity
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SavedTripActivity
     * @var \Travelport\UniversalRecord\StructType\SavedTripActivity[]
     */
    public ?array $SavedTripActivity = null;
    /**
     * The ProfileAssociation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProfileAssociation
     * @var \Travelport\UniversalRecord\StructType\ProfileAssociation[]
     */
    public ?array $ProfileAssociation = null;
    /**
     * The PolicyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: PolicyInformation
     * @var \Travelport\UniversalRecord\StructType\PolicyInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\PolicyInformation $PolicyInformation = null;
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Alpha numeric String to identify a SavedTrip uniquely. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $LocatorCode = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Alpha numeric String to identify a the UniversalRecord created using this SavedTrip. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $UniversalRecordLocatorCode = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this SavedTrip was created.
     * - use: optional
     * @var string|null
     */
    public ?string $CreateDate = null;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this SavedTrip was Modified.
     * - use: optional
     * @var string|null
     */
    public ?string $ModifiedDate = null;
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
     * The CreatedByAgent
     * Meta information extracted from the WSDL
     * - documentation: The Agent Code who created the SavedTrip.
     * - use: optional
     * @var string|null
     */
    public ?string $CreatedByAgent = null;
    /**
     * The ModifiedByAgent
     * Meta information extracted from the WSDL
     * - documentation: The Agent Code that modified the SavedTrip.
     * - use: optional
     * @var string|null
     */
    public ?string $ModifiedByAgent = null;
    /**
     * Constructor method for SavedTrip
     * @uses SavedTrip::setBookingTraveler()
     * @uses SavedTrip::setName()
     * @uses SavedTrip::setStatus()
     * @uses SavedTrip::setAgencyContactInfo()
     * @uses SavedTrip::setSearchPassenger()
     * @uses SavedTrip::setPointOfSale()
     * @uses SavedTrip::setAccountingRemark()
     * @uses SavedTrip::setGeneralRemark()
     * @uses SavedTrip::setAgencyInfo()
     * @uses SavedTrip::setReservationName()
     * @uses SavedTrip::setAirPricingModifiers()
     * @uses SavedTrip::setAirPricingSolution()
     * @uses SavedTrip::setAirTripNote()
     * @uses SavedTrip::setVehicleSearchModifiers()
     * @uses SavedTrip::setVehicleDateLocation()
     * @uses SavedTrip::setSpecialEquipment()
     * @uses SavedTrip::setVehicleSpecialRequest()
     * @uses SavedTrip::setPaymentInformation()
     * @uses SavedTrip::setDeliveryAddress()
     * @uses SavedTrip::setCollectionAddress()
     * @uses SavedTrip::setFlightArrivalInformation()
     * @uses SavedTrip::setVehicle()
     * @uses SavedTrip::setVehicleTripNote()
     * @uses SavedTrip::setVendorLocation()
     * @uses SavedTrip::setHotelProperty()
     * @uses SavedTrip::setHotelStay()
     * @uses SavedTrip::setHotelRulesModifiers()
     * @uses SavedTrip::setHotelDetailsModifiers()
     * @uses SavedTrip::setHotelRateDetail()
     * @uses SavedTrip::setPromotionCode()
     * @uses SavedTrip::setHotelTripNote()
     * @uses SavedTrip::setRailPricingSolution()
     * @uses SavedTrip::setRailFareNote()
     * @uses SavedTrip::setRailTripNote()
     * @uses SavedTrip::setSavedTripNote()
     * @uses SavedTrip::setSavedTripActivity()
     * @uses SavedTrip::setProfileAssociation()
     * @uses SavedTrip::setPolicyInformation()
     * @uses SavedTrip::setLocatorCode()
     * @uses SavedTrip::setUniversalRecordLocatorCode()
     * @uses SavedTrip::setCreateDate()
     * @uses SavedTrip::setModifiedDate()
     * @uses SavedTrip::setVersion()
     * @uses SavedTrip::setCreatedByAgent()
     * @uses SavedTrip::setModifiedByAgent()
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler[] $bookingTraveler
     * @param string $name
     * @param string $status
     * @param \Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo
     * @param \Travelport\UniversalRecord\StructType\SearchPassenger[] $searchPassenger
     * @param \Travelport\UniversalRecord\StructType\PointOfSale[] $pointOfSale
     * @param \Travelport\UniversalRecord\StructType\AccountingRemark[] $accountingRemark
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @param \Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo
     * @param \Travelport\UniversalRecord\StructType\ReservationName $reservationName
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifiers[] $airPricingModifiers
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution[] $airPricingSolution
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $airTripNote
     * @param \Travelport\UniversalRecord\StructType\VehicleSearchModifiers[] $vehicleSearchModifiers
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocation[] $vehicleDateLocation
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment[] $specialEquipment
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest[] $vehicleSpecialRequest
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation[] $paymentInformation
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress[] $deliveryAddress
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress[] $collectionAddress
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation[] $flightArrivalInformation
     * @param \Travelport\UniversalRecord\StructType\Vehicle[] $vehicle
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $vehicleTripNote
     * @param \Travelport\UniversalRecord\StructType\VendorLocation[] $vendorLocation
     * @param \Travelport\UniversalRecord\StructType\HotelProperty[] $hotelProperty
     * @param \Travelport\UniversalRecord\StructType\HotelStay[] $hotelStay
     * @param \Travelport\UniversalRecord\StructType\HotelRulesModifiers[] $hotelRulesModifiers
     * @param \Travelport\UniversalRecord\StructType\HotelDetailsModifiers[] $hotelDetailsModifiers
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail[] $hotelRateDetail
     * @param \Travelport\UniversalRecord\StructType\PromotionCode[] $promotionCode
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $hotelTripNote
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolution[] $railPricingSolution
     * @param \Travelport\UniversalRecord\StructType\RailFareNote[] $railFareNote
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $railTripNote
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $savedTripNote
     * @param \Travelport\UniversalRecord\StructType\SavedTripActivity[] $savedTripActivity
     * @param \Travelport\UniversalRecord\StructType\ProfileAssociation[] $profileAssociation
     * @param \Travelport\UniversalRecord\StructType\PolicyInformation $policyInformation
     * @param string $locatorCode
     * @param string $universalRecordLocatorCode
     * @param string $createDate
     * @param string $modifiedDate
     * @param int $version
     * @param string $createdByAgent
     * @param string $modifiedByAgent
     */
    public function __construct(array $bookingTraveler, string $name, string $status, ?\Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo = null, ?array $searchPassenger = null, ?array $pointOfSale = null, ?array $accountingRemark = null, ?array $generalRemark = null, ?\Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo = null, ?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null, ?array $airPricingModifiers = null, ?array $airPricingSolution = null, ?array $airTripNote = null, ?array $vehicleSearchModifiers = null, ?array $vehicleDateLocation = null, ?array $specialEquipment = null, ?array $vehicleSpecialRequest = null, ?array $paymentInformation = null, ?array $deliveryAddress = null, ?array $collectionAddress = null, ?array $flightArrivalInformation = null, ?array $vehicle = null, ?array $vehicleTripNote = null, ?array $vendorLocation = null, ?array $hotelProperty = null, ?array $hotelStay = null, ?array $hotelRulesModifiers = null, ?array $hotelDetailsModifiers = null, ?array $hotelRateDetail = null, ?array $promotionCode = null, ?array $hotelTripNote = null, ?array $railPricingSolution = null, ?array $railFareNote = null, ?array $railTripNote = null, ?array $savedTripNote = null, ?array $savedTripActivity = null, ?array $profileAssociation = null, ?\Travelport\UniversalRecord\StructType\PolicyInformation $policyInformation = null, ?string $locatorCode = null, ?string $universalRecordLocatorCode = null, ?string $createDate = null, ?string $modifiedDate = null, ?int $version = null, ?string $createdByAgent = null, ?string $modifiedByAgent = null)
    {
        $this
            ->setBookingTraveler($bookingTraveler)
            ->setName($name)
            ->setStatus($status)
            ->setAgencyContactInfo($agencyContactInfo)
            ->setSearchPassenger($searchPassenger)
            ->setPointOfSale($pointOfSale)
            ->setAccountingRemark($accountingRemark)
            ->setGeneralRemark($generalRemark)
            ->setAgencyInfo($agencyInfo)
            ->setReservationName($reservationName)
            ->setAirPricingModifiers($airPricingModifiers)
            ->setAirPricingSolution($airPricingSolution)
            ->setAirTripNote($airTripNote)
            ->setVehicleSearchModifiers($vehicleSearchModifiers)
            ->setVehicleDateLocation($vehicleDateLocation)
            ->setSpecialEquipment($specialEquipment)
            ->setVehicleSpecialRequest($vehicleSpecialRequest)
            ->setPaymentInformation($paymentInformation)
            ->setDeliveryAddress($deliveryAddress)
            ->setCollectionAddress($collectionAddress)
            ->setFlightArrivalInformation($flightArrivalInformation)
            ->setVehicle($vehicle)
            ->setVehicleTripNote($vehicleTripNote)
            ->setVendorLocation($vendorLocation)
            ->setHotelProperty($hotelProperty)
            ->setHotelStay($hotelStay)
            ->setHotelRulesModifiers($hotelRulesModifiers)
            ->setHotelDetailsModifiers($hotelDetailsModifiers)
            ->setHotelRateDetail($hotelRateDetail)
            ->setPromotionCode($promotionCode)
            ->setHotelTripNote($hotelTripNote)
            ->setRailPricingSolution($railPricingSolution)
            ->setRailFareNote($railFareNote)
            ->setRailTripNote($railTripNote)
            ->setSavedTripNote($savedTripNote)
            ->setSavedTripActivity($savedTripActivity)
            ->setProfileAssociation($profileAssociation)
            ->setPolicyInformation($policyInformation)
            ->setLocatorCode($locatorCode)
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setCreateDate($createDate)
            ->setModifiedDate($modifiedDate)
            ->setVersion($version)
            ->setCreatedByAgent($createdByAgent)
            ->setModifiedByAgent($modifiedByAgent);
    }
    /**
     * Get BookingTraveler value
     * @return \Travelport\UniversalRecord\StructType\BookingTraveler[]
     */
    public function getBookingTraveler(): array
    {
        return $this->BookingTraveler;
    }
    /**
     * Set BookingTraveler value
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler[] $bookingTraveler
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setBookingTraveler(array $bookingTraveler): self
    {
        $this->BookingTraveler = $bookingTraveler;
        
        return $this;
    }
    /**
     * Add item to BookingTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToBookingTraveler(\Travelport\UniversalRecord\StructType\BookingTraveler $item): self
    {
        $this->BookingTraveler[] = $item;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setName(string $name): self
    {
        $this->Name = $name;
        
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setStatus(string $status): self
    {
        $this->Status = $status;
        
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setAgencyContactInfo(?\Travelport\UniversalRecord\StructType\AgencyContactInfo $agencyContactInfo = null): self
    {
        $this->AgencyContactInfo = $agencyContactInfo;
        
        return $this;
    }
    /**
     * Get SearchPassenger value
     * @return \Travelport\UniversalRecord\StructType\SearchPassenger[]
     */
    public function getSearchPassenger(): ?array
    {
        return $this->SearchPassenger;
    }
    /**
     * Set SearchPassenger value
     * @param \Travelport\UniversalRecord\StructType\SearchPassenger[] $searchPassenger
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setSearchPassenger(?array $searchPassenger = null): self
    {
        $this->SearchPassenger = $searchPassenger;
        
        return $this;
    }
    /**
     * Add item to SearchPassenger value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SearchPassenger $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToSearchPassenger(\Travelport\UniversalRecord\StructType\SearchPassenger $item): self
    {
        $this->SearchPassenger[] = $item;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\UniversalRecord\StructType\PointOfSale[]
     */
    public function getPointOfSale(): ?array
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\UniversalRecord\StructType\PointOfSale[] $pointOfSale
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setPointOfSale(?array $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Add item to PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PointOfSale $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToPointOfSale(\Travelport\UniversalRecord\StructType\PointOfSale $item): self
    {
        $this->PointOfSale[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToAccountingRemark(\Travelport\UniversalRecord\StructType\AccountingRemark $item): self
    {
        $this->AccountingRemark[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToGeneralRemark(\Travelport\UniversalRecord\StructType\GeneralRemark $item): self
    {
        $this->GeneralRemark[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setAgencyInfo(?\Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo = null): self
    {
        $this->AgencyInfo = $agencyInfo;
        
        return $this;
    }
    /**
     * Get ReservationName value
     * @return \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    public function getReservationName(): ?\Travelport\UniversalRecord\StructType\ReservationName
    {
        return $this->ReservationName;
    }
    /**
     * Set ReservationName value
     * @param \Travelport\UniversalRecord\StructType\ReservationName $reservationName
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setReservationName(?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null): self
    {
        $this->ReservationName = $reservationName;
        
        return $this;
    }
    /**
     * Get AirPricingModifiers value
     * @return \Travelport\UniversalRecord\StructType\AirPricingModifiers[]|null
     */
    public function getAirPricingModifiers(): ?array
    {
        return $this->AirPricingModifiers ?? null;
    }
    /**
     * Set AirPricingModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifiers[] $airPricingModifiers
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setAirPricingModifiers(?array $airPricingModifiers = null): self
    {
        if (is_null($airPricingModifiers) || (is_array($airPricingModifiers) && empty($airPricingModifiers))) {
            unset($this->AirPricingModifiers);
        } else {
            $this->AirPricingModifiers = $airPricingModifiers;
        }
        
        return $this;
    }
    /**
     * Add item to AirPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifiers $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToAirPricingModifiers(\Travelport\UniversalRecord\StructType\AirPricingModifiers $item): self
    {
        $this->AirPricingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution[]|null
     */
    public function getAirPricingSolution(): ?array
    {
        return $this->AirPricingSolution ?? null;
    }
    /**
     * Set AirPricingSolution value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution[] $airPricingSolution
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setAirPricingSolution(?array $airPricingSolution = null): self
    {
        if (is_null($airPricingSolution) || (is_array($airPricingSolution) && empty($airPricingSolution))) {
            unset($this->AirPricingSolution);
        } else {
            $this->AirPricingSolution = $airPricingSolution;
        }
        
        return $this;
    }
    /**
     * Add item to AirPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToAirPricingSolution(\Travelport\UniversalRecord\StructType\AirPricingSolution $item): self
    {
        $this->AirPricingSolution[] = $item;
        
        return $this;
    }
    /**
     * Get AirTripNote value
     * @return \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    public function getAirTripNote(): ?array
    {
        return $this->AirTripNote;
    }
    /**
     * Set AirTripNote value
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $airTripNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setAirTripNote(?array $airTripNote = null): self
    {
        $this->AirTripNote = $airTripNote;
        
        return $this;
    }
    /**
     * Add item to AirTripNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToAirTripNote(\Travelport\UniversalRecord\StructType\TypeSavedTripNote $item): self
    {
        $this->AirTripNote[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleSearchModifiers value
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiers[]|null
     */
    public function getVehicleSearchModifiers(): ?array
    {
        return $this->VehicleSearchModifiers ?? null;
    }
    /**
     * Set VehicleSearchModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\VehicleSearchModifiers[] $vehicleSearchModifiers
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVehicleSearchModifiers(?array $vehicleSearchModifiers = null): self
    {
        if (is_null($vehicleSearchModifiers) || (is_array($vehicleSearchModifiers) && empty($vehicleSearchModifiers))) {
            unset($this->VehicleSearchModifiers);
        } else {
            $this->VehicleSearchModifiers = $vehicleSearchModifiers;
        }
        
        return $this;
    }
    /**
     * Add item to VehicleSearchModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleSearchModifiers $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToVehicleSearchModifiers(\Travelport\UniversalRecord\StructType\VehicleSearchModifiers $item): self
    {
        $this->VehicleSearchModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleDateLocation value
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation[]|null
     */
    public function getVehicleDateLocation(): ?array
    {
        return $this->VehicleDateLocation ?? null;
    }
    /**
     * Set VehicleDateLocation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocation[] $vehicleDateLocation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVehicleDateLocation(?array $vehicleDateLocation = null): self
    {
        if (is_null($vehicleDateLocation) || (is_array($vehicleDateLocation) && empty($vehicleDateLocation))) {
            unset($this->VehicleDateLocation);
        } else {
            $this->VehicleDateLocation = $vehicleDateLocation;
        }
        
        return $this;
    }
    /**
     * Add item to VehicleDateLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocation $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToVehicleDateLocation(\Travelport\UniversalRecord\StructType\VehicleDateLocation $item): self
    {
        $this->VehicleDateLocation[] = $item;
        
        return $this;
    }
    /**
     * Get SpecialEquipment value
     * @return \Travelport\UniversalRecord\StructType\SpecialEquipment[]
     */
    public function getSpecialEquipment(): ?array
    {
        return $this->SpecialEquipment;
    }
    /**
     * Set SpecialEquipment value
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment[] $specialEquipment
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setSpecialEquipment(?array $specialEquipment = null): self
    {
        $this->SpecialEquipment = $specialEquipment;
        
        return $this;
    }
    /**
     * Add item to SpecialEquipment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToSpecialEquipment(\Travelport\UniversalRecord\StructType\SpecialEquipment $item): self
    {
        $this->SpecialEquipment[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleSpecialRequest value
     * @return \Travelport\UniversalRecord\StructType\VehicleSpecialRequest[]|null
     */
    public function getVehicleSpecialRequest(): ?array
    {
        return $this->VehicleSpecialRequest ?? null;
    }
    /**
     * Set VehicleSpecialRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest[] $vehicleSpecialRequest
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVehicleSpecialRequest(?array $vehicleSpecialRequest = null): self
    {
        if (is_null($vehicleSpecialRequest) || (is_array($vehicleSpecialRequest) && empty($vehicleSpecialRequest))) {
            unset($this->VehicleSpecialRequest);
        } else {
            $this->VehicleSpecialRequest = $vehicleSpecialRequest;
        }
        
        return $this;
    }
    /**
     * Add item to VehicleSpecialRequest value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToVehicleSpecialRequest(\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $item): self
    {
        $this->VehicleSpecialRequest[] = $item;
        
        return $this;
    }
    /**
     * Get PaymentInformation value
     * @return \Travelport\UniversalRecord\StructType\PaymentInformation[]|null
     */
    public function getPaymentInformation(): ?array
    {
        return $this->PaymentInformation ?? null;
    }
    /**
     * Set PaymentInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation[] $paymentInformation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setPaymentInformation(?array $paymentInformation = null): self
    {
        if (is_null($paymentInformation) || (is_array($paymentInformation) && empty($paymentInformation))) {
            unset($this->PaymentInformation);
        } else {
            $this->PaymentInformation = $paymentInformation;
        }
        
        return $this;
    }
    /**
     * Add item to PaymentInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToPaymentInformation(\Travelport\UniversalRecord\StructType\PaymentInformation $item): self
    {
        $this->PaymentInformation[] = $item;
        
        return $this;
    }
    /**
     * Get DeliveryAddress value
     * @return \Travelport\UniversalRecord\StructType\DeliveryAddress[]|null
     */
    public function getDeliveryAddress(): ?array
    {
        return $this->DeliveryAddress ?? null;
    }
    /**
     * Set DeliveryAddress value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress[] $deliveryAddress
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setDeliveryAddress(?array $deliveryAddress = null): self
    {
        if (is_null($deliveryAddress) || (is_array($deliveryAddress) && empty($deliveryAddress))) {
            unset($this->DeliveryAddress);
        } else {
            $this->DeliveryAddress = $deliveryAddress;
        }
        
        return $this;
    }
    /**
     * Add item to DeliveryAddress value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToDeliveryAddress(\Travelport\UniversalRecord\StructType\DeliveryAddress $item): self
    {
        $this->DeliveryAddress[] = $item;
        
        return $this;
    }
    /**
     * Get CollectionAddress value
     * @return \Travelport\UniversalRecord\StructType\CollectionAddress[]|null
     */
    public function getCollectionAddress(): ?array
    {
        return $this->CollectionAddress ?? null;
    }
    /**
     * Set CollectionAddress value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress[] $collectionAddress
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setCollectionAddress(?array $collectionAddress = null): self
    {
        if (is_null($collectionAddress) || (is_array($collectionAddress) && empty($collectionAddress))) {
            unset($this->CollectionAddress);
        } else {
            $this->CollectionAddress = $collectionAddress;
        }
        
        return $this;
    }
    /**
     * Add item to CollectionAddress value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToCollectionAddress(\Travelport\UniversalRecord\StructType\CollectionAddress $item): self
    {
        $this->CollectionAddress[] = $item;
        
        return $this;
    }
    /**
     * Get FlightArrivalInformation value
     * @return \Travelport\UniversalRecord\StructType\FlightArrivalInformation[]|null
     */
    public function getFlightArrivalInformation(): ?array
    {
        return $this->FlightArrivalInformation ?? null;
    }
    /**
     * Set FlightArrivalInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation[] $flightArrivalInformation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setFlightArrivalInformation(?array $flightArrivalInformation = null): self
    {
        if (is_null($flightArrivalInformation) || (is_array($flightArrivalInformation) && empty($flightArrivalInformation))) {
            unset($this->FlightArrivalInformation);
        } else {
            $this->FlightArrivalInformation = $flightArrivalInformation;
        }
        
        return $this;
    }
    /**
     * Add item to FlightArrivalInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToFlightArrivalInformation(\Travelport\UniversalRecord\StructType\FlightArrivalInformation $item): self
    {
        $this->FlightArrivalInformation[] = $item;
        
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Travelport\UniversalRecord\StructType\Vehicle[]|null
     */
    public function getVehicle(): ?array
    {
        return $this->Vehicle ?? null;
    }
    /**
     * Set Vehicle value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\Vehicle[] $vehicle
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVehicle(?array $vehicle = null): self
    {
        if (is_null($vehicle) || (is_array($vehicle) && empty($vehicle))) {
            unset($this->Vehicle);
        } else {
            $this->Vehicle = $vehicle;
        }
        
        return $this;
    }
    /**
     * Add item to Vehicle value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Vehicle $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToVehicle(\Travelport\UniversalRecord\StructType\Vehicle $item): self
    {
        $this->Vehicle[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleTripNote value
     * @return \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    public function getVehicleTripNote(): ?array
    {
        return $this->VehicleTripNote;
    }
    /**
     * Set VehicleTripNote value
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $vehicleTripNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVehicleTripNote(?array $vehicleTripNote = null): self
    {
        $this->VehicleTripNote = $vehicleTripNote;
        
        return $this;
    }
    /**
     * Add item to VehicleTripNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToVehicleTripNote(\Travelport\UniversalRecord\StructType\TypeSavedTripNote $item): self
    {
        $this->VehicleTripNote[] = $item;
        
        return $this;
    }
    /**
     * Get VendorLocation value
     * @return \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    public function getVendorLocation(): ?array
    {
        return $this->VendorLocation;
    }
    /**
     * Set VendorLocation value
     * @param \Travelport\UniversalRecord\StructType\VendorLocation[] $vendorLocation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
        $this->VendorLocation = $vendorLocation;
        
        return $this;
    }
    /**
     * Add item to VendorLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VendorLocation $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToVendorLocation(\Travelport\UniversalRecord\StructType\VendorLocation $item): self
    {
        $this->VendorLocation[] = $item;
        
        return $this;
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\UniversalRecord\StructType\HotelProperty[]|null
     */
    public function getHotelProperty(): ?array
    {
        return $this->HotelProperty ?? null;
    }
    /**
     * Set HotelProperty value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\HotelProperty[] $hotelProperty
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelProperty(?array $hotelProperty = null): self
    {
        if (is_null($hotelProperty) || (is_array($hotelProperty) && empty($hotelProperty))) {
            unset($this->HotelProperty);
        } else {
            $this->HotelProperty = $hotelProperty;
        }
        
        return $this;
    }
    /**
     * Add item to HotelProperty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelProperty(\Travelport\UniversalRecord\StructType\HotelProperty $item): self
    {
        $this->HotelProperty[] = $item;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \Travelport\UniversalRecord\StructType\HotelStay[]|null
     */
    public function getHotelStay(): ?array
    {
        return $this->HotelStay ?? null;
    }
    /**
     * Set HotelStay value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\HotelStay[] $hotelStay
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelStay(?array $hotelStay = null): self
    {
        if (is_null($hotelStay) || (is_array($hotelStay) && empty($hotelStay))) {
            unset($this->HotelStay);
        } else {
            $this->HotelStay = $hotelStay;
        }
        
        return $this;
    }
    /**
     * Add item to HotelStay value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelStay $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelStay(\Travelport\UniversalRecord\StructType\HotelStay $item): self
    {
        $this->HotelStay[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRulesModifiers value
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers[]|null
     */
    public function getHotelRulesModifiers(): ?array
    {
        return $this->HotelRulesModifiers ?? null;
    }
    /**
     * Set HotelRulesModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\HotelRulesModifiers[] $hotelRulesModifiers
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelRulesModifiers(?array $hotelRulesModifiers = null): self
    {
        if (is_null($hotelRulesModifiers) || (is_array($hotelRulesModifiers) && empty($hotelRulesModifiers))) {
            unset($this->HotelRulesModifiers);
        } else {
            $this->HotelRulesModifiers = $hotelRulesModifiers;
        }
        
        return $this;
    }
    /**
     * Add item to HotelRulesModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRulesModifiers $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelRulesModifiers(\Travelport\UniversalRecord\StructType\HotelRulesModifiers $item): self
    {
        $this->HotelRulesModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get HotelDetailsModifiers value
     * @return \Travelport\UniversalRecord\StructType\HotelDetailsModifiers[]|null
     */
    public function getHotelDetailsModifiers(): ?array
    {
        return $this->HotelDetailsModifiers ?? null;
    }
    /**
     * Set HotelDetailsModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\HotelDetailsModifiers[] $hotelDetailsModifiers
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelDetailsModifiers(?array $hotelDetailsModifiers = null): self
    {
        if (is_null($hotelDetailsModifiers) || (is_array($hotelDetailsModifiers) && empty($hotelDetailsModifiers))) {
            unset($this->HotelDetailsModifiers);
        } else {
            $this->HotelDetailsModifiers = $hotelDetailsModifiers;
        }
        
        return $this;
    }
    /**
     * Add item to HotelDetailsModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelDetailsModifiers $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelDetailsModifiers(\Travelport\UniversalRecord\StructType\HotelDetailsModifiers $item): self
    {
        $this->HotelDetailsModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRateDetail value
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail[]|null
     */
    public function getHotelRateDetail(): ?array
    {
        return $this->HotelRateDetail ?? null;
    }
    /**
     * Set HotelRateDetail value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail[] $hotelRateDetail
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelRateDetail(?array $hotelRateDetail = null): self
    {
        if (is_null($hotelRateDetail) || (is_array($hotelRateDetail) && empty($hotelRateDetail))) {
            unset($this->HotelRateDetail);
        } else {
            $this->HotelRateDetail = $hotelRateDetail;
        }
        
        return $this;
    }
    /**
     * Add item to HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelRateDetail(\Travelport\UniversalRecord\StructType\HotelRateDetail $item): self
    {
        $this->HotelRateDetail[] = $item;
        
        return $this;
    }
    /**
     * Get PromotionCode value
     * @return \Travelport\UniversalRecord\StructType\PromotionCode[]|null
     */
    public function getPromotionCode(): ?array
    {
        return $this->PromotionCode ?? null;
    }
    /**
     * Set PromotionCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\PromotionCode[] $promotionCode
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setPromotionCode(?array $promotionCode = null): self
    {
        if (is_null($promotionCode) || (is_array($promotionCode) && empty($promotionCode))) {
            unset($this->PromotionCode);
        } else {
            $this->PromotionCode = $promotionCode;
        }
        
        return $this;
    }
    /**
     * Add item to PromotionCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PromotionCode $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToPromotionCode(\Travelport\UniversalRecord\StructType\PromotionCode $item): self
    {
        $this->PromotionCode[] = $item;
        
        return $this;
    }
    /**
     * Get HotelTripNote value
     * @return \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    public function getHotelTripNote(): ?array
    {
        return $this->HotelTripNote;
    }
    /**
     * Set HotelTripNote value
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $hotelTripNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelTripNote(?array $hotelTripNote = null): self
    {
        $this->HotelTripNote = $hotelTripNote;
        
        return $this;
    }
    /**
     * Add item to HotelTripNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelTripNote(\Travelport\UniversalRecord\StructType\TypeSavedTripNote $item): self
    {
        $this->HotelTripNote[] = $item;
        
        return $this;
    }
    /**
     * Get RailPricingSolution value
     * @return \Travelport\UniversalRecord\StructType\RailPricingSolution[]|null
     */
    public function getRailPricingSolution(): ?array
    {
        return $this->RailPricingSolution ?? null;
    }
    /**
     * Set RailPricingSolution value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolution[] $railPricingSolution
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setRailPricingSolution(?array $railPricingSolution = null): self
    {
        if (is_null($railPricingSolution) || (is_array($railPricingSolution) && empty($railPricingSolution))) {
            unset($this->RailPricingSolution);
        } else {
            $this->RailPricingSolution = $railPricingSolution;
        }
        
        return $this;
    }
    /**
     * Add item to RailPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolution $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToRailPricingSolution(\Travelport\UniversalRecord\StructType\RailPricingSolution $item): self
    {
        $this->RailPricingSolution[] = $item;
        
        return $this;
    }
    /**
     * Get RailFareNote value
     * @return \Travelport\UniversalRecord\StructType\RailFareNote[]|null
     */
    public function getRailFareNote(): ?array
    {
        return $this->RailFareNote ?? null;
    }
    /**
     * Set RailFareNote value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\RailFareNote[] $railFareNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setRailFareNote(?array $railFareNote = null): self
    {
        if (is_null($railFareNote) || (is_array($railFareNote) && empty($railFareNote))) {
            unset($this->RailFareNote);
        } else {
            $this->RailFareNote = $railFareNote;
        }
        
        return $this;
    }
    /**
     * Add item to RailFareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareNote $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToRailFareNote(\Travelport\UniversalRecord\StructType\RailFareNote $item): self
    {
        $this->RailFareNote[] = $item;
        
        return $this;
    }
    /**
     * Get RailTripNote value
     * @return \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    public function getRailTripNote(): ?array
    {
        return $this->RailTripNote;
    }
    /**
     * Set RailTripNote value
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $railTripNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setRailTripNote(?array $railTripNote = null): self
    {
        $this->RailTripNote = $railTripNote;
        
        return $this;
    }
    /**
     * Add item to RailTripNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToRailTripNote(\Travelport\UniversalRecord\StructType\TypeSavedTripNote $item): self
    {
        $this->RailTripNote[] = $item;
        
        return $this;
    }
    /**
     * Get SavedTripNote value
     * @return \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    public function getSavedTripNote(): ?array
    {
        return $this->SavedTripNote;
    }
    /**
     * Set SavedTripNote value
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $savedTripNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setSavedTripNote(?array $savedTripNote = null): self
    {
        $this->SavedTripNote = $savedTripNote;
        
        return $this;
    }
    /**
     * Add item to SavedTripNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToSavedTripNote(\Travelport\UniversalRecord\StructType\TypeSavedTripNote $item): self
    {
        $this->SavedTripNote[] = $item;
        
        return $this;
    }
    /**
     * Get SavedTripActivity value
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity[]
     */
    public function getSavedTripActivity(): ?array
    {
        return $this->SavedTripActivity;
    }
    /**
     * Set SavedTripActivity value
     * @param \Travelport\UniversalRecord\StructType\SavedTripActivity[] $savedTripActivity
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setSavedTripActivity(?array $savedTripActivity = null): self
    {
        $this->SavedTripActivity = $savedTripActivity;
        
        return $this;
    }
    /**
     * Add item to SavedTripActivity value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SavedTripActivity $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToSavedTripActivity(\Travelport\UniversalRecord\StructType\SavedTripActivity $item): self
    {
        $this->SavedTripActivity[] = $item;
        
        return $this;
    }
    /**
     * Get ProfileAssociation value
     * @return \Travelport\UniversalRecord\StructType\ProfileAssociation[]
     */
    public function getProfileAssociation(): ?array
    {
        return $this->ProfileAssociation;
    }
    /**
     * Set ProfileAssociation value
     * @param \Travelport\UniversalRecord\StructType\ProfileAssociation[] $profileAssociation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setProfileAssociation(?array $profileAssociation = null): self
    {
        $this->ProfileAssociation = $profileAssociation;
        
        return $this;
    }
    /**
     * Add item to ProfileAssociation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProfileAssociation $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToProfileAssociation(\Travelport\UniversalRecord\StructType\ProfileAssociation $item): self
    {
        $this->ProfileAssociation[] = $item;
        
        return $this;
    }
    /**
     * Get PolicyInformation value
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation|null
     */
    public function getPolicyInformation(): ?\Travelport\UniversalRecord\StructType\PolicyInformation
    {
        return $this->PolicyInformation;
    }
    /**
     * Set PolicyInformation value
     * @param \Travelport\UniversalRecord\StructType\PolicyInformation $policyInformation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setPolicyInformation(?\Travelport\UniversalRecord\StructType\PolicyInformation $policyInformation = null): self
    {
        $this->PolicyInformation = $policyInformation;
        
        return $this;
    }
    /**
     * Get LocatorCode value
     * @return string|null
     */
    public function getLocatorCode(): ?string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setLocatorCode(?string $locatorCode = null): self
    {
        $this->LocatorCode = $locatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setUniversalRecordLocatorCode(?string $universalRecordLocatorCode = null): self
    {
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setCreateDate(?string $createDate = null): self
    {
        $this->CreateDate = $createDate;
        
        return $this;
    }
    /**
     * Get ModifiedDate value
     * @return string|null
     */
    public function getModifiedDate(): ?string
    {
        return $this->ModifiedDate;
    }
    /**
     * Set ModifiedDate value
     * @param string $modifiedDate
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setModifiedDate(?string $modifiedDate = null): self
    {
        $this->ModifiedDate = $modifiedDate;
        
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVersion(?int $version = null): self
    {
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get CreatedByAgent value
     * @return string|null
     */
    public function getCreatedByAgent(): ?string
    {
        return $this->CreatedByAgent;
    }
    /**
     * Set CreatedByAgent value
     * @param string $createdByAgent
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setCreatedByAgent(?string $createdByAgent = null): self
    {
        $this->CreatedByAgent = $createdByAgent;
        
        return $this;
    }
    /**
     * Get ModifiedByAgent value
     * @return string|null
     */
    public function getModifiedByAgent(): ?string
    {
        return $this->ModifiedByAgent;
    }
    /**
     * Set ModifiedByAgent value
     * @param string $modifiedByAgent
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setModifiedByAgent(?string $modifiedByAgent = null): self
    {
        $this->ModifiedByAgent = $modifiedByAgent;
        
        return $this;
    }
}
