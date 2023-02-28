<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatAttributes StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the seat attribute of the service.
 * @subpackage Structs
 */
class SeatAttributes extends AbstractStructBase
{
    /**
     * The SeatAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: SeatAttribute
     * @var \Travelport\Hotel\StructType\SeatAttribute[]
     */
    protected ?array $SeatAttribute = null;
    /**
     * Constructor method for SeatAttributes
     * @uses SeatAttributes::setSeatAttribute()
     * @param \Travelport\Hotel\StructType\SeatAttribute[] $seatAttribute
     */
    public function __construct(?array $seatAttribute = null)
    {
        $this
            ->setSeatAttribute($seatAttribute);
    }
    /**
     * Get SeatAttribute value
     * @return \Travelport\Hotel\StructType\SeatAttribute[]
     */
    public function getSeatAttribute(): ?array
    {
        return $this->SeatAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSeatAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSeatAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSeatAttributeForArrayConstraintFromSetSeatAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $seatAttributesSeatAttributeItem) {
            // validation for constraint: itemType
            if (!$seatAttributesSeatAttributeItem instanceof \Travelport\Hotel\StructType\SeatAttribute) {
                $invalidValues[] = is_object($seatAttributesSeatAttributeItem) ? get_class($seatAttributesSeatAttributeItem) : sprintf('%s(%s)', gettype($seatAttributesSeatAttributeItem), var_export($seatAttributesSeatAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SeatAttribute property can only contain items of type \Travelport\Hotel\StructType\SeatAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SeatAttribute value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\SeatAttribute[] $seatAttribute
     * @return \Travelport\Hotel\StructType\SeatAttributes
     */
    public function setSeatAttribute(?array $seatAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($seatAttributeArrayErrorMessage = self::validateSeatAttributeForArrayConstraintFromSetSeatAttribute($seatAttribute))) {
            throw new InvalidArgumentException($seatAttributeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($seatAttribute) && count($seatAttribute) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($seatAttribute)), __LINE__);
        }
        $this->SeatAttribute = $seatAttribute;
        
        return $this;
    }
    /**
     * Add item to SeatAttribute value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\SeatAttribute $item
     * @return \Travelport\Hotel\StructType\SeatAttributes
     */
    public function addToSeatAttribute(\Travelport\Hotel\StructType\SeatAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\SeatAttribute) {
            throw new InvalidArgumentException(sprintf('The SeatAttribute property can only contain items of type \Travelport\Hotel\StructType\SeatAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->SeatAttribute) && count($this->SeatAttribute) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->SeatAttribute)), __LINE__);
        }
        $this->SeatAttribute[] = $item;
        
        return $this;
    }
}
