<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingCodeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Details Cabin class info and class of service information with availability counts. Only provided on search results and grouped by Cabin class
 * @subpackage Structs
 */
class BookingCodeInfo extends AbstractStructBase
{
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: Specifies Cabin class for a group of class of services. Cabin class is not identified if it is not present.
     * - use: optional
     * @var string|null
     */
    public ?string $CabinClass = null;
    /**
     * The BookingCounts
     * Meta information extracted from the WSDL
     * - documentation: Lists class of service and their counts for specific cabin class
     * - use: optional
     * @var string|null
     */
    public ?string $BookingCounts = null;
    /**
     * Constructor method for BookingCodeInfo
     * @uses BookingCodeInfo::setCabinClass()
     * @uses BookingCodeInfo::setBookingCounts()
     * @param string $cabinClass
     * @param string $bookingCounts
     */
    public function __construct(?string $cabinClass = null, ?string $bookingCounts = null)
    {
        $this
            ->setCabinClass($cabinClass)
            ->setBookingCounts($bookingCounts);
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
     * @return \Travelport\Air\StructType\BookingCodeInfo
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
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
     * @return \Travelport\Air\StructType\BookingCodeInfo
     */
    public function setBookingCounts(?string $bookingCounts = null): self
    {
        $this->BookingCounts = $bookingCounts;
        
        return $this;
    }
}
