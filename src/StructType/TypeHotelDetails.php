<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\HotelProperty|null
     */
    protected ?\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelDetailItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelDetailItem
     * @var \StructType\HotelDetailItem[]
     */
    protected ?array $HotelDetailItem = null;
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRateDetail
     * @var \StructType\HotelRateDetail[]
     */
    protected ?array $HotelRateDetail = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:MediaItem
     * @var \StructType\MediaItem[]
     */
    protected ?array $MediaItem = null;
    /**
     * Constructor method for typeHotelDetails
     * @uses TypeHotelDetails::setHotelProperty()
     * @uses TypeHotelDetails::setHotelDetailItem()
     * @uses TypeHotelDetails::setHotelRateDetail()
     * @uses TypeHotelDetails::setMediaItem()
     * @param \StructType\HotelProperty $hotelProperty
     * @param \StructType\HotelDetailItem[] $hotelDetailItem
     * @param \StructType\HotelRateDetail[] $hotelRateDetail
     * @param \StructType\MediaItem[] $mediaItem
     */
    public function __construct(?\StructType\HotelProperty $hotelProperty = null, ?array $hotelDetailItem = null, ?array $hotelRateDetail = null, ?array $mediaItem = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setHotelDetailItem($hotelDetailItem)
            ->setHotelRateDetail($hotelRateDetail)
            ->setMediaItem($mediaItem);
    }
    /**
     * Get HotelProperty value
     * @return \StructType\HotelProperty|null
     */
    public function getHotelProperty(): ?\StructType\HotelProperty
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \StructType\HotelProperty $hotelProperty
     * @return \StructType\TypeHotelDetails
     */
    public function setHotelProperty(?\StructType\HotelProperty $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Get HotelDetailItem value
     * @return \StructType\HotelDetailItem[]
     */
    public function getHotelDetailItem(): ?array
    {
        return $this->HotelDetailItem;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelDetailItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelDetailItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelDetailItemForArrayConstraintsFromSetHotelDetailItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeHotelDetailsHotelDetailItemItem) {
            // validation for constraint: itemType
            if (!$typeHotelDetailsHotelDetailItemItem instanceof \StructType\HotelDetailItem) {
                $invalidValues[] = is_object($typeHotelDetailsHotelDetailItemItem) ? get_class($typeHotelDetailsHotelDetailItemItem) : sprintf('%s(%s)', gettype($typeHotelDetailsHotelDetailItemItem), var_export($typeHotelDetailsHotelDetailItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelDetailItem property can only contain items of type \StructType\HotelDetailItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelDetailItem value
     * @throws InvalidArgumentException
     * @param \StructType\HotelDetailItem[] $hotelDetailItem
     * @return \StructType\TypeHotelDetails
     */
    public function setHotelDetailItem(?array $hotelDetailItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelDetailItemArrayErrorMessage = self::validateHotelDetailItemForArrayConstraintsFromSetHotelDetailItem($hotelDetailItem))) {
            throw new InvalidArgumentException($hotelDetailItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelDetailItem) && count($hotelDetailItem) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelDetailItem)), __LINE__);
        }
        $this->HotelDetailItem = $hotelDetailItem;
        
        return $this;
    }
    /**
     * Add item to HotelDetailItem value
     * @throws InvalidArgumentException
     * @param \StructType\HotelDetailItem $item
     * @return \StructType\TypeHotelDetails
     */
    public function addToHotelDetailItem(\StructType\HotelDetailItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelDetailItem) {
            throw new InvalidArgumentException(sprintf('The HotelDetailItem property can only contain items of type \StructType\HotelDetailItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelDetailItem) && count($this->HotelDetailItem) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelDetailItem)), __LINE__);
        }
        $this->HotelDetailItem[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRateDetail value
     * @return \StructType\HotelRateDetail[]
     */
    public function getHotelRateDetail(): ?array
    {
        return $this->HotelRateDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelRateDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRateDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRateDetailForArrayConstraintsFromSetHotelRateDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeHotelDetailsHotelRateDetailItem) {
            // validation for constraint: itemType
            if (!$typeHotelDetailsHotelRateDetailItem instanceof \StructType\HotelRateDetail) {
                $invalidValues[] = is_object($typeHotelDetailsHotelRateDetailItem) ? get_class($typeHotelDetailsHotelRateDetailItem) : sprintf('%s(%s)', gettype($typeHotelDetailsHotelRateDetailItem), var_export($typeHotelDetailsHotelRateDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRateDetail property can only contain items of type \StructType\HotelRateDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \StructType\HotelRateDetail[] $hotelRateDetail
     * @return \StructType\TypeHotelDetails
     */
    public function setHotelRateDetail(?array $hotelRateDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRateDetailArrayErrorMessage = self::validateHotelRateDetailForArrayConstraintsFromSetHotelRateDetail($hotelRateDetail))) {
            throw new InvalidArgumentException($hotelRateDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelRateDetail) && count($hotelRateDetail) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelRateDetail)), __LINE__);
        }
        $this->HotelRateDetail = $hotelRateDetail;
        
        return $this;
    }
    /**
     * Add item to HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \StructType\HotelRateDetail $item
     * @return \StructType\TypeHotelDetails
     */
    public function addToHotelRateDetail(\StructType\HotelRateDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelRateDetail) {
            throw new InvalidArgumentException(sprintf('The HotelRateDetail property can only contain items of type \StructType\HotelRateDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelRateDetail) && count($this->HotelRateDetail) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelRateDetail)), __LINE__);
        }
        $this->HotelRateDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MediaItem value
     * @return \StructType\MediaItem[]
     */
    public function getMediaItem(): ?array
    {
        return $this->MediaItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMediaItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediaItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediaItemForArrayConstraintsFromSetMediaItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeHotelDetailsMediaItemItem) {
            // validation for constraint: itemType
            if (!$typeHotelDetailsMediaItemItem instanceof \StructType\MediaItem) {
                $invalidValues[] = is_object($typeHotelDetailsMediaItemItem) ? get_class($typeHotelDetailsMediaItemItem) : sprintf('%s(%s)', gettype($typeHotelDetailsMediaItemItem), var_export($typeHotelDetailsMediaItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediaItem property can only contain items of type \StructType\MediaItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediaItem value
     * @throws InvalidArgumentException
     * @param \StructType\MediaItem[] $mediaItem
     * @return \StructType\TypeHotelDetails
     */
    public function setMediaItem(?array $mediaItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($mediaItemArrayErrorMessage = self::validateMediaItemForArrayConstraintsFromSetMediaItem($mediaItem))) {
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
     * @param \StructType\MediaItem $item
     * @return \StructType\TypeHotelDetails
     */
    public function addToMediaItem(\StructType\MediaItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MediaItem) {
            throw new InvalidArgumentException(sprintf('The MediaItem property can only contain items of type \StructType\MediaItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MediaItem) && count($this->MediaItem) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MediaItem)), __LINE__);
        }
        $this->MediaItem[] = $item;
        
        return $this;
    }
}
