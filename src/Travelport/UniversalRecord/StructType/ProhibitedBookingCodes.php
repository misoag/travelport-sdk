<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProhibitedBookingCodes StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the container to specify all prohibited booking codes
 * @subpackage Structs
 */
class ProhibitedBookingCodes extends AbstractStructBase
{
    /**
     * The BookingCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: BookingCode
     * @var \Travelport\UniversalRecord\StructType\BookingCode[]
     */
    public ?array $BookingCode = null;
    /**
     * Constructor method for ProhibitedBookingCodes
     * @uses ProhibitedBookingCodes::setBookingCode()
     * @param \Travelport\UniversalRecord\StructType\BookingCode[] $bookingCode
     */
    public function __construct(?array $bookingCode = null)
    {
        $this
            ->setBookingCode($bookingCode);
    }
    /**
     * Get BookingCode value
     * @return \Travelport\UniversalRecord\StructType\BookingCode[]
     */
    public function getBookingCode(): ?array
    {
        return $this->BookingCode;
    }
    /**
     * Set BookingCode value
     * @param \Travelport\UniversalRecord\StructType\BookingCode[] $bookingCode
     * @return \Travelport\UniversalRecord\StructType\ProhibitedBookingCodes
     */
    public function setBookingCode(?array $bookingCode = null): self
    {
        $this->BookingCode = $bookingCode;
        
        return $this;
    }
    /**
     * Add item to BookingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingCode $item
     * @return \Travelport\UniversalRecord\StructType\ProhibitedBookingCodes
     */
    public function addToBookingCode(\Travelport\UniversalRecord\StructType\BookingCode $item): self
    {
        $this->BookingCode[] = $item;
        
        return $this;
    }
}
