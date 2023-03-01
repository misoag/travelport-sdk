<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?string $Direction = null;
    /**
     * The TripType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TripType = null;
    /**
     * The Monday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Monday = null;
    /**
     * The Tuesday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Tuesday = null;
    /**
     * The Wednesday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Wednesday = null;
    /**
     * The Thursday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Thursday = null;
    /**
     * The Friday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Friday = null;
    /**
     * The Saturday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Saturday = null;
    /**
     * The Sunday
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Sunday = null;
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
     * @param string $direction
     * @return \Travelport\Air\StructType\FareRestrictionDaysOfWeek
     */
    public function setDirection(?string $direction = null): self
    {
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
     * @param string $tripType
     * @return \Travelport\Air\StructType\FareRestrictionDaysOfWeek
     */
    public function setTripType(?string $tripType = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionDaysOfWeek
     */
    public function setMonday(?bool $monday = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionDaysOfWeek
     */
    public function setTuesday(?bool $tuesday = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionDaysOfWeek
     */
    public function setWednesday(?bool $wednesday = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionDaysOfWeek
     */
    public function setThursday(?bool $thursday = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionDaysOfWeek
     */
    public function setFriday(?bool $friday = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionDaysOfWeek
     */
    public function setSaturday(?bool $saturday = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionDaysOfWeek
     */
    public function setSunday(?bool $sunday = null): self
    {
        $this->Sunday = $sunday;
        
        return $this;
    }
}
