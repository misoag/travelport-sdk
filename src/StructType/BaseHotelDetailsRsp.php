<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseHotelDetailsRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Only returned if number of adults and checkin/checkout given on request | Base response for all hotel details search response.
 * @subpackage Structs
 */
class BaseHotelDetailsRsp extends BaseRsp
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
     * Constructor method for BaseHotelDetailsRsp
     * @uses BaseHotelDetailsRsp::setHotelProperty()
     * @uses BaseHotelDetailsRsp::setHotelDetailItem()
     * @uses BaseHotelDetailsRsp::setHotelRateDetail()
     * @param \StructType\HotelProperty $hotelProperty
     * @param \StructType\HotelDetailItem[] $hotelDetailItem
     * @param \StructType\HotelRateDetail[] $hotelRateDetail
     */
    public function __construct(?\StructType\HotelProperty $hotelProperty = null, ?array $hotelDetailItem = null, ?array $hotelRateDetail = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setHotelDetailItem($hotelDetailItem)
            ->setHotelRateDetail($hotelRateDetail);
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
     * @return \StructType\BaseHotelDetailsRsp
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
        foreach ($values as $baseHotelDetailsRspHotelDetailItemItem) {
            // validation for constraint: itemType
            if (!$baseHotelDetailsRspHotelDetailItemItem instanceof \StructType\HotelDetailItem) {
                $invalidValues[] = is_object($baseHotelDetailsRspHotelDetailItemItem) ? get_class($baseHotelDetailsRspHotelDetailItemItem) : sprintf('%s(%s)', gettype($baseHotelDetailsRspHotelDetailItemItem), var_export($baseHotelDetailsRspHotelDetailItemItem, true));
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
     * @return \StructType\BaseHotelDetailsRsp
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
     * @return \StructType\BaseHotelDetailsRsp
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
        foreach ($values as $baseHotelDetailsRspHotelRateDetailItem) {
            // validation for constraint: itemType
            if (!$baseHotelDetailsRspHotelRateDetailItem instanceof \StructType\HotelRateDetail) {
                $invalidValues[] = is_object($baseHotelDetailsRspHotelRateDetailItem) ? get_class($baseHotelDetailsRspHotelRateDetailItem) : sprintf('%s(%s)', gettype($baseHotelDetailsRspHotelRateDetailItem), var_export($baseHotelDetailsRspHotelRateDetailItem, true));
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
     * @return \StructType\BaseHotelDetailsRsp
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
     * @return \StructType\BaseHotelDetailsRsp
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
}
