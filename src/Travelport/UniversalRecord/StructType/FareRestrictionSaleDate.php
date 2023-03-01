<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRestrictionSaleDate StructType
 * Meta information extracted from the WSDL
 * - documentation: Restrict when this fare can be sold
 * @subpackage Structs
 */
class FareRestrictionSaleDate extends AbstractStructBase
{
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $StartDate = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $EndDate = null;
    /**
     * Constructor method for FareRestrictionSaleDate
     * @uses FareRestrictionSaleDate::setStartDate()
     * @uses FareRestrictionSaleDate::setEndDate()
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(?string $startDate = null, ?string $endDate = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSaleDate
     */
    public function setStartDate(?string $startDate = null): self
    {
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSaleDate
     */
    public function setEndDate(?string $endDate = null): self
    {
        $this->EndDate = $endDate;
        
        return $this;
    }
}
