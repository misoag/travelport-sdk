<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFareDiscount StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Discounts
 * @subpackage Structs
 */
class AirFareDiscount extends AbstractStructBase
{
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - use: optional
     * @var float|null
     */
    public ?float $Percentage = null;
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
     * The DiscountMethod
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $DiscountMethod = null;
    /**
     * Constructor method for AirFareDiscount
     * @uses AirFareDiscount::setPercentage()
     * @uses AirFareDiscount::setAmount()
     * @uses AirFareDiscount::setDiscountMethod()
     * @param float $percentage
     * @param string $amount
     * @param string $discountMethod
     */
    public function __construct(?float $percentage = null, ?string $amount = null, ?string $discountMethod = null)
    {
        $this
            ->setPercentage($percentage)
            ->setAmount($amount)
            ->setDiscountMethod($discountMethod);
    }
    /**
     * Get Percentage value
     * @return float|null
     */
    public function getPercentage(): ?float
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param float $percentage
     * @return \Travelport\Air\StructType\AirFareDiscount
     */
    public function setPercentage(?float $percentage = null): self
    {
        $this->Percentage = $percentage;
        
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
     * @return \Travelport\Air\StructType\AirFareDiscount
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get DiscountMethod value
     * @return string|null
     */
    public function getDiscountMethod(): ?string
    {
        return $this->DiscountMethod;
    }
    /**
     * Set DiscountMethod value
     * @param string $discountMethod
     * @return \Travelport\Air\StructType\AirFareDiscount
     */
    public function setDiscountMethod(?string $discountMethod = null): self
    {
        $this->DiscountMethod = $discountMethod;
        
        return $this;
    }
}
