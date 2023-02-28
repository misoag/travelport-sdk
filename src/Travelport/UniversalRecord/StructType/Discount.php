<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Discount StructType
 * Meta information extracted from the WSDL
 * - documentation: Cruise Discount Amount. | Discount information specific to the fare component
 * @subpackage Structs
 */
class Discount extends AbstractStructBase
{
    /**
     * The DiscountCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 1
     * - ref: common:DiscountCard
     * @var \Travelport\UniversalRecord\StructType\DiscountCard[]
     */
    protected array $DiscountCard;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount of Discount | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Amount;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Text explaining discount amount | Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * Constructor method for Discount
     * @uses Discount::setDiscountCard()
     * @uses Discount::setAmount()
     * @uses Discount::setKey()
     * @uses Discount::setDescription()
     * @param \Travelport\UniversalRecord\StructType\DiscountCard[] $discountCard
     * @param string $amount
     * @param string $key
     * @param string $description
     */
    public function __construct(array $discountCard, string $amount, ?string $key = null, ?string $description = null)
    {
        $this
            ->setDiscountCard($discountCard)
            ->setAmount($amount)
            ->setKey($key)
            ->setDescription($description);
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\UniversalRecord\StructType\DiscountCard[]
     */
    public function getDiscountCard(): array
    {
        return $this->DiscountCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDiscountCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountCardForArrayConstraintFromSetDiscountCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $discountDiscountCardItem) {
            // validation for constraint: itemType
            if (!$discountDiscountCardItem instanceof \Travelport\UniversalRecord\StructType\DiscountCard) {
                $invalidValues[] = is_object($discountDiscountCardItem) ? get_class($discountDiscountCardItem) : sprintf('%s(%s)', gettype($discountDiscountCardItem), var_export($discountDiscountCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscountCard property can only contain items of type \Travelport\UniversalRecord\StructType\DiscountCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DiscountCard[] $discountCard
     * @return \Travelport\UniversalRecord\StructType\Discount
     */
    public function setDiscountCard(array $discountCard): self
    {
        // validation for constraint: array
        if ('' !== ($discountCardArrayErrorMessage = self::validateDiscountCardForArrayConstraintFromSetDiscountCard($discountCard))) {
            throw new InvalidArgumentException($discountCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($discountCard) && count($discountCard) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($discountCard)), __LINE__);
        }
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Add item to DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DiscountCard $item
     * @return \Travelport\UniversalRecord\StructType\Discount
     */
    public function addToDiscountCard(\Travelport\UniversalRecord\StructType\DiscountCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\DiscountCard) {
            throw new InvalidArgumentException(sprintf('The DiscountCard property can only contain items of type \Travelport\UniversalRecord\StructType\DiscountCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->DiscountCard) && count($this->DiscountCard) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->DiscountCard)), __LINE__);
        }
        $this->DiscountCard[] = $item;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\Discount
     */
    public function setAmount(string $amount): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
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
     * @return \Travelport\UniversalRecord\StructType\Discount
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\Discount
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        // validation for constraint: maxLength(13)
        if (!is_null($description) && mb_strlen((string) $description) > 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 13', mb_strlen((string) $description)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($description) && mb_strlen((string) $description) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
}
