<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Id;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - documentation: Role inheritance level. Needed in the response, not in the request
     * - use: optional
     * @var string|null
     */
    protected ?string $Source = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1024
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
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
     * @return \Travelport\UniversalRecord\StructType\RoleInfo
     */
    public function setId(string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: maxLength(19)
        if (!is_null($id) && mb_strlen((string) $id) > 19) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 19', mb_strlen((string) $id)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RoleInfo
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($name) && mb_strlen((string) $name) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $name)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RoleInfo
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RoleInfo
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($description) && mb_strlen((string) $description) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
}
