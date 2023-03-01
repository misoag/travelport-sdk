<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingTravelerRef StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference Element for Booking Traveler. | Reference Element for Booking Traveler and Loyalty cards
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
     * @var \Travelport\Air\StructType\LoyaltyCardRef[]
     */
    public ?array $LoyaltyCardRef = null;
    /**
     * The DriversLicenseRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DriversLicenseRef
     * @var \Travelport\Air\StructType\DriversLicenseRef|null
     */
    public ?\Travelport\Air\StructType\DriversLicenseRef $DriversLicenseRef = null;
    /**
     * The DiscountCardRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: DiscountCardRef
     * @var \Travelport\Air\StructType\DiscountCardRef[]
     */
    public ?array $DiscountCardRef = null;
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: PaymentRef
     * @var \Travelport\Air\StructType\PaymentRef[]
     */
    public ?array $PaymentRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional | required
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
     * @param \Travelport\Air\StructType\LoyaltyCardRef[] $loyaltyCardRef
     * @param \Travelport\Air\StructType\DriversLicenseRef $driversLicenseRef
     * @param \Travelport\Air\StructType\DiscountCardRef[] $discountCardRef
     * @param \Travelport\Air\StructType\PaymentRef[] $paymentRef
     * @param string $key
     */
    public function __construct(?array $loyaltyCardRef = null, ?\Travelport\Air\StructType\DriversLicenseRef $driversLicenseRef = null, ?array $discountCardRef = null, ?array $paymentRef = null, ?string $key = null)
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
     * @return \Travelport\Air\StructType\LoyaltyCardRef[]
     */
    public function getLoyaltyCardRef(): ?array
    {
        return $this->LoyaltyCardRef;
    }
    /**
     * Set LoyaltyCardRef value
     * @param \Travelport\Air\StructType\LoyaltyCardRef[] $loyaltyCardRef
     * @return \Travelport\Air\StructType\BookingTravelerRef
     */
    public function setLoyaltyCardRef(?array $loyaltyCardRef = null): self
    {
        $this->LoyaltyCardRef = $loyaltyCardRef;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCardRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\LoyaltyCardRef $item
     * @return \Travelport\Air\StructType\BookingTravelerRef
     */
    public function addToLoyaltyCardRef(\Travelport\Air\StructType\LoyaltyCardRef $item): self
    {
        $this->LoyaltyCardRef[] = $item;
        
        return $this;
    }
    /**
     * Get DriversLicenseRef value
     * @return \Travelport\Air\StructType\DriversLicenseRef|null
     */
    public function getDriversLicenseRef(): ?\Travelport\Air\StructType\DriversLicenseRef
    {
        return $this->DriversLicenseRef;
    }
    /**
     * Set DriversLicenseRef value
     * @param \Travelport\Air\StructType\DriversLicenseRef $driversLicenseRef
     * @return \Travelport\Air\StructType\BookingTravelerRef
     */
    public function setDriversLicenseRef(?\Travelport\Air\StructType\DriversLicenseRef $driversLicenseRef = null): self
    {
        $this->DriversLicenseRef = $driversLicenseRef;
        
        return $this;
    }
    /**
     * Get DiscountCardRef value
     * @return \Travelport\Air\StructType\DiscountCardRef[]
     */
    public function getDiscountCardRef(): ?array
    {
        return $this->DiscountCardRef;
    }
    /**
     * Set DiscountCardRef value
     * @param \Travelport\Air\StructType\DiscountCardRef[] $discountCardRef
     * @return \Travelport\Air\StructType\BookingTravelerRef
     */
    public function setDiscountCardRef(?array $discountCardRef = null): self
    {
        $this->DiscountCardRef = $discountCardRef;
        
        return $this;
    }
    /**
     * Add item to DiscountCardRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\DiscountCardRef $item
     * @return \Travelport\Air\StructType\BookingTravelerRef
     */
    public function addToDiscountCardRef(\Travelport\Air\StructType\DiscountCardRef $item): self
    {
        $this->DiscountCardRef[] = $item;
        
        return $this;
    }
    /**
     * Get PaymentRef value
     * @return \Travelport\Air\StructType\PaymentRef[]
     */
    public function getPaymentRef(): ?array
    {
        return $this->PaymentRef;
    }
    /**
     * Set PaymentRef value
     * @param \Travelport\Air\StructType\PaymentRef[] $paymentRef
     * @return \Travelport\Air\StructType\BookingTravelerRef
     */
    public function setPaymentRef(?array $paymentRef = null): self
    {
        $this->PaymentRef = $paymentRef;
        
        return $this;
    }
    /**
     * Add item to PaymentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PaymentRef $item
     * @return \Travelport\Air\StructType\BookingTravelerRef
     */
    public function addToPaymentRef(\Travelport\Air\StructType\PaymentRef $item): self
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
     * @return \Travelport\Air\StructType\BookingTravelerRef
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
