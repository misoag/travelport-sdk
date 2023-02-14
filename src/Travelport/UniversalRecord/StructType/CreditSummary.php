<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected float $CurrentBalance;
    /**
     * The InitialCredit
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    protected float $InitialCredit;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
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
     * @return \Travelport\UniversalRecord\StructType\CreditSummary
     */
    public function setCurrentBalance(float $currentBalance): self
    {
        // validation for constraint: float
        if (!is_null($currentBalance) && !(is_float($currentBalance) || is_numeric($currentBalance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($currentBalance, true), gettype($currentBalance)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\CreditSummary
     */
    public function setInitialCredit(float $initialCredit): self
    {
        // validation for constraint: float
        if (!is_null($initialCredit) && !(is_float($initialCredit) || is_numeric($initialCredit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($initialCredit, true), gettype($initialCredit)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\CreditSummary
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($currencyCode) && mb_strlen((string) $currencyCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        
        return $this;
    }
}
