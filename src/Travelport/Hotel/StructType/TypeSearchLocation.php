<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\Airport|null
     */
    public ?\Travelport\Hotel\StructType\Airport $Airport = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: City
     * @var \Travelport\Hotel\StructType\City|null
     */
    public ?\Travelport\Hotel\StructType\City $City = null;
    /**
     * The CityOrAirport
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CityOrAirport
     * @var \Travelport\Hotel\StructType\CityOrAirport|null
     */
    public ?\Travelport\Hotel\StructType\CityOrAirport $CityOrAirport = null;
    /**
     * The CoordinateLocation
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CoordinateLocation
     * @var \Travelport\Hotel\StructType\CoordinateLocation|null
     */
    public ?\Travelport\Hotel\StructType\CoordinateLocation $CoordinateLocation = null;
    /**
     * The RailLocation
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: RailLocation
     * @var \Travelport\Hotel\StructType\RailLocation|null
     */
    public ?\Travelport\Hotel\StructType\RailLocation $RailLocation = null;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Distance
     * @var \Travelport\Hotel\StructType\Distance|null
     */
    public ?\Travelport\Hotel\StructType\Distance $Distance = null;
    /**
     * Constructor method for typeSearchLocation
     * @uses TypeSearchLocation::setAirport()
     * @uses TypeSearchLocation::setCity()
     * @uses TypeSearchLocation::setCityOrAirport()
     * @uses TypeSearchLocation::setCoordinateLocation()
     * @uses TypeSearchLocation::setRailLocation()
     * @uses TypeSearchLocation::setDistance()
     * @param \Travelport\Hotel\StructType\Airport $airport
     * @param \Travelport\Hotel\StructType\City $city
     * @param \Travelport\Hotel\StructType\CityOrAirport $cityOrAirport
     * @param \Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation
     * @param \Travelport\Hotel\StructType\RailLocation $railLocation
     * @param \Travelport\Hotel\StructType\Distance $distance
     */
    public function __construct(?\Travelport\Hotel\StructType\Airport $airport = null, ?\Travelport\Hotel\StructType\City $city = null, ?\Travelport\Hotel\StructType\CityOrAirport $cityOrAirport = null, ?\Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation = null, ?\Travelport\Hotel\StructType\RailLocation $railLocation = null, ?\Travelport\Hotel\StructType\Distance $distance = null)
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
     * @return \Travelport\Hotel\StructType\Airport|null
     */
    public function getAirport(): ?\Travelport\Hotel\StructType\Airport
    {
        return $this->Airport ?? null;
    }
    /**
     * Set Airport value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\Airport $airport
     * @return \Travelport\Hotel\StructType\TypeSearchLocation
     */
    public function setAirport(?\Travelport\Hotel\StructType\Airport $airport = null): self
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
     * @return \Travelport\Hotel\StructType\City|null
     */
    public function getCity(): ?\Travelport\Hotel\StructType\City
    {
        return $this->City ?? null;
    }
    /**
     * Set City value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\City $city
     * @return \Travelport\Hotel\StructType\TypeSearchLocation
     */
    public function setCity(?\Travelport\Hotel\StructType\City $city = null): self
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
     * @return \Travelport\Hotel\StructType\CityOrAirport|null
     */
    public function getCityOrAirport(): ?\Travelport\Hotel\StructType\CityOrAirport
    {
        return $this->CityOrAirport ?? null;
    }
    /**
     * Set CityOrAirport value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\CityOrAirport $cityOrAirport
     * @return \Travelport\Hotel\StructType\TypeSearchLocation
     */
    public function setCityOrAirport(?\Travelport\Hotel\StructType\CityOrAirport $cityOrAirport = null): self
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
     * @return \Travelport\Hotel\StructType\CoordinateLocation|null
     */
    public function getCoordinateLocation(): ?\Travelport\Hotel\StructType\CoordinateLocation
    {
        return $this->CoordinateLocation ?? null;
    }
    /**
     * Set CoordinateLocation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation
     * @return \Travelport\Hotel\StructType\TypeSearchLocation
     */
    public function setCoordinateLocation(?\Travelport\Hotel\StructType\CoordinateLocation $coordinateLocation = null): self
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
     * @return \Travelport\Hotel\StructType\RailLocation|null
     */
    public function getRailLocation(): ?\Travelport\Hotel\StructType\RailLocation
    {
        return $this->RailLocation ?? null;
    }
    /**
     * Set RailLocation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\RailLocation $railLocation
     * @return \Travelport\Hotel\StructType\TypeSearchLocation
     */
    public function setRailLocation(?\Travelport\Hotel\StructType\RailLocation $railLocation = null): self
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
     * @return \Travelport\Hotel\StructType\Distance|null
     */
    public function getDistance(): ?\Travelport\Hotel\StructType\Distance
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \Travelport\Hotel\StructType\Distance $distance
     * @return \Travelport\Hotel\StructType\TypeSearchLocation
     */
    public function setDistance(?\Travelport\Hotel\StructType\Distance $distance = null): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
}
