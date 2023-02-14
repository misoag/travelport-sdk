<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $VendorCode;
    /**
     * The AirConditioning
     * Meta information extracted from the WSDL
     * - documentation: True or False.
     * - use: required
     * @var bool
     */
    protected bool $AirConditioning;
    /**
     * The TransmissionType
     * Meta information extracted from the WSDL
     * - documentation: Automatic, Manual
     * - use: required
     * @var string
     */
    protected string $TransmissionType;
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
     * - use: required
     * @var string
     */
    protected string $Category;
    /**
     * The PolicyCodesList
     * Meta information extracted from the WSDL
     * - documentation: A list of codes that indicate why an item was determined to be ‘out of policy’.
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypePolicyCodesList|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypePolicyCodesList $PolicyCodesList = null;
    /**
     * The VehicleRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: VehicleRate
     * @var \Travelport\UniversalRecord\StructType\VehicleRate|null
     */
    protected ?\Travelport\UniversalRecord\StructType\VehicleRate $VehicleRate = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Car type Description such as 'CHRYSLER SEBRING OR SIMILAR'
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The DoorCount
     * Meta information extracted from the WSDL
     * - documentation: The number of doors on vehicle. Ex: TwoToThreeDoors, TwoToFourDoors, FourToFiveDoors
     * - use: optional
     * @var string|null
     */
    protected ?string $DoorCount = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Location of the Vehicle or Counter
     * - use: optional
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The CounterLocationCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 4
     * - use: optional
     * @var string|null
     */
    protected ?string $CounterLocationCode = null;
    /**
     * The VendorLocationKey
     * Meta information extracted from the WSDL
     * - documentation: Identifies the specific vendor location | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $VendorLocationKey = null;
    /**
     * The VendorName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $VendorName = null;
    /**
     * The AlternateVendor
     * Meta information extracted from the WSDL
     * - documentation: A vendor renting the vehicle on behalf of another company
     * - use: optional
     * @var string|null
     */
    protected ?string $AlternateVendor = null;
    /**
     * The FuelType
     * Meta information extracted from the WSDL
     * - documentation: The fuel type of vehicle
     * - use: optional
     * @var string|null
     */
    protected ?string $FuelType = null;
    /**
     * The AcrissVehicleCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - use: optional
     * @var string|null
     */
    protected ?string $AcrissVehicleCode = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The ReturnAtPickup
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether vehicle can be returned at any location or pickup point only. If ReturnAtPickup = false then vehicle can be returned at any location else if ReturnAtPickup = true, vehicle should be returned in Pickup point only.
     * Supported Providers : 1G/1V
     * @var bool|null
     */
    protected ?bool $ReturnAtPickup = null;
    /**
     * The InPolicy
     * @var bool|null
     */
    protected ?bool $InPolicy = null;
    /**
     * The PolicyCode
     * Meta information extracted from the WSDL
     * - documentation: Type for PolicyCode attribute.
     * - base: xs:int
     * - maxInclusive: 9999
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $PolicyCode = null;
    /**
     * The PreferredOption
     * @var bool|null
     */
    protected ?bool $PreferredOption = null;
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
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorCode, true), gettype($vendorCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($vendorCode) && mb_strlen((string) $vendorCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $vendorCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($vendorCode) && mb_strlen((string) $vendorCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $vendorCode)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($airConditioning) && !is_bool($airConditioning)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($airConditioning, true), gettype($airConditioning)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleTransmission::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleTransmission::getValidValues()
     * @throws InvalidArgumentException
     * @param string $transmissionType
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setTransmissionType(string $transmissionType): self
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
     * @return string
     */
    public function getVehicleClass(): string
    {
        return $this->VehicleClass;
    }
    /**
     * Set VehicleClass value
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleClass::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleClass::getValidValues()
     * @throws InvalidArgumentException
     * @param string $vehicleClass
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setVehicleClass(string $vehicleClass): self
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
     * @return string
     */
    public function getCategory(): string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleCategory::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleCategory::getValidValues()
     * @throws InvalidArgumentException
     * @param string $category
     * @return \Travelport\UniversalRecord\StructType\Vehicle
     */
    public function setCategory(string $category): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleCategory::valueIsValid($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleCategory', is_array($category) ? implode(', ', $category) : var_export($category, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleCategory::getValidValues())), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeDoorCount::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeDoorCount::getValidValues()
     * @throws InvalidArgumentException
     * @param string $doorCount
     * @return \Travelport\UniversalRecord\StructType\Vehicle
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
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($counterLocationCode) && !is_string($counterLocationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($counterLocationCode, true), gettype($counterLocationCode)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($counterLocationCode) && mb_strlen((string) $counterLocationCode) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $counterLocationCode)), __LINE__);
        }
        // validation for constraint: minLength(4)
        if (!is_null($counterLocationCode) && mb_strlen((string) $counterLocationCode) < 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 4', mb_strlen((string) $counterLocationCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($vendorLocationKey) && !is_string($vendorLocationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorLocationKey, true), gettype($vendorLocationKey)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($vendorName) && !is_string($vendorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorName, true), gettype($vendorName)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($vendorName) && mb_strlen((string) $vendorName) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $vendorName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($vendorName) && mb_strlen((string) $vendorName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $vendorName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($alternateVendor) && !is_string($alternateVendor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alternateVendor, true), gettype($alternateVendor)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeFuel::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFuel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fuelType
     * @return \Travelport\UniversalRecord\StructType\Vehicle
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
        // validation for constraint: string
        if (!is_null($acrissVehicleCode) && !is_string($acrissVehicleCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acrissVehicleCode, true), gettype($acrissVehicleCode)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($acrissVehicleCode) && mb_strlen((string) $acrissVehicleCode) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $acrissVehicleCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($returnAtPickup) && !is_bool($returnAtPickup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnAtPickup, true), gettype($returnAtPickup)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($inPolicy) && !is_bool($inPolicy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inPolicy, true), gettype($inPolicy)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($policyCode) && !(is_int($policyCode) || ctype_digit($policyCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($policyCode, true), gettype($policyCode)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999)
        if (!is_null($policyCode) && $policyCode > 9999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999', var_export($policyCode, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($policyCode) && $policyCode < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($policyCode, true)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($preferredOption) && !is_bool($preferredOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preferredOption, true), gettype($preferredOption)), __LINE__);
        }
        $this->PreferredOption = $preferredOption;
        
        return $this;
    }
}
