<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?string $Location = null;
    /**
     * The LocationType
     * Meta information extracted from the WSDL
     * - default: Airport
     * @var string|null
     */
    protected ?string $LocationType = null;
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
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($location) && mb_strlen((string) $location) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $location)), __LINE__);
        }
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
     * @uses \Travelport\Hotel\EnumType\TypeHotelLocation::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeHotelLocation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $locationType
     * @return \Travelport\Hotel\StructType\HotelLocation
     */
    public function setLocationType(?string $locationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeHotelLocation::valueIsValid($locationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeHotelLocation', is_array($locationType) ? implode(', ', $locationType) : var_export($locationType, true), implode(', ', \Travelport\Hotel\EnumType\TypeHotelLocation::getValidValues())), __LINE__);
        }
        $this->LocationType = $locationType;
        
        return $this;
    }
}
