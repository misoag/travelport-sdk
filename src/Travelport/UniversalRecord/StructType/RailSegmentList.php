<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailSegmentList StructType
 * Meta information extracted from the WSDL
 * - documentation: List of Rail Segments
 * @subpackage Structs
 */
class RailSegmentList extends AbstractStructBase
{
    /**
     * The RailSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailSegment
     * @var \Travelport\UniversalRecord\StructType\RailSegment[]
     */
    protected ?array $RailSegment = null;
    /**
     * Constructor method for RailSegmentList
     * @uses RailSegmentList::setRailSegment()
     * @param \Travelport\UniversalRecord\StructType\RailSegment[] $railSegment
     */
    public function __construct(?array $railSegment = null)
    {
        $this
            ->setRailSegment($railSegment);
    }
    /**
     * Get RailSegment value
     * @return \Travelport\UniversalRecord\StructType\RailSegment[]
     */
    public function getRailSegment(): ?array
    {
        return $this->RailSegment;
    }
    /**
     * This method is responsible for validating the values passed to the setRailSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailSegment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailSegmentForArrayConstraintsFromSetRailSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railSegmentListRailSegmentItem) {
            // validation for constraint: itemType
            if (!$railSegmentListRailSegmentItem instanceof \Travelport\UniversalRecord\StructType\RailSegment) {
                $invalidValues[] = is_object($railSegmentListRailSegmentItem) ? get_class($railSegmentListRailSegmentItem) : sprintf('%s(%s)', gettype($railSegmentListRailSegmentItem), var_export($railSegmentListRailSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailSegment property can only contain items of type \Travelport\UniversalRecord\StructType\RailSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSegment[] $railSegment
     * @return \Travelport\UniversalRecord\StructType\RailSegmentList
     */
    public function setRailSegment(?array $railSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($railSegmentArrayErrorMessage = self::validateRailSegmentForArrayConstraintsFromSetRailSegment($railSegment))) {
            throw new InvalidArgumentException($railSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railSegment) && count($railSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railSegment)), __LINE__);
        }
        $this->RailSegment = $railSegment;
        
        return $this;
    }
    /**
     * Add item to RailSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSegment $item
     * @return \Travelport\UniversalRecord\StructType\RailSegmentList
     */
    public function addToRailSegment(\Travelport\UniversalRecord\StructType\RailSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailSegment) {
            throw new InvalidArgumentException(sprintf('The RailSegment property can only contain items of type \Travelport\UniversalRecord\StructType\RailSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailSegment) && count($this->RailSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailSegment)), __LINE__);
        }
        $this->RailSegment[] = $item;
        
        return $this;
    }
}
