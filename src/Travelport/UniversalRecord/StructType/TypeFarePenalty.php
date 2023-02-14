<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $Amount = null;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - documentation: The penalty (if any) - expressed in percentage. Both Amount and Percentage can be present. | A percentage that can include up to two decimal places
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * @var string|null
     */
    protected ?string $Percentage = null;
    /**
     * The PenaltyApplies
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $PenaltyApplies = null;
    /**
     * The NoShow
     * Meta information extracted from the WSDL
     * - documentation: The No Show penalty (if any) to change/cancel the fare.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NoShow = null;
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
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        // validation for constraint: pattern(([0-9]{1,2}|100)\.[0-9]{1,2})
        if (!is_null($percentage) && !preg_match('/([0-9]{1,2}|100)\\.[0-9]{1,2}/', $percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([0-9]{1,2}|100)\\.[0-9]{1,2}/', var_export($percentage, true)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($penaltyApplies) && !is_string($penaltyApplies)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($penaltyApplies, true), gettype($penaltyApplies)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($noShow) && !is_bool($noShow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noShow, true), gettype($noShow)), __LINE__);
        }
        $this->NoShow = $noShow;
        
        return $this;
    }
}
