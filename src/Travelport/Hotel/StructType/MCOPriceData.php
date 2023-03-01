<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCOPriceData StructType
 * @subpackage Structs
 */
class MCOPriceData extends AbstractStructBase
{
    /**
     * The MCOAmount
     * Meta information extracted from the WSDL
     * - documentation: The total value of the MCO including any processing fees. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $MCOAmount;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeTaxInfo[]
     */
    public ?array $TaxInfo = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\Commission|null
     */
    public ?\Travelport\Hotel\StructType\Commission $Commission = null;
    /**
     * The MCOEquivalentFare
     * Meta information extracted from the WSDL
     * - documentation: Exchange value of the currency actually collected. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $MCOEquivalentFare = null;
    /**
     * The MCOTotalAmount
     * Meta information extracted from the WSDL
     * - documentation: The Total amount for the MCO. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $MCOTotalAmount = null;
    /**
     * Constructor method for MCOPriceData
     * @uses MCOPriceData::setMCOAmount()
     * @uses MCOPriceData::setTaxInfo()
     * @uses MCOPriceData::setCommission()
     * @uses MCOPriceData::setMCOEquivalentFare()
     * @uses MCOPriceData::setMCOTotalAmount()
     * @param string $mCOAmount
     * @param \Travelport\Hotel\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\Hotel\StructType\Commission $commission
     * @param string $mCOEquivalentFare
     * @param string $mCOTotalAmount
     */
    public function __construct(string $mCOAmount, ?array $taxInfo = null, ?\Travelport\Hotel\StructType\Commission $commission = null, ?string $mCOEquivalentFare = null, ?string $mCOTotalAmount = null)
    {
        $this
            ->setMCOAmount($mCOAmount)
            ->setTaxInfo($taxInfo)
            ->setCommission($commission)
            ->setMCOEquivalentFare($mCOEquivalentFare)
            ->setMCOTotalAmount($mCOTotalAmount);
    }
    /**
     * Get MCOAmount value
     * @return string
     */
    public function getMCOAmount(): string
    {
        return $this->MCOAmount;
    }
    /**
     * Set MCOAmount value
     * @param string $mCOAmount
     * @return \Travelport\Hotel\StructType\MCOPriceData
     */
    public function setMCOAmount(string $mCOAmount): self
    {
        $this->MCOAmount = $mCOAmount;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\Hotel\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * Set TaxInfo value
     * @param \Travelport\Hotel\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\Hotel\StructType\MCOPriceData
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeTaxInfo $item
     * @return \Travelport\Hotel\StructType\MCOPriceData
     */
    public function addToTaxInfo(\Travelport\Hotel\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Hotel\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\Hotel\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\Hotel\StructType\Commission $commission
     * @return \Travelport\Hotel\StructType\MCOPriceData
     */
    public function setCommission(?\Travelport\Hotel\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get MCOEquivalentFare value
     * @return string|null
     */
    public function getMCOEquivalentFare(): ?string
    {
        return $this->MCOEquivalentFare;
    }
    /**
     * Set MCOEquivalentFare value
     * @param string $mCOEquivalentFare
     * @return \Travelport\Hotel\StructType\MCOPriceData
     */
    public function setMCOEquivalentFare(?string $mCOEquivalentFare = null): self
    {
        $this->MCOEquivalentFare = $mCOEquivalentFare;
        
        return $this;
    }
    /**
     * Get MCOTotalAmount value
     * @return string|null
     */
    public function getMCOTotalAmount(): ?string
    {
        return $this->MCOTotalAmount;
    }
    /**
     * Set MCOTotalAmount value
     * @param string $mCOTotalAmount
     * @return \Travelport\Hotel\StructType\MCOPriceData
     */
    public function setMCOTotalAmount(?string $mCOTotalAmount = null): self
    {
        $this->MCOTotalAmount = $mCOTotalAmount;
        
        return $this;
    }
}
