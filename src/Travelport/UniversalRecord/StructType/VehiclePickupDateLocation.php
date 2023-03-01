<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePickupDateLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to update PickupDateTime and location of an existing Vehicle Booking. 1g/1v only supports modification of PickupDateTime. PickupDateTime cannot be deleted.
 * @subpackage Structs
 */
class VehiclePickupDateLocation extends AbstractStructBase
{
    /**
     * The PickupDateTime
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1g/1v/1p
     * @var string|null
     */
    public ?string $PickupDateTime = null;
    /**
     * The PickupLocation
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1p | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $PickupLocation = null;
    /**
     * The PickupLocationType
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1p
     * - use: optional
     * @var string|null
     */
    public ?string $PickupLocationType = null;
    /**
     * The PickupLocationNumber
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1p
     * - use: optional
     * @var string|null
     */
    public ?string $PickupLocationNumber = null;
    /**
     * Constructor method for VehiclePickupDateLocation
     * @uses VehiclePickupDateLocation::setPickupDateTime()
     * @uses VehiclePickupDateLocation::setPickupLocation()
     * @uses VehiclePickupDateLocation::setPickupLocationType()
     * @uses VehiclePickupDateLocation::setPickupLocationNumber()
     * @param string $pickupDateTime
     * @param string $pickupLocation
     * @param string $pickupLocationType
     * @param string $pickupLocationNumber
     */
    public function __construct(?string $pickupDateTime = null, ?string $pickupLocation = null, ?string $pickupLocationType = null, ?string $pickupLocationNumber = null)
    {
        $this
            ->setPickupDateTime($pickupDateTime)
            ->setPickupLocation($pickupLocation)
            ->setPickupLocationType($pickupLocationType)
            ->setPickupLocationNumber($pickupLocationNumber);
    }
    /**
     * Get PickupDateTime value
     * @return string|null
     */
    public function getPickupDateTime(): ?string
    {
        return $this->PickupDateTime;
    }
    /**
     * Set PickupDateTime value
     * @param string $pickupDateTime
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation
     */
    public function setPickupDateTime(?string $pickupDateTime = null): self
    {
        $this->PickupDateTime = $pickupDateTime;
        
        return $this;
    }
    /**
     * Get PickupLocation value
     * @return string|null
     */
    public function getPickupLocation(): ?string
    {
        return $this->PickupLocation;
    }
    /**
     * Set PickupLocation value
     * @param string $pickupLocation
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation
     */
    public function setPickupLocation(?string $pickupLocation = null): self
    {
        $this->PickupLocation = $pickupLocation;
        
        return $this;
    }
    /**
     * Get PickupLocationType value
     * @return string|null
     */
    public function getPickupLocationType(): ?string
    {
        return $this->PickupLocationType;
    }
    /**
     * Set PickupLocationType value
     * @param string $pickupLocationType
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation
     */
    public function setPickupLocationType(?string $pickupLocationType = null): self
    {
        $this->PickupLocationType = $pickupLocationType;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation
     */
    public function setPickupLocationNumber(?string $pickupLocationNumber = null): self
    {
        $this->PickupLocationNumber = $pickupLocationNumber;
        
        return $this;
    }
}
