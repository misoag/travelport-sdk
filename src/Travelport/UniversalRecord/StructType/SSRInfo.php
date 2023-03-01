<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SSRInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Bundle SSR with BookingTraveler reference in order to add SSR post booking
 * @subpackage Structs
 */
class SSRInfo extends AbstractStructBase
{
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - ref: SSR
     * @var \Travelport\UniversalRecord\StructType\SSR|null
     */
    public ?\Travelport\UniversalRecord\StructType\SSR $SSR = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to Booking Traveler. | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * Constructor method for SSRInfo
     * @uses SSRInfo::setSSR()
     * @uses SSRInfo::setBookingTravelerRef()
     * @param \Travelport\UniversalRecord\StructType\SSR $sSR
     * @param string[] $bookingTravelerRef
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\SSR $sSR = null, ?array $bookingTravelerRef = null)
    {
        $this
            ->setSSR($sSR)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get SSR value
     * @return \Travelport\UniversalRecord\StructType\SSR|null
     */
    public function getSSR(): ?\Travelport\UniversalRecord\StructType\SSR
    {
        return $this->SSR;
    }
    /**
     * Set SSR value
     * @param \Travelport\UniversalRecord\StructType\SSR $sSR
     * @return \Travelport\UniversalRecord\StructType\SSRInfo
     */
    public function setSSR(?\Travelport\UniversalRecord\StructType\SSR $sSR = null): self
    {
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\SSRInfo
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\SSRInfo
     */
    public function addToBookingTravelerRef(string $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
}
