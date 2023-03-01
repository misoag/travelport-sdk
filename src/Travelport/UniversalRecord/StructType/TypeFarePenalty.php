<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeFarePenalty StructType
 * Meta information extracted from the WSDL
 * - documentation: Penalty applicable on a Fare for change/ cancellation etc- expressed in both Money and Percentage.
 * @subpackage Structs
 */
class TypeFarePenalty extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) - expressed as the actual amount of money. Both Amount and Percentage can be present. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) - expressed in percentage. Both Amount and Percentage can be present. | A percentage that can include up to two decimal places
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * @var string|null
     */
    public ?string $Percentage = null;
    /**
     * The PenaltyApplies
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $PenaltyApplies = null;
    /**
     * The NoShow
     * Meta information extracted from the WSDL
     * - documentation: The No Show penalty (if any) to change/cancel the fare.
     * - use: optional
     * @var bool|null
     */
    public ?bool $NoShow = null;
    /**
     * Constructor method for typeFarePenalty
     * @uses TypeFarePenalty::setAmount()
     * @uses TypeFarePenalty::setPercentage()
     * @uses TypeFarePenalty::setPenaltyApplies()
     * @uses TypeFarePenalty::setNoShow()
     * @param string $amount
     * @param string $percentage
     * @param string $penaltyApplies
     * @param bool $noShow
     */
    public function __construct(?string $amount = null, ?string $percentage = null, ?string $penaltyApplies = null, ?bool $noShow = null)
    {
        $this
            ->setAmount($amount)
            ->setPercentage($percentage)
            ->setPenaltyApplies($penaltyApplies)
            ->setNoShow($noShow);
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
     * @return \Travelport\UniversalRecord\StructType\TypeFarePenalty
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Percentage value
     * @return string|null
     */
    public function getPercentage(): ?string
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param string $percentage
     * @return \Travelport\UniversalRecord\StructType\TypeFarePenalty
     */
    public function setPercentage(?string $percentage = null): self
    {
        $this->Percentage = $percentage;
        
        return $this;
    }
    /**
     * Get PenaltyApplies value
     * @return string|null
     */
    public function getPenaltyApplies(): ?string
    {
        return $this->PenaltyApplies;
    }
    /**
     * Set PenaltyApplies value
     * @param string $penaltyApplies
     * @return \Travelport\UniversalRecord\StructType\TypeFarePenalty
     */
    public function setPenaltyApplies(?string $penaltyApplies = null): self
    {
        $this->PenaltyApplies = $penaltyApplies;
        
        return $this;
    }
    /**
     * Get NoShow value
     * @return bool|null
     */
    public function getNoShow(): ?bool
    {
        return $this->NoShow;
    }
    /**
     * Set NoShow value
     * @param bool $noShow
     * @return \Travelport\UniversalRecord\StructType\TypeFarePenalty
     */
    public function setNoShow(?bool $noShow = null): self
    {
        $this->NoShow = $noShow;
        
        return $this;
    }
}
