<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleTypeIdentifier StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to update Vehicle segment details of existing Vehicle Booking. Modify operation : Only modification of Vehicle segment details is supported.
 * @subpackage Structs
 */
class VehicleTypeIdentifier extends AbstractStructBase
{
    /**
     * The AirConditioning
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public bool $AirConditioning;
    /**
     * The TransmissionType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TransmissionType = null;
    /**
     * The VehicleClass
     * Meta information extracted from the WSDL
     * - documentation: Class of vehicle
     * - type: common:typeVehicleClass
     * - use: optional
     * @var string|null
     */
    public ?string $VehicleClass = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Category of vehicle. Each supplier decides how these categories map to a vehicle class.
     * - type: common:typeVehicleCategory
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
    /**
     * The DoorCount
     * Meta information extracted from the WSDL
     * - documentation: The number of doors on vehicle. Ex: TwoToThreeDoors, TwoToFourDoors, FourToFiveDoors
     * - type: common:typeDoorCount
     * - use: optional
     * @var string|null
     */
    public ?string $DoorCount = null;
    /**
     * The FuelType
     * Meta information extracted from the WSDL
     * - documentation: The fuel type of vehicle
     * - type: common:typeFuel
     * - use: optional
     * @var string|null
     */
    public ?string $FuelType = null;
    /**
     * Constructor method for VehicleTypeIdentifier
     * @uses VehicleTypeIdentifier::setAirConditioning()
     * @uses VehicleTypeIdentifier::setTransmissionType()
     * @uses VehicleTypeIdentifier::setVehicleClass()
     * @uses VehicleTypeIdentifier::setCategory()
     * @uses VehicleTypeIdentifier::setDoorCount()
     * @uses VehicleTypeIdentifier::setFuelType()
     * @param bool $airConditioning
     * @param string $transmissionType
     * @param string $vehicleClass
     * @param string $category
     * @param string $doorCount
     * @param string $fuelType
     */
    public function __construct(bool $airConditioning, ?string $transmissionType = null, ?string $vehicleClass = null, ?string $category = null, ?string $doorCount = null, ?string $fuelType = null)
    {
        $this
            ->setAirConditioning($airConditioning)
            ->setTransmissionType($transmissionType)
            ->setVehicleClass($vehicleClass)
            ->setCategory($category)
            ->setDoorCount($doorCount)
            ->setFuelType($fuelType);
    }
    /**
     * Get AirConditioning value
     * @return bool
     */
    public function getAirConditioning(): bool
    {
        return $this->AirConditioning;
    }
    /**
     * Set AirConditioning value
     * @param bool $airConditioning
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setAirConditioning(bool $airConditioning): self
    {
        $this->AirConditioning = $airConditioning;
        
        return $this;
    }
    /**
     * Get TransmissionType value
     * @return string|null
     */
    public function getTransmissionType(): ?string
    {
        return $this->TransmissionType;
    }
    /**
     * Set TransmissionType value
     * @param string $transmissionType
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setTransmissionType(?string $transmissionType = null): self
    {
        $this->TransmissionType = $transmissionType;
        
        return $this;
    }
    /**
     * Get VehicleClass value
     * @return string|null
     */
    public function getVehicleClass(): ?string
    {
        return $this->VehicleClass;
    }
    /**
     * Set VehicleClass value
     * @param string $vehicleClass
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setVehicleClass(?string $vehicleClass = null): self
    {
        $this->VehicleClass = $vehicleClass;
        
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setCategory(?string $category = null): self
    {
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get DoorCount value
     * @return string|null
     */
    public function getDoorCount(): ?string
    {
        return $this->DoorCount;
    }
    /**
     * Set DoorCount value
     * @param string $doorCount
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setDoorCount(?string $doorCount = null): self
    {
        $this->DoorCount = $doorCount;
        
        return $this;
    }
    /**
     * Get FuelType value
     * @return string|null
     */
    public function getFuelType(): ?string
    {
        return $this->FuelType;
    }
    /**
     * Set FuelType value
     * @param string $fuelType
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setFuelType(?string $fuelType = null): self
    {
        $this->FuelType = $fuelType;
        
        return $this;
    }
}
