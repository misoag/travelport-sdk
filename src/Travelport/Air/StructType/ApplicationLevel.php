<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplicationLevel StructType
 * Meta information extracted from the WSDL
 * - documentation: Lists the levels where the option is applied in the itinerary. Some options are applied for the entire itinerary, some for entire segments, etc.
 * @subpackage Structs
 */
class ApplicationLevel extends AbstractStructBase
{
    /**
     * The ApplicationLimits
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ApplicationLimits|null
     */
    public ?\Travelport\Air\StructType\ApplicationLimits $ApplicationLimits = null;
    /**
     * The ServiceData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ServiceData
     * @var \Travelport\Air\StructType\ServiceData[]
     */
    public ?array $ServiceData = null;
    /**
     * The ApplicableLevels
     * @var string[]
     */
    public ?array $ApplicableLevels = null;
    /**
     * The ProviderDefinedApplicableLevels
     * Meta information extracted from the WSDL
     * - documentation: Indicates the actual provider defined ApplicableLevels which is mapped to Other
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderDefinedApplicableLevels = null;
    /**
     * Constructor method for ApplicationLevel
     * @uses ApplicationLevel::setApplicationLimits()
     * @uses ApplicationLevel::setServiceData()
     * @uses ApplicationLevel::setApplicableLevels()
     * @uses ApplicationLevel::setProviderDefinedApplicableLevels()
     * @param \Travelport\Air\StructType\ApplicationLimits $applicationLimits
     * @param \Travelport\Air\StructType\ServiceData[] $serviceData
     * @param string[] $applicableLevels
     * @param string $providerDefinedApplicableLevels
     */
    public function __construct(?\Travelport\Air\StructType\ApplicationLimits $applicationLimits = null, ?array $serviceData = null, ?array $applicableLevels = null, ?string $providerDefinedApplicableLevels = null)
    {
        $this
            ->setApplicationLimits($applicationLimits)
            ->setServiceData($serviceData)
            ->setApplicableLevels($applicableLevels)
            ->setProviderDefinedApplicableLevels($providerDefinedApplicableLevels);
    }
    /**
     * Get ApplicationLimits value
     * @return \Travelport\Air\StructType\ApplicationLimits|null
     */
    public function getApplicationLimits(): ?\Travelport\Air\StructType\ApplicationLimits
    {
        return $this->ApplicationLimits;
    }
    /**
     * Set ApplicationLimits value
     * @param \Travelport\Air\StructType\ApplicationLimits $applicationLimits
     * @return \Travelport\Air\StructType\ApplicationLevel
     */
    public function setApplicationLimits(?\Travelport\Air\StructType\ApplicationLimits $applicationLimits = null): self
    {
        $this->ApplicationLimits = $applicationLimits;
        
        return $this;
    }
    /**
     * Get ServiceData value
     * @return \Travelport\Air\StructType\ServiceData[]
     */
    public function getServiceData(): ?array
    {
        return $this->ServiceData;
    }
    /**
     * Set ServiceData value
     * @param \Travelport\Air\StructType\ServiceData[] $serviceData
     * @return \Travelport\Air\StructType\ApplicationLevel
     */
    public function setServiceData(?array $serviceData = null): self
    {
        $this->ServiceData = $serviceData;
        
        return $this;
    }
    /**
     * Add item to ServiceData value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ServiceData $item
     * @return \Travelport\Air\StructType\ApplicationLevel
     */
    public function addToServiceData(\Travelport\Air\StructType\ServiceData $item): self
    {
        $this->ServiceData[] = $item;
        
        return $this;
    }
    /**
     * Get ApplicableLevels value
     * @return string[]
     */
    public function getApplicableLevels(): ?array
    {
        return $this->ApplicableLevels;
    }
    /**
     * Set ApplicableLevels value
     * @param string[] $applicableLevels
     * @return \Travelport\Air\StructType\ApplicationLevel
     */
    public function setApplicableLevels(?array $applicableLevels = null): self
    {
        $this->ApplicableLevels = $applicableLevels;
        
        return $this;
    }
    /**
     * Add item to ApplicableLevels value
     * @uses \Travelport\Air\EnumType\OptionalServiceApplicabilityType::valueIsValid()
     * @uses \Travelport\Air\EnumType\OptionalServiceApplicabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\ApplicationLevel
     */
    public function addToApplicableLevels(string $item): self
    {
        $this->ApplicableLevels[] = $item;
        
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
     * @return \Travelport\Air\StructType\ApplicationLevel
     */
    public function setProviderDefinedApplicableLevels(?string $providerDefinedApplicableLevels = null): self
    {
        $this->ProviderDefinedApplicableLevels = $providerDefinedApplicableLevels;
        
        return $this;
    }
}
