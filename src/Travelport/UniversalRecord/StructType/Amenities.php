<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amenities StructType
 * Meta information extracted from the WSDL
 * - documentation: Amenity information
 * @subpackage Structs
 */
class Amenities extends AbstractStructBase
{
    /**
     * The Amenity
     * Meta information extracted from the WSDL
     * - maxOccurs: 8 | 999
     * - minOccurs: 0
     * - ref: Amenity
     * @var \Travelport\UniversalRecord\StructType\Amenity[]
     */
    protected ?array $Amenity = null;
    /**
     * Constructor method for Amenities
     * @uses Amenities::setAmenity()
     * @param \Travelport\UniversalRecord\StructType\Amenity[] $amenity
     */
    public function __construct(?array $amenity = null)
    {
        $this
            ->setAmenity($amenity);
    }
    /**
     * Get Amenity value
     * @return \Travelport\UniversalRecord\StructType\Amenity[]
     */
    public function getAmenity(): ?array
    {
        return $this->Amenity;
    }
    /**
     * This method is responsible for validating the values passed to the setAmenity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAmenity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAmenityForArrayConstraintsFromSetAmenity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $amenitiesAmenityItem) {
            // validation for constraint: itemType
            if (!$amenitiesAmenityItem instanceof \Travelport\UniversalRecord\StructType\Amenity) {
                $invalidValues[] = is_object($amenitiesAmenityItem) ? get_class($amenitiesAmenityItem) : sprintf('%s(%s)', gettype($amenitiesAmenityItem), var_export($amenitiesAmenityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Amenity property can only contain items of type \Travelport\UniversalRecord\StructType\Amenity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Amenity value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Amenity[] $amenity
     * @return \Travelport\UniversalRecord\StructType\Amenities
     */
    public function setAmenity(?array $amenity = null): self
    {
        // validation for constraint: array
        if ('' !== ($amenityArrayErrorMessage = self::validateAmenityForArrayConstraintsFromSetAmenity($amenity))) {
            throw new InvalidArgumentException($amenityArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(8, 999)
        if (is_array($amenity) && count($amenity) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 8,999', count($amenity)), __LINE__);
        }
        $this->Amenity = $amenity;
        
        return $this;
    }
    /**
     * Add item to Amenity value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Amenity $item
     * @return \Travelport\UniversalRecord\StructType\Amenities
     */
    public function addToAmenity(\Travelport\UniversalRecord\StructType\Amenity $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Amenity) {
            throw new InvalidArgumentException(sprintf('The Amenity property can only contain items of type \Travelport\UniversalRecord\StructType\Amenity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(8, 999)
        if (is_array($this->Amenity) && count($this->Amenity) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 8,999', count($this->Amenity)), __LINE__);
        }
        $this->Amenity[] = $item;
        
        return $this;
    }
}
