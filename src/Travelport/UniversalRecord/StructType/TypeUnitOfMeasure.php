<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?float $Value = null;
    /**
     * The Unit
     * Meta information extracted from the WSDL
     * - documentation: Unit values would be lb,Lb,kg etc.
     * @var string|null
     */
    public ?string $Unit = null;
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
        $this->Unit = $unit;
        
        return $this;
    }
}
