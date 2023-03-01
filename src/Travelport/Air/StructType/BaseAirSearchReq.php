<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseAirSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Base Request for Low fare air Search
 * @subpackage Structs
 */
class BaseAirSearchReq extends BaseCoreSearchReq
{
    /**
     * The SearchAirLeg
     * Meta information extracted from the WSDL
     * - choice: SearchAirLeg | SearchSpecificAirSegment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 9
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
     * The SplitTicketingSearch
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: SplitTicketingSearch
     * @var \Travelport\Air\StructType\SplitTicketingSearch|null
     */
    public ?\Travelport\Air\StructType\SplitTicketingSearch $SplitTicketingSearch = null;
    /**
     * The JourneyData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: JourneyData
     * @var \Travelport\Air\StructType\JourneyData|null
     */
    public ?\Travelport\Air\StructType\JourneyData $JourneyData = null;
    /**
     * Constructor method for BaseAirSearchReq
     * @uses BaseAirSearchReq::setSearchAirLeg()
     * @uses BaseAirSearchReq::setSearchSpecificAirSegment()
     * @uses BaseAirSearchReq::setAirSearchModifiers()
     * @uses BaseAirSearchReq::setSplitTicketingSearch()
     * @uses BaseAirSearchReq::setJourneyData()
     * @param \Travelport\Air\StructType\SearchAirLeg[] $searchAirLeg
     * @param \Travelport\Air\StructType\SearchSpecificAirSegment[] $searchSpecificAirSegment
     * @param \Travelport\Air\StructType\AirSearchModifiers $airSearchModifiers
     * @param \Travelport\Air\StructType\SplitTicketingSearch $splitTicketingSearch
     * @param \Travelport\Air\StructType\JourneyData $journeyData
     */
    public function __construct(?array $searchAirLeg = null, ?array $searchSpecificAirSegment = null, ?\Travelport\Air\StructType\AirSearchModifiers $airSearchModifiers = null, ?\Travelport\Air\StructType\SplitTicketingSearch $splitTicketingSearch = null, ?\Travelport\Air\StructType\JourneyData $journeyData = null)
    {
        $this
            ->setSearchAirLeg($searchAirLeg)
            ->setSearchSpecificAirSegment($searchSpecificAirSegment)
            ->setAirSearchModifiers($airSearchModifiers)
            ->setSplitTicketingSearch($splitTicketingSearch)
            ->setJourneyData($journeyData);
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
     * @return \Travelport\Air\StructType\BaseAirSearchReq
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
     * @return \Travelport\Air\StructType\BaseAirSearchReq
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
     * @return \Travelport\Air\StructType\BaseAirSearchReq
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
     * @return \Travelport\Air\StructType\BaseAirSearchReq
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
     * @return \Travelport\Air\StructType\BaseAirSearchReq
     */
    public function setAirSearchModifiers(?\Travelport\Air\StructType\AirSearchModifiers $airSearchModifiers = null): self
    {
        $this->AirSearchModifiers = $airSearchModifiers;
        
        return $this;
    }
    /**
     * Get SplitTicketingSearch value
     * @return \Travelport\Air\StructType\SplitTicketingSearch|null
     */
    public function getSplitTicketingSearch(): ?\Travelport\Air\StructType\SplitTicketingSearch
    {
        return $this->SplitTicketingSearch;
    }
    /**
     * Set SplitTicketingSearch value
     * @param \Travelport\Air\StructType\SplitTicketingSearch $splitTicketingSearch
     * @return \Travelport\Air\StructType\BaseAirSearchReq
     */
    public function setSplitTicketingSearch(?\Travelport\Air\StructType\SplitTicketingSearch $splitTicketingSearch = null): self
    {
        $this->SplitTicketingSearch = $splitTicketingSearch;
        
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
     * @return \Travelport\Air\StructType\BaseAirSearchReq
     */
    public function setJourneyData(?\Travelport\Air\StructType\JourneyData $journeyData = null): self
    {
        $this->JourneyData = $journeyData;
        
        return $this;
    }
}
