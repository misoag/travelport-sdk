<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected int $Version;
    /**
     * The VehicleDateLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: vehicle:VehicleDateLocation
     * @var \Travelport\UniversalRecord\StructType\VehicleDateLocation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\VehicleDateLocation $VehicleDateLocation = null;
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: vehicle:Vehicle
     * @var \Travelport\UniversalRecord\StructType\Vehicle|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Vehicle $Vehicle = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * The SupplierLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierLocatorCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
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
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($supplierLocatorCode) && !is_string($supplierLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierLocatorCode, true), gettype($supplierLocatorCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
