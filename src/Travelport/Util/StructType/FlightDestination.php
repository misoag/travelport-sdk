<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\Airport|null
     */
    protected ?\Travelport\Util\StructType\Airport $Airport = null;
    /**
     * Constructor method for FlightDestination
     * @uses FlightDestination::setAirport()
     * @param \Travelport\Util\StructType\Airport $airport
     */
    public function __construct(?\Travelport\Util\StructType\Airport $airport = null)
    {
        $this
            ->setAirport($airport);
    }
    /**
     * Get Airport value
     * @return \Travelport\Util\StructType\Airport|null
     */
    public function getAirport(): ?\Travelport\Util\StructType\Airport
    {
        return $this->Airport;
    }
    /**
     * Set Airport value
     * @param \Travelport\Util\StructType\Airport $airport
     * @return \Travelport\Util\StructType\FlightDestination
     */
    public function setAirport(?\Travelport\Util\StructType\Airport $airport = null): self
    {
        $this->Airport = $airport;
        
        return $this;
    }
}
