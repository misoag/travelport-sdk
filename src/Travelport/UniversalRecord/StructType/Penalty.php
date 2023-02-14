<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Penalty StructType
 * Meta information extracted from the WSDL
 * - documentation: Exchange penalty information
 * @subpackage Structs
 */
class Penalty extends AbstractStructBase
{
    /**
     * The CancelRefund
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CancelRefund = null;
    /**
     * The NonRefundable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NonRefundable = null;
    /**
     * The NonExchangeable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NonExchangeable = null;
    /**
     * The CancelationPenalty
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CancelationPenalty = null;
    /**
     * The ReissuePenalty
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReissuePenalty = null;
    /**
     * The NonReissuePenalty
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NonReissuePenalty = null;
    /**
     * The TicketRefundPenalty
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $TicketRefundPenalty = null;
    /**
     * The ChargeApplicable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ChargeApplicable = null;
    /**
     * The ChargePortion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ChargePortion = null;
    /**
     * The PenaltyAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PenaltyAmount = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Penalty Amount | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The PenaltyType
     * Meta information extracted from the WSDL
     * - documentation: This is the PPC (Price Processing Code)code.
     * - use: optional
     * @var string|null
     */
    protected ?string $PenaltyType = null;
    /**
     * Constructor method for Penalty
     * @uses Penalty::setCancelRefund()
     * @uses Penalty::setNonRefundable()
     * @uses Penalty::setNonExchangeable()
     * @uses Penalty::setCancelationPenalty()
     * @uses Penalty::setReissuePenalty()
     * @uses Penalty::setNonReissuePenalty()
     * @uses Penalty::setTicketRefundPenalty()
     * @uses Penalty::setChargeApplicable()
     * @uses Penalty::setChargePortion()
     * @uses Penalty::setPenaltyAmount()
     * @uses Penalty::setAmount()
     * @uses Penalty::setPenaltyType()
     * @param bool $cancelRefund
     * @param bool $nonRefundable
     * @param bool $nonExchangeable
     * @param bool $cancelationPenalty
     * @param bool $reissuePenalty
     * @param bool $nonReissuePenalty
     * @param bool $ticketRefundPenalty
     * @param bool $chargeApplicable
     * @param bool $chargePortion
     * @param string $penaltyAmount
     * @param string $amount
     * @param string $penaltyType
     */
    public function __construct(?bool $cancelRefund = null, ?bool $nonRefundable = null, ?bool $nonExchangeable = null, ?bool $cancelationPenalty = null, ?bool $reissuePenalty = null, ?bool $nonReissuePenalty = null, ?bool $ticketRefundPenalty = null, ?bool $chargeApplicable = null, ?bool $chargePortion = null, ?string $penaltyAmount = null, ?string $amount = null, ?string $penaltyType = null)
    {
        $this
            ->setCancelRefund($cancelRefund)
            ->setNonRefundable($nonRefundable)
            ->setNonExchangeable($nonExchangeable)
            ->setCancelationPenalty($cancelationPenalty)
            ->setReissuePenalty($reissuePenalty)
            ->setNonReissuePenalty($nonReissuePenalty)
            ->setTicketRefundPenalty($ticketRefundPenalty)
            ->setChargeApplicable($chargeApplicable)
            ->setChargePortion($chargePortion)
            ->setPenaltyAmount($penaltyAmount)
            ->setAmount($amount)
            ->setPenaltyType($penaltyType);
    }
    /**
     * Get CancelRefund value
     * @return bool|null
     */
    public function getCancelRefund(): ?bool
    {
        return $this->CancelRefund;
    }
    /**
     * Set CancelRefund value
     * @param bool $cancelRefund
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setCancelRefund(?bool $cancelRefund = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cancelRefund) && !is_bool($cancelRefund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelRefund, true), gettype($cancelRefund)), __LINE__);
        }
        $this->CancelRefund = $cancelRefund;
        
        return $this;
    }
    /**
     * Get NonRefundable value
     * @return bool|null
     */
    public function getNonRefundable(): ?bool
    {
        return $this->NonRefundable;
    }
    /**
     * Set NonRefundable value
     * @param bool $nonRefundable
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setNonRefundable(?bool $nonRefundable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nonRefundable) && !is_bool($nonRefundable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nonRefundable, true), gettype($nonRefundable)), __LINE__);
        }
        $this->NonRefundable = $nonRefundable;
        
        return $this;
    }
    /**
     * Get NonExchangeable value
     * @return bool|null
     */
    public function getNonExchangeable(): ?bool
    {
        return $this->NonExchangeable;
    }
    /**
     * Set NonExchangeable value
     * @param bool $nonExchangeable
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setNonExchangeable(?bool $nonExchangeable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nonExchangeable) && !is_bool($nonExchangeable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nonExchangeable, true), gettype($nonExchangeable)), __LINE__);
        }
        $this->NonExchangeable = $nonExchangeable;
        
        return $this;
    }
    /**
     * Get CancelationPenalty value
     * @return bool|null
     */
    public function getCancelationPenalty(): ?bool
    {
        return $this->CancelationPenalty;
    }
    /**
     * Set CancelationPenalty value
     * @param bool $cancelationPenalty
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setCancelationPenalty(?bool $cancelationPenalty = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cancelationPenalty) && !is_bool($cancelationPenalty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelationPenalty, true), gettype($cancelationPenalty)), __LINE__);
        }
        $this->CancelationPenalty = $cancelationPenalty;
        
        return $this;
    }
    /**
     * Get ReissuePenalty value
     * @return bool|null
     */
    public function getReissuePenalty(): ?bool
    {
        return $this->ReissuePenalty;
    }
    /**
     * Set ReissuePenalty value
     * @param bool $reissuePenalty
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setReissuePenalty(?bool $reissuePenalty = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reissuePenalty) && !is_bool($reissuePenalty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reissuePenalty, true), gettype($reissuePenalty)), __LINE__);
        }
        $this->ReissuePenalty = $reissuePenalty;
        
        return $this;
    }
    /**
     * Get NonReissuePenalty value
     * @return bool|null
     */
    public function getNonReissuePenalty(): ?bool
    {
        return $this->NonReissuePenalty;
    }
    /**
     * Set NonReissuePenalty value
     * @param bool $nonReissuePenalty
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setNonReissuePenalty(?bool $nonReissuePenalty = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nonReissuePenalty) && !is_bool($nonReissuePenalty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nonReissuePenalty, true), gettype($nonReissuePenalty)), __LINE__);
        }
        $this->NonReissuePenalty = $nonReissuePenalty;
        
        return $this;
    }
    /**
     * Get TicketRefundPenalty value
     * @return bool|null
     */
    public function getTicketRefundPenalty(): ?bool
    {
        return $this->TicketRefundPenalty;
    }
    /**
     * Set TicketRefundPenalty value
     * @param bool $ticketRefundPenalty
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setTicketRefundPenalty(?bool $ticketRefundPenalty = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ticketRefundPenalty) && !is_bool($ticketRefundPenalty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ticketRefundPenalty, true), gettype($ticketRefundPenalty)), __LINE__);
        }
        $this->TicketRefundPenalty = $ticketRefundPenalty;
        
        return $this;
    }
    /**
     * Get ChargeApplicable value
     * @return bool|null
     */
    public function getChargeApplicable(): ?bool
    {
        return $this->ChargeApplicable;
    }
    /**
     * Set ChargeApplicable value
     * @param bool $chargeApplicable
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setChargeApplicable(?bool $chargeApplicable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($chargeApplicable) && !is_bool($chargeApplicable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($chargeApplicable, true), gettype($chargeApplicable)), __LINE__);
        }
        $this->ChargeApplicable = $chargeApplicable;
        
        return $this;
    }
    /**
     * Get ChargePortion value
     * @return bool|null
     */
    public function getChargePortion(): ?bool
    {
        return $this->ChargePortion;
    }
    /**
     * Set ChargePortion value
     * @param bool $chargePortion
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setChargePortion(?bool $chargePortion = null): self
    {
        // validation for constraint: boolean
        if (!is_null($chargePortion) && !is_bool($chargePortion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($chargePortion, true), gettype($chargePortion)), __LINE__);
        }
        $this->ChargePortion = $chargePortion;
        
        return $this;
    }
    /**
     * Get PenaltyAmount value
     * @return string|null
     */
    public function getPenaltyAmount(): ?string
    {
        return $this->PenaltyAmount;
    }
    /**
     * Set PenaltyAmount value
     * @param string $penaltyAmount
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setPenaltyAmount(?string $penaltyAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($penaltyAmount) && !is_string($penaltyAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($penaltyAmount, true), gettype($penaltyAmount)), __LINE__);
        }
        $this->PenaltyAmount = $penaltyAmount;
        
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
     * @return \Travelport\UniversalRecord\StructType\Penalty
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
     * @return \Travelport\UniversalRecord\StructType\Penalty
     */
    public function setPenaltyType(?string $penaltyType = null): self
    {
        // validation for constraint: string
        if (!is_null($penaltyType) && !is_string($penaltyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($penaltyType, true), gettype($penaltyType)), __LINE__);
        }
        $this->PenaltyType = $penaltyType;
        
        return $this;
    }
}
