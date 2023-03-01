<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItinerarySolution StructType
 * Meta information extracted from the WSDL
 * - documentation: The pricing container for an air travel itinerary
 * @subpackage Structs
 */
class AirItinerarySolution extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
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
     * The Connection
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\UniversalRecord\StructType\Connection[]
     */
    public ?array $Connection = null;
    /**
     * Constructor method for AirItinerarySolution
     * @uses AirItinerarySolution::setKey()
     * @uses AirItinerarySolution::setAirSegmentRef()
     * @uses AirItinerarySolution::setConnection()
     * @param string $key
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @param \Travelport\UniversalRecord\StructType\Connection[] $connection
     */
    public function __construct(string $key, ?array $airSegmentRef = null, ?array $connection = null)
    {
        $this
            ->setKey($key)
            ->setAirSegmentRef($airSegmentRef)
            ->setConnection($connection);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\AirItinerarySolution
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\AirItinerarySolution
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
     * @return \Travelport\UniversalRecord\StructType\AirItinerarySolution
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\AirSegmentRef $item): self
    {
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return \Travelport\UniversalRecord\StructType\Connection[]
     */
    public function getConnection(): ?array
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @param \Travelport\UniversalRecord\StructType\Connection[] $connection
     * @return \Travelport\UniversalRecord\StructType\AirItinerarySolution
     */
    public function setConnection(?array $connection = null): self
    {
        $this->Connection = $connection;
        
        return $this;
    }
    /**
     * Add item to Connection value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Connection $item
     * @return \Travelport\UniversalRecord\StructType\AirItinerarySolution
     */
    public function addToConnection(\Travelport\UniversalRecord\StructType\Connection $item): self
    {
        $this->Connection[] = $item;
        
        return $this;
    }
}
