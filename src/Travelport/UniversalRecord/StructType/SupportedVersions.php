<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupportedVersions StructType
 * Meta information extracted from the WSDL
 * - documentation: SOAP Header element that determines what version a particular request supports
 * @subpackage Structs
 */
class SupportedVersions extends AbstractStructBase
{
    /**
     * The urVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $urVersion = null;
    /**
     * The airVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $airVersion = null;
    /**
     * The hotelVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $hotelVersion = null;
    /**
     * The vehicleVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $vehicleVersion = null;
    /**
     * The passiveVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $passiveVersion = null;
    /**
     * The railVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $railVersion = null;
    /**
     * The cruiseVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $cruiseVersion = null;
    /**
     * Constructor method for SupportedVersions
     * @uses SupportedVersions::setUrVersion()
     * @uses SupportedVersions::setAirVersion()
     * @uses SupportedVersions::setHotelVersion()
     * @uses SupportedVersions::setVehicleVersion()
     * @uses SupportedVersions::setPassiveVersion()
     * @uses SupportedVersions::setRailVersion()
     * @uses SupportedVersions::setCruiseVersion()
     * @param string $urVersion
     * @param string $airVersion
     * @param string $hotelVersion
     * @param string $vehicleVersion
     * @param string $passiveVersion
     * @param string $railVersion
     * @param string $cruiseVersion
     */
    public function __construct(?string $urVersion = null, ?string $airVersion = null, ?string $hotelVersion = null, ?string $vehicleVersion = null, ?string $passiveVersion = null, ?string $railVersion = null, ?string $cruiseVersion = null)
    {
        $this
            ->setUrVersion($urVersion)
            ->setAirVersion($airVersion)
            ->setHotelVersion($hotelVersion)
            ->setVehicleVersion($vehicleVersion)
            ->setPassiveVersion($passiveVersion)
            ->setRailVersion($railVersion)
            ->setCruiseVersion($cruiseVersion);
    }
    /**
     * Get urVersion value
     * @return string|null
     */
    public function getUrVersion(): ?string
    {
        return $this->urVersion;
    }
    /**
     * Set urVersion value
     * @param string $urVersion
     * @return \Travelport\UniversalRecord\StructType\SupportedVersions
     */
    public function setUrVersion(?string $urVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($urVersion) && !is_string($urVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urVersion, true), gettype($urVersion)), __LINE__);
        }
        $this->urVersion = $urVersion;
        
        return $this;
    }
    /**
     * Get airVersion value
     * @return string|null
     */
    public function getAirVersion(): ?string
    {
        return $this->airVersion;
    }
    /**
     * Set airVersion value
     * @param string $airVersion
     * @return \Travelport\UniversalRecord\StructType\SupportedVersions
     */
    public function setAirVersion(?string $airVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($airVersion) && !is_string($airVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airVersion, true), gettype($airVersion)), __LINE__);
        }
        $this->airVersion = $airVersion;
        
        return $this;
    }
    /**
     * Get hotelVersion value
     * @return string|null
     */
    public function getHotelVersion(): ?string
    {
        return $this->hotelVersion;
    }
    /**
     * Set hotelVersion value
     * @param string $hotelVersion
     * @return \Travelport\UniversalRecord\StructType\SupportedVersions
     */
    public function setHotelVersion(?string $hotelVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelVersion) && !is_string($hotelVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelVersion, true), gettype($hotelVersion)), __LINE__);
        }
        $this->hotelVersion = $hotelVersion;
        
        return $this;
    }
    /**
     * Get vehicleVersion value
     * @return string|null
     */
    public function getVehicleVersion(): ?string
    {
        return $this->vehicleVersion;
    }
    /**
     * Set vehicleVersion value
     * @param string $vehicleVersion
     * @return \Travelport\UniversalRecord\StructType\SupportedVersions
     */
    public function setVehicleVersion(?string $vehicleVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleVersion) && !is_string($vehicleVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleVersion, true), gettype($vehicleVersion)), __LINE__);
        }
        $this->vehicleVersion = $vehicleVersion;
        
        return $this;
    }
    /**
     * Get passiveVersion value
     * @return string|null
     */
    public function getPassiveVersion(): ?string
    {
        return $this->passiveVersion;
    }
    /**
     * Set passiveVersion value
     * @param string $passiveVersion
     * @return \Travelport\UniversalRecord\StructType\SupportedVersions
     */
    public function setPassiveVersion(?string $passiveVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($passiveVersion) && !is_string($passiveVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passiveVersion, true), gettype($passiveVersion)), __LINE__);
        }
        $this->passiveVersion = $passiveVersion;
        
        return $this;
    }
    /**
     * Get railVersion value
     * @return string|null
     */
    public function getRailVersion(): ?string
    {
        return $this->railVersion;
    }
    /**
     * Set railVersion value
     * @param string $railVersion
     * @return \Travelport\UniversalRecord\StructType\SupportedVersions
     */
    public function setRailVersion(?string $railVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($railVersion) && !is_string($railVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railVersion, true), gettype($railVersion)), __LINE__);
        }
        $this->railVersion = $railVersion;
        
        return $this;
    }
    /**
     * Get cruiseVersion value
     * @return string|null
     */
    public function getCruiseVersion(): ?string
    {
        return $this->cruiseVersion;
    }
    /**
     * Set cruiseVersion value
     * @param string $cruiseVersion
     * @return \Travelport\UniversalRecord\StructType\SupportedVersions
     */
    public function setCruiseVersion(?string $cruiseVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($cruiseVersion) && !is_string($cruiseVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cruiseVersion, true), gettype($cruiseVersion)), __LINE__);
        }
        $this->cruiseVersion = $cruiseVersion;
        
        return $this;
    }
}
