<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateLocationDistance StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about the Original Search Airport to Alternate Search Airport.
 * @subpackage Structs
 */
class AlternateLocationDistance extends AbstractStructBase
{
    /**
     * The Distance
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: common:Distance
     * @var \Travelport\Air\StructType\Distance
     */
    public \Travelport\Air\StructType\Distance $Distance;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The SearchLocation
     * Meta information extracted from the WSDL
     * - documentation: The Searching City or Airport specified in the Request. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $SearchLocation;
    /**
     * The AlternateLocation
     * Meta information extracted from the WSDL
     * - documentation: The nearby Alternate City or Airport to SearchLocation. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $AlternateLocation;
    /**
     * Constructor method for AlternateLocationDistance
     * @uses AlternateLocationDistance::setDistance()
     * @uses AlternateLocationDistance::setKey()
     * @uses AlternateLocationDistance::setSearchLocation()
     * @uses AlternateLocationDistance::setAlternateLocation()
     * @param \Travelport\Air\StructType\Distance $distance
     * @param string $key
     * @param string $searchLocation
     * @param string $alternateLocation
     */
    public function __construct(\Travelport\Air\StructType\Distance $distance, string $key, string $searchLocation, string $alternateLocation)
    {
        $this
            ->setDistance($distance)
            ->setKey($key)
            ->setSearchLocation($searchLocation)
            ->setAlternateLocation($alternateLocation);
    }
    /**
     * Get Distance value
     * @return \Travelport\Air\StructType\Distance
     */
    public function getDistance(): \Travelport\Air\StructType\Distance
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \Travelport\Air\StructType\Distance $distance
     * @return \Travelport\Air\StructType\AlternateLocationDistance
     */
    public function setDistance(\Travelport\Air\StructType\Distance $distance): self
    {
        $this->Distance = $distance;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\AlternateLocationDistance
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get SearchLocation value
     * @return string
     */
    public function getSearchLocation(): string
    {
        return $this->SearchLocation;
    }
    /**
     * Set SearchLocation value
     * @param string $searchLocation
     * @return \Travelport\Air\StructType\AlternateLocationDistance
     */
    public function setSearchLocation(string $searchLocation): self
    {
        $this->SearchLocation = $searchLocation;
        
        return $this;
    }
    /**
     * Get AlternateLocation value
     * @return string
     */
    public function getAlternateLocation(): string
    {
        return $this->AlternateLocation;
    }
    /**
     * Set AlternateLocation value
     * @param string $alternateLocation
     * @return \Travelport\Air\StructType\AlternateLocationDistance
     */
    public function setAlternateLocation(string $alternateLocation): self
    {
        $this->AlternateLocation = $alternateLocation;
        
        return $this;
    }
}
