<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightDetailsList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of FlightDetails
 * @subpackage Structs
 */
class FlightDetailsList extends AbstractStructBase
{
    /**
     * The FlightDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FlightDetails
     * @var \Travelport\UniversalRecord\StructType\FlightDetails[]
     */
    public ?array $FlightDetails = null;
    /**
     * Constructor method for FlightDetailsList
     * @uses FlightDetailsList::setFlightDetails()
     * @param \Travelport\UniversalRecord\StructType\FlightDetails[] $flightDetails
     */
    public function __construct(?array $flightDetails = null)
    {
        $this
            ->setFlightDetails($flightDetails);
    }
    /**
     * Get FlightDetails value
     * @return \Travelport\UniversalRecord\StructType\FlightDetails[]
     */
    public function getFlightDetails(): ?array
    {
        return $this->FlightDetails;
    }
    /**
     * Set FlightDetails value
     * @param \Travelport\UniversalRecord\StructType\FlightDetails[] $flightDetails
     * @return \Travelport\UniversalRecord\StructType\FlightDetailsList
     */
    public function setFlightDetails(?array $flightDetails = null): self
    {
        $this->FlightDetails = $flightDetails;
        
        return $this;
    }
    /**
     * Add item to FlightDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FlightDetails $item
     * @return \Travelport\UniversalRecord\StructType\FlightDetailsList
     */
    public function addToFlightDetails(\Travelport\UniversalRecord\StructType\FlightDetails $item): self
    {
        $this->FlightDetails[] = $item;
        
        return $this;
    }
}
