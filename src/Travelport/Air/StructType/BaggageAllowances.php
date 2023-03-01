<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\BaggageAllowanceInfo[]
     */
    public array $BaggageAllowanceInfo;
    /**
     * The CarryOnAllowanceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: CarryOnAllowanceInfo
     * @var \Travelport\Air\StructType\CarryOnAllowanceInfo[]
     */
    public ?array $CarryOnAllowanceInfo = null;
    /**
     * The EmbargoInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: EmbargoInfo
     * @var \Travelport\Air\StructType\BaseBaggageAllowanceInfo[]
     */
    public ?array $EmbargoInfo = null;
    /**
     * Constructor method for BaggageAllowances
     * @uses BaggageAllowances::setBaggageAllowanceInfo()
     * @uses BaggageAllowances::setCarryOnAllowanceInfo()
     * @uses BaggageAllowances::setEmbargoInfo()
     * @param \Travelport\Air\StructType\BaggageAllowanceInfo[] $baggageAllowanceInfo
     * @param \Travelport\Air\StructType\CarryOnAllowanceInfo[] $carryOnAllowanceInfo
     * @param \Travelport\Air\StructType\BaseBaggageAllowanceInfo[] $embargoInfo
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
     * @return \Travelport\Air\StructType\BaggageAllowanceInfo[]
     */
    public function getBaggageAllowanceInfo(): array
    {
        return $this->BaggageAllowanceInfo;
    }
    /**
     * Set BaggageAllowanceInfo value
     * @param \Travelport\Air\StructType\BaggageAllowanceInfo[] $baggageAllowanceInfo
     * @return \Travelport\Air\StructType\BaggageAllowances
     */
    public function setBaggageAllowanceInfo(array $baggageAllowanceInfo): self
    {
        $this->BaggageAllowanceInfo = $baggageAllowanceInfo;
        
        return $this;
    }
    /**
     * Add item to BaggageAllowanceInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BaggageAllowanceInfo $item
     * @return \Travelport\Air\StructType\BaggageAllowances
     */
    public function addToBaggageAllowanceInfo(\Travelport\Air\StructType\BaggageAllowanceInfo $item): self
    {
        $this->BaggageAllowanceInfo[] = $item;
        
        return $this;
    }
    /**
     * Get CarryOnAllowanceInfo value
     * @return \Travelport\Air\StructType\CarryOnAllowanceInfo[]
     */
    public function getCarryOnAllowanceInfo(): ?array
    {
        return $this->CarryOnAllowanceInfo;
    }
    /**
     * Set CarryOnAllowanceInfo value
     * @param \Travelport\Air\StructType\CarryOnAllowanceInfo[] $carryOnAllowanceInfo
     * @return \Travelport\Air\StructType\BaggageAllowances
     */
    public function setCarryOnAllowanceInfo(?array $carryOnAllowanceInfo = null): self
    {
        $this->CarryOnAllowanceInfo = $carryOnAllowanceInfo;
        
        return $this;
    }
    /**
     * Add item to CarryOnAllowanceInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\CarryOnAllowanceInfo $item
     * @return \Travelport\Air\StructType\BaggageAllowances
     */
    public function addToCarryOnAllowanceInfo(\Travelport\Air\StructType\CarryOnAllowanceInfo $item): self
    {
        $this->CarryOnAllowanceInfo[] = $item;
        
        return $this;
    }
    /**
     * Get EmbargoInfo value
     * @return \Travelport\Air\StructType\BaseBaggageAllowanceInfo[]
     */
    public function getEmbargoInfo(): ?array
    {
        return $this->EmbargoInfo;
    }
    /**
     * Set EmbargoInfo value
     * @param \Travelport\Air\StructType\BaseBaggageAllowanceInfo[] $embargoInfo
     * @return \Travelport\Air\StructType\BaggageAllowances
     */
    public function setEmbargoInfo(?array $embargoInfo = null): self
    {
        $this->EmbargoInfo = $embargoInfo;
        
        return $this;
    }
    /**
     * Add item to EmbargoInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BaseBaggageAllowanceInfo $item
     * @return \Travelport\Air\StructType\BaggageAllowances
     */
    public function addToEmbargoInfo(\Travelport\Air\StructType\BaseBaggageAllowanceInfo $item): self
    {
        $this->EmbargoInfo[] = $item;
        
        return $this;
    }
}
