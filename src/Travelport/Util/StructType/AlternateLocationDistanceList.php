<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateLocationDistanceList StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides the Distance Information between Original Search Airports or City to Alternate Search Airports
 * @subpackage Structs
 */
class AlternateLocationDistanceList extends AbstractStructBase
{
    /**
     * The AlternateLocationDistance
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AlternateLocationDistance
     * @var \Travelport\Util\StructType\AlternateLocationDistance[]
     */
    protected ?array $AlternateLocationDistance = null;
    /**
     * Constructor method for AlternateLocationDistanceList
     * @uses AlternateLocationDistanceList::setAlternateLocationDistance()
     * @param \Travelport\Util\StructType\AlternateLocationDistance[] $alternateLocationDistance
     */
    public function __construct(?array $alternateLocationDistance = null)
    {
        $this
            ->setAlternateLocationDistance($alternateLocationDistance);
    }
    /**
     * Get AlternateLocationDistance value
     * @return \Travelport\Util\StructType\AlternateLocationDistance[]
     */
    public function getAlternateLocationDistance(): ?array
    {
        return $this->AlternateLocationDistance;
    }
    /**
     * This method is responsible for validating the values passed to the setAlternateLocationDistance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlternateLocationDistance method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlternateLocationDistanceForArrayConstraintsFromSetAlternateLocationDistance(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $alternateLocationDistanceListAlternateLocationDistanceItem) {
            // validation for constraint: itemType
            if (!$alternateLocationDistanceListAlternateLocationDistanceItem instanceof \Travelport\Util\StructType\AlternateLocationDistance) {
                $invalidValues[] = is_object($alternateLocationDistanceListAlternateLocationDistanceItem) ? get_class($alternateLocationDistanceListAlternateLocationDistanceItem) : sprintf('%s(%s)', gettype($alternateLocationDistanceListAlternateLocationDistanceItem), var_export($alternateLocationDistanceListAlternateLocationDistanceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AlternateLocationDistance property can only contain items of type \Travelport\Util\StructType\AlternateLocationDistance, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AlternateLocationDistance value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AlternateLocationDistance[] $alternateLocationDistance
     * @return \Travelport\Util\StructType\AlternateLocationDistanceList
     */
    public function setAlternateLocationDistance(?array $alternateLocationDistance = null): self
    {
        // validation for constraint: array
        if ('' !== ($alternateLocationDistanceArrayErrorMessage = self::validateAlternateLocationDistanceForArrayConstraintsFromSetAlternateLocationDistance($alternateLocationDistance))) {
            throw new InvalidArgumentException($alternateLocationDistanceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($alternateLocationDistance) && count($alternateLocationDistance) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($alternateLocationDistance)), __LINE__);
        }
        $this->AlternateLocationDistance = $alternateLocationDistance;
        
        return $this;
    }
    /**
     * Add item to AlternateLocationDistance value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AlternateLocationDistance $item
     * @return \Travelport\Util\StructType\AlternateLocationDistanceList
     */
    public function addToAlternateLocationDistance(\Travelport\Util\StructType\AlternateLocationDistance $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AlternateLocationDistance) {
            throw new InvalidArgumentException(sprintf('The AlternateLocationDistance property can only contain items of type \Travelport\Util\StructType\AlternateLocationDistance, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AlternateLocationDistance) && count($this->AlternateLocationDistance) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AlternateLocationDistance)), __LINE__);
        }
        $this->AlternateLocationDistance[] = $item;
        
        return $this;
    }
}