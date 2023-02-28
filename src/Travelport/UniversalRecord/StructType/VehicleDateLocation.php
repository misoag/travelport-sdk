<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleDateLocation StructType
 * @subpackage Structs
 */
class VehicleDateLocation extends AbstractStructBase
{
    /**
     * The PickupDateTime
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $PickupDateTime;
    /**
     * The ReturnDateTime
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ReturnDateTime;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    protected ?array $VendorLocation = null;
    /**
     * The PickupLocation
     * Meta information extracted from the WSDL
     * - documentation: PickUpLocation is optional if Reference point is specified | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PickupLocation = null;
    /**
     * The ReturnLocation
     * Meta information extracted from the WSDL
     * - documentation: If not specified, the PickupLocation will be assumed | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ReturnLocation = null;
    /**
     * The PickupLocationType
     * Meta information extracted from the WSDL
     * - documentation: Required if use VendorLocationID. Ex: Terminal, ShuttleOnAirport, ShuttleOffAirport, RailwayStation, Hotel, CarDealer, CityCenterDowntown, EastOfCityCenter, SouthOfCityCenter, WestOfCityCenter, NorthOfCityCenter, PortOrFerry,
     * NearResort, Airport, Unknown
     * - use: optional
     * @var string|null
     */
    protected ?string $PickupLocationType = null;
    /**
     * The ReturnLocationType
     * Meta information extracted from the WSDL
     * - documentation: Defaults to Pickup Location. Same options as Pickup Location.
     * - use: optional
     * @var string|null
     */
    protected ?string $ReturnLocationType = null;
    /**
     * The PickupLocationNumber
     * Meta information extracted from the WSDL
     * - documentation: The value of this attribute should be the same as the value of VendorLocationID returned as part of VendorLocation@VendorLocationID in a VehicleLocationRsp.
     * - use: optional
     * @var string|null
     */
    protected ?string $PickupLocationNumber = null;
    /**
     * The ReturnLocationNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ReturnLocationNumber = null;
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
     * Constructor method for VehicleDateLocation
     * @uses VehicleDateLocation::setPickupDateTime()
     * @uses VehicleDateLocation::setReturnDateTime()
     * @uses VehicleDateLocation::setVendorLocation()
     * @uses VehicleDateLocation::setPickupLocation()
     * @uses VehicleDateLocation::setReturnLocation()
     * @uses VehicleDateLocation::setPickupLocationType()
     * @uses VehicleDateLocation::setReturnLocationType()
     * @uses VehicleDateLocation::setPickupLocationNumber()
     * @uses VehicleDateLocation::setReturnLocationNumber()
     * @uses VehicleDateLocation::setKey()
     * @param string $pickupDateTime
     * @param string $returnDateTime
     * @param \Travelport\UniversalRecord\StructType\VendorLocation[] $vendorLocation
     * @param string $pickupLocation
     * @param string $returnLocation
     * @param string $pickupLocationType
     * @param string $returnLocationType
     * @param string $pickupLocationNumber
     * @param string $returnLocationNumber
     * @param string $key
     */
    public function __construct(string $pickupDateTime, string $returnDateTime, ?array $vendorLocation = null, ?string $pickupLocation = null, ?string $returnLocation = null, ?string $pickupLocationType = null, ?string $returnLocationType = null, ?string $pickupLocationNumber = null, ?string $returnLocationNumber = null, ?string $key = null)
    {
        $this
            ->setPickupDateTime($pickupDateTime)
            ->setReturnDateTime($returnDateTime)
            ->setVendorLocation($vendorLocation)
            ->setPickupLocation($pickupLocation)
            ->setReturnLocation($returnLocation)
            ->setPickupLocationType($pickupLocationType)
            ->setReturnLocationType($returnLocationType)
            ->setPickupLocationNumber($pickupLocationNumber)
            ->setReturnLocationNumber($returnLocationNumber)
            ->setKey($key);
    }
    /**
     * Get PickupDateTime value
     * @return string
     */
    public function getPickupDateTime(): string
    {
        return $this->PickupDateTime;
    }
    /**
     * Set PickupDateTime value
     * @param string $pickupDateTime
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setPickupDateTime(string $pickupDateTime): self
    {
        // validation for constraint: string
        if (!is_null($pickupDateTime) && !is_string($pickupDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDateTime, true), gettype($pickupDateTime)), __LINE__);
        }
        $this->PickupDateTime = $pickupDateTime;
        
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return string
     */
    public function getReturnDateTime(): string
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setReturnDateTime(string $returnDateTime): self
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDateTime, true), gettype($returnDateTime)), __LINE__);
        }
        $this->ReturnDateTime = $returnDateTime;
        
        return $this;
    }
    /**
     * Get VendorLocation value
     * @return \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    public function getVendorLocation(): ?array
    {
        return $this->VendorLocation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVendorLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVendorLocation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVendorLocationForArrayConstraintFromSetVendorLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleDateLocationVendorLocationItem) {
            // validation for constraint: itemType
            if (!$vehicleDateLocationVendorLocationItem instanceof \Travelport\UniversalRecord\StructType\VendorLocation) {
                $invalidValues[] = is_object($vehicleDateLocationVendorLocationItem) ? get_class($vehicleDateLocationVendorLocationItem) : sprintf('%s(%s)', gettype($vehicleDateLocationVendorLocationItem), var_export($vehicleDateLocationVendorLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VendorLocation property can only contain items of type \Travelport\UniversalRecord\StructType\VendorLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VendorLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VendorLocation[] $vendorLocation
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($vendorLocationArrayErrorMessage = self::validateVendorLocationForArrayConstraintFromSetVendorLocation($vendorLocation))) {
            throw new InvalidArgumentException($vendorLocationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vendorLocation) && count($vendorLocation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vendorLocation)), __LINE__);
        }
        $this->VendorLocation = $vendorLocation;
        
        return $this;
    }
    /**
     * Add item to VendorLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VendorLocation $item
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function addToVendorLocation(\Travelport\UniversalRecord\StructType\VendorLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VendorLocation) {
            throw new InvalidArgumentException(sprintf('The VendorLocation property can only contain items of type \Travelport\UniversalRecord\StructType\VendorLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VendorLocation) && count($this->VendorLocation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VendorLocation)), __LINE__);
        }
        $this->VendorLocation[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setPickupLocation(?string $pickupLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupLocation) && !is_string($pickupLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocation, true), gettype($pickupLocation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($pickupLocation) && mb_strlen((string) $pickupLocation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $pickupLocation)), __LINE__);
        }
        $this->PickupLocation = $pickupLocation;
        
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return string|null
     */
    public function getReturnLocation(): ?string
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param string $returnLocation
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setReturnLocation(?string $returnLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($returnLocation) && !is_string($returnLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnLocation, true), gettype($returnLocation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($returnLocation) && mb_strlen((string) $returnLocation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $returnLocation)), __LINE__);
        }
        $this->ReturnLocation = $returnLocation;
        
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pickupLocationType
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setPickupLocationType(?string $pickupLocationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleLocation::valueIsValid($pickupLocationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleLocation', is_array($pickupLocationType) ? implode(', ', $pickupLocationType) : var_export($pickupLocationType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::getValidValues())), __LINE__);
        }
        $this->PickupLocationType = $pickupLocationType;
        
        return $this;
    }
    /**
     * Get ReturnLocationType value
     * @return string|null
     */
    public function getReturnLocationType(): ?string
    {
        return $this->ReturnLocationType;
    }
    /**
     * Set ReturnLocationType value
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $returnLocationType
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setReturnLocationType(?string $returnLocationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleLocation::valueIsValid($returnLocationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleLocation', is_array($returnLocationType) ? implode(', ', $returnLocationType) : var_export($returnLocationType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::getValidValues())), __LINE__);
        }
        $this->ReturnLocationType = $returnLocationType;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setPickupLocationNumber(?string $pickupLocationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupLocationNumber) && !is_string($pickupLocationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocationNumber, true), gettype($pickupLocationNumber)), __LINE__);
        }
        $this->PickupLocationNumber = $pickupLocationNumber;
        
        return $this;
    }
    /**
     * Get ReturnLocationNumber value
     * @return string|null
     */
    public function getReturnLocationNumber(): ?string
    {
        return $this->ReturnLocationNumber;
    }
    /**
     * Set ReturnLocationNumber value
     * @param string $returnLocationNumber
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setReturnLocationNumber(?string $returnLocationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($returnLocationNumber) && !is_string($returnLocationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnLocationNumber, true), gettype($returnLocationNumber)), __LINE__);
        }
        $this->ReturnLocationNumber = $returnLocationNumber;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
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
}
