<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightInformationReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request for the Flight Info of segments.
 * @subpackage Structs
 */
class FlightInformationReq extends BaseReq
{
    /**
     * The FlightInfoCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FlightInfoCriteria
     * @var \Travelport\Air\StructType\FlightInfoCriteria[]
     */
    public ?array $FlightInfoCriteria = null;
    /**
     * Constructor method for FlightInformationReq
     * @uses FlightInformationReq::setFlightInfoCriteria()
     * @param \Travelport\Air\StructType\FlightInfoCriteria[] $flightInfoCriteria
     */
    public function __construct(?array $flightInfoCriteria = null)
    {
        $this
            ->setFlightInfoCriteria($flightInfoCriteria);
    }
    /**
     * Get FlightInfoCriteria value
     * @return \Travelport\Air\StructType\FlightInfoCriteria[]
     */
    public function getFlightInfoCriteria(): ?array
    {
        return $this->FlightInfoCriteria;
    }
    /**
     * Set FlightInfoCriteria value
     * @param \Travelport\Air\StructType\FlightInfoCriteria[] $flightInfoCriteria
     * @return \Travelport\Air\StructType\FlightInformationReq
     */
    public function setFlightInfoCriteria(?array $flightInfoCriteria = null): self
    {
        $this->FlightInfoCriteria = $flightInfoCriteria;
        
        return $this;
    }
    /**
     * Add item to FlightInfoCriteria value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FlightInfoCriteria $item
     * @return \Travelport\Air\StructType\FlightInformationReq
     */
    public function addToFlightInfoCriteria(\Travelport\Air\StructType\FlightInfoCriteria $item): self
    {
        $this->FlightInfoCriteria[] = $item;
        
        return $this;
    }
}
