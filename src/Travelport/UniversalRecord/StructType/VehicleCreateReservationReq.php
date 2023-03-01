<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?\Travelport\UniversalRecord\StructType\Email $Email = null;
    /**
     * The PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber|null
     */
    public ?\Travelport\UniversalRecord\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The VehicleDateLocation
     * @var \Travelport\UniversalRecord\StructType\VehicleDateLocation|null
     */
    public ?\Travelport\UniversalRecord\StructType\VehicleDateLocation $VehicleDateLocation = null;
    /**
     * The Vehicle
     * @var \Travelport\UniversalRecord\StructType\Vehicle|null
     */
    public ?\Travelport\UniversalRecord\StructType\Vehicle $Vehicle = null;
    /**
     * The SpecialEquipment
     * @var \Travelport\UniversalRecord\StructType\SpecialEquipment|null
     */
    public ?\Travelport\UniversalRecord\StructType\SpecialEquipment $SpecialEquipment = null;
    /**
     * The VehicleSpecialRequest
     * @var \Travelport\UniversalRecord\StructType\VehicleSpecialRequest|null
     */
    public ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $VehicleSpecialRequest = null;
    /**
     * The PaymentInformation
     * @var \Travelport\UniversalRecord\StructType\PaymentInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\PaymentInformation $PaymentInformation = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale|null
     */
    public ?\Travelport\UniversalRecord\StructType\PointOfSale $PointOfSale = null;
    /**
     * The DeliveryAddress
     * @var \Travelport\UniversalRecord\StructType\DeliveryAddress|null
     */
    public ?\Travelport\UniversalRecord\StructType\DeliveryAddress $DeliveryAddress = null;
    /**
     * The CollectionAddress
     * @var \Travelport\UniversalRecord\StructType\CollectionAddress|null
     */
    public ?\Travelport\UniversalRecord\StructType\CollectionAddress $CollectionAddress = null;
    /**
     * The FlightArrivalInformation
     * @var \Travelport\UniversalRecord\StructType\FlightArrivalInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $FlightArrivalInformation = null;
    /**
     * The Guarantee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Guarantee
     * @var \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    public ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
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
    public ?array $AssociatedRemark = null;
    /**
     * The BookingSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    public ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The ReservationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ReservationName
     * @var \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    public ?\Travelport\UniversalRecord\StructType\ReservationName $ReservationName = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $ThirdPartyInformation = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    public ?\Travelport\UniversalRecord\StructType\ActionStatus $ActionStatus = null;
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
     * The MandatoryRateMatch
     * Meta information extracted from the WSDL
     * - documentation: If true, vehicle will not be booked if there is a rate discrepancy. Default is false. Supported providers: 1P.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $MandatoryRateMatch = null;
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
     * Set AssociatedRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        if (is_null($associatedRemark) || (is_array($associatedRemark) && empty($associatedRemark))) {
            unset($this->AssociatedRemark);
        } else {
            $this->AssociatedRemark = $associatedRemark;
        }
        
        return $this;
    }
    /**
     * Add item to AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
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
     * Set ReviewBooking value
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\VehicleCreateReservationReq
     */
    public function addToReviewBooking(\Travelport\UniversalRecord\StructType\ReviewBooking $item): self
    {
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
        $this->MandatoryRateMatch = $mandatoryRateMatch;
        
        return $this;
    }
}
