<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightInformationRsp StructType
 * @subpackage Structs
 */
class FlightInformationRsp extends BaseRsp
{
    /**
     * The FlightInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FlightInfo
     * @var \Travelport\Air\StructType\FlightInfo[]
     */
    public ?array $FlightInfo = null;
    /**
     * Constructor method for FlightInformationRsp
     * @uses FlightInformationRsp::setFlightInfo()
     * @param \Travelport\Air\StructType\FlightInfo[] $flightInfo
     */
    public function __construct(?array $flightInfo = null)
    {
        $this
            ->setFlightInfo($flightInfo);
    }
    /**
     * Get FlightInfo value
     * @return \Travelport\Air\StructType\FlightInfo[]
     */
    public function getFlightInfo(): ?array
    {
        return $this->FlightInfo;
    }
    /**
     * Set FlightInfo value
     * @param \Travelport\Air\StructType\FlightInfo[] $flightInfo
     * @return \Travelport\Air\StructType\FlightInformationRsp
     */
    public function setFlightInfo(?array $flightInfo = null): self
    {
        $this->FlightInfo = $flightInfo;
        
        return $this;
    }
    /**
     * Add item to FlightInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FlightInfo $item
     * @return \Travelport\Air\StructType\FlightInformationRsp
     */
    public function addToFlightInfo(\Travelport\Air\StructType\FlightInfo $item): self
    {
        $this->FlightInfo[] = $item;
        
        return $this;
    }
}
