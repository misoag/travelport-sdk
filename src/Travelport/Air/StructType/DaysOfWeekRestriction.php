<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DaysOfWeekRestriction StructType
 * @subpackage Structs
 */
class DaysOfWeekRestriction extends AbstractStructBase
{
    /**
     * The RestrictionExistsInd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $RestrictionExistsInd = null;
    /**
     * The Application
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Application = null;
    /**
     * The IncludeExcludeUseInd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $IncludeExcludeUseInd = null;
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
     * Constructor method for DaysOfWeekRestriction
     * @uses DaysOfWeekRestriction::setRestrictionExistsInd()
     * @uses DaysOfWeekRestriction::setApplication()
     * @uses DaysOfWeekRestriction::setIncludeExcludeUseInd()
     * @uses DaysOfWeekRestriction::setMon()
     * @uses DaysOfWeekRestriction::setTue()
     * @uses DaysOfWeekRestriction::setWed()
     * @uses DaysOfWeekRestriction::setThu()
     * @uses DaysOfWeekRestriction::setFri()
     * @uses DaysOfWeekRestriction::setSat()
     * @uses DaysOfWeekRestriction::setSun()
     * @param bool $restrictionExistsInd
     * @param string $application
     * @param bool $includeExcludeUseInd
     * @param bool $mon
     * @param bool $tue
     * @param bool $wed
     * @param bool $thu
     * @param bool $fri
     * @param bool $sat
     * @param bool $sun
     */
    public function __construct(?bool $restrictionExistsInd = null, ?string $application = null, ?bool $includeExcludeUseInd = null, ?bool $mon = null, ?bool $tue = null, ?bool $wed = null, ?bool $thu = null, ?bool $fri = null, ?bool $sat = null, ?bool $sun = null)
    {
        $this
            ->setRestrictionExistsInd($restrictionExistsInd)
            ->setApplication($application)
            ->setIncludeExcludeUseInd($includeExcludeUseInd)
            ->setMon($mon)
            ->setTue($tue)
            ->setWed($wed)
            ->setThu($thu)
            ->setFri($fri)
            ->setSat($sat)
            ->setSun($sun);
    }
    /**
     * Get RestrictionExistsInd value
     * @return bool|null
     */
    public function getRestrictionExistsInd(): ?bool
    {
        return $this->RestrictionExistsInd;
    }
    /**
     * Set RestrictionExistsInd value
     * @param bool $restrictionExistsInd
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction
     */
    public function setRestrictionExistsInd(?bool $restrictionExistsInd = null): self
    {
        $this->RestrictionExistsInd = $restrictionExistsInd;
        
        return $this;
    }
    /**
     * Get Application value
     * @return string|null
     */
    public function getApplication(): ?string
    {
        return $this->Application;
    }
    /**
     * Set Application value
     * @param string $application
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction
     */
    public function setApplication(?string $application = null): self
    {
        $this->Application = $application;
        
        return $this;
    }
    /**
     * Get IncludeExcludeUseInd value
     * @return bool|null
     */
    public function getIncludeExcludeUseInd(): ?bool
    {
        return $this->IncludeExcludeUseInd;
    }
    /**
     * Set IncludeExcludeUseInd value
     * @param bool $includeExcludeUseInd
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction
     */
    public function setIncludeExcludeUseInd(?bool $includeExcludeUseInd = null): self
    {
        $this->IncludeExcludeUseInd = $includeExcludeUseInd;
        
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
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction
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
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction
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
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction
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
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction
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
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction
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
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction
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
     * @return \Travelport\Air\StructType\DaysOfWeekRestriction
     */
    public function setSun(?bool $sun = null): self
    {
        $this->Sun = $sun;
        
        return $this;
    }
}
