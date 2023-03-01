<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservation StructType
 * Meta information extracted from the WSDL
 * - documentation: The complete Hotel Reservation
 * @subpackage Structs
 */
class HotelReservation extends BaseReservation
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Reservation IATA status code, 2 byte.
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
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Email
     * @var \Travelport\UniversalRecord\StructType\Email[]
     */
    public ?array $Email = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    public ?array $PhoneNumber = null;
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - ref: HotelProperty
     * @var \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: HotelRateDetail
     * @var \Travelport\UniversalRecord\StructType\HotelRateDetail[]
     */
    public ?array $HotelRateDetail = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: HotelStay
     * @var \Travelport\UniversalRecord\StructType\HotelStay|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelStay $HotelStay = null;
    /**
     * The HotelSpecialRequest
     * Meta information extracted from the WSDL
     * - documentation: Common type for general textual information
     * - base: xs:string
     * - maxLength: 250
     * - minOccurs: 0
     * - ref: HotelSpecialRequest
     * @var string|null
     */
    public ?string $HotelSpecialRequest = null;
    /**
     * The Guarantee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Guarantee
     * @var \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    public ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
    /**
     * The PromotionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PromotionCode
     * @var \Travelport\UniversalRecord\StructType\PromotionCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\PromotionCode $PromotionCode = null;
    /**
     * The BookingSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    public ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The HotelBedding
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: HotelBedding
     * @var \Travelport\UniversalRecord\StructType\HotelBedding[]
     */
    public ?array $HotelBedding = null;
    /**
     * The GuestInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: GuestInformation
     * @var \Travelport\UniversalRecord\StructType\GuestInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\GuestInformation $GuestInformation = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public ?array $AssociatedRemark = null;
    /**
     * The SellMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SellMessage
     * @var string[]
     */
    public ?array $SellMessage = null;
    /**
     * The HotelCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelCommission
     * @var string|null
     */
    public ?string $HotelCommission = null;
    /**
     * The CancelInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CancelInfo
     * @var \Travelport\UniversalRecord\StructType\CancelInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\CancelInfo $CancelInfo = null;
    /**
     * The TotalReservationPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TotalReservationPrice|null
     */
    public ?\Travelport\UniversalRecord\StructType\TotalReservationPrice $TotalReservationPrice = null;
    /**
     * The HotelDetailItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: HotelDetailItem
     * @var \Travelport\UniversalRecord\StructType\HotelDetailItem[]
     */
    public ?array $HotelDetailItem = null;
    /**
     * The AdaptedRoomGuestAllocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation|null
     */
    public ?\Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation $AdaptedRoomGuestAllocation = null;
    /**
     * The BookingConfirmation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $BookingConfirmation = null;
    /**
     * The CancelConfirmation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $CancelConfirmation = null;
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
     * The PassiveProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Passive Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PassiveProviderReservationInfoRef = null;
    /**
     * Constructor method for HotelReservation
     * @uses HotelReservation::setStatus()
     * @uses HotelReservation::setBookingTravelerRef()
     * @uses HotelReservation::setReservationName()
     * @uses HotelReservation::setThirdPartyInformation()
     * @uses HotelReservation::setEmail()
     * @uses HotelReservation::setPhoneNumber()
     * @uses HotelReservation::setHotelProperty()
     * @uses HotelReservation::setHotelRateDetail()
     * @uses HotelReservation::setHotelStay()
     * @uses HotelReservation::setHotelSpecialRequest()
     * @uses HotelReservation::setGuarantee()
     * @uses HotelReservation::setPromotionCode()
     * @uses HotelReservation::setBookingSource()
     * @uses HotelReservation::setHotelBedding()
     * @uses HotelReservation::setGuestInformation()
     * @uses HotelReservation::setAssociatedRemark()
     * @uses HotelReservation::setSellMessage()
     * @uses HotelReservation::setHotelCommission()
     * @uses HotelReservation::setCancelInfo()
     * @uses HotelReservation::setTotalReservationPrice()
     * @uses HotelReservation::setHotelDetailItem()
     * @uses HotelReservation::setAdaptedRoomGuestAllocation()
     * @uses HotelReservation::setBookingConfirmation()
     * @uses HotelReservation::setCancelConfirmation()
     * @uses HotelReservation::setProviderReservationInfoRef()
     * @uses HotelReservation::setTravelOrder()
     * @uses HotelReservation::setProviderSegmentOrder()
     * @uses HotelReservation::setPassiveProviderReservationInfoRef()
     * @param string $status
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\ReservationName $reservationName
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\Email[] $email
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail[] $hotelRateDetail
     * @param \Travelport\UniversalRecord\StructType\HotelStay $hotelStay
     * @param string $hotelSpecialRequest
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @param \Travelport\UniversalRecord\StructType\PromotionCode $promotionCode
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @param \Travelport\UniversalRecord\StructType\HotelBedding[] $hotelBedding
     * @param \Travelport\UniversalRecord\StructType\GuestInformation $guestInformation
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param string[] $sellMessage
     * @param string $hotelCommission
     * @param \Travelport\UniversalRecord\StructType\CancelInfo $cancelInfo
     * @param \Travelport\UniversalRecord\StructType\TotalReservationPrice $totalReservationPrice
     * @param \Travelport\UniversalRecord\StructType\HotelDetailItem[] $hotelDetailItem
     * @param \Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation $adaptedRoomGuestAllocation
     * @param string $bookingConfirmation
     * @param string $cancelConfirmation
     * @param string $providerReservationInfoRef
     * @param int $travelOrder
     * @param int $providerSegmentOrder
     * @param string $passiveProviderReservationInfoRef
     */
    public function __construct(string $status, ?array $bookingTravelerRef = null, ?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null, ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null, ?array $email = null, ?array $phoneNumber = null, ?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null, ?array $hotelRateDetail = null, ?\Travelport\UniversalRecord\StructType\HotelStay $hotelStay = null, ?string $hotelSpecialRequest = null, ?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null, ?\Travelport\UniversalRecord\StructType\PromotionCode $promotionCode = null, ?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null, ?array $hotelBedding = null, ?\Travelport\UniversalRecord\StructType\GuestInformation $guestInformation = null, ?array $associatedRemark = null, ?array $sellMessage = null, ?string $hotelCommission = null, ?\Travelport\UniversalRecord\StructType\CancelInfo $cancelInfo = null, ?\Travelport\UniversalRecord\StructType\TotalReservationPrice $totalReservationPrice = null, ?array $hotelDetailItem = null, ?\Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation $adaptedRoomGuestAllocation = null, ?string $bookingConfirmation = null, ?string $cancelConfirmation = null, ?string $providerReservationInfoRef = null, ?int $travelOrder = null, ?int $providerSegmentOrder = null, ?string $passiveProviderReservationInfoRef = null)
    {
        $this
            ->setStatus($status)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setReservationName($reservationName)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber)
            ->setHotelProperty($hotelProperty)
            ->setHotelRateDetail($hotelRateDetail)
            ->setHotelStay($hotelStay)
            ->setHotelSpecialRequest($hotelSpecialRequest)
            ->setGuarantee($guarantee)
            ->setPromotionCode($promotionCode)
            ->setBookingSource($bookingSource)
            ->setHotelBedding($hotelBedding)
            ->setGuestInformation($guestInformation)
            ->setAssociatedRemark($associatedRemark)
            ->setSellMessage($sellMessage)
            ->setHotelCommission($hotelCommission)
            ->setCancelInfo($cancelInfo)
            ->setTotalReservationPrice($totalReservationPrice)
            ->setHotelDetailItem($hotelDetailItem)
            ->setAdaptedRoomGuestAllocation($adaptedRoomGuestAllocation)
            ->setBookingConfirmation($bookingConfirmation)
            ->setCancelConfirmation($cancelConfirmation)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setTravelOrder($travelOrder)
            ->setProviderSegmentOrder($providerSegmentOrder)
            ->setPassiveProviderReservationInfoRef($passiveProviderReservationInfoRef);
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setThirdPartyInformation(?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null): self
    {
        $this->ThirdPartyInformation = $thirdPartyInformation;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\UniversalRecord\StructType\Email[]
     */
    public function getEmail(): ?array
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\UniversalRecord\StructType\Email[] $email
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setEmail(?array $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Add item to Email value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Email $item
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function addToEmail(\Travelport\UniversalRecord\StructType\Email $item): self
    {
        $this->Email[] = $item;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    public function getPhoneNumber(): ?array
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $item
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function addToPhoneNumber(\Travelport\UniversalRecord\StructType\PhoneNumber $item): self
    {
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\Travelport\UniversalRecord\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setHotelProperty(?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelRateDetail value
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail[]
     */
    public function getHotelRateDetail(): ?array
    {
        return $this->HotelRateDetail;
    }
    /**
     * Set HotelRateDetail value
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail[] $hotelRateDetail
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setHotelRateDetail(?array $hotelRateDetail = null): self
    {
        $this->HotelRateDetail = $hotelRateDetail;
        
        return $this;
    }
    /**
     * Add item to HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail $item
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function addToHotelRateDetail(\Travelport\UniversalRecord\StructType\HotelRateDetail $item): self
    {
        $this->HotelRateDetail[] = $item;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \Travelport\UniversalRecord\StructType\HotelStay|null
     */
    public function getHotelStay(): ?\Travelport\UniversalRecord\StructType\HotelStay
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @param \Travelport\UniversalRecord\StructType\HotelStay $hotelStay
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setHotelStay(?\Travelport\UniversalRecord\StructType\HotelStay $hotelStay = null): self
    {
        $this->HotelStay = $hotelStay;
        
        return $this;
    }
    /**
     * Get HotelSpecialRequest value
     * @return string|null
     */
    public function getHotelSpecialRequest(): ?string
    {
        return $this->HotelSpecialRequest;
    }
    /**
     * Set HotelSpecialRequest value
     * @param string $hotelSpecialRequest
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setHotelSpecialRequest(?string $hotelSpecialRequest = null): self
    {
        $this->HotelSpecialRequest = $hotelSpecialRequest;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setGuarantee(?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null): self
    {
        $this->Guarantee = $guarantee;
        
        return $this;
    }
    /**
     * Get PromotionCode value
     * @return \Travelport\UniversalRecord\StructType\PromotionCode|null
     */
    public function getPromotionCode(): ?\Travelport\UniversalRecord\StructType\PromotionCode
    {
        return $this->PromotionCode;
    }
    /**
     * Set PromotionCode value
     * @param \Travelport\UniversalRecord\StructType\PromotionCode $promotionCode
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setPromotionCode(?\Travelport\UniversalRecord\StructType\PromotionCode $promotionCode = null): self
    {
        $this->PromotionCode = $promotionCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setBookingSource(?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null): self
    {
        $this->BookingSource = $bookingSource;
        
        return $this;
    }
    /**
     * Get HotelBedding value
     * @return \Travelport\UniversalRecord\StructType\HotelBedding[]
     */
    public function getHotelBedding(): ?array
    {
        return $this->HotelBedding;
    }
    /**
     * Set HotelBedding value
     * @param \Travelport\UniversalRecord\StructType\HotelBedding[] $hotelBedding
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setHotelBedding(?array $hotelBedding = null): self
    {
        $this->HotelBedding = $hotelBedding;
        
        return $this;
    }
    /**
     * Add item to HotelBedding value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelBedding $item
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function addToHotelBedding(\Travelport\UniversalRecord\StructType\HotelBedding $item): self
    {
        $this->HotelBedding[] = $item;
        
        return $this;
    }
    /**
     * Get GuestInformation value
     * @return \Travelport\UniversalRecord\StructType\GuestInformation|null
     */
    public function getGuestInformation(): ?\Travelport\UniversalRecord\StructType\GuestInformation
    {
        return $this->GuestInformation;
    }
    /**
     * Set GuestInformation value
     * @param \Travelport\UniversalRecord\StructType\GuestInformation $guestInformation
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setGuestInformation(?\Travelport\UniversalRecord\StructType\GuestInformation $guestInformation = null): self
    {
        $this->GuestInformation = $guestInformation;
        
        return $this;
    }
    /**
     * Get AssociatedRemark value
     * @return \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public function getAssociatedRemark(): ?array
    {
        return $this->AssociatedRemark;
    }
    /**
     * Set AssociatedRemark value
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        $this->AssociatedRemark = $associatedRemark;
        
        return $this;
    }
    /**
     * Add item to AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        $this->AssociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get SellMessage value
     * @return string[]
     */
    public function getSellMessage(): ?array
    {
        return $this->SellMessage;
    }
    /**
     * Set SellMessage value
     * @param string[] $sellMessage
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setSellMessage(?array $sellMessage = null): self
    {
        $this->SellMessage = $sellMessage;
        
        return $this;
    }
    /**
     * Add item to SellMessage value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function addToSellMessage(string $item): self
    {
        $this->SellMessage[] = $item;
        
        return $this;
    }
    /**
     * Get HotelCommission value
     * @return string|null
     */
    public function getHotelCommission(): ?string
    {
        return $this->HotelCommission;
    }
    /**
     * Set HotelCommission value
     * @param string $hotelCommission
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setHotelCommission(?string $hotelCommission = null): self
    {
        $this->HotelCommission = $hotelCommission;
        
        return $this;
    }
    /**
     * Get CancelInfo value
     * @return \Travelport\UniversalRecord\StructType\CancelInfo|null
     */
    public function getCancelInfo(): ?\Travelport\UniversalRecord\StructType\CancelInfo
    {
        return $this->CancelInfo;
    }
    /**
     * Set CancelInfo value
     * @param \Travelport\UniversalRecord\StructType\CancelInfo $cancelInfo
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setCancelInfo(?\Travelport\UniversalRecord\StructType\CancelInfo $cancelInfo = null): self
    {
        $this->CancelInfo = $cancelInfo;
        
        return $this;
    }
    /**
     * Get TotalReservationPrice value
     * @return \Travelport\UniversalRecord\StructType\TotalReservationPrice|null
     */
    public function getTotalReservationPrice(): ?\Travelport\UniversalRecord\StructType\TotalReservationPrice
    {
        return $this->TotalReservationPrice;
    }
    /**
     * Set TotalReservationPrice value
     * @param \Travelport\UniversalRecord\StructType\TotalReservationPrice $totalReservationPrice
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setTotalReservationPrice(?\Travelport\UniversalRecord\StructType\TotalReservationPrice $totalReservationPrice = null): self
    {
        $this->TotalReservationPrice = $totalReservationPrice;
        
        return $this;
    }
    /**
     * Get HotelDetailItem value
     * @return \Travelport\UniversalRecord\StructType\HotelDetailItem[]
     */
    public function getHotelDetailItem(): ?array
    {
        return $this->HotelDetailItem;
    }
    /**
     * Set HotelDetailItem value
     * @param \Travelport\UniversalRecord\StructType\HotelDetailItem[] $hotelDetailItem
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setHotelDetailItem(?array $hotelDetailItem = null): self
    {
        $this->HotelDetailItem = $hotelDetailItem;
        
        return $this;
    }
    /**
     * Add item to HotelDetailItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelDetailItem $item
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function addToHotelDetailItem(\Travelport\UniversalRecord\StructType\HotelDetailItem $item): self
    {
        $this->HotelDetailItem[] = $item;
        
        return $this;
    }
    /**
     * Get AdaptedRoomGuestAllocation value
     * @return \Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation|null
     */
    public function getAdaptedRoomGuestAllocation(): ?\Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation
    {
        return $this->AdaptedRoomGuestAllocation;
    }
    /**
     * Set AdaptedRoomGuestAllocation value
     * @param \Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation $adaptedRoomGuestAllocation
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setAdaptedRoomGuestAllocation(?\Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation $adaptedRoomGuestAllocation = null): self
    {
        $this->AdaptedRoomGuestAllocation = $adaptedRoomGuestAllocation;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setBookingConfirmation(?string $bookingConfirmation = null): self
    {
        $this->BookingConfirmation = $bookingConfirmation;
        
        return $this;
    }
    /**
     * Get CancelConfirmation value
     * @return string|null
     */
    public function getCancelConfirmation(): ?string
    {
        return $this->CancelConfirmation;
    }
    /**
     * Set CancelConfirmation value
     * @param string $cancelConfirmation
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setCancelConfirmation(?string $cancelConfirmation = null): self
    {
        $this->CancelConfirmation = $cancelConfirmation;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setProviderSegmentOrder(?int $providerSegmentOrder = null): self
    {
        $this->ProviderSegmentOrder = $providerSegmentOrder;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setPassiveProviderReservationInfoRef(?string $passiveProviderReservationInfoRef = null): self
    {
        $this->PassiveProviderReservationInfoRef = $passiveProviderReservationInfoRef;
        
        return $this;
    }
}
