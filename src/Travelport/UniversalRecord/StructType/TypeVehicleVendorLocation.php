<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeVehicleVendorLocation StructType
 * @subpackage Structs
 */
class TypeVehicleVendorLocation extends TypeVendorLocation
{
    /**
     * The LocationType
     * Meta information extracted from the WSDL
     * - documentation: Rental counter location such as Terminal, CityCenterDowntown,
     * - type: common:typeVehicleLocation
     * - use: optional
     * @var string|null
     */
    public ?string $LocationType = null;
    /**
     * The LocationCode
     * Meta information extracted from the WSDL
     * - documentation: Airport or City Code | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - type: common:typeIATACode
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $LocationCode = null;
    /**
     * The Type
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * Constructor method for typeVehicleVendorLocation
     * @uses TypeVehicleVendorLocation::setLocationType()
     * @uses TypeVehicleVendorLocation::setLocationCode()
     * @uses TypeVehicleVendorLocation::setType()
     * @param string $locationType
     * @param string $locationCode
     * @param string $type
     */
    public function __construct(?string $locationType = null, ?string $locationCode = null, ?string $type = null)
    {
        $this
            ->setLocationType($locationType)
            ->setLocationCode($locationCode)
            ->setType($type);
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType(): ?string
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @param string $locationType
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleVendorLocation
     */
    public function setLocationType(?string $locationType = null): self
    {
        $this->LocationType = $locationType;
        
        return $this;
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode(): ?string
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleVendorLocation
     */
    public function setLocationCode(?string $locationCode = null): self
    {
        $this->LocationCode = $locationCode;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleVendorLocation
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
