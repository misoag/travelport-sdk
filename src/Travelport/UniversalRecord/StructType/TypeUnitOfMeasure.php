<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeUnitOfMeasure StructType
 * @subpackage Structs
 */
class TypeUnitOfMeasure extends AbstractStructBase
{
    /**
     * The Value
     * @var float|null
     */
    protected ?float $Value = null;
    /**
     * The Unit
     * Meta information extracted from the WSDL
     * - documentation: Unit values would be lb,Lb,kg etc.
     * @var string|null
     */
    protected ?string $Unit = null;
    /**
     * Constructor method for typeUnitOfMeasure
     * @uses TypeUnitOfMeasure::setValue()
     * @uses TypeUnitOfMeasure::setUnit()
     * @param float $value
     * @param string $unit
     */
    public function __construct(?float $value = null, ?string $unit = null)
    {
        $this
            ->setValue($value)
            ->setUnit($unit);
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Travelport\UniversalRecord\StructType\TypeUnitOfMeasure
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
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
     * @param string $unit
     * @return \Travelport\UniversalRecord\StructType\TypeUnitOfMeasure
     */
    public function setUnit(?string $unit = null): self
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        $this->Unit = $unit;
        
        return $this;
    }
}
