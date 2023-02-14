<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailJourneyList StructType
 * Meta information extracted from the WSDL
 * - documentation: List of Rail Journeys
 * @subpackage Structs
 */
class RailJourneyList extends AbstractStructBase
{
    /**
     * The RailJourney
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailJourney
     * @var \Travelport\UniversalRecord\StructType\RailJourney[]
     */
    protected ?array $RailJourney = null;
    /**
     * Constructor method for RailJourneyList
     * @uses RailJourneyList::setRailJourney()
     * @param \Travelport\UniversalRecord\StructType\RailJourney[] $railJourney
     */
    public function __construct(?array $railJourney = null)
    {
        $this
            ->setRailJourney($railJourney);
    }
    /**
     * Get RailJourney value
     * @return \Travelport\UniversalRecord\StructType\RailJourney[]
     */
    public function getRailJourney(): ?array
    {
        return $this->RailJourney;
    }
    /**
     * This method is responsible for validating the values passed to the setRailJourney method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailJourney method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailJourneyForArrayConstraintsFromSetRailJourney(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railJourneyListRailJourneyItem) {
            // validation for constraint: itemType
            if (!$railJourneyListRailJourneyItem instanceof \Travelport\UniversalRecord\StructType\RailJourney) {
                $invalidValues[] = is_object($railJourneyListRailJourneyItem) ? get_class($railJourneyListRailJourneyItem) : sprintf('%s(%s)', gettype($railJourneyListRailJourneyItem), var_export($railJourneyListRailJourneyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailJourney property can only contain items of type \Travelport\UniversalRecord\StructType\RailJourney, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailJourney value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourney[] $railJourney
     * @return \Travelport\UniversalRecord\StructType\RailJourneyList
     */
    public function setRailJourney(?array $railJourney = null): self
    {
        // validation for constraint: array
        if ('' !== ($railJourneyArrayErrorMessage = self::validateRailJourneyForArrayConstraintsFromSetRailJourney($railJourney))) {
            throw new InvalidArgumentException($railJourneyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railJourney) && count($railJourney) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railJourney)), __LINE__);
        }
        $this->RailJourney = $railJourney;
        
        return $this;
    }
    /**
     * Add item to RailJourney value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourney $item
     * @return \Travelport\UniversalRecord\StructType\RailJourneyList
     */
    public function addToRailJourney(\Travelport\UniversalRecord\StructType\RailJourney $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailJourney) {
            throw new InvalidArgumentException(sprintf('The RailJourney property can only contain items of type \Travelport\UniversalRecord\StructType\RailJourney, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailJourney) && count($this->RailJourney) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailJourney)), __LINE__);
        }
        $this->RailJourney[] = $item;
        
        return $this;
    }
}
