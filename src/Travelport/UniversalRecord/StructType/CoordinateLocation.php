<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoordinateLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: Specific lat/long location, usually associated with a Distance
 * @subpackage Structs
 */
class CoordinateLocation extends Location
{
    /**
     * The latitude
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public float $latitude;
    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public float $longitude;
    /**
     * Constructor method for CoordinateLocation
     * @uses CoordinateLocation::setLatitude()
     * @uses CoordinateLocation::setLongitude()
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(float $latitude, float $longitude)
    {
        $this
            ->setLatitude($latitude)
            ->setLongitude($longitude);
    }
    /**
     * Get latitude value
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param float $latitude
     * @return \Travelport\UniversalRecord\StructType\CoordinateLocation
     */
    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;
        
        return $this;
    }
    /**
     * Get longitude value
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param float $longitude
     * @return \Travelport\UniversalRecord\StructType\CoordinateLocation
     */
    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;
        
        return $this;
    }
}
