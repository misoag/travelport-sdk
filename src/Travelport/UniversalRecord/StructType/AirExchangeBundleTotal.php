<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\AirExchangeInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirExchangeInfo $AirExchangeInfo = null;
    /**
     * The Penalty
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Penalty
     * @var \Travelport\UniversalRecord\StructType\Penalty[]
     */
    public ?array $Penalty = null;
    /**
     * Constructor method for AirExchangeBundleTotal
     * @uses AirExchangeBundleTotal::setAirExchangeInfo()
     * @uses AirExchangeBundleTotal::setPenalty()
     * @param \Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo
     * @param \Travelport\UniversalRecord\StructType\Penalty[] $penalty
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo = null, ?array $penalty = null)
    {
        $this
            ->setAirExchangeInfo($airExchangeInfo)
            ->setPenalty($penalty);
    }
    /**
     * Get AirExchangeInfo value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo|null
     */
    public function getAirExchangeInfo(): ?\Travelport\UniversalRecord\StructType\AirExchangeInfo
    {
        return $this->AirExchangeInfo;
    }
    /**
     * Set AirExchangeInfo value
     * @param \Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal
     */
    public function setAirExchangeInfo(?\Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo = null): self
    {
        $this->AirExchangeInfo = $airExchangeInfo;
        
        return $this;
    }
    /**
     * Get Penalty value
     * @return \Travelport\UniversalRecord\StructType\Penalty[]
     */
    public function getPenalty(): ?array
    {
        return $this->Penalty;
    }
    /**
     * Set Penalty value
     * @param \Travelport\UniversalRecord\StructType\Penalty[] $penalty
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal
     */
    public function setPenalty(?array $penalty = null): self
    {
        $this->Penalty = $penalty;
        
        return $this;
    }
    /**
     * Add item to Penalty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Penalty $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal
     */
    public function addToPenalty(\Travelport\UniversalRecord\StructType\Penalty $item): self
    {
        $this->Penalty[] = $item;
        
        return $this;
    }
}
