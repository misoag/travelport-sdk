<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $LocationType = null;
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
    protected ?string $LocationCode = null;
    /**
     * The Type
     * @var string|null
     */
    protected ?string $Type = null;
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $locationType
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleVendorLocation
     */
    public function setLocationType(?string $locationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleLocation::valueIsValid($locationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleLocation', is_array($locationType) ? implode(', ', $locationType) : var_export($locationType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::getValidValues())), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationCode, true), gettype($locationCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($locationCode) && mb_strlen((string) $locationCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $locationCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
