<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\AirSegmentData[]
     */
    public ?array $AirSegmentData = null;
    /**
     * The AirExchangeBundleTotal
     * Meta information extracted from the WSDL
     * - maxOccurs: 01
     * - minOccurs: 0
     * - ref: AirExchangeBundleTotal
     * @var \Travelport\Air\StructType\AirExchangeBundleTotal|null
     */
    public ?\Travelport\Air\StructType\AirExchangeBundleTotal $AirExchangeBundleTotal = null;
    /**
     * The AirExchangeBundleList
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirExchangeBundleList
     * @var \Travelport\Air\StructType\AirExchangeBundleList[]
     */
    public ?array $AirExchangeBundleList = null;
    /**
     * Constructor method for AirExchangeMultiQuoteOption
     * @uses AirExchangeMultiQuoteOption::setAirSegmentData()
     * @uses AirExchangeMultiQuoteOption::setAirExchangeBundleTotal()
     * @uses AirExchangeMultiQuoteOption::setAirExchangeBundleList()
     * @param \Travelport\Air\StructType\AirSegmentData[] $airSegmentData
     * @param \Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @param \Travelport\Air\StructType\AirExchangeBundleList[] $airExchangeBundleList
     */
    public function __construct(?array $airSegmentData = null, ?\Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null, ?array $airExchangeBundleList = null)
    {
        $this
            ->setAirSegmentData($airSegmentData)
            ->setAirExchangeBundleTotal($airExchangeBundleTotal)
            ->setAirExchangeBundleList($airExchangeBundleList);
    }
    /**
     * Get AirSegmentData value
     * @return \Travelport\Air\StructType\AirSegmentData[]
     */
    public function getAirSegmentData(): ?array
    {
        return $this->AirSegmentData;
    }
    /**
     * Set AirSegmentData value
     * @param \Travelport\Air\StructType\AirSegmentData[] $airSegmentData
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteOption
     */
    public function setAirSegmentData(?array $airSegmentData = null): self
    {
        $this->AirSegmentData = $airSegmentData;
        
        return $this;
    }
    /**
     * Add item to AirSegmentData value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirSegmentData $item
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteOption
     */
    public function addToAirSegmentData(\Travelport\Air\StructType\AirSegmentData $item): self
    {
        $this->AirSegmentData[] = $item;
        
        return $this;
    }
    /**
     * Get AirExchangeBundleTotal value
     * @return \Travelport\Air\StructType\AirExchangeBundleTotal|null
     */
    public function getAirExchangeBundleTotal(): ?\Travelport\Air\StructType\AirExchangeBundleTotal
    {
        return $this->AirExchangeBundleTotal;
    }
    /**
     * Set AirExchangeBundleTotal value
     * @param \Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteOption
     */
    public function setAirExchangeBundleTotal(?\Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null): self
    {
        $this->AirExchangeBundleTotal = $airExchangeBundleTotal;
        
        return $this;
    }
    /**
     * Get AirExchangeBundleList value
     * @return \Travelport\Air\StructType\AirExchangeBundleList[]
     */
    public function getAirExchangeBundleList(): ?array
    {
        return $this->AirExchangeBundleList;
    }
    /**
     * Set AirExchangeBundleList value
     * @param \Travelport\Air\StructType\AirExchangeBundleList[] $airExchangeBundleList
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteOption
     */
    public function setAirExchangeBundleList(?array $airExchangeBundleList = null): self
    {
        $this->AirExchangeBundleList = $airExchangeBundleList;
        
        return $this;
    }
    /**
     * Add item to AirExchangeBundleList value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirExchangeBundleList $item
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteOption
     */
    public function addToAirExchangeBundleList(\Travelport\Air\StructType\AirExchangeBundleList $item): self
    {
        $this->AirExchangeBundleList[] = $item;
        
        return $this;
    }
}
