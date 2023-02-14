<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRestrictionData StructType
 * Meta information extracted from the WSDL
 * - documentation: Restriction data
 * @subpackage Structs
 */
class TypeRestrictionData extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Implies a flat amount to be adjusted. Negative value implies a discount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - documentation: Implies an adjustment to be made on original price. Negative value implies a discount. | A percentage that can include up to two decimal places
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * @var string|null
     */
    protected ?string $Percentage = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * Constructor method for typeRestrictionData
     * @uses TypeRestrictionData::setAmount()
     * @uses TypeRestrictionData::setPercentage()
     * @uses TypeRestrictionData::setName()
     * @uses TypeRestrictionData::setValue()
     * @param string $amount
     * @param string $percentage
     * @param string $name
     * @param string $value
     */
    public function __construct(?string $amount = null, ?string $percentage = null, ?string $name = null, ?string $value = null)
    {
        $this
            ->setAmount($amount)
            ->setPercentage($percentage)
            ->setName($name)
            ->setValue($value);
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
     * @return \Travelport\Util\StructType\TypeRestrictionData
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Percentage value
     * @return string|null
     */
    public function getPercentage(): ?string
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param string $percentage
     * @return \Travelport\Util\StructType\TypeRestrictionData
     */
    public function setPercentage(?string $percentage = null): self
    {
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        // validation for constraint: pattern(([0-9]{1,2}|100)\.[0-9]{1,2})
        if (!is_null($percentage) && !preg_match('/([0-9]{1,2}|100)\\.[0-9]{1,2}/', $percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([0-9]{1,2}|100)\\.[0-9]{1,2}/', var_export($percentage, true)), __LINE__);
        }
        $this->Percentage = $percentage;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Util\StructType\TypeRestrictionData
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\Util\StructType\TypeRestrictionData
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
