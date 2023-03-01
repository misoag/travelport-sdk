<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightDetailsRsp StructType
 * @subpackage Structs
 */
class FlightDetailsRsp extends BaseRsp
{
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirSegment
     * @var \Travelport\Air\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * The CO2Emissions
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: CO2Emissions
     * @var \Travelport\Air\StructType\CO2Emissions[]
     */
    public ?array $CO2Emissions = null;
    /**
     * Constructor method for FlightDetailsRsp
     * @uses FlightDetailsRsp::setAirSegment()
     * @uses FlightDetailsRsp::setCO2Emissions()
     * @param \Travelport\Air\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\Air\StructType\CO2Emissions[] $cO2Emissions
     */
    public function __construct(?array $airSegment = null, ?array $cO2Emissions = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setCO2Emissions($cO2Emissions);
    }
    /**
     * Get AirSegment value
     * @return \Travelport\Air\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\Air\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\Air\StructType\FlightDetailsRsp
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeBaseAirSegment $item
     * @return \Travelport\Air\StructType\FlightDetailsRsp
     */
    public function addToAirSegment(\Travelport\Air\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get CO2Emissions value
     * @return \Travelport\Air\StructType\CO2Emissions[]
     */
    public function getCO2Emissions(): ?array
    {
        return $this->CO2Emissions;
    }
    /**
     * Set CO2Emissions value
     * @param \Travelport\Air\StructType\CO2Emissions[] $cO2Emissions
     * @return \Travelport\Air\StructType\FlightDetailsRsp
     */
    public function setCO2Emissions(?array $cO2Emissions = null): self
    {
        $this->CO2Emissions = $cO2Emissions;
        
        return $this;
    }
    /**
     * Add item to CO2Emissions value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\CO2Emissions $item
     * @return \Travelport\Air\StructType\FlightDetailsRsp
     */
    public function addToCO2Emissions(\Travelport\Air\StructType\CO2Emissions $item): self
    {
        $this->CO2Emissions[] = $item;
        
        return $this;
    }
}
