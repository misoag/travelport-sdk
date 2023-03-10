<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingDates StructType
 * Meta information extracted from the WSDL
 * - documentation: Check in and Check out Date information
 * @subpackage Structs
 */
class BookingDates extends AbstractStructBase
{
    /**
     * The CheckInDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: optional
     * @var string|null
     */
    public ?string $CheckInDate = null;
    /**
     * The CheckOutDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: optional
     * @var string|null
     */
    public ?string $CheckOutDate = null;
    /**
     * Constructor method for BookingDates
     * @uses BookingDates::setCheckInDate()
     * @uses BookingDates::setCheckOutDate()
     * @param string $checkInDate
     * @param string $checkOutDate
     */
    public function __construct(?string $checkInDate = null, ?string $checkOutDate = null)
    {
        $this
            ->setCheckInDate($checkInDate)
            ->setCheckOutDate($checkOutDate);
    }
    /**
     * Get CheckInDate value
     * @return string|null
     */
    public function getCheckInDate(): ?string
    {
        return $this->CheckInDate;
    }
    /**
     * Set CheckInDate value
     * @param string $checkInDate
     * @return \Travelport\Hotel\StructType\BookingDates
     */
    public function setCheckInDate(?string $checkInDate = null): self
    {
        $this->CheckInDate = $checkInDate;
        
        return $this;
    }
    /**
     * Get CheckOutDate value
     * @return string|null
     */
    public function getCheckOutDate(): ?string
    {
        return $this->CheckOutDate;
    }
    /**
     * Set CheckOutDate value
     * @param string $checkOutDate
     * @return \Travelport\Hotel\StructType\BookingDates
     */
    public function setCheckOutDate(?string $checkOutDate = null): self
    {
        $this->CheckOutDate = $checkOutDate;
        
        return $this;
    }
}
