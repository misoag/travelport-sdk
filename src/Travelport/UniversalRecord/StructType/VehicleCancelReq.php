<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCancelReq StructType
 * Meta information extracted from the WSDL
 * - documentation: segment matches, then all matching will be removed. | This will cancel one or more vehicle segments based on the criteria given. If more than one | PNR Cancel request for a vehicle booking. Given a provider code and a provider
 * locator code.
 * @subpackage Structs
 */
class VehicleCancelReq extends BaseReq
{
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * - use: required
     * @var int
     */
    public int $Version;
    /**
     * The VehicleDateLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: vehicle:VehicleDateLocation
     * @var \Travelport\UniversalRecord\StructType\VehicleDateLocation|null
     */
    public ?\Travelport\UniversalRecord\StructType\VehicleDateLocation $VehicleDateLocation = null;
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: vehicle:Vehicle
     * @var \Travelport\UniversalRecord\StructType\Vehicle|null
     */
    public ?\Travelport\UniversalRecord\StructType\Vehicle $Vehicle = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The SupplierLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierLocatorCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * Constructor method for VehicleCancelReq
     * @uses VehicleCancelReq::setVersion()
     * @uses VehicleCancelReq::setVehicleDateLocation()
     * @uses VehicleCancelReq::setVehicle()
     * @uses VehicleCancelReq::setFileFinishingInfo()
     * @uses VehicleCancelReq::setSupplierCode()
     * @uses VehicleCancelReq::setSupplierLocatorCode()
     * @uses VehicleCancelReq::setProviderCode()
     * @uses VehicleCancelReq::setProviderLocatorCode()
     * @param int $version
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocation $vehicleDateLocation
     * @param \Travelport\UniversalRecord\StructType\Vehicle $vehicle
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @param string $supplierCode
     * @param string $supplierLocatorCode
     * @param string $providerCode
     * @param string $providerLocatorCode
     */
    public function __construct(int $version, ?\Travelport\UniversalRecord\StructType\VehicleDateLocation $vehicleDateLocation = null, ?\Travelport\UniversalRecord\StructType\Vehicle $vehicle = null, ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null, ?string $supplierCode = null, ?string $supplierLocatorCode = null, ?string $providerCode = null, ?string $providerLocatorCode = null)
    {
        $this
            ->setVersion($version)
            ->setVehicleDateLocation($vehicleDateLocation)
            ->setVehicle($vehicle)
            ->setFileFinishingInfo($fileFinishingInfo)
            ->setSupplierCode($supplierCode)
            ->setSupplierLocatorCode($supplierLocatorCode)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode);
    }
    /**
     * Get Version value
     * @return int
     */
    public function getVersion(): int
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Travelport\UniversalRecord\StructType\VehicleCancelReq
     */
    public function setVersion(int $version): self
    {
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get VehicleDateLocation value
     * @return \Travelport\UniversalRecord\StructType\VehicleDateLocation|null
     */
    public function getVehicleDateLocation(): ?\Travelport\UniversalRecord\StructType\VehicleDateLocation
    {
        return $this->VehicleDateLocation;
    }
    /**
     * Set VehicleDateLocation value
     * @param \Travelport\UniversalRecord\StructType\VehicleDateLocation $vehicleDateLocation
     * @return \Travelport\UniversalRecord\StructType\VehicleCancelReq
     */
    public function setVehicleDateLocation(?\Travelport\UniversalRecord\StructType\VehicleDateLocation $vehicleDateLocation = null): self
    {
        $this->VehicleDateLocation = $vehicleDateLocation;
        
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Travelport\UniversalRecord\StructType\Vehicle|null
     */
    public function getVehicle(): ?\Travelport\UniversalRecord\StructType\Vehicle
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Travelport\UniversalRecord\StructType\Vehicle $vehicle
     * @return \Travelport\UniversalRecord\StructType\VehicleCancelReq
     */
    public function setVehicle(?\Travelport\UniversalRecord\StructType\Vehicle $vehicle = null): self
    {
        $this->Vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get FileFinishingInfo value
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public function getFileFinishingInfo(): ?\Travelport\UniversalRecord\StructType\FileFinishingInfo
    {
        return $this->FileFinishingInfo;
    }
    /**
     * Set FileFinishingInfo value
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @return \Travelport\UniversalRecord\StructType\VehicleCancelReq
     */
    public function setFileFinishingInfo(?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null): self
    {
        $this->FileFinishingInfo = $fileFinishingInfo;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleCancelReq
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get SupplierLocatorCode value
     * @return string|null
     */
    public function getSupplierLocatorCode(): ?string
    {
        return $this->SupplierLocatorCode;
    }
    /**
     * Set SupplierLocatorCode value
     * @param string $supplierLocatorCode
     * @return \Travelport\UniversalRecord\StructType\VehicleCancelReq
     */
    public function setSupplierLocatorCode(?string $supplierLocatorCode = null): self
    {
        $this->SupplierLocatorCode = $supplierLocatorCode;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\VehicleCancelReq
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\VehicleCancelReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
