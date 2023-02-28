<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected array $BookingTraveler;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Name;
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
     * The AgencyContactInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyContactInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyContactInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AgencyContactInfo $AgencyContactInfo = null;
    /**
     * The SearchPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SearchPassenger
     * @var \Travelport\UniversalRecord\StructType\SearchPassenger[]
     */
    protected ?array $SearchPassenger = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale[]
     */
    protected ?array $PointOfSale = null;
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
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AgencyInfo $AgencyInfo = null;
    /**
     * The ReservationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ReservationName
     * @var \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ReservationName $ReservationName = null;
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
    protected ?array $AirPricingModifiers = null;
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
    protected ?array $AirPricingSolution = null;
    /**
     * The AirTripNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    protected ?array $AirTripNote = null;
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
    protected ?array $VehicleSearchModifiers = null;
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
    protected ?array $VehicleDateLocation = null;
    /**
     * The SpecialEquipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SpecialEquipment
     * @var \Travelport\UniversalRecord\StructType\SpecialEquipment[]
     */
    protected ?array $SpecialEquipment = null;
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
    protected ?array $VehicleSpecialRequest = null;
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
    protected ?array $PaymentInformation = null;
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
    protected ?array $DeliveryAddress = null;
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
    protected ?array $CollectionAddress = null;
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
    protected ?array $FlightArrivalInformation = null;
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
    protected ?array $Vehicle = null;
    /**
     * The VehicleTripNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    protected ?array $VehicleTripNote = null;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    protected ?array $VendorLocation = null;
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
    protected ?array $HotelProperty = null;
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
    protected ?array $HotelStay = null;
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
    protected ?array $HotelRulesModifiers = null;
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
    protected ?array $HotelDetailsModifiers = null;
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
    protected ?array $HotelRateDetail = null;
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
    protected ?array $PromotionCode = null;
    /**
     * The HotelTripNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    protected ?array $HotelTripNote = null;
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
    protected ?array $RailPricingSolution = null;
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
    protected ?array $RailFareNote = null;
    /**
     * The RailTripNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    protected ?array $RailTripNote = null;
    /**
     * The SavedTripNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSavedTripNote[]
     */
    protected ?array $SavedTripNote = null;
    /**
     * The SavedTripActivity
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SavedTripActivity
     * @var \Travelport\UniversalRecord\StructType\SavedTripActivity[]
     */
    protected ?array $SavedTripActivity = null;
    /**
     * The ProfileAssociation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProfileAssociation
     * @var \Travelport\UniversalRecord\StructType\ProfileAssociation[]
     */
    protected ?array $ProfileAssociation = null;
    /**
     * The PolicyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: PolicyInformation
     * @var \Travelport\UniversalRecord\StructType\PolicyInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PolicyInformation $PolicyInformation = null;
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
    protected ?string $LocatorCode = null;
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
    protected ?string $UniversalRecordLocatorCode = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this SavedTrip was created.
     * - use: optional
     * @var string|null
     */
    protected ?string $CreateDate = null;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this SavedTrip was Modified.
     * - use: optional
     * @var string|null
     */
    protected ?string $ModifiedDate = null;
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
     * The CreatedByAgent
     * Meta information extracted from the WSDL
     * - documentation: The Agent Code who created the SavedTrip.
     * - use: optional
     * @var string|null
     */
    protected ?string $CreatedByAgent = null;
    /**
     * The ModifiedByAgent
     * Meta information extracted from the WSDL
     * - documentation: The Agent Code that modified the SavedTrip.
     * - use: optional
     * @var string|null
     */
    protected ?string $ModifiedByAgent = null;
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
     * This method is responsible for validating the value(s) passed to the setBookingTraveler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTraveler method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerForArrayConstraintFromSetBookingTraveler(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripBookingTravelerItem) {
            // validation for constraint: itemType
            if (!$savedTripBookingTravelerItem instanceof \Travelport\UniversalRecord\StructType\BookingTraveler) {
                $invalidValues[] = is_object($savedTripBookingTravelerItem) ? get_class($savedTripBookingTravelerItem) : sprintf('%s(%s)', gettype($savedTripBookingTravelerItem), var_export($savedTripBookingTravelerItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setBookingTraveler(array $bookingTraveler): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerArrayErrorMessage = self::validateBookingTravelerForArrayConstraintFromSetBookingTraveler($bookingTraveler))) {
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
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
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($name) && mb_strlen((string) $name) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $name)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($name) && mb_strlen((string) $name) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $name)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setSearchPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchPassenger method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchPassengerForArrayConstraintFromSetSearchPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripSearchPassengerItem) {
            // validation for constraint: itemType
            if (!$savedTripSearchPassengerItem instanceof \Travelport\UniversalRecord\StructType\SearchPassenger) {
                $invalidValues[] = is_object($savedTripSearchPassengerItem) ? get_class($savedTripSearchPassengerItem) : sprintf('%s(%s)', gettype($savedTripSearchPassengerItem), var_export($savedTripSearchPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchPassenger property can only contain items of type \Travelport\UniversalRecord\StructType\SearchPassenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchPassenger value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SearchPassenger[] $searchPassenger
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setSearchPassenger(?array $searchPassenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchPassengerArrayErrorMessage = self::validateSearchPassengerForArrayConstraintFromSetSearchPassenger($searchPassenger))) {
            throw new InvalidArgumentException($searchPassengerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($searchPassenger) && count($searchPassenger) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($searchPassenger)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SearchPassenger) {
            throw new InvalidArgumentException(sprintf('The SearchPassenger property can only contain items of type \Travelport\UniversalRecord\StructType\SearchPassenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SearchPassenger) && count($this->SearchPassenger) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SearchPassenger)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setPointOfSale method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPointOfSale method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePointOfSaleForArrayConstraintFromSetPointOfSale(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripPointOfSaleItem) {
            // validation for constraint: itemType
            if (!$savedTripPointOfSaleItem instanceof \Travelport\UniversalRecord\StructType\PointOfSale) {
                $invalidValues[] = is_object($savedTripPointOfSaleItem) ? get_class($savedTripPointOfSaleItem) : sprintf('%s(%s)', gettype($savedTripPointOfSaleItem), var_export($savedTripPointOfSaleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PointOfSale property can only contain items of type \Travelport\UniversalRecord\StructType\PointOfSale, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PointOfSale[] $pointOfSale
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setPointOfSale(?array $pointOfSale = null): self
    {
        // validation for constraint: array
        if ('' !== ($pointOfSaleArrayErrorMessage = self::validatePointOfSaleForArrayConstraintFromSetPointOfSale($pointOfSale))) {
            throw new InvalidArgumentException($pointOfSaleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($pointOfSale) && count($pointOfSale) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($pointOfSale)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PointOfSale) {
            throw new InvalidArgumentException(sprintf('The PointOfSale property can only contain items of type \Travelport\UniversalRecord\StructType\PointOfSale, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PointOfSale) && count($this->PointOfSale) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PointOfSale)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAccountingRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountingRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountingRemarkForArrayConstraintFromSetAccountingRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripAccountingRemarkItem) {
            // validation for constraint: itemType
            if (!$savedTripAccountingRemarkItem instanceof \Travelport\UniversalRecord\StructType\AccountingRemark) {
                $invalidValues[] = is_object($savedTripAccountingRemarkItem) ? get_class($savedTripAccountingRemarkItem) : sprintf('%s(%s)', gettype($savedTripAccountingRemarkItem), var_export($savedTripAccountingRemarkItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountingRemarkArrayErrorMessage = self::validateAccountingRemarkForArrayConstraintFromSetAccountingRemark($accountingRemark))) {
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
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
     * Get GeneralRemark value
     * @return \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGeneralRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneralRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGeneralRemarkForArrayConstraintFromSetGeneralRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$savedTripGeneralRemarkItem instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
                $invalidValues[] = is_object($savedTripGeneralRemarkItem) ? get_class($savedTripGeneralRemarkItem) : sprintf('%s(%s)', gettype($savedTripGeneralRemarkItem), var_export($savedTripGeneralRemarkItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($generalRemarkArrayErrorMessage = self::validateGeneralRemarkForArrayConstraintFromSetGeneralRemark($generalRemark))) {
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
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
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
     * This method is responsible for validating the value(s) passed to the setAirPricingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingModifiers method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingModifiersForArrayConstraintFromSetAirPricingModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripAirPricingModifiersItem) {
            // validation for constraint: itemType
            if (!$savedTripAirPricingModifiersItem instanceof \Travelport\UniversalRecord\StructType\AirPricingModifiers) {
                $invalidValues[] = is_object($savedTripAirPricingModifiersItem) ? get_class($savedTripAirPricingModifiersItem) : sprintf('%s(%s)', gettype($savedTripAirPricingModifiersItem), var_export($savedTripAirPricingModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirPricingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirPricingModifiersForChoiceConstraintFromSetAirPricingModifiers($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AirPricingModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirPricingModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifiers[] $airPricingModifiers
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setAirPricingModifiers(?array $airPricingModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingModifiersArrayErrorMessage = self::validateAirPricingModifiersForArrayConstraintFromSetAirPricingModifiers($airPricingModifiers))) {
            throw new InvalidArgumentException($airPricingModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AirPricingModifiers)
        if ('' !== ($airPricingModifiersChoiceErrorMessage = self::validateAirPricingModifiersForChoiceConstraintFromSetAirPricingModifiers($airPricingModifiers))) {
            throw new InvalidArgumentException($airPricingModifiersChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airPricingModifiers) && count($airPricingModifiers) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airPricingModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingModifiers) && count($airPricingModifiers) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingModifiers)), __LINE__);
        }
        if (is_null($airPricingModifiers) || (is_array($airPricingModifiers) && empty($airPricingModifiers))) {
            unset($this->AirPricingModifiers);
        } else {
            $this->AirPricingModifiers = $airPricingModifiers;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAirPricingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirPricingModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAirPricingModifiers($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AirPricingModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AirPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifiers $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToAirPricingModifiers(\Travelport\UniversalRecord\StructType\AirPricingModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingModifiers) {
            throw new InvalidArgumentException(sprintf('The AirPricingModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AirPricingModifiers)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAirPricingModifiers($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirPricingModifiers) && count($this->AirPricingModifiers) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirPricingModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingModifiers) && count($this->AirPricingModifiers) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingModifiers)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirPricingSolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingSolution method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingSolutionForArrayConstraintFromSetAirPricingSolution(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripAirPricingSolutionItem) {
            // validation for constraint: itemType
            if (!$savedTripAirPricingSolutionItem instanceof \Travelport\UniversalRecord\StructType\AirPricingSolution) {
                $invalidValues[] = is_object($savedTripAirPricingSolutionItem) ? get_class($savedTripAirPricingSolutionItem) : sprintf('%s(%s)', gettype($savedTripAirPricingSolutionItem), var_export($savedTripAirPricingSolutionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingSolution property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingSolution, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirPricingSolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingSolution method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirPricingSolutionForChoiceConstraintFromSetAirPricingSolution($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AirPricingSolution can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingSolution, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirPricingSolution value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution[] $airPricingSolution
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setAirPricingSolution(?array $airPricingSolution = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingSolutionArrayErrorMessage = self::validateAirPricingSolutionForArrayConstraintFromSetAirPricingSolution($airPricingSolution))) {
            throw new InvalidArgumentException($airPricingSolutionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AirPricingSolution)
        if ('' !== ($airPricingSolutionChoiceErrorMessage = self::validateAirPricingSolutionForChoiceConstraintFromSetAirPricingSolution($airPricingSolution))) {
            throw new InvalidArgumentException($airPricingSolutionChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airPricingSolution) && count($airPricingSolution) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airPricingSolution)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingSolution) && count($airPricingSolution) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingSolution)), __LINE__);
        }
        if (is_null($airPricingSolution) || (is_array($airPricingSolution) && empty($airPricingSolution))) {
            unset($this->AirPricingSolution);
        } else {
            $this->AirPricingSolution = $airPricingSolution;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAirPricingSolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirPricingSolution method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAirPricingSolution($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AirPricingSolution can\'t be set as the property %s is already set. Only one property must be set among these properties: AirPricingSolution, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AirPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToAirPricingSolution(\Travelport\UniversalRecord\StructType\AirPricingSolution $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingSolution) {
            throw new InvalidArgumentException(sprintf('The AirPricingSolution property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingSolution, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AirPricingSolution)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAirPricingSolution($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirPricingSolution) && count($this->AirPricingSolution) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirPricingSolution)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingSolution) && count($this->AirPricingSolution) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingSolution)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirTripNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirTripNote method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirTripNoteForArrayConstraintFromSetAirTripNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripAirTripNoteItem) {
            // validation for constraint: itemType
            if (!$savedTripAirTripNoteItem instanceof \Travelport\UniversalRecord\StructType\TypeSavedTripNote) {
                $invalidValues[] = is_object($savedTripAirTripNoteItem) ? get_class($savedTripAirTripNoteItem) : sprintf('%s(%s)', gettype($savedTripAirTripNoteItem), var_export($savedTripAirTripNoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirTripNote property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSavedTripNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirTripNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $airTripNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setAirTripNote(?array $airTripNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($airTripNoteArrayErrorMessage = self::validateAirTripNoteForArrayConstraintFromSetAirTripNote($airTripNote))) {
            throw new InvalidArgumentException($airTripNoteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($airTripNote) && count($airTripNote) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($airTripNote)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSavedTripNote) {
            throw new InvalidArgumentException(sprintf('The AirTripNote property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSavedTripNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->AirTripNote) && count($this->AirTripNote) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->AirTripNote)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVehicleSearchModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleSearchModifiers method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleSearchModifiersForArrayConstraintFromSetVehicleSearchModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripVehicleSearchModifiersItem) {
            // validation for constraint: itemType
            if (!$savedTripVehicleSearchModifiersItem instanceof \Travelport\UniversalRecord\StructType\VehicleSearchModifiers) {
                $invalidValues[] = is_object($savedTripVehicleSearchModifiersItem) ? get_class($savedTripVehicleSearchModifiersItem) : sprintf('%s(%s)', gettype($savedTripVehicleSearchModifiersItem), var_export($savedTripVehicleSearchModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleSearchModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleSearchModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleSearchModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleSearchModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleSearchModifiersForChoiceConstraintFromSetVehicleSearchModifiers($value): string
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
                    throw new InvalidArgumentException(sprintf('The property VehicleSearchModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleSearchModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleSearchModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleSearchModifiers[] $vehicleSearchModifiers
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVehicleSearchModifiers(?array $vehicleSearchModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleSearchModifiersArrayErrorMessage = self::validateVehicleSearchModifiersForArrayConstraintFromSetVehicleSearchModifiers($vehicleSearchModifiers))) {
            throw new InvalidArgumentException($vehicleSearchModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(VehicleSearchModifiers)
        if ('' !== ($vehicleSearchModifiersChoiceErrorMessage = self::validateVehicleSearchModifiersForChoiceConstraintFromSetVehicleSearchModifiers($vehicleSearchModifiers))) {
            throw new InvalidArgumentException($vehicleSearchModifiersChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($vehicleSearchModifiers) && count($vehicleSearchModifiers) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($vehicleSearchModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleSearchModifiers) && count($vehicleSearchModifiers) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleSearchModifiers)), __LINE__);
        }
        if (is_null($vehicleSearchModifiers) || (is_array($vehicleSearchModifiers) && empty($vehicleSearchModifiers))) {
            unset($this->VehicleSearchModifiers);
        } else {
            $this->VehicleSearchModifiers = $vehicleSearchModifiers;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToVehicleSearchModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToVehicleSearchModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToVehicleSearchModifiers($value): string
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
                    throw new InvalidArgumentException(sprintf('The property VehicleSearchModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleSearchModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to VehicleSearchModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleSearchModifiers $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToVehicleSearchModifiers(\Travelport\UniversalRecord\StructType\VehicleSearchModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleSearchModifiers) {
            throw new InvalidArgumentException(sprintf('The VehicleSearchModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleSearchModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(VehicleSearchModifiers)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToVehicleSearchModifiers($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->VehicleSearchModifiers) && count($this->VehicleSearchModifiers) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->VehicleSearchModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleSearchModifiers) && count($this->VehicleSearchModifiers) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleSearchModifiers)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVehicleDateLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleDateLocation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleDateLocationForArrayConstraintFromSetVehicleDateLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripVehicleDateLocationItem) {
            // validation for constraint: itemType
            if (!$savedTripVehicleDateLocationItem instanceof \Travelport\UniversalRecord\StructType\VehicleDateLocation) {
                $invalidValues[] = is_object($savedTripVehicleDateLocationItem) ? get_class($savedTripVehicleDateLocationItem) : sprintf('%s(%s)', gettype($savedTripVehicleDateLocationItem), var_export($savedTripVehicleDateLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleDateLocation property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleDateLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleDateLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleDateLocation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleDateLocationForChoiceConstraintFromSetVehicleDateLocation($value): string
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
                    throw new InvalidArgumentException(sprintf('The property VehicleDateLocation can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleDateLocation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleDateLocation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocation[] $vehicleDateLocation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVehicleDateLocation(?array $vehicleDateLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleDateLocationArrayErrorMessage = self::validateVehicleDateLocationForArrayConstraintFromSetVehicleDateLocation($vehicleDateLocation))) {
            throw new InvalidArgumentException($vehicleDateLocationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(VehicleDateLocation)
        if ('' !== ($vehicleDateLocationChoiceErrorMessage = self::validateVehicleDateLocationForChoiceConstraintFromSetVehicleDateLocation($vehicleDateLocation))) {
            throw new InvalidArgumentException($vehicleDateLocationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($vehicleDateLocation) && count($vehicleDateLocation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($vehicleDateLocation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleDateLocation) && count($vehicleDateLocation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleDateLocation)), __LINE__);
        }
        if (is_null($vehicleDateLocation) || (is_array($vehicleDateLocation) && empty($vehicleDateLocation))) {
            unset($this->VehicleDateLocation);
        } else {
            $this->VehicleDateLocation = $vehicleDateLocation;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToVehicleDateLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToVehicleDateLocation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToVehicleDateLocation($value): string
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
                    throw new InvalidArgumentException(sprintf('The property VehicleDateLocation can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleDateLocation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to VehicleDateLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocation $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToVehicleDateLocation(\Travelport\UniversalRecord\StructType\VehicleDateLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleDateLocation) {
            throw new InvalidArgumentException(sprintf('The VehicleDateLocation property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleDateLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(VehicleDateLocation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToVehicleDateLocation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->VehicleDateLocation) && count($this->VehicleDateLocation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->VehicleDateLocation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleDateLocation) && count($this->VehicleDateLocation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleDateLocation)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setSpecialEquipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecialEquipment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecialEquipmentForArrayConstraintFromSetSpecialEquipment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripSpecialEquipmentItem) {
            // validation for constraint: itemType
            if (!$savedTripSpecialEquipmentItem instanceof \Travelport\UniversalRecord\StructType\SpecialEquipment) {
                $invalidValues[] = is_object($savedTripSpecialEquipmentItem) ? get_class($savedTripSpecialEquipmentItem) : sprintf('%s(%s)', gettype($savedTripSpecialEquipmentItem), var_export($savedTripSpecialEquipmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SpecialEquipment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecialEquipment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SpecialEquipment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment[] $specialEquipment
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setSpecialEquipment(?array $specialEquipment = null): self
    {
        // validation for constraint: array
        if ('' !== ($specialEquipmentArrayErrorMessage = self::validateSpecialEquipmentForArrayConstraintFromSetSpecialEquipment($specialEquipment))) {
            throw new InvalidArgumentException($specialEquipmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($specialEquipment) && count($specialEquipment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($specialEquipment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SpecialEquipment) {
            throw new InvalidArgumentException(sprintf('The SpecialEquipment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecialEquipment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SpecialEquipment) && count($this->SpecialEquipment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SpecialEquipment)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVehicleSpecialRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleSpecialRequest method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleSpecialRequestForArrayConstraintFromSetVehicleSpecialRequest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripVehicleSpecialRequestItem) {
            // validation for constraint: itemType
            if (!$savedTripVehicleSpecialRequestItem instanceof \Travelport\UniversalRecord\StructType\VehicleSpecialRequest) {
                $invalidValues[] = is_object($savedTripVehicleSpecialRequestItem) ? get_class($savedTripVehicleSpecialRequestItem) : sprintf('%s(%s)', gettype($savedTripVehicleSpecialRequestItem), var_export($savedTripVehicleSpecialRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleSpecialRequest property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleSpecialRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleSpecialRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleSpecialRequest method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleSpecialRequestForChoiceConstraintFromSetVehicleSpecialRequest($value): string
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
                    throw new InvalidArgumentException(sprintf('The property VehicleSpecialRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleSpecialRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleSpecialRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest[] $vehicleSpecialRequest
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVehicleSpecialRequest(?array $vehicleSpecialRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleSpecialRequestArrayErrorMessage = self::validateVehicleSpecialRequestForArrayConstraintFromSetVehicleSpecialRequest($vehicleSpecialRequest))) {
            throw new InvalidArgumentException($vehicleSpecialRequestArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(VehicleSpecialRequest)
        if ('' !== ($vehicleSpecialRequestChoiceErrorMessage = self::validateVehicleSpecialRequestForChoiceConstraintFromSetVehicleSpecialRequest($vehicleSpecialRequest))) {
            throw new InvalidArgumentException($vehicleSpecialRequestChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($vehicleSpecialRequest) && count($vehicleSpecialRequest) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($vehicleSpecialRequest)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleSpecialRequest) && count($vehicleSpecialRequest) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleSpecialRequest)), __LINE__);
        }
        if (is_null($vehicleSpecialRequest) || (is_array($vehicleSpecialRequest) && empty($vehicleSpecialRequest))) {
            unset($this->VehicleSpecialRequest);
        } else {
            $this->VehicleSpecialRequest = $vehicleSpecialRequest;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToVehicleSpecialRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToVehicleSpecialRequest method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToVehicleSpecialRequest($value): string
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
                    throw new InvalidArgumentException(sprintf('The property VehicleSpecialRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleSpecialRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to VehicleSpecialRequest value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToVehicleSpecialRequest(\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleSpecialRequest) {
            throw new InvalidArgumentException(sprintf('The VehicleSpecialRequest property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleSpecialRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(VehicleSpecialRequest)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToVehicleSpecialRequest($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->VehicleSpecialRequest) && count($this->VehicleSpecialRequest) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->VehicleSpecialRequest)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleSpecialRequest) && count($this->VehicleSpecialRequest) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleSpecialRequest)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setPaymentInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentInformation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentInformationForArrayConstraintFromSetPaymentInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripPaymentInformationItem) {
            // validation for constraint: itemType
            if (!$savedTripPaymentInformationItem instanceof \Travelport\UniversalRecord\StructType\PaymentInformation) {
                $invalidValues[] = is_object($savedTripPaymentInformationItem) ? get_class($savedTripPaymentInformationItem) : sprintf('%s(%s)', gettype($savedTripPaymentInformationItem), var_export($savedTripPaymentInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentInformation property can only contain items of type \Travelport\UniversalRecord\StructType\PaymentInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPaymentInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePaymentInformationForChoiceConstraintFromSetPaymentInformation($value): string
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
                    throw new InvalidArgumentException(sprintf('The property PaymentInformation can\'t be set as the property %s is already set. Only one property must be set among these properties: PaymentInformation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PaymentInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation[] $paymentInformation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setPaymentInformation(?array $paymentInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentInformationArrayErrorMessage = self::validatePaymentInformationForArrayConstraintFromSetPaymentInformation($paymentInformation))) {
            throw new InvalidArgumentException($paymentInformationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(PaymentInformation)
        if ('' !== ($paymentInformationChoiceErrorMessage = self::validatePaymentInformationForChoiceConstraintFromSetPaymentInformation($paymentInformation))) {
            throw new InvalidArgumentException($paymentInformationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($paymentInformation) && count($paymentInformation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($paymentInformation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($paymentInformation) && count($paymentInformation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($paymentInformation)), __LINE__);
        }
        if (is_null($paymentInformation) || (is_array($paymentInformation) && empty($paymentInformation))) {
            unset($this->PaymentInformation);
        } else {
            $this->PaymentInformation = $paymentInformation;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToPaymentInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToPaymentInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToPaymentInformation($value): string
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
                    throw new InvalidArgumentException(sprintf('The property PaymentInformation can\'t be set as the property %s is already set. Only one property must be set among these properties: PaymentInformation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to PaymentInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToPaymentInformation(\Travelport\UniversalRecord\StructType\PaymentInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PaymentInformation) {
            throw new InvalidArgumentException(sprintf('The PaymentInformation property can only contain items of type \Travelport\UniversalRecord\StructType\PaymentInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(PaymentInformation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToPaymentInformation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->PaymentInformation) && count($this->PaymentInformation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->PaymentInformation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PaymentInformation) && count($this->PaymentInformation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PaymentInformation)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setDeliveryAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeliveryAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeliveryAddressForArrayConstraintFromSetDeliveryAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripDeliveryAddressItem) {
            // validation for constraint: itemType
            if (!$savedTripDeliveryAddressItem instanceof \Travelport\UniversalRecord\StructType\DeliveryAddress) {
                $invalidValues[] = is_object($savedTripDeliveryAddressItem) ? get_class($savedTripDeliveryAddressItem) : sprintf('%s(%s)', gettype($savedTripDeliveryAddressItem), var_export($savedTripDeliveryAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeliveryAddress property can only contain items of type \Travelport\UniversalRecord\StructType\DeliveryAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDeliveryAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeliveryAddress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeliveryAddressForChoiceConstraintFromSetDeliveryAddress($value): string
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
                    throw new InvalidArgumentException(sprintf('The property DeliveryAddress can\'t be set as the property %s is already set. Only one property must be set among these properties: DeliveryAddress, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DeliveryAddress value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress[] $deliveryAddress
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setDeliveryAddress(?array $deliveryAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($deliveryAddressArrayErrorMessage = self::validateDeliveryAddressForArrayConstraintFromSetDeliveryAddress($deliveryAddress))) {
            throw new InvalidArgumentException($deliveryAddressArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(DeliveryAddress)
        if ('' !== ($deliveryAddressChoiceErrorMessage = self::validateDeliveryAddressForChoiceConstraintFromSetDeliveryAddress($deliveryAddress))) {
            throw new InvalidArgumentException($deliveryAddressChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($deliveryAddress) && count($deliveryAddress) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($deliveryAddress)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($deliveryAddress) && count($deliveryAddress) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($deliveryAddress)), __LINE__);
        }
        if (is_null($deliveryAddress) || (is_array($deliveryAddress) && empty($deliveryAddress))) {
            unset($this->DeliveryAddress);
        } else {
            $this->DeliveryAddress = $deliveryAddress;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToDeliveryAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToDeliveryAddress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToDeliveryAddress($value): string
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
                    throw new InvalidArgumentException(sprintf('The property DeliveryAddress can\'t be set as the property %s is already set. Only one property must be set among these properties: DeliveryAddress, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to DeliveryAddress value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToDeliveryAddress(\Travelport\UniversalRecord\StructType\DeliveryAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\DeliveryAddress) {
            throw new InvalidArgumentException(sprintf('The DeliveryAddress property can only contain items of type \Travelport\UniversalRecord\StructType\DeliveryAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(DeliveryAddress)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToDeliveryAddress($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->DeliveryAddress) && count($this->DeliveryAddress) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->DeliveryAddress)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->DeliveryAddress) && count($this->DeliveryAddress) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->DeliveryAddress)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setCollectionAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCollectionAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCollectionAddressForArrayConstraintFromSetCollectionAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripCollectionAddressItem) {
            // validation for constraint: itemType
            if (!$savedTripCollectionAddressItem instanceof \Travelport\UniversalRecord\StructType\CollectionAddress) {
                $invalidValues[] = is_object($savedTripCollectionAddressItem) ? get_class($savedTripCollectionAddressItem) : sprintf('%s(%s)', gettype($savedTripCollectionAddressItem), var_export($savedTripCollectionAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CollectionAddress property can only contain items of type \Travelport\UniversalRecord\StructType\CollectionAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCollectionAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCollectionAddress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCollectionAddressForChoiceConstraintFromSetCollectionAddress($value): string
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
                    throw new InvalidArgumentException(sprintf('The property CollectionAddress can\'t be set as the property %s is already set. Only one property must be set among these properties: CollectionAddress, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CollectionAddress value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress[] $collectionAddress
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setCollectionAddress(?array $collectionAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($collectionAddressArrayErrorMessage = self::validateCollectionAddressForArrayConstraintFromSetCollectionAddress($collectionAddress))) {
            throw new InvalidArgumentException($collectionAddressArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(CollectionAddress)
        if ('' !== ($collectionAddressChoiceErrorMessage = self::validateCollectionAddressForChoiceConstraintFromSetCollectionAddress($collectionAddress))) {
            throw new InvalidArgumentException($collectionAddressChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($collectionAddress) && count($collectionAddress) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($collectionAddress)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($collectionAddress) && count($collectionAddress) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($collectionAddress)), __LINE__);
        }
        if (is_null($collectionAddress) || (is_array($collectionAddress) && empty($collectionAddress))) {
            unset($this->CollectionAddress);
        } else {
            $this->CollectionAddress = $collectionAddress;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToCollectionAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToCollectionAddress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToCollectionAddress($value): string
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
                    throw new InvalidArgumentException(sprintf('The property CollectionAddress can\'t be set as the property %s is already set. Only one property must be set among these properties: CollectionAddress, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to CollectionAddress value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToCollectionAddress(\Travelport\UniversalRecord\StructType\CollectionAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CollectionAddress) {
            throw new InvalidArgumentException(sprintf('The CollectionAddress property can only contain items of type \Travelport\UniversalRecord\StructType\CollectionAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(CollectionAddress)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToCollectionAddress($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->CollectionAddress) && count($this->CollectionAddress) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->CollectionAddress)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CollectionAddress) && count($this->CollectionAddress) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CollectionAddress)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setFlightArrivalInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightArrivalInformation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightArrivalInformationForArrayConstraintFromSetFlightArrivalInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripFlightArrivalInformationItem) {
            // validation for constraint: itemType
            if (!$savedTripFlightArrivalInformationItem instanceof \Travelport\UniversalRecord\StructType\FlightArrivalInformation) {
                $invalidValues[] = is_object($savedTripFlightArrivalInformationItem) ? get_class($savedTripFlightArrivalInformationItem) : sprintf('%s(%s)', gettype($savedTripFlightArrivalInformationItem), var_export($savedTripFlightArrivalInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightArrivalInformation property can only contain items of type \Travelport\UniversalRecord\StructType\FlightArrivalInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFlightArrivalInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightArrivalInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFlightArrivalInformationForChoiceConstraintFromSetFlightArrivalInformation($value): string
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
                    throw new InvalidArgumentException(sprintf('The property FlightArrivalInformation can\'t be set as the property %s is already set. Only one property must be set among these properties: FlightArrivalInformation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FlightArrivalInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation[] $flightArrivalInformation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setFlightArrivalInformation(?array $flightArrivalInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightArrivalInformationArrayErrorMessage = self::validateFlightArrivalInformationForArrayConstraintFromSetFlightArrivalInformation($flightArrivalInformation))) {
            throw new InvalidArgumentException($flightArrivalInformationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(FlightArrivalInformation)
        if ('' !== ($flightArrivalInformationChoiceErrorMessage = self::validateFlightArrivalInformationForChoiceConstraintFromSetFlightArrivalInformation($flightArrivalInformation))) {
            throw new InvalidArgumentException($flightArrivalInformationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($flightArrivalInformation) && count($flightArrivalInformation) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($flightArrivalInformation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($flightArrivalInformation) && count($flightArrivalInformation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($flightArrivalInformation)), __LINE__);
        }
        if (is_null($flightArrivalInformation) || (is_array($flightArrivalInformation) && empty($flightArrivalInformation))) {
            unset($this->FlightArrivalInformation);
        } else {
            $this->FlightArrivalInformation = $flightArrivalInformation;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToFlightArrivalInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToFlightArrivalInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToFlightArrivalInformation($value): string
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
                    throw new InvalidArgumentException(sprintf('The property FlightArrivalInformation can\'t be set as the property %s is already set. Only one property must be set among these properties: FlightArrivalInformation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to FlightArrivalInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToFlightArrivalInformation(\Travelport\UniversalRecord\StructType\FlightArrivalInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FlightArrivalInformation) {
            throw new InvalidArgumentException(sprintf('The FlightArrivalInformation property can only contain items of type \Travelport\UniversalRecord\StructType\FlightArrivalInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(FlightArrivalInformation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToFlightArrivalInformation($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->FlightArrivalInformation) && count($this->FlightArrivalInformation) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->FlightArrivalInformation)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FlightArrivalInformation) && count($this->FlightArrivalInformation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FlightArrivalInformation)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVehicle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicle method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleForArrayConstraintFromSetVehicle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripVehicleItem) {
            // validation for constraint: itemType
            if (!$savedTripVehicleItem instanceof \Travelport\UniversalRecord\StructType\Vehicle) {
                $invalidValues[] = is_object($savedTripVehicleItem) ? get_class($savedTripVehicleItem) : sprintf('%s(%s)', gettype($savedTripVehicleItem), var_export($savedTripVehicleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Vehicle property can only contain items of type \Travelport\UniversalRecord\StructType\Vehicle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicle method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleForChoiceConstraintFromSetVehicle($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Vehicle can\'t be set as the property %s is already set. Only one property must be set among these properties: Vehicle, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Vehicle value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Vehicle[] $vehicle
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVehicle(?array $vehicle = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleArrayErrorMessage = self::validateVehicleForArrayConstraintFromSetVehicle($vehicle))) {
            throw new InvalidArgumentException($vehicleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Vehicle)
        if ('' !== ($vehicleChoiceErrorMessage = self::validateVehicleForChoiceConstraintFromSetVehicle($vehicle))) {
            throw new InvalidArgumentException($vehicleChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($vehicle) && count($vehicle) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($vehicle)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicle) && count($vehicle) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicle)), __LINE__);
        }
        if (is_null($vehicle) || (is_array($vehicle) && empty($vehicle))) {
            unset($this->Vehicle);
        } else {
            $this->Vehicle = $vehicle;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToVehicle method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToVehicle method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToVehicle($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Vehicle can\'t be set as the property %s is already set. Only one property must be set among these properties: Vehicle, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to Vehicle value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Vehicle $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToVehicle(\Travelport\UniversalRecord\StructType\Vehicle $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Vehicle) {
            throw new InvalidArgumentException(sprintf('The Vehicle property can only contain items of type \Travelport\UniversalRecord\StructType\Vehicle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Vehicle)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToVehicle($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->Vehicle) && count($this->Vehicle) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->Vehicle)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Vehicle) && count($this->Vehicle) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Vehicle)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVehicleTripNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleTripNote method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleTripNoteForArrayConstraintFromSetVehicleTripNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripVehicleTripNoteItem) {
            // validation for constraint: itemType
            if (!$savedTripVehicleTripNoteItem instanceof \Travelport\UniversalRecord\StructType\TypeSavedTripNote) {
                $invalidValues[] = is_object($savedTripVehicleTripNoteItem) ? get_class($savedTripVehicleTripNoteItem) : sprintf('%s(%s)', gettype($savedTripVehicleTripNoteItem), var_export($savedTripVehicleTripNoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleTripNote property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSavedTripNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleTripNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $vehicleTripNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVehicleTripNote(?array $vehicleTripNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleTripNoteArrayErrorMessage = self::validateVehicleTripNoteForArrayConstraintFromSetVehicleTripNote($vehicleTripNote))) {
            throw new InvalidArgumentException($vehicleTripNoteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($vehicleTripNote) && count($vehicleTripNote) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($vehicleTripNote)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSavedTripNote) {
            throw new InvalidArgumentException(sprintf('The VehicleTripNote property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSavedTripNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->VehicleTripNote) && count($this->VehicleTripNote) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->VehicleTripNote)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVendorLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVendorLocation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVendorLocationForArrayConstraintFromSetVendorLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripVendorLocationItem) {
            // validation for constraint: itemType
            if (!$savedTripVendorLocationItem instanceof \Travelport\UniversalRecord\StructType\VendorLocation) {
                $invalidValues[] = is_object($savedTripVendorLocationItem) ? get_class($savedTripVendorLocationItem) : sprintf('%s(%s)', gettype($savedTripVendorLocationItem), var_export($savedTripVendorLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VendorLocation property can only contain items of type \Travelport\UniversalRecord\StructType\VendorLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VendorLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VendorLocation[] $vendorLocation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($vendorLocationArrayErrorMessage = self::validateVendorLocationForArrayConstraintFromSetVendorLocation($vendorLocation))) {
            throw new InvalidArgumentException($vendorLocationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vendorLocation) && count($vendorLocation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vendorLocation)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VendorLocation) {
            throw new InvalidArgumentException(sprintf('The VendorLocation property can only contain items of type \Travelport\UniversalRecord\StructType\VendorLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VendorLocation) && count($this->VendorLocation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VendorLocation)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelProperty method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelPropertyForArrayConstraintFromSetHotelProperty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripHotelPropertyItem) {
            // validation for constraint: itemType
            if (!$savedTripHotelPropertyItem instanceof \Travelport\UniversalRecord\StructType\HotelProperty) {
                $invalidValues[] = is_object($savedTripHotelPropertyItem) ? get_class($savedTripHotelPropertyItem) : sprintf('%s(%s)', gettype($savedTripHotelPropertyItem), var_export($savedTripHotelPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelProperty property can only contain items of type \Travelport\UniversalRecord\StructType\HotelProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelProperty method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelPropertyForChoiceConstraintFromSetHotelProperty($value): string
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
                    throw new InvalidArgumentException(sprintf('The property HotelProperty can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelProperty, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelProperty value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelProperty[] $hotelProperty
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelProperty(?array $hotelProperty = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelPropertyArrayErrorMessage = self::validateHotelPropertyForArrayConstraintFromSetHotelProperty($hotelProperty))) {
            throw new InvalidArgumentException($hotelPropertyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(HotelProperty)
        if ('' !== ($hotelPropertyChoiceErrorMessage = self::validateHotelPropertyForChoiceConstraintFromSetHotelProperty($hotelProperty))) {
            throw new InvalidArgumentException($hotelPropertyChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($hotelProperty) && count($hotelProperty) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($hotelProperty)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelProperty) && count($hotelProperty) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelProperty)), __LINE__);
        }
        if (is_null($hotelProperty) || (is_array($hotelProperty) && empty($hotelProperty))) {
            unset($this->HotelProperty);
        } else {
            $this->HotelProperty = $hotelProperty;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToHotelProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToHotelProperty method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToHotelProperty($value): string
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
                    throw new InvalidArgumentException(sprintf('The property HotelProperty can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelProperty, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to HotelProperty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelProperty(\Travelport\UniversalRecord\StructType\HotelProperty $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelProperty) {
            throw new InvalidArgumentException(sprintf('The HotelProperty property can only contain items of type \Travelport\UniversalRecord\StructType\HotelProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(HotelProperty)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToHotelProperty($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->HotelProperty) && count($this->HotelProperty) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->HotelProperty)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelProperty) && count($this->HotelProperty) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelProperty)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelStay method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelStay method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelStayForArrayConstraintFromSetHotelStay(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripHotelStayItem) {
            // validation for constraint: itemType
            if (!$savedTripHotelStayItem instanceof \Travelport\UniversalRecord\StructType\HotelStay) {
                $invalidValues[] = is_object($savedTripHotelStayItem) ? get_class($savedTripHotelStayItem) : sprintf('%s(%s)', gettype($savedTripHotelStayItem), var_export($savedTripHotelStayItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelStay property can only contain items of type \Travelport\UniversalRecord\StructType\HotelStay, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelStay method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelStay method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelStayForChoiceConstraintFromSetHotelStay($value): string
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
                    throw new InvalidArgumentException(sprintf('The property HotelStay can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelStay, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelStay value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelStay[] $hotelStay
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelStay(?array $hotelStay = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelStayArrayErrorMessage = self::validateHotelStayForArrayConstraintFromSetHotelStay($hotelStay))) {
            throw new InvalidArgumentException($hotelStayArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(HotelStay)
        if ('' !== ($hotelStayChoiceErrorMessage = self::validateHotelStayForChoiceConstraintFromSetHotelStay($hotelStay))) {
            throw new InvalidArgumentException($hotelStayChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($hotelStay) && count($hotelStay) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($hotelStay)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelStay) && count($hotelStay) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelStay)), __LINE__);
        }
        if (is_null($hotelStay) || (is_array($hotelStay) && empty($hotelStay))) {
            unset($this->HotelStay);
        } else {
            $this->HotelStay = $hotelStay;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToHotelStay method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToHotelStay method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToHotelStay($value): string
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
                    throw new InvalidArgumentException(sprintf('The property HotelStay can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelStay, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to HotelStay value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelStay $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelStay(\Travelport\UniversalRecord\StructType\HotelStay $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelStay) {
            throw new InvalidArgumentException(sprintf('The HotelStay property can only contain items of type \Travelport\UniversalRecord\StructType\HotelStay, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(HotelStay)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToHotelStay($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->HotelStay) && count($this->HotelStay) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->HotelStay)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelStay) && count($this->HotelStay) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelStay)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelRulesModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRulesModifiers method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRulesModifiersForArrayConstraintFromSetHotelRulesModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripHotelRulesModifiersItem) {
            // validation for constraint: itemType
            if (!$savedTripHotelRulesModifiersItem instanceof \Travelport\UniversalRecord\StructType\HotelRulesModifiers) {
                $invalidValues[] = is_object($savedTripHotelRulesModifiersItem) ? get_class($savedTripHotelRulesModifiersItem) : sprintf('%s(%s)', gettype($savedTripHotelRulesModifiersItem), var_export($savedTripHotelRulesModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRulesModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\HotelRulesModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelRulesModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRulesModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelRulesModifiersForChoiceConstraintFromSetHotelRulesModifiers($value): string
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
                    throw new InvalidArgumentException(sprintf('The property HotelRulesModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelRulesModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelRulesModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRulesModifiers[] $hotelRulesModifiers
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelRulesModifiers(?array $hotelRulesModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRulesModifiersArrayErrorMessage = self::validateHotelRulesModifiersForArrayConstraintFromSetHotelRulesModifiers($hotelRulesModifiers))) {
            throw new InvalidArgumentException($hotelRulesModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(HotelRulesModifiers)
        if ('' !== ($hotelRulesModifiersChoiceErrorMessage = self::validateHotelRulesModifiersForChoiceConstraintFromSetHotelRulesModifiers($hotelRulesModifiers))) {
            throw new InvalidArgumentException($hotelRulesModifiersChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($hotelRulesModifiers) && count($hotelRulesModifiers) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($hotelRulesModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelRulesModifiers) && count($hotelRulesModifiers) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelRulesModifiers)), __LINE__);
        }
        if (is_null($hotelRulesModifiers) || (is_array($hotelRulesModifiers) && empty($hotelRulesModifiers))) {
            unset($this->HotelRulesModifiers);
        } else {
            $this->HotelRulesModifiers = $hotelRulesModifiers;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToHotelRulesModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToHotelRulesModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToHotelRulesModifiers($value): string
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
                    throw new InvalidArgumentException(sprintf('The property HotelRulesModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelRulesModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to HotelRulesModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRulesModifiers $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelRulesModifiers(\Travelport\UniversalRecord\StructType\HotelRulesModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelRulesModifiers) {
            throw new InvalidArgumentException(sprintf('The HotelRulesModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\HotelRulesModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(HotelRulesModifiers)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToHotelRulesModifiers($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->HotelRulesModifiers) && count($this->HotelRulesModifiers) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->HotelRulesModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelRulesModifiers) && count($this->HotelRulesModifiers) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelRulesModifiers)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelDetailsModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelDetailsModifiers method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelDetailsModifiersForArrayConstraintFromSetHotelDetailsModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripHotelDetailsModifiersItem) {
            // validation for constraint: itemType
            if (!$savedTripHotelDetailsModifiersItem instanceof \Travelport\UniversalRecord\StructType\HotelDetailsModifiers) {
                $invalidValues[] = is_object($savedTripHotelDetailsModifiersItem) ? get_class($savedTripHotelDetailsModifiersItem) : sprintf('%s(%s)', gettype($savedTripHotelDetailsModifiersItem), var_export($savedTripHotelDetailsModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelDetailsModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\HotelDetailsModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelDetailsModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelDetailsModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelDetailsModifiersForChoiceConstraintFromSetHotelDetailsModifiers($value): string
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
                    throw new InvalidArgumentException(sprintf('The property HotelDetailsModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelDetailsModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelDetailsModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelDetailsModifiers[] $hotelDetailsModifiers
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelDetailsModifiers(?array $hotelDetailsModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelDetailsModifiersArrayErrorMessage = self::validateHotelDetailsModifiersForArrayConstraintFromSetHotelDetailsModifiers($hotelDetailsModifiers))) {
            throw new InvalidArgumentException($hotelDetailsModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(HotelDetailsModifiers)
        if ('' !== ($hotelDetailsModifiersChoiceErrorMessage = self::validateHotelDetailsModifiersForChoiceConstraintFromSetHotelDetailsModifiers($hotelDetailsModifiers))) {
            throw new InvalidArgumentException($hotelDetailsModifiersChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($hotelDetailsModifiers) && count($hotelDetailsModifiers) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($hotelDetailsModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelDetailsModifiers) && count($hotelDetailsModifiers) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelDetailsModifiers)), __LINE__);
        }
        if (is_null($hotelDetailsModifiers) || (is_array($hotelDetailsModifiers) && empty($hotelDetailsModifiers))) {
            unset($this->HotelDetailsModifiers);
        } else {
            $this->HotelDetailsModifiers = $hotelDetailsModifiers;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToHotelDetailsModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToHotelDetailsModifiers method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToHotelDetailsModifiers($value): string
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
                    throw new InvalidArgumentException(sprintf('The property HotelDetailsModifiers can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelDetailsModifiers, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to HotelDetailsModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelDetailsModifiers $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelDetailsModifiers(\Travelport\UniversalRecord\StructType\HotelDetailsModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelDetailsModifiers) {
            throw new InvalidArgumentException(sprintf('The HotelDetailsModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\HotelDetailsModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(HotelDetailsModifiers)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToHotelDetailsModifiers($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->HotelDetailsModifiers) && count($this->HotelDetailsModifiers) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->HotelDetailsModifiers)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelDetailsModifiers) && count($this->HotelDetailsModifiers) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelDetailsModifiers)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelRateDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRateDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRateDetailForArrayConstraintFromSetHotelRateDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripHotelRateDetailItem) {
            // validation for constraint: itemType
            if (!$savedTripHotelRateDetailItem instanceof \Travelport\UniversalRecord\StructType\HotelRateDetail) {
                $invalidValues[] = is_object($savedTripHotelRateDetailItem) ? get_class($savedTripHotelRateDetailItem) : sprintf('%s(%s)', gettype($savedTripHotelRateDetailItem), var_export($savedTripHotelRateDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRateDetail property can only contain items of type \Travelport\UniversalRecord\StructType\HotelRateDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelRateDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRateDetail method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelRateDetailForChoiceConstraintFromSetHotelRateDetail($value): string
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
                    throw new InvalidArgumentException(sprintf('The property HotelRateDetail can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelRateDetail, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelRateDetail value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail[] $hotelRateDetail
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelRateDetail(?array $hotelRateDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRateDetailArrayErrorMessage = self::validateHotelRateDetailForArrayConstraintFromSetHotelRateDetail($hotelRateDetail))) {
            throw new InvalidArgumentException($hotelRateDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(HotelRateDetail)
        if ('' !== ($hotelRateDetailChoiceErrorMessage = self::validateHotelRateDetailForChoiceConstraintFromSetHotelRateDetail($hotelRateDetail))) {
            throw new InvalidArgumentException($hotelRateDetailChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($hotelRateDetail) && count($hotelRateDetail) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($hotelRateDetail)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelRateDetail) && count($hotelRateDetail) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelRateDetail)), __LINE__);
        }
        if (is_null($hotelRateDetail) || (is_array($hotelRateDetail) && empty($hotelRateDetail))) {
            unset($this->HotelRateDetail);
        } else {
            $this->HotelRateDetail = $hotelRateDetail;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToHotelRateDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToHotelRateDetail method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToHotelRateDetail($value): string
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
                    throw new InvalidArgumentException(sprintf('The property HotelRateDetail can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelRateDetail, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToHotelRateDetail(\Travelport\UniversalRecord\StructType\HotelRateDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelRateDetail) {
            throw new InvalidArgumentException(sprintf('The HotelRateDetail property can only contain items of type \Travelport\UniversalRecord\StructType\HotelRateDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(HotelRateDetail)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToHotelRateDetail($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->HotelRateDetail) && count($this->HotelRateDetail) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->HotelRateDetail)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelRateDetail) && count($this->HotelRateDetail) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelRateDetail)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setPromotionCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotionCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotionCodeForArrayConstraintFromSetPromotionCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripPromotionCodeItem) {
            // validation for constraint: itemType
            if (!$savedTripPromotionCodeItem instanceof \Travelport\UniversalRecord\StructType\PromotionCode) {
                $invalidValues[] = is_object($savedTripPromotionCodeItem) ? get_class($savedTripPromotionCodeItem) : sprintf('%s(%s)', gettype($savedTripPromotionCodeItem), var_export($savedTripPromotionCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromotionCode property can only contain items of type \Travelport\UniversalRecord\StructType\PromotionCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPromotionCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotionCode method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePromotionCodeForChoiceConstraintFromSetPromotionCode($value): string
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
                    throw new InvalidArgumentException(sprintf('The property PromotionCode can\'t be set as the property %s is already set. Only one property must be set among these properties: PromotionCode, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PromotionCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PromotionCode[] $promotionCode
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setPromotionCode(?array $promotionCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($promotionCodeArrayErrorMessage = self::validatePromotionCodeForArrayConstraintFromSetPromotionCode($promotionCode))) {
            throw new InvalidArgumentException($promotionCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(PromotionCode)
        if ('' !== ($promotionCodeChoiceErrorMessage = self::validatePromotionCodeForChoiceConstraintFromSetPromotionCode($promotionCode))) {
            throw new InvalidArgumentException($promotionCodeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($promotionCode) && count($promotionCode) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($promotionCode)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($promotionCode) && count($promotionCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($promotionCode)), __LINE__);
        }
        if (is_null($promotionCode) || (is_array($promotionCode) && empty($promotionCode))) {
            unset($this->PromotionCode);
        } else {
            $this->PromotionCode = $promotionCode;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToPromotionCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToPromotionCode method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToPromotionCode($value): string
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
                    throw new InvalidArgumentException(sprintf('The property PromotionCode can\'t be set as the property %s is already set. Only one property must be set among these properties: PromotionCode, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to PromotionCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PromotionCode $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToPromotionCode(\Travelport\UniversalRecord\StructType\PromotionCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PromotionCode) {
            throw new InvalidArgumentException(sprintf('The PromotionCode property can only contain items of type \Travelport\UniversalRecord\StructType\PromotionCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(PromotionCode)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToPromotionCode($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->PromotionCode) && count($this->PromotionCode) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->PromotionCode)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PromotionCode) && count($this->PromotionCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PromotionCode)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelTripNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelTripNote method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelTripNoteForArrayConstraintFromSetHotelTripNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripHotelTripNoteItem) {
            // validation for constraint: itemType
            if (!$savedTripHotelTripNoteItem instanceof \Travelport\UniversalRecord\StructType\TypeSavedTripNote) {
                $invalidValues[] = is_object($savedTripHotelTripNoteItem) ? get_class($savedTripHotelTripNoteItem) : sprintf('%s(%s)', gettype($savedTripHotelTripNoteItem), var_export($savedTripHotelTripNoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelTripNote property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSavedTripNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelTripNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $hotelTripNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setHotelTripNote(?array $hotelTripNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelTripNoteArrayErrorMessage = self::validateHotelTripNoteForArrayConstraintFromSetHotelTripNote($hotelTripNote))) {
            throw new InvalidArgumentException($hotelTripNoteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($hotelTripNote) && count($hotelTripNote) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($hotelTripNote)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSavedTripNote) {
            throw new InvalidArgumentException(sprintf('The HotelTripNote property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSavedTripNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->HotelTripNote) && count($this->HotelTripNote) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->HotelTripNote)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setRailPricingSolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailPricingSolution method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailPricingSolutionForArrayConstraintFromSetRailPricingSolution(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripRailPricingSolutionItem) {
            // validation for constraint: itemType
            if (!$savedTripRailPricingSolutionItem instanceof \Travelport\UniversalRecord\StructType\RailPricingSolution) {
                $invalidValues[] = is_object($savedTripRailPricingSolutionItem) ? get_class($savedTripRailPricingSolutionItem) : sprintf('%s(%s)', gettype($savedTripRailPricingSolutionItem), var_export($savedTripRailPricingSolutionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailPricingSolution property can only contain items of type \Travelport\UniversalRecord\StructType\RailPricingSolution, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailPricingSolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailPricingSolution method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailPricingSolutionForChoiceConstraintFromSetRailPricingSolution($value): string
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
                    throw new InvalidArgumentException(sprintf('The property RailPricingSolution can\'t be set as the property %s is already set. Only one property must be set among these properties: RailPricingSolution, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailPricingSolution value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolution[] $railPricingSolution
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setRailPricingSolution(?array $railPricingSolution = null): self
    {
        // validation for constraint: array
        if ('' !== ($railPricingSolutionArrayErrorMessage = self::validateRailPricingSolutionForArrayConstraintFromSetRailPricingSolution($railPricingSolution))) {
            throw new InvalidArgumentException($railPricingSolutionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailPricingSolution)
        if ('' !== ($railPricingSolutionChoiceErrorMessage = self::validateRailPricingSolutionForChoiceConstraintFromSetRailPricingSolution($railPricingSolution))) {
            throw new InvalidArgumentException($railPricingSolutionChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railPricingSolution) && count($railPricingSolution) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railPricingSolution)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railPricingSolution) && count($railPricingSolution) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railPricingSolution)), __LINE__);
        }
        if (is_null($railPricingSolution) || (is_array($railPricingSolution) && empty($railPricingSolution))) {
            unset($this->RailPricingSolution);
        } else {
            $this->RailPricingSolution = $railPricingSolution;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToRailPricingSolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailPricingSolution method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToRailPricingSolution($value): string
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
                    throw new InvalidArgumentException(sprintf('The property RailPricingSolution can\'t be set as the property %s is already set. Only one property must be set among these properties: RailPricingSolution, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolution $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToRailPricingSolution(\Travelport\UniversalRecord\StructType\RailPricingSolution $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailPricingSolution) {
            throw new InvalidArgumentException(sprintf('The RailPricingSolution property can only contain items of type \Travelport\UniversalRecord\StructType\RailPricingSolution, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailPricingSolution)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToRailPricingSolution($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailPricingSolution) && count($this->RailPricingSolution) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailPricingSolution)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailPricingSolution) && count($this->RailPricingSolution) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailPricingSolution)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setRailFareNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareNote method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailFareNoteForArrayConstraintFromSetRailFareNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripRailFareNoteItem) {
            // validation for constraint: itemType
            if (!$savedTripRailFareNoteItem instanceof \Travelport\UniversalRecord\StructType\RailFareNote) {
                $invalidValues[] = is_object($savedTripRailFareNoteItem) ? get_class($savedTripRailFareNoteItem) : sprintf('%s(%s)', gettype($savedTripRailFareNoteItem), var_export($savedTripRailFareNoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailFareNote property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailFareNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareNote method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailFareNoteForChoiceConstraintFromSetRailFareNote($value): string
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
                    throw new InvalidArgumentException(sprintf('The property RailFareNote can\'t be set as the property %s is already set. Only one property must be set among these properties: RailFareNote, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailFareNote value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareNote[] $railFareNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setRailFareNote(?array $railFareNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($railFareNoteArrayErrorMessage = self::validateRailFareNoteForArrayConstraintFromSetRailFareNote($railFareNote))) {
            throw new InvalidArgumentException($railFareNoteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailFareNote)
        if ('' !== ($railFareNoteChoiceErrorMessage = self::validateRailFareNoteForChoiceConstraintFromSetRailFareNote($railFareNote))) {
            throw new InvalidArgumentException($railFareNoteChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railFareNote) && count($railFareNote) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railFareNote)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railFareNote) && count($railFareNote) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railFareNote)), __LINE__);
        }
        if (is_null($railFareNote) || (is_array($railFareNote) && empty($railFareNote))) {
            unset($this->RailFareNote);
        } else {
            $this->RailFareNote = $railFareNote;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToRailFareNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailFareNote method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToRailFareNote($value): string
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
                    throw new InvalidArgumentException(sprintf('The property RailFareNote can\'t be set as the property %s is already set. Only one property must be set among these properties: RailFareNote, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailFareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareNote $item
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function addToRailFareNote(\Travelport\UniversalRecord\StructType\RailFareNote $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailFareNote) {
            throw new InvalidArgumentException(sprintf('The RailFareNote property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailFareNote)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToRailFareNote($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailFareNote) && count($this->RailFareNote) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailFareNote)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailFareNote) && count($this->RailFareNote) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailFareNote)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setRailTripNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailTripNote method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailTripNoteForArrayConstraintFromSetRailTripNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripRailTripNoteItem) {
            // validation for constraint: itemType
            if (!$savedTripRailTripNoteItem instanceof \Travelport\UniversalRecord\StructType\TypeSavedTripNote) {
                $invalidValues[] = is_object($savedTripRailTripNoteItem) ? get_class($savedTripRailTripNoteItem) : sprintf('%s(%s)', gettype($savedTripRailTripNoteItem), var_export($savedTripRailTripNoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailTripNote property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSavedTripNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailTripNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $railTripNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setRailTripNote(?array $railTripNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($railTripNoteArrayErrorMessage = self::validateRailTripNoteForArrayConstraintFromSetRailTripNote($railTripNote))) {
            throw new InvalidArgumentException($railTripNoteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($railTripNote) && count($railTripNote) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($railTripNote)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSavedTripNote) {
            throw new InvalidArgumentException(sprintf('The RailTripNote property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSavedTripNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->RailTripNote) && count($this->RailTripNote) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->RailTripNote)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setSavedTripNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSavedTripNote method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSavedTripNoteForArrayConstraintFromSetSavedTripNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripSavedTripNoteItem) {
            // validation for constraint: itemType
            if (!$savedTripSavedTripNoteItem instanceof \Travelport\UniversalRecord\StructType\TypeSavedTripNote) {
                $invalidValues[] = is_object($savedTripSavedTripNoteItem) ? get_class($savedTripSavedTripNoteItem) : sprintf('%s(%s)', gettype($savedTripSavedTripNoteItem), var_export($savedTripSavedTripNoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SavedTripNote property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSavedTripNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SavedTripNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSavedTripNote[] $savedTripNote
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setSavedTripNote(?array $savedTripNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($savedTripNoteArrayErrorMessage = self::validateSavedTripNoteForArrayConstraintFromSetSavedTripNote($savedTripNote))) {
            throw new InvalidArgumentException($savedTripNoteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($savedTripNote) && count($savedTripNote) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($savedTripNote)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSavedTripNote) {
            throw new InvalidArgumentException(sprintf('The SavedTripNote property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSavedTripNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->SavedTripNote) && count($this->SavedTripNote) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->SavedTripNote)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setSavedTripActivity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSavedTripActivity method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSavedTripActivityForArrayConstraintFromSetSavedTripActivity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripSavedTripActivityItem) {
            // validation for constraint: itemType
            if (!$savedTripSavedTripActivityItem instanceof \Travelport\UniversalRecord\StructType\SavedTripActivity) {
                $invalidValues[] = is_object($savedTripSavedTripActivityItem) ? get_class($savedTripSavedTripActivityItem) : sprintf('%s(%s)', gettype($savedTripSavedTripActivityItem), var_export($savedTripSavedTripActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SavedTripActivity property can only contain items of type \Travelport\UniversalRecord\StructType\SavedTripActivity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SavedTripActivity value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SavedTripActivity[] $savedTripActivity
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setSavedTripActivity(?array $savedTripActivity = null): self
    {
        // validation for constraint: array
        if ('' !== ($savedTripActivityArrayErrorMessage = self::validateSavedTripActivityForArrayConstraintFromSetSavedTripActivity($savedTripActivity))) {
            throw new InvalidArgumentException($savedTripActivityArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($savedTripActivity) && count($savedTripActivity) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($savedTripActivity)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SavedTripActivity) {
            throw new InvalidArgumentException(sprintf('The SavedTripActivity property can only contain items of type \Travelport\UniversalRecord\StructType\SavedTripActivity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SavedTripActivity) && count($this->SavedTripActivity) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SavedTripActivity)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setProfileAssociation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfileAssociation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfileAssociationForArrayConstraintFromSetProfileAssociation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripProfileAssociationItem) {
            // validation for constraint: itemType
            if (!$savedTripProfileAssociationItem instanceof \Travelport\UniversalRecord\StructType\ProfileAssociation) {
                $invalidValues[] = is_object($savedTripProfileAssociationItem) ? get_class($savedTripProfileAssociationItem) : sprintf('%s(%s)', gettype($savedTripProfileAssociationItem), var_export($savedTripProfileAssociationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProfileAssociation property can only contain items of type \Travelport\UniversalRecord\StructType\ProfileAssociation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProfileAssociation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProfileAssociation[] $profileAssociation
     * @return \Travelport\UniversalRecord\StructType\SavedTrip
     */
    public function setProfileAssociation(?array $profileAssociation = null): self
    {
        // validation for constraint: array
        if ('' !== ($profileAssociationArrayErrorMessage = self::validateProfileAssociationForArrayConstraintFromSetProfileAssociation($profileAssociation))) {
            throw new InvalidArgumentException($profileAssociationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($profileAssociation) && count($profileAssociation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($profileAssociation)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ProfileAssociation) {
            throw new InvalidArgumentException(sprintf('The ProfileAssociation property can only contain items of type \Travelport\UniversalRecord\StructType\ProfileAssociation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProfileAssociation) && count($this->ProfileAssociation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProfileAssociation)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDate, true), gettype($createDate)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedDate, true), gettype($modifiedDate)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($createdByAgent) && !is_string($createdByAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdByAgent, true), gettype($createdByAgent)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($modifiedByAgent) && !is_string($modifiedByAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedByAgent, true), gettype($modifiedByAgent)), __LINE__);
        }
        $this->ModifiedByAgent = $modifiedByAgent;
        
        return $this;
    }
}
