<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Discount StructType
 * Meta information extracted from the WSDL
 * - documentation: Discount information specific to the fare component
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
     * @var \Travelport\Air\StructType\DiscountCard[]
     */
    public array $DiscountCard;
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
     * Constructor method for Discount
     * @uses Discount::setDiscountCard()
     * @uses Discount::setKey()
     * @param \Travelport\Air\StructType\DiscountCard[] $discountCard
     * @param string $key
     */
    public function __construct(array $discountCard, ?string $key = null)
    {
        $this
            ->setDiscountCard($discountCard)
            ->setKey($key);
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\Air\StructType\DiscountCard[]
     */
    public function getDiscountCard(): array
    {
        return $this->DiscountCard;
    }
    /**
     * Set DiscountCard value
     * @param \Travelport\Air\StructType\DiscountCard[] $discountCard
     * @return \Travelport\Air\StructType\Discount
     */
    public function setDiscountCard(array $discountCard): self
    {
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Add item to DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\DiscountCard $item
     * @return \Travelport\Air\StructType\Discount
     */
    public function addToDiscountCard(\Travelport\Air\StructType\DiscountCard $item): self
    {
        $this->DiscountCard[] = $item;
        
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
     * @return \Travelport\Air\StructType\Discount
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
