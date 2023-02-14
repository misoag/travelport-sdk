<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeAdaptedRoomGuestAllocation StructType
 * Meta information extracted from the WSDL
 * - documentation: The allocation of guests per room assigned by the aggregator or supplier (hotel property). Returned only when the requested guest allocation is different from the provider or supplier’s adapted guest allocation.
 * @subpackage Structs
 */
class TypeAdaptedRoomGuestAllocation extends AbstractStructBase
{
    /**
     * The Child
     * Meta information extracted from the WSDL
     * - documentation: Information about a child guest.
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var \StructType\TypeGuestChildInformation[]
     */
    protected ?array $Child = null;
    /**
     * The NumberOfAdults
     * Meta information extracted from the WSDL
     * - documentation: The number of adult guests per room. Maximum number of adults may vary by supplier or aggregator.
     * @var int|null
     */
    protected ?int $NumberOfAdults = null;
    /**
     * Constructor method for typeAdaptedRoomGuestAllocation
     * @uses TypeAdaptedRoomGuestAllocation::setChild()
     * @uses TypeAdaptedRoomGuestAllocation::setNumberOfAdults()
     * @param \StructType\TypeGuestChildInformation[] $child
     * @param int $numberOfAdults
     */
    public function __construct(?array $child = null, ?int $numberOfAdults = null)
    {
        $this
            ->setChild($child)
            ->setNumberOfAdults($numberOfAdults);
    }
    /**
     * Get Child value
     * @return \StructType\TypeGuestChildInformation[]
     */
    public function getChild(): ?array
    {
        return $this->Child;
    }
    /**
     * This method is responsible for validating the values passed to the setChild method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChild method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildForArrayConstraintsFromSetChild(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeAdaptedRoomGuestAllocationChildItem) {
            // validation for constraint: itemType
            if (!$typeAdaptedRoomGuestAllocationChildItem instanceof \StructType\TypeGuestChildInformation) {
                $invalidValues[] = is_object($typeAdaptedRoomGuestAllocationChildItem) ? get_class($typeAdaptedRoomGuestAllocationChildItem) : sprintf('%s(%s)', gettype($typeAdaptedRoomGuestAllocationChildItem), var_export($typeAdaptedRoomGuestAllocationChildItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Child property can only contain items of type \StructType\TypeGuestChildInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Child value
     * @throws InvalidArgumentException
     * @param \StructType\TypeGuestChildInformation[] $child
     * @return \StructType\TypeAdaptedRoomGuestAllocation
     */
    public function setChild(?array $child = null): self
    {
        // validation for constraint: array
        if ('' !== ($childArrayErrorMessage = self::validateChildForArrayConstraintsFromSetChild($child))) {
            throw new InvalidArgumentException($childArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($child) && count($child) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 6', count($child)), __LINE__);
        }
        $this->Child = $child;
        
        return $this;
    }
    /**
     * Add item to Child value
     * @throws InvalidArgumentException
     * @param \StructType\TypeGuestChildInformation $item
     * @return \StructType\TypeAdaptedRoomGuestAllocation
     */
    public function addToChild(\StructType\TypeGuestChildInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TypeGuestChildInformation) {
            throw new InvalidArgumentException(sprintf('The Child property can only contain items of type \StructType\TypeGuestChildInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($this->Child) && count($this->Child) >= 6) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 6', count($this->Child)), __LINE__);
        }
        $this->Child[] = $item;
        
        return $this;
    }
    /**
     * Get NumberOfAdults value
     * @return int|null
     */
    public function getNumberOfAdults(): ?int
    {
        return $this->NumberOfAdults;
    }
    /**
     * Set NumberOfAdults value
     * @param int $numberOfAdults
     * @return \StructType\TypeAdaptedRoomGuestAllocation
     */
    public function setNumberOfAdults(?int $numberOfAdults = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfAdults) && !(is_int($numberOfAdults) || ctype_digit($numberOfAdults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfAdults, true), gettype($numberOfAdults)), __LINE__);
        }
        $this->NumberOfAdults = $numberOfAdults;
        
        return $this;
    }
}
