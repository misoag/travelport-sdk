<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelStay StructType
 * Meta information extracted from the WSDL
 * - documentation: Arrival and Departure dates
 * @subpackage Structs
 */
class HotelStay extends AbstractStructBase
{
    /**
     * The CheckinDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * @var string|null
     */
    public ?string $CheckinDate = null;
    /**
     * The CheckoutDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * @var string|null
     */
    public ?string $CheckoutDate = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for HotelStay
     * @uses HotelStay::setCheckinDate()
     * @uses HotelStay::setCheckoutDate()
     * @uses HotelStay::setKey()
     * @param string $checkinDate
     * @param string $checkoutDate
     * @param string $key
     */
    public function __construct(?string $checkinDate = null, ?string $checkoutDate = null, ?string $key = null)
    {
        $this
            ->setCheckinDate($checkinDate)
            ->setCheckoutDate($checkoutDate)
            ->setKey($key);
    }
    /**
     * Get CheckinDate value
     * @return string|null
     */
    public function getCheckinDate(): ?string
    {
        return $this->CheckinDate;
    }
    /**
     * Set CheckinDate value
     * @param string $checkinDate
     * @return \Travelport\Hotel\StructType\HotelStay
     */
    public function setCheckinDate(?string $checkinDate = null): self
    {
        $this->CheckinDate = $checkinDate;
        
        return $this;
    }
    /**
     * Get CheckoutDate value
     * @return string|null
     */
    public function getCheckoutDate(): ?string
    {
        return $this->CheckoutDate;
    }
    /**
     * Set CheckoutDate value
     * @param string $checkoutDate
     * @return \Travelport\Hotel\StructType\HotelStay
     */
    public function setCheckoutDate(?string $checkoutDate = null): self
    {
        $this->CheckoutDate = $checkoutDate;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Hotel\StructType\HotelStay
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
