<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Discount StructType
 * Meta information extracted from the WSDL
 * - documentation: Cruise Discount Amount. | Discount information specific to the fare component
 * @subpackage Structs
 */
class Discount extends AbstractStructBase
{
    /**
     * The DiscountCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 1
     * - ref: common:DiscountCard
     * @var \Travelport\UniversalRecord\StructType\DiscountCard[]
     */
    public array $DiscountCard;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount of Discount | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Amount;
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
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Text explaining discount amount | Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * Constructor method for Discount
     * @uses Discount::setDiscountCard()
     * @uses Discount::setAmount()
     * @uses Discount::setKey()
     * @uses Discount::setDescription()
     * @param \Travelport\UniversalRecord\StructType\DiscountCard[] $discountCard
     * @param string $amount
     * @param string $key
     * @param string $description
     */
    public function __construct(array $discountCard, string $amount, ?string $key = null, ?string $description = null)
    {
        $this
            ->setDiscountCard($discountCard)
            ->setAmount($amount)
            ->setKey($key)
            ->setDescription($description);
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\UniversalRecord\StructType\DiscountCard[]
     */
    public function getDiscountCard(): array
    {
        return $this->DiscountCard;
    }
    /**
     * Set DiscountCard value
     * @param \Travelport\UniversalRecord\StructType\DiscountCard[] $discountCard
     * @return \Travelport\UniversalRecord\StructType\Discount
     */
    public function setDiscountCard(array $discountCard): self
    {
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Add item to DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DiscountCard $item
     * @return \Travelport\UniversalRecord\StructType\Discount
     */
    public function addToDiscountCard(\Travelport\UniversalRecord\StructType\DiscountCard $item): self
    {
        $this->DiscountCard[] = $item;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\Discount
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
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
     * @return \Travelport\UniversalRecord\StructType\Discount
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
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
     * @return \Travelport\UniversalRecord\StructType\Discount
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
}
