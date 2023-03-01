<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageAllowances StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of Baggage allowance
 * @subpackage Structs
 */
class BaggageAllowances extends AbstractStructBase
{
    /**
     * The BaggageAllowanceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: BaggageAllowanceInfo
     * @var \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo[]
     */
    public array $BaggageAllowanceInfo;
    /**
     * The CarryOnAllowanceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: CarryOnAllowanceInfo
     * @var \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo[]
     */
    public ?array $CarryOnAllowanceInfo = null;
    /**
     * The EmbargoInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: EmbargoInfo
     * @var \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo[]
     */
    public ?array $EmbargoInfo = null;
    /**
     * Constructor method for BaggageAllowances
     * @uses BaggageAllowances::setBaggageAllowanceInfo()
     * @uses BaggageAllowances::setCarryOnAllowanceInfo()
     * @uses BaggageAllowances::setEmbargoInfo()
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo[] $baggageAllowanceInfo
     * @param \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo[] $carryOnAllowanceInfo
     * @param \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo[] $embargoInfo
     */
    public function __construct(array $baggageAllowanceInfo, ?array $carryOnAllowanceInfo = null, ?array $embargoInfo = null)
    {
        $this
            ->setBaggageAllowanceInfo($baggageAllowanceInfo)
            ->setCarryOnAllowanceInfo($carryOnAllowanceInfo)
            ->setEmbargoInfo($embargoInfo);
    }
    /**
     * Get BaggageAllowanceInfo value
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo[]
     */
    public function getBaggageAllowanceInfo(): array
    {
        return $this->BaggageAllowanceInfo;
    }
    /**
     * Set BaggageAllowanceInfo value
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo[] $baggageAllowanceInfo
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function setBaggageAllowanceInfo(array $baggageAllowanceInfo): self
    {
        $this->BaggageAllowanceInfo = $baggageAllowanceInfo;
        
        return $this;
    }
    /**
     * Add item to BaggageAllowanceInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo $item
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function addToBaggageAllowanceInfo(\Travelport\UniversalRecord\StructType\BaggageAllowanceInfo $item): self
    {
        $this->BaggageAllowanceInfo[] = $item;
        
        return $this;
    }
    /**
     * Get CarryOnAllowanceInfo value
     * @return \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo[]
     */
    public function getCarryOnAllowanceInfo(): ?array
    {
        return $this->CarryOnAllowanceInfo;
    }
    /**
     * Set CarryOnAllowanceInfo value
     * @param \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo[] $carryOnAllowanceInfo
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function setCarryOnAllowanceInfo(?array $carryOnAllowanceInfo = null): self
    {
        $this->CarryOnAllowanceInfo = $carryOnAllowanceInfo;
        
        return $this;
    }
    /**
     * Add item to CarryOnAllowanceInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo $item
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function addToCarryOnAllowanceInfo(\Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo $item): self
    {
        $this->CarryOnAllowanceInfo[] = $item;
        
        return $this;
    }
    /**
     * Get EmbargoInfo value
     * @return \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo[]
     */
    public function getEmbargoInfo(): ?array
    {
        return $this->EmbargoInfo;
    }
    /**
     * Set EmbargoInfo value
     * @param \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo[] $embargoInfo
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function setEmbargoInfo(?array $embargoInfo = null): self
    {
        $this->EmbargoInfo = $embargoInfo;
        
        return $this;
    }
    /**
     * Add item to EmbargoInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo $item
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function addToEmbargoInfo(\Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo $item): self
    {
        $this->EmbargoInfo[] = $item;
        
        return $this;
    }
}
