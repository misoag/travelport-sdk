<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyConversion StructType
 * Meta information extracted from the WSDL
 * - documentation: Currency Conversion Entry Parameters
 * @subpackage Structs
 */
class CurrencyConversion extends AbstractStructBase
{
    /**
     * The From
     * Meta information extracted from the WSDL
     * - documentation: From Currency Value for the Conversion | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: required
     * @var string
     */
    protected string $From;
    /**
     * The To
     * Meta information extracted from the WSDL
     * - documentation: To Currency Value for the Conversion | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: required
     * @var string
     */
    protected string $To;
    /**
     * The OriginalAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount to be converted
     * - use: optional
     * @var float|null
     */
    protected ?float $OriginalAmount = null;
    /**
     * The ConvertedAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount after the convertion
     * - use: optional
     * @var float|null
     */
    protected ?float $ConvertedAmount = null;
    /**
     * The BankSellingRate
     * Meta information extracted from the WSDL
     * - documentation: Currency Conversion Rate
     * - use: optional
     * @var float|null
     */
    protected ?float $BankSellingRate = null;
    /**
     * Constructor method for CurrencyConversion
     * @uses CurrencyConversion::setFrom()
     * @uses CurrencyConversion::setTo()
     * @uses CurrencyConversion::setOriginalAmount()
     * @uses CurrencyConversion::setConvertedAmount()
     * @uses CurrencyConversion::setBankSellingRate()
     * @param string $from
     * @param string $to
     * @param float $originalAmount
     * @param float $convertedAmount
     * @param float $bankSellingRate
     */
    public function __construct(string $from, string $to, ?float $originalAmount = null, ?float $convertedAmount = null, ?float $bankSellingRate = null)
    {
        $this
            ->setFrom($from)
            ->setTo($to)
            ->setOriginalAmount($originalAmount)
            ->setConvertedAmount($convertedAmount)
            ->setBankSellingRate($bankSellingRate);
    }
    /**
     * Get From value
     * @return string
     */
    public function getFrom(): string
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \Travelport\Util\StructType\CurrencyConversion
     */
    public function setFrom(string $from): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($from) && mb_strlen((string) $from) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $from)), __LINE__);
        }
        $this->From = $from;
        
        return $this;
    }
    /**
     * Get To value
     * @return string
     */
    public function getTo(): string
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param string $to
     * @return \Travelport\Util\StructType\CurrencyConversion
     */
    public function setTo(string $to): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($to) && mb_strlen((string) $to) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $to)), __LINE__);
        }
        $this->To = $to;
        
        return $this;
    }
    /**
     * Get OriginalAmount value
     * @return float|null
     */
    public function getOriginalAmount(): ?float
    {
        return $this->OriginalAmount;
    }
    /**
     * Set OriginalAmount value
     * @param float $originalAmount
     * @return \Travelport\Util\StructType\CurrencyConversion
     */
    public function setOriginalAmount(?float $originalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalAmount) && !(is_float($originalAmount) || is_numeric($originalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalAmount, true), gettype($originalAmount)), __LINE__);
        }
        $this->OriginalAmount = $originalAmount;
        
        return $this;
    }
    /**
     * Get ConvertedAmount value
     * @return float|null
     */
    public function getConvertedAmount(): ?float
    {
        return $this->ConvertedAmount;
    }
    /**
     * Set ConvertedAmount value
     * @param float $convertedAmount
     * @return \Travelport\Util\StructType\CurrencyConversion
     */
    public function setConvertedAmount(?float $convertedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($convertedAmount) && !(is_float($convertedAmount) || is_numeric($convertedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($convertedAmount, true), gettype($convertedAmount)), __LINE__);
        }
        $this->ConvertedAmount = $convertedAmount;
        
        return $this;
    }
    /**
     * Get BankSellingRate value
     * @return float|null
     */
    public function getBankSellingRate(): ?float
    {
        return $this->BankSellingRate;
    }
    /**
     * Set BankSellingRate value
     * @param float $bankSellingRate
     * @return \Travelport\Util\StructType\CurrencyConversion
     */
    public function setBankSellingRate(?float $bankSellingRate = null): self
    {
        // validation for constraint: float
        if (!is_null($bankSellingRate) && !(is_float($bankSellingRate) || is_numeric($bankSellingRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bankSellingRate, true), gettype($bankSellingRate)), __LINE__);
        }
        $this->BankSellingRate = $bankSellingRate;
        
        return $this;
    }
}
