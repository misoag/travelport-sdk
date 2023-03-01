<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeProfileRef StructType
 * Meta information extracted from the WSDL
 * - documentation: ProfileEntityID and ProfileLevel together identity a profile entity.
 * @subpackage Structs
 */
class TypeProfileRef extends AbstractStructBase
{
    /**
     * The ProfileEntityID
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $ProfileEntityID;
    /**
     * The ProfileLevel
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $ProfileLevel;
    /**
     * Constructor method for typeProfileRef
     * @uses TypeProfileRef::setProfileEntityID()
     * @uses TypeProfileRef::setProfileLevel()
     * @param string $profileEntityID
     * @param string $profileLevel
     */
    public function __construct(string $profileEntityID, string $profileLevel)
    {
        $this
            ->setProfileEntityID($profileEntityID)
            ->setProfileLevel($profileLevel);
    }
    /**
     * Get ProfileEntityID value
     * @return string
     */
    public function getProfileEntityID(): string
    {
        return $this->ProfileEntityID;
    }
    /**
     * Set ProfileEntityID value
     * @param string $profileEntityID
     * @return \Travelport\UniversalRecord\StructType\TypeProfileRef
     */
    public function setProfileEntityID(string $profileEntityID): self
    {
        $this->ProfileEntityID = $profileEntityID;
        
        return $this;
    }
    /**
     * Get ProfileLevel value
     * @return string
     */
    public function getProfileLevel(): string
    {
        return $this->ProfileLevel;
    }
    /**
     * Set ProfileLevel value
     * @param string $profileLevel
     * @return \Travelport\UniversalRecord\StructType\TypeProfileRef
     */
    public function setProfileLevel(string $profileLevel): self
    {
        $this->ProfileLevel = $profileLevel;
        
        return $this;
    }
}
