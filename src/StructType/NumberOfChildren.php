<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberOfChildren StructType
 * Meta information extracted from the WSDL
 * - documentation: Number of Children
 * @subpackage Structs
 */
class NumberOfChildren extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: The total number of children in the booking. Supported Providers 1P.
     * - use: required
     * @var int
     */
    protected int $Count;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: The Ages of the Children. . The defined age of a Child traveler may vary by supplier, but is typically 1 to 17 years. Supported Providers 1G/1V.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $Age = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Fee per child. Providers: 1g/1v | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * Constructor method for NumberOfChildren
     * @uses NumberOfChildren::setCount()
     * @uses NumberOfChildren::setAge()
     * @uses NumberOfChildren::setAmount()
     * @param int $count
     * @param int[] $age
     * @param string $amount
     */
    public function __construct(int $count, ?array $age = null, ?string $amount = null)
    {
        $this
            ->setCount($count)
            ->setAge($age)
            ->setAmount($amount);
    }
    /**
     * Get Count value
     * @return int
     */
    public function getCount(): int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\NumberOfChildren
     */
    public function setCount(int $count): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get Age value
     * @return int[]
     */
    public function getAge(): ?array
    {
        return $this->Age;
    }
    /**
     * This method is responsible for validating the values passed to the setAge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAgeForArrayConstraintsFromSetAge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $numberOfChildrenAgeItem) {
            // validation for constraint: itemType
            if (!(is_int($numberOfChildrenAgeItem) || ctype_digit($numberOfChildrenAgeItem))) {
                $invalidValues[] = is_object($numberOfChildrenAgeItem) ? get_class($numberOfChildrenAgeItem) : sprintf('%s(%s)', gettype($numberOfChildrenAgeItem), var_export($numberOfChildrenAgeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Age property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Age value
     * @throws InvalidArgumentException
     * @param int[] $age
     * @return \StructType\NumberOfChildren
     */
    public function setAge(?array $age = null): self
    {
        // validation for constraint: array
        if ('' !== ($ageArrayErrorMessage = self::validateAgeForArrayConstraintsFromSetAge($age))) {
            throw new InvalidArgumentException($ageArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($age) && count($age) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($age)), __LINE__);
        }
        $this->Age = $age;
        
        return $this;
    }
    /**
     * Add item to Age value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \StructType\NumberOfChildren
     */
    public function addToAge(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The Age property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Age) && count($this->Age) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Age)), __LINE__);
        }
        $this->Age[] = $item;
        
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
     * @return \StructType\NumberOfChildren
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
}
