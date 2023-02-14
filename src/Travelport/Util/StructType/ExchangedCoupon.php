<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $TicketNumber;
    /**
     * The CouponNumber
     * Meta information extracted from the WSDL
     * - documentation: Coupon numbers that were exchanged specific to this ticket
     * @var string|null
     */
    protected ?string $CouponNumber = null;
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
     * @return \Travelport\Util\StructType\ExchangedCoupon
     */
    public function setTicketNumber(string $ticketNumber): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        // validation for constraint: length(13)
        if (!is_null($ticketNumber) && mb_strlen((string) $ticketNumber) !== 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 13', mb_strlen((string) $ticketNumber)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ExchangedCoupon
     */
    public function setCouponNumber(?string $couponNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($couponNumber) && !is_string($couponNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($couponNumber, true), gettype($couponNumber)), __LINE__);
        }
        $this->CouponNumber = $couponNumber;
        
        return $this;
    }
}
