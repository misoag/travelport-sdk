<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrePayPriceInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Detailed tax information for the pre pay account | Pricing detail for the Pre Pay Account
 * @subpackage Structs
 */
class PrePayPriceInfo extends AbstractStructBase
{
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
     * The BaseFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BaseFare = null;
    /**
     * The TotalFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TotalFare = null;
    /**
     * The TotalTax
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TotalTax = null;
    /**
     * Constructor method for PrePayPriceInfo
     * @uses PrePayPriceInfo::setTaxInfo()
     * @uses PrePayPriceInfo::setBaseFare()
     * @uses PrePayPriceInfo::setTotalFare()
     * @uses PrePayPriceInfo::setTotalTax()
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param string $baseFare
     * @param string $totalFare
     * @param string $totalTax
     */
    public function __construct(?array $taxInfo = null, ?string $baseFare = null, ?string $totalFare = null, ?string $totalTax = null)
    {
        $this
            ->setTaxInfo($taxInfo)
            ->setBaseFare($baseFare)
            ->setTotalFare($totalFare)
            ->setTotalTax($totalTax);
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
     * @return \Travelport\UniversalRecord\StructType\PrePayPriceInfo
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
     * @return \Travelport\UniversalRecord\StructType\PrePayPriceInfo
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get BaseFare value
     * @return string|null
     */
    public function getBaseFare(): ?string
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param string $baseFare
     * @return \Travelport\UniversalRecord\StructType\PrePayPriceInfo
     */
    public function setBaseFare(?string $baseFare = null): self
    {
        $this->BaseFare = $baseFare;
        
        return $this;
    }
    /**
     * Get TotalFare value
     * @return string|null
     */
    public function getTotalFare(): ?string
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param string $totalFare
     * @return \Travelport\UniversalRecord\StructType\PrePayPriceInfo
     */
    public function setTotalFare(?string $totalFare = null): self
    {
        $this->TotalFare = $totalFare;
        
        return $this;
    }
    /**
     * Get TotalTax value
     * @return string|null
     */
    public function getTotalTax(): ?string
    {
        return $this->TotalTax;
    }
    /**
     * Set TotalTax value
     * @param string $totalTax
     * @return \Travelport\UniversalRecord\StructType\PrePayPriceInfo
     */
    public function setTotalTax(?string $totalTax = null): self
    {
        $this->TotalTax = $totalTax;
        
        return $this;
    }
}
