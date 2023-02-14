<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Journey StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about all connecting segment list and total traveling time
 * @subpackage Structs
 */
class Journey extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    protected ?array $AirSegmentRef = null;
    /**
     * The TravelTime
     * Meta information extracted from the WSDL
     * - documentation: Total traveling time that is difference between the departure time of the first segment and the arrival time of the last segments for that particular entire set of connection.
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelTime = null;
    /**
     * Constructor method for Journey
     * @uses Journey::setAirSegmentRef()
     * @uses Journey::setTravelTime()
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @param string $travelTime
     */
    public function __construct(?array $airSegmentRef = null, ?string $travelTime = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setTravelTime($travelTime);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $journeyAirSegmentRefItem) {
            // validation for constraint: itemType
            if (!$journeyAirSegmentRefItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentRef) {
                $invalidValues[] = is_object($journeyAirSegmentRefItem) ? get_class($journeyAirSegmentRefItem) : sprintf('%s(%s)', gettype($journeyAirSegmentRefItem), var_export($journeyAirSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\Journey
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentRefArrayErrorMessage = self::validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef($airSegmentRef))) {
            throw new InvalidArgumentException($airSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegmentRef) && count($airSegmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\Journey
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\AirSegmentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirSegmentRef) {
            throw new InvalidArgumentException(sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentRef) && count($this->AirSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get TravelTime value
     * @return string|null
     */
    public function getTravelTime(): ?string
    {
        return $this->TravelTime;
    }
    /**
     * Set TravelTime value
     * @param string $travelTime
     * @return \Travelport\UniversalRecord\StructType\Journey
     */
    public function setTravelTime(?string $travelTime = null): self
    {
        // validation for constraint: string
        if (!is_null($travelTime) && !is_string($travelTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelTime, true), gettype($travelTime)), __LINE__);
        }
        $this->TravelTime = $travelTime;
        
        return $this;
    }
}
