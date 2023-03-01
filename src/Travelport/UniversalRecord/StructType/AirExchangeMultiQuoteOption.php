<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeMultiQuoteOption StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of AirExchangeMultiQuoteOptions
 * @subpackage Structs
 */
class AirExchangeMultiQuoteOption extends AbstractStructBase
{
    /**
     * The AirSegmentData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentData
     * @var \Travelport\UniversalRecord\StructType\AirSegmentData[]
     */
    public ?array $AirSegmentData = null;
    /**
     * The AirExchangeBundleTotal
     * Meta information extracted from the WSDL
     * - maxOccurs: 01
     * - minOccurs: 0
     * - ref: AirExchangeBundleTotal
     * @var \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $AirExchangeBundleTotal = null;
    /**
     * The AirExchangeBundleList
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirExchangeBundleList
     * @var \Travelport\UniversalRecord\StructType\AirExchangeBundleList[]
     */
    public ?array $AirExchangeBundleList = null;
    /**
     * Constructor method for AirExchangeMultiQuoteOption
     * @uses AirExchangeMultiQuoteOption::setAirSegmentData()
     * @uses AirExchangeMultiQuoteOption::setAirExchangeBundleTotal()
     * @uses AirExchangeMultiQuoteOption::setAirExchangeBundleList()
     * @param \Travelport\UniversalRecord\StructType\AirSegmentData[] $airSegmentData
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleList[] $airExchangeBundleList
     */
    public function __construct(?array $airSegmentData = null, ?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null, ?array $airExchangeBundleList = null)
    {
        $this
            ->setAirSegmentData($airSegmentData)
            ->setAirExchangeBundleTotal($airExchangeBundleTotal)
            ->setAirExchangeBundleList($airExchangeBundleList);
    }
    /**
     * Get AirSegmentData value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData[]
     */
    public function getAirSegmentData(): ?array
    {
        return $this->AirSegmentData;
    }
    /**
     * Set AirSegmentData value
     * @param \Travelport\UniversalRecord\StructType\AirSegmentData[] $airSegmentData
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption
     */
    public function setAirSegmentData(?array $airSegmentData = null): self
    {
        $this->AirSegmentData = $airSegmentData;
        
        return $this;
    }
    /**
     * Add item to AirSegmentData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentData $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption
     */
    public function addToAirSegmentData(\Travelport\UniversalRecord\StructType\AirSegmentData $item): self
    {
        $this->AirSegmentData[] = $item;
        
        return $this;
    }
    /**
     * Get AirExchangeBundleTotal value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal|null
     */
    public function getAirExchangeBundleTotal(): ?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal
    {
        return $this->AirExchangeBundleTotal;
    }
    /**
     * Set AirExchangeBundleTotal value
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption
     */
    public function setAirExchangeBundleTotal(?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null): self
    {
        $this->AirExchangeBundleTotal = $airExchangeBundleTotal;
        
        return $this;
    }
    /**
     * Get AirExchangeBundleList value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleList[]
     */
    public function getAirExchangeBundleList(): ?array
    {
        return $this->AirExchangeBundleList;
    }
    /**
     * Set AirExchangeBundleList value
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleList[] $airExchangeBundleList
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption
     */
    public function setAirExchangeBundleList(?array $airExchangeBundleList = null): self
    {
        $this->AirExchangeBundleList = $airExchangeBundleList;
        
        return $this;
    }
    /**
     * Add item to AirExchangeBundleList value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleList $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption
     */
    public function addToAirExchangeBundleList(\Travelport\UniversalRecord\StructType\AirExchangeBundleList $item): self
    {
        $this->AirExchangeBundleList[] = $item;
        
        return $this;
    }
}
