<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\FlightOption[]
     */
    public ?array $FlightOption = null;
    /**
     * Constructor method for FlightOptionsList
     * @uses FlightOptionsList::setFlightOption()
     * @param \Travelport\Air\StructType\FlightOption[] $flightOption
     */
    public function __construct(?array $flightOption = null)
    {
        $this
            ->setFlightOption($flightOption);
    }
    /**
     * Get FlightOption value
     * @return \Travelport\Air\StructType\FlightOption[]
     */
    public function getFlightOption(): ?array
    {
        return $this->FlightOption;
    }
    /**
     * Set FlightOption value
     * @param \Travelport\Air\StructType\FlightOption[] $flightOption
     * @return \Travelport\Air\StructType\FlightOptionsList
     */
    public function setFlightOption(?array $flightOption = null): self
    {
        $this->FlightOption = $flightOption;
        
        return $this;
    }
    /**
     * Add item to FlightOption value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FlightOption $item
     * @return \Travelport\Air\StructType\FlightOptionsList
     */
    public function addToFlightOption(\Travelport\Air\StructType\FlightOption $item): self
    {
        $this->FlightOption[] = $item;
        
        return $this;
    }
}
