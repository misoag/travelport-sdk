<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeStartEndTime StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the day(s) of the week to which the time requirement applies. | Used to specify earliest and latest pickup/dropoff times for a vehicle.
 * @subpackage Structs
 */
class TypeStartEndTime extends AbstractStructBase
{
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - documentation: The time in 24 hour clock format.
     * - use: required
     * @var string
     */
    public string $Time;
    /**
     * The RequirementPassed
     * Meta information extracted from the WSDL
     * - documentation: When true, the time requirement has been met.
     * - use: optional
     * @var bool|null
     */
    public ?bool $RequirementPassed = null;
    /**
     * The Mon
     * @var bool|null
     */
    public ?bool $Mon = null;
    /**
     * The Tue
     * @var bool|null
     */
    public ?bool $Tue = null;
    /**
     * The Wed
     * @var bool|null
     */
    public ?bool $Wed = null;
    /**
     * The Thu
     * @var bool|null
     */
    public ?bool $Thu = null;
    /**
     * The Fri
     * @var bool|null
     */
    public ?bool $Fri = null;
    /**
     * The Sat
     * @var bool|null
     */
    public ?bool $Sat = null;
    /**
     * The Sun
     * @var bool|null
     */
    public ?bool $Sun = null;
    /**
     * Constructor method for typeStartEndTime
     * @uses TypeStartEndTime::setTime()
     * @uses TypeStartEndTime::setRequirementPassed()
     * @uses TypeStartEndTime::setMon()
     * @uses TypeStartEndTime::setTue()
     * @uses TypeStartEndTime::setWed()
     * @uses TypeStartEndTime::setThu()
     * @uses TypeStartEndTime::setFri()
     * @uses TypeStartEndTime::setSat()
     * @uses TypeStartEndTime::setSun()
     * @param string $time
     * @param bool $requirementPassed
     * @param bool $mon
     * @param bool $tue
     * @param bool $wed
     * @param bool $thu
     * @param bool $fri
     * @param bool $sat
     * @param bool $sun
     */
    public function __construct(string $time, ?bool $requirementPassed = null, ?bool $mon = null, ?bool $tue = null, ?bool $wed = null, ?bool $thu = null, ?bool $fri = null, ?bool $sat = null, ?bool $sun = null)
    {
        $this
            ->setTime($time)
            ->setRequirementPassed($requirementPassed)
            ->setMon($mon)
            ->setTue($tue)
            ->setWed($wed)
            ->setThu($thu)
            ->setFri($fri)
            ->setSat($sat)
            ->setSun($sun);
    }
    /**
     * Get Time value
     * @return string
     */
    public function getTime(): string
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \Travelport\UniversalRecord\StructType\TypeStartEndTime
     */
    public function setTime(string $time): self
    {
        $this->Time = $time;
        
        return $this;
    }
    /**
     * Get RequirementPassed value
     * @return bool|null
     */
    public function getRequirementPassed(): ?bool
    {
        return $this->RequirementPassed;
    }
    /**
     * Set RequirementPassed value
     * @param bool $requirementPassed
     * @return \Travelport\UniversalRecord\StructType\TypeStartEndTime
     */
    public function setRequirementPassed(?bool $requirementPassed = null): self
    {
        $this->RequirementPassed = $requirementPassed;
        
        return $this;
    }
    /**
     * Get Mon value
     * @return bool|null
     */
    public function getMon(): ?bool
    {
        return $this->Mon;
    }
    /**
     * Set Mon value
     * @param bool $mon
     * @return \Travelport\UniversalRecord\StructType\TypeStartEndTime
     */
    public function setMon(?bool $mon = null): self
    {
        $this->Mon = $mon;
        
        return $this;
    }
    /**
     * Get Tue value
     * @return bool|null
     */
    public function getTue(): ?bool
    {
        return $this->Tue;
    }
    /**
     * Set Tue value
     * @param bool $tue
     * @return \Travelport\UniversalRecord\StructType\TypeStartEndTime
     */
    public function setTue(?bool $tue = null): self
    {
        $this->Tue = $tue;
        
        return $this;
    }
    /**
     * Get Wed value
     * @return bool|null
     */
    public function getWed(): ?bool
    {
        return $this->Wed;
    }
    /**
     * Set Wed value
     * @param bool $wed
     * @return \Travelport\UniversalRecord\StructType\TypeStartEndTime
     */
    public function setWed(?bool $wed = null): self
    {
        $this->Wed = $wed;
        
        return $this;
    }
    /**
     * Get Thu value
     * @return bool|null
     */
    public function getThu(): ?bool
    {
        return $this->Thu;
    }
    /**
     * Set Thu value
     * @param bool $thu
     * @return \Travelport\UniversalRecord\StructType\TypeStartEndTime
     */
    public function setThu(?bool $thu = null): self
    {
        $this->Thu = $thu;
        
        return $this;
    }
    /**
     * Get Fri value
     * @return bool|null
     */
    public function getFri(): ?bool
    {
        return $this->Fri;
    }
    /**
     * Set Fri value
     * @param bool $fri
     * @return \Travelport\UniversalRecord\StructType\TypeStartEndTime
     */
    public function setFri(?bool $fri = null): self
    {
        $this->Fri = $fri;
        
        return $this;
    }
    /**
     * Get Sat value
     * @return bool|null
     */
    public function getSat(): ?bool
    {
        return $this->Sat;
    }
    /**
     * Set Sat value
     * @param bool $sat
     * @return \Travelport\UniversalRecord\StructType\TypeStartEndTime
     */
    public function setSat(?bool $sat = null): self
    {
        $this->Sat = $sat;
        
        return $this;
    }
    /**
     * Get Sun value
     * @return bool|null
     */
    public function getSun(): ?bool
    {
        return $this->Sun;
    }
    /**
     * Set Sun value
     * @param bool $sun
     * @return \Travelport\UniversalRecord\StructType\TypeStartEndTime
     */
    public function setSun(?bool $sun = null): self
    {
        $this->Sun = $sun;
        
        return $this;
    }
}
