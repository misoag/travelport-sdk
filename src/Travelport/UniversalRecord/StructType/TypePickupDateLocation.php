<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typePickupDateLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: A complexType for the pickup date, location, and location type.
 * @subpackage Structs
 */
class TypePickupDateLocation extends AbstractStructBase
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - documentation: The start date for the vehicle rental.
     * - use: required
     * @var string
     */
    public string $Date;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: The location (airport code) at which the vehicle will be picked up. | Valid 3 letter IATA city or airport code
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
     * - documentation: The type of location requested, such as resort, city center.
     * @var string|null
     */
    public ?string $LocationType = null;
    /**
     * The PickupLocationNumber
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for vehicle location
     * - use: optional
     * @var string|null
     */
    public ?string $PickupLocationNumber = null;
    /**
     * Constructor method for typePickupDateLocation
     * @uses TypePickupDateLocation::setDate()
     * @uses TypePickupDateLocation::setLocation()
     * @uses TypePickupDateLocation::setLocationType()
     * @uses TypePickupDateLocation::setPickupLocationNumber()
     * @param string $date
     * @param string $location
     * @param string $locationType
     * @param string $pickupLocationNumber
     */
    public function __construct(string $date, ?string $location = null, ?string $locationType = null, ?string $pickupLocationNumber = null)
    {
        $this
            ->setDate($date)
            ->setLocation($location)
            ->setLocationType($locationType)
            ->setPickupLocationNumber($pickupLocationNumber);
    }
    /**
     * Get Date value
     * @return string
     */
    public function getDate(): string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Travelport\UniversalRecord\StructType\TypePickupDateLocation
     */
    public function setDate(string $date): self
    {
        $this->Date = $date;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\TypePickupDateLocation
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
     * @return \Travelport\UniversalRecord\StructType\TypePickupDateLocation
     */
    public function setLocationType(?string $locationType = null): self
    {
        $this->LocationType = $locationType;
        
        return $this;
    }
    /**
     * Get PickupLocationNumber value
     * @return string|null
     */
    public function getPickupLocationNumber(): ?string
    {
        return $this->PickupLocationNumber;
    }
    /**
     * Set PickupLocationNumber value
     * @param string $pickupLocationNumber
     * @return \Travelport\UniversalRecord\StructType\TypePickupDateLocation
     */
    public function setPickupLocationNumber(?string $pickupLocationNumber = null): self
    {
        $this->PickupLocationNumber = $pickupLocationNumber;
        
        return $this;
    }
}
