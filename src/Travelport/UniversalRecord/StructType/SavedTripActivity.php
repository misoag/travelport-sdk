<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Type;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The SearchPassengerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\SearchPassengerRef[]
     */
    protected ?array $SearchPassengerRef = null;
    /**
     * The PointOfSaleRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PointOfSaleRef[]
     */
    protected ?array $PointOfSaleRef = null;
    /**
     * The AccountingRemarkRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\AccountingRemarkRef[]
     */
    protected ?array $AccountingRemarkRef = null;
    /**
     * The GeneralRemarkRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\GeneralRemarkRef[]
     */
    protected ?array $GeneralRemarkRef = null;
    /**
     * The AirPricingModifierRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\AirPricingModifierRef[]
     */
    protected ?array $AirPricingModifierRef = null;
    /**
     * The AirPricingSolutionRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\AirPricingSolutionRef[]
     */
    protected ?array $AirPricingSolutionRef = null;
    /**
     * The VehicleSearchModifiersRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef[]
     */
    protected ?array $VehicleSearchModifiersRef = null;
    /**
     * The VehicleDateLocationRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VehicleDateLocationRef[]
     */
    protected ?array $VehicleDateLocationRef = null;
    /**
     * The SpecialEquipmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\SpecialEquipmentRef[]
     */
    protected ?array $SpecialEquipmentRef = null;
    /**
     * The VehicleSpecialRequestRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef[]
     */
    protected ?array $VehicleSpecialRequestRef = null;
    /**
     * The PaymentInformationRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PaymentInformationRef[]
     */
    protected ?array $PaymentInformationRef = null;
    /**
     * The DeliveryAddressRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\DeliveryAddressRef[]
     */
    protected ?array $DeliveryAddressRef = null;
    /**
     * The CollectionAddressRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\CollectionAddressRef[]
     */
    protected ?array $CollectionAddressRef = null;
    /**
     * The FlightArrivalInformationRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef[]
     */
    protected ?array $FlightArrivalInformationRef = null;
    /**
     * The VehicleRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VehicleRef[]
     */
    protected ?array $VehicleRef = null;
    /**
     * The VendorLocationRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VendorLocationRef[]
     */
    protected ?array $VendorLocationRef = null;
    /**
     * The HotelPropertyRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelPropertyRef[]
     */
    protected ?array $HotelPropertyRef = null;
    /**
     * The HotelStayRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelStayRef[]
     */
    protected ?array $HotelStayRef = null;
    /**
     * The HotelRulesModifiersRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef[]
     */
    protected ?array $HotelRulesModifiersRef = null;
    /**
     * The HotelDetailsModifiersRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef[]
     */
    protected ?array $HotelDetailsModifiersRef = null;
    /**
     * The HotelRateDetailRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\HotelRateDetailRef[]
     */
    protected ?array $HotelRateDetailRef = null;
    /**
     * The PromotionCodeRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PromotionCodeRef[]
     */
    protected ?array $PromotionCodeRef = null;
    /**
     * The RailPricingSolutionRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\RailPricingSolutionRef[]
     */
    protected ?array $RailPricingSolutionRef = null;
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
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityBookingTravelerRefItem instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($savedTripActivityBookingTravelerRefItem) ? get_class($savedTripActivityBookingTravelerRefItem) : sprintf('%s(%s)', gettype($savedTripActivityBookingTravelerRefItem), var_export($savedTripActivityBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTravelerRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setSearchPassengerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchPassengerRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchPassengerRefForArrayConstraintFromSetSearchPassengerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivitySearchPassengerRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivitySearchPassengerRefItem instanceof \Travelport\UniversalRecord\StructType\SearchPassengerRef) {
                $invalidValues[] = is_object($savedTripActivitySearchPassengerRefItem) ? get_class($savedTripActivitySearchPassengerRefItem) : sprintf('%s(%s)', gettype($savedTripActivitySearchPassengerRefItem), var_export($savedTripActivitySearchPassengerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchPassengerRef property can only contain items of type \Travelport\UniversalRecord\StructType\SearchPassengerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchPassengerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SearchPassengerRef[] $searchPassengerRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setSearchPassengerRef(?array $searchPassengerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchPassengerRefArrayErrorMessage = self::validateSearchPassengerRefForArrayConstraintFromSetSearchPassengerRef($searchPassengerRef))) {
            throw new InvalidArgumentException($searchPassengerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($searchPassengerRef) && count($searchPassengerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($searchPassengerRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SearchPassengerRef) {
            throw new InvalidArgumentException(sprintf('The SearchPassengerRef property can only contain items of type \Travelport\UniversalRecord\StructType\SearchPassengerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SearchPassengerRef) && count($this->SearchPassengerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SearchPassengerRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setPointOfSaleRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPointOfSaleRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePointOfSaleRefForArrayConstraintFromSetPointOfSaleRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityPointOfSaleRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityPointOfSaleRefItem instanceof \Travelport\UniversalRecord\StructType\PointOfSaleRef) {
                $invalidValues[] = is_object($savedTripActivityPointOfSaleRefItem) ? get_class($savedTripActivityPointOfSaleRefItem) : sprintf('%s(%s)', gettype($savedTripActivityPointOfSaleRefItem), var_export($savedTripActivityPointOfSaleRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PointOfSaleRef property can only contain items of type \Travelport\UniversalRecord\StructType\PointOfSaleRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PointOfSaleRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PointOfSaleRef[] $pointOfSaleRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setPointOfSaleRef(?array $pointOfSaleRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($pointOfSaleRefArrayErrorMessage = self::validatePointOfSaleRefForArrayConstraintFromSetPointOfSaleRef($pointOfSaleRef))) {
            throw new InvalidArgumentException($pointOfSaleRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($pointOfSaleRef) && count($pointOfSaleRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($pointOfSaleRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PointOfSaleRef) {
            throw new InvalidArgumentException(sprintf('The PointOfSaleRef property can only contain items of type \Travelport\UniversalRecord\StructType\PointOfSaleRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PointOfSaleRef) && count($this->PointOfSaleRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PointOfSaleRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAccountingRemarkRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountingRemarkRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountingRemarkRefForArrayConstraintFromSetAccountingRemarkRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityAccountingRemarkRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityAccountingRemarkRefItem instanceof \Travelport\UniversalRecord\StructType\AccountingRemarkRef) {
                $invalidValues[] = is_object($savedTripActivityAccountingRemarkRefItem) ? get_class($savedTripActivityAccountingRemarkRefItem) : sprintf('%s(%s)', gettype($savedTripActivityAccountingRemarkRefItem), var_export($savedTripActivityAccountingRemarkRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountingRemarkRef property can only contain items of type \Travelport\UniversalRecord\StructType\AccountingRemarkRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountingRemarkRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountingRemarkRef[] $accountingRemarkRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setAccountingRemarkRef(?array $accountingRemarkRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountingRemarkRefArrayErrorMessage = self::validateAccountingRemarkRefForArrayConstraintFromSetAccountingRemarkRef($accountingRemarkRef))) {
            throw new InvalidArgumentException($accountingRemarkRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($accountingRemarkRef) && count($accountingRemarkRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($accountingRemarkRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AccountingRemarkRef) {
            throw new InvalidArgumentException(sprintf('The AccountingRemarkRef property can only contain items of type \Travelport\UniversalRecord\StructType\AccountingRemarkRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AccountingRemarkRef) && count($this->AccountingRemarkRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AccountingRemarkRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setGeneralRemarkRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneralRemarkRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGeneralRemarkRefForArrayConstraintFromSetGeneralRemarkRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityGeneralRemarkRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityGeneralRemarkRefItem instanceof \Travelport\UniversalRecord\StructType\GeneralRemarkRef) {
                $invalidValues[] = is_object($savedTripActivityGeneralRemarkRefItem) ? get_class($savedTripActivityGeneralRemarkRefItem) : sprintf('%s(%s)', gettype($savedTripActivityGeneralRemarkRefItem), var_export($savedTripActivityGeneralRemarkRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GeneralRemarkRef property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemarkRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GeneralRemarkRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemarkRef[] $generalRemarkRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setGeneralRemarkRef(?array $generalRemarkRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($generalRemarkRefArrayErrorMessage = self::validateGeneralRemarkRefForArrayConstraintFromSetGeneralRemarkRef($generalRemarkRef))) {
            throw new InvalidArgumentException($generalRemarkRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($generalRemarkRef) && count($generalRemarkRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($generalRemarkRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\GeneralRemarkRef) {
            throw new InvalidArgumentException(sprintf('The GeneralRemarkRef property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemarkRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GeneralRemarkRef) && count($this->GeneralRemarkRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GeneralRemarkRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirPricingModifierRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingModifierRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingModifierRefForArrayConstraintFromSetAirPricingModifierRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityAirPricingModifierRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityAirPricingModifierRefItem instanceof \Travelport\UniversalRecord\StructType\AirPricingModifierRef) {
                $invalidValues[] = is_object($savedTripActivityAirPricingModifierRefItem) ? get_class($savedTripActivityAirPricingModifierRefItem) : sprintf('%s(%s)', gettype($savedTripActivityAirPricingModifierRefItem), var_export($savedTripActivityAirPricingModifierRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingModifierRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingModifierRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingModifierRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingModifierRef[] $airPricingModifierRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setAirPricingModifierRef(?array $airPricingModifierRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingModifierRefArrayErrorMessage = self::validateAirPricingModifierRefForArrayConstraintFromSetAirPricingModifierRef($airPricingModifierRef))) {
            throw new InvalidArgumentException($airPricingModifierRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingModifierRef) && count($airPricingModifierRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingModifierRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingModifierRef) {
            throw new InvalidArgumentException(sprintf('The AirPricingModifierRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingModifierRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingModifierRef) && count($this->AirPricingModifierRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingModifierRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAirPricingSolutionRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingSolutionRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingSolutionRefForArrayConstraintFromSetAirPricingSolutionRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityAirPricingSolutionRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityAirPricingSolutionRefItem instanceof \Travelport\UniversalRecord\StructType\AirPricingSolutionRef) {
                $invalidValues[] = is_object($savedTripActivityAirPricingSolutionRefItem) ? get_class($savedTripActivityAirPricingSolutionRefItem) : sprintf('%s(%s)', gettype($savedTripActivityAirPricingSolutionRefItem), var_export($savedTripActivityAirPricingSolutionRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingSolutionRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingSolutionRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingSolutionRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolutionRef[] $airPricingSolutionRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setAirPricingSolutionRef(?array $airPricingSolutionRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingSolutionRefArrayErrorMessage = self::validateAirPricingSolutionRefForArrayConstraintFromSetAirPricingSolutionRef($airPricingSolutionRef))) {
            throw new InvalidArgumentException($airPricingSolutionRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingSolutionRef) && count($airPricingSolutionRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingSolutionRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingSolutionRef) {
            throw new InvalidArgumentException(sprintf('The AirPricingSolutionRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingSolutionRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingSolutionRef) && count($this->AirPricingSolutionRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingSolutionRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVehicleSearchModifiersRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleSearchModifiersRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleSearchModifiersRefForArrayConstraintFromSetVehicleSearchModifiersRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityVehicleSearchModifiersRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityVehicleSearchModifiersRefItem instanceof \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef) {
                $invalidValues[] = is_object($savedTripActivityVehicleSearchModifiersRefItem) ? get_class($savedTripActivityVehicleSearchModifiersRefItem) : sprintf('%s(%s)', gettype($savedTripActivityVehicleSearchModifiersRefItem), var_export($savedTripActivityVehicleSearchModifiersRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleSearchModifiersRef property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleSearchModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef[] $vehicleSearchModifiersRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setVehicleSearchModifiersRef(?array $vehicleSearchModifiersRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleSearchModifiersRefArrayErrorMessage = self::validateVehicleSearchModifiersRefForArrayConstraintFromSetVehicleSearchModifiersRef($vehicleSearchModifiersRef))) {
            throw new InvalidArgumentException($vehicleSearchModifiersRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleSearchModifiersRef) && count($vehicleSearchModifiersRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleSearchModifiersRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef) {
            throw new InvalidArgumentException(sprintf('The VehicleSearchModifiersRef property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleSearchModifiersRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleSearchModifiersRef) && count($this->VehicleSearchModifiersRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleSearchModifiersRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVehicleDateLocationRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleDateLocationRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleDateLocationRefForArrayConstraintFromSetVehicleDateLocationRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityVehicleDateLocationRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityVehicleDateLocationRefItem instanceof \Travelport\UniversalRecord\StructType\VehicleDateLocationRef) {
                $invalidValues[] = is_object($savedTripActivityVehicleDateLocationRefItem) ? get_class($savedTripActivityVehicleDateLocationRefItem) : sprintf('%s(%s)', gettype($savedTripActivityVehicleDateLocationRefItem), var_export($savedTripActivityVehicleDateLocationRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleDateLocationRef property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleDateLocationRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleDateLocationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocationRef[] $vehicleDateLocationRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setVehicleDateLocationRef(?array $vehicleDateLocationRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleDateLocationRefArrayErrorMessage = self::validateVehicleDateLocationRefForArrayConstraintFromSetVehicleDateLocationRef($vehicleDateLocationRef))) {
            throw new InvalidArgumentException($vehicleDateLocationRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleDateLocationRef) && count($vehicleDateLocationRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleDateLocationRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleDateLocationRef) {
            throw new InvalidArgumentException(sprintf('The VehicleDateLocationRef property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleDateLocationRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleDateLocationRef) && count($this->VehicleDateLocationRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleDateLocationRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setSpecialEquipmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecialEquipmentRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecialEquipmentRefForArrayConstraintFromSetSpecialEquipmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivitySpecialEquipmentRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivitySpecialEquipmentRefItem instanceof \Travelport\UniversalRecord\StructType\SpecialEquipmentRef) {
                $invalidValues[] = is_object($savedTripActivitySpecialEquipmentRefItem) ? get_class($savedTripActivitySpecialEquipmentRefItem) : sprintf('%s(%s)', gettype($savedTripActivitySpecialEquipmentRefItem), var_export($savedTripActivitySpecialEquipmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SpecialEquipmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\SpecialEquipmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SpecialEquipmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipmentRef[] $specialEquipmentRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setSpecialEquipmentRef(?array $specialEquipmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($specialEquipmentRefArrayErrorMessage = self::validateSpecialEquipmentRefForArrayConstraintFromSetSpecialEquipmentRef($specialEquipmentRef))) {
            throw new InvalidArgumentException($specialEquipmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($specialEquipmentRef) && count($specialEquipmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($specialEquipmentRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SpecialEquipmentRef) {
            throw new InvalidArgumentException(sprintf('The SpecialEquipmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\SpecialEquipmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SpecialEquipmentRef) && count($this->SpecialEquipmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SpecialEquipmentRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVehicleSpecialRequestRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleSpecialRequestRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleSpecialRequestRefForArrayConstraintFromSetVehicleSpecialRequestRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityVehicleSpecialRequestRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityVehicleSpecialRequestRefItem instanceof \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef) {
                $invalidValues[] = is_object($savedTripActivityVehicleSpecialRequestRefItem) ? get_class($savedTripActivityVehicleSpecialRequestRefItem) : sprintf('%s(%s)', gettype($savedTripActivityVehicleSpecialRequestRefItem), var_export($savedTripActivityVehicleSpecialRequestRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleSpecialRequestRef property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleSpecialRequestRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef[] $vehicleSpecialRequestRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setVehicleSpecialRequestRef(?array $vehicleSpecialRequestRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleSpecialRequestRefArrayErrorMessage = self::validateVehicleSpecialRequestRefForArrayConstraintFromSetVehicleSpecialRequestRef($vehicleSpecialRequestRef))) {
            throw new InvalidArgumentException($vehicleSpecialRequestRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleSpecialRequestRef) && count($vehicleSpecialRequestRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleSpecialRequestRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef) {
            throw new InvalidArgumentException(sprintf('The VehicleSpecialRequestRef property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleSpecialRequestRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleSpecialRequestRef) && count($this->VehicleSpecialRequestRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleSpecialRequestRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setPaymentInformationRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentInformationRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentInformationRefForArrayConstraintFromSetPaymentInformationRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityPaymentInformationRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityPaymentInformationRefItem instanceof \Travelport\UniversalRecord\StructType\PaymentInformationRef) {
                $invalidValues[] = is_object($savedTripActivityPaymentInformationRefItem) ? get_class($savedTripActivityPaymentInformationRefItem) : sprintf('%s(%s)', gettype($savedTripActivityPaymentInformationRefItem), var_export($savedTripActivityPaymentInformationRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentInformationRef property can only contain items of type \Travelport\UniversalRecord\StructType\PaymentInformationRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentInformationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PaymentInformationRef[] $paymentInformationRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setPaymentInformationRef(?array $paymentInformationRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentInformationRefArrayErrorMessage = self::validatePaymentInformationRefForArrayConstraintFromSetPaymentInformationRef($paymentInformationRef))) {
            throw new InvalidArgumentException($paymentInformationRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($paymentInformationRef) && count($paymentInformationRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($paymentInformationRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PaymentInformationRef) {
            throw new InvalidArgumentException(sprintf('The PaymentInformationRef property can only contain items of type \Travelport\UniversalRecord\StructType\PaymentInformationRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PaymentInformationRef) && count($this->PaymentInformationRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PaymentInformationRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setDeliveryAddressRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeliveryAddressRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeliveryAddressRefForArrayConstraintFromSetDeliveryAddressRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityDeliveryAddressRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityDeliveryAddressRefItem instanceof \Travelport\UniversalRecord\StructType\DeliveryAddressRef) {
                $invalidValues[] = is_object($savedTripActivityDeliveryAddressRefItem) ? get_class($savedTripActivityDeliveryAddressRefItem) : sprintf('%s(%s)', gettype($savedTripActivityDeliveryAddressRefItem), var_export($savedTripActivityDeliveryAddressRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeliveryAddressRef property can only contain items of type \Travelport\UniversalRecord\StructType\DeliveryAddressRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DeliveryAddressRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddressRef[] $deliveryAddressRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setDeliveryAddressRef(?array $deliveryAddressRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($deliveryAddressRefArrayErrorMessage = self::validateDeliveryAddressRefForArrayConstraintFromSetDeliveryAddressRef($deliveryAddressRef))) {
            throw new InvalidArgumentException($deliveryAddressRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($deliveryAddressRef) && count($deliveryAddressRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($deliveryAddressRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\DeliveryAddressRef) {
            throw new InvalidArgumentException(sprintf('The DeliveryAddressRef property can only contain items of type \Travelport\UniversalRecord\StructType\DeliveryAddressRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->DeliveryAddressRef) && count($this->DeliveryAddressRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->DeliveryAddressRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setCollectionAddressRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCollectionAddressRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCollectionAddressRefForArrayConstraintFromSetCollectionAddressRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityCollectionAddressRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityCollectionAddressRefItem instanceof \Travelport\UniversalRecord\StructType\CollectionAddressRef) {
                $invalidValues[] = is_object($savedTripActivityCollectionAddressRefItem) ? get_class($savedTripActivityCollectionAddressRefItem) : sprintf('%s(%s)', gettype($savedTripActivityCollectionAddressRefItem), var_export($savedTripActivityCollectionAddressRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CollectionAddressRef property can only contain items of type \Travelport\UniversalRecord\StructType\CollectionAddressRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CollectionAddressRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CollectionAddressRef[] $collectionAddressRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setCollectionAddressRef(?array $collectionAddressRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($collectionAddressRefArrayErrorMessage = self::validateCollectionAddressRefForArrayConstraintFromSetCollectionAddressRef($collectionAddressRef))) {
            throw new InvalidArgumentException($collectionAddressRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($collectionAddressRef) && count($collectionAddressRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($collectionAddressRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CollectionAddressRef) {
            throw new InvalidArgumentException(sprintf('The CollectionAddressRef property can only contain items of type \Travelport\UniversalRecord\StructType\CollectionAddressRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CollectionAddressRef) && count($this->CollectionAddressRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CollectionAddressRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setFlightArrivalInformationRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightArrivalInformationRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightArrivalInformationRefForArrayConstraintFromSetFlightArrivalInformationRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityFlightArrivalInformationRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityFlightArrivalInformationRefItem instanceof \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef) {
                $invalidValues[] = is_object($savedTripActivityFlightArrivalInformationRefItem) ? get_class($savedTripActivityFlightArrivalInformationRefItem) : sprintf('%s(%s)', gettype($savedTripActivityFlightArrivalInformationRefItem), var_export($savedTripActivityFlightArrivalInformationRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightArrivalInformationRef property can only contain items of type \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightArrivalInformationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef[] $flightArrivalInformationRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setFlightArrivalInformationRef(?array $flightArrivalInformationRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightArrivalInformationRefArrayErrorMessage = self::validateFlightArrivalInformationRefForArrayConstraintFromSetFlightArrivalInformationRef($flightArrivalInformationRef))) {
            throw new InvalidArgumentException($flightArrivalInformationRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($flightArrivalInformationRef) && count($flightArrivalInformationRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($flightArrivalInformationRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef) {
            throw new InvalidArgumentException(sprintf('The FlightArrivalInformationRef property can only contain items of type \Travelport\UniversalRecord\StructType\FlightArrivalInformationRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FlightArrivalInformationRef) && count($this->FlightArrivalInformationRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FlightArrivalInformationRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVehicleRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleRefForArrayConstraintFromSetVehicleRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityVehicleRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityVehicleRefItem instanceof \Travelport\UniversalRecord\StructType\VehicleRef) {
                $invalidValues[] = is_object($savedTripActivityVehicleRefItem) ? get_class($savedTripActivityVehicleRefItem) : sprintf('%s(%s)', gettype($savedTripActivityVehicleRefItem), var_export($savedTripActivityVehicleRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleRef property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleRef[] $vehicleRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setVehicleRef(?array $vehicleRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleRefArrayErrorMessage = self::validateVehicleRefForArrayConstraintFromSetVehicleRef($vehicleRef))) {
            throw new InvalidArgumentException($vehicleRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleRef) && count($vehicleRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleRef) {
            throw new InvalidArgumentException(sprintf('The VehicleRef property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleRef) && count($this->VehicleRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setVendorLocationRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVendorLocationRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVendorLocationRefForArrayConstraintFromSetVendorLocationRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityVendorLocationRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityVendorLocationRefItem instanceof \Travelport\UniversalRecord\StructType\VendorLocationRef) {
                $invalidValues[] = is_object($savedTripActivityVendorLocationRefItem) ? get_class($savedTripActivityVendorLocationRefItem) : sprintf('%s(%s)', gettype($savedTripActivityVendorLocationRefItem), var_export($savedTripActivityVendorLocationRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VendorLocationRef property can only contain items of type \Travelport\UniversalRecord\StructType\VendorLocationRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VendorLocationRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VendorLocationRef[] $vendorLocationRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setVendorLocationRef(?array $vendorLocationRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($vendorLocationRefArrayErrorMessage = self::validateVendorLocationRefForArrayConstraintFromSetVendorLocationRef($vendorLocationRef))) {
            throw new InvalidArgumentException($vendorLocationRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vendorLocationRef) && count($vendorLocationRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vendorLocationRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VendorLocationRef) {
            throw new InvalidArgumentException(sprintf('The VendorLocationRef property can only contain items of type \Travelport\UniversalRecord\StructType\VendorLocationRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VendorLocationRef) && count($this->VendorLocationRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VendorLocationRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelPropertyRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelPropertyRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelPropertyRefForArrayConstraintFromSetHotelPropertyRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityHotelPropertyRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityHotelPropertyRefItem instanceof \Travelport\UniversalRecord\StructType\HotelPropertyRef) {
                $invalidValues[] = is_object($savedTripActivityHotelPropertyRefItem) ? get_class($savedTripActivityHotelPropertyRefItem) : sprintf('%s(%s)', gettype($savedTripActivityHotelPropertyRefItem), var_export($savedTripActivityHotelPropertyRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelPropertyRef property can only contain items of type \Travelport\UniversalRecord\StructType\HotelPropertyRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelPropertyRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelPropertyRef[] $hotelPropertyRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setHotelPropertyRef(?array $hotelPropertyRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelPropertyRefArrayErrorMessage = self::validateHotelPropertyRefForArrayConstraintFromSetHotelPropertyRef($hotelPropertyRef))) {
            throw new InvalidArgumentException($hotelPropertyRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelPropertyRef) && count($hotelPropertyRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelPropertyRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelPropertyRef) {
            throw new InvalidArgumentException(sprintf('The HotelPropertyRef property can only contain items of type \Travelport\UniversalRecord\StructType\HotelPropertyRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelPropertyRef) && count($this->HotelPropertyRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelPropertyRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelStayRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelStayRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelStayRefForArrayConstraintFromSetHotelStayRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityHotelStayRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityHotelStayRefItem instanceof \Travelport\UniversalRecord\StructType\HotelStayRef) {
                $invalidValues[] = is_object($savedTripActivityHotelStayRefItem) ? get_class($savedTripActivityHotelStayRefItem) : sprintf('%s(%s)', gettype($savedTripActivityHotelStayRefItem), var_export($savedTripActivityHotelStayRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelStayRef property can only contain items of type \Travelport\UniversalRecord\StructType\HotelStayRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelStayRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelStayRef[] $hotelStayRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setHotelStayRef(?array $hotelStayRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelStayRefArrayErrorMessage = self::validateHotelStayRefForArrayConstraintFromSetHotelStayRef($hotelStayRef))) {
            throw new InvalidArgumentException($hotelStayRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelStayRef) && count($hotelStayRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelStayRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelStayRef) {
            throw new InvalidArgumentException(sprintf('The HotelStayRef property can only contain items of type \Travelport\UniversalRecord\StructType\HotelStayRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelStayRef) && count($this->HotelStayRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelStayRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelRulesModifiersRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRulesModifiersRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRulesModifiersRefForArrayConstraintFromSetHotelRulesModifiersRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityHotelRulesModifiersRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityHotelRulesModifiersRefItem instanceof \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef) {
                $invalidValues[] = is_object($savedTripActivityHotelRulesModifiersRefItem) ? get_class($savedTripActivityHotelRulesModifiersRefItem) : sprintf('%s(%s)', gettype($savedTripActivityHotelRulesModifiersRefItem), var_export($savedTripActivityHotelRulesModifiersRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRulesModifiersRef property can only contain items of type \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelRulesModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef[] $hotelRulesModifiersRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setHotelRulesModifiersRef(?array $hotelRulesModifiersRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRulesModifiersRefArrayErrorMessage = self::validateHotelRulesModifiersRefForArrayConstraintFromSetHotelRulesModifiersRef($hotelRulesModifiersRef))) {
            throw new InvalidArgumentException($hotelRulesModifiersRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelRulesModifiersRef) && count($hotelRulesModifiersRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelRulesModifiersRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef) {
            throw new InvalidArgumentException(sprintf('The HotelRulesModifiersRef property can only contain items of type \Travelport\UniversalRecord\StructType\HotelRulesModifiersRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelRulesModifiersRef) && count($this->HotelRulesModifiersRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelRulesModifiersRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelDetailsModifiersRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelDetailsModifiersRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelDetailsModifiersRefForArrayConstraintFromSetHotelDetailsModifiersRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityHotelDetailsModifiersRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityHotelDetailsModifiersRefItem instanceof \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef) {
                $invalidValues[] = is_object($savedTripActivityHotelDetailsModifiersRefItem) ? get_class($savedTripActivityHotelDetailsModifiersRefItem) : sprintf('%s(%s)', gettype($savedTripActivityHotelDetailsModifiersRefItem), var_export($savedTripActivityHotelDetailsModifiersRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelDetailsModifiersRef property can only contain items of type \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelDetailsModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef[] $hotelDetailsModifiersRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setHotelDetailsModifiersRef(?array $hotelDetailsModifiersRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelDetailsModifiersRefArrayErrorMessage = self::validateHotelDetailsModifiersRefForArrayConstraintFromSetHotelDetailsModifiersRef($hotelDetailsModifiersRef))) {
            throw new InvalidArgumentException($hotelDetailsModifiersRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelDetailsModifiersRef) && count($hotelDetailsModifiersRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelDetailsModifiersRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef) {
            throw new InvalidArgumentException(sprintf('The HotelDetailsModifiersRef property can only contain items of type \Travelport\UniversalRecord\StructType\HotelDetailsModifiersRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelDetailsModifiersRef) && count($this->HotelDetailsModifiersRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelDetailsModifiersRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setHotelRateDetailRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRateDetailRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRateDetailRefForArrayConstraintFromSetHotelRateDetailRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityHotelRateDetailRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityHotelRateDetailRefItem instanceof \Travelport\UniversalRecord\StructType\HotelRateDetailRef) {
                $invalidValues[] = is_object($savedTripActivityHotelRateDetailRefItem) ? get_class($savedTripActivityHotelRateDetailRefItem) : sprintf('%s(%s)', gettype($savedTripActivityHotelRateDetailRefItem), var_export($savedTripActivityHotelRateDetailRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRateDetailRef property can only contain items of type \Travelport\UniversalRecord\StructType\HotelRateDetailRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelRateDetailRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetailRef[] $hotelRateDetailRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setHotelRateDetailRef(?array $hotelRateDetailRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRateDetailRefArrayErrorMessage = self::validateHotelRateDetailRefForArrayConstraintFromSetHotelRateDetailRef($hotelRateDetailRef))) {
            throw new InvalidArgumentException($hotelRateDetailRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelRateDetailRef) && count($hotelRateDetailRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelRateDetailRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelRateDetailRef) {
            throw new InvalidArgumentException(sprintf('The HotelRateDetailRef property can only contain items of type \Travelport\UniversalRecord\StructType\HotelRateDetailRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelRateDetailRef) && count($this->HotelRateDetailRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelRateDetailRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setPromotionCodeRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotionCodeRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotionCodeRefForArrayConstraintFromSetPromotionCodeRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityPromotionCodeRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityPromotionCodeRefItem instanceof \Travelport\UniversalRecord\StructType\PromotionCodeRef) {
                $invalidValues[] = is_object($savedTripActivityPromotionCodeRefItem) ? get_class($savedTripActivityPromotionCodeRefItem) : sprintf('%s(%s)', gettype($savedTripActivityPromotionCodeRefItem), var_export($savedTripActivityPromotionCodeRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromotionCodeRef property can only contain items of type \Travelport\UniversalRecord\StructType\PromotionCodeRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PromotionCodeRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PromotionCodeRef[] $promotionCodeRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setPromotionCodeRef(?array $promotionCodeRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($promotionCodeRefArrayErrorMessage = self::validatePromotionCodeRefForArrayConstraintFromSetPromotionCodeRef($promotionCodeRef))) {
            throw new InvalidArgumentException($promotionCodeRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($promotionCodeRef) && count($promotionCodeRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($promotionCodeRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PromotionCodeRef) {
            throw new InvalidArgumentException(sprintf('The PromotionCodeRef property can only contain items of type \Travelport\UniversalRecord\StructType\PromotionCodeRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PromotionCodeRef) && count($this->PromotionCodeRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PromotionCodeRef)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setRailPricingSolutionRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailPricingSolutionRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailPricingSolutionRefForArrayConstraintFromSetRailPricingSolutionRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savedTripActivityRailPricingSolutionRefItem) {
            // validation for constraint: itemType
            if (!$savedTripActivityRailPricingSolutionRefItem instanceof \Travelport\UniversalRecord\StructType\RailPricingSolutionRef) {
                $invalidValues[] = is_object($savedTripActivityRailPricingSolutionRefItem) ? get_class($savedTripActivityRailPricingSolutionRefItem) : sprintf('%s(%s)', gettype($savedTripActivityRailPricingSolutionRefItem), var_export($savedTripActivityRailPricingSolutionRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailPricingSolutionRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailPricingSolutionRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailPricingSolutionRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailPricingSolutionRef[] $railPricingSolutionRef
     * @return \Travelport\UniversalRecord\StructType\SavedTripActivity
     */
    public function setRailPricingSolutionRef(?array $railPricingSolutionRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($railPricingSolutionRefArrayErrorMessage = self::validateRailPricingSolutionRefForArrayConstraintFromSetRailPricingSolutionRef($railPricingSolutionRef))) {
            throw new InvalidArgumentException($railPricingSolutionRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railPricingSolutionRef) && count($railPricingSolutionRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railPricingSolutionRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailPricingSolutionRef) {
            throw new InvalidArgumentException(sprintf('The RailPricingSolutionRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailPricingSolutionRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailPricingSolutionRef) && count($this->RailPricingSolutionRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailPricingSolutionRef)), __LINE__);
        }
        $this->RailPricingSolutionRef[] = $item;
        
        return $this;
    }
}
