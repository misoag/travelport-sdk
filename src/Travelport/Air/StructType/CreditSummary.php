<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditSummary StructType
 * Meta information extracted from the WSDL
 * - documentation: Credit summary associated with the account
 * @subpackage Structs
 */
class CreditSummary extends AbstractStructBase
{
    /**
     * The CurrentBalance
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public float $CurrentBalance;
    /**
     * The InitialCredit
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public float $InitialCredit;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $CurrencyCode = null;
    /**
     * Constructor method for CreditSummary
     * @uses CreditSummary::setCurrentBalance()
     * @uses CreditSummary::setInitialCredit()
     * @uses CreditSummary::setCurrencyCode()
     * @param float $currentBalance
     * @param float $initialCredit
     * @param string $currencyCode
     */
    public function __construct(float $currentBalance, float $initialCredit, ?string $currencyCode = null)
    {
        $this
            ->setCurrentBalance($currentBalance)
            ->setInitialCredit($initialCredit)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get CurrentBalance value
     * @return float
     */
    public function getCurrentBalance(): float
    {
        return $this->CurrentBalance;
    }
    /**
     * Set CurrentBalance value
     * @param float $currentBalance
     * @return \Travelport\Air\StructType\CreditSummary
     */
    public function setCurrentBalance(float $currentBalance): self
    {
        $this->CurrentBalance = $currentBalance;
        
        return $this;
    }
    /**
     * Get InitialCredit value
     * @return float
     */
    public function getInitialCredit(): float
    {
        return $this->InitialCredit;
    }
    /**
     * Set InitialCredit value
     * @param float $initialCredit
     * @return \Travelport\Air\StructType\CreditSummary
     */
    public function setInitialCredit(float $initialCredit): self
    {
        $this->InitialCredit = $initialCredit;
        
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Travelport\Air\StructType\CreditSummary
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        $this->CurrencyCode = $currencyCode;
        
        return $this;
    }
}
