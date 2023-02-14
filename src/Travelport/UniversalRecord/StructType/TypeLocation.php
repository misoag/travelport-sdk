<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?\Travelport\UniversalRecord\StructType\Airport $Airport = null;
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
    protected ?\Travelport\UniversalRecord\StructType\City $City = null;
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
    protected ?\Travelport\UniversalRecord\StructType\CityOrAirport $CityOrAirport = null;
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
     * @param \Travelport\UniversalRecord\StructType\Airport $airport
     * @return \Travelport\UniversalRecord\StructType\TypeLocation
     */
    public function setAirport(?\Travelport\UniversalRecord\StructType\Airport $airport = null): self
    {
        // validation for constraint: choice(Airport, City, CityOrAirport)
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
     * @return \Travelport\UniversalRecord\StructType\City|null
     */
    public function getCity(): ?\Travelport\UniversalRecord\StructType\City
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
     * @param \Travelport\UniversalRecord\StructType\City $city
     * @return \Travelport\UniversalRecord\StructType\TypeLocation
     */
    public function setCity(?\Travelport\UniversalRecord\StructType\City $city = null): self
    {
        // validation for constraint: choice(Airport, City, CityOrAirport)
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
     * @return \Travelport\UniversalRecord\StructType\CityOrAirport|null
     */
    public function getCityOrAirport(): ?\Travelport\UniversalRecord\StructType\CityOrAirport
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
     * @param \Travelport\UniversalRecord\StructType\CityOrAirport $cityOrAirport
     * @return \Travelport\UniversalRecord\StructType\TypeLocation
     */
    public function setCityOrAirport(?\Travelport\UniversalRecord\StructType\CityOrAirport $cityOrAirport = null): self
    {
        // validation for constraint: choice(Airport, City, CityOrAirport)
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
}
