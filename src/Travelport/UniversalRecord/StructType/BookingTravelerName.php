<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingTravelerName StructType
 * Meta information extracted from the WSDL
 * - documentation: Complete name fields
 * @subpackage Structs
 */
class BookingTravelerName extends AbstractStructBase
{
    /**
     * The Last
     * Meta information extracted from the WSDL
     * - documentation: Last Name. | Type for Traveler Last Name.
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - type: typeTravelerLastName
     * - use: required
     * @var string
     */
    public string $Last;
    /**
     * The Prefix
     * @var string|null
     */
    public ?string $Prefix = null;
    /**
     * The First
     * @var string|null
     */
    public ?string $First = null;
    /**
     * The Middle
     * @var string|null
     */
    public ?string $Middle = null;
    /**
     * The Suffix
     * @var string|null
     */
    public ?string $Suffix = null;
    /**
     * Constructor method for BookingTravelerName
     * @uses BookingTravelerName::setLast()
     * @uses BookingTravelerName::setPrefix()
     * @uses BookingTravelerName::setFirst()
     * @uses BookingTravelerName::setMiddle()
     * @uses BookingTravelerName::setSuffix()
     * @param string $last
     * @param string $prefix
     * @param string $first
     * @param string $middle
     * @param string $suffix
     */
    public function __construct(string $last, ?string $prefix = null, ?string $first = null, ?string $middle = null, ?string $suffix = null)
    {
        $this
            ->setLast($last)
            ->setPrefix($prefix)
            ->setFirst($first)
            ->setMiddle($middle)
            ->setSuffix($suffix);
    }
    /**
     * Get Last value
     * @return string
     */
    public function getLast(): string
    {
        return $this->Last;
    }
    /**
     * Set Last value
     * @param string $last
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerName
     */
    public function setLast(string $last): self
    {
        $this->Last = $last;
        
        return $this;
    }
    /**
     * Get Prefix value
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->Prefix;
    }
    /**
     * Set Prefix value
     * @param string $prefix
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerName
     */
    public function setPrefix(?string $prefix = null): self
    {
        $this->Prefix = $prefix;
        
        return $this;
    }
    /**
     * Get First value
     * @return string|null
     */
    public function getFirst(): ?string
    {
        return $this->First;
    }
    /**
     * Set First value
     * @param string $first
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerName
     */
    public function setFirst(?string $first = null): self
    {
        $this->First = $first;
        
        return $this;
    }
    /**
     * Get Middle value
     * @return string|null
     */
    public function getMiddle(): ?string
    {
        return $this->Middle;
    }
    /**
     * Set Middle value
     * @param string $middle
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerName
     */
    public function setMiddle(?string $middle = null): self
    {
        $this->Middle = $middle;
        
        return $this;
    }
    /**
     * Get Suffix value
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->Suffix;
    }
    /**
     * Set Suffix value
     * @param string $suffix
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerName
     */
    public function setSuffix(?string $suffix = null): self
    {
        $this->Suffix = $suffix;
        
        return $this;
    }
}
