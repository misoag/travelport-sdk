<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredSupplier StructType
 * @subpackage Structs
 */
class PreferredSupplier extends AbstractStructBase
{
    /**
     * The Preferred
     * Meta information extracted from the WSDL
     * - documentation: Preferred Supplier - 'true', 'false'.
     * - use: required
     * @var bool
     */
    public bool $Preferred;
    /**
     * The ProfileType
     * Meta information extracted from the WSDL
     * - documentation: Indicate profile type. e.g. if Agency Preferred then pass Agency, if Traveler Preferred then pass Traveler.
     * - use: required
     * @var string
     */
    public string $ProfileType;
    /**
     * Constructor method for PreferredSupplier
     * @uses PreferredSupplier::setPreferred()
     * @uses PreferredSupplier::setProfileType()
     * @param bool $preferred
     * @param string $profileType
     */
    public function __construct(bool $preferred, string $profileType)
    {
        $this
            ->setPreferred($preferred)
            ->setProfileType($profileType);
    }
    /**
     * Get Preferred value
     * @return bool
     */
    public function getPreferred(): bool
    {
        return $this->Preferred;
    }
    /**
     * Set Preferred value
     * @param bool $preferred
     * @return \Travelport\UniversalRecord\StructType\PreferredSupplier
     */
    public function setPreferred(bool $preferred): self
    {
        $this->Preferred = $preferred;
        
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
     * @return \Travelport\UniversalRecord\StructType\PreferredSupplier
     */
    public function setProfileType(string $profileType): self
    {
        $this->ProfileType = $profileType;
        
        return $this;
    }
}
