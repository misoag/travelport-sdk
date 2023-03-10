<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepositAmount StructType
 * Meta information extracted from the WSDL
 * - documentation: Amount required for deposit/prepayment
 * @subpackage Structs
 */
class DepositAmount extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Supplier deposit amount required for deposit/prepayment.Supported by all Providers when supported by supplier | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The ApproximateAmount
     * Meta information extracted from the WSDL
     * - documentation: Approximate deposit amount required for deposit/prepayment. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateAmount = null;
    /**
     * Constructor method for DepositAmount
     * @uses DepositAmount::setAmount()
     * @uses DepositAmount::setApproximateAmount()
     * @param string $amount
     * @param string $approximateAmount
     */
    public function __construct(?string $amount = null, ?string $approximateAmount = null)
    {
        $this
            ->setAmount($amount)
            ->setApproximateAmount($approximateAmount);
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
     * @return \Travelport\Hotel\StructType\DepositAmount
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get ApproximateAmount value
     * @return string|null
     */
    public function getApproximateAmount(): ?string
    {
        return $this->ApproximateAmount;
    }
    /**
     * Set ApproximateAmount value
     * @param string $approximateAmount
     * @return \Travelport\Hotel\StructType\DepositAmount
     */
    public function setApproximateAmount(?string $approximateAmount = null): self
    {
        $this->ApproximateAmount = $approximateAmount;
        
        return $this;
    }
}
