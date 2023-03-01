<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleCharges StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for rules related to charges such as deposits, surcharges, penalities, etc..
 * @subpackage Structs
 */
class RuleCharges extends AbstractStructBase
{
    /**
     * The PenaltyType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $PenaltyType = null;
    /**
     * The DepartureStatus
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $DepartureStatus = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - use: optional
     * @var float|null
     */
    public ?float $Percent = null;
    /**
     * The MoreRulesPresent
     * Meta information extracted from the WSDL
     * - documentation: If true, specifies that advance purchase information will be present in fare rules.
     * - use: optional
     * @var bool|null
     */
    public ?bool $MoreRulesPresent = null;
    /**
     * Constructor method for RuleCharges
     * @uses RuleCharges::setPenaltyType()
     * @uses RuleCharges::setDepartureStatus()
     * @uses RuleCharges::setAmount()
     * @uses RuleCharges::setPercent()
     * @uses RuleCharges::setMoreRulesPresent()
     * @param string $penaltyType
     * @param string $departureStatus
     * @param string $amount
     * @param float $percent
     * @param bool $moreRulesPresent
     */
    public function __construct(?string $penaltyType = null, ?string $departureStatus = null, ?string $amount = null, ?float $percent = null, ?bool $moreRulesPresent = null)
    {
        $this
            ->setPenaltyType($penaltyType)
            ->setDepartureStatus($departureStatus)
            ->setAmount($amount)
            ->setPercent($percent)
            ->setMoreRulesPresent($moreRulesPresent);
    }
    /**
     * Get PenaltyType value
     * @return string|null
     */
    public function getPenaltyType(): ?string
    {
        return $this->PenaltyType;
    }
    /**
     * Set PenaltyType value
     * @param string $penaltyType
     * @return \Travelport\Air\StructType\RuleCharges
     */
    public function setPenaltyType(?string $penaltyType = null): self
    {
        $this->PenaltyType = $penaltyType;
        
        return $this;
    }
    /**
     * Get DepartureStatus value
     * @return string|null
     */
    public function getDepartureStatus(): ?string
    {
        return $this->DepartureStatus;
    }
    /**
     * Set DepartureStatus value
     * @param string $departureStatus
     * @return \Travelport\Air\StructType\RuleCharges
     */
    public function setDepartureStatus(?string $departureStatus = null): self
    {
        $this->DepartureStatus = $departureStatus;
        
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
     * @return \Travelport\Air\StructType\RuleCharges
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \Travelport\Air\StructType\RuleCharges
     */
    public function setPercent(?float $percent = null): self
    {
        $this->Percent = $percent;
        
        return $this;
    }
    /**
     * Get MoreRulesPresent value
     * @return bool|null
     */
    public function getMoreRulesPresent(): ?bool
    {
        return $this->MoreRulesPresent;
    }
    /**
     * Set MoreRulesPresent value
     * @param bool $moreRulesPresent
     * @return \Travelport\Air\StructType\RuleCharges
     */
    public function setMoreRulesPresent(?bool $moreRulesPresent = null): self
    {
        $this->MoreRulesPresent = $moreRulesPresent;
        
        return $this;
    }
}
