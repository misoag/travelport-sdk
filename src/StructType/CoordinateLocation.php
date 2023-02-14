<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected float $latitude;
    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    protected float $longitude;
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
     * @return \StructType\CoordinateLocation
     */
    public function setLatitude(float $latitude): self
    {
        // validation for constraint: float
        if (!is_null($latitude) && !(is_float($latitude) || is_numeric($latitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
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
     * @return \StructType\CoordinateLocation
     */
    public function setLongitude(float $longitude): self
    {
        // validation for constraint: float
        if (!is_null($longitude) && !(is_float($longitude) || is_numeric($longitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;
        
        return $this;
    }
}
