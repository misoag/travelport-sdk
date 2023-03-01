<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleDetail StructType
 * Meta information extracted from the WSDL
 * - documentation: Make, model, etc information about the available vehicles
 * @subpackage Structs
 */
class VehicleDetail extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The industry standard code for this vehicle
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * The Class
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Class;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Category;
    /**
     * The AirConditioning
     * Meta information extracted from the WSDL
     * - documentation: True or False.
     * - use: required
     * @var bool
     */
    public bool $AirConditioning;
    /**
     * The Transmission
     * Meta information extracted from the WSDL
     * - documentation: Automatic, Manual
     * - use: required
     * @var string
     */
    public string $Transmission;
    /**
     * The MakeModel
     * Meta information extracted from the WSDL
     * - documentation: The Make and Model description of this vehicle
     * - use: required
     * @var string
     */
    public string $MakeModel;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: The supplier specific code for this vehicle.
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The PassengerCount
     * Meta information extracted from the WSDL
     * - documentation: Number of passengers this car can hold (e.g. 4-5)
     * - use: optional
     * @var string|null
     */
    public ?string $PassengerCount = null;
    /**
     * The NumberOfDoors
     * Meta information extracted from the WSDL
     * - documentation: The number of doors on vehicle. Ex: TwoToThreeDoors, TwoToFourDoors, FourToFiveDoors
     * @var string|null
     */
    public ?string $NumberOfDoors = null;
    /**
     * The BagCount
     * Meta information extracted from the WSDL
     * - documentation: The number of bags
     * @var string|null
     */
    public ?string $BagCount = null;
    /**
     * The FuelType
     * Meta information extracted from the WSDL
     * - documentation: The fuel type of vehicle
     * - use: optional
     * @var string|null
     */
    public ?string $FuelType = null;
    /**
     * The AcrissVehicleCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - use: optional
     * @var string|null
     */
    public ?string $AcrissVehicleCode = null;
    /**
     * The PreferredOption
     * Meta information extracted from the WSDL
     * - documentation: Preferred Option marker for Location
     * - use: optional
     * @var bool|null
     */
    public ?bool $PreferredOption = null;
    /**
     * Constructor method for VehicleDetail
     * @uses VehicleDetail::setCode()
     * @uses VehicleDetail::setClass()
     * @uses VehicleDetail::setCategory()
     * @uses VehicleDetail::setAirConditioning()
     * @uses VehicleDetail::setTransmission()
     * @uses VehicleDetail::setMakeModel()
     * @uses VehicleDetail::setSupplierCode()
     * @uses VehicleDetail::setPassengerCount()
     * @uses VehicleDetail::setNumberOfDoors()
     * @uses VehicleDetail::setBagCount()
     * @uses VehicleDetail::setFuelType()
     * @uses VehicleDetail::setAcrissVehicleCode()
     * @uses VehicleDetail::setPreferredOption()
     * @param string $code
     * @param string $class
     * @param string $category
     * @param bool $airConditioning
     * @param string $transmission
     * @param string $makeModel
     * @param string $supplierCode
     * @param string $passengerCount
     * @param string $numberOfDoors
     * @param string $bagCount
     * @param string $fuelType
     * @param string $acrissVehicleCode
     * @param bool $preferredOption
     */
    public function __construct(string $code, string $class, string $category, bool $airConditioning, string $transmission, string $makeModel, ?string $supplierCode = null, ?string $passengerCount = null, ?string $numberOfDoors = null, ?string $bagCount = null, ?string $fuelType = null, ?string $acrissVehicleCode = null, ?bool $preferredOption = null)
    {
        $this
            ->setCode($code)
            ->setClass($class)
            ->setCategory($category)
            ->setAirConditioning($airConditioning)
            ->setTransmission($transmission)
            ->setMakeModel($makeModel)
            ->setSupplierCode($supplierCode)
            ->setPassengerCount($passengerCount)
            ->setNumberOfDoors($numberOfDoors)
            ->setBagCount($bagCount)
            ->setFuelType($fuelType)
            ->setAcrissVehicleCode($acrissVehicleCode)
            ->setPreferredOption($preferredOption);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Class value
     * @return string
     */
    public function getClass(): string
    {
        return $this->Class;
    }
    /**
     * Set Class value
     * @param string $class
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setClass(string $class): self
    {
        $this->Class = $class;
        
        return $this;
    }
    /**
     * Get Category value
     * @return string
     */
    public function getCategory(): string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setCategory(string $category): self
    {
        $this->Category = $category;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setAirConditioning(bool $airConditioning): self
    {
        $this->AirConditioning = $airConditioning;
        
        return $this;
    }
    /**
     * Get Transmission value
     * @return string
     */
    public function getTransmission(): string
    {
        return $this->Transmission;
    }
    /**
     * Set Transmission value
     * @param string $transmission
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setTransmission(string $transmission): self
    {
        $this->Transmission = $transmission;
        
        return $this;
    }
    /**
     * Get MakeModel value
     * @return string
     */
    public function getMakeModel(): string
    {
        return $this->MakeModel;
    }
    /**
     * Set MakeModel value
     * @param string $makeModel
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setMakeModel(string $makeModel): self
    {
        $this->MakeModel = $makeModel;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get PassengerCount value
     * @return string|null
     */
    public function getPassengerCount(): ?string
    {
        return $this->PassengerCount;
    }
    /**
     * Set PassengerCount value
     * @param string $passengerCount
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setPassengerCount(?string $passengerCount = null): self
    {
        $this->PassengerCount = $passengerCount;
        
        return $this;
    }
    /**
     * Get NumberOfDoors value
     * @return string|null
     */
    public function getNumberOfDoors(): ?string
    {
        return $this->NumberOfDoors;
    }
    /**
     * Set NumberOfDoors value
     * @param string $numberOfDoors
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setNumberOfDoors(?string $numberOfDoors = null): self
    {
        $this->NumberOfDoors = $numberOfDoors;
        
        return $this;
    }
    /**
     * Get BagCount value
     * @return string|null
     */
    public function getBagCount(): ?string
    {
        return $this->BagCount;
    }
    /**
     * Set BagCount value
     * @param string $bagCount
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setBagCount(?string $bagCount = null): self
    {
        $this->BagCount = $bagCount;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setFuelType(?string $fuelType = null): self
    {
        $this->FuelType = $fuelType;
        
        return $this;
    }
    /**
     * Get AcrissVehicleCode value
     * @return string|null
     */
    public function getAcrissVehicleCode(): ?string
    {
        return $this->AcrissVehicleCode;
    }
    /**
     * Set AcrissVehicleCode value
     * @param string $acrissVehicleCode
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setAcrissVehicleCode(?string $acrissVehicleCode = null): self
    {
        $this->AcrissVehicleCode = $acrissVehicleCode;
        
        return $this;
    }
    /**
     * Get PreferredOption value
     * @return bool|null
     */
    public function getPreferredOption(): ?bool
    {
        return $this->PreferredOption;
    }
    /**
     * Set PreferredOption value
     * @param bool $preferredOption
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail
     */
    public function setPreferredOption(?bool $preferredOption = null): self
    {
        $this->PreferredOption = $preferredOption;
        
        return $this;
    }
}
