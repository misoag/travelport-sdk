<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseBookingTravelerRef StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference Element for Booking Traveler and Loyalty cards
 * @subpackage Structs
 */
class CruiseBookingTravelerRef extends AbstractStructBase
{
    /**
     * The LoyaltyCardRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyCardRef
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCardRef[]
     */
    public ?array $LoyaltyCardRef = null;
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
     * The WaiverIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates Passenger accepts/rejects waiver or insurance from vendor.
     * - use: optional
     * @var bool|null
     */
    public ?bool $WaiverIndicator = null;
    /**
     * Constructor method for CruiseBookingTravelerRef
     * @uses CruiseBookingTravelerRef::setLoyaltyCardRef()
     * @uses CruiseBookingTravelerRef::setKey()
     * @uses CruiseBookingTravelerRef::setWaiverIndicator()
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCardRef[] $loyaltyCardRef
     * @param string $key
     * @param bool $waiverIndicator
     */
    public function __construct(?array $loyaltyCardRef = null, ?string $key = null, ?bool $waiverIndicator = null)
    {
        $this
            ->setLoyaltyCardRef($loyaltyCardRef)
            ->setKey($key)
            ->setWaiverIndicator($waiverIndicator);
    }
    /**
     * Get LoyaltyCardRef value
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCardRef[]
     */
    public function getLoyaltyCardRef(): ?array
    {
        return $this->LoyaltyCardRef;
    }
    /**
     * Set LoyaltyCardRef value
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCardRef[] $loyaltyCardRef
     * @return \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef
     */
    public function setLoyaltyCardRef(?array $loyaltyCardRef = null): self
    {
        $this->LoyaltyCardRef = $loyaltyCardRef;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCardRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCardRef $item
     * @return \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef
     */
    public function addToLoyaltyCardRef(\Travelport\UniversalRecord\StructType\LoyaltyCardRef $item): self
    {
        $this->LoyaltyCardRef[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get WaiverIndicator value
     * @return bool|null
     */
    public function getWaiverIndicator(): ?bool
    {
        return $this->WaiverIndicator;
    }
    /**
     * Set WaiverIndicator value
     * @param bool $waiverIndicator
     * @return \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef
     */
    public function setWaiverIndicator(?bool $waiverIndicator = null): self
    {
        $this->WaiverIndicator = $waiverIndicator;
        
        return $this;
    }
}
