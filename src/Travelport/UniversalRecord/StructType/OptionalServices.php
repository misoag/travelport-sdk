<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionalServices StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about an unselected or "other" option when optional services are grouped together. | A wrapper for all the information regarding each of the Optional services
 * @subpackage Structs
 */
class OptionalServices extends AbstractStructBase
{
    /**
     * The OptionalServicesTotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\OptionalServicesTotal|null
     */
    public ?\Travelport\UniversalRecord\StructType\OptionalServicesTotal $OptionalServicesTotal = null;
    /**
     * The OptionalService
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: OptionalService
     * @var \Travelport\UniversalRecord\StructType\OptionalService[]
     */
    public ?array $OptionalService = null;
    /**
     * The GroupedOptionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GroupedOptionInfo
     * @var \Travelport\UniversalRecord\StructType\GroupedOptionInfo[]
     */
    public ?array $GroupedOptionInfo = null;
    /**
     * The OptionalServiceRules
     * Meta information extracted from the WSDL
     * - documentation: Holds the rules for selecting the optional service in the itinerary
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ServiceRuleType[]
     */
    public ?array $OptionalServiceRules = null;
    /**
     * Constructor method for OptionalServices
     * @uses OptionalServices::setOptionalServicesTotal()
     * @uses OptionalServices::setOptionalService()
     * @uses OptionalServices::setGroupedOptionInfo()
     * @uses OptionalServices::setOptionalServiceRules()
     * @param \Travelport\UniversalRecord\StructType\OptionalServicesTotal $optionalServicesTotal
     * @param \Travelport\UniversalRecord\StructType\OptionalService[] $optionalService
     * @param \Travelport\UniversalRecord\StructType\GroupedOptionInfo[] $groupedOptionInfo
     * @param \Travelport\UniversalRecord\StructType\ServiceRuleType[] $optionalServiceRules
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\OptionalServicesTotal $optionalServicesTotal = null, ?array $optionalService = null, ?array $groupedOptionInfo = null, ?array $optionalServiceRules = null)
    {
        $this
            ->setOptionalServicesTotal($optionalServicesTotal)
            ->setOptionalService($optionalService)
            ->setGroupedOptionInfo($groupedOptionInfo)
            ->setOptionalServiceRules($optionalServiceRules);
    }
    /**
     * Get OptionalServicesTotal value
     * @return \Travelport\UniversalRecord\StructType\OptionalServicesTotal|null
     */
    public function getOptionalServicesTotal(): ?\Travelport\UniversalRecord\StructType\OptionalServicesTotal
    {
        return $this->OptionalServicesTotal;
    }
    /**
     * Set OptionalServicesTotal value
     * @param \Travelport\UniversalRecord\StructType\OptionalServicesTotal $optionalServicesTotal
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function setOptionalServicesTotal(?\Travelport\UniversalRecord\StructType\OptionalServicesTotal $optionalServicesTotal = null): self
    {
        $this->OptionalServicesTotal = $optionalServicesTotal;
        
        return $this;
    }
    /**
     * Get OptionalService value
     * @return \Travelport\UniversalRecord\StructType\OptionalService[]
     */
    public function getOptionalService(): ?array
    {
        return $this->OptionalService;
    }
    /**
     * Set OptionalService value
     * @param \Travelport\UniversalRecord\StructType\OptionalService[] $optionalService
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function setOptionalService(?array $optionalService = null): self
    {
        $this->OptionalService = $optionalService;
        
        return $this;
    }
    /**
     * Add item to OptionalService value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OptionalService $item
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function addToOptionalService(\Travelport\UniversalRecord\StructType\OptionalService $item): self
    {
        $this->OptionalService[] = $item;
        
        return $this;
    }
    /**
     * Get GroupedOptionInfo value
     * @return \Travelport\UniversalRecord\StructType\GroupedOptionInfo[]
     */
    public function getGroupedOptionInfo(): ?array
    {
        return $this->GroupedOptionInfo;
    }
    /**
     * Set GroupedOptionInfo value
     * @param \Travelport\UniversalRecord\StructType\GroupedOptionInfo[] $groupedOptionInfo
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function setGroupedOptionInfo(?array $groupedOptionInfo = null): self
    {
        $this->GroupedOptionInfo = $groupedOptionInfo;
        
        return $this;
    }
    /**
     * Add item to GroupedOptionInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GroupedOptionInfo $item
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function addToGroupedOptionInfo(\Travelport\UniversalRecord\StructType\GroupedOptionInfo $item): self
    {
        $this->GroupedOptionInfo[] = $item;
        
        return $this;
    }
    /**
     * Get OptionalServiceRules value
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType[]
     */
    public function getOptionalServiceRules(): ?array
    {
        return $this->OptionalServiceRules;
    }
    /**
     * Set OptionalServiceRules value
     * @param \Travelport\UniversalRecord\StructType\ServiceRuleType[] $optionalServiceRules
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function setOptionalServiceRules(?array $optionalServiceRules = null): self
    {
        $this->OptionalServiceRules = $optionalServiceRules;
        
        return $this;
    }
    /**
     * Add item to OptionalServiceRules value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceRuleType $item
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function addToOptionalServiceRules(\Travelport\UniversalRecord\StructType\ServiceRuleType $item): self
    {
        $this->OptionalServiceRules[] = $item;
        
        return $this;
    }
}
