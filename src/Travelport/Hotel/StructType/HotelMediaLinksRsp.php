<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelMediaLinksRsp StructType
 * @subpackage Structs
 */
class HotelMediaLinksRsp extends BaseRsp
{
    /**
     * The HotelPropertyWithMediaItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 20
     * - ref: HotelPropertyWithMediaItems
     * @var \Travelport\Hotel\StructType\HotelPropertyWithMediaItems[]
     */
    protected ?array $HotelPropertyWithMediaItems = null;
    /**
     * Constructor method for HotelMediaLinksRsp
     * @uses HotelMediaLinksRsp::setHotelPropertyWithMediaItems()
     * @param \Travelport\Hotel\StructType\HotelPropertyWithMediaItems[] $hotelPropertyWithMediaItems
     */
    public function __construct(?array $hotelPropertyWithMediaItems = null)
    {
        $this
            ->setHotelPropertyWithMediaItems($hotelPropertyWithMediaItems);
    }
    /**
     * Get HotelPropertyWithMediaItems value
     * @return \Travelport\Hotel\StructType\HotelPropertyWithMediaItems[]
     */
    public function getHotelPropertyWithMediaItems(): ?array
    {
        return $this->HotelPropertyWithMediaItems;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelPropertyWithMediaItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelPropertyWithMediaItems method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelPropertyWithMediaItemsForArrayConstraintFromSetHotelPropertyWithMediaItems(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelMediaLinksRspHotelPropertyWithMediaItemsItem) {
            // validation for constraint: itemType
            if (!$hotelMediaLinksRspHotelPropertyWithMediaItemsItem instanceof \Travelport\Hotel\StructType\HotelPropertyWithMediaItems) {
                $invalidValues[] = is_object($hotelMediaLinksRspHotelPropertyWithMediaItemsItem) ? get_class($hotelMediaLinksRspHotelPropertyWithMediaItemsItem) : sprintf('%s(%s)', gettype($hotelMediaLinksRspHotelPropertyWithMediaItemsItem), var_export($hotelMediaLinksRspHotelPropertyWithMediaItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelPropertyWithMediaItems property can only contain items of type \Travelport\Hotel\StructType\HotelPropertyWithMediaItems, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelPropertyWithMediaItems value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelPropertyWithMediaItems[] $hotelPropertyWithMediaItems
     * @return \Travelport\Hotel\StructType\HotelMediaLinksRsp
     */
    public function setHotelPropertyWithMediaItems(?array $hotelPropertyWithMediaItems = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelPropertyWithMediaItemsArrayErrorMessage = self::validateHotelPropertyWithMediaItemsForArrayConstraintFromSetHotelPropertyWithMediaItems($hotelPropertyWithMediaItems))) {
            throw new InvalidArgumentException($hotelPropertyWithMediaItemsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(20)
        if (is_array($hotelPropertyWithMediaItems) && count($hotelPropertyWithMediaItems) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 20', count($hotelPropertyWithMediaItems)), __LINE__);
        }
        $this->HotelPropertyWithMediaItems = $hotelPropertyWithMediaItems;
        
        return $this;
    }
    /**
     * Add item to HotelPropertyWithMediaItems value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelPropertyWithMediaItems $item
     * @return \Travelport\Hotel\StructType\HotelMediaLinksRsp
     */
    public function addToHotelPropertyWithMediaItems(\Travelport\Hotel\StructType\HotelPropertyWithMediaItems $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HotelPropertyWithMediaItems) {
            throw new InvalidArgumentException(sprintf('The HotelPropertyWithMediaItems property can only contain items of type \Travelport\Hotel\StructType\HotelPropertyWithMediaItems, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(20)
        if (is_array($this->HotelPropertyWithMediaItems) && count($this->HotelPropertyWithMediaItems) >= 20) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 20', count($this->HotelPropertyWithMediaItems)), __LINE__);
        }
        $this->HotelPropertyWithMediaItems[] = $item;
        
        return $this;
    }
}
