<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableDiscount StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer Loyalty Program Detail.
 * @subpackage Structs
 */
class AvailableDiscount extends AbstractStructBase
{
    /**
     * The LoyaltyProgram
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyProgram
     * @var \Travelport\Air\StructType\LoyaltyProgram[]
     */
    public ?array $LoyaltyProgram = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: A percentage that can include up to two decimal places
     * - base: xs:string
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * - use: optional
     * @var string|null
     */
    public ?string $Percent = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * The DiscountQualifier
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $DiscountQualifier = null;
    /**
     * Constructor method for AvailableDiscount
     * @uses AvailableDiscount::setLoyaltyProgram()
     * @uses AvailableDiscount::setAmount()
     * @uses AvailableDiscount::setPercent()
     * @uses AvailableDiscount::setDescription()
     * @uses AvailableDiscount::setDiscountQualifier()
     * @param \Travelport\Air\StructType\LoyaltyProgram[] $loyaltyProgram
     * @param string $amount
     * @param string $percent
     * @param string $description
     * @param string $discountQualifier
     */
    public function __construct(?array $loyaltyProgram = null, ?string $amount = null, ?string $percent = null, ?string $description = null, ?string $discountQualifier = null)
    {
        $this
            ->setLoyaltyProgram($loyaltyProgram)
            ->setAmount($amount)
            ->setPercent($percent)
            ->setDescription($description)
            ->setDiscountQualifier($discountQualifier);
    }
    /**
     * Get LoyaltyProgram value
     * @return \Travelport\Air\StructType\LoyaltyProgram[]
     */
    public function getLoyaltyProgram(): ?array
    {
        return $this->LoyaltyProgram;
    }
    /**
     * Set LoyaltyProgram value
     * @param \Travelport\Air\StructType\LoyaltyProgram[] $loyaltyProgram
     * @return \Travelport\Air\StructType\AvailableDiscount
     */
    public function setLoyaltyProgram(?array $loyaltyProgram = null): self
    {
        $this->LoyaltyProgram = $loyaltyProgram;
        
        return $this;
    }
    /**
     * Add item to LoyaltyProgram value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\LoyaltyProgram $item
     * @return \Travelport\Air\StructType\AvailableDiscount
     */
    public function addToLoyaltyProgram(\Travelport\Air\StructType\LoyaltyProgram $item): self
    {
        $this->LoyaltyProgram[] = $item;
        
        return $this;
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
     * @return \Travelport\Air\StructType\AvailableDiscount
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Percent value
     * @return string|null
     */
    public function getPercent(): ?string
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Travelport\Air\StructType\AvailableDiscount
     */
    public function setPercent(?string $percent = null): self
    {
        $this->Percent = $percent;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\Air\StructType\AvailableDiscount
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get DiscountQualifier value
     * @return string|null
     */
    public function getDiscountQualifier(): ?string
    {
        return $this->DiscountQualifier;
    }
    /**
     * Set DiscountQualifier value
     * @param string $discountQualifier
     * @return \Travelport\Air\StructType\AvailableDiscount
     */
    public function setDiscountQualifier(?string $discountQualifier = null): self
    {
        $this->DiscountQualifier = $discountQualifier;
        
        return $this;
    }
}
