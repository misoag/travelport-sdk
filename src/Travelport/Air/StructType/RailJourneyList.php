<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\RailJourney[]
     */
    public ?array $RailJourney = null;
    /**
     * Constructor method for RailJourneyList
     * @uses RailJourneyList::setRailJourney()
     * @param \Travelport\Air\StructType\RailJourney[] $railJourney
     */
    public function __construct(?array $railJourney = null)
    {
        $this
            ->setRailJourney($railJourney);
    }
    /**
     * Get RailJourney value
     * @return \Travelport\Air\StructType\RailJourney[]
     */
    public function getRailJourney(): ?array
    {
        return $this->RailJourney;
    }
    /**
     * Set RailJourney value
     * @param \Travelport\Air\StructType\RailJourney[] $railJourney
     * @return \Travelport\Air\StructType\RailJourneyList
     */
    public function setRailJourney(?array $railJourney = null): self
    {
        $this->RailJourney = $railJourney;
        
        return $this;
    }
    /**
     * Add item to RailJourney value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailJourney $item
     * @return \Travelport\Air\StructType\RailJourneyList
     */
    public function addToRailJourney(\Travelport\Air\StructType\RailJourney $item): self
    {
        $this->RailJourney[] = $item;
        
        return $this;
    }
}
