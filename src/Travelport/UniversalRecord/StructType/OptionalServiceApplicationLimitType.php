<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $ApplicableLevel;
    /**
     * The MaximumQuantity
     * Meta information extracted from the WSDL
     * - documentation: The maximum quantity allowed for the type
     * - type: xs:positiveInteger
     * - use: required
     * @var int
     */
    public int $MaximumQuantity;
    /**
     * The ProviderDefinedApplicableLevels
     * Meta information extracted from the WSDL
     * - documentation: Indicates the actual provider defined ApplicableLevels which is mapped to Other
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderDefinedApplicableLevels = null;
    /**
     * The MinimumQuantity
     * Meta information extracted from the WSDL
     * - documentation: Indicates the minimum number of the option that can be selected.
     * - type: xs:positiveInteger
     * - use: optional
     * @var int|null
     */
    public ?int $MinimumQuantity = null;
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
     * @param string $applicableLevel
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceApplicationLimitType
     */
    public function setApplicableLevel(string $applicableLevel): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceApplicationLimitType
     */
    public function setMaximumQuantity(int $maximumQuantity): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceApplicationLimitType
     */
    public function setProviderDefinedApplicableLevels(?string $providerDefinedApplicableLevels = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceApplicationLimitType
     */
    public function setMinimumQuantity(?int $minimumQuantity = null): self
    {
        $this->MinimumQuantity = $minimumQuantity;
        
        return $this;
    }
}
