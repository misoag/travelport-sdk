<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?bool $HoursMax = null;
    /**
     * The DaysMax
     * Meta information extracted from the WSDL
     * - documentation: Maximum days. True if unit of time is days. False if unit of time is not days.
     * - use: optional
     * @var bool|null
     */
    public ?bool $DaysMax = null;
    /**
     * The MonthsMax
     * Meta information extracted from the WSDL
     * - documentation: Maximum months. True if unit of time is months. False if unit of time is not months.
     * - use: optional
     * @var bool|null
     */
    public ?bool $MonthsMax = null;
    /**
     * The OccurIndMax
     * Meta information extracted from the WSDL
     * - documentation: Maximum cccurance indicator. True if day of the week is used. False if day of the week is not used.
     * - use: optional
     * @var bool|null
     */
    public ?bool $OccurIndMax = null;
    /**
     * The SameDayMax
     * Meta information extracted from the WSDL
     * - documentation: Same day maximum. True if Stay is same day. False if Stay is not same day.
     * - use: optional
     * @var bool|null
     */
    public ?bool $SameDayMax = null;
    /**
     * The StartIndMax
     * Meta information extracted from the WSDL
     * - documentation: Start indicator. True if start indicator. False if not a start indicator.
     * - use: optional
     * @var bool|null
     */
    public ?bool $StartIndMax = null;
    /**
     * The CompletionInd
     * Meta information extracted from the WSDL
     * - documentation: Completion indicator. True if Completion C Indicator. False if not Completion C Indicator.
     * - use: optional
     * @var bool|null
     */
    public ?bool $CompletionInd = null;
    /**
     * The TmDOWMax
     * Meta information extracted from the WSDL
     * - documentation: If a max unit of time is true then number corrolates to day of the week starting with 1 for Sunday.
     * - use: optional
     * @var int|null
     */
    public ?int $TmDOWMax = null;
    /**
     * The NumOccurMax
     * Meta information extracted from the WSDL
     * - documentation: Number of maximum occurances.
     * - use: optional
     * @var int|null
     */
    public ?int $NumOccurMax = null;
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
        $this->NumOccurMax = $numOccurMax;
        
        return $this;
    }
}
