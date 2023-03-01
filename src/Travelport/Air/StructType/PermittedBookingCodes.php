<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\BookingCode[]
     */
    public ?array $BookingCode = null;
    /**
     * Constructor method for PermittedBookingCodes
     * @uses PermittedBookingCodes::setBookingCode()
     * @param \Travelport\Air\StructType\BookingCode[] $bookingCode
     */
    public function __construct(?array $bookingCode = null)
    {
        $this
            ->setBookingCode($bookingCode);
    }
    /**
     * Get BookingCode value
     * @return \Travelport\Air\StructType\BookingCode[]
     */
    public function getBookingCode(): ?array
    {
        return $this->BookingCode;
    }
    /**
     * Set BookingCode value
     * @param \Travelport\Air\StructType\BookingCode[] $bookingCode
     * @return \Travelport\Air\StructType\PermittedBookingCodes
     */
    public function setBookingCode(?array $bookingCode = null): self
    {
        $this->BookingCode = $bookingCode;
        
        return $this;
    }
    /**
     * Add item to BookingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BookingCode $item
     * @return \Travelport\Air\StructType\PermittedBookingCodes
     */
    public function addToBookingCode(\Travelport\Air\StructType\BookingCode $item): self
    {
        $this->BookingCode[] = $item;
        
        return $this;
    }
}
