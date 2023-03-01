<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Balance StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates balance dates.
 * @subpackage Structs
 */
class Balance extends AbstractStructBase
{
    /**
     * The CreditCardDueAmount
     * Meta information extracted from the WSDL
     * - documentation: Balance due via credit card payment | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $CreditCardDueAmount = null;
    /**
     * The CheckDueAmount
     * Meta information extracted from the WSDL
     * - documentation: Balance due via personal check | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $CheckDueAmount = null;
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
     * Constructor method for Balance
     * @uses Balance::setCreditCardDueAmount()
     * @uses Balance::setCheckDueAmount()
     * @uses Balance::setDueDate()
     * @uses Balance::setReceivedDate()
     * @param string $creditCardDueAmount
     * @param string $checkDueAmount
     * @param string $dueDate
     * @param string $receivedDate
     */
    public function __construct(?string $creditCardDueAmount = null, ?string $checkDueAmount = null, ?string $dueDate = null, ?string $receivedDate = null)
    {
        $this
            ->setCreditCardDueAmount($creditCardDueAmount)
            ->setCheckDueAmount($checkDueAmount)
            ->setDueDate($dueDate)
            ->setReceivedDate($receivedDate);
    }
    /**
     * Get CreditCardDueAmount value
     * @return string|null
     */
    public function getCreditCardDueAmount(): ?string
    {
        return $this->CreditCardDueAmount;
    }
    /**
     * Set CreditCardDueAmount value
     * @param string $creditCardDueAmount
     * @return \Travelport\UniversalRecord\StructType\Balance
     */
    public function setCreditCardDueAmount(?string $creditCardDueAmount = null): self
    {
        $this->CreditCardDueAmount = $creditCardDueAmount;
        
        return $this;
    }
    /**
     * Get CheckDueAmount value
     * @return string|null
     */
    public function getCheckDueAmount(): ?string
    {
        return $this->CheckDueAmount;
    }
    /**
     * Set CheckDueAmount value
     * @param string $checkDueAmount
     * @return \Travelport\UniversalRecord\StructType\Balance
     */
    public function setCheckDueAmount(?string $checkDueAmount = null): self
    {
        $this->CheckDueAmount = $checkDueAmount;
        
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
     * @return \Travelport\UniversalRecord\StructType\Balance
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
     * @return \Travelport\UniversalRecord\StructType\Balance
     */
    public function setReceivedDate(?string $receivedDate = null): self
    {
        $this->ReceivedDate = $receivedDate;
        
        return $this;
    }
}
