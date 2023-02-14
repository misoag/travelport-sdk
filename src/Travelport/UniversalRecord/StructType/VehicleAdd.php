<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAdd StructType
 * Meta information extracted from the WSDL
 * - documentation: The flight arrival information(airline code and flight number) for the airport/city at which the rental car will be picked up || Addition and Update in UR Modify is currently implemented only for Galileo(1G) and Apollo(1V).
 * @subpackage Structs
 */
class VehicleAdd extends AbstractStructBase
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
    protected string $ReservationLocatorCode;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    protected ?array $LoyaltyCard = null;
    /**
     * The DriversLicense
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:DriversLicense
     * @var \Travelport\UniversalRecord\StructType\DriversLicense|null
     */
    protected ?\Travelport\UniversalRecord\StructType\DriversLicense $DriversLicense = null;
    /**
     * The VehicleSpecialRequest
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:VehicleSpecialRequest
     * @var \Travelport\UniversalRecord\StructType\VehicleSpecialRequest|null
     */
    protected ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $VehicleSpecialRequest = null;
    /**
     * The SpecialEquipment
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:SpecialEquipment
     * @var \Travelport\UniversalRecord\StructType\SpecialEquipment[]
     */
    protected ?array $SpecialEquipment = null;
    /**
     * The PaymentInformation
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:PaymentInformation
     * @var \Travelport\UniversalRecord\StructType\PaymentInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PaymentInformation $PaymentInformation = null;
    /**
     * The Guarantee
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:Guarantee
     * @var \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
    /**
     * The BookingSource
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: vehicle_v52_0:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    protected ?array $AssociatedRemark = null;
    /**
     * The DeliveryAddress
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:DeliveryAddress
     * @var \Travelport\UniversalRecord\StructType\DeliveryAddress|null
     */
    protected ?\Travelport\UniversalRecord\StructType\DeliveryAddress $DeliveryAddress = null;
    /**
     * The CollectionAddress
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:CollectionAddress
     * @var \Travelport\UniversalRecord\StructType\CollectionAddress|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CollectionAddress $CollectionAddress = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $ThirdPartyInformation = null;
    /**
     * The TravelComplianceData
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:TravelComplianceData
     * @var \Travelport\UniversalRecord\StructType\TravelComplianceData[]
     */
    protected ?array $TravelComplianceData = null;
    /**
     * The FlightArrivalInformation
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | DriversLicense | VehicleSpecialRequest | SpecialEquipment | PaymentInformation | Guarantee | BookingSource | AssociatedRemark | DeliveryAddress | CollectionAddress | ThirdPartyInformation | TravelComplianceData |
     * FlightArrivalInformation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: vehicle_v52_0:FlightArrivalInformation
     * @var \Travelport\UniversalRecord\StructType\FlightArrivalInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $FlightArrivalInformation = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: BookingTravelerRef will be used to specify BookingTraveler in UR. Currently this will be used to LoyaltyCard modification. Later this can used for other elements which are associated with BookngTraveler. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * Constructor method for VehicleAdd
     * @uses VehicleAdd::setReservationLocatorCode()
     * @uses VehicleAdd::setLoyaltyCard()
     * @uses VehicleAdd::setDriversLicense()
     * @uses VehicleAdd::setVehicleSpecialRequest()
     * @uses VehicleAdd::setSpecialEquipment()
     * @uses VehicleAdd::setPaymentInformation()
     * @uses VehicleAdd::setGuarantee()
     * @uses VehicleAdd::setBookingSource()
     * @uses VehicleAdd::setAssociatedRemark()
     * @uses VehicleAdd::setDeliveryAddress()
     * @uses VehicleAdd::setCollectionAddress()
     * @uses VehicleAdd::setThirdPartyInformation()
     * @uses VehicleAdd::setTravelComplianceData()
     * @uses VehicleAdd::setFlightArrivalInformation()
     * @uses VehicleAdd::setBookingTravelerRef()
     * @param string $reservationLocatorCode
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\UniversalRecord\StructType\DriversLicense $driversLicense
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment[] $specialEquipment
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation
     * @param string $bookingTravelerRef
     */
    public function __construct(string $reservationLocatorCode, ?array $loyaltyCard = null, ?\Travelport\UniversalRecord\StructType\DriversLicense $driversLicense = null, ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest = null, ?array $specialEquipment = null, ?\Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation = null, ?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null, ?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null, ?array $associatedRemark = null, ?\Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress = null, ?\Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress = null, ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null, ?array $travelComplianceData = null, ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setReservationLocatorCode($reservationLocatorCode)
            ->setLoyaltyCard($loyaltyCard)
            ->setDriversLicense($driversLicense)
            ->setVehicleSpecialRequest($vehicleSpecialRequest)
            ->setSpecialEquipment($specialEquipment)
            ->setPaymentInformation($paymentInformation)
            ->setGuarantee($guarantee)
            ->setBookingSource($bookingSource)
            ->setAssociatedRemark($associatedRemark)
            ->setDeliveryAddress($deliveryAddress)
            ->setCollectionAddress($collectionAddress)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setTravelComplianceData($travelComplianceData)
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
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setReservationLocatorCode(string $reservationLocatorCode): self
    {
        // validation for constraint: string
        if (!is_null($reservationLocatorCode) && !is_string($reservationLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationLocatorCode, true), gettype($reservationLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($reservationLocatorCode) && mb_strlen((string) $reservationLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $reservationLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($reservationLocatorCode) && mb_strlen((string) $reservationLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $reservationLocatorCode)), __LINE__);
        }
        $this->ReservationLocatorCode = $reservationLocatorCode;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    public function getLoyaltyCard(): ?array
    {
        return isset($this->LoyaltyCard) ? $this->LoyaltyCard : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyCardForArrayConstraintsFromSetLoyaltyCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleAddLoyaltyCardItem) {
            // validation for constraint: itemType
            if (!$vehicleAddLoyaltyCardItem instanceof \Travelport\UniversalRecord\StructType\LoyaltyCard) {
                $invalidValues[] = is_object($vehicleAddLoyaltyCardItem) ? get_class($vehicleAddLoyaltyCardItem) : sprintf('%s(%s)', gettype($vehicleAddLoyaltyCardItem), var_export($vehicleAddLoyaltyCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCard property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCard method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateLoyaltyCardForChoiceConstraintsFromSetLoyaltyCard($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property LoyaltyCard can\'t be set as the property %s is already set. Only one property must be set among these properties: LoyaltyCard, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set LoyaltyCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardArrayErrorMessage = self::validateLoyaltyCardForArrayConstraintsFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($loyaltyCardChoiceErrorMessage = self::validateLoyaltyCardForChoiceConstraintsFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($loyaltyCard)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($loyaltyCard)), __LINE__);
        }
        if (is_null($loyaltyCard) || (is_array($loyaltyCard) && empty($loyaltyCard))) {
            unset($this->LoyaltyCard);
        } else {
            $this->LoyaltyCard = $loyaltyCard;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToLoyaltyCard method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToLoyaltyCard($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property LoyaltyCard can\'t be set as the property %s is already set. Only one property must be set among these properties: LoyaltyCard, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard $item
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function addToLoyaltyCard(\Travelport\UniversalRecord\StructType\LoyaltyCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LoyaltyCard) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCard property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToLoyaltyCard($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->LoyaltyCard)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LoyaltyCard)), __LINE__);
        }
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get DriversLicense value
     * @return \Travelport\UniversalRecord\StructType\DriversLicense|null
     */
    public function getDriversLicense(): ?\Travelport\UniversalRecord\StructType\DriversLicense
    {
        return isset($this->DriversLicense) ? $this->DriversLicense : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDriversLicense method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDriversLicense method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDriversLicenseForChoiceConstraintsFromSetDriversLicense($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DriversLicense can\'t be set as the property %s is already set. Only one property must be set among these properties: DriversLicense, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DriversLicense value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DriversLicense $driversLicense
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setDriversLicense(?\Travelport\UniversalRecord\StructType\DriversLicense $driversLicense = null): self
    {
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($driversLicenseChoiceErrorMessage = self::validateDriversLicenseForChoiceConstraintsFromSetDriversLicense($driversLicense))) {
            throw new InvalidArgumentException($driversLicenseChoiceErrorMessage, __LINE__);
        }
        if (is_null($driversLicense) || (is_array($driversLicense) && empty($driversLicense))) {
            unset($this->DriversLicense);
        } else {
            $this->DriversLicense = $driversLicense;
        }
        
        return $this;
    }
    /**
     * Get VehicleSpecialRequest value
     * @return \Travelport\UniversalRecord\StructType\VehicleSpecialRequest|null
     */
    public function getVehicleSpecialRequest(): ?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest
    {
        return isset($this->VehicleSpecialRequest) ? $this->VehicleSpecialRequest : null;
    }
    /**
     * This method is responsible for validating the value passed to the setVehicleSpecialRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleSpecialRequest method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleSpecialRequestForChoiceConstraintsFromSetVehicleSpecialRequest($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
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
     * @param \Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setVehicleSpecialRequest(?\Travelport\UniversalRecord\StructType\VehicleSpecialRequest $vehicleSpecialRequest = null): self
    {
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($vehicleSpecialRequestChoiceErrorMessage = self::validateVehicleSpecialRequestForChoiceConstraintsFromSetVehicleSpecialRequest($vehicleSpecialRequest))) {
            throw new InvalidArgumentException($vehicleSpecialRequestChoiceErrorMessage, __LINE__);
        }
        if (is_null($vehicleSpecialRequest) || (is_array($vehicleSpecialRequest) && empty($vehicleSpecialRequest))) {
            unset($this->VehicleSpecialRequest);
        } else {
            $this->VehicleSpecialRequest = $vehicleSpecialRequest;
        }
        
        return $this;
    }
    /**
     * Get SpecialEquipment value
     * @return \Travelport\UniversalRecord\StructType\SpecialEquipment[]
     */
    public function getSpecialEquipment(): ?array
    {
        return isset($this->SpecialEquipment) ? $this->SpecialEquipment : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSpecialEquipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecialEquipment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecialEquipmentForArrayConstraintsFromSetSpecialEquipment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleAddSpecialEquipmentItem) {
            // validation for constraint: itemType
            if (!$vehicleAddSpecialEquipmentItem instanceof \Travelport\UniversalRecord\StructType\SpecialEquipment) {
                $invalidValues[] = is_object($vehicleAddSpecialEquipmentItem) ? get_class($vehicleAddSpecialEquipmentItem) : sprintf('%s(%s)', gettype($vehicleAddSpecialEquipmentItem), var_export($vehicleAddSpecialEquipmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SpecialEquipment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecialEquipment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setSpecialEquipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecialEquipment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSpecialEquipmentForChoiceConstraintsFromSetSpecialEquipment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SpecialEquipment can\'t be set as the property %s is already set. Only one property must be set among these properties: SpecialEquipment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SpecialEquipment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment[] $specialEquipment
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setSpecialEquipment(?array $specialEquipment = null): self
    {
        // validation for constraint: array
        if ('' !== ($specialEquipmentArrayErrorMessage = self::validateSpecialEquipmentForArrayConstraintsFromSetSpecialEquipment($specialEquipment))) {
            throw new InvalidArgumentException($specialEquipmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($specialEquipmentChoiceErrorMessage = self::validateSpecialEquipmentForChoiceConstraintsFromSetSpecialEquipment($specialEquipment))) {
            throw new InvalidArgumentException($specialEquipmentChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($specialEquipment) && count($specialEquipment) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($specialEquipment)), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($specialEquipment) && count($specialEquipment) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($specialEquipment)), __LINE__);
        }
        if (is_null($specialEquipment) || (is_array($specialEquipment) && empty($specialEquipment))) {
            unset($this->SpecialEquipment);
        } else {
            $this->SpecialEquipment = $specialEquipment;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToSpecialEquipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSpecialEquipment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToSpecialEquipment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SpecialEquipment can\'t be set as the property %s is already set. Only one property must be set among these properties: SpecialEquipment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to SpecialEquipment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecialEquipment $item
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function addToSpecialEquipment(\Travelport\UniversalRecord\StructType\SpecialEquipment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SpecialEquipment) {
            throw new InvalidArgumentException(sprintf('The SpecialEquipment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecialEquipment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToSpecialEquipment($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->SpecialEquipment) && count($this->SpecialEquipment) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->SpecialEquipment)), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->SpecialEquipment) && count($this->SpecialEquipment) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->SpecialEquipment)), __LINE__);
        }
        $this->SpecialEquipment[] = $item;
        
        return $this;
    }
    /**
     * Get PaymentInformation value
     * @return \Travelport\UniversalRecord\StructType\PaymentInformation|null
     */
    public function getPaymentInformation(): ?\Travelport\UniversalRecord\StructType\PaymentInformation
    {
        return isset($this->PaymentInformation) ? $this->PaymentInformation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPaymentInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePaymentInformationForChoiceConstraintsFromSetPaymentInformation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
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
     * @param \Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setPaymentInformation(?\Travelport\UniversalRecord\StructType\PaymentInformation $paymentInformation = null): self
    {
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($paymentInformationChoiceErrorMessage = self::validatePaymentInformationForChoiceConstraintsFromSetPaymentInformation($paymentInformation))) {
            throw new InvalidArgumentException($paymentInformationChoiceErrorMessage, __LINE__);
        }
        if (is_null($paymentInformation) || (is_array($paymentInformation) && empty($paymentInformation))) {
            unset($this->PaymentInformation);
        } else {
            $this->PaymentInformation = $paymentInformation;
        }
        
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    public function getGuarantee(): ?\Travelport\UniversalRecord\StructType\Guarantee
    {
        return isset($this->Guarantee) ? $this->Guarantee : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGuarantee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuarantee method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGuaranteeForChoiceConstraintsFromSetGuarantee($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Guarantee can\'t be set as the property %s is already set. Only one property must be set among these properties: Guarantee, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Guarantee value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setGuarantee(?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null): self
    {
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($guaranteeChoiceErrorMessage = self::validateGuaranteeForChoiceConstraintsFromSetGuarantee($guarantee))) {
            throw new InvalidArgumentException($guaranteeChoiceErrorMessage, __LINE__);
        }
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
        return isset($this->BookingSource) ? $this->BookingSource : null;
    }
    /**
     * This method is responsible for validating the value passed to the setBookingSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingSource method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBookingSourceForChoiceConstraintsFromSetBookingSource($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BookingSource can\'t be set as the property %s is already set. Only one property must be set among these properties: BookingSource, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set BookingSource value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setBookingSource(?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null): self
    {
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($bookingSourceChoiceErrorMessage = self::validateBookingSourceForChoiceConstraintsFromSetBookingSource($bookingSource))) {
            throw new InvalidArgumentException($bookingSourceChoiceErrorMessage, __LINE__);
        }
        if (is_null($bookingSource) || (is_array($bookingSource) && empty($bookingSource))) {
            unset($this->BookingSource);
        } else {
            $this->BookingSource = $bookingSource;
        }
        
        return $this;
    }
    /**
     * Get AssociatedRemark value
     * @return \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public function getAssociatedRemark(): ?array
    {
        return isset($this->AssociatedRemark) ? $this->AssociatedRemark : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociatedRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssociatedRemarkForArrayConstraintsFromSetAssociatedRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleAddAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$vehicleAddAssociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($vehicleAddAssociatedRemarkItem) ? get_class($vehicleAddAssociatedRemarkItem) : sprintf('%s(%s)', gettype($vehicleAddAssociatedRemarkItem), var_export($vehicleAddAssociatedRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociatedRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAssociatedRemarkForChoiceConstraintsFromSetAssociatedRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
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
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($associatedRemarkArrayErrorMessage = self::validateAssociatedRemarkForArrayConstraintsFromSetAssociatedRemark($associatedRemark))) {
            throw new InvalidArgumentException($associatedRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($associatedRemarkChoiceErrorMessage = self::validateAssociatedRemarkForChoiceConstraintsFromSetAssociatedRemark($associatedRemark))) {
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
     * This method is responsible for validating the value passed to the addToAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAssociatedRemark method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToAssociatedRemark($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
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
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
            throw new InvalidArgumentException(sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToAssociatedRemark($item))) {
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
     * Get DeliveryAddress value
     * @return \Travelport\UniversalRecord\StructType\DeliveryAddress|null
     */
    public function getDeliveryAddress(): ?\Travelport\UniversalRecord\StructType\DeliveryAddress
    {
        return isset($this->DeliveryAddress) ? $this->DeliveryAddress : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeliveryAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeliveryAddress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeliveryAddressForChoiceConstraintsFromSetDeliveryAddress($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
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
     * @param \Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setDeliveryAddress(?\Travelport\UniversalRecord\StructType\DeliveryAddress $deliveryAddress = null): self
    {
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($deliveryAddressChoiceErrorMessage = self::validateDeliveryAddressForChoiceConstraintsFromSetDeliveryAddress($deliveryAddress))) {
            throw new InvalidArgumentException($deliveryAddressChoiceErrorMessage, __LINE__);
        }
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
        return isset($this->CollectionAddress) ? $this->CollectionAddress : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCollectionAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCollectionAddress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCollectionAddressForChoiceConstraintsFromSetCollectionAddress($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'FlightArrivalInformation',
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
     * @param \Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setCollectionAddress(?\Travelport\UniversalRecord\StructType\CollectionAddress $collectionAddress = null): self
    {
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($collectionAddressChoiceErrorMessage = self::validateCollectionAddressForChoiceConstraintsFromSetCollectionAddress($collectionAddress))) {
            throw new InvalidArgumentException($collectionAddressChoiceErrorMessage, __LINE__);
        }
        if (is_null($collectionAddress) || (is_array($collectionAddress) && empty($collectionAddress))) {
            unset($this->CollectionAddress);
        } else {
            $this->CollectionAddress = $collectionAddress;
        }
        
        return $this;
    }
    /**
     * Get ThirdPartyInformation value
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    public function getThirdPartyInformation(): ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation
    {
        return isset($this->ThirdPartyInformation) ? $this->ThirdPartyInformation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setThirdPartyInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThirdPartyInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateThirdPartyInformationForChoiceConstraintsFromSetThirdPartyInformation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'TravelComplianceData',
            'FlightArrivalInformation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ThirdPartyInformation can\'t be set as the property %s is already set. Only one property must be set among these properties: ThirdPartyInformation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ThirdPartyInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setThirdPartyInformation(?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null): self
    {
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($thirdPartyInformationChoiceErrorMessage = self::validateThirdPartyInformationForChoiceConstraintsFromSetThirdPartyInformation($thirdPartyInformation))) {
            throw new InvalidArgumentException($thirdPartyInformationChoiceErrorMessage, __LINE__);
        }
        if (is_null($thirdPartyInformation) || (is_array($thirdPartyInformation) && empty($thirdPartyInformation))) {
            unset($this->ThirdPartyInformation);
        } else {
            $this->ThirdPartyInformation = $thirdPartyInformation;
        }
        
        return $this;
    }
    /**
     * Get TravelComplianceData value
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData[]
     */
    public function getTravelComplianceData(): ?array
    {
        return isset($this->TravelComplianceData) ? $this->TravelComplianceData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelComplianceData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelComplianceDataForArrayConstraintsFromSetTravelComplianceData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleAddTravelComplianceDataItem) {
            // validation for constraint: itemType
            if (!$vehicleAddTravelComplianceDataItem instanceof \Travelport\UniversalRecord\StructType\TravelComplianceData) {
                $invalidValues[] = is_object($vehicleAddTravelComplianceDataItem) ? get_class($vehicleAddTravelComplianceDataItem) : sprintf('%s(%s)', gettype($vehicleAddTravelComplianceDataItem), var_export($vehicleAddTravelComplianceDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelComplianceData property can only contain items of type \Travelport\UniversalRecord\StructType\TravelComplianceData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelComplianceData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTravelComplianceDataForChoiceConstraintsFromSetTravelComplianceData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'FlightArrivalInformation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TravelComplianceData can\'t be set as the property %s is already set. Only one property must be set among these properties: TravelComplianceData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TravelComplianceData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setTravelComplianceData(?array $travelComplianceData = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelComplianceDataArrayErrorMessage = self::validateTravelComplianceDataForArrayConstraintsFromSetTravelComplianceData($travelComplianceData))) {
            throw new InvalidArgumentException($travelComplianceDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($travelComplianceDataChoiceErrorMessage = self::validateTravelComplianceDataForChoiceConstraintsFromSetTravelComplianceData($travelComplianceData))) {
            throw new InvalidArgumentException($travelComplianceDataChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($travelComplianceData) && count($travelComplianceData) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($travelComplianceData)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($travelComplianceData) && count($travelComplianceData) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($travelComplianceData)), __LINE__);
        }
        if (is_null($travelComplianceData) || (is_array($travelComplianceData) && empty($travelComplianceData))) {
            unset($this->TravelComplianceData);
        } else {
            $this->TravelComplianceData = $travelComplianceData;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToTravelComplianceData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToTravelComplianceData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'FlightArrivalInformation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TravelComplianceData can\'t be set as the property %s is already set. Only one property must be set among these properties: TravelComplianceData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to TravelComplianceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData $item
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function addToTravelComplianceData(\Travelport\UniversalRecord\StructType\TravelComplianceData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TravelComplianceData) {
            throw new InvalidArgumentException(sprintf('The TravelComplianceData property can only contain items of type \Travelport\UniversalRecord\StructType\TravelComplianceData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToTravelComplianceData($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->TravelComplianceData) && count($this->TravelComplianceData) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->TravelComplianceData)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TravelComplianceData) && count($this->TravelComplianceData) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TravelComplianceData)), __LINE__);
        }
        $this->TravelComplianceData[] = $item;
        
        return $this;
    }
    /**
     * Get FlightArrivalInformation value
     * @return \Travelport\UniversalRecord\StructType\FlightArrivalInformation|null
     */
    public function getFlightArrivalInformation(): ?\Travelport\UniversalRecord\StructType\FlightArrivalInformation
    {
        return isset($this->FlightArrivalInformation) ? $this->FlightArrivalInformation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFlightArrivalInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightArrivalInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFlightArrivalInformationForChoiceConstraintsFromSetFlightArrivalInformation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'DriversLicense',
            'VehicleSpecialRequest',
            'SpecialEquipment',
            'PaymentInformation',
            'Guarantee',
            'BookingSource',
            'AssociatedRemark',
            'DeliveryAddress',
            'CollectionAddress',
            'ThirdPartyInformation',
            'TravelComplianceData',
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
     * @param \Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setFlightArrivalInformation(?\Travelport\UniversalRecord\StructType\FlightArrivalInformation $flightArrivalInformation = null): self
    {
        // validation for constraint: choice(LoyaltyCard, DriversLicense, VehicleSpecialRequest, SpecialEquipment, PaymentInformation, Guarantee, BookingSource, AssociatedRemark, DeliveryAddress, CollectionAddress, ThirdPartyInformation, TravelComplianceData, FlightArrivalInformation)
        if ('' !== ($flightArrivalInformationChoiceErrorMessage = self::validateFlightArrivalInformationForChoiceConstraintsFromSetFlightArrivalInformation($flightArrivalInformation))) {
            throw new InvalidArgumentException($flightArrivalInformationChoiceErrorMessage, __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\VehicleAdd
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
