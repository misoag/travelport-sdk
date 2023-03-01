<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingInfoRef StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference to a AirPricing from a shared list | Provider: 1G,1V,1P-Indicates air pricing infos to be ticketed.
 * @subpackage Structs
 */
class AirPricingInfoRef extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\Air\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * Constructor method for AirPricingInfoRef
     * @uses AirPricingInfoRef::setKey()
     * @uses AirPricingInfoRef::setBookingTravelerRef()
     * @param string $key
     * @param \Travelport\Air\StructType\BookingTravelerRef[] $bookingTravelerRef
     */
    public function __construct(string $key, ?array $bookingTravelerRef = null)
    {
        $this
            ->setKey($key)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\AirPricingInfoRef
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Air\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\Air\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\Air\StructType\AirPricingInfoRef
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BookingTravelerRef $item
     * @return \Travelport\Air\StructType\AirPricingInfoRef
     */
    public function addToBookingTravelerRef(\Travelport\Air\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
}
