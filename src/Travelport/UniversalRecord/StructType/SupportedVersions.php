<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $urVersion = null;
    /**
     * The airVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $airVersion = null;
    /**
     * The hotelVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $hotelVersion = null;
    /**
     * The vehicleVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $vehicleVersion = null;
    /**
     * The passiveVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $passiveVersion = null;
    /**
     * The railVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $railVersion = null;
    /**
     * The cruiseVersion
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $cruiseVersion = null;
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
        $this->cruiseVersion = $cruiseVersion;
        
        return $this;
    }
}
