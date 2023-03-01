<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeDateRange StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify a range of dates
 * @subpackage Structs
 */
class TypeDateRange extends AbstractStructBase
{
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $StartDate;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $EndDate;
    /**
     * Constructor method for typeDateRange
     * @uses TypeDateRange::setStartDate()
     * @uses TypeDateRange::setEndDate()
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(string $startDate, string $endDate)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }
    /**
     * Get StartDate value
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Travelport\Hotel\StructType\TypeDateRange
     */
    public function setStartDate(string $startDate): self
    {
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Travelport\Hotel\StructType\TypeDateRange
     */
    public function setEndDate(string $endDate): self
    {
        $this->EndDate = $endDate;
        
        return $this;
    }
}
