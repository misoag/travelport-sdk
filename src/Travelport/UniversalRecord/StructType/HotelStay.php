<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $CheckinDate = null;
    /**
     * The CheckoutDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * @var string|null
     */
    protected ?string $CheckoutDate = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
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
     * @return \Travelport\UniversalRecord\StructType\HotelStay
     */
    public function setCheckinDate(?string $checkinDate = null): self
    {
        // validation for constraint: string
        if (!is_null($checkinDate) && !is_string($checkinDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkinDate, true), gettype($checkinDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($checkinDate) && !preg_match('/[^:Z].*/', $checkinDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($checkinDate, true)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\HotelStay
     */
    public function setCheckoutDate(?string $checkoutDate = null): self
    {
        // validation for constraint: string
        if (!is_null($checkoutDate) && !is_string($checkoutDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkoutDate, true), gettype($checkoutDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($checkoutDate) && !preg_match('/[^:Z].*/', $checkoutDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($checkoutDate, true)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\HotelStay
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
}
