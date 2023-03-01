<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeBundleTotal StructType
 * Meta information extracted from the WSDL
 * - documentation: Only used within an AirExchangeQuoteRsp | Total exchange and penalty information for one ticket number
 * @subpackage Structs
 */
class AirExchangeBundleTotal extends AbstractStructBase
{
    /**
     * The AirExchangeInfo
     * Meta information extracted from the WSDL
     * - ref: common:AirExchangeInfo
     * @var \Travelport\Air\StructType\AirExchangeInfo|null
     */
    public ?\Travelport\Air\StructType\AirExchangeInfo $AirExchangeInfo = null;
    /**
     * The Penalty
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Penalty
     * @var \Travelport\Air\StructType\Penalty[]
     */
    public ?array $Penalty = null;
    /**
     * Constructor method for AirExchangeBundleTotal
     * @uses AirExchangeBundleTotal::setAirExchangeInfo()
     * @uses AirExchangeBundleTotal::setPenalty()
     * @param \Travelport\Air\StructType\AirExchangeInfo $airExchangeInfo
     * @param \Travelport\Air\StructType\Penalty[] $penalty
     */
    public function __construct(?\Travelport\Air\StructType\AirExchangeInfo $airExchangeInfo = null, ?array $penalty = null)
    {
        $this
            ->setAirExchangeInfo($airExchangeInfo)
            ->setPenalty($penalty);
    }
    /**
     * Get AirExchangeInfo value
     * @return \Travelport\Air\StructType\AirExchangeInfo|null
     */
    public function getAirExchangeInfo(): ?\Travelport\Air\StructType\AirExchangeInfo
    {
        return $this->AirExchangeInfo;
    }
    /**
     * Set AirExchangeInfo value
     * @param \Travelport\Air\StructType\AirExchangeInfo $airExchangeInfo
     * @return \Travelport\Air\StructType\AirExchangeBundleTotal
     */
    public function setAirExchangeInfo(?\Travelport\Air\StructType\AirExchangeInfo $airExchangeInfo = null): self
    {
        $this->AirExchangeInfo = $airExchangeInfo;
        
        return $this;
    }
    /**
     * Get Penalty value
     * @return \Travelport\Air\StructType\Penalty[]
     */
    public function getPenalty(): ?array
    {
        return $this->Penalty;
    }
    /**
     * Set Penalty value
     * @param \Travelport\Air\StructType\Penalty[] $penalty
     * @return \Travelport\Air\StructType\AirExchangeBundleTotal
     */
    public function setPenalty(?array $penalty = null): self
    {
        $this->Penalty = $penalty;
        
        return $this;
    }
    /**
     * Add item to Penalty value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Penalty $item
     * @return \Travelport\Air\StructType\AirExchangeBundleTotal
     */
    public function addToPenalty(\Travelport\Air\StructType\Penalty $item): self
    {
        $this->Penalty[] = $item;
        
        return $this;
    }
}
