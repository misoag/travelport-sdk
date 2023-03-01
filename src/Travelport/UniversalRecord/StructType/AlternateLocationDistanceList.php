<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\AlternateLocationDistance[]
     */
    public ?array $AlternateLocationDistance = null;
    /**
     * Constructor method for AlternateLocationDistanceList
     * @uses AlternateLocationDistanceList::setAlternateLocationDistance()
     * @param \Travelport\UniversalRecord\StructType\AlternateLocationDistance[] $alternateLocationDistance
     */
    public function __construct(?array $alternateLocationDistance = null)
    {
        $this
            ->setAlternateLocationDistance($alternateLocationDistance);
    }
    /**
     * Get AlternateLocationDistance value
     * @return \Travelport\UniversalRecord\StructType\AlternateLocationDistance[]
     */
    public function getAlternateLocationDistance(): ?array
    {
        return $this->AlternateLocationDistance;
    }
    /**
     * Set AlternateLocationDistance value
     * @param \Travelport\UniversalRecord\StructType\AlternateLocationDistance[] $alternateLocationDistance
     * @return \Travelport\UniversalRecord\StructType\AlternateLocationDistanceList
     */
    public function setAlternateLocationDistance(?array $alternateLocationDistance = null): self
    {
        $this->AlternateLocationDistance = $alternateLocationDistance;
        
        return $this;
    }
    /**
     * Add item to AlternateLocationDistance value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AlternateLocationDistance $item
     * @return \Travelport\UniversalRecord\StructType\AlternateLocationDistanceList
     */
    public function addToAlternateLocationDistance(\Travelport\UniversalRecord\StructType\AlternateLocationDistance $item): self
    {
        $this->AlternateLocationDistance[] = $item;
        
        return $this;
    }
}
