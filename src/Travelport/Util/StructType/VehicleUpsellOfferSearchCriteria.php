<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleUpsellOfferSearchCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Search criteria for VehicleUpsellOffers.
 * @subpackage Structs
 */
class VehicleUpsellOfferSearchCriteria extends AbstractStructBase
{
    /**
     * The VehicleClass
     * Meta information extracted from the WSDL
     * - documentation: Class of vehicle
     * - use: required
     * @var string
     */
    protected string $VehicleClass;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Category of vehicle. Each supplier decides how these categories map to a vehicle class.
     * - use: optional
     * @var string|null
     */
    protected ?string $Category = null;
    /**
     * The AirConditioning
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AirConditioning = null;
    /**
     * The TransmissionType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TransmissionType = null;
    /**
     * The DoorCount
     * Meta information extracted from the WSDL
     * - documentation: The number of doors on the vehicle. Could be a range like '2-4'
     * - use: optional
     * @var string|null
     */
    protected ?string $DoorCount = null;
    /**
     * Constructor method for VehicleUpsellOfferSearchCriteria
     * @uses VehicleUpsellOfferSearchCriteria::setVehicleClass()
     * @uses VehicleUpsellOfferSearchCriteria::setCategory()
     * @uses VehicleUpsellOfferSearchCriteria::setAirConditioning()
     * @uses VehicleUpsellOfferSearchCriteria::setTransmissionType()
     * @uses VehicleUpsellOfferSearchCriteria::setDoorCount()
     * @param string $vehicleClass
     * @param string $category
     * @param bool $airConditioning
     * @param string $transmissionType
     * @param string $doorCount
     */
    public function __construct(string $vehicleClass, ?string $category = null, ?bool $airConditioning = null, ?string $transmissionType = null, ?string $doorCount = null)
    {
        $this
            ->setVehicleClass($vehicleClass)
            ->setCategory($category)
            ->setAirConditioning($airConditioning)
            ->setTransmissionType($transmissionType)
            ->setDoorCount($doorCount);
    }
    /**
     * Get VehicleClass value
     * @return string
     */
    public function getVehicleClass(): string
    {
        return $this->VehicleClass;
    }
    /**
     * Set VehicleClass value
     * @uses \Travelport\Util\EnumType\TypeVehicleClass::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleClass::getValidValues()
     * @throws InvalidArgumentException
     * @param string $vehicleClass
     * @return \Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria
     */
    public function setVehicleClass(string $vehicleClass): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVehicleClass::valueIsValid($vehicleClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVehicleClass', is_array($vehicleClass) ? implode(', ', $vehicleClass) : var_export($vehicleClass, true), implode(', ', \Travelport\Util\EnumType\TypeVehicleClass::getValidValues())), __LINE__);
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
     * @uses \Travelport\Util\EnumType\TypeVehicleCategory::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleCategory::getValidValues()
     * @throws InvalidArgumentException
     * @param string $category
     * @return \Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVehicleCategory::valueIsValid($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVehicleCategory', is_array($category) ? implode(', ', $category) : var_export($category, true), implode(', ', \Travelport\Util\EnumType\TypeVehicleCategory::getValidValues())), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get AirConditioning value
     * @return bool|null
     */
    public function getAirConditioning(): ?bool
    {
        return $this->AirConditioning;
    }
    /**
     * Set AirConditioning value
     * @param bool $airConditioning
     * @return \Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria
     */
    public function setAirConditioning(?bool $airConditioning = null): self
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
     * @uses \Travelport\Util\EnumType\TypeVehicleTransmission::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVehicleTransmission::getValidValues()
     * @throws InvalidArgumentException
     * @param string $transmissionType
     * @return \Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria
     */
    public function setTransmissionType(?string $transmissionType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVehicleTransmission::valueIsValid($transmissionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVehicleTransmission', is_array($transmissionType) ? implode(', ', $transmissionType) : var_export($transmissionType, true), implode(', ', \Travelport\Util\EnumType\TypeVehicleTransmission::getValidValues())), __LINE__);
        }
        $this->TransmissionType = $transmissionType;
        
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
     * @uses \Travelport\Util\EnumType\TypeDoorCount::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeDoorCount::getValidValues()
     * @throws InvalidArgumentException
     * @param string $doorCount
     * @return \Travelport\Util\StructType\VehicleUpsellOfferSearchCriteria
     */
    public function setDoorCount(?string $doorCount = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeDoorCount::valueIsValid($doorCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeDoorCount', is_array($doorCount) ? implode(', ', $doorCount) : var_export($doorCount, true), implode(', ', \Travelport\Util\EnumType\TypeDoorCount::getValidValues())), __LINE__);
        }
        $this->DoorCount = $doorCount;
        
        return $this;
    }
}
