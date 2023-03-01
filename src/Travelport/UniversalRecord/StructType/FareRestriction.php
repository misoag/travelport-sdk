<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRestriction StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Restriction
 * @subpackage Structs
 */
class FareRestriction extends AbstractStructBase
{
    /**
     * The FareRestrictionDaysOfWeek
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: FareRestrictionDaysOfWeek
     * @var \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek[]
     */
    public ?array $FareRestrictionDaysOfWeek = null;
    /**
     * The FareRestrictionDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRestrictionDate
     * @var \Travelport\UniversalRecord\StructType\FareRestrictionDate[]
     */
    public ?array $FareRestrictionDate = null;
    /**
     * The FareRestrictionSaleDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRestrictionSaleDate
     * @var \Travelport\UniversalRecord\StructType\FareRestrictionSaleDate|null
     */
    public ?\Travelport\UniversalRecord\StructType\FareRestrictionSaleDate $FareRestrictionSaleDate = null;
    /**
     * The FareRestrictionSeasonal
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRestrictionSeasonal
     * @var \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal[]
     */
    public ?array $FareRestrictionSeasonal = null;
    /**
     * The FareRestrictiontype
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $FareRestrictiontype = null;
    /**
     * Constructor method for FareRestriction
     * @uses FareRestriction::setFareRestrictionDaysOfWeek()
     * @uses FareRestriction::setFareRestrictionDate()
     * @uses FareRestriction::setFareRestrictionSaleDate()
     * @uses FareRestriction::setFareRestrictionSeasonal()
     * @uses FareRestriction::setFareRestrictiontype()
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek[] $fareRestrictionDaysOfWeek
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionDate[] $fareRestrictionDate
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionSaleDate $fareRestrictionSaleDate
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal[] $fareRestrictionSeasonal
     * @param string $fareRestrictiontype
     */
    public function __construct(?array $fareRestrictionDaysOfWeek = null, ?array $fareRestrictionDate = null, ?\Travelport\UniversalRecord\StructType\FareRestrictionSaleDate $fareRestrictionSaleDate = null, ?array $fareRestrictionSeasonal = null, ?string $fareRestrictiontype = null)
    {
        $this
            ->setFareRestrictionDaysOfWeek($fareRestrictionDaysOfWeek)
            ->setFareRestrictionDate($fareRestrictionDate)
            ->setFareRestrictionSaleDate($fareRestrictionSaleDate)
            ->setFareRestrictionSeasonal($fareRestrictionSeasonal)
            ->setFareRestrictiontype($fareRestrictiontype);
    }
    /**
     * Get FareRestrictionDaysOfWeek value
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek[]
     */
    public function getFareRestrictionDaysOfWeek(): ?array
    {
        return $this->FareRestrictionDaysOfWeek;
    }
    /**
     * Set FareRestrictionDaysOfWeek value
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek[] $fareRestrictionDaysOfWeek
     * @return \Travelport\UniversalRecord\StructType\FareRestriction
     */
    public function setFareRestrictionDaysOfWeek(?array $fareRestrictionDaysOfWeek = null): self
    {
        $this->FareRestrictionDaysOfWeek = $fareRestrictionDaysOfWeek;
        
        return $this;
    }
    /**
     * Add item to FareRestrictionDaysOfWeek value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek $item
     * @return \Travelport\UniversalRecord\StructType\FareRestriction
     */
    public function addToFareRestrictionDaysOfWeek(\Travelport\UniversalRecord\StructType\FareRestrictionDaysOfWeek $item): self
    {
        $this->FareRestrictionDaysOfWeek[] = $item;
        
        return $this;
    }
    /**
     * Get FareRestrictionDate value
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionDate[]
     */
    public function getFareRestrictionDate(): ?array
    {
        return $this->FareRestrictionDate;
    }
    /**
     * Set FareRestrictionDate value
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionDate[] $fareRestrictionDate
     * @return \Travelport\UniversalRecord\StructType\FareRestriction
     */
    public function setFareRestrictionDate(?array $fareRestrictionDate = null): self
    {
        $this->FareRestrictionDate = $fareRestrictionDate;
        
        return $this;
    }
    /**
     * Add item to FareRestrictionDate value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionDate $item
     * @return \Travelport\UniversalRecord\StructType\FareRestriction
     */
    public function addToFareRestrictionDate(\Travelport\UniversalRecord\StructType\FareRestrictionDate $item): self
    {
        $this->FareRestrictionDate[] = $item;
        
        return $this;
    }
    /**
     * Get FareRestrictionSaleDate value
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSaleDate|null
     */
    public function getFareRestrictionSaleDate(): ?\Travelport\UniversalRecord\StructType\FareRestrictionSaleDate
    {
        return $this->FareRestrictionSaleDate;
    }
    /**
     * Set FareRestrictionSaleDate value
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionSaleDate $fareRestrictionSaleDate
     * @return \Travelport\UniversalRecord\StructType\FareRestriction
     */
    public function setFareRestrictionSaleDate(?\Travelport\UniversalRecord\StructType\FareRestrictionSaleDate $fareRestrictionSaleDate = null): self
    {
        $this->FareRestrictionSaleDate = $fareRestrictionSaleDate;
        
        return $this;
    }
    /**
     * Get FareRestrictionSeasonal value
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal[]
     */
    public function getFareRestrictionSeasonal(): ?array
    {
        return $this->FareRestrictionSeasonal;
    }
    /**
     * Set FareRestrictionSeasonal value
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal[] $fareRestrictionSeasonal
     * @return \Travelport\UniversalRecord\StructType\FareRestriction
     */
    public function setFareRestrictionSeasonal(?array $fareRestrictionSeasonal = null): self
    {
        $this->FareRestrictionSeasonal = $fareRestrictionSeasonal;
        
        return $this;
    }
    /**
     * Add item to FareRestrictionSeasonal value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal $item
     * @return \Travelport\UniversalRecord\StructType\FareRestriction
     */
    public function addToFareRestrictionSeasonal(\Travelport\UniversalRecord\StructType\FareRestrictionSeasonal $item): self
    {
        $this->FareRestrictionSeasonal[] = $item;
        
        return $this;
    }
    /**
     * Get FareRestrictiontype value
     * @return string|null
     */
    public function getFareRestrictiontype(): ?string
    {
        return $this->FareRestrictiontype;
    }
    /**
     * Set FareRestrictiontype value
     * @param string $fareRestrictiontype
     * @return \Travelport\UniversalRecord\StructType\FareRestriction
     */
    public function setFareRestrictiontype(?string $fareRestrictiontype = null): self
    {
        $this->FareRestrictiontype = $fareRestrictiontype;
        
        return $this;
    }
}
