<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeDaysOfOperation StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the day(s) of the week to which the time requirement applies.
 * @subpackage Structs
 */
class TypeDaysOfOperation extends AbstractStructBase
{
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
     * Constructor method for typeDaysOfOperation
     * @uses TypeDaysOfOperation::setMon()
     * @uses TypeDaysOfOperation::setTue()
     * @uses TypeDaysOfOperation::setWed()
     * @uses TypeDaysOfOperation::setThu()
     * @uses TypeDaysOfOperation::setFri()
     * @uses TypeDaysOfOperation::setSat()
     * @uses TypeDaysOfOperation::setSun()
     * @param bool $mon
     * @param bool $tue
     * @param bool $wed
     * @param bool $thu
     * @param bool $fri
     * @param bool $sat
     * @param bool $sun
     */
    public function __construct(?bool $mon = null, ?bool $tue = null, ?bool $wed = null, ?bool $thu = null, ?bool $fri = null, ?bool $sat = null, ?bool $sun = null)
    {
        $this
            ->setMon($mon)
            ->setTue($tue)
            ->setWed($wed)
            ->setThu($thu)
            ->setFri($fri)
            ->setSat($sat)
            ->setSun($sun);
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
     * @return \Travelport\Util\StructType\TypeDaysOfOperation
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
     * @return \Travelport\Util\StructType\TypeDaysOfOperation
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
     * @return \Travelport\Util\StructType\TypeDaysOfOperation
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
     * @return \Travelport\Util\StructType\TypeDaysOfOperation
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
     * @return \Travelport\Util\StructType\TypeDaysOfOperation
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
     * @return \Travelport\Util\StructType\TypeDaysOfOperation
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
     * @return \Travelport\Util\StructType\TypeDaysOfOperation
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
