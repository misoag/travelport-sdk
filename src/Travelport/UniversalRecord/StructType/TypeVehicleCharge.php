<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Category;
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
    protected ?string $Amount = null;
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
    protected ?string $Percentage = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Identifies the type of charge information for the category. For 1P , when category is “Special”, Name attribute will have Special Equipment code enumeration, which can be used in booking vehicle on 1P host.
     * - use: optional
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Special Equipment Charge description text of the rental charge. 1P only.
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The IncludedInRate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $IncludedInRate = null;
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
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return isset($this->Amount) ? $this->Amount : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAmount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAmount method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAmountForChoiceConstraintsFromSetAmount($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Percentage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Amount can\'t be set as the property %s is already set. Only one property must be set among these properties: Amount, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Amount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleCharge
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        // validation for constraint: choice(Amount, Percentage)
        if ('' !== ($amountChoiceErrorMessage = self::validateAmountForChoiceConstraintsFromSetAmount($amount))) {
            throw new InvalidArgumentException($amountChoiceErrorMessage, __LINE__);
        }
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
        return isset($this->Percentage) ? $this->Percentage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPercentage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPercentage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePercentageForChoiceConstraintsFromSetPercentage($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Amount',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Percentage can\'t be set as the property %s is already set. Only one property must be set among these properties: Percentage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Percentage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $percentage
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleCharge
     */
    public function setPercentage(?string $percentage = null): self
    {
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        // validation for constraint: choice(Amount, Percentage)
        if ('' !== ($percentageChoiceErrorMessage = self::validatePercentageForChoiceConstraintsFromSetPercentage($percentage))) {
            throw new InvalidArgumentException($percentageChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: pattern(([0-9]{1,2}|100)\.[0-9]{1,2})
        if (!is_null($percentage) && !preg_match('/([0-9]{1,2}|100)\\.[0-9]{1,2}/', $percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([0-9]{1,2}|100)\\.[0-9]{1,2}/', var_export($percentage, true)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($includedInRate) && !is_string($includedInRate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($includedInRate, true), gettype($includedInRate)), __LINE__);
        }
        $this->IncludedInRate = $includedInRate;
        
        return $this;
    }
}
