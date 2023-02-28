<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCreateReservationReq StructType
 * @subpackage Structs
 */
class VehicleCreateReservationReq extends BaseCreateWithFormOfPaymentReq
{
    /**
     * The Email
     * @var \Travelport\UniversalRecord\StructType\Email|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Email $Email = null;
    /**
     * The PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The VehicleDateLocation
     * @var \Travelport\UniversalRecord\StructType\VehicleDateLocation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\VehicleDateLocation $VehicleDateLocation = null;
    /**
     * The Vehicle
     * @var \Travelport\UniversalRecord\StructType\Vehicle|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Vehicle $Vehicle = null;
    /**
     * The SpecialEquipment
     * @var \Travelport\UniversalRecord\StructType\SpecialEquipment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\SpecialEquipment $SpecialEquipment = null;
    /**
     * The VehicleSpecialRequest
     * @var \Travelport\UniversalRecord\StructType\VehicleSpecialRequest|null
     */
    protected ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $VehicleSpecialRequest = null;
    /**
     * The PaymentInformation
     * @var \Travelport\UniversalRecord\StructType\PaymentInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PaymentInformation $PaymentInformation = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PointOfSale $PointOfSale = null;
    /**
     * The DeliveryAddress
     * @var \Travelport\UniversalRecord\StructType\DeliveryAddress|null
     */
    protected ?\Travelport\UniversalRecord\StructType\DeliveryAddress $DeliveryAddress = null;
    /**
     * The CollectionAddress
     * @var \Travelport\UniversalRecord\StructType\CollectionAddress|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CollectionAddress $CollectionAddress = null;
    /**
     * The FlightArrivalInformation
     * @var \Travelport\UniversalRecord\StructType\FlightArrivalInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $FlightArrivalInformation = null;
    /**
     * The Guarantee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Guarantee
     * @var \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - choice: AssociatedRemark
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    protected ?array $AssociatedRemark = null;
    /**
     * The BookingSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The ReservationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ReservationName
     * @var \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ReservationName $ReservationName = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $ThirdPartyInformation = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ActionStatus $ActionStatus = null;
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
     * The MandatoryRateMatch
     * Meta information extracted from the WSDL
     * - documentation: If true, vehicle will not be booked if there is a rate discrepancy. Default is false. Supported providers: 1P.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MandatoryRateMatch = null;
    /**
     * Constructor method for VehicleCreateReservationReq
     * @uses VehicleCreateReservationReq::setEmail()
     * @uses VehicleCreateReservationReq::setPhoneNumber()
     * @uses VehicleCreateReservationReq::setVehicleDateLocation()
     * @uses VehicleCreateReservationReq::setVehicle()
     * @uses VehicleCreateReservationReq::setSpecialEquipment()
     * @uses VehicleCreateReservationReq::setVehicleSpecialRequest()
     * @uses VehicleCreateReservationReq::setPaymentInformation()
     * @uses VehicleCreateReservationReq::setPointOfSale()
     * @uses VehicleCreateReservationReq::setDeliveryAddress()
     * @uses VehicleCreateReservationReq::setCollectionAddress()
     * @uses VehicleCreateReservationReq::setFlightArrivalInformation()
     * @uses VehicleCreateReservationReq::setGuarantee()
     * @uses VehicleCreateReservationReq::setAssociatedRemark()
     * @uses VehicleCreateReservationReq::setBookingSource()
     * @uses VehicleCreateReservationReq::setReservationName()
     * @uses VehicleCreateReservationReq::setThirdPartyInformation()
     * @uses VehicleCreateReservationReq::setActionStatus()
     * @uses VehicleCreateReservationReq::setReviewBooking()
     * @uses VehicleCreateReservationReq::setMandatoryRateMatch()
     * @param \Travelport\UniversalRecord\StructType\Email $email
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocation $vehicleDateLocation
     * @param \Travelport\UniversalRecord\StructType\Vehicle $vehicle
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment $specialEquipment
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation
     * @param \Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @param \Travelport\UniversalRecord\StructType\ReservationName $reservationName
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $actionStatus
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @param bool $mandatoryRateMatch
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Email $email = null, ?\Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\UniversalRecord\StructType\VehicleDateLocation $vehicleDateLocation = null, ?\Travelport\UniversalRecord\StructType\Vehicle $vehicle = null, ?\Travelport\UniversalRecord\StructType\SpecialEquipment $specialEquipment = null, ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest = null, ?\Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation = null, ?\Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale = null, ?\Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress = null, ?\Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress = null, ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation = null, ?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null, ?array $associatedRemark = null, ?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null, ?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null, ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null, ?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null, ?array $reviewBooking = null, ?bool $mandatoryRateMatch = false)
    {
        $this
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber)
            ->setVehicleDateLocation($vehicleDateLocation)
            ->setVehicle($vehicle)
            ->setSpecialEquipment($specialEquipment)
            ->setVehicleSpecialRequest($vehicleSpecialRequest)
            ->setPaymentInformation($paymentInformation)
            ->setPointOfSale($pointOfSale)
            ->setDeliveryAddress($deliveryAddress)
            ->setCollectionAddress($collectionAddress)
            ->setFlightArrivalInformation($flightArrivalInformation)
            ->setGuarantee($guarantee)
            ->setAssociatedRemark($associatedRemark)
            ->setBookingSource($bookingSource)
            ->setReservationName($reservationName)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setActionStatus($actionStatus)
            ->setReviewBooking($reviewBooking)
            ->setMandatoryRateMatch($mandatoryRateMatch);
    }
    /**
     * Get Email value
     * @return \Travelport\UniversalRecord\StructType\Email|null
     */
    public function getEmail(): ?\Travelport\UniversalRecord\StructType\Email
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\UniversalRecord\StructType\Email $email
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setEmail(?\Travelport\UniversalRecord\StructType\Email $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\UniversalRecord\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\UniversalRecord\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setPhoneNumber(?\Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get VehicleDateLocation value
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation|null
     */
    public function getVehicleDateLocation(): ?\Travelport\UniversalRecord\StructType\VehicleDateLocation
    {
        return $this->VehicleDateLocation;
    }
    /**
     * Set VehicleDateLocation value
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocation $vehicleDateLocation
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setVehicleDateLocation(?\Travelport\UniversalRecord\StructType\VehicleDateLocation $vehicleDateLocation = null): self
    {
        $this->VehicleDateLocation = $vehicleDateLocation;
        
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Travelport\UniversalRecord\StructType\Vehicle|null
     */
    public function getVehicle(): ?\Travelport\UniversalRecord\StructType\Vehicle
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Travelport\UniversalRecord\StructType\Vehicle $vehicle
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setVehicle(?\Travelport\UniversalRecord\StructType\Vehicle $vehicle = null): self
    {
        $this->Vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get SpecialEquipment value
     * @return \Travelport\UniversalRecord\StructType\SpecialEquipment|null
     */
    public function getSpecialEquipment(): ?\Travelport\UniversalRecord\StructType\SpecialEquipment
    {
        return $this->SpecialEquipment;
    }
    /**
     * Set SpecialEquipment value
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment $specialEquipment
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setSpecialEquipment(?\Travelport\UniversalRecord\StructType\SpecialEquipment $specialEquipment = null): self
    {
        $this->SpecialEquipment = $specialEquipment;
        
        return $this;
    }
    /**
     * Get VehicleSpecialRequest value
     * @return \Travelport\UniversalRecord\StructType\VehicleSpecialRequest|null
     */
    public function getVehicleSpecialRequest(): ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest
    {
        return $this->VehicleSpecialRequest;
    }
    /**
     * Set VehicleSpecialRequest value
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setVehicleSpecialRequest(?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest = null): self
    {
        $this->VehicleSpecialRequest = $vehicleSpecialRequest;
        
        return $this;
    }
    /**
     * Get PaymentInformation value
     * @return \Travelport\UniversalRecord\StructType\PaymentInformation|null
     */
    public function getPaymentInformation(): ?\Travelport\UniversalRecord\StructType\PaymentInformation
    {
        return $this->PaymentInformation;
    }
    /**
     * Set PaymentInformation value
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setPaymentInformation(?\Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation = null): self
    {
        $this->PaymentInformation = $paymentInformation;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\UniversalRecord\StructType\PointOfSale|null
     */
    public function getPointOfSale(): ?\Travelport\UniversalRecord\StructType\PointOfSale
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setPointOfSale(?\Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Get DeliveryAddress value
     * @return \Travelport\UniversalRecord\StructType\DeliveryAddress|null
     */
    public function getDeliveryAddress(): ?\Travelport\UniversalRecord\StructType\DeliveryAddress
    {
        return $this->DeliveryAddress;
    }
    /**
     * Set DeliveryAddress value
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setDeliveryAddress(?\Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress = null): self
    {
        $this->DeliveryAddress = $deliveryAddress;
        
        return $this;
    }
    /**
     * Get CollectionAddress value
     * @return \Travelport\UniversalRecord\StructType\CollectionAddress|null
     */
    public function getCollectionAddress(): ?\Travelport\UniversalRecord\StructType\CollectionAddress
    {
        return $this->CollectionAddress;
    }
    /**
     * Set CollectionAddress value
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setCollectionAddress(?\Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress = null): self
    {
        $this->CollectionAddress = $collectionAddress;
        
        return $this;
    }
    /**
     * Get FlightArrivalInformation value
     * @return \Travelport\UniversalRecord\StructType\FlightArrivalInformation|null
     */
    public function getFlightArrivalInformation(): ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation
    {
        return $this->FlightArrivalInformation;
    }
    /**
     * Set FlightArrivalInformation value
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setFlightArrivalInformation(?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation = null): self
    {
        $this->FlightArrivalInformation = $flightArrivalInformation;
        
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    public function getGuarantee(): ?\Travelport\UniversalRecord\StructType\Guarantee
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setGuarantee(?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null): self
    {
        $this->Guarantee = $guarantee;
        
        return $this;
    }
    /**
     * Get AssociatedRemark value
     * @return \Travelport\UniversalRecord\StructType\AssociatedRemark[]|null
     */
    public function getAssociatedRemark(): ?array
    {
        return $this->AssociatedRemark ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociatedRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssociatedRemarkForArrayConstraintFromSetAssociatedRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleCreateReservationReqAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$vehicleCreateReservationReqAssociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($vehicleCreateReservationReqAssociatedRemarkItem) ? get_class($vehicleCreateReservationReqAssociatedRemarkItem) : sprintf('%s(%s)', gettype($vehicleCreateReservationReqAssociatedRemarkItem), var_export($vehicleCreateReservationReqAssociatedRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociatedRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAssociatedRemarkForChoiceConstraintFromSetAssociatedRemark($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AssociatedRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: AssociatedRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AssociatedRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($associatedRemarkArrayErrorMessage = self::validateAssociatedRemarkForArrayConstraintFromSetAssociatedRemark($associatedRemark))) {
            throw new InvalidArgumentException($associatedRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AssociatedRemark)
        if ('' !== ($associatedRemarkChoiceErrorMessage = self::validateAssociatedRemarkForChoiceConstraintFromSetAssociatedRemark($associatedRemark))) {
            throw new InvalidArgumentException($associatedRemarkChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($associatedRemark) && count($associatedRemark) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($associatedRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($associatedRemark) && count($associatedRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($associatedRemark)), __LINE__);
        }
        if (is_null($associatedRemark) || (is_array($associatedRemark) && empty($associatedRemark))) {
            unset($this->AssociatedRemark);
        } else {
            $this->AssociatedRemark = $associatedRemark;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAssociatedRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAssociatedRemark($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AssociatedRemark can\'t be set as the property %s is already set. Only one property must be set among these properties: AssociatedRemark, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
            throw new InvalidArgumentException(sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AssociatedRemark)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAssociatedRemark($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AssociatedRemark) && count($this->AssociatedRemark) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AssociatedRemark)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AssociatedRemark) && count($this->AssociatedRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AssociatedRemark)), __LINE__);
        }
        $this->AssociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get BookingSource value
     * @return \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    public function getBookingSource(): ?\Travelport\UniversalRecord\StructType\BookingSource
    {
        return $this->BookingSource;
    }
    /**
     * Set BookingSource value
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setBookingSource(?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null): self
    {
        $this->BookingSource = $bookingSource;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setReservationName(?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null): self
    {
        $this->ReservationName = $reservationName;
        
        return $this;
    }
    /**
     * Get ThirdPartyInformation value
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    public function getThirdPartyInformation(): ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation
    {
        return $this->ThirdPartyInformation;
    }
    /**
     * Set ThirdPartyInformation value
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setThirdPartyInformation(?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null): self
    {
        $this->ThirdPartyInformation = $thirdPartyInformation;
        
        return $this;
    }
    /**
     * Get ActionStatus value
     * @return \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    public function getActionStatus(): ?\Travelport\UniversalRecord\StructType\ActionStatus
    {
        return $this->ActionStatus;
    }
    /**
     * Set ActionStatus value
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $actionStatus
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setActionStatus(?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null): self
    {
        $this->ActionStatus = $actionStatus;
        
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
     * This method is responsible for validating the value(s) passed to the setReviewBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReviewBooking method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReviewBookingForArrayConstraintFromSetReviewBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleCreateReservationReqReviewBookingItem) {
            // validation for constraint: itemType
            if (!$vehicleCreateReservationReqReviewBookingItem instanceof \Travelport\UniversalRecord\StructType\ReviewBooking) {
                $invalidValues[] = is_object($vehicleCreateReservationReqReviewBookingItem) ? get_class($vehicleCreateReservationReqReviewBookingItem) : sprintf('%s(%s)', gettype($vehicleCreateReservationReqReviewBookingItem), var_export($vehicleCreateReservationReqReviewBookingItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setReviewBooking(?array $reviewBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($reviewBookingArrayErrorMessage = self::validateReviewBookingForArrayConstraintFromSetReviewBooking($reviewBooking))) {
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
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
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
     * Get MandatoryRateMatch value
     * @return bool|null
     */
    public function getMandatoryRateMatch(): ?bool
    {
        return $this->MandatoryRateMatch;
    }
    /**
     * Set MandatoryRateMatch value
     * @param bool $mandatoryRateMatch
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setMandatoryRateMatch(?bool $mandatoryRateMatch = false): self
    {
        // validation for constraint: boolean
        if (!is_null($mandatoryRateMatch) && !is_bool($mandatoryRateMatch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mandatoryRateMatch, true), gettype($mandatoryRateMatch)), __LINE__);
        }
        $this->MandatoryRateMatch = $mandatoryRateMatch;
        
        return $this;
    }
}
