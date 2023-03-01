<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public int $ProfileID;
    /**
     * The ProfileType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $ProfileType;
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
     * @param string $profileType
     * @return \Travelport\Hotel\StructType\TypeAgencyHierarchyReference
     */
    public function setProfileType(string $profileType): self
    {
        $this->ProfileType = $profileType;
        
        return $this;
    }
}
