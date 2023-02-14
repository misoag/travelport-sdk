<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleDisclaimer StructType
 * Meta information extracted from the WSDL
 * - documentation: Textual information related to this rental location
 * @subpackage Structs
 */
class VehicleDisclaimer extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The disclaimer category
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The SubType
     * Meta information extracted from the WSDL
     * - documentation: Extra information about this category of disclaimer
     * - use: optional
     * @var string|null
     */
    protected ?string $SubType = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: A verbal description of this disclaimer
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * Constructor method for VehicleDisclaimer
     * @uses VehicleDisclaimer::setType()
     * @uses VehicleDisclaimer::set_()
     * @uses VehicleDisclaimer::setSubType()
     * @uses VehicleDisclaimer::setDescription()
     * @param string $type
     * @param string $_
     * @param string $subType
     * @param string $description
     */
    public function __construct(string $type, ?string $_ = null, ?string $subType = null, ?string $description = null)
    {
        $this
            ->setType($type)
            ->set_($_)
            ->setSubType($subType)
            ->setDescription($description);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleDisclaimer::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleDisclaimer::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\VehicleDisclaimer
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleDisclaimer::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleDisclaimer', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleDisclaimer::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\VehicleDisclaimer
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get SubType value
     * @return string|null
     */
    public function getSubType(): ?string
    {
        return $this->SubType;
    }
    /**
     * Set SubType value
     * @param string $subType
     * @return \Travelport\UniversalRecord\StructType\VehicleDisclaimer
     */
    public function setSubType(?string $subType = null): self
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subType, true), gettype($subType)), __LINE__);
        }
        $this->SubType = $subType;
        
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
     * @return \Travelport\UniversalRecord\StructType\VehicleDisclaimer
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
}
