<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAirLeg StructType
 * Meta information extracted from the WSDL
 * - documentation: Search version of AirLeg used to specify search criteria
 * @subpackage Structs
 */
class SearchAirLeg extends AbstractStructBase
{
    /**
     * The SearchOrigin
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\Air\StructType\TypeSearchLocation[]
     */
    public ?array $SearchOrigin = null;
    /**
     * The SearchDestination
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeSearchLocation[]
     */
    public ?array $SearchDestination = null;
    /**
     * The SearchDepTime
     * Meta information extracted from the WSDL
     * - choice: SearchDepTime | SearchArvTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var \Travelport\Air\StructType\TypeFlexibleTimeSpec[]
     */
    public ?array $SearchDepTime = null;
    /**
     * The SearchArvTime
     * Meta information extracted from the WSDL
     * - documentation: Specifies the preferred time within the time range. For 1G, 1V, 1P, it is supported for AvailabilitySearchReq (TimeRange must also be specified) and not supported for LowFareSearchReq. ACH does not support search by arrival time.
     * - choice: SearchDepTime | SearchArvTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var \Travelport\Air\StructType\TypeTimeSpec[]
     */
    public ?array $SearchArvTime = null;
    /**
     * The AirLegModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirLegModifiers
     * @var \Travelport\Air\StructType\AirLegModifiers|null
     */
    public ?\Travelport\Air\StructType\AirLegModifiers $AirLegModifiers = null;
    /**
     * Constructor method for SearchAirLeg
     * @uses SearchAirLeg::setSearchOrigin()
     * @uses SearchAirLeg::setSearchDestination()
     * @uses SearchAirLeg::setSearchDepTime()
     * @uses SearchAirLeg::setSearchArvTime()
     * @uses SearchAirLeg::setAirLegModifiers()
     * @param \Travelport\Air\StructType\TypeSearchLocation[] $searchOrigin
     * @param \Travelport\Air\StructType\TypeSearchLocation[] $searchDestination
     * @param \Travelport\Air\StructType\TypeFlexibleTimeSpec[] $searchDepTime
     * @param \Travelport\Air\StructType\TypeTimeSpec[] $searchArvTime
     * @param \Travelport\Air\StructType\AirLegModifiers $airLegModifiers
     */
    public function __construct(?array $searchOrigin = null, ?array $searchDestination = null, ?array $searchDepTime = null, ?array $searchArvTime = null, ?\Travelport\Air\StructType\AirLegModifiers $airLegModifiers = null)
    {
        $this
            ->setSearchOrigin($searchOrigin)
            ->setSearchDestination($searchDestination)
            ->setSearchDepTime($searchDepTime)
            ->setSearchArvTime($searchArvTime)
            ->setAirLegModifiers($airLegModifiers);
    }
    /**
     * Get SearchOrigin value
     * @return \Travelport\Air\StructType\TypeSearchLocation[]
     */
    public function getSearchOrigin(): ?array
    {
        return $this->SearchOrigin;
    }
    /**
     * Set SearchOrigin value
     * @param \Travelport\Air\StructType\TypeSearchLocation[] $searchOrigin
     * @return \Travelport\Air\StructType\SearchAirLeg
     */
    public function setSearchOrigin(?array $searchOrigin = null): self
    {
        $this->SearchOrigin = $searchOrigin;
        
        return $this;
    }
    /**
     * Add item to SearchOrigin value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeSearchLocation $item
     * @return \Travelport\Air\StructType\SearchAirLeg
     */
    public function addToSearchOrigin(\Travelport\Air\StructType\TypeSearchLocation $item): self
    {
        $this->SearchOrigin[] = $item;
        
        return $this;
    }
    /**
     * Get SearchDestination value
     * @return \Travelport\Air\StructType\TypeSearchLocation[]
     */
    public function getSearchDestination(): ?array
    {
        return $this->SearchDestination;
    }
    /**
     * Set SearchDestination value
     * @param \Travelport\Air\StructType\TypeSearchLocation[] $searchDestination
     * @return \Travelport\Air\StructType\SearchAirLeg
     */
    public function setSearchDestination(?array $searchDestination = null): self
    {
        $this->SearchDestination = $searchDestination;
        
        return $this;
    }
    /**
     * Add item to SearchDestination value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeSearchLocation $item
     * @return \Travelport\Air\StructType\SearchAirLeg
     */
    public function addToSearchDestination(\Travelport\Air\StructType\TypeSearchLocation $item): self
    {
        $this->SearchDestination[] = $item;
        
        return $this;
    }
    /**
     * Get SearchDepTime value
     * @return \Travelport\Air\StructType\TypeFlexibleTimeSpec[]|null
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
     * @param \Travelport\Air\StructType\TypeFlexibleTimeSpec[] $searchDepTime
     * @return \Travelport\Air\StructType\SearchAirLeg
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
     * @param \Travelport\Air\StructType\TypeFlexibleTimeSpec $item
     * @return \Travelport\Air\StructType\SearchAirLeg
     */
    public function addToSearchDepTime(\Travelport\Air\StructType\TypeFlexibleTimeSpec $item): self
    {
        $this->SearchDepTime[] = $item;
        
        return $this;
    }
    /**
     * Get SearchArvTime value
     * @return \Travelport\Air\StructType\TypeTimeSpec[]|null
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
     * @param \Travelport\Air\StructType\TypeTimeSpec[] $searchArvTime
     * @return \Travelport\Air\StructType\SearchAirLeg
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
     * @param \Travelport\Air\StructType\TypeTimeSpec $item
     * @return \Travelport\Air\StructType\SearchAirLeg
     */
    public function addToSearchArvTime(\Travelport\Air\StructType\TypeTimeSpec $item): self
    {
        $this->SearchArvTime[] = $item;
        
        return $this;
    }
    /**
     * Get AirLegModifiers value
     * @return \Travelport\Air\StructType\AirLegModifiers|null
     */
    public function getAirLegModifiers(): ?\Travelport\Air\StructType\AirLegModifiers
    {
        return $this->AirLegModifiers;
    }
    /**
     * Set AirLegModifiers value
     * @param \Travelport\Air\StructType\AirLegModifiers $airLegModifiers
     * @return \Travelport\Air\StructType\SearchAirLeg
     */
    public function setAirLegModifiers(?\Travelport\Air\StructType\AirLegModifiers $airLegModifiers = null): self
    {
        $this->AirLegModifiers = $airLegModifiers;
        
        return $this;
    }
}
