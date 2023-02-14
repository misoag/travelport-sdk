<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeAgencyHierarchyReference StructType
 * @subpackage Structs
 */
class TypeAgencyHierarchyReference extends AbstractStructBase
{
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - documentation: A type for unique party identifiers of any party role.
     * - base: xs:integer
     * - use: required
     * @var int
     */
    protected int $ProfileID;
    /**
     * The ProfileType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ProfileType;
    /**
     * Constructor method for typeAgencyHierarchyReference
     * @uses TypeAgencyHierarchyReference::setProfileID()
     * @uses TypeAgencyHierarchyReference::setProfileType()
     * @param int $profileID
     * @param string $profileType
     */
    public function __construct(int $profileID, string $profileType)
    {
        $this
            ->setProfileID($profileID)
            ->setProfileType($profileType);
    }
    /**
     * Get ProfileID value
     * @return int
     */
    public function getProfileID(): int
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param int $profileID
     * @return \Travelport\Hotel\StructType\TypeAgencyHierarchyReference
     */
    public function setProfileID(int $profileID): self
    {
        // validation for constraint: int
        if (!is_null($profileID) && !(is_int($profileID) || ctype_digit($profileID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($profileID, true), gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
        
        return $this;
    }
    /**
     * Get ProfileType value
     * @return string
     */
    public function getProfileType(): string
    {
        return $this->ProfileType;
    }
    /**
     * Set ProfileType value
     * @uses \Travelport\Hotel\EnumType\TypeAgencyProfileLevel::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeAgencyProfileLevel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $profileType
     * @return \Travelport\Hotel\StructType\TypeAgencyHierarchyReference
     */
    public function setProfileType(string $profileType): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeAgencyProfileLevel::valueIsValid($profileType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeAgencyProfileLevel', is_array($profileType) ? implode(', ', $profileType) : var_export($profileType, true), implode(', ', \Travelport\Hotel\EnumType\TypeAgencyProfileLevel::getValidValues())), __LINE__);
        }
        $this->ProfileType = $profileType;
        
        return $this;
    }
}
