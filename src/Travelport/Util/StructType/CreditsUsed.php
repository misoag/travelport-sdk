<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?float $UsedCredit = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
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
     * @return \Travelport\Util\StructType\CreditsUsed
     */
    public function setUsedCredit(?float $usedCredit = null): self
    {
        // validation for constraint: float
        if (!is_null($usedCredit) && !(is_float($usedCredit) || is_numeric($usedCredit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($usedCredit, true), gettype($usedCredit)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\CreditsUsed
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
