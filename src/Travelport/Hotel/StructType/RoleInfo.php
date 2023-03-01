<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoleInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to specify the role of the agent
 * @subpackage Structs
 */
class RoleInfo extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 19
     * - use: required
     * @var string
     */
    public string $Id;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: required
     * @var string
     */
    public string $Name;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - documentation: Role inheritance level. Needed in the response, not in the request
     * - use: optional
     * @var string|null
     */
    public ?string $Source = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1024
     * - use: optional
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * Constructor method for RoleInfo
     * @uses RoleInfo::setId()
     * @uses RoleInfo::setName()
     * @uses RoleInfo::setSource()
     * @uses RoleInfo::setDescription()
     * @param string $id
     * @param string $name
     * @param string $source
     * @param string $description
     */
    public function __construct(string $id, string $name, ?string $source = null, ?string $description = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setSource($source)
            ->setDescription($description);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Travelport\Hotel\StructType\RoleInfo
     */
    public function setId(string $id): self
    {
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Hotel\StructType\RoleInfo
     */
    public function setName(string $name): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Travelport\Hotel\StructType\RoleInfo
     */
    public function setSource(?string $source = null): self
    {
        $this->Source = $source;
        
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
     * @return \Travelport\Hotel\StructType\RoleInfo
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
}
