<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?bool $HoursMin = null;
    /**
     * The DaysMin
     * Meta information extracted from the WSDL
     * - documentation: Minimum days. True if unit of time is days. False if unit of time is not days.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $DaysMin = null;
    /**
     * The MonthsMin
     * Meta information extracted from the WSDL
     * - documentation: Minimum months. True if unit of time is months. False if unit of time is not months.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MonthsMin = null;
    /**
     * The OccurIndMin
     * Meta information extracted from the WSDL
     * - documentation: Minimum occurance indicator. True if day of the week is used. False if day of the week is not used.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $OccurIndMin = null;
    /**
     * The SameDayMin
     * Meta information extracted from the WSDL
     * - documentation: Same day minimum. True if Stay is same day. False if Stay is not same day.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SameDayMin = null;
    /**
     * The TmDOWMin
     * Meta information extracted from the WSDL
     * - documentation: If a min unit of time is true then number corrolates to day of the week starting with 1 for Sunday.
     * - use: optional
     * @var int|null
     */
    protected ?int $TmDOWMin = null;
    /**
     * The FareComponent
     * Meta information extracted from the WSDL
     * - documentation: Fare component number of the most restrictive fare.
     * - use: optional
     * @var int|null
     */
    protected ?int $FareComponent = null;
    /**
     * The NumOccurMin
     * Meta information extracted from the WSDL
     * - documentation: Number of min occurances. This field is used in conjunction with the Day of Week.
     * - use: optional
     * @var int|null
     */
    protected ?int $NumOccurMin = null;
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
     * @return \Travelport\Util\StructType\MINType
     */
    public function setHoursMin(?bool $hoursMin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hoursMin) && !is_bool($hoursMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hoursMin, true), gettype($hoursMin)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MINType
     */
    public function setDaysMin(?bool $daysMin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($daysMin) && !is_bool($daysMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($daysMin, true), gettype($daysMin)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MINType
     */
    public function setMonthsMin(?bool $monthsMin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($monthsMin) && !is_bool($monthsMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($monthsMin, true), gettype($monthsMin)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MINType
     */
    public function setOccurIndMin(?bool $occurIndMin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($occurIndMin) && !is_bool($occurIndMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($occurIndMin, true), gettype($occurIndMin)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MINType
     */
    public function setSameDayMin(?bool $sameDayMin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sameDayMin) && !is_bool($sameDayMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sameDayMin, true), gettype($sameDayMin)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MINType
     */
    public function setTmDOWMin(?int $tmDOWMin = null): self
    {
        // validation for constraint: int
        if (!is_null($tmDOWMin) && !(is_int($tmDOWMin) || ctype_digit($tmDOWMin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tmDOWMin, true), gettype($tmDOWMin)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MINType
     */
    public function setFareComponent(?int $fareComponent = null): self
    {
        // validation for constraint: int
        if (!is_null($fareComponent) && !(is_int($fareComponent) || ctype_digit($fareComponent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fareComponent, true), gettype($fareComponent)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MINType
     */
    public function setNumOccurMin(?int $numOccurMin = null): self
    {
        // validation for constraint: int
        if (!is_null($numOccurMin) && !(is_int($numOccurMin) || ctype_digit($numOccurMin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numOccurMin, true), gettype($numOccurMin)), __LINE__);
        }
        $this->NumOccurMin = $numOccurMin;
        
        return $this;
    }
}
