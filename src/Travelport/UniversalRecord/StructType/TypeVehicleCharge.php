<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeVehicleCharge StructType
 * Meta information extracted from the WSDL
 * - documentation: Charges associated with a vehicle rental.
 * @subpackage Structs
 */
class TypeVehicleCharge extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: The type of charge information for the vehicle rental.
     * - use: required
     * @var string
     */
    public string $Category;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount of the charge. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - choice: Amount | Percentage
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - documentation: The amount of the charge in percentage. | A percentage that can include up to two decimal places
     * - base: xs:string
     * - choice: Amount | Percentage
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * @var string|null
     */
    public ?string $Percentage = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Identifies the type of charge information for the category. For 1P , when category is “Special”, Name attribute will have Special Equipment code enumeration, which can be used in booking vehicle on 1P host.
     * - use: optional
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Special Equipment Charge description text of the rental charge. 1P only.
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The IncludedInRate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $IncludedInRate = null;
    /**
     * Constructor method for typeVehicleCharge
     * @uses TypeVehicleCharge::setCategory()
     * @uses TypeVehicleCharge::setAmount()
     * @uses TypeVehicleCharge::setPercentage()
     * @uses TypeVehicleCharge::setName()
     * @uses TypeVehicleCharge::setDescription()
     * @uses TypeVehicleCharge::setType()
     * @uses TypeVehicleCharge::setIncludedInRate()
     * @param string $category
     * @param string $amount
     * @param string $percentage
     * @param string $name
     * @param string $description
     * @param string $type
     * @param string $includedInRate
     */
    public function __construct(string $category, ?string $amount = null, ?string $percentage = null, ?string $name = null, ?string $description = null, ?string $type = null, ?string $includedInRate = null)
    {
        $this
            ->setCategory($category)
            ->setAmount($amount)
            ->setPercentage($percentage)
            ->setName($name)
            ->setDescription($description)
            ->setType($type)
            ->setIncludedInRate($includedInRate);
    }
    /**
     * Get Category value
     * @return string
     */
    public function getCategory(): string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleCharge
     */
    public function setCategory(string $category): self
    {
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount ?? null;
    }
    /**
     * Set Amount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleCharge
     */
    public function setAmount(?string $amount = null): self
    {
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->Amount);
        } else {
            $this->Amount = $amount;
        }
        
        return $this;
    }
    /**
     * Get Percentage value
     * @return string|null
     */
    public function getPercentage(): ?string
    {
        return $this->Percentage ?? null;
    }
    /**
     * Set Percentage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $percentage
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleCharge
     */
    public function setPercentage(?string $percentage = null): self
    {
        if (is_null($percentage) || (is_array($percentage) && empty($percentage))) {
            unset($this->Percentage);
        } else {
            $this->Percentage = $percentage;
        }
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleCharge
     */
    public function setName(?string $name = null): self
    {
        $this->Name = $name;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleCharge
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleCharge
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get IncludedInRate value
     * @return string|null
     */
    public function getIncludedInRate(): ?string
    {
        return $this->IncludedInRate;
    }
    /**
     * Set IncludedInRate value
     * @param string $includedInRate
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleCharge
     */
    public function setIncludedInRate(?string $includedInRate = null): self
    {
        $this->IncludedInRate = $includedInRate;
        
        return $this;
    }
}
