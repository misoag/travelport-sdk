<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRefundInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides results of a refund quote
 * @subpackage Structs
 */
class AirRefundInfo extends AbstractStructBase
{
    /**
     * The RefundRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:RefundRemark
     * @var \Travelport\Air\StructType\RefundRemark[]
     */
    public ?array $RefundRemark = null;
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
     * The RetainAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RetainAmount = null;
    /**
     * The RefundFee
     * Meta information extracted from the WSDL
     * - documentation: Refund fee for ACH/1P | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RefundFee = null;
    /**
     * The RefundableTaxes
     * Meta information extracted from the WSDL
     * - documentation: 1P - None : All taxes are not refundable. Unknown : Refundability of taxes are not known.
     * - use: optional
     * @var string|null
     */
    public ?string $RefundableTaxes = null;
    /**
     * The FiledCurrency
     * Meta information extracted from the WSDL
     * - documentation: 1P Currency of filed CAT33 refund fee | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $FiledCurrency = null;
    /**
     * The ConversionRate
     * Meta information extracted from the WSDL
     * - documentation: 1P - Currency conversion rate used for conversion between FiledCurrency and PCC base currency in which the response is returned.
     * - use: optional
     * @var float|null
     */
    public ?float $ConversionRate = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: 1P - The total value of taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The OriginalTicketTotal
     * Meta information extracted from the WSDL
     * - documentation: 1P - The original ticket amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $OriginalTicketTotal = null;
    /**
     * The ForfeitAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ForfeitAmount = null;
    /**
     * The Retain
     * Meta information extracted from the WSDL
     * - documentation: This indicates whether any amount is retained by the provider.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $Retain = null;
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: This indicates whether carrier/host supports refund for the correcponding pnr.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $Refund = null;
    /**
     * Constructor method for AirRefundInfo
     * @uses AirRefundInfo::setRefundRemark()
     * @uses AirRefundInfo::setRefundAmount()
     * @uses AirRefundInfo::setRetainAmount()
     * @uses AirRefundInfo::setRefundFee()
     * @uses AirRefundInfo::setRefundableTaxes()
     * @uses AirRefundInfo::setFiledCurrency()
     * @uses AirRefundInfo::setConversionRate()
     * @uses AirRefundInfo::setTaxes()
     * @uses AirRefundInfo::setOriginalTicketTotal()
     * @uses AirRefundInfo::setForfeitAmount()
     * @uses AirRefundInfo::setRetain()
     * @uses AirRefundInfo::setRefund()
     * @param \Travelport\Air\StructType\RefundRemark[] $refundRemark
     * @param string $refundAmount
     * @param string $retainAmount
     * @param string $refundFee
     * @param string $refundableTaxes
     * @param string $filedCurrency
     * @param float $conversionRate
     * @param string $taxes
     * @param string $originalTicketTotal
     * @param string $forfeitAmount
     * @param bool $retain
     * @param bool $refund
     */
    public function __construct(?array $refundRemark = null, ?string $refundAmount = null, ?string $retainAmount = null, ?string $refundFee = null, ?string $refundableTaxes = null, ?string $filedCurrency = null, ?float $conversionRate = null, ?string $taxes = null, ?string $originalTicketTotal = null, ?string $forfeitAmount = null, ?bool $retain = false, ?bool $refund = false)
    {
        $this
            ->setRefundRemark($refundRemark)
            ->setRefundAmount($refundAmount)
            ->setRetainAmount($retainAmount)
            ->setRefundFee($refundFee)
            ->setRefundableTaxes($refundableTaxes)
            ->setFiledCurrency($filedCurrency)
            ->setConversionRate($conversionRate)
            ->setTaxes($taxes)
            ->setOriginalTicketTotal($originalTicketTotal)
            ->setForfeitAmount($forfeitAmount)
            ->setRetain($retain)
            ->setRefund($refund);
    }
    /**
     * Get RefundRemark value
     * @return \Travelport\Air\StructType\RefundRemark[]
     */
    public function getRefundRemark(): ?array
    {
        return $this->RefundRemark;
    }
    /**
     * Set RefundRemark value
     * @param \Travelport\Air\StructType\RefundRemark[] $refundRemark
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setRefundRemark(?array $refundRemark = null): self
    {
        $this->RefundRemark = $refundRemark;
        
        return $this;
    }
    /**
     * Add item to RefundRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RefundRemark $item
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function addToRefundRemark(\Travelport\Air\StructType\RefundRemark $item): self
    {
        $this->RefundRemark[] = $item;
        
        return $this;
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
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setRefundAmount(?string $refundAmount = null): self
    {
        $this->RefundAmount = $refundAmount;
        
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
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setRetainAmount(?string $retainAmount = null): self
    {
        $this->RetainAmount = $retainAmount;
        
        return $this;
    }
    /**
     * Get RefundFee value
     * @return string|null
     */
    public function getRefundFee(): ?string
    {
        return $this->RefundFee;
    }
    /**
     * Set RefundFee value
     * @param string $refundFee
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setRefundFee(?string $refundFee = null): self
    {
        $this->RefundFee = $refundFee;
        
        return $this;
    }
    /**
     * Get RefundableTaxes value
     * @return string|null
     */
    public function getRefundableTaxes(): ?string
    {
        return $this->RefundableTaxes;
    }
    /**
     * Set RefundableTaxes value
     * @param string $refundableTaxes
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setRefundableTaxes(?string $refundableTaxes = null): self
    {
        $this->RefundableTaxes = $refundableTaxes;
        
        return $this;
    }
    /**
     * Get FiledCurrency value
     * @return string|null
     */
    public function getFiledCurrency(): ?string
    {
        return $this->FiledCurrency;
    }
    /**
     * Set FiledCurrency value
     * @param string $filedCurrency
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setFiledCurrency(?string $filedCurrency = null): self
    {
        $this->FiledCurrency = $filedCurrency;
        
        return $this;
    }
    /**
     * Get ConversionRate value
     * @return float|null
     */
    public function getConversionRate(): ?float
    {
        return $this->ConversionRate;
    }
    /**
     * Set ConversionRate value
     * @param float $conversionRate
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setConversionRate(?float $conversionRate = null): self
    {
        $this->ConversionRate = $conversionRate;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setTaxes(?string $taxes = null): self
    {
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get OriginalTicketTotal value
     * @return string|null
     */
    public function getOriginalTicketTotal(): ?string
    {
        return $this->OriginalTicketTotal;
    }
    /**
     * Set OriginalTicketTotal value
     * @param string $originalTicketTotal
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setOriginalTicketTotal(?string $originalTicketTotal = null): self
    {
        $this->OriginalTicketTotal = $originalTicketTotal;
        
        return $this;
    }
    /**
     * Get ForfeitAmount value
     * @return string|null
     */
    public function getForfeitAmount(): ?string
    {
        return $this->ForfeitAmount;
    }
    /**
     * Set ForfeitAmount value
     * @param string $forfeitAmount
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setForfeitAmount(?string $forfeitAmount = null): self
    {
        $this->ForfeitAmount = $forfeitAmount;
        
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
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setRetain(?bool $retain = false): self
    {
        $this->Retain = $retain;
        
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
     * @return \Travelport\Air\StructType\AirRefundInfo
     */
    public function setRefund(?bool $refund = false): self
    {
        $this->Refund = $refund;
        
        return $this;
    }
}
