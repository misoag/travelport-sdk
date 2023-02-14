<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\Airport|null
     */
    protected ?\StructType\Airport $Airport = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: City
     * @var \StructType\City|null
     */
    protected ?\StructType\City $City = null;
    /**
     * The CityOrAirport
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CityOrAirport
     * @var \StructType\CityOrAirport|null
     */
    protected ?\StructType\CityOrAirport $CityOrAirport = null;
    /**
     * The CoordinateLocation
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: CoordinateLocation
     * @var \StructType\CoordinateLocation|null
     */
    protected ?\StructType\CoordinateLocation $CoordinateLocation = null;
    /**
     * The RailLocation
     * Meta information extracted from the WSDL
     * - choice: Airport | City | CityOrAirport | CoordinateLocation | RailLocation
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: RailLocation
     * @var \StructType\RailLocation|null
     */
    protected ?\StructType\RailLocation $RailLocation = null;
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Distance
     * @var \StructType\Distance|null
     */
    protected ?\StructType\Distance $Distance = null;
    /**
     * Constructor method for typeSearchLocation
     * @uses TypeSearchLocation::setAirport()
     * @uses TypeSearchLocation::setCity()
     * @uses TypeSearchLocation::setCityOrAirport()
     * @uses TypeSearchLocation::setCoordinateLocation()
     * @uses TypeSearchLocation::setRailLocation()
     * @uses TypeSearchLocation::setDistance()
     * @param \StructType\Airport $airport
     * @param \StructType\City $city
     * @param \StructType\CityOrAirport $cityOrAirport
     * @param \StructType\CoordinateLocation $coordinateLocation
     * @param \StructType\RailLocation $railLocation
     * @param \StructType\Distance $distance
     */
    public function __construct(?\StructType\Airport $airport = null, ?\StructType\City $city = null, ?\StructType\CityOrAirport $cityOrAirport = null, ?\StructType\CoordinateLocation $coordinateLocation = null, ?\StructType\RailLocation $railLocation = null, ?\StructType\Distance $distance = null)
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
     * @return \StructType\Airport|null
     */
    public function getAirport(): ?\StructType\Airport
    {
        return isset($this->Airport) ? $this->Airport : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAirport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirport method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirportForChoiceConstraintsFromSetAirport($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'City',
            'CityOrAirport',
            'CoordinateLocation',
            'RailLocation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Airport can\'t be set as the property %s is already set. Only one property must be set among these properties: Airport, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Airport value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Airport $airport
     * @return \StructType\TypeSearchLocation
     */
    public function setAirport(?\StructType\Airport $airport = null): self
    {
        // validation for constraint: choice(Airport, City, CityOrAirport, CoordinateLocation, RailLocation)
        if ('' !== ($airportChoiceErrorMessage = self::validateAirportForChoiceConstraintsFromSetAirport($airport))) {
            throw new InvalidArgumentException($airportChoiceErrorMessage, __LINE__);
        }
        if (is_null($airport) || (is_array($airport) && empty($airport))) {
            unset($this->Airport);
        } else {
            $this->Airport = $airport;
        }
        
        return $this;
    }
    /**
     * Get City value
     * @return \StructType\City|null
     */
    public function getCity(): ?\StructType\City
    {
        return isset($this->City) ? $this->City : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCity method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCityForChoiceConstraintsFromSetCity($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'CityOrAirport',
            'CoordinateLocation',
            'RailLocation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property City can\'t be set as the property %s is already set. Only one property must be set among these properties: City, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set City value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\City $city
     * @return \StructType\TypeSearchLocation
     */
    public function setCity(?\StructType\City $city = null): self
    {
        // validation for constraint: choice(Airport, City, CityOrAirport, CoordinateLocation, RailLocation)
        if ('' !== ($cityChoiceErrorMessage = self::validateCityForChoiceConstraintsFromSetCity($city))) {
            throw new InvalidArgumentException($cityChoiceErrorMessage, __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }
        
        return $this;
    }
    /**
     * Get CityOrAirport value
     * @return \StructType\CityOrAirport|null
     */
    public function getCityOrAirport(): ?\StructType\CityOrAirport
    {
        return isset($this->CityOrAirport) ? $this->CityOrAirport : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCityOrAirport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCityOrAirport method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCityOrAirportForChoiceConstraintsFromSetCityOrAirport($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'City',
            'CoordinateLocation',
            'RailLocation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CityOrAirport can\'t be set as the property %s is already set. Only one property must be set among these properties: CityOrAirport, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CityOrAirport value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\CityOrAirport $cityOrAirport
     * @return \StructType\TypeSearchLocation
     */
    public function setCityOrAirport(?\StructType\CityOrAirport $cityOrAirport = null): self
    {
        // validation for constraint: choice(Airport, City, CityOrAirport, CoordinateLocation, RailLocation)
        if ('' !== ($cityOrAirportChoiceErrorMessage = self::validateCityOrAirportForChoiceConstraintsFromSetCityOrAirport($cityOrAirport))) {
            throw new InvalidArgumentException($cityOrAirportChoiceErrorMessage, __LINE__);
        }
        if (is_null($cityOrAirport) || (is_array($cityOrAirport) && empty($cityOrAirport))) {
            unset($this->CityOrAirport);
        } else {
            $this->CityOrAirport = $cityOrAirport;
        }
        
        return $this;
    }
    /**
     * Get CoordinateLocation value
     * @return \StructType\CoordinateLocation|null
     */
    public function getCoordinateLocation(): ?\StructType\CoordinateLocation
    {
        return isset($this->CoordinateLocation) ? $this->CoordinateLocation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCoordinateLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCoordinateLocation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCoordinateLocationForChoiceConstraintsFromSetCoordinateLocation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'City',
            'CityOrAirport',
            'RailLocation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CoordinateLocation can\'t be set as the property %s is already set. Only one property must be set among these properties: CoordinateLocation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CoordinateLocation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\CoordinateLocation $coordinateLocation
     * @return \StructType\TypeSearchLocation
     */
    public function setCoordinateLocation(?\StructType\CoordinateLocation $coordinateLocation = null): self
    {
        // validation for constraint: choice(Airport, City, CityOrAirport, CoordinateLocation, RailLocation)
        if ('' !== ($coordinateLocationChoiceErrorMessage = self::validateCoordinateLocationForChoiceConstraintsFromSetCoordinateLocation($coordinateLocation))) {
            throw new InvalidArgumentException($coordinateLocationChoiceErrorMessage, __LINE__);
        }
        if (is_null($coordinateLocation) || (is_array($coordinateLocation) && empty($coordinateLocation))) {
            unset($this->CoordinateLocation);
        } else {
            $this->CoordinateLocation = $coordinateLocation;
        }
        
        return $this;
    }
    /**
     * Get RailLocation value
     * @return \StructType\RailLocation|null
     */
    public function getRailLocation(): ?\StructType\RailLocation
    {
        return isset($this->RailLocation) ? $this->RailLocation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRailLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailLocation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailLocationForChoiceConstraintsFromSetRailLocation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'City',
            'CityOrAirport',
            'CoordinateLocation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailLocation can\'t be set as the property %s is already set. Only one property must be set among these properties: RailLocation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailLocation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\RailLocation $railLocation
     * @return \StructType\TypeSearchLocation
     */
    public function setRailLocation(?\StructType\RailLocation $railLocation = null): self
    {
        // validation for constraint: choice(Airport, City, CityOrAirport, CoordinateLocation, RailLocation)
        if ('' !== ($railLocationChoiceErrorMessage = self::validateRailLocationForChoiceConstraintsFromSetRailLocation($railLocation))) {
            throw new InvalidArgumentException($railLocationChoiceErrorMessage, __LINE__);
        }
        if (is_null($railLocation) || (is_array($railLocation) && empty($railLocation))) {
            unset($this->RailLocation);
        } else {
            $this->RailLocation = $railLocation;
        }
        
        return $this;
    }
    /**
     * Get Distance value
     * @return \StructType\Distance|null
     */
    public function getDistance(): ?\StructType\Distance
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \StructType\Distance $distance
     * @return \StructType\TypeSearchLocation
     */
    public function setDistance(?\StructType\Distance $distance = null): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
}
