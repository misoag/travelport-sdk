<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsUsed StructType
 * Meta information extracted from the WSDL
 * - documentation: Traveler pre pay credit detail
 * @subpackage Structs
 */
class CreditsUsed extends AbstractStructBase
{
    /**
     * The UsedCredit
     * @var float|null
     */
    public ?float $UsedCredit = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    public ?string $CurrencyCode = null;
    /**
     * Constructor method for CreditsUsed
     * @uses CreditsUsed::setUsedCredit()
     * @uses CreditsUsed::setCurrencyCode()
     * @param float $usedCredit
     * @param string $currencyCode
     */
    public function __construct(?float $usedCredit = null, ?string $currencyCode = null)
    {
        $this
            ->setUsedCredit($usedCredit)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get UsedCredit value
     * @return float|null
     */
    public function getUsedCredit(): ?float
    {
        return $this->UsedCredit;
    }
    /**
     * Set UsedCredit value
     * @param float $usedCredit
     * @return \Travelport\Air\StructType\CreditsUsed
     */
    public function setUsedCredit(?float $usedCredit = null): self
    {
        $this->UsedCredit = $usedCredit;
        
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
     * @return \Travelport\Air\StructType\CreditsUsed
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        $this->CurrencyCode = $currencyCode;
        
        return $this;
    }
}
