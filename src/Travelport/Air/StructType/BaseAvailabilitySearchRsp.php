<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseAvailabilitySearchRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Availability Search response
 * @subpackage Structs
 */
class BaseAvailabilitySearchRsp extends BaseSearchRsp
{
    /**
     * The FlightDetailsList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FlightDetailsList
     * @var \Travelport\Air\StructType\FlightDetailsList|null
     */
    public ?\Travelport\Air\StructType\FlightDetailsList $FlightDetailsList = null;
    /**
     * The AirSegmentList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirSegmentList
     * @var \Travelport\Air\StructType\AirSegmentList|null
     */
    public ?\Travelport\Air\StructType\AirSegmentList $AirSegmentList = null;
    /**
     * The FareInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareInfoList
     * @var \Travelport\Air\StructType\FareInfoList|null
     */
    public ?\Travelport\Air\StructType\FareInfoList $FareInfoList = null;
    /**
     * The FareRemarkList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRemarkList
     * @var \Travelport\Air\StructType\FareRemarkList|null
     */
    public ?\Travelport\Air\StructType\FareRemarkList $FareRemarkList = null;
    /**
     * The AirItinerarySolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirItinerarySolution
     * @var \Travelport\Air\StructType\AirItinerarySolution[]
     */
    public ?array $AirItinerarySolution = null;
    /**
     * The HostTokenList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: HostTokenList
     * @var \Travelport\Air\StructType\HostTokenList|null
     */
    public ?\Travelport\Air\StructType\HostTokenList $HostTokenList = null;
    /**
     * The APISRequirementsList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: APISRequirementsList
     * @var \Travelport\Air\StructType\APISRequirementsList|null
     */
    public ?\Travelport\Air\StructType\APISRequirementsList $APISRequirementsList = null;
    /**
     * The DistanceUnits
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $DistanceUnits = null;
    /**
     * Constructor method for BaseAvailabilitySearchRsp
     * @uses BaseAvailabilitySearchRsp::setFlightDetailsList()
     * @uses BaseAvailabilitySearchRsp::setAirSegmentList()
     * @uses BaseAvailabilitySearchRsp::setFareInfoList()
     * @uses BaseAvailabilitySearchRsp::setFareRemarkList()
     * @uses BaseAvailabilitySearchRsp::setAirItinerarySolution()
     * @uses BaseAvailabilitySearchRsp::setHostTokenList()
     * @uses BaseAvailabilitySearchRsp::setAPISRequirementsList()
     * @uses BaseAvailabilitySearchRsp::setDistanceUnits()
     * @param \Travelport\Air\StructType\FlightDetailsList $flightDetailsList
     * @param \Travelport\Air\StructType\AirSegmentList $airSegmentList
     * @param \Travelport\Air\StructType\FareInfoList $fareInfoList
     * @param \Travelport\Air\StructType\FareRemarkList $fareRemarkList
     * @param \Travelport\Air\StructType\AirItinerarySolution[] $airItinerarySolution
     * @param \Travelport\Air\StructType\HostTokenList $hostTokenList
     * @param \Travelport\Air\StructType\APISRequirementsList $aPISRequirementsList
     * @param string $distanceUnits
     */
    public function __construct(?\Travelport\Air\StructType\FlightDetailsList $flightDetailsList = null, ?\Travelport\Air\StructType\AirSegmentList $airSegmentList = null, ?\Travelport\Air\StructType\FareInfoList $fareInfoList = null, ?\Travelport\Air\StructType\FareRemarkList $fareRemarkList = null, ?array $airItinerarySolution = null, ?\Travelport\Air\StructType\HostTokenList $hostTokenList = null, ?\Travelport\Air\StructType\APISRequirementsList $aPISRequirementsList = null, ?string $distanceUnits = null)
    {
        $this
            ->setFlightDetailsList($flightDetailsList)
            ->setAirSegmentList($airSegmentList)
            ->setFareInfoList($fareInfoList)
            ->setFareRemarkList($fareRemarkList)
            ->setAirItinerarySolution($airItinerarySolution)
            ->setHostTokenList($hostTokenList)
            ->setAPISRequirementsList($aPISRequirementsList)
            ->setDistanceUnits($distanceUnits);
    }
    /**
     * Get FlightDetailsList value
     * @return \Travelport\Air\StructType\FlightDetailsList|null
     */
    public function getFlightDetailsList(): ?\Travelport\Air\StructType\FlightDetailsList
    {
        return $this->FlightDetailsList;
    }
    /**
     * Set FlightDetailsList value
     * @param \Travelport\Air\StructType\FlightDetailsList $flightDetailsList
     * @return \Travelport\Air\StructType\BaseAvailabilitySearchRsp
     */
    public function setFlightDetailsList(?\Travelport\Air\StructType\FlightDetailsList $flightDetailsList = null): self
    {
        $this->FlightDetailsList = $flightDetailsList;
        
        return $this;
    }
    /**
     * Get AirSegmentList value
     * @return \Travelport\Air\StructType\AirSegmentList|null
     */
    public function getAirSegmentList(): ?\Travelport\Air\StructType\AirSegmentList
    {
        return $this->AirSegmentList;
    }
    /**
     * Set AirSegmentList value
     * @param \Travelport\Air\StructType\AirSegmentList $airSegmentList
     * @return \Travelport\Air\StructType\BaseAvailabilitySearchRsp
     */
    public function setAirSegmentList(?\Travelport\Air\StructType\AirSegmentList $airSegmentList = null): self
    {
        $this->AirSegmentList = $airSegmentList;
        
        return $this;
    }
    /**
     * Get FareInfoList value
     * @return \Travelport\Air\StructType\FareInfoList|null
     */
    public function getFareInfoList(): ?\Travelport\Air\StructType\FareInfoList
    {
        return $this->FareInfoList;
    }
    /**
     * Set FareInfoList value
     * @param \Travelport\Air\StructType\FareInfoList $fareInfoList
     * @return \Travelport\Air\StructType\BaseAvailabilitySearchRsp
     */
    public function setFareInfoList(?\Travelport\Air\StructType\FareInfoList $fareInfoList = null): self
    {
        $this->FareInfoList = $fareInfoList;
        
        return $this;
    }
    /**
     * Get FareRemarkList value
     * @return \Travelport\Air\StructType\FareRemarkList|null
     */
    public function getFareRemarkList(): ?\Travelport\Air\StructType\FareRemarkList
    {
        return $this->FareRemarkList;
    }
    /**
     * Set FareRemarkList value
     * @param \Travelport\Air\StructType\FareRemarkList $fareRemarkList
     * @return \Travelport\Air\StructType\BaseAvailabilitySearchRsp
     */
    public function setFareRemarkList(?\Travelport\Air\StructType\FareRemarkList $fareRemarkList = null): self
    {
        $this->FareRemarkList = $fareRemarkList;
        
        return $this;
    }
    /**
     * Get AirItinerarySolution value
     * @return \Travelport\Air\StructType\AirItinerarySolution[]
     */
    public function getAirItinerarySolution(): ?array
    {
        return $this->AirItinerarySolution;
    }
    /**
     * Set AirItinerarySolution value
     * @param \Travelport\Air\StructType\AirItinerarySolution[] $airItinerarySolution
     * @return \Travelport\Air\StructType\BaseAvailabilitySearchRsp
     */
    public function setAirItinerarySolution(?array $airItinerarySolution = null): self
    {
        $this->AirItinerarySolution = $airItinerarySolution;
        
        return $this;
    }
    /**
     * Add item to AirItinerarySolution value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirItinerarySolution $item
     * @return \Travelport\Air\StructType\BaseAvailabilitySearchRsp
     */
    public function addToAirItinerarySolution(\Travelport\Air\StructType\AirItinerarySolution $item): self
    {
        $this->AirItinerarySolution[] = $item;
        
        return $this;
    }
    /**
     * Get HostTokenList value
     * @return \Travelport\Air\StructType\HostTokenList|null
     */
    public function getHostTokenList(): ?\Travelport\Air\StructType\HostTokenList
    {
        return $this->HostTokenList;
    }
    /**
     * Set HostTokenList value
     * @param \Travelport\Air\StructType\HostTokenList $hostTokenList
     * @return \Travelport\Air\StructType\BaseAvailabilitySearchRsp
     */
    public function setHostTokenList(?\Travelport\Air\StructType\HostTokenList $hostTokenList = null): self
    {
        $this->HostTokenList = $hostTokenList;
        
        return $this;
    }
    /**
     * Get APISRequirementsList value
     * @return \Travelport\Air\StructType\APISRequirementsList|null
     */
    public function getAPISRequirementsList(): ?\Travelport\Air\StructType\APISRequirementsList
    {
        return $this->APISRequirementsList;
    }
    /**
     * Set APISRequirementsList value
     * @param \Travelport\Air\StructType\APISRequirementsList $aPISRequirementsList
     * @return \Travelport\Air\StructType\BaseAvailabilitySearchRsp
     */
    public function setAPISRequirementsList(?\Travelport\Air\StructType\APISRequirementsList $aPISRequirementsList = null): self
    {
        $this->APISRequirementsList = $aPISRequirementsList;
        
        return $this;
    }
    /**
     * Get DistanceUnits value
     * @return string|null
     */
    public function getDistanceUnits(): ?string
    {
        return $this->DistanceUnits;
    }
    /**
     * Set DistanceUnits value
     * @param string $distanceUnits
     * @return \Travelport\Air\StructType\BaseAvailabilitySearchRsp
     */
    public function setDistanceUnits(?string $distanceUnits = null): self
    {
        $this->DistanceUnits = $distanceUnits;
        
        return $this;
    }
}
