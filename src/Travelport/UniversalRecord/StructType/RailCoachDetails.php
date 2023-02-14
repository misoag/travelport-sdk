<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $RailCoachNumber = null;
    /**
     * The AvailableRailSeats
     * Meta information extracted from the WSDL
     * - documentation: Number of available seats present in this rail coach.
     * @var string|null
     */
    protected ?string $AvailableRailSeats = null;
    /**
     * The RailSeatMapAvailability
     * Meta information extracted from the WSDL
     * - documentation: Indicates if seats are available in this rail coach which can be mapped.
     * @var bool|null
     */
    protected ?bool $RailSeatMapAvailability = null;
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
     * @return \Travelport\UniversalRecord\StructType\RailCoachDetails
     */
    public function setRailCoachNumber(?string $railCoachNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($railCoachNumber) && !is_string($railCoachNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railCoachNumber, true), gettype($railCoachNumber)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailCoachDetails
     */
    public function setAvailableRailSeats(?string $availableRailSeats = null): self
    {
        // validation for constraint: string
        if (!is_null($availableRailSeats) && !is_string($availableRailSeats)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availableRailSeats, true), gettype($availableRailSeats)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailCoachDetails
     */
    public function setRailSeatMapAvailability(?bool $railSeatMapAvailability = null): self
    {
        // validation for constraint: boolean
        if (!is_null($railSeatMapAvailability) && !is_bool($railSeatMapAvailability)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($railSeatMapAvailability, true), gettype($railSeatMapAvailability)), __LINE__);
        }
        $this->RailSeatMapAvailability = $railSeatMapAvailability;
        
        return $this;
    }
}
