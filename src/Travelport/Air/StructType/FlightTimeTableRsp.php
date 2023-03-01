<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightTimeTableRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for Flight Time Table.
 * @subpackage Structs
 */
class FlightTimeTableRsp extends BaseSearchRsp
{
    /**
     * The FlightTimeTableList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\FlightTimeTableList|null
     */
    public ?\Travelport\Air\StructType\FlightTimeTableList $FlightTimeTableList = null;
    /**
     * Constructor method for FlightTimeTableRsp
     * @uses FlightTimeTableRsp::setFlightTimeTableList()
     * @param \Travelport\Air\StructType\FlightTimeTableList $flightTimeTableList
     */
    public function __construct(?\Travelport\Air\StructType\FlightTimeTableList $flightTimeTableList = null)
    {
        $this
            ->setFlightTimeTableList($flightTimeTableList);
    }
    /**
     * Get FlightTimeTableList value
     * @return \Travelport\Air\StructType\FlightTimeTableList|null
     */
    public function getFlightTimeTableList(): ?\Travelport\Air\StructType\FlightTimeTableList
    {
        return $this->FlightTimeTableList;
    }
    /**
     * Set FlightTimeTableList value
     * @param \Travelport\Air\StructType\FlightTimeTableList $flightTimeTableList
     * @return \Travelport\Air\StructType\FlightTimeTableRsp
     */
    public function setFlightTimeTableList(?\Travelport\Air\StructType\FlightTimeTableList $flightTimeTableList = null): self
    {
        $this->FlightTimeTableList = $flightTimeTableList;
        
        return $this;
    }
}
