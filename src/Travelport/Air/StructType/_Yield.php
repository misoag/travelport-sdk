<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Yield StructType
 * Meta information extracted from the WSDL
 * - documentation: An identifier which identifies yield made on original pricing. It can be a flat amount of original price. The value of Amount can be negative. Negative value implies a discount.
 * @subpackage Structs
 */
class _Yield extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Yield per passenger level in Default Currency for this entity. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a booking traveler for which Yield is applied. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * Constructor method for Yield
     * @uses _Yield::setAmount()
     * @uses _Yield::setBookingTravelerRef()
     * @param string $amount
     * @param string $bookingTravelerRef
     */
    public function __construct(?string $amount = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setAmount($amount)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Air\StructType\_Yield
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
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
     * @return \Travelport\Air\StructType\_Yield
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
