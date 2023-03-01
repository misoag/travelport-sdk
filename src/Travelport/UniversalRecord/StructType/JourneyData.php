<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JourneyData StructType
 * Meta information extracted from the WSDL
 * - documentation: Performs journey aware air availability
 * @subpackage Structs
 */
class JourneyData extends AbstractStructBase
{
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - ref: AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * Constructor method for JourneyData
     * @uses JourneyData::setAirSegment()
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     */
    public function __construct(?array $airSegment = null)
    {
        $this
            ->setAirSegment($airSegment);
    }
    /**
     * Get AirSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\UniversalRecord\StructType\JourneyData
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item
     * @return \Travelport\UniversalRecord\StructType\JourneyData
     */
    public function addToAirSegment(\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
}
