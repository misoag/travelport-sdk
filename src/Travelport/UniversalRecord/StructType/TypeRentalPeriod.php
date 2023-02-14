<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRentalPeriod StructType
 * Meta information extracted from the WSDL
 * - documentation: Rental period information concerning minimum and max rental periods.
 * @subpackage Structs
 */
class TypeRentalPeriod extends AbstractStructBase
{
    /**
     * The RentalUnit
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $RentalUnit;
    /**
     * The Length
     * Meta information extracted from the WSDL
     * - documentation: The number of rental units.
     * - use: required
     * @var int
     */
    protected int $Length;
    /**
     * The RequirementPassed
     * Meta information extracted from the WSDL
     * - documentation: If true, the rental period requirements have been met.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RequirementPassed = null;
    /**
     * Constructor method for typeRentalPeriod
     * @uses TypeRentalPeriod::setRentalUnit()
     * @uses TypeRentalPeriod::setLength()
     * @uses TypeRentalPeriod::setRequirementPassed()
     * @param string $rentalUnit
     * @param int $length
     * @param bool $requirementPassed
     */
    public function __construct(string $rentalUnit, int $length, ?bool $requirementPassed = null)
    {
        $this
            ->setRentalUnit($rentalUnit)
            ->setLength($length)
            ->setRequirementPassed($requirementPassed);
    }
    /**
     * Get RentalUnit value
     * @return string
     */
    public function getRentalUnit(): string
    {
        return $this->RentalUnit;
    }
    /**
     * Set RentalUnit value
     * @param string $rentalUnit
     * @return \Travelport\UniversalRecord\StructType\TypeRentalPeriod
     */
    public function setRentalUnit(string $rentalUnit): self
    {
        // validation for constraint: string
        if (!is_null($rentalUnit) && !is_string($rentalUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rentalUnit, true), gettype($rentalUnit)), __LINE__);
        }
        $this->RentalUnit = $rentalUnit;
        
        return $this;
    }
    /**
     * Get Length value
     * @return int
     */
    public function getLength(): int
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param int $length
     * @return \Travelport\UniversalRecord\StructType\TypeRentalPeriod
     */
    public function setLength(int $length): self
    {
        // validation for constraint: int
        if (!is_null($length) && !(is_int($length) || ctype_digit($length))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->Length = $length;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeRentalPeriod
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
}
