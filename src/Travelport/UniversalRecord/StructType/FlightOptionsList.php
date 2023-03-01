<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?array $FlightOption = null;
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
     * Set FlightOption value
     * @param \Travelport\UniversalRecord\StructType\FlightOption[] $flightOption
     * @return \Travelport\UniversalRecord\StructType\FlightOptionsList
     */
    public function setFlightOption(?array $flightOption = null): self
    {
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
        $this->FlightOption[] = $item;
        
        return $this;
    }
}
