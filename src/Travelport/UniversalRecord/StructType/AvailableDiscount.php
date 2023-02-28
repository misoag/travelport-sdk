<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableDiscount StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer Loyalty Program Detail.
 * @subpackage Structs
 */
class AvailableDiscount extends AbstractStructBase
{
    /**
     * The LoyaltyProgram
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyProgram
     * @var \Travelport\UniversalRecord\StructType\LoyaltyProgram[]
     */
    protected ?array $LoyaltyProgram = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: A percentage that can include up to two decimal places
     * - base: xs:string
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * - use: optional
     * @var string|null
     */
    protected ?string $Percent = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The DiscountQualifier
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DiscountQualifier = null;
    /**
     * Constructor method for AvailableDiscount
     * @uses AvailableDiscount::setLoyaltyProgram()
     * @uses AvailableDiscount::setAmount()
     * @uses AvailableDiscount::setPercent()
     * @uses AvailableDiscount::setDescription()
     * @uses AvailableDiscount::setDiscountQualifier()
     * @param \Travelport\UniversalRecord\StructType\LoyaltyProgram[] $loyaltyProgram
     * @param string $amount
     * @param string $percent
     * @param string $description
     * @param string $discountQualifier
     */
    public function __construct(?array $loyaltyProgram = null, ?string $amount = null, ?string $percent = null, ?string $description = null, ?string $discountQualifier = null)
    {
        $this
            ->setLoyaltyProgram($loyaltyProgram)
            ->setAmount($amount)
            ->setPercent($percent)
            ->setDescription($description)
            ->setDiscountQualifier($discountQualifier);
    }
    /**
     * Get LoyaltyProgram value
     * @return \Travelport\UniversalRecord\StructType\LoyaltyProgram[]
     */
    public function getLoyaltyProgram(): ?array
    {
        return $this->LoyaltyProgram;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLoyaltyProgram method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyProgram method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyProgramForArrayConstraintFromSetLoyaltyProgram(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $availableDiscountLoyaltyProgramItem) {
            // validation for constraint: itemType
            if (!$availableDiscountLoyaltyProgramItem instanceof \Travelport\UniversalRecord\StructType\LoyaltyProgram) {
                $invalidValues[] = is_object($availableDiscountLoyaltyProgramItem) ? get_class($availableDiscountLoyaltyProgramItem) : sprintf('%s(%s)', gettype($availableDiscountLoyaltyProgramItem), var_export($availableDiscountLoyaltyProgramItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyProgram property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyProgram, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LoyaltyProgram value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyProgram[] $loyaltyProgram
     * @return \Travelport\UniversalRecord\StructType\AvailableDiscount
     */
    public function setLoyaltyProgram(?array $loyaltyProgram = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyProgramArrayErrorMessage = self::validateLoyaltyProgramForArrayConstraintFromSetLoyaltyProgram($loyaltyProgram))) {
            throw new InvalidArgumentException($loyaltyProgramArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($loyaltyProgram) && count($loyaltyProgram) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($loyaltyProgram)), __LINE__);
        }
        $this->LoyaltyProgram = $loyaltyProgram;
        
        return $this;
    }
    /**
     * Add item to LoyaltyProgram value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyProgram $item
     * @return \Travelport\UniversalRecord\StructType\AvailableDiscount
     */
    public function addToLoyaltyProgram(\Travelport\UniversalRecord\StructType\LoyaltyProgram $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LoyaltyProgram) {
            throw new InvalidArgumentException(sprintf('The LoyaltyProgram property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyProgram, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LoyaltyProgram) && count($this->LoyaltyProgram) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LoyaltyProgram)), __LINE__);
        }
        $this->LoyaltyProgram[] = $item;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\AvailableDiscount
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
     * Get Percent value
     * @return string|null
     */
    public function getPercent(): ?string
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Travelport\UniversalRecord\StructType\AvailableDiscount
     */
    public function setPercent(?string $percent = null): self
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        // validation for constraint: pattern(([0-9]{1,2}|100)\.[0-9]{1,2})
        if (!is_null($percent) && !preg_match('/([0-9]{1,2}|100)\\.[0-9]{1,2}/', $percent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([0-9]{1,2}|100)\\.[0-9]{1,2}/', var_export($percent, true)), __LINE__);
        }
        $this->Percent = $percent;
        
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
     * @return \Travelport\UniversalRecord\StructType\AvailableDiscount
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
     * Get DiscountQualifier value
     * @return string|null
     */
    public function getDiscountQualifier(): ?string
    {
        return $this->DiscountQualifier;
    }
    /**
     * Set DiscountQualifier value
     * @param string $discountQualifier
     * @return \Travelport\UniversalRecord\StructType\AvailableDiscount
     */
    public function setDiscountQualifier(?string $discountQualifier = null): self
    {
        // validation for constraint: string
        if (!is_null($discountQualifier) && !is_string($discountQualifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountQualifier, true), gettype($discountQualifier)), __LINE__);
        }
        $this->DiscountQualifier = $discountQualifier;
        
        return $this;
    }
}
