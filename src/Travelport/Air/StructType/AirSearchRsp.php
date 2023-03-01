<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSearchRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Base Response for Air Search
 * @subpackage Structs
 */
class AirSearchRsp extends BaseAvailabilitySearchRsp
{
    /**
     * The FareNoteList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareNoteList
     * @var \Travelport\Air\StructType\FareNoteList|null
     */
    public ?\Travelport\Air\StructType\FareNoteList $FareNoteList = null;
    /**
     * The ExpertSolutionList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ExpertSolutionList
     * @var \Travelport\Air\StructType\ExpertSolutionList|null
     */
    public ?\Travelport\Air\StructType\ExpertSolutionList $ExpertSolutionList = null;
    /**
     * The RouteList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RouteList
     * @var \Travelport\Air\StructType\RouteList|null
     */
    public ?\Travelport\Air\StructType\RouteList $RouteList = null;
    /**
     * The AlternateRouteList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AlternateRouteList
     * @var \Travelport\Air\StructType\AlternateRouteList|null
     */
    public ?\Travelport\Air\StructType\AlternateRouteList $AlternateRouteList = null;
    /**
     * The AlternateLocationDistanceList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AlternateLocationDistanceList
     * @var \Travelport\Air\StructType\AlternateLocationDistanceList|null
     */
    public ?\Travelport\Air\StructType\AlternateLocationDistanceList $AlternateLocationDistanceList = null;
    /**
     * The FareInfoMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: FareInfoMessage
     * @var \Travelport\Air\StructType\FareInfoMessage[]
     */
    public ?array $FareInfoMessage = null;
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - choice: AirPricingSolution | AirPricePointList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingSolution
     * @var \Travelport\Air\StructType\AirPricingSolution[]
     */
    public ?array $AirPricingSolution = null;
    /**
     * The AirPricePointList
     * Meta information extracted from the WSDL
     * - choice: AirPricingSolution | AirPricePointList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * - ref: AirPricePointList
     * @var \Travelport\Air\StructType\AirPricePointList|null
     */
    public ?\Travelport\Air\StructType\AirPricePointList $AirPricePointList = null;
    /**
     * The RailSegmentList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: rail:RailSegmentList
     * @var \Travelport\Air\StructType\RailSegmentList|null
     */
    public ?\Travelport\Air\StructType\RailSegmentList $RailSegmentList = null;
    /**
     * The RailJourneyList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: rail:RailJourneyList
     * @var \Travelport\Air\StructType\RailJourneyList|null
     */
    public ?\Travelport\Air\StructType\RailJourneyList $RailJourneyList = null;
    /**
     * The RailFareNoteList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: rail:RailFareNoteList
     * @var \Travelport\Air\StructType\RailFareNoteList|null
     */
    public ?\Travelport\Air\StructType\RailFareNoteList $RailFareNoteList = null;
    /**
     * The RailFareIDList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: rail:RailFareIDList
     * @var \Travelport\Air\StructType\RailFareIDList|null
     */
    public ?\Travelport\Air\StructType\RailFareIDList $RailFareIDList = null;
    /**
     * The RailFareList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: rail:RailFareList
     * @var \Travelport\Air\StructType\RailFareList|null
     */
    public ?\Travelport\Air\StructType\RailFareList $RailFareList = null;
    /**
     * The RailPricingSolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: rail:RailPricingSolution
     * @var \Travelport\Air\StructType\RailPricingSolution[]
     */
    public ?array $RailPricingSolution = null;
    /**
     * Constructor method for AirSearchRsp
     * @uses AirSearchRsp::setFareNoteList()
     * @uses AirSearchRsp::setExpertSolutionList()
     * @uses AirSearchRsp::setRouteList()
     * @uses AirSearchRsp::setAlternateRouteList()
     * @uses AirSearchRsp::setAlternateLocationDistanceList()
     * @uses AirSearchRsp::setFareInfoMessage()
     * @uses AirSearchRsp::setAirPricingSolution()
     * @uses AirSearchRsp::setAirPricePointList()
     * @uses AirSearchRsp::setRailSegmentList()
     * @uses AirSearchRsp::setRailJourneyList()
     * @uses AirSearchRsp::setRailFareNoteList()
     * @uses AirSearchRsp::setRailFareIDList()
     * @uses AirSearchRsp::setRailFareList()
     * @uses AirSearchRsp::setRailPricingSolution()
     * @param \Travelport\Air\StructType\FareNoteList $fareNoteList
     * @param \Travelport\Air\StructType\ExpertSolutionList $expertSolutionList
     * @param \Travelport\Air\StructType\RouteList $routeList
     * @param \Travelport\Air\StructType\AlternateRouteList $alternateRouteList
     * @param \Travelport\Air\StructType\AlternateLocationDistanceList $alternateLocationDistanceList
     * @param \Travelport\Air\StructType\FareInfoMessage[] $fareInfoMessage
     * @param \Travelport\Air\StructType\AirPricingSolution[] $airPricingSolution
     * @param \Travelport\Air\StructType\AirPricePointList $airPricePointList
     * @param \Travelport\Air\StructType\RailSegmentList $railSegmentList
     * @param \Travelport\Air\StructType\RailJourneyList $railJourneyList
     * @param \Travelport\Air\StructType\RailFareNoteList $railFareNoteList
     * @param \Travelport\Air\StructType\RailFareIDList $railFareIDList
     * @param \Travelport\Air\StructType\RailFareList $railFareList
     * @param \Travelport\Air\StructType\RailPricingSolution[] $railPricingSolution
     */
    public function __construct(?\Travelport\Air\StructType\FareNoteList $fareNoteList = null, ?\Travelport\Air\StructType\ExpertSolutionList $expertSolutionList = null, ?\Travelport\Air\StructType\RouteList $routeList = null, ?\Travelport\Air\StructType\AlternateRouteList $alternateRouteList = null, ?\Travelport\Air\StructType\AlternateLocationDistanceList $alternateLocationDistanceList = null, ?array $fareInfoMessage = null, ?array $airPricingSolution = null, ?\Travelport\Air\StructType\AirPricePointList $airPricePointList = null, ?\Travelport\Air\StructType\RailSegmentList $railSegmentList = null, ?\Travelport\Air\StructType\RailJourneyList $railJourneyList = null, ?\Travelport\Air\StructType\RailFareNoteList $railFareNoteList = null, ?\Travelport\Air\StructType\RailFareIDList $railFareIDList = null, ?\Travelport\Air\StructType\RailFareList $railFareList = null, ?array $railPricingSolution = null)
    {
        $this
            ->setFareNoteList($fareNoteList)
            ->setExpertSolutionList($expertSolutionList)
            ->setRouteList($routeList)
            ->setAlternateRouteList($alternateRouteList)
            ->setAlternateLocationDistanceList($alternateLocationDistanceList)
            ->setFareInfoMessage($fareInfoMessage)
            ->setAirPricingSolution($airPricingSolution)
            ->setAirPricePointList($airPricePointList)
            ->setRailSegmentList($railSegmentList)
            ->setRailJourneyList($railJourneyList)
            ->setRailFareNoteList($railFareNoteList)
            ->setRailFareIDList($railFareIDList)
            ->setRailFareList($railFareList)
            ->setRailPricingSolution($railPricingSolution);
    }
    /**
     * Get FareNoteList value
     * @return \Travelport\Air\StructType\FareNoteList|null
     */
    public function getFareNoteList(): ?\Travelport\Air\StructType\FareNoteList
    {
        return $this->FareNoteList;
    }
    /**
     * Set FareNoteList value
     * @param \Travelport\Air\StructType\FareNoteList $fareNoteList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setFareNoteList(?\Travelport\Air\StructType\FareNoteList $fareNoteList = null): self
    {
        $this->FareNoteList = $fareNoteList;
        
        return $this;
    }
    /**
     * Get ExpertSolutionList value
     * @return \Travelport\Air\StructType\ExpertSolutionList|null
     */
    public function getExpertSolutionList(): ?\Travelport\Air\StructType\ExpertSolutionList
    {
        return $this->ExpertSolutionList;
    }
    /**
     * Set ExpertSolutionList value
     * @param \Travelport\Air\StructType\ExpertSolutionList $expertSolutionList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setExpertSolutionList(?\Travelport\Air\StructType\ExpertSolutionList $expertSolutionList = null): self
    {
        $this->ExpertSolutionList = $expertSolutionList;
        
        return $this;
    }
    /**
     * Get RouteList value
     * @return \Travelport\Air\StructType\RouteList|null
     */
    public function getRouteList(): ?\Travelport\Air\StructType\RouteList
    {
        return $this->RouteList;
    }
    /**
     * Set RouteList value
     * @param \Travelport\Air\StructType\RouteList $routeList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setRouteList(?\Travelport\Air\StructType\RouteList $routeList = null): self
    {
        $this->RouteList = $routeList;
        
        return $this;
    }
    /**
     * Get AlternateRouteList value
     * @return \Travelport\Air\StructType\AlternateRouteList|null
     */
    public function getAlternateRouteList(): ?\Travelport\Air\StructType\AlternateRouteList
    {
        return $this->AlternateRouteList;
    }
    /**
     * Set AlternateRouteList value
     * @param \Travelport\Air\StructType\AlternateRouteList $alternateRouteList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setAlternateRouteList(?\Travelport\Air\StructType\AlternateRouteList $alternateRouteList = null): self
    {
        $this->AlternateRouteList = $alternateRouteList;
        
        return $this;
    }
    /**
     * Get AlternateLocationDistanceList value
     * @return \Travelport\Air\StructType\AlternateLocationDistanceList|null
     */
    public function getAlternateLocationDistanceList(): ?\Travelport\Air\StructType\AlternateLocationDistanceList
    {
        return $this->AlternateLocationDistanceList;
    }
    /**
     * Set AlternateLocationDistanceList value
     * @param \Travelport\Air\StructType\AlternateLocationDistanceList $alternateLocationDistanceList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setAlternateLocationDistanceList(?\Travelport\Air\StructType\AlternateLocationDistanceList $alternateLocationDistanceList = null): self
    {
        $this->AlternateLocationDistanceList = $alternateLocationDistanceList;
        
        return $this;
    }
    /**
     * Get FareInfoMessage value
     * @return \Travelport\Air\StructType\FareInfoMessage[]
     */
    public function getFareInfoMessage(): ?array
    {
        return $this->FareInfoMessage;
    }
    /**
     * Set FareInfoMessage value
     * @param \Travelport\Air\StructType\FareInfoMessage[] $fareInfoMessage
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setFareInfoMessage(?array $fareInfoMessage = null): self
    {
        $this->FareInfoMessage = $fareInfoMessage;
        
        return $this;
    }
    /**
     * Add item to FareInfoMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareInfoMessage $item
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function addToFareInfoMessage(\Travelport\Air\StructType\FareInfoMessage $item): self
    {
        $this->FareInfoMessage[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\Air\StructType\AirPricingSolution[]|null
     */
    public function getAirPricingSolution(): ?array
    {
        return $this->AirPricingSolution ?? null;
    }
    /**
     * Set AirPricingSolution value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\AirPricingSolution[] $airPricingSolution
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setAirPricingSolution(?array $airPricingSolution = null): self
    {
        if (is_null($airPricingSolution) || (is_array($airPricingSolution) && empty($airPricingSolution))) {
            unset($this->AirPricingSolution);
        } else {
            $this->AirPricingSolution = $airPricingSolution;
        }
        
        return $this;
    }
    /**
     * Add item to AirPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingSolution $item
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function addToAirPricingSolution(\Travelport\Air\StructType\AirPricingSolution $item): self
    {
        $this->AirPricingSolution[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricePointList value
     * @return \Travelport\Air\StructType\AirPricePointList|null
     */
    public function getAirPricePointList(): ?\Travelport\Air\StructType\AirPricePointList
    {
        return $this->AirPricePointList ?? null;
    }
    /**
     * Set AirPricePointList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\AirPricePointList $airPricePointList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setAirPricePointList(?\Travelport\Air\StructType\AirPricePointList $airPricePointList = null): self
    {
        if (is_null($airPricePointList) || (is_array($airPricePointList) && empty($airPricePointList))) {
            unset($this->AirPricePointList);
        } else {
            $this->AirPricePointList = $airPricePointList;
        }
        
        return $this;
    }
    /**
     * Get RailSegmentList value
     * @return \Travelport\Air\StructType\RailSegmentList|null
     */
    public function getRailSegmentList(): ?\Travelport\Air\StructType\RailSegmentList
    {
        return $this->RailSegmentList;
    }
    /**
     * Set RailSegmentList value
     * @param \Travelport\Air\StructType\RailSegmentList $railSegmentList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setRailSegmentList(?\Travelport\Air\StructType\RailSegmentList $railSegmentList = null): self
    {
        $this->RailSegmentList = $railSegmentList;
        
        return $this;
    }
    /**
     * Get RailJourneyList value
     * @return \Travelport\Air\StructType\RailJourneyList|null
     */
    public function getRailJourneyList(): ?\Travelport\Air\StructType\RailJourneyList
    {
        return $this->RailJourneyList;
    }
    /**
     * Set RailJourneyList value
     * @param \Travelport\Air\StructType\RailJourneyList $railJourneyList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setRailJourneyList(?\Travelport\Air\StructType\RailJourneyList $railJourneyList = null): self
    {
        $this->RailJourneyList = $railJourneyList;
        
        return $this;
    }
    /**
     * Get RailFareNoteList value
     * @return \Travelport\Air\StructType\RailFareNoteList|null
     */
    public function getRailFareNoteList(): ?\Travelport\Air\StructType\RailFareNoteList
    {
        return $this->RailFareNoteList;
    }
    /**
     * Set RailFareNoteList value
     * @param \Travelport\Air\StructType\RailFareNoteList $railFareNoteList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setRailFareNoteList(?\Travelport\Air\StructType\RailFareNoteList $railFareNoteList = null): self
    {
        $this->RailFareNoteList = $railFareNoteList;
        
        return $this;
    }
    /**
     * Get RailFareIDList value
     * @return \Travelport\Air\StructType\RailFareIDList|null
     */
    public function getRailFareIDList(): ?\Travelport\Air\StructType\RailFareIDList
    {
        return $this->RailFareIDList;
    }
    /**
     * Set RailFareIDList value
     * @param \Travelport\Air\StructType\RailFareIDList $railFareIDList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setRailFareIDList(?\Travelport\Air\StructType\RailFareIDList $railFareIDList = null): self
    {
        $this->RailFareIDList = $railFareIDList;
        
        return $this;
    }
    /**
     * Get RailFareList value
     * @return \Travelport\Air\StructType\RailFareList|null
     */
    public function getRailFareList(): ?\Travelport\Air\StructType\RailFareList
    {
        return $this->RailFareList;
    }
    /**
     * Set RailFareList value
     * @param \Travelport\Air\StructType\RailFareList $railFareList
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setRailFareList(?\Travelport\Air\StructType\RailFareList $railFareList = null): self
    {
        $this->RailFareList = $railFareList;
        
        return $this;
    }
    /**
     * Get RailPricingSolution value
     * @return \Travelport\Air\StructType\RailPricingSolution[]
     */
    public function getRailPricingSolution(): ?array
    {
        return $this->RailPricingSolution;
    }
    /**
     * Set RailPricingSolution value
     * @param \Travelport\Air\StructType\RailPricingSolution[] $railPricingSolution
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function setRailPricingSolution(?array $railPricingSolution = null): self
    {
        $this->RailPricingSolution = $railPricingSolution;
        
        return $this;
    }
    /**
     * Add item to RailPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailPricingSolution $item
     * @return \Travelport\Air\StructType\AirSearchRsp
     */
    public function addToRailPricingSolution(\Travelport\Air\StructType\RailPricingSolution $item): self
    {
        $this->RailPricingSolution[] = $item;
        
        return $this;
    }
}
