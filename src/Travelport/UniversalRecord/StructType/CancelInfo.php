<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns cancellation information for certain hotel returned in response. This information is available through GDS transactions
 * @subpackage Structs
 */
class CancelInfo extends AbstractStructBase
{
    /**
     * The CancellationPolicy
     * Meta information extracted from the WSDL
     * - documentation: Return cancellation policy text by the aggregator.
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $CancellationPolicy = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: The informational text provided by the supplier to cancel the booking, if @Method="INFO". For all other values of @Method, Text is not returned.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $Text = null;
    /**
     * The NonRefundableStayIndicator
     * Meta information extracted from the WSDL
     * - documentation: True if Deposit or Payment is non-refundable
     * - use: optional
     * @var string|null
     */
    public ?string $NonRefundableStayIndicator = null;
    /**
     * The CancelDeadline
     * Meta information extracted from the WSDL
     * - documentation: Last date/time the reservation can be canceled without penalty.
     * - use: optional
     * @var string|null
     */
    public ?string $CancelDeadline = null;
    /**
     * The TaxInclusive
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the Penalty amount includes taxes.
     * - use: optional
     * @var bool|null
     */
    public ?bool $TaxInclusive = null;
    /**
     * The FeeInclusive
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the Penalty amount includes fees.
     * - use: optional
     * @var bool|null
     */
    public ?bool $FeeInclusive = null;
    /**
     * The CancelPenaltyAmount
     * Meta information extracted from the WSDL
     * - documentation: This will contain the cancellation penalty amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $CancelPenaltyAmount = null;
    /**
     * The NumberOfNights
     * Meta information extracted from the WSDL
     * - documentation: This will contain the number of nights that will be assessed as the cancelation penalty.
     * - use: optional
     * @var int|null
     */
    public ?int $NumberOfNights = null;
    /**
     * The CancelPenaltyPercent
     * Meta information extracted from the WSDL
     * - documentation: This will contain the cancellation penalty expressed as a percentage.
     * - use: optional
     * @var float|null
     */
    public ?float $CancelPenaltyPercent = null;
    /**
     * The CancelPenaltyPercentAppliesTo
     * Meta information extracted from the WSDL
     * - documentation: This will contain the cost qualifier that explains what the percentage is applied to in order to calculate the cancel penalty.
     * - use: optional
     * @var string|null
     */
    public ?string $CancelPenaltyPercentAppliesTo = null;
    /**
     * The Method
     * Meta information extracted from the WSDL
     * - documentation: Cancellation method, either "API", "URL", "INFO", or "NONE".
     * - use: optional
     * @var string|null
     */
    public ?string $Method = null;
    /**
     * The Supported
     * Meta information extracted from the WSDL
     * - documentation: If true, the booking can be canceled. If false, the booking cannot be canceled.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Supported = null;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: The URL provided by the supplier to cancel the booking, if @Method="URL". For all other values of @Method, @URL is not returned.
     * - use: optional
     * @var string|null
     */
    public ?string $URL = null;
    /**
     * The OffsetTimeUnit
     * Meta information extracted from the WSDL
     * - documentation: The units of time, e.g: days, hours, etc that apply to the deadline. Enumerated values are “Year”, “Month”, “Day”, and “Hour”. | Used for Character Strings, length 1 to 16.
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - type: common:StringLength1to16
     * - use: optional
     * @var string|null
     */
    public ?string $OffsetTimeUnit = null;
    /**
     * The OffsetUnitMultiplier
     * Meta information extracted from the WSDL
     * - documentation: The number of units of DeadlineTimeUnit. | Used for Numeric values, from 0 to 999 inclusive.
     * - base: xs:integer
     * - maxInclusive: 999
     * - minInclusive: 0
     * - type: common:Numeric0to999
     * - use: optional
     * @var int|null
     */
    public ?int $OffsetUnitMultiplier = null;
    /**
     * The OffsetDropTime
     * Meta information extracted from the WSDL
     * - documentation: An enumerated type indicating when the deadline drop time goes into effect. Enumerated values are “AfterBooking” and “BeforeArrival”. | Used for Character Strings, length 1 to 20.
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - type: common:StringLength1to20
     * - use: optional
     * @var string|null
     */
    public ?string $OffsetDropTime = null;
    /**
     * Constructor method for CancelInfo
     * @uses CancelInfo::setCancellationPolicy()
     * @uses CancelInfo::setText()
     * @uses CancelInfo::setNonRefundableStayIndicator()
     * @uses CancelInfo::setCancelDeadline()
     * @uses CancelInfo::setTaxInclusive()
     * @uses CancelInfo::setFeeInclusive()
     * @uses CancelInfo::setCancelPenaltyAmount()
     * @uses CancelInfo::setNumberOfNights()
     * @uses CancelInfo::setCancelPenaltyPercent()
     * @uses CancelInfo::setCancelPenaltyPercentAppliesTo()
     * @uses CancelInfo::setMethod()
     * @uses CancelInfo::setSupported()
     * @uses CancelInfo::setURL()
     * @uses CancelInfo::setOffsetTimeUnit()
     * @uses CancelInfo::setOffsetUnitMultiplier()
     * @uses CancelInfo::setOffsetDropTime()
     * @param string $cancellationPolicy
     * @param string[] $text
     * @param string $nonRefundableStayIndicator
     * @param string $cancelDeadline
     * @param bool $taxInclusive
     * @param bool $feeInclusive
     * @param string $cancelPenaltyAmount
     * @param int $numberOfNights
     * @param float $cancelPenaltyPercent
     * @param string $cancelPenaltyPercentAppliesTo
     * @param string $method
     * @param bool $supported
     * @param string $uRL
     * @param string $offsetTimeUnit
     * @param int $offsetUnitMultiplier
     * @param string $offsetDropTime
     */
    public function __construct(?string $cancellationPolicy = null, ?array $text = null, ?string $nonRefundableStayIndicator = null, ?string $cancelDeadline = null, ?bool $taxInclusive = null, ?bool $feeInclusive = null, ?string $cancelPenaltyAmount = null, ?int $numberOfNights = null, ?float $cancelPenaltyPercent = null, ?string $cancelPenaltyPercentAppliesTo = null, ?string $method = null, ?bool $supported = null, ?string $uRL = null, ?string $offsetTimeUnit = null, ?int $offsetUnitMultiplier = null, ?string $offsetDropTime = null)
    {
        $this
            ->setCancellationPolicy($cancellationPolicy)
            ->setText($text)
            ->setNonRefundableStayIndicator($nonRefundableStayIndicator)
            ->setCancelDeadline($cancelDeadline)
            ->setTaxInclusive($taxInclusive)
            ->setFeeInclusive($feeInclusive)
            ->setCancelPenaltyAmount($cancelPenaltyAmount)
            ->setNumberOfNights($numberOfNights)
            ->setCancelPenaltyPercent($cancelPenaltyPercent)
            ->setCancelPenaltyPercentAppliesTo($cancelPenaltyPercentAppliesTo)
            ->setMethod($method)
            ->setSupported($supported)
            ->setURL($uRL)
            ->setOffsetTimeUnit($offsetTimeUnit)
            ->setOffsetUnitMultiplier($offsetUnitMultiplier)
            ->setOffsetDropTime($offsetDropTime);
    }
    /**
     * Get CancellationPolicy value
     * @return string|null
     */
    public function getCancellationPolicy(): ?string
    {
        return $this->CancellationPolicy;
    }
    /**
     * Set CancellationPolicy value
     * @param string $cancellationPolicy
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setCancellationPolicy(?string $cancellationPolicy = null): self
    {
        $this->CancellationPolicy = $cancellationPolicy;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string[] $text
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setText(?array $text = null): self
    {
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function addToText(string $item): self
    {
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get NonRefundableStayIndicator value
     * @return string|null
     */
    public function getNonRefundableStayIndicator(): ?string
    {
        return $this->NonRefundableStayIndicator;
    }
    /**
     * Set NonRefundableStayIndicator value
     * @param string $nonRefundableStayIndicator
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setNonRefundableStayIndicator(?string $nonRefundableStayIndicator = null): self
    {
        $this->NonRefundableStayIndicator = $nonRefundableStayIndicator;
        
        return $this;
    }
    /**
     * Get CancelDeadline value
     * @return string|null
     */
    public function getCancelDeadline(): ?string
    {
        return $this->CancelDeadline;
    }
    /**
     * Set CancelDeadline value
     * @param string $cancelDeadline
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setCancelDeadline(?string $cancelDeadline = null): self
    {
        $this->CancelDeadline = $cancelDeadline;
        
        return $this;
    }
    /**
     * Get TaxInclusive value
     * @return bool|null
     */
    public function getTaxInclusive(): ?bool
    {
        return $this->TaxInclusive;
    }
    /**
     * Set TaxInclusive value
     * @param bool $taxInclusive
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setTaxInclusive(?bool $taxInclusive = null): self
    {
        $this->TaxInclusive = $taxInclusive;
        
        return $this;
    }
    /**
     * Get FeeInclusive value
     * @return bool|null
     */
    public function getFeeInclusive(): ?bool
    {
        return $this->FeeInclusive;
    }
    /**
     * Set FeeInclusive value
     * @param bool $feeInclusive
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setFeeInclusive(?bool $feeInclusive = null): self
    {
        $this->FeeInclusive = $feeInclusive;
        
        return $this;
    }
    /**
     * Get CancelPenaltyAmount value
     * @return string|null
     */
    public function getCancelPenaltyAmount(): ?string
    {
        return $this->CancelPenaltyAmount;
    }
    /**
     * Set CancelPenaltyAmount value
     * @param string $cancelPenaltyAmount
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setCancelPenaltyAmount(?string $cancelPenaltyAmount = null): self
    {
        $this->CancelPenaltyAmount = $cancelPenaltyAmount;
        
        return $this;
    }
    /**
     * Get NumberOfNights value
     * @return int|null
     */
    public function getNumberOfNights(): ?int
    {
        return $this->NumberOfNights;
    }
    /**
     * Set NumberOfNights value
     * @param int $numberOfNights
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setNumberOfNights(?int $numberOfNights = null): self
    {
        $this->NumberOfNights = $numberOfNights;
        
        return $this;
    }
    /**
     * Get CancelPenaltyPercent value
     * @return float|null
     */
    public function getCancelPenaltyPercent(): ?float
    {
        return $this->CancelPenaltyPercent;
    }
    /**
     * Set CancelPenaltyPercent value
     * @param float $cancelPenaltyPercent
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setCancelPenaltyPercent(?float $cancelPenaltyPercent = null): self
    {
        $this->CancelPenaltyPercent = $cancelPenaltyPercent;
        
        return $this;
    }
    /**
     * Get CancelPenaltyPercentAppliesTo value
     * @return string|null
     */
    public function getCancelPenaltyPercentAppliesTo(): ?string
    {
        return $this->CancelPenaltyPercentAppliesTo;
    }
    /**
     * Set CancelPenaltyPercentAppliesTo value
     * @param string $cancelPenaltyPercentAppliesTo
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setCancelPenaltyPercentAppliesTo(?string $cancelPenaltyPercentAppliesTo = null): self
    {
        $this->CancelPenaltyPercentAppliesTo = $cancelPenaltyPercentAppliesTo;
        
        return $this;
    }
    /**
     * Get Method value
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->Method;
    }
    /**
     * Set Method value
     * @param string $method
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setMethod(?string $method = null): self
    {
        $this->Method = $method;
        
        return $this;
    }
    /**
     * Get Supported value
     * @return bool|null
     */
    public function getSupported(): ?bool
    {
        return $this->Supported;
    }
    /**
     * Set Supported value
     * @param bool $supported
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setSupported(?bool $supported = null): self
    {
        $this->Supported = $supported;
        
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setURL(?string $uRL = null): self
    {
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Get OffsetTimeUnit value
     * @return string|null
     */
    public function getOffsetTimeUnit(): ?string
    {
        return $this->OffsetTimeUnit;
    }
    /**
     * Set OffsetTimeUnit value
     * @param string $offsetTimeUnit
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setOffsetTimeUnit(?string $offsetTimeUnit = null): self
    {
        $this->OffsetTimeUnit = $offsetTimeUnit;
        
        return $this;
    }
    /**
     * Get OffsetUnitMultiplier value
     * @return int|null
     */
    public function getOffsetUnitMultiplier(): ?int
    {
        return $this->OffsetUnitMultiplier;
    }
    /**
     * Set OffsetUnitMultiplier value
     * @param int $offsetUnitMultiplier
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setOffsetUnitMultiplier(?int $offsetUnitMultiplier = null): self
    {
        $this->OffsetUnitMultiplier = $offsetUnitMultiplier;
        
        return $this;
    }
    /**
     * Get OffsetDropTime value
     * @return string|null
     */
    public function getOffsetDropTime(): ?string
    {
        return $this->OffsetDropTime;
    }
    /**
     * Set OffsetDropTime value
     * @param string $offsetDropTime
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setOffsetDropTime(?string $offsetDropTime = null): self
    {
        $this->OffsetDropTime = $offsetDropTime;
        
        return $this;
    }
}
