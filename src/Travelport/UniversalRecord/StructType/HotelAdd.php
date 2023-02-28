<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAdd StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify desired optional bed types. Applicable for optional bed types:RollawayAdult,RollawayChild,or Crib if supported by the hotel supplier. Providers :1G/1V/1P
 * @subpackage Structs
 */
class HotelAdd extends AbstractStructBase
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
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    protected ?array $LoyaltyCard = null;
    /**
     * The Guarantee
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:Guarantee
     * @var \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
    /**
     * The GuestInformation
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: hotel_v52_0:GuestInformation
     * @var \Travelport\UniversalRecord\StructType\GuestInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\GuestInformation $GuestInformation = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: hotel_v52_0:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    protected ?array $AssociatedRemark = null;
    /**
     * The BookingSource
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The HotelSpecialRequest
     * Meta information extracted from the WSDL
     * - documentation: Common type for general textual information
     * - base: xs:string
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 250
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: hotel_v52_0:HotelSpecialRequest
     * @var string|null
     */
    protected ?string $HotelSpecialRequest = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\UniversalRecord\StructType\CorporateDiscountID|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CorporateDiscountID $CorporateDiscountID = null;
    /**
     * The ReservationName
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:ReservationName
     * @var \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ReservationName $ReservationName = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
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
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:TravelComplianceData
     * @var \Travelport\UniversalRecord\StructType\TravelComplianceData[]
     */
    protected ?array $TravelComplianceData = null;
    /**
     * The HotelBedding
     * Meta information extracted from the WSDL
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: hotel_v52_0:HotelBedding
     * @var \Travelport\UniversalRecord\StructType\HotelBedding[]
     */
    protected ?array $HotelBedding = null;
    /**
     * The BookingConfirmation
     * Meta information extracted from the WSDL
     * - documentation: Hotel Confirmation Number from a Third Party System. | Hotel Booking Confirmation Number for hotel segment. Supported Providers:1P.
     * - base: typeHotelConfirmationNumber
     * - choice: LoyaltyCard | Guarantee | GuestInformation | AssociatedRemark | BookingSource | HotelSpecialRequest | CorporateDiscountID | ReservationName | ThirdPartyInformation | TravelComplianceData | HotelBedding | BookingConfirmation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 32
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: hotel_v52_0:BookingConfirmation
     * @var string|null
     */
    protected ?string $BookingConfirmation = null;
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
     * Constructor method for HotelAdd
     * @uses HotelAdd::setReservationLocatorCode()
     * @uses HotelAdd::setLoyaltyCard()
     * @uses HotelAdd::setGuarantee()
     * @uses HotelAdd::setGuestInformation()
     * @uses HotelAdd::setAssociatedRemark()
     * @uses HotelAdd::setBookingSource()
     * @uses HotelAdd::setHotelSpecialRequest()
     * @uses HotelAdd::setCorporateDiscountID()
     * @uses HotelAdd::setReservationName()
     * @uses HotelAdd::setThirdPartyInformation()
     * @uses HotelAdd::setTravelComplianceData()
     * @uses HotelAdd::setHotelBedding()
     * @uses HotelAdd::setBookingConfirmation()
     * @uses HotelAdd::setBookingTravelerRef()
     * @param string $reservationLocatorCode
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @param \Travelport\UniversalRecord\StructType\GuestInformation $guestInformation
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @param string $hotelSpecialRequest
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID $corporateDiscountID
     * @param \Travelport\UniversalRecord\StructType\ReservationName $reservationName
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @param \Travelport\UniversalRecord\StructType\HotelBedding[] $hotelBedding
     * @param string $bookingConfirmation
     * @param string $bookingTravelerRef
     */
    public function __construct(string $reservationLocatorCode, ?array $loyaltyCard = null, ?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null, ?\Travelport\UniversalRecord\StructType\GuestInformation $guestInformation = null, ?array $associatedRemark = null, ?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null, ?string $hotelSpecialRequest = null, ?\Travelport\UniversalRecord\StructType\CorporateDiscountID $corporateDiscountID = null, ?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null, ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null, ?array $travelComplianceData = null, ?array $hotelBedding = null, ?string $bookingConfirmation = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setReservationLocatorCode($reservationLocatorCode)
            ->setLoyaltyCard($loyaltyCard)
            ->setGuarantee($guarantee)
            ->setGuestInformation($guestInformation)
            ->setAssociatedRemark($associatedRemark)
            ->setBookingSource($bookingSource)
            ->setHotelSpecialRequest($hotelSpecialRequest)
            ->setCorporateDiscountID($corporateDiscountID)
            ->setReservationName($reservationName)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setTravelComplianceData($travelComplianceData)
            ->setHotelBedding($hotelBedding)
            ->setBookingConfirmation($bookingConfirmation)
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard[]|null
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyCardForArrayConstraintFromSetLoyaltyCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelAddLoyaltyCardItem) {
            // validation for constraint: itemType
            if (!$hotelAddLoyaltyCardItem instanceof \Travelport\UniversalRecord\StructType\LoyaltyCard) {
                $invalidValues[] = is_object($hotelAddLoyaltyCardItem) ? get_class($hotelAddLoyaltyCardItem) : sprintf('%s(%s)', gettype($hotelAddLoyaltyCardItem), var_export($hotelAddLoyaltyCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCard property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCard method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateLoyaltyCardForChoiceConstraintFromSetLoyaltyCard($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardArrayErrorMessage = self::validateLoyaltyCardForArrayConstraintFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($loyaltyCardChoiceErrorMessage = self::validateLoyaltyCardForChoiceConstraintFromSetLoyaltyCard($loyaltyCard))) {
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
     * This method is responsible for validating the value(s) passed to the addToLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToLoyaltyCard method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToLoyaltyCard($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function addToLoyaltyCard(\Travelport\UniversalRecord\StructType\LoyaltyCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LoyaltyCard) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCard property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToLoyaltyCard($item))) {
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
     * Get Guarantee value
     * @return \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    public function getGuarantee(): ?\Travelport\UniversalRecord\StructType\Guarantee
    {
        return $this->Guarantee ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGuarantee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuarantee method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGuaranteeForChoiceConstraintFromSetGuarantee($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setGuarantee(?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null): self
    {
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($guaranteeChoiceErrorMessage = self::validateGuaranteeForChoiceConstraintFromSetGuarantee($guarantee))) {
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
     * Get GuestInformation value
     * @return \Travelport\UniversalRecord\StructType\GuestInformation|null
     */
    public function getGuestInformation(): ?\Travelport\UniversalRecord\StructType\GuestInformation
    {
        return $this->GuestInformation ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGuestInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuestInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGuestInformationForChoiceConstraintFromSetGuestInformation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GuestInformation can\'t be set as the property %s is already set. Only one property must be set among these properties: GuestInformation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set GuestInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GuestInformation $guestInformation
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setGuestInformation(?\Travelport\UniversalRecord\StructType\GuestInformation $guestInformation = null): self
    {
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($guestInformationChoiceErrorMessage = self::validateGuestInformationForChoiceConstraintFromSetGuestInformation($guestInformation))) {
            throw new InvalidArgumentException($guestInformationChoiceErrorMessage, __LINE__);
        }
        if (is_null($guestInformation) || (is_array($guestInformation) && empty($guestInformation))) {
            unset($this->GuestInformation);
        } else {
            $this->GuestInformation = $guestInformation;
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
        foreach ($values as $hotelAddAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$hotelAddAssociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($hotelAddAssociatedRemarkItem) ? get_class($hotelAddAssociatedRemarkItem) : sprintf('%s(%s)', gettype($hotelAddAssociatedRemarkItem), var_export($hotelAddAssociatedRemarkItem, true));
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
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($associatedRemarkArrayErrorMessage = self::validateAssociatedRemarkForArrayConstraintFromSetAssociatedRemark($associatedRemark))) {
            throw new InvalidArgumentException($associatedRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
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
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
            throw new InvalidArgumentException(sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
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
        return $this->BookingSource ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingSource method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBookingSourceForChoiceConstraintFromSetBookingSource($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setBookingSource(?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null): self
    {
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($bookingSourceChoiceErrorMessage = self::validateBookingSourceForChoiceConstraintFromSetBookingSource($bookingSource))) {
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
     * Get HotelSpecialRequest value
     * @return string|null
     */
    public function getHotelSpecialRequest(): ?string
    {
        return $this->HotelSpecialRequest ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelSpecialRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelSpecialRequest method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelSpecialRequestForChoiceConstraintFromSetHotelSpecialRequest($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelSpecialRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelSpecialRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelSpecialRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $hotelSpecialRequest
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setHotelSpecialRequest(?string $hotelSpecialRequest = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelSpecialRequest) && !is_string($hotelSpecialRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelSpecialRequest, true), gettype($hotelSpecialRequest)), __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($hotelSpecialRequestChoiceErrorMessage = self::validateHotelSpecialRequestForChoiceConstraintFromSetHotelSpecialRequest($hotelSpecialRequest))) {
            throw new InvalidArgumentException($hotelSpecialRequestChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(250)
        if (!is_null($hotelSpecialRequest) && mb_strlen((string) $hotelSpecialRequest) > 250) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 250', mb_strlen((string) $hotelSpecialRequest)), __LINE__);
        }
        if (is_null($hotelSpecialRequest) || (is_array($hotelSpecialRequest) && empty($hotelSpecialRequest))) {
            unset($this->HotelSpecialRequest);
        } else {
            $this->HotelSpecialRequest = $hotelSpecialRequest;
        }
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \Travelport\UniversalRecord\StructType\CorporateDiscountID|null
     */
    public function getCorporateDiscountID(): ?\Travelport\UniversalRecord\StructType\CorporateDiscountID
    {
        return $this->CorporateDiscountID ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCorporateDiscountID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCorporateDiscountID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCorporateDiscountIDForChoiceConstraintFromSetCorporateDiscountID($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CorporateDiscountID can\'t be set as the property %s is already set. Only one property must be set among these properties: CorporateDiscountID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CorporateDiscountID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID $corporateDiscountID
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setCorporateDiscountID(?\Travelport\UniversalRecord\StructType\CorporateDiscountID $corporateDiscountID = null): self
    {
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($corporateDiscountIDChoiceErrorMessage = self::validateCorporateDiscountIDForChoiceConstraintFromSetCorporateDiscountID($corporateDiscountID))) {
            throw new InvalidArgumentException($corporateDiscountIDChoiceErrorMessage, __LINE__);
        }
        if (is_null($corporateDiscountID) || (is_array($corporateDiscountID) && empty($corporateDiscountID))) {
            unset($this->CorporateDiscountID);
        } else {
            $this->CorporateDiscountID = $corporateDiscountID;
        }
        
        return $this;
    }
    /**
     * Get ReservationName value
     * @return \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    public function getReservationName(): ?\Travelport\UniversalRecord\StructType\ReservationName
    {
        return $this->ReservationName ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setReservationName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReservationName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateReservationNameForChoiceConstraintFromSetReservationName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ReservationName can\'t be set as the property %s is already set. Only one property must be set among these properties: ReservationName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ReservationName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReservationName $reservationName
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setReservationName(?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null): self
    {
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($reservationNameChoiceErrorMessage = self::validateReservationNameForChoiceConstraintFromSetReservationName($reservationName))) {
            throw new InvalidArgumentException($reservationNameChoiceErrorMessage, __LINE__);
        }
        if (is_null($reservationName) || (is_array($reservationName) && empty($reservationName))) {
            unset($this->ReservationName);
        } else {
            $this->ReservationName = $reservationName;
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
     * This method is responsible for validating the value(s) passed to the setThirdPartyInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThirdPartyInformation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateThirdPartyInformationForChoiceConstraintFromSetThirdPartyInformation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'TravelComplianceData',
            'HotelBedding',
            'BookingConfirmation',
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setThirdPartyInformation(?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null): self
    {
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($thirdPartyInformationChoiceErrorMessage = self::validateThirdPartyInformationForChoiceConstraintFromSetThirdPartyInformation($thirdPartyInformation))) {
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
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData[]|null
     */
    public function getTravelComplianceData(): ?array
    {
        return $this->TravelComplianceData ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelComplianceData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelComplianceDataForArrayConstraintFromSetTravelComplianceData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelAddTravelComplianceDataItem) {
            // validation for constraint: itemType
            if (!$hotelAddTravelComplianceDataItem instanceof \Travelport\UniversalRecord\StructType\TravelComplianceData) {
                $invalidValues[] = is_object($hotelAddTravelComplianceDataItem) ? get_class($hotelAddTravelComplianceDataItem) : sprintf('%s(%s)', gettype($hotelAddTravelComplianceDataItem), var_export($hotelAddTravelComplianceDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelComplianceData property can only contain items of type \Travelport\UniversalRecord\StructType\TravelComplianceData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelComplianceData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTravelComplianceDataForChoiceConstraintFromSetTravelComplianceData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'HotelBedding',
            'BookingConfirmation',
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setTravelComplianceData(?array $travelComplianceData = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelComplianceDataArrayErrorMessage = self::validateTravelComplianceDataForArrayConstraintFromSetTravelComplianceData($travelComplianceData))) {
            throw new InvalidArgumentException($travelComplianceDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($travelComplianceDataChoiceErrorMessage = self::validateTravelComplianceDataForChoiceConstraintFromSetTravelComplianceData($travelComplianceData))) {
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
     * This method is responsible for validating the value(s) passed to the addToTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToTravelComplianceData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToTravelComplianceData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'HotelBedding',
            'BookingConfirmation',
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function addToTravelComplianceData(\Travelport\UniversalRecord\StructType\TravelComplianceData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TravelComplianceData) {
            throw new InvalidArgumentException(sprintf('The TravelComplianceData property can only contain items of type \Travelport\UniversalRecord\StructType\TravelComplianceData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToTravelComplianceData($item))) {
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
     * Get HotelBedding value
     * @return \Travelport\UniversalRecord\StructType\HotelBedding[]|null
     */
    public function getHotelBedding(): ?array
    {
        return $this->HotelBedding ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelBedding method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelBedding method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelBeddingForArrayConstraintFromSetHotelBedding(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelAddHotelBeddingItem) {
            // validation for constraint: itemType
            if (!$hotelAddHotelBeddingItem instanceof \Travelport\UniversalRecord\StructType\HotelBedding) {
                $invalidValues[] = is_object($hotelAddHotelBeddingItem) ? get_class($hotelAddHotelBeddingItem) : sprintf('%s(%s)', gettype($hotelAddHotelBeddingItem), var_export($hotelAddHotelBeddingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelBedding property can only contain items of type \Travelport\UniversalRecord\StructType\HotelBedding, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelBedding method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelBedding method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelBeddingForChoiceConstraintFromSetHotelBedding($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'BookingConfirmation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelBedding can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelBedding, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelBedding value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelBedding[] $hotelBedding
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setHotelBedding(?array $hotelBedding = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelBeddingArrayErrorMessage = self::validateHotelBeddingForArrayConstraintFromSetHotelBedding($hotelBedding))) {
            throw new InvalidArgumentException($hotelBeddingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($hotelBeddingChoiceErrorMessage = self::validateHotelBeddingForChoiceConstraintFromSetHotelBedding($hotelBedding))) {
            throw new InvalidArgumentException($hotelBeddingChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($hotelBedding) && count($hotelBedding) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($hotelBedding)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelBedding) && count($hotelBedding) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelBedding)), __LINE__);
        }
        if (is_null($hotelBedding) || (is_array($hotelBedding) && empty($hotelBedding))) {
            unset($this->HotelBedding);
        } else {
            $this->HotelBedding = $hotelBedding;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToHotelBedding method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToHotelBedding method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToHotelBedding($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'BookingConfirmation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelBedding can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelBedding, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to HotelBedding value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelBedding $item
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function addToHotelBedding(\Travelport\UniversalRecord\StructType\HotelBedding $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelBedding) {
            throw new InvalidArgumentException(sprintf('The HotelBedding property can only contain items of type \Travelport\UniversalRecord\StructType\HotelBedding, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToHotelBedding($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->HotelBedding) && count($this->HotelBedding) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->HotelBedding)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelBedding) && count($this->HotelBedding) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelBedding)), __LINE__);
        }
        $this->HotelBedding[] = $item;
        
        return $this;
    }
    /**
     * Get BookingConfirmation value
     * @return string|null
     */
    public function getBookingConfirmation(): ?string
    {
        return $this->BookingConfirmation ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingConfirmation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingConfirmation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBookingConfirmationForChoiceConstraintFromSetBookingConfirmation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'LoyaltyCard',
            'Guarantee',
            'GuestInformation',
            'AssociatedRemark',
            'BookingSource',
            'HotelSpecialRequest',
            'CorporateDiscountID',
            'ReservationName',
            'ThirdPartyInformation',
            'TravelComplianceData',
            'HotelBedding',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BookingConfirmation can\'t be set as the property %s is already set. Only one property must be set among these properties: BookingConfirmation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set BookingConfirmation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $bookingConfirmation
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setBookingConfirmation(?string $bookingConfirmation = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingConfirmation) && !is_string($bookingConfirmation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingConfirmation, true), gettype($bookingConfirmation)), __LINE__);
        }
        // validation for constraint: choice(LoyaltyCard, Guarantee, GuestInformation, AssociatedRemark, BookingSource, HotelSpecialRequest, CorporateDiscountID, ReservationName, ThirdPartyInformation, TravelComplianceData, HotelBedding, BookingConfirmation)
        if ('' !== ($bookingConfirmationChoiceErrorMessage = self::validateBookingConfirmationForChoiceConstraintFromSetBookingConfirmation($bookingConfirmation))) {
            throw new InvalidArgumentException($bookingConfirmationChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($bookingConfirmation) && mb_strlen((string) $bookingConfirmation) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $bookingConfirmation)), __LINE__);
        }
        if (is_null($bookingConfirmation) || (is_array($bookingConfirmation) && empty($bookingConfirmation))) {
            unset($this->BookingConfirmation);
        } else {
            $this->BookingConfirmation = $bookingConfirmation;
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
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
