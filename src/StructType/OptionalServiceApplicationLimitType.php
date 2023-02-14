<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionalServiceApplicationLimitType StructType
 * Meta information extracted from the WSDL
 * - documentation: The optional service application limit
 * @subpackage Structs
 */
class OptionalServiceApplicationLimitType extends AbstractStructBase
{
    /**
     * The ApplicableLevel
     * Meta information extracted from the WSDL
     * - documentation: Indicates the applicable level for the option
     * - type: OptionalServiceApplicabilityType
     * - use: required
     * @var string
     */
    protected string $ApplicableLevel;
    /**
     * The MaximumQuantity
     * Meta information extracted from the WSDL
     * - documentation: The maximum quantity allowed for the type
     * - type: xs:positiveInteger
     * - use: required
     * @var int
     */
    protected int $MaximumQuantity;
    /**
     * The ProviderDefinedApplicableLevels
     * Meta information extracted from the WSDL
     * - documentation: Indicates the actual provider defined ApplicableLevels which is mapped to Other
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderDefinedApplicableLevels = null;
    /**
     * The MinimumQuantity
     * Meta information extracted from the WSDL
     * - documentation: Indicates the minimum number of the option that can be selected.
     * - type: xs:positiveInteger
     * - use: optional
     * @var int|null
     */
    protected ?int $MinimumQuantity = null;
    /**
     * Constructor method for OptionalServiceApplicationLimitType
     * @uses OptionalServiceApplicationLimitType::setApplicableLevel()
     * @uses OptionalServiceApplicationLimitType::setMaximumQuantity()
     * @uses OptionalServiceApplicationLimitType::setProviderDefinedApplicableLevels()
     * @uses OptionalServiceApplicationLimitType::setMinimumQuantity()
     * @param string $applicableLevel
     * @param int $maximumQuantity
     * @param string $providerDefinedApplicableLevels
     * @param int $minimumQuantity
     */
    public function __construct(string $applicableLevel, int $maximumQuantity, ?string $providerDefinedApplicableLevels = null, ?int $minimumQuantity = null)
    {
        $this
            ->setApplicableLevel($applicableLevel)
            ->setMaximumQuantity($maximumQuantity)
            ->setProviderDefinedApplicableLevels($providerDefinedApplicableLevels)
            ->setMinimumQuantity($minimumQuantity);
    }
    /**
     * Get ApplicableLevel value
     * @return string
     */
    public function getApplicableLevel(): string
    {
        return $this->ApplicableLevel;
    }
    /**
     * Set ApplicableLevel value
     * @uses \EnumType\OptionalServiceApplicabilityType::valueIsValid()
     * @uses \EnumType\OptionalServiceApplicabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $applicableLevel
     * @return \StructType\OptionalServiceApplicationLimitType
     */
    public function setApplicableLevel(string $applicableLevel): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\OptionalServiceApplicabilityType::valueIsValid($applicableLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OptionalServiceApplicabilityType', is_array($applicableLevel) ? implode(', ', $applicableLevel) : var_export($applicableLevel, true), implode(', ', \EnumType\OptionalServiceApplicabilityType::getValidValues())), __LINE__);
        }
        $this->ApplicableLevel = $applicableLevel;
        
        return $this;
    }
    /**
     * Get MaximumQuantity value
     * @return int
     */
    public function getMaximumQuantity(): int
    {
        return $this->MaximumQuantity;
    }
    /**
     * Set MaximumQuantity value
     * @param int $maximumQuantity
     * @return \StructType\OptionalServiceApplicationLimitType
     */
    public function setMaximumQuantity(int $maximumQuantity): self
    {
        // validation for constraint: int
        if (!is_null($maximumQuantity) && !(is_int($maximumQuantity) || ctype_digit($maximumQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumQuantity, true), gettype($maximumQuantity)), __LINE__);
        }
        $this->MaximumQuantity = $maximumQuantity;
        
        return $this;
    }
    /**
     * Get ProviderDefinedApplicableLevels value
     * @return string|null
     */
    public function getProviderDefinedApplicableLevels(): ?string
    {
        return $this->ProviderDefinedApplicableLevels;
    }
    /**
     * Set ProviderDefinedApplicableLevels value
     * @param string $providerDefinedApplicableLevels
     * @return \StructType\OptionalServiceApplicationLimitType
     */
    public function setProviderDefinedApplicableLevels(?string $providerDefinedApplicableLevels = null): self
    {
        // validation for constraint: string
        if (!is_null($providerDefinedApplicableLevels) && !is_string($providerDefinedApplicableLevels)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerDefinedApplicableLevels, true), gettype($providerDefinedApplicableLevels)), __LINE__);
        }
        $this->ProviderDefinedApplicableLevels = $providerDefinedApplicableLevels;
        
        return $this;
    }
    /**
     * Get MinimumQuantity value
     * @return int|null
     */
    public function getMinimumQuantity(): ?int
    {
        return $this->MinimumQuantity;
    }
    /**
     * Set MinimumQuantity value
     * @param int $minimumQuantity
     * @return \StructType\OptionalServiceApplicationLimitType
     */
    public function setMinimumQuantity(?int $minimumQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($minimumQuantity) && !(is_int($minimumQuantity) || ctype_digit($minimumQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minimumQuantity, true), gettype($minimumQuantity)), __LINE__);
        }
        $this->MinimumQuantity = $minimumQuantity;
        
        return $this;
    }
}
