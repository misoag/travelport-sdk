<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountCard StructType
 * Meta information extracted from the WSDL
 * - documentation: Rail Discount Card Information
 * @subpackage Structs
 */
class DiscountCard extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 8.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 255.
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: Loyalty Card number with maximum length as 36.
     * - base: xs:string
     * - maxLength: 36
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Number = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for DiscountCard
     * @uses DiscountCard::setCode()
     * @uses DiscountCard::setKey()
     * @uses DiscountCard::setDescription()
     * @uses DiscountCard::setNumber()
     * @uses DiscountCard::setElStat()
     * @uses DiscountCard::setKeyOverride()
     * @param string $code
     * @param string $key
     * @param string $description
     * @param string $number
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $code, ?string $key = null, ?string $description = null, ?string $number = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setCode($code)
            ->setKey($key)
            ->setDescription($description)
            ->setNumber($number)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\Air\StructType\DiscountCard
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\DiscountCard
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\Air\StructType\DiscountCard
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\Air\StructType\DiscountCard
     */
    public function setNumber(?string $number = null): self
    {
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\Air\StructType\DiscountCard
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Air\StructType\DiscountCard
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
