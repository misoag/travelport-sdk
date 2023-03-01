<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Origin;
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
    public string $Destination;
    /**
     * The StopoverCode
     * Meta information extracted from the WSDL
     * - documentation: Stopover code - indicator that stopover is allowed at Origin Airport or City.
     * - use: required
     * @var bool
     */
    public bool $StopoverCode;
    /**
     * The BookingClass
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - use: required
     * @var string
     */
    public string $BookingClass;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code for this fare
     * - use: required
     * @var string
     */
    public string $FareBasis;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - use: required
     * @var string
     */
    public string $Status;
    /**
     * The TicketDesignator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketDesignator
     * @var \Travelport\Air\StructType\TicketDesignator[]
     */
    public ?array $TicketDesignator = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The CouponNumber
     * Meta information extracted from the WSDL
     * - documentation: The sequential number of this coupon.
     * - use: optional
     * @var int|null
     */
    public ?int $CouponNumber = null;
    /**
     * The OperatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The true carrier. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $OperatingCarrier = null;
    /**
     * The OperatingFlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The true carrier's flight number. | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $OperatingFlightNumber = null;
    /**
     * The MarketingCarrier
     * Meta information extracted from the WSDL
     * - documentation: If codeshare applies to this, this is the marketing carrier (as opposed to the operating carrier). | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $MarketingCarrier = null;
    /**
     * The MarketingFlightNumber
     * Meta information extracted from the WSDL
     * - documentation: If codeshare applies to this, this is the marketing flight number (as opposed to the operating flight number). | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $MarketingFlightNumber = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity departs. This does not include time zone information since it can be derived from the origin location. In case of open segment this will not be returned.
     * @var string|null
     */
    public ?string $DepartureTime = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the origin location.
     * - use: optional
     * @var string|null
     */
    public ?string $ArrivalTime = null;
    /**
     * The NotValidBefore
     * Meta information extracted from the WSDL
     * - documentation: Fare not valid before this date.
     * - use: optional
     * @var string|null
     */
    public ?string $NotValidBefore = null;
    /**
     * The NotValidAfter
     * Meta information extracted from the WSDL
     * - documentation: Fare not valid after this date.
     * - use: optional
     * @var string|null
     */
    public ?string $NotValidAfter = null;
    /**
     * The SegmentGroup
     * Meta information extracted from the WSDL
     * - documentation: Indicates the grouping in which this segment resides based on Origin/Destination pairs in itinerary
     * - use: optional
     * @var int|null
     */
    public ?int $SegmentGroup = null;
    /**
     * The MarriageGroup
     * Meta information extracted from the WSDL
     * - documentation: Airline Marrraige group indicator
     * - use: optional
     * @var int|null
     */
    public ?int $MarriageGroup = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
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
     * @param \Travelport\Air\StructType\TicketDesignator[] $ticketDesignator
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setOrigin(string $origin): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setDestination(string $destination): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setStopoverCode(bool $stopoverCode): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setBookingClass(string $bookingClass): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setFareBasis(string $fareBasis): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setStatus(string $status): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get TicketDesignator value
     * @return \Travelport\Air\StructType\TicketDesignator[]
     */
    public function getTicketDesignator(): ?array
    {
        return $this->TicketDesignator;
    }
    /**
     * Set TicketDesignator value
     * @param \Travelport\Air\StructType\TicketDesignator[] $ticketDesignator
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setTicketDesignator(?array $ticketDesignator = null): self
    {
        $this->TicketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Add item to TicketDesignator value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TicketDesignator $item
     * @return \Travelport\Air\StructType\Coupon
     */
    public function addToTicketDesignator(\Travelport\Air\StructType\TicketDesignator $item): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setKey(?string $key = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setCouponNumber(?int $couponNumber = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setOperatingCarrier(?string $operatingCarrier = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setOperatingFlightNumber(?string $operatingFlightNumber = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setMarketingCarrier(?string $marketingCarrier = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setMarketingFlightNumber(?string $marketingFlightNumber = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setNotValidBefore(?string $notValidBefore = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setNotValidAfter(?string $notValidAfter = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setSegmentGroup(?int $segmentGroup = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setMarriageGroup(?int $marriageGroup = null): self
    {
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
     * @param string $elStat
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setElStat(?string $elStat = null): self
    {
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
     * @return \Travelport\Air\StructType\Coupon
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
