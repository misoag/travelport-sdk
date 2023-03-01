<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchExtraDays StructType
 * Meta information extracted from the WSDL
 * - documentation: Options to search for extra days on top of the specified date
 * @subpackage Structs
 */
class SearchExtraDays extends AbstractStructBase
{
    /**
     * The DaysBefore
     * Meta information extracted from the WSDL
     * - documentation: Number of days to search before the specified date
     * - use: optional
     * @var int|null
     */
    public ?int $DaysBefore = null;
    /**
     * The DaysAfter
     * Meta information extracted from the WSDL
     * - documentation: Number of days to search after the specified date
     * - use: optional
     * @var int|null
     */
    public ?int $DaysAfter = null;
    /**
     * Constructor method for SearchExtraDays
     * @uses SearchExtraDays::setDaysBefore()
     * @uses SearchExtraDays::setDaysAfter()
     * @param int $daysBefore
     * @param int $daysAfter
     */
    public function __construct(?int $daysBefore = null, ?int $daysAfter = null)
    {
        $this
            ->setDaysBefore($daysBefore)
            ->setDaysAfter($daysAfter);
    }
    /**
     * Get DaysBefore value
     * @return int|null
     */
    public function getDaysBefore(): ?int
    {
        return $this->DaysBefore;
    }
    /**
     * Set DaysBefore value
     * @param int $daysBefore
     * @return \Travelport\UniversalRecord\StructType\SearchExtraDays
     */
    public function setDaysBefore(?int $daysBefore = null): self
    {
        $this->DaysBefore = $daysBefore;
        
        return $this;
    }
    /**
     * Get DaysAfter value
     * @return int|null
     */
    public function getDaysAfter(): ?int
    {
        return $this->DaysAfter;
    }
    /**
     * Set DaysAfter value
     * @param int $daysAfter
     * @return \Travelport\UniversalRecord\StructType\SearchExtraDays
     */
    public function setDaysAfter(?int $daysAfter = null): self
    {
        $this->DaysAfter = $daysAfter;
        
        return $this;
    }
}
