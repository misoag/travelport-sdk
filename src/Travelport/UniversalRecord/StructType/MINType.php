<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MINType StructType
 * @subpackage Structs
 */
class MINType extends AbstractStructBase
{
    /**
     * The HoursMin
     * Meta information extracted from the WSDL
     * - documentation: Minimum hours. True if unit of time is hours. False if unit of time is not hours.
     * - use: optional
     * @var bool|null
     */
    public ?bool $HoursMin = null;
    /**
     * The DaysMin
     * Meta information extracted from the WSDL
     * - documentation: Minimum days. True if unit of time is days. False if unit of time is not days.
     * - use: optional
     * @var bool|null
     */
    public ?bool $DaysMin = null;
    /**
     * The MonthsMin
     * Meta information extracted from the WSDL
     * - documentation: Minimum months. True if unit of time is months. False if unit of time is not months.
     * - use: optional
     * @var bool|null
     */
    public ?bool $MonthsMin = null;
    /**
     * The OccurIndMin
     * Meta information extracted from the WSDL
     * - documentation: Minimum occurance indicator. True if day of the week is used. False if day of the week is not used.
     * - use: optional
     * @var bool|null
     */
    public ?bool $OccurIndMin = null;
    /**
     * The SameDayMin
     * Meta information extracted from the WSDL
     * - documentation: Same day minimum. True if Stay is same day. False if Stay is not same day.
     * - use: optional
     * @var bool|null
     */
    public ?bool $SameDayMin = null;
    /**
     * The TmDOWMin
     * Meta information extracted from the WSDL
     * - documentation: If a min unit of time is true then number corrolates to day of the week starting with 1 for Sunday.
     * - use: optional
     * @var int|null
     */
    public ?int $TmDOWMin = null;
    /**
     * The FareComponent
     * Meta information extracted from the WSDL
     * - documentation: Fare component number of the most restrictive fare.
     * - use: optional
     * @var int|null
     */
    public ?int $FareComponent = null;
    /**
     * The NumOccurMin
     * Meta information extracted from the WSDL
     * - documentation: Number of min occurances. This field is used in conjunction with the Day of Week.
     * - use: optional
     * @var int|null
     */
    public ?int $NumOccurMin = null;
    /**
     * Constructor method for MINType
     * @uses MINType::setHoursMin()
     * @uses MINType::setDaysMin()
     * @uses MINType::setMonthsMin()
     * @uses MINType::setOccurIndMin()
     * @uses MINType::setSameDayMin()
     * @uses MINType::setTmDOWMin()
     * @uses MINType::setFareComponent()
     * @uses MINType::setNumOccurMin()
     * @param bool $hoursMin
     * @param bool $daysMin
     * @param bool $monthsMin
     * @param bool $occurIndMin
     * @param bool $sameDayMin
     * @param int $tmDOWMin
     * @param int $fareComponent
     * @param int $numOccurMin
     */
    public function __construct(?bool $hoursMin = null, ?bool $daysMin = null, ?bool $monthsMin = null, ?bool $occurIndMin = null, ?bool $sameDayMin = null, ?int $tmDOWMin = null, ?int $fareComponent = null, ?int $numOccurMin = null)
    {
        $this
            ->setHoursMin($hoursMin)
            ->setDaysMin($daysMin)
            ->setMonthsMin($monthsMin)
            ->setOccurIndMin($occurIndMin)
            ->setSameDayMin($sameDayMin)
            ->setTmDOWMin($tmDOWMin)
            ->setFareComponent($fareComponent)
            ->setNumOccurMin($numOccurMin);
    }
    /**
     * Get HoursMin value
     * @return bool|null
     */
    public function getHoursMin(): ?bool
    {
        return $this->HoursMin;
    }
    /**
     * Set HoursMin value
     * @param bool $hoursMin
     * @return \Travelport\UniversalRecord\StructType\MINType
     */
    public function setHoursMin(?bool $hoursMin = null): self
    {
        $this->HoursMin = $hoursMin;
        
        return $this;
    }
    /**
     * Get DaysMin value
     * @return bool|null
     */
    public function getDaysMin(): ?bool
    {
        return $this->DaysMin;
    }
    /**
     * Set DaysMin value
     * @param bool $daysMin
     * @return \Travelport\UniversalRecord\StructType\MINType
     */
    public function setDaysMin(?bool $daysMin = null): self
    {
        $this->DaysMin = $daysMin;
        
        return $this;
    }
    /**
     * Get MonthsMin value
     * @return bool|null
     */
    public function getMonthsMin(): ?bool
    {
        return $this->MonthsMin;
    }
    /**
     * Set MonthsMin value
     * @param bool $monthsMin
     * @return \Travelport\UniversalRecord\StructType\MINType
     */
    public function setMonthsMin(?bool $monthsMin = null): self
    {
        $this->MonthsMin = $monthsMin;
        
        return $this;
    }
    /**
     * Get OccurIndMin value
     * @return bool|null
     */
    public function getOccurIndMin(): ?bool
    {
        return $this->OccurIndMin;
    }
    /**
     * Set OccurIndMin value
     * @param bool $occurIndMin
     * @return \Travelport\UniversalRecord\StructType\MINType
     */
    public function setOccurIndMin(?bool $occurIndMin = null): self
    {
        $this->OccurIndMin = $occurIndMin;
        
        return $this;
    }
    /**
     * Get SameDayMin value
     * @return bool|null
     */
    public function getSameDayMin(): ?bool
    {
        return $this->SameDayMin;
    }
    /**
     * Set SameDayMin value
     * @param bool $sameDayMin
     * @return \Travelport\UniversalRecord\StructType\MINType
     */
    public function setSameDayMin(?bool $sameDayMin = null): self
    {
        $this->SameDayMin = $sameDayMin;
        
        return $this;
    }
    /**
     * Get TmDOWMin value
     * @return int|null
     */
    public function getTmDOWMin(): ?int
    {
        return $this->TmDOWMin;
    }
    /**
     * Set TmDOWMin value
     * @param int $tmDOWMin
     * @return \Travelport\UniversalRecord\StructType\MINType
     */
    public function setTmDOWMin(?int $tmDOWMin = null): self
    {
        $this->TmDOWMin = $tmDOWMin;
        
        return $this;
    }
    /**
     * Get FareComponent value
     * @return int|null
     */
    public function getFareComponent(): ?int
    {
        return $this->FareComponent;
    }
    /**
     * Set FareComponent value
     * @param int $fareComponent
     * @return \Travelport\UniversalRecord\StructType\MINType
     */
    public function setFareComponent(?int $fareComponent = null): self
    {
        $this->FareComponent = $fareComponent;
        
        return $this;
    }
    /**
     * Get NumOccurMin value
     * @return int|null
     */
    public function getNumOccurMin(): ?int
    {
        return $this->NumOccurMin;
    }
    /**
     * Set NumOccurMin value
     * @param int $numOccurMin
     * @return \Travelport\UniversalRecord\StructType\MINType
     */
    public function setNumOccurMin(?int $numOccurMin = null): self
    {
        $this->NumOccurMin = $numOccurMin;
        
        return $this;
    }
}
