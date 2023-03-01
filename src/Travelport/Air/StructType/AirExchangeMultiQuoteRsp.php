<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeMultiQuoteRsp StructType
 * @subpackage Structs
 */
class AirExchangeMultiQuoteRsp extends BaseRsp
{
    /**
     * The AirSegmentList
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentList
     * @var \Travelport\Air\StructType\AirSegmentList[]
     */
    public ?array $AirSegmentList = null;
    /**
     * The BrandList
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BrandList
     * @var \Travelport\Air\StructType\BrandList[]
     */
    public ?array $BrandList = null;
    /**
     * The AirExchangeMulitQuoteList
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirExchangeMulitQuoteList
     * @var \Travelport\Air\StructType\AirExchangeMulitQuoteList[]
     */
    public ?array $AirExchangeMulitQuoteList = null;
    /**
     * Constructor method for AirExchangeMultiQuoteRsp
     * @uses AirExchangeMultiQuoteRsp::setAirSegmentList()
     * @uses AirExchangeMultiQuoteRsp::setBrandList()
     * @uses AirExchangeMultiQuoteRsp::setAirExchangeMulitQuoteList()
     * @param \Travelport\Air\StructType\AirSegmentList[] $airSegmentList
     * @param \Travelport\Air\StructType\BrandList[] $brandList
     * @param \Travelport\Air\StructType\AirExchangeMulitQuoteList[] $airExchangeMulitQuoteList
     */
    public function __construct(?array $airSegmentList = null, ?array $brandList = null, ?array $airExchangeMulitQuoteList = null)
    {
        $this
            ->setAirSegmentList($airSegmentList)
            ->setBrandList($brandList)
            ->setAirExchangeMulitQuoteList($airExchangeMulitQuoteList);
    }
    /**
     * Get AirSegmentList value
     * @return \Travelport\Air\StructType\AirSegmentList[]
     */
    public function getAirSegmentList(): ?array
    {
        return $this->AirSegmentList;
    }
    /**
     * Set AirSegmentList value
     * @param \Travelport\Air\StructType\AirSegmentList[] $airSegmentList
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteRsp
     */
    public function setAirSegmentList(?array $airSegmentList = null): self
    {
        $this->AirSegmentList = $airSegmentList;
        
        return $this;
    }
    /**
     * Add item to AirSegmentList value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirSegmentList $item
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteRsp
     */
    public function addToAirSegmentList(\Travelport\Air\StructType\AirSegmentList $item): self
    {
        $this->AirSegmentList[] = $item;
        
        return $this;
    }
    /**
     * Get BrandList value
     * @return \Travelport\Air\StructType\BrandList[]
     */
    public function getBrandList(): ?array
    {
        return $this->BrandList;
    }
    /**
     * Set BrandList value
     * @param \Travelport\Air\StructType\BrandList[] $brandList
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteRsp
     */
    public function setBrandList(?array $brandList = null): self
    {
        $this->BrandList = $brandList;
        
        return $this;
    }
    /**
     * Add item to BrandList value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BrandList $item
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteRsp
     */
    public function addToBrandList(\Travelport\Air\StructType\BrandList $item): self
    {
        $this->BrandList[] = $item;
        
        return $this;
    }
    /**
     * Get AirExchangeMulitQuoteList value
     * @return \Travelport\Air\StructType\AirExchangeMulitQuoteList[]
     */
    public function getAirExchangeMulitQuoteList(): ?array
    {
        return $this->AirExchangeMulitQuoteList;
    }
    /**
     * Set AirExchangeMulitQuoteList value
     * @param \Travelport\Air\StructType\AirExchangeMulitQuoteList[] $airExchangeMulitQuoteList
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteRsp
     */
    public function setAirExchangeMulitQuoteList(?array $airExchangeMulitQuoteList = null): self
    {
        $this->AirExchangeMulitQuoteList = $airExchangeMulitQuoteList;
        
        return $this;
    }
    /**
     * Add item to AirExchangeMulitQuoteList value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirExchangeMulitQuoteList $item
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteRsp
     */
    public function addToAirExchangeMulitQuoteList(\Travelport\Air\StructType\AirExchangeMulitQuoteList $item): self
    {
        $this->AirExchangeMulitQuoteList[] = $item;
        
        return $this;
    }
}
