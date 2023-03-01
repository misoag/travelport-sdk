<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangeEligibilityInfo StructType
 * @subpackage Structs
 */
class ExchangeEligibilityInfo extends AbstractStructBase
{
    /**
     * The ExchangePenaltyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ExchangePenaltyInfo
     * @var \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo[]
     */
    public ?array $ExchangePenaltyInfo = null;
    /**
     * The EligibleFares
     * Meta information extracted from the WSDL
     * - documentation: Identifies which fares are eligible for Exchange
     * - use: optional
     * @var string|null
     */
    public ?string $EligibleFares = null;
    /**
     * The RefundableFares
     * Meta information extracted from the WSDL
     * - documentation: Fares eligible for refund: All, Some, None
     * - use: optional
     * @var string|null
     */
    public ?string $RefundableFares = null;
    /**
     * The PassedAutomationChecks
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the itinerary passed initial validation for automated exchange
     * - use: optional
     * @var bool|null
     */
    public ?bool $PassedAutomationChecks = null;
    /**
     * Constructor method for ExchangeEligibilityInfo
     * @uses ExchangeEligibilityInfo::setExchangePenaltyInfo()
     * @uses ExchangeEligibilityInfo::setEligibleFares()
     * @uses ExchangeEligibilityInfo::setRefundableFares()
     * @uses ExchangeEligibilityInfo::setPassedAutomationChecks()
     * @param \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo[] $exchangePenaltyInfo
     * @param string $eligibleFares
     * @param string $refundableFares
     * @param bool $passedAutomationChecks
     */
    public function __construct(?array $exchangePenaltyInfo = null, ?string $eligibleFares = null, ?string $refundableFares = null, ?bool $passedAutomationChecks = null)
    {
        $this
            ->setExchangePenaltyInfo($exchangePenaltyInfo)
            ->setEligibleFares($eligibleFares)
            ->setRefundableFares($refundableFares)
            ->setPassedAutomationChecks($passedAutomationChecks);
    }
    /**
     * Get ExchangePenaltyInfo value
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo[]
     */
    public function getExchangePenaltyInfo(): ?array
    {
        return $this->ExchangePenaltyInfo;
    }
    /**
     * Set ExchangePenaltyInfo value
     * @param \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo[] $exchangePenaltyInfo
     * @return \Travelport\UniversalRecord\StructType\ExchangeEligibilityInfo
     */
    public function setExchangePenaltyInfo(?array $exchangePenaltyInfo = null): self
    {
        $this->ExchangePenaltyInfo = $exchangePenaltyInfo;
        
        return $this;
    }
    /**
     * Add item to ExchangePenaltyInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo $item
     * @return \Travelport\UniversalRecord\StructType\ExchangeEligibilityInfo
     */
    public function addToExchangePenaltyInfo(\Travelport\UniversalRecord\StructType\ExchangePenaltyInfo $item): self
    {
        $this->ExchangePenaltyInfo[] = $item;
        
        return $this;
    }
    /**
     * Get EligibleFares value
     * @return string|null
     */
    public function getEligibleFares(): ?string
    {
        return $this->EligibleFares;
    }
    /**
     * Set EligibleFares value
     * @param string $eligibleFares
     * @return \Travelport\UniversalRecord\StructType\ExchangeEligibilityInfo
     */
    public function setEligibleFares(?string $eligibleFares = null): self
    {
        $this->EligibleFares = $eligibleFares;
        
        return $this;
    }
    /**
     * Get RefundableFares value
     * @return string|null
     */
    public function getRefundableFares(): ?string
    {
        return $this->RefundableFares;
    }
    /**
     * Set RefundableFares value
     * @param string $refundableFares
     * @return \Travelport\UniversalRecord\StructType\ExchangeEligibilityInfo
     */
    public function setRefundableFares(?string $refundableFares = null): self
    {
        $this->RefundableFares = $refundableFares;
        
        return $this;
    }
    /**
     * Get PassedAutomationChecks value
     * @return bool|null
     */
    public function getPassedAutomationChecks(): ?bool
    {
        return $this->PassedAutomationChecks;
    }
    /**
     * Set PassedAutomationChecks value
     * @param bool $passedAutomationChecks
     * @return \Travelport\UniversalRecord\StructType\ExchangeEligibilityInfo
     */
    public function setPassedAutomationChecks(?bool $passedAutomationChecks = null): self
    {
        $this->PassedAutomationChecks = $passedAutomationChecks;
        
        return $this;
    }
}
