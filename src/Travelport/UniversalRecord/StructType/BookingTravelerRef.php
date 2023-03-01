<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingTravelerRef StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference Element for Booking Traveler. | Reference Element for Booking Traveler and Loyalty cards | Reference to the associated travelers. | Reference Element for Booking Traveler
 * @subpackage Structs
 */
class BookingTravelerRef extends AbstractStructBase
{
    /**
     * The LoyaltyCardRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: LoyaltyCardRef
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCardRef[]
     */
    public ?array $LoyaltyCardRef = null;
    /**
     * The DriversLicenseRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DriversLicenseRef
     * @var \Travelport\UniversalRecord\StructType\DriversLicenseRef|null
     */
    public ?\Travelport\UniversalRecord\StructType\DriversLicenseRef $DriversLicenseRef = null;
    /**
     * The DiscountCardRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: DiscountCardRef
     * @var \Travelport\UniversalRecord\StructType\DiscountCardRef[]
     */
    public ?array $DiscountCardRef = null;
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: PaymentRef
     * @var \Travelport\UniversalRecord\StructType\PaymentRef[]
     */
    public ?array $PaymentRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required | optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for BookingTravelerRef
     * @uses BookingTravelerRef::setLoyaltyCardRef()
     * @uses BookingTravelerRef::setDriversLicenseRef()
     * @uses BookingTravelerRef::setDiscountCardRef()
     * @uses BookingTravelerRef::setPaymentRef()
     * @uses BookingTravelerRef::setKey()
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCardRef[] $loyaltyCardRef
     * @param \Travelport\UniversalRecord\StructType\DriversLicenseRef $driversLicenseRef
     * @param \Travelport\UniversalRecord\StructType\DiscountCardRef[] $discountCardRef
     * @param \Travelport\UniversalRecord\StructType\PaymentRef[] $paymentRef
     * @param string $key
     */
    public function __construct(?array $loyaltyCardRef = null, ?\Travelport\UniversalRecord\StructType\DriversLicenseRef $driversLicenseRef = null, ?array $discountCardRef = null, ?array $paymentRef = null, ?string $key = null)
    {
        $this
            ->setLoyaltyCardRef($loyaltyCardRef)
            ->setDriversLicenseRef($driversLicenseRef)
            ->setDiscountCardRef($discountCardRef)
            ->setPaymentRef($paymentRef)
            ->setKey($key);
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
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef
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
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef
     */
    public function addToLoyaltyCardRef(\Travelport\UniversalRecord\StructType\LoyaltyCardRef $item): self
    {
        $this->LoyaltyCardRef[] = $item;
        
        return $this;
    }
    /**
     * Get DriversLicenseRef value
     * @return \Travelport\UniversalRecord\StructType\DriversLicenseRef|null
     */
    public function getDriversLicenseRef(): ?\Travelport\UniversalRecord\StructType\DriversLicenseRef
    {
        return $this->DriversLicenseRef;
    }
    /**
     * Set DriversLicenseRef value
     * @param \Travelport\UniversalRecord\StructType\DriversLicenseRef $driversLicenseRef
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef
     */
    public function setDriversLicenseRef(?\Travelport\UniversalRecord\StructType\DriversLicenseRef $driversLicenseRef = null): self
    {
        $this->DriversLicenseRef = $driversLicenseRef;
        
        return $this;
    }
    /**
     * Get DiscountCardRef value
     * @return \Travelport\UniversalRecord\StructType\DiscountCardRef[]
     */
    public function getDiscountCardRef(): ?array
    {
        return $this->DiscountCardRef;
    }
    /**
     * Set DiscountCardRef value
     * @param \Travelport\UniversalRecord\StructType\DiscountCardRef[] $discountCardRef
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef
     */
    public function setDiscountCardRef(?array $discountCardRef = null): self
    {
        $this->DiscountCardRef = $discountCardRef;
        
        return $this;
    }
    /**
     * Add item to DiscountCardRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DiscountCardRef $item
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef
     */
    public function addToDiscountCardRef(\Travelport\UniversalRecord\StructType\DiscountCardRef $item): self
    {
        $this->DiscountCardRef[] = $item;
        
        return $this;
    }
    /**
     * Get PaymentRef value
     * @return \Travelport\UniversalRecord\StructType\PaymentRef[]
     */
    public function getPaymentRef(): ?array
    {
        return $this->PaymentRef;
    }
    /**
     * Set PaymentRef value
     * @param \Travelport\UniversalRecord\StructType\PaymentRef[] $paymentRef
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef
     */
    public function setPaymentRef(?array $paymentRef = null): self
    {
        $this->PaymentRef = $paymentRef;
        
        return $this;
    }
    /**
     * Add item to PaymentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PaymentRef $item
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef
     */
    public function addToPaymentRef(\Travelport\UniversalRecord\StructType\PaymentRef $item): self
    {
        $this->PaymentRef[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
