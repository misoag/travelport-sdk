<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTraveler StructType
 * @subpackage Structs
 */
class SearchTraveler extends TypePassengerType
{
    /**
     * The AirSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AirSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\AirSeatAssignment[]
     */
    public ?array $AirSeatAssignment = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for SearchTraveler
     * @uses SearchTraveler::setAirSeatAssignment()
     * @uses SearchTraveler::setKey()
     * @param \Travelport\UniversalRecord\StructType\AirSeatAssignment[] $airSeatAssignment
     * @param string $key
     */
    public function __construct(?array $airSeatAssignment = null, ?string $key = null)
    {
        $this
            ->setAirSeatAssignment($airSeatAssignment)
            ->setKey($key);
    }
    /**
     * Get AirSeatAssignment value
     * @return \Travelport\UniversalRecord\StructType\AirSeatAssignment[]
     */
    public function getAirSeatAssignment(): ?array
    {
        return $this->AirSeatAssignment;
    }
    /**
     * Set AirSeatAssignment value
     * @param \Travelport\UniversalRecord\StructType\AirSeatAssignment[] $airSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\SearchTraveler
     */
    public function setAirSeatAssignment(?array $airSeatAssignment = null): self
    {
        $this->AirSeatAssignment = $airSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to AirSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSeatAssignment $item
     * @return \Travelport\UniversalRecord\StructType\SearchTraveler
     */
    public function addToAirSeatAssignment(\Travelport\UniversalRecord\StructType\AirSeatAssignment $item): self
    {
        $this->AirSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\SearchTraveler
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
