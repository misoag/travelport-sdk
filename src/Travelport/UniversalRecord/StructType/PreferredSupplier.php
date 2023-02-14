<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected bool $Preferred;
    /**
     * The ProfileType
     * Meta information extracted from the WSDL
     * - documentation: Indicate profile type. e.g. if Agency Preferred then pass Agency, if Traveler Preferred then pass Traveler.
     * - use: required
     * @var string
     */
    protected string $ProfileType;
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
        // validation for constraint: boolean
        if (!is_null($preferred) && !is_bool($preferred)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preferred, true), gettype($preferred)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeProfileType::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeProfileType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $profileType
     * @return \Travelport\UniversalRecord\StructType\PreferredSupplier
     */
    public function setProfileType(string $profileType): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeProfileType::valueIsValid($profileType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeProfileType', is_array($profileType) ? implode(', ', $profileType) : var_export($profileType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeProfileType::getValidValues())), __LINE__);
        }
        $this->ProfileType = $profileType;
        
        return $this;
    }
}
