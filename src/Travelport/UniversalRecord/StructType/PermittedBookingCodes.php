<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedBookingCodes StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the container to specify all permitted booking codes
 * @subpackage Structs
 */
class PermittedBookingCodes extends AbstractStructBase
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
     * Constructor method for PermittedBookingCodes
     * @uses PermittedBookingCodes::setBookingCode()
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
     * @return \Travelport\UniversalRecord\StructType\PermittedBookingCodes
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
     * @return \Travelport\UniversalRecord\StructType\PermittedBookingCodes
     */
    public function addToBookingCode(\Travelport\UniversalRecord\StructType\BookingCode $item): self
    {
        $this->BookingCode[] = $item;
        
        return $this;
    }
}
