<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\Distance
     */
    protected \Travelport\Util\StructType\Distance $Distance;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
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
    protected string $SearchLocation;
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
    protected string $AlternateLocation;
    /**
     * Constructor method for AlternateLocationDistance
     * @uses AlternateLocationDistance::setDistance()
     * @uses AlternateLocationDistance::setKey()
     * @uses AlternateLocationDistance::setSearchLocation()
     * @uses AlternateLocationDistance::setAlternateLocation()
     * @param \Travelport\Util\StructType\Distance $distance
     * @param string $key
     * @param string $searchLocation
     * @param string $alternateLocation
     */
    public function __construct(\Travelport\Util\StructType\Distance $distance, string $key, string $searchLocation, string $alternateLocation)
    {
        $this
            ->setDistance($distance)
            ->setKey($key)
            ->setSearchLocation($searchLocation)
            ->setAlternateLocation($alternateLocation);
    }
    /**
     * Get Distance value
     * @return \Travelport\Util\StructType\Distance
     */
    public function getDistance(): \Travelport\Util\StructType\Distance
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \Travelport\Util\StructType\Distance $distance
     * @return \Travelport\Util\StructType\AlternateLocationDistance
     */
    public function setDistance(\Travelport\Util\StructType\Distance $distance): self
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
     * @return \Travelport\Util\StructType\AlternateLocationDistance
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AlternateLocationDistance
     */
    public function setSearchLocation(string $searchLocation): self
    {
        // validation for constraint: string
        if (!is_null($searchLocation) && !is_string($searchLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchLocation, true), gettype($searchLocation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($searchLocation) && mb_strlen((string) $searchLocation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $searchLocation)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AlternateLocationDistance
     */
    public function setAlternateLocation(string $alternateLocation): self
    {
        // validation for constraint: string
        if (!is_null($alternateLocation) && !is_string($alternateLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alternateLocation, true), gettype($alternateLocation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($alternateLocation) && mb_strlen((string) $alternateLocation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $alternateLocation)), __LINE__);
        }
        $this->AlternateLocation = $alternateLocation;
        
        return $this;
    }
}
