<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Journey StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about all connecting segment list and total traveling time
 * @subpackage Structs
 */
class Journey extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public ?array $AirSegmentRef = null;
    /**
     * The TravelTime
     * Meta information extracted from the WSDL
     * - documentation: Total traveling time that is difference between the departure time of the first segment and the arrival time of the last segments for that particular entire set of connection.
     * - use: optional
     * @var string|null
     */
    public ?string $TravelTime = null;
    /**
     * Constructor method for Journey
     * @uses Journey::setAirSegmentRef()
     * @uses Journey::setTravelTime()
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @param string $travelTime
     */
    public function __construct(?array $airSegmentRef = null, ?string $travelTime = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setTravelTime($travelTime);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\Journey
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\Journey
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\AirSegmentRef $item): self
    {
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get TravelTime value
     * @return string|null
     */
    public function getTravelTime(): ?string
    {
        return $this->TravelTime;
    }
    /**
     * Set TravelTime value
     * @param string $travelTime
     * @return \Travelport\UniversalRecord\StructType\Journey
     */
    public function setTravelTime(?string $travelTime = null): self
    {
        $this->TravelTime = $travelTime;
        
        return $this;
    }
}
