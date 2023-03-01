<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $ReservationLocatorCode;
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
    public ?array $LoyaltyCard = null;
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
    public ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
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
    public ?\Travelport\UniversalRecord\StructType\GuestInformation $GuestInformation = null;
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
    public ?array $AssociatedRemark = null;
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
    public ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
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
    public ?string $HotelSpecialRequest = null;
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
    public ?\Travelport\UniversalRecord\StructType\CorporateDiscountID $CorporateDiscountID = null;
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
    public ?\Travelport\UniversalRecord\StructType\ReservationName $ReservationName = null;
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
    public ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $ThirdPartyInformation = null;
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
    public ?array $TravelComplianceData = null;
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
    public ?array $HotelBedding = null;
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
    public ?string $BookingConfirmation = null;
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function addToLoyaltyCard(\Travelport\UniversalRecord\StructType\LoyaltyCard $item): self
    {
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
     * Set Guarantee value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
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
     * Get GuestInformation value
     * @return \Travelport\UniversalRecord\StructType\GuestInformation|null
     */
    public function getGuestInformation(): ?\Travelport\UniversalRecord\StructType\GuestInformation
    {
        return $this->GuestInformation ?? null;
    }
    /**
     * Set GuestInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\GuestInformation $guestInformation
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setGuestInformation(?\Travelport\UniversalRecord\StructType\GuestInformation $guestInformation = null): self
    {
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
     * Set AssociatedRemark value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
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
        return $this->BookingSource ?? null;
    }
    /**
     * Set BookingSource value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
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
     * Get HotelSpecialRequest value
     * @return string|null
     */
    public function getHotelSpecialRequest(): ?string
    {
        return $this->HotelSpecialRequest ?? null;
    }
    /**
     * Set HotelSpecialRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $hotelSpecialRequest
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setHotelSpecialRequest(?string $hotelSpecialRequest = null): self
    {
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
     * Set CorporateDiscountID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID $corporateDiscountID
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setCorporateDiscountID(?\Travelport\UniversalRecord\StructType\CorporateDiscountID $corporateDiscountID = null): self
    {
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
     * Set ReservationName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ReservationName $reservationName
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setReservationName(?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null): self
    {
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
     * Set ThirdPartyInformation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
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
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function addToTravelComplianceData(\Travelport\UniversalRecord\StructType\TravelComplianceData $item): self
    {
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
     * Set HotelBedding value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\HotelBedding[] $hotelBedding
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setHotelBedding(?array $hotelBedding = null): self
    {
        if (is_null($hotelBedding) || (is_array($hotelBedding) && empty($hotelBedding))) {
            unset($this->HotelBedding);
        } else {
            $this->HotelBedding = $hotelBedding;
        }
        
        return $this;
    }
    /**
     * Add item to HotelBedding value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelBedding $item
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function addToHotelBedding(\Travelport\UniversalRecord\StructType\HotelBedding $item): self
    {
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
     * Set BookingConfirmation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $bookingConfirmation
     * @return \Travelport\UniversalRecord\StructType\HotelAdd
     */
    public function setBookingConfirmation(?string $bookingConfirmation = null): self
    {
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
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
