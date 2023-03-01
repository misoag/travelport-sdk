<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightTimeTableList StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: 1G,1V.
 * @subpackage Structs
 */
class FlightTimeTableList extends AbstractStructBase
{
    /**
     * The FlightTimeDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FlightTimeDetail
     * @var \Travelport\Air\StructType\FlightTimeDetail[]
     */
    public ?array $FlightTimeDetail = null;
    /**
     * Constructor method for FlightTimeTableList
     * @uses FlightTimeTableList::setFlightTimeDetail()
     * @param \Travelport\Air\StructType\FlightTimeDetail[] $flightTimeDetail
     */
    public function __construct(?array $flightTimeDetail = null)
    {
        $this
            ->setFlightTimeDetail($flightTimeDetail);
    }
    /**
     * Get FlightTimeDetail value
     * @return \Travelport\Air\StructType\FlightTimeDetail[]
     */
    public function getFlightTimeDetail(): ?array
    {
        return $this->FlightTimeDetail;
    }
    /**
     * Set FlightTimeDetail value
     * @param \Travelport\Air\StructType\FlightTimeDetail[] $flightTimeDetail
     * @return \Travelport\Air\StructType\FlightTimeTableList
     */
    public function setFlightTimeDetail(?array $flightTimeDetail = null): self
    {
        $this->FlightTimeDetail = $flightTimeDetail;
        
        return $this;
    }
    /**
     * Add item to FlightTimeDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FlightTimeDetail $item
     * @return \Travelport\Air\StructType\FlightTimeTableList
     */
    public function addToFlightTimeDetail(\Travelport\Air\StructType\FlightTimeDetail $item): self
    {
        $this->FlightTimeDetail[] = $item;
        
        return $this;
    }
}
