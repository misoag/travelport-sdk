<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coupon StructType
 * Meta information extracted from the WSDL
 * - documentation: The flight coupon that resulted from the ticketing operation.
 * @subpackage Structs
 */
class Coupon extends AbstractStructBase
{
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Returns the airport or city code that defines the origin market for this fare. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Returns the airport or city code that defines the destination market for this fare. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Destination;
    /**
     * The StopoverCode
     * Meta information extracted from the WSDL
     * - documentation: Stopover code - indicator that stopover is allowed at Origin Airport or City.
     * - use: required
     * @var bool
     */
    protected bool $StopoverCode;
    /**
     * The BookingClass
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - use: required
     * @var string
     */
    protected string $BookingClass;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code for this fare
     * - use: required
     * @var string
     */
    protected string $FareBasis;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - use: required
     * @var string
     */
    protected string $Status;
    /**
     * The TicketDesignator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketDesignator
     * @var \Travelport\Util\StructType\TicketDesignator[]
     */
    protected ?array $TicketDesignator = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The CouponNumber
     * Meta information extracted from the WSDL
     * - documentation: The sequential number of this coupon.
     * - use: optional
     * @var int|null
     */
    protected ?int $CouponNumber = null;
    /**
     * The OperatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The true carrier. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $OperatingCarrier = null;
    /**
     * The OperatingFlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The true carrier's flight number. | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $OperatingFlightNumber = null;
    /**
     * The MarketingCarrier
     * Meta information extracted from the WSDL
     * - documentation: If codeshare applies to this, this is the marketing carrier (as opposed to the operating carrier). | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $MarketingCarrier = null;
    /**
     * The MarketingFlightNumber
     * Meta information extracted from the WSDL
     * - documentation: If codeshare applies to this, this is the marketing flight number (as opposed to the operating flight number). | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $MarketingFlightNumber = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity departs. This does not include time zone information since it can be derived from the origin location. In case of open segment this will not be returned.
     * @var string|null
     */
    protected ?string $DepartureTime = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the origin location.
     * - use: optional
     * @var string|null
     */
    protected ?string $ArrivalTime = null;
    /**
     * The NotValidBefore
     * Meta information extracted from the WSDL
     * - documentation: Fare not valid before this date.
     * - use: optional
     * @var string|null
     */
    protected ?string $NotValidBefore = null;
    /**
     * The NotValidAfter
     * Meta information extracted from the WSDL
     * - documentation: Fare not valid after this date.
     * - use: optional
     * @var string|null
     */
    protected ?string $NotValidAfter = null;
    /**
     * The SegmentGroup
     * Meta information extracted from the WSDL
     * - documentation: Indicates the grouping in which this segment resides based on Origin/Destination pairs in itinerary
     * - use: optional
     * @var int|null
     */
    protected ?int $SegmentGroup = null;
    /**
     * The MarriageGroup
     * Meta information extracted from the WSDL
     * - documentation: Airline Marrraige group indicator
     * - use: optional
     * @var int|null
     */
    protected ?int $MarriageGroup = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for Coupon
     * @uses Coupon::setOrigin()
     * @uses Coupon::setDestination()
     * @uses Coupon::setStopoverCode()
     * @uses Coupon::setBookingClass()
     * @uses Coupon::setFareBasis()
     * @uses Coupon::setStatus()
     * @uses Coupon::setTicketDesignator()
     * @uses Coupon::setKey()
     * @uses Coupon::setCouponNumber()
     * @uses Coupon::setOperatingCarrier()
     * @uses Coupon::setOperatingFlightNumber()
     * @uses Coupon::setMarketingCarrier()
     * @uses Coupon::setMarketingFlightNumber()
     * @uses Coupon::setDepartureTime()
     * @uses Coupon::setArrivalTime()
     * @uses Coupon::setNotValidBefore()
     * @uses Coupon::setNotValidAfter()
     * @uses Coupon::setSegmentGroup()
     * @uses Coupon::setMarriageGroup()
     * @uses Coupon::setElStat()
     * @uses Coupon::setKeyOverride()
     * @param string $origin
     * @param string $destination
     * @param bool $stopoverCode
     * @param string $bookingClass
     * @param string $fareBasis
     * @param string $status
     * @param \Travelport\Util\StructType\TicketDesignator[] $ticketDesignator
     * @param string $key
     * @param int $couponNumber
     * @param string $operatingCarrier
     * @param string $operatingFlightNumber
     * @param string $marketingCarrier
     * @param string $marketingFlightNumber
     * @param string $departureTime
     * @param string $arrivalTime
     * @param string $notValidBefore
     * @param string $notValidAfter
     * @param int $segmentGroup
     * @param int $marriageGroup
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $origin, string $destination, bool $stopoverCode, string $bookingClass, string $fareBasis, string $status, ?array $ticketDesignator = null, ?string $key = null, ?int $couponNumber = null, ?string $operatingCarrier = null, ?string $operatingFlightNumber = null, ?string $marketingCarrier = null, ?string $marketingFlightNumber = null, ?string $departureTime = null, ?string $arrivalTime = null, ?string $notValidBefore = null, ?string $notValidAfter = null, ?int $segmentGroup = null, ?int $marriageGroup = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setStopoverCode($stopoverCode)
            ->setBookingClass($bookingClass)
            ->setFareBasis($fareBasis)
            ->setStatus($status)
            ->setTicketDesignator($ticketDesignator)
            ->setKey($key)
            ->setCouponNumber($couponNumber)
            ->setOperatingCarrier($operatingCarrier)
            ->setOperatingFlightNumber($operatingFlightNumber)
            ->setMarketingCarrier($marketingCarrier)
            ->setMarketingFlightNumber($marketingFlightNumber)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setNotValidBefore($notValidBefore)
            ->setNotValidAfter($notValidAfter)
            ->setSegmentGroup($segmentGroup)
            ->setMarriageGroup($marriageGroup)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setOrigin(string $origin): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setDestination(string $destination): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get StopoverCode value
     * @return bool
     */
    public function getStopoverCode(): bool
    {
        return $this->StopoverCode;
    }
    /**
     * Set StopoverCode value
     * @param bool $stopoverCode
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setStopoverCode(bool $stopoverCode): self
    {
        // validation for constraint: boolean
        if (!is_null($stopoverCode) && !is_bool($stopoverCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stopoverCode, true), gettype($stopoverCode)), __LINE__);
        }
        $this->StopoverCode = $stopoverCode;
        
        return $this;
    }
    /**
     * Get BookingClass value
     * @return string
     */
    public function getBookingClass(): string
    {
        return $this->BookingClass;
    }
    /**
     * Set BookingClass value
     * @param string $bookingClass
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setBookingClass(string $bookingClass): self
    {
        // validation for constraint: string
        if (!is_null($bookingClass) && !is_string($bookingClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingClass, true), gettype($bookingClass)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($bookingClass) && mb_strlen((string) $bookingClass) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $bookingClass)), __LINE__);
        }
        $this->BookingClass = $bookingClass;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return string
     */
    public function getFareBasis(): string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setFareBasis(string $fareBasis): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
        $this->FareBasis = $fareBasis;
        
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
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($status) && mb_strlen((string) $status) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $status)), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get TicketDesignator value
     * @return \Travelport\Util\StructType\TicketDesignator[]
     */
    public function getTicketDesignator(): ?array
    {
        return $this->TicketDesignator;
    }
    /**
     * This method is responsible for validating the values passed to the setTicketDesignator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketDesignator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketDesignatorForArrayConstraintsFromSetTicketDesignator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $couponTicketDesignatorItem) {
            // validation for constraint: itemType
            if (!$couponTicketDesignatorItem instanceof \Travelport\Util\StructType\TicketDesignator) {
                $invalidValues[] = is_object($couponTicketDesignatorItem) ? get_class($couponTicketDesignatorItem) : sprintf('%s(%s)', gettype($couponTicketDesignatorItem), var_export($couponTicketDesignatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketDesignator property can only contain items of type \Travelport\Util\StructType\TicketDesignator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketDesignator value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketDesignator[] $ticketDesignator
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setTicketDesignator(?array $ticketDesignator = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketDesignatorArrayErrorMessage = self::validateTicketDesignatorForArrayConstraintsFromSetTicketDesignator($ticketDesignator))) {
            throw new InvalidArgumentException($ticketDesignatorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($ticketDesignator) && count($ticketDesignator) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($ticketDesignator)), __LINE__);
        }
        $this->TicketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Add item to TicketDesignator value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketDesignator $item
     * @return \Travelport\Util\StructType\Coupon
     */
    public function addToTicketDesignator(\Travelport\Util\StructType\TicketDesignator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TicketDesignator) {
            throw new InvalidArgumentException(sprintf('The TicketDesignator property can only contain items of type \Travelport\Util\StructType\TicketDesignator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TicketDesignator) && count($this->TicketDesignator) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TicketDesignator)), __LINE__);
        }
        $this->TicketDesignator[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get CouponNumber value
     * @return int|null
     */
    public function getCouponNumber(): ?int
    {
        return $this->CouponNumber;
    }
    /**
     * Set CouponNumber value
     * @param int $couponNumber
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setCouponNumber(?int $couponNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($couponNumber) && !(is_int($couponNumber) || ctype_digit($couponNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($couponNumber, true), gettype($couponNumber)), __LINE__);
        }
        $this->CouponNumber = $couponNumber;
        
        return $this;
    }
    /**
     * Get OperatingCarrier value
     * @return string|null
     */
    public function getOperatingCarrier(): ?string
    {
        return $this->OperatingCarrier;
    }
    /**
     * Set OperatingCarrier value
     * @param string $operatingCarrier
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setOperatingCarrier(?string $operatingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingCarrier) && !is_string($operatingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingCarrier, true), gettype($operatingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($operatingCarrier) && mb_strlen((string) $operatingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $operatingCarrier)), __LINE__);
        }
        $this->OperatingCarrier = $operatingCarrier;
        
        return $this;
    }
    /**
     * Get OperatingFlightNumber value
     * @return string|null
     */
    public function getOperatingFlightNumber(): ?string
    {
        return $this->OperatingFlightNumber;
    }
    /**
     * Set OperatingFlightNumber value
     * @param string $operatingFlightNumber
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setOperatingFlightNumber(?string $operatingFlightNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingFlightNumber) && !is_string($operatingFlightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingFlightNumber, true), gettype($operatingFlightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($operatingFlightNumber) && mb_strlen((string) $operatingFlightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $operatingFlightNumber)), __LINE__);
        }
        $this->OperatingFlightNumber = $operatingFlightNumber;
        
        return $this;
    }
    /**
     * Get MarketingCarrier value
     * @return string|null
     */
    public function getMarketingCarrier(): ?string
    {
        return $this->MarketingCarrier;
    }
    /**
     * Set MarketingCarrier value
     * @param string $marketingCarrier
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setMarketingCarrier(?string $marketingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($marketingCarrier) && !is_string($marketingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marketingCarrier, true), gettype($marketingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($marketingCarrier) && mb_strlen((string) $marketingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $marketingCarrier)), __LINE__);
        }
        $this->MarketingCarrier = $marketingCarrier;
        
        return $this;
    }
    /**
     * Get MarketingFlightNumber value
     * @return string|null
     */
    public function getMarketingFlightNumber(): ?string
    {
        return $this->MarketingFlightNumber;
    }
    /**
     * Set MarketingFlightNumber value
     * @param string $marketingFlightNumber
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setMarketingFlightNumber(?string $marketingFlightNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($marketingFlightNumber) && !is_string($marketingFlightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marketingFlightNumber, true), gettype($marketingFlightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($marketingFlightNumber) && mb_strlen((string) $marketingFlightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $marketingFlightNumber)), __LINE__);
        }
        $this->MarketingFlightNumber = $marketingFlightNumber;
        
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get ArrivalTime value
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->ArrivalTime;
    }
    /**
     * Set ArrivalTime value
     * @param string $arrivalTime
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->ArrivalTime = $arrivalTime;
        
        return $this;
    }
    /**
     * Get NotValidBefore value
     * @return string|null
     */
    public function getNotValidBefore(): ?string
    {
        return $this->NotValidBefore;
    }
    /**
     * Set NotValidBefore value
     * @param string $notValidBefore
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setNotValidBefore(?string $notValidBefore = null): self
    {
        // validation for constraint: string
        if (!is_null($notValidBefore) && !is_string($notValidBefore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notValidBefore, true), gettype($notValidBefore)), __LINE__);
        }
        $this->NotValidBefore = $notValidBefore;
        
        return $this;
    }
    /**
     * Get NotValidAfter value
     * @return string|null
     */
    public function getNotValidAfter(): ?string
    {
        return $this->NotValidAfter;
    }
    /**
     * Set NotValidAfter value
     * @param string $notValidAfter
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setNotValidAfter(?string $notValidAfter = null): self
    {
        // validation for constraint: string
        if (!is_null($notValidAfter) && !is_string($notValidAfter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notValidAfter, true), gettype($notValidAfter)), __LINE__);
        }
        $this->NotValidAfter = $notValidAfter;
        
        return $this;
    }
    /**
     * Get SegmentGroup value
     * @return int|null
     */
    public function getSegmentGroup(): ?int
    {
        return $this->SegmentGroup;
    }
    /**
     * Set SegmentGroup value
     * @param int $segmentGroup
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setSegmentGroup(?int $segmentGroup = null): self
    {
        // validation for constraint: int
        if (!is_null($segmentGroup) && !(is_int($segmentGroup) || ctype_digit($segmentGroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segmentGroup, true), gettype($segmentGroup)), __LINE__);
        }
        $this->SegmentGroup = $segmentGroup;
        
        return $this;
    }
    /**
     * Get MarriageGroup value
     * @return int|null
     */
    public function getMarriageGroup(): ?int
    {
        return $this->MarriageGroup;
    }
    /**
     * Set MarriageGroup value
     * @param int $marriageGroup
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setMarriageGroup(?int $marriageGroup = null): self
    {
        // validation for constraint: int
        if (!is_null($marriageGroup) && !(is_int($marriageGroup) || ctype_digit($marriageGroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($marriageGroup, true), gettype($marriageGroup)), __LINE__);
        }
        $this->MarriageGroup = $marriageGroup;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Util\StructType\Coupon
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
