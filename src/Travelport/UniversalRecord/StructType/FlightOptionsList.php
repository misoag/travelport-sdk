<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightOptionsList StructType
 * Meta information extracted from the WSDL
 * - documentation: List of Flight Options for the itinerary.
 * @subpackage Structs
 */
class FlightOptionsList extends AbstractStructBase
{
    /**
     * The FlightOption
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FlightOption
     * @var \Travelport\UniversalRecord\StructType\FlightOption[]
     */
    protected ?array $FlightOption = null;
    /**
     * Constructor method for FlightOptionsList
     * @uses FlightOptionsList::setFlightOption()
     * @param \Travelport\UniversalRecord\StructType\FlightOption[] $flightOption
     */
    public function __construct(?array $flightOption = null)
    {
        $this
            ->setFlightOption($flightOption);
    }
    /**
     * Get FlightOption value
     * @return \Travelport\UniversalRecord\StructType\FlightOption[]
     */
    public function getFlightOption(): ?array
    {
        return $this->FlightOption;
    }
    /**
     * This method is responsible for validating the values passed to the setFlightOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightOptionForArrayConstraintsFromSetFlightOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightOptionsListFlightOptionItem) {
            // validation for constraint: itemType
            if (!$flightOptionsListFlightOptionItem instanceof \Travelport\UniversalRecord\StructType\FlightOption) {
                $invalidValues[] = is_object($flightOptionsListFlightOptionItem) ? get_class($flightOptionsListFlightOptionItem) : sprintf('%s(%s)', gettype($flightOptionsListFlightOptionItem), var_export($flightOptionsListFlightOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightOption property can only contain items of type \Travelport\UniversalRecord\StructType\FlightOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightOption value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightOption[] $flightOption
     * @return \Travelport\UniversalRecord\StructType\FlightOptionsList
     */
    public function setFlightOption(?array $flightOption = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightOptionArrayErrorMessage = self::validateFlightOptionForArrayConstraintsFromSetFlightOption($flightOption))) {
            throw new InvalidArgumentException($flightOptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($flightOption) && count($flightOption) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($flightOption)), __LINE__);
        }
        $this->FlightOption = $flightOption;
        
        return $this;
    }
    /**
     * Add item to FlightOption value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightOption $item
     * @return \Travelport\UniversalRecord\StructType\FlightOptionsList
     */
    public function addToFlightOption(\Travelport\UniversalRecord\StructType\FlightOption $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FlightOption) {
            throw new InvalidArgumentException(sprintf('The FlightOption property can only contain items of type \Travelport\UniversalRecord\StructType\FlightOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FlightOption) && count($this->FlightOption) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FlightOption)), __LINE__);
        }
        $this->FlightOption[] = $item;
        
        return $this;
    }
}