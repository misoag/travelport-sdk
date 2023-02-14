<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyRateConversion StructType
 * Meta information extracted from the WSDL
 * - documentation: Currency rate conversion from the supplier’s source currency to a preferred currency. For hotels, applicable only to Hotel Super Shopper (1G/1V).
 * @subpackage Structs
 */
class CurrencyRateConversion extends AbstractStructBase
{
    /**
     * The RateConversion
     * Meta information extracted from the WSDL
     * - documentation: Rate multiplier from the supplier’s local or quoted currency to requested currency. Used to derive the requested conversion currency amount.
     * @var float|null
     */
    protected ?float $RateConversion = null;
    /**
     * The SourceCurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: 3-character ISO currency code for supplier's local or quoted currency. | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    protected ?string $SourceCurrencyCode = null;
    /**
     * The RequestedCurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: 3-character ISO currency code for the requester's preferred currency | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    protected ?string $RequestedCurrencyCode = null;
    /**
     * The DecimalPlaces
     * Meta information extracted from the WSDL
     * - documentation: The number of decimal places for the requested currency at conversion.
     * @var int|null
     */
    protected ?int $DecimalPlaces = null;
    /**
     * Constructor method for CurrencyRateConversion
     * @uses CurrencyRateConversion::setRateConversion()
     * @uses CurrencyRateConversion::setSourceCurrencyCode()
     * @uses CurrencyRateConversion::setRequestedCurrencyCode()
     * @uses CurrencyRateConversion::setDecimalPlaces()
     * @param float $rateConversion
     * @param string $sourceCurrencyCode
     * @param string $requestedCurrencyCode
     * @param int $decimalPlaces
     */
    public function __construct(?float $rateConversion = null, ?string $sourceCurrencyCode = null, ?string $requestedCurrencyCode = null, ?int $decimalPlaces = null)
    {
        $this
            ->setRateConversion($rateConversion)
            ->setSourceCurrencyCode($sourceCurrencyCode)
            ->setRequestedCurrencyCode($requestedCurrencyCode)
            ->setDecimalPlaces($decimalPlaces);
    }
    /**
     * Get RateConversion value
     * @return float|null
     */
    public function getRateConversion(): ?float
    {
        return $this->RateConversion;
    }
    /**
     * Set RateConversion value
     * @param float $rateConversion
     * @return \StructType\CurrencyRateConversion
     */
    public function setRateConversion(?float $rateConversion = null): self
    {
        // validation for constraint: float
        if (!is_null($rateConversion) && !(is_float($rateConversion) || is_numeric($rateConversion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rateConversion, true), gettype($rateConversion)), __LINE__);
        }
        $this->RateConversion = $rateConversion;
        
        return $this;
    }
    /**
     * Get SourceCurrencyCode value
     * @return string|null
     */
    public function getSourceCurrencyCode(): ?string
    {
        return $this->SourceCurrencyCode;
    }
    /**
     * Set SourceCurrencyCode value
     * @param string $sourceCurrencyCode
     * @return \StructType\CurrencyRateConversion
     */
    public function setSourceCurrencyCode(?string $sourceCurrencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceCurrencyCode) && !is_string($sourceCurrencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceCurrencyCode, true), gettype($sourceCurrencyCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($sourceCurrencyCode) && mb_strlen((string) $sourceCurrencyCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $sourceCurrencyCode)), __LINE__);
        }
        $this->SourceCurrencyCode = $sourceCurrencyCode;
        
        return $this;
    }
    /**
     * Get RequestedCurrencyCode value
     * @return string|null
     */
    public function getRequestedCurrencyCode(): ?string
    {
        return $this->RequestedCurrencyCode;
    }
    /**
     * Set RequestedCurrencyCode value
     * @param string $requestedCurrencyCode
     * @return \StructType\CurrencyRateConversion
     */
    public function setRequestedCurrencyCode(?string $requestedCurrencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($requestedCurrencyCode) && !is_string($requestedCurrencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestedCurrencyCode, true), gettype($requestedCurrencyCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($requestedCurrencyCode) && mb_strlen((string) $requestedCurrencyCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $requestedCurrencyCode)), __LINE__);
        }
        $this->RequestedCurrencyCode = $requestedCurrencyCode;
        
        return $this;
    }
    /**
     * Get DecimalPlaces value
     * @return int|null
     */
    public function getDecimalPlaces(): ?int
    {
        return $this->DecimalPlaces;
    }
    /**
     * Set DecimalPlaces value
     * @param int $decimalPlaces
     * @return \StructType\CurrencyRateConversion
     */
    public function setDecimalPlaces(?int $decimalPlaces = null): self
    {
        // validation for constraint: int
        if (!is_null($decimalPlaces) && !(is_int($decimalPlaces) || ctype_digit($decimalPlaces))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($decimalPlaces, true), gettype($decimalPlaces)), __LINE__);
        }
        $this->DecimalPlaces = $decimalPlaces;
        
        return $this;
    }
}
