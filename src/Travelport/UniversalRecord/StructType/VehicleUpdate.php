<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleUpdate StructType
 * Meta information extracted from the WSDL
 * - documentation: The flight arrival information(airline code and flight number) for the airport/city at which the rental car will be picked up || Addition and Update in UR Modify is currently implemented only for Galileo(1G) and Apollo(1V). | Third
 * party supplier locator information. Specifically applicable for SDK booking. Previously saved values can be updated for SupplierCode, SupplierName and SupplierLocatorCode. If an attribute is not passed here, then previously saved value for that
 * attribute will be deleted.
 * @subpackage Structs
 */
class VehicleUpdate extends AbstractStructBase
{
    /**
     * The ReservationLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    public string $ReservationLocatorCode;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    public ?array $LoyaltyCard = null;
    /**
     * The DriversLicense
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:DriversLicense
     * @var \Travelport\UniversalRecord\StructType\DriversLicense|null
     */
    public ?\Travelport\UniversalRecord\StructType\DriversLicense $DriversLicense = null;
    /**
     * The Guarantee
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:Guarantee
     * @var \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    public ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
    /**
     * The BookingSource
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    public ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The VehicleRateInfo
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:VehicleRateInfo
     * @var \Travelport\UniversalRecord\StructType\VehicleRateInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\VehicleRateInfo $VehicleRateInfo = null;
    /**
     * The PaymentInformation
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:PaymentInformation
     * @var \Travelport\UniversalRecord\StructType\PaymentInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\PaymentInformation $PaymentInformation = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public ?array $AssociatedRemark = null;
    /**
     * The VehicleSpecialRequest
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:VehicleSpecialRequest
     * @var \Travelport\UniversalRecord\StructType\VehicleSpecialRequest|null
     */
    public ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $VehicleSpecialRequest = null;
    /**
     * The DeliveryAddress
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:DeliveryAddress
     * @var \Travelport\UniversalRecord\StructType\DeliveryAddress|null
     */
    public ?\Travelport\UniversalRecord\StructType\DeliveryAddress $DeliveryAddress = null;
    /**
     * The CollectionAddress
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:CollectionAddress
     * @var \Travelport\UniversalRecord\StructType\CollectionAddress|null
     */
    public ?\Travelport\UniversalRecord\StructType\CollectionAddress $CollectionAddress = null;
    /**
     * The VehicleReturnDateLocation
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:VehicleReturnDateLocation
     * @var \Travelport\UniversalRecord\StructType\VehicleReturnDateLocation|null
     */
    public ?\Travelport\UniversalRecord\StructType\VehicleReturnDateLocation $VehicleReturnDateLocation = null;
    /**
     * The VehiclePickupDateLocation
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:VehiclePickupDateLocation
     * @var \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation|null
     */
    public ?\Travelport\UniversalRecord\StructType\VehiclePickupDateLocation $VehiclePickupDateLocation = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $ThirdPartyInformation = null;
    /**
     * The TravelComplianceData
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:TravelComplianceData
     * @var \Travelport\UniversalRecord\StructType\TravelComplianceData[]
     */
    public ?array $TravelComplianceData = null;
    /**
     * The VehicleTypeIdentifier
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:VehicleTypeIdentifier
     * @var \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier|null
     */
    public ?\Travelport\UniversalRecord\StructType\VehicleTypeIdentifier $VehicleTypeIdentifier = null;
    /**
     * The FlightArrivalInformation
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | Guarantee | BookingSource | VehicleRateInfo | PaymentInformation | AssociatedRemark | VehicleSpecialRequest | DeliveryAddress | CollectionAddress | VehicleReturnDateLocation | VehiclePickupDateLocation |
     * ThirdPartyInformation | TravelComplianceData | VehicleTypeIdentifier | FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:FlightArrivalInformation
     * @var \Travelport\UniversalRecord\StructType\FlightArrivalInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $FlightArrivalInformation = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: BookingTravelerRef will be used to specify BookingTraveler in UR. Currently this will be used to LoyaltyCard modification. Later this can used for other elements which are associated with BookngTraveler. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * Constructor method for VehicleUpdate
     * @uses VehicleUpdate::setReservationLocatorCode()
     * @uses VehicleUpdate::setLoyaltyCard()
     * @uses VehicleUpdate::setDriversLicense()
     * @uses VehicleUpdate::setGuarantee()
     * @uses VehicleUpdate::setBookingSource()
     * @uses VehicleUpdate::setVehicleRateInfo()
     * @uses VehicleUpdate::setPaymentInformation()
     * @uses VehicleUpdate::setAssociatedRemark()
     * @uses VehicleUpdate::setVehicleSpecialRequest()
     * @uses VehicleUpdate::setDeliveryAddress()
     * @uses VehicleUpdate::setCollectionAddress()
     * @uses VehicleUpdate::setVehicleReturnDateLocation()
     * @uses VehicleUpdate::setVehiclePickupDateLocation()
     * @uses VehicleUpdate::setThirdPartyInformation()
     * @uses VehicleUpdate::setTravelComplianceData()
     * @uses VehicleUpdate::setVehicleTypeIdentifier()
     * @uses VehicleUpdate::setFlightArrivalInformation()
     * @uses VehicleUpdate::setBookingTravelerRef()
     * @param string $reservationLocatorCode
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\UniversalRecord\StructType\DriversLicense $driversLicense
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @param \Travelport\UniversalRecord\StructType\VehicleRateInfo $vehicleRateInfo
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress
     * @param \Travelport\UniversalRecord\StructType\VehicleReturnDateLocation $vehicleReturnDateLocation
     * @param \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation $vehiclePickupDateLocation
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @param \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier $vehicleTypeIdentifier
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation
     * @param string $bookingTravelerRef
     */
    public function __construct(string $reservationLocatorCode, ?array $loyaltyCard = null, ?\Travelport\UniversalRecord\StructType\DriversLicense $driversLicense = null, ?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null, ?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null, ?\Travelport\UniversalRecord\StructType\VehicleRateInfo $vehicleRateInfo = null, ?\Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation = null, ?array $associatedRemark = null, ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest = null, ?\Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress = null, ?\Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress = null, ?\Travelport\UniversalRecord\StructType\VehicleReturnDateLocation $vehicleReturnDateLocation = null, ?\Travelport\UniversalRecord\StructType\VehiclePickupDateLocation $vehiclePickupDateLocation = null, ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null, ?array $travelComplianceData = null, ?\Travelport\UniversalRecord\StructType\VehicleTypeIdentifier $vehicleTypeIdentifier = null, ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setReservationLocatorCode($reservationLocatorCode)
            ->setLoyaltyCard($loyaltyCard)
            ->setDriversLicense($driversLicense)
            ->setGuarantee($guarantee)
            ->setBookingSource($bookingSource)
            ->setVehicleRateInfo($vehicleRateInfo)
            ->setPaymentInformation($paymentInformation)
            ->setAssociatedRemark($associatedRemark)
            ->setVehicleSpecialRequest($vehicleSpecialRequest)
            ->setDeliveryAddress($deliveryAddress)
            ->setCollectionAddress($collectionAddress)
            ->setVehicleReturnDateLocation($vehicleReturnDateLocation)
            ->setVehiclePickupDateLocation($vehiclePickupDateLocation)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setTravelComplianceData($travelComplianceData)
            ->setVehicleTypeIdentifier($vehicleTypeIdentifier)
            ->setFlightArrivalInformation($flightArrivalInformation)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get ReservationLocatorCode value
     * @return string
     */
    public function getReservationLocatorCode(): string
    {
        return $this->ReservationLocatorCode;
    }
    /**
     * Set ReservationLocatorCode value
     * @param string $reservationLocatorCode
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setReservationLocatorCode(string $reservationLocatorCode): self
    {
        $this->ReservationLocatorCode = $reservationLocatorCode;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard[]|null
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard ?? null;
    }
    /**
     * Set LoyaltyCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        if (is_null($loyaltyCard) || (is_array($loyaltyCard) && empty($loyaltyCard))) {
            unset($this->LoyaltyCard);
        } else {
            $this->LoyaltyCard = $loyaltyCard;
        }
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard $item
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function addToLoyaltyCard(\Travelport\UniversalRecord\StructType\LoyaltyCard $item): self
    {
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get DriversLicense value
     * @return \Travelport\UniversalRecord\StructType\DriversLicense|null
     */
    public function getDriversLicense(): ?\Travelport\UniversalRecord\StructType\DriversLicense
    {
        return $this->DriversLicense ?? null;
    }
    /**
     * Set DriversLicense value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\DriversLicense $driversLicense
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setDriversLicense(?\Travelport\UniversalRecord\StructType\DriversLicense $driversLicense = null): self
    {
        if (is_null($driversLicense) || (is_array($driversLicense) && empty($driversLicense))) {
            unset($this->DriversLicense);
        } else {
            $this->DriversLicense = $driversLicense;
        }
        
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    public function getGuarantee(): ?\Travelport\UniversalRecord\StructType\Guarantee
    {
        return $this->Guarantee ?? null;
    }
    /**
     * Set Guarantee value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setGuarantee(?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null): self
    {
        if (is_null($guarantee) || (is_array($guarantee) && empty($guarantee))) {
            unset($this->Guarantee);
        } else {
            $this->Guarantee = $guarantee;
        }
        
        return $this;
    }
    /**
     * Get BookingSource value
     * @return \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    public function getBookingSource(): ?\Travelport\UniversalRecord\StructType\BookingSource
    {
        return $this->BookingSource ?? null;
    }
    /**
     * Set BookingSource value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setBookingSource(?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null): self
    {
        if (is_null($bookingSource) || (is_array($bookingSource) && empty($bookingSource))) {
            unset($this->BookingSource);
        } else {
            $this->BookingSource = $bookingSource;
        }
        
        return $this;
    }
    /**
     * Get VehicleRateInfo value
     * @return \Travelport\UniversalRecord\StructType\VehicleRateInfo|null
     */
    public function getVehicleRateInfo(): ?\Travelport\UniversalRecord\StructType\VehicleRateInfo
    {
        return $this->VehicleRateInfo ?? null;
    }
    /**
     * Set VehicleRateInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\VehicleRateInfo $vehicleRateInfo
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setVehicleRateInfo(?\Travelport\UniversalRecord\StructType\VehicleRateInfo $vehicleRateInfo = null): self
    {
        if (is_null($vehicleRateInfo) || (is_array($vehicleRateInfo) && empty($vehicleRateInfo))) {
            unset($this->VehicleRateInfo);
        } else {
            $this->VehicleRateInfo = $vehicleRateInfo;
        }
        
        return $this;
    }
    /**
     * Get PaymentInformation value
     * @return \Travelport\UniversalRecord\StructType\PaymentInformation|null
     */
    public function getPaymentInformation(): ?\Travelport\UniversalRecord\StructType\PaymentInformation
    {
        return $this->PaymentInformation ?? null;
    }
    /**
     * Set PaymentInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setPaymentInformation(?\Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation = null): self
    {
        if (is_null($paymentInformation) || (is_array($paymentInformation) && empty($paymentInformation))) {
            unset($this->PaymentInformation);
        } else {
            $this->PaymentInformation = $paymentInformation;
        }
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
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
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        $this->AssociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleSpecialRequest value
     * @return \Travelport\UniversalRecord\StructType\VehicleSpecialRequest|null
     */
    public function getVehicleSpecialRequest(): ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest
    {
        return $this->VehicleSpecialRequest ?? null;
    }
    /**
     * Set VehicleSpecialRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setVehicleSpecialRequest(?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest = null): self
    {
        if (is_null($vehicleSpecialRequest) || (is_array($vehicleSpecialRequest) && empty($vehicleSpecialRequest))) {
            unset($this->VehicleSpecialRequest);
        } else {
            $this->VehicleSpecialRequest = $vehicleSpecialRequest;
        }
        
        return $this;
    }
    /**
     * Get DeliveryAddress value
     * @return \Travelport\UniversalRecord\StructType\DeliveryAddress|null
     */
    public function getDeliveryAddress(): ?\Travelport\UniversalRecord\StructType\DeliveryAddress
    {
        return $this->DeliveryAddress ?? null;
    }
    /**
     * Set DeliveryAddress value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setDeliveryAddress(?\Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress = null): self
    {
        if (is_null($deliveryAddress) || (is_array($deliveryAddress) && empty($deliveryAddress))) {
            unset($this->DeliveryAddress);
        } else {
            $this->DeliveryAddress = $deliveryAddress;
        }
        
        return $this;
    }
    /**
     * Get CollectionAddress value
     * @return \Travelport\UniversalRecord\StructType\CollectionAddress|null
     */
    public function getCollectionAddress(): ?\Travelport\UniversalRecord\StructType\CollectionAddress
    {
        return $this->CollectionAddress ?? null;
    }
    /**
     * Set CollectionAddress value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setCollectionAddress(?\Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress = null): self
    {
        if (is_null($collectionAddress) || (is_array($collectionAddress) && empty($collectionAddress))) {
            unset($this->CollectionAddress);
        } else {
            $this->CollectionAddress = $collectionAddress;
        }
        
        return $this;
    }
    /**
     * Get VehicleReturnDateLocation value
     * @return \Travelport\UniversalRecord\StructType\VehicleReturnDateLocation|null
     */
    public function getVehicleReturnDateLocation(): ?\Travelport\UniversalRecord\StructType\VehicleReturnDateLocation
    {
        return $this->VehicleReturnDateLocation ?? null;
    }
    /**
     * Set VehicleReturnDateLocation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\VehicleReturnDateLocation $vehicleReturnDateLocation
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setVehicleReturnDateLocation(?\Travelport\UniversalRecord\StructType\VehicleReturnDateLocation $vehicleReturnDateLocation = null): self
    {
        if (is_null($vehicleReturnDateLocation) || (is_array($vehicleReturnDateLocation) && empty($vehicleReturnDateLocation))) {
            unset($this->VehicleReturnDateLocation);
        } else {
            $this->VehicleReturnDateLocation = $vehicleReturnDateLocation;
        }
        
        return $this;
    }
    /**
     * Get VehiclePickupDateLocation value
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation|null
     */
    public function getVehiclePickupDateLocation(): ?\Travelport\UniversalRecord\StructType\VehiclePickupDateLocation
    {
        return $this->VehiclePickupDateLocation ?? null;
    }
    /**
     * Set VehiclePickupDateLocation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation $vehiclePickupDateLocation
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setVehiclePickupDateLocation(?\Travelport\UniversalRecord\StructType\VehiclePickupDateLocation $vehiclePickupDateLocation = null): self
    {
        if (is_null($vehiclePickupDateLocation) || (is_array($vehiclePickupDateLocation) && empty($vehiclePickupDateLocation))) {
            unset($this->VehiclePickupDateLocation);
        } else {
            $this->VehiclePickupDateLocation = $vehiclePickupDateLocation;
        }
        
        return $this;
    }
    /**
     * Get ThirdPartyInformation value
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    public function getThirdPartyInformation(): ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation
    {
        return $this->ThirdPartyInformation ?? null;
    }
    /**
     * Set ThirdPartyInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setThirdPartyInformation(?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null): self
    {
        if (is_null($thirdPartyInformation) || (is_array($thirdPartyInformation) && empty($thirdPartyInformation))) {
            unset($this->ThirdPartyInformation);
        } else {
            $this->ThirdPartyInformation = $thirdPartyInformation;
        }
        
        return $this;
    }
    /**
     * Get TravelComplianceData value
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData[]|null
     */
    public function getTravelComplianceData(): ?array
    {
        return $this->TravelComplianceData ?? null;
    }
    /**
     * Set TravelComplianceData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setTravelComplianceData(?array $travelComplianceData = null): self
    {
        if (is_null($travelComplianceData) || (is_array($travelComplianceData) && empty($travelComplianceData))) {
            unset($this->TravelComplianceData);
        } else {
            $this->TravelComplianceData = $travelComplianceData;
        }
        
        return $this;
    }
    /**
     * Add item to TravelComplianceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData $item
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function addToTravelComplianceData(\Travelport\UniversalRecord\StructType\TravelComplianceData $item): self
    {
        $this->TravelComplianceData[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleTypeIdentifier value
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier|null
     */
    public function getVehicleTypeIdentifier(): ?\Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
    {
        return $this->VehicleTypeIdentifier ?? null;
    }
    /**
     * Set VehicleTypeIdentifier value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier $vehicleTypeIdentifier
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setVehicleTypeIdentifier(?\Travelport\UniversalRecord\StructType\VehicleTypeIdentifier $vehicleTypeIdentifier = null): self
    {
        if (is_null($vehicleTypeIdentifier) || (is_array($vehicleTypeIdentifier) && empty($vehicleTypeIdentifier))) {
            unset($this->VehicleTypeIdentifier);
        } else {
            $this->VehicleTypeIdentifier = $vehicleTypeIdentifier;
        }
        
        return $this;
    }
    /**
     * Get FlightArrivalInformation value
     * @return \Travelport\UniversalRecord\StructType\FlightArrivalInformation|null
     */
    public function getFlightArrivalInformation(): ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation
    {
        return $this->FlightArrivalInformation ?? null;
    }
    /**
     * Set FlightArrivalInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setFlightArrivalInformation(?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation = null): self
    {
        if (is_null($flightArrivalInformation) || (is_array($flightArrivalInformation) && empty($flightArrivalInformation))) {
            unset($this->FlightArrivalInformation);
        } else {
            $this->FlightArrivalInformation = $flightArrivalInformation;
        }
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\VehicleUpdate
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
