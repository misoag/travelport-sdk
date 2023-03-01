<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeApplicableSegment StructType
 * @subpackage Structs
 */
class TypeApplicableSegment extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The AirItineraryDetailsRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * @var string|null
     */
    public ?string $AirItineraryDetailsRef = null;
    /**
     * The BookingCounts
     * Meta information extracted from the WSDL
     * - documentation: Classes of service and their counts.
     * - use: optional
     * @var string|null
     */
    public ?string $BookingCounts = null;
    /**
     * Constructor method for typeApplicableSegment
     * @uses TypeApplicableSegment::setKey()
     * @uses TypeApplicableSegment::setAirItineraryDetailsRef()
     * @uses TypeApplicableSegment::setBookingCounts()
     * @param string $key
     * @param string $airItineraryDetailsRef
     * @param string $bookingCounts
     */
    public function __construct(string $key, ?string $airItineraryDetailsRef = null, ?string $bookingCounts = null)
    {
        $this
            ->setKey($key)
            ->setAirItineraryDetailsRef($airItineraryDetailsRef)
            ->setBookingCounts($bookingCounts);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\TypeApplicableSegment
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get AirItineraryDetailsRef value
     * @return string|null
     */
    public function getAirItineraryDetailsRef(): ?string
    {
        return $this->AirItineraryDetailsRef;
    }
    /**
     * Set AirItineraryDetailsRef value
     * @param string $airItineraryDetailsRef
     * @return \Travelport\Air\StructType\TypeApplicableSegment
     */
    public function setAirItineraryDetailsRef(?string $airItineraryDetailsRef = null): self
    {
        $this->AirItineraryDetailsRef = $airItineraryDetailsRef;
        
        return $this;
    }
    /**
     * Get BookingCounts value
     * @return string|null
     */
    public function getBookingCounts(): ?string
    {
        return $this->BookingCounts;
    }
    /**
     * Set BookingCounts value
     * @param string $bookingCounts
     * @return \Travelport\Air\StructType\TypeApplicableSegment
     */
    public function setBookingCounts(?string $bookingCounts = null): self
    {
        $this->BookingCounts = $bookingCounts;
        
        return $this;
    }
}
