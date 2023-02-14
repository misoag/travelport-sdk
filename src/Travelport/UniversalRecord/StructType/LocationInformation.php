<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: The type of location and the location address.
 * @subpackage Structs
 */
class LocationInformation extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - documentation: The address of the rental location.
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeStructuredAddress|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $Address = null;
    /**
     * The LocationType
     * Meta information extracted from the WSDL
     * - documentation: Specifies the type of location, such as city center, airport, or near resort.
     * @var string|null
     */
    protected ?string $LocationType = null;
    /**
     * The AreaGroup
     * Meta information extracted from the WSDL
     * - documentation: Unique area group code. like A, B etc.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AreaGroup = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Location corresponding to the group. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - type: common:typeIATACode
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The AreaType
     * Meta information extracted from the WSDL
     * - documentation: Location type corresponding to the group.
     * - type: typeAreaInfo
     * - use: optional
     * @var string|null
     */
    protected ?string $AreaType = null;
    /**
     * Constructor method for LocationInformation
     * @uses LocationInformation::setAddress()
     * @uses LocationInformation::setLocationType()
     * @uses LocationInformation::setAreaGroup()
     * @uses LocationInformation::setLocation()
     * @uses LocationInformation::setAreaType()
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress $address
     * @param string $locationType
     * @param string $areaGroup
     * @param string $location
     * @param string $areaType
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $address = null, ?string $locationType = null, ?string $areaGroup = null, ?string $location = null, ?string $areaType = null)
    {
        $this
            ->setAddress($address)
            ->setLocationType($locationType)
            ->setAreaGroup($areaGroup)
            ->setLocation($location)
            ->setAreaType($areaType);
    }
    /**
     * Get Address value
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress $address
     * @return \Travelport\UniversalRecord\StructType\LocationInformation
     */
    public function setAddress(?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\LocationInformation
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
     * Get AreaGroup value
     * @return string|null
     */
    public function getAreaGroup(): ?string
    {
        return $this->AreaGroup;
    }
    /**
     * Set AreaGroup value
     * @param string $areaGroup
     * @return \Travelport\UniversalRecord\StructType\LocationInformation
     */
    public function setAreaGroup(?string $areaGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($areaGroup) && !is_string($areaGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaGroup, true), gettype($areaGroup)), __LINE__);
        }
        $this->AreaGroup = $areaGroup;
        
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
     * @return \Travelport\UniversalRecord\StructType\LocationInformation
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($location) && mb_strlen((string) $location) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get AreaType value
     * @return string|null
     */
    public function getAreaType(): ?string
    {
        return $this->AreaType;
    }
    /**
     * Set AreaType value
     * @uses \Travelport\UniversalRecord\EnumType\TypeAreaInfo::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeAreaInfo::getValidValues()
     * @throws InvalidArgumentException
     * @param string $areaType
     * @return \Travelport\UniversalRecord\StructType\LocationInformation
     */
    public function setAreaType(?string $areaType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeAreaInfo::valueIsValid($areaType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeAreaInfo', is_array($areaType) ? implode(', ', $areaType) : var_export($areaType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeAreaInfo::getValidValues())), __LINE__);
        }
        $this->AreaType = $areaType;
        
        return $this;
    }
}
