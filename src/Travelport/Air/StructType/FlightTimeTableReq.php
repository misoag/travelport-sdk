<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightTimeTableReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request for Flight Time Table.
 * @subpackage Structs
 */
class FlightTimeTableReq extends BaseSearchReq
{
    /**
     * The FlightTimeTableCriteria
     * Meta information extracted from the WSDL
     * - ref: FlightTimeTableCriteria
     * @var \Travelport\Air\StructType\FlightTimeTableCriteria|null
     */
    public ?\Travelport\Air\StructType\FlightTimeTableCriteria $FlightTimeTableCriteria = null;
    /**
     * Constructor method for FlightTimeTableReq
     * @uses FlightTimeTableReq::setFlightTimeTableCriteria()
     * @param \Travelport\Air\StructType\FlightTimeTableCriteria $flightTimeTableCriteria
     */
    public function __construct(?\Travelport\Air\StructType\FlightTimeTableCriteria $flightTimeTableCriteria = null)
    {
        $this
            ->setFlightTimeTableCriteria($flightTimeTableCriteria);
    }
    /**
     * Get FlightTimeTableCriteria value
     * @return \Travelport\Air\StructType\FlightTimeTableCriteria|null
     */
    public function getFlightTimeTableCriteria(): ?\Travelport\Air\StructType\FlightTimeTableCriteria
    {
        return $this->FlightTimeTableCriteria;
    }
    /**
     * Set FlightTimeTableCriteria value
     * @param \Travelport\Air\StructType\FlightTimeTableCriteria $flightTimeTableCriteria
     * @return \Travelport\Air\StructType\FlightTimeTableReq
     */
    public function setFlightTimeTableCriteria(?\Travelport\Air\StructType\FlightTimeTableCriteria $flightTimeTableCriteria = null): self
    {
        $this->FlightTimeTableCriteria = $flightTimeTableCriteria;
        
        return $this;
    }
}
