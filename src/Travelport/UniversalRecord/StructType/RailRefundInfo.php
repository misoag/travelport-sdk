<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $RefundAmount = null;
    /**
     * The CancellationFee
     * Meta information extracted from the WSDL
     * - documentation: Cancellation penalty imposed by the distributor. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $CancellationFee = null;
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether vendor offers refund on rail reservation.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Refund = null;
    /**
     * The Retain
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether vendor retains the amount to be used later.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Retain = null;
    /**
     * The RetainAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount retained by rail vendor for futute exchange/rail book at rail vendor site. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RetainAmount = null;
    /**
     * The NetAmount
     * Meta information extracted from the WSDL
     * - documentation: Net total amount to be refunded or retained by the vendor. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $NetAmount = null;
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
     * @return \Travelport\UniversalRecord\StructType\RailRefundInfo
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
        // validation for constraint: boolean
        if (!is_null($refund) && !is_bool($refund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refund, true), gettype($refund)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($retain) && !is_bool($retain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($retain, true), gettype($retain)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($retainAmount) && !is_string($retainAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retainAmount, true), gettype($retainAmount)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($netAmount) && !is_string($netAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($netAmount, true), gettype($netAmount)), __LINE__);
        }
        $this->NetAmount = $netAmount;
        
        return $this;
    }
}
