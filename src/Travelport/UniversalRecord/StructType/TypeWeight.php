<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?int $Value = null;
    /**
     * The Unit
     * @var string|null
     */
    public ?string $Unit = null;
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
     * @return \Travelport\UniversalRecord\StructType\TypeWeight
     */
    public function setUnit(?string $unit = null): self
    {
        $this->Unit = $unit;
        
        return $this;
    }
}
