<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Deposit StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates Deposit dates.
 * @subpackage Structs
 */
class Deposit extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount of Deposit | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The DueDate
     * Meta information extracted from the WSDL
     * - documentation: Date when deposit or balance is due.
     * - type: xs:date
     * - use: optional
     * @var string|null
     */
    public ?string $DueDate = null;
    /**
     * The ReceivedDate
     * Meta information extracted from the WSDL
     * - documentation: Date when deposit or balance is received, if received.
     * - type: xs:date
     * - use: optional
     * @var string|null
     */
    public ?string $ReceivedDate = null;
    /**
     * Constructor method for Deposit
     * @uses Deposit::setAmount()
     * @uses Deposit::setDueDate()
     * @uses Deposit::setReceivedDate()
     * @param string $amount
     * @param string $dueDate
     * @param string $receivedDate
     */
    public function __construct(?string $amount = null, ?string $dueDate = null, ?string $receivedDate = null)
    {
        $this
            ->setAmount($amount)
            ->setDueDate($dueDate)
            ->setReceivedDate($receivedDate);
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
     * @return \Travelport\UniversalRecord\StructType\Deposit
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \Travelport\UniversalRecord\StructType\Deposit
     */
    public function setDueDate(?string $dueDate = null): self
    {
        $this->DueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get ReceivedDate value
     * @return string|null
     */
    public function getReceivedDate(): ?string
    {
        return $this->ReceivedDate;
    }
    /**
     * Set ReceivedDate value
     * @param string $receivedDate
     * @return \Travelport\UniversalRecord\StructType\Deposit
     */
    public function setReceivedDate(?string $receivedDate = null): self
    {
        $this->ReceivedDate = $receivedDate;
        
        return $this;
    }
}
