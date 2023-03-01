<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?string $Amount = null;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - documentation: Implies an adjustment to be made on original price. Negative value implies a discount. | A percentage that can include up to two decimal places
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * @var string|null
     */
    public ?string $Percentage = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Value = null;
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
     * @return \Travelport\Air\StructType\TypeRestrictionData
     */
    public function setAmount(?string $amount = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeRestrictionData
     */
    public function setPercentage(?string $percentage = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeRestrictionData
     */
    public function setName(?string $name = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeRestrictionData
     */
    public function setValue(?string $value = null): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
