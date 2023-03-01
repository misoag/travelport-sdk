<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableSSR StructType
 * Meta information extracted from the WSDL
 * - documentation: A wrapper for all the information regarding each of the available SSR
 * @subpackage Structs
 */
class AvailableSSR extends AbstractStructBase
{
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SSR
     * @var \Travelport\UniversalRecord\StructType\SSR[]
     */
    public ?array $SSR = null;
    /**
     * The SSRRules
     * Meta information extracted from the WSDL
     * - documentation: Holds the rules for selecting the SSR in the itinerary
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ServiceRuleType[]
     */
    public ?array $SSRRules = null;
    /**
     * The IndustryStandardSSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:IndustryStandardSSR
     * @var \Travelport\UniversalRecord\StructType\IndustryStandardSSR[]
     */
    public ?array $IndustryStandardSSR = null;
    /**
     * Constructor method for AvailableSSR
     * @uses AvailableSSR::setSSR()
     * @uses AvailableSSR::setSSRRules()
     * @uses AvailableSSR::setIndustryStandardSSR()
     * @param \Travelport\UniversalRecord\StructType\SSR[] $sSR
     * @param \Travelport\UniversalRecord\StructType\ServiceRuleType[] $sSRRules
     * @param \Travelport\UniversalRecord\StructType\IndustryStandardSSR[] $industryStandardSSR
     */
    public function __construct(?array $sSR = null, ?array $sSRRules = null, ?array $industryStandardSSR = null)
    {
        $this
            ->setSSR($sSR)
            ->setSSRRules($sSRRules)
            ->setIndustryStandardSSR($industryStandardSSR);
    }
    /**
     * Get SSR value
     * @return \Travelport\UniversalRecord\StructType\SSR[]
     */
    public function getSSR(): ?array
    {
        return $this->SSR;
    }
    /**
     * Set SSR value
     * @param \Travelport\UniversalRecord\StructType\SSR[] $sSR
     * @return \Travelport\UniversalRecord\StructType\AvailableSSR
     */
    public function setSSR(?array $sSR = null): self
    {
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SSR $item
     * @return \Travelport\UniversalRecord\StructType\AvailableSSR
     */
    public function addToSSR(\Travelport\UniversalRecord\StructType\SSR $item): self
    {
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get SSRRules value
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType[]
     */
    public function getSSRRules(): ?array
    {
        return $this->SSRRules;
    }
    /**
     * Set SSRRules value
     * @param \Travelport\UniversalRecord\StructType\ServiceRuleType[] $sSRRules
     * @return \Travelport\UniversalRecord\StructType\AvailableSSR
     */
    public function setSSRRules(?array $sSRRules = null): self
    {
        $this->SSRRules = $sSRRules;
        
        return $this;
    }
    /**
     * Add item to SSRRules value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceRuleType $item
     * @return \Travelport\UniversalRecord\StructType\AvailableSSR
     */
    public function addToSSRRules(\Travelport\UniversalRecord\StructType\ServiceRuleType $item): self
    {
        $this->SSRRules[] = $item;
        
        return $this;
    }
    /**
     * Get IndustryStandardSSR value
     * @return \Travelport\UniversalRecord\StructType\IndustryStandardSSR[]
     */
    public function getIndustryStandardSSR(): ?array
    {
        return $this->IndustryStandardSSR;
    }
    /**
     * Set IndustryStandardSSR value
     * @param \Travelport\UniversalRecord\StructType\IndustryStandardSSR[] $industryStandardSSR
     * @return \Travelport\UniversalRecord\StructType\AvailableSSR
     */
    public function setIndustryStandardSSR(?array $industryStandardSSR = null): self
    {
        $this->IndustryStandardSSR = $industryStandardSSR;
        
        return $this;
    }
    /**
     * Add item to IndustryStandardSSR value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\IndustryStandardSSR $item
     * @return \Travelport\UniversalRecord\StructType\AvailableSSR
     */
    public function addToIndustryStandardSSR(\Travelport\UniversalRecord\StructType\IndustryStandardSSR $item): self
    {
        $this->IndustryStandardSSR[] = $item;
        
        return $this;
    }
}
