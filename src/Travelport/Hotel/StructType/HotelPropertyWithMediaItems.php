<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public ?\Travelport\Hotel\StructType\HotelProperty $HotelProperty = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:MediaItem
     * @var \Travelport\Hotel\StructType\MediaItem[]
     */
    public ?array $MediaItem = null;
    /**
     * The MediaResultMessage
     * Meta information extracted from the WSDL
     * - documentation: Errors, Warnings and informational messages for the property referenced above.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeResultMessage[]
     */
    public ?array $MediaResultMessage = null;
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
     * Set MediaItem value
     * @param \Travelport\Hotel\StructType\MediaItem[] $mediaItem
     * @return \Travelport\Hotel\StructType\HotelPropertyWithMediaItems
     */
    public function setMediaItem(?array $mediaItem = null): self
    {
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
     * Set MediaResultMessage value
     * @param \Travelport\Hotel\StructType\TypeResultMessage[] $mediaResultMessage
     * @return \Travelport\Hotel\StructType\HotelPropertyWithMediaItems
     */
    public function setMediaResultMessage(?array $mediaResultMessage = null): self
    {
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
        $this->MediaResultMessage[] = $item;
        
        return $this;
    }
}
