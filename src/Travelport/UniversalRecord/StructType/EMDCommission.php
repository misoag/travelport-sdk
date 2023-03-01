<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDCommission StructType
 * Meta information extracted from the WSDL
 * - documentation: Commission information to be used for EMD issuance. Supported providers are 1V/1G/1P
 * @subpackage Structs
 */
class EMDCommission extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type of the commission applied.One of Amount/Percentage
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Value of the commission applied for EMD issuance.Could represent amount or percentage depending on the type
     * - use: required
     * @var float
     */
    public float $Value;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: Currency of the commission amount applied.Applicable only with type - Amount | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    public ?string $CurrencyCode = null;
    /**
     * Constructor method for EMDCommission
     * @uses EMDCommission::setType()
     * @uses EMDCommission::setValue()
     * @uses EMDCommission::setCurrencyCode()
     * @param string $type
     * @param float $value
     * @param string $currencyCode
     */
    public function __construct(string $type, float $value, ?string $currencyCode = null)
    {
        $this
            ->setType($type)
            ->setValue($value)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\EMDCommission
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Value value
     * @return float
     */
    public function getValue(): float
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Travelport\UniversalRecord\StructType\EMDCommission
     */
    public function setValue(float $value): self
    {
        $this->Value = $value;
        
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
     * @return \Travelport\UniversalRecord\StructType\EMDCommission
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        $this->CurrencyCode = $currencyCode;
        
        return $this;
    }
}
