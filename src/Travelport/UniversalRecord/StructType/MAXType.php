<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MAXType StructType
 * @subpackage Structs
 */
class MAXType extends AbstractStructBase
{
    /**
     * The HoursMax
     * Meta information extracted from the WSDL
     * - documentation: Maximum hours. True if unit of time is hours. False if unit of time is not hours.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $HoursMax = null;
    /**
     * The DaysMax
     * Meta information extracted from the WSDL
     * - documentation: Maximum days. True if unit of time is days. False if unit of time is not days.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $DaysMax = null;
    /**
     * The MonthsMax
     * Meta information extracted from the WSDL
     * - documentation: Maximum months. True if unit of time is months. False if unit of time is not months.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MonthsMax = null;
    /**
     * The OccurIndMax
     * Meta information extracted from the WSDL
     * - documentation: Maximum cccurance indicator. True if day of the week is used. False if day of the week is not used.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $OccurIndMax = null;
    /**
     * The SameDayMax
     * Meta information extracted from the WSDL
     * - documentation: Same day maximum. True if Stay is same day. False if Stay is not same day.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SameDayMax = null;
    /**
     * The StartIndMax
     * Meta information extracted from the WSDL
     * - documentation: Start indicator. True if start indicator. False if not a start indicator.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $StartIndMax = null;
    /**
     * The CompletionInd
     * Meta information extracted from the WSDL
     * - documentation: Completion indicator. True if Completion C Indicator. False if not Completion C Indicator.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CompletionInd = null;
    /**
     * The TmDOWMax
     * Meta information extracted from the WSDL
     * - documentation: If a max unit of time is true then number corrolates to day of the week starting with 1 for Sunday.
     * - use: optional
     * @var int|null
     */
    protected ?int $TmDOWMax = null;
    /**
     * The NumOccurMax
     * Meta information extracted from the WSDL
     * - documentation: Number of maximum occurances.
     * - use: optional
     * @var int|null
     */
    protected ?int $NumOccurMax = null;
    /**
     * Constructor method for MAXType
     * @uses MAXType::setHoursMax()
     * @uses MAXType::setDaysMax()
     * @uses MAXType::setMonthsMax()
     * @uses MAXType::setOccurIndMax()
     * @uses MAXType::setSameDayMax()
     * @uses MAXType::setStartIndMax()
     * @uses MAXType::setCompletionInd()
     * @uses MAXType::setTmDOWMax()
     * @uses MAXType::setNumOccurMax()
     * @param bool $hoursMax
     * @param bool $daysMax
     * @param bool $monthsMax
     * @param bool $occurIndMax
     * @param bool $sameDayMax
     * @param bool $startIndMax
     * @param bool $completionInd
     * @param int $tmDOWMax
     * @param int $numOccurMax
     */
    public function __construct(?bool $hoursMax = null, ?bool $daysMax = null, ?bool $monthsMax = null, ?bool $occurIndMax = null, ?bool $sameDayMax = null, ?bool $startIndMax = null, ?bool $completionInd = null, ?int $tmDOWMax = null, ?int $numOccurMax = null)
    {
        $this
            ->setHoursMax($hoursMax)
            ->setDaysMax($daysMax)
            ->setMonthsMax($monthsMax)
            ->setOccurIndMax($occurIndMax)
            ->setSameDayMax($sameDayMax)
            ->setStartIndMax($startIndMax)
            ->setCompletionInd($completionInd)
            ->setTmDOWMax($tmDOWMax)
            ->setNumOccurMax($numOccurMax);
    }
    /**
     * Get HoursMax value
     * @return bool|null
     */
    public function getHoursMax(): ?bool
    {
        return $this->HoursMax;
    }
    /**
     * Set HoursMax value
     * @param bool $hoursMax
     * @return \Travelport\UniversalRecord\StructType\MAXType
     */
    public function setHoursMax(?bool $hoursMax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hoursMax) && !is_bool($hoursMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hoursMax, true), gettype($hoursMax)), __LINE__);
        }
        $this->HoursMax = $hoursMax;
        
        return $this;
    }
    /**
     * Get DaysMax value
     * @return bool|null
     */
    public function getDaysMax(): ?bool
    {
        return $this->DaysMax;
    }
    /**
     * Set DaysMax value
     * @param bool $daysMax
     * @return \Travelport\UniversalRecord\StructType\MAXType
     */
    public function setDaysMax(?bool $daysMax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($daysMax) && !is_bool($daysMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($daysMax, true), gettype($daysMax)), __LINE__);
        }
        $this->DaysMax = $daysMax;
        
        return $this;
    }
    /**
     * Get MonthsMax value
     * @return bool|null
     */
    public function getMonthsMax(): ?bool
    {
        return $this->MonthsMax;
    }
    /**
     * Set MonthsMax value
     * @param bool $monthsMax
     * @return \Travelport\UniversalRecord\StructType\MAXType
     */
    public function setMonthsMax(?bool $monthsMax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($monthsMax) && !is_bool($monthsMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($monthsMax, true), gettype($monthsMax)), __LINE__);
        }
        $this->MonthsMax = $monthsMax;
        
        return $this;
    }
    /**
     * Get OccurIndMax value
     * @return bool|null
     */
    public function getOccurIndMax(): ?bool
    {
        return $this->OccurIndMax;
    }
    /**
     * Set OccurIndMax value
     * @param bool $occurIndMax
     * @return \Travelport\UniversalRecord\StructType\MAXType
     */
    public function setOccurIndMax(?bool $occurIndMax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($occurIndMax) && !is_bool($occurIndMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($occurIndMax, true), gettype($occurIndMax)), __LINE__);
        }
        $this->OccurIndMax = $occurIndMax;
        
        return $this;
    }
    /**
     * Get SameDayMax value
     * @return bool|null
     */
    public function getSameDayMax(): ?bool
    {
        return $this->SameDayMax;
    }
    /**
     * Set SameDayMax value
     * @param bool $sameDayMax
     * @return \Travelport\UniversalRecord\StructType\MAXType
     */
    public function setSameDayMax(?bool $sameDayMax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sameDayMax) && !is_bool($sameDayMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sameDayMax, true), gettype($sameDayMax)), __LINE__);
        }
        $this->SameDayMax = $sameDayMax;
        
        return $this;
    }
    /**
     * Get StartIndMax value
     * @return bool|null
     */
    public function getStartIndMax(): ?bool
    {
        return $this->StartIndMax;
    }
    /**
     * Set StartIndMax value
     * @param bool $startIndMax
     * @return \Travelport\UniversalRecord\StructType\MAXType
     */
    public function setStartIndMax(?bool $startIndMax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($startIndMax) && !is_bool($startIndMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($startIndMax, true), gettype($startIndMax)), __LINE__);
        }
        $this->StartIndMax = $startIndMax;
        
        return $this;
    }
    /**
     * Get CompletionInd value
     * @return bool|null
     */
    public function getCompletionInd(): ?bool
    {
        return $this->CompletionInd;
    }
    /**
     * Set CompletionInd value
     * @param bool $completionInd
     * @return \Travelport\UniversalRecord\StructType\MAXType
     */
    public function setCompletionInd(?bool $completionInd = null): self
    {
        // validation for constraint: boolean
        if (!is_null($completionInd) && !is_bool($completionInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($completionInd, true), gettype($completionInd)), __LINE__);
        }
        $this->CompletionInd = $completionInd;
        
        return $this;
    }
    /**
     * Get TmDOWMax value
     * @return int|null
     */
    public function getTmDOWMax(): ?int
    {
        return $this->TmDOWMax;
    }
    /**
     * Set TmDOWMax value
     * @param int $tmDOWMax
     * @return \Travelport\UniversalRecord\StructType\MAXType
     */
    public function setTmDOWMax(?int $tmDOWMax = null): self
    {
        // validation for constraint: int
        if (!is_null($tmDOWMax) && !(is_int($tmDOWMax) || ctype_digit($tmDOWMax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tmDOWMax, true), gettype($tmDOWMax)), __LINE__);
        }
        $this->TmDOWMax = $tmDOWMax;
        
        return $this;
    }
    /**
     * Get NumOccurMax value
     * @return int|null
     */
    public function getNumOccurMax(): ?int
    {
        return $this->NumOccurMax;
    }
    /**
     * Set NumOccurMax value
     * @param int $numOccurMax
     * @return \Travelport\UniversalRecord\StructType\MAXType
     */
    public function setNumOccurMax(?int $numOccurMax = null): self
    {
        // validation for constraint: int
        if (!is_null($numOccurMax) && !(is_int($numOccurMax) || ctype_digit($numOccurMax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numOccurMax, true), gettype($numOccurMax)), __LINE__);
        }
        $this->NumOccurMax = $numOccurMax;
        
        return $this;
    }
}
