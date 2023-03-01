<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeBundle StructType
 * Meta information extracted from the WSDL
 * - documentation: Only used within an AirExchangeQuoteRsp | Used both in request and response | Bundle exchange, pricing, and penalty information for one ticket number
 * @subpackage Structs
 */
class AirExchangeBundle extends AbstractStructBase
{
    /**
     * The AirExchangeInfo
     * Meta information extracted from the WSDL
     * - ref: common:AirExchangeInfo
     * @var \Travelport\UniversalRecord\StructType\AirExchangeInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirExchangeInfo $AirExchangeInfo = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public ?array $AirPricingInfoRef = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public ?array $TaxInfo = null;
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
     * Constructor method for AirExchangeBundle
     * @uses AirExchangeBundle::setAirExchangeInfo()
     * @uses AirExchangeBundle::setAirPricingInfoRef()
     * @uses AirExchangeBundle::setTaxInfo()
     * @uses AirExchangeBundle::setPenalty()
     * @param \Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\UniversalRecord\StructType\Penalty[] $penalty
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo = null, ?array $airPricingInfoRef = null, ?array $taxInfo = null, ?array $penalty = null)
    {
        $this
            ->setAirExchangeInfo($airExchangeInfo)
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setTaxInfo($taxInfo)
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function setAirExchangeInfo(?\Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo = null): self
    {
        $this->AirExchangeInfo = $airExchangeInfo;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * Set TaxInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function addToPenalty(\Travelport\UniversalRecord\StructType\Penalty $item): self
    {
        $this->Penalty[] = $item;
        
        return $this;
    }
}
