<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomCapacity StructType
 * Meta information extracted from the WSDL
 * - documentation: The maximum number of guests for a room or for each room in a package.
 * @subpackage Structs
 */
class RoomCapacity extends AbstractStructBase
{
    /**
     * The Capacity
     * Meta information extracted from the WSDL
     * - documentation: The maximum number of guests per room.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $Capacity = null;
    /**
     * The IsPackage
     * Meta information extracted from the WSDL
     * - documentation: If true, the rooms are offered as a package by the aggregator.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsPackage = null;
    /**
     * Constructor method for RoomCapacity
     * @uses RoomCapacity::setCapacity()
     * @uses RoomCapacity::setIsPackage()
     * @param int[] $capacity
     * @param bool $isPackage
     */
    public function __construct(?array $capacity = null, ?bool $isPackage = null)
    {
        $this
            ->setCapacity($capacity)
            ->setIsPackage($isPackage);
    }
    /**
     * Get Capacity value
     * @return int[]
     */
    public function getCapacity(): ?array
    {
        return $this->Capacity;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCapacity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCapacity method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCapacityForArrayConstraintFromSetCapacity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $roomCapacityCapacityItem) {
            // validation for constraint: itemType
            if (!(is_int($roomCapacityCapacityItem) || ctype_digit($roomCapacityCapacityItem))) {
                $invalidValues[] = is_object($roomCapacityCapacityItem) ? get_class($roomCapacityCapacityItem) : sprintf('%s(%s)', gettype($roomCapacityCapacityItem), var_export($roomCapacityCapacityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Capacity property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Capacity value
     * @throws InvalidArgumentException
     * @param int[] $capacity
     * @return \Travelport\Hotel\StructType\RoomCapacity
     */
    public function setCapacity(?array $capacity = null): self
    {
        // validation for constraint: array
        if ('' !== ($capacityArrayErrorMessage = self::validateCapacityForArrayConstraintFromSetCapacity($capacity))) {
            throw new InvalidArgumentException($capacityArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($capacity) && count($capacity) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($capacity)), __LINE__);
        }
        $this->Capacity = $capacity;
        
        return $this;
    }
    /**
     * Add item to Capacity value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Travelport\Hotel\StructType\RoomCapacity
     */
    public function addToCapacity(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The Capacity property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Capacity) && count($this->Capacity) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Capacity)), __LINE__);
        }
        $this->Capacity[] = $item;
        
        return $this;
    }
    /**
     * Get IsPackage value
     * @return bool|null
     */
    public function getIsPackage(): ?bool
    {
        return $this->IsPackage;
    }
    /**
     * Set IsPackage value
     * @param bool $isPackage
     * @return \Travelport\Hotel\StructType\RoomCapacity
     */
    public function setIsPackage(?bool $isPackage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPackage) && !is_bool($isPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPackage, true), gettype($isPackage)), __LINE__);
        }
        $this->IsPackage = $isPackage;
        
        return $this;
    }
}
