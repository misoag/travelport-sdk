<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $PickupDateTime;
    /**
     * The ReturnDateTime
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $ReturnDateTime;
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\VendorLocation[]
     */
    public ?array $VendorLocation = null;
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
    public ?string $PickupLocation = null;
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
    public ?string $ReturnLocation = null;
    /**
     * The PickupLocationType
     * Meta information extracted from the WSDL
     * - documentation: Required if use VendorLocationID. Ex: Terminal, ShuttleOnAirport, ShuttleOffAirport, RailwayStation, Hotel, CarDealer, CityCenterDowntown, EastOfCityCenter, SouthOfCityCenter, WestOfCityCenter, NorthOfCityCenter, PortOrFerry,
     * NearResort, Airport, Unknown
     * - use: optional
     * @var string|null
     */
    public ?string $PickupLocationType = null;
    /**
     * The ReturnLocationType
     * Meta information extracted from the WSDL
     * - documentation: Defaults to Pickup Location. Same options as Pickup Location.
     * - use: optional
     * @var string|null
     */
    public ?string $ReturnLocationType = null;
    /**
     * The PickupLocationNumber
     * Meta information extracted from the WSDL
     * - documentation: The value of this attribute should be the same as the value of VendorLocationID returned as part of VendorLocation@VendorLocationID in a VehicleLocationRsp.
     * - use: optional
     * @var string|null
     */
    public ?string $PickupLocationNumber = null;
    /**
     * The ReturnLocationNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $ReturnLocationNumber = null;
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
     * Set VendorLocation value
     * @param \Travelport\UniversalRecord\StructType\VendorLocation[] $vendorLocation
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
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
     * @param string $pickupLocationType
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setPickupLocationType(?string $pickupLocationType = null): self
    {
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
     * @param string $returnLocationType
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation
     */
    public function setReturnLocationType(?string $returnLocationType = null): self
    {
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
        $this->Key = $key;
        
        return $this;
    }
}
