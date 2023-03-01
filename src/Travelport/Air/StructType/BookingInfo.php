<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Links segments and fares together
 * @subpackage Structs
 */
class BookingInfo extends AbstractStructBase
{
    /**
     * The BookingCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $BookingCode;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $FareInfoRef;
    /**
     * The BookingCount
     * Meta information extracted from the WSDL
     * - documentation: Seat availability of the BookingCode
     * - use: optional
     * @var string|null
     */
    public ?string $BookingCount = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $CabinClass = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SegmentRef = null;
    /**
     * The CouponRef
     * Meta information extracted from the WSDL
     * - documentation: The coupon to which that booking is relative (if applicable) | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $CouponRef = null;
    /**
     * The AirItinerarySolutionRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to an Air Itinerary Solution | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AirItinerarySolutionRef = null;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - documentation: HostToken Reference for this segment and fare combination. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $HostTokenRef = null;
    /**
     * The TaxInfoRef
     * Meta information extracted from the WSDL
     * - documentation: TaxInfo Reference for booking info and tax info combination. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TaxInfoRef = null;
    /**
     * Constructor method for BookingInfo
     * @uses BookingInfo::setBookingCode()
     * @uses BookingInfo::setFareInfoRef()
     * @uses BookingInfo::setBookingCount()
     * @uses BookingInfo::setCabinClass()
     * @uses BookingInfo::setSegmentRef()
     * @uses BookingInfo::setCouponRef()
     * @uses BookingInfo::setAirItinerarySolutionRef()
     * @uses BookingInfo::setHostTokenRef()
     * @uses BookingInfo::setTaxInfoRef()
     * @param string $bookingCode
     * @param string $fareInfoRef
     * @param string $bookingCount
     * @param string $cabinClass
     * @param string $segmentRef
     * @param string $couponRef
     * @param string $airItinerarySolutionRef
     * @param string $hostTokenRef
     * @param string $taxInfoRef
     */
    public function __construct(string $bookingCode, string $fareInfoRef, ?string $bookingCount = null, ?string $cabinClass = null, ?string $segmentRef = null, ?string $couponRef = null, ?string $airItinerarySolutionRef = null, ?string $hostTokenRef = null, ?string $taxInfoRef = null)
    {
        $this
            ->setBookingCode($bookingCode)
            ->setFareInfoRef($fareInfoRef)
            ->setBookingCount($bookingCount)
            ->setCabinClass($cabinClass)
            ->setSegmentRef($segmentRef)
            ->setCouponRef($couponRef)
            ->setAirItinerarySolutionRef($airItinerarySolutionRef)
            ->setHostTokenRef($hostTokenRef)
            ->setTaxInfoRef($taxInfoRef);
    }
    /**
     * Get BookingCode value
     * @return string
     */
    public function getBookingCode(): string
    {
        return $this->BookingCode;
    }
    /**
     * Set BookingCode value
     * @param string $bookingCode
     * @return \Travelport\Air\StructType\BookingInfo
     */
    public function setBookingCode(string $bookingCode): self
    {
        $this->BookingCode = $bookingCode;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return string
     */
    public function getFareInfoRef(): string
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param string $fareInfoRef
     * @return \Travelport\Air\StructType\BookingInfo
     */
    public function setFareInfoRef(string $fareInfoRef): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
    /**
     * Get BookingCount value
     * @return string|null
     */
    public function getBookingCount(): ?string
    {
        return $this->BookingCount;
    }
    /**
     * Set BookingCount value
     * @param string $bookingCount
     * @return \Travelport\Air\StructType\BookingInfo
     */
    public function setBookingCount(?string $bookingCount = null): self
    {
        $this->BookingCount = $bookingCount;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return string|null
     */
    public function getCabinClass(): ?string
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param string $cabinClass
     * @return \Travelport\Air\StructType\BookingInfo
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\Air\StructType\BookingInfo
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get CouponRef value
     * @return string|null
     */
    public function getCouponRef(): ?string
    {
        return $this->CouponRef;
    }
    /**
     * Set CouponRef value
     * @param string $couponRef
     * @return \Travelport\Air\StructType\BookingInfo
     */
    public function setCouponRef(?string $couponRef = null): self
    {
        $this->CouponRef = $couponRef;
        
        return $this;
    }
    /**
     * Get AirItinerarySolutionRef value
     * @return string|null
     */
    public function getAirItinerarySolutionRef(): ?string
    {
        return $this->AirItinerarySolutionRef;
    }
    /**
     * Set AirItinerarySolutionRef value
     * @param string $airItinerarySolutionRef
     * @return \Travelport\Air\StructType\BookingInfo
     */
    public function setAirItinerarySolutionRef(?string $airItinerarySolutionRef = null): self
    {
        $this->AirItinerarySolutionRef = $airItinerarySolutionRef;
        
        return $this;
    }
    /**
     * Get HostTokenRef value
     * @return string|null
     */
    public function getHostTokenRef(): ?string
    {
        return $this->HostTokenRef;
    }
    /**
     * Set HostTokenRef value
     * @param string $hostTokenRef
     * @return \Travelport\Air\StructType\BookingInfo
     */
    public function setHostTokenRef(?string $hostTokenRef = null): self
    {
        $this->HostTokenRef = $hostTokenRef;
        
        return $this;
    }
    /**
     * Get TaxInfoRef value
     * @return string|null
     */
    public function getTaxInfoRef(): ?string
    {
        return $this->TaxInfoRef;
    }
    /**
     * Set TaxInfoRef value
     * @param string $taxInfoRef
     * @return \Travelport\Air\StructType\BookingInfo
     */
    public function setTaxInfoRef(?string $taxInfoRef = null): self
    {
        $this->TaxInfoRef = $taxInfoRef;
        
        return $this;
    }
}
