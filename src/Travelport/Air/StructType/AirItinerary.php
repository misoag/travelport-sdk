<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItinerary StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for an Air only travel itinerary.
 * @subpackage Structs
 */
class AirItinerary extends AbstractStructBase
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
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Air\StructType\HostToken[]
     */
    public ?array $HostToken = null;
    /**
     * The APISRequirements
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: APISRequirements
     * @var \Travelport\Air\StructType\APISRequirements[]
     */
    public ?array $APISRequirements = null;
    /**
     * Constructor method for AirItinerary
     * @uses AirItinerary::setAirSegment()
     * @uses AirItinerary::setHostToken()
     * @uses AirItinerary::setAPISRequirements()
     * @param \Travelport\Air\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @param \Travelport\Air\StructType\APISRequirements[] $aPISRequirements
     */
    public function __construct(?array $airSegment = null, ?array $hostToken = null, ?array $aPISRequirements = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setHostToken($hostToken)
            ->setAPISRequirements($aPISRequirements);
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
     * @return \Travelport\Air\StructType\AirItinerary
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
     * @return \Travelport\Air\StructType\AirItinerary
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
     * @return \Travelport\Air\StructType\AirItinerary
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
     * @return \Travelport\Air\StructType\AirItinerary
     */
    public function addToHostToken(\Travelport\Air\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get APISRequirements value
     * @return \Travelport\Air\StructType\APISRequirements[]
     */
    public function getAPISRequirements(): ?array
    {
        return $this->APISRequirements;
    }
    /**
     * Set APISRequirements value
     * @param \Travelport\Air\StructType\APISRequirements[] $aPISRequirements
     * @return \Travelport\Air\StructType\AirItinerary
     */
    public function setAPISRequirements(?array $aPISRequirements = null): self
    {
        $this->APISRequirements = $aPISRequirements;
        
        return $this;
    }
    /**
     * Add item to APISRequirements value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\APISRequirements $item
     * @return \Travelport\Air\StructType\AirItinerary
     */
    public function addToAPISRequirements(\Travelport\Air\StructType\APISRequirements $item): self
    {
        $this->APISRequirements[] = $item;
        
        return $this;
    }
}
