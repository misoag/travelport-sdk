<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightOrigin StructType
 * @subpackage Structs
 */
class FlightOrigin extends AbstractStructBase
{
    /**
     * The Airport
     * Meta information extracted from the WSDL
     * - ref: common:Airport
     * @var \Travelport\UniversalRecord\StructType\Airport|null
     */
    public ?\Travelport\UniversalRecord\StructType\Airport $Airport = null;
    /**
     * Constructor method for FlightOrigin
     * @uses FlightOrigin::setAirport()
     * @param \Travelport\UniversalRecord\StructType\Airport $airport
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Airport $airport = null)
    {
        $this
            ->setAirport($airport);
    }
    /**
     * Get Airport value
     * @return \Travelport\UniversalRecord\StructType\Airport|null
     */
    public function getAirport(): ?\Travelport\UniversalRecord\StructType\Airport
    {
        return $this->Airport;
    }
    /**
     * Set Airport value
     * @param \Travelport\UniversalRecord\StructType\Airport $airport
     * @return \Travelport\UniversalRecord\StructType\FlightOrigin
     */
    public function setAirport(?\Travelport\UniversalRecord\StructType\Airport $airport = null): self
    {
        $this->Airport = $airport;
        
        return $this;
    }
}
