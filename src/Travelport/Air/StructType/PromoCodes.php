<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromoCodes StructType
 * @subpackage Structs
 */
class PromoCodes extends AbstractStructBase
{
    /**
     * The PromoCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: PromoCode
     * @var \Travelport\Air\StructType\PromoCode[]
     */
    public array $PromoCode;
    /**
     * Constructor method for PromoCodes
     * @uses PromoCodes::setPromoCode()
     * @param \Travelport\Air\StructType\PromoCode[] $promoCode
     */
    public function __construct(array $promoCode)
    {
        $this
            ->setPromoCode($promoCode);
    }
    /**
     * Get PromoCode value
     * @return \Travelport\Air\StructType\PromoCode[]
     */
    public function getPromoCode(): array
    {
        return $this->PromoCode;
    }
    /**
     * Set PromoCode value
     * @param \Travelport\Air\StructType\PromoCode[] $promoCode
     * @return \Travelport\Air\StructType\PromoCodes
     */
    public function setPromoCode(array $promoCode): self
    {
        $this->PromoCode = $promoCode;
        
        return $this;
    }
    /**
     * Add item to PromoCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PromoCode $item
     * @return \Travelport\Air\StructType\PromoCodes
     */
    public function addToPromoCode(\Travelport\Air\StructType\PromoCode $item): self
    {
        $this->PromoCode[] = $item;
        
        return $this;
    }
}
