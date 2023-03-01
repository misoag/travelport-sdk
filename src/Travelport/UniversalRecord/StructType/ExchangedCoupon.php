<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangedCoupon StructType
 * Meta information extracted from the WSDL
 * - documentation: The coupon numbers that were used in the exchange process to create the MCO.
 * @subpackage Structs
 */
class ExchangedCoupon extends AbstractStructBase
{
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: The ticket number for which the exchange coupons are present. | Reference Ticket Number
     * - base: xs:string
     * - length: 13
     * - use: required
     * @var string
     */
    public string $TicketNumber;
    /**
     * The CouponNumber
     * Meta information extracted from the WSDL
     * - documentation: Coupon numbers that were exchanged specific to this ticket
     * @var string|null
     */
    public ?string $CouponNumber = null;
    /**
     * Constructor method for ExchangedCoupon
     * @uses ExchangedCoupon::setTicketNumber()
     * @uses ExchangedCoupon::setCouponNumber()
     * @param string $ticketNumber
     * @param string $couponNumber
     */
    public function __construct(string $ticketNumber, ?string $couponNumber = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setCouponNumber($couponNumber);
    }
    /**
     * Get TicketNumber value
     * @return string
     */
    public function getTicketNumber(): string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\UniversalRecord\StructType\ExchangedCoupon
     */
    public function setTicketNumber(string $ticketNumber): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get CouponNumber value
     * @return string|null
     */
    public function getCouponNumber(): ?string
    {
        return $this->CouponNumber;
    }
    /**
     * Set CouponNumber value
     * @param string $couponNumber
     * @return \Travelport\UniversalRecord\StructType\ExchangedCoupon
     */
    public function setCouponNumber(?string $couponNumber = null): self
    {
        $this->CouponNumber = $couponNumber;
        
        return $this;
    }
}
