<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAlternateProperties StructType
 * Meta information extracted from the WSDL
 * - documentation: Alternate Properties returned by some Vendors if the requested property is not available
 * @subpackage Structs
 */
class HotelAlternateProperties extends AbstractStructBase
{
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: HotelProperty
     * @var \StructType\HotelProperty[]
     */
    protected ?array $HotelProperty = null;
    /**
     * Constructor method for HotelAlternateProperties
     * @uses HotelAlternateProperties::setHotelProperty()
     * @param \StructType\HotelProperty[] $hotelProperty
     */
    public function __construct(?array $hotelProperty = null)
    {
        $this
            ->setHotelProperty($hotelProperty);
    }
    /**
     * Get HotelProperty value
     * @return \StructType\HotelProperty[]
     */
    public function getHotelProperty(): ?array
    {
        return $this->HotelProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelPropertyForArrayConstraintsFromSetHotelProperty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelAlternatePropertiesHotelPropertyItem) {
            // validation for constraint: itemType
            if (!$hotelAlternatePropertiesHotelPropertyItem instanceof \StructType\HotelProperty) {
                $invalidValues[] = is_object($hotelAlternatePropertiesHotelPropertyItem) ? get_class($hotelAlternatePropertiesHotelPropertyItem) : sprintf('%s(%s)', gettype($hotelAlternatePropertiesHotelPropertyItem), var_export($hotelAlternatePropertiesHotelPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelProperty property can only contain items of type \StructType\HotelProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelProperty value
     * @throws InvalidArgumentException
     * @param \StructType\HotelProperty[] $hotelProperty
     * @return \StructType\HotelAlternateProperties
     */
    public function setHotelProperty(?array $hotelProperty = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelPropertyArrayErrorMessage = self::validateHotelPropertyForArrayConstraintsFromSetHotelProperty($hotelProperty))) {
            throw new InvalidArgumentException($hotelPropertyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelProperty) && count($hotelProperty) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelProperty)), __LINE__);
        }
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Add item to HotelProperty value
     * @throws InvalidArgumentException
     * @param \StructType\HotelProperty $item
     * @return \StructType\HotelAlternateProperties
     */
    public function addToHotelProperty(\StructType\HotelProperty $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelProperty) {
            throw new InvalidArgumentException(sprintf('The HotelProperty property can only contain items of type \StructType\HotelProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelProperty) && count($this->HotelProperty) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelProperty)), __LINE__);
        }
        $this->HotelProperty[] = $item;
        
        return $this;
    }
}
