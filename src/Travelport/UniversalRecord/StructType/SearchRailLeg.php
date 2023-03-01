<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchRailLeg StructType
 * Meta information extracted from the WSDL
 * - documentation: Availability can be searched either on departure time or on arrival tome, but not on both. | Holds Origin, Destination, and Departure times for a Rail Leg to search for.
 * @subpackage Structs
 */
class SearchRailLeg extends AbstractStructBase
{
    /**
     * The SearchOrigin
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\TypeSearchLocation[]
     */
    public ?array $SearchOrigin = null;
    /**
     * The SearchDestination
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\TypeSearchLocation[]
     */
    public ?array $SearchDestination = null;
    /**
     * The RailSegmentList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RailSegmentList
     * @var \Travelport\UniversalRecord\StructType\RailSegmentList|null
     */
    public ?\Travelport\UniversalRecord\StructType\RailSegmentList $RailSegmentList = null;
    /**
     * The SearchDepTime
     * Meta information extracted from the WSDL
     * - choice: SearchDepTime | SearchArvTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec[]
     */
    public ?array $SearchDepTime = null;
    /**
     * The SearchArvTime
     * Meta information extracted from the WSDL
     * - choice: SearchDepTime | SearchArvTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\TypeTimeSpec[]
     */
    public ?array $SearchArvTime = null;
    /**
     * The RailLegModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RailLegModifiers
     * @var \Travelport\UniversalRecord\StructType\RailLegModifiers|null
     */
    public ?\Travelport\UniversalRecord\StructType\RailLegModifiers $RailLegModifiers = null;
    /**
     * Constructor method for SearchRailLeg
     * @uses SearchRailLeg::setSearchOrigin()
     * @uses SearchRailLeg::setSearchDestination()
     * @uses SearchRailLeg::setRailSegmentList()
     * @uses SearchRailLeg::setSearchDepTime()
     * @uses SearchRailLeg::setSearchArvTime()
     * @uses SearchRailLeg::setRailLegModifiers()
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation[] $searchOrigin
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation[] $searchDestination
     * @param \Travelport\UniversalRecord\StructType\RailSegmentList $railSegmentList
     * @param \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec[] $searchDepTime
     * @param \Travelport\UniversalRecord\StructType\TypeTimeSpec[] $searchArvTime
     * @param \Travelport\UniversalRecord\StructType\RailLegModifiers $railLegModifiers
     */
    public function __construct(?array $searchOrigin = null, ?array $searchDestination = null, ?\Travelport\UniversalRecord\StructType\RailSegmentList $railSegmentList = null, ?array $searchDepTime = null, ?array $searchArvTime = null, ?\Travelport\UniversalRecord\StructType\RailLegModifiers $railLegModifiers = null)
    {
        $this
            ->setSearchOrigin($searchOrigin)
            ->setSearchDestination($searchDestination)
            ->setRailSegmentList($railSegmentList)
            ->setSearchDepTime($searchDepTime)
            ->setSearchArvTime($searchArvTime)
            ->setRailLegModifiers($railLegModifiers);
    }
    /**
     * Get SearchOrigin value
     * @return \Travelport\UniversalRecord\StructType\TypeSearchLocation[]
     */
    public function getSearchOrigin(): ?array
    {
        return $this->SearchOrigin;
    }
    /**
     * Set SearchOrigin value
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation[] $searchOrigin
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setSearchOrigin(?array $searchOrigin = null): self
    {
        $this->SearchOrigin = $searchOrigin;
        
        return $this;
    }
    /**
     * Add item to SearchOrigin value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation $item
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function addToSearchOrigin(\Travelport\UniversalRecord\StructType\TypeSearchLocation $item): self
    {
        $this->SearchOrigin[] = $item;
        
        return $this;
    }
    /**
     * Get SearchDestination value
     * @return \Travelport\UniversalRecord\StructType\TypeSearchLocation[]
     */
    public function getSearchDestination(): ?array
    {
        return $this->SearchDestination;
    }
    /**
     * Set SearchDestination value
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation[] $searchDestination
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setSearchDestination(?array $searchDestination = null): self
    {
        $this->SearchDestination = $searchDestination;
        
        return $this;
    }
    /**
     * Add item to SearchDestination value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation $item
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function addToSearchDestination(\Travelport\UniversalRecord\StructType\TypeSearchLocation $item): self
    {
        $this->SearchDestination[] = $item;
        
        return $this;
    }
    /**
     * Get RailSegmentList value
     * @return \Travelport\UniversalRecord\StructType\RailSegmentList|null
     */
    public function getRailSegmentList(): ?\Travelport\UniversalRecord\StructType\RailSegmentList
    {
        return $this->RailSegmentList;
    }
    /**
     * Set RailSegmentList value
     * @param \Travelport\UniversalRecord\StructType\RailSegmentList $railSegmentList
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setRailSegmentList(?\Travelport\UniversalRecord\StructType\RailSegmentList $railSegmentList = null): self
    {
        $this->RailSegmentList = $railSegmentList;
        
        return $this;
    }
    /**
     * Get SearchDepTime value
     * @return \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec[]|null
     */
    public function getSearchDepTime(): ?array
    {
        return $this->SearchDepTime ?? null;
    }
    /**
     * Set SearchDepTime value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec[] $searchDepTime
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setSearchDepTime(?array $searchDepTime = null): self
    {
        if (is_null($searchDepTime) || (is_array($searchDepTime) && empty($searchDepTime))) {
            unset($this->SearchDepTime);
        } else {
            $this->SearchDepTime = $searchDepTime;
        }
        
        return $this;
    }
    /**
     * Add item to SearchDepTime value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec $item
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function addToSearchDepTime(\Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec $item): self
    {
        $this->SearchDepTime[] = $item;
        
        return $this;
    }
    /**
     * Get SearchArvTime value
     * @return \Travelport\UniversalRecord\StructType\TypeTimeSpec[]|null
     */
    public function getSearchArvTime(): ?array
    {
        return $this->SearchArvTime ?? null;
    }
    /**
     * Set SearchArvTime value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\TypeTimeSpec[] $searchArvTime
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setSearchArvTime(?array $searchArvTime = null): self
    {
        if (is_null($searchArvTime) || (is_array($searchArvTime) && empty($searchArvTime))) {
            unset($this->SearchArvTime);
        } else {
            $this->SearchArvTime = $searchArvTime;
        }
        
        return $this;
    }
    /**
     * Add item to SearchArvTime value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTimeSpec $item
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function addToSearchArvTime(\Travelport\UniversalRecord\StructType\TypeTimeSpec $item): self
    {
        $this->SearchArvTime[] = $item;
        
        return $this;
    }
    /**
     * Get RailLegModifiers value
     * @return \Travelport\UniversalRecord\StructType\RailLegModifiers|null
     */
    public function getRailLegModifiers(): ?\Travelport\UniversalRecord\StructType\RailLegModifiers
    {
        return $this->RailLegModifiers;
    }
    /**
     * Set RailLegModifiers value
     * @param \Travelport\UniversalRecord\StructType\RailLegModifiers $railLegModifiers
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setRailLegModifiers(?\Travelport\UniversalRecord\StructType\RailLegModifiers $railLegModifiers = null): self
    {
        $this->RailLegModifiers = $railLegModifiers;
        
        return $this;
    }
}
