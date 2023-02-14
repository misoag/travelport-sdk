<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?float $Percentage = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The DiscountMethod
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DiscountMethod = null;
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
     * @return \Travelport\Util\StructType\AirFareDiscount
     */
    public function setPercentage(?float $percentage = null): self
    {
        // validation for constraint: float
        if (!is_null($percentage) && !(is_float($percentage) || is_numeric($percentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirFareDiscount
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeFareDiscount::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFareDiscount::getValidValues()
     * @throws InvalidArgumentException
     * @param string $discountMethod
     * @return \Travelport\Util\StructType\AirFareDiscount
     */
    public function setDiscountMethod(?string $discountMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFareDiscount::valueIsValid($discountMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFareDiscount', is_array($discountMethod) ? implode(', ', $discountMethod) : var_export($discountMethod, true), implode(', ', \Travelport\Util\EnumType\TypeFareDiscount::getValidValues())), __LINE__);
        }
        $this->DiscountMethod = $discountMethod;
        
        return $this;
    }
}
