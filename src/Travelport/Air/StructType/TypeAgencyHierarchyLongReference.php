<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeAgencyHierarchyLongReference StructType
 * @subpackage Structs
 */
class TypeAgencyHierarchyLongReference extends TypeAgencyHierarchyReference
{
    /**
     * The ProfileVersion
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public int $ProfileVersion;
    /**
     * The ProfileName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 102
     * - use: required
     * @var string
     */
    public string $ProfileName;
    /**
     * Constructor method for typeAgencyHierarchyLongReference
     * @uses TypeAgencyHierarchyLongReference::setProfileVersion()
     * @uses TypeAgencyHierarchyLongReference::setProfileName()
     * @param int $profileVersion
     * @param string $profileName
     */
    public function __construct(int $profileVersion, string $profileName)
    {
        $this
            ->setProfileVersion($profileVersion)
            ->setProfileName($profileName);
    }
    /**
     * Get ProfileVersion value
     * @return int
     */
    public function getProfileVersion(): int
    {
        return $this->ProfileVersion;
    }
    /**
     * Set ProfileVersion value
     * @param int $profileVersion
     * @return \Travelport\Air\StructType\TypeAgencyHierarchyLongReference
     */
    public function setProfileVersion(int $profileVersion): self
    {
        $this->ProfileVersion = $profileVersion;
        
        return $this;
    }
    /**
     * Get ProfileName value
     * @return string
     */
    public function getProfileName(): string
    {
        return $this->ProfileName;
    }
    /**
     * Set ProfileName value
     * @param string $profileName
     * @return \Travelport\Air\StructType\TypeAgencyHierarchyLongReference
     */
    public function setProfileName(string $profileName): self
    {
        $this->ProfileName = $profileName;
        
        return $this;
    }
}
