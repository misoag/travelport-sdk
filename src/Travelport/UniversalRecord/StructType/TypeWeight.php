<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeWeight StructType
 * @subpackage Structs
 */
class TypeWeight extends AbstractStructBase
{
    /**
     * The Value
     * @var int|null
     */
    protected ?int $Value = null;
    /**
     * The Unit
     * @var string|null
     */
    protected ?string $Unit = null;
    /**
     * Constructor method for typeWeight
     * @uses TypeWeight::setValue()
     * @uses TypeWeight::setUnit()
     * @param int $value
     * @param string $unit
     */
    public function __construct(?int $value = null, ?string $unit = null)
    {
        $this
            ->setValue($value)
            ->setUnit($unit);
    }
    /**
     * Get Value value
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param int $value
     * @return \Travelport\UniversalRecord\StructType\TypeWeight
     */
    public function setValue(?int $value = null): self
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get Unit value
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @uses \Travelport\UniversalRecord\EnumType\TypeUnitWeight::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeUnitWeight::getValidValues()
     * @throws InvalidArgumentException
     * @param string $unit
     * @return \Travelport\UniversalRecord\StructType\TypeWeight
     */
    public function setUnit(?string $unit = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeUnitWeight::valueIsValid($unit)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeUnitWeight', is_array($unit) ? implode(', ', $unit) : var_export($unit, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeUnitWeight::getValidValues())), __LINE__);
        }
        $this->Unit = $unit;
        
        return $this;
    }
}
