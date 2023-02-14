<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Time;
    /**
     * The RequirementPassed
     * Meta information extracted from the WSDL
     * - documentation: When true, the time requirement has been met.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RequirementPassed = null;
    /**
     * The Mon
     * @var bool|null
     */
    protected ?bool $Mon = null;
    /**
     * The Tue
     * @var bool|null
     */
    protected ?bool $Tue = null;
    /**
     * The Wed
     * @var bool|null
     */
    protected ?bool $Wed = null;
    /**
     * The Thu
     * @var bool|null
     */
    protected ?bool $Thu = null;
    /**
     * The Fri
     * @var bool|null
     */
    protected ?bool $Fri = null;
    /**
     * The Sat
     * @var bool|null
     */
    protected ?bool $Sat = null;
    /**
     * The Sun
     * @var bool|null
     */
    protected ?bool $Sun = null;
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
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($requirementPassed) && !is_bool($requirementPassed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requirementPassed, true), gettype($requirementPassed)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($mon) && !is_bool($mon)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mon, true), gettype($mon)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($tue) && !is_bool($tue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tue, true), gettype($tue)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($wed) && !is_bool($wed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wed, true), gettype($wed)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($thu) && !is_bool($thu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($thu, true), gettype($thu)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($fri) && !is_bool($fri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fri, true), gettype($fri)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($sat) && !is_bool($sat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sat, true), gettype($sat)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($sun) && !is_bool($sun)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sun, true), gettype($sun)), __LINE__);
        }
        $this->Sun = $sun;
        
        return $this;
    }
}
