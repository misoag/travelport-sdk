<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailCoachDetails StructType
 * @subpackage Structs
 */
class RailCoachDetails extends AbstractStructBase
{
    /**
     * The RailCoachNumber
     * Meta information extracted from the WSDL
     * - documentation: Rail coach number for the returned coach details.
     * @var string|null
     */
    public ?string $RailCoachNumber = null;
    /**
     * The AvailableRailSeats
     * Meta information extracted from the WSDL
     * - documentation: Number of available seats present in this rail coach.
     * @var string|null
     */
    public ?string $AvailableRailSeats = null;
    /**
     * The RailSeatMapAvailability
     * Meta information extracted from the WSDL
     * - documentation: Indicates if seats are available in this rail coach which can be mapped.
     * @var bool|null
     */
    public ?bool $RailSeatMapAvailability = null;
    /**
     * Constructor method for RailCoachDetails
     * @uses RailCoachDetails::setRailCoachNumber()
     * @uses RailCoachDetails::setAvailableRailSeats()
     * @uses RailCoachDetails::setRailSeatMapAvailability()
     * @param string $railCoachNumber
     * @param string $availableRailSeats
     * @param bool $railSeatMapAvailability
     */
    public function __construct(?string $railCoachNumber = null, ?string $availableRailSeats = null, ?bool $railSeatMapAvailability = null)
    {
        $this
            ->setRailCoachNumber($railCoachNumber)
            ->setAvailableRailSeats($availableRailSeats)
            ->setRailSeatMapAvailability($railSeatMapAvailability);
    }
    /**
     * Get RailCoachNumber value
     * @return string|null
     */
    public function getRailCoachNumber(): ?string
    {
        return $this->RailCoachNumber;
    }
    /**
     * Set RailCoachNumber value
     * @param string $railCoachNumber
     * @return \Travelport\Air\StructType\RailCoachDetails
     */
    public function setRailCoachNumber(?string $railCoachNumber = null): self
    {
        $this->RailCoachNumber = $railCoachNumber;
        
        return $this;
    }
    /**
     * Get AvailableRailSeats value
     * @return string|null
     */
    public function getAvailableRailSeats(): ?string
    {
        return $this->AvailableRailSeats;
    }
    /**
     * Set AvailableRailSeats value
     * @param string $availableRailSeats
     * @return \Travelport\Air\StructType\RailCoachDetails
     */
    public function setAvailableRailSeats(?string $availableRailSeats = null): self
    {
        $this->AvailableRailSeats = $availableRailSeats;
        
        return $this;
    }
    /**
     * Get RailSeatMapAvailability value
     * @return bool|null
     */
    public function getRailSeatMapAvailability(): ?bool
    {
        return $this->RailSeatMapAvailability;
    }
    /**
     * Set RailSeatMapAvailability value
     * @param bool $railSeatMapAvailability
     * @return \Travelport\Air\StructType\RailCoachDetails
     */
    public function setRailSeatMapAvailability(?bool $railSeatMapAvailability = null): self
    {
        $this->RailSeatMapAvailability = $railSeatMapAvailability;
        
        return $this;
    }
}
