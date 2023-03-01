<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerSeatPrice StructType
 * Meta information extracted from the WSDL
 * - documentation: Only used when a passenger has a different price than the default.
 * @subpackage Structs
 */
class PassengerSeatPrice extends AbstractStructBase
{
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $BookingTravelerRef;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * Constructor method for PassengerSeatPrice
     * @uses PassengerSeatPrice::setBookingTravelerRef()
     * @uses PassengerSeatPrice::setAmount()
     * @param string $bookingTravelerRef
     * @param string $amount
     */
    public function __construct(string $bookingTravelerRef, string $amount)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setAmount($amount);
    }
    /**
     * Get BookingTravelerRef value
     * @return string
     */
    public function getBookingTravelerRef(): string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\Air\StructType\PassengerSeatPrice
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Air\StructType\PassengerSeatPrice
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
}
