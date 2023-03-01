<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingInfoList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of AirSegments
 * @subpackage Structs
 */
class AirPricingInfoList extends AbstractStructBase
{
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfo[]
     */
    public ?array $AirPricingInfo = null;
    /**
     * Constructor method for AirPricingInfoList
     * @uses AirPricingInfoList::setAirPricingInfo()
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     */
    public function __construct(?array $airPricingInfo = null)
    {
        $this
            ->setAirPricingInfo($airPricingInfo);
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo[]
     */
    public function getAirPricingInfo(): ?array
    {
        return $this->AirPricingInfo;
    }
    /**
     * Set AirPricingInfo value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoList
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoList
     */
    public function addToAirPricingInfo(\Travelport\UniversalRecord\StructType\AirPricingInfo $item): self
    {
        $this->AirPricingInfo[] = $item;
        
        return $this;
    }
}
