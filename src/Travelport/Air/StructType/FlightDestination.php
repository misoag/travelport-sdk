<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightDestination StructType
 * @subpackage Structs
 */
class FlightDestination extends AbstractStructBase
{
    /**
     * The Airport
     * Meta information extracted from the WSDL
     * - ref: common:Airport
     * @var \Travelport\Air\StructType\Airport|null
     */
    public ?\Travelport\Air\StructType\Airport $Airport = null;
    /**
     * Constructor method for FlightDestination
     * @uses FlightDestination::setAirport()
     * @param \Travelport\Air\StructType\Airport $airport
     */
    public function __construct(?\Travelport\Air\StructType\Airport $airport = null)
    {
        $this
            ->setAirport($airport);
    }
    /**
     * Get Airport value
     * @return \Travelport\Air\StructType\Airport|null
     */
    public function getAirport(): ?\Travelport\Air\StructType\Airport
    {
        return $this->Airport;
    }
    /**
     * Set Airport value
     * @param \Travelport\Air\StructType\Airport $airport
     * @return \Travelport\Air\StructType\FlightDestination
     */
    public function setAirport(?\Travelport\Air\StructType\Airport $airport = null): self
    {
        $this->Airport = $airport;
        
        return $this;
    }
}
