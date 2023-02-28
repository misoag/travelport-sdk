<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailFareList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of FareInfos
 * @subpackage Structs
 */
class RailFareList extends AbstractStructBase
{
    /**
     * The RailFare
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RailFare
     * @var \Travelport\UniversalRecord\StructType\RailFare[]
     */
    protected ?array $RailFare = null;
    /**
     * Constructor method for RailFareList
     * @uses RailFareList::setRailFare()
     * @param \Travelport\UniversalRecord\StructType\RailFare[] $railFare
     */
    public function __construct(?array $railFare = null)
    {
        $this
            ->setRailFare($railFare);
    }
    /**
     * Get RailFare value
     * @return \Travelport\UniversalRecord\StructType\RailFare[]
     */
    public function getRailFare(): ?array
    {
        return $this->RailFare;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailFare method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFare method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailFareForArrayConstraintFromSetRailFare(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railFareListRailFareItem) {
            // validation for constraint: itemType
            if (!$railFareListRailFareItem instanceof \Travelport\UniversalRecord\StructType\RailFare) {
                $invalidValues[] = is_object($railFareListRailFareItem) ? get_class($railFareListRailFareItem) : sprintf('%s(%s)', gettype($railFareListRailFareItem), var_export($railFareListRailFareItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailFare property can only contain items of type \Travelport\UniversalRecord\StructType\RailFare, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailFare value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFare[] $railFare
     * @return \Travelport\UniversalRecord\StructType\RailFareList
     */
    public function setRailFare(?array $railFare = null): self
    {
        // validation for constraint: array
        if ('' !== ($railFareArrayErrorMessage = self::validateRailFareForArrayConstraintFromSetRailFare($railFare))) {
            throw new InvalidArgumentException($railFareArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railFare) && count($railFare) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railFare)), __LINE__);
        }
        $this->RailFare = $railFare;
        
        return $this;
    }
    /**
     * Add item to RailFare value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFare $item
     * @return \Travelport\UniversalRecord\StructType\RailFareList
     */
    public function addToRailFare(\Travelport\UniversalRecord\StructType\RailFare $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailFare) {
            throw new InvalidArgumentException(sprintf('The RailFare property can only contain items of type \Travelport\UniversalRecord\StructType\RailFare, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailFare) && count($this->RailFare) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailFare)), __LINE__);
        }
        $this->RailFare[] = $item;
        
        return $this;
    }
}
