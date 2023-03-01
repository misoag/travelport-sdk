<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\SSR[]
     */
    public ?array $SSR = null;
    /**
     * The SSRRules
     * Meta information extracted from the WSDL
     * - documentation: Holds the rules for selecting the SSR in the itinerary
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ServiceRuleType[]
     */
    public ?array $SSRRules = null;
    /**
     * The IndustryStandardSSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:IndustryStandardSSR
     * @var \Travelport\Air\StructType\IndustryStandardSSR[]
     */
    public ?array $IndustryStandardSSR = null;
    /**
     * Constructor method for AvailableSSR
     * @uses AvailableSSR::setSSR()
     * @uses AvailableSSR::setSSRRules()
     * @uses AvailableSSR::setIndustryStandardSSR()
     * @param \Travelport\Air\StructType\SSR[] $sSR
     * @param \Travelport\Air\StructType\ServiceRuleType[] $sSRRules
     * @param \Travelport\Air\StructType\IndustryStandardSSR[] $industryStandardSSR
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
     * @return \Travelport\Air\StructType\SSR[]
     */
    public function getSSR(): ?array
    {
        return $this->SSR;
    }
    /**
     * Set SSR value
     * @param \Travelport\Air\StructType\SSR[] $sSR
     * @return \Travelport\Air\StructType\AvailableSSR
     */
    public function setSSR(?array $sSR = null): self
    {
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SSR $item
     * @return \Travelport\Air\StructType\AvailableSSR
     */
    public function addToSSR(\Travelport\Air\StructType\SSR $item): self
    {
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get SSRRules value
     * @return \Travelport\Air\StructType\ServiceRuleType[]
     */
    public function getSSRRules(): ?array
    {
        return $this->SSRRules;
    }
    /**
     * Set SSRRules value
     * @param \Travelport\Air\StructType\ServiceRuleType[] $sSRRules
     * @return \Travelport\Air\StructType\AvailableSSR
     */
    public function setSSRRules(?array $sSRRules = null): self
    {
        $this->SSRRules = $sSRRules;
        
        return $this;
    }
    /**
     * Add item to SSRRules value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ServiceRuleType $item
     * @return \Travelport\Air\StructType\AvailableSSR
     */
    public function addToSSRRules(\Travelport\Air\StructType\ServiceRuleType $item): self
    {
        $this->SSRRules[] = $item;
        
        return $this;
    }
    /**
     * Get IndustryStandardSSR value
     * @return \Travelport\Air\StructType\IndustryStandardSSR[]
     */
    public function getIndustryStandardSSR(): ?array
    {
        return $this->IndustryStandardSSR;
    }
    /**
     * Set IndustryStandardSSR value
     * @param \Travelport\Air\StructType\IndustryStandardSSR[] $industryStandardSSR
     * @return \Travelport\Air\StructType\AvailableSSR
     */
    public function setIndustryStandardSSR(?array $industryStandardSSR = null): self
    {
        $this->IndustryStandardSSR = $industryStandardSSR;
        
        return $this;
    }
    /**
     * Add item to IndustryStandardSSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\IndustryStandardSSR $item
     * @return \Travelport\Air\StructType\AvailableSSR
     */
    public function addToIndustryStandardSSR(\Travelport\Air\StructType\IndustryStandardSSR $item): self
    {
        $this->IndustryStandardSSR[] = $item;
        
        return $this;
    }
}
