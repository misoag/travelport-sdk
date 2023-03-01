<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeSearchLocation StructType
 * @subpackage Structs
 */
class TypeSearchLocation extends AbstractStructBase
{
    /**
     * The Airport
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: Airport
     * @var \Travelport\UniversalRecord\StructType\Airport|null
     */
    public ?\Travelport\UniversalRecord\StructType\Airport $Airport = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: City
     * @var \Travelport\UniversalRecord\StructType\City|null
     */
    public ?\Travelport\UniversalRecord\StructType\City $City = null;
    /**
     * The CityOrAirport
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CityOrAirport
     * @var \Travelport\UniversalRecord\StructType\CityOrAirport|null
     */
    public ?\Travelport\UniversalRecord\StructType\CityOrAirport $CityOrAirport = null;
    /**
     * The CoordinateLocation
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CoordinateLocation
     * @var \Travelport\UniversalRecord\StructType\CoordinateLocation|null
     */
    public ?\Travelport\UniversalRecord\StructType\CoordinateLocation $CoordinateLocation = null;
    /**
     * The RailLocation
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: RailLocation
     * @var \Travelport\UniversalRecord\StructType\RailLocation|null
     */
    public ?\Travelport\UniversalRecord\StructType\RailLocation $RailLocation = null;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Distance
     * @var \Travelport\UniversalRecord\StructType\Distance|null
     */
    public ?\Travelport\UniversalRecord\StructType\Distance $Distance = null;
    /**
     * Constructor method for typeSearchLocation
     * @uses TypeSearchLocation::setAirport()
     * @uses TypeSearchLocation::setCity()
     * @uses TypeSearchLocation::setCityOrAirport()
     * @uses TypeSearchLocation::setCoordinateLocation()
     * @uses TypeSearchLocation::setRailLocation()
     * @uses TypeSearchLocation::setDistance()
     * @param \Travelport\UniversalRecord\StructType\Airport $airport
     * @param \Travelport\UniversalRecord\StructType\City $city
     * @param \Travelport\UniversalRecord\StructType\CityOrAirport $cityOrAirport
     * @param \Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation
     * @param \Travelport\UniversalRecord\StructType\RailLocation $railLocation
     * @param \Travelport\UniversalRecord\StructType\Distance $distance
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Airport $airport = null, ?\Travelport\UniversalRecord\StructType\City $city = null, ?\Travelport\UniversalRecord\StructType\CityOrAirport $cityOrAirport = null, ?\Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation = null, ?\Travelport\UniversalRecord\StructType\RailLocation $railLocation = null, ?\Travelport\UniversalRecord\StructType\Distance $distance = null)
    {
        $this
            ->setAirport($airport)
            ->setCity($city)
            ->setCityOrAirport($cityOrAirport)
            ->setCoordinateLocation($coordinateLocation)
            ->setRailLocation($railLocation)
            ->setDistance($distance);
    }
    /**
     * Get Airport value
     * @return \Travelport\UniversalRecord\StructType\Airport|null
     */
    public function getAirport(): ?\Travelport\UniversalRecord\StructType\Airport
    {
        return $this->Airport ?? null;
    }
    /**
     * Set Airport value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\Airport $airport
     * @return \Travelport\UniversalRecord\StructType\TypeSearchLocation
     */
    public function setAirport(?\Travelport\UniversalRecord\StructType\Airport $airport = null): self
    {
        if (is_null($airport) || (is_array($airport) && empty($airport))) {
            unset($this->Airport);
        } else {
            $this->Airport = $airport;
        }
        
        return $this;
    }
    /**
     * Get City value
     * @return \Travelport\UniversalRecord\StructType\City|null
     */
    public function getCity(): ?\Travelport\UniversalRecord\StructType\City
    {
        return $this->City ?? null;
    }
    /**
     * Set City value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\City $city
     * @return \Travelport\UniversalRecord\StructType\TypeSearchLocation
     */
    public function setCity(?\Travelport\UniversalRecord\StructType\City $city = null): self
    {
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }
        
        return $this;
    }
    /**
     * Get CityOrAirport value
     * @return \Travelport\UniversalRecord\StructType\CityOrAirport|null
     */
    public function getCityOrAirport(): ?\Travelport\UniversalRecord\StructType\CityOrAirport
    {
        return $this->CityOrAirport ?? null;
    }
    /**
     * Set CityOrAirport value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\CityOrAirport $cityOrAirport
     * @return \Travelport\UniversalRecord\StructType\TypeSearchLocation
     */
    public function setCityOrAirport(?\Travelport\UniversalRecord\StructType\CityOrAirport $cityOrAirport = null): self
    {
        if (is_null($cityOrAirport) || (is_array($cityOrAirport) && empty($cityOrAirport))) {
            unset($this->CityOrAirport);
        } else {
            $this->CityOrAirport = $cityOrAirport;
        }
        
        return $this;
    }
    /**
     * Get CoordinateLocation value
     * @return \Travelport\UniversalRecord\StructType\CoordinateLocation|null
     */
    public function getCoordinateLocation(): ?\Travelport\UniversalRecord\StructType\CoordinateLocation
    {
        return $this->CoordinateLocation ?? null;
    }
    /**
     * Set CoordinateLocation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation
     * @return \Travelport\UniversalRecord\StructType\TypeSearchLocation
     */
    public function setCoordinateLocation(?\Travelport\UniversalRecord\StructType\CoordinateLocation $coordinateLocation = null): self
    {
        if (is_null($coordinateLocation) || (is_array($coordinateLocation) && empty($coordinateLocation))) {
            unset($this->CoordinateLocation);
        } else {
            $this->CoordinateLocation = $coordinateLocation;
        }
        
        return $this;
    }
    /**
     * Get RailLocation value
     * @return \Travelport\UniversalRecord\StructType\RailLocation|null
     */
    public function getRailLocation(): ?\Travelport\UniversalRecord\StructType\RailLocation
    {
        return $this->RailLocation ?? null;
    }
    /**
     * Set RailLocation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\RailLocation $railLocation
     * @return \Travelport\UniversalRecord\StructType\TypeSearchLocation
     */
    public function setRailLocation(?\Travelport\UniversalRecord\StructType\RailLocation $railLocation = null): self
    {
        if (is_null($railLocation) || (is_array($railLocation) && empty($railLocation))) {
            unset($this->RailLocation);
        } else {
            $this->RailLocation = $railLocation;
        }
        
        return $this;
    }
    /**
     * Get Distance value
     * @return \Travelport\UniversalRecord\StructType\Distance|null
     */
    public function getDistance(): ?\Travelport\UniversalRecord\StructType\Distance
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \Travelport\UniversalRecord\StructType\Distance $distance
     * @return \Travelport\UniversalRecord\StructType\TypeSearchLocation
     */
    public function setDistance(?\Travelport\UniversalRecord\StructType\Distance $distance = null): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
}
