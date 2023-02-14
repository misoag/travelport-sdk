<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected string $Status;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\Hotel\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The ReservationName
     * @var \Travelport\Hotel\StructType\ReservationName|null
     */
    protected ?\Travelport\Hotel\StructType\ReservationName $ReservationName = null;
    /**
     * The ThirdPartyInformation
     * @var \Travelport\Hotel\StructType\ThirdPartyInformation|null
     */
    protected ?\Travelport\Hotel\StructType\ThirdPartyInformation $ThirdPartyInformation = null;
    /**
     * The Email
     * @var \Travelport\Hotel\StructType\Email|null
     */
    protected ?\Travelport\Hotel\StructType\Email $Email = null;
    /**
     * The PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber|null
     */
    protected ?\Travelport\Hotel\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The HotelProperty
     * @var \Travelport\Hotel\StructType\HotelProperty|null
     */
    protected ?\Travelport\Hotel\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelRateDetail
     * @var \Travelport\Hotel\StructType\HotelRateDetail|null
     */
    protected ?\Travelport\Hotel\StructType\HotelRateDetail $HotelRateDetail = null;
    /**
     * The HotelStay
     * @var \Travelport\Hotel\StructType\HotelStay|null
     */
    protected ?\Travelport\Hotel\StructType\HotelStay $HotelStay = null;
    /**
     * The HotelSpecialRequest
     * Meta information extracted from the WSDL
     * - documentation: Common type for general textual information
     * - base: xs:string
     * - maxLength: 250
     * @var string|null
     */
    protected ?string $HotelSpecialRequest = null;
    /**
     * The Guarantee
     * @var \Travelport\Hotel\StructType\Guarantee|null
     */
    protected ?\Travelport\Hotel\StructType\Guarantee $Guarantee = null;
    /**
     * The PromotionCode
     * @var \Travelport\Hotel\StructType\PromotionCode|null
     */
    protected ?\Travelport\Hotel\StructType\PromotionCode $PromotionCode = null;
    /**
     * The BookingSource
     * @var \Travelport\Hotel\StructType\BookingSource|null
     */
    protected ?\Travelport\Hotel\StructType\BookingSource $BookingSource = null;
    /**
     * The HotelBedding
     * @var \Travelport\Hotel\StructType\HotelBedding|null
     */
    protected ?\Travelport\Hotel\StructType\HotelBedding $HotelBedding = null;
    /**
     * The GuestInformation
     * @var \Travelport\Hotel\StructType\GuestInformation|null
     */
    protected ?\Travelport\Hotel\StructType\GuestInformation $GuestInformation = null;
    /**
     * The AssociatedRemark
     * @var \Travelport\Hotel\StructType\AssociatedRemark|null
     */
    protected ?\Travelport\Hotel\StructType\AssociatedRemark $AssociatedRemark = null;
    /**
     * The SellMessage
     * @var string|null
     */
    protected ?string $SellMessage = null;
    /**
     * The HotelCommission
     * @var string|null
     */
    protected ?string $HotelCommission = null;
    /**
     * The CancelInfo
     * @var \Travelport\Hotel\StructType\CancelInfo|null
     */
    protected ?\Travelport\Hotel\StructType\CancelInfo $CancelInfo = null;
    /**
     * The TotalReservationPrice
     * @var \Travelport\Hotel\StructType\TotalReservationPrice|null
     */
    protected ?\Travelport\Hotel\StructType\TotalReservationPrice $TotalReservationPrice = null;
    /**
     * The HotelDetailItem
     * @var \Travelport\Hotel\StructType\HotelDetailItem|null
     */
    protected ?\Travelport\Hotel\StructType\HotelDetailItem $HotelDetailItem = null;
    /**
     * The AdaptedRoomGuestAllocation
     * @var \Travelport\Hotel\StructType\AdaptedRoomGuestAllocation|null
     */
    protected ?\Travelport\Hotel\StructType\AdaptedRoomGuestAllocation $AdaptedRoomGuestAllocation = null;
    /**
     * The BookingConfirmation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingConfirmation = null;
    /**
     * The CancelConfirmation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CancelConfirmation = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The TravelOrder
     * Meta information extracted from the WSDL
     * - documentation: To identify the appropriate sequence for Air/Car/Hotel segments based on travel dates.
     * - use: optional
     * @var int|null
     */
    protected ?int $TravelOrder = null;
    /**
     * The ProviderSegmentOrder
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 999
     * - use: optional
     * @var int|null
     */
    protected ?int $ProviderSegmentOrder = null;
    /**
     * The PassiveProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Passive Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PassiveProviderReservationInfoRef = null;
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
     * @param \Travelport\Hotel\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\Hotel\StructType\ReservationName $reservationName
     * @param \Travelport\Hotel\StructType\ThirdPartyInformation $thirdPartyInformation
     * @param \Travelport\Hotel\StructType\Email $email
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @param \Travelport\Hotel\StructType\HotelRateDetail $hotelRateDetail
     * @param \Travelport\Hotel\StructType\HotelStay $hotelStay
     * @param string $hotelSpecialRequest
     * @param \Travelport\Hotel\StructType\Guarantee $guarantee
     * @param \Travelport\Hotel\StructType\PromotionCode $promotionCode
     * @param \Travelport\Hotel\StructType\BookingSource $bookingSource
     * @param \Travelport\Hotel\StructType\HotelBedding $hotelBedding
     * @param \Travelport\Hotel\StructType\GuestInformation $guestInformation
     * @param \Travelport\Hotel\StructType\AssociatedRemark $associatedRemark
     * @param string $sellMessage
     * @param string $hotelCommission
     * @param \Travelport\Hotel\StructType\CancelInfo $cancelInfo
     * @param \Travelport\Hotel\StructType\TotalReservationPrice $totalReservationPrice
     * @param \Travelport\Hotel\StructType\HotelDetailItem $hotelDetailItem
     * @param \Travelport\Hotel\StructType\AdaptedRoomGuestAllocation $adaptedRoomGuestAllocation
     * @param string $bookingConfirmation
     * @param string $cancelConfirmation
     * @param string $providerReservationInfoRef
     * @param int $travelOrder
     * @param int $providerSegmentOrder
     * @param string $passiveProviderReservationInfoRef
     */
    public function __construct(string $status, ?array $bookingTravelerRef = null, ?\Travelport\Hotel\StructType\ReservationName $reservationName = null, ?\Travelport\Hotel\StructType\ThirdPartyInformation $thirdPartyInformation = null, ?\Travelport\Hotel\StructType\Email $email = null, ?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null, ?\Travelport\Hotel\StructType\HotelRateDetail $hotelRateDetail = null, ?\Travelport\Hotel\StructType\HotelStay $hotelStay = null, ?string $hotelSpecialRequest = null, ?\Travelport\Hotel\StructType\Guarantee $guarantee = null, ?\Travelport\Hotel\StructType\PromotionCode $promotionCode = null, ?\Travelport\Hotel\StructType\BookingSource $bookingSource = null, ?\Travelport\Hotel\StructType\HotelBedding $hotelBedding = null, ?\Travelport\Hotel\StructType\GuestInformation $guestInformation = null, ?\Travelport\Hotel\StructType\AssociatedRemark $associatedRemark = null, ?string $sellMessage = null, ?string $hotelCommission = null, ?\Travelport\Hotel\StructType\CancelInfo $cancelInfo = null, ?\Travelport\Hotel\StructType\TotalReservationPrice $totalReservationPrice = null, ?\Travelport\Hotel\StructType\HotelDetailItem $hotelDetailItem = null, ?\Travelport\Hotel\StructType\AdaptedRoomGuestAllocation $adaptedRoomGuestAllocation = null, ?string $bookingConfirmation = null, ?string $cancelConfirmation = null, ?string $providerReservationInfoRef = null, ?int $travelOrder = null, ?int $providerSegmentOrder = null, ?string $passiveProviderReservationInfoRef = null)
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
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Hotel\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelReservationBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$hotelReservationBookingTravelerRefItem instanceof \Travelport\Hotel\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($hotelReservationBookingTravelerRefItem) ? get_class($hotelReservationBookingTravelerRefItem) : sprintf('%s(%s)', gettype($hotelReservationBookingTravelerRefItem), var_export($hotelReservationBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \Travelport\Hotel\StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
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
     * @param \Travelport\Hotel\StructType\BookingTravelerRef $item
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function addToBookingTravelerRef(\Travelport\Hotel\StructType\BookingTravelerRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \Travelport\Hotel\StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get ReservationName value
     * @return \Travelport\Hotel\StructType\ReservationName|null
     */
    public function getReservationName(): ?\Travelport\Hotel\StructType\ReservationName
    {
        return $this->ReservationName;
    }
    /**
     * Set ReservationName value
     * @param \Travelport\Hotel\StructType\ReservationName $reservationName
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setReservationName(?\Travelport\Hotel\StructType\ReservationName $reservationName = null): self
    {
        $this->ReservationName = $reservationName;
        
        return $this;
    }
    /**
     * Get ThirdPartyInformation value
     * @return \Travelport\Hotel\StructType\ThirdPartyInformation|null
     */
    public function getThirdPartyInformation(): ?\Travelport\Hotel\StructType\ThirdPartyInformation
    {
        return $this->ThirdPartyInformation;
    }
    /**
     * Set ThirdPartyInformation value
     * @param \Travelport\Hotel\StructType\ThirdPartyInformation $thirdPartyInformation
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setThirdPartyInformation(?\Travelport\Hotel\StructType\ThirdPartyInformation $thirdPartyInformation = null): self
    {
        $this->ThirdPartyInformation = $thirdPartyInformation;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Hotel\StructType\Email|null
     */
    public function getEmail(): ?\Travelport\Hotel\StructType\Email
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\Hotel\StructType\Email $email
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setEmail(?\Travelport\Hotel\StructType\Email $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Hotel\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Hotel\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setPhoneNumber(?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\Hotel\StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\Travelport\Hotel\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setHotelProperty(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelRateDetail value
     * @return \Travelport\Hotel\StructType\HotelRateDetail|null
     */
    public function getHotelRateDetail(): ?\Travelport\Hotel\StructType\HotelRateDetail
    {
        return $this->HotelRateDetail;
    }
    /**
     * Set HotelRateDetail value
     * @param \Travelport\Hotel\StructType\HotelRateDetail $hotelRateDetail
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setHotelRateDetail(?\Travelport\Hotel\StructType\HotelRateDetail $hotelRateDetail = null): self
    {
        $this->HotelRateDetail = $hotelRateDetail;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \Travelport\Hotel\StructType\HotelStay|null
     */
    public function getHotelStay(): ?\Travelport\Hotel\StructType\HotelStay
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @param \Travelport\Hotel\StructType\HotelStay $hotelStay
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setHotelStay(?\Travelport\Hotel\StructType\HotelStay $hotelStay = null): self
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
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setHotelSpecialRequest(?string $hotelSpecialRequest = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelSpecialRequest) && !is_string($hotelSpecialRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelSpecialRequest, true), gettype($hotelSpecialRequest)), __LINE__);
        }
        // validation for constraint: maxLength(250)
        if (!is_null($hotelSpecialRequest) && mb_strlen((string) $hotelSpecialRequest) > 250) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 250', mb_strlen((string) $hotelSpecialRequest)), __LINE__);
        }
        $this->HotelSpecialRequest = $hotelSpecialRequest;
        
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \Travelport\Hotel\StructType\Guarantee|null
     */
    public function getGuarantee(): ?\Travelport\Hotel\StructType\Guarantee
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @param \Travelport\Hotel\StructType\Guarantee $guarantee
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setGuarantee(?\Travelport\Hotel\StructType\Guarantee $guarantee = null): self
    {
        $this->Guarantee = $guarantee;
        
        return $this;
    }
    /**
     * Get PromotionCode value
     * @return \Travelport\Hotel\StructType\PromotionCode|null
     */
    public function getPromotionCode(): ?\Travelport\Hotel\StructType\PromotionCode
    {
        return $this->PromotionCode;
    }
    /**
     * Set PromotionCode value
     * @param \Travelport\Hotel\StructType\PromotionCode $promotionCode
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setPromotionCode(?\Travelport\Hotel\StructType\PromotionCode $promotionCode = null): self
    {
        $this->PromotionCode = $promotionCode;
        
        return $this;
    }
    /**
     * Get BookingSource value
     * @return \Travelport\Hotel\StructType\BookingSource|null
     */
    public function getBookingSource(): ?\Travelport\Hotel\StructType\BookingSource
    {
        return $this->BookingSource;
    }
    /**
     * Set BookingSource value
     * @param \Travelport\Hotel\StructType\BookingSource $bookingSource
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setBookingSource(?\Travelport\Hotel\StructType\BookingSource $bookingSource = null): self
    {
        $this->BookingSource = $bookingSource;
        
        return $this;
    }
    /**
     * Get HotelBedding value
     * @return \Travelport\Hotel\StructType\HotelBedding|null
     */
    public function getHotelBedding(): ?\Travelport\Hotel\StructType\HotelBedding
    {
        return $this->HotelBedding;
    }
    /**
     * Set HotelBedding value
     * @param \Travelport\Hotel\StructType\HotelBedding $hotelBedding
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setHotelBedding(?\Travelport\Hotel\StructType\HotelBedding $hotelBedding = null): self
    {
        $this->HotelBedding = $hotelBedding;
        
        return $this;
    }
    /**
     * Get GuestInformation value
     * @return \Travelport\Hotel\StructType\GuestInformation|null
     */
    public function getGuestInformation(): ?\Travelport\Hotel\StructType\GuestInformation
    {
        return $this->GuestInformation;
    }
    /**
     * Set GuestInformation value
     * @param \Travelport\Hotel\StructType\GuestInformation $guestInformation
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setGuestInformation(?\Travelport\Hotel\StructType\GuestInformation $guestInformation = null): self
    {
        $this->GuestInformation = $guestInformation;
        
        return $this;
    }
    /**
     * Get AssociatedRemark value
     * @return \Travelport\Hotel\StructType\AssociatedRemark|null
     */
    public function getAssociatedRemark(): ?\Travelport\Hotel\StructType\AssociatedRemark
    {
        return $this->AssociatedRemark;
    }
    /**
     * Set AssociatedRemark value
     * @param \Travelport\Hotel\StructType\AssociatedRemark $associatedRemark
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setAssociatedRemark(?\Travelport\Hotel\StructType\AssociatedRemark $associatedRemark = null): self
    {
        $this->AssociatedRemark = $associatedRemark;
        
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
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setSellMessage(?string $sellMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($sellMessage) && !is_string($sellMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellMessage, true), gettype($sellMessage)), __LINE__);
        }
        $this->SellMessage = $sellMessage;
        
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
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setHotelCommission(?string $hotelCommission = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCommission) && !is_string($hotelCommission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCommission, true), gettype($hotelCommission)), __LINE__);
        }
        $this->HotelCommission = $hotelCommission;
        
        return $this;
    }
    /**
     * Get CancelInfo value
     * @return \Travelport\Hotel\StructType\CancelInfo|null
     */
    public function getCancelInfo(): ?\Travelport\Hotel\StructType\CancelInfo
    {
        return $this->CancelInfo;
    }
    /**
     * Set CancelInfo value
     * @param \Travelport\Hotel\StructType\CancelInfo $cancelInfo
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setCancelInfo(?\Travelport\Hotel\StructType\CancelInfo $cancelInfo = null): self
    {
        $this->CancelInfo = $cancelInfo;
        
        return $this;
    }
    /**
     * Get TotalReservationPrice value
     * @return \Travelport\Hotel\StructType\TotalReservationPrice|null
     */
    public function getTotalReservationPrice(): ?\Travelport\Hotel\StructType\TotalReservationPrice
    {
        return $this->TotalReservationPrice;
    }
    /**
     * Set TotalReservationPrice value
     * @param \Travelport\Hotel\StructType\TotalReservationPrice $totalReservationPrice
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setTotalReservationPrice(?\Travelport\Hotel\StructType\TotalReservationPrice $totalReservationPrice = null): self
    {
        $this->TotalReservationPrice = $totalReservationPrice;
        
        return $this;
    }
    /**
     * Get HotelDetailItem value
     * @return \Travelport\Hotel\StructType\HotelDetailItem|null
     */
    public function getHotelDetailItem(): ?\Travelport\Hotel\StructType\HotelDetailItem
    {
        return $this->HotelDetailItem;
    }
    /**
     * Set HotelDetailItem value
     * @param \Travelport\Hotel\StructType\HotelDetailItem $hotelDetailItem
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setHotelDetailItem(?\Travelport\Hotel\StructType\HotelDetailItem $hotelDetailItem = null): self
    {
        $this->HotelDetailItem = $hotelDetailItem;
        
        return $this;
    }
    /**
     * Get AdaptedRoomGuestAllocation value
     * @return \Travelport\Hotel\StructType\AdaptedRoomGuestAllocation|null
     */
    public function getAdaptedRoomGuestAllocation(): ?\Travelport\Hotel\StructType\AdaptedRoomGuestAllocation
    {
        return $this->AdaptedRoomGuestAllocation;
    }
    /**
     * Set AdaptedRoomGuestAllocation value
     * @param \Travelport\Hotel\StructType\AdaptedRoomGuestAllocation $adaptedRoomGuestAllocation
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setAdaptedRoomGuestAllocation(?\Travelport\Hotel\StructType\AdaptedRoomGuestAllocation $adaptedRoomGuestAllocation = null): self
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
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setBookingConfirmation(?string $bookingConfirmation = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingConfirmation) && !is_string($bookingConfirmation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingConfirmation, true), gettype($bookingConfirmation)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setCancelConfirmation(?string $cancelConfirmation = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelConfirmation) && !is_string($cancelConfirmation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelConfirmation, true), gettype($cancelConfirmation)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($travelOrder) && !(is_int($travelOrder) || ctype_digit($travelOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelOrder, true), gettype($travelOrder)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setProviderSegmentOrder(?int $providerSegmentOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($providerSegmentOrder) && !(is_int($providerSegmentOrder) || ctype_digit($providerSegmentOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($providerSegmentOrder, true), gettype($providerSegmentOrder)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($providerSegmentOrder) && $providerSegmentOrder > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($providerSegmentOrder, true)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\HotelReservation
     */
    public function setPassiveProviderReservationInfoRef(?string $passiveProviderReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($passiveProviderReservationInfoRef) && !is_string($passiveProviderReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passiveProviderReservationInfoRef, true), gettype($passiveProviderReservationInfoRef)), __LINE__);
        }
        $this->PassiveProviderReservationInfoRef = $passiveProviderReservationInfoRef;
        
        return $this;
    }
}