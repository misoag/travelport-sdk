<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?array $Email = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    protected ?array $PhoneNumber = null;
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - ref: hotel:HotelRateDetail
     * @var \Travelport\UniversalRecord\StructType\HotelRateDetail[]
     */
    protected ?array $HotelRateDetail = null;
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - ref: hotel:HotelProperty
     * @var \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelProperty $HotelProperty = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ThirdPartyInformation $ThirdPartyInformation = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: hotel:HotelStay
     * @var \Travelport\UniversalRecord\StructType\HotelStay|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HotelStay $HotelStay = null;
    /**
     * The Guarantee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Guarantee
     * @var \Travelport\UniversalRecord\StructType\Guarantee|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Guarantee $Guarantee = null;
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
    protected ?string $HotelSpecialRequest = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PointOfSale $PointOfSale = null;
    /**
     * The PromotionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: hotel:PromotionCode
     * @var \Travelport\UniversalRecord\StructType\PromotionCode|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PromotionCode $PromotionCode = null;
    /**
     * The BookingSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:BookingSource
     * @var \Travelport\UniversalRecord\StructType\BookingSource|null
     */
    protected ?\Travelport\UniversalRecord\StructType\BookingSource $BookingSource = null;
    /**
     * The HotelBedding
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: hotel:HotelBedding
     * @var \Travelport\UniversalRecord\StructType\HotelBedding[]
     */
    protected ?array $HotelBedding = null;
    /**
     * The GuestInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: hotel:GuestInformation
     * @var \Travelport\UniversalRecord\StructType\GuestInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\GuestInformation $GuestInformation = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 9999
     * - minOccurs: 0
     * - ref: hotel:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    protected ?array $AssociatedRemark = null;
    /**
     * The ReservationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ReservationName
     * @var \Travelport\UniversalRecord\StructType\ReservationName|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ReservationName $ReservationName = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ActionStatus $ActionStatus = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\UniversalRecord\StructType\HostToken|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HostToken $HostToken = null;
    /**
     * The ReviewBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: 9999
     * - minOccurs: 0
     * - ref: common:ReviewBooking
     * @var \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    protected ?array $ReviewBooking = null;
    /**
     * The HotelCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: hotel:HotelCommission
     * @var string|null
     */
    protected ?string $HotelCommission = null;
    /**
     * The UserAcceptance
     * Meta information extracted from the WSDL
     * - documentation: If true, traveler has reviewed and accepted all policies, restrictions, and terms and conditions prior to booking. Default, false.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $UserAcceptance = null;
    /**
     * The MandatoryRateMatch
     * Meta information extracted from the WSDL
     * - documentation: If true, hotel will not be booked if there is a rate discrepancy. Default is false. Supported providers: 1g,1v,1p.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MandatoryRateMatch = null;
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
    protected ?string $StatusCode = null;
    /**
     * The BookingConfirmation
     * Meta information extracted from the WSDL
     * - documentation: Hotel Booking Confirmation Number for passive hotel segment. Supported Providers:1P. | Hotel Confirmation Number from a Third Party System.
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingConfirmation = null;
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
     * This method is responsible for validating the values passed to the setEmail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailForArrayConstraintsFromSetEmail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelCreateReservationReqEmailItem) {
            // validation for constraint: itemType
            if (!$hotelCreateReservationReqEmailItem instanceof \Travelport\UniversalRecord\StructType\Email) {
                $invalidValues[] = is_object($hotelCreateReservationReqEmailItem) ? get_class($hotelCreateReservationReqEmailItem) : sprintf('%s(%s)', gettype($hotelCreateReservationReqEmailItem), var_export($hotelCreateReservationReqEmailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Email property can only contain items of type \Travelport\UniversalRecord\StructType\Email, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Email value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Email[] $email
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setEmail(?array $email = null): self
    {
        // validation for constraint: array
        if ('' !== ($emailArrayErrorMessage = self::validateEmailForArrayConstraintsFromSetEmail($email))) {
            throw new InvalidArgumentException($emailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($email) && count($email) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($email)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Email) {
            throw new InvalidArgumentException(sprintf('The Email property can only contain items of type \Travelport\UniversalRecord\StructType\Email, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Email) && count($this->Email) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Email)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setPhoneNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneNumberForArrayConstraintsFromSetPhoneNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelCreateReservationReqPhoneNumberItem) {
            // validation for constraint: itemType
            if (!$hotelCreateReservationReqPhoneNumberItem instanceof \Travelport\UniversalRecord\StructType\PhoneNumber) {
                $invalidValues[] = is_object($hotelCreateReservationReqPhoneNumberItem) ? get_class($hotelCreateReservationReqPhoneNumberItem) : sprintf('%s(%s)', gettype($hotelCreateReservationReqPhoneNumberItem), var_export($hotelCreateReservationReqPhoneNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneNumber property can only contain items of type \Travelport\UniversalRecord\StructType\PhoneNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($phoneNumberArrayErrorMessage = self::validatePhoneNumberForArrayConstraintsFromSetPhoneNumber($phoneNumber))) {
            throw new InvalidArgumentException($phoneNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($phoneNumber) && count($phoneNumber) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($phoneNumber)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PhoneNumber) {
            throw new InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of type \Travelport\UniversalRecord\StructType\PhoneNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PhoneNumber) && count($this->PhoneNumber) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PhoneNumber)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setHotelRateDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRateDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRateDetailForArrayConstraintsFromSetHotelRateDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelCreateReservationReqHotelRateDetailItem) {
            // validation for constraint: itemType
            if (!$hotelCreateReservationReqHotelRateDetailItem instanceof \Travelport\UniversalRecord\StructType\HotelRateDetail) {
                $invalidValues[] = is_object($hotelCreateReservationReqHotelRateDetailItem) ? get_class($hotelCreateReservationReqHotelRateDetailItem) : sprintf('%s(%s)', gettype($hotelCreateReservationReqHotelRateDetailItem), var_export($hotelCreateReservationReqHotelRateDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRateDetail property can only contain items of type \Travelport\UniversalRecord\StructType\HotelRateDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRateDetail[] $hotelRateDetail
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setHotelRateDetail(?array $hotelRateDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRateDetailArrayErrorMessage = self::validateHotelRateDetailForArrayConstraintsFromSetHotelRateDetail($hotelRateDetail))) {
            throw new InvalidArgumentException($hotelRateDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($hotelRateDetail) && count($hotelRateDetail) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($hotelRateDetail)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelRateDetail) {
            throw new InvalidArgumentException(sprintf('The HotelRateDetail property can only contain items of type \Travelport\UniversalRecord\StructType\HotelRateDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->HotelRateDetail) && count($this->HotelRateDetail) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->HotelRateDetail)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setHotelBedding method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelBedding method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelBeddingForArrayConstraintsFromSetHotelBedding(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelCreateReservationReqHotelBeddingItem) {
            // validation for constraint: itemType
            if (!$hotelCreateReservationReqHotelBeddingItem instanceof \Travelport\UniversalRecord\StructType\HotelBedding) {
                $invalidValues[] = is_object($hotelCreateReservationReqHotelBeddingItem) ? get_class($hotelCreateReservationReqHotelBeddingItem) : sprintf('%s(%s)', gettype($hotelCreateReservationReqHotelBeddingItem), var_export($hotelCreateReservationReqHotelBeddingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelBedding property can only contain items of type \Travelport\UniversalRecord\StructType\HotelBedding, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelBedding value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelBedding[] $hotelBedding
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setHotelBedding(?array $hotelBedding = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelBeddingArrayErrorMessage = self::validateHotelBeddingForArrayConstraintsFromSetHotelBedding($hotelBedding))) {
            throw new InvalidArgumentException($hotelBeddingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($hotelBedding) && count($hotelBedding) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($hotelBedding)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelBedding) {
            throw new InvalidArgumentException(sprintf('The HotelBedding property can only contain items of type \Travelport\UniversalRecord\StructType\HotelBedding, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->HotelBedding) && count($this->HotelBedding) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->HotelBedding)), __LINE__);
        }
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
        foreach ($values as $hotelCreateReservationReqAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$hotelCreateReservationReqAssociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($hotelCreateReservationReqAssociatedRemarkItem) ? get_class($hotelCreateReservationReqAssociatedRemarkItem) : sprintf('%s(%s)', gettype($hotelCreateReservationReqAssociatedRemarkItem), var_export($hotelCreateReservationReqAssociatedRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($associatedRemarkArrayErrorMessage = self::validateAssociatedRemarkForArrayConstraintsFromSetAssociatedRemark($associatedRemark))) {
            throw new InvalidArgumentException($associatedRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9999)
        if (is_array($associatedRemark) && count($associatedRemark) > 9999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9999', count($associatedRemark)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
            throw new InvalidArgumentException(sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9999)
        if (is_array($this->AssociatedRemark) && count($this->AssociatedRemark) >= 9999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9999', count($this->AssociatedRemark)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setReviewBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReviewBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReviewBookingForArrayConstraintsFromSetReviewBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelCreateReservationReqReviewBookingItem) {
            // validation for constraint: itemType
            if (!$hotelCreateReservationReqReviewBookingItem instanceof \Travelport\UniversalRecord\StructType\ReviewBooking) {
                $invalidValues[] = is_object($hotelCreateReservationReqReviewBookingItem) ? get_class($hotelCreateReservationReqReviewBookingItem) : sprintf('%s(%s)', gettype($hotelCreateReservationReqReviewBookingItem), var_export($hotelCreateReservationReqReviewBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReviewBooking property can only contain items of type \Travelport\UniversalRecord\StructType\ReviewBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReviewBooking value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @return \Travelport\UniversalRecord\StructType\HotelCreateReservationReq
     */
    public function setReviewBooking(?array $reviewBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($reviewBookingArrayErrorMessage = self::validateReviewBookingForArrayConstraintsFromSetReviewBooking($reviewBooking))) {
            throw new InvalidArgumentException($reviewBookingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9999)
        if (is_array($reviewBooking) && count($reviewBooking) > 9999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9999', count($reviewBooking)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ReviewBooking) {
            throw new InvalidArgumentException(sprintf('The ReviewBooking property can only contain items of type \Travelport\UniversalRecord\StructType\ReviewBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9999)
        if (is_array($this->ReviewBooking) && count($this->ReviewBooking) >= 9999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9999', count($this->ReviewBooking)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($hotelCommission) && !is_string($hotelCommission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCommission, true), gettype($hotelCommission)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($userAcceptance) && !is_bool($userAcceptance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userAcceptance, true), gettype($userAcceptance)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($mandatoryRateMatch) && !is_bool($mandatoryRateMatch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mandatoryRateMatch, true), gettype($mandatoryRateMatch)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($statusCode) && mb_strlen((string) $statusCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $statusCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($bookingConfirmation) && !is_string($bookingConfirmation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingConfirmation, true), gettype($bookingConfirmation)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($bookingConfirmation) && mb_strlen((string) $bookingConfirmation) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $bookingConfirmation)), __LINE__);
        }
        $this->BookingConfirmation = $bookingConfirmation;
        
        return $this;
    }
}
