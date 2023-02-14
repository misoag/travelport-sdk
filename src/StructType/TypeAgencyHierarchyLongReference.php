<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected int $ProfileVersion;
    /**
     * The ProfileName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 102
     * - use: required
     * @var string
     */
    protected string $ProfileName;
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
     * @return \StructType\TypeAgencyHierarchyLongReference
     */
    public function setProfileVersion(int $profileVersion): self
    {
        // validation for constraint: int
        if (!is_null($profileVersion) && !(is_int($profileVersion) || ctype_digit($profileVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($profileVersion, true), gettype($profileVersion)), __LINE__);
        }
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
     * @return \StructType\TypeAgencyHierarchyLongReference
     */
    public function setProfileName(string $profileName): self
    {
        // validation for constraint: string
        if (!is_null($profileName) && !is_string($profileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileName, true), gettype($profileName)), __LINE__);
        }
        // validation for constraint: maxLength(102)
        if (!is_null($profileName) && mb_strlen((string) $profileName) > 102) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 102', mb_strlen((string) $profileName)), __LINE__);
        }
        $this->ProfileName = $profileName;
        
        return $this;
    }
}
