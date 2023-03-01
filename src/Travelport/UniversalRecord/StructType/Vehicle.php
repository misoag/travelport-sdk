<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vehicle StructType
 * Meta information extracted from the WSDL
 * - documentation: Attributes related to policy marking. | Information related to single vehicle
 * @subpackage Structs
 */
class Vehicle extends AbstractStructBase
{
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $VendorCode;
    /**
     * The AirConditioning
     * Meta information extracted from the WSDL
     * - documentation: True or False.
     * - use: required
     * @var bool
     */
    public bool $AirConditioning;
    /**
     * The TransmissionType
     * Meta information extracted from the WSDL
     * - documentation: Automatic, Manual
     * - use: required
     * @var string
     */
    public string $TransmissionType;
    /**
     * The VehicleClass
     * Meta information extracted from the WSDL
     * - documentation: Class of vehicle
     * - use: required
     * @var string
     */
    public string $VehicleClass;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Category of vehicle. Each supplier decides how these categories map to a vehicle class.
     * - use: required
     * @var string
     */
    public string $Category;
    /**
     * The PolicyCodesList
     * Meta information extracted from the WSDL
     * - documentation: A list of codes that indicate why an item was determined to be ‘out of policy’.
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypePolicyCodesList|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypePolicyCodesList $PolicyCodesList = null;
    /**
     * The VehicleRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: VehicleRate
     * @var \Travelport\UniversalRecord\StructType\VehicleRate|null
     */
    public ?\Travelport\UniversalRecord\StructType\VehicleRate $VehicleRate = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Car type Description such as 'CHRYSLER SEBRING OR SIMILAR'
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * The DoorCount
     * Meta information extracted from the WSDL
     * - documentation: The number of doors on vehicle. Ex: TwoToThreeDoors, TwoToFourDoors, FourToFiveDoors
     * - use: optional
     * @var string|null
     */
    public ?string $DoorCount = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Location of the Vehicle or Counter
     * - use: optional
     * @var string|null
     */
    public ?string $Location = null;
    /**
     * The CounterLocationCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 4
     * - use: optional
     * @var string|null
     */
    public ?string $CounterLocationCode = null;
    /**
     * The VendorLocationKey
     * Meta information extracted from the WSDL
     * - documentation: Identifies the specific vendor location | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $VendorLocationKey = null;
    /**
     * The VendorName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $VendorName = null;
    /**
     * The AlternateVendor
     * Meta information extracted from the WSDL
     * - documentation: A vendor renting the vehicle on behalf of another company
     * - use: optional
     * @var string|null
     */
    public ?string $AlternateVendor = null;
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
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The ReturnAtPickup
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether vehicle can be returned at any location or pickup point only. If ReturnAtPickup = false then vehicle can be returned at any location else if ReturnAtPickup = true, vehicle should be returned in Pickup point only.
     * Supported Providers : 1G/1V
     * @var bool|null
     */
    public ?bool $ReturnAtPickup = null;
    /**
     * The InPolicy
     * @var bool|null
     */
    public ?bool $InPolicy = null;
    /**
     * The PolicyCode
     * Meta information extracted from the WSDL
     * - documentation: Type for PolicyCode attribute.
     * - base: xs:int
     * - maxInclusive: 9999
     * - minInclusive: 1
     * @var int|null
     */
    public ?int $PolicyCode = null;
    /**
     * The PreferredOption
     * @var bool|null
     */
    public ?bool $PreferredOption = null;
    /**
     * Constructor method for Vehicle
     * @uses Vehicle::setVendorCode()
     * @uses Vehicle::setAirConditioning()
     * @uses Vehicle::setTransmissionType()
     * @uses Vehicle::setVehicleClass()
     * @uses Vehicle::setCategory()
     * @uses Vehicle::setPolicyCodesList()
     * @uses Vehicle::setVehicleRate()
     * @uses Vehicle::setDescription()
     * @uses Vehicle::setDoorCount()
     * @uses Vehicle::setLocation()
     * @uses Vehicle::setCounterLocationCode()
     * @uses Vehicle::setVendorLocationKey()
     * @uses Vehicle::setVendorName()
     * @uses Vehicle::setAlternateVendor()
     * @uses Vehicle::setFuelType()
     * @uses Vehicle::setAcrissVehicleCode()
     * @uses Vehicle::setKey()
     * @uses Vehicle::setReturnAtPickup()
     * @uses Vehicle::setInPolicy()
     * @uses Vehicle::setPolicyCode()
     * @uses Vehicle::setPreferredOption()
     * @param string $vendorCode
     * @param bool $airConditioning
     * @param string $transmissionType
     * @param string $vehicleClass
     * @param string $category
     * @param \Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList
     * @param \Travelport\UniversalRecord\StructType\VehicleRate $vehicleRate
     * @param string $description
     * @param string $doorCount
     * @param string $location
     * @param string $counterLocationCode
     * @param string $vendorLocationKey
     * @param string $vendorName
     * @param string $alternateVendor
     * @param string $fuelType
     * @param string $acrissVehicleCode
     * @param string $key
     * @param bool $returnAtPickup
     * @param bool $inPolicy
     * @param int $policyCode
     * @param bool $preferredOption
     */
    public function __construct(string $vendorCode, bool $airConditioning, string $transmissionType, string $vehicleClass, string $category, ?\Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList = null, ?\Travelport\UniversalRecord\StructType\VehicleRate $vehicleRate = null, ?string $description = null, ?string $doorCount = null, ?string $location = null, ?string $counterLocationCode = null, ?string $vendorLocationKey = null, ?string $vendorName = null, ?string $alternateVendor = null, ?string $fuelType = null, ?string $acrissVehicleCode = null, ?string $key = null, ?bool $returnAtPickup = null, ?bool $inPolicy = null, ?int $policyCode = null, ?bool $preferredOption = null)
    {
        $this
            ->setVendorCode($vendorCode)
            ->setAirConditioning($airConditioning)
            ->setTransmissionType($transmissionType)
            ->setVehicleClass($vehicleClass)
            ->setCategory($category)
            ->setPolicyCodesList($policyCodesList)
            ->setVehicleRate($vehicleRate)
            ->setDescription($description)
            ->setDoorCount($doorCount)
            ->setLocation($location)
            ->setCounterLocationCode($counterLocationCode)
            ->setVendorLocationKey($vendorLocationKey)
            ->setVendorName($vendorName)
            ->setAlternateVendor($alternateVendor)
            ->setFuelType($fuelType)
            ->setAcrissVehicleCode($acrissVehicleCode)
            ->setKey($key)
            ->setReturnAtPickup($returnAtPickup)
            ->setInPolicy($inPolicy)
            ->setPolicyCode($policyCode)
            ->setPreferredOption($preferredOption);
    }
    /**
     * Get VendorCode value
     * @return string
     */
    public function getVendorCode(): string
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setVendorCode(string $vendorCode): self
    {
        $this->VendorCode = $vendorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setAirConditioning(bool $airConditioning): self
    {
        $this->AirConditioning = $airConditioning;
        
        return $this;
    }
    /**
     * Get TransmissionType value
     * @return string
     */
    public function getTransmissionType(): string
    {
        return $this->TransmissionType;
    }
    /**
     * Set TransmissionType value
     * @param string $transmissionType
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setTransmissionType(string $transmissionType): self
    {
        $this->TransmissionType = $transmissionType;
        
        return $this;
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
     * @param string $vehicleClass
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setVehicleClass(string $vehicleClass): self
    {
        $this->VehicleClass = $vehicleClass;
        
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
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setCategory(string $category): self
    {
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get PolicyCodesList value
     * @return \Travelport\UniversalRecord\StructType\TypePolicyCodesList|null
     */
    public function getPolicyCodesList(): ?\Travelport\UniversalRecord\StructType\TypePolicyCodesList
    {
        return $this->PolicyCodesList;
    }
    /**
     * Set PolicyCodesList value
     * @param \Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setPolicyCodesList(?\Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList = null): self
    {
        $this->PolicyCodesList = $policyCodesList;
        
        return $this;
    }
    /**
     * Get VehicleRate value
     * @return \Travelport\UniversalRecord\StructType\VehicleRate|null
     */
    public function getVehicleRate(): ?\Travelport\UniversalRecord\StructType\VehicleRate
    {
        return $this->VehicleRate;
    }
    /**
     * Set VehicleRate value
     * @param \Travelport\UniversalRecord\StructType\VehicleRate $vehicleRate
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setVehicleRate(?\Travelport\UniversalRecord\StructType\VehicleRate $vehicleRate = null): self
    {
        $this->VehicleRate = $vehicleRate;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
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
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setDoorCount(?string $doorCount = null): self
    {
        $this->DoorCount = $doorCount;
        
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
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setLocation(?string $location = null): self
    {
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get CounterLocationCode value
     * @return string|null
     */
    public function getCounterLocationCode(): ?string
    {
        return $this->CounterLocationCode;
    }
    /**
     * Set CounterLocationCode value
     * @param string $counterLocationCode
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setCounterLocationCode(?string $counterLocationCode = null): self
    {
        $this->CounterLocationCode = $counterLocationCode;
        
        return $this;
    }
    /**
     * Get VendorLocationKey value
     * @return string|null
     */
    public function getVendorLocationKey(): ?string
    {
        return $this->VendorLocationKey;
    }
    /**
     * Set VendorLocationKey value
     * @param string $vendorLocationKey
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setVendorLocationKey(?string $vendorLocationKey = null): self
    {
        $this->VendorLocationKey = $vendorLocationKey;
        
        return $this;
    }
    /**
     * Get VendorName value
     * @return string|null
     */
    public function getVendorName(): ?string
    {
        return $this->VendorName;
    }
    /**
     * Set VendorName value
     * @param string $vendorName
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setVendorName(?string $vendorName = null): self
    {
        $this->VendorName = $vendorName;
        
        return $this;
    }
    /**
     * Get AlternateVendor value
     * @return string|null
     */
    public function getAlternateVendor(): ?string
    {
        return $this->AlternateVendor;
    }
    /**
     * Set AlternateVendor value
     * @param string $alternateVendor
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setAlternateVendor(?string $alternateVendor = null): self
    {
        $this->AlternateVendor = $alternateVendor;
        
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
     * @return \Travelport\UniversalRecord\StructType\Vehicle
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
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setAcrissVehicleCode(?string $acrissVehicleCode = null): self
    {
        $this->AcrissVehicleCode = $acrissVehicleCode;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ReturnAtPickup value
     * @return bool|null
     */
    public function getReturnAtPickup(): ?bool
    {
        return $this->ReturnAtPickup;
    }
    /**
     * Set ReturnAtPickup value
     * @param bool $returnAtPickup
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setReturnAtPickup(?bool $returnAtPickup = null): self
    {
        $this->ReturnAtPickup = $returnAtPickup;
        
        return $this;
    }
    /**
     * Get InPolicy value
     * @return bool|null
     */
    public function getInPolicy(): ?bool
    {
        return $this->InPolicy;
    }
    /**
     * Set InPolicy value
     * @param bool $inPolicy
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setInPolicy(?bool $inPolicy = null): self
    {
        $this->InPolicy = $inPolicy;
        
        return $this;
    }
    /**
     * Get PolicyCode value
     * @return int|null
     */
    public function getPolicyCode(): ?int
    {
        return $this->PolicyCode;
    }
    /**
     * Set PolicyCode value
     * @param int $policyCode
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setPolicyCode(?int $policyCode = null): self
    {
        $this->PolicyCode = $policyCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setPreferredOption(?bool $preferredOption = null): self
    {
        $this->PreferredOption = $preferredOption;
        
        return $this;
    }
}
