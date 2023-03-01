<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSolution StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines an air solution that is comprised of an itinerary (the segments) along with the passengers.
 * @subpackage Structs
 */
class AirSolution extends AbstractStructBase
{
    /**
     * The SearchTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: SearchTraveler
     * @var \Travelport\Air\StructType\SearchTraveler[]
     */
    public ?array $SearchTraveler = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - ref: AirSegment
     * @var \Travelport\Air\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Air\StructType\HostToken[]
     */
    public ?array $HostToken = null;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * - ref: FareBasis
     * @var \Travelport\Air\StructType\FareBasis[]
     */
    public ?array $FareBasis = null;
    /**
     * Constructor method for AirSolution
     * @uses AirSolution::setSearchTraveler()
     * @uses AirSolution::setAirSegment()
     * @uses AirSolution::setHostToken()
     * @uses AirSolution::setFareBasis()
     * @param \Travelport\Air\StructType\SearchTraveler[] $searchTraveler
     * @param \Travelport\Air\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @param \Travelport\Air\StructType\FareBasis[] $fareBasis
     */
    public function __construct(?array $searchTraveler = null, ?array $airSegment = null, ?array $hostToken = null, ?array $fareBasis = null)
    {
        $this
            ->setSearchTraveler($searchTraveler)
            ->setAirSegment($airSegment)
            ->setHostToken($hostToken)
            ->setFareBasis($fareBasis);
    }
    /**
     * Get SearchTraveler value
     * @return \Travelport\Air\StructType\SearchTraveler[]
     */
    public function getSearchTraveler(): ?array
    {
        return $this->SearchTraveler;
    }
    /**
     * Set SearchTraveler value
     * @param \Travelport\Air\StructType\SearchTraveler[] $searchTraveler
     * @return \Travelport\Air\StructType\AirSolution
     */
    public function setSearchTraveler(?array $searchTraveler = null): self
    {
        $this->SearchTraveler = $searchTraveler;
        
        return $this;
    }
    /**
     * Add item to SearchTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SearchTraveler $item
     * @return \Travelport\Air\StructType\AirSolution
     */
    public function addToSearchTraveler(\Travelport\Air\StructType\SearchTraveler $item): self
    {
        $this->SearchTraveler[] = $item;
        
        return $this;
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
     * @return \Travelport\Air\StructType\AirSolution
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
     * @return \Travelport\Air\StructType\AirSolution
     */
    public function addToAirSegment(\Travelport\Air\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\Air\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @return \Travelport\Air\StructType\AirSolution
     */
    public function setHostToken(?array $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\HostToken $item
     * @return \Travelport\Air\StructType\AirSolution
     */
    public function addToHostToken(\Travelport\Air\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return \Travelport\Air\StructType\FareBasis[]
     */
    public function getFareBasis(): ?array
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param \Travelport\Air\StructType\FareBasis[] $fareBasis
     * @return \Travelport\Air\StructType\AirSolution
     */
    public function setFareBasis(?array $fareBasis = null): self
    {
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Add item to FareBasis value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareBasis $item
     * @return \Travelport\Air\StructType\AirSolution
     */
    public function addToFareBasis(\Travelport\Air\StructType\FareBasis $item): self
    {
        $this->FareBasis[] = $item;
        
        return $this;
    }
}
