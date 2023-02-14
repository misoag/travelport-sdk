<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?int $DaysBefore = null;
    /**
     * The DaysAfter
     * Meta information extracted from the WSDL
     * - documentation: Number of days to search after the specified date
     * - use: optional
     * @var int|null
     */
    protected ?int $DaysAfter = null;
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
     * @return \Travelport\Util\StructType\SearchExtraDays
     */
    public function setDaysBefore(?int $daysBefore = null): self
    {
        // validation for constraint: int
        if (!is_null($daysBefore) && !(is_int($daysBefore) || ctype_digit($daysBefore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysBefore, true), gettype($daysBefore)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SearchExtraDays
     */
    public function setDaysAfter(?int $daysAfter = null): self
    {
        // validation for constraint: int
        if (!is_null($daysAfter) && !(is_int($daysAfter) || ctype_digit($daysAfter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysAfter, true), gettype($daysAfter)), __LINE__);
        }
        $this->DaysAfter = $daysAfter;
        
        return $this;
    }
}
