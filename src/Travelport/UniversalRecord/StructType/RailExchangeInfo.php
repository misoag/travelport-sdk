<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailExchangeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Exchange information for the rail booking.
 * @subpackage Structs
 */
class RailExchangeInfo extends AbstractStructBase
{
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RefundAmount = null;
    /**
     * The CancellationFee
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $CancellationFee = null;
    /**
     * The ExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ExchangeAmount = null;
    /**
     * The ApproximateRefundAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateRefundAmount = null;
    /**
     * The ApproximateCancellationFee
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateCancellationFee = null;
    /**
     * The ApproximateExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: The Converted total price in Default Currency for this entity including base price and all taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateExchangeAmount = null;
    /**
     * The RetainAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount retained by a rail vendor for future use at the vendor’s site. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RetainAmount = null;
    /**
     * Constructor method for RailExchangeInfo
     * @uses RailExchangeInfo::setRefundAmount()
     * @uses RailExchangeInfo::setCancellationFee()
     * @uses RailExchangeInfo::setExchangeAmount()
     * @uses RailExchangeInfo::setApproximateRefundAmount()
     * @uses RailExchangeInfo::setApproximateCancellationFee()
     * @uses RailExchangeInfo::setApproximateExchangeAmount()
     * @uses RailExchangeInfo::setRetainAmount()
     * @param string $refundAmount
     * @param string $cancellationFee
     * @param string $exchangeAmount
     * @param string $approximateRefundAmount
     * @param string $approximateCancellationFee
     * @param string $approximateExchangeAmount
     * @param string $retainAmount
     */
    public function __construct(?string $refundAmount = null, ?string $cancellationFee = null, ?string $exchangeAmount = null, ?string $approximateRefundAmount = null, ?string $approximateCancellationFee = null, ?string $approximateExchangeAmount = null, ?string $retainAmount = null)
    {
        $this
            ->setRefundAmount($refundAmount)
            ->setCancellationFee($cancellationFee)
            ->setExchangeAmount($exchangeAmount)
            ->setApproximateRefundAmount($approximateRefundAmount)
            ->setApproximateCancellationFee($approximateCancellationFee)
            ->setApproximateExchangeAmount($approximateExchangeAmount)
            ->setRetainAmount($retainAmount);
    }
    /**
     * Get RefundAmount value
     * @return string|null
     */
    public function getRefundAmount(): ?string
    {
        return $this->RefundAmount;
    }
    /**
     * Set RefundAmount value
     * @param string $refundAmount
     * @return \Travelport\UniversalRecord\StructType\RailExchangeInfo
     */
    public function setRefundAmount(?string $refundAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($refundAmount) && !is_string($refundAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundAmount, true), gettype($refundAmount)), __LINE__);
        }
        $this->RefundAmount = $refundAmount;
        
        return $this;
    }
    /**
     * Get CancellationFee value
     * @return string|null
     */
    public function getCancellationFee(): ?string
    {
        return $this->CancellationFee;
    }
    /**
     * Set CancellationFee value
     * @param string $cancellationFee
     * @return \Travelport\UniversalRecord\StructType\RailExchangeInfo
     */
    public function setCancellationFee(?string $cancellationFee = null): self
    {
        // validation for constraint: string
        if (!is_null($cancellationFee) && !is_string($cancellationFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancellationFee, true), gettype($cancellationFee)), __LINE__);
        }
        $this->CancellationFee = $cancellationFee;
        
        return $this;
    }
    /**
     * Get ExchangeAmount value
     * @return string|null
     */
    public function getExchangeAmount(): ?string
    {
        return $this->ExchangeAmount;
    }
    /**
     * Set ExchangeAmount value
     * @param string $exchangeAmount
     * @return \Travelport\UniversalRecord\StructType\RailExchangeInfo
     */
    public function setExchangeAmount(?string $exchangeAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($exchangeAmount) && !is_string($exchangeAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exchangeAmount, true), gettype($exchangeAmount)), __LINE__);
        }
        $this->ExchangeAmount = $exchangeAmount;
        
        return $this;
    }
    /**
     * Get ApproximateRefundAmount value
     * @return string|null
     */
    public function getApproximateRefundAmount(): ?string
    {
        return $this->ApproximateRefundAmount;
    }
    /**
     * Set ApproximateRefundAmount value
     * @param string $approximateRefundAmount
     * @return \Travelport\UniversalRecord\StructType\RailExchangeInfo
     */
    public function setApproximateRefundAmount(?string $approximateRefundAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateRefundAmount) && !is_string($approximateRefundAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateRefundAmount, true), gettype($approximateRefundAmount)), __LINE__);
        }
        $this->ApproximateRefundAmount = $approximateRefundAmount;
        
        return $this;
    }
    /**
     * Get ApproximateCancellationFee value
     * @return string|null
     */
    public function getApproximateCancellationFee(): ?string
    {
        return $this->ApproximateCancellationFee;
    }
    /**
     * Set ApproximateCancellationFee value
     * @param string $approximateCancellationFee
     * @return \Travelport\UniversalRecord\StructType\RailExchangeInfo
     */
    public function setApproximateCancellationFee(?string $approximateCancellationFee = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateCancellationFee) && !is_string($approximateCancellationFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateCancellationFee, true), gettype($approximateCancellationFee)), __LINE__);
        }
        $this->ApproximateCancellationFee = $approximateCancellationFee;
        
        return $this;
    }
    /**
     * Get ApproximateExchangeAmount value
     * @return string|null
     */
    public function getApproximateExchangeAmount(): ?string
    {
        return $this->ApproximateExchangeAmount;
    }
    /**
     * Set ApproximateExchangeAmount value
     * @param string $approximateExchangeAmount
     * @return \Travelport\UniversalRecord\StructType\RailExchangeInfo
     */
    public function setApproximateExchangeAmount(?string $approximateExchangeAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateExchangeAmount) && !is_string($approximateExchangeAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateExchangeAmount, true), gettype($approximateExchangeAmount)), __LINE__);
        }
        $this->ApproximateExchangeAmount = $approximateExchangeAmount;
        
        return $this;
    }
    /**
     * Get RetainAmount value
     * @return string|null
     */
    public function getRetainAmount(): ?string
    {
        return $this->RetainAmount;
    }
    /**
     * Set RetainAmount value
     * @param string $retainAmount
     * @return \Travelport\UniversalRecord\StructType\RailExchangeInfo
     */
    public function setRetainAmount(?string $retainAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($retainAmount) && !is_string($retainAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retainAmount, true), gettype($retainAmount)), __LINE__);
        }
        $this->RetainAmount = $retainAmount;
        
        return $this;
    }
}
