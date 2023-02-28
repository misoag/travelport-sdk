<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelPropertyWithMediaItems StructType
 * Meta information extracted from the WSDL
 * - documentation: Photos and other media urls for the item referenced above.
 * @subpackage Structs
 */
class HotelPropertyWithMediaItems extends AbstractStructBase
{
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - ref: HotelProperty
     * @var \Travelport\Hotel\StructType\HotelProperty|null
     */
    protected ?\Travelport\Hotel\StructType\HotelProperty $HotelProperty = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:MediaItem
     * @var \Travelport\Hotel\StructType\MediaItem[]
     */
    protected ?array $MediaItem = null;
    /**
     * The MediaResultMessage
     * Meta information extracted from the WSDL
     * - documentation: Errors, Warnings and informational messages for the property referenced above.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeResultMessage[]
     */
    protected ?array $MediaResultMessage = null;
    /**
     * Constructor method for HotelPropertyWithMediaItems
     * @uses HotelPropertyWithMediaItems::setHotelProperty()
     * @uses HotelPropertyWithMediaItems::setMediaItem()
     * @uses HotelPropertyWithMediaItems::setMediaResultMessage()
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @param \Travelport\Hotel\StructType\MediaItem[] $mediaItem
     * @param \Travelport\Hotel\StructType\TypeResultMessage[] $mediaResultMessage
     */
    public function __construct(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null, ?array $mediaItem = null, ?array $mediaResultMessage = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setMediaItem($mediaItem)
            ->setMediaResultMessage($mediaResultMessage);
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\Hotel\StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\Travelport\Hotel\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @return \Travelport\Hotel\StructType\HotelPropertyWithMediaItems
     */
    public function setHotelProperty(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get MediaItem value
     * @return \Travelport\Hotel\StructType\MediaItem[]
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
        foreach ($values as $hotelPropertyWithMediaItemsMediaItemItem) {
            // validation for constraint: itemType
            if (!$hotelPropertyWithMediaItemsMediaItemItem instanceof \Travelport\Hotel\StructType\MediaItem) {
                $invalidValues[] = is_object($hotelPropertyWithMediaItemsMediaItemItem) ? get_class($hotelPropertyWithMediaItemsMediaItemItem) : sprintf('%s(%s)', gettype($hotelPropertyWithMediaItemsMediaItemItem), var_export($hotelPropertyWithMediaItemsMediaItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediaItem property can only contain items of type \Travelport\Hotel\StructType\MediaItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediaItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\MediaItem[] $mediaItem
     * @return \Travelport\Hotel\StructType\HotelPropertyWithMediaItems
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
     * @param \Travelport\Hotel\StructType\MediaItem $item
     * @return \Travelport\Hotel\StructType\HotelPropertyWithMediaItems
     */
    public function addToMediaItem(\Travelport\Hotel\StructType\MediaItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\MediaItem) {
            throw new InvalidArgumentException(sprintf('The MediaItem property can only contain items of type \Travelport\Hotel\StructType\MediaItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Hotel\StructType\TypeResultMessage[]
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
        foreach ($values as $hotelPropertyWithMediaItemsMediaResultMessageItem) {
            // validation for constraint: itemType
            if (!$hotelPropertyWithMediaItemsMediaResultMessageItem instanceof \Travelport\Hotel\StructType\TypeResultMessage) {
                $invalidValues[] = is_object($hotelPropertyWithMediaItemsMediaResultMessageItem) ? get_class($hotelPropertyWithMediaItemsMediaResultMessageItem) : sprintf('%s(%s)', gettype($hotelPropertyWithMediaItemsMediaResultMessageItem), var_export($hotelPropertyWithMediaItemsMediaResultMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediaResultMessage property can only contain items of type \Travelport\Hotel\StructType\TypeResultMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediaResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeResultMessage[] $mediaResultMessage
     * @return \Travelport\Hotel\StructType\HotelPropertyWithMediaItems
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
     * @param \Travelport\Hotel\StructType\TypeResultMessage $item
     * @return \Travelport\Hotel\StructType\HotelPropertyWithMediaItems
     */
    public function addToMediaResultMessage(\Travelport\Hotel\StructType\TypeResultMessage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\TypeResultMessage) {
            throw new InvalidArgumentException(sprintf('The MediaResultMessage property can only contain items of type \Travelport\Hotel\StructType\TypeResultMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MediaResultMessage) && count($this->MediaResultMessage) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MediaResultMessage)), __LINE__);
        }
        $this->MediaResultMessage[] = $item;
        
        return $this;
    }
}
