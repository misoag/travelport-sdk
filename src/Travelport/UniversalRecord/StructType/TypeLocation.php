<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeLocation StructType
 * @subpackage Structs
 */
class TypeLocation extends AbstractStructBase
{
    /**
     * The Airport
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport
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
     * - choice: Airport | City | CityOrAirport
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
     * - choice: Airport | City | CityOrAirport
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CityOrAirport
     * @var \Travelport\UniversalRecord\StructType\CityOrAirport|null
     */
    public ?\Travelport\UniversalRecord\StructType\CityOrAirport $CityOrAirport = null;
    /**
     * Constructor method for typeLocation
     * @uses TypeLocation::setAirport()
     * @uses TypeLocation::setCity()
     * @uses TypeLocation::setCityOrAirport()
     * @param \Travelport\UniversalRecord\StructType\Airport $airport
     * @param \Travelport\UniversalRecord\StructType\City $city
     * @param \Travelport\UniversalRecord\StructType\CityOrAirport $cityOrAirport
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Airport $airport = null, ?\Travelport\UniversalRecord\StructType\City $city = null, ?\Travelport\UniversalRecord\StructType\CityOrAirport $cityOrAirport = null)
    {
        $this
            ->setAirport($airport)
            ->setCity($city)
            ->setCityOrAirport($cityOrAirport);
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
     * @return \Travelport\UniversalRecord\StructType\TypeLocation
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
     * @return \Travelport\UniversalRecord\StructType\TypeLocation
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
     * @return \Travelport\UniversalRecord\StructType\TypeLocation
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
}
