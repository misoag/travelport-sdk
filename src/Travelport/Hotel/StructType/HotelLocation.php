<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: Date and Location information for the Hotel. Location can be optional if a Reference Point is provided.
 * @subpackage Structs
 */
class HotelLocation extends AbstractStructBase
{
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: IATA city/airport code | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Location = null;
    /**
     * The LocationType
     * Meta information extracted from the WSDL
     * - default: Airport
     * @var string|null
     */
    public ?string $LocationType = null;
    /**
     * Constructor method for HotelLocation
     * @uses HotelLocation::setLocation()
     * @uses HotelLocation::setLocationType()
     * @param string $location
     * @param string $locationType
     */
    public function __construct(?string $location = null, ?string $locationType = null)
    {
        $this
            ->setLocation($location)
            ->setLocationType($locationType);
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Travelport\Hotel\StructType\HotelLocation
     */
    public function setLocation(?string $location = null): self
    {
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType(): ?string
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @param string $locationType
     * @return \Travelport\Hotel\StructType\HotelLocation
     */
    public function setLocationType(?string $locationType = null): self
    {
        $this->LocationType = $locationType;
        
        return $this;
    }
}
