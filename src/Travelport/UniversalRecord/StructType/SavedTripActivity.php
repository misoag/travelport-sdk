<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTripActivity StructType
 * Meta information extracted from the WSDL
 * - documentation: This element ties together related objects for a saved trip.
 * @subpackage Structs
 */
class SavedTripActivity extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The SearchPassengerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\SearchPassengerRef[]
     */
    public ?array $SearchPassengerRef = null;
    /**
     * The PointOfSaleRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PointOfSaleRef[]
     */
    public ?array $PointOfSaleRef = null;
    /**
     * The AccountingRemarkRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\AccountingRemarkRef[]
     */
    public ?array $AccountingRemarkRef = null;
    /**
     * The GeneralRemarkRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\GeneralRemarkRef[]
     */
    public ?array $GeneralRemarkRef = null;
    /**
     * The AirPricingModifierRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\AirPricingModifierRef[]
     */
    public ?array $AirPricingModifierRef = null;
    /**
     * The AirPricingSolutionRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\AirPricingSolutionRef[]
     */
    public ?array $AirPricingSolutionRef = null;
    /**
     * The VehicleSearchModifiersRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef[]
     */
    public ?array $VehicleSearchModifiersRef = null;
    /**
     * The VehicleDateLocationRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VehicleDateLocationRef[]
     */
    public ?array $VehicleDateLocationRef = null;
    /**
     * The SpecialEquipmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\SpecialEquipmentRef[]
     */
    public ?array $SpecialEquipmentRef = null;
    /**
     * The VehicleSpecialRequestRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef[]
     */
    public ?array $VehicleSpecialRequestRef = null;
    /**
     * The PaymentInformationRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PaymentInformationRef[]
     */
    public ?array $PaymentInformationRef = null;
    /**
     * The DeliveryAddressRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\DeliveryAddressRef[]
     */
    public ?array $DeliveryAddressRef = null;
    /**
     * The CollectionAddressRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\CollectionAddressRef[]
     */
    public ?array $CollectionAddressRef = null;
    /**
     * The FlightArrivalInformationRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef[]
     */
    public ?array $FlightArrivalInformationRef = null;
    /**
     * The VehicleRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VehicleRef[]
     */
    public ?array $VehicleRef = null;
    /**
     * The VendorLocationRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VendorLocationRef[]
     */
    public ?array $VendorLocationRef = null;
    /**
     * The HotelPropertyRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelPropertyRef[]
     */
    public ?array $HotelPropertyRef = null;
    /**
     * The HotelStayRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelStayRef[]
     */
    public ?array $HotelStayRef = null;
    /**
     * The HotelRulesModifiersRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef[]
     */
    public ?array $HotelRulesModifiersRef = null;
    /**
     * The HotelDetailsModifiersRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef[]
     */
    public ?array $HotelDetailsModifiersRef = null;
    /**
     * The HotelRateDetailRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelRateDetailRef[]
     */
    public ?array $HotelRateDetailRef = null;
    /**
     * The PromotionCodeRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PromotionCodeRef[]
     */
    public ?array $PromotionCodeRef = null;
    /**
     * The RailPricingSolutionRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\RailPricingSolutionRef[]
     */
    public ?array $RailPricingSolutionRef = null;
    /**
     * Constructor method for SavedTripActivity
     * @uses SavedTripActivity::setType()
     * @uses SavedTripActivity::setBookingTravelerRef()
     * @uses SavedTripActivity::setSearchPassengerRef()
     * @uses SavedTripActivity::setPointOfSaleRef()
     * @uses SavedTripActivity::setAccountingRemarkRef()
     * @uses SavedTripActivity::setGeneralRemarkRef()
     * @uses SavedTripActivity::setAirPricingModifierRef()
     * @uses SavedTripActivity::setAirPricingSolutionRef()
     * @uses SavedTripActivity::setVehicleSearchModifiersRef()
     * @uses SavedTripActivity::setVehicleDateLocationRef()
     * @uses SavedTripActivity::setSpecialEquipmentRef()
     * @uses SavedTripActivity::setVehicleSpecialRequestRef()
     * @uses SavedTripActivity::setPaymentInformationRef()
     * @uses SavedTripActivity::setDeliveryAddressRef()
     * @uses SavedTripActivity::setCollectionAddressRef()
     * @uses SavedTripActivity::setFlightArrivalInformationRef()
     * @uses SavedTripActivity::setVehicleRef()
     * @uses SavedTripActivity::setVendorLocationRef()
     * @uses SavedTripActivity::setHotelPropertyRef()
     * @uses SavedTripActivity::setHotelStayRef()
     * @uses SavedTripActivity::setHotelRulesModifiersRef()
     * @uses SavedTripActivity::setHotelDetailsModifiersRef()
     * @uses SavedTripActivity::setHotelRateDetailRef()
     * @uses SavedTripActivity::setPromotionCodeRef()
     * @uses SavedTripActivity::setRailPricingSolutionRef()
     * @param string $type
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\SearchPassengerRef[] $searchPassengerRef
     * @param \Travelport\UniversalRecord\StructType\PointOfSaleRef[] $pointOfSaleRef
     * @param \Travelport\UniversalRecord\StructType\AccountingRemarkRef[] $accountingRemarkRef
     * @param \Travelport\UniversalRecord\StructType\GeneralRemarkRef[] $generalRemarkRef
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifierRef[] $airPricingModifierRef
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolutionRef[] $airPricingSolutionRef
     * @param \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef[] $vehicleSearchModifiersRef
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocationRef[] $vehicleDateLocationRef
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipmentRef[] $specialEquipmentRef
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef[] $vehicleSpecialRequestRef
     * @param \Travelport\UniversalRecord\StructType\PaymentInformationRef[] $paymentInformationRef
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddressRef[] $deliveryAddressRef
     * @param \Travelport\UniversalRecord\StructType\CollectionAddressRef[] $collectionAddressRef
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef[] $flightArrivalInformationRef
     * @param \Travelport\UniversalRecord\StructType\VehicleRef[] $vehicleRef
     * @param \Travelport\UniversalRecord\StructType\VendorLocationRef[] $vendorLocationRef
     * @param \Travelport\UniversalRecord\StructType\HotelPropertyRef[] $hotelPropertyRef
     * @param \Travelport\UniversalRecord\StructType\HotelStayRef[] $hotelStayRef
     * @param \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef[] $hotelRulesModifiersRef
     * @param \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef[] $hotelDetailsModifiersRef
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetailRef[] $hotelRateDetailRef
     * @param \Travelport\UniversalRecord\StructType\PromotionCodeRef[] $promotionCodeRef
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolutionRef[] $railPricingSolutionRef
     */
    public function __construct(string $type, ?array $bookingTravelerRef = null, ?array $searchPassengerRef = null, ?array $pointOfSaleRef = null, ?array $accountingRemarkRef = null, ?array $generalRemarkRef = null, ?array $airPricingModifierRef = null, ?array $airPricingSolutionRef = null, ?array $vehicleSearchModifiersRef = null, ?array $vehicleDateLocationRef = null, ?array $specialEquipmentRef = null, ?array $vehicleSpecialRequestRef = null, ?array $paymentInformationRef = null, ?array $deliveryAddressRef = null, ?array $collectionAddressRef = null, ?array $flightArrivalInformationRef = null, ?array $vehicleRef = null, ?array $vendorLocationRef = null, ?array $hotelPropertyRef = null, ?array $hotelStayRef = null, ?array $hotelRulesModifiersRef = null, ?array $hotelDetailsModifiersRef = null, ?array $hotelRateDetailRef = null, ?array $promotionCodeRef = null, ?array $railPricingSolutionRef = null)
    {
        $this
            ->setType($type)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setSearchPassengerRef($searchPassengerRef)
            ->setPointOfSaleRef($pointOfSaleRef)
            ->setAccountingRemarkRef($accountingRemarkRef)
            ->setGeneralRemarkRef($generalRemarkRef)
            ->setAirPricingModifierRef($airPricingModifierRef)
            ->setAirPricingSolutionRef($airPricingSolutionRef)
            ->setVehicleSearchModifiersRef($vehicleSearchModifiersRef)
            ->setVehicleDateLocationRef($vehicleDateLocationRef)
            ->setSpecialEquipmentRef($specialEquipmentRef)
            ->setVehicleSpecialRequestRef($vehicleSpecialRequestRef)
            ->setPaymentInformationRef($paymentInformationRef)
            ->setDeliveryAddressRef($deliveryAddressRef)
            ->setCollectionAddressRef($collectionAddressRef)
            ->setFlightArrivalInformationRef($flightArrivalInformationRef)
            ->setVehicleRef($vehicleRef)
            ->setVendorLocationRef($vendorLocationRef)
            ->setHotelPropertyRef($hotelPropertyRef)
            ->setHotelStayRef($hotelStayRef)
            ->setHotelRulesModifiersRef($hotelRulesModifiersRef)
            ->setHotelDetailsModifiersRef($hotelDetailsModifiersRef)
            ->setHotelRateDetailRef($hotelRateDetailRef)
            ->setPromotionCodeRef($promotionCodeRef)
            ->setRailPricingSolutionRef($railPricingSolutionRef);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get SearchPassengerRef value
     * @return \Travelport\UniversalRecord\StructType\SearchPassengerRef[]
     */
    public function getSearchPassengerRef(): ?array
    {
        return $this->SearchPassengerRef;
    }
    /**
     * Set SearchPassengerRef value
     * @param \Travelport\UniversalRecord\StructType\SearchPassengerRef[] $searchPassengerRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setSearchPassengerRef(?array $searchPassengerRef = null): self
    {
        $this->SearchPassengerRef = $searchPassengerRef;
        
        return $this;
    }
    /**
     * Add item to SearchPassengerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SearchPassengerRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToSearchPassengerRef(\Travelport\UniversalRecord\StructType\SearchPassengerRef $item): self
    {
        $this->SearchPassengerRef[] = $item;
        
        return $this;
    }
    /**
     * Get PointOfSaleRef value
     * @return \Travelport\UniversalRecord\StructType\PointOfSaleRef[]
     */
    public function getPointOfSaleRef(): ?array
    {
        return $this->PointOfSaleRef;
    }
    /**
     * Set PointOfSaleRef value
     * @param \Travelport\UniversalRecord\StructType\PointOfSaleRef[] $pointOfSaleRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setPointOfSaleRef(?array $pointOfSaleRef = null): self
    {
        $this->PointOfSaleRef = $pointOfSaleRef;
        
        return $this;
    }
    /**
     * Add item to PointOfSaleRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PointOfSaleRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToPointOfSaleRef(\Travelport\UniversalRecord\StructType\PointOfSaleRef $item): self
    {
        $this->PointOfSaleRef[] = $item;
        
        return $this;
    }
    /**
     * Get AccountingRemarkRef value
     * @return \Travelport\UniversalRecord\StructType\AccountingRemarkRef[]
     */
    public function getAccountingRemarkRef(): ?array
    {
        return $this->AccountingRemarkRef;
    }
    /**
     * Set AccountingRemarkRef value
     * @param \Travelport\UniversalRecord\StructType\AccountingRemarkRef[] $accountingRemarkRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setAccountingRemarkRef(?array $accountingRemarkRef = null): self
    {
        $this->AccountingRemarkRef = $accountingRemarkRef;
        
        return $this;
    }
    /**
     * Add item to AccountingRemarkRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountingRemarkRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToAccountingRemarkRef(\Travelport\UniversalRecord\StructType\AccountingRemarkRef $item): self
    {
        $this->AccountingRemarkRef[] = $item;
        
        return $this;
    }
    /**
     * Get GeneralRemarkRef value
     * @return \Travelport\UniversalRecord\StructType\GeneralRemarkRef[]
     */
    public function getGeneralRemarkRef(): ?array
    {
        return $this->GeneralRemarkRef;
    }
    /**
     * Set GeneralRemarkRef value
     * @param \Travelport\UniversalRecord\StructType\GeneralRemarkRef[] $generalRemarkRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setGeneralRemarkRef(?array $generalRemarkRef = null): self
    {
        $this->GeneralRemarkRef = $generalRemarkRef;
        
        return $this;
    }
    /**
     * Add item to GeneralRemarkRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemarkRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToGeneralRemarkRef(\Travelport\UniversalRecord\StructType\GeneralRemarkRef $item): self
    {
        $this->GeneralRemarkRef[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingModifierRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingModifierRef[]
     */
    public function getAirPricingModifierRef(): ?array
    {
        return $this->AirPricingModifierRef;
    }
    /**
     * Set AirPricingModifierRef value
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifierRef[] $airPricingModifierRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setAirPricingModifierRef(?array $airPricingModifierRef = null): self
    {
        $this->AirPricingModifierRef = $airPricingModifierRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingModifierRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifierRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToAirPricingModifierRef(\Travelport\UniversalRecord\StructType\AirPricingModifierRef $item): self
    {
        $this->AirPricingModifierRef[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingSolutionRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolutionRef[]
     */
    public function getAirPricingSolutionRef(): ?array
    {
        return $this->AirPricingSolutionRef;
    }
    /**
     * Set AirPricingSolutionRef value
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolutionRef[] $airPricingSolutionRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setAirPricingSolutionRef(?array $airPricingSolutionRef = null): self
    {
        $this->AirPricingSolutionRef = $airPricingSolutionRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingSolutionRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolutionRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToAirPricingSolutionRef(\Travelport\UniversalRecord\StructType\AirPricingSolutionRef $item): self
    {
        $this->AirPricingSolutionRef[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleSearchModifiersRef value
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef[]
     */
    public function getVehicleSearchModifiersRef(): ?array
    {
        return $this->VehicleSearchModifiersRef;
    }
    /**
     * Set VehicleSearchModifiersRef value
     * @param \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef[] $vehicleSearchModifiersRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setVehicleSearchModifiersRef(?array $vehicleSearchModifiersRef = null): self
    {
        $this->VehicleSearchModifiersRef = $vehicleSearchModifiersRef;
        
        return $this;
    }
    /**
     * Add item to VehicleSearchModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToVehicleSearchModifiersRef(\Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef $item): self
    {
        $this->VehicleSearchModifiersRef[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleDateLocationRef value
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocationRef[]
     */
    public function getVehicleDateLocationRef(): ?array
    {
        return $this->VehicleDateLocationRef;
    }
    /**
     * Set VehicleDateLocationRef value
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocationRef[] $vehicleDateLocationRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setVehicleDateLocationRef(?array $vehicleDateLocationRef = null): self
    {
        $this->VehicleDateLocationRef = $vehicleDateLocationRef;
        
        return $this;
    }
    /**
     * Add item to VehicleDateLocationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocationRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToVehicleDateLocationRef(\Travelport\UniversalRecord\StructType\VehicleDateLocationRef $item): self
    {
        $this->VehicleDateLocationRef[] = $item;
        
        return $this;
    }
    /**
     * Get SpecialEquipmentRef value
     * @return \Travelport\UniversalRecord\StructType\SpecialEquipmentRef[]
     */
    public function getSpecialEquipmentRef(): ?array
    {
        return $this->SpecialEquipmentRef;
    }
    /**
     * Set SpecialEquipmentRef value
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipmentRef[] $specialEquipmentRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setSpecialEquipmentRef(?array $specialEquipmentRef = null): self
    {
        $this->SpecialEquipmentRef = $specialEquipmentRef;
        
        return $this;
    }
    /**
     * Add item to SpecialEquipmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipmentRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToSpecialEquipmentRef(\Travelport\UniversalRecord\StructType\SpecialEquipmentRef $item): self
    {
        $this->SpecialEquipmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleSpecialRequestRef value
     * @return \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef[]
     */
    public function getVehicleSpecialRequestRef(): ?array
    {
        return $this->VehicleSpecialRequestRef;
    }
    /**
     * Set VehicleSpecialRequestRef value
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef[] $vehicleSpecialRequestRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setVehicleSpecialRequestRef(?array $vehicleSpecialRequestRef = null): self
    {
        $this->VehicleSpecialRequestRef = $vehicleSpecialRequestRef;
        
        return $this;
    }
    /**
     * Add item to VehicleSpecialRequestRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToVehicleSpecialRequestRef(\Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef $item): self
    {
        $this->VehicleSpecialRequestRef[] = $item;
        
        return $this;
    }
    /**
     * Get PaymentInformationRef value
     * @return \Travelport\UniversalRecord\StructType\PaymentInformationRef[]
     */
    public function getPaymentInformationRef(): ?array
    {
        return $this->PaymentInformationRef;
    }
    /**
     * Set PaymentInformationRef value
     * @param \Travelport\UniversalRecord\StructType\PaymentInformationRef[] $paymentInformationRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setPaymentInformationRef(?array $paymentInformationRef = null): self
    {
        $this->PaymentInformationRef = $paymentInformationRef;
        
        return $this;
    }
    /**
     * Add item to PaymentInformationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PaymentInformationRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToPaymentInformationRef(\Travelport\UniversalRecord\StructType\PaymentInformationRef $item): self
    {
        $this->PaymentInformationRef[] = $item;
        
        return $this;
    }
    /**
     * Get DeliveryAddressRef value
     * @return \Travelport\UniversalRecord\StructType\DeliveryAddressRef[]
     */
    public function getDeliveryAddressRef(): ?array
    {
        return $this->DeliveryAddressRef;
    }
    /**
     * Set DeliveryAddressRef value
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddressRef[] $deliveryAddressRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setDeliveryAddressRef(?array $deliveryAddressRef = null): self
    {
        $this->DeliveryAddressRef = $deliveryAddressRef;
        
        return $this;
    }
    /**
     * Add item to DeliveryAddressRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddressRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToDeliveryAddressRef(\Travelport\UniversalRecord\StructType\DeliveryAddressRef $item): self
    {
        $this->DeliveryAddressRef[] = $item;
        
        return $this;
    }
    /**
     * Get CollectionAddressRef value
     * @return \Travelport\UniversalRecord\StructType\CollectionAddressRef[]
     */
    public function getCollectionAddressRef(): ?array
    {
        return $this->CollectionAddressRef;
    }
    /**
     * Set CollectionAddressRef value
     * @param \Travelport\UniversalRecord\StructType\CollectionAddressRef[] $collectionAddressRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setCollectionAddressRef(?array $collectionAddressRef = null): self
    {
        $this->CollectionAddressRef = $collectionAddressRef;
        
        return $this;
    }
    /**
     * Add item to CollectionAddressRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CollectionAddressRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToCollectionAddressRef(\Travelport\UniversalRecord\StructType\CollectionAddressRef $item): self
    {
        $this->CollectionAddressRef[] = $item;
        
        return $this;
    }
    /**
     * Get FlightArrivalInformationRef value
     * @return \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef[]
     */
    public function getFlightArrivalInformationRef(): ?array
    {
        return $this->FlightArrivalInformationRef;
    }
    /**
     * Set FlightArrivalInformationRef value
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef[] $flightArrivalInformationRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setFlightArrivalInformationRef(?array $flightArrivalInformationRef = null): self
    {
        $this->FlightArrivalInformationRef = $flightArrivalInformationRef;
        
        return $this;
    }
    /**
     * Add item to FlightArrivalInformationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToFlightArrivalInformationRef(\Travelport\UniversalRecord\StructType\FlightArrivalInformationRef $item): self
    {
        $this->FlightArrivalInformationRef[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleRef value
     * @return \Travelport\UniversalRecord\StructType\VehicleRef[]
     */
    public function getVehicleRef(): ?array
    {
        return $this->VehicleRef;
    }
    /**
     * Set VehicleRef value
     * @param \Travelport\UniversalRecord\StructType\VehicleRef[] $vehicleRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setVehicleRef(?array $vehicleRef = null): self
    {
        $this->VehicleRef = $vehicleRef;
        
        return $this;
    }
    /**
     * Add item to VehicleRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToVehicleRef(\Travelport\UniversalRecord\StructType\VehicleRef $item): self
    {
        $this->VehicleRef[] = $item;
        
        return $this;
    }
    /**
     * Get VendorLocationRef value
     * @return \Travelport\UniversalRecord\StructType\VendorLocationRef[]
     */
    public function getVendorLocationRef(): ?array
    {
        return $this->VendorLocationRef;
    }
    /**
     * Set VendorLocationRef value
     * @param \Travelport\UniversalRecord\StructType\VendorLocationRef[] $vendorLocationRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setVendorLocationRef(?array $vendorLocationRef = null): self
    {
        $this->VendorLocationRef = $vendorLocationRef;
        
        return $this;
    }
    /**
     * Add item to VendorLocationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VendorLocationRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToVendorLocationRef(\Travelport\UniversalRecord\StructType\VendorLocationRef $item): self
    {
        $this->VendorLocationRef[] = $item;
        
        return $this;
    }
    /**
     * Get HotelPropertyRef value
     * @return \Travelport\UniversalRecord\StructType\HotelPropertyRef[]
     */
    public function getHotelPropertyRef(): ?array
    {
        return $this->HotelPropertyRef;
    }
    /**
     * Set HotelPropertyRef value
     * @param \Travelport\UniversalRecord\StructType\HotelPropertyRef[] $hotelPropertyRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setHotelPropertyRef(?array $hotelPropertyRef = null): self
    {
        $this->HotelPropertyRef = $hotelPropertyRef;
        
        return $this;
    }
    /**
     * Add item to HotelPropertyRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelPropertyRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToHotelPropertyRef(\Travelport\UniversalRecord\StructType\HotelPropertyRef $item): self
    {
        $this->HotelPropertyRef[] = $item;
        
        return $this;
    }
    /**
     * Get HotelStayRef value
     * @return \Travelport\UniversalRecord\StructType\HotelStayRef[]
     */
    public function getHotelStayRef(): ?array
    {
        return $this->HotelStayRef;
    }
    /**
     * Set HotelStayRef value
     * @param \Travelport\UniversalRecord\StructType\HotelStayRef[] $hotelStayRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setHotelStayRef(?array $hotelStayRef = null): self
    {
        $this->HotelStayRef = $hotelStayRef;
        
        return $this;
    }
    /**
     * Add item to HotelStayRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelStayRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToHotelStayRef(\Travelport\UniversalRecord\StructType\HotelStayRef $item): self
    {
        $this->HotelStayRef[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRulesModifiersRef value
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef[]
     */
    public function getHotelRulesModifiersRef(): ?array
    {
        return $this->HotelRulesModifiersRef;
    }
    /**
     * Set HotelRulesModifiersRef value
     * @param \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef[] $hotelRulesModifiersRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setHotelRulesModifiersRef(?array $hotelRulesModifiersRef = null): self
    {
        $this->HotelRulesModifiersRef = $hotelRulesModifiersRef;
        
        return $this;
    }
    /**
     * Add item to HotelRulesModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToHotelRulesModifiersRef(\Travelport\UniversalRecord\StructType\HotelRulesModifiersRef $item): self
    {
        $this->HotelRulesModifiersRef[] = $item;
        
        return $this;
    }
    /**
     * Get HotelDetailsModifiersRef value
     * @return \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef[]
     */
    public function getHotelDetailsModifiersRef(): ?array
    {
        return $this->HotelDetailsModifiersRef;
    }
    /**
     * Set HotelDetailsModifiersRef value
     * @param \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef[] $hotelDetailsModifiersRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setHotelDetailsModifiersRef(?array $hotelDetailsModifiersRef = null): self
    {
        $this->HotelDetailsModifiersRef = $hotelDetailsModifiersRef;
        
        return $this;
    }
    /**
     * Add item to HotelDetailsModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToHotelDetailsModifiersRef(\Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef $item): self
    {
        $this->HotelDetailsModifiersRef[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRateDetailRef value
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetailRef[]
     */
    public function getHotelRateDetailRef(): ?array
    {
        return $this->HotelRateDetailRef;
    }
    /**
     * Set HotelRateDetailRef value
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetailRef[] $hotelRateDetailRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setHotelRateDetailRef(?array $hotelRateDetailRef = null): self
    {
        $this->HotelRateDetailRef = $hotelRateDetailRef;
        
        return $this;
    }
    /**
     * Add item to HotelRateDetailRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetailRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToHotelRateDetailRef(\Travelport\UniversalRecord\StructType\HotelRateDetailRef $item): self
    {
        $this->HotelRateDetailRef[] = $item;
        
        return $this;
    }
    /**
     * Get PromotionCodeRef value
     * @return \Travelport\UniversalRecord\StructType\PromotionCodeRef[]
     */
    public function getPromotionCodeRef(): ?array
    {
        return $this->PromotionCodeRef;
    }
    /**
     * Set PromotionCodeRef value
     * @param \Travelport\UniversalRecord\StructType\PromotionCodeRef[] $promotionCodeRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setPromotionCodeRef(?array $promotionCodeRef = null): self
    {
        $this->PromotionCodeRef = $promotionCodeRef;
        
        return $this;
    }
    /**
     * Add item to PromotionCodeRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PromotionCodeRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToPromotionCodeRef(\Travelport\UniversalRecord\StructType\PromotionCodeRef $item): self
    {
        $this->PromotionCodeRef[] = $item;
        
        return $this;
    }
    /**
     * Get RailPricingSolutionRef value
     * @return \Travelport\UniversalRecord\StructType\RailPricingSolutionRef[]
     */
    public function getRailPricingSolutionRef(): ?array
    {
        return $this->RailPricingSolutionRef;
    }
    /**
     * Set RailPricingSolutionRef value
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolutionRef[] $railPricingSolutionRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setRailPricingSolutionRef(?array $railPricingSolutionRef = null): self
    {
        $this->RailPricingSolutionRef = $railPricingSolutionRef;
        
        return $this;
    }
    /**
     * Add item to RailPricingSolutionRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolutionRef $item
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function addToRailPricingSolutionRef(\Travelport\UniversalRecord\StructType\RailPricingSolutionRef $item): self
    {
        $this->RailPricingSolutionRef[] = $item;
        
        return $this;
    }
}
