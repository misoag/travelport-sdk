<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of AirSegments
 * @subpackage Structs
 */
class AirSegmentList extends AbstractStructBase
{
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    protected ?array $AirSegment = null;
    /**
     * Constructor method for AirSegmentList
     * @uses AirSegmentList::setAirSegment()
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     */
    public function __construct(?array $airSegment = null)
    {
        $this
            ->setAirSegment($airSegment);
    }
    /**
     * Get AirSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentForArrayConstraintsFromSetAirSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airSegmentListAirSegmentItem) {
            // validation for constraint: itemType
            if (!$airSegmentListAirSegmentItem instanceof \Travelport\UniversalRecord\StructType\TypeBaseAirSegment) {
                $invalidValues[] = is_object($airSegmentListAirSegmentItem) ? get_class($airSegmentListAirSegmentItem) : sprintf('%s(%s)', gettype($airSegmentListAirSegmentItem), var_export($airSegmentListAirSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeBaseAirSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\UniversalRecord\StructType\AirSegmentList
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentArrayErrorMessage = self::validateAirSegmentForArrayConstraintsFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegment) && count($airSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegment)), __LINE__);
        }
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item
     * @return \Travelport\UniversalRecord\StructType\AirSegmentList
     */
    public function addToAirSegment(\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeBaseAirSegment) {
            throw new InvalidArgumentException(sprintf('The AirSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeBaseAirSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegment)), __LINE__);
        }
        $this->AirSegment[] = $item;
        
        return $this;
    }
}