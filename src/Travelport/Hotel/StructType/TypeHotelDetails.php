<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeHotelDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns hotel rate details during the stay if rates are available for requested property | Hotel Details Type.
 * @subpackage Structs
 */
class TypeHotelDetails extends AbstractStructBase
{
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - ref: HotelProperty
     * @var \Travelport\Hotel\StructType\HotelProperty|null
     */
    public ?\Travelport\Hotel\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelDetailItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelDetailItem
     * @var \Travelport\Hotel\StructType\HotelDetailItem[]
     */
    public ?array $HotelDetailItem = null;
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRateDetail
     * @var \Travelport\Hotel\StructType\HotelRateDetail[]
     */
    public ?array $HotelRateDetail = null;
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
     * Constructor method for typeHotelDetails
     * @uses TypeHotelDetails::setHotelProperty()
     * @uses TypeHotelDetails::setHotelDetailItem()
     * @uses TypeHotelDetails::setHotelRateDetail()
     * @uses TypeHotelDetails::setMediaItem()
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @param \Travelport\Hotel\StructType\HotelDetailItem[] $hotelDetailItem
     * @param \Travelport\Hotel\StructType\HotelRateDetail[] $hotelRateDetail
     * @param \Travelport\Hotel\StructType\MediaItem[] $mediaItem
     */
    public function __construct(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null, ?array $hotelDetailItem = null, ?array $hotelRateDetail = null, ?array $mediaItem = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setHotelDetailItem($hotelDetailItem)
            ->setHotelRateDetail($hotelRateDetail)
            ->setMediaItem($mediaItem);
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
     * @return \Travelport\Hotel\StructType\TypeHotelDetails
     */
    public function setHotelProperty(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelDetailItem value
     * @return \Travelport\Hotel\StructType\HotelDetailItem[]
     */
    public function getHotelDetailItem(): ?array
    {
        return $this->HotelDetailItem;
    }
    /**
     * Set HotelDetailItem value
     * @param \Travelport\Hotel\StructType\HotelDetailItem[] $hotelDetailItem
     * @return \Travelport\Hotel\StructType\TypeHotelDetails
     */
    public function setHotelDetailItem(?array $hotelDetailItem = null): self
    {
        $this->HotelDetailItem = $hotelDetailItem;
        
        return $this;
    }
    /**
     * Add item to HotelDetailItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelDetailItem $item
     * @return \Travelport\Hotel\StructType\TypeHotelDetails
     */
    public function addToHotelDetailItem(\Travelport\Hotel\StructType\HotelDetailItem $item): self
    {
        $this->HotelDetailItem[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRateDetail value
     * @return \Travelport\Hotel\StructType\HotelRateDetail[]
     */
    public function getHotelRateDetail(): ?array
    {
        return $this->HotelRateDetail;
    }
    /**
     * Set HotelRateDetail value
     * @param \Travelport\Hotel\StructType\HotelRateDetail[] $hotelRateDetail
     * @return \Travelport\Hotel\StructType\TypeHotelDetails
     */
    public function setHotelRateDetail(?array $hotelRateDetail = null): self
    {
        $this->HotelRateDetail = $hotelRateDetail;
        
        return $this;
    }
    /**
     * Add item to HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRateDetail $item
     * @return \Travelport\Hotel\StructType\TypeHotelDetails
     */
    public function addToHotelRateDetail(\Travelport\Hotel\StructType\HotelRateDetail $item): self
    {
        $this->HotelRateDetail[] = $item;
        
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
     * @return \Travelport\Hotel\StructType\TypeHotelDetails
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
     * @return \Travelport\Hotel\StructType\TypeHotelDetails
     */
    public function addToMediaItem(\Travelport\Hotel\StructType\MediaItem $item): self
    {
        $this->MediaItem[] = $item;
        
        return $this;
    }
}
