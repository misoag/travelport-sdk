<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Type;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The SubType
     * Meta information extracted from the WSDL
     * - documentation: Extra information about this category of disclaimer
     * - use: optional
     * @var string|null
     */
    public ?string $SubType = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: A verbal description of this disclaimer
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
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
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\VehicleDisclaimer
     */
    public function setType(string $type): self
    {
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
        $this->Description = $description;
        
        return $this;
    }
}
