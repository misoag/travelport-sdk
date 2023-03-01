<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDPricingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare related information for these electronic miscellaneous documents. Supported providers are 1G/1V/1P
 * @subpackage Structs
 */
class EMDPricingInfo extends AbstractStructBase
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
     * The EquivFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $EquivFare = null;
    /**
     * Constructor method for EMDPricingInfo
     * @uses EMDPricingInfo::setTaxInfo()
     * @uses EMDPricingInfo::setBaseFare()
     * @uses EMDPricingInfo::setTotalFare()
     * @uses EMDPricingInfo::setTotalTax()
     * @uses EMDPricingInfo::setEquivFare()
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param string $baseFare
     * @param string $totalFare
     * @param string $totalTax
     * @param string $equivFare
     */
    public function __construct(?array $taxInfo = null, ?string $baseFare = null, ?string $totalFare = null, ?string $totalTax = null, ?string $equivFare = null)
    {
        $this
            ->setTaxInfo($taxInfo)
            ->setBaseFare($baseFare)
            ->setTotalFare($totalFare)
            ->setTotalTax($totalTax)
            ->setEquivFare($equivFare);
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
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
     */
    public function setTotalTax(?string $totalTax = null): self
    {
        $this->TotalTax = $totalTax;
        
        return $this;
    }
    /**
     * Get EquivFare value
     * @return string|null
     */
    public function getEquivFare(): ?string
    {
        return $this->EquivFare;
    }
    /**
     * Set EquivFare value
     * @param string $equivFare
     * @return \Travelport\UniversalRecord\StructType\EMDPricingInfo
     */
    public function setEquivFare(?string $equivFare = null): self
    {
        $this->EquivFare = $equivFare;
        
        return $this;
    }
}
