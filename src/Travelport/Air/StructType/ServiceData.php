<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceData StructType
 * @subpackage Structs
 */
class ServiceData extends AbstractStructBase
{
    /**
     * The SeatAttributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SeatAttributes
     * @var \Travelport\Air\StructType\SeatAttributes|null
     */
    public ?\Travelport\Air\StructType\SeatAttributes $SeatAttributes = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CabinClass
     * @var \Travelport\Air\StructType\CabinClass|null
     */
    public ?\Travelport\Air\StructType\CabinClass $CabinClass = null;
    /**
     * The SSRRef
     * Meta information extracted from the WSDL
     * - documentation: References to the related SSRs. At present, only reference to ASVC SSR is supported. Supported providers are 1G/1V/1P
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeKeyBasedReference[]
     */
    public ?array $SSRRef = null;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - documentation: Data that specifies the details of the merchandising offering (e.g. seat number for seat service)
     * - use: optional
     * @var string|null
     */
    public ?string $Data = null;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a segment if the merchandising offering only pertains to that segment. If no segment reference is present this means this offering is for the whole itinerary. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AirSegmentRef = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a passenger if the merchandising offering only pertains to that passenger. If no passenger reference is present this means this offering is for all passengers. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * The StopOver
     * Meta information extracted from the WSDL
     * - documentation: Indicates that there is a significant delay between flights (usually 12 hours or more)
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $StopOver = null;
    /**
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code. | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $TravelerType = null;
    /**
     * The EMDSummaryRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the corresponding EMD issued. Supported providers are 1G/1V/1P | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $EMDSummaryRef = null;
    /**
     * The EMDCouponRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the corresponding EMD coupon issued. Supported providers are 1G/1V/1P | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $EMDCouponRef = null;
    /**
     * Constructor method for ServiceData
     * @uses ServiceData::setSeatAttributes()
     * @uses ServiceData::setCabinClass()
     * @uses ServiceData::setSSRRef()
     * @uses ServiceData::setData()
     * @uses ServiceData::setAirSegmentRef()
     * @uses ServiceData::setBookingTravelerRef()
     * @uses ServiceData::setStopOver()
     * @uses ServiceData::setTravelerType()
     * @uses ServiceData::setEMDSummaryRef()
     * @uses ServiceData::setEMDCouponRef()
     * @param \Travelport\Air\StructType\SeatAttributes $seatAttributes
     * @param \Travelport\Air\StructType\CabinClass $cabinClass
     * @param \Travelport\Air\StructType\TypeKeyBasedReference[] $sSRRef
     * @param string $data
     * @param string $airSegmentRef
     * @param string $bookingTravelerRef
     * @param bool $stopOver
     * @param string $travelerType
     * @param string $eMDSummaryRef
     * @param string $eMDCouponRef
     */
    public function __construct(?\Travelport\Air\StructType\SeatAttributes $seatAttributes = null, ?\Travelport\Air\StructType\CabinClass $cabinClass = null, ?array $sSRRef = null, ?string $data = null, ?string $airSegmentRef = null, ?string $bookingTravelerRef = null, ?bool $stopOver = false, ?string $travelerType = null, ?string $eMDSummaryRef = null, ?string $eMDCouponRef = null)
    {
        $this
            ->setSeatAttributes($seatAttributes)
            ->setCabinClass($cabinClass)
            ->setSSRRef($sSRRef)
            ->setData($data)
            ->setAirSegmentRef($airSegmentRef)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setStopOver($stopOver)
            ->setTravelerType($travelerType)
            ->setEMDSummaryRef($eMDSummaryRef)
            ->setEMDCouponRef($eMDCouponRef);
    }
    /**
     * Get SeatAttributes value
     * @return \Travelport\Air\StructType\SeatAttributes|null
     */
    public function getSeatAttributes(): ?\Travelport\Air\StructType\SeatAttributes
    {
        return $this->SeatAttributes;
    }
    /**
     * Set SeatAttributes value
     * @param \Travelport\Air\StructType\SeatAttributes $seatAttributes
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function setSeatAttributes(?\Travelport\Air\StructType\SeatAttributes $seatAttributes = null): self
    {
        $this->SeatAttributes = $seatAttributes;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return \Travelport\Air\StructType\CabinClass|null
     */
    public function getCabinClass(): ?\Travelport\Air\StructType\CabinClass
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\Air\StructType\CabinClass $cabinClass
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function setCabinClass(?\Travelport\Air\StructType\CabinClass $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get SSRRef value
     * @return \Travelport\Air\StructType\TypeKeyBasedReference[]
     */
    public function getSSRRef(): ?array
    {
        return $this->SSRRef;
    }
    /**
     * Set SSRRef value
     * @param \Travelport\Air\StructType\TypeKeyBasedReference[] $sSRRef
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function setSSRRef(?array $sSRRef = null): self
    {
        $this->SSRRef = $sSRRef;
        
        return $this;
    }
    /**
     * Add item to SSRRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeKeyBasedReference $item
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function addToSSRRef(\Travelport\Air\StructType\TypeKeyBasedReference $item): self
    {
        $this->SSRRef[] = $item;
        
        return $this;
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function setData(?string $data = null): self
    {
        $this->Data = $data;
        
        return $this;
    }
    /**
     * Get AirSegmentRef value
     * @return string|null
     */
    public function getAirSegmentRef(): ?string
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param string $airSegmentRef
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function setAirSegmentRef(?string $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
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
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get StopOver value
     * @return bool|null
     */
    public function getStopOver(): ?bool
    {
        return $this->StopOver;
    }
    /**
     * Set StopOver value
     * @param bool $stopOver
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function setStopOver(?bool $stopOver = false): self
    {
        $this->StopOver = $stopOver;
        
        return $this;
    }
    /**
     * Get TravelerType value
     * @return string|null
     */
    public function getTravelerType(): ?string
    {
        return $this->TravelerType;
    }
    /**
     * Set TravelerType value
     * @param string $travelerType
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function setTravelerType(?string $travelerType = null): self
    {
        $this->TravelerType = $travelerType;
        
        return $this;
    }
    /**
     * Get EMDSummaryRef value
     * @return string|null
     */
    public function getEMDSummaryRef(): ?string
    {
        return $this->EMDSummaryRef;
    }
    /**
     * Set EMDSummaryRef value
     * @param string $eMDSummaryRef
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function setEMDSummaryRef(?string $eMDSummaryRef = null): self
    {
        $this->EMDSummaryRef = $eMDSummaryRef;
        
        return $this;
    }
    /**
     * Get EMDCouponRef value
     * @return string|null
     */
    public function getEMDCouponRef(): ?string
    {
        return $this->EMDCouponRef;
    }
    /**
     * Set EMDCouponRef value
     * @param string $eMDCouponRef
     * @return \Travelport\Air\StructType\ServiceData
     */
    public function setEMDCouponRef(?string $eMDCouponRef = null): self
    {
        $this->EMDCouponRef = $eMDCouponRef;
        
        return $this;
    }
}
