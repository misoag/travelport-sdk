<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRestrictionDaysOfWeek StructType
 * Meta information extracted from the WSDL
 * - documentation: Days of the week that the restriction applies too.
 * @subpackage Structs
 */
class FareRestrictionDaysOfWeek extends AbstractStructBase
{
    /**
     * The Direction
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Direction = null;
    /**
     * The TripType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TripType = null;
    /**
     * The Monday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Monday = null;
    /**
     * The Tuesday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Tuesday = null;
    /**
     * The Wednesday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Wednesday = null;
    /**
     * The Thursday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Thursday = null;
    /**
     * The Friday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Friday = null;
    /**
     * The Saturday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Saturday = null;
    /**
     * The Sunday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Sunday = null;
    /**
     * Constructor method for FareRestrictionDaysOfWeek
     * @uses FareRestrictionDaysOfWeek::setDirection()
     * @uses FareRestrictionDaysOfWeek::setTripType()
     * @uses FareRestrictionDaysOfWeek::setMonday()
     * @uses FareRestrictionDaysOfWeek::setTuesday()
     * @uses FareRestrictionDaysOfWeek::setWednesday()
     * @uses FareRestrictionDaysOfWeek::setThursday()
     * @uses FareRestrictionDaysOfWeek::setFriday()
     * @uses FareRestrictionDaysOfWeek::setSaturday()
     * @uses FareRestrictionDaysOfWeek::setSunday()
     * @param string $direction
     * @param string $tripType
     * @param bool $monday
     * @param bool $tuesday
     * @param bool $wednesday
     * @param bool $thursday
     * @param bool $friday
     * @param bool $saturday
     * @param bool $sunday
     */
    public function __construct(?string $direction = null, ?string $tripType = null, ?bool $monday = null, ?bool $tuesday = null, ?bool $wednesday = null, ?bool $thursday = null, ?bool $friday = null, ?bool $saturday = null, ?bool $sunday = null)
    {
        $this
            ->setDirection($direction)
            ->setTripType($tripType)
            ->setMonday($monday)
            ->setTuesday($tuesday)
            ->setWednesday($wednesday)
            ->setThursday($thursday)
            ->setFriday($friday)
            ->setSaturday($saturday)
            ->setSunday($sunday);
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareDirectionality::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareDirectionality::getValidValues()
     * @throws InvalidArgumentException
     * @param string $direction
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFareDirectionality::valueIsValid($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFareDirectionality', is_array($direction) ? implode(', ', $direction) : var_export($direction, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFareDirectionality::getValidValues())), __LINE__);
        }
        $this->Direction = $direction;
        
        return $this;
    }
    /**
     * Get TripType value
     * @return string|null
     */
    public function getTripType(): ?string
    {
        return $this->TripType;
    }
    /**
     * Set TripType value
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareTripType::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareTripType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tripType
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek
     */
    public function setTripType(?string $tripType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFareTripType::valueIsValid($tripType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFareTripType', is_array($tripType) ? implode(', ', $tripType) : var_export($tripType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFareTripType::getValidValues())), __LINE__);
        }
        $this->TripType = $tripType;
        
        return $this;
    }
    /**
     * Get Monday value
     * @return bool|null
     */
    public function getMonday(): ?bool
    {
        return $this->Monday;
    }
    /**
     * Set Monday value
     * @param bool $monday
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek
     */
    public function setMonday(?bool $monday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($monday) && !is_bool($monday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($monday, true), gettype($monday)), __LINE__);
        }
        $this->Monday = $monday;
        
        return $this;
    }
    /**
     * Get Tuesday value
     * @return bool|null
     */
    public function getTuesday(): ?bool
    {
        return $this->Tuesday;
    }
    /**
     * Set Tuesday value
     * @param bool $tuesday
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek
     */
    public function setTuesday(?bool $tuesday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tuesday) && !is_bool($tuesday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tuesday, true), gettype($tuesday)), __LINE__);
        }
        $this->Tuesday = $tuesday;
        
        return $this;
    }
    /**
     * Get Wednesday value
     * @return bool|null
     */
    public function getWednesday(): ?bool
    {
        return $this->Wednesday;
    }
    /**
     * Set Wednesday value
     * @param bool $wednesday
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek
     */
    public function setWednesday(?bool $wednesday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($wednesday) && !is_bool($wednesday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wednesday, true), gettype($wednesday)), __LINE__);
        }
        $this->Wednesday = $wednesday;
        
        return $this;
    }
    /**
     * Get Thursday value
     * @return bool|null
     */
    public function getThursday(): ?bool
    {
        return $this->Thursday;
    }
    /**
     * Set Thursday value
     * @param bool $thursday
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek
     */
    public function setThursday(?bool $thursday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($thursday) && !is_bool($thursday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($thursday, true), gettype($thursday)), __LINE__);
        }
        $this->Thursday = $thursday;
        
        return $this;
    }
    /**
     * Get Friday value
     * @return bool|null
     */
    public function getFriday(): ?bool
    {
        return $this->Friday;
    }
    /**
     * Set Friday value
     * @param bool $friday
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek
     */
    public function setFriday(?bool $friday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($friday) && !is_bool($friday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($friday, true), gettype($friday)), __LINE__);
        }
        $this->Friday = $friday;
        
        return $this;
    }
    /**
     * Get Saturday value
     * @return bool|null
     */
    public function getSaturday(): ?bool
    {
        return $this->Saturday;
    }
    /**
     * Set Saturday value
     * @param bool $saturday
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek
     */
    public function setSaturday(?bool $saturday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($saturday) && !is_bool($saturday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saturday, true), gettype($saturday)), __LINE__);
        }
        $this->Saturday = $saturday;
        
        return $this;
    }
    /**
     * Get Sunday value
     * @return bool|null
     */
    public function getSunday(): ?bool
    {
        return $this->Sunday;
    }
    /**
     * Set Sunday value
     * @param bool $sunday
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek
     */
    public function setSunday(?bool $sunday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sunday) && !is_bool($sunday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sunday, true), gettype($sunday)), __LINE__);
        }
        $this->Sunday = $sunday;
        
        return $this;
    }
}
