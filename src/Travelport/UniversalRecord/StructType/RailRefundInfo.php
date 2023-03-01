<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailRefundInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about refund.
 * @subpackage Structs
 */
class RailRefundInfo extends AbstractStructBase
{
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount refunded back to customer. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RefundAmount = null;
    /**
     * The CancellationFee
     * Meta information extracted from the WSDL
     * - documentation: Cancellation penalty imposed by the distributor. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $CancellationFee = null;
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether vendor offers refund on rail reservation.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Refund = null;
    /**
     * The Retain
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether vendor retains the amount to be used later.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Retain = null;
    /**
     * The RetainAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount retained by rail vendor for futute exchange/rail book at rail vendor site. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RetainAmount = null;
    /**
     * The NetAmount
     * Meta information extracted from the WSDL
     * - documentation: Net total amount to be refunded or retained by the vendor. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $NetAmount = null;
    /**
     * Constructor method for RailRefundInfo
     * @uses RailRefundInfo::setRefundAmount()
     * @uses RailRefundInfo::setCancellationFee()
     * @uses RailRefundInfo::setRefund()
     * @uses RailRefundInfo::setRetain()
     * @uses RailRefundInfo::setRetainAmount()
     * @uses RailRefundInfo::setNetAmount()
     * @param string $refundAmount
     * @param string $cancellationFee
     * @param bool $refund
     * @param bool $retain
     * @param string $retainAmount
     * @param string $netAmount
     */
    public function __construct(?string $refundAmount = null, ?string $cancellationFee = null, ?bool $refund = null, ?bool $retain = null, ?string $retainAmount = null, ?string $netAmount = null)
    {
        $this
            ->setRefundAmount($refundAmount)
            ->setCancellationFee($cancellationFee)
            ->setRefund($refund)
            ->setRetain($retain)
            ->setRetainAmount($retainAmount)
            ->setNetAmount($netAmount);
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
     * @return \Travelport\UniversalRecord\StructType\RailRefundInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailRefundInfo
     */
    public function setCancellationFee(?string $cancellationFee = null): self
    {
        $this->CancellationFee = $cancellationFee;
        
        return $this;
    }
    /**
     * Get Refund value
     * @return bool|null
     */
    public function getRefund(): ?bool
    {
        return $this->Refund;
    }
    /**
     * Set Refund value
     * @param bool $refund
     * @return \Travelport\UniversalRecord\StructType\RailRefundInfo
     */
    public function setRefund(?bool $refund = null): self
    {
        $this->Refund = $refund;
        
        return $this;
    }
    /**
     * Get Retain value
     * @return bool|null
     */
    public function getRetain(): ?bool
    {
        return $this->Retain;
    }
    /**
     * Set Retain value
     * @param bool $retain
     * @return \Travelport\UniversalRecord\StructType\RailRefundInfo
     */
    public function setRetain(?bool $retain = null): self
    {
        $this->Retain = $retain;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailRefundInfo
     */
    public function setRetainAmount(?string $retainAmount = null): self
    {
        $this->RetainAmount = $retainAmount;
        
        return $this;
    }
    /**
     * Get NetAmount value
     * @return string|null
     */
    public function getNetAmount(): ?string
    {
        return $this->NetAmount;
    }
    /**
     * Set NetAmount value
     * @param string $netAmount
     * @return \Travelport\UniversalRecord\StructType\RailRefundInfo
     */
    public function setNetAmount(?string $netAmount = null): self
    {
        $this->NetAmount = $netAmount;
        
        return $this;
    }
}
