<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Distance StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to encapsulate the a distance value with its unit of measure.
 * - type: xs:integer
 * - use: optional
 * @subpackage Structs
 */
class Distance extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public int $Value;
    /**
     * The Units
     * Meta information extracted from the WSDL
     * - default: MI
     * - use: optional
     * @var string|null
     */
    public ?string $Units = null;
    /**
     * The Direction
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * @var string|null
     */
    public ?string $Direction = null;
    /**
     * Constructor method for Distance
     * @uses Distance::setValue()
     * @uses Distance::setUnits()
     * @uses Distance::setDirection()
     * @param int $value
     * @param string $units
     * @param string $direction
     */
    public function __construct(int $value, ?string $units = 'MI', ?string $direction = null)
    {
        $this
            ->setValue($value)
            ->setUnits($units)
            ->setDirection($direction);
    }
    /**
     * Get Value value
     * @return int
     */
    public function getValue(): int
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param int $value
     * @return \Travelport\Hotel\StructType\Distance
     */
    public function setValue(int $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get Units value
     * @return string|null
     */
    public function getUnits(): ?string
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @param string $units
     * @return \Travelport\Hotel\StructType\Distance
     */
    public function setUnits(?string $units = 'MI'): self
    {
        $this->Units = $units;
        
        return $this;
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
     * @return \Travelport\Hotel\StructType\Distance
     */
    public function setDirection(?string $direction = null): self
    {
        $this->Direction = $direction;
        
        return $this;
    }
}
