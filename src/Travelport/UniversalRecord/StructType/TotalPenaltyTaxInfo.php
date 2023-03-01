<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalPenaltyTaxInfo StructType
 * @subpackage Structs
 */
class TotalPenaltyTaxInfo extends AbstractStructBase
{
    /**
     * The PenaltyTaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTax[]
     */
    public ?array $PenaltyTaxInfo = null;
    /**
     * The TotalPenaltyTax
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TotalPenaltyTax = null;
    /**
     * Constructor method for TotalPenaltyTaxInfo
     * @uses TotalPenaltyTaxInfo::setPenaltyTaxInfo()
     * @uses TotalPenaltyTaxInfo::setTotalPenaltyTax()
     * @param \Travelport\UniversalRecord\StructType\TypeTax[] $penaltyTaxInfo
     * @param string $totalPenaltyTax
     */
    public function __construct(?array $penaltyTaxInfo = null, ?string $totalPenaltyTax = null)
    {
        $this
            ->setPenaltyTaxInfo($penaltyTaxInfo)
            ->setTotalPenaltyTax($totalPenaltyTax);
    }
    /**
     * Get PenaltyTaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTax[]
     */
    public function getPenaltyTaxInfo(): ?array
    {
        return $this->PenaltyTaxInfo;
    }
    /**
     * Set PenaltyTaxInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeTax[] $penaltyTaxInfo
     * @return \Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo
     */
    public function setPenaltyTaxInfo(?array $penaltyTaxInfo = null): self
    {
        $this->PenaltyTaxInfo = $penaltyTaxInfo;
        
        return $this;
    }
    /**
     * Add item to PenaltyTaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTax $item
     * @return \Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo
     */
    public function addToPenaltyTaxInfo(\Travelport\UniversalRecord\StructType\TypeTax $item): self
    {
        $this->PenaltyTaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TotalPenaltyTax value
     * @return string|null
     */
    public function getTotalPenaltyTax(): ?string
    {
        return $this->TotalPenaltyTax;
    }
    /**
     * Set TotalPenaltyTax value
     * @param string $totalPenaltyTax
     * @return \Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo
     */
    public function setTotalPenaltyTax(?string $totalPenaltyTax = null): self
    {
        $this->TotalPenaltyTax = $totalPenaltyTax;
        
        return $this;
    }
}
