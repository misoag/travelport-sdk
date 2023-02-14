<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $ProfileEntityID;
    /**
     * The ProfileLevel
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ProfileLevel;
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
        // validation for constraint: string
        if (!is_null($profileEntityID) && !is_string($profileEntityID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileEntityID, true), gettype($profileEntityID)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeProfileLevel::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeProfileLevel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $profileLevel
     * @return \Travelport\UniversalRecord\StructType\TypeProfileRef
     */
    public function setProfileLevel(string $profileLevel): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeProfileLevel::valueIsValid($profileLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeProfileLevel', is_array($profileLevel) ? implode(', ', $profileLevel) : var_export($profileLevel, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeProfileLevel::getValidValues())), __LINE__);
        }
        $this->ProfileLevel = $profileLevel;
        
        return $this;
    }
}
