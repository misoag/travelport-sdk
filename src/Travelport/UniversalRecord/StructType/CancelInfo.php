<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $CancellationPolicy = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: The informational text provided by the supplier to cancel the booking, if @Method="INFO". For all other values of @Method, Text is not returned.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Text = null;
    /**
     * The NonRefundableStayIndicator
     * Meta information extracted from the WSDL
     * - documentation: True if Deposit or Payment is non-refundable
     * - use: optional
     * @var string|null
     */
    protected ?string $NonRefundableStayIndicator = null;
    /**
     * The CancelDeadline
     * Meta information extracted from the WSDL
     * - documentation: Last date/time the reservation can be canceled without penalty.
     * - use: optional
     * @var string|null
     */
    protected ?string $CancelDeadline = null;
    /**
     * The TaxInclusive
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the Penalty amount includes taxes.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $TaxInclusive = null;
    /**
     * The FeeInclusive
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the Penalty amount includes fees.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $FeeInclusive = null;
    /**
     * The CancelPenaltyAmount
     * Meta information extracted from the WSDL
     * - documentation: This will contain the cancellation penalty amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $CancelPenaltyAmount = null;
    /**
     * The NumberOfNights
     * Meta information extracted from the WSDL
     * - documentation: This will contain the number of nights that will be assessed as the cancelation penalty.
     * - use: optional
     * @var int|null
     */
    protected ?int $NumberOfNights = null;
    /**
     * The CancelPenaltyPercent
     * Meta information extracted from the WSDL
     * - documentation: This will contain the cancellation penalty expressed as a percentage.
     * - use: optional
     * @var float|null
     */
    protected ?float $CancelPenaltyPercent = null;
    /**
     * The CancelPenaltyPercentAppliesTo
     * Meta information extracted from the WSDL
     * - documentation: This will contain the cost qualifier that explains what the percentage is applied to in order to calculate the cancel penalty.
     * - use: optional
     * @var string|null
     */
    protected ?string $CancelPenaltyPercentAppliesTo = null;
    /**
     * The Method
     * Meta information extracted from the WSDL
     * - documentation: Cancellation method, either "API", "URL", "INFO", or "NONE".
     * - use: optional
     * @var string|null
     */
    protected ?string $Method = null;
    /**
     * The Supported
     * Meta information extracted from the WSDL
     * - documentation: If true, the booking can be canceled. If false, the booking cannot be canceled.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Supported = null;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: The URL provided by the supplier to cancel the booking, if @Method="URL". For all other values of @Method, @URL is not returned.
     * - use: optional
     * @var string|null
     */
    protected ?string $URL = null;
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
    protected ?string $OffsetTimeUnit = null;
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
    protected ?int $OffsetUnitMultiplier = null;
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
    protected ?string $OffsetDropTime = null;
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
        // validation for constraint: string
        if (!is_null($cancellationPolicy) && !is_string($cancellationPolicy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancellationPolicy, true), gettype($cancellationPolicy)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForArrayConstraintsFromSetText(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cancelInfoTextItem) {
            // validation for constraint: itemType
            if (!is_string($cancelInfoTextItem)) {
                $invalidValues[] = is_object($cancelInfoTextItem) ? get_class($cancelInfoTextItem) : sprintf('%s(%s)', gettype($cancelInfoTextItem), var_export($cancelInfoTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Text value
     * @throws InvalidArgumentException
     * @param string[] $text
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintsFromSetText($text))) {
            throw new InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($text) && count($text) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($text)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Text property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Text) && count($this->Text) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Text)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $nonRefundableStayIndicator
     * @return \Travelport\UniversalRecord\StructType\CancelInfo
     */
    public function setNonRefundableStayIndicator(?string $nonRefundableStayIndicator = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid($nonRefundableStayIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTrinary', is_array($nonRefundableStayIndicator) ? implode(', ', $nonRefundableStayIndicator) : var_export($nonRefundableStayIndicator, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($cancelDeadline) && !is_string($cancelDeadline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelDeadline, true), gettype($cancelDeadline)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($taxInclusive) && !is_bool($taxInclusive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($taxInclusive, true), gettype($taxInclusive)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($feeInclusive) && !is_bool($feeInclusive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feeInclusive, true), gettype($feeInclusive)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($cancelPenaltyAmount) && !is_string($cancelPenaltyAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelPenaltyAmount, true), gettype($cancelPenaltyAmount)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($numberOfNights) && !(is_int($numberOfNights) || ctype_digit($numberOfNights))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfNights, true), gettype($numberOfNights)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($cancelPenaltyPercent) && !(is_float($cancelPenaltyPercent) || is_numeric($cancelPenaltyPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancelPenaltyPercent, true), gettype($cancelPenaltyPercent)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($cancelPenaltyPercentAppliesTo) && !is_string($cancelPenaltyPercentAppliesTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelPenaltyPercentAppliesTo, true), gettype($cancelPenaltyPercentAppliesTo)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($method, true), gettype($method)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($supported) && !is_bool($supported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($supported, true), gettype($supported)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($offsetTimeUnit) && !is_string($offsetTimeUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offsetTimeUnit, true), gettype($offsetTimeUnit)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($offsetTimeUnit) && mb_strlen((string) $offsetTimeUnit) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $offsetTimeUnit)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($offsetTimeUnit) && mb_strlen((string) $offsetTimeUnit) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $offsetTimeUnit)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($offsetUnitMultiplier) && !(is_int($offsetUnitMultiplier) || ctype_digit($offsetUnitMultiplier))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offsetUnitMultiplier, true), gettype($offsetUnitMultiplier)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($offsetUnitMultiplier) && $offsetUnitMultiplier > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($offsetUnitMultiplier, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($offsetUnitMultiplier) && $offsetUnitMultiplier < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($offsetUnitMultiplier, true)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($offsetDropTime) && !is_string($offsetDropTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offsetDropTime, true), gettype($offsetDropTime)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($offsetDropTime) && mb_strlen((string) $offsetDropTime) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $offsetDropTime)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($offsetDropTime) && mb_strlen((string) $offsetDropTime) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $offsetDropTime)), __LINE__);
        }
        $this->OffsetDropTime = $offsetDropTime;
        
        return $this;
    }
}
