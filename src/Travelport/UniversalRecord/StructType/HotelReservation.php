<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The ReservationName
     * @var \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ReservationName $ReservationName = null;
    /**
     * The ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $ThirdPartyInformation = null;
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
     * The HotelProperty
     * @var \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelRateDetail
     * @var \Travelport\UniversalRecord\StructType\HotelRateDetail|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelRateDetail $HotelRateDetail = null;
    /**
     * The HotelStay
     * @var \Travelport\UniversalRecord\StructType\HotelStay|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelStay $HotelStay = null;
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
     * @var \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
    /**
     * The PromotionCode
     * @var \Travelport\UniversalRecord\StructType\PromotionCode|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PromotionCode $PromotionCode = null;
    /**
     * The BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The HotelBedding
     * @var \Travelport\UniversalRecord\StructType\HotelBedding|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelBedding $HotelBedding = null;
    /**
     * The GuestInformation
     * @var \Travelport\UniversalRecord\StructType\GuestInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\GuestInformation $GuestInformation = null;
    /**
     * The AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AssociatedRemark $AssociatedRemark = null;
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
     * @var \Travelport\UniversalRecord\StructType\CancelInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CancelInfo $CancelInfo = null;
    /**
     * The TotalReservationPrice
     * @var \Travelport\UniversalRecord\StructType\TotalReservationPrice|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TotalReservationPrice $TotalReservationPrice = null;
    /**
     * The HotelDetailItem
     * @var \Travelport\UniversalRecord\StructType\HotelDetailItem|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelDetailItem $HotelDetailItem = null;
    /**
     * The AdaptedRoomGuestAllocation
     * @var \Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation $AdaptedRoomGuestAllocation = null;
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
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\ReservationName $reservationName
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\Email $email
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail $hotelRateDetail
     * @param \Travelport\UniversalRecord\StructType\HotelStay $hotelStay
     * @param string $hotelSpecialRequest
     * @param \Travelport\UniversalRecord\StructType\Guarantee $guarantee
     * @param \Travelport\UniversalRecord\StructType\PromotionCode $promotionCode
     * @param \Travelport\UniversalRecord\StructType\BookingSource $bookingSource
     * @param \Travelport\UniversalRecord\StructType\HotelBedding $hotelBedding
     * @param \Travelport\UniversalRecord\StructType\GuestInformation $guestInformation
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $associatedRemark
     * @param string $sellMessage
     * @param string $hotelCommission
     * @param \Travelport\UniversalRecord\StructType\CancelInfo $cancelInfo
     * @param \Travelport\UniversalRecord\StructType\TotalReservationPrice $totalReservationPrice
     * @param \Travelport\UniversalRecord\StructType\HotelDetailItem $hotelDetailItem
     * @param \Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation $adaptedRoomGuestAllocation
     * @param string $bookingConfirmation
     * @param string $cancelConfirmation
     * @param string $providerReservationInfoRef
     * @param int $travelOrder
     * @param int $providerSegmentOrder
     * @param string $passiveProviderReservationInfoRef
     */
    public function __construct(string $status, ?array $bookingTravelerRef = null, ?\Travelport\UniversalRecord\StructType\ReservationName $reservationName = null, ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $thirdPartyInformation = null, ?\Travelport\UniversalRecord\StructType\Email $email = null, ?\Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null, ?\Travelport\UniversalRecord\StructType\HotelRateDetail $hotelRateDetail = null, ?\Travelport\UniversalRecord\StructType\HotelStay $hotelStay = null, ?string $hotelSpecialRequest = null, ?\Travelport\UniversalRecord\StructType\Guarantee $guarantee = null, ?\Travelport\UniversalRecord\StructType\PromotionCode $promotionCode = null, ?\Travelport\UniversalRecord\StructType\BookingSource $bookingSource = null, ?\Travelport\UniversalRecord\StructType\HotelBedding $hotelBedding = null, ?\Travelport\UniversalRecord\StructType\GuestInformation $guestInformation = null, ?\Travelport\UniversalRecord\StructType\AssociatedRemark $associatedRemark = null, ?string $sellMessage = null, ?string $hotelCommission = null, ?\Travelport\UniversalRecord\StructType\CancelInfo $cancelInfo = null, ?\Travelport\UniversalRecord\StructType\TotalReservationPrice $totalReservationPrice = null, ?\Travelport\UniversalRecord\StructType\HotelDetailItem $hotelDetailItem = null, ?\Travelport\UniversalRecord\StructType\AdaptedRoomGuestAllocation $adaptedRoomGuestAllocation = null, ?string $bookingConfirmation = null, ?string $cancelConfirmation = null, ?string $providerReservationInfoRef = null, ?int $travelOrder = null, ?int $providerSegmentOrder = null, ?string $passiveProviderReservationInfoRef = null)
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
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
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
            if (!$hotelReservationBookingTravelerRefItem instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($hotelReservationBookingTravelerRefItem) ? get_class($hotelReservationBookingTravelerRefItem) : sprintf('%s(%s)', gettype($hotelReservationBookingTravelerRefItem), var_export($hotelReservationBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\UniversalRecord\StructType\Email|null
     */
    public function getEmail(): ?\Travelport\UniversalRecord\StructType\Email
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\UniversalRecord\StructType\Email $email
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setPhoneNumber(?\Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail|null
     */
    public function getHotelRateDetail(): ?\Travelport\UniversalRecord\StructType\HotelRateDetail
    {
        return $this->HotelRateDetail;
    }
    /**
     * Set HotelRateDetail value
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail $hotelRateDetail
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setHotelRateDetail(?\Travelport\UniversalRecord\StructType\HotelRateDetail $hotelRateDetail = null): self
    {
        $this->HotelRateDetail = $hotelRateDetail;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelBedding|null
     */
    public function getHotelBedding(): ?\Travelport\UniversalRecord\StructType\HotelBedding
    {
        return $this->HotelBedding;
    }
    /**
     * Set HotelBedding value
     * @param \Travelport\UniversalRecord\StructType\HotelBedding $hotelBedding
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setHotelBedding(?\Travelport\UniversalRecord\StructType\HotelBedding $hotelBedding = null): self
    {
        $this->HotelBedding = $hotelBedding;
        
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
     * @return \Travelport\UniversalRecord\StructType\AssociatedRemark|null
     */
    public function getAssociatedRemark(): ?\Travelport\UniversalRecord\StructType\AssociatedRemark
    {
        return $this->AssociatedRemark;
    }
    /**
     * Set AssociatedRemark value
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setAssociatedRemark(?\Travelport\UniversalRecord\StructType\AssociatedRemark $associatedRemark = null): self
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelDetailItem|null
     */
    public function getHotelDetailItem(): ?\Travelport\UniversalRecord\StructType\HotelDetailItem
    {
        return $this->HotelDetailItem;
    }
    /**
     * Set HotelDetailItem value
     * @param \Travelport\UniversalRecord\StructType\HotelDetailItem $hotelDetailItem
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
     */
    public function setHotelDetailItem(?\Travelport\UniversalRecord\StructType\HotelDetailItem $hotelDetailItem = null): self
    {
        $this->HotelDetailItem = $hotelDetailItem;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
     * @return \Travelport\UniversalRecord\StructType\HotelReservation
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
