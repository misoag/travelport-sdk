<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdaptedRoomGuestAllocation StructType
 * Meta information extracted from the WSDL
 * - documentation: This element defines how the aggregators or hotel property have allocated the guests to the rooms. Only displayed when Requested guest allocation is different from the Adapted room guest allocation.
 * - minOccurs: 0
 * @subpackage Structs
 */
class AdaptedRoomGuestAllocation extends AbstractStructBase
{
    /**
     * The Room
     * Meta information extracted from the WSDL
     * - documentation: Individual room. Multiple occurrences if there are multiple rooms in the request. Maximum number of rooms may vary by supplier or aggregator.
     * - maxOccurs: 9
     * @var \StructType\TypeAdaptedRoomGuestAllocation[]
     */
    protected ?array $Room = null;
    /**
     * Constructor method for AdaptedRoomGuestAllocation
     * @uses AdaptedRoomGuestAllocation::setRoom()
     * @param \StructType\TypeAdaptedRoomGuestAllocation[] $room
     */
    public function __construct(?array $room = null)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get Room value
     * @return \StructType\TypeAdaptedRoomGuestAllocation[]
     */
    public function getRoom(): ?array
    {
        return $this->Room;
    }
    /**
     * This method is responsible for validating the values passed to the setRoom method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoom method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomForArrayConstraintsFromSetRoom(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $adaptedRoomGuestAllocationRoomItem) {
            // validation for constraint: itemType
            if (!$adaptedRoomGuestAllocationRoomItem instanceof \StructType\TypeAdaptedRoomGuestAllocation) {
                $invalidValues[] = is_object($adaptedRoomGuestAllocationRoomItem) ? get_class($adaptedRoomGuestAllocationRoomItem) : sprintf('%s(%s)', gettype($adaptedRoomGuestAllocationRoomItem), var_export($adaptedRoomGuestAllocationRoomItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Room property can only contain items of type \StructType\TypeAdaptedRoomGuestAllocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Room value
     * @throws InvalidArgumentException
     * @param \StructType\TypeAdaptedRoomGuestAllocation[] $room
     * @return \StructType\AdaptedRoomGuestAllocation
     */
    public function setRoom(?array $room = null): self
    {
        // validation for constraint: array
        if ('' !== ($roomArrayErrorMessage = self::validateRoomForArrayConstraintsFromSetRoom($room))) {
            throw new InvalidArgumentException($roomArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($room) && count($room) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($room)), __LINE__);
        }
        $this->Room = $room;
        
        return $this;
    }
    /**
     * Add item to Room value
     * @throws InvalidArgumentException
     * @param \StructType\TypeAdaptedRoomGuestAllocation $item
     * @return \StructType\AdaptedRoomGuestAllocation
     */
    public function addToRoom(\StructType\TypeAdaptedRoomGuestAllocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TypeAdaptedRoomGuestAllocation) {
            throw new InvalidArgumentException(sprintf('The Room property can only contain items of type \StructType\TypeAdaptedRoomGuestAllocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->Room) && count($this->Room) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->Room)), __LINE__);
        }
        $this->Room[] = $item;
        
        return $this;
    }
}