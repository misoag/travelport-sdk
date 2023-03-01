<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelProperty $HotelProperty = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:MediaItem
     * @var \Travelport\UniversalRecord\StructType\MediaItem[]
     */
    public ?array $MediaItem = null;
    /**
     * The MediaResultMessage
     * Meta information extracted from the WSDL
     * - documentation: Errors, Warnings and informational messages for the property referenced above.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    public ?array $MediaResultMessage = null;
    /**
     * Constructor method for HotelPropertyWithMediaItems
     * @uses HotelPropertyWithMediaItems::setHotelProperty()
     * @uses HotelPropertyWithMediaItems::setMediaItem()
     * @uses HotelPropertyWithMediaItems::setMediaResultMessage()
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty
     * @param \Travelport\UniversalRecord\StructType\MediaItem[] $mediaItem
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $mediaResultMessage
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null, ?array $mediaItem = null, ?array $mediaResultMessage = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setMediaItem($mediaItem)
            ->setMediaResultMessage($mediaResultMessage);
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\UniversalRecord\StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\Travelport\UniversalRecord\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty
     * @return \Travelport\UniversalRecord\StructType\HotelPropertyWithMediaItems
     */
    public function setHotelProperty(?\Travelport\UniversalRecord\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
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
     * Set MediaItem value
     * @param \Travelport\UniversalRecord\StructType\MediaItem[] $mediaItem
     * @return \Travelport\UniversalRecord\StructType\HotelPropertyWithMediaItems
     */
    public function setMediaItem(?array $mediaItem = null): self
    {
        $this->MediaItem = $mediaItem;
        
        return $this;
    }
    /**
     * Add item to MediaItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\MediaItem $item
     * @return \Travelport\UniversalRecord\StructType\HotelPropertyWithMediaItems
     */
    public function addToMediaItem(\Travelport\UniversalRecord\StructType\MediaItem $item): self
    {
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
     * Set MediaResultMessage value
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $mediaResultMessage
     * @return \Travelport\UniversalRecord\StructType\HotelPropertyWithMediaItems
     */
    public function setMediaResultMessage(?array $mediaResultMessage = null): self
    {
        $this->MediaResultMessage = $mediaResultMessage;
        
        return $this;
    }
    /**
     * Add item to MediaResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $item
     * @return \Travelport\UniversalRecord\StructType\HotelPropertyWithMediaItems
     */
    public function addToMediaResultMessage(\Travelport\UniversalRecord\StructType\TypeResultMessage $item): self
    {
        $this->MediaResultMessage[] = $item;
        
        return $this;
    }
}
