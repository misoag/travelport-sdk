<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Base Request for Air Search
 * @subpackage Structs
 */
class AirSearchReq extends BaseSearchReq
{
    /**
     * The PointOfCommencement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:PointOfCommencement
     * @var \Travelport\Air\StructType\PointOfCommencement|null
     */
    public ?\Travelport\Air\StructType\PointOfCommencement $PointOfCommencement = null;
    /**
     * The SearchAirLeg
     * Meta information extracted from the WSDL
     * - choice: SearchAirLeg | SearchSpecificAirSegment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 16
     * - ref: SearchAirLeg
     * @var \Travelport\Air\StructType\SearchAirLeg[]
     */
    public ?array $SearchAirLeg = null;
    /**
     * The SearchSpecificAirSegment
     * Meta information extracted from the WSDL
     * - choice: SearchAirLeg | SearchSpecificAirSegment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: SearchSpecificAirSegment
     * @var \Travelport\Air\StructType\SearchSpecificAirSegment[]
     */
    public ?array $SearchSpecificAirSegment = null;
    /**
     * The AirSearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirSearchModifiers
     * @var \Travelport\Air\StructType\AirSearchModifiers|null
     */
    public ?\Travelport\Air\StructType\AirSearchModifiers $AirSearchModifiers = null;
    /**
     * The JourneyData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: JourneyData
     * @var \Travelport\Air\StructType\JourneyData|null
     */
    public ?\Travelport\Air\StructType\JourneyData $JourneyData = null;
    /**
     * Constructor method for AirSearchReq
     * @uses AirSearchReq::setPointOfCommencement()
     * @uses AirSearchReq::setSearchAirLeg()
     * @uses AirSearchReq::setSearchSpecificAirSegment()
     * @uses AirSearchReq::setAirSearchModifiers()
     * @uses AirSearchReq::setJourneyData()
     * @param \Travelport\Air\StructType\PointOfCommencement $pointOfCommencement
     * @param \Travelport\Air\StructType\SearchAirLeg[] $searchAirLeg
     * @param \Travelport\Air\StructType\SearchSpecificAirSegment[] $searchSpecificAirSegment
     * @param \Travelport\Air\StructType\AirSearchModifiers $airSearchModifiers
     * @param \Travelport\Air\StructType\JourneyData $journeyData
     */
    public function __construct(?\Travelport\Air\StructType\PointOfCommencement $pointOfCommencement = null, ?array $searchAirLeg = null, ?array $searchSpecificAirSegment = null, ?\Travelport\Air\StructType\AirSearchModifiers $airSearchModifiers = null, ?\Travelport\Air\StructType\JourneyData $journeyData = null)
    {
        $this
            ->setPointOfCommencement($pointOfCommencement)
            ->setSearchAirLeg($searchAirLeg)
            ->setSearchSpecificAirSegment($searchSpecificAirSegment)
            ->setAirSearchModifiers($airSearchModifiers)
            ->setJourneyData($journeyData);
    }
    /**
     * Get PointOfCommencement value
     * @return \Travelport\Air\StructType\PointOfCommencement|null
     */
    public function getPointOfCommencement(): ?\Travelport\Air\StructType\PointOfCommencement
    {
        return $this->PointOfCommencement;
    }
    /**
     * Set PointOfCommencement value
     * @param \Travelport\Air\StructType\PointOfCommencement $pointOfCommencement
     * @return \Travelport\Air\StructType\AirSearchReq
     */
    public function setPointOfCommencement(?\Travelport\Air\StructType\PointOfCommencement $pointOfCommencement = null): self
    {
        $this->PointOfCommencement = $pointOfCommencement;
        
        return $this;
    }
    /**
     * Get SearchAirLeg value
     * @return \Travelport\Air\StructType\SearchAirLeg[]|null
     */
    public function getSearchAirLeg(): ?array
    {
        return $this->SearchAirLeg ?? null;
    }
    /**
     * Set SearchAirLeg value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\SearchAirLeg[] $searchAirLeg
     * @return \Travelport\Air\StructType\AirSearchReq
     */
    public function setSearchAirLeg(?array $searchAirLeg = null): self
    {
        if (is_null($searchAirLeg) || (is_array($searchAirLeg) && empty($searchAirLeg))) {
            unset($this->SearchAirLeg);
        } else {
            $this->SearchAirLeg = $searchAirLeg;
        }
        
        return $this;
    }
    /**
     * Add item to SearchAirLeg value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SearchAirLeg $item
     * @return \Travelport\Air\StructType\AirSearchReq
     */
    public function addToSearchAirLeg(\Travelport\Air\StructType\SearchAirLeg $item): self
    {
        $this->SearchAirLeg[] = $item;
        
        return $this;
    }
    /**
     * Get SearchSpecificAirSegment value
     * @return \Travelport\Air\StructType\SearchSpecificAirSegment[]|null
     */
    public function getSearchSpecificAirSegment(): ?array
    {
        return $this->SearchSpecificAirSegment ?? null;
    }
    /**
     * Set SearchSpecificAirSegment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\SearchSpecificAirSegment[] $searchSpecificAirSegment
     * @return \Travelport\Air\StructType\AirSearchReq
     */
    public function setSearchSpecificAirSegment(?array $searchSpecificAirSegment = null): self
    {
        if (is_null($searchSpecificAirSegment) || (is_array($searchSpecificAirSegment) && empty($searchSpecificAirSegment))) {
            unset($this->SearchSpecificAirSegment);
        } else {
            $this->SearchSpecificAirSegment = $searchSpecificAirSegment;
        }
        
        return $this;
    }
    /**
     * Add item to SearchSpecificAirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SearchSpecificAirSegment $item
     * @return \Travelport\Air\StructType\AirSearchReq
     */
    public function addToSearchSpecificAirSegment(\Travelport\Air\StructType\SearchSpecificAirSegment $item): self
    {
        $this->SearchSpecificAirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get AirSearchModifiers value
     * @return \Travelport\Air\StructType\AirSearchModifiers|null
     */
    public function getAirSearchModifiers(): ?\Travelport\Air\StructType\AirSearchModifiers
    {
        return $this->AirSearchModifiers;
    }
    /**
     * Set AirSearchModifiers value
     * @param \Travelport\Air\StructType\AirSearchModifiers $airSearchModifiers
     * @return \Travelport\Air\StructType\AirSearchReq
     */
    public function setAirSearchModifiers(?\Travelport\Air\StructType\AirSearchModifiers $airSearchModifiers = null): self
    {
        $this->AirSearchModifiers = $airSearchModifiers;
        
        return $this;
    }
    /**
     * Get JourneyData value
     * @return \Travelport\Air\StructType\JourneyData|null
     */
    public function getJourneyData(): ?\Travelport\Air\StructType\JourneyData
    {
        return $this->JourneyData;
    }
    /**
     * Set JourneyData value
     * @param \Travelport\Air\StructType\JourneyData $journeyData
     * @return \Travelport\Air\StructType\AirSearchReq
     */
    public function setJourneyData(?\Travelport\Air\StructType\JourneyData $journeyData = null): self
    {
        $this->JourneyData = $journeyData;
        
        return $this;
    }
}
