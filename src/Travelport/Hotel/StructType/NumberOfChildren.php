<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public int $Count;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: The Ages of the Children. . The defined age of a Child traveler may vary by supplier, but is typically 1 to 17 years. Supported Providers 1G/1V.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var int[]
     */
    public ?array $Age = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Fee per child. Providers: 1g/1v | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
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
     * @return \Travelport\Hotel\StructType\NumberOfChildren
     */
    public function setCount(int $count): self
    {
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
     * Set Age value
     * @param int[] $age
     * @return \Travelport\Hotel\StructType\NumberOfChildren
     */
    public function setAge(?array $age = null): self
    {
        $this->Age = $age;
        
        return $this;
    }
    /**
     * Add item to Age value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Travelport\Hotel\StructType\NumberOfChildren
     */
    public function addToAge(int $item): self
    {
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
     * @return \Travelport\Hotel\StructType\NumberOfChildren
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
}
