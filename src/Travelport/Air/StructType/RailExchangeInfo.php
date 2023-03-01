<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?string $RefundAmount = null;
    /**
     * The CancellationFee
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $CancellationFee = null;
    /**
     * The ExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ExchangeAmount = null;
    /**
     * The ApproximateRefundAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateRefundAmount = null;
    /**
     * The ApproximateCancellationFee
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateCancellationFee = null;
    /**
     * The ApproximateExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: The Converted total price in Default Currency for this entity including base price and all taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateExchangeAmount = null;
    /**
     * The RetainAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount retained by a rail vendor for future use at the vendor’s site. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RetainAmount = null;
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
     * @return \Travelport\Air\StructType\RailExchangeInfo
     */
    public function setRefundAmount(?string $refundAmount = null): self
    {
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
     * @return \Travelport\Air\StructType\RailExchangeInfo
     */
    public function setCancellationFee(?string $cancellationFee = null): self
    {
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
     * @return \Travelport\Air\StructType\RailExchangeInfo
     */
    public function setExchangeAmount(?string $exchangeAmount = null): self
    {
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
     * @return \Travelport\Air\StructType\RailExchangeInfo
     */
    public function setApproximateRefundAmount(?string $approximateRefundAmount = null): self
    {
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
     * @return \Travelport\Air\StructType\RailExchangeInfo
     */
    public function setApproximateCancellationFee(?string $approximateCancellationFee = null): self
    {
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
     * @return \Travelport\Air\StructType\RailExchangeInfo
     */
    public function setApproximateExchangeAmount(?string $approximateExchangeAmount = null): self
    {
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
     * @return \Travelport\Air\StructType\RailExchangeInfo
     */
    public function setRetainAmount(?string $retainAmount = null): self
    {
        $this->RetainAmount = $retainAmount;
        
        return $this;
    }
}
