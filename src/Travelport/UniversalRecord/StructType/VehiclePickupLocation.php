<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePickupLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for Vehicle Location ,Vendor and Vehicle Modifier.
 * @subpackage Structs
 */
class VehiclePickupLocation extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * Meta information extracted from the WSDL
     * - documentation: The location (city or airport code) at which the vehicle will be picked up. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $PickUpLocation;
    /**
     * The Vendor
     * Meta information extracted from the WSDL
     * - ref: Vendor
     * @var \Travelport\UniversalRecord\StructType\Vendor|null
     */
    public ?\Travelport\UniversalRecord\StructType\Vendor $Vendor = null;
    /**
     * The VehicleModifier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleModifier
     * @var \Travelport\UniversalRecord\StructType\VehicleModifier[]
     */
    public ?array $VehicleModifier = null;
    /**
     * Constructor method for VehiclePickupLocation
     * @uses VehiclePickupLocation::setPickUpLocation()
     * @uses VehiclePickupLocation::setVendor()
     * @uses VehiclePickupLocation::setVehicleModifier()
     * @param string $pickUpLocation
     * @param \Travelport\UniversalRecord\StructType\Vendor $vendor
     * @param \Travelport\UniversalRecord\StructType\VehicleModifier[] $vehicleModifier
     */
    public function __construct(string $pickUpLocation, ?\Travelport\UniversalRecord\StructType\Vendor $vendor = null, ?array $vehicleModifier = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setVendor($vendor)
            ->setVehicleModifier($vehicleModifier);
    }
    /**
     * Get PickUpLocation value
     * @return string
     */
    public function getPickUpLocation(): string
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param string $pickUpLocation
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupLocation
     */
    public function setPickUpLocation(string $pickUpLocation): self
    {
        $this->PickUpLocation = $pickUpLocation;
        
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Travelport\UniversalRecord\StructType\Vendor|null
     */
    public function getVendor(): ?\Travelport\UniversalRecord\StructType\Vendor
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Travelport\UniversalRecord\StructType\Vendor $vendor
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupLocation
     */
    public function setVendor(?\Travelport\UniversalRecord\StructType\Vendor $vendor = null): self
    {
        $this->Vendor = $vendor;
        
        return $this;
    }
    /**
     * Get VehicleModifier value
     * @return \Travelport\UniversalRecord\StructType\VehicleModifier[]
     */
    public function getVehicleModifier(): ?array
    {
        return $this->VehicleModifier;
    }
    /**
     * Set VehicleModifier value
     * @param \Travelport\UniversalRecord\StructType\VehicleModifier[] $vehicleModifier
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupLocation
     */
    public function setVehicleModifier(?array $vehicleModifier = null): self
    {
        $this->VehicleModifier = $vehicleModifier;
        
        return $this;
    }
    /**
     * Add item to VehicleModifier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleModifier $item
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupLocation
     */
    public function addToVehicleModifier(\Travelport\UniversalRecord\StructType\VehicleModifier $item): self
    {
        $this->VehicleModifier[] = $item;
        
        return $this;
    }
}
