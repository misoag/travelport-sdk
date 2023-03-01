<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReservation StructType
 * @subpackage Structs
 */
class VehicleReservation extends BaseReservation
{
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $SupplierCode;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Status;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The ReservationName
     * @var \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    public ?\Travelport\UniversalRecord\StructType\ReservationName $ReservationName = null;
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
     * @var \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    public ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
    /**
     * The AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark|null
     */
    public ?\Travelport\UniversalRecord\StructType\AssociatedRemark $AssociatedRemark = null;
    /**
     * The BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    public ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $ThirdPartyInformation = null;
    /**
     * The SellMessage
     * @var string|null
     */
    public ?string $SellMessage = null;
    /**
     * The BookingConfirmation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $BookingConfirmation = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The PassiveProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Passive Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PassiveProviderReservationInfoRef = null;
    /**
     * The TravelOrder
     * Meta information extracted from the WSDL
     * - documentation: To identify the appropriate sequence for Air/Car/Hotel segments based on travel dates.
     * - use: optional
     * @var int|null
     */
    public ?int $TravelOrder = null;
    /**
     * The ProviderSegmentOrder
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 999
     * - use: optional
     * @var int|null
     */
    public ?int $ProviderSegmentOrder = null;
    /**
     * Constructor method for VehicleReservation
     * @uses VehicleReservation::setSupplierCode()
     * @uses VehicleReservation::setStatus()
     * @uses VehicleReservation::setBookingTravelerRef()
     * @uses VehicleReservation::setReservationName()
     * @uses VehicleReservation::setEmail()
     * @uses VehicleReservation::setPhoneNumber()
     * @uses VehicleReservation::setVehicleDateLocation()
     * @uses VehicleReservation::setVehicle()
     * @uses VehicleReservation::setSpecialEquipment()
     * @uses VehicleReservation::setVehicleSpecialRequest()
     * @uses VehicleReservation::setPaymentInformation()
     * @uses VehicleReservation::setDeliveryAddress()
     * @uses VehicleReservation::setCollectionAddress()
     * @uses VehicleReservation::setFlightArrivalInformation()
     * @uses VehicleReservation::setGuarantee()
     * @uses VehicleReservation::setAssociatedRemark()
     * @uses VehicleReservation::setBookingSource()
     * @uses VehicleReservation::setThirdPartyInformation()
     * @uses VehicleReservation::setSellMessage()
     * @uses VehicleReservation::setBookingConfirmation()
     * @uses VehicleReservation::setProviderReservationInfoRef()
     * @uses VehicleReservation::setPassiveProviderReservationInfoRef()
     * @uses VehicleReservation::setTravelOrder()
     * @uses VehicleReservation::setProviderSegmentOrder()
     * @param string $supplierCode
     * @param string $status
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\ReservationName $reservationName
     * @param \Travelport\UniversalRecord\StructType\Email $email
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocation $vehicleDateLocation
     * @param \Travelport\UniversalRecord\StructType\Vehicle $vehicle
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment $specialEquipment
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @param string $sellMessage
     * @param string $bookingConfirmation
     * @param string $providerReservationInfoRef
     * @param string $passiveProviderReservationInfoRef
     * @param int $travelOrder
     * @param int $providerSegmentOrder
     */
    public function __construct(string $supplierCode, string $status, ?array $bookingTravelerRef = null, ?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null, ?\Travelport\UniversalRecord\StructType\Email $email = null, ?\Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\UniversalRecord\StructType\VehicleDateLocation $vehicleDateLocation = null, ?\Travelport\UniversalRecord\StructType\Vehicle $vehicle = null, ?\Travelport\UniversalRecord\StructType\SpecialEquipment $specialEquipment = null, ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest = null, ?\Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation = null, ?\Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress = null, ?\Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress = null, ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation = null, ?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null, ?\Travelport\UniversalRecord\StructType\AssociatedRemark $associatedRemark = null, ?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null, ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null, ?string $sellMessage = null, ?string $bookingConfirmation = null, ?string $providerReservationInfoRef = null, ?string $passiveProviderReservationInfoRef = null, ?int $travelOrder = null, ?int $providerSegmentOrder = null)
    {
        $this
            ->setSupplierCode($supplierCode)
            ->setStatus($status)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setReservationName($reservationName)
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber)
            ->setVehicleDateLocation($vehicleDateLocation)
            ->setVehicle($vehicle)
            ->setSpecialEquipment($specialEquipment)
            ->setVehicleSpecialRequest($vehicleSpecialRequest)
            ->setPaymentInformation($paymentInformation)
            ->setDeliveryAddress($deliveryAddress)
            ->setCollectionAddress($collectionAddress)
            ->setFlightArrivalInformation($flightArrivalInformation)
            ->setGuarantee($guarantee)
            ->setAssociatedRemark($associatedRemark)
            ->setBookingSource($bookingSource)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setSellMessage($sellMessage)
            ->setBookingConfirmation($bookingConfirmation)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setPassiveProviderReservationInfoRef($passiveProviderReservationInfoRef)
            ->setTravelOrder($travelOrder)
            ->setProviderSegmentOrder($providerSegmentOrder);
    }
    /**
     * Get SupplierCode value
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setSupplierCode(string $supplierCode): self
    {
        $this->SupplierCode = $supplierCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setStatus(string $status): self
    {
        $this->Status = $status;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setReservationName(?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null): self
    {
        $this->ReservationName = $reservationName;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setPaymentInformation(?\Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation = null): self
    {
        $this->PaymentInformation = $paymentInformation;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setGuarantee(?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null): self
    {
        $this->Guarantee = $guarantee;
        
        return $this;
    }
    /**
     * Get AssociatedRemark value
     * @return \Travelport\UniversalRecord\StructType\AssociatedRemark|null
     */
    public function getAssociatedRemark(): ?\Travelport\UniversalRecord\StructType\AssociatedRemark
    {
        return $this->AssociatedRemark;
    }
    /**
     * Set AssociatedRemark value
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setAssociatedRemark(?\Travelport\UniversalRecord\StructType\AssociatedRemark $associatedRemark = null): self
    {
        $this->AssociatedRemark = $associatedRemark;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setBookingSource(?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null): self
    {
        $this->BookingSource = $bookingSource;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setThirdPartyInformation(?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null): self
    {
        $this->ThirdPartyInformation = $thirdPartyInformation;
        
        return $this;
    }
    /**
     * Get SellMessage value
     * @return string|null
     */
    public function getSellMessage(): ?string
    {
        return $this->SellMessage;
    }
    /**
     * Set SellMessage value
     * @param string $sellMessage
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setSellMessage(?string $sellMessage = null): self
    {
        $this->SellMessage = $sellMessage;
        
        return $this;
    }
    /**
     * Get BookingConfirmation value
     * @return string|null
     */
    public function getBookingConfirmation(): ?string
    {
        return $this->BookingConfirmation;
    }
    /**
     * Set BookingConfirmation value
     * @param string $bookingConfirmation
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setBookingConfirmation(?string $bookingConfirmation = null): self
    {
        $this->BookingConfirmation = $bookingConfirmation;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get PassiveProviderReservationInfoRef value
     * @return string|null
     */
    public function getPassiveProviderReservationInfoRef(): ?string
    {
        return $this->PassiveProviderReservationInfoRef;
    }
    /**
     * Set PassiveProviderReservationInfoRef value
     * @param string $passiveProviderReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setPassiveProviderReservationInfoRef(?string $passiveProviderReservationInfoRef = null): self
    {
        $this->PassiveProviderReservationInfoRef = $passiveProviderReservationInfoRef;
        
        return $this;
    }
    /**
     * Get TravelOrder value
     * @return int|null
     */
    public function getTravelOrder(): ?int
    {
        return $this->TravelOrder;
    }
    /**
     * Set TravelOrder value
     * @param int $travelOrder
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        $this->TravelOrder = $travelOrder;
        
        return $this;
    }
    /**
     * Get ProviderSegmentOrder value
     * @return int|null
     */
    public function getProviderSegmentOrder(): ?int
    {
        return $this->ProviderSegmentOrder;
    }
    /**
     * Set ProviderSegmentOrder value
     * @param int $providerSegmentOrder
     * @return \Travelport\UniversalRecord\StructType\VehicleReservation
     */
    public function setProviderSegmentOrder(?int $providerSegmentOrder = null): self
    {
        $this->ProviderSegmentOrder = $providerSegmentOrder;
        
        return $this;
    }
}
