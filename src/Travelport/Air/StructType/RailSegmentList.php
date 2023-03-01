<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\RailSegment[]
     */
    public ?array $RailSegment = null;
    /**
     * Constructor method for RailSegmentList
     * @uses RailSegmentList::setRailSegment()
     * @param \Travelport\Air\StructType\RailSegment[] $railSegment
     */
    public function __construct(?array $railSegment = null)
    {
        $this
            ->setRailSegment($railSegment);
    }
    /**
     * Get RailSegment value
     * @return \Travelport\Air\StructType\RailSegment[]
     */
    public function getRailSegment(): ?array
    {
        return $this->RailSegment;
    }
    /**
     * Set RailSegment value
     * @param \Travelport\Air\StructType\RailSegment[] $railSegment
     * @return \Travelport\Air\StructType\RailSegmentList
     */
    public function setRailSegment(?array $railSegment = null): self
    {
        $this->RailSegment = $railSegment;
        
        return $this;
    }
    /**
     * Add item to RailSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailSegment $item
     * @return \Travelport\Air\StructType\RailSegmentList
     */
    public function addToRailSegment(\Travelport\Air\StructType\RailSegment $item): self
    {
        $this->RailSegment[] = $item;
        
        return $this;
    }
}
