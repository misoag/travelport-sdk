<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected bool $AirConditioning;
    /**
     * The TransmissionType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TransmissionType = null;
    /**
     * The VehicleClass
     * Meta information extracted from the WSDL
     * - documentation: Class of vehicle
     * - type: common:typeVehicleClass
     * - use: optional
     * @var string|null
     */
    protected ?string $VehicleClass = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Category of vehicle. Each supplier decides how these categories map to a vehicle class.
     * - type: common:typeVehicleCategory
     * - use: optional
     * @var string|null
     */
    protected ?string $Category = null;
    /**
     * The DoorCount
     * Meta information extracted from the WSDL
     * - documentation: The number of doors on vehicle. Ex: TwoToThreeDoors, TwoToFourDoors, FourToFiveDoors
     * - type: common:typeDoorCount
     * - use: optional
     * @var string|null
     */
    protected ?string $DoorCount = null;
    /**
     * The FuelType
     * Meta information extracted from the WSDL
     * - documentation: The fuel type of vehicle
     * - type: common:typeFuel
     * - use: optional
     * @var string|null
     */
    protected ?string $FuelType = null;
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
        // validation for constraint: boolean
        if (!is_null($airConditioning) && !is_bool($airConditioning)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($airConditioning, true), gettype($airConditioning)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleTransmission::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleTransmission::getValidValues()
     * @throws InvalidArgumentException
     * @param string $transmissionType
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setTransmissionType(?string $transmissionType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleTransmission::valueIsValid($transmissionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleTransmission', is_array($transmissionType) ? implode(', ', $transmissionType) : var_export($transmissionType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleTransmission::getValidValues())), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleClass::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleClass::getValidValues()
     * @throws InvalidArgumentException
     * @param string $vehicleClass
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setVehicleClass(?string $vehicleClass = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleClass::valueIsValid($vehicleClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleClass', is_array($vehicleClass) ? implode(', ', $vehicleClass) : var_export($vehicleClass, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleClass::getValidValues())), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleCategory::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleCategory::getValidValues()
     * @throws InvalidArgumentException
     * @param string $category
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleCategory::valueIsValid($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleCategory', is_array($category) ? implode(', ', $category) : var_export($category, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleCategory::getValidValues())), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeDoorCount::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeDoorCount::getValidValues()
     * @throws InvalidArgumentException
     * @param string $doorCount
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setDoorCount(?string $doorCount = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeDoorCount::valueIsValid($doorCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeDoorCount', is_array($doorCount) ? implode(', ', $doorCount) : var_export($doorCount, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeDoorCount::getValidValues())), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeFuel::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFuel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fuelType
     * @return \Travelport\UniversalRecord\StructType\VehicleTypeIdentifier
     */
    public function setFuelType(?string $fuelType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFuel::valueIsValid($fuelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFuel', is_array($fuelType) ? implode(', ', $fuelType) : var_export($fuelType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFuel::getValidValues())), __LINE__);
        }
        $this->FuelType = $fuelType;
        
        return $this;
    }
}
