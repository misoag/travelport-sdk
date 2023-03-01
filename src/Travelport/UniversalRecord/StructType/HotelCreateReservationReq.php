<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelCreateReservationReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to create a hotel reservation
 * @subpackage Structs
 */
class HotelCreateReservationReq extends BaseCreateWithFormOfPaymentReq
{
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
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - ref: hotel:HotelRateDetail
     * @var \Travelport\UniversalRecord\StructType\HotelRateDetail[]
     */
    public ?array $HotelRateDetail = null;
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - ref: hotel:HotelProperty
     * @var \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelProperty $HotelProperty = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $ThirdPartyInformation = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: hotel:HotelStay
     * @var \Travelport\UniversalRecord\StructType\HotelStay|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelStay $HotelStay = null;
    /**
     * The Guarantee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Guarantee
     * @var \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    public ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
    /**
     * The HotelSpecialRequest
     * Meta information extracted from the WSDL
     * - documentation: Common type for general textual information
     * - base: xs:string
     * - maxLength: 250
     * - minOccurs: 0
     * - ref: hotel:HotelSpecialRequest
     * @var string|null
     */
    public ?string $HotelSpecialRequest = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale|null
     */
    public ?\Travelport\UniversalRecord\StructType\PointOfSale $PointOfSale = null;
    /**
     * The PromotionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: hotel:PromotionCode
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
     * - ref: hotel:HotelBedding
     * @var \Travelport\UniversalRecord\StructType\HotelBedding[]
     */
    public ?array $HotelBedding = null;
    /**
     * The GuestInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: hotel:GuestInformation
     * @var \Travelport\UniversalRecord\StructType\GuestInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\GuestInformation $GuestInformation = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 9999
     * - minOccurs: 0
     * - ref: hotel:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public ?array $AssociatedRemark = null;
    /**
     * The ReservationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ReservationName
     * @var \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    public ?\Travelport\UniversalRecord\StructType\ReservationName $ReservationName = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    public ?\Travelport\UniversalRecord\StructType\ActionStatus $ActionStatus = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\UniversalRecord\StructType\HostToken|null
     */
    public ?\Travelport\UniversalRecord\StructType\HostToken $HostToken = null;
    /**
     * The ReviewBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: 9999
     * - minOccurs: 0
     * - ref: common:ReviewBooking
     * @var \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    public ?array $ReviewBooking = null;
    /**
     * The HotelCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: hotel:HotelCommission
     * @var string|null
     */
    public ?string $HotelCommission = null;
    /**
     * The UserAcceptance
     * Meta information extracted from the WSDL
     * - documentation: If true, traveler has reviewed and accepted all policies, restrictions, and terms and conditions prior to booking. Default, false.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $UserAcceptance = null;
    /**
     * The MandatoryRateMatch
     * Meta information extracted from the WSDL
     * - documentation: If true, hotel will not be booked if there is a rate discrepancy. Default is false. Supported providers: 1g,1v,1p.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $MandatoryRateMatch = null;
    /**
     * The StatusCode
     * Meta information extracted from the WSDL
     * - documentation: Hotel Segment Status Code.Supported Providers:1P. | Valid 2 letter Status Code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $StatusCode = null;
    /**
     * The BookingConfirmation
     * Meta information extracted from the WSDL
     * - documentation: Hotel Booking Confirmation Number for passive hotel segment. Supported Providers:1P. | Hotel Confirmation Number from a Third Party System.
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    public ?string $BookingConfirmation = null;
    /**
     * Constructor method for HotelCreateReservationReq
     * @uses HotelCreateReservationReq::setEmail()
     * @uses HotelCreateReservationReq::setPhoneNumber()
     * @uses HotelCreateReservationReq::setHotelRateDetail()
     * @uses HotelCreateReservationReq::setHotelProperty()
     * @uses HotelCreateReservationReq::setThirdPartyInformation()
     * @uses HotelCreateReservationReq::setHotelStay()
     * @uses HotelCreateReservationReq::setGuarantee()
     * @uses HotelCreateReservationReq::setHotelSpecialRequest()
     * @uses HotelCreateReservationReq::setPointOfSale()
     * @uses HotelCreateReservationReq::setPromotionCode()
     * @uses HotelCreateReservationReq::setBookingSource()
     * @uses HotelCreateReservationReq::setHotelBedding()
     * @uses HotelCreateReservationReq::setGuestInformation()
     * @uses HotelCreateReservationReq::setAssociatedRemark()
     * @uses HotelCreateReservationReq::setReservationName()
     * @uses HotelCreateReservationReq::setActionStatus()
     * @uses HotelCreateReservationReq::setHostToken()
     * @uses HotelCreateReservationReq::setReviewBooking()
     * @uses HotelCreateReservationReq::setHotelCommission()
     * @uses HotelCreateReservationReq::setUserAcceptance()
     * @uses HotelCreateReservationReq::setMandatoryRateMatch()
     * @uses HotelCreateReservationReq::setStatusCode()
     * @uses HotelCreateReservationReq::setBookingConfirmation()
     * @param \Travelport\UniversalRecord\StructType\Email[] $email
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail[] $hotelRateDetail
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\HotelStay $hotelStay
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @param string $hotelSpecialRequest
     * @param \Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale
     * @param \Travelport\UniversalRecord\StructType\PromotionCode $promotionCode
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @param \Travelport\UniversalRecord\StructType\HotelBedding[] $hotelBedding
     * @param \Travelport\UniversalRecord\StructType\GuestInformation $guestInformation
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\ReservationName $reservationName
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $actionStatus
     * @param \Travelport\UniversalRecord\StructType\HostToken $hostToken
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @param string $hotelCommission
     * @param bool $userAcceptance
     * @param bool $mandatoryRateMatch
     * @param string $statusCode
     * @param string $bookingConfirmation
     */
    public function __construct(?array $email = null, ?array $phoneNumber = null, ?array $hotelRateDetail = null, ?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null, ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null, ?\Travelport\UniversalRecord\StructType\HotelStay $hotelStay = null, ?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null, ?string $hotelSpecialRequest = null, ?\Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale = null, ?\Travelport\UniversalRecord\StructType\PromotionCode $promotionCode = null, ?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null, ?array $hotelBedding = null, ?\Travelport\UniversalRecord\StructType\GuestInformation $guestInformation = null, ?array $associatedRemark = null, ?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null, ?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null, ?\Travelport\UniversalRecord\StructType\HostToken $hostToken = null, ?array $reviewBooking = null, ?string $hotelCommission = null, ?bool $userAcceptance = false, ?bool $mandatoryRateMatch = false, ?string $statusCode = null, ?string $bookingConfirmation = null)
    {
        $this
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber)
            ->setHotelRateDetail($hotelRateDetail)
            ->setHotelProperty($hotelProperty)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setHotelStay($hotelStay)
            ->setGuarantee($guarantee)
            ->setHotelSpecialRequest($hotelSpecialRequest)
            ->setPointOfSale($pointOfSale)
            ->setPromotionCode($promotionCode)
            ->setBookingSource($bookingSource)
            ->setHotelBedding($hotelBedding)
            ->setGuestInformation($guestInformation)
            ->setAssociatedRemark($associatedRemark)
            ->setReservationName($reservationName)
            ->setActionStatus($actionStatus)
            ->setHostToken($hostToken)
            ->setReviewBooking($reviewBooking)
            ->setHotelCommission($hotelCommission)
            ->setUserAcceptance($userAcceptance)
            ->setMandatoryRateMatch($mandatoryRateMatch)
            ->setStatusCode($statusCode)
            ->setBookingConfirmation($bookingConfirmation);
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function addToPhoneNumber(\Travelport\UniversalRecord\StructType\PhoneNumber $item): self
    {
        $this->PhoneNumber[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function addToHotelRateDetail(\Travelport\UniversalRecord\StructType\HotelRateDetail $item): self
    {
        $this->HotelRateDetail[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setHotelProperty(?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setThirdPartyInformation(?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null): self
    {
        $this->ThirdPartyInformation = $thirdPartyInformation;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setHotelStay(?\Travelport\UniversalRecord\StructType\HotelStay $hotelStay = null): self
    {
        $this->HotelStay = $hotelStay;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setGuarantee(?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null): self
    {
        $this->Guarantee = $guarantee;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setHotelSpecialRequest(?string $hotelSpecialRequest = null): self
    {
        $this->HotelSpecialRequest = $hotelSpecialRequest;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setPointOfSale(?\Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        $this->AssociatedRemark[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setReservationName(?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null): self
    {
        $this->ReservationName = $reservationName;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setActionStatus(?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null): self
    {
        $this->ActionStatus = $actionStatus;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\UniversalRecord\StructType\HostToken|null
     */
    public function getHostToken(): ?\Travelport\UniversalRecord\StructType\HostToken
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\UniversalRecord\StructType\HostToken $hostToken
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setHostToken(?\Travelport\UniversalRecord\StructType\HostToken $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function addToReviewBooking(\Travelport\UniversalRecord\StructType\ReviewBooking $item): self
    {
        $this->ReviewBooking[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setHotelCommission(?string $hotelCommission = null): self
    {
        $this->HotelCommission = $hotelCommission;
        
        return $this;
    }
    /**
     * Get UserAcceptance value
     * @return bool|null
     */
    public function getUserAcceptance(): ?bool
    {
        return $this->UserAcceptance;
    }
    /**
     * Set UserAcceptance value
     * @param bool $userAcceptance
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setUserAcceptance(?bool $userAcceptance = false): self
    {
        $this->UserAcceptance = $userAcceptance;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setMandatoryRateMatch(?bool $mandatoryRateMatch = false): self
    {
        $this->MandatoryRateMatch = $mandatoryRateMatch;
        
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        $this->StatusCode = $statusCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setBookingConfirmation(?string $bookingConfirmation = null): self
    {
        $this->BookingConfirmation = $bookingConfirmation;
        
        return $this;
    }
}
