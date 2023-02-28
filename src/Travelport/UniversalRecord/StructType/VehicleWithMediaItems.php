<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleWithMediaItems StructType
 * Meta information extracted from the WSDL
 * - documentation: Photos and other media urls for the item referenced above. | A container for displaying vehicle details,media urls and errors
 * @subpackage Structs
 */
class VehicleWithMediaItems extends AbstractStructBase
{
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - ref: Vehicle
     * @var \Travelport\UniversalRecord\StructType\Vehicle|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Vehicle $Vehicle = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:MediaItem
     * @var \Travelport\UniversalRecord\StructType\MediaItem[]
     */
    protected ?array $MediaItem = null;
    /**
     * The MediaResultMessage
     * Meta information extracted from the WSDL
     * - documentation: Errors, Warnings and informational messages for the property referenced above.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    protected ?array $MediaResultMessage = null;
    /**
     * Constructor method for VehicleWithMediaItems
     * @uses VehicleWithMediaItems::setVehicle()
     * @uses VehicleWithMediaItems::setMediaItem()
     * @uses VehicleWithMediaItems::setMediaResultMessage()
     * @param \Travelport\UniversalRecord\StructType\Vehicle $vehicle
     * @param \Travelport\UniversalRecord\StructType\MediaItem[] $mediaItem
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $mediaResultMessage
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Vehicle $vehicle = null, ?array $mediaItem = null, ?array $mediaResultMessage = null)
    {
        $this
            ->setVehicle($vehicle)
            ->setMediaItem($mediaItem)
            ->setMediaResultMessage($mediaResultMessage);
    }
    /**
     * Get Vehicle value
     * @return \Travelport\UniversalRecord\StructType\Vehicle|null
     */
    public function getVehicle(): ?\Travelport\UniversalRecord\StructType\Vehicle
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Travelport\UniversalRecord\StructType\Vehicle $vehicle
     * @return \Travelport\UniversalRecord\StructType\VehicleWithMediaItems
     */
    public function setVehicle(?\Travelport\UniversalRecord\StructType\Vehicle $vehicle = null): self
    {
        $this->Vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get MediaItem value
     * @return \Travelport\UniversalRecord\StructType\MediaItem[]
     */
    public function getMediaItem(): ?array
    {
        return $this->MediaItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMediaItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediaItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediaItemForArrayConstraintFromSetMediaItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleWithMediaItemsMediaItemItem) {
            // validation for constraint: itemType
            if (!$vehicleWithMediaItemsMediaItemItem instanceof \Travelport\UniversalRecord\StructType\MediaItem) {
                $invalidValues[] = is_object($vehicleWithMediaItemsMediaItemItem) ? get_class($vehicleWithMediaItemsMediaItemItem) : sprintf('%s(%s)', gettype($vehicleWithMediaItemsMediaItemItem), var_export($vehicleWithMediaItemsMediaItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediaItem property can only contain items of type \Travelport\UniversalRecord\StructType\MediaItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediaItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\MediaItem[] $mediaItem
     * @return \Travelport\UniversalRecord\StructType\VehicleWithMediaItems
     */
    public function setMediaItem(?array $mediaItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($mediaItemArrayErrorMessage = self::validateMediaItemForArrayConstraintFromSetMediaItem($mediaItem))) {
            throw new InvalidArgumentException($mediaItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($mediaItem) && count($mediaItem) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($mediaItem)), __LINE__);
        }
        $this->MediaItem = $mediaItem;
        
        return $this;
    }
    /**
     * Add item to MediaItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\MediaItem $item
     * @return \Travelport\UniversalRecord\StructType\VehicleWithMediaItems
     */
    public function addToMediaItem(\Travelport\UniversalRecord\StructType\MediaItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\MediaItem) {
            throw new InvalidArgumentException(sprintf('The MediaItem property can only contain items of type \Travelport\UniversalRecord\StructType\MediaItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MediaItem) && count($this->MediaItem) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MediaItem)), __LINE__);
        }
        $this->MediaItem[] = $item;
        
        return $this;
    }
    /**
     * Get MediaResultMessage value
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    public function getMediaResultMessage(): ?array
    {
        return $this->MediaResultMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMediaResultMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediaResultMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediaResultMessageForArrayConstraintFromSetMediaResultMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleWithMediaItemsMediaResultMessageItem) {
            // validation for constraint: itemType
            if (!$vehicleWithMediaItemsMediaResultMessageItem instanceof \Travelport\UniversalRecord\StructType\TypeResultMessage) {
                $invalidValues[] = is_object($vehicleWithMediaItemsMediaResultMessageItem) ? get_class($vehicleWithMediaItemsMediaResultMessageItem) : sprintf('%s(%s)', gettype($vehicleWithMediaItemsMediaResultMessageItem), var_export($vehicleWithMediaItemsMediaResultMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediaResultMessage property can only contain items of type \Travelport\UniversalRecord\StructType\TypeResultMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediaResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $mediaResultMessage
     * @return \Travelport\UniversalRecord\StructType\VehicleWithMediaItems
     */
    public function setMediaResultMessage(?array $mediaResultMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($mediaResultMessageArrayErrorMessage = self::validateMediaResultMessageForArrayConstraintFromSetMediaResultMessage($mediaResultMessage))) {
            throw new InvalidArgumentException($mediaResultMessageArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($mediaResultMessage) && count($mediaResultMessage) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($mediaResultMessage)), __LINE__);
        }
        $this->MediaResultMessage = $mediaResultMessage;
        
        return $this;
    }
    /**
     * Add item to MediaResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $item
     * @return \Travelport\UniversalRecord\StructType\VehicleWithMediaItems
     */
    public function addToMediaResultMessage(\Travelport\UniversalRecord\StructType\TypeResultMessage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeResultMessage) {
            throw new InvalidArgumentException(sprintf('The MediaResultMessage property can only contain items of type \Travelport\UniversalRecord\StructType\TypeResultMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MediaResultMessage) && count($this->MediaResultMessage) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MediaResultMessage)), __LINE__);
        }
        $this->MediaResultMessage[] = $item;
        
        return $this;
    }
}
