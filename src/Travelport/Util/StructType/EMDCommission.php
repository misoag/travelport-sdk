<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Type;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Value of the commission applied for EMD issuance.Could represent amount or percentage depending on the type
     * - use: required
     * @var float
     */
    protected float $Value;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: Currency of the commission amount applied.Applicable only with type - Amount | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
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
     * @uses \Travelport\Util\EnumType\TypeAdjustmentType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeAdjustmentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\Util\StructType\EMDCommission
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeAdjustmentType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeAdjustmentType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\Util\EnumType\TypeAdjustmentType::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\EMDCommission
     */
    public function setValue(float $value): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\EMDCommission
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
