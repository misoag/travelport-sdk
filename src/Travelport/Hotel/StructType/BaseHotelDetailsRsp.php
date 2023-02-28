<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\HotelProperty|null
     */
    protected ?\Travelport\Hotel\StructType\HotelProperty $HotelProperty = null;
    /**
     * The HotelDetailItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelDetailItem
     * @var \Travelport\Hotel\StructType\HotelDetailItem[]
     */
    protected ?array $HotelDetailItem = null;
    /**
     * The HotelRateDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRateDetail
     * @var \Travelport\Hotel\StructType\HotelRateDetail[]
     */
    protected ?array $HotelRateDetail = null;
    /**
     * Constructor method for BaseHotelDetailsRsp
     * @uses BaseHotelDetailsRsp::setHotelProperty()
     * @uses BaseHotelDetailsRsp::setHotelDetailItem()
     * @uses BaseHotelDetailsRsp::setHotelRateDetail()
     * @param \Travelport\Hotel\StructType\HotelProperty $hotelProperty
     * @param \Travelport\Hotel\StructType\HotelDetailItem[] $hotelDetailItem
     * @param \Travelport\Hotel\StructType\HotelRateDetail[] $hotelRateDetail
     */
    public function __construct(?\Travelport\Hotel\StructType\HotelProperty $hotelProperty = null, ?array $hotelDetailItem = null, ?array $hotelRateDetail = null)
    {
        $this
            ->setHotelProperty($hotelProperty)
            ->setHotelDetailItem($hotelDetailItem)
            ->setHotelRateDetail($hotelRateDetail);
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
     * @return \Travelport\Hotel\StructType\BaseHotelDetailsRsp
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
     * This method is responsible for validating the value(s) passed to the setHotelDetailItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelDetailItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelDetailItemForArrayConstraintFromSetHotelDetailItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseHotelDetailsRspHotelDetailItemItem) {
            // validation for constraint: itemType
            if (!$baseHotelDetailsRspHotelDetailItemItem instanceof \Travelport\Hotel\StructType\HotelDetailItem) {
                $invalidValues[] = is_object($baseHotelDetailsRspHotelDetailItemItem) ? get_class($baseHotelDetailsRspHotelDetailItemItem) : sprintf('%s(%s)', gettype($baseHotelDetailsRspHotelDetailItemItem), var_export($baseHotelDetailsRspHotelDetailItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelDetailItem property can only contain items of type \Travelport\Hotel\StructType\HotelDetailItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelDetailItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelDetailItem[] $hotelDetailItem
     * @return \Travelport\Hotel\StructType\BaseHotelDetailsRsp
     */
    public function setHotelDetailItem(?array $hotelDetailItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelDetailItemArrayErrorMessage = self::validateHotelDetailItemForArrayConstraintFromSetHotelDetailItem($hotelDetailItem))) {
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
     * @param \Travelport\Hotel\StructType\HotelDetailItem $item
     * @return \Travelport\Hotel\StructType\BaseHotelDetailsRsp
     */
    public function addToHotelDetailItem(\Travelport\Hotel\StructType\HotelDetailItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HotelDetailItem) {
            throw new InvalidArgumentException(sprintf('The HotelDetailItem property can only contain items of type \Travelport\Hotel\StructType\HotelDetailItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Hotel\StructType\HotelRateDetail[]
     */
    public function getHotelRateDetail(): ?array
    {
        return $this->HotelRateDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelRateDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRateDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRateDetailForArrayConstraintFromSetHotelRateDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseHotelDetailsRspHotelRateDetailItem) {
            // validation for constraint: itemType
            if (!$baseHotelDetailsRspHotelRateDetailItem instanceof \Travelport\Hotel\StructType\HotelRateDetail) {
                $invalidValues[] = is_object($baseHotelDetailsRspHotelRateDetailItem) ? get_class($baseHotelDetailsRspHotelRateDetailItem) : sprintf('%s(%s)', gettype($baseHotelDetailsRspHotelRateDetailItem), var_export($baseHotelDetailsRspHotelRateDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRateDetail property can only contain items of type \Travelport\Hotel\StructType\HotelRateDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelRateDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelRateDetail[] $hotelRateDetail
     * @return \Travelport\Hotel\StructType\BaseHotelDetailsRsp
     */
    public function setHotelRateDetail(?array $hotelRateDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRateDetailArrayErrorMessage = self::validateHotelRateDetailForArrayConstraintFromSetHotelRateDetail($hotelRateDetail))) {
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
     * @param \Travelport\Hotel\StructType\HotelRateDetail $item
     * @return \Travelport\Hotel\StructType\BaseHotelDetailsRsp
     */
    public function addToHotelRateDetail(\Travelport\Hotel\StructType\HotelRateDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HotelRateDetail) {
            throw new InvalidArgumentException(sprintf('The HotelRateDetail property can only contain items of type \Travelport\Hotel\StructType\HotelRateDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelRateDetail) && count($this->HotelRateDetail) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelRateDetail)), __LINE__);
        }
        $this->HotelRateDetail[] = $item;
        
        return $this;
    }
}
